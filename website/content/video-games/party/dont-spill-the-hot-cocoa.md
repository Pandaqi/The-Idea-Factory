---
title: "Don't Spill The Hot Cocoa"
categories: ["video-games"]
tags: ["party", "friendslop", "local-multiplayer", "online-multiplayer"]
language: "en"
progress: 2
---


Friendslop coop about **carrying a glass of hot chocolate milk that's waaaaay too full**. (Like my little sister always does.)

## Gameplay

* You have one big glass. A simple physics simulation simulates fluid inside of it. 
* All players carry one corner/part of that glass.
  * With 3+ players, it's probably more doable if it's a CAULDRON and there's these wooden beams sticking out that attach to players.
  * With 2 players, I suppose both players could just be on opposite sides of the glass, it average between them.
* You must walk over obstacles and such, which will inevitably tilt the glass, and try to **spill as little as possible**

## Controls

* WASD/Joystick = move
* A = JUMP
* B = ROTATE -> your anchor point with the glass _rotates_, which is the only way to prevent it from spilling on steep inclines and such.



## How to simulate the Fluid

This one is easy with the Rapier library (and `Fluid3D`): <https://godot.rapier.rs/docs/documentation/fluids/>

## How to make it look like a single fluid

**Research in Dutch, for some reason, sorry!**

