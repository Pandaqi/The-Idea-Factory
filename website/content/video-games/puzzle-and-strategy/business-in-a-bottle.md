---
title: "Business In A Bottle"
categories: ["video-games"]
tags: ["strategy"]
language: "en"
progress: 2
---

A game about repeatedly building small shops/kingdoms in a confined space.

_The year is 2100 and the world has realized it can't scale things endlessly. Earth's resources are dwindling. Thus government has passed a law dictating every business to operate neutrally: carbon neutral, profit neutral, footprint neutral, haircut neutral, you name it._

_In Business in a Bottle you aim to create perfectly neutral businesses in a confined space. Everything you place can be scaled, and every finished business becomes a new building block in the next one, but you must never let the scales of balance get out of whack or risk being closed down._

## Setup

* A randomly generated grid with wonky ( = irregular) bounds.
* A deck of simple cards (`+1` this, `-1` that, convert `1` this to `3` that, merge everything connected into this one, etc).
* You draw the first few cards.

## Gameplay

### One Level

You have several cards to choose from. 

* Pick one with mouse or associated key.
* Use another key or scrollwheel to **scale** it up/down.
* Then place this final (scaled) card shape on the grid.

The **size** of the element _multiplies_ its **effect**. 

> Example: if it's normally +1 of X, then placing a size 3 version is +3 of X.

**@IDEA (Hard):** The _rotation_ of the element is determined by position in your hand? So that you do have some control over it, but might need to play other cards first to get one into the right rotation slot?

### Full Game

Now, once you've filled a level, you've "completed" it. The end result becomes a single card---with that level's shape and properties---in your deck. 

In other words, on next levels, you are required to _place that old level again_. Any mistakes made then will come back to bit you. You have to keep placing your older levels into newer (bigger) ones, until you can't anymore.

## Objective

The game ends when the scales are **too unbalanced**. You score for every level completed. The more the scales are balanced, the better your reward.

More thematically:

* You must design some sort of process / robot / building / factory / whatever to devour/use/convert a randomly laid out puzzle. But you must do so PERFECTLY.
* You can't leave anything behind, but you must also run out of energy/movement/space at the exact time you finish destroying the objective.

The fact that all your old businesses come back to bite you should make it harder and harder. Later levels should also have weirder bounds and start with many obstacles, such as "`-1` to all neighbors"

## Theme

This idea was originally for a game jam with the theme _Fit to Scale_. So below are the reasons why it matches,

* The scale / dimensions of your level bounds are tight and matter a lot.
* Everything you place can be scaled up/down with both pros and cons.
* Your final product for a certain level is saved as one small entity you can now copy/place again in all future levels.
* While building, you must balance the scales all the time, or you lose.

