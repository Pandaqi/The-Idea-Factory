---
title: "Robot League"
categories: ["board-games"]
tags: ["card"]
language: "en"
progress: 1
---

A game idea inspired by **Crew Battles** format of Rocket League.

In other words,

* You play repeated matches between players/teams
* The first one is random / always the same.
* From then on, however, the _loser_ may pick the new _type of match_. (That is, a new card that represents how to win the next match.)
* This continues until one team has won X matches.

This can be abstracted/gamified with cards or tiles.

* Players hold cards in their hands, but they cannot communicate that to their team. 
	* So a match might say "Play a starting card: the target color. The team who can show the most cards with the target color wins."
* Or there's a map of tiles on the board, which you can change or walk around on.
	* So a match might say "The first team to all visit the _blue_ tiles on the board, wins."

As such, cards will be something like ...

* A color/icon
* A number
* An action

Whichever is useful (or _can_ be used), depends on the match being played.

Implementation: 

* I can _simulate_ how likely you are to win specific matches with random cards in your hand, to see the practical limits.
* I like the fonts _Corleone_, _Ferro Rosso_, _Latin Modern_, and _LM Mono_ for this one.