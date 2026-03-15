---
title: "Frenzied Bumper Cars"
categories: ["puzzles"]
tags: []
language: "en"
progress: 3
---

A _logic puzzle_. Solve the map by drawing bumper car paths inside the grid.

@TODO: Add sketch from notebook.

## Map

Grid, top-down view of bumper cars. 

## Objective

_Move_ all bumper cars ( = draw a path from them) that only makes them collide (for the first time) at the _end_ of the path.

Or, alternatively, some cars say "don't collide" and others say "collide"

## Patterns / Rules

* Every bumper car has X Energy = steps to take. Perhaps split in dtail (X->Y->Z->A). Perhaps the general rule is "Move X, then move X-1, then move X-2, until done". Perhaps you _must_ turn in-between those steps.
* (Collision means the path _reflects_. The bumper car continues its movement, but backward/reversed.)
* They can also rotate in specific spots?
* They can move forward OR backward at any time??

