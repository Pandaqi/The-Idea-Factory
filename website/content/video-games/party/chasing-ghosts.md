---
title: "Chasing Ghosts"
categories: ["video-games"]
tags: ["party", "local-multiplayer"]
language: "en"
progress: 3
---

A "Hide & Seek" variant as a video game, local multiplayer and with some fun twists.

## What's the idea?

One person is the designated **Seeker**. The rest are **Hiders**.

You play rounds of hide and seek:

-   Seeker wins if they find all hiders within the time (or accomplishes an alternative objective)
-   Hiders win if the seeker doesn't win (or they accomplish an alternative objective)

### Phase 1: Hide

The seeker leaves the room / closes their eyes / does something else for 30 seconds. (Maybe even less. 20 seconds?)

The hiders do the following things:

-   They see a **footprint shape.** This is the "real shape", which they leave behind when they move.
-   They can see themselves and hide anywhere.

### Phase 2: Seek

When the timer is up:

-   Players become **ghosts**. They are completely invisible.
-   Other trails appear with "fake footprints", which are controlled by the computer.
-   The seeker gets his character and can **start seeking.**

## Roles

### Hiders

When they are hiding as ghosts, they can still move and do stuff! But they leave footprints. And they can't see themselves, so they have to pay close attention to track where they are.

Additionally, they can use powers (often one-time or hard to recharge): FIGURE OUT.

**IDEA:** The powers are *unique to each player* and the seeker can *see when they've been used*. (Double-edged sword. You can hide in some unique way, but the seeker has a vague hint because they *know* you used that.)

**IDEA:** Vague hints in some other way. Like, the map might be divided into different areas, and the game tells the seeker "there is 1 person hiding in area X" or "there are 3 players hiding in area X OR Y"

Maybe easier to just color the areas. Or say "left side of the map/right side of the map"

**If we do add zones, we can use that to slowly "shrink" the playing area.** (Closing zones as we go, giving players 30 seconds to move away from there if needed.)

### Seekers

They are free to move anywhere, don't leave a trail, always visible.

With the press of a button, they can **check their area.** If hiders are within it, they are revealed.

However, this action is **expensive.** You only have a few. (Or it takes time to recharge. Or you need to collect powerups to get more.)

So alternatively, they can gather/use certain powers:

-   Do a wider scan that just states "there are X people here"
-   Do a quick scan that shows hiders, but doesn't catch them
-   Do a sound check: a sound will play from every hider. (Which can really help if you have stereo sound, otherwise a bit useless. Unless each player has their own sound.)

## Modes

### Fake Footprints (default mode)

Catch people by activating that action when they're nearby. You're on a timer or limited by your number of catch actions.

### Home free ( = buutvrij)

There's a home base. If a hider manages to tap it, they are "free". Once half the hiders are free, they've won.

### Helping hands

When you've been found, you stay alive and can walk around.

If you touch another player, an alarm rings ( = everyone is notified), but you get some benefit.

-   Either you're allowed to hide again
-   Or the player you touched cannot be caught for some time, or gets a special power

### Totems

The hiders have to collect X totems to win. (These are randomly spread across the map, just walk past to grab it?)

Being caught, of course, means one less person that can grab them. (And maybe the required number of totems goes up?)

Maybe the seeker can *also* grab totems? (And they'd give a special power. But a new one instantly regenerates somewhere else?)

### Line of Sight

One where you're caught if the seeker has you in their *line of sight*.

## Maps

For this to stay fun, we'd need randomly generated maps.

> (Of course, some custom maps are also a good addition. Especially as training, as I can ensure they look good and teach the fundamentals.)

How? Well ... **just place stuff semi-randomly on a flat floor.**

Some "loose objects" are also fun, so ghosts can (accidentally) walk into them.

**Question: 2D or 3D?** => With 3D, there's the problem of actually being occluded by stuff, and it's a bit more work. But it does work better with the collisions and sensible/clear random generation.



## Related Idea: Scavenger Hunt

A huge (random) world. Treasure (or multiple treasures) are hidden across it.

Players work together: **each player controls a different "sense" of your robot/character**.

So,

* One player can control where we listen to sound.
* Another controls where we walk.
* Another controls where we look.

And then it's about **combining** those senses, using them well, to find the treasures within the given time.

(Is there a need for another threat? Some monsters roaming around you should be wary of? Nah, it's better to have **traps / bombs** that trigger when you walk over them. *For each sense, there is something they need to watch out for, and warn the others about*.)
