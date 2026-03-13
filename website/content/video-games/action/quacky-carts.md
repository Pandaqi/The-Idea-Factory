---
title: "Quacky Carts"
categories: ["video-games"]
tags: ["action"]
language: "en"
progress: 3
---



**Summary**: you control multiple carts, but can only move one forward at a time (by pressing its specific key). However, moving a cart also turns on its light and attracts the ferocious ducks eager to kill the cart.

This was originally an idea for the _Godot Wild Jam 72_. The only reason I did not make it was because there was a heat wave that made it near impossible to work that weekend _and_ which made me more motivated to make something sun/heat/summer-related instead. 

I still think it's a really solid idea. It's an example of a _distribution problem_---you can only move/see one cart at a time, while you have multiple that need to get somewhere---and I believe all good games are at their core a distribution problem.

## Setup

* It generates a random map (rather small) with X "cart tracks" with a start and finish, and a cart at the start.
* It instantiates a bunch of ducks in the distance

## Objective

* Get at least one cart over the finish.

## Gameplay

* Only a single cart will have "light" on at a given time. To switch to a new cart, press its key
  * But the keys on the keyboard are just randomly chosen and can change.
* The ducks will walk straight to wherever the light is and attack. Damaging the cart until it's died.
* _When in the view of one cart, you get to see the secret powerups (underneath the tracks) of the other carts._

As such, the general challenge is as follows.
* You must keep switching between carts to keep the ducks walking around.
* But you want to keep a cart on for as long as possible, because once you let go, it starts falling back again and the key will have changed.
* And you want to view the powerups for other carts, so you know which one to use next to get the best/nearest powerup for you.
* And all that with **one button** (and no tutorial)

## Extras

* Allow hovering over powerups to get an explanation what they do.

## Tip: Make Systems Standalone

* POWERUPS: The secret powerups underlaying the entire map are _timed_. So you need to check if something is currently on/off, then switch to the other cart to drive over it while it's "safe", then switch back
* CARTS: The vehicle tracks simply move through the same very cramped space => When moving one cart, you can't see the others, and you're desperately trying NOT to bump into the other ones accidentally.
  => Would need some penalty for switching, otherwise I feel it's too easy to back out when you think they might be close => NOT NEEDED, KEYS SWITCH AUTOMATICALLY!
  => Certainly not needed because carts AUTOMATICALLY FALL BACKWARD ( = slowly roll backward) when not viewed.
  => To give a sense of urgency from this system alone, because now all carts are automatically in movement, whether you like it or not. (And perhaps they all started from the same place, or something close to it, so they'll inevitably hit each other if left alone.)
* DUCKS: ??

@IDEA: Speed up the cart, the longer you stay on its view

KEY QUESTIONS:
* How to make the most repetitive action ( = switching carts + staying in their view) as FUN as possible?
* How to make all rules teach the player to take risks, be proactive, reward different strategies?