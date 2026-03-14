---
title: "Save The Cat"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

## Objective

You try to get as **low** as possible into the map, and steal as *much* as possible. 

But you also need to **get back up** safely. So the lower you go, the riskier the return journey

## Map/Action

You are cats dangling from a rope from the ceiling.

* You automatically move left/right.
* You automatically lower, but you can tap/hold the screen to go up instead.

**You** can hit stuff with your body and be influenced. **Your rope** ignores everything.

The level is endless and randomly generated. It looks as if you're entering a building. So add floors, windows in background, furniture with objects left and right.

But be a bit abstract with it. So it's clear what you can interact with and what not.

## Implementation

* Your anchor point at the top always moves left/right
* If your body lags behind (for whatever reason), it tries to move to match X-coordinate again. (This allows blowing your body away, for example, or freezing it. Once the obstacles goes away, it neatly goes back to normal.)
* The rope is just a line between that anchor and the body.

## (Old) ideas

* *Holding* your touch (or *double-touching*) will somehow move you horizontally, or vary this drop in some way. => This could also be automatic. As long as it's *shown* to the player what will happen in a few seconds.

Dangers will hit you from the side. But you need to *use* them to reposition yourself.

* Getting hit by a pushblock will *push* your rope to that side of the screen.
* Getting hit by a *fan* (on your body) will blow you to that side.
* Regularly, there's a "new floor". When you pass it, your rope will re-anchor at the location where it *hits* that new floor. (So you drop straight down from there instead.)

Maybe grabbing something will change how you move? Or total movement changes happen through a *ticking clock*?

_Alternative Titles: "Only Brought One Rope" / "Rope Thieves" / "I Thought You'd Bring Our Gear"_