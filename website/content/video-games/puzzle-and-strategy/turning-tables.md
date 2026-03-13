---
title: "Turning Tables"
categories: ["video-games"]
tags: ["puzzle"]
language: "en"
progress: 2
---

A puzzle game where you can only **rotate the entire puzzle**, but **gravity is always down**. As such, you must pick a new rotation each time that makes the right blocks fall out, and the right blocks stay inside.

## Map

An AxB square in the center of the screen. Each square can contain something and have walls.

## Theme

Thematically, the square represents a **cloud** (or "atmosphere").

> The idea is to *teach* the player about how water management works in clouds.

## Input 

Tap + drag/slide to *rotate* the whole square. When released, it snaps to a straight angle. You can't "not turn": rotation must be different on subsequent turns.

## Gameplay

After each action, stuff *falls down* (if nothing blocks it). It evaluates each square *once* from top to bottom, in a fixed and predictable order.

The square can be rotated orthogonally (perfectly horizontal/vertical) or diagonally.

### Orthogonal

**Orthogonal:** simple, as you'd expect.

### Diagonal

**Diagonal:** stuff still falls straight down, which is a *diagonal* movement in the grid.

-   To stop it completely, _both_ downward directions must be blocked.
-   If one direction is open, it will go sideways into that direction.

## Objective

"Release" the right things from the cloud, and keep the others inside. (For example, release raindrops and CO2.)

For this, I need a **simple, unified objective**. (Which stays the same from level 5 onward.)

-   Perhaps add a "water counter" in the UI.
-   And then something like: **"after X turns, the water counter must be exactly Y"** (or not higher/lower than Y)
-   Thematic explanation: *no rain* is bad, as nature needs water to survive. *Too much rain* is also bad, as rivers will overflow

Later on, as we add **CO2** and other stuff, several extra **counters** appear (for temperature and stuff). Although most things will be handled in-game with the special tiles.

## UI

-   Obviously show the square
-   Show each rounded direction.
    -   Highlight when it would snap to that.
    -   *Also* display queued blocks (that will be re-introduced in the game) here?
-   Show *water counter*.
-   **TO DO:** Show *where evaluation will start**.*** (Even if I make it consistent left-\>right, this should be useful.)
-   **TO DO:** All the **icons should be radially symmetric**. (So they look identical from each direction. Probably means they become quite abstract ...)

## Special Blocks

### Walls

Here's a list of ideas for **walls.** (0 = no wall)

1.  Regular
2.  Only block you when going orthogonal
3.  Only block you when going diagonal
4.  "Open" *after* you've bumped into them
5.  => opened 4-type
6.  "Close" *after* one block has passed through
7.  => closed 6-type

### Maybes / Specials

"Maybe" ideas:

1.  (TO DO) Trampoline => reverse travel direction from now on (might be HARD to implement well)
2.  (TO DO) Block disappears => it's just "sucked up" by the wall?
3.  (TO DO) Teleports? => Nah, probably don't work. How do you choose where to teleport and in which direction???

### Blocks

Here's a list of ideas for **blocks**. (0 = no block)

1.  *Raindrops*. (Make X raindrops leave to win the game.)
2.  *OnlyOrthogonal* = only falls orthogonally
3.  *OnlyDiagonal* = only falls diagonally
4.  *StayInside =* **cannot** go out of bounds. (They just stop at the edge, clogging everything.)
5.  *DieOutside =* make you **lose immediately** when it goes out of bounds.
6.  *??* = only moves 1 step, whatever else happens. (Or X steps, give it a random number?)
7.  *??* = will (not) move if type A is next to it. (Only orthogonal? Or count how *many* are next to it?)
8.  *??* = will (not) move if type A is *above* it. (In a sense, it is *pressing down* on it.)
9.  *??* = has *opposite* gravity (simply always moves *up;* might be fitting for the gasses)


## Tutorial

### World 1

**Level 1:** This is a cloud. Try rotating it with your finger/mouse! (**Any rotation will make the raindrop fall down**.)

-   **IDEA:** Can this be put into wordless icons? Or an animation with a finger swiping across the screen?
-   Super simple 2x2 square.
-   Only orthogonal directions

**Level 2:** After each rotation, everything *falls down*, unless blocked by a *wall*.

-   **(Temporary) Objective:** make all the raindrops fall *out* of the square.
-   Super simple 2x2 square.
-   Only walls, no other interacting elements yet.

**Level 3:** Guess what? Raindrops can also *block each other!*

-   **IDEA:** Show a "Blocked!" feedback message when a cell is blocked during evaluation.
-   Still simple 2x2, now multiple elements and walls
-   Solution requires several rotations

**Level 4:** From now on, you get a *number of turns* in which you need to solve the puzzle. (No solution exists with *fewer* turns than that.)

**Level 5:** See that number in the top left? From now on, your objective is to make **exactly** that many raindrops fall down. (It changes each puzzle.)

**Level 6---Level 10:** ramp up size and difficulty slowly. Still only *orthogonal directions* and *raindrops + walls*.

### World 2

**Level 1:** From now on, you can also **rotate diagonally**. Still, everything falls straight down.

-   Simple square to explain it, no walls yet.
-   You are *blocked* by items straight below you

**Level 2:** To block diagonal movement, at least one of its **two downward walls** must be present.

**Level 3:** Special block!

-   If the square below it is blocked (either by another block or two walls), it will try to move to the side of it.
-   It tries left first, then right.

**Level 4---20:** introduce many special blocks, ramp up size and difficulty

### World 3

**Level 1:** Introduces the **re-introducement queue!** (And perhaps **growing squares**.)

-   Any time you make something fall down; it is added to the **queue**.
-   After each turn, it checks if there is *space* (at that location), then it *adds the square back into the level*.
-   When this happens, the water counter goes *down* again?

**IDEA/PROBLEM:** Or only allow them to be added from the top? This keeps step with the *everything falls down* theme, should be easier to code and to see as a player. (But doesn't have as many options.)

### World 4

More stuff to keep track of, like CO2?


## Notes

Better names:

-   "A Cloudy Day"
-   "Trapped in a Cloud"
-   "Rain Rotations"
-   "Rotating in the Rain"
-   "Cloudy Combinations"
