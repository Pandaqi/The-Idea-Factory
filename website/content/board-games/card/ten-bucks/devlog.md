
Welcome to the devlog ("developer diary") for my game [Ten Bucks](https://pandaqi.com/ten-bucks/). This article will talk about the process of designing that game, any problems I encountered, why I made certain decisions, and hopefully other interesting stories.

## What's the idea?

This game is a special one. It was made in honor of my deceased brother.

When he suddenly died (most likely from a heart attack while cycling), now almost ten years ago, I already tried to make a game for him. One of his favorite responses to, well, basically anything was to say "ten bucks" (or "that'll cost you ten bucks"). It was silly, it didn't mean anything, but it was just a recurring joke that he tried to say that whenever it was remotely applicable. ("Hey, could you help lift these boxes?" "For ten bucks I will.")

Anyway, my attempt at the time was ... not great. I barely had any practice making board games. I was trying to just continue life and finish my bachelor's degree, and, as usual, my hyperactive brain overcomplicated stuff to the point the game had 10 pages of rules and was simply unplayable.

The basic idea was solid though. I wrote down some general notes, then left it alone.

Until suddenly, out of nowhere, I woke up and my brain remembered this. Maybe because, in a month, the anniversary of his death was coming up. Maybe because I was simply creating a lot of games at the time. I don't know, but I woke up with some pressing thoughts about how to make a _good_ game called "Ten Bucks".

The only thing that I kept from that old game, really, was the core idea of "everything revolves around 10 dollars". You win once you have 10 dollars (or more). Special actions trigger when there's 10 dollars on the table. Etcetera.

I went for a run (as I always do in the morning), and by the time I got back, the rules had fully formed in my head.

* The only material is **dollar bills** (with different values).
* On your turn, you **play a bill** (to the table, grouped/stacked by value), then **claim** (optional, if allowed)
* You win once you've claimed 10 dollar (or more).
* Of course, this requires a few more rules that determine what you're allowed to claim:
  * You can't claim a number you claimed before NOR the one you played this turn. (So, if you claimed the stack of 2-dollar bills earlier, you can never claim that stack from the table again. Similarly, if you played your 2-dollar bill this turn, you can't claim that stack from the table.)
  * If a stack ever becomes 10(+) dollar on its own, you must force someone else to claim immediately.
  * Once you claim something, you must wait until _all other players claimed too_, before you're allowed to do so again.

Some parts perhaps need an explanation here.

* Why the "forcing"? This is necessary to break deadlocks and prevent people from just _never_ claiming and thus making the game stale. (Because, remember, you can't claim again until everyone else has done so.) By placing this special power on _large stacks_ (worth 10 on its own), players are still incentivized to play high numbers that might help other players later.
* The "can't claim the stack to which you played" is just more interesting and prevents abusing moves like "wow I made this one stack worth 10, now I claim it, done, won the game!"
* The "must wait until everyone else has claimed too" is just the simplest way to ensure games have a good average length. Whatever the other rules of the game, whatever the (bad) luck of hand cards, nobody can go on a claiming spree and win the game in two moves.

That's it. I wrote it down, I thought "huh, should be a good game despite the tiny ruleset", and went on with life.

A few days later, I finally had time to cut out some paper "dollar bills" and actually test the game.

## Paper Prototyping

### Attempt 1: Not practical

Quite quickly, I realized that the third rule was _hard to track_. You had to _remember_ if everyone else had claimed in the meantime. I misjudged this because my brain wrongly assumed that you could just count piles. If you claimed your second stack, then you could just wait until _everyone else_ claimed their second stack, and you could claim again, right?

Well, no, of course not. When you claimed your second, some other players might _also_ already be on their second stack, while others are not. It's just messy and hard to track.

So I _simplified_ that third rule to a different one. It achieves roughly the same, but is actually easy to work with.

> You can never be more than 1 stack ahead of the player with the least stacks.

To know if you're allowed to claim, you merely have to look at the "weakest" player. If they haven't claimed any money yet, and you already have, then too bad---can't claim yet.

### Attempt 2: Getting somewhere

That second rule was good and essential, but near impossible to achieve now. It's really hard to get a single stack (such as the 1-dollar bills) to a value of 10.

Instead, I changed the value to just 5. Whenever you push a stack to value 5 (or higher, in total), you force someone to claim.

Then, as I played, I realized some major ramifications of this that I should use. 

* Can you force _yourself_? If so, this move would allow you to claim _twice_, if you plan it right.
* Does the other person claim _before_ or _after_ you? Both are useful in different situations.

As I played some quick games against myself, I noticed that restricting this didn't achieve anything. Allowing all of that was more strategic and fun.

And so, I broke open the rule to allow all of that.

> If you created a stack of value 5(+), force any player to claim. This can be done before or after your own claim. This can be yourself, but you must pick someone who _can_ claim (if possible).

This made the rule far more valuable. A player who would purposely never claim could now be _forced_ to do so. And if you played it right, this would be a _disadvantage_ to them (such as giving them a very bad stack as their only option). If you did _not_ play it right, you might foolishly hand someone else the _win_ this way.

For example, as I played against myself, I discovered a good strategy.

* Try to delay claiming as much as possible, until you're the "weakest player".
* This means that, if you can create a "forced claim" on your turn (in the right conditions) ... you can claim _twice_ in that same turn.
* Again, if played right, this is a strong combo that hands you the win.

The thing here, of course, is that this is not a guarantee. You have to play your cards right. And if you have really high cards only, you _can't_ use this strategy. (Because you'd be giving the highest cards to the other players in that turn, claiming the lowest yourself, which is not enough to reach 10 dollar.)

