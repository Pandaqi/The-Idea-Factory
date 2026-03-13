# Devlog

Welcome to another **devlog!**

This one's for a project that started out as "Simplified Quidditch Clone". At this time I'm not sure what the final name or idea will be.

But that project title says it all.

I was surprised by the complete lack of Quidditch video games, or anything that comes *near* the idea. A game that's played in the air, with simple rules, balls to throw into rings, has *countless* possibilities!

After some searching, my surprise increased. There *was* a title called Broomstick League, and it *was* even endorsed by Rowling herself, but it mysteriously vanished just before it was supposed to release. With speculations about copyright infringement being the cause.

## The Plan

So, if I was going to make this, what was the plan?

-   A local multiplayer game
-   That is *much, much* simpler than similar games of its kind (such as Rocket League)
-   But also *very different* from those games.

I could simply recreate the Quidditch arena from the movies, recreate those rules, and make that. But that would

-   Possibly get me into trouble
-   And be a terrible idea, as it restricts creativity. And the game isn't very suited to a direct copy to the video game format.

Think about it. What is Quidditch? It's a game where ...

-   Many players fly around on broomsticks
-   There is no clear boundary or restriction to the arena.
-   Or how much stuff you can break.
-   Or which magic is allowed and which isn't
-   Or how physical you can get with the others
-   Or how exactly you're supposed to catch/deflect/throw/move the balls

It's just very vague, very hard to recreate in a video game, and in some cases not that fun (in my opinion).

That's why my goal was to **heavily simplify** the idea and **strip away any vagueness or specific rules directly lifted from Quidditch.**

## Simplifying

### Objective

The first step to simplifying is always the **objective.**

In Quidditch, you can win by scoring the most points ... or catching the snail. That's a fine idea. But it can be simplified.

**You win by scoring the most points.**

But ... there might be ball types that give (significantly) more or fewer points :p

### Input

The second step is always the **input.**

Unless you're quite the gamer, and you're serious about getting good at something, I've noticed the limit for players is: **movement + one button.**

Movement, using arrow keys/joystick, is intuitive and well-known. Even to non-gamers.

Pressing *a* button to do something is also a real-life thing everyone knows and can easily remember.

Pressing *multiple buttons*, maybe *at the same time,* *maybe holding them down ...* yeah that's where most (regular) players will stop caring.

So that's all we have.

Your joystick is used for movement (in the air): rotating or tilting up/down

The button? I'm not sure yet.

