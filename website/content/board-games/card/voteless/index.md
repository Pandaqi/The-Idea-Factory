---
title: "Voteless"
categories: ["board-games"]
tags: ["card"]
language: "en"
progress: 2
---

A game that tries to be a little too clever about numbers and colors on cards both in your hand and on the table. Might work amazingly well, might just be boring.

## Setup

You play with one deck of cards, both *in your hand* and *on the table* (shared map). 

Each card has a **color** and a **number**. (There should probably be 3 or 4 colors.)

Deal each player X cards. Use the remaining cards for a 3x3 grid on the table.

## Gameplay

On your turn, pick one of two actions.

- **Play** a card from your hand, add it to the map
- **Take** a card from the map, add it to your hand. 

> If this splits the map, you *must* take the smaller part that came loose into your hand.

If you are now **certain your candidate has the most votes**, say **"stop the game!"** => Everybody counts votes and highest score wins.

**@TODO:** To prevent very quick endings, or abuse, this can only be called after X turns or after some condition is met?

## Score/Voting

Check which **color** appears most on the **map:** that's the map candidate. They receive as many votes as the **total number in your hand.**

Check which **color** appears most in your **hand:** that's your hand candidate. They receive as many votes as the **total number on the map.**

(Candidate = majority rules, barring exceptions. Votes = summed numbers.)

Your score is the highest of the two. (Or combined, if it's the same candidate.)

For example:

- Your hand gathers 11 votes. The map has a majority *blue*: that's 11 blue votes
- The map has 6 votes. Your hand has majority *red*: that's 6 red votes

Currently, your score is 11. If the colors were the same, you'd score 17.

**@TODO:** Alternative scoring => you win if you have *more votes than anybody else* for *every candidate you have.* In other words,

- You need more blue votes than anyone else
- And you need more red votes than anyone else

**This doesn't work**, as the map number is equal for all.

**@TODO:** Alternative scoring => each player gets a candidate/color at the start. When counting votes, *all* votes (for all colors, for all players) are summed. You only win if your color comes out on top.

**@TODO: A much better way, would be to only count matching numbers**.

- The map has majority *blue*. Sum the numbers of *blue* cards in your hand for the "map score"
- Your hand has majority *red.* Sum the numbers of *red* cards on the map for your "hand score"
- (Any unused colors are *negative* points for your score??)

Sum the two for your final score.

## Ideas/Variations

**IDEA:** To prevent insta-win and add some sense of progression. Anytime somebody calls "stop the game", it's like a mid-term election. You check the scores, do something based on who wins/loses, but continue playing. Only the *third* time is the final election.

**IDEA:** To prevent insta-win. A card with an action that says: "If somebody stops the game, play this card. All players must throw away 1 card, and the game continues. (You throw away *this* card.)"

**IDEA:** Your second ("lower") color scores *half* its points, rounded down? => Maybe there are random *modifiers* per round or game that do something like this.

**IDEA:** A way to merge colors. Specific actions or cards that would allow the idea I wrote above, for example. (Or votes that can count for two at once.)

**IDEA:** Similarly, there are votes that will *never* swap colors, or are only non-zero in specific circumstances.

## Notes / Verdict

ISSUES:
-   A strong rule to prevent somebody winning in the first few rounds, with luck of the draw.
-   Otherwise, this should be quite nice if I create a nice set of cards for it.

This game should be a constant tug-of-war between two things:
-   Collect as many votes as you can muster
-   But also make sure they go to the right candidate