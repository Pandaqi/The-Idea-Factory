---
title: "Duck Division"
categories: ["video-games"]
tags: ["sports", "party"]
language: "en"
progress: 4
---

A sports game where the players are ducks and you're playing in an arena that's halfway under water. Use buoyancy (water forces and dynamics) for fun ways to move around and hit the ball!

## Map / Field

You're looking at the field from the *side*. (Flat 2D view.)

The field is a *pool / lake / body of water*. The water line is halfway (although we can obviously make that dynamic and move it).

The players are *ducks*.

## Objective

Simplified version of soccer. (Goals on either side.)

You guessed it:

- The ball/ducks move differently under water than above.
- You must use the **water power/buoyancy** to navigate in fun ways!

## Controls

- Thrust (move in forward facing direction).
- Fly (jumps up when in the water, keeps you floating when in the air)

You can't manually rotate?

Might be too hard/annoying. Can always use joystick for full aim, and two buttons (rotate left/rotate right) on keyboard.

So, on keyboard:

- Arrow left = rotate left
- Arrow right = rotate right
- Arrow up = fly/float
- Arrow down = thrust

## How to make it more interesting?

- Ducks can only stay underwater for so long.
- They need to "recharge" their thrust/flying abilities. (Either by being under water or not. Or maybe there are "snacks" in the water for them to eat.)
- There are two types of ducks to play: Dabblers and Divers.
    - Dabblers = can't stay underwater long, but better floating/flying (very buoyant)
    - Divers = can stay underwater much longer, but less capability when flying (not so buoyant)

**Simplify:** ducks have an "oxygen" meter. It refills when in the air. It's *used* when doing a big action (thrust, jump, float).

This way, you'll automatically run out when underwater (after some time), but also can't fly/thrust indefinitely.

"Snacks" will refill oxygen, permanently make it bigger, or simply increase other parameters (such as move speed).

## Snacks

These are all *fishes*.

- It's thematic
- It allows them to be more dynamic
- It gives players an incentive to be more in the water, even if it's slower/harder/more difficult.

Some ideas:

* **Quicker oxygen refill / Slower oxygen usage**
* **More powerful dash**
* **Quicker rotation**
* **More powerful jump**
* **Grow/Shrink**
* **Heavier/Lighter** ( = you sink more quickly, but also add more power into the ball)

## Resources

Godot Shader Playground: <https://github.com/gtibo/Shader-playground>

Soft body simulation (not necessarily for this project, still interesting): <https://www.reddit.com/r/godot/comments/v9tacy/got_my_soft_body_simulation_working_with_the/ibys3ii/>

Pivot Caching (vertex shader technique for great wobbly trees): <https://www.youtube.com/watch?v=V1nkv8g-oi0>

### Fonts

Font used: **Signika One Negative**

Alternatives:

<https://fonts.google.com/specimen/Fjalla+One?preview.text=Duck%20Division&preview.text_type=custom>

<https://fonts.google.com/specimen/Kanit>

<https://fonts.google.com/specimen/Anton>

<https://fonts.google.com/specimen/Oxygen> => also thematically nice

<https://fonts.google.com/specimen/Karla> => good second place

<https://fonts.google.com/specimen/Libre+Bodoni> => nice numbers, but otherwise not fitting

Nice font list: <https://fontesk.com/tag/playful/page/2/?license=free-for-commercial-use>