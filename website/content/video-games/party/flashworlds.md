---
title: "Flashworlds"
categories: ["video-games"]
tags: ["party"]
language: "en"
progress: 2
---

You're playing a game with two teams, left and right. (Perhaps soccer, perhaps a shooter, doesn't matter now.)

But ... the map is filled with *obstacles*. (Randomly generated.)

Here's the trick: **these obstacles fade in and out of view**.

One moment they're all visible. Flash => they're all gone. Flash => you only see half of them.

In other words, you have to try and *memorize* what is where, to play well during the periods when stuff is hidden.

_Alternative names: Flashfights, Photofighters, Paparazzi \<something with a p> ..._

### Input

Movement + One button for main action

### Objective

Score more points than the other team(s)

## How to make it better?

**Idea #1: obstacles can have multiple properties.** (Otherwise, you know something's there whenever you just bump into something/can't walk further.)

They can be **solid for players, but not for other things.**

They can be **passthrough, just doing something when a player is in the area or passes through.** (Like a special effect _gate_.)

This removes any easy cheats + allows me to raise/lower difficulty easily.

**Idea #2: use the idea of "taking a photograph/picture"** as the main thing of the game. (As it's about flashes and things being visible or not.)

For example, instead of shooting bullets at other players, you have to try and *photograph* a specific part of them. (Which functions roughly the same, but is nice thematically.)

Or all players have a camera which can be used to *reveal* hidden objects (by taking a photograph of them).

## General Ideas

**IDEA:** It randomizes the layout once at the start. But during the game, when something specific happens/is used, it might re-randomize?

**IDEA:** Everyone has a camera. When used, the area which it photographs is (permanently) "revealed"?

(Either check for objects in range and show those. Or create a shader and a mask image, and only show pixels of the 3D mesh within the mask.)

## As a sports game ...

There'd just be a ball (or multiple balls) and you need to score in goals.

**IDEA:** Balls can *also* disappear!

**PROBLEM?** Really hard to score, obviously, if there's a bunch of hidden obstacles between the goals.

We can solve that by making the goals less static. Maybe they are inside obstacles, or just spread around the field, but also hidden from view sometimes.

## As a shooter ...

Should really need something that can *deflect*. Needs actual *projectiles*.

(Would be more flexible and something different.)
