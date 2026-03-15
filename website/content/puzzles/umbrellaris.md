---
title: "Umbrellaris"
categories: ["puzzles"]
tags: []
language: "en"
progress: 2
---

A _logic puzzle_. Solve the map by writing inside the grid.

## Elements

Raindrops, animal parts, umbrellas

## Objective

Fill the entire map correctly, with umbrellas, animals and raindrops 

## Patterns

* Raindrops only come down from LEFT, TOP, RIGHT edge. They move in a straight line until interrupted by an Umbrella.
* Animals are like giraffe necks: one of their sides can be as long as you want, the other is always 1 space.
* Umbrellas can only be placed adjacent to an animal.
* Umbrellas stop raindrops from going further. They can be placed diagonal left, diagonal right, or straight up. If diagonal, it does NOT block raindrops from the _other_ diagonal.
* A "water droplet" on an animal part indicates that it is soaked. If not present, you're guaranteed this part doesn't see rain. If question mark, it _might_ be soaked, that's for you to figure out.
* Edge Clues appear only at the LEFT, BOTTOM, RIGHT to indicate if this section of the ground is soaked or not?

## Clue Removal

_What can my algorithm remove to make the puzzle harder?_

* Remove umbrella.
* Remove raindrops.
* Remove animal part.
* Remove edge clues.
* Change "soaked" indicator to a question mark. (Removing it altogether is not allowed, as that'd be very confusing.)

## Implementation

MAP GENERATION = Just place random animals. Give them random adjacent umbrellas. Start rain at the edges, and follow it to see what gets hit. Add soaked indicates/numbers to the right things, and done.