Also, I chose random amounts for the dollars when I made the first prototype. This led to a few games where players ran out of cards before the game was over. I should prevent this by simply increasing the material, but I still added the following rule. Because we need _some_ fail-safe for that, and this was an interesting action.

> If your cards run out (rare), take one of your claimed stacks into your hand and play on.

### Attempt #3: Finetuning material

Such a tight game like this _really_ needs finetuned material. I can't just give players a BUNCH of dollar bills (values 1--5) and use that same material for all player counts.

On low player counts, this would make it far too easy to quickly get 10 dollars. On really high player counts, this might still not be enough.

Over the years, though, I've learned to be wary of _any_ extra setup steps. A long or complicated setup just makes people turn away from any game. It makes them unlikely to start one _because_ of that extra work. (And if they don't remember correctly, they might do it wrong and ruin the game for themselves.)

As such, I discarded any more complicated ideas for the material, such as ...

* Adding an icon to all the cards: a player icon and a number. If you play with 4 players, for example, only include cards where the icon shows 4 or lower.
  * This is a fine idea, used by many games. But it still requires going through the entire deck each time and picking out cards based on these tiny icons. While, as you play the game, those icons are meaningless and provide visual noise.
* A fixed _table_ in the rulebook that tells you exactly what to include.
  * This means all players need the rulebook at hand. And it, again, means going through the entire deck in a tedious way.

Instead, the absolute simplest setup I could imagine was the following.

> Include the **numbers 1** up to and including your **number of players**. Shuffle, deal fairly, place any leftovers faceup on the table.

So, with 3 players, you only use dollar bills 1, 2 and 3. With 6 players, you use 1--6.

This is a great one-liner setup ... but not necessarily functional with the current game.

I had to play around with how many bills we needed of each number, until I got to the situation where players had a good hand of options and would always be able to get enough money.

I started with the rule of thumb of "add each number as many times as needed to reach 10 (or slightly higher)". So, simplest example, the 1-dollar bill would be in the game 10 times. This was a good starting point, but I had to go a bit _higher_ for all numbers to actually make the game feel nicer.

After some more cutting into paper, I ended up with ...

* **1-dollar**: 10x
* **2-dollar**: 8x
* **3-dollar**: 6x
* **4-dollar**: 4x
* **5-dollar**: 2x
* **6-dollar**: 2x

You might notice that the total number of cards is now perfectly divisible by the number of players. For example, with 5 players you have 10+8+6+4+2 = 30 cards. Which is 6 per player, no leftovers. And 6 cards in your hand is a nice amount---not too many, not too few.

I still kept the setup the same, because expansions/variants might mess with this and create leftovers after dealing.

### Attempt #4: More information

Again, with such a tight game and lots of interaction, you really want _more_ knowledge of each other's cards. This makes it less random. This allows you to combat a bad hand (or a really good hand by another player).

I considered playing with your hand open, completely, from the start. But this isn't fun. It just makes the game slow and too thinky/analysis paralysis, as you can basically calculate who will win from turn 1 (if you wanted).

I considered starting all players with the exact _same_ hand. But that also wasn't fun. It just removed any variety from the game, while complicating setup and worsening first-turn advantage.

Instead, I looked at my handful of rules and saw one more opening where I could squeeze in a rule.

> After claiming a stack, permanently REVEAL all your dollar bills of that value.

This obviously gives information: once you claimed the 2-dollar stack, all your 2-dollar cards in your hand are now exposed/known to others.

