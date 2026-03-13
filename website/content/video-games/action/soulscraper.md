---
title: "Soulscraper"
categories: ["video-games"]
tags: ["action"]
language: "en"
progress: 2
---

A shooter-like game similar to _Nuclear Throne_, but with an important twist:

> **You become the person you shoot.**

What does this mean? When you hit someone, you ...

-   Teleport to their location
-   Take over any of their properties/modules/abilities

In other words, you are a **Soulscraper**.

You are playing death itself, or you are one of his assistents/experiments => in all levels, there are "innocents" which you may not hit, though you *can* use them for soulscraping. Makes it even *more* strategical.

**IDEA:** When someone is killed, their soul leaves their body. You must catch it within a certain amount of time. Otherwise, it goes back (for enemies) or it's eternally lost (for innocents)

**IDEA:** That could work: playing death itself. Maybe you don't even participate: you're just an observer to an ongoing battle, doing your job, trying to collect and guide souls as much as possible. (To heaven? Some cartoony, gamy equivalent of heaven?)

**VERY STRONG IDEA:** Everyone has a "dying wish". So, everyone you kill will tell you their dying wish (when you come near/immediately when they are killed?)

You **must** fulfill this wish to get any points.

This creates a nice balance: kill too many people, and you can't fulfill their wishes, so it becomes meaningless.

Also, it adds story and poetic meaning => game could be called "Dying Wish" and be about all that stuff.

## About the name

Soulscraper sounds very ... harsh and violent. Maybe something like,

-   Soultrader
-   Soulchanger
-   Soulsailor
-   Soulstealer
-   Soulchainer

## Gameplay

You can play with 1-4 players.

Levels are randomly generated. There are worlds and enemies follow a *somewhat* predictable pattern per level (in terms of their abilities and how they work).

You start somewhere in a corner. You must defeat all the enemies and get to the portal to reach the next level. After X levels, you reach the final stage. (What's special about it?!)

Your lives, ammunition, guns, etc. is extremely limited. The game is supposed to be about fighting *smartly* and making the right decisions quickly. (Because where and who you shoot almost completely determines your next position and set of possibilities.)

One thing to help this, is that early decisions can influence stuff later on. Maybe setting something in fire, will slowly set the whole stage on fire, which can either help or hinder you. Or enabling/disabling something, or breaking/repairing something, it becomes like a shooter-puzzle combo.

## Input

Playable using **controller / keyboard**, on any computer. (Maybe even mobile if I restrict keys so much?)

**Analog/arrow keys:** moving

**?? button:** shoot (can hold it; reloads automatically)

Your aim automatically rotates around you. When you press the shooting button, you shoot according to your current aim. You can *change* the aim rotate direction using the **?? button**.

## To Do: Random Generation

Use a tilemap for the random generation.

-   Use diggers + parameters + tricks (see post vlambeer)
-   Give tiles proper collision shapes
-   Make it look nice by alternating the tiles used (top, front, side)
-   Use an Y-sort. (Split into multiple tilemaps? One floor, one layer above?)

**AMAZING RESOURCE:** How Nuclear Throne did its random level generation: <https://web.archive.org/web/20130430215452/https://www.vlambeer.com/2013/04/02/random-level-generation-in-wasteland-kings/>

-   They used crawlers, and some nice tricks (and parameters), and even more nice tricks.

**AMAZING RESOURCE:** An actual tutorial implementing this algorithm in Godot: <https://www.youtube.com/watch?v=R0NXrQFCpaw>

**GOOD RESOURCE:** Lots of links about random generation: <https://news.ycombinator.com/item?id=8782532>

**IDEA:** A game/mechanics like Spelunky would also be fun. Watch the Mark Brown video on how they did it: <https://www.youtube.com/watch?v=Uqk5Zf0tw3o>

-   Ensure a possible path.
-   Place pre-drawn rooms on the path, fill it up with randomness.
-   Also, clever tricks. (Enemies in open areas, good stuff in more enclosed areas, etc.)