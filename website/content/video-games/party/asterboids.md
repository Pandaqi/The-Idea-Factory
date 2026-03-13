---
title: "Asterboids"
categories: ["video-games"]
tags: ["local-multiplayer", "cooperative"]
language: "en"
progress: 1
---

A **cooperative** game. Players are in little spaceships. They have the task of simply *reaching certain locations* or *moving stuff around*.

However, large asteroids fly across the screen. They move, they rotate, they might even grow/shrink/change shape.

Players need to **clear paths for each other** and **destroy obstacles**.

You can ...

-   Hold a button to keep an asteroid in place (or drag it with you like a magnet)
-   Shoot asteroids to destroy them or repel them
-   Perform a quick dodge.

In general, your movement is like a floaty spaceship. You know, the movement that every beginner coder creates and is usually *not* what they want for their game. That's what we *do* want this time!

**Why is this a good idea?** It's not hard. Empty space, asteroids flying through screen, basic spaceship movement, basic physics detection. Basically the game is done.

## Do something with the "boids" part?

The spaceships can fly in a flock/swarm?

* Maybe you automatically attract/influence each other when you're near. You can use this to get lots of speed for free, and to stay together. But it can also bite you and throw you off course.
* Conversely, the asteroids might move in swarms, but I'm not sure if that makes sense ...

Inspired by that GMTK game, but mostly the comments about it: "Would be more interesting if asteroids changed *automatically* on you, and you had to *hold buttons to keep them in place* (or slow their timer)."

Move that to a simple controller layout and you get:

-   Each part/side of the spaceship does something different.
-   Which button you press/hold determines what you do. (So it's really a matter of frantically getting your fingers in the right places, to maybe press and hold 2-4 buttons at the same time.)

You fly automatically ("always thrust forward"). This frees up buttons on the keyboard. But might be something to turn off if you want.

_Alternative names welcome. Asterdroids already taken unfortunately. Boid = computer simulation of animals in flocks or swarms._