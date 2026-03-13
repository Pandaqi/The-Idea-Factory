Welcome to my devlog for the game [Kalum before the Storm](https://pandaqi.itch.io/kalum-before-the-storm). The game was made for the Brackeys Game Jam 2024.

Sometimes, I write these after the fact and talk about what I did and why. This time, however, I really needed this devlog to write down my thoughts and ideas, because I found it hard to get started. Perhaps that was because I only entered the jam very late and had to "switch" mid-week from my usual work to a few days of game dev. Or perhaps it was because of my home being renovated and thus ruining my sleep and sending me to work in different corners of the house every day :p

In any case, I struggled to get going this time, and kept this devlog mostly while I actually developed each idea.

## What's the idea?

The theme for this jame was **Calm before the Storm**.

I let that simmer in my brain as I ignored the jam and continued my usual work for Monday--Wednesday.

When it came time to start jamming, my brain had already decided the following.

* There's a recurring storm sweeping across the screen.
* You have to protect some town (island? peoples?) called Kalum from this storm.
* Stay alive as long as possible.

This sounded reasonable. You have a clear goal, a recurring (and intuitive) obstacle, it fits the theme.

I immediately saw the connection to the _Stormlight Archive_. That's a series of fantasy books (of which I've read the first three, but will soon read the others) by Brandon Sanderson with an interesting weather and magic system.

* A big storm rages across the world constantly, on a cycle, but without being predictable. (The entire world is built as to withstand that or deflect the winds.)
* There is magic, but it comes from stones that can be exhausted. 
* The only way to recharge them, is to _leave them out in the storm_.

I thought this was a great addition to my game idea. You need (fully charged) gemstones to perform actions, but to recharge them you'll have to place them in the path of that dangerous storm. A nice "tug-of-war" between _wanting_ to stay away from the storm, but _needing_ to be close it.

## And now more specific

And now what? I don't know!

