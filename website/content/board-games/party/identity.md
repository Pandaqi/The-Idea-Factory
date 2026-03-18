---
title: "Identity"
categories: ["board-games"]
tags: ["party", "social"]
language: "en"
progress: 4
---

For years and years, I looked for an ideal party game that would be an "improved" version of Werewolf. This idea was another attempt at doing so, with some really good ideas and some gaps yet to fill.

In short, I defined my ideal **party game** as a blend of ...

- Waitless Games (_my idea for games that you should be able to play standing up, anywhere, even without table or chairs_)
- Hidden knowledge/identity
- Werewolf

I tried to put all that into some definitive rules below.

## Setup

Deal all players X cards (probably 4---6). Crucially, you may **not see your own cards.** Stick them out in front of you, but facing *the other players*.

## Objective

Be the first to guess all the cards in your hand.

## Gameplay

Take clockwise turns until done.

On your turn, declare you want to activate a specific **role**. The other players tell you if you *have* that role or not.
- If you *have it*, execute its positive action.
- If you *don't have it*, execute its negative action. (Optionally: draw an extra card, but that's probably too harsh/double punishment.)

The negative action is usually just the positive one but reversed. Some roles require actions to be taken *before* revealing if you're right or not.

At the end of your turn, you may **guess your hand.** Say all the cards you have (order doesn't matter). The other players only tell you if you're right or not, nothing else.
- You're right? Great, you win!
- You're wrong? Draw an extra card.

## Expansions

The rules above should work but be a little tame. Let's see if we can add some spice.

### Lives

Certain actions allow you to *flip* a card (so it faces you) or *lose* a card. This gives information and helps.

But if *all* your cards are flipped ... you **die**. (Eliminated from the game.)

### Nights

Adds **night roles.** When guessed, you immediately play a short *night*.
- Everyone closes their eyes.
- The active player stays awake. They "lead" this night and do not participate.
- Then they ask everybody with \<night role> to wake up.

Anybody is allowed to *think* they have this role and wake up. All players awake collaborate to execute the role's action.

Night is over and the active player reports the result.
- If all players who woke up actually had this role, they did the **positive action.**
- If all of them *didn't* have this role, they did its **negative action**.
- Otherwise, nothing happens.

However, if the active player themselves did **not** have this role, the action is reversed. (The other players tell them so after they announce the result.)

> *Remark: this includes roles that are flipped to face the player themselves. As such, having a good memory and tracking what people have is also important in this game.*

Example:
-   Player A says: "I execute my Witch!"
-   Night phase starts. Everyone closes their eyes and the active player says: "Witches, wake up".
-   Player B and C wake up, and both actually have this role.
-   Together, they point at player D as the victim.
-   Everybody wakes up. Player A announces that they did the **positive action.**
-   (But the other players inform A that they don't have a Witch themselves, so it's actually the **negative action**.)
-   The "victim" gives a card to Player A.

*Alternative:* wrong wake-ups are penalized by drawing another card?

**This is such an obvious solution to Werewolf needing a game master, why didn't I see it before? The "game master" merely *shifts* every night.**

### Missions

Adds **mission roles.** When you guess a mission role, you must propose a **mission.**
-   Say any set of roles. ("1 Thief", "1 Trader and 3 Merchants", ...)
-   The total number of cards is called the (**Mission) Value.**
-   Ask all other players whether they want to *join* the mission or not. (In clockwise order, starting from you.)

Only counting cards from players who *joined*, check if you have enough for your mission.
-   You have enough? Execute the positive action.
-   Otherwise, execute the negative action.

## Cards

### Merchant
- Positive: discard one card.
- Negative: draw one card.

### Thief
Pick a player.
- Positive: they steal one card from you.
- Negative: you must steal one card from them.

### Trader
- Positive: swap one card with another player.
- Negative:

### Genius
Pick a player and a role.
- Positive: That player must say how often they see that role.
- Negative: You must say how often you see that role.

### Seer
- Positive: Grab a card and say what it is. If you're right, discard this card *and* another.
- Negative: All other players may execute the positive Seer action.

### Warrior
Pick a role and a player. They say which player has this role the *most* (as far as they can see): the "winner". (If tied, they pick one at random.)
- Positive: the winner *discards* two cards.
- Negative: both you and the winner *draw* one card.

### Healer (Expansion: Lives)
- Positive: flip one card.
- Negative: all other players flip one card.

*Flipping goes both ways. So it might mean a face-away card faces you, or vice versa.*

### Pyromaniac (Expansion: Lives)
- Positive: all other players must discard 2 cards facing themselves
- Negative: you must discard all cards facing yourself and draw 1 new.

### Witch (Expansion: Night)
Night action: pick a victim.
- Positive: the active player gives two cards to the victim.
- Negative: the victim gives two cards to the active player.

### Detective (Expansion: Night)
Night action: pick a specific card from any victim.
- Positive: all cards of that type are pointed out in the hand of the active player.
- Negative: the victim gives all cards they have of that type to the active player.

### Lovers (Expansion: Night)
Night action: pick two victims.
- Positive: the active player swaps *half their hand* (rounded down) with a victim of choice.
- Negative: the two victims swap *half their hand* (rounded down), but pick one card to give away to the active player.

### Spy (Expansion: Night)
No night action.
- Positive: the active player gives one card away to all players who woke up.
- Negative: all players who woke up during the night must draw another card

**@IDEA: Another night role or two with more devastating impact.**

**@IDEA:** Probably need a few more roles to destroy/change cards in other player's hands, so they can't keep guessing the same type they *know* they have. => Or a general rule like "If you guessed correctly, discard one card of that type", or "You can't guess the same role as the previous player"

**@PROBLEM: What if people can't agree on the action?** In Werewolf, the action just becomes void. That can't really happen here. HOW TO SOLVE? => Majority vote. If tied, active player picks.

Negative: all other players discard one card.

### Explorer (Expansion: Missions)

A **mission role**.
- Positive: Everybody who participated may *flip* or *discard* **Value** cards.
- Negative: You must draw another card. Nothing else happens.

We need a lot more of these, of course.