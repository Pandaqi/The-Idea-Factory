# Devlog

Welcome to my devlog for the game "Locktown"!

As expected, this game was inspired by the global COVID pandemic that's been controlling the world for over a year now.

When the pandemic first started, I actually already made a *board game* about viruses. It's called **Epic Medics** and is a *One Paper Game*. This means that you only need to print a *single* piece of paper every time you want to play, and playing is done by *writing* on the paper with pencils.

In that game, one player is "The Virus" and the rest play "The Medics", each with their own goals and secret actions. Everything you do, every cause and effect, is handled by *moving people on the board.* Why? Because that's the core of such a pandemic. Infections keep spreading because *people* keep moving, meeting each other, working, bringing their kids to school, etc.

That game was quite a success! However, it's quite complex and usually takes 2+ hours to play, which certainly not everyone is up to (or wants to even *try*).

What to do? Well, I can also program *computer games*, so I wanted to try and distill the basic idea of Epic Medics into a fun mobile puzzle game!

This game eventually became **Locktown**.

## What's the idea?

It's a puzzle game. There will be hundreds of *levels.*

-   Each level has a small town, or city, or island, or any other "area".

-   It consists of *locations* (big dots on the map) and *connections* between them

-   Each location can hold any number of *people*.

I decided to make levels using a *hexagon grid*, as those look better with those kinds of "dot + edge" puzzles. In my opinion, anyway.

\<TO DO: PLAATJE VAN LEVEL (kan best later zijn, als het al af is>

I like my puzzle games *simple* but *with huge potential*. Ideally, you can only do *one thing*, which means I need to be very creative and find interesting ways to apply that one action.

As such, this is the only action you can do in the game, every turn:

> **Move people from location A to location B**

That's it. The puzzle aspect comes from choosing *which people do I move?* and *to where?*

Obviously, you can't do this action if A and B are not connected, or there are no people on them. Otherwise, the choice is completely free.

## What's the objective?

In a game about pandemics, the most obvious objective would be:

> **Cure all people within X turns!**

It's also, however, a boring objective, unrealistic, and with a low ceiling.

**Unrealistic?** In real life, we're not trying to "cure all people". (At the moment of writing, we've only *just* begun vaccinating people.) We're trying to control the pandemic. To keep life going, to keep people happy and the economy strong, whilst reducing infections and spread as much as possible.

**Low ceiling?** After 10 or 20 puzzles ... where can you go? Yes, you can make the puzzles harder by adding *more (sick) people* or *more turns*. But that is, in my experience, a very bad move. Presenting players with puzzles that take 30 turns to complete, with 50 people to move around all over the place, is just going to annoy and frustrate them.

That's why I decided to use flexible objectives.

What does that mean? For example, I'd like to introduce *money* in the game. Which is, of course, represented by a yellow shiny person. (Because everything is a person in this game!) If your money runs out ... you lose the level.

Or I could introduce *tourists*. They desperately want to get to their holiday destination, otherwise they become angry and depressed. If even a single tourist doesn't get to their destination before the end of the puzzle ... you lose.

Yes, it's fine to *start* with a simple overarching objective like "cure everyone", but eventually the game should move towards something more flexible.

## But how do you "cure" people?

First of all, the way people get infected is exactly what you'd expect:

> **At the end of every turn, each sick person will infect one healthy person *at their location* (if there is one).**

But, as we saw in our real-life pandemic, curing people is the hard part. In general, there are two strategies:

-   **Wait it out.** After X turns, someone is automatically cured.

-   **Vaccinate them.** Give them a vaccine, or move them to a "hospital" in the level, and they are cured.

