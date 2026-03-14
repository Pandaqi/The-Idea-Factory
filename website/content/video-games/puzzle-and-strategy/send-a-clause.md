---
title: "Send-a-Clause"
categories: ["video-games"]
tags: ["puzzle", "mobile"]
language: "en"
progress: 3
---

The title is obviously a pun on _Santa Claus_. It's a puzzle game about helping Santa Claus deliver all packages (in the right places) on Christmas Eve.

## Objective

Deliver all (correct) packages to all homes

## Map

A small part of a city with a bunch of homes, roads, and empty lots.
* The homes want a specific package.
* Packages itself are just lying around on ground level

## Input

Move the sleigh in four directions (left, down, right, up)

## Rules

The **sleigh** can be at two elevations: ground or air.

The packages you have are an **ordered list.**

At the end of your turn, it tries to deliver packages.
* It checks if it can deliver the *first* package in that list.
* Either you *fly above a house that wants it*
* Or you are next to the *front door* of the house.
* As long as delivery remains successful, it repeats this loop.

## How?

"Change elevation" is a **tile type.** If you land on it, the sleigh switches.

There are several clearly distinct **packages.**

The list of packages you have is just a component on the player? (You might already *start out* with packages.)

You obviously can't move into squares with a home while on the floor. Some homes might have multiple stories => elevation should just be a number.

**Special Tile:** reverse the order of packages.

**Special Tile** (weaker): turn all packages you have into the same type.

**Special Tile:** rotate all adjacent houses one quarter turn.

**Special Tile:** lose your first/last package

**Special Tile** (weaker): immediately move to the lowest or highest possible elevation.

**Special Mechanic:** collecting more reindeer, meaning you move more squares on your turn. (Required, not optional.)

**Special Mechanic:** collecting people's wishes first. Some houses merely say "visit me" and only reveal the package they want when you fly over/pass by.

**Special Mechanic:** having a package also gives you some bonus ability?
* Red package is needed to pass through specific "gates"
* Blue package allows you to go through clouds
* Pink package can be delivered *anywhere*
* Etcetera

**Special Entity:** clouds. They move in the direction shown on them. You can't fly into a cloud.

## Campaign

### Level 1

**Tutorial:** swipe left/right/up/down to move one tile.

**Tutorial:** deliver the package to the home by flying above it

*Level: You start with one package already. There's one house requesting it, you just need to fly over it.*

### Level 2

**Tutorial:** use "\<special tile>" to change your elevation!

**Tutorial:** You obviously can't fly *through* homes!

*Level: You start on the ground. You first need to go up, then you can move over the house*.

### Level 3

**Tutorial:** land on a package to grab it. Make sure you have the right elevation!

*Level: now you start without the package.*

### Level 4

**Tutorial:** you can also deliver packages from the ground if you land at people's front door.

*Level: homes get a clear front, packages are delivered when visiting there*.

### Level 5

**Tutorial:** deliver all packages to the correct homes to pass each level!

*Level: now we can just use everything*.
