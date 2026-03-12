---
title: "Kings of Compromise"
categories: ["board-games"]
tags: ["experimental", "hybrid"]
language: "en"
progress: 2
---

A board game inspired by **In Decorum**. 

All players receive a card with simple statements like "The kingdom requires at least 3 sheep" and "The castle is not allowed to be next to the forest". They are NOT allowed to communicate what's on their card.

Instead, each turn, a player must change **one thing about the kingdom** (e.g. placing a sheep), and then all other players say **if they're happy now**. (That is, if the kingdom now matches their card.)

By doing this, over time, players will figure out what everyone wants from the kingdom. To win, create that perfect kingdom that makes EVERYONE happy before you run out of time/resources.

I can write a **random generator** to create these games. 

* Generate a completely random kingdom.
* Create all possible hints for it --> all possible true statements that could be on such a hint card.
* Remove hints one by one, until you can't remove hints anymore without making the perfect kingdom uncertain.

Then players can simply print that PDF, and cut the cards, to play. (The other material, such as the sheep and the castle tokens and stuff, are shared between games. Only need to print/cut those ONCE and you can play the game over and over.)

I had actually started writing the basic code for this, and a more detailed developer's diary, but for some reason I dropped this promising idea. That diary doesn't mention any clear issues with it, I just ... chose a different project at the time, I guess?