(Of course, some people actually *die* because of the virus, or they go to the hospital just to receive *intensive care*. I'm not too sure how to implement this in the game, if at all. I'm aiming for something quite lighthearted and simple, but I don't want to just "ignore" the fact that pandemics kill people.)

**"Wait it out"** has two problems:

-   I need to *track* how long someone has been infected in the game, and so does the player. For many infected people at the same time, this can get complex.

-   Waiting ... is not very interesting in a game. You play a game to get some action, to *do* something. Not to shuffle people around until they get over themselves.

**"Vaccination"** also has two problems:

-   It's too good. If there's a location that immediately cures people, or even prevents them from getting sick, puzzles are going to be very simple.

-   It's unrealistic. Getting a vaccine is the hard part, the puzzly part in real-life.

So, what to choose? From my experience, this isn't a choice between them, it's a question of *order*: when do I introduce each element?

I'd do something like this:

-   At the start, sick people get cured instantly when going to a hospital. (You start out having the vaccine ready to go. Simpler, less explanation, easy start.)

-   Some levels later, you learn that (some) people will automatically heal over time. (To offset this, you might make it possible to "reinfect" these people and restart their timer.)

-   Some levels later, you learn that you need to discover the vaccine yourself.

This way, you get all the mechanics, but in a way that's *easy to understand* and *growing more complex near the end*.

## Generating the puzzles

I'm in love with the idea of *computers* randomly generating puzzles. I've used it before several times, with quite some success, and I want to use it again.

How does it work? Three simple steps:

-   The computer creates a *random* level. (It determines random dimensions, places random locations, etc.)

-   The computer tries *all possible moves* until it finds a solution. (Or it discovers that there *is* no solution.)

-   Repeat until you find a puzzle that matches my specific requirements. (Such as "at least X moves" and "must use a hospital twice", things like that.)

Where's the difficulty? As you might have already guessed: "all the possible moves" is a *huge huge number of possibilities*.

With the smallest possible level (a single hexagon), no special actions or code, the computer can only check 5-6 moves in advance, before it crashes under the weight of too many possible boards to consider.

This might seem unsolvable. How can levels possibly get smaller? And five moves are never enough to create challenging puzzles, right?

Aha! Let me introduce: **rule trickery** and **heuristics**!

**Rule trickery:** I have to design the rules of this game to *limit options as much as possible*. For example:

-   I might add a location that can only be used once. After that, it destroys itself and is out of the game.

-   Or locations that start out "locked" (and empty) and must be unlocked during play.

-   Or people that can only move under specific conditions

-   Or special connections (between two locations) that can break down

If I carefully add some of these elements into the game -- as early as possible -- it should heavily cut down on the number of possibilities.

**Heuristics:** let's say the computer is trying a solution for the game. It only has two moves left ... but almost everyone on the board is infected.

Sure, it *might* still be solvable, but there's a 99.99% probability that this specific path is *not* the solution. That's when we can trigger a heuristic, a shortcut, a rule of thumb: if this situation happens, just throw away this board, it's probably not working out.

These things are not 100% "correct", as you will throw away perfectly valid levels from time to time. But these are correct enough that they are *worth* the speed improvement they get you.

## Baby steps

Okay, I have the basic simulation (in Java), and the basic game (made in Godot) to test each level it gives me.

This is what's been added so far:

-   Each location gets a random number of *healthy* and *sick* people.

-   At the end of each turn, sick people will infect healthy ones.

-   Locations are either neutral, or they are a *hospital*.

-   When sick people move towards a hospital, they will be cured. Healthy people can **not** move to a hospital.

I set a maximum of 10 moves, small board sizes, and clicked the button.

The result?

It works! Of course, the puzzles are nothing to write home about, but at least the code functions and the game is playable.

The fact that people *automatically* infect others at the end of each turn, and that healthy people can not move to a hospital, is enough to provide an initial challenge.

To give an idea, this was the first puzzle generated:

\<PLAATJE: first locktown puzzle.png>

There are actually a handful of solutions, as the computer doesn't check for *uniqueness* of a solution yet. (Which, considering the staggering amount of possible moves, should perhaps never be implemented anyway.)

The important thing is that it actually *relies* on the few rules we laid out. You need to collect the sick people in the uppermost location, "wait" a turn until they infect each other, because *all of them* need to be sick in order to move to a hospital.

This is nice. This is a good foundation to build upon.

## Sidenote: adjacency matrices

Although I'm not sure about the grid.

Connections are ... sparse and predictable. Now they just follow a strict hexagon grid, but it might be more interesting to allow *any* connections to form (to locations that are reasonably close)

Especially if I want to do cool stuff with connections later, I need to be more flexible and get better control. So I'll probably implement an *adjacency matrix* that holds some data about each connection, and which also allows connections that break the grid.

**A few hours later ...**

It took me a few tries to find a good method for (efficiently) storing connections in a hexagon grid.

Eventually, I created a function that converts each location (which is a pair of (x,y) coordinates) to a single unique integer.

This formula is simply: **integer = x \* level_height + y**

These integers are used as the indices of a 2D array. So, for example, if you look at row = 2 and column = 5, you're looking at the connection between location 2 and location 5.

If nothing's there, well, there is no connection. Otherwise, there is. (Later in the game, connections might have properties, which will be saved in that matrix.)

\<PLAATJE: Adjacency matrix explained>

During random generation, connections of the hexagon grid are given a "high probability" of being created. But any other point in the 3x3 square surrounding a location also has *some* probability of getting a connection.

*Question 1: Won't this sometimes create ugly overlapping connections?* Yes, yes it will. Unless I choose those points wisely. If I ensure a minimum distance between points with "special connections", I should be fine. (If all goes wrong, I can still allow two or three edges to overlap, without creating a visual mess.)

*Question 2: Doesn't this waste a ton of space?* Yes, which is why I use a different method in the simulation itself. (Each location has a "neighbours" property which holds a reference to their neighbour.) But because these puzzles will be very small in-game, I don't care about that space, and use a matrix because it's faster and simpler. (To check whether you're allowed to make a move, I only need to check if matrix\[start_index\]\[end_index\] != null)

