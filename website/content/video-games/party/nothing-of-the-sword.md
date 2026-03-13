---
title: "Nothing Of The Sword!"
categories: ["video-games"]
tags: ["local-multiplayer"]
language: "en"
progress: 1
---

A platformer + swordfighting/fencing game. 2D Side-view. Other players are sliced _realistically_ upon contact with your sword. (So I use that `Geometry2D` algorithm of mine to detect how to cut the physics body into two separate ones precisely along the cut.)

## Players

Each player is a *body* with a few *limbs* attached.

-   The body is actually controlled (and is probably kinematic?)
-   The limbs are attached with physics joints. (I'd need some Reverse Kinematics to properly position all the parts based on where you point?)

When someone extends their sword into your shape, it's cut in two.

-   Hitting a limb simply makes it shorter. (The sword is held at the *furthest* point on your arm.)
-   Hitting your main body immediately kills you??

When you go into *turtle mode*, those limbs protract. You can't attack, but others can't cut off your arm.

## Ideas / Improvements

Obviously, there should be things dangling from ropes (or parts with a draw bridge), which you can cut. EVERYTHING in this game is done by swinging a sword and slicing stuff around you.

These are the improvements/challenges I want to make in regards to my previous games using *slicing*.

-   Add physics *joints* to the game. This means ropes to cut, limbs attached to other bodies, etc.
-   Find a way to *texture* the sliced-off pieces. (So I can actually make everything look good and realistic.)
-   Build *everything* on the sliceable mechanic, no exceptions. This way we can fully utilize this possibility. This also means writing the code in a smart, clean way.


## Controls

### Keyboard

**Arrow keys:**

-   Left = move left
-   Right = move right
-   Up = jump
-   Down = *turtle mode*

**One button:** extend sword (in direction arrow keys are pointing)

### Controller

**Joystick:**

-   Move left/right
-   Point up = *autojump?*
-   Point down = *turtle mode*

**One button:** jump

**Another button:** extend sword (in direction joystick is pointing).



Alternative titles:

-   Swording Matters
-   Sword your Priorities
-   **Swordlived** => actually sounds elegant and meaningful
-   **Sword it Out** => good pun, give more party vibe
