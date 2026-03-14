---
title: "Multimazer"
categories: ["video-games"]
tags: ["mobile", "local-multiplayer"]
language: "en"
progress: 2
---

You move **two people around in a maze**, but the buttons for the actions (left, right, up, down, ...) are **spread around the edge of the screen**.

* This allows very fun multiplayer (cooperative) play, as you need each other to move around.
* If playing alone, this simplifies down to just one person.

## Goal

The **goal** is to collect the "keys" in order. They are scattered around and have a number. (So when you find one that's not the right order, you must remember where it was and come back later.)

But,

* The map also spawns enemies. They walk around randomly; if they touch you, you die/lose a life/whatever.
* The map also spawns good and bad items (mostly good), which give extra points, more speed, remove some enemies, whatever.
* You have an **explode** action (which you can charge by collecting bomb items). Using it will delete any entities + walls + items around you. (If you delete the other player, or a key, you lose instantly.)

<!---
TODO:
* Add the wandering enemies, which re-use the MazeMover module combined with an AI RandomWalk module.
* Place the keys => win if collected, lose if destroyed.
	* If working, reuse to place general items.
* Add fog of war/shadows/lighting so you only see a part of the maze.
* Nicer buttons, nicer graphics, etcetera.
--->