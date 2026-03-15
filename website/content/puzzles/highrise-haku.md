---
title: "Highrise Haku"
categories: ["puzzles"]
tags: []
language: "en"
progress: 3
---

A _logic puzzle_. Solve the map by writing inside the grid.

## Elements

Elements = Side-view of a highrise building, which can have _windows, doors, stairs, elevator, balcony, etcetera_. **Are the exact things to place given?** Maybe they are, but I can still remove clues from that, such as saying "A window, unknown size"

## Objective

Fill in the entire map correctly. (Every cell needs _something_)

## Patterns / Rules
* Every floor must be reachable from ground floor. In base puzzle, this means every floor needs a _staircase_.
* Doors are only allowed on the ground floor, which requires a _double door_. (Barring exceptions, such as balconies.)
* Balconies are only allowed on higher floors. They _require_ a door above them for access. (They are _forbidden_ above a door, as that'd ruin the view/light of the space below?)
* Windows are a rectangular shape (1x1, 1x2, 2x2, ...). Every floor needs to contain (part of a) window whose total size is at least the floor number.
  * Example: floor 2 needs to have a 1x2 or 2x1 window or larger in it.

## Clue Removal

_What can my generation algorithm remove from the grid to make the puzzle more challenging?_

* Cell Content
* Thing-to-place clues (see "Elements")

## Implementation

MAP GENERATION = Everything can follow WFC (_Wave-Function Collapse_) easily, except the Windows. ("Reachability" of all floors is mainly checked after the fact, though simple propagation like "each row must have either an elevator or stairs" can increase the likelihood considerably.)

## Expansions

* ELEVATOR = Every row/floor can only have _one_ elevator section. Elevators must be a straight line. They connect all floors on that line to each other.
* LIGHTS = Windows can contain lights. Every floor can have at most 1 such light (?)
* CURTAINS = Windows can contain curtains. Every column can have at most 1 such curtain set (?) => Or actually use the DIRECTION of curtains, as we need one left and one right, and this might mean something?
* BRICKS = Sort of "empty space", and inverse windows. Every floor can contain AT MOST as many brick sections as its floor number.
* PRICE = Requires a number too. The price in a row must always be HIGHER than that in all the rows below. Minimum price = 1, Maximum price = building height. Furthermore, the building gives a "target price". All your price icons summed must be equal to THAT.
* @IDEA (that should probably go to a different puzzle, this one is a bit "full" already): every element you place implicitly gets a _number_. This number is equal to <some property of its grid position> (say, its floor number + its column). Then, these numbers must be unique, or can't be adjacent to each other, or must be ascending, or whatever.