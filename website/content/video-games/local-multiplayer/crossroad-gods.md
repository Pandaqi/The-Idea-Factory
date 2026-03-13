---
title: "Crossroad Gods & More"
categories: ["video-games"]
tags: ["party", "local-multiplayer", "action"]
language: "en"
progress: 5
---

This idea is actually 4 different ideas in one. They share a simple connection: they're local multiplayer games where you must cooperate, to manage a space as optimally as possible. It's about bringing things (passengers/visitors/groceries/etc) where they need to go following a simple rule that makes it all very challenging.

## Crossroad Gods

Something like _Overcooked_, _PlateUp_, etcetera.

* You get a nice, friendly cube grid with connections on the edges.
* Players **are** methods of transportation. (One player is a bus, another is a train, etcetera.)
* **People arrive** (walking, cycling, car, bus, whatever) on one side and want to **get somewhere else**.

Thus, it's a local coop game where you have to **get people where they want to be, in the right way, before their timer runs out**.

How?

* By placing/moving the actual road parts.
* By placing/moving the targets (as long as they're not on the edge, but somewhere inside the map, you can do this)
* By manually picking up people and bringing them somewhere.

What do people WANT?

* They have a target LOCATION
* Optional: a target STATUS (they want to be together with another person, they want to be there at a certain time of day)
* Optional: a TIME LIMIT on that
* Optional: a required method of transportation (by bus, by train, etcetera)

Why would this be interesting? How does it stay challenging/different? A good game needs a DIFFERENT STRATEGY depending on CIRCUMSTANCE!

* There are **two ways to move people**: manually (very slow, you obviously have to do it all) or automatically (by building the road network to make them automatically walk/move)
* You can let people walk on their own, or you can decide they need to be _faster_ and bring them yourself.
* People give instant-rewards you can use during the level itself. This modifies the order/speed at which you might want to finish clients.
* The actual avatars people play ( = the methods of transportation) matters! So your "loadout" at the start of a level determines which clients you get specifically and how you must play.

A basic form of the PEOPLE AI would therefore be:

* They arrive at the edges with a random location/status/etcetera
* If there is a route to their destination, they'll automatically walk it themselves.
* If not, they'll stand still and wait.

Some ideas to make it **even better**:

* All those individual levels are part of a shared campaign map. (This makes it more of a "roguelite".) Each run, the roads you end up building at the edges of your current level are _remembered_ and determine some layout of its adjacent levels.
* Your avatars level up over time (getting faster, stronger, easier to turn, etcetera), and they do so based on _actual play_. For example, the player who manually picked up the most people, gets a bonus _related to that_. The player who handed off the most things, cooperating the best, gets bonuses related to that. (Instead of getting random bonuses/experience unrelated to what you actually did while playing.)
* (Would it be possible to have height differences, terrains, etcetera?)


# Related Idea: A Digging Game

A coop game about digging further and further into the earth might also be really fun and easy.

* Contracts/Orders come in.
* You need to dig, which has an inherent danger and randomness, to extract those materials out of the ground.
* You need the materials to create machines/workbenches, which can be placed in holes you made while digging, and which are needed for _converting_ stuff into other stuff.

So we might even get away with a single player action.

> Move => which drills left/right/top/down as needed, otherwise just moves around.

**@IDEA:** Anytime you drill into a new part, it takes "time". If the new part is empty (contains no new resources, no strong material, etcetera), this is basically immediate. The more valuable/strong what's inside, the longer this takes. In other words, you can "sneak test" if something valuable is on your left by starting to dig and checking the timer that pops up. (And going for more valuable material/exploring further is therefore slightly risky, because you don't know what you'll encounter.)

**@IDEA:** "Beacons" or "Signals" appear from unexplored parts of the map. They're a vague indication that there's something there. You must reach them (usually people that are stuck) and then make sure there is a path from them to where they want to go in the map.
* FOLLOWUP IDEA: As long as you don't "uncover" a signal, though, you don't get its assignment/problem/details. So you can choose to ignore one for long, or even forever, but risk losing loads of points and material then. And you can't explore near/around it, because the EXACT location of the beacon is unknown.

**@IDEA:** Areas where only a specific player can venture? (They're simply completely colored in THEIR color. Or there are GATES: you can either dig a long way around it, or just send that specific player through.)
* GATES seem like the most elegant solution to try first.
* And thematically it might make more sense to make these MATERIALS! => Every player has their own MATERIAL and only _they_ can dig through that.

**@IDEA:** Every type of material can be found, and higher value materials are way more likely the further down you go. The MACHINES for converting them are simply a shortcut for when you can't find the real deal => it can upgrade or downgrade a material over time.
* This means machines aren't some extra building, they should be a really core part of the game.
* As such, think of a clean/fun way to really incorporate them, while keeping input restricted to MOVEMENT only.
  * For example, machines are just more squares within the dirt/underground. By moving through them, you input all the material you're currently holding.
  * It takes some time (during which you cannot enter the machine), when done, moving through picks them up again.
  * And so, you have UP and DOWN machines separately (clearly marked), which can just be found naturally.
    * Though BUYING upgrades to your drills should be a big part of the game too, as you're literally collecting material/gold that you could use for that.


# Related Idea: Your Local Supermarket

Overcooked, but you need to get the actual ingredients yourselves from your veggie patch or your farm animals. 

* Need to restock on milk? Chase down your cow in the backyard!
* Need some pepper? Plant the seed in time and harvest it later!
* There'd _literally_ be a division into 2--4 clear areas, requiring cooperation but also specialization per player. (As in, only one player can actually reach the cows, only one player can actually reach the shelves to restock, etcetera. You'll be handing over shared products at the borders of your areas.)


# Related Idea: Coop Camping / Camping Coopland

You are managing a **camping** together.

What can you do?
* Visitors appear at your gates. You must meet them (which means you take their "marker" or "flag"), then place that flag somewhere else (to designate a location for them)
  * This location should be useful for YOU (quick movement, efficient routes, etcetera)
  * But it should also match THEIR preferences. (Within X tiles of a pool, within Y tiles of the restaurant, etcetera.)
* Visitors make NOISE or MESS, which you must clean up. (Otherwise it makes movement slow _and_ it drives away other guests over time.)
* You must build their tents + break them down when they're done.
  * This requires carrying the material, which is why you can't do it in one go when placing the marker.
* You must expand the camping _as you go_, creating more space or buying more facilities as needed.
  * Guests will only _want_ facilities if you _can_ pay for them.