---
title: "Math Soldiers"
categories: ["video-games"]
tags: ["mobile"]
language: "en"
progress: 1
---

It's a puzzle game (without time limit, just relaxing time-waster).

* The game randomly fills a grid with specific "soldiers". It might also take random bites out of the grid to make it less uniform.
* Each soldier type has a constant **number attached**. More advanced soldiers have special actions.
* Then it calculates the **sum** of all those numbers and places that at the side of each row/column.
* Then it removes all the soldiers, merely providing them from a toolbar at the bottom.

> **You must figure out that original placement of each soldier in the grid that led to those numbers around the edges.**

On its own, this is fine but slightly basic.

So we can throw in some advanced soldiers that make it harder. To evaluate these, always go left->right or top->bottom (one by one).
* "Turns all instances of the highest number (in this row) to 0"
* "Only counts if it's the lowest number (in this row)"
* "Removes the number before/after/above/below it"
* "Multiplies the value so far by 2"
* Etcetera

This was inspired by on my quick impression of that _Sum Monsters_ game from ExcaliburJS creator.
