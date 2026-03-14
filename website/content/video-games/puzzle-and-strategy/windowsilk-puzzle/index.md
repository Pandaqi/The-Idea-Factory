---
title: "Windowsilk Puzzle"
categories: ["video-games"]
tags: ["puzzle"]
language: "en"
progress: 4
---

So, I made the game **Windowsilk** for the GitHub Game Off. That version was a local multiplayer party-esque game. You move in real-time, the web can have *any* configuration you want (no grid, no fixed rotations, no fixed line lengths).

But many of the rules and ideas are also suited to a **puzzle game.** I already have all these amazing drawings for it! All the unique bugs and how they work!

The summary is that you're a spider moving over a web. You can only eat bugs smaller than you, which will make you grow in size. There are, however, two twist.

* Eating specific bugs also triggers that bug's special power/effect.
* Every time you move over the web, you create a new strand / change an existing strand's type based on the last bug you ate. This changes the properties of the web and how you can or can't move over it.

Below is the full idea.

_I did not create this myself, in the end, for the stupid reason that my computer could not handle simulating/generating the puzzles anymore. I actually got all the hard stuff working in Rust, but my old broken laptop took 100x longer to generate a single puzzle, so I deemed it too impractical to continue. You can find all my drawings and assets on the [Windowsilk Github](https://github.com/Pandaqi/Windowsilk) repository._

## Input

Swipe from your spider to any other point to move there.

_The points don't need to be connected! Moving there will create a NEW edge, like a spider weaving their web._

## Objective

Reach your maximum size (X points)

-   There's no fixed limit on turns, although you can only get three stars if you do it as quick as possible.
-   If you're eaten, you die.

## Rules

When a move is attempted ...

-   If an edge exists, it walks over it. (Play procedural animation, bumpy.)
-   If not, it tries to jump. Jumping creates a new line, but costs points. (Play jump tween, shoot line out of our butt.)

When you enter a point with another entity ...

-   The one with *more points* will eat the one with *fewer points*
-   In case of a draw, nothing happens.

New lines created by jumping will get entities **stuck**. (If they attempt to walk over, they are stopped, and you can eat them no matter their points.) => Of course, there'll also be a powerup/other way to paint edges.

## Map

The map is a **rectangular grid.** The points are fixed, you cannot create an edge that spans multiple points. (You have to do it one at a time.)

(Might also become a **hexagon grid**, not sure. Write the code to allow both, so a general "get_neighbours()" function instead of hardcoding it.)

## Specialties

**Specialty #1:** When eating a bug, you might get a special power (if it has one)

**Specialty #2:** Moving bugs leave trails.

**Specialty #3:** Flying bugs simply move from point to point, disregarding any edges between them (or not)

**The player** stops on points, but **Bugs** stop halfway edges.

The **order** in which entities are handled depends on **points**. The more points you have, the earlier you move.

## Questions

**How to make the game accessible?**

-   Very bright colors, minimalistic art style, think "mobile puzzle game"
-   When tapping on something, you get information about what it does again.

**How to implement self-moving bugs?**

-   They should follow some extremely simple rule
-   Their next direction should be *shown on screen*, so players don't need to guess or calculate themselves.
-   Their order should also be clearly *shown on screen.*

**I'm not a big fan of complex "move order" for bugs.** Can I find something simpler?

-   Edges are numbered (from top to bottom, left to right). That's the order.
-   Move order is *bug specific*. So maybe there can only be one bug of each type at a time. Move order is *points-first*, but in case of a draw it's *the faster bug*.

## Implementation?

Use a "module" system in Java. Probably just break it into tiny classes and re-use those, like in the Godot game.

### Web

Use Point and Edge classes. Simply connect those in two ways:

-   One with "all possible connections"
-   One that has "actual connected neighbors"

(During setup, we just keep an array of all points, and use its *index* to connect them later. Then the array can be destroyed and we're good to go.)

Both points and edges can

-   Be a certain **type**.
-   Have an **owner.** (Which will probably only be the player, but keep it general for now.)
-   Hold **entities**. (We can always limit this to one later. In any case, *order* would be important when checking them on eating)

### Entity

Create an Entity class for both players and bugs.

They have:

-   A position
-   An orientation
-   A number of points
-   A specialty/trail type

They can:

-   Walk from A to B
-   Fly from A to B
-   Check if they can eat something
-   Be killed or incapacitated

Note that players will walk from point A to point B, crossing a single edge. Other bugs, on the other hand, will walk from edge A to edge B, crossing a point (and half their edges).



# Rust (Programming Language): Notes

## General

**#1:** Ending a line with a semicolon makes it a **statement**. Omitting it makes it an **expression**.

Statements execute something, but return nothing. Expressions return the result of itself.

As such, you can end a block of code with an expression to make it return that. Ending a function with an expression will automatically return it as well.

**#2:** Variables are immutable by default. Add "mut" to allow mutating. For more flexibility, you can overwrite or shadow a variable (with the same name) by re-initializing it with the new value (let x = ...)

**#3:** Passing arguments to functions is done by prepending "&". (This indicates it's a *reference* and the value need not be copied.)

If you want the argument you passed in to be *changed* by that function, use "&mut"

**#4:** Rust does *not* have automatic conversion and null checks. (So if we have a number, we can't do "if number" to check if it's non-zero.)

**#5:** Rust has loop (endless loop), while and for. These can be *labeled* (in case you need to break out of the non-innermost loop.) These can *return values*, by adding them after the *break* statement.

(In general, it's recommended to always use a for-loop. This might mean creating a Range first, such as (0..4))

## Modules/Structure

Any module can be accessed using "use cargo::path::to::module". Don't forget to actually grab the thing we want, instead of the whole module, if we only want that thing.

If the module is in the same folder (\<named folder>/mod.rs), you can directly use "mod \<named folder>" (No need to wrap it in a module in the file itself.)

## Inheritance/Composition

Pfew, lots to unpack.

-   Create a **struct**. (With the property names + data types)
-   Then create an **implementation** over that, which adds the actual methods/functions.

Create a "new" function (which simply returns a new struct to itself), use that as a constructor.

Here's the big deal: **a variable can only be owned by ONE object.**

This was my first try, which I've done countless times before in other systems:

-   Create a Point class
-   Create an Edge class
-   An Edge receives two points (start and end), which define the edge.

But ... one point might be attached to several edges. This creates errors and Rust doesn't want to compile.

(If I *borrow* these values using references, I have to understand *lifetimes* to make it work, which I don't. <https://blog.logrocket.com/understanding-lifetimes-in-rust/>)

So here's a better plan:

-   Create all the points once => indexed array
-   Create all the edges once => indexed array
-   Only store the *index* of the edge/point we want, not the actual object.
-   (When doing something with it, use a helper function to "retrieve" it quickly.)

A similar thing can be done for entities:

-   Whenever they enter a new point/edge, we simply *move* their variable over. (They can't be in multiple places at once anyway.)

(There *is* something called a Shared Pointer: <https://doc.rust-lang.org/book/ch15-04-rc.html> => but it feels like a hack, and not something I'd even understand at this point.)

## Nah, there's more trouble

Because, if I create the points in their own function, they'll be deleted when it's done! So I need to return it, and add it to the Vector there.

But once the Vector is dropped, all the points are dropped again! So the Vector needs to somehow stay alive. Or does that happen automatically, because it's a property of the struct?

**TO DO: Figure out if/when properties of a struct are dropped**. (Probably when the scope creating the struct and holding it finishes?)

## Resources

Great slides about ECS in Rust: <https://kyren.github.io/rustconf_2018_slides/index.html>

Great minimal example of the borrow system of Rust: <https://stackoverflow.com/questions/47618823/cannot-borrow-as-mutable-because-it-is-also-borrowed-as-immutable>

Command (Do/Undo) pattern in Rust: <https://rust-unofficial.github.io/patterns/patterns/behavioural/command.html>

Using Traits as a *sort of* modules/components: <https://doc.rust-lang.org/book/ch10-02-traits.html>

Microsoft course on Rust: <https://docs.microsoft.com/en-us/learn/paths/rust-first-steps/>
