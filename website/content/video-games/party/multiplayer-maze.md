---
title: "Maze of Multi Playus"
categories: ["video-games"]
tags: ["local-multiplayer"]
language: "en"
progress: 2
---

When the game starts, it generates a random maze. You start in the center, with as many people as you like, and only one goal: **get out**.

* **You win** if you manage to get out of the maze in time.
* **You lose** if you run out of time *or* run out of some common good? (Like "oxygen" if you're in space or underwater. Or you have a common resource of lives, and you lose if all of them are gone.)

Tagline: **In the multiplayer maze, there is only one way out ... or is there?**

> Should find a better tagline/title than "multiplayer maze". Something like "the escape maze" or some made-up myth like "Myria Maze", "Maze of Myria". Or tongue-in-cheek like "Maze of Multi Playus"

People can drop in/out of the game however they like. (This would require a common goal. Because, if players can die, you can just "rejoin" and all is well.)

-   When you drop into the game, you get your own character with a unique ability. The level generator takes this into account and will, from now on, add stuff that matches your ability. Each character only has 1 or 2 keys. (So you can even play with everyone on the same keyboard.)
-   When you drop out, your character disappears, and the generator will stop adding stuff your character can interact with.

What's the appeal?

-   Local multiplayer for 1-10 players! No need for expensive setups. If needed, everyone can play on the same keyboard, or share controllers.
-   Cooperative.
-   Drop in/drop out at any time.
-   Simple, cartoony, family friendly game.
-   Randomly generated levels make each round different. Unique character abilities ( + random characters) make each round even MORE different.
-   Quick start and restart.

## Ideas for character abilities

I have this idea that the maze is on a grid. Every player or block is exactly rectangular.

I also have this idea about a *rotating* grid. So perhaps gravity is always *down*, and you must rotate to get to certain places.

**Most importantly**: none of the characters can actually freely move/walk around!

How do you move?

-   It's your special ability
-   Another character helps you (by dragging/pushing/removing something)
-   By rotating the maze
-   By using special stuff commonly found in the maze: ropes, conveyor belts, teleporters, moving platforms, etc.

**Problem**: if characters can fall/move fluently, then grid-based stuff is quite hard to do? (The Jon-Blow-Sokoban problem.) Two solutions:

-   Make stuff move in turn.
-   Make them teleport/move instantly
-   Make the whole game real-time and fluent. (Would allow more wonky physics stuff, which could be fun, but also a nightmare if you can't freely move.)
-   Actually solve the problem the way Jon Blow did. (Watch that video, understand it. He starts explaining from roughly 02:20 onwards.)

### What are the characters?

1.  **Character 1**: break stuff (that is breakable)
    * Combine this with the jumper? You break something by jumping on it at full speed?
2.  **Character 2**: open doors/locks/special passages
3.  **Exploder**: can explode itself or from a distance, taking other players or objects with it. NOTE: All explodable objects use collision layer 2!
    * **"E":** explode
    * **"W":** ?? second button ??
4.  **Jumper**: jump/teleport/go through walls
    * **"Up":** jump upwards
    * **"Down":** slam downwards
5.  **MazeRotater**: rotate the full maze
    * **"R"**: to rotate clockwise
    * **"T"**: to rotate counterclockwise
6.  **Supporter**: drag/push/lift other players
    * **"S":** hold it to support players around you
    * **"?**": what's the second button?
7.  **Character 6**: collect stuff; each maze has a different recipe/secret key, by collecting the right stuff, you can unlock doors/get a bonus/extend timer
8.  **Character 8**: shoot themselves or other players over a distance.
9.  **Character 9**: ??
10. **Character 10**: ??

## How to generate the maze?

### Original Ideas

Look up maze generation algorithms to ensure there is a path to the exit.

Or use the idea of "walkers" from _Nuclear Throne_. Just don't terminate before one walker has reached far enough from the start, call that the "exit".

Then use noise (Perlin/OpenSimplex) to randomly place objects, stuff to interact with, etc.

-   Maybe **pre-design rooms** (blocks of 5x5 or something)? And then concatenate them?
-   Add ability to **switch between characters** (if you have few players), to ensure people can always use everything in the level?

Maybe start with a default maze algorithm:

-   Second answer lists 12 Algorithms: <https://stackoverflow.com/questions/38502/whats-a-good-algorithm-to-generate-a-maze>
-   The Eller's algorithm seems to be the fasted: <http://weblog.jamisbuck.org/2010/12/29/maze-generation-eller-s-algorithm>

**FIRST PROTOTYPE:** Implement maze, start in center, randomly block stuff (that can be broken/solved by the players, see if it's any fun. (Either use lights and a darker atmosphere, or use really bright colors and cartoony graphics.)

Yes, I think that is the best way!

-   Players always start at the center.
-   In an outward spiral, place blocks of pre-designed rooms.
-   Each room has entrances/exists at multiple sides. I rotate/change the room to make sure it fits.
-   During generation, I keep track of possible paths. Once the world is large enough, I stop.
-   Now I have a generated world and a list with all the paths. I choose one as the "final path" and place an exit at the end. The other paths get randomly blocked by tiles on their route.

**IDEA:** A way to _move the exit_. Or a way that it can be blocked/unblocked. Or maybe it moves by default, or there's a riddle involved.

> Why do I think this? Because otherwise, you have a 25% of just randomly running into the exit, as it's at only one of the four outer walls. If you reach the end, but you get a clue, or a bonus, or you can move the exit there, that still feels rewarding!

### Refined Ideas

**IDEA/PLAN:** Perhaps first create a very simple 2D mobile game with a maze, with everything as a blocky thingy.

-   Use Eller's algorithm to get a maze.
-   Player is a (rounded) cube, just slightly smaller.
-   All movement happens on a GRID (even though it might look fluent)
-   You can rotate the whole maze. (However, you can only do so in right angles, and everything freezes whilst you rotate.)
-   You start with only ONE type of player. The others must be RESCUED, as they are scattered throughout the maze.
    -   Just like the original idea, each player type has special powers.
    -   You get some interface/method for switching between them. (A "spell cycle" like in Lego Harry Potter? Or simply a next/previous button? Or simply whenever you CLICK on one of them?)
    -   **Multiplayer** is available. In that case, you start with two player characters, and both players get their own interface for controlling it. (Well, touching/clicking would stop working, so maybe that needs something extra => first tap a button "switch character" and then click?)
-   Players encounter locked doors, traps, gold/treasure, monsters, puzzles, etc.

**URL:** Nicest resource I've found on maze algorithms: <http://weblog.jamisbuck.org/2011/1/3/maze-generation-kruskal-s-algorithm>

**TO DO:** Find the most optimal way to work with SETS in Python/GDScript => how to create and merge/join them efficiently, because that's where I lose time.

> Use a tree structure. Check my Data Structures course notes about that??
>
> What the website says:
>
> *Using trees to represent the sets is much faster, allowing you to merge sets efficiently simply by adding one tree as a subtree of the other. Testing whether two cells share a set is done by comparing the roots of their corresponding trees.*

**GREAT IDEA:** A class of items you can just *drop* at your current location, and it will stay there, no matter what. You only have a (very) limited supply. Why is this useful? Because it helps you remember where you've already been! (In large mazes this becomes CRUCIAL.)

**GREAT IDEA:** For more varied mazes:

-   Generate perfect maze.
-   Find path from one corner to the other.
-   Now randomly block passages, add rooms (just block out a 3x3 square or something), etc. throughout the maze => but NOT on the path!
-   On the path itself, place a varied collection of items. Doors, monsters, breakable blocks, etc. => the important thing is that the maze stays *solvable*.
    -   Of course, necessary items/keys should be *somewhat* close to where they are needed.
    -   Maybe implement A\* pathfinding to ensure there's a path?
-   Finally, start the players somewhere on this path, near the center of the maze. Reward them for reaching either end (although the exit is only on one end?)

## Better Physics For Maze Rotation

**IDEA:** Instead of rotating the maze container, I think physics likes this are more stable:

-   Rotate the *gravity direction*
-   Rotate the camera (in the *opposite direction*) to keep gravity pointing downward.
-   **PROBLEM:** All player controls would need adaptation too.
    -   **However,** this shouldn't be a huge issue.
    -   **For example:**
        -   The wall climber can use gravity_vector.rotated(PI) to move left/right AND to raycast in those directions
        -   I'd need to just add whatever input velocity I get to my current velocity. (Should change "x-component" but keep "y" intact for gravity.)
        -   And then, when climbing walls, I can just use the *normal* of the collision to be able to climb any wall!
    -   **Same for jumper:** just jump opposite to gravity vector
    -   **Lastly, all players will need to *rotate* to stay upright**.
-   **WHY IS THIS BETTER?** No physics glitches, because I'm not "violating" physics rules by rotating a bunch of static bodies.

**IDEA:** When players have an item, they literally hold it above their head. Their arms+thing are attached (with loose joints) to their body, which hopefully leads to a cartoony feel and more physics fun.

**IDEA:** Gusts of wind (or something like that) that will *blow* a player in a certain direction in mid-air

**IDEA:** Maybe players CAN die, but they still come back as a ghost and can do *some* things. (It adds some tension and story element, like sacrificing yourself for the group.)

## Research

> *Jason Roher:* "Create infinite unique situation generators" => Because press is dead, games don't sell their most units on launch day, and YouTube and streamers are responsible for keeping your game alive.

**Research:** the same people that were behind A Night in the Woods, now doing some other stuff: <https://twitter.com/theglorysociety>

**Research:** Dungeoncore, nice looking game, Nuclear Throne-like: <https://talismanic.itch.io/dungeoncore>

**Research:** giant design document from professional on Level Design: <https://docs.google.com/document/d/1fAlf2MwEFTwePwzbP3try1H0aYa9kpVBHPBkyIq-caY/edit>

**Research:** of course, you can also just write an HTML5 game (Phaser) and wrap it using Cordova or Electron: <https://gamedevacademy.org/creating-mobile-games-with-phaser-3-and-cordova/>

(In time? Or can you simply be killed by stuff?)