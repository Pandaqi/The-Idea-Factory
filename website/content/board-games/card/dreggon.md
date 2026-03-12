---
title: "Dreggon"
categories: ["board-games"]
tags: ["card"]
language: "en"
progress: 3
---

There are piles on the table.

* Each pile has a specific EGG card on top.
* Underneath which may be any number of CREATURE cards.

Players will take turns "brooding", increasing the number of creatures below an egg and bringing it closer to hatching. When someone finally decides to _hatch_ it, they must pick the one card equal to its "brood number". 

> Example: If there are 4 cards below the egg, and it has been brought to brooding level 2, then you get only the second card when hatching (and the other cards disappear).

In other words: you're trying to track all the eggs and make sure you can hatch the perfect one on your turn, to get exactly the card you wanted.

There are actually **two ideas** fully worked out below. The simple version of this "egg-hatching" idea, and below that a more complex version that might also be interesting

_Dreggon is just a pun on Dragon + Egg. Might just be general eggs or whatever._

# Simple Version

## Setup

Place 4 eggs on the table.

## Objective

The game ends once all eggs in the deck have hatched. Highest score wins!

## Gameplay

Take clockwise turns until done. On your turn, you either **BROOD** or **HATCH**.

### Brood

Pick one egg on the table. 
* Its brood counter increases by 1. 
* Draw as many cards as indicated from the creature pile, and add them to the _other_ eggs.
* Then take the special **bonus action** (which is the reward for doing this).

When adding creatures to eggs, they must always be sorted based on **brood value**, low to high. (More valuable creatures need more breeding, and thus go at the bottom.)

### Hatch

Grab any egg on the table.

You score the card from the pile equal to its brood counter. (In other words, if the egg has its counter at 2, you get card 2 from the pile.)

For every card _beyond_ that (lower in the pile), execute its **penalty action**. (In other words, hatching an egg too early means a big penalty.)

Finally, draw a new _egg_ and place it in the empty spot.


## Eggs

Eggs need ...
* A "creature number" (when brood, they add that many creatures)
* Certain requirements (optional)
	* A "max capacity" or "min capacity" ( = starts with X creatures already.)
	* Only accepts creatures of type X. (Or _doesn't_ accept type Y.)
	* Can't hatch until X
* A BONUS action

## Creatures

Creatures need ...
* A "brood value" (for sorting in pile; roughly based on how valuable they are)
* Some way of scoring (either a fixed number or some rule)
* A PENALTY action



# Advanced Version

The idea is that you can _cross_ different animals/eggs to get exactly the results you want.

Your animals/robots/whatever in this game are _built_ from separate tiles, which combine to have some unique functionality.

Here's a rough outline of such rules.

**@VERDICT: Should also work, but has one big caveat.** How do we create "tiles" that can be combined in any way, but still produce something recognizable as a creature or living being? (We could go with the robot theme instead, if all else fails.)

## Setup

Create a deck of _heart eggs_, containing 3 tiles per player. Remove the other heart eggs from the game. (haha, heart egg = heartache, or hard egg) (might also be a _soul egg_ or _life egg_ or something)

Create a market of 4 faceup eggs in the center of the table. Keep the rest in a shuffled facedown deck.

Separate all _creature_ tiles into faceup piles, grouped by color.

## Objective

The game ends when all heart eggs have been hatched. Highest score wins!

## Gameplay

On your turn, either **BROOD** or **HATCH**. After taking your turn, all _hatched_ creatures you have will fire. (You take all their actions and get all their bonuses/penalties.)

Whenever tiles are taken from the market, immediately refill from the deck.

### Brood

Grab an egg tile. This can be from your hand, the current market, or the heart eggs pile.
* If it's a heart egg, you start a **new creature** with it!
* Otherwise, add this tile to a creature that's still brooding. (Place it next to one of its existing eggs.)

### Hatch
Turn a brooding creature into its final form!

Replace each egg tile with a creature tile of the same type, taken from the top of that deck. (That is, a "blue egg" requires drawing from the "blue deck", a "green egg" from the "green deck", etcetera.)

## Eggs & Creatures

Creature tiles generally fall into these groups:
* **Score Direct**: these are just worth a number of points.
* **Score Indirect**: these score based on other factors (such as "number of same tiles in this creature" or "longest chain of this type in this creature")
* **Action Direct**: When they trigger (at the end of your turn), you get to do something immediately. (Draw an egg from the deck. Move an egg to another location. Unhatch a creature tile. Swap your heart egg for another from the pile.)
* **Action Indirect**: These only trigger conditionally, and their results are long-term. (For example: "If you have 3 creatures or more, you may brood twice per turn.")


**@IDEA: Each heart egg has a maximum capacity?** This would prevent one player from dragging the game and building something huge before finally hatching it. => Another way to do that, of course, is special actions that force the next player to hatch, or steal life eggs, or whatever.

**@IDEA: An "unhatch" action?** (Reduce your creature, or parts of it, back to eggs which you can later use elsewhere? But the heart egg is gone forever.)