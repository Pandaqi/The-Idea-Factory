---
title: "Piranha Party"
categories: ["board-games"]
tags: ["experimental", "tile", "physical"]
language: "en"
progress: 3
---

I've always wanted to make a **Raging Rapids boardgame**. Below is a summary/overview of the idea, then I give the simple final rules, and then all remaining ideas and original notes that went into it.

Its general idea would be like this.

* There are BIG tiles with multiple tracks showing the parcours. (Flow of water, waterfalls, whirlpools, rocks in the way, etcetera.)
* Each player has their boat. (A circular boat + loose flaps on the sides, which you can fold up to be similar to a circular piranha/raging rapids boat.)
* And each player has X people (Pawns) sitting inside it.

On your turn, you'd ...

* Optionally extend the shared track/map
  * Perhaps just AUTOMATICALLY extend the track whenever someone moves off of it. (The remainder of their movement, though, is discarded, so they always just land on the first spot.)
* Then move your boat according to the flow of the map. Boats move 3 spaces by default.
* People can _fall out_ of your boat. In that case, their pawn enters the map. People move 1 space by default, but this also gives them more freedom and less likely to get stuck.
  * Because two people can't _share_ the same spot. (What happens if they collide?)
  * But Pawns can move anywhere. (OPTIONALLY they can also enter _any boat_, so even that of other players? => They automatically enter your boat again if they're on the same cell.)

There are several "finish" or "exit" tiles, which you push into the second/last half of the deck. (Or some other mechanism to prevent an end to the game that's too early. In fact, we might want to just make the finish tiles FACEUP/MARKET, and you can place one as long as the path from STARTING TILE->FINISH would be at least 10+ tiles.) 

* When you finish, you place your boat at the rank. (First place = 10 points, Second place = 5 points, etcetera.)
* You only score the Pawns that were inside your boat upon finishing. (They have individual scores, or just 1 point per.)
* Once finished, you're out of the game, and all your pawns in the water ... drown or something. (Their score is _subtracted_?)



## Rules (Final)

On your turn, **move your boat and any people** that fell out. The boat moves 3 spaces, people 1 space, and all movement is _required_ to be completed.

> You decide the order of movement however you like.

* (VARIANT/IDEA: If your boat has NO more pawns inside, it DOESN'T move?)
* (VARIANT: Boats + Pawns have unique numbers and that must be followed?)
* (VARIANT: Pawns out of the boat have special powers at that moment, such as being able to interrupt/rotate other player's boats they pass.)

If you move **off the map**, draw the top tile from the deck and place it underneath you to extend the map. Discard any remaining movement.

(VARIANT: You hold tiles in your hand, or there's a market, so you can extend earlier or plan ahead.)

If you **bump into anything**, a **person falls out** of your boat. If you bump into another player, they choose the direction in which they bounce away, and you must bounce in the opposite direction. (This does not count as movement.)

* Two boats can never be in the same cell.
* Pawns can share cells however they like. If they share a cell with a boat, they may enter it automatically.

When **extending the map**, if the path from the Station to your tile is at least 10 tiles long, you must place another Station tile.

> Once you enter that Station, you're done. Place your boat at the highest non-claimed rank, discard Pawns left outside your boat at this point in time.

**SCORING** = many possible ways to do this. This simply DEPENDS on your final Station tile, making each game even more different.

* Base value for ranking + value per pawn still inside.
* Base value for ranking, but all pawns outside the boat are _subtracted_.
* No base value, the final tile simply says "each pawn inside your boat is worth X points"
* Or we get both: +X points for boat, +Y points for each pawn still inside

## Here's a unifying rule for flow

* The station tile ( = starting tile) has arrows.
* The flow of any piece of water is found by simply starting at the station and following the shortest path to that tile. The direction from which you came is the flow of that tile.
* Cells can _change this_ by showing an arrow. Arrows are a "core" element and not considered a special icon.
* Instead, another _icon_ can be on top of the arrow, such as one that says "double speed" (you MUST move +1 this turn) or "rotate a quarter turn" or "pick up a Pawn at most 2 cells away"
  * Perhaps a few "unique" icons that only work on boats or only on loose pawns.
  * Some "gates" => can only pass if you have 3+ Pawns, can only pass if you're rotated like this, 
  * Perhaps add one or two resources to "pick up" along the way? Maybe an expansion, restricting the base game to simplest material seems better.
* "WATERFALL": this is a _line_, and if you pass over it, you get +3 movement but lose a Pawn.
* "WHIRLPOOL": rotate your boat however you wish, all remaining movement is discarded.
  * Maybe **dizziness/nausea** is one of the resources that builds up? And every whirlpool, of course, makes people more nauseus?

## Old Ideas & Considerations

**@IDEA:** If you _bump_ into something (another boat, a rock, whatever), _that's_ when a person falls out?
* This would require all movement to be REQUIRED.
* Some tiles will have arrows to force you to go faster (2 or 3 steps next turn), or to go sideways.
* **Here's a cool rule for collisions:** if you bump into someone else, _they_ decide to which adjacent cell their boat moves. You, by necessity, are forced to move in the _opposite_ direction. This does _not_ count as a "move".
  * The alternative would be to follow the laws of physics => if coming from top left, for example, you bounce back diagonal and they bounce forward diagonal. This might be a variant as it probably needs strong explanation.
  * The other alternative would be to just _stop_ and do nothing, but that is very static and meh.

**@IDEA:** Does _rotation_ matter? (Some sides it's safe to hit something, others not. Maybe rotation determines _how_ you follow the flow on the cards.) => Feels very interesting, but need to find a good core rule for it. Maybe expansion only.
* **@IDEA:** The very _first_ movement of your boat is allowed to be in the _current direction of its arrow_. (So the inside of the boat has this big chunky arrow. By rotating smartly, you can move yourself out of the way or set yourself on a better path before doing the rest of your turn!)

@EXPANSION: Actually add the Piranhas which also move around (a few of them), but can be moved by anyone and will eat loose people (out of their boat)?

@IDEA: Include a really strong **solo mode**, which I can then use for testing!

@PROBLEM: If there's _flow_ on the cards---arrows pointing clearly in a direction---then it becomes really hard to make a sensible path. Because it's likely that you need to rotate tiles such that arrows point opposite ways, creating a static sinkhole.
* SOLUTION 1: Flow only matters _within the tile_ (up/down). Moving over the track itself always goes in the same direction.
* SOLUTION 2: You simply _can't_ place opposite flow edges against each other.
* SOLUTION 3: 

**@IDEA:** Does this make more sense as a HEXAGONAL grid? (Probably want 3 connection points on all sides, and then the width can fluctuate in between, as hexagon grids need.) => Just try BOTH, maybe even add a setting to allow BOTH on the final web page.