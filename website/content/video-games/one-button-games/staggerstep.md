---
title: "Staggerstep"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

This is a _One Button Game_. Many players can join behind the same device/keyboard; each player only gets one unique button and that's it.

## Objective

Endless highscore game => reach as high as possible.

## Input/Action

PRESS = jump up (to next vertical level)

HOLD = speed up your left/right movement

## Map

Vertical. Goes upwards. Different "levels" at fixed distances from each other.

Players automatically walk left/right between boundaries. (On some levels, they might *wrap* around the level.)

## Multiplayer

Place multiple people. Here's the real kicker:

* They start on different layers.
* When two players are on the same layer, jumping goes *down*. (So, you can only go up if you're alone on your layer. This is where the staggerstep comes from: you need to constantly wait for players above you when jumping up.)
* When you die, you become a ghost. You can only interact with ghost objects.
* You lose when everyone has died.

**ISSUE:** what to do with camera? Just don't allow players to be too far apart?
* The lowest player(s) must always show their own level + 1-2 below them (and then you're at the edge of the screen)
* The highest player(s) must similarly be able to look ahead.

**ISSUE:** How to make it unlikely that a single player will remain and just *keep playing on their own for 5 minutes before they die*? Ramp up the difficulty? Still force it to adhere to ghost positioning?