I have so little time _and_ really want to unlearn the habit of overscoping. (Especially for game jams; I've already become much better at it for other game projects with a longer time span, and thus more flexibility in the scoping.)

At first, I saw Kalum as this great island that was slowly degrading because of the storms. I'd randomly generate this island (with buildings to break the wind, people to protect, trees that can fall down) and you'd die once all buildings had been destroyed.

The game loop would be something like this.

* Run around grabbing gemstones.
* Use them for a myriad of actions (better storm forecast, repair buildings, build new stuff, anchor stuff to the floor so it doesn't fly away in the storm, upgrade your own properties)
* Then throw them out strategically and wait for the storm to recharge them.
* Which would need multiple buttons/input methods (to grab/drop gemstone, to select the actoin you want from it, and to move around of course).

I immediately knew this was too big. I can't make a beautiful _and_ functional random island generator with realistic wind management and even more systems in just a few days :p

So I look back at the lessons I learned from previous game jams.

* **Every game is a distribution problem.** Yes, I already got this. You must distribute your gemstones over your actions, and your positioning over "recharge" (close to storm) and "be safe" (away from storm/weaken storm)
* **Make every system standalone.** Instead of coding for two days to make 5 systems that all interconnect (and not being able to test anything earlier), I must be smarter and allow the game to work if only 1 or 2 systems are done. Much faster prototyping, much faster feedback, and if I run out of time the game is still playable (just smaller scoped).
* **Spend most time on the action the player will be repeating the most.** This one is self-explanatory.

To achieve bullet point 2 (hopefully), I scale back the original idea into its separate systems.

* Player: run around, collect gemstones, use them for actions.
* People: need to be protected by you---if all die, you lose.
* Buildings: can be placed/upgraded, then destroyed, will house people and slow down wind.
* Storms: regularly spawn a storm traveling across the screen, checking what it hits. It realistically deforms around shapes (like wind being deflected) until it's so weak it removes itself.

Okay, let's get rid of the people and the buildings: the Player protects themselves and loses if they die.

Let's also get rid of the realistic storms. Instead, let's start with just a straight line traveling across the screen.

I still struggle the most with bullet point 3, which is also just a sign that I've the most to gain from tackling it. I get so lost in everything that needs to be done for a game, that the core action (that a player does every second or even multiple times a second) usually gets the _least_ attention. When it should get the _most_.

What will the player be doing in this game? 

* They'll mostly grab, use, and drop gemstones.
* They'll mostly interact with the storm to weaken it.

As such, I decided the following approach.

* The main action of a gemstone is to become a shield yourself. This (hopefully) makes the player feel _powerful_: they become bigger and shinier, and while the gemstone lasts, you are invincible to the storm (and can let it pass over you).
* But when exhausted, you _throw out_ the stones. You literally point where they need to go and the stones fly that way. This adds a sense of playfulness and dynamics, and is far more "fun" than just dropping gems where you stand.
  * This solves the issue of too many inputs. (Players just need one input now, and gems auto-expel themselves after usage)
  * This solves the issue of having to walk through the storm to place a gem somewhere, which is a pardox if the storm kills you.

## Version 1: Invincible Line

### Better Gem Management

I sorted my ideas based on priority (or "versions"), where each new version is like a stretch goal that adds another feature or idea to the game. But I could stop after any single one and submit it.

The biggest issue with this version was how to handle gems. Because at first, I'd coded them like typical "exhaustible" items: they are either full or empty, no in-between. And they empty immediately upon usage.

But ... that's a bit weird. If your invincibility lasts for, say, 5 seconds, then it feels weird to insta-empty the gem. It also doesn't communicate well to the player how long their power will last, which is something you really want to know while using said power.

Instead, I switched to a gem inventory system that is unlike anything I've done or seen before :p

* I switched gems to have health too (they can be 0%-100% charged).
* While using your power, it will just keep draining the next gem, and the next gem, as long as you want to/can go.
* Only once _done_, must you expel all the gems _you emptied in the meantime_. (And this also means you get multiple arrows, sending them all in different directions.)

Now the input system is: press SPACE to start using gems and be invincible; press SPACE again to stop it (and throw out the emptied gems, if any).

_Why two presses instead of HOLD?_ Many people struggle to hold down a button for a long time, especially while doing something else (like aiming). Additionally, this action can automatically "shut off" (if you run out of gems), at which point it's very confusing (and leads to nasty bugs in code) if the player is still holding that button ... but it doesn't do anything and pretends this is not the case.

### Making that

All other code is very basic. 

* The (storm) line is just a rectangular area that detects physics bodies.
* The player moves according to the arrow keys.
* If the storm hits something,
  * Player? If invincible, weaken the storm. Otherwise, damage the player.
  * Gem? Recharge it => this is instant 100% recharge for now.
* You lose if your health <= 0.

As usual, all of this is broken up into tiny modules. For example, 

* The storm has a `StormBody` module => it updates that line body and detects if bodies enter it.
* Any body with a `StormTracker` module will react to that => now they know they're being overlapped by a storm and send a signal
* The player has a `StormFighter` module that gets `StormTracker` as a dependency injection => if inside a storm, and we're invincible, weaken that storm. (Other objects, like gems, don't have this. Because, well, they don't fight the storm. Each module is just one functionality that something can or can't have.)

All those modules are at most 50 lines of code, with only one or two dependencies on other modules. It makes it very easy and clean to work on such a game, even if for a game jam. _Especially_ for a game jam: this gives me incredible flexibility in turning on/off entire systems and modules on a dime to see if that improves the game. (I think this is the general case for most game developers, but I especially work with a "throw piles of sand against the wall and see what sticks"-approach for finding a fun game loop.)

### Analyzing the results

This wasn't great.

* Because you only throw away depleted gems, there's a good chance you throw away nothing (if you merely become invincible for a short period of time, which is often all you need.) => This is confusing, it works against the rest of the game, it's just meh.
* Having only a single storm moving from left to right is similarly meh. Easy to predict, easy to circumvent.

It's not an actual game now, that's how much it's missing.

How do we fix this?

* I changed it so that you always throw away the gem you used, even if it's not depleted. This means there's always an arrow showing, you always move one gem to some other part of the map, it's just more useful.
* I changed it so that storms could appear on any side, move in any direction, appear in any number.


@TODO