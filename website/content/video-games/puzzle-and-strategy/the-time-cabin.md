---
title: "The Time Cabin"
categories: ["video-games"]
tags: ["puzzle"]
language: "en"
progress: 1
---

**You are a time traveler sent back in time to solve a crime.** You're not allowed to go back to your own time (in the future) until you've solved the crime (and *proven* your case). A mind-bending puzzle game.

## Gameplay

You play a single player, always centered on the screen. You can do **two things:** move around and travel in time.

### Travel In Time

-   With the press of a button, you can scroll **forward/backward** in time.
-   Time is always frozen for you: you look at a *specific* instant of time.

### Move Around

-   Joystick/arrow keys to walk around and jump (**platforming controls**)
-   Another button for **interacting** with objects

## Visuals

The whole game takes place inside/around a single cabin. (Although the cabin has several floors, rooms, a basement, and perhaps a small area around it.)

It's a **2D game**, **pixel art**, looking from a **side view**.

## Timeline

Create a **tool/interface** for easily creating timelines. (Similar to Adobe After Effects timeline style.)

On game load, this timeline is **converted** into individual frames.

> Frame start + end are interpolated. (Especially for moving people, we only want to say "starts here" and then "goes there".)

Now, in the game, we can *immediately* load the frame you want.

When **loading**, we might want to check which objects actually **change**, if loading the whole thing is too time consuming.

## Idea

Probably something like: a bomb killed someone. Find out who did it and arrest them ( + evidence?)

You must figure out the pieces of the puzzle, gather clues, perhaps change a few things, watch conversations between people.

You **start** just after the killing happened.

At the start of the game, your view is limited in all ways:

-   You can only travel X amount of time forward/backward
-   You can only travel in *steps/jumps* that are quite large.
-   You only see one small part of the cabin. The rest is underlit, not accessible, or simply doesn't exist yet (in this time).