If we use it for "accelerate" or "move", as is often done, we can't do *anything else* with the game anymore, as we're out of controls. (And we're sorely missing the pretty much required second button for "slow down" or "break".)

Let's keep that open for now.

### Rules

The third step is about simplifying the gameplay rules. What's the main loop? What process will you repeat over and over to actually get the ball into the goal?

At first, I wanted to make it purely physics based: you are just a solid body from which the ball bounces. (Like Rocket League. You can't "catch" or "hold" the ball.)

But the fact that the game is fully "air based" gets us into trouble. In real life, *balls don't fly*. If you drop one to the ground, it might bounce a bit, but it will just stay near the ground until it stops.

For this to work, we'd need to heavily modify how physics work to ensure you get some control over the balls. And boy, do I have some *bad* experiences with trying to make physics in games do what you want.

No, we need more.

We need to be able to grab or catch balls.

But simply *catching any ball that comes near you* (as many games do) would be too strict. And probably look a little silly. (Catching a ball with your ass becomes a possibility.)

So the main loop becomes:

-   Catch balls
-   Move into a good position
-   Then throw the ball
-   *In some other way*, you can use other parts of your body to deflect balls without catching them.

This gives our one "button" a cause: press it to throw the ball you're holding.

### Theme

At this point, I try to find some *theme* or *general idea* that can combine with my game rules, in hopes of solving multiple issues with *one simple solution*.

I didn't want to add people on broomsticks. That'd be a clear copy, and it's been done before. (And I'm not that good yet with modeling 3D people that, well, look like healthy people.)

What else flies? Yeah, *birds*!

I thought about placing people on birds. Might look really cool, like they're some tribe of "Birdriders" or something.

But again, it would be too complicated, what would be the point of having *two* entities?

I simplified further: **you *are* the bird.**

Why? Because this solves many issues mentioned above! The bird can ...

-   Catch balls with its *beak*. (Any other part just deflects the ball. Of course, I'll make the beak sufficiently large to make catching easy.)
-   Fly around freely. It doesn't need to take into account the person on top of it, play annoying animations, anything like it. I create a 3D bird, I rotate/move it according to your input, we're good.
-   Ditch the idea of using "balls" ... and use "eggs" instead!

That makes a lot more sense. (Thematically. Not realistically or anything.) Birds are playing a game about catching eggs and trying to throw them into goals.

That's what we're making.

## Solving Issues

I've been making games long enough to immediately see many flaws with the plan, or at least issues that might appear and that we need to consider.

### Issue #1: how to control acceleration?

**Issue #1:** We don't have a button for accelerate/slow down. As such, players will *constantly* auto accelerate. Is that okay?

I think it's fine, honestly. It's usually a *good* thing to force players to keep moving and playing all the time. Especially because of the next part ...

### Issue #2: varying speed

**Issue #2:** Everybody will move at the same speed. Which means you can just *follow* someone around indefinitely, making it impossible for them to do anything.

There should be ways to **increase/decrease momentum.** More advanced ways to move around, shake off defenders, etcetera.

Here's the idea.

-   **Use gravity:** when flying downwards, you go much faster, because gravity is helping you accelerate. (Conversely, when flying upwards you're much slower.)
-   **Use "flips":** when you press the button *and you don't have the ball*, you perform a salto. In which direction? The one you indicate with your joystick. Hopefully, this looks graceful and cool.
-   **Use different egg types:** holding an egg slows/weighs you down. Different eggs might have a bigger impact.
-   **Use "treats":** icons float in the air. If you fly through them, they give you extra speed/energy. In other words, choosing a path through these treats is another thing to consider while flying around.

### Issue #3: throwing

**Issue #3:** How to aim throws? How to change their speed/direction/curve intentionally?

Step one: press the button (while holding an egg) to throw it.

Step two: how would you throw something in real life? You'd lean back, swing your arm, then release at the right time. That's how you get power, curve, direction.

We can do the same.

While holding the button, the egg will get a trail, showing where it's been each frame.

When you *release*, I can calculate the direction/power/curve you built up *from that trail*.

If you rotated a lot during that time, it'll curve a lot. If you moved a lot, the throw will have loads of speed.

From experience, I know it takes some players time to understand and use this. That's why throwing should also work fine if you just "quick press" the button without clear aiming. In that case, the egg should just fly forwards with decent speed.

### Issue #4: prevent easy/boring play

**Issue #4:** How to prevent players from just ... grabbing an egg ... then flying into the goal while holding it?

Firstly, I want to bring over even *more* physical play. (Present in both Quidditch and Rocket League.)

-   Players can fly into each other. This way, you can bump others off course, or at least bump the egg loose from their beak.
-   One of the "egg types" should be the **danger egg**. It scores no points, but can be thrown against opponents to stun them for a moment.
-   (Maybe, in certain conditions or states, you can completely "destroy" them. But not sure about that.)

Secondly: this is an easy thing to simply *discourage* with a simple rule.

-   Flying through the opponent's goal (with your bird body) means extra points for them.

This makes it near impossible to score while holding the egg, without taking this penalty.

But it goes a bit further: you need to watch out how you move around the opponent's goal. You can't just camp there, or keep bumping the goalkeeper, as you'll fly through the rings all the time.

(The alternative is literally *forbidding* it. Scoring this way does nothing. You can't even physically come *close* to the goal area. But this is too restrictive and hard to play around.)

## First Prototype

Now that we have a solid plan, let's make a minimal prototype!

This is the goal for now:

-   A simple flat field with rings.
-   Birds that can move around like they should: accelerating, steering in the air, flipping
-   When near a beak, balls are caught.
-   When button is held and released, balls are thrown with the right parameters.
-   Balls going through rings score points.
-   The game will end after the timer runs out, the team with the most points wins.

(Many of the extra rules or ideas will have to wait for now. It's already a great achievement to get basic bird movement and ball catching/throwing working well.)

### Steering

I basically followed a tutorial about basic "airplane movement" and tweaked it.

Lala TO DO

### Flipping

We could create a fixed *animation*, but that's a terrible idea when you want (somewhat consistent/realistic) physics. Because maybe there isn't space to flip. Maybe halfway the flip you are suddenly inside another bird.

Instead, I simply add *angular velocity* in the flipping direction.

I continue doing this until we're back where we were, or our angular velocity changed considerably from last frame (meaning we bumped into something).

Lala TO DO

### Catching

Beaks have a large "area" around it. When an egg enters ...

-   It's moved into the right position. (And has all its other properties reset. We don't want the ball keeping its momentum and dragging the bird along :p)
-   Then attached to the beak with a physics joint.
-   And we remember we have a ball now.

Lala TO DO

Of course, there are tiny issues here that you need to resolve:

-   Forcefully moving a physics body is only allowed at a specific moment each frame.
-   So we must *plan* the movement, then wait until it's *executed*, then attach the ball and register it as being "caught".

### Throwing

To throw it ...

-   When the button is first pressed, we start tracking the egg position
-   When the button is released (or after, say, at most 1 second), we destroy the joint keeping the egg near us.

The ball shoots off in the last direction we moved. (So the difference between its current position and its previous one.)

The longer the trail, the more speed we give the ball.

The more curved the trail, the more curve we give the ball. (Although I'm not sure if I actually want to have curve in the game ...)

Lala TO DO

Again, tiny issues:

-   Just after throwing, the ball should *not* interact with the player for some milliseconds. Because, remember, it's currently inside its beak. So if we release it, it will just collide with the bird that just threw it, stopping completely.

### Scoring

Finally, something (relatively) easy.

I simply create a circular "area" again, inside the ring model. When a ball enters it, the scoring team gets a point.

(The ball is reset to a position in the center, like a kickoff from soccer, but high in the air.)

Then it's just about displaying that somewhere, keeping track of it. And when a timer runs out, checking which team has the higher score.

Lala TO DO
