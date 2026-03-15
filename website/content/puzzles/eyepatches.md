---
title: "Eyepatches"
categories: ["puzzles"]
tags: []
language: "en"
progress: 1
---

A _logic puzzle_. Solve with pen on paper. Funny silly one, but probably too hard.

**You're shown pirate faces and have to cross out either the left or right eye :p**

Or, more generally (and more replayable probably), 
* You have to cross out stuff on the map to make the rules work.
* BUT you always need a "face" around things you cross out. In other words, you can't cross out two adjacent cells, there needs to be distance between it.
* ALSO, depending on how you crossed it out, the thing on the LEFT or RIGHT becomes the "seeing eye" and has some special property too.

Okay, so, summarized.

* You're given a map full of details and cells.
* All you can do is cross out cells, either left->right or right->left. This removes that cell and its effects.
* Crossed out cells define an "eye patch" on an imaginary face. 
* If left->right, the cell to its LEFT becomes the OTHER EYE.. If right->left, the cell to its RIGHT becomes the OTHER EYE. (Or the REVERSE of that, if that's more intuitive. Should feel like drawing eyepatches on things.) That means the cell now has double its power.
* You obviously don't want to lose both eyes, or cross out an ear or something, so it's not allowed to cross out any other cells on this "face". (An illustration here is all we need. The face is given by the "circle" around both eyes, more an ellipse really.)
* Continue doing so until the map is "valid" again. (Not cursed anymore? Treasure found? Pirate ship arrived? Something like that.)