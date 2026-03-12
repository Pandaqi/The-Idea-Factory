# \[Devlog\] Clouds & Babies

Welcome to the **devlog** for my (board)game **Clouds & Babies!** Here I'll explain the process of creating this game: problems I encountered, solutions, different versions, why I made certain decisions, etcetera

To play the game, visit **Clouds & Babies (Boardgame on Pandaqi) \<TO DO: Make link>**

## What's the idea?

I'm a big fan of **real-time games**, or any game where all players take turns simultaneously. It's just *way* faster to play and keeps people more engaged.

Additionally, I'm a big fan of **cooperative** games. Over the years, I noticed many people have an innate bias against *competitive* games, thinking they are "too complex" or "not for them" or "oh no, maybe I will lose/not understand it!"

Saying a game is cooperative, and that you win/lose together, is usually enough to coax these people into playing.

So I wanted to create a real-time, cooperative game. There are, however, several common issues with these games:

-   The "alpha gamer": somebody takes over and starts making *everyone's decisions for them*.

-   The "lack of space": you're constantly in each other's way, trying to grab something on the other side of the people. Or maybe you need to *ask* other players to do something for you, as it's just too far away to do it yourself.

-   The "chaos": with a large board, with many tiles or locations, it can be very overwhelming. Especially for new players.

The idea for my game, therefore, started when I tried to solve these problems. I realized that all of them could be solved by introducing the concept of **zones**: **each player has their own zone and only *they* can do stuff within that zone.**

Everybody has their own little corner, so you don't need to reach the other side of the board, you can't do somebody else's actions for them, and you're mostly focused on that corner of the play.

But, in that case, how do you cooperate? Quite simply: **the boundaries of each zone are *shared*, meaning that both players can give/receive stuff on those tiles**.

\<TO DO: Image here; mockup of play with zones and boundaries>

This brings us to the original concept of the game:

> Players are *storks* who, as we all know, deliver babies. To win the game, you need to deliver X babies (following a wishlist of randomly drawn cards) within the time limit.
>
> This requires creating a *pouch*, adding the right *personality traits* ( = cubes) to it, and then *delivering it to the cloud castle*.
>
> Of course, no player has all the elements in their own zone. You'll need to pass along pouches and traits around the board!

Sounds good. Let's get started!

## Question #1: How do you take actions?

This one was easily answered. The game resolves around tiles, every player has their own little stork pawn, so the rule is:

**To do anything, place your stork on a tile** (within your own zone) **and take the corresponding action**.

As the game is real-time, there are no "turns", no "waiting until your next action". You can just keep going!

However, I quickly saw that the optimal strategy would then be to *repeatedly visit the same tile until you're sick of it*. I solved this with several additions.

First two small rules that make everything much cleaner.

-   **Extra rule:** You cannot visit the same tile *twice in a row*.

-   **Extra rule:** Only *one stork* is allowed on a tile.

Then a few properties that tiles can have.

-   **Extra tile property: no entry**. These tiles do something which does *not* require a stork to be there, which I'll discuss in a moment.

-   **Extra tile property:** **one time.** Once used, they are flipped over and deactivated for the rest of the game.

-   **Extra tile property: exhausting.** Once you visit, you're exhausted and stuck there for some time.

-   **Extra tile property:** **destroyer.** To take this action, you'll need to destroy one (or several) of your tiles first.

The reasons are probably obvious. For example: if every visit to tile A requires you to destroy a tile, then you can't just infinitely visit that tile, which solves that issue.

## Problem #1: real-time

This all leads into the first problem: how do we *time* actions? I don't want to add loads of (sand)timers to the game, as that is easy to miss *and* reintroduces those problems I wanted to fix! (And, of course, the game wouldn't be print-n-playable then.)

I came up with the **Refresh Event**.

This game will get a companion website, which does two very simple things:

-   Add an overall timer. (When it runs out, the game is over.)

-   Every 30 seconds, sound an alarm and flash the screen. That's when the *refresh event* happens!