Om Rapier Fluid3D (of de deeltjesposities uit de Rapier physics engine) te renderen als vloeiend, realistisch water in plaats van losse bolletjes, gebruik je een techniek genaamd Screen-Space Fluid Rendering via een shader.
Omdat Three.js, Babylon.js en Godot de deeltjes standaard via instanting renderen (zoals een MultiMeshInstance of InstancedMesh), zien ze eruit als zand of knikkers. Een smooth water shader lost dit op door de deeltjes in screen-space te vervagen en te verlichten. [1] (https://godot.rapier.rs/docs/documentation/fluids/), [2] (https://godot.rapier.rs/docs/tutorial/create-a-fluid/)
Dit is het stappenplan en de shader-logica om dit te implementeren in een WebGL/Three.js-omgeving of game engine.

Het 3-Stappen Renderproces (Screen-Space Fluid)

Om een vloeibaar effect te krijgen, render je de scene niet direct naar het scherm, maar gebruik je Post-Processing met drie opeenvolgende passes:

1. Depth & Thickness Pass (Deeltjes Renderen)

Je tekent alle Rapier-vloeistofdeeltjes naar een aparte render-texture.
• Depth Map: Render de deeltjes als 3D-spheres (bollen) in een depth buffer.
• Thickness Map: Teken de deeltjes met additieve blending (transparant over elkaar heen) in een aparte texture. Hoe meer deeltjes op elkaar liggen, hoe dikker (en dus donkerder/ondoorzichtiger) het water daar is.

2. Bilateral Blur Pass (Vervagen)

Als je de depth map direct bekijkt, zie je nog steeds contouren van bollen. Je moet deze depth map vervagen om ze te versmelten tot één vloeibaar oppervlak.
• Belangrijk: Gebruik een Bilateral Filter (edge-preserving blur). Een normale Gaussian blur vervaagt de buitenste randen van het water in de achtergrond. Een bilateral filter kijkt naar het diepteverschil: als het diepteverschil tussen twee pixels te groot is (een rand), vervaagt hij niet. Hierdoor versmelten de deeltjes onderling, maar behoud je strakke waterranden.

3. De Water Shader Pass (Shading & Verlichting)

Nu transformeer je de vloeiende dieptekaart naar echt water. In je uiteindelijke fragment shader doe je het volgende:
• Normals Berekenen: Reconstrueer de 3D-oppervlaktenormaal (N) direct vanuit de vervaagde depth map met behulp van de omliggende pixels (verandering in X en Y):glsl
vec3 normal = normalize(vec3(depth_right - depth_left, depth_bottom - depth_top, 2.0 * texelSize));
Wees voorzichtig met code.
• Fresnel Effect: Bereken de reflectie vs. refractie op basis van de kijkhoek. Recht van boven kijk je in het water, onder een scherpe hoek reflecteert het water de lucht. [1] (https://blenderartists.org/t/id-like-to-improve-the-water-shader-in-this-scene/1385105), [2] (https://www.youtube.com/watch?v=bEpvG3Q79JQ)
• Refractie (Breking): Gebruik de berekende normal om de UV-coördinaten van je achtergrond-texture (de scene achter het water) licht te verschuiven (distortie). [1] (https://www.youtube.com/watch?v=8TO5Q-rwHLs), [2] (https://www.youtube.com/watch?v=1yevpCAA_rU)
• MatCap of Environment Lighting: Pas Specular highlights (glans) toe op basis van je lichtbron en de berekende normaal om het water een nat, glanzend uiterlijk te geven. [1] (https://www.facebook.com/LevelEighty/videos/this-impressive-pixelated-water-shader-by-3d-artist-tanner-has-three-moving-text/1687319689007488/), [2] (https://www.youtube.com/watch?v=1yevpCAA_rU)

Voorbeeld GLSL Code: Bilateral Depth Blur (Stap 2)

Dit is de cruciale shader-stap die de Rapier-bolletjes "vloeibaar" maakt.
glsl
uniform sampler2D depthTex;
uniform vec2 filterDirection; // bijv. vec2(1.0/width, 0.0) of vec2(0.0, 1.0/height)
varying vec2 vUv;

const float blurRadius = 5.0;
const float depthThreshold = 0.05; // Voorkomt dat randen vervagen met de achtergrond

void main() {
    float centerDepth = texture2D(depthTex, vUv).r;
    if (centerDepth == 0.0) discard; // Geen deeltjes hier

    float blurResult = 0.0;
    float totalWeight = 0.0;

    for (float x = -blurRadius; x <= blurRadius; x += 1.0) {
        vec2 offset = vUv + filterDirection * x;
        float sampleDepth = texture2D(depthTex, offset).r;

        // Bereken gewicht op basis van afstand én diepteverschil
        float spatialWeight = exp(-x*x / (2.0 * blurRadius * blurRadius));
        float depthDiff = abs(sampleDepth - centerDepth);
        float depthWeight = exp(-depthDiff * depthDiff / (2.0 * depthThreshold * depthThreshold));
        
        float weight = spatialWeight * depthWeight;
        
        blurResult += sampleDepth * weight;
        totalWeight += weight;
    }

    gl_FragColor = vec4(vec3(blurResult / totalWeight), 1.0);
}
Wees voorzichtig met code.

Handige libraries en alternatieven

Als je dit niet volledig zelf in ruwe WebGL wilt schrijven, kun je gebruikmaken van bestaande implementaties die je kunt voeden met de Rapier-coördinaten:
1. Three.js / React Three Fiber: Zoek naar implementaties van Screen Space Fluid Rendering (SSFR). Je kunt de Rapier-deeltjesposities (world.fluid3d of handmatig uitgelezen buffers) in een THREE.InstancedMesh stoppen en deze mesh uitsluitend renderen in de custom Depth/Thickness post-processing passes.
2. Godot Engine (indien je de Godot-Rapier plugin gebruikt): De Rapier-plugin voor Godot levert vaak een Fluid3DShaderRenderer mee. Mocht je een custom look willen, activeer dan de Thickness en Depth buffers in een SubViewport en leg daar een spatial shader overheen die via SCREEN_TEXTURE en DEPTH_TEXTURE de normals reconstrueert. [1] (https://godot.rapier.rs/docs/documentation/fluids/), [2] (https://gameidea.org/2026/02/01/creating-a-stylized-3d-water-shader/)
Laat gerust weten binnen welk framework of engine (zoals Three.js, React Three Fiber of Godot) je werkt en of je hulp nodig hebt bij de exacte setup van de render-targets!
