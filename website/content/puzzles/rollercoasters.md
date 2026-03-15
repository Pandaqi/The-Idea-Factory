---
title: "Rollercoasters"
categories: ["puzzles"]
tags: []
language: "en"
progress: 3
---

A _logic puzzle_. Solve the map by writing inside the grid.

Alternative name: "Highs & Lows"

## Elements

Parts of a rollercoaster track, cells have a number that indicates their _height_, clues around the board

## Objective

Finish the rollercoaster, a closed loop from station back to station, while obeying all rules.

## Clue Removal

_What can my generator algorithm remove from the grid to make the puzzle more challenging?

* Parts of the rollercoaster
* Height numbers
* Clues around the board

## Patterns / Rules

* A "rise" occurs when the rollercoaster moves to a cell with a _larger height_ than its current cell. The very first rise can be any height; later ones must always have a _smaller difference_ than the previous drop.
* A "drop" occurs when the rollercoaster moves to a cell with a _lower height_ than its current cell.
* Every row/column can have at most ONE rise and ONE drop.
* The clues around the board indicate the length of a consecutive rise/drop? (As in, the coaster falls down for 2 cells in a row, gives a 2.)
  * Or they give the max height difference. (If a coaster goes from 4 to 2, then stays constant, gives a 2.)
  * With my new pattern rules this MIGHT NOT BE NEEDED ANYMORE. Just test the others first.

## Expansions

* Loopings?
* Photo Sections?
* Special station rules?