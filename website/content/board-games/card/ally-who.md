---
title: "Ally Who"
categories: ["board-games"]
tags: ["card"]
language: "en"
progress: 3
---

The general idea is a game in which
-   You constantly attack others (cards have weapons/numbers/armies)
-   But also constantly pick new "allies" => your attack power is combined

This should result in a game similar to Diplomacy. (Allegiance is very important, turns are taken at the same time.) But much simpler, faster and more colorful.

## Cards

**Attack:** a type **(air/land/water; plane/tank/submarine)** and a **low number** (1-3)

> This also allows me to provide unique images for each number. 1 = one plane, 2 = two planes, 3 = three planes (one foreground, two background)

**Ally:** shows one (or more?) logos of other armies.

**Action:** no attack value, but has an action that is either always true ("THIS ROUND ..."), or taken when in a fight ("WHEN FIGHTING ...")

**Health:** indicates one "life".

## Setup

Fairly divide all *army logos* among the players. (It's fine if some have one more than the others.)

Also deal everybody Y heart cards: these are their lives. Both hearts and army should be *face-up­,* clearly visible.

Finally, deal everybody X regular cards: this is their Hand (secret)

## Objective

The game ends when one player is eliminated ( = out of lives).

The player with the most lives wins. If you had an ally this round, *combine* your lives. (And if you win, you both win.)

## Gameplay

Everybody picks a set of cards from their hand. Once chosen, they're revealed at the same time.

Handle players in the following order:
-   Most planes \> Least planes
-   Most submarines \> Least submarines
-   Most tanks \> Least tanks

When handled, a player picks an **ally** and a **target**.
-   You can only pick an ally if you played *their* ally card, and they played *yours*.
-   If you have no ally this round, draw three cards from the deck.
-   The target can be anyone, except yourself and your ally.

The target picks their ally in the same way.

Now fight!

## Fighting

**Determine strength:** combine your cards and those of your ally. Sum the total power, taking any effects/weaknesses into account.

**Determine winner:** the player with the highest total attack power, wins the fight. In case of a tie, the *defender* wins.

**Determine spoils:** the loser loses *one life*.

Now calculate the *difference* in attack power. (For example, you attacked with 8, your target with 5, then the difference is 3.)

* The loser discards *that many* cards from the winner.
* The winner *steals* that many cards from the loser. (Share them however you wish with your ally.)

Any remaining cards go back into the hand of whoever played them.

**A player can only participate in one fight per round.** (So if you've already been an ally for somebody else, you don't get your own turn anymore.)

**Each attack type has a weakness.**

-   **Planes are bad against submarines.** For each submarine card of the opponent, remove a plane card.
-   **Tanks are bad against planes.**
-   **Submarines are bad against tanks.**

**\@TODO: Maybe the "bottom type" (tanks) should have no weakness?** Because they are last in the *order*, they already have a disadvantage. Additionally, because of this cyclic nature, there is now no clear *start* to this "remove one card because of weakness"

> The cyclic nature CAN work, as long as we handle it in order.
>
> We can either use the same order as cards (Planes \> Submarines \> Tanks), or reverse order.
>
> Certainly, there should be an action to *reverse* this.

**\@TODO: Rephrase from weakness into strength/power/ability.** Makes for easier rules:

-   Planes destroy Submarines => for each plane, remove one submarine card from the opponent
-   Submarines destroy Tanks => for each submarine, remove one tank card from the opponent
-   Tanks destroy Planes => for each tank, remove one submarine card from the opponent

*Maybe there could be more types with more special rules, but that's certainly an expansion.*


## Notes/To Do

**@UPDATE: Yeah no, this needs simplification and streamlining, especially the fighting.**
* Should probably just ignore the "difference" in attack power. Too many calculations needed.
* And stick to losing lives / losing cards consistently, nothing else.

This should work *really* well! Just some side notes ...

-   I think it's more fun to go with a fantasy war theme. Not planes, but hot air balloons. Not submarines, but huge octopuses. Not tanks, but warriors shooting arrows with air guns, or wizards doing magic.
-   **First game =>** see how far we can simplify rules for a first game.
    -   Stick to the first three attack types (circular), maybe don't even explain the weakness.
    -   Stick to *one* type of action card? Or no action cards at all?
    -   Print a rules reminder (about conflict resolution) on the *army logos* that players get in front of them?
-   **Question:** now only *you* lose a life. Should that be *you and your ally*?
-   The special attack types might be moved to an expansion. (So I can also add much more of them with unique rules.)
    -   Their circularity would become a problem with optional types (like Creature Quellector). So those other types would have *other* rules that have nothing to do with that. Like, a card that does nothing if the opponent has *more* cards.
-   Add special *actions* to certain cards? => "You can participate in as many fights as you want (this round)", "You can ally with anyone", "Your planes are upgraded and have no weakness against submarines (this round)", "The loser of a fight (with you in it) loses *two* hearts" ...
    -   If attack cards have their own weakness, I probably want to print that on the card. Which means actions *can't* be on attack cards? Should just be separate action cards, then.
-   With few players, everybody picks *two* army logos? (The game can't be played with 2? Or do we add a "computer 3^rd^ player" then?)

I've already balanced the game somewhat.

-   You draw extra cards if you have *no ally*.
-   After a fight, many cards will surely be lost, but most find their way back into your hand. (This adds *information* over time, but also means we can use a small deck and you rarely get new cards during the game.)
-   All types have a clear weakness and use case, circular, so none should ever be too strong.
-   Having allies is both good and bad, depending on the situation. (As you can't say *no* to it, and don't know the cards the other will be playing.) => Thus, distributing *all* ally logos at the start, which means some have +1, is fine.

Alternative names: **Shifting Allegiances, Help / Hinder**
