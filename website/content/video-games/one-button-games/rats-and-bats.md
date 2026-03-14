---
title: "Rats & Bats"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

This is a _One Button Game_. Many players can join behind the same device/keyboard; each player only gets one unique button and that's it.

## Objective

Run as far as you can. (You'll gradually get more difficult terrain, more bats/rats chasing you, and speed increases until it's hard to control.)

## Input/Action

You're an adventurer. You're running left to right.

When you tap your one button, **gravity reverses**.

* This means it *takes time* to switch directions, allowing more advanced control over the Y-axis.
* It also means the character is mostly running on flat surfaces, so we can use *slopes* or *trampolines* or *special tiles* that it will certainly hit for cool stuff.

## Map

Bats hang from the ceiling: don't touch them. Rats walk on the ground: don't touch them. 

That's why you need to constantly switch gravity. To avoid the bats on the ceiling or the rats on the floor.

Ideas:

* If you get really close to a bat/rat, they start following you?
* Do you collect points along the way?
* Slopes, obstacles, weird shapes to bump into/roll over

## Implementation / Research

Slopes?

* Emanuele Feronato has a bit about slopes using Arcade Physics: <https://www.emanueleferonato.com/2016/05/04/my-take-on-handling-slopes-with-phaser-and-arcade-physics/>
* But it's probably **way better** to just use Matter for this. Then we can also go further than straight edges, and use perhaps a rolling character.
* <https://phaser.discourse.group/t/is-there-easy-way-to-create-slope-platform-with-arcade-physic/5426> => talks about "ghost collisions" in Matter?
