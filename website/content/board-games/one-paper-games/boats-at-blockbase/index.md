---
title: "Boats at Blockbase"
categories: ["board-games"]
tags: ["one-paper-games"]
language: "en"
progress: 4
---

## Setup

Generate/pick a paper and print it.

All players grab a pen and pick a "pattern" (+color) printed on the paper. They start the game at the "anchor square" of that pattern. (This is literally an ANCHOR as it fits the theme and functionality.)

(Possible patterns are: diagonal stripes, straight stripes, bubbles, crosses, nothing, fuzzy edge/waves? => This is used to _differentiate players_.)

## Objective

The game ends as soon as one player can't move anymore. Players calculate their **score** by checking all squares they "encircled".

## Gameplay

Take clockwise turns until done. On your turn, draw the current (Tetris) **shape**.

* It can't overlap with any existing shapes.
* It can't go out of bounds (which includes overlapping holes).
* It must connect with a previous shape of yours.

If you can't make any move, restart at a new "anchor square" (if possible).

That's it!

## Expansion

PATHERS and LIMITERS only appear here, as they're most complicated and probably need explanation.

## VARIANT

Generate a completely subdivided board => everyone has their own little section with no interaction.

* This allows _simultaneous_ turns. (If multiple people pick a shape changer, the one with the higher number is picked for the next round; that's another reason to uniquely number them.)
* This doesn't require people using different "patterns".
* Might be preferred by people who want fewer interaction, or their own piece of paper.


## Clarifications

Any sequence of connected shapes by the same player is called one "path".

Two icons are called "connected" if they're both inside the same "path". (In other words, there's an unbroken route of squares between them that are all encircled by the same player.)

An icon is inside an "encircled area" if it's completely surrounded by edges of other shapes, with no gap. The original edge of the board is considered a gap/"unused".


## Possible Squares

Some things you want, some things you don't, which is why the Tetris shapes instantly provide a challenge every turn.

BASICS:

* +X / -Y points
* "Worth +X points for every one of this type that you have"
* "Worth +Y points if you have _all_ / _the most_ / _the least_ of this type."
* "Worth +X points, but only if you have NONE of type Y"
* "Worth +2 points, but can't be inside the shape with another icon" / "Worth X points, but MUST be in the same shape as another icon"
* "Worth -2 points, but you may cross off any single untaken square" (Perhaps with softer versions like "any single adjacent square")
* "Worth -10 points if you have more than 3 of these"

SHAPE CHANGERS:

* "A literal shape" => this becomes the next shape players must draw.
* "Counter" => there's a list of shapes on the side of the board (or they're simply numbered); move to the next one
* "Freeform" => the player may pick any other shape from the options

LIMITERS:
* "Can only be encircled by player X / shape Y"
* ??

TURN CHANGERS:
* "Restart your path from another anchor point / any other point"
* "Take another turn" / "Take another turn, which does not have to connect to a previous shape"
* "Next player must skip their turn" / "Pick a player who must skip their next turn"

PATHERS:
* "Scores +10 points if you connect 2 of these."
* "Scores +3 points for each of these that is connected to another of its type"

ENCIRCLERS:
* "Scores +5 points if inside an encircled area."
* "Scores +10 points if inside a path of yours that's X long / contains Y / does not contain another of this type"


@IDEA: Parts of the map can be "finished" or "definitely closed" in some way?

## Implementation & Notes

Inspired by _"Silver & Gold Pyramids"_ => basically the same thing, but as a One Paper Game.

### Rules/Paper

* Print the rules _on the paper_! It's simple enough for that.
* There's always one "shape changer" square included.

### Code

* Take "bites" out of the map (squares that simply can't be used/visited). This simplifies the map and makes it look more natural/less overwhelming, while making the placement of the shapes harder and more interesting. Also place such holes/rocks/"obstacle spaces" within the map.
* Make a subclass for one "Map", so I can easily subdivide into 2/4/8 tiny maps for the "separate/individual variant"
