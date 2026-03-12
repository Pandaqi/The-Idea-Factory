This is a short devlog for my game "Kings of Compromise"

Most of the work for this game went into writing the *algorithm* that generates the games. Additionally, this is a bit of an "upgrade" of a simpler, earlier idea.

I wrote a separate article about all of that: **Deduction Boardgames \<TO DO: Link>**

This article continues where that one stops. (And gives some extra details along the way.)

## What's the idea?

When the game starts, it shows you how to setup the "map": the set of tiles on the table that (abstractly) represent a piece of land.

Each player is a "king" with a set of **wishes**. These are given to you by the game, but you must keep them secret! Maybe you want there to be at least 5 animals, or at most 2 forests, something like that.

**To win, the map needs to be changed such that all players' wishes are fulfilled.**

On their turn, each player simply changes *one* thing about the map and then asks everyone if they are happy about that.

If *everyone* is happy, you've found your perfect kingdom! You win!

(This idea is very much like the boardgame *Decorum*. Check it out if it seems interesting.)

## Why this idea?

Several reasons:

-   I wanted to figure out how similar games generate their scenarios/missions. So I programmed algorithms to do so.
-   These games are very easy to setup and play: hand out the hints, setup the (small) map in a certain way, change *one* thing each turn -- that's it!
-   I thought a theme like this would look nice (visually) and be ripe for roleplay and story. (One player might be the king that somehow hates all animals, while another wants more and more people in the kingdom, etcetera.)

I must admit that I very much doubted the idea while I was working on it. It just seemed so simple, and small, and silly. But I tried to push through, mainly because of that first reason: figuring out *how* these games were generated was a great learning experience.

## What do we need?

Because you're constantly *changing* the map, this game cannot be one of my "One Paper Games".

