---
title: "Lasso Loops"
categories: ["board-games"]
tags: ["one-paper-games"]
language: "en"
progress: 1
---

A simple board game focused on two simple rules.

> Each turn you cross out a new square. But if POSSIBLE (following the rules), you must cross out a square NEXT TO an existing crossed-out square.

> ENCLOSING an area (by crossing out all boundaries/possible exits), scores you everything inside.

## A Possible Implementation

* There's a track of _weather conditions_. Once in a while, this changes. (So the wind blows from a different direction and/or with a different strength.)
	* Maybe this track starts in the _center_ and goes both ways, so you never know which of the two comes next.
* When you cross out a square, the _wind_ will help you cross out more than that: **you keep crossing out squares until you're blocked or you exceed the wind strength**
	* Of course, many squares block you, and many squares _divert_ you.

In other words, it's a game about ...

* Predicting where things will flow
* To collect as many squares as possible on your turn
* To _enclose_ areas: once you do, nobody may place inside them, and you write your icon somewhere to remember that you score ALL OF THAT.

If we go with WIND theme, it'd be more like KITES. (Maybe even related to Aeronaut?)

Otherwise we can go with a WATER theme.