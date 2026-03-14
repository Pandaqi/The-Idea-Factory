---
title: "Downhill Skiing"
categories: ["video-games"]
tags: ["one-button-games", "sports"]
language: "en"
progress: 2
---

A random map is generated with a simple (snowy) parcours that starts very high and only goes downhill. As such, if we just enable physics, all players will automatically start moving downhill and towards the bottom.

While doing so, players simply **try to get through the right gates, use jumps over obstacles, and NOT run into each other.**

* You automatically fall down/move forward.
* **Quick pressing** your button will _jump_.
* **Holding** your button will _rotate_ you.

The snow on the ground dictates direction/speed. 

Also, going through a gate changes your rotating _direction_ to the icon on the gate. Or it might trigger some other special effect clearly indicated on the gate.

The perspective/direction of this can be left->right or top->bottom. 

The only issue here, really, is that "realistic" physics speeds up the player too much. If we just let the engine handle it, the player will be going blazing fast within 5 seconds. The solution is to be even more realistic: write some simple code for **air resistance** and **friction** to keep players below some maximum speed going downhill.

<!--- **EDUCATIONAL = Path Prediction, Directions/Clockwise, (Color) Matching, Collision Avoidance** --->