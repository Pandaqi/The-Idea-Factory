---
title: "Cookie Cutter Cooking"
categories: ["video-games"]
tags: ["puzzle", "cool-tech"]
language: "en"
progress: 1
---

A (realistic) "slicing" game.

I wrote an algorithm to "slice a shape into any other shape". This is obviously best suited ... for **slicing ingredients for cooking.**

Cookies (or pies/cakes/whatever) come in with specific requirements. You need to cut them into the right pieces, in the right way, to solve that puzzle. Yes, it could be a puzzle game where you need "the perfect cuts", or it could be a frantic fast game where you just need to be "good enough".

Now that I know the `Geometry2D` function from Godot, though, we can go further. We can *combine* shapes on the fly, or *only keep the parts left over*.

## The Big Problem

**The big problem is: mapping textures onto the slices.**

This way, we can only give general *colors* to forms, instead of shapes that would *make sense for the ingredient*.

Although, if we're talking about something like *cookies* or *onions* or *mandarins* that doesn't really matter. They are quite uniform and we can easily "fake" it.

-   With a single color
-   Perhaps overlaid with other rectangles
-   Or just a texture, randomly rotated and scaled over it.