---
title: "Migration"
categories: ["puzzles"]
tags: []
language: "en"
progress: 3
---

A _logic puzzle_. Solve the map by writing inside the grid.

## Elements

A map indicating general climate/temperatures in cells, birds and their wants, possibly parts of flight paths

## Objective

Get every bird to where they want to go, by connecting them to a valid destination with a series of arrows/path.

## Pattterns

* There are 3 types of birds (patterns/colors). As soon as their migration path reaches a cell of that type, they are happy and stop flying.
* Their path is a sequence of arrows, without loops or branching off. 
* Their path can go straight or turn (90 degrees) any time.
* Multiple paths _can't_ collide or cross.
* Edge Clues indicate how many "birds" are spotted in this row/column, which just means how many paths from _unique_ birds pass.

## Expansions

* Birds have different **movement rules**. For example: "Their path can only turn _one diagonal step_ at a time. (So left -> top left -> top -> top right -> ...)"
* Different height levels? So that paths can go below/above each other? 
  * The different types of birds have a different height anyway! They can cross, but only orthogonally (so one vertical, one horizontal), and keep a good space between arrows to indicate this.
  * Then, Edge Clues on the other side, can indicate the number of "meetings" in the air.