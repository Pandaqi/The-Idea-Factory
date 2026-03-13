---
title: "Gamechanger"
categories: ["video-games"]
tags: []
language: "en"
progress: 2
---

The idea for this game is simple.

> **All the rules in the game are *visible* and can be *changed*.**

There are these "cards" clearly visible at the top/bottom of screen that lay down the rules for the game.

(These are fixed, but might have spots where some randomness can be applied. For example: "collect X things to win", where X can be a random number.)

To streamline this, the game is always about *points.* (We can modify this to simulate other games. For example, a deathmatch where you win by being the last one standing, also means you have the most points if you get loads of points for surviving/killing someone else.)

**The biggest issue is of course:** that this can lead to literally unplayable games. (For example, you need to move to places, but none of your inputs allows movement.) We can check for this to some extent, but not entirely

-   Be smart about what we do/don't include (and their probabilities)

-   Better solution: **make *changing* the rules always possible**. So players can just change it immediately if it turns out unplayable.

**Also, I think this should be made *physical*.** So rules are represented by actual objects in the world, and not pieces of text overlaying the screen. (That would make them seem detached, more boring, obscure more screen.)

**End Cards:** when the game ends

-   When a timer runs out
-   When somebody reaches a point total

**Point Cards:** how you actually get points

-   Put an object into a goal
-   Eliminate someone else
-   Collect stuff

**Input Cards:** what each player input does

-   Joystick
-   One button
-   (Maybe a second)

Might be hard to also differentiate *how* the button is used. (Long press? Double tap? Held while doing something else?) But also worthwhile.
