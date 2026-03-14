---
title: "Jellyfish Jungle"
categories: ["video-games"]
tags: ["mobile", "local-multiplayer"]
language: "en"
progress: 2
---

## Map

You are underwater. Each player is a fish. You're trying to eat stuff smaller than you, and not get eaten by stuff bigger than you.

## Objective

Become as large as possible. (Is there a maximum size when the game stops? That doesn't feel great.)

## Input/Action

A **two-button game.**

* Left button = shoot forward using your left tentacle ( = forward and rotate right)
* Right button = shoot forward using your right tentacle ( = forward and rotate left)

You generally float and rotate with the streams within the water. (These are gentle, except during special periods.)

**Alternatively, a one-button game.**

* While holding, you *rotate* (quickly)
* When you release, you shoot forward in your current direction

**Why not the default system?** Default movement controls are not ideal, because

* Takes 4 buttons on keyboard, more space on mobile
* No way to speed up, or be skillful with movement, and it feels restrictive

The new system requires fewer buttons/UI. It also allows more skillful movement, if you master it.

## Design

You are a **jellyfish.**

* You can hit *bigger* fish with your *underside*, to stun them and allow taking a bit/weakening them
* But your *topside* is very vulnerable (to bigger fish)

There are sources in the water that change your movement (speed, turn radius, etc.) So picking those up can help vary movement and flee patterns.

## Multiplayer

It's **cooperative.** That's the only way this works on mobile (where screen-space and finger-space is very limited).

**Multiplayer:** allow dropping in/out on a whim.

* Just add an extra fish
* And on mobile, an extra joystick
