---
title: "Logic Puzzle Box"
categories: ["puzzles"]
tags: []
language: "en"
progress: 5
---

Below is a collection of tiny, experimental, unspecified ideas for **logic puzzles**. That is, puzzles you play with pen and paper, filling it in the right way (like a Sudoku or Crosswords).

Basically, all these ideas were too small or too vague at the moment to give their own entry in this puzzles category.

## Racetrack

Your goal is to create the **racetrack** (formula-1-type-thing) through the grid.

You get every **_car_ and part of its _route_**. (So, "at some point, it went up up, right")
* Those cars might also be in the grid itself, indicating that "the track definitely moves through here" (but in which direction?)
* We might expand this with "pit stops"---small segments attached to side of racetrack---to make it harder and add more variance.

The grid itself may have **trees** (can't have a track) or **stands** (must be next to track somehow)

Maybe numbers at the edge indicate **straight** or **corner** segments?

> (Only 1 or 2 of these "infos" might already be enough to get the puzzle in the first place.)

Crucially, **cars don't collide**. If they do, it's indicated as part of its route ("it went forward three times, then hit a tree/this car").

## Pig Tails

You're drawing pigs and their tails.

> Pig = BODY (circle/capsule of any length), LEGS (below first and last body; can be two legs in one cell), and TAIL (curly thingy)

The number at the side indicates how many tails you can see from there.
* Pig bodies _obscure_ any tails behind them.
* Curly tails can't be in another pig's face, or rotated a certain way, or _some_ rule like that

## Bee Hive

Something about placing dots/hexagons/beehives in a field of flowers, such that all flowers can be reached and/or all existing bees can find their way home?

## Crowns

Something about **drawing crowns with either 1, 2, or 3 points**. (So 1 point = just triangle with point up)

Place them on king's heads? Long banquet table? Needs work.

## Islands

Something about dissecting an empty (sea) map into **islands + lighthouses** ( + ships / fishingboats?)

* Each section must contain at least one island. (But the same island can be cut across multiple sections.)
* Each island must contain exactly one lighthouse.
* EXPANSION: Each section must contain as many fishing boats as the number of fish inside?

## Fishing

Something about **drawing fishing lines** such that everyone catches a fish / the right fish, but none of the lines get "tangled up".

## Seats & Tables
 
Triangular/Hexagon grid.

You can either draw a _small circle_ (inside rectangle) or a _big circle_ (through a group of rectangles; hexagon; their corner point as center of your big circle)
* SMALL CIRCLES = CHAIRS
* BIG CIRCLES = TABLES
  
As expected, tables need X chairs around them, and each chair can only belong to one table.

With rules like this ( + maybe something extra), fill the layout for this diner/cafeteria/restaurant.

## Ninja of the Night

_Based on Lightbulb/Light-based logic puzzles._

* You're placing both Lights and Ninjas.
* Ninjas must always be in shadows; Lights must light up every space without Ninja.
* Around the board, it states how many ninjas should be in each row and column.
* LIGHTS: They illuminate all cells horizontally and vertically, until they hit something.
* EXTRA SPICE: Special Ninjas/operations that play with the rules a bit, maybe special kinds of (directional/spot) lights.

## Bridgeborn

_Based on Hashi, the one with bridges, but hopefully find something a little more advanced and varied._

* Ability to change number of islands?
* Ability to leave out the number of an island, because you can find out its bridges some other way?
* More connections possible, but some rules about that? (As in "A cell can have up to 3 connections, but there can never be a cell with ONLY 3-connections.")
* Diagonal connections possible?
* The _purpose_ of connections matter! Maybe there are people on the islands, and they need to end up on other islands. That's the purpose of the bridges, to create a lane for them to arrive. (Perhaps have a _second_ option using boats as an expansion? Those boats can bring people, BUT they can't pass underneath bridges, so they can only be used in larger areas where you built no bridges. A nice thematic restriction.)

## Timeline

SOMETHING WITH A TIMELINE? It feels like a nice implementation of a logic puzzle.

