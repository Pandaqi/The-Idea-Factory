# Devlog

Welcome to another devlog! This time for my game "Duck Division" \<TO DO: Link here>

It was always meant as a quick project, just to work on something *besides* my main project(s). So it's really a silly game, but it turned out really fun!

## What's the idea?

You are ...

- Ducks
- In a lake ( = the screen is half-filled with water)
- Trying to hit a ball into the goals at the sides

*Sounds a lot like duck-themed pong. What's new?*

The main element is of course the *water*. It splits the field into two parts: one that's in the air, one that's under water.

Obviously, movement/physics/gravity in the air is different from in the water.

- There's almost no friction in the air, you can freely move and rotate, everything goes fast and falls down.
- In the water, you move very slowly, float (slowly) back to the surface, with lots of friction.

I thought it was a neat idea. Wanted to test it.

As I wrote down the initial idea, I came up with some other special elements:

- Being a 2D side-view game without a clear "floor" or "ground", we can move in different ways. Ducks can only *rotate (left/right)* and then *dash forward*.
- Ducks can obviously fly/float/spread their wings. So I added another button to "jump". Which, in this case, simply adds a sudden force in the direction perpendicular to your forward direction.

With that idea written down, I could start!

## Creating Water

I'd done something similar before, now I just had to do it in a more general way. And *better*.

The idea is:

- Create a line of points.
- Pretend they are connected to a string: each frame, check how far they are offset from their "rest position", then use Hooke's law to bring them back.
- Also make them influence their neighbours: each frame, check the difference between a point and its left/right neighbor, and change the values to lower this difference slightly.
- Now simply draw the line through these points

Whenever we want a "splash" (e.g. when a player enters the water), we find the point *closest* to where the player hit the water, and offset that by some big amount.

This will cause the point itself to oscillate back to its rest length (like a wave dying out).

And influence its neighbours to propagate these waves in a realistic way.

\<TO DO: CODE EXAMPLE?>

This *also* allows us to (cheaply) check whether a player is underwater or not. We find the point closest to the player, then check if the player's position on the Y-axis (vertical) is lower or higher than that point.

(To make it even cheaper, I did add an *Area* that's slightly bigger than the body of water, and it only performs these calculations on entities inside that area. Just seemed cleaner in the long run.)

## Actually listening to the water

What do we do when underwater?

- We increase linear damping => we slow down more quickly
- We increase angular damping => we can't rotate as freely/quickly anymore
- We invert gravity and decrease it a bit => so we bubble/float upwards

And we add particles for bubbles, splashes, that kind of stuff.

This is already working well. It feels realistic, plays nicely, but with *one big problem:* we're constantly losing energy.

We fall into the water, it slows us down considerably, so by the time we resurface, we're basically static. Which means we helplessly bobble along the water line.

In an earlier game, I already found a neat way to solve this: check for the exact moment we *leave the water*, then add some *extra (upwards) energy to the player*.

This means we always "shoot" out of the water, and the faster we went, the more we shoot out of it.

This keeps us moving, keeps things from becoming stale.

## Problem 1: restricting the dash

Endlessly being able to dash, fly, float, whatever, doesn't really work. It's chaotic and promotes button-mashing as perhaps the best strategy.

Again, most games will have a *floor* and you can only jump *while standing on it*. We don't have that. You *could* create some check of "are our feet close to the water edge", but it would be really vague to code, and even more vague to use in-game.

First solution: put a timer on it. While the dash is still active, you can't dash again. This should be like 0.3-0.4 seconds, which feels best in my experience.

Second solution: ducks can't stay underwater forever in real life.

What if ... we introduce the concept of "oxygen"? Being under water depletes your oxygen levels, flying into the air again fills it back up. You can't do any of the special actions if you don't have the oxygen for it.

This works great, with some tweaking.

- Oxygen drain is quite *slow*, and refill is *very quick.* It just wasn't fun if you had to "wait" or regularly take yourself out of the play for 5 seconds.
- This is shown *on the player duck* as *oxygen bubbles*. This makes it easier to see and use, than, for example, putting it in some corner as a UI element.
- Different special actions have different costs. They started quite high, but became lower and lower as I tested more. In the end, I want players to *do* stuff and *have fun with the game*, not restrict them too much.

## Problem 2: Too slow

I created a ball with the exact same script for handling air/underwater rules.

But when a duck hits it ... both just, well, kinda stop moving and that's it.

That's *realistic*, and there is *some bounce/collision happening*, but it's *too slow*.

First solution: give players and balls a physics material with a *really high* value for "bounce".

Second solution: give players a much higher *mass* than the ball. (And scale all the parameters, such as the dash speed, with this mass value.)

Why? Most people know the formula: F = ma. Force is mass times acceleration.

When two objects collide, they exchange forces. So if the player moved with force 1000 to the right, now the ball will move with that force to the right.

But ... the ball is much *lighter*, so it means the mass is *lower*, which means the acceleration must be *higher* to match the formula.

So a player moving at regular speeds can run into the ball and send it flying.

## Problem 3: Checking goals

Almost all sports/games give a goal when the object has *fully crossed the line*.

(For good reasons. Allowing a goal whenever the ball comes inside the goal area is just too fiddly to check in real life. And those precious moments where a ball is hanging near the goal line, but not quite in *completely*, adds great tension to games :p)

But how do we check that?

If I knew the game would only ever use one ball of the same size, it'd be easy. Check if ball is on the right side of the goal line, and check if the distance (between ball and goal line) is equal to or greater than the ball's *radius*.

But I wanted to keep my options open: for smaller balls, for non-circular scoring objects.

I settled on this solution:

- There's an Area in *front* of the goal that checks for balls.
- Whenever a ball *exits* this area, we know it's either *fully in the goal* or *moving away from the goal*. (The Area covers the whole goal line, so those are literally the only two options.)
- So we check if the ball is *goal side*, and if so, it's a goal!

Currently, the goals also extend *into* the field. (So there are poles you can hit or run into yourself.)

I'm not sure if I'll keep that. Maybe I'll create different arenas with different goals.

## Problem 4: Momentum

Currently, we can do the following special actions:

- Dash Forward: applies a huge force in your forward direction
- Jump Up: applies a huge force in your upward direction

But there's a problem here.

Let's say we're falling down. We've reached the top of the map, now we're falling to the water, we're building up speed.

Pressing Dash/Jump will do *almost nothing*. The huge force will just *cancel* our current velocity, leaving you hanging (awkwardly).

The easy way to solve this is to *override* your velocity. Simply discard whatever we were doing, and dash/jump in the desired direction completely.

This works ... but also removes the whole idea behind using a physics simulation and creating a physics-based game.

I'd like to create a mix. Your current momentum *does* matter, but not so much that dashing/jumping can result in an anti-climactic *nothing*.

In the end I settled on: *just REDUCING the impact of your momentum*.

If your current momentum is very different from the desired jump direction, I simply *scale it down a lot*. (If it aligns well, there's no need for me to change things, and it's actually nice to reward players with extra speed.)

## Closing the game loop

Just like that, we have a working game! I've been playing with it myself for ten minutes now, and it actually works great already.

The water helps ensure you always stay moving. You never *have* to jump or get yourself out of tight situations, as the constant balancing forces of the water will help you out there.

Hitting the ball perfectly from a jump/dash feels very satisfying. Scoring goals is, as far as I can tell on my own, not too easy but also not too hard.

What do we need for a finished game?

- Score counters
- Reset upon scoring (ball and players)
- Timer
- Game over when timer runs out => highest scoring team wins
