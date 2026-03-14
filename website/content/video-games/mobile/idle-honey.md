---
title: "Idle Honey"
categories: ["video-games"]
tags: ["mobile", "idle-games"]
language: "en"
progress: 2
---

An idle game.

You view a top-down flower field. You start with one measly beehive in the center.

The objective is simply a "nature score" of some kind. More flowers, more bees, more honey, it all contributes to that score.

Bees fly around on their own. (This is very easy to simulate and display.)

-   Whenever a bee visits a flower, you get +1 score.
-   Whenever a bee comes back to its hive, you get +1 honey

You can upgrade:

-   More beehives
-   Bigger beehives
-   More bees
-   Different/specialized bees ( = faster, extract more honey, get more score)
-   Different/specialized bee hives
-   Different flowers

**QUESTION:** How to keep clicking/interactivity valid? Can you click a bee to make it faster? Can you click a beehive to instantly get 1 honey? Can you click a seed bee to immediately drop its seed?

**IDEA:** Seed bees. Many flower types can be depleted or whither on their own. These bees pick up seeds and plant them elsewhere for new flowers. (Might also have "watering bees" then.)

* The balance/strategy in the game really comes from the interplay between nature and bees. You need enough flowers of the right variety, but you also need to use and deplete them to get points.
* (This does mean we need a failsafe. If you screw up really badly, something should *always* stay working and allow continuing.)

Each beehive has a *maximum* for honey and bees. Therefore, you can't idle for too long, as then the maximum is filled and it doesn't go further.

When a player logs back in, just place all the bees at random locations in random states.

-   Its value before logging out + locations buildings is saved.
-   All flowers/nature is also saved
-   If flowers can be depleted: simply calculate depletion in meantime, remove that many flowers. (Reverse for flowers that can be added. Can be some randomness here.)

The game just ends at a point where I feel the map is too crowded and browsers wouldn't be able to handle the numbers.
