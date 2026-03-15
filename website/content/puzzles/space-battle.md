---
title: "Space Battle"
categories: ["puzzles"]
tags: []
language: "en"
progress: 3
---

A _logic puzzle_. Solve the map by writing inside the grid.

Something with spaceships firing laser guns at each other, but mirrors/reflective asteroids move the paths around.

## Elements

Spaceships and their guns/how they'll shoot, misc (debris, asteroid, moon, star, something like that), mirrors

## Objective

"Side X wins" or "Have 1 (red) spaceship remaining" or something. 

You must fill in the missing elements to make the battle play out that way.

## Patterns / Rules

* Every spaceship shoots a line from all their guns, at the same time. You choose its initial direction (unless already indicated).
* This line **can't** leave the map **nor loop**. In other words, a shot always ends somewhere and hits ... something.
* This line goes **straight** by default. It can only change direction when hitting other things.
* If this line hits another spaceship's SHIELD (or other debris/object/mirror), it "reflects". (Is reflection simply "turn to left", or is it realistic which means only diagonals reflect differently while orthogonal just reflects back at you?)
* If it hits a spaceship anywhere else, that ship is killed. Yes, a ship can kill itself.
* Laser lines can cross, but never double up. Clues in the map/around the map indicate where/how often they intersect (most uncertain about this?? Maybe indicating how long a shot goes on before it hits, is more useful?)

## Clue Removal

_What little rules or patterns can players use to "solve" it?_

* Where spaceship guns are. => because of the objective, or all other sides being impossible, you can figure this out
* Where debris is. => debris needs clear rules on how they spawn or what they do to figure out missing ones (this is probably the HARDEST, focus on mirrors instead)
* Where mirrors are and how they face (spaceship SHIELD sections act as mirrors too) => we need SOMETHING to tell you about how shots flew to figure this out.
