---
title: "Stubborn Squad"
categories: ["video-games"]
tags: ["strategy"]
language: "en"
progress: 1
---

A typical 4x/exploration/colony-building game ... but NOBODY DOES AS THEY'RE TOLD. 

The opposite of usual 4X/strategy games where you command troops and tell them to chop wood or whatever, and they always do it.

All you can do is **plant flags** (telling them to "do something here/do these tasks") ... and they will purposely walk around them.

In this way, you need to actually guide your workers to the right spots and make them work on the right things by making those _the only spots they can still go_ :p Subtle nudging/directing.

RELATED IDEA: The entire map is just white/blank. Sure, you can walk around anywhere, but you won't see/interact with the actual world.

* But, besides flags, you can **plant torches/lighthouses**.
* These actually allow you to see further (in a radius around them).
* And once you can _see_ something, you can actually _interact with it/get it/use it_.

Somewhat inspired by this (simple cozy art style): https://www.youtube.com/watch?v=mNYVXQIEkv8

RELATED: Stacked State Machines => https://www.wratilabs.com/stack-based-state-machine/

* Very powerful, very useful.
* Every state is simply its own resource/class extension that can be _started, paused, resumed, finished_.
* Whenever something new happens (player input, enemy appears, some interruption), the CURRENT STATE is paused and a NEW STATE is added at the top of the stack.
* Only once that new state finishes, do we go back to the previous one and resume it nicely.
* (And you could extend that by checking, on resume, if the state is still "valid". Maybe that tree you were supposed to chop down is gone by now. If invalid, simply immediately pop that state off the stack too, and so forth.)
