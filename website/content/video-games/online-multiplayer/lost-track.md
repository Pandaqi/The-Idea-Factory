---
title: "Lost Track"
categories: ["video-games"]
tags: ["online-multiplayer"]
language: "en"
progress: 1
---

A racing game _without a track_. 

You are dropped in a random world and have to actually _discover_ where the finish is and what the order of checkpoints is.

How to implement?

* You could be "cleaning" this world, slowly uncovering the track below the sand/dirt/ice.
* You could be moving from point to point, and it only awards progress or gives positive feedback if you visit two points _in the right order_. That's how you "figure out" the right track over time.
* You could be collecting money by driving around, and by paying that you get more info about the map / the track

I wrote this down as "online multiplayer", as it's quite easy to drop all players into the same shared world and either help each other (cooperative) or try to be the first to complete one full proper track (competitive). But it can obviously just be a solo offline game too.