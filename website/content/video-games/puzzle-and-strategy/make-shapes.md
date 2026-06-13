---
title: "Make Shapes!"
categories: ["video-games"]
tags: ["puzzle", "educational"]
language: "en"
progress: 2
---

An educational puzzle game idea to teach _shapes and colors_. "Make Shapes!" is a bad pun on "Make Way!"

The map is a bunch of **dots** (on a grid), with **grayed-out ("not-yet-filled-in") lines** between them.

Each "turn", 

* The game gives you the next color. (You can see the whole row + the whole background turns that color to be obvious. So you can look and think ahead.)
* **You tap one "grayed-out" line to make it that color!**
* If this finishes a SHAPE (say, a square of only red lines), you "completed that color". 

Depending on the grid/lines possible, you could make triangles, pentagons, diamonds, etc. We might even make this explicit: "RED must become a TRAPEZOID".

Higher Difficulties = 

* You can't overlap lines of different color, so you need to _finish a shape_ (to get rid of those lines) with the right timing?
* Everything _inside that shape_ disappears? This is a way to get rid of "bad lines" you can't use?

## How to generate puzzles?

I think it's a very strong idea with lots of educational value, but I didn't see a clear way to _randomly generate_ its puzzles. (I didn't have the resources to create a large number of them by hand.)

Sure, you can just create an empty grid of dots, then "fit" shapes on it. 

> For example, a square just means "connect vertex (X,Y), (X+1,Y), (X+1, Y+1), (X,Y+1)". But what about e.g. pentagons and hexagons? They need a different kind of grid, otherwise the distances don't work out.

Okay, we might move to a triangular grid. But then squares---arguably the first shape kids will be able to play with---are literally impossible.

Okay, what if we do _both_? We just overlay a rectangular and triangular grid, and any shared points are just considered the same point? Sure, that will work, and it will also create a complicated mess that 4-year-olds can't follow :p

Okay, what if we simply reduce the scope and only use a small set of possible shapes? Then the game loses its educational value again ...

I could not figure this one out, maybe you can.