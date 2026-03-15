---
title: "Hidden Movement Game"
categories: ["board-games"]
tags: ["one-paper-games"]
language: "en"
progress: 0
---

A hidden movement game a la "Letters to Whitechapel" and "Last Friday"

## Requirements

- **Randomly generated boards.** Using the website, create random graphs, number them, make them look nice.
- **One Paper Game.** Make the game playable by writing on the map = one paper. (If possible, make a simple variant where you can literally copy the map by hand to a blank paper?)
- **Unique Theme.** Not tracking a killer/murderer/spy through a city/town/camp again. Really something unique. Like ...
    - The map represents a galaxy
    - It represents a modern-day city and players are trying to deliver food but avoid the food thieves.
    - Or a bank was robbed and you need to catch the robbers before they get out of town => nah then it'd just be a major upgrade to "Paper Thieves"

The unique theme would, hopefully, result in more unique gameplay, rules and mechanics.

It'd also be nice if maps can stay *quite small*. Makes it less overwhelming, easier to see.

**IDEA:** Reserve one strip of the paper for the one being tracked. They can cut it off, or simply fold it, and keep track of their movement on the backside.

**IDEA (follow up):** A two player variant where there are *two strips* (on opposite sides of the paper), and you're both moving in secret.

**IDEA:** Allow leaving stuff behind, like bombs or traps.

## Implementation

- Create some **fixed locations**. (Like a place where *no dot* may be put, a place with different terrain, etcetera.)
- Place random nodes + connect randomly.
    - Big and small nodes are all placed randomly through each other.
    - Big nodes only connect to small nodes (not directly to another big node)
    - Small nodes connect to both, but will not create a sequence of 3 or more small nodes (without a big node).
- "Relax" the nodes.
    - Use those predetermined things about the map to prevent it becoming too uniform.
    - Write some code to slightly curve paths? (So create a Bezier with the control point just *offset* slightly outside the paths.)
    - Create a much more precise grid in the background. As we calculate/sample points on lines, mark which cells are filled. Only allow curved paths to go through unfilled cells.
    - **Alternatively:** represent the paths between nodes by *tiny tiny nodes* attached to each other. During relaxation, these are simply pulled around and try to go in various directions. When drawing the board, we create a smooth path through these tiny nodes to get organic stuff.
        - **This is really interesting if we can pull it off.**
- Loop through them, numbering them as we go, assigning special types as we go.
- Write some code to add random decorations, blobs of texture, etcetera

Feel like I just need to *create* this and learn from that.
