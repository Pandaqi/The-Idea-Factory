---
title: "Pirate Detectivebeard"
categories: ["board-games"]
tags: ["one-paper-games", "hybrid"]
language: "en"
progress: 1
---

This is a variation on my [Pirate Riddlebeard](https://pandaqi.com/pirate-games/pirate-riddlebeard/) and [Pirate Drawingbeard](https://pandaqi.com/pirate-games/pirate-drawingbeard/) games.

In those games, my generator gives you a nice random map and a set of **hints** as to where the treasure is. My algorithm is clever enough generate hints such that, once you know them all, they point to _exactly one spot (no more, no less) on the map_.

The twist for Pirate Detectivebeard is: "shared hints, one solution" (Or "Cluedo, but with this unique structure of hints pointing to a single thing on a random map")

A tougher one to generate, but also way cooler if it succeeds.

## The basic idea

The computer generates a random "mansion". (Rooms, pathways between them, stairs, different levels, etcetera.)

Then it adds random people: as many as there are players. (If it adds more, they are merely *side characters* who cannot be the murderer.)

Then it **simulates the people doing stuff.** They walk around, they leave/enter, they use parts of rooms, they meet each other (chat, or get into an argument), they might steal something, etcetera.

This leaves behind evidence. That evidence is partially saved on the map, partially in the "information" ( = hints) that players get. (And maybe the phone also acts as an interactive element.)

It's your job to figure out *who* executed the murder, *where* and with *what*.

## Some ideas

-   Murder weapons can be actual objects within rooms, or can be *taken* from within objects. (Like a knife that can *always* be taken from the kitchen drawers.)
-   Try to really simulate *logical behavior* for each person. They fill their day with working, eating, relaxing, chatting. They have behaviors, wants, personalities.
    -   Many of these could be represented by fixed rules.
    -   Like: "You always eat for two hours." Or "When you work, nobody else is allowed in the room."
    -   This way, players can start with **the rules for *their* person.** And they need to figure out the other rules, to find out who could've done it.
-   A variant where one player *is the murderer*. Each player is *one of the people simulated*, so one of them is the murderer. They try to prolong the investigation until time runs out.

## Potential Problems

-   That's a lot of information to put on cards/paper. (Personalities *and* timeline information.) That interactive digital element might be required.
-   How to simulate a timeline where really only *one* person could've done it for sure?

## Resources

Generator for building interiors: <https://www.reddit.com/r/dmsguild/comments/gtdmm4/random_generator_for_building_interiors/>

Interior generator, but a bit too stiff/blocky for me: <https://gamedev.stackexchange.com/questions/47917/procedural-house-with-rooms-generator>

Wave Function Collapse *might* be a possibility here, but not sure if I'd need way too many tiles for that, or it can end up too unusable.

## How to generate interiors?

**Step 1: Outline.** Place randomly sized rectangles on top of each other until we have a blocky, random outline.

**Step 2: Hall.** Pick a front door. Now do a random walk through the house. If we want, we can do more random walks, starting from an existing hall tile.

**Step 3: Rooms.** Pick random tiles and mark them as a certain room.

**Step 4: Grow.** Now grow these rooms until the whole house is filled. *The hallways may not be erased.*

**Step 5:** **Doors.** For each room, check connections to other rooms or hallways. Place doors.

-   Best to save this in a *graph* structure.
-   So we can easily traverse the house when we simulate this.
-   And easily check if every room *is* reachable. (It must be possible to start there and end on the front door node.)

**Step 6: Decorate.** Add windows, objects, stairs, etcetera.

-   Upper levels obviously need the same location for stairs.
-   They also need to be *roughly* the same shape, but we can extend some blocks (to create overhangs), or remove some (to create lower roofs)
