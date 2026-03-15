---
title: "Spellwell"
categories: ["board-games"]
tags: ["card"]
language: "en"
progress: 2
---

You're all wizards. On your turn, you add to your own spell, or that of somebody else. Then you must fire your spell, whatever the consequences

NOTE: It's good, just need to figure out the specifics of the "kill curse". (How you might defend against it, if it's not too harsh, etcetera.) Then all the special spell cards and we're good. 

## Setup

Deal all players X cards.

## Objective

The game ends as soon as somebody was killed by a spell. That player cannot win. Of the remaining players, the one with the most points wins.

## Gameplay

Play 1 card from your hand. 

* **Add it to an existing spell.** Place it next to the current row of cards. (You can add to anybody's spell, not just your own!)
* **Or start a new spell** in front of yourself. (A player can have at most 3 spells.)

Then you must fire all your spells: handle the effects on the spell cards from left to right. 

By default, you are both the "caster" and the "victim" of the spell. Special cards allow you to pick another victim. Whatever rewards or penalties appear, happen to the victim. (If a card says "you", it refers to the victim.)

Crucially, each deck contains a few **kill curses**. They can only be added to a spell that already has 5 cards. When you're the victim of a kill curse, you're eliminated and the game immediately ends.

**IDEA**: Something like "if you add to somebody else's spell, you must also pay the other one card" (or "the other player draws one card from the deck") => this ensures you'll usually have some hand cards, even if your spells don't help you get those.

**IDEA**: Shouldn't the recipient default to yourself, and you _need_ special cards to change that?

**IDEA**: Some basic concept of "damage". If you hit somebody with a spell

## Spell Cards
As always, these will be the meat of the game. Get a list of cool powers and usual stuff.

The general types are ... 

* **RECIPIENT**: Changes who can/must receive the spell.
* **SCORE**: Simply scores points. (Based on rest of the spell, based on your other spells, whatever.)
* **CARDS**: Change hand cards (get, remove, swap, steal, ...)
* **SPELL**: Change spells (add, remove, reverse, ...)

Most of them depend on the other details of the spell. (What came before, total number of X icons, total strength, position within the spell, etcetera.)

The consistent phrasing of the powers should be "after me" or "before me". You evaluate left to right, so each spell card should only trigger at that moment, and should not be relevant at all until you reach it.

* _All cards after me score twice as much._
* _The rest of the spell must be targeted at a different recipient._
* _Skip every second card after me._
* _If a card before me allowed you to draw cards, draw 2 more._

Preferably, pick "after me" wherever possible. It's more consistent and easier to parse.

Only powers that are not related to timing/order should be "global".

* _Pick any recipient for this spell._
* _Protects you from the kill curse_ => but this is INCONSISTENT, because it would be a permanent power, not spellbound.
* _Your left and right neighbors can receive this spell._
* _This spell cannot contain the kill curse._

**IDEA!** 
* Powers for which order is important have an _arrow_
* Powers that are global (do before/after all) have _no arrow_ and are skipped over during evaluation.

**IDEA:** Cards also have numbers? Whenever you fire a spell, that's how much damage you do / how many new cards you may draw? (I like multifunctional cards in all games.)

The powers above are all _good_. We obviously want just as many _bad ones_
* _Kill Curse_, first and foremost.
* _Lose 2 points_
* _Discard a card_
* _Remove the last card from any of your spells_
* _Give two cards to the spellcaster_