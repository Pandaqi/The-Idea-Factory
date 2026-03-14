---
title: "Square Ogre Abstract"
categories: ["video-games"]
tags: ["puzzle", "mobile"]
language: "en"
progress: 2
---

Once upon a time I made a huge puzzle game + picture book called _Square Ogre_. After making it, I realized I should've made the puzzle much simpler and more abstract. That's the idea I describe below.

## Map

Everything is just a **shape** with a certain number of angles/corners. Pentagons, Triangles, etc. Literally. Everything.

## Goal

Get to the exit (and be able to actually go *through* it).

## Main Rules

These are the only core rules we need.

- When your **view distance** stays the **same** ( = how many empty cells in front of you before you see something), you **lose an angle**. 
- Conversely, when your view distance **changes**, you **gain an angle**.
- When you stand **on a shape**, you **rotate by its number of corners**.

You can only *see* shapes with as many corners (or fewer) than yours.

> For example: you are a square. Then you can see squares and triangles, but everything else simply "doesn't exist" for you. So you don't see them *and* they don't block you.

## Alternatively ...

We can ditch the whole concept of "seeing things"

You are blocked by locations which have *more* corners than you.

-   If you stand on a location with the same number of corners, you gain a life. You also **collect** it.
-   Otherwise, you lose as many lives as the *difference* in corners (between you and what you're standing on)

To win, you need to collect all shapes in the level?

(Or we could just add literal "+1" or "-1" squares on the field itself. But that feels boring.)
