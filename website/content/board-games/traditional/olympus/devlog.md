---
title: "Olympus!"
date: 2024-07-26
---

This devlog will be a little different. I'm not sure where it's headed as I write it, as I have _multiple_ ideas in my head around the same common theme. It might end up with a single game, or three, or none at all. Still, I wanted to track my ideas and my decision making. 

That's what this article is.

## What's the idea?

Recently, I've read the Percy Jackson books. At the same time, my little sister has been really interested in (Greek) mythology for years and her birthday was coming up. In fact, _I_ have always been interested in Greek mythology.

> Latin and Greek were among my school subjects and I eventually graduated with Latin. Though, if we're honest, I absolutely hated school and only had these subjects because I was pretty much forced to take them because "I was smart". I can't speak a single Latin or Greek word and the only thing that interested me was the mythology, which was, fortunately, 50% of the grade in the end.

Anyway, these three factors combined into the idea of "create a game around the Greek gods of the Pantheon". It had been in the back of my mind for a while, now it became urgent and it seemed as if the universe was sending signs that I should consider that game.

This is, of course, a pretty vague idea. "A game about Greek gods"

How do we turn this into specific rules? 

## Approach 1: Tiles & Machiavelli

One of the more technical reasons I liked this idea is because the Gods have well-defined "powers" or "areas of control". Poseidon controls the seas, Zeus controls the skies and weather, etcetera.

This lends itself really well for some "role based" game in which you must pick and execute specific powers. Maybe you can only pick one God each round. Maybe players need to _bid_ to get a God's favor (and be able to use their power).

The consequence, though, is that you need some _world_ to which to apply these powers! 

I had several ideas, but this was the first one I considered further.

### The general idea

We have _tiles_. Small rectangular squares showing ... something. They are assembled in the center of the table to represent a world, kind of like Catan or Carcassonne.

