---
title: "One Button Climb"
categories: ["video-games"]
tags: ["one-button-games", "local-multiplayer"]
language: "en"
progress: 3
---

The map is a vertical side-view of a randomly generated climbing wall.

## Goal

Be the first to reach the top.

## Movement

You automatically have a rotating circle around you. 

* **Press your button** to fix its rotation and start powering up.
* **Release** to make the jump.

## Climbing Rules

You automatically snap to any handholds you pass. (Unless you go "too fast" and fly by them, perhaps.)

The generation algorithm ensures handholds are never _too close_ or _too far apart_.

Algorithm sketch:
* We can just start with X handholds at ground level---where players start---and then simply "jump up". (Don't allow going back, don't pick spots too close to other parts.)
* Continue until every player has a "path" to the top.
* Then fill in gaps and empty spaces with more handholds.

## Details

The camera **follows the first ("highest") player**, always.

If this ever means you end up **off-screen**, you're eliminated for that round. 

(Or some softer reset/punishment, like it resets you to a higher handhold but gives a time penalty.)

Players can **collide**. If you jump to the same thing, if you fall weird, you can bump each other off.

There are some simple **special handholds**, like,

* Explodes when you leave it (blowing away others/permanently removed now)
* Can only be grabbed when falling
* Limits your directions / changes your possible movement from here.

<!--- **EDUCATIONAL = Path Optimization, Precision, Aiming/Directions, General Climbing Safety/Security/Knowledge?** --->
