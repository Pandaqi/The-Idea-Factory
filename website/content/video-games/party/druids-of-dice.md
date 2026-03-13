---
title: "Druids of Dice"
categories: ["video-games"]
tags: ["cooperative"]
language: "en"
progress: 2
---

A cooperative game where **each player is a die**. (With a simple face and dangly legs or something.) You move around by rolling your cube body. A single core rule should lead to lots of interesting gameplay:

> Whenever you *touch* something, the face you used to do so determines how you do that action.

For example: you land inside an "attack space" with your die showing "3" on that side. Then you do 3 attack damage to enemies inside that range.

For clarity, will need to *highlight* the face that was chosen for an action, plus display a *sprite* feedback over your head (with a flat representation of that face and what it shows).

### Players

The die will usually show numbers.

But it can also show *non-numeric* stuff. Like a symbol that means something special.

**IDEA:** Different players can have different dies. Must be some clear way to *know* what's on all sides at the start.

> Maybe you can also change this during a round?

**IDEA:** Players can combine! If you land within the same space *roughly at the same time*, your numbers combine. And if you have doubles or something, it triggers a special action.

> Might also be true if you bump into each other, although that might be hard to do and/or program.

### Input

Arrow Keys/Joypad = Moving

Whenever you do a **flick** (although I might also just make this continuous, with reset points anytime you land/hit something with enough corners), you

-   Jump into the air a bit
-   Move in that direction
-   And rotate in the meantime

If the space is clear, you'll have rotated exactly once.

But you interact with the environment realistically. There's a strong balancing force on the die (to force it to stop spinning and land on something), but there's still randomness and skill involved in good movement.

### Objective

Destroy all the enemies coming at you.

**Alternatively**, we might go with a peaceful theme. Maybe you're in a magical restaurant or something. (The "attack space" is just a "how many ingredients to grab" or "how hot must the oven be")
