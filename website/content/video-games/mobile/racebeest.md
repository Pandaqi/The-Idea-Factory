---
title: "Racebeest"
categories: ["video-games"]
tags: ["mobile", "platformer"]
language: "en"
progress: 1
---

A mountainbike / Moto GX / Racing mobile game.

## Objective

Complete levels in as little time as possible.

## Input

You obviously play the **racer**.

* You move automatically. (Forward by default, level elements can change this.)
* Wheels on the ground? Tap to jump off. Hold to slow down (or speed up?)
* Wheels in the air? Tap to jump again. Hold to rotate. (Or tap once to start rotating, tap once again to stop rotating?)

## Map

Build each level from individual _lines_ (defined in JSON data).

* Can be custom (I give specific coordinates)
* But most likely standard types (horizontal, vertical, circle cup, circle cap, etc.)
* Can specify properties on that (thickness, color, stretch a certain direction, terrain)

Besides that, I merely need a start position, a finish, and times needed for certain number of stars.

## Leftover ideas

* You are carrying/moving something. This plays with your weight. Or you aren't allowed to lose it.
* Similarly, you can grab powerups or other elements in the level
* **How to do multiplayer?**
    - Race twice. The second time, there's a different route, and you'll have changed some things because of the first run.
    - Race simultaneously. Either splitscreen, or kept within the same screen.
* Combine moto with other genres? Like moto + platformer?

## Implementation

Systems:
* Clock. (Precise, no randomness, allow penalty/bonus time.)
* Map loader + creator
* Player vehicle

Games to look at:
* Moving truck
* Recoil => anything from Martin Magni is cool