* You get a series of logical rules, cause and effect, what people did. ("After Dan left the party, I went to bed as well.")
* It's your job to fill in the entire clock/timeline by slotting everyone in just the right place.

## Ball / Gravity Arc

Maybe "Volleyball" instead. You must draw the correct **ball trajectories**, by drawing circles into the squares (indicating different "frames" of its movement animation, if you want). These trajectories must follow similar rules as how to draw curves in pixel art:

* If there are multiple in a row, the next step must be _diagonally touching_, but have one fewer.
* If you end up at a SINGLE circle on its own, the line should now _switch direction_ and start having _one more_ each time. (If it was moving to the right, now it moves down.)
* Biggest question: how do we determine the "flipping point"? Where a ball goes from growing to shrinking its #circles?
  * SOLUTION: This depends on the _ball_. These have numbers inside, which is their max "in-a-row" length.
  * SOLUTION: This depends on the _cell_. Some are marked as flipping points. Or maybe all cells have a color/symbol, and balls have too, and if they _match_ it should flip.

## Sea Battles / Pirate Party

Inspired by Battleships. This one's pretty UNCLEAR, though it should be a promising theme, so I want to search for the simplest possible working implementation.

* Elements = You get a top-down view of an ocean, with some islands, functional ships, and most of al **wreckages**.
* Objective = Draw pirate ships + their cannons and figure out where everyone was? Or draw their _trajectories_ through the water as they battle? Draw islands yourself too??
* The general idea, any way, is ...
  * That they shoot cannons from their side. Which is how they hit other ships.
  * That you can't go through islands.
  * That there is evidence of "wreckages", so you must figure out the ship that was both hit _and_ ended up there?

## Snackman (Obviously a pun on Pac-Man)

* Elements = A PacMan-Like level. Some solid blocks, some ghosts to eat, lots of little dots along the way, and your Snackman starting somewhere.
* Objective = Eat all the ghosts, without them killing you first.
* Patterns =
  * Draw a line from your snackman. Orthogonals only. It can cross itself, but not use the same line/connection twice.
  * When you eat a POWER DOT, you can _eat_ the ghosts for your next 4/5 steps.
  * You must eat a REGULAR DOT once every 6 steps.
  * Otherwise, if you run into a ghost, you die.
  * (You must eat EXACTLY all the dots by the time you eat the final ghost?)

## Sports-Releated

Can we merge Sudoku-like puzzles and Sports ("playing a sports match") in some way?

Trajectories of things, positioning, players used, how to go down a raging rapids most efficiently, etc

Could be something for SOCCER like "with these players on the field, the goals here, etcetera: draw the path of the ball and position of other players to ensure team 0 scores a goal"


## Sheetmusico

Placing notes to satisfy constraints on intervals, notes per line, note bove or below stem, connect or not, something like it

## Table for Thinkers

Running a restaurant => placing tables to satisfy customers and recipes

## Architactic

Drawing walls, windows and doors to match requirements of floor plan

## Circular Grid

Nothing more to this idea yet. Just the idea of using a _radial/circular grid_ for a puzzle instead of a basic one.

## Delivaku

Delivering Stuff => you need to draw the roads, while given the number of crossroads/intersections/dead ends?
* Might have different terrains, and some move you faster, only boats can go over water, etcetera.
* This constrains the final solution in a very thematic and fun way.

OR you literally draw vehicles into the grid cells. To calculate the "shortest route" a package would take,

* Step through the grid cells from start to finish.
* As long as you stick to the same type ("only moving over train"), it's just 1 step/whatever its movement cost.
* But when you JUMP to a different terrain, that counts as 2 or 3 steps.

## Giraffine

You're drawing giraffes and must fill the space!

* A giraffe has a 1x2 body block, a neck that can be as long as you want, and their head must face either left or right.
* The entire map must be filled. Any leftover spaces are filled with "leaves" to eat.
* Every giraffe must eat one leaf.

## Zoobar

You're drawing animals + enclosures/fences. Enclosures can be single or double width.

* Objective = You receive the number/types of animals to house and how many fences you can buy. Fill the map to fit this.
* Patterns = ??