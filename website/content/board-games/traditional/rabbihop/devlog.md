Welcome to the devlog for [Rabbihop](https://pandaqi.com/rabbihop) @TODO: probably different name. 

I'll try to explain the process of creating this project from start to finish, talking about problems, solutions, why I made certain decisions, and so forth.

## What's the idea?

For ten years, I've had two rabbits as pets. Not that long ago, they unfortunately died (somewhat unexpectedly). My creative brain handles grief / sadness by _doing_ something with it, so a few days later, I suddenly woke up with the idea for this game in my head. 

As a sort of homage to my lovely rabbits that accompanied me for ten years, I immediately wanted to work on that idea and get it out there.

The core idea was as follows.

* You are a rabbit (pawn), on a board made from square tiles.
* On your turn, you jump to a new tile. The tile you're currently on decides _how_ you can jump, by showing numbers on all four sides.
  * For example, a "2" on the bottom edge means you can jump _two tiles_ downward.
  * No number would mean you can't jump in that direction. 
* _Somehow_ players can place fences between the tiles to block off parts of the board.
* _Somehow_ this jumping to tiles scores points.

This is obviously a vague idea. I also wanted to take a day off and not look at a computer screen / type thousands of words, so I decided to immediately create a _paper prototype_ and start testing this game to find the rules!

I created 64 square tiles with random numbers on the edges, and some icon in the center that I thought made sense. I also created 16 "fences" (just folded paper) to place between them. (All that from _one_ A4 paper!)

And I started playing, figuring out the rules as I went.

## The first prototype

Quite quickly, I settled on the following rules.

SETUP: Place one tile in the center. All players start there.

OBJECTIVE: The game ends when the deck is empty. Count the value of your score pile; highest score wins.

GAMEPLAY: On your turn, you JUMP (or "hop" I guess) and then DECIDE.

* JUMP: pick an edge with a number. Jump that number of spaces in that direction.
* DECIDE: Either _take_ the new tile ( = add it to your score pile) and replace it with a new one, or _execute the action_ of the tile.

Now all the complexity or variety in the game will come from the actual _tiles_. I started with these ones:

* Carrot (or Double Carrot): scores 1 (or 2) points.
* Fence: place a fence between two tiles.
* Teleport: when jumping from here, you can go to any other teleport.
* Trap: if you land here, you're immediately out of the game.

Lastly, what's the point of fences? Well, for every _fence_ you need to jump over, you must pay one tile from your score pile!

Did this work? Kinda, not really.

* You often want to _rotate_ or _swap_ tiles, otherwise you can't jump to a useful space next turn. There was no way to do this.
* The only way to _somewhat_ do this, would be by taking every tile you land on. Because then you can replace it and hope the new tile has the right numbers/layout for you. 
* Which meant that the best strategy would be to simply take every tile you find and hope you get lucky.

This version also focused on "exploring". If you jumped to an empty space (as you start with only one tile, remember), you'd place a new tile there. In practice, though, this meant it was always the best move to just jump into empty space and hope for the best. 

(Also, this create a lot of exceptions and nasty situations with the rules. For example, can you _take_ this new tile? What if you overshoot and jump more than one tile away from the current board?)

## The second prototype

Let's see if we can improve this.

* Start the game with a 5x5 grid already laid out.
* Place a default _starting tile_ in the center (that simply allows a jump in all directions and does nothing else).
* Any tile in your score pile that _doesn't score_, is worth -1 by default. (This prevents people from taking everything at random.)
* You always have a third option on your turn: _rotate_. (Instead of taking or executing the action, you could rotate your current tile.)

Yes, this is an improvement. 

* You _can_ strategically take a tile. Even if it scores -1, it might be better to give yourself new movement options (or take away a good spot for somebody else).
* Knowing the whole map beforehand gives you a clear goal and something to move towards. It's not as random or empty at the start. (Though the "explore" variant reeks of _expansion_.)
* Placing fences and charting a smart path is now a more fun aspect of the game.

But it's not _really_ fun yet, and many questions are left unanswered.

* What if you have no valid jump?
* What if the "trap" tile appears underneath you as the result of some other action (instead of you landing on it). Does it still kill you? Isn't killing too harsh?
* What if you share a space with somebody else? Can you change a tile while somebody is standing on it?
* Because you can orient new tiles (drawn from the deck) however you like, the "rotate" action becomes the inferior option most of the time.

## The third prototype

As always, I like to simplify and streamline. Solve many issues with one rule (or within the same system).

Let's go back to two options on your turn: TAKE or EXECUTE. 

* Useful actions like "rotate" are simply _a possible action that a tile can have_!
* And we make them more powerful. It's not just "rotate your current tile", it's "rotate any three tiles".

Putting everything on the tiles has the added benefit that players don't need to _remember_ any extra rules or exceptions. What you can/must do on your turn is always there, in plain sight, in front of you.

If you can't jump ... you simply don't. You can just take the tile you're currently on (as per the usual rules), replace it with a new one, and you can probably jump again next turn.

Tiles currently serve two functions: one is an action to execute, one is their value when scoring at the end.

Adding these two different things to each tile, however, is overwhelming. We can say the following.

* If a tile has no scoring rule, it's worth -1 by default.
* If a tile has no action, it has the "rotate" action by default.

For example, the "carrot" is worth +1 when scoring, but has no action. As such, if you land on a carrot and don't take it, you may rotate.

This is consistent, saves a lot of overhead, and actually adds more strategy. 

Now there is a reason to _not_ take a tile that scores for you, because you want the action. Let's see if we can add more reasons to not take things you'd otherwise always take ...

I invented a special tile that works wonders: "score type X". It shows a score icon and one specific tile type. If you have it, _that type_ suddenly isn't -1 anymore, but +1! This way, you can suddenly take _fences_ or _teleports_ into your score pile. If you manage to get that "score type X" as well, you're doing great. (If you don't ... well, high risk, high reward.)

Lastly, we have the question of interactivity. In my first tests (with a quick paper prototype), I discovered the opposite of what I originally expected.

Let's say you do a "rotate" action. In the current rules, it's perfectly allowed to rotate the tiles other players are standing on. Is this fun? No! It means anybody can, at random times, be completely screwed with just a simple rotation. It's way too powerful and can't be controlled or stopped.

So, as I played more, I realized the opposite was way more interesting.

* You cannot change tiles that already have a player on them. (Can't take them, or rotate, or swap.) In other words, once you've landed somewhere, you're safe there.
* But you _can_ stand on the same tile as another player. (With no consequences.)

As before, "blocking" other players at all times was too aggressive. Instead, it's now just a tile type that can appear. ("Only one player is allowed on this tile at any time.")

Finally, some minor tweaks.

* The grid size depends on player count. With 3 players, a 4x4 grid is better, otherwise you rarely meet each other.
* When you land on a _teleport_ and take its action, you immediately teleport to another one, then _replace_ the tile where you landed. 
  * Executing your tile only happens after jumping, so starting your turn on a teleport would be confusing and/or keep you stuck in a teleport loop forever!
  * Also, if there is no other teleport, you simply can't jump from this tile and are stuck. (I tried placing a "1" on all sides so you could always move off a teleport in any direction, but it was less fun.)
* When you land on a _trap_, you pay 4 score tiles and reset to the starting tile.

> Paying score tiles, by the way, always happens from the top of your deck. So you can keep track and know roughly what's on top and what you're paying.

