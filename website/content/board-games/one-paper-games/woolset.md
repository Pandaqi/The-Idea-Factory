---
title: "Woolset"
categories: ["board-games"]
tags: ["one-paper-games", "roll-n-write"]
language: "en"
progress: 0
---

A "roll-n-write" game, _One Paper Game_ style. 

**You're shepherding sheep, trying to collect as many of them in your pen as you can.**

The game should be a tug-of-war between,

-   Collecting more and more sheep ( = more points)
-   But also being able to enclose them all and keep them from escaping ( = which would lose you points / score negative points at the end)

A simple implementation would be,

-   On your turn, you either get **new sheep**, **new fences**, or some **intermediary action** (that will lead to upgrades, more sheep, whatever in the future)
-   In the end, score +1 point for **all enclosed sheep**, and -1 for all sheep not enclosed.
-   (In certain circumstances, sheep run away or escape *during* the game?)

(Can I base the name on "sheep pen" + "pen and paper game"? Some pun there?)