---
title: "Three King's Day (Epiphany)"
categories: ["board-games"]
tags: []
language: "en"
progress: 3
---


A fun little holiday game that models the journey from the Three Kings (Sages? Wise Men?) to Jesus in Bethlehem, to bring gifts he probably didn't want.

This game is

* A **racing game** (reach the crib, guided by the star) 
* And a **hidden information game** (you have to find out what Jesus actually wants as gifts)
* And an **inventory / collection game** (you want to collect those things that actually score the most points).

## Setup

Tiles are **hexagons** which can have 3 properties---Terrain, Sky, Gifts---and arrows. Place them in an overall hexagon shape: the **world map**. (As in: Settlers of Catan style.)

Place the **guiding star** next to the board. (It has colored edges, one for each different property.)

Each player picks a different King. Place their marker/role card before yourself and their token on any tile at the edge of the world map.

## Objective

The game ends once all players except one have arrived at Jesus' crib.

Reveal his secret gift desires. Compare it with the items you collected to calculate your score. Highest score wins!

## Gameplay

On your turn, take one step to an adjacent tile. Place your token on **one property** of that tile, then execute its action.

Each property has a generally useful action.
* **Terrain**: modifies the board and player positions on it.
* **Sky**: modifies the guiding star.
* **Gifts**: no action, but scores points at the end.

If you move onto a tile that **matches** the current properties of the guiding star, you may take **two** (different) actions on it.

At some point during the game, the location of Jesus' crib becomes known. Once you arrive on that tile, you're done. (Arriving earlier gives bonus points.)

### World Map (Terrain)

Take one adjacent tile (to your current position in the world) without players on it into your hand. Replace it with a new tile drawn from the deck.

### Guiding Star (Sky)

Place a tile from your hand next to the guiding star. 

If a certain icon appears **three times** (or more) in this row, it becomes permanent. Place one tile with such an icon against the guiding star's edge with the same color. Remove all other cards.

Then check all the tiles in the world that _match_ the current properties of the guiding star. 
* If there are **multiple matching tiles**, do nothing.
* If there are **no matching tiles**, destroy one of its other property cards.
* If there's **exactly one matching tile**, then _that_ is the location of Jesus' crib! (No more actions may be taken that change the star or the board.)

## Scoring

When you arrive at the crib, place your king's token on the separate score tile, at the next available spot. This automatically shows you how many (extra) points you get for arriving earlier.

Then, reveal how much every gift is worth.

Each tile also has **arrows**. (A hexagon can hold 6 triangles, so enough space for both action and arrows.)
* Starting from Jesus' crib, follow the arrows until they point out of the board _or_ back onto a tile you already considered for this chain.
* All **gift icons** on their final tile **score points**.
* The number of points is equal to the **length of the chain** ( = how many tiles you passed, following arrows, until you had to stop).

Now that you know how much each icon scores, determine the value of all tiles in your hand. That's your final score!

@NOTE: No, this doesn't work. All arrows point outwards, so _every_ step means arrows pointing back at itself. Unless tiles had exactly **one arrow** (per type; green/red). When following the chain, it doesn't matter where you _enter_, you just follow that one arrow onwards.

@IDEA: There are green arrows (plus points), but also red arrows (minus points).

## Expansions

@IDEA: Obviously, the different kings have role cards with special powers or abilities.

@IDEA: A version with rectangles and a clear racetrack/path from start to finish? The end is known, you just have to work hard to get there first? (In that version, I also envisioned baby Jesus' crib as a 3x3 or 4x4 grid of hidden cards. Over time, you had to spend actions to reveal them and figure out what he wants.)


## Notes / Implementation

As usual, I'd like to keep material to an absolute minimum.

**@VERDICT: This should work great, if I can simplify it _just_ a little further.** Currently, I envision several variations of each action. (Example: a Terrain action could _add_ a tile, or _remove_ it, or _move another player_, or allow you to _teleport_.) 
	=> It's perhaps clearest if each different action has its own unique icon + color, bringing the total number of properties to 6, though most tiles only show 3 or 4.

Generation: There can be **no** two tiles with the exact same icons! (Arrows don't count? Or can we fold them into the icon system somehow?)

Simulation: Test how likely it is to match exactly one tile. (In different situations, with how many properties on the guiding star, etcetera.)
