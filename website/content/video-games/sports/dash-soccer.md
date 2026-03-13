---
title: "Dash Soccer"
categories: ["video-games"]
tags: ["sports", "local-multiplayer"]
language: "en"
progress: 2
---

I wanted to see if I could simplify a soccer-type game to *only* use movement. (No extra buttons!)

I also thought that one of the *coolest things* about soccer is the sliding/lunging/desperate saves. In other words: a mad dash in a certain direction to block or shoot the ball.

This resulted in the following idea:

-   We're playing simplified soccer.
-   Press/Flick your joystick in a direction to *dash* there.
-   You only have a limited amount of energy/number of dashes. This replenishes over time, quite quickly. But it's much better to be smart, preserve some energy, then use it well with a big dash.
-   When hitting the ball during a dash, your speed/direction matters a lot. (You accelerate the ball much more than if it hits you standing still.)
-   Players also interact with other players. This way, you can *move* teammates (without them needing to use a dash), or you can *tackle* opponents.

### Input

Movement for dashing.

### Objective

Score more points than the other team(s)

## Implementation Details

**Dashing:** should use an input buffer/delay. (Otherwise keyboard players can't go diagonally.)

Like this:

-   Record all inputs with their timestamps
-   Each frame, check if our *oldest* known input is X milliseconds old (or more)
-   If so, go through all inputs, aggregate them into a final input
-   Execute that.

(This way, you can even change your *angle* by pressing one arrow key longer than the other.)

## Ideas

**IDEA:** Allow dashing *while busy with another dash*. (Of course, only possible if you have the "energy" resources for that, as it shouldn't be too easy/simple to do such a maneouver.)

**IDEA/QUESTION:** How to deal with *height* differences? For example, what if a keeper wants to save a shot to the *top right corner*? Now you can only dash vertically/horizontally over the ground.

Of course, you could add a button, *but we don't want that*. Instead, I see two solutions.

* One: put it in the *field*. (Add trampolines, add goalkeeper sections where your dash is different, etcetera.)
* Two: use the idea of *double dash*. (If you dash again while just starting/initiating your first dash, or in the direction you're already going, you will go *up* as well.)