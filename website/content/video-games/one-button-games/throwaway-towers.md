---
title: "Throwaway Towers"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 2
---

A tower defense game with some interesting twists, such that it only requires a **single button**.

Also known as: "Whatever Floats Your Moat".

## Objective

Survive as long as possible / survive all the waves. (Not sure if this should be campaign/level or highscore.)

## Input

There's a **moat around your castle**. A little boat or flag or whatever _drifts through it_, following that path either clockwise or counter clockwise. 

When you shoot, you shoot **towards YOUR current flag position.**

* Tap to shoot.
* Tap+hold to power up your shot first, sending it further.

> Making it *two taps* is easier for some people, but also slower.

What do you shoot? _Towers_.

## Map

Your castle is in the center. Enemies come in from the edges.

Towers will be placed wherever they land. 

> They bounce off walls and other towers, though. In a sense, before the tower comes to a standstill, it's just a physics sphere that bounces around realistically.

Arrows will simply hit whatever they pierce through.

> So nothing can ever go "off screen". Preferably, it shouldn't be near the side of the screen as well.

## Implementation

Enemies just have two sprites: normal + while-walking. We simply flip ourselves based on movement direction. Animate between these two.

Take style inspiration from *Kingdom Rush* and *Merge Towns*.

### Systems

**PathComponent:** pick a single target and move there, or follow a given path.

**AutoAttack:** attacks targets in range, on a timer (or other properties)

**CircleAim:** for aiming, getting power, and shooting in a circle around you. (Will need this for more games.)

**Health:** a continuous, more general health bar, given to castle and enemies

**WaveSystem:** given a fixed set of enemies, or properties of them appearing, divide the game into waves
