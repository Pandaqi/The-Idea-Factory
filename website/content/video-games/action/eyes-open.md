---
title: "Eyes Open"
categories: ["video-games"]
tags: ["mobile", "action"]
language: "en"
progress: 3
---

It's like those old "only kiss when the teacher isn't looking"-games. That "stab the king in the back"-game.

## Objective

The background is black. But that's because it's completely a monster. Its eyes are in the background and can look in different directions.

The monster has stolen sheep (to eat as its next meal).

**You win** by collecting the number of sheep required for the level.

**You lose** when it sees you.

**Multiplayer:** you lose when *everyone* has been seen. When you are a ghost, other players can revive you by walking to you. (But the monster is extra likely to look at dead people? This also costs stamina?)

## Map

Use Arcade physics. Simple box with squares inside it.

I want to try a new system for handcrafting these maps: **read pixels from a texture**.

Create one spritesheet. Every 64x36 block (that's four times the 16x9 resolution) is a new level. When loading the level, it reads the pixels. Based on their *color*, it places something, or not. For simplicity, let's not use transparency.

- "Nothing" = white
- "Regular block" = black
- "Monster eye" = red

Yes, monster eyes can be placed **on their own**. But if two are next to each other, it will synchronize them.

<https://phaser.io/examples/v3/view/textures/get-pixel-from-image>

Besides this, a map will have

- Stamina (collectible powerups that appear)
- Sheep spawn points
- Interesting landmarks. (These might make you jump, or change direction, or refill stamina as you stand close. They make levels varied, but also provide something for the monster to look at with high probability.)

## Eyes

This is a simple class. They can be open or closed.

- When closed, you don't really see them, though they might wiggle their lashes to make you scared.
- When open, they shoot *raycasts* into the world in a *cone*. (Add a light or overlay polygon to clearly show this to players.)

The raycast goes from the *center of the eye* through *where the pupil is right now*.

The **opening animation** takes some time. In that time, it doesn't see yet, and you can get an estimate of where the pupil is.

The **pupil** simply randomly resets when opening. (Though I might increase probability of looking at specific players or at landmarks. And when you're standing still, it might take a special interest in your location.)

When a raycast **hits a player**, they are "seen" and lose. Unless they are protected somehow.

<https://github.com/wiserim/phaser-raycaster>

## Paws

Over time, paws will come in from the edge of the screen, and remove a block. (Grab it and pull it away.)

This slowly removes hiding spots. And whenever the monster has their eyes open, you are afraid they will take away yours.

## Input/Action

You move horizontally by default. If you bump into something, you reverse direction.

You have one button:

- **Press (\<= 300ms) on ground:** reverse direction
- **Hold (>300ms) on ground:** you stand completely still. The monster doesn't see you: you are **protected**.
- **Release after hold:** you jump upwards
- **Press in air:** you jump again? Once in the air, jumps are free? Do they cost stamina? Or is it simpler to also reverse you here?

Some actions cost stamina. If it runs out, you can't do them anymore.

- Holding is the biggest stamina eater
- Then jumping/being in the air

## Campaign

**First level:** only explain "grab sheep" and "don't be seen", very simple layout, two eyes in center, jumping goes through trampolines.

**Second level:** adds stamina + jump again in the air

**Third level:** adds holding ( = standing still)

**Fourth+ level:** just switch up the parameters (how sheep spawn, layout, eye distribution, landmarks, etc.)