We also have _God tiles_. These are 2x2 (so twice as big as a regular tile), more like _cards_, and display one God and their power. (You'll see why in a second.)

### Version 1

Each round consists of three phases: PICK, PLACE, EXECUTE.

**PICK**: The start player gets the deck of God cards. They pick one and pass them on to the next player. This continues until all Gods have been picked except one. That last unpicked God is removed from the game.

**PLACE**: Take turns _placing_ the god you picked **on top of the world**. Remember that Gods are just a card of size 2x2. So you can place a God _exactly_ on top of a square of tiles within the world.

**EXECUTE**: Execute your God powers. As expected, each power only relates to _the tiles you covered_. (For example, Ares destroys the four tiles underneath him, while Demeter grows plants on the tiles underneath her.)

![A visualization of this idea of "placing Gods on top of the world".](olympus_sketch_v1.webp)

Gods can partially overlap other gods, but you can't fully overlap one God. (This created a nice balance, in my eyes. The first players could pick the strongest gods ... but they also need to place them first, giving others a chance to overlap them and take away some of their squares.)

My initial idea was to _stack_ the tiles of the world. So, you might have a ground layer that was _ocean_ or _earth_, on top of which you'd place _people_ or _building_ tokens. Kind of like a separation between "background" and "foreground".

This whole idea has two major gaps.

* How do you **score**? (And when does the game end?)
* How is **start player** (or turn order) determined?

It also has a few features that need to be simplified.

* The Pantheon has 12 gods. Surely picking Gods until only _one_ remains ... takes a long time and means players have _waaay_ too many actions on their turns.
* Similarly, this idea, combined with stacking the tiles, leads to _many different tile types_. (As I said, each God has their own little domain. So we need ocean tiles for Poseidon, but also tree tiles for Demeter, but also Wine tiles for Dionysus, ...)

The "God drafting" mechanic was very much inspired by games like Machiavelli (which I think is called Citadels in other countries?) The idea is just really simple and strong. "Pick one character to execute this turn, then pass the remaining cards on to the next player" It means ...

* High interactivity (every single decision matters for every single decision afterwards)
* Almost no rules to explain: they are on the cards themselves, and you only really need to know _the card you have chosen for this turn_
* But it allows a huge diversity of actions just by having diverse role cards.

That's probably why my mind immediately went for this approach to picking your "Gods".

### Version 2

I decided to "flatten" the world. It's just one layer, as in ... well, pretty much all tile-based games. 

The tiles are somewhat abstracted: instead of showing multiple things or realistic scenery, they'd just be an icon of a "person", or an "animal", or a "wave" to represent ocean. (Otherwise it just gets messy and overwhelming real fast.)

![Just imagine the world of tiles is the same as in](olympus_sketch_v2.webp)

What changed in this version?

First of all, any tile you remove during your turn goes into _your possession_. Why? Because then I can use these tiles to determine turn order!

Each round now has four phases: BID, PICK, PLACE, and EXECUTE.

**BID**: all players bid a number of tiles. Highest bidder becomes start player.

**PICK**: only draw as many God cards as there are players, plus one. The rest of the game remains the same. (Pick one god, pass it on. The last unpicked god is removed.)

Now we also have a clear approach for solving scoring.

* The game ends as soon as there are **equally many Gods left as there are players**. (This is why I implemented the rule of "remove the unpicked God" from the start. It automatically creates a timer that simplifies the game over time and brings it to a close.)
* The number of tiles you have (which I call **tokens**) is your **score**. Highest score wins.

This is already slightly better, but not ideal.

* Scoring through tokens is boring. It easily allows runaway leaders. It encourages people to be very hesitant when bidding for start player. It means more and more material on the table doing nothing. It means all Gods need to yield tokens in some way or another, which restricts how many interesting powers I can use.
* A round with **four phases**!? Nah, that needs to be simplified.

### Version 3

I realized a few things.

**Combine Pick and Place**: There's no reason to separate Pick and Place. Now that you only pick one God anyway, we can just combine the two. ("Pick a God and place it." There, done.)

**Better turn order**: This is shaping up to be a very minimalist, tactical, strategic game. Bidding doesn't feel like it should be in there. We can simplify that!

Instead of bidding, we just say: "Players take turns ordered by how many tokens they have (high to low)."

The only downside of that is that you never _lose_ tokens. (Whereas, when bidding, the highest bid obviously has to be paid and thus changes who has the most tokens.) 

How do we solve this? The way most games solve such imbalances: making things _paid_ :p Or, well, attaching some price to powers or cards.

* When you pick a God card, you must pay their price from your own tokens.
* Obviously, the stronger gods are more expensive, while others might even be free.
* (If you can't pay any God, you pick no card but do receive 3 free tokens.)

**Scoring**: now that we have a good system for controlling turn order, we can change the scoring rule to something way smarter.

> Each God also has their own special way of scoring. Whatever God you chose in the _final round_ is used for your score.

For example, let's say Ares (god of war) scores 1 point for every gap in the world. (An empty space surrounded by tiles on all sides.) If you pick Ares in that final round, then _that's_ how you score. If you pick another God, you score some other way.

![Yes, I'm showcasing different ideas for god powers throughout these example sketches!](olympus_sketch_v3.webp)

With every game, I search for one or two truly unique mechanics. Some unique "engine" that makes this game different than all others, no matter what theme or minor rules I plaster on top. Now it feels like I've found that.

* **Unique Engine #1**: the idea of placing gods _directly_ on top of the tile world, and them only influencing the area they cover.
* **Unique Engine #2**: your final God determining how you score, instead of a fixed rule or something more predictable.

The rules for one round are now quite simple.

* First figure out the turn order by checking how many tokens everyone has. (Ties broken by ??)
* Then pick and place one God tile (in that order). Pay the price. Remove the final unpicked God.
* Then execute the Gods. (Their power is on the card. It only applies to the area they cover, which isn't overlapped by some other God.)
* After the final round, use your God for your final score.

Now it's all about getting the God _powers_ (and _scoring rules_) right, and I think this might be a really strong game. Slightly longer (in rules and playtime) than my usual games, but I think you get enough complexity and depth in return.

### God Powers

@TODO




