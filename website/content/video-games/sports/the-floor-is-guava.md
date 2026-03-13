---
title: "The Floor is Guava"
categories: ["video-games"]
tags: ["party", "sports"]
language: "en"
progress: 2
---

A simple **party game** with the goal of **staying alive longer than the rest.** In other words, _the floor is lava_ as a casual family video game.

-   Mode 1: Constant. You must *always* stay off the floor.
-   Mode 2: Interval. Once in a while, someone triggers "FLOOR IS GUAVA" (or this happens automatically), and you have X seconds to get off the floor.
-   Mode 3: Tag. Players can tag each other. The longer you *are* the tagger, the slower you get, until at some point you just die.

How do we make this interesting?

-   Players are rewarded for being on the ground, or near the ground.
-   Players have general tasks to do, which require them to move around. (A simple "move or die" timer would also work wonders.)
-   The arenas are filled with unique obstacles and rules, which might even *change* during play.
-   Players constantly have to check their **physical properties.**

## Physical Properties

How do you stay off the ground?

-   By jumping
-   By leaping/running to higher ground
-   By pulling yourself up or hanging from something
-   By, well, *doing stuff* and *doing it quickly*.

These can all be expressed as:

-   **Stamina** => how long you can do stuff (and how quickly this degrades)
-   **Strength** => how much weight you can pull (either yourself or others) and how long you can handle it
-   **Jump** => how high you can jump, and whether you can do special jumps (wall jump, double jump, etc.)
-   **Agility** => how quickly you can rotate, change direction, change action, stop moving

Here's how you handle them:

-   You start with a certain amount (might differ between players)
-   Doing stuff depletes them
-   Being on/near the floor, or doing those *tasks*, replenishes them or upgrades them

As such, you must constantly think:

-   Is it worth using resources for this?
-   Will I risk getting more?
-   Do I have enough resources to travel a certain path?

## Issue: complexity

How do we communicate **all these physical properties** to players? Without clogging the screen or making it overwhelming?

-   Allow turning them on/off individually. (When you start the game, you see only *one* of them.)
-   They are shown *on the body part it relates to*. (Jumping = legs, Strength = arms, Stamina = upper body, Agility/Reflexes => head)
-   They are small icons over player heads, filled X amount. (No numbers or other data there.)
-   They only appear when relevant => nah, hard to do well, and robs players of strategic foresight

## Issue: static arenas

If arenas are always the same, you quickly learn the best places to be so you can stay off the floor.

As such, there should be

-   **Direct player interaction** => you can push/pull other players, some objects/elements can only be used by a limited number of players
-   **Indirect player interaction** => stuff in the arena can be broken, new stuff can be added, stuff can be *moved*
-   **Automatic arena rules** => the arena automatically changes and shakes things up

## Idea: actually incorporate the "guavas"

So, the floor is a bunch of guavas, like a ball pit ( = "ballenbak"). Nice, should look cool and unique.

But we can go further than that.

Those guavas are of course *loose, ball-like objects*. This means they can move and jump around.

When somebody falls into it, a bunch of guavas pop up. When someone *throws* something into it, especially if it's a bomb, a few can fly off.

Here's the thing: **if you get hit by *any* guava, you lose the game.** (Most of the time, this will still only happen when you touch the floor. But now it allows other strategies and ways to eliminate players.)

Remark: to test collision, we should monitor contacts **on the player**. (NOT the guavas! That would crash the computer.)

## Idea: everyone is handicapped

This game would work *great* if players could actually grab stuff, hang from it, swing to other locations, etcetera.

It should be a 3D platformer-esque thing, situated on a playground of sorts.

But ... with realistic bodies this is too hard. With very abstract bodies, there's no way to make it work.

Instead, what if players get a "random body"?

-   You are a cylinder/blob standing upright. (Or another shape, if possible.)
-   One or multiple arms are dangling from your body => when you grab something, they detect with a RayCast the nearest body, and cling to it
-   One or multiple heads are dangling as well.

This could be a:

-   Active ragdoll
-   Regular ragdoll, but only certain bodies/bones are being *simulated*
-   Or fully physical simulated with just a cylinder body (that stays upright) and other stuff attached to it with joints, moved by forces.

(How is this different? In the first case I'd model an actual 3D person, give it bones and a skeleton, and use that. If physically simulated, we just create basic bodies and joints in Godot, nothing more.)

## Notes

Can also use some other word in the title that sounds like "lava". Maybe even "floor" can be changed to "door" or "shore".

Two games with same idea, but they're way more dark/realistic/gamery-online-multiplayery:

-   Hot Lava (most acclaimed/popular): <https://store.steampowered.com/app/382560/Hot_Lava/>
-   The Floor is Lava (what's up with this??): <https://store.steampowered.com/app/809430/The_Floor_is_Lava/>
-   This one is just very cartoony and meh: <https://poki.com/en/g/the-floor-is-lava>

The name comes from the fact that **the floor is just a bunch of guaves** (a fruit type) **and you fall through when touching it.**