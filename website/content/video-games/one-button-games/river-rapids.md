---
title: "River Rapids"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

## Objective

Get as far as you can on the endless river-rapid course.

_Alternative_: make it more about "bumper cars". Try to ram into other players with _your front_ and damage them.

## Map

Top-down view of river. You're a typical "river rapid" boat.

Boats automatically follow the stream = average water direction underneath them.

I need to be smart about the streams, to *help* players always get back on track or do something. I don't want players falling still because they are just rotated completely the wrong way.

## Input/Action

**Tap** to propel yourself into the direction you're currently facing. That's it. A _One Button Game_.

## Multiplayer

Well, just multiple boats, bumping into each other. And you want to stay alive (not become a shipwreck) + cross the finish first.

## Implementation

* The main track is just a sequence of points.
  * When placing the next point, use a random rotation and distance (within limits). Now calculate the points in-between as if it were a smooth (Bezier?) curve.
* Offset them randomly (to orthogonal dirs), place points there.
  * Do ensure the offsets are somewhat even, left to right.
  * And there isn't too big a difference between subsequent offsets
* Draw lines between the offset points: these are the edges of the stream
* Then just extrude the points to get a *rectangle* we can turn into a body.
  * <https://phaser.io/examples/v3/view/game-objects/shapes/polygon-with-matter-physics>

The map should be *really* flowy and bobbly. Also to prevent a player from just *cruising through* and getting too far ahead.

Regularly, there should be **gates** to keep up the player in first place. Solve a puzzle that is *simple*, yet *takes time* to open the gate.

If you fall behind too much, you're simply out of the game? (Mobile screens are small, don't feel like anything else would work.)