But it doesn't give away too much. It's voluntary---you choose to take this penalty because you want the money. And it adds even _more_ strategy.

When testing against myself, for example, I noticed a strategy like the following.

* Get rid of all your dollars in one value. (This is, of course, easiest if you pick the type you have the least anyway.)
* Now you can claim that ... without having to reveal information.
* Which can be a great advantage as you go into the endgame.

But, again, this isn't a 100% surefire winning strategy. It depends on your cards if this is even possible. Others might disrupt it by forcing you to claim, if they are onto you. That's what makes it a good rule, I believe.

And then I was satisfied! The rules stayed extremely simple, but the game now works on all player counts. There are enough strategic decisions or plays to pull off, no matter your hand or player count. 

At the same time, such basic rules obviously lead to a somewhat basic game. It's just a very tiny deck of dollar bills with a few different values! I was tempted to add some of my fun ideas to the base game, such as a _wildcard dollar_ (place on any stack, takes over value).

I still decided to keep the base game simple, though. I know from experience that this makes it _so much easier_ to explain it, get it to the table, get people to try it out. Then, once you played a game (~5 minutes) and people like it, I simply recommend you to add an expansion/variant.

### The expansions/variants

These expansions, though, require special actions or icons on dollars. I decided to already add these icons to the _base game_. (You simply ignore them all when you first start playing.) If I only add them to the expansion, they'd appear far too little, because the total material for the game is so incredibly low. Also, this allows you to try the expansions _without_ needing to grab/print more material!

The ideas for my expansions usually arrive during prototyping. I keep thinking "I would like to do X now". (For example: "I know that player has a 5, I would like to be able to steal it somehow") I write down all those thoughts, then find simple cards/rules/mechanics to _make it possible_ in the expansions.

This led to the following set of ideas.

* The **wildcard** (as stated) dollar. (This is just always a nice idea. It adds way more variety and choice to a game like this, without adding complicated rules. It also removes some of the rigidness of the base game, as this dollar is essentially any number you need to circumvent the rules a bit :p)
* The **0 dollar**: you can always claim it, and if anyone manages to get 10 of them, they instantly win. (So this is like an easy risk/reward addition. If you go for these, you'll have 0 money from them. But if you go hard enough, and get a bit lucky, you can suddenly win the game.)
  * As an extension of this, I can also add something like a negative dollar (-1) or some really high numbers. But those would be tiny additions, not an expansion on their own.
* **Special Actions**: if played, or this card is at the top of a stack (when claimed), the action triggers. This can be things like stealing cards, viewing someone's hand, taking another turn immediately, etcetera.
* **Shopping**: in a game about money, it makes sense if you could actually _use_ that money.
  * This might mean there are some "shop" or "product" tiles on the table. They show a price and what you get, and instead of claiming, players can actually _pay_ claimed money to get that.
  * Or it might be between players. For example, you can buy cards/stacks from each other by negotiating or by giving them a hand card of equal value.
  * (As you see, at time of writing this final idea was most fuzzy, as it only came to me as I wrote the devlog.)

All of these would just add a handful of extra dollar bills, which could be thrown into _any_ game (any player count, any other expansions). Did I mention I want setup and rules to be absolutely as simple as possible? :p

I didn't "paper prototype" all of this anymore. Only the wildcard and 0 dollar, as those were easy to do, and felt most likely to be tried by other players. The others require a bit more investigation and illustration to get going, and at that point it's quicker for me to just make it all and let the computer generate some nicer cards.

So let's do that!

## Let's make that!


## Conclusion


It's also interesting to see the growth here. To see the immense difference in quality, simplicity, skill when it comes to designing games compared to ten years ago. This, of course, is a rewarding feeling. Even if it often doesn't feel like it---when I'm stuck with another idea that doesn't seem to work out---you _do_ grow a lot by simply making more stuff.

This game has a rulebook of half a page, and material (to cut out) that fits on 3 pages. That old attempt had 10 pages of rules and a near infinite number of pages to print and cut out :p And yet, this game ("Ten Bucks") is _by far_ the better game. Teachable in 30 seconds, quick rounds, supports lots of player counts, easy to carry with you whenever, etcetera.

I briefly considered folding this into the _Domino Diaries_ project, because the dollar bills are domino-shaped. It would fit right in. But I decided against that, because it's such a special game to me. This, I guess, is my gift to my deceased brother. The best one I can make, and I hope people in my family---and outside it---get a lot of pleasure out of what started as a really silly idea.