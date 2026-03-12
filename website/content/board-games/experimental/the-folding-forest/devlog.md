# \[Devlog\] The Folding Forest

Welcome to the devlog for my game **The Folding Forest \<TO DO: Link>**.

In this devlog, I will explain the process behind inventing the original idea (a "paper folding game") and turning it into a functioning game. Because, let me tell you, finding a good game to work around the mechanic of "folding paper" was quite hard.

So let's start!

## The First Idea

I've been making boardgames, and specifically *One Paper Games*, for some time now, which means my head automatically starts generating the next big idea while I work on my current project.

This time, I used Tetris-like shapes in one of my games (*One Pizza the Puzzle*), when my brain thought:

"Wait a minute, why don't we create a game where all the pieces have these kinds of shapes? And then, one of the big actions, is *folding* such a piece to make it smaller/bigger or show different sides!"

\<TO DO: IMAGE OF WHAT I MEAN with Tetris shapes>

I immediately became enthusiastic, because I love those kinds of experimental and innovative ideas, that *just* might work.

## Turning it into a game

However, when I sat down to figure out the core concept for this game, I was stumped for quite some time.

The first question was: **what's the objective?** In a game where all the "pieces" are Tetris shapes that can be folded and unfolded, what could possibly be your objective?

These were my first ideas and why I was afraid they wouldn't work.

**Idea #1:** Each player gets a special piece (like a treasure or something) and wins if they are able to *move* that to the other side of the map.

