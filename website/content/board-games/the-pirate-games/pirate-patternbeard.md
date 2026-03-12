---
title: "Pirate Patternbeard"
categories: ["board-games"]
tags: ["one-paper-games", "hybrid"]
language: "en"
progress: 1
---

This is a variation on my [Pirate Riddlebeard](https://pandaqi.com/pirate-games/pirate-riddlebeard/) and [Pirate Drawingbeard](https://pandaqi.com/pirate-games/pirate-drawingbeard/) games. In those games the computer generates a random map + hints to where the treasure is (only one square exactly fits all those hints).

In this version, players are given a **visual pattern as their hint card**.

This pattern is:

-   A set of tiles
-   With *some* of its properties filled in

For example: a 2x2 piece of tiles. The upper left only shows if it has nature or not, nothing else. The lower right only shows it has at least one stone. Irrelevant tiles (nothing shown) are simply made invisible.

Patterns may be flipped ( = mirrored) or rotated in any way possible.

**The treasure is located at the intersection of all these patterns.**

## Cooperative Mode

This could work just as well *cooperatively*.

Each person simply has a pattern they want to see on the board, instead of a set of wishes.

(Needs more work before committing this. Also to make it more *different* than the other versions.)

## Rules

On your turn, you can

-   Pick a group of tiles and ask if they fit inside someone's pattern. (Either completely or partially.)
-   Pick a tile and ask everyone if it fits inside their pattern. => same as DIG, must be nerfed to prevent instawins

## Implementation

For this to work:

-   Each pattern *must* be present multiple times on the map.
-   But all patterns combined must identify exactly the part of the map containing the treasure.

I think it's easiest to start with the *hints* ( = patterns) and *build the map from those*.

**Hint Setup:**

-   Start with the "treasure square"
-   Extract a pattern of tiles (for each player) from it, where only *one* square in the pattern overlaps with the treasure.
    -   So, when all are combined, only *one* square is common to all patterns, thus that must be the treasure.
    -   But between players, their patterns might overlap quite a bit.
-   Now fill in these tiles with details.
    -   If multiple players share a square, obviously split the details between them.
-   Apply this exact configuration to the board.

**Board Setup:**

-   Randomly apply the player patterns across the board!
    -   Create a random orientation
    -   Try to fit it somewhere
    -   If it tries to add details *that can't be added*, it retries. (For example, a tile already has terrain, and we would want a *different* terrain there.)
    -   But if it perfectly overlaps with the available information, we're very happy with that. (It wants a tile to have a specific terrain, and it already has that, so great!)
-   Continue until they've been applied enough times *and* the board is full enough

**Hint Communication:** Simply take the final area for each player, orient it randomly, and slap it on a card.
