---
title: "Formula Wannabe"
categories: ["video-games"]
tags: ["sports", "local-multiplayer"]
language: "en"
progress: 4
---

Wow, you are the best racers I've ever seen!

Which is why you'll *not* be competing in the Formula 1, no no, you'll compete in a special tournament called **Formula 1-a-bee**!

One where we might change some laws of physics. And safety regulations have been, unsafely, thrown out the window.

**Player count:** For 1-6 players (on the same device)

**Input:** keyboard/gamepad/touch => joystick for moving, one extra button for ??

**Objective:** people are "graded" by how well they do. (How quickly they finish, how much gas they used, how much damage they accrued.)

> To win, you have to be graded a **B**. That's the joke from the title (Formula Wannabe). This requires players to be as **fast/precise as they can ... while also playing risky and making some calculated mistakes on purpose**.

When you win, it says "Congratulations! You *won a bee*!" (Of you "Won a B!")


## Maps

Maps are completely *top-down*. There is no splitscreen: everyone just looks (from above) at the same track.

**Option 1:** make each map a *grid*. Build a load of different grid blocks I can place myself. (Make a *level editor* for this.)

> **Problem?** A bit restrictive.
>
> **Advantage?** Orderly, should look good, *and* makes special road types much easier.

**Option 2:** allow more freeform placement. (Simply placing objects wherever you want, in editor.)

> **Problem?** How do I ensure a road that looks nice, and is connected, and has nice borders/ramps/etc?
>
> **Advantage?** Endless creativity and possibilities. A coding challenge for me on creating organic roads and borders.

## Editor

You have "basic tiles", "edge tiles" and "overlay tiles"

-   Basic tiles: must be put down first. Represent the road, the ground floor
-   Edge tiles: put on edges, e.g. borders at the edge of the road.
-   Overlay tiles: must be put on ground *of the right type*, e.g. hazards

All of this can be done on different *layers*.

In the game, a car is only limited by collision bodies *on the same layer as them*. (So whenever we switch layers, by going up/down, we switch col_shape and col_mask on the car.)

## Main Goal

A game that **literally anyone can play**. (So only basic buttons, doing *anything* works, things introduced really gradually.)