(Those games can be played by grabbing an empty sheet of paper, or printing a board from my website, and grabbing some pens. You play by writing on the paper. This, of course, doesn't work for games that are dynamic and must constantly add/remove stuff.)

So let's go the "traditional" route of fixed material. When the game is done, I'll supply the PDF to print and cut yourself, as usual.

But what material do we need? Well, that completely depends on what we want to put in our kingdom.

These ideas seemed reasonable:

-   Terrain => each tile is one specific terrain.
-   Animals => multiple types of animals
-   People => perhaps multiple types in terms of *career* or *age*, otherwise just *one type*
-   Buildings => probably just a castle
-   Walls/Rivers => something you put on the *edges* of tiles

The **tile** provides the foundation (and the terrain), the other elements are **chips/tokens you put on top.**

It's quite easy to "retheme" elements later, so it's not really important now. It's more important to figure out mechanics and how they'll interact with the algorithm.

(For example, instead of providing different categories, you might just create a castle token in 4 different colors. Then the differentiation comes from the **colors** only.)

Remember: **we want to create maps which can be uniquely identified by a set of 5-15 "wishes".**

If you add too many elements, the number of wishes needed to pinpoint the "perfect kingdom" skyrockets. The same happens if you make the map too big.

We want a **tiny map:** 4x4 tiles might already be enough.

We want **only a few unique things to keep track of:** I feel 3 or 4 is already enough.

## Creating Wishes

What is a "wish"? How is it represented? What does it mean?

### First Try: Basic Statistics

Let's start with basic statements/statistics about the map.

-   "There are X forests"
-   "You wish for Y animals"
-   "There are Z castles"

This is bad.

For example, if the only hint for animals was "You wish for Y animals", we see loads of issues:

-   Only **one** player knows anything about the animals. There can't be multiple players with *some* wishes for the animals, removing that whole category from the game in their eyes.
-   It's boring.
-   It's too specific: the algorithm will have trouble generating nice maps/wishes around it.
-   It's predictable and thus makes the game easier. Anytime somebody removes an animal and you're like "I don't like it", they know the number is higher. Repeat this a few times and you know the exact number and thus the exact wishes from the other player. No matter the other wishes, no matter the rest of the situation.

### Second Try: Balanced

Let's do something more nuanced.

We're looking for something **not too specific** but also **not too vague**.

For example: "You want 3-4 animals in the left half of the kingdom"

Why is this better?

-   The statement does not 100% determine everything about the animals. It only determines a part of it: we need another hint for the rest.
-   There's wiggle room. Useful for the algorithm, useful while playing.
-   It's harder to completely predict, as there are more components to the wish.

This will already get us far. But not far enough.

### Third Try: Different Perspectives

We're also looking for many **different variations** (or **perspectives** perhaps).

My examples so far looked at the wish like a basic statement of statistics. "You want X of this thing, you want at least Z of that other thing."

That's only one way to define something. And it's the most boring way.

Instead, you could say something like: "You want exactly as many animals as people"

Now it's getting interesting!

There's no fixed number. It's not just counting and getting to that number. *Different things are connected in fun ways.*

This is where I'll really need to think outside the box. You can go as far as you like.

Another wish might be: "You want at least one animal next to every castle" (which makes the wish dependent on where other players want the castles to be)

Or: "You want only one type of animal in the whole kingdom" (but it obviously doesn't say which type)

These are the wishes that will make this game fun!

Why?

-   You'll constantly need to change how you interpret the wish and how you're going to make it happen on the board.
-   Multiple players can have completely different wishes about the same thing
-   There's no way to predict or guess this (if you know the game well)
-   It's way more interesting, more varied, more exciting, more dynamic.

**The only problem with this:** is that many of them will not be true for a given map. So I need to write the system in such a way that it can easily *discard* all wishes that don't make sense and only pick from those that *are* true or useful.

(As opposed to the previous idea, discussed in that article, where *every* hint will always make sense and *will* be used when selected. In that idea, we simply calculate the values for the hint. For example: "The treasure is within 2 spaces of a mountain". In this game, a wish is either true or not, and we simply discard all the ones that aren't true.)

### So?

I'm going to write a boatload of wishes for all categories. Trying to be creative, trying to connect the different categories in fun ways.

It's really a game of *numbers* here. If the same hint keeps reappearing every game, that'd make it predictable quickly, so we need enough buffer to get completely new hints each time.

This is a **ton of work**, as each hint needs a unique piece of code to check it, but ultimately **necessary to make the game work.**

## After some thought ...

I wanted to make this game precisely *because* it has these serious undertones: the wishes of the kings will always represent some ideology in the world, or remind people of the actions of a certain politician. It seems like a fun, interactive, simple way to add theme and spice to a game.

At the same time, it must remain a simple family game, playable for everyone and all ages, as that's *what I do* (and also *what I mostly play and enjoy*).

I really do not want people to turn down the game, or actually get irritated, because of parallels with real life that are too "real" or "obvious".

As such, after a lot of thought, I decided to completely remove the "human" or "realistic" element from the game.

You can't add/remove people, and certainly not *different* kinds of people.

Animals are also not real: they will be mythical/made-up creatures.

Again, I don't *know* if this is the best decision and it feels stupid in certain ways, but it's what I decided to go for.

The game is now more about designing a "magical kingdom" or a "dream world", and the wishes are mostly about lighthearted stuff. Instead of wishing there were fewer blue people in your kingdom, you simply want fewer unicorns ... or something.

That's the theming we're going for.

Which means the base map has ...

-   **Terrain:** grass, forest, desert, water, mountain
-   **Creatures:** unicorns, elves, dwarves
-   **Structures:** farm, hospital, university, house
-   **Owner:** each tile can be owned by a specific player

(I'm not sure if I can make the "owner" part work. The idea is that players also have wishes that only relate to *their piece of the kingdom*, like "local wishes" instead of the global ones. And to fulfill them, you can change the tiles ... or *which* tiles you own. Maybe that's an expansion or advanced mode, we'll see.)

I'll certainly change things as we go, but I needed some starting point, and this is it.

## Creating Maps

The other article (about the algorithms) details how the chosen algorithm determines how the map is created behind the scenes. So I won't go into that here.

I'll just talk about the visual and gameplay aspect.

### Visual Side

In a game like this, being able to quickly **read** and **modify** the board is essential. I felt like I needed to take this into account right from the start.

I quickly realized these restrictions:

-   Each tile should have fixed "spots" where you place elements. (To prevent throwing chips randomly on tiles and making a mess.) For example, a square outlines where you would place a square chip on that tile.
-   The chips should have easily discernible *shapes*. For example: all *structures* are *square*, all *creatures* are *round*, etcetera.
-   There should be a nice symmetry or pattern to this layout ... which is hard if there can be many things on a tile, and they are all different shapes. For example, there can only be *one* owner for a tile. So it's not like I can make a nice symmetric design by placing two slots for it.

In the end, I decided on the following setup.

-   There's always a single spot in the *center* where you can put the owner of a tile.
-   Around it, on all 4 sides, are slots for 4 different categories. (This still looks nice and balanced, even if they are all different shapes.)
-   **This varies based on the tile.** Example: maybe grass tiles have one slot for each category, but desert tiles have three slots of the same type.

I like that last idea because it can make the game much *harder* to solve (if I want), as swapping the terrain of tiles changes how you *can* even lay out the kingdom.

TO DO => IMAGE => Tile sketch

### Technical Side

When it knows the map, it saves a picture of it and hides it.

Then it *changes* the map to "randomize" it. It takes a picture of the final result and shows that to the players: they need that to setup the game.

I use default **website code** for this, with help from the incredible **Phaser (v3)** framework.

It allows me to quickly place images on a canvas and manipulate them.

This makes it very easy to draw the map:

-   Simply read the 2D array of tiles I've generated
-   Display the correct sprite for each property. (Terrain? Show the right one. It has animals? Show their tokens on top. Etcetera.)
-   Draw some grid lines and other QOL improvements ( = Quality Of Life) to finish it off.

The sprites are the same as the ones in the material sheet (that players print and play with).

I just need to make sure that this PDF with materials has enough to support any map generated.

This was accomplished by:

-   Trying to fit as much as possible on the material sheet.
-   Then counting how much I have.
-   And setting that as a *hard* *limit* in the code. (Whatever happens, it can't create a map where something goes above the limit.)

This might seem like an arbitrary restriction, but I know this actually helps a lot. Because there are clear (and reasonable) limits, the algorithm will never create a game with idiotic numbers, like "You wish for 20 animals". Everything stays smooth and away from extremes.

## Writing the Rules

The game is so simple that I've already explained all the rules :p

But I still had to create a rulebook for it and *specify* some things.

**What does it mean to "change one thing (on your turn)"?** It means you can either *add* one token, *remove* one token, or *swap* one token for another within the same category. (E.g. one type of animal for another type, one terrain for another.)

**Is that really all?** I've learned that it's useful to help players more and more as time goes on. If you really haven't a clue what the others want, even after 20 turns, it just gets frustrating.

So I'm playing with some rules about the kings "signing a treaty" once in a while, where they divulge one of their wishes to the public.

I'm also playing with some ideas for expansions or variations.

As I said, I like the idea of claiming territory:

-   Each player has a set of tokens they can place on tiles to say "these are mine, they are in *my* kingdom".
-   Some of your wishes are *only about YOUR kingdom*!
-   So by changing the tiles you claim, you can fulfill wishes (or not).

But that's a whole other topic I'd need to figure out with respect to my algorithms. For now, let's finish this base game and test it.

## Mid-Project Thoughts

Each project has this moment where you've been working on it for long enough to realize that certain things are serious problems you need to look at.

My main issue was **board complexity.**

When I created the map generator, each square of the map could basically have 6 properties:

-   Terrain tile (always present)
-   Creature
-   Nature
-   Structure
-   \<something I still needed to figure out>
-   Owner

That's a lot. But it still *looked* okay, especially because tiles will usually only use a few of these. (They are not "filled" completely.)

Then I wrote the code to *scramble* the map. And it wasn't what I'd hoped.

I needed 50-100 changes before the "starting map" looked sufficiently *different* to me from the "ideal solution map". That's way too much.

Why is this the case? Because there are *so many options to choose from*, there are many things that will *not be chosen* and thus *not changed*. Large parts remain unaltered because the random changes picked one of the *other* options.

Takeaway? The map needs to be simplified. At least for your "first game":

-   Make certain categories optional or like an "expansion"
-   Or reduce the number of options *within* the category for the base game. (For example, only 2/3 terrains, instead of 4/5.)
-   Make the "owner" bit an expansion as well
-   Make the map even smaller

But that's how it always goes. You start by throwing everything you have against the project, and it's always too messy and big, and it needs to be heavily simplified.

Most projects I end up throwing away at least half the work, but it's usually worth it, because it made the game way better and easier to play.

(And I think many earlier projects of mine aren't as "good" as the later ones precisely because I didn't want to throw away any work and kept things too complex.)

The same is true here: removing a bunch of categories/options just makes the game easier in every way, it doesn't make it unplayable or ruin some important system. So it's a good idea.

## Testing the Game

Lala

NOTE TO SELF: RESOURCES:

-   Explanation of Wave Function Collapse: <https://www.youtube.com/watch?v=2SuvO4Gi7uY>
-   Talk by creator of Townscaper/Bad North: <https://www.youtube.com/watch?v=Uxeo9c-PX-w>
-   (Has loads more talks, earlier ones might be more useful for me.)
-   Coding Train: Wave Collapse Function: <https://www.youtube.com/watch?v=rI_y2GAlQFM>

In decorum: each object has a

-   Type (it *is* something)
-   Color
-   Style => the same color is always the same style for a specific object, but color+style combo is switched between types
-   Position (it is *somewhere*)
