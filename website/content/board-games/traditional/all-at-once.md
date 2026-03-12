---
title: "All At Once"
categories: ["board-games"]
tags: []
language: "en"
progress: 3
---

The idea is to have a territory management (Risk?) game with **simultaneous turns** and **deck-building**.

## Setup

Draw 12 random **country** tiles and place them in a 3x4 grid. 

All players are a _color_ and have ~10 cubes ( = soldiers) in that color. Take turns placing 1 soldier on any country. (_Remark:_ Change number of cubes per player count?)

Give each player one random **Conflict Card** for their starting deck. Place the remaining cards in faceup piles, sorted by type: the **market**.

@TODO (possible alternative): just make X random piles, then sort them from low cost to high cost.

> For a faster/simpler game, you can remove some of the most expensive cards, as well as all or some special cards.

Finally, give all players their **starting deck**: 1 Add card, 1 Purchase card, 1 Move card. Pick randomly from all such cards that cost 1 coin. (More expensive cards should be left in the market to buy later.)

You may study your entire starting deck now, but not anymore once the game has started.

## Objective

The game ends as soon as one player has lost all their armies. Highest score wins!

## Gameplay

Rounds are simultaneous! Each round ...
* All players draw the **top 2 cards from their personal deck**.
* They choose **one to play, and one to discard**.
* Once done, all played cards are revealed and handled.

Usually, cards can all be executed simultaneously. When cards influence the same area, however, an order must be established. (You can see this by checking if any of the marked tiles on their 3x4 "minimap" matches any on another card.)

In this case, check the Delay number on your _discarded_ card. Players handle their cards from low to high. If this is still a tie, then the cards are simply **not executed**.

@TODO: (optional) if any card has been played with a "!" icon, then _all_ cards need to be sorted and executed in turn. (From Delay value, low to high, with duplicate values being removed entirely.)

Cards played move to your discard pile. When your draw pile is empty, shuffle the discard pile and make it the new draw pile.

That's it!

## Scoring
Determine your score by summing three values.
* For each **army** of yours left (on the board?), score 2 points.
* For each **country** in which you have the majority (ties not allowed), score its value.
* Each **score card** in your deck scores the number of points on it.

## Cards
Cards show ...
* A purchase cost (when in the market)
* A 3x4 minimap of the world with all potentially influenced squares marked. + One extra special square to indicate the **market** (which is used by all Purchase cards)
* An icon ( + more icons/numbers) to illustrate what it does.
* A name ( + perhaps its short description below)


The different types of cards are ...
* **Conflict:** this shows one specific country. _A battle is fought in that country. Whoever has the majority is left standing, all other armies are removed from the game._
* **Score**: this does nothing, but scores more points at the end.
* **Purchase**: this shows a country or a section of the board (like 2x2 or a row/column). _Buy new cards from the shop. The amount of money is given by how many soldiers you have in this area._
* **Move**: shows direction arrows. _Move one group of your soldiers to an adjacent country in the direction shown._ It CAN show ...
	* A number of armies: in this case, you move at most that many.
	* A number of footsteps: in this case, you move them that number of steps.
* **Add**: shows a number and a section of the board. _Add the number of soldiers shown to that section of the board._
* **Retreat:** shows a number and a section of the board. _Retreat the number of soldiers from that section of the board._ (Retreat means they go back into your supply.)
* **Special:** @TODO; one-off cards with special powers.
	* **Scare:** pick a country. Move _one_ soldier to each adjacent country (if possible).
	* **Surprise**: trigger a Conflict in any country (that doesn't contain your soldiers?)
	* **Bomb**: if another Conflict is played, this becomes a Conflict card in an adjacent country of choice.
	* **Replace**: swap 2 armies in any country with 2 armies from your own supply. (The others go into your supply? Or you force them to "retreat"?)
	* **Lockdown**: turn one country facedown. Nothing can happen there: nobody enters or leaves, no conflict, etcetera. (If any countries are already in lockdown, open them again?)
	* **Reload**: add your discard pile back to your draw pile, then shuffle.

When a card shows a regular soldier, it means _your_ armies. If it shows a rainbow soldier, it means _another player's_ armies.

Of course, "cheaper" cards have more restrictions and allow less. (A more expensive "Move" card, for example, allows moving more troops and taking more steps.)

## Countries

These are just square tiles that show ...
* A score (for when you occupy it)
* A max capacity (you simply can't move into it when reached)
* A terrain? => Players have specific weakness/strength for terrain using random roles at the start?
* A special rule for occupation / moving in/out / ?

## Expansions & Variants

### Advanced Rules
Players draw **3 cards** each turn. They discard 1 and play the other 2; you decide the order yourself.

Then they are handled in two phases. (Essentially, we simply repeat the core rules twice in the same round.)
* Phase 1: the first card of each player is revealed and handled.
* Phase 2: the second card of each player is revealed and handled.

### Random Worlds
You can change the shape of the world! You can shrink it for an even tighter game, or grow it to support lots of players, or turn it into a weird shape.

This does, however, require rule changes. (Because most cards pinpoint specific squares in the 4x4 grid of the regular game.)

* Use the **terrain** of each country, instead of its location in the world. (For example, if a Conflict Card shows Forest terrain, then make a conflict happen in one forest country of choice.)
* This also means that any cards with matching **terrains** need to be sorted (following the Delay value of the discarded card) before handling them.

Remove any Conflict Cards showing terrains that you didn't add to your world.

RULES for if we add unique numbers to cards: "Otherwise, find the card with the **highest number**. Starting with the player, take clockwise turns in which each player executes their card."



**@VERDICT: Very unique and very promising.** The only thing that makes it a tough sell is the necessity of cubes or many "soldiers" per player in some way. Otherwise, something to certainly try.

=> If I can find another version of the idea _without_ extra material, and _with_ orders built-in like Diplomacy (so you already state exactly what units moves/holds/supports and where, simultaneously), but SIMPLER ... that'd be golden.

=> Oh, and, if I can find another way to solve "simultaneous turns without conflict" that allows the map to have ANY shape or size, that'd also be nice.