Anyhow, here's an example of the new connections:

\<PLAATJE: locktown -- new special connections>

## Checking puzzle "goodness"

So, what next? The computer is able to generate boards, follow some rules, and give us the solution.

But that doesn't mean that puzzles are interesting or "good".

From my previous experience, I've discovered a few powerful "checks" which usually lead to good puzzles. If a puzzle passes *all the checks*, it's saved. If not, it's discarded.

### Check 1: Number of solutions

Obviously, a puzzle becomes *easier* if there are *multiple correct solutions*.

To prevent that, I allow the simulation to continue (even after finding the first solution). During that period, I *count* how many other solutions it finds. If that is above a certain threshold, the check fails.

We can take this a step further. The simulation continues *a few moves extra*. (For example: we've already found a solution in 5 moves, then the simulation still continues and checks solutions with 6 or 7 moves.)

Why? If a puzzle has *many* of those "almost solutions", it's fun to solve. As a player, you constantly think "hmm, what if I try X?", and then you do it, and it *seems* the right solution ... but you run out of moves just before the finish line.

I've found this to be a very enjoyable experience for players. It leads to good puzzles and "Eureka" moments, at the expense of a higher computational cost during simulation.

### Check 2: Move diversity

A puzzle that just repeats the same move ten times, usually isn't very nice.

This check counts how many *unique locations* were used out of the total. If this falls below a certain threshold, we're basically ignoring half the board, so the check fails.

Again, we can take a step further. A puzzle that uses location X *twenty times*, and all other locations *only once*, will still be a bad puzzle. Yet it would pass the check above.

To prevent this, I also count how *often* each individual location is present in the solution. If too many are only used once, or one is used *disproportionally often*, I fail the check.

In practice, I calculate the *average* use per location. (Which is number of moves *divided by* number of locations used.) Then I check, for each location, if they're below or above that average. If too many are below it (say, 75+%), the check fails.

**Note:** yes, these checks are not perfect. They might discard puzzles that were actually brilliant, but so be it. The other 99% of the time, they do their work splendidly.

### Check 3: special cell usage

Whenever I introduce a new element, I obviously want that element to be *used* in the upcoming 5-10 puzzles. (After that, it can just be part of the complete set of mechanics and used randomly.)

Luckily, this puzzle format is *very* check-friendly.

I only need to look at the solution to know if a cell was used or not! (In previous games, I usually had to *re-do the solution* and then *keep track of what was used*.)

I loop through the solution and check if any location matches with the cell I wanted to use. (For example: here we move people from location A to B. Hey, B is a supermarket, and I wanted to use that. Nice, check passes!)

This isn't perfect: some cells will be "used" without being part of the solution moveset. Additionally, the computer might "accidentally" pass through a cell during the solution, without really *using* it. But for those cases, if needed, I'll make an exception and count/bookkeep it in a different way.

**Note:** Another thing that really helps with this, are the "dynamic objectives". Hungry people want to go to the supermarket. As long as I place at least 1 hungry person in the level, the supermarket *will* be used in the solution. That's a certainty.

### The results (for now)

More checks will be added and finetuned as we go, but here are the results for now.

The level below has only one optimal solution, but several solutions that are just *one* move longer. (I just realized I never explained what the "h" square does. It splits your people, so that it only sends *healthy* people to that square. More on that later.)

\<PLAATJE: locktown -- simulation checks>

Yes, it's still not very hard to solve, but it's not obvious either. As we add more special elements, rules and locations, these checks will still help us get good puzzles.

## The next few elements

To get the result above, the simulation threw away \~30 puzzles (as they didn't pass the checks) and took 3 seconds. For something so simple, I find that a lot of wasted time and energy.

(Believe me: once we start growing this game, it's going to be hard to keep the simulation within a reasonable time frame. One of my other games could give me 10 good puzzles in a few seconds at the start, but took half an hour to find several puzzles for the last few.)

That's no surprise -- we didn't solve the issue of "too many boards"!

(Yes, the fact that hospitals "block" healthy people reduces your moves quite a bit, but too little by far.)

The next element should be something that limits options severely, but feels like a "logical" next step.

These are the most basic elements I could think of, which manipulate the sending/receiving of people in some logical way:

-   Reverse hospital = only healthy people can enter, they immediately get infected.

-   Unlocker = locked and empty, until somebody unlocks it

-   Locker = accessible, until it's empty, then it locks itself for good

-   Bubble = can only go here if there are *no other people*

-   Crowdy = can only go here if there are already *other people*

-   Good splitter = *splits* the group; healthy people go, infected people stay

-   Bad splitter = *splits* the group reverse; infected people go, healthy people stay

### Realization #1: Twin locations

You see what I see? All of these elements have a *twin*.

Everything can be inverted: if something only accepts healthy people, well, we can also make a location that only accepts infected people! Something splits healthy people from the group? Well, something else could split infected people from the group!

This made me think. This pattern will probably be present throughout everything. I can save a *lot* of time (and code/bugs/space) if I only define the *first version* of each location, and then add a *switch* to flip its function if necessary.

Like this: I define the "Unlocker", which goes out of quarantine when visited. However, if the unlocker has "twin = true", it reverses everything. It goes into quarantine when left.

It's a bit of work now, but I'm sure I'll be thanking myself down the road.

### Realization #2: Quarantine

Yes, I knew from the start that the concept of *quarantine* would be important, but I didn't know how.

I still don't, but at least I have some ideas.

When creating the *unlocker*, I thought it would be confusing to have "locked" and "quarantine" be different concepts, so I made them the same. The Unlocker simply starts "in quarantine".

I then realized it was useless if *anyone* could unlock it. "Hey, let's move some infected people to that quarantined city, that should open the gates!"

A rule was needed. Something flexible, but logical and easy to calculate.

That rule became:

> **To remove a quarantine, you must send *more healthy than infected people to it* (in the same turn).**

I'm hopeful. This rule is logical (you need to proof that things are getting better for a quarantine to be lifted), yet very flexible and able to be used creatively. But we'll see how it goes.

Of course, that means you also need a rule to get *into* quarantine. Well, it seems logical to use the opposite:

> **To start a quarantine, you must send *fewer healthy than infected people* (in the same turn)**

And because I have these general rules, I can now *start* many locations in quarantine, and they will close down during the game. Reduced possibilities!

**Note:** a logical alternative would be to count the current people on the location, *not* whatever is coming in/going out. I don't know what will work best. Maybe I'll do both, using some special locations.

### Realization #3: Many, many people

I thought: hmm, a maximum of 9 people per location, that would be good right? Not too many, not too little, you can display them in a neat 3x3 grid, ...

No. Way too many people! A "small" board already has 5 or 6 locations. If each of them can hold 9 people, there's a possibility of displaying more than *fifty* people on the board!

And levels will only get bigger as we go. When I tried a slightly bigger board, I already felt completely *overwhelmed* by the number of people and options.

So, I reduced the maximum to **4 people per location**. (Which is still a neat 2x2 grid :p) During the game, I might add *people* or *locations* that increase or decrease this maximum. But this will be the general rule (for now).

### The current game

With all rules above implemented, this was the first puzzle I got from the computer:

\<PLAATJE: locktown -- bigger field, lower max>

(The "b2" square is the *twin* of the hospital. So it only accepts healthy people, and will infect them all.)

I was actually stumped for a second, trying a handful of things ... before just looking at the solution :p Turns out it wasn't *that* hard, yet it's a good sign when a computer can fool you with a randomly generated puzzle.

*However,* it did take 30 seconds to find it. So still some work to do in that department.

For now, I'll implement all ideas I described before, and probably quite some more. At this stage, it's always: "**throw everything against the wall and see what sticks"**. I can't predict which elements are going to be the most interesting or have the most potential.

So there'll be a short intermezzo in which I make the game look nicer, fix bugs, and implements tons of mechanics ... and then I'll report the results.

## A slight makeover

In the images so far, you've seen some quick sketches of buildings and people. The people were *above* the building (in a neat grid), and if something went into quarantine, a lock icon appeared.

Well, that was a visual mess. It didn't look good, people were sometimes hard to see, locks were hard to miss. Now that I had a clearer picture of what the game would be, I could create a better design.

-   Step 1: people are now *below* the locations, spread in a circle around it.

-   Step 2: buildings are now *round* so they fit snugly on the locations, and they stick out a bit more at the top. (Because that room was freed up now that people weren't displayed there.)

-   Step 3: when something goes into quarantine, the whole building becomes grayscale and gets a lock-icon-pattern on top of it.

-   (Step 4: there are some nice animations to make it feel better.)

Here's an image of the current design:

\<PLAATJE: locktown -- new design>

(You can clearly see how the round hospital looks way better than the old, rectangular supermarket.)

In the future, the *connections* will surely be updated and become fancy, and the "slots" in which the people sit should be nicer. And I'll need to check if people remain clearly distinguishable on small screens.

But for now, this looks way cleaner and less overwhelming.

## A slight cleanup

I had to clean up the code and rewrite some of the core systems.

It's currently looping through all people per location *multiple times*, *every move*. Why? Because I constantly need different statistics. How many hungry people are there? How many sick? Sick to healthy ratio? Are there people with other special needs?

That is a huge waste of time and space! A large part of that data can simply be reused, if I'm smart.

It took some tries, but this seems to be the best system:

For each cell in the game ...

-   Count *statistics*: how many of each type are in this cell? And how many are healthy/infected/immune?

-   Evaluate the *location*: for example, a supermarket simply turns all hungry people into regular people. Therefore, it the statistics tell me there are *no* hungry people, I can immediately exit this function!

-   Evaluate the *people*: some people do stuff *regardless* of the location, which is what I do here.

-   Evaluate *new infections*: if there are sick people *and* healthy people to infect, this function goes through and infects new people. Again: because I have those statistics, I can make a quick exit out of this function.

-   Lastly, add the final statistics to the *global* count.

### Why did I choose this system?

Infections spread every turn. Similarly, I need to know a lot of statistics every turn to determine if someone won (or lost) the game, such as "the total number of infected people on the board".

*Whatever happens*, I'll always need to loop through *all cells* to handle infections.

Calculating these statistics beforehand then allows us to *very quickly* determine if we need to do something at a certain location. Because on most turns, most locations will do *nothing*, so I don't want to waste precious computing power there.

**Additionally**, it provides a foolproof step-by-step plan. As a player, you know that *locations* are always evaluated before *people*. That should reduce any confusion or misunderstandings.

**Is this perfect?**

No.

In most cases, only the cells we moved *from* and *to* will see significant changes. All the other cells don't change, so we could just leave those alone.

Thus, it *might* be faster to save some "mustUpdate" flag on each cell, and only update when that is triggered. But that also complicates code and leads to invisible bugs, in my experience, so I'm not doing that (for now).

**What are the results?**

It's way faster and the code is way simpler! (Although I'll probably still end up implementing that "mustUpdate" flag thing, as it will improve it even more.)

Also, I fixed a few (stupid) issues:

-   Hospitals can't go into quarantine anymore. Why? Because they don't accept healthy people, so if they start in quarantine, they will never get out and you can't use them! (Without this rule, the simulation would take 10 minutes to randomly find a level that *did* have a solution.)

-   There are many "building" + "person" combos in this game. For example: supermarket + hungry person. School + kid. Beach + tourist. As such, code could be simplified a lot by writing these combos in a list and using that for everything. (Instead of hardcoding all of these relations, buried in the details of the simulation.)

**But I made some more observations**

Whenever I required the puzzles to have more than 4-5 moves, it took at least a few minutes to find even a *single* puzzle. And they weren't even that interesting.

Apparently, the current mechanics only create puzzles that are solvable with 2 or 3 moves. That's not a good sign.

Why does this happen? I can see a few reasons:

-   You always move *all* people. So, the solution for each puzzle was basically "gather all infected people in one spot, then take a step towards a hospital"

-   Similarly, all connections are the same, and locations work on *all* people on it.

-   The hexagon grid might be working against us. Each location has, in most cases, only *two* neighbors. That makes any solution quite obvious, as you don't have anywhere else to go.

How to solve this?

-   Introduce that "splitter" earlier on, and many squares like it.

-   Make locations time or space dependent. For example: they don't heal *everyone* immediately, they heal *one person each turn*.

-   Give connections special properties and make them "remember" what happened. For example: a one-way connection which breaks down if an infected person travels over it.

-   Introduce certain types of traffic (like airports) early on, which allow travelling greater distances or between unconnected nodes.

Additionally, I've noticed that good puzzles ( = the ones which pass the checks I explained earlier) usually have a *low* number of possibilities.

How can we use this?

-   Each turn, count how many possible *moves* there are. If this is *too big*, throw away the current puzzle. It's most likely too "open" and not good. (Conversely, if this is *too small*, throw it away. The solution is too obvious.)

-   Reduce the number of connections, yet increase the number of "special squares" that can block you.

**However**, when I looked into it, I saw that a *huge* number of puzzles terminate immediately (or after a few moves) because they're completely locked. You just cannot move anywhere. That's where the computer wastes a lot of time.

Can we make the computer choose more *intelligent*/*promising* setups?

The biggest issue I can see is: hospitals are too good at blocking, given their value.

-   Perhaps *they* should be the splitter as well?

    -   "Only infected people go to the hospital, get healed instantly."

    -   "It only accepts as many as it can take; the rest stays."

-   Or they should be *less valuable*? (Only healing *one person* each turn?)

As you can see, creating puzzle games is *hard* :p I'm trying all sorts of things, debugging, experimenting, looking into the results, trying to find the **one golden rule** that will make this game work (from the beginning).

Usually, that comes from seeing a pattern. Currently, I see that "splitting the group" is becoming more important every time, and that "healing people" is *too valuable* to place on a single location ( = the hospital) and should be spread amongst several different mechanics.

## Version 2.0: what really matters

Okay, so, I had a week to think about this and try new things. (I'm currently only working on this game on the weekends.)

All of my ideas didn't really work.

Whatever I tried; puzzles were ... *okay*. But nothing that really challenged me *or* provided a good foundation for the rest of the game.

Then I realized: but wait a minute, *curing* people (via a hospital) is not where the *problem* lies in a pandemic. Yes, a rule like "everyone on a hospital is cured!" is simple and immediately understandable, but it actually goes *against* the whole concept of the game.

### The Problems with a Pandemic

Because the problems in a pandemic come from the fact that *there is no cure* or *not everyone can be cured (in time)*.

Here's a list I made about the real issues with spreading viruses:

-   It's not easy to **detect whether someone is infected**.

-   People **take time to recover**.

    -   During that long time, they can infect others.

    -   They may also be *incapacitated*, preventing them from doing their jobs.

-   People **will travel**.

    -   Some are *essential*. (Kids need to go to school, people still need food, etc.)

    -   Others abuse their *freedom*. (You might forbid it or warn against it, but some people will still go on a holiday or simply not follow "the rules".)

-   Businesses and **economy need to** **stay healthy**. (If nobody comes to your shop anymore, it closes. If nobody spends money anymore, the economy collapses.)

-   Most importantly, **old or "unfit" people will die** and there's a **limit on hospital capacity**.

Well ... all these things are *not* in the game currently. I think that's where the problem lies.

### Turning Problems into Puzzles

How do we put these things into the game?

-   **Testing:** People start off untested. You can't see if they're infected or not, which also changes how e.g. a splitter would split the group. To test them, you can send them to a special location, or send a doctor their way.

-   **Recovery:**

    -   When people are infected, they start a counter. After a few turns, when the counter reaches 0, they automatically heal.

    -   A general rule: whenever someone is infected, they can *not* execute their special power. (For example, a doctor who'd normally heal people, cannot do so if they are sick themselves.)

    -   Alternatively, some infected people are too sick to travel.

-   **Travel:**

    -   Part 1 was, sorta, already solved. Hungry people need to go to the supermarket, otherwise you fail. The same is true for kids going to school, etc.

    -   Part 2 is more work. I can randomly convert connections to "(rail)roads", which will automatically move people at the end of each turn. But there's a larger problem here, which I'll talk about soon.

-   **Economy:** this is a tough one. I think it requires a larger system.

    -   When people visit a shop/business/holiday destination, it generates a "money person".

    -   When a money person *arrives* at such a location, it is *spent*. (Alternatively, it stays there, but cannot move or do anything anymore.)

    -   You fail the puzzle if any location must close down because it hasn't received money.

-   **Dying:** I'm afraid this will have to go into the game.

    -   Old people will immediately die when infected, causing you to lose the puzzle.

    -   Alternatively, there might be a "quota", but that could lead to a very harsh game. (Like: "solve the puzzle, no more than 5 people may die!" But it *is* probably better game-wise.)

    -   Alternatively, they might get a counter as well, and you can *save* them by reaching a hospital before the counter reaches 0. (This reframes the game into *saving* people, a more positive message.)

### Why Puzzle Travel is Annoying

This problem has been bugging me since the start of the project:

> **How to determine *order* (or *direction*) on a hexagon grid?**

People can't travel randomly. As a player, you must be able to (easily) predict where people are going to go.

But on a grid like this, there's no sense of "direction". Each location has multiple two-way routes, how can you determine which one they'll take?

There's also no sense of "order". When evaluating locations, where do we start? In what order do we evaluate them?

This is an imperfect solution, but the best I could come up with. (To help with this, I'll probably also add some hints and tooltips in the interface.)

-   **Location Order:** locations are evaluated top-left to bottom-right. (You start at the top-left, go through that *row*, then go to the next *row*, until you're at the end.)

-   **Route Order:** routes are evaluated *like a clock*. (You start at the top, then go clockwise until you find the first valid route.)

That word, *valid route*, should be important. I don't want all people travelling over all routes -- it's hard to simulate (for both my code and the player) and doesn't lead to real puzzles.

Instead, I might say something like this:

-   Travelers will use train routes.

-   Young people will only travel a route if the end destination *also* has young people.

This reduces the possibilities to a sensible level. It also prevents *everyone* from moving towards the right the whole game, because they simply pick the first connection they find :p

### The Stages of a Pandemic

Writing down these mechanics, and remembering the events from the current Corona pandemic, I realized there are *stages* that you go through:

-   **Phase 1: First detection**. Not many people have it, but it's also invisible when people *do* have it. You need to do a lot of testing just to *get information*.

-   **Phase 2: Priorities**. You try to prioritize essential things (such as keeping both economy and old people alive). Basically, life needs to keep going.

-   **Phase 3: Control**. You can test people, but not cure them. As such, you try to *control* how the virus spreads, to make sure it doesn't get out of hand.

-   **Phase 4: Heal**. You can now cure people. So you try to completely eradicate the virus as quickly as possible.

Perhaps it's a good idea to **literally put these stages into the game**. At each stage, you learn the new big mechanic, and the objective changes.

For example, the first world is all about *testing*. You need to test all infected people *and* make sure they don't infect anyone else in the process. *That's* *your objective*, instead of trying to cure everyone.

### Breaking the first rule of puzzles

In general, **all information should be visible** in puzzles. This is a good rule! You don't want to surprise players with hidden elements, or random dice rolls, that are essential to solving the level. (Unless you're one of those evil developers that uses these tricks to sell more stuff in-game ... )

However ... the *testing* mechanic will break that first rule. Why? An untested person will show up as "healthy". When a level starts, you literally *do not know* who is infected and who isn't. It will take a few tries to find out the actual (full) information of the level.

Still, I think it's worth a try. It might lead to very interesting results. And it models the problem of virus spread really well: it's a complex puzzle *without* full information the first time you try to solve it.

### Some last notes

Pfew, this is going to be a lot of work to get a version 2! But hopefully, that will actually make the game work and the puzzles really interesting. (I have high hopes.)

However, all those rules above are a bit much. I'd like to have a way to constantly *remind* players of them, to make them *visible*.

I think I can do that via **virus properties.** Before each simulation, the computer can decide a few random properties of the virus. (Such as: max people per location, speed of spreading, etc.) These are displayed on the screen with a clear icon + clickable for extra explanation.

Hopefully, this hits two birds with the same stone: there can be multiple dynamic/flexible viruses in the game *and* players don't need to memorize everything.

## And, does it work?

Yes! I've implemented the most basic (and easy) mechanics I explained above, and puzzles are already much better.

For example, I introduced the "vulnerable person". When they are infected, a countdown starts ( = just a number on their sprite). If it reaches 0, they die and you lose. The only way to save them, is to bring them to a hospital in time.

When this is enabled, the computer is able to find five interesting and challenging puzzles within at most 30 seconds.

The "testing" mechanic also yields interesting results: at the start of each level, you *don't know* who is infected, and figuring that out is also part of the puzzle. Makes it feel somewhat realistic and stressful: "okay, we're moving these people around, but what if ... *that* person at the other side is secretly infected?!"

**Side note:** I've also implemented those *virus properties*, an *undo system*, a *campaign system* which allows me to load in worlds and click levels to play them, and support for people becoming *immune*.

The hardest part was actually the countdown timer on vulnerable people. (Or when people heal automatically over time.) I'd implemented this in two different ways (between *simulation* and actual *game*), to use whatever was fastest in each language.

That was a mistake. It led to many inconsistencies, such as the simulation claiming that a person was NOT healed yet at turn 5, whilst the game claimed they were JUST healed. It was a mess. Now I use an identical system in both programs, which also works nicely with the undo system.

### Now the hard part: auto-traveling

Here's the plan:

-   Randomly, connections become "railroads"

-   Some people are "travelers". They will automatically travel at the end of the turn, *if* there is a suitable railroad at their location.

-   They evaluate railroads *in clockwise order* and pick the *first one that fits*.

To make this efficient, I need to:

-   Go through all locations *before* we start the simulation.

-   Check their connections and *sort* them based on *angle*. (This way, whenever we iterate through this list, we will *always* go clockwise and check connections in the right order.)

-   In the game itself, go through this list and find the first connection that is available. (This means that the end node must have the capacity to hold this new traveler.)

-   Mark the traveler as "done", so they don't travel again this turn.

I'm not sure about that last bullet point. The alternative -- allowing people to travel multiple times, if it accidentally happens -- might be even more interesting.

**TO DO:** Implement this

## The Winning Mechanics

I've done many simulations, and found a few things that are interesting:

-   Those basic quarantine rules seem to work nicely!

-   The *splitters* are cool. They can lead to fun puzzles, which usually take a "Eureka" moment to solve.

-   The secondary objectives are nice, such as "hungry people must visit a supermarket"

-   The *maximum people cap* per location actually plays a huge role. Things that can increase or decrease this maximum should be introduced early.

-   Because only *hospitals* can cure people, all puzzles are a bit of a "one way route". (See how fast you can get everyone to a hospital!) I should introduce a few mechanics early on that can, somehow, also reduce infections.

-   The idea of each location having a "twin" can be confusing if used incorrectly. I should perhaps add clear icons/markers to show you *which* version you're dealing with. Additionally, adding someone that can *switch* a location to its twin is interesting (and quite challenging to use ...)!

So we're looking at the following progression:

-   Explain base game (move people each turn, max 4 people per location)

-   Explain hospital (heals, you win when everybody healthy)

-   Explain infection rule (end of each turn, each sick person infects a healthy one at the same location)

-   Explain some simple special locations from the list (just to spice things up without getting complex), plant the first seed about "twin locations"

-   Explain the quarantine rule

-   Explain the splitter

-   Explain some elements that switch twins

-   Explain some elements that play with the max people cap

-   Explain the first secondary objective (probably hungry people -\> supermarket)

-   ... we'll see from there on out

The real issue for now is: how do I make sure players don't forget these rules?

For example, the number "4" as the people maximum is quite ... random to a new player. Is there some way to remind them of that at all times?

And those quarantine rules are even harder to visualize succinctly. Maybe I should make small images for these "main rules" which can be toggled on/off. And of course: *loads of feedback* for the player.

**TO DO: CONTINUE WRITING, FILL OUT**

Lastly, I need a better way to display who is "infected" or not. Currently, sick people just *flash red*. Really hard to see, doesn't even look that good. Ideas?

-   Overlay the person with "dots", like a rash.

-   Add stripes/spikes on the sides, perhaps even animated.

-   Give infected people a *distinct* discoloring or unique visual element. (For example, infected people always have a gradient from top to bottom.)

-   Color their slot differently. (Slot = the rectangle in which they sit at their location.)
