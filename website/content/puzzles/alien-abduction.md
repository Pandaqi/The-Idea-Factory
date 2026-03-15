---
title: "Alien Abduction"
categories: ["puzzles"]
tags: []
language: "en"
progress: 2
---

A _logic puzzle_. Solve the map by writing inside the grid.

## Elements

Fields (with cows and grain) and sky (with clouds---can be very minimal, most focus is on 3/4-view grain field), UFOs, Lines from their beam.

## Objective

Draw UFOs and their beams to suck in all the cows, and none of the grain.

## Patterns / Rules
* A UFO has two lines below it (left and right side of their "beam"). Each line must be straight. (So it can be vertical or diagonal, it just can't change direction halfway.)
* Any objects caught between the two lines are beamed into the UFO. A diagonal line _can't_ go through an object (?)
* Numbers inside cells indicate that this one is beamed up, and the number says _how many_ of this specific type are in that beam/those beams.
* Lines can CROSS (multiple UFOs overlap some space), but not double up.

## Expansions

* CLOUDS: 
  * UFOs can't share space with a cloud. 
  * If the entire width of a beam is covered by clouds, it stops working.
  * Otherwise, a line running past (through?) a cloud is allowed to _turn_ one step left or right. (That is, a vertical line becomes diagonal left or diagonal right.)
* More stuff in the fields?
* Special UFOs?
  * Reflection of their beams?
  * UFOs that can come from _below_ or from the _side_?
  * Can UFOs beam up OTHER UFOs, or is that forbidden?
