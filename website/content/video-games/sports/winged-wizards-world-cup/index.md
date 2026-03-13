---
title: "Winged Wizards World Cup"
categories: ["video-games"]
tags: ["sports", "party"]
language: "en"
progress: 4
---

Inspired by _Quidditch_, turning it into a simple side-view party / local-multiplayer game. Though, psst, don't mention this inspiration or you might get copyright vultures coming after you ;)

**Instead of sitting on broomsticks, we are *birds*.**

**Instead of throwing balls, we're working with *breakable eggs*.**

And then the name would be something like "Birdball" or "Flyfootie" or "Winged Witches/Wizards"

@TODO: I should include some screenshots from the functioning prototype I made for this.

## What's the idea?

Each player is a bird. It allows them to fly and maneuver in the air.

Eggs fly around the field. You need to throw them into the ring/basket/whatever of the opposing team for points.

### Objective?

Score the most points within the time limit.

### Input?

Movement + one button. **You automatically accelerate/move.**

Movement:

-   Tilt left/right to steer left/right
-   Tilt up/down to steer yourself up/down

Button:

-   When pressed, you do a flip in the direction you're facing.
-   When held, you powerup an ability, which is used when released?
    -   Alternatively, when held, it slows you down?

## The Biggest Issue

It should **not** feel like a Quidditch ("Broomstick League") or Rocket League clone. It should be different in *theme, objective, playstyle, etcetera.*

It also should be simpler than those games, way more accessible.


## Ideas

**Idea #1: Physicality.** It should be possible to bump others off-course. Or to bump the egg loose from a bird's beak.

**Idea #2: Different eggs and targets.** Like Quidditch. Rings give different points. There's one tiny, evasive egg that gives *huge* points when caught.

> **Flying through the opponent ring gives a penalty!** (To prevent simply flying into the goal holding an egg.)

**Idea #3:** **Play goes mostly via catching and throwing**.

Birds catch the ball in their beak.

While holding your button, the ball will start to leave a trail, and power up. When released, it continues with speed/momentum according to that trail.

(This way, you can do all sorts of throws by moving around while powering up.)

If you're *without ball*, the button acts as a way to flip.

-   Left/Right = flip sideways
-   Up/Down = flip front/back
-   No direction = flip along Y-axis (in-place rotation)

**PROBLEM: How to *take* the ball from someone else? How to *prevent* players just flying straight into the goal with the ball in their mouth?**

That's where the physicality comes in, I guess. You can neatly take the ball, if you position yourself correctly. Or you can flip/fly into others with speed to bump it loose.

Or you can throw a "DANGER EGG" at someone else, which will incapacitate them for a bit as well.

But perhaps the ball is also **on a timer.** It will throw itself if you wait too long.

(And of course, I can simply disallow going near the goal, or scoring while the ball is still inside your beak.)

**Idea #4: So it's all about momentum and maneuvering.**

Diving from up high will give you great speed, while the reverse is obviously quite slow.

You're faster without eggs. (Or maybe the specific egg type can influence this.)

**Maybe there's stuff floating in the air (or "zones") that you can fly through to gain speed** (or something else) => these are "treats"

**Idea #5: The eggs must move naturally on their own.**

They must always stay moving, neatly stay within the bounds of the field. They might have their own will, changing direction randomly, changing speed randomly.

They should never just fall down and lay still/flat on the floor for a while.

**IDEA:** The "snitch" can only be caught by *one player* on each team? (Anyone else touching it is an immediate penalty?)

**IDEA:** There *is* a rule about only one Chaser being allowed in the opponent's goal area. But that's quite tough to enforce in such a video game, isn't it?


## Notes / Sources

Rowling about an ideal Quidditch video game: <https://www.therowlinglibrary.com/2019/10/03/how-should-a-quidditch-videogame-be/>

Airplane movement in Godot (although it uses a KinematicBody, and I'd want a RigidBody ... ): <http://kidscancode.org/godot_recipes/3d/simple_airplane/>
