---
title: "Ladder Up"
categories: ["video-games"]
tags: ["mobile"]
language: "en"
progress: 3
---

A game about trying to climb up ladders that you position and grow in real-time, using a single button/touch.

## Goal

Get as high into the level as possible ( = score the most points)

## Gameplay

* A ladder moves side to side (or, rather, a player holding the ladder probably)
* When you tap the screen, it stops moving and the ladder starts growing.
* Release to fix the ladder at its current size.

Once a ladder is completed, 

* Your player does a quick animation to walk over it.
* At the top, the ladder is removed and the player "falls down" as much as needed to reach the platform below.

There are two wrinkles needed to actually make it challenging.

* **Ladder/Wood is a resource.** Making ladders that are too long means you waste it and might not have enough later. => I can just calculate the minimum/average ladder length needed per level and base it on that.
* **Fall damage** => if you fall down too far, you die/lose a life.

## Implementation Notes

* This is purely a vertical stack. We just need to keep track of the current highest platforms, and when your height changes, generate a few new ones that are reachable above it.
* Until X rows above screen height ...
	* Scan the area below it.
	* If distance is good enough (to previous platform), place a new one.
	* Prefer streaks of 2/3/4 of these in a row, as it looks nicer.
* Efficiency => only need to check collision against platforms inside range of player row

## Alternative: Endless Runner

You could also make this an endless runner (like _Subway Surfers_), but now it's an endless climber over a few lanes of "ladders" (side by side).

Should allow a **1v1** mode (or **1+1** = coop) too. You simply can't be on the same ladders, and powerups can be shared/applied to the other.