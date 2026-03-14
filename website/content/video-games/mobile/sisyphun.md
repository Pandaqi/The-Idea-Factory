---
title: "Sisyphun"
categories: ["video-games"]
tags: ["mobile"]
language: "en"
progress: 2
---

You try to push a boulder up a hill, as far as you can.

## Gameplay

Your character is just a simple cube/sphere, with two hands (left and right).

The boulder is just a 3D sphere that starts in front of you.

The world is a simple 3D slope with realistic physics.

The _obstacles_ along the way are ...
* Other boulders coming at you.
* Inaccessible spots (you have to walk around them)
* Changes in angle/direction/terrain
* Powerups that change the size, mass, friction, etcetera of your boulder.

## A 2D version

We _can_ easily make this idea a simpler 2D game first by using a _side-view_.

### Gameplay

An endless terrain (that has some randomness in height, and the slope increases as you continue) 
* Created from polygon chunks, loaded and unloaded as needed
* Slight Perlin noise for random variation, but otherwise pretty consistent => https://github.com/excaliburjs/excalibur-perlin

You (a small circle) must push a boulder (a large circle) up the hill.

You can **move left, move right and jump**.

Why?

* You must regularly jump up or jump _ahead_ of the boulder to stop certain dangers or grab optional powerups. (Thus leaving your boulder alone for a second and hoping you can get back in time.)
* This also allows you to get momentum and perhaps bridge gaps.
