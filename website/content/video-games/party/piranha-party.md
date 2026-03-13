---
title: "Piranhy Party"
categories: ["video-games"]
tags: ["party", "one-button-games"]
language: "en"
progress: 3
---

A very simple local multiplayer game. (Not cooperative, though team-based is fine I guess.)

A **one button game** about trying to stay alive in wild water currents, while trying to bump into your enemies to make them drown/land in the water.

## Map

* The map is some random location that's mostly filled with water. (Some spots will be filled with other stuff, or just be inaccessible in general, etcetera.)
* All players are inside those **"raging rapids" boats**
* The water has **currents**. 
  * It's subdivided into a grid, and each cell has a simple direction. 
  * We can use this algorithm I found long ago for wind directions/curves on a Perlin noise map, in the "In The Same Boat" game, right?

## Gameplay

* Your boat simply **follows the currents** + rotates with them. 
* If you **press your button**, however, you move + rotate in _reverse_ (against the currents).
* All boats have a SAFE SIDE and a BAD SIDE. The goal is to hit someone's BAD SIDE with your SAFE SIDE to remove a life.

## Goal

Kill all enemies; last one standing wins.


**@IDEA:** Water guns/shooting your enemies could be a thing. But to keep it one button, you'll only shoot if you pass over a "SHOOT" cell or something.
* You either automatically shoot for the whole duration you're on that thing. It, however, also drifts according to a _different_ (hidden) flow map.
* Or you shoot by pressing that button. (Which means you CAN'T reverse when on top of such cells.)

## Implementation Ideas

* Divide grid into cells.
* Use 3D perlin noise => 
  * The 2D part determines the value of that cell (-1,1), which is converted to an angle.
  * The Z parameter is nudged slightly over time, to _change_ the currents (in a smooth way) over time.
  * Randomly flip cells on their head to create "sinks" or "hotspots" that do something strange.
* ALTERNATIVE "flow map" generation
  * Calculate dX to cell on the right and dY to cell below (on noise map, not actual coordinates of course.)
  * Combine and rotate 90 degrees => (dY, -dX)
  * That's your flow vector! (perhaps once normalized and such)