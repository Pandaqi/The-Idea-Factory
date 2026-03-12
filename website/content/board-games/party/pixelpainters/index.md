---
title: "Pixelpainters"
categories: ["board-games"]
tags: ["party", "tile"]
language: "en"
progress: 2
---

This is a **social, tile-laying, party/group game.** In the same vein as _Pictionary_, _Codenames_, etcetera.

The material is just a **deck of tiles.** On them are lines. Curves, straight, zigzag, whatever.

They follow patterns to make sure they fit well together:

-   Each edge has 5 points: placed at 0%, 25%, 50%, 75%, 100%
-   (In a sense, that's the grid that divides the whole tile.)
-   Lines will always start and end on points of this grid.

On your turn, you get a **word**. (Either use the website, or print a list of word cards beforehand. => Could give each card multiple words, so you can choose.)

Now you need to **illustrate** this word by placing the tiles! 

You can draw, rearrange and rotate as you please. The only rule is that the tiles *always* need to stay connected and you must use *everything* you draw.

That's the game.

## Implementation

This way of drawing tiles is *so simple and structured*, that I might just **randomly generate** all the tiles! Using some settings, you can go for maximum variety, or maximum simplicity, or no duplicates, etcetera.

Algorithm would be something like:

-   Randomly walk from point to point.
-   If not straight, we can add *curve* or just a *diagonal line*.
-   Randomly add 1-X lines per tile. (Add check to prevent overlapping. => Although, would it really be bad if they overlapped?)
-   (If we're really funky, we can even add a "bobble" or quick zig-zag on straight lines.)

(Would probably need to add a timer to the website as well. 30-60 seconds seems enough?)

Once we have that, we can also use that to **generate the graphics for the rulebook / website.** (As in, generate some random lines/patterns that I can use as decoration.)

Of course, we can take this further:

-   You have a hand of cards. This way, you can make more informed decisions and get a jump start.
-   Others can help by adding cards. (Or, if not cooperative, they can hinder you by *forcing* the usage of a card.)
-   Special cards with an action. When drawn, you get that bonus/penalty for the rest of your round.

The name **Pixelpainters** comes from the fact that each tile could represent a "pixel".

Also the **style:** it's modern, abstract, digital, "computery". The lines should be like chips or circuit boards. (And all the other design elements should match that.)

> _Rony Syswadi 15_ is a nice font for this idea.

You could reverse this, but it'd turn into an entirely different game. Somebody creates a drawing of anything they like. Now the other players write down their guess on paper, and they get points if it's the same.

**IDEA:** Also allow *overlapping* tiles. (So, placing a tile at the point where four tile corners connect.) A very simple thing that suddenly enables many more drawings.

**IDEA:** The best way to explain this is obviously to let people *do* this on the website. This might become an alternative online variant.

-   You simply get tiles from the computer
-   Tap + drag from the center to *move*
-   Tap + drag from the edge to *rotate*
-   In the corner is a trash icon to *remove* a tile.
-   And there's a button/pile to draw new ones.

I can put this on the front page for this game to let people immediately understand and play with it.

**IDEA/WARNING:** Learn from my mistake with _Photomone_!

-   Keep the tiles tiny. (Might even go through *all* possibilities?)
-   Only one or two *clean lines* (as shown in drawing).
-   The intelligent designing comes from a *player*, so a random rearrangement of tiles doesn't need to look like anything.
