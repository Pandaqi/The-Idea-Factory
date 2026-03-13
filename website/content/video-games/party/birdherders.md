---
title: "Birdherders"
categories: ["video-games"]
tags: ["party", "local-multiplayer"]
language: "en"
progress: 3
---

A cooperative game. There's a **designated location** somewhere (an animal pen, a hole, a field, a building, whatever) and you must **move everything in there before time runs out**.

The most obvious example would be: herding sheep to go inside the right space. But those games already exist, so let's make it more general and different.

_There's a second idea at the end that's very similar to this, but not similar enough that I think you could merge the two._

### Objective

Move all "things" (depends on level) into the right location

### Input

Arrow Keys/Joypad = Moving

Button = *some special action*. (Basic action = "scare away in the other direction")

### Map

3D. Mostly flat. (Can have height differences, but must be overcome in some other way, like using trampolines/slopes/lifts.) One or multiple *clear* locations for delivering stuff.

### Game Type

Local multiplayer. Cooperative. 1-8 players.

## How to make it better?

### Rule #1: Position is crucial

You scare "things" *away* from your position. This means that you need to cooperate, otherwise you scare things in the wrong direction. (Things that others might have been moving around.)

Additionally, things might break free and move *out* of the space at any time. So you must position yourself to deal with that possibility.

Lastly, there are locations on the field where extra stuff happens. (Maybe powerups spawn. Maybe it's a second location where *another type of thing* must be moved. Maybe you're in space and need to refill oxygen all the time.)

> You need to constantly either *visit* these spaces or *avoid* them.
>
> **The most logical powerup:** one that pushes stuff *more forcefully*, one that allows you to *move faster*, one that keeps things *in their cage* for longer. This really entices players to grab it, as they need it.

### Rule #2: The second action can be anything

Pushing things away is **the default**. No action needed.

> Not sure if this is great, though. Might make it impossible to *get around* certain situations. Needs testing.
>
> **IDEA:** While *holding* the special button, this default option is always disabled. (Only when the special button is *released*, will you do whatever action belongs to it.)

This frees a button for something else:

-   Grab a *single thing*. (You stop interacting with anything else.)
-   One *forceful* push. (Much larger radius, much larger force.)
-   Put a magic spell over things nearby, which stops them from moving randomly/escaping.
-   Hand items/powers/whatever *between* players (that are nearby).

### Rule #3: The things are varied.

They might be:

-   Worth more/less points
-   Move faster/slower
-   More prone to escape. (Which means you want to do those *last*.)
-   Respond in a different way. (Get attracted instead of repelled. Need multiple players before they start moving.)


## Notes / Verdict

Name ideas:

-   Thingherd
-   Stufherd
-   Just Stay There

I actually think this would be a very effective, simple game idea. But theming it around "shepherding sheep" is just too obvious and overdone. Find other things to move around which are thematic, and fun, and *different*.

Examples:
-   <https://tohu-bohu.itch.io/shepherd>
-   <https://store.steampowered.com/app/976900/Lumberhill/> => heeft een component waarbij je animals moet herden/aan de kant schuiven terwijl je je werk probeert te doen

## 2nd Idea: Leaf me Alone

A simple, party, local multiplayer game.

You're all **leafblowers**. All you need to do is **blow all the leaves to the right destinations.**

> Your blower is probably *always on*. All you can do is *move around*.

The simplest setup is obviously

-   One location where all the leaves must end up
-   All leaves are the same
-   All leafblowers are the same

But you can add endless variation.

-   Multiple locations.
-   Harder to reach locations.
-   Leaves the behave differently. Leaves that are worth more points, or penalty points (you *don't* want them to end up there.)
-   Each player has their own stats: bigger range, faster movement, stronger blowing, etc.

This is perhaps a more simplified and straightforward implementation of my shepherding game. (Alternatively, these could just be different "modes" in a game all about this kind of mechanic.)