Which requires the **theme to be accessible**. (So no generic racing theme. I'm thinking about "you're bees trying to deliver pollen to plants".)

And it to **look simple, vibrant, colorful, enjoyable.**

And the rules to be generous, involve catch-up mechanics, and things I can **steal from Mario kart.** (Maybe there's a toggle for "Casual" / "Gamer" mode.)

## Ideas

First make basic tracks possible.

-   Straights
-   Turns (of different tightness).
-   Splits
-   Checkpoints
-   Borders to disallow players from cheating
-   Etc.

Then add "special parts" (baked into the road)

-   Ice
-   "Motor off"
-   Reversed controls
-   Etc.

Then add random hazards:

-   Spikes that might come up
-   People (or cute thingies) jumping over a zebrapath (English??) whom you're not allowed to hit
-   Moving parts in the road
-   Etc.

Then add more complex road types:

-   A slope ( = needs code for "jumping" or "air time")
-   A zigzag
-   Etc.

Then add powerups, special rules, unique vehicles, etc.

## Computer AI

To have a *solo mode*, we'll need computer cars, and perhaps a "best time" on each track. (Also fun for low player counts, of course.)

Here's a simple model for them:

-   Firstly, it checks the grid. If it's moving towards a tile with no road, it tries to change direction.
-   Then it checks raycasts into the physics world. If it's about to hit something, steer away.

In the editor, I check "path completeness". Is there a path from start to finish?

-   Start at the *start*.
-   Pick a neighboring tile, disallowing any we've already seen (going backwards)
-   Continue doing so until we reach the finish.

If I find it, I *save* this path. This gives computers a guideline. Whenever we're lost, or need to find our direction, pick the *closest tile* and continue from there?

(Or use Godots A\* pathfinding for all this?)

**Alternatively, use neural network:** <https://github.com/stoicaandrei/godot-neural-network>

## Modes

-   **Default:** cross the finish line first
-   **Graded:** you keep a grade during your run. You can only finish if you have a **B**. (Once you get an **F**, you're eliminated?)
-   **Time penalty:** you get time penalties for certain actions (and time bonuses for others). We wait until everyone is finished *then* the time is calculated and we know who won.
    -   Time penalty = for destroying nature, as you're bees?
    -   The more you're *behind*, the more bonuses you get (and the less hazards/things that might give penalties)
-   **Points:** there are several points to grab during the race, you can only cross the *finish line* (to win) if you have at least X points.
    -   These are things to pick up (and deliver?) during racing
    -   The more you're *behind*, the more you get these

## Car steering

**Issue: what to do with physics?**

-   Make each wheel an actual *object* in itself
-   With a physics body (quite large, to cover the whole car)
-   Which moves using move_and_slide
-   (The module_steering simply provides "motor_force" to these.)

**BUTTON IDEA: "Disable friction" =>** this means your car will rotate, but it keeps moving in the same direction. (Making you slide. As soon as you release the button, the car snaps into the new angle.)

**IDEA:** Can't we just make the whole car *deformable* then?

-   Just place a few points around its border = "separate wheels"
-   Each frame, check if the point is about to land *inside* some other body. (With default intersect_shape or intersect_point calls.) => If so, push it out of there
-   Each frame, *try* to move all points so they're the same distance again, building from the back.

In other words,

-   **Move all wheels according to their own (sum of) forces**
-   **After moving, add a force to make them more "rectangular"**
    -   If too far apart, pull back together. (If maximum apart, make that force cancels opposing force for sure.)
    -   If at odd shapes, pull back together. (If maximum apart, make force that cancels opposing force for sure.)
-   **Now rotate wheels to fit car shape.**

Maybe I can use that technique from "Sebastian Lague (Super Chore Man)" where it "solves" a string-like connection?

How to create top-down 2D car controller (cartoony, though well-explained): <https://www.youtube.com/watch?v=DVHcOS1E5OQ&t=657s>

> **@UPDATE (Tiamo from the future):** I actually got deformable cars working quite easily this way. Just simulating all four wheels independently, and drawing a polygon between them. The issue is ... this is really funny and unique, but you can't really do a "racing game" with that, because of how deformable and wiggly the car is. So you'll have to adapt the idea to something sillier and less performance-based.

## Map Editor

### Types

I need these "types":

-   Ground tile => actual road, slopes, basic groundwork
-   Type paint => can paint any road to a certain *type* (e.g. "motor off section") or any tile to *terrain*
-   Edges => mostly borders, could also be more interactive
-   Overlay => anything placed on *top* of a certain ground, like a checkpoint, or a specific hazard, etc.

Each type has a **dictionary** (as I usually do) => keys are tile names, values are any date (frame in spritesheet, can be rotated, etc.)

### Editor

In editor, you can switch between types. It simply lists the whole dictionary as *clickable* sprites. (Click to turn on/off.)

When hovering over the map, you get a *ghost image* of the tile you're about to place.

When you press a *tile*, your current selection is placed there. (When placing edges, it simply snaps to your mouse point to the closest edge.)

There's a button to *instaplay* => disable editor functionality, drop a car in there, and try it out. (Of course, the button should also go the reverse direction.)

### Externals

You can input a *name*.

It uses *pathfinding* to check if the road can be completed. It reports the results, numbers the checkpoints accordingly, *and* saves that path.

When you press *save*, the map is converted into a bunch of 2D arrays:

-   Type in current tile
-   Rotation
-   More??

This is saved into a file with the desired name.

### Road sections/types

I would like to do *as much as possible* through road sections. As they are: *easily visible*, *easily paintable*, *easy to understand* and *good-looking in general*

**Engine off =>** no accelerating; if you come to a standstill, you reset to last checkpoint (?)

(**Engine Upgrade (Flight) =>** you fly up and up, until the effect wears out)

**Icy =>** autodrifting, very hard to steer

**No steering =>** can't steer

**No drifting =>** you can't use the "drift/no-friction" button

**Reversed Steering =>** controls are reversed

**Forward boost =>** as long as you touch it, you keep moving forward *faster*

**Reverse boost =>** as long as you touch it, you keep going in reverse *faster*

**Solid body =>** cars are solid bodies (can't decompress/change distance)

**Slowdown =>** as long as *one* player touches it, the whole game goes into *slow motion*

## Extra ideas (based on real F1)

**Slipstream** => driving directly behind someone speeds you up immensely (and reduces drag)

**Tire wearout** =>

-   Over time, your tires wear out
-   Causing you to do a pit-stop to change them (or continue with worse and worse tires)
-   And there are different tire types to choose from

**Fuel** =>

-   Some games start with a fixed amount of fuel, and you just need to be careful.
-   Others can be refueled, but this costs time/strategy.
-   General rule: more fuel = less speed

**Safety Car** =>

-   Once in a while, a car appears in front of the leader, forcing it to slow down. (There's literally a body you can't get past? Or does it forcefully cap your speed?)
-   This would bring people closer together and give the losers a bit more chance


## Research notes

How Rocket League handles the physics: <https://www.youtube.com/watch?v=ueEmiDM94IE&t=27s>

Around 15:00 =>

-   They calculate forward + side speed of wheel in global space
-   Get a ratio = side / (forward+side)
-   Convert that to a value with a simple curve (if 0 = 0.2, if = 1)
-   Use that as friction, though *scaled* (if not it immediately stops the wheel), so apply an impulse in the opposite direction.
-   (Apply friction at the same height as center of mass, so it doesn't lead to a *rotation*/*torque*.)

Alternative titles:

-   Formula Wonder
-   Formula Wander
-   Formula Wanderful
-   Formula 1-dimension(al)