---
title: "One Builder Game"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

A kind of _Islanders_ City Builder, but as a One Button Game.

Options for **buildings to buy** go past on a conveyor belt (or something similar, cars that drive past, whatever). 

Buildings have different requirements about position, neighbors, spacing, etcetera that determine how many points they score. (Example: "score +1 point for every other building of the same type next to it")

Players have different roles (if cooperative).

* One person is responsible for tapping which building to buy.
* One person is responsible for deciding its ROW
* One person is responsible for deciding its COLUMN

Alternatively, 

* There is only ever ONE building offered.
* The game automatically cycles through grid squares, every player individually.
* Press your button to CLAIM the current building on offer -> it places it immediately inside your current square.

(It's most predictable if you go row by row, or snake/slither down the map. Everyone starts in different locations + building something forces you into that spot for a moment. This offsets player's location. In any case, the `AutoGridMover` will just skip non-empty cells, so you're NEVER in the same cell as another player.)