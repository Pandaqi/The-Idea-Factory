---
title: "A Card Full Of Love"
categories: ["video-games"]
tags: ["experimental"]
language: "en"
progress: 0
---

You're trying to convince someone else about something. (In the general sense: become friends, fall in love, go out on a date, do something for you.)

But you must do it **via cards**. You get these at random at the start of each game.

The game is played *left to right*.

- You are on the left, your "opponent" is on the right.
- Cards are at the bottom of the screen. You "battle".
- There are three outcomes:
  - You are defeated, and lose a person
  - You win, but your opponent dies/flees
  - You win, and your opponent joins your ranks.

(So, there are two ways to play, two win conditions. One just means you continue, the other means you actually win an extra person. Usually more powerful, but not always possible.)

## Battle Outcomes

When you **win a person**, you get their **deck of cards** into your own.

When you **lose a person**, all of their cards obviously **go away**.

Between battles---or maybe during a battle---cards might be permanently removed. This way you can shrink the deck again, weed out the things that don't work for you.

## What makes it hard?

The AI.

- <https://softwareengineering.stackexchange.com/questions/213870/best-techniques-for-an-ai-of-a-card-game>
- <http://www.aifactory.co.uk/newsletter/2013_01_reduce_burden.htm>
- <https://www.reddit.com/r/gameai/comments/42xu66/advice_on_building_a_card_game_ai/>

Seems to me that you need to build a tree of random moves. (Computer plays a card, opponent plays a card they *could have*, etcetera.)

You calculate the result of one path:

- If you win, 1
- If you lose, 0
- Otherwise, a score based on how many points you have left, a heuristic for how "strong" you are

Then you calculate the results of moves: average the results of all paths underneath that move. Then pick the strongest move.

