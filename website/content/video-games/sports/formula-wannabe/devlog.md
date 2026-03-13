# Devlog: Formula Wannabe

Welcome to the devlog (or "what I've learned") for my game **Formula Wannabe**!

It's a simple *multiplayer, top-down (2D), racing game*.

But, as always with my games, it's local multiplayer (play on the same device) and has some interesting twists. (Otherwise, I wouldn't have made it.)

This article will explain both **how I made it** and **the lessons I learned from it.** But first, let's start with *why* I made it.

## Why this game?

Most creative people have more ideas than they can fit in a lifetime, so they need to be picky about what they do. As such, I always search for strong reasons why I should (or shouldn't) do a project.

(And I propose you do the same. Picking whatever excites you in the moment leads to 100% unfinished projects and nothing to show for it in the long run.)

With this game, the reasoning was as follows:

-   Racing has an extremely simple objective: be the first to pass the finish.

-   Racing is a very intuitive action to control: just use your controller/keys to move around

-   Lately, I became interested in the game *Trackmania*. That interest has been sustained for a month, which means it's a serious interest :p

-   I needed a very tiny, light-weight project after the behemoths I had created the previous months

Even though I had more original, cool, exciting ideas ... this game was simply a perfect fit for the moment. (And for my goal of "making games accessible to anyone".)

## First things first: the name

The name for this game was actually the first thing I came up with. When I had the idea, it was late at night. I jotted down some quick ideas, then went to bed.

When I woke up the next day, my first thought was "Formula 1". My next few thoughts tried to make puns on the word "formula" or the word "one".

This lead to "Formula 1-a-bee" => "Formula Wannabe".

Those were the first 10 seconds of my day :p Obviously, I wrote it down immediately after getting out of bed, and designed the game around it.

## Problem #1: The maps

There are many ways to create racing maps. But it's not that easy to switch during the project, so we need to make a smart decision at the start.

**Option #1: use a grid.** Simply create tiles (for "straight road", "turn", "finish", etc.). With a simple level editor, I could place these in the shape of a track.

**Option #2: use bitmaps.** Actually *draw* the track (in any graphics software). Then, within the game, read the "white pixels" as road, and "black pixels" as no-road.

**Option #3: use (vector) algorithms.** Create an editor where I can place *points* and then create *lines between the points*. Using some drawing algorithms and shaders, this data is turned into an actual road when a map starts.

All these options have (dis)advantages.

**Option #1:**

-   Pros? Very easy to make (esp. given my experience with grids), automatically looks clean and orderly. Also makes it easier to *read* the state of the game or implement different *height levels*.

-   Cons? You're restricted to this grid and the tiles you create. This limits freedom and variety.

**Option #2:**

-   Pros? Very easy to draw any road you want (and put it in the game).

-   Cons? Can't implement different height levels. Harder to place objects around the road (such as borders) and read the game state.

**Option #3:**

-   Pros? With minimal input (or storage necessary), I get any road I want.

-   Cons? Similar to option #2. I will also need to write some complex algorithms -- which I don't understand at this moment -- to make this vector magic work (well).

In the end, seeing that my goal was to create a *quick and lightweight game*, I chose the option that was the safest: the grid (**option #1**). I know how it works, I can set it up quickly and create maps with it, and it should be really fast.

However, I will try to keep the door open to the other options during development. (Instead of hardcoding things to grids, make it more general, so that another method *could* also be implemented.)

And lastly, I shall have to design the game around this. Because tiles have fixed dimensions -- e.g. each turn has the same angle -- maps can get "boring" or "repetitive". I'll need to keep this in mind and combat the issue.

## Problem #2: AI cars

Right from the start, I knew good **computer-driven cars** were an absolute most.

It enables the game for low player counts (especially solo mode, of course). But it also adds extra chaos at higher player counts, which I know works well for these "party" games.

But how do we do that? Again, multiple options.

**Option #1: Waypoints.** I manually place points along the track. The computer simply follows these points. (By adding some "margin of error" or "offset", this can look *reasonably* natural.)

**Option #2: Neural Networks.** I *train* a neural network to drive the cars in this game. After many training hours, on many different tracks, I should get a general algorithm that can drive a car quite well.

**Option #3: Heuristics.** I give the computer a way to see the world. (For example, lines that detect if it's about to drive into something.) Then I implement some "generally smart rules" about what to do with this information. (For example: if there's an obstacle to your left, obviously don't steer left.)

**Option #4: Potential field.** An interesting one. I create a "vector field", which means each grid cell saves a single vector (or *direction)*. Every frame, I loop over the map, and set these vectors to the *average direction* *pointing away* from obstacles nearby. Then, computers can just request the vector in their current grid cell, and then follow that direction.

And now the other required question: what are the (dis)advantages?

**Option #1:**

-   Pros? Can't go wrong. Easy code to write and maintain.

-   Cons? Requires manual work, looks unnatural, hard to handle unexpected situations (such as a computer flying out of bounds).

**Option #2:**

-   Pros? Creates very natural and human-like driving, that can even be smart and precise at times.

-   Cons? Needs to be trained, which isn't straightforward, although I have experience here. Can't see "inside" the computer's head, so has a risk of doing something stupid.

**Option #3:**

-   Pros? Relatively easy to code and maintain, doesn't often go wrong.

-   Cons? I need to define the heuristics myself. And even then, it's hard to make the AI *really good*, instead of just *okay*.

**Option #4:**

-   Pros? Can handle any complexity. (It depends on *map size*, not the number of enemies, or the map itself, or the physics.) A straightforward calculation and implementation.

-   Cons? Has many "potential issues", such as cars not moving anymore (because their current spot is the "best spot" according to the field) or going backwards. Can be solved, just needs extra work.

I don't see a clear winner. What I *do* see, is many comments about it being "easy to code". So why not try them all?

(In fact, there are many games which combine multiple systems. StarCarft, for example, combines Pathfinding and Potential Fields for their units. And otherwise I can pick a random one for each computer, making them even *more* varied.)

There are some things I can do that will be helpful *in any case*:

-   Whenever I save a new track, it calculates a path from start to finish. (My game engine has Pathfinding built-in, should be easy.) I need to do this anyway to ensure *the track is complete and can be finished*. But I can also simply save this path as the waypoints!

-   Each track should receive *checkpoints*. They give players a sense of progress, but they're also a natural *reset* point for cars going out of bounds. (Or computers being confused about what to do.)

-   I give cars *raycasts* to see the world ahead of them. This is useful for multiple options and a bunch of features I might want to add.

## Problem #3: Proper steering

There's no need for cars, in a game like this, to move hyper-realistically.

However, many car games use this as an excuse to make the cars move more like spaceships :p Or people. Or something *else* than a car.

This happens because they simply program:

-   Left key? Rotate left

-   Right key? Rotate right

-   Move forward in the way you're facing

But ... real cars can't just instantly turn in a direction *and* move in that direction.

Real cars take gradual/smooth turns. And if they try to take a sharp turn, at high speed, they *slip and slide.*

### The simplest technique (I know)

How do we model this easily? **We pretend to have wheels.** (Well, we only need to pretend to have 2 wheels for this technique.)

This is the idea:

-   Calculate the position of the "front wheel" => car center + half its width \* forward vector

-   Calculate the position of the "back wheel" => car center -- half its width \* forward vector

-   Now pretend to move the car => move both wheels in the direction they're pointing.

-   The angle between the wheels (after moving) is the angle of the car after moving. (Because the wheels are attached to the car and need to stay in line.)

The third step is important to understand. When a car turns, its *front wheels* turn, but the back wheels don't.

So the back wheel is simply moved in the same direction as our current one. But the front wheel is moved in our current direction *when rotated (left/right*).

TO DO: IMAGE HERE

This is what leads the car to turn, but only *gradually*. It's only a few lines of code, and a bit of a "fake", but feels completely right and intuitive.

### What about drifting?

To add **slipping/drifting**, we need to a bit of an extra "fake trick".

When a car drifts, it simply *doesn't fully move in the direction it's facing*. The car rotates, but its velocity keeps going in the old direction and "lags behind" a bit.

Well, that's our clue.

Our forward vector should be *decoupled* from our rotation. Instead, we

-   Save our "forward vector" in a separate variable

-   Every frame, we *interpolate* our forward vector towards our current rotation

-   The more we're drifting, the higher our "slip factor", the slower this interpolation goes. (Setting drifting to 0 will just snap it to our rotation immediately, coupling it again like before.)

This doesn't work (well) if a car bumps into something and suddenly flips 180 degrees (or something extreme like that). But ... if that happens, our speed is lost as well, so the drifting code can just be deactivated.

So that's the plan for now:

-   Build a rudimentary (grid) map editor.

-   Build some simple tracks

-   Implement basic car control (steering, accelerating, etc.)

-   Implement the "helpful tools" from the list above

This devlog will continue when I have that figured out.

## Lesson #1: I was wrong (about car steering)

Implementing the car turned out a *bit* more difficult than I imagined.

Eventually I did the following:

-   I created an actual sprite for each wheel. (Easy to see what they were doing when debugging, and it gives an actual object to read/manipulate.)

-   Each wheel has a *separate* position, rotation and velocity.

-   Each frame,

    -   The wheels move according to their velocity

    -   If they go too far apart, the front wheel is pulled back to match the car length. (There's some leeway here to make it "smooth".)

    -   The car updates to the average position and rotation of the two wheels

    -   The two wheels rotate to match the car rotation. (The back wheel must follow it, the front wheel is off by "steer_angle".)

    -   The velocity of each wheel moves closer to the velocity they *should have* according to their rotation. (The *higher* the drift_factor, the slower this goes, which means there is a certain "delay" between how a wheel is rotated and how it moves. Aka drifting.)

It's not perfect. It's not physically accurate and you have to play a bit with the values to prevent weird situations. (Such as the car going backwards.)

But it mostly feels *great* to drive and drift. The car takes smooth (wide) turns, depending on velocity. Drifting looks and works semi-realistic, instead of the "skating on ice" behavior you'd get with a simpler code.

And, as I said, a game like this isn't meant to be about physics accuracy :p

(Come to think about it, you obviously cannot drift "at will" in real life. It happens automatically when turning at high speed. This makes it almost impossible to "physically model" a car in a game, which can also drift *whenever you like*.)

**General lessons about car movement:**

-   The car feels best with *low acceleration speed*, but *high deceleration*. Why? Because it takes a while (and thus some skill) to build up speed and momentum. But if you let go of the button, you come to a standstill quite quickly.

-   Both *steering* and *drifting* need some "smooth transitions". When a user presses the left key, you don't want to *immediately* snap the wheels to the left. (Well, you can, but it produces janky turns and zigzags.) Just smooth it out over a period of 0.3-0.5 seconds or so.

-   This is especially necessary when you go *out* of drifting. If you don't smooth that transition, the car will be *janked* into place again, which looks bad. (And defeats the purpose, kinda.)

-   As always: instead of making the car go *faster*, you can also simply make the car *smaller* (and the map bigger). This way, you don't need to move sprites at breakneck speeds, but it still *feels* really fast.

-   Implement some "fail-safes". Limit velocities, limit turning angle (per frame), provide a quick check to prevent a car from flipping backwards, etcetera. Yes, it might not be "realistic" and it might sometimes make the car jump into place for a frame. But it's worth it to keep everything smooth and under control.

**Remark:** I saw a post online about somebody using a *sphere* for controlling a 3D car. The sphere simply interacted with the environment, and its speed and rotation were then set on the car. It looked and played absolutely fantastic, especially for such a simple (but smart) idea. So that's an option you could explore in 3D.

## Lesson #2: get to the core loop first

I (almost) made the classic mistake again: I spent a lot of time finetuning the car control, the minute details of the steering, before I even had a single track to play.

So after a few hours, I luckily stopped myself and started building a track. It was ugly and boring, of course.

But that doesn't matter, because now I could actually *play the game*. I could win it. Which *instantly* made driving more fun and showed me the *actual areas of improvement*. (Which are rarely the minute details buried in some lines of code.)

Lala TO DO
