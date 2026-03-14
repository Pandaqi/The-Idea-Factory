---
title: "Cookie Cutter"
categories: ["video-games"]
tags: ["mobile"]
language: "en"
progress: 1
---

You are constantly presented specific cookies + a recipe/request => how many parts and what they want.

You must slice across the screen to cut it precisely the way people want.

Must you also deliver manually by swiping pieces to different parts of the screen? Or does the system just auto-check?

* Use my slicer code for that. But *really clean it up*.
    - (We still need them as *bodies*, to check what the raycast does.)
    - (Although, using **Godots geometry tools**, can this be simplified?)
* How to keep textures constant? **Simply keep the whole texture! But *mask/remove* whatever isn't inside that part anymore.**
* (And the bodies can be resliced anyway.)
* How to generate random orders? We let the *computer* pre-slice it, then calculate the result of that. *That becomes the target for the player.*
* How to know if certain parts (cookie crumbles, other ingredients, etc.) are inside a part? Do a simple *angle check*.
    - Doesn't work if we allow *re-arranging/shuffling the parts* (to throw them into different containers).
    - In that case: we already know *which part of the original texture* we are. (We need that for masking stuff.)
    - So just use an underlying *grid* that knows what is where. When slicing, we recalculate which part of the grid we have, and thus know what's on us.
* Extra ideas? Multiple cookies. Ingredients that are "jokers" (or recipes that say "we want either A or B"). A certain *order* to the operations.
    - This way it becomes more than just cutting the same cookie all over again.

