---
title: "Not My Suspect"
categories: ["board-games"]
tags: ["tile"]
language: "en"
progress: 4
---

A silly game about finding the exact perpetrator of a most heinous crime.

## Objective

The game ends when somebody can't draw a new suspect anymore.

The winner is the one who guessed the most suspects (from other players).

## Setup

**Web of Clues:** Place the "detective headquarters" (HQ) card in the center of the table. Form a 3x3 grid around it of randomly drawn cards. Pick one row and column and reveal all cards inside those.

**Suspects:** Create a deck of X cards. Remove the rest from the game. Deal each player one card.

TO DO: Grid size and suspect deck depend on player count.

## Gameplay

Turn-based, clockwise, most secretive player starts. On your turn, you **modify the web, check what it says** and then **guess a suspect**.

### Modify the "Web of Clues"

Modify 1-3 cards. A higher number, however, has consequences ...

Pick a card that **shares no properties** with your secret suspect. Either **rotate** the card or **flip it** (between faceup and facedown). You can never modify the same card more than once during a turn.

If you cannot modify any card, add a new card to the map at any position.

If you *rotate* HQ, you may not modify anything else, as it counts as modifying 3 cards. The HQ cannot be *flipped*.

### Determine the Web Rules

Starting from HQ, follow the cards to learn the **web rules**!

-   Most cards point to another card (arrow, skip, other rule)
-   Facedown cards are skipped.
-   Follow this chain until it stops:
    -   A card does *not* point to anything
    -   Or it points to a card you *already passed* in this chain
-   The HQ rule applies to this final card (before the chain stopped).

### Guess a Suspect

When guessing a suspect, you must mention the three properties: CLOTHES, HEIGHT, and ACCESSORY.

You must follow **as many web rules as the number of cards you modified**. (Ex: if you changed two cards, you must follow two of the rules.) Fill in remaining properties of the suspect however you like.

If any player has the suspect you described, they must give the card to you. Place it somewhere in front of you: these are worth points at the end of the game. They draw a new card.

**TO DO:** Reset the map after a good guess? A way to add cards? Maybe the victim (the one that lost its suspect)

**TO DO:** Some rule which forces you to give more concrete information about your own suspect? Like, in certain cases, you must give up the value of *one* of your properties.

### Non-Characters

If your suspect is a non-character, it has no traits. (You can modify *any* card on the map.)

To win it, others must point at you specifically and say: "you have no suspect" (when guessing)

## Campaign

*You can always make a game quicker by reducing the map size and the suspect deck.*

**Level 1:** only characters (no "non-characters"), easiest HQ, small map, only "web rules" cards => maybe even only the SIMPLEST ones from those

**Level 2:** adds multiple HQs and "guessing"-cards

**Level 3:** adds non-characters and "modifying"-cards

**Level 4:** adds "hand"-cards

## Card Types

Properties:

-   HEIGHT: 3 values (short, medium, tall)
-   CLOTHES: 5 values (dress, trousers, T-shirt, sweater, *none*); also colored/patterned
-   ACCESSORY: 7 values (necklace, hat, boots, spear, smartphone, cutlery, *none*); also colored/patterned

This leads to 3 x 5 x 7 = 105 cards.

Add to this the non-character cards = 20 cards?

### Headquarters

Each Headquarters card points in three directions. (The fourth direction is left blank.)

Default:

1.  Suspect must have this *height*
2.  Suspect must have these *clothes*
3.  Suspect must have this *accessory*

Other options:

-   Suspect must have height and clothes from ...
-   Suspect must have any of the clothes found in this chain
-   Suspect must have two of the same properties as ...
-   If this chain's length is less than 3, you must include a value from your *own* suspect with your guess.
-   \<find more>

### Web Rules

Relevant when following a web chain (to determine web rules). Default.

-   **Rule Change**: override the current rule with "... some other rule ..."
-   **Negate**: negates the current rule
-   **Arrow**: simple arrow that points to something.
-   **Multiarrow**: you may follow the one that you like most
-   **Diagonal:** moves with a diagonal arrow
-   **Skip:** skip over the next card (continue in last travel direction)
-   **Flee Attempt:** if this is the final card in the chain, it swaps with an adjacent card
-   **Taxi:** resume the chain from any other taxi card.

### Guessing

Relevant when guessing (after you followed this card in a web chain).

-   **Strict Research:** when guessing, you may only guess the suspect of *one player* (not everyone)
-   **Wide Sweep:** when guessing, you are allowed to give *two* options for one of the properties (so matching either one is a match)
-   **Last Chance:** when guessing, you *must* be correct, otherwise all players get one point (draw a random card and add it to your point pile).

### Modifying

Relevant when modifying this specific card.

-   **Buddy Suspect:** after modifying, you must modify an adjacent tile (left/right/above/below) as well
-   **Out of Service:** after modifying, you're not allowed to guess at the end of this turn

### Hand

Relevant when they are the suspect in your hand.

-   **Silent Killer:** you may only modify *one* tile each turn
-   **Unafraid:** you must modify the full *three tiles* each turn
-   **Ego:** when guessing, when you're allowed to choose a property, you *must* pick the value from your own suspect.
-   **Repetitive:** when guessing, you must repeat one element from the previous player's guess.
-   **Thingphobia:** you may not guess that somebody "has no suspect"
-   **Obsession:** once every three turns, you *must* guess that somebody "has no suspect"
-   **Payback:** when this suspect is guessed correctly, you have one free shot at guessing another player's suspect.
-   **Wallflower:** when this suspect is guessed correctly, add it to the map. The guessing player draws their point from the deck instead.
-   **Pyromaniac:** when this suspect is guessed correctly, remove three cards from the web and replace them with three new ones.
