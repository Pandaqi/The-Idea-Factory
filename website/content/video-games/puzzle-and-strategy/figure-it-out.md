---
title: "Figure It Out"
categories: ["video-games"]
tags: ["puzzle", "cooperative"]
language: "en"
progress: 1
---

I was inspired by "Understand": the puzzle game that explains nothing. 

You need to figure out the rules by trying stuff, seeing how many requirements it fits, until you discover the rule and can solve it.

What if we ... extrapolate that to a bigger game, and a *realtime* game, and a local (coop) game?

## What's the idea?

You are dropped into a strange environment.

This environment follows all sorts of *randomly generated rules*. Touching one thing might decrease your health. Coming near another might increase your energy. Collecting 5 of something else gives you a powerup.

It's your job to *figure out the rules of this universe*. What does each item mean? What are the general rules and properties? How to use that to go further?

Each night/each cycle you get a chance to "evolve" or "upgrade". You can change some things to *better adapt to your environment*.

Essentially: this is a simulator that *shows how evolution works.* (And also how it only cares about survival, not "understanding" or "seeing the truth".)

**IDEA:** Maybe your senses are, at the start, also *really primitive*. You can barely see what you are doing. Maybe you can't see at all, but must work with audio cues, or only seeing the *effects* of your actions.


## A Related Idea: Randomly Generated Puzzles

Players start in a random cave/dungeon/location/underground mine.

Across this map, objects are hidden.

-   Some stuff you will need to discover/find randomly through digging.
-   There are also tools to find out where stuff is, like a sonar. It, however, only displays where everything is *very briefly*. So all players need to work together to memorize the map and what they need to do.
-   Some stuff is locked/hinted at, but you can only find it by solving a riddle or solving a specific puzzle.

## How are random puzzles generated?

Something like this:

-   I create a set of hand-crafted, generic puzzles.
-   Each puzzle needs certain INPUT and produces certain OUTPUT. (For example, the right sequence of 4 COLOURS ( = input) will produce a KEY ( = output).)
-   This way, I can chain puzzles together to create much bigger and more dynamic riddles.

## The problem with this?

It will still become predictable/mechanical once you've seen it enough times. Therefore, to keep this game engaging, I also lean on the following elements:

-   Resource management: when to dig, where to dig, how not to die in this environment, which resources to collect and which to throw away (limited backpack space?)
-   Memory: tools you use are very brief and very cryptic. You'll need to share memory of the whole map and what you've already done among the players.
-   Action: besides puzzles, there are also actual dangers (some *platforming*??) and monsters to fight off (or just dodge)

In the end, it should feel like: "**you entered a magical/mysterious place in search of a treasure, and now your team of discoverers is doing everything to find it!"**
