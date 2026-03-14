---
title: "Stealing Time"
categories: ["video-games"]
tags: ["puzzle", "mobile"]
language: "en"
progress: 3
---

A "time travel" puzzle game.

You're "stealing time" from people inside the level, giving it to other people so they can execute their action (more often/more quickly).

Moreover, you see the same level in three different time frames (_past, present, future_) and have to manipulate one in clever ways to manipulate the others.

This is a very cool and unique idea, but also incredibly hard to code.

## Level / Map

Each level has 3 identical boards, except for the fact that they are all in **different time periods**: past, present, future.

## Goal

Steal something, without being seen or caught.

## Input

-   Option 1: Move a character on a grid. BORING!
-   Option 2: Scroll through time. Characters already have a movement/plan/fixed behavior attached. You just have to send them forwards/backwards, in the right time zones, at the right moment.

Todo: Create some basic puzzles to get a grasp on how *time travel* would work in this way, and what systems I need for it.

## Ideas

**IDEA:** Things can whither over time. So placing a stone in the past, for example, means you get a broken/smaller version of it in the future.

**IDEA:** There might be **multiple characters**. This means:

-   It can be played with up to 3 people. (And the "simpler version" only has past and present, for 1 or 2 people.)
-   They must help each other in advance (or after the fact), cooperating that way.
-   These might have different roles or abilities. ("The Constant" => not influenced by time changes, "The Slippery One" => when teleported into walls or objects through time, it does not die.)

## Implementation

**Basically, it works through unwinding and redoing**.

When you change something in *one time*, it recreates all the *other times* from this one.

Example: you've just changed the **present** by adding a stone.

-   It takes X steps backwards in time to create the **past**
-   It takes X steps forwards in time to create the **future**

To make this work, each state needs to **save** exactly all the small actions that were performed, at all times.

In the code, we'd need two crucial functions: a `step_forward` and the inverse `step_backward`. They need to be completely deterministic and foolproof/simple.
