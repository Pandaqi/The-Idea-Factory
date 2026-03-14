---
title: "Attractive Soccer"
categories: ["video-games"]
tags: ["one-button-games", "sports"]
language: "en"
progress: 3
---

You're playing a (simplified version of) soccer, Local/Online multiplayer.

But **players can't touch the ball.**

Instead, you manipulate it by being a **magnet**: attracting and repelling the ball when it's nearby.

### Objective

Score more goals than the opponent in the given time.

### Input

Arrow Keys/Joypad = Moving

Button = switch state (from attract to repel, or vice versa)

### Map

A **3D game**. (Because magnets are radial and would work even better with a height dimension.)

Just a soccer field, goals, seen from the side.

## How to make it better?

### Rule 1: No Touchies

It's not just that the ball goes through you. **It's *bad* if it touches you.**

When that happens ...

-   You are frozen for some seconds => great for gameplay, not great because it *stops players from playing*
-   It's an immediate *point* for the other side. (Regular goals are 3 points? 5?)
-   You get a *bad* powerup or status effect. (Or the other team gets a *positive* thing.)
-   Your magnet ability is broken for a few seconds, or at least hampered.

### Rule 2: Different Magnet Handling

Maybe your magnet is a *resource*. It can fill up, using it empties it.

> **IDEA:** It's a *shared* resource among the team.
> **IDEA:** It refills slowly over time. But there are "boost pads" on the field which will immediately refill it.

Or maybe switching from attract to repel has a bit more to it than just pressing a button.

### Rule 3: The Usual Stuff

I can play with:

-   Position of goals
-   Number of goals
-   Number of balls
-   Ball types
-   Shape of the field
-   Powerups / Status Effects

## Ideas

**IDEA:** A status effect that applies your magnet *to other players*.

* Maybe it's more fitting and exciting if these are **player roles.**
* Someone is the "team player": they don't magnetize the ball, but they attract/repel **team mates**. They also use fewer magnet resource, but refill it more quickly.
* Another is the "destroyer": they attract/repel *other players*, but they are bigger and the ball hitting them is more disastrous.

_Alternative Names: Attractive Plays / Attractive Playstyles, Magnetball, Don't Touch The Ball_


## Related Idea: Stringball

Players are attached to each other via a string. Only the string can touch the ball.

Rest is the same.

## This Can Be A One Button Game

If we simply allow the magnet to _also_ attract players. Then you don't need a separate input for _movement_, just your one button to repel/attract or not.

Any time you interact with the ball, your player character is moved in the same way (because the ball pulls on you). This allows you to move around.