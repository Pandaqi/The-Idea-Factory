---
title: "Gluejumper"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

A simplified platformer / endless runner with one core rule.

> If the level map shows a **color + pattern**, you may only touch that block/platform with the **matching side on yourself**.

## Objective

Get as far as possible without dying.

## Map

Horizontal. Only floor. Endless to the right. Locks/gates at specific intervals, so you can't go further back. (Might place those gates at the *left edge of the screen* at all times?)

The map is filled with blocks with a certain **color + pattern.** (Though much of it is also empty/white/grey/general.)

## Input/Action

Your character constantly jumps/bounces.

It automatically starts going to the right, but you can bounce and flip horizontal direction. (It tries to stay at the same horizontal speed, in any case.)

You are a simple shape (triangle, cube, pentagon, hexagon, ...). Each side has a different **color + pattern**.

**You may only touch the level with a matching pattern.** If you touch something and the pattern is wrong, you die.

**Tap to rotate your shape clockwise,** and thus change which side of you is touching where

## The glue part

If you match patterns, you *glue* to the wall. (This helps slow down time, so you can actually register what is going on.)

**Tap to release.** It will boost you away from the wall and into the air.

While glued,

- There's a timer: can't wait too long
- There's an arrow/circle indicating how you're about to be boosted off.

So, in practice, you're constantly rotating yourself to make sure you match the level and get glued. This gives time and an opportunity to launch yourself further and with better aim. Then the cycle repeats again.

_Alternative names: Keyjumper, Lockjumper, Jumperlock => As the "matching patterns" is a bit like matching a key to a lock._