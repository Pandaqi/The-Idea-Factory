# Devlog

## What's the idea?
I've wanted to make a fishing game for a while. It's such a simple, intuitive mechanic that leads to good games by default:

* You move down into the water and explore the ocean.
* The further you go, the longer you stay, the more points you might get.
* But ... if you don't get your hook back up in time, you lose all of that.

Simple stuff that automatically creates a high risk/high reward loop.

I never knew, however, how to approach it. It was just that: a note that said "MAKE A FISHING GAME".

Until I woke up one day and my brain suddenly presented a few unique "twists" that might make the idea worthwhile.

* Players take turns being the Fisher (which means all other players are Fish). I've never seen this before: a one-against-many game in which the "one" switches every round.
	* Essentially, that would make it a cooperative-competitive game in which the groups and goal constantly change. 
* The Fisher moves down into an ocean (of random tiles), then back up, and collects all points along the way.
	* This is why it's a hexagonal grid: this gives you _three_ options for moving down or up, which is the amount of freedom you need to make this fun for the Fisher.
* The Fish can _swap_ tiles during their turn, to move the "good points" away or to perhaps prevent the Fisher from ever getting back with their points ...

That's the basic idea. As I wrote it down, though, I immediately knew I had to figure out some other (potentially major) issues.

## Big Issue 1: too many fish
Say you're playing with 4 players. Then for every single Fisher turn you take, _three_ other players will swap two tiles around. If they work together and do reasonably smart moves, you're not getting _any_ of the good stuff!

At the same time, their turns aren't terribly interesting. They don't "get" any direct reward for swapping. Why should I swap these, and not the next fish player?

We needed **a reason to not cooperate and be ... selFISH**

In other words, the fish players needed to be able to ...
* Also collect tiles (and thus points)
* Or prepare for their own future Fisher turn

Then I realized that, in the current rules, the board was only refilled at the end of a round. This means that, as the Fisher moves their hook down, they leave a trail of _empty spaces_ behind them.

Let's use that.

> If you swap with an empty space, you get the tile. (But must refill with one from the deck.)

That second part is simply to prevent the map becoming too empty and having these ugly gaping holes everywhere. At all times there should be _one_ clear trail of empty tiles, left by the Fisher + swaps.

With this rule, Fish can now do something selfish and go for a good tile when they see a chance. (Instead of working together to obstruct the Fisher as much as possible.)

I like it!

These tiles might simply score you points. Or they might have actions/powers you want to use in a future turn. (For example: "When you're the Fisher, you may move two steps each turn" would be a great tile to grab for your future Fisher round.)

Another reason I like this, by the way, is because this trail will only grow as time goes on. The first few turns of the Fisher, they haven't left enough empty spaces to take advantage of. Thus, this hands the first move advantage to the Fisher, balancing the game a bit further.

## Big Issue 2: Can't flee from an edge
The general idea is that the other players try to "flee" from the hook of the Fisher. But ... you can't flee further than the edge of the map. As such, the Fisher can just start close to an edge and trap everyone there.

To solve this, I simply allowed "wrapping" the board. If you go off one side, you reappear at the other. (As if the ocean was a spherical planet.)

I'm not entirely sure about this. Playtesting will have to reveal if this "trapped at the edge" thing is a real problem, but all my experience right now tells me it is.

## Further Improvements
At this point, the game feels solid. Simple, clear turns for Fisher and Fish. Both are constantly interacting and trying to get in each other's way. Very thematic and intuitive, with completely randomized "oceans" each time.

I still had some more ideas, though. Some of these will be base game, some of them expansions.

**Direction Matters**: Many tiles can only be grabbed (by Fisher or Fish!) when going _down_ or when going _up_ (not both).

**Coral / Reef**: Unmovable tiles. When you swap with them, you don't move them, but instead put the other tile _underneath_ it. (The fish is "hiding" in the reef.)

Why do I love this?
* Thematic and fun.
* Reduces the decision space to be less overwhelming. (Because only a _part_ of the map can actually be swapped.)
* This can create stacks of tiles all across the board, potentially making things more powerful or juicy. (The Fisher only takes the top tile when visiting.)
* But it also automatically leaves more gaps to use for the Fish, so it's not something you always want to do.

**Backpack**: You have a limited backpack as the Fisher. If you've collected too much garbage / coral / heavy fish / whatever ... you're stuck and lose all your points. (Or, if we're friendlier, you _must_ move up right now.)

It's probably obvious why I like this. It adds even more tension and push-your-luck to the game, as you consider whether delving deeper towards that 5 point fish will kill you in the end.

**Float / Sink**: Add tiles (on top of the map) that float / sink after every round. This is, again, very thematic and intuitive, but it also ensures the map constantly changes and you can plan smart turns far ahead.

## Let's make that
I see nothing standing in our way. Let's make a bunch of tiles and test this game.

@TODO