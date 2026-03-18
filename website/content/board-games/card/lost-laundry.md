---
title: "Coop Chess"
categories: ["board-games"]
tags: ["card"]
language: "en"
progress: 3
---

It's a game about **money laundering.** _Needs a much better name._

You have money in your hand.

**During the game:** regularly, "police" investigates hands. The player who scores highest on some metric (highest total money, highest number of cards, highest money card) will get a penalty

**Money laundering:** during play, you can pay/use money for things. This is often done *face-down* and by *number of cards*. (So you might pay "3 cards" for something, but their value is unknown to everyone else.) This is how you get rid of "bad" money.

**Game end:** but when the game is over, the player who paid the most money in this (secret) way, *loses immediately*. (Or, rather, they're disqualified from winning the game.)

## Setup

Deal all players their starting money. (TODO: Make table/decide some amount.)

## Objective

The player with the best cards in their hand wins. Each money card is worth 1 point. Other cards are worth the point value on them, or 0 points otherwise.

**However,** the player who paid the most secret money during the game, is disqualified from winning!

## Gameplay

The game plays over X rounds.

Each round, new cards are drawn from the deck and openly displayed on the table. The number of new cards is always "number of players + 1".

From the start player, go clockwise around the table taking your turn.

On your turn, you can

- **Buy one card** from the table. Pay the money, get the card in your hand.
- **Play cards** from your hand to execute their action.

Both of these are optional (?) => @IDEA: or something like "if you didn't buy anything, you *must* play an action"?

There is **no** hand limit.

Once the final round is over, score your hand and reveal your secret payment pile.

## Buying

Cards can be bought in one of two ways: *public* or *secret*.

- Public = pay the money shown (exactly). Place your money cards, face-up, on the **discard pile**.
- Secret = pay the *number of cards* shown (exactly). Place them face-down on your personal **payment pile.**

Some cards only have one of these icons. They can only be bought that one way.

## Police

Police cards investigate the player's current hands. The "winner" of the challenge is penalized: they must replace two cards from their hand with "bad reputation" cards.

You can play one at any time *between two player turns.* When played, all players give the information needed to execute what the card says.

The possible challenges are ...

- Player with the most cards in their hand
- Player with the highest value money card
- Player with the highest total sum of money in their hand
- (Rare) Player with the most bad reputation cards
- (Rare) Player with the most objects of type "X"

At the end of a round, all police cards that weren't bought *execute immediately*.

## Cards

- Bad Reputation => worth -10 points at the end (and takes up space?)
- Police
- Start player
- Buy multiple cards
- Sell a card from your hand (to get back money)
- Something with hand limit?
- Take money from your secret pile back in your hand.
- Objects => these simply cost a lot of money and are worth a lot of points
    - **SIMPLIFY:** All special actions are also just objects. You can choose whether to play them or keep them for points.
- Missions => when you go on a mission, you get the money from it. (But only if it succeeds? Are there missions you have to do together?)

## Missions

Yeah, feels like this should be an expansion. With some solid, fun rules for going on missions together and a luck-based/risk-reward mechanism.
