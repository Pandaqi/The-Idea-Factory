---
title: "Self-Fulfilling Prophecy"
categories: ["board-games"]
tags: ["hybrid"]
language: "en"
progress: 1
---

This is a hybrid game; you need a smartphone too.

The phone gives you a **prophecy**. During the game, you must improvise and nudge the rules so that this prophecy will be fulfilled. (In a sense, you can't lose this game.) Thus, a self-fulfilling prophecy.

## Setup

You start the game on *one smartphone* and place an *empty* piece of paper on the table.

At the start, the phone gives you a *vague prophecy*. Like: "The heroes will succeed when the sun rises with ten gold in its pockets!"

## Objective

Once you reach that objective, you win the game!

- Optional: there might also be a *losing prophecy*. If that happens, you immediately lose.
- Optional: during the game there might be more prophecies, which accurately predict what the phone will say at some point *later* in the game. (If you can decipher them, you can plan ahead.)

## Gameplay

Each turn, a new **rule** appears that you need to pick or fill in. Write them down. They are permanent for the rest of the game.

- Example: 2 GOLD \<trade with> ...
- Example: When you attack the city ALARMO, ...
- Example: Place a new town called ALARMO at ...
- Example: Pick one of these properties and add them to a city.
- Example: Birds gain the ability to ...

## Implementation

**Currencies:** I should make a small list of "fixed currencies", like "this game has gold, birds, and seaweed" Everything you do should revolve around that.

Inventing a new currency is one of the *rules* to add or a *reward* for an action well-done?

Then you may do your "fixed turn". The phone tells you what to do, which can be anything:

- Improvise a speech to motivate the heroes, using these topics ...
- Move yourself to a new city
- Convince the people in your current city to join the fight, using these hand gestures ...

Whatever else you do on your turn, is your decision, but it must follow the rules you created. (For example, if you have 4 gold left over, you can buy something with it.)

Lastly, random **events** appear. These can help the heroes, but will most often tell you of enemies attacking a town, or disasters, or treachery, something like that.

**How can we do vague prophecies?**

- Look at existing examples of prophecies.
- Copy their general sentence structure, word choice, etc.
- Then randomly pick structures + words to fill in.
- Problem: might not be random enough

**How can they be predictive?**

- Determine all events and stuff beforehand.
- Tag each of them with some keywords, like "attack", or "disaster", or whatever.
- If we include a *time* aspect, make it general as well. (Like "at least two days in the future" or "when you least expect it")
- Then let the prophecy be based only on keywords, perhaps parts (or vague bits) of the details used
