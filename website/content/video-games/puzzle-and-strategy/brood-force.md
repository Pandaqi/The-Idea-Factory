---
title: "Brood Force"
categories: ["video-games"]
tags: ["puzzle", "mobile"]
language: "en"
progress: 4
---

My game _Ho Ho Sombrero_ is the silly party game variant of my "keep the egg up"-idea.

This idea explores if it could work as a **puzzle game** too.

## Map

A nice square grid.

-   A bunch of *cells*. Some active, some not. Contain a number referencing which *entity* they hold (at most one) and which *eggs* (can be any number).
-   A list of *entities* => have a *kind* (String) and *rotation* (usize)
-   A list of *eggs* => have a *kind* (String) and *hatch_val* (how long until it hatches)

## Input

Tap and drag to move a bird.

They can fly anywhere in a straight line, as long as there's no bird in their target square.

## Objective

Hatch as many eggs as indicated!

## Golden Rule

A bird sitting on top of an egg will *brood* it. After X turns of brooding, the egg hatches. (These don't need to be continuous or by the same bird.)

Hatched eggs produce a new bird of a certain kind, which is placed in the direction the brooder is facing. (If it cannot be placed, the egg doesn't hatch.)

**DON'T:** allow multiple birds per square. Too hard to work with, too ugly.

**DO:** allow multiple eggs in one square. This could be predetermined, or there could be birds that take eggs with them or move them.

## Simulation

Can use the basic framework, with a few important changes.

Moves aren't a single number. They are three numbers: (*entity index, direction, num spaces*)

Which moves are possible heavily depend on the *type* of bird, so this will be a helper function with quite some complexity.

After trying all moves, we check which birds are sitting on eggs. All those eggs have their hatch_val reduced by 1. If it's 0, and the target square is free, they create their new bird.

**PROBLEM:** In what *order* are these evaluated? Give birds a number and follow that?

**REMARK:** As long as we don't mess with *order*, adding birds dynamically should be fine. (Their undo simply removes the *last entity from the list*, which should also be the *most recent one added*.)

(As before, existing birds that *die/go away* (for some reason) stay in the list, but simply become dead/inactive.)

Handling what the different kinds do, is done through the specific Commands needed.

## Eggs

Most eggs produce a bird when hatched. As such, their specialty is identical (or closely linked) to the special power of their bird.

### Base Set

These are simple things that *restrict* our options, to make simulation possible.

**Big Bird:** spawns a bird so big that nobody can fly through it!

**Small Bird:** can only move one square at a time

**Loyal Bird:** once on an egg, stays there until it hatches

**Speedy Bird**: will always fly *as far as it can* in a direction.

**Tough Egg:** once hatched, its *brooder* is removed from the field

**Smelly Egg:** nobody wants to land on an adjacent square

**Chocolate Egg:** cannot be hatched. Trying to do so, will make it melt, losing you the game.

### Modifiers

These eggs modify their brooders in some way. Mostly necessary as utilities for making more things possible in puzzles.

**Dancer:** when hatched, rotates our brooder by 90 degrees.

(Why 90? So that *multiple dancers* can be used to rotate stuff any way you need. If it's 180 degrees, you can only ever flipflop.)

**Wrong Egg:** this egg doesn't belong to the birds but to a dangerous predator. Hatching it loses you the game.

### Egg Manipulation

These are concerned with hatching multiple eggs and moving them around.

**Thief:** when moving from a square with eggs, takes the eggs with them

**Pusher ("not my problem"):** when they enter a square, all eggs on it are *pushed* to the square they are facing.

**Pregnant:** whenever they move to a new square, they drop an egg (of their own kind). But ... they cannot hatch their own eggs.

**Clumsy:** when they enter a square with eggs, the first one is destroyed. (Or *all of them*?)

**Hostile:** whenever they *hatch* an egg, you lose the game. (Brooding is fine? Or does brooding *turn* eggs into bad ones?)

## Tutorial

How will this game be taught?

**Clickable stuff in puzzles** => click a bird to get information about it, same for eggs

**Interactive Menu (teaches moving/input):** each level is an *egg* in a huge field of them. Move your bird on top of an egg to start that level.

**Level 1-2 (teaches goal + simple egg):** sit on top of an egg to hatch it. Hatch all eggs to win.

**Level 3-4 (one bird per square):** birds can fly as far as they want ... but cannot land on top of other birds!

> This is the first time birds can actually fly further than 1 square?

**Level 5-6 (eggs produce birds):** most eggs produce a new *bird* when they hatch, which is placed on the square you are facing.

> Already explain that "if that square isn't free, the egg doesn't hatch (yet)"?
>
> Create a clear interface, with highlighted squares, and a "will hatch here =>"

**Level 7-8 (longer brooding):** some eggs take longer. They only hatch after a bird has *brooded* on them for X turns (see their number).

> Also make a level where not the *same* bird is used for brooding an egg, to teach that.

**Level 9-10 (finishing it up):** that's it! From now on, you'll encounter many unique egg types, which will explain themselves when they come up!

## Feasibility

The fact that there are multiple birds to move + they can fly anywhere, might introduce *loads* of options to try out.

Let's do a quick calculation.

-   A 4x4 field with 4 birds ...
-   Means each bird can probably move ~8 squares.
-   Which means 32 possible moves per turn
-   With a max of 8 turns, this means *billions* of moves

We need ways to *reduce* this.

-   Introduce types early that are very restricted.
    -   Small Bird => only moves 1 square
    -   Big Bird => blocks others from passing through
    -   Loyal Bird => once on an egg, stays there until it has hatched
-   Block off parts of the field
    -   Simply add gaps; squares that can't be used in any case
    -   Smelly Egg => no bird wants to land *next* to it
    -   All the "bad" eggs you don't want to land on (too often)
    -   Add an egg type you cannot enter?
-   Introduce a way to *remove* birds as well.
    -   Tough Egg => once hatched, the brooder is removed from the field
