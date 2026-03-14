---
title: "Circle You The Most"
categories: ["video-games"]
tags: ["mobile"]
language: "en"
progress: 3
---

## Gameplay

* Planets appear. They have a clearly defined (dotted) circle along which they slowly travel.
* You can click + drag the planet to reposition them to somewhere else. Because ...

> **If two planets collide, you lose a life.**

Over time, more and more planets appear, and you have to multitask placing/moving them all to ensure no collisions and stuff.

## Planets

There are many **types** of planets.

* Some ARE allowed to collide.
* Some even give bonus points / lives / whatever if they collide.
* Some are even WORSE if they ever collide with anything. (These might also move faster or have a bigger radius to make this more likely.)

## Inspiration

_Roughly inspired by Planetaario by Kultisti._

That Kultisti game makes sure you're always moving stuff by having "scan zones":
* Every time you place a new planet
* It moves this zone to another slice of the screen
* And when time runs out, you only score points for all planets inside that zone.

That is a _genius_ idea, but I don't want to copy it. So instead,

* Things might just "drift away" on their own (very slowly)
* Have "power circles": you only get their points/benefit if a planet has stayed inside it for long enough, or enough _number_ of planets have stayed inside it.
	* This is easier, I think, because I can just place the circle anywhere and scale it anyhow.
	* And I can only introduce this _later_ in the game.
	* Which means planets will have to AUTOSCORE points based on an interval. (Probably the same interval that adds new planets.)

