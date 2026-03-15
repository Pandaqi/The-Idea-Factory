---
title: "Soap Bubbles"
categories: ["puzzles"]
tags: []
language: "en"
progress: 1
---

A _logic puzzle_. Solve the map by writing inside the grid.

## Elements

Soap bubbles + things that could pop them. The map is HEXAGONAL (or at least "row-offset")

## Objective

Fill the entire map correctly.

## Patterns

* Bubbles float UPWARD. They can go left or right to next cell.
* When two bubbles meet, they become a LARGER bubble (equal to their sizes combined). (1x1 -> 2x2 -> 3x3 -> ...)
* When a bubble hits a spiky object, it pops and doesn't go further.
* EDGE CLUES? SOMETHING ELSE? To give more indication about number of pops, number of soap somewhere, etcetera? Maybe "number of bubbles that reach this spot/the top"?

## Theorems

_What little tricks / patterns can puzzlers use to logically figure out the solution?_

* If two bubbles meeting would lead to a bubble that doesn't fit the current space, then they can't meet. Send them another way/stop them.
  * More involved: if they'd create a bubble that can't float upwards any further because of lacking space. So have like a "getPossibleFuturePaths" function that returns that info for a specific position + bubble size.
* If a bubble is bound to end up somewhere, but the EXTRA/EDGE CLUES indicate nothing (more) arrives here, they can't go that way.

## Expansions

Can the spiky objects have a DIRECTION? So they merely pop things coming from there?