---
title: "Ponder"
categories: ["video-games"]
tags: ["mobile", "puzzle"]
language: "en"
progress: 3
---

A puzzle game about getting the right frogs on the right water lilies, on an ever-changing lively river.

## Goal

Solve the puzzles. How? 

* Simple = All "goal lilies" have a frog on them.
* Medium = All stars have been collected along the way; these float over lilies.
* Hard = All insects eaten as well; you eat them by leaping OVER/THROUGH them

## Gameplay

* The action alternates between _rotate_ and _jump_
* Tap a frog to do the current set action.
* Tap a specific "jump" frog to make _all_ frogs jump to the next lily they see.
* Tap a specific "rotate" frog to rotate _all_ frogs.

## Puzzle generation

Generated in real time, use _backwards_ approach!

* Start with a random state.
* Mark the current frog locations as "goal lilies".
* Repeat this X times.
	* "Undo" a random action.
	* If this beats the game too, try a different option or exit.
* Save these actions as the solution.
* Present the final state.

We might just give random puzzles endlessly. Or create X puzzles from seeds (fixed) and one daily randomized puzzle.