---
title: "The Floor Is Lava"
categories: ["video-games"]
tags: ["one-button-games"]
language: "en"
progress: 1
---

This contains two ideas for a "floor is lava" game, as a _One Button Game_ (local multiplayer, each player gets only one button to press).

## Floor Is Lava #1 (Simple 2D)

<!--- **EDUCATIONAL = Angles, Shapes, Planning, Resource Management, Thinking Ahead** --->

2D side view map.

* Everyone starts at the top, with "power = 100%"
* The screen spawns random obstacles, downward slopes, etcetera
* By default, you simply realistically fall down.
* If you PRESS your button, you jump away from your current contact point. ( = normal of ledge; does nothing if in air) (costs power)
* If you HOLD your button, you cling to your current position, **but it drains a lot of power.**

You need to be the LAST one to fall down. (As such, it's about managing your POWER properly.)

## Floor Is Lava #2 (Complex 3D)

It spawns a random playground. (I just model some 3D playground stuff, place it randomly, give it a simplified collision box => I remember there being free asset packs like that online.)

**If you touch the floor, you die.**

However, you must also regularly grab "boost" (or some equivalent of that) => if you miss that (your meter runs into 0%), you become extra heavy and slippery

> Optionally, there's one "pusher" or "tagger" => their only goal is to push the others to the floor (to make stuff happen), and they only win if everyone else has touched the floor before timer runs out/X boosts are grabbed/some other condition.

Hmm, NOT ONE BUTTON PROBABLY. Needs movement + jump. Unless I come up with some crazy input scheme with one button. Like, an auto-rotating arrow and you jump in its direction on pressing. 

Or, no jumping at all, just movement + auto-launch spots everywhere. **Trampolines** seem like the ideal auto-launch spot!

* It should actually be DOABLE if you can move around freely, but have a JUMP TIMER. After every X seconds, you just jump automatically, wherever you are.
* And if you pick up more boosts, you jump higher/more often/get more control in the air/are less slippery. 
* (Conversely, if you run out, you rarely jump, and you can barely steer? Is that fun?)
* Every time you move, it drains more boost/power. And all the surfaces are all _slightly angled_ and circular and slippery. So you want to stay up with as little movement as possible, timing jumps well.

Maybe then it makes more sense to **let the LAVA RISE**. You _have_ to be proactive and grab stuff, because you want to climb higher and higher. (Though this has the issue of requiring some upper limit, and once reached, the game kind of stops being a game.)