**Why does it not work?** You can prevent the other player from moving by just ... never folding the pieces. Because then there isn't any space on the board to move to. And if a boring strategy is the best one, the game doesn't work. (Of course, you could *require* players to fold once each turn, but that doesn't fix anything. It just means there are small windows in which you can move, until they close again.)

Additionally, if you play with 3 players for example ... then the board is unfair, because each player has a *different* distance to the other edge. (Because it's a One Paper Game, the board must be shaped like a paper.)

**Idea #2:** More chess-like. You win if you capture/destroy/surround an opponent's special piece.

**Why does it not work?** I want this game to work on different player counts, not just for 2 players. If you have 4 players ... does the game end once *one* person is captured? Or do you continue playing until you've captured all opponents?

In the first case, one player can ruin the game for the others (by allowing themselves to be captured easily or quickly). In the second case, the game is boring for all those players that are already eliminated.

**Idea #3:** Be the last player left with their icons showing. (As in, the are not destroyed and that side of the piece is face-up.)

**Why does it not work?** Well, this has to do with the next big problem I'll talk about ...

## Big Problem: Owning Pieces

When do you "own" a piece? How do you know a piece, or a specific square of a piece, is yours?

Because I want to support different player counts, a fixed number of pieces per player isn't great. So, I can't just print an icon/color on the pieces that indicates who owns what. (Additionally, it would get messy, as the pieces are already quite small, so adding even *more* information to squares stretches it.)

I could allow players to write on the pieces themselves! And that would be a great idea ... if it wasn't so much work to print and cut this game.

You see, if you allow players to write on the board, you can only play each set of pieces *once*. This means that, every time you want to play, you need to *print a new paper* and *cut all those irregularly shaped pieces.*

I timed myself creating a first "prototype set" for this game, and it took me nearly 5 minutes to get all the shapes. And that was with a blank piece of paper! (And I have loads of cutting and folding experience from creating all those previous games!)

Yeah, relatively speaking, 5 minutes is certainly no big deal. It's shorter than the setup for many other games. But these games were designed for accessibility and ease of use (and cheapness), and then it becomes a bit of chore to do this for each game.

So, what to do, what to do?

Basically, I saw three possible options, if I found a way to make them work:

-   Turn the game cooperative. It's you against the board. This way, it doesn't matter how many players join in, the board itself and number of pieces can remain exactly the same.

-   Turn the game team-based cooperative. So it becomes a "2 player" game like chess, but with each "player" being a "team".

-   Create "factions": each faction has a unique set of shapes and icons, only applicable to them (so they always know if they own something or not). Additionally, each faction has a personal objective, creating an asymmetric game.

## Big Problem: Cooperative & Team-based games

I really enjoy cooperative games and find that many other are more *willing* to play them, than a purely competitive one.

However, you always run the risk of one or two players becoming the "leader", and the rest just idly standing by, which isn't fun for both of them. (This issue is also known as alpha gaming, or the quarterback problem.)

Typically, the solutions involve:

-   Giving each player their own *pawn/pieces* that only *they* are allowed to move.

-   Giving each player personal objectives, which are secret or difficult enough that others won't try to boss you around.

-   Putting time pressure on the game. (If you can't oversee all options or mechanics in the game, you can't tell others what to do.)

Well, darn. The first two solutions are *exactly* the things I was trying to solve. The third one seems a bad idea for a game that still mostly resembles a weird variation on Chess.

(I know, they do have time control in real Chess, but they get like 6 hours on the clock for two people. I hope this game eventually won't take more than 30-60 minutes to play, no matter the player count.)

The only way I see this working, is as some sort of "harmonious" and "peaceful" game about rebuilding a forest. (Because I had the name and theme, "The Folding Forest", right from the start.)

And, to be honest, I'd be up for that. (I'm a nature person myself *and* the last two games I made were extremely competitive. For example, one of them was a *cutting* game where you'd literally cut into the board to remove other players from the board.)

But for now, I like the "faction" idea better.

## So, what's the idea for now?

This is how the game concept works at the moment of writing.

**Preparation?** You need to download and print *two pieces of paper*.

-   One is the game board. This is just a square grid on which you can place the pieces. The remaining space at the side is used to explain the rules of the game.

-   The other is the set of pieces. I think I can fit all pieces of four factions on a single paper, but we'll see. (If you have more than 4 players, you can then just print a second paper).

The pieces must be cut out of the paper, of course. If you want, you can also pre-fold them, so players can clearly see where the lines are.

**Setup?** Every player picks a faction and lays out their pieces on the board.

**Objective?** Don't know yet. Will depend on whatever mechanics and actions I invent next. In any case, both the objectives and pieces should work with *any* combination of factions you're playing.

**Play?** On your turn, you may do *one* action with a piece that shows at least **one icon** of yours.

-   **Move.** Move it one space on the grid. Of course, you can't overlap other pieces. That's the whole idea: an unfolded piece is *big* and therefore has less movement, a folded piece is *small* and agile.

-   **Rotate.** Rotate the piece one step (counter) clockwise *or* upside-down.

-   **Action.** Pick one icon of yours and execute its corresponding action.

The "action" might become an automatic thing. (For example, whenever you move a piece, it automatically triggers whatever action belongs to the icons showing. But I'm still on the fence about that.)

Possible actions include:

-   FOLD the current piece or an adjacent one. (Very important!)

-   TELEPORT to another empty space on the board.

-   PROTECT a piece or icon against moving/rotating/destroying.

## Why I have doubts

Firstly, there is one big problem here: people need to be able to print double-sided. (Because there should be icons both at the front and back of all pieces.) Of course, you can work around this by quickly drawing the icons yourself at the back, but that's a hacky solution.

Secondly, I love the idea of randomly generating game boards (as my previous few projects showed). It also helps remove any "unfairness" due to the symmetry in the factions: if a board was unfair, well don't worry, next time you can play a completely different one!

Thirdly, this setup doesn't allow *modifying* or *destroying* pieces (or the icons on them). This reduces the possible objectives by a lot, because now I can't say "remove piece X", because that just isn't something you can do.

In the current setup, you download two papers *once*, and then you have the game for all eternity. No varying player boards, no crossing out icons or drawing extra stuff. Which is a shame.

For now, I'll continue the faction-based, one-print-only idea. But I'll try to create the rules in such a way that the *other* options remain open as an expansion or variation.

-   Alternative 1: randomly generated empty player boards, you draw the icons during the game, one-time use.

-   Alternative 2: a cooperative harmonious game about rebuilding a forest. Or, potentially, protecting the forest against some enemy/sickness/plague/whatever.

*Remark:* if you're wondering why I desperately want to support many different player counts, it's because my main playing groups (both for testing my games and just playing other games for fun) have a large number of players. I come from a large family and somehow managed to get many friends. In conclusion: I always need to, at least, support 2-5 players.

## First brainstorming session

I had one amazing idea! Instead of keeping the pieces flat ... we can also fold them to stand upright! Which of course symbolizes ... TREES! These can be obstacles for other icons, or just obstruct "line of sight".

Additionally, I cut a random set of Tetris pieces from a blank paper (after cutting it into a square and folding it). You can get 20 pieces that way, which is a nice number. If I use the *whole* paper for pieces, and remind myself there is both a *front* and *back* side, I think I can get 5 factions on a single paper!

The board is currently 8x8, which is not only something that is easy to fold and cut on a standard paper, but also seems like the right size. (Hey, Chess also uses it, so there must be something special about it!)

I also just realized that, if we're going to have a board, we can *print* stuff on that board! I could turn certain squares into special locations or give players bonuses if they reach it. That's always a clear way to add extra depth, without requiring players to learn and remember new rules.

As I was folding the pieces, I found that it's quite hard to keep them down after folding (because the paper wanted to go back to its original state). This isn't a huge deal, but I know from experience that clarity is always a big issue with these One Paper Games. So I think that there should only be a handful of icons that allow a piece to stand upright (like the trees), with all other icons you *know* they are supposed to be flat, even if they are slightly raised.

Ultimately, if this game is about factions trying to grow/control/explore a forest ... it feels like STORYTIME!

This game probably works best if I start with a bit of story, some simple fairytale, about who the factions are and what they are trying to accomplish. From that, I can extract their specific mechanics.

## Creating the Factions

I didn't want to create an obvious "bad guy". (Like, one faction that is just a disease spreading.) It's boring, cliché, and it's not useful for the game. (For example, there would be almost no conflict if that "bad faction" wasn't in the game, because there'd only be "good factions".)

Instead, I tried to think of 5 elements that would be present in the forest, and that would need to work together, but also posed a threat.

These were my initial ideas (names and actions might change, of course):

**Faction #1: Faes-o'-the-Forest** => magical creatures responsible for *energy* balance. They are able to extract energy (or "life force", or something like that) and bring it to something else. This allows them to plant new trees and help diseased plants, but of course, making mistakes with your energy management would cause other parts of the forest to die.

**Faction #2: Windwrestlers** => the elements (sun, wind, rain, oxygen, ...). They are capable of general powerful forces, such as a strong sun shining on the whole forest. They do not care about the petty struggles within the forest, but are only concerned about the whole picture and keeping the forest alive.

**Faction #3:** **Roamers of Radjha** => travelling pack of animals. They need food/water/space to roam and can procreate (maybe). This means they can transport things (like seeds) across the forest. However, the forest does not want to let them escape, as they are too ravenous and wild and would soon destroy the lands.

**Faction #4:** **Pillowy Parasites** => group of smaller lifeforms (like parasites and bacteria). By latching onto things and multiplying, you can survive *and* help other plants. Of course, if you become too big, you overcrowd the forest with your parasites and everything dies.

**Faction #5: Lilies of the Weary Water** => a force present in everything related to water. They are *living*, and can transform between states (water, to plant, to animal), though no human can see or comprehend them.

## Simplifying Round #1

At first, I wanted to give each faction a set of \~5 unique icons (with their own unique actions). However, as I worked it out, I realized this was a bad idea for two reasons:

-   It's too much! To play this game, you also need to (roughly) understand everything the other players can do. Remembering 20 icons on a large board isn't a good idea.

-   It's more interesting if mechanics are *shared*. If you are the only one who can move and benefit from trees, then other players won't care about them at all, and they are just a waste of space to them.

As such, I whittled it down to the following:

\> Each faction has 3 unique icons, which means only *they* can active their power, and only *they* can (regularly) move pieces showing those icons.

However, other factions can also benefit from those icons, or be blocked by them. It's up to them to use *your* powers to *their* benefit.

I'll give an example: the **river mechanic**. The "water" icon belongs to one of the factions (obviously the Lilies), so they have an easier time placing and moving those icons.

However, other factions also benefit from being near a river. Animals ("roamers") can drink from it. Plants will grow from it. And with some extra effort, they can also get special opportunities to change the river.

And the longer the river ( = the more adjacent pieces of water), the stronger this effect, causing players to semi-cooperate.

Lastly, I noticed the board was **way too large**. An 8x8 board of pieces, which can use both the front and the back, results in 64\*2 = 128 possible spaces! (It could be even more, because you can fold down pieces to fit more on the board.)

You can't keep track of that many things happening and surely not *remember* what's on the backside of certain pieces.

Additionally, this is highly dependent on player count. A 2-player game ideally uses a *much smaller* board than a 5-player game.

Therefore, I decided to mark different "rectangles" on the 8x8 board, for different numbers of players. Like this:

\<TO DO: IMAGE HERE OF divided player board>

## The Beauty of Folding

Only now, I realize how special the mechanics of this game are:

-   There are distinct pieces on the board.

-   However, each piece is *owned* by multiple players at the same time. (And because of folding and unfolding, this ownership *changes* during the game.)

I can't think of any other game that does this. In any other game like this, everyone would have pieces that are clearly and exclusively *theirs*. But not here.

This is what allows the interesting mechanics I outlined above. No matter what factions are in play, their *icons* will be in play anyway. Even if the Lilies are not being played, there will still be many pieces on the board showing water icons, and there will still be rivers that can be used.

This helps balance the game for all player counts and faction combinations.

Although most of that balancing will still need to come from me and how I write the factions. I think this general structure will help:

-   Each faction has 1 living being. This being can stand *upright* (like the trees) and therefore has a *line of sight* (it can see things in a straight line ahead of it) that I can use for mechanics.

-   Each faction should be able to benefit from at least 2 icons belonging to other factions. (For example, the "Roamers" can drink from rivers, and eat from fruit plants.)

-   But, there should *always* be *some way* to manipulate icons that don't belong to you.

The easiest way to achieve the third bullet point, is to say: "each icon from a faction that is *not in play*, is owned by *anyone*" But I think that's too strong and gives too many options.

A better idea would be certain actions and mechanics that allow you to move/rotate/manipulate the piece *next to you* or the icon *next to you*.