When you enter an "exhausting" tile, you must wait for the next *refresh* event before you can move again.

All tiles with a "refresh" icon do *something* when this event occurs. In most cases, it means you **move the current contents** of the tile.

For example: if a pouch is on tile A, and the refresh event occurs, you're allowed to slide the pouch to an adjacent tile.

These two additions will soften the real-time issue. The overall *flow* of goods across the board will be limited by the refresh clock, to an extent. (To get a pouch from A to B, you'll need to use a few of those tiles that only move them upon refresh.) And the stronger actions will be "exhausting", causing you to choose between *many repeated actions* or just this *one strong action*.

I have never seen this before, so I don't know if it works! I'll need to test the game, see if people don't *forget* to do this, see if it's too slow or too fast.

**To make sure it's not "bad" to forget a refresh once in a while**, I've made all refresh actions "beneficial" to the player. When you forget to refresh a tile, you're simply making the game harder for yourself, not breaking any rules and destroying the fun.

## Problem #2: Shared Boundaries

The *shared boundary* between players is "in both zones", which means both of them can use and manipulate the tiles there.

But who is *responsible* for refreshing these then? I can't just say "both players", as that will surely lead to people *double refreshing* those tiles on accident.

One solution I like is: **tiles in shared space simply do not refresh**. However, I do not know how the game is going to pan out at the moment, so this might be too strict.

An easier solution is: **each boundary has a number => highest number does the refresh**.

## Problem #3: How to add new tiles?

Adding new tiles, growing your network of "pouch factories" and "cloud castles" and more, is essential to the game.

It's also a component that *cannot* be unlimited. I can't just say "draw a new tile whenever you want", or "draw a new tile when you visit this space", as that leads to all those issues described above. (Within half a minute, all tiles have already been drawn and placed!)

So I came up with something which, I think, is quite ingenious:

**"Explore": whenever you place your stork *in a neighbor zone*, you may draw a new tile and place it.**

Yes, this is the *only moment* you can go outside your (comfort) zone.

How do you get your stork back? **The other player must return the stork by placing it on a tile in your zone.** Crucially, you need to perform whatever action the other player chose!

Why do I think this is nice?

-   Ensures constant cooperation. You need to look at each other's zones to explore *and* return other people's explorers.

-   Not trivial to pull off. For example, if you accidentally place someone else's stork on a *destroying* tile, you force them to remove something! This requires at least some thought and attention.

-   Provides a single clear way to do something outside your zone, making the game more varied and dynamic.

We'll see how it works in practice, but I like it in theory :p

## Problem #4: Ease of use

So far, I know we'll be *pushing pouches* across the field a lot. These pouches will need to be filled with player traits, aka wooden cubes in my case.

I was stuck here for a moment. Simply placing cubes (or "tokens", if you don't have cubes) on a piece of paper is *horrible*. They slide off, it looks bad, it's easy to miss a pouch, etcetera.

Then I realized you can easily turn a flat paper into an actual *pouch*!

Simply cut some "spikes" at the corners, fold them upwards, combine them (with Scotch tape, a paperclip, whatever), and you have an actual pouch.

It's easy to throw in stuff, see contents, and move them around. As an added bonus, it's extremely thematic!

**Remark:** I did struggle at first with finding the right shape. Rectangle shapes were too "big" and clunky. Additionally, corners could come loose during a game. In the end, I saw that *triangle* shapes where the way to go. They were small, but stable, and easy to cut out/assemble.

## Question #2: How to learn the game?

I find it very important to make games *accessible* and *easy to learn*. It's near impossible to play anything that takes more than 5 minutes to explain (and setup) with most people.

And rightly so: sitting through a 30-minute lecture on theoretical game rules is *not* my definition of fun or entertainment.

We have enough tools these days to create good tutorials for games. The tool I wanted to use here is the **campaign** (or **scenarios of increasing difficulty**).

The rules for the base game (setup, objective, gameplay) are currently 1 page. The rest is explained as you go, in the mission statements, which are 1 page each.

-   The first mission, you are merely delivering empty pouches.

-   The second mission, you get random *wish cards* and learn the first *trait* to add to pouches.

-   The third mission, you get a *shared space*: a small strip in the center which *all players* share.

-   The fourth mission, you get even *more* traits and ways to manipulate pouches.

-   And so on.

I'd like to keep that "1 page" as a strict maximum. No mission is allowed to be longer than that.

## Question #3: Where to start?

The next question becomes: where does this campaign start? What are the *tiles* for mission 1?

The first thing you'll always need for deliveries, are pouches. Our first tile:

> **Fabric Factory (TILE):** grab a new pouch and place it on the factory.

The second thing you'll always need, are tiles to *move pouches around*. To keep it simple, I didn't want to add any paths yet, or more complex movement. Instead:

> **Tornado (TILE; R, X):** push each pouch on this tile to an adjacent tile.

"R" stands for **refresh** and "X" for **no entry**. So, the tornado moves all its pouches upon refresh, and you can't place your stork here to do speed up that process when you want to :p

The third thing is, of course, the destination.

> **Cloud Castle (TILE; X):** when a pouch arrives here, and it matches a "wish card", you've delivered that baby! Score the points, remove the pouch and contents.

After some more work, though, I realized we could heavily simplify the first mission by *leaving out the wish cards for now*. Instead, any empty pouch you deliver is now scored in mission 1.

(It removes the need to add an extra deck of cards, shuffle and draw them, and add a tile that already throws *traits* into the pouches. Worth the exception, in my opinion.)

### Improving the Fabric Factory

Currently, you can just visit this tile many times to create *unlimited pouches* and basically solve most issues this game presents.

At first, I wanted to solve this by adding a *maximum limit*. Like: "only 3 pouches per tile"

But that solves nothing. You can still fill up that space as quickly as possible, and it's quite a lot of space. (Additionally, it's an extra *icon* to explain in the first mission.)

Instead, the tile only stores a single pouch. Upon refresh, you may push that pouch to an adjacent tile.

This limits pouch creation to the refresh events. However, the first refresh happens 30 seconds into the game, and of course you want to be able to do something before that moment! So I'll need to give players some pouches to start off with. I'll discuss this soon.

### An interesting idea

I played with the idea of removing those *wish cards* and *cloud castles* altogether. Instead, the deck would just contain many *tiles* with specific wishes.

Whenever a pouch lands on that tile, and it matches the wishes, it's delivered!

Advantages?

-   Removes the need for an extra deck of cards. (Also easier setup.)

-   More integrated into the game: *everything* is done via tiles, from start to finish.

-   Extra strategic possibilities: when you've delivered to such a tile, it will be removed from your zone, leaving a gap.

-   Makes the first few missions more streamlined (no exceptions, no tiles that only do *one specific thing*)

Disadvantages?

-   You can't *choose* what you get. (With cards, you could e.g. draw three and pick one.)

-   Overview of wishes is less centralized, so harder to see for others. (Not necessarily a bad thing in a cooperative game, though.)

-   Less variety in wishes, as adding too many of these tiles will *bloat* the deck.

-   Possibility of wish tiles not really showing up. (Although this could add more strategy *and* can be solved with another tile => the Wishing Well: search the deck for the first available wish, place it in your zone.)

Hmm. I'm not sure. It does sound interesting, though ...

Dang it, I'll just do it. It's too promising not to try.

### Replacing Cloud Castle

So, the Cloud Castle tile is now replaced with a (regular, simple) Wish tile that shows you just need to deliver an "empty pouch".

I already have some nice ideas for wishes in later missions (such as *timed* wishes, which can time-out if you don't attend them soon enough), but I'll discuss that later.

### The Fourth Tile

I think adding *four new tiles* per mission is a nice number. Should not go higher than that (too difficult), nor lower (nothing really new being added).

But what could the fourth tile be? It should be something that makes the game possible (you're not just "stuck" with so few tiles available), but also creates the challenge (otherwise the game is just "make each pouch follow the obvious path")

It should be something you can enter. It probably shouldn't be a refresher, to prevent overwhelming players.

Interestingly, when I created the "mockup" for this game (a quick top-down view of the board and tiles in action), I saw a possibility I'd ignored until now: spatial relationships. For example, there might be *gaps* between tiles, or players might have tiles in the same *row or column*.

So for now, I'll use this one:

> **CONNECTION CRASHER (TILE):** find another connection crasher in the same *row* or *column*, move one pouch to it. Yes, this can cross zones, but the target tile must be empty (no pouches or storks).

## Problem #5: Starting materials

This brings us to the *last* problem before I have a functioning game and can playtest it.

What are the starting materials?

Because the game uses a *campaign* structure, I can make this mission-dependent as well. Which is probably the best idea in the long run.

Whatever I tried, I kept running into the same problem: you *need* at least one *entry* tile per player at the start of the game. Otherwise, some players literally cannot do anything ... for the whole game.

It's not as essential to have one tile for each step in the process right from the start, as you can *explore*.

Therefore, I'd like to just create six **starting tiles**, one per color. These are double-sided: one side is the same for everyone (first mission), the other provides a different power.

For the first mission, players simply start with *one pouch* to place wherever they want. (And their *starting tile*, but that will be true for all missions.)

To make these starting tiles work, I needed to give them this property:

> **STARTING TILE:** Can hold *two* storks. (If I hadn't done this, you still couldn't *explore* and draw new tiles.)

But that's a bit ... basic. So I added an extra bit:

> **STARTING TILE (2):** No pouch can *enter* this tile. (Although a pouch *can* start the game here.)

Not sure how this will pan out, but I'm liking it so far.

Now I just need to make adequate visuals for all of these things, cut out the parts, and try it out!

## Playtest #1

So, I printed my materials and did a round of test games! We only tested mission 1, and improved/tried out new rules as we went.

The result was good! The refresh event happens at just the right intervals that it's useful, but not annoying. Rules were easy to explain and get into. We won most games with 1-2 minutes on the clock, except for a few where we literally got ourselves stuck because of rules mistakes.

But, as usual, there were many mechanical mistakes and bad situations.

### Problem 1

The starting tile is *too* free. Now you can always just plant your pawn there when exploring, without consequence, easypeasy.

-   Solution #1: when you visit another player's start tile, you *flip it over*. The backside is simply empty *or* shows a severely weakened action.

-   Solution #2: when you visit another player's start tile, you *move it down one row*. When it moves out of bounds, completely remove it from the game.

-   Solution #3: the "pouches can't move here" restriction is completely useless, if I replace it with something stronger, the tile might just stay.

I intended to use the backside for asymmetric actions, or an "expert version" of the start tile ... and I still think that's the way to go. So, solution 1 is out.

Moving it down works really well actually! Although it's a bit messy and too "rules heavy". Solution 2 is a possibility, but not preferred.

Solution 3 is also a possibility, but it requires a longer search.

### Problem 2

The connection crasher has *no way* to move a pouch off of it! I completely forgot about this. It can only *teleport stuff between each other*.

-   Solution #1: add a refresh action to that tile as well. (Which moves the pouch away, or something.)

-   Solution #2: add an action to *wishes* which says the following. "Switch this tile with an adjacent tile, but *pouches stay where they are*." This way, you can switch the wish tile so it lands underneath an existing pouch, delivering it.

Solution 1 is very easy to add, and it will surely work ... but that's *another refresh action*, and there are already a lot. I want to keep things simple (and mistakes to a minimum).

Solution 2 works well, but is *too strong*. If you can switch it with anything, why even bother with creating a nice "network" to move the pouches around?

I could fix this by saying "it can only switch with a connection crasher" or something, but that is *even more rules and restrictions*.

Not sure about this one. I have a feeling I should find *one* thing that solves all these problems at the same time.

### Problem 3

There are slightly too many factories in the deck. Additionally, starting with *one pouch* is not necessary, because pouch creation is very easy.

-   Solution: well, simply remove those tiles and that line in the rules.

But which tile should we *increase* in numbers then? Not the wishes, they are just right at the moment. So it would have to be the tornados or the crashers ... but they just aren't interesting enough for that :(

### Problem 4

Factories offer the exact same functionality as the tornadoes, making things too easy and too "samey".

-   Solution: each factory gets an *arrow*. When you move a pouch away, it must go in the direction of that arrow.

-   We already tested this during the playtest and it works great.

### Problem 5

Exploring still means you're in the other player's zone very often. The mechanic *mostly* works like I want, but you still often *forget* to execute the action, or place the stork on a location that is simply useless.

I feel like this problem, again, would be solved by solving all problems mentioned above. (If the starting tile is more useful, and the connection crasher, there's more incentive to place storks intelligently.)

So let's think about the *core issue* that would need to be solved by that solution ...

### The Core Problem

The more I experiment, the more I realize that being able to **(re)move** and **rotate** tiles is quite essential to managing your zone well.

However, those concepts are *too much* to introduce in the first mission. It's just too complex, too messy to explain all at once.

Thus, the question becomes: "how can we *ensure* good movement of pouches, when all tiles are fixed in place from the moment you put them down? What kinds of tiles do we need for that?

Or: "How can we focus on the *explore* action in mission 1, not the *moving stuff around* that becomes important later?"

After a lot of thinking, here's what I came up with:

-   Whenever you visit the **starting tile**, you *may* pick one special action. Either destroy a tile, rotate a tile, or move a pouch one space (within the same zone). If you choose to do so, however, you must destroy the starting tile afterwards.

-   When **exploring**, you *don't* execute the action of the tile you visit (outside of your own zone). Also, the *other player* is responsible for executing the action upon the return of your stork.

    -   This reduces busywork/bookkeeping, and you can't "forget" or "miss" the fact that you need to do an action.

-   First, I renamed the Connection Crasher to the *Jumper*, that's simpler.

-   **Jumper:** If there is *no other Jumper to jump to*, you may move a pouch a single space to an adjacent tile instead. This means that, if you place tiles correctly, you should be able to move *off* these tiles whenever needed.

    -   One last problem: what happens if there is *no possible move at all?* It's boring if that just means "do nothing" and confusing if it means "you cannot visit this tile".

    -   The best solution I found: it doesn't matter! You still jump into the empty space. Whenever you grab a new tile, you can just slide it *underneath* the pouch to feed it back into the system.

LALA TO DO: Figure this out

**== OLD IDEAS ==**

**Squeezer:** "if there is a **wish** between two **squeezers** (in the same row or column), you may also drop the contents directly on that! But at the cost of .... TO DO (removing one of the squeezers?)"

**Jumper (alternative)** "If you visit a connection crasher which has *no* possible target, you may BLABLA TO DO \<something that makes it possible to move pouches off the connection crasher"

**Starting Tile: Whenever someone visits, they may move a pouch *in any direction*. After that, however, the starting tile is completely removed.** (This replaces the current action.)

Alternatively, we can say: "start tiles show *a decreasing number of hearts* on the edge. If you move to someone else's start tile, you *rotate* the tile clockwise. When 0 hearts are pointing up, the tile is done, remove it from the zone." => does NOT solve the pouch issue.

Unless we combine them!

\>\> Starting Tile: when a stork visits, they *may* move any pouch in your zone in any direction. Then they rotate the tile clockwise. If *no hearts* are pointing upwards (away from the player), the tile is dead: remove it from your zone.

**Magnet:** "when visited, attract all pouches from an adjacent tile"

Problems:

-   Too little variation/challenge on the first missions. (It's a bit *too* straightforward and empty now.)

    -   Really important actions like "take cube out/store it for later" are now introduced way too late?
