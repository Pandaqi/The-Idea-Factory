---
title: "Down To The (Last) Wire"
categories: ["video-games"]
tags: ["party"]
language: "en"
progress: 1
---

**A local multiplayer (party) game. You are birds sitting on (electric) wires in the sky. Your goal is to eliminate opponents by either electrocuting them or making them fall off.**

Of course, the wires could also be clothes lines, or anything else "wiry". Maybe electric wires are just *one* arena.

I think **2D (side view)** is easiest. 

Although it does mean you lose a bit of the perspective from "sitting on wires in the sky". In 3D, you could actually *see* the height difference and have more spatial movement.

One of the games that inspired it: <https://frydev.itch.io/on-the-wire>

## Requirement #1: Physics

It should be completely regulated by physics.

-   The lines themselves are just ropes. (Lots of tiny pieces glued together with loose joints.)
-   Flying (controlled), being pushed away, falling, etcetera all physics.
-   You can *fall through* lines (make them "one-way" or "conditional") to get to another above or below.

## Requirement #2: Varied wires

The wires can vary in:

-   **Number.** (It should be possible to have *multiple* wires per map.)
-   **Type.** (Electric wires electrocute you, clothes lines sway *a lot* in the wind, ice lines where you continuously slide, etcetera)
-   **Direction.** (Wires don't just go horizontal, they might also go vertical or diagonal.)

In general, you should snap to wires (grabbing them with your claws), and they are a **resting point**. Because ...

## Requirement #3: Stamina and more

There needs to be *some* reason why you can't just fly anywhere, avoid any danger, until the end of time.

Some ideas:

-   **Stamina (reason to stop moving):** you can only rest while sitting on a wire. The lower your stamina, the slower and less controlled you fly. If you run out of it, you simply fall down and die.
-   **Dangers (reason to start moving):** wires can change (electrocute, cut loose, wnd that forces you off)
-   **?? (reason to stop moving):** ??
-   **Food (reason to start moving):** food only appears at specific locations (on "floor/ground", smaller birds settling somewhere)
-   **Eggs (reason to keep moving):** eggs drop out of your butt. These *also* interact with wires and physics. When an egg falls off-screen (or is destroyed in another way), it's lost.
    -   Conserving your eggs (perhaps until they hatch) gives you bonuses
    -   Losing them, well, loses those bonuses
    -   Might also be a unique game mode => safely guide the most eggs
