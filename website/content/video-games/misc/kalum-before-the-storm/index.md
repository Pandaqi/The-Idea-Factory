---
title: "Kalum before the Størm"
categories: ["video-games"]
tags: []
language: "en"
progress: 5
---

This was originally an idea for the _Brackeys Game Jam 2024_, with the theme _Calm before the storm_.

I eventually ran out of time to do anything for this game jam. But I really liked this idea, and still do. It's just very intuitive to players:

* You have a red line moving from left to right over the screen. (And then resetting back to left to cycle again.)
* You don't want stuff to touch the red line. (And/or you don't want it to touch _you_.)
* So, every cycle, you try to put yourself or other into safe locations, while trying to "grow" your power bit by bit.
* Such that you can, eventually, defeat that line and win the level.

Below are just the more complicated vague notes as I was trying to figure out this idea.

## The Summary

Name = "Kalum before the Størm"

Inspired by _Stormlight Archive_ book series.

* A **storm** circles around the world. 
  * It starts slow and not that terrible; it ramps up in speed and terror as you play longer.
  * _Visual?_ This could be a simple line from left to right (if 2D side view), or something with more variation like diagonal or circular (if 3/4 view or 3D).
* The storm mostly **moves** and **destroys**.
  * The player has to protect people/things from its wrath.
  * But anything moving around/not "fixed" (including the player) realistically reacts to the wind.
* The **objective** is to stay alive as long as possible.
  * Each level **starts** with a random island/city/setup ("Kalum" as it was "before the storm").
  * Once you lose too many people / things, you die.
* The **twist** is that everything in the game (or at least the most powerful/useful things) are powered by **magic stones**.
  * While holding the stones, you can use them once, then they're "exhausted".
  * To recharge them, you have to leave them out in the open, and let the storm pass over them.
  * (This only happens if the storm is _deadly_ at that time!)

## The Specifics

I'll only enter the jam very late, so I'll have only a day or two to make this. So the actual thing you're managing/doing should be _very simple_. Also, I'd like this to have local multiplayer potential again.

So, what are you actually _doing_?

* Press **MOVE_KEYS** to move around the world.
* Press **INTERACT1** to pick up or drop your gemstones => this might be automatic. (They automatically drop once depleted; you automatically grab them when walking over them.)
* Press **INTERACT2** to use your current gemstone (if full) to _do something_. => this might be automatic too. (There are predetermined spots to do stuff. Or it rotates automatically through the options.)

**@IDEA:** The storm is one continuous _line_ (in a certain direction), but speed/strength starts HIGH and becomes LOWER over time. As such, the storm is only "deadly" within a certain range. After that, it's just _wind_ (that blows stuff around, but destroys nothing) => **Your job, as the player, is to weaken this line in the right places every time it comes around.**

**@IDEA:** Can we make this line _realistic_? Make it a set of points, which are automatically deformed ( = pushed out of wind-resistant objects). They need to stay within X distance of each other. This means the line can shrink, deform, end up somewhere else.

**@IDEA:** This means the line should be able to come from/go anywhere. (Over time, the wind direction rotates and changes. At first, only in small increments. Near the end, it can flip around on a dime.)

**HERE'S AN IMPLEMENTATION**:
* The line starts as a set of points that are circular physics bodies (like a rope).
* All those points have a built-in "wind velocity" that pushes them every frame
* They react realistically to physics, but also try to stay within a certain distance ("constraint").
* If their distance becomes too great (for too long), the wind "breaks" into two separate winds.
* (Optional: if two unconnected wind nodes are close again, the wind "reconnects"?)
* Over time, and for every interaction/breakage, the wind weakens.
* Until it's not deadly anymore => and then just gone
  
**TO TURN THIS OFF** (if that's easier/more fun): we just don't let those bodies "bounce off" stuff and we don't let it "break". Instead, we check if it _overlaps_, and then pause / slow down the entire wind thing.

**@IDEA:** There's a "weather forecast". At the start, it's very vague (timestamps/changes have an error margin, it misses certain events). But you can upgrade it over time, getting a better and better forecast.

**@IDEA:** One ACTION of the player is to become a shield. They break the wind/pause it as long as the gemstone they're using for it lasts.

**@IDEA:** Another ACTION is to BUILD/UPGRADE a home. All people within range will automatically walk to that home. => Whenever the storm hits, it destroys 1 level of the home. (And if it destroys the entire home, the people are simply left free again.)


### Possible Perspectives

* **Side-View Platformer:** you only move left/right. Gusts of wind can move you up/down. This frees your up/down keys for your _actions_. (Manage gemstones / Protect people.)
* **3/4 view city:** your movement is in two directions, and Kalum is more a traditional 2D city/island. We'd need one or two extra keys for the actions, which I don't like. (Otherwise, this is simpler and less experimental.)


