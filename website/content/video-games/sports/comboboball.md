---
title: "Comboboball"
categories: ["video-games"]
tags: ["sports", "local-multiplayer"]
language: "en"
progress: 2
---

You're playing *some* type of ball/racket sport. This game idea only has two required parts for the map/field.

> **There is a field, with a net, and two clear sides.**

> **There are walls around the field.**

The rules are simple: when the ball **touches your floor twice in a row**, the other team wins the point.

It's perfectly allowed to ...

-   Hit the ball back towards yourself, without the opponent intercepting it
-   Hit the ball before it touches your floor
-   Let it bounce once on your side.

However, the more you touch the ball, the more it bounces on your side, the **more this ball becomes worth**. When the point is eventually scored, the winner gets *as many points as have been collected.* In this way, the game encourages making "combos" instead of just brainlessly hitting the ball back-and-forth.

> Of course, there's a maximum to this, and some way to prevent the game just being an endless loop of someone playing the ball to themselves.

More formally:

-   Whenever the ball hits a wall or switches fields, it "*resets"*.
-   The ball gets `+1` value if you hit it after a reset, but you were already the last person to hit it. ( = the opponent did *not* hit it in the mean time.)
-   The ball gets `+1` value if you hit it after a reset, before it touches the floor. ( = you do a volley)
-   If a *team* hits the ball *more than 3 times* with *no reset in-between*, they immediately lose the point.

**To make this easier to program and play:**

-   Players are simply blobs that can run and jump around => the "bobos"
-   Hitting the ball with your body will result in a minor (realistic) collision
-   They hold a racket sideways. Hitting the ball with your racket will steer it more and add a lot of power.

**Alternative:** leave out the whole racket. Only use blob body. And jumping+aiming will just *dash* in that direction. (Or add big *hands* at the sides of the blob body or something that take over the racket function, without making the collision shape ugly. Or use big *ears* for that :p)

> Would also need a rule for *resetting* the dash. Or is it chaotic enough/hard to control that infinite dashing isn't that much of a problem?

There might be more mechanical variety here:

-   Double pressing jump.
-   Long-holding jump => simply determines jump height
-   Aiming in a certain direction when jumping => will do a spin/roll/swing
-   A general bar of *stamina* used during a point/match.
-   You can use the *net* and the *walls* to bounce yourself hard in the other direction. (Of course, can also use team mates for that.)
-   Hitting the ball with your *­body­* provides a certain knockback. (Using the racket does not?)

**Allow different player counts:**

-   Scale field size for 2v2, 3v3, etc.
-   Modify field size *individually*, or perhaps modify some rules, for unequal teams (2v1, 3v2, etc.)
