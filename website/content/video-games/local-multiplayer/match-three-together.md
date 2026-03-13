---
title: "Match Three Together"
categories: ["video-games"]
tags: ["local-multiplayer"]
language: "en"
progress: 2
---

It's **match 3** (like _Candy Crush_), but ...

* As a **local multiplayer game.** You must play with multiple people on the same device.
* Players are part of the grid. You "swap" yourself with another element by simply moving into it.
* Which is a unique movement system that also allows all sorts of special actions and cooperation.

## Map

The field is a grid of elements (candy, food, items, artifacts, whatever).

## Player Input

The game works on a "clock" or "tick":

-   Every turn, all players have X seconds to decide their input.
-   Once time's up, the last input for all players is collected and executed *at the same time.*

Input is merely **in which direction to move.**

-   You swap places with whatever is in that direction.
-   If this creates 3-in-a-row (or a bigger combination), it's removed and scores you points.
-   **What if two people want to move to the same square?**
    -   The strongest one wins. (You can collect weapons/lives/strength by swapping during the game.)
    -   Otherwise, if a tie, nobody moves.

## Scoring

This could be cooperative or competitive.

-   Cooperative: one score, try to get it as high as possible.
-   Competitive: each their own score, get the biggest one.

Besides scoring points by making combinations, you can also ...

-   Make combinations that result in some other benefit. (Lives, strength, powerup, ...)
-   Simply swap with *one* thing to activate that for yourself.

## When does the game end?

-   A fixed number of rounds/moves.
-   Or until nobody has lives left.
-   Or until the whole area is cleared. (Or one type, like "the finish flag", has been swapped and cleared.)
