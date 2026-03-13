# Devlog: The Coop Chocolaterie

*Lala*.

## Lesson 1: Try the simplest thing first

When I had the idea for this game, I was certain I needed a *convoluted neural network*.

What's that? It's a type of neural network specialized in recognizing visual patterns, which has been proven to work extremely well on things such as recognizing symbols.

Why did I need it? Obviously, the game had to support at least 20+ interesting symbols! With great accuracy! So I wouldn't settle for any lesser system.

However ... I didn't fully understand how it worked and there were no libraries/frameworks for my game engine. The more I read about it, the more I realized this would take *a lot of work* to implement, train, and the optimize for performance. Especially if the game had to run on mobile.

*That's the reason I shelved this idea at that time.*

But that was the wrong move. When I visited the idea later, it took me only 30 minutes of Googling to find a set of algorithms that were perfectly adequate for my pattern recognition.

(These are the "dollar family of algorithms" of which I ended up using the most performant: <http://depts.washington.edu/acelab/proj/dollar/qdollar.html>)

I spent a few hours implementing it, drawing some basic template shapes, testing it ... and it worked *perfectly fine.* The algorithm isn't perfect, but it can easily handle loads of shapes if they are distinct enough.

That's the lesson here: **don't think "I will *certainly* need complex system X and requirement Y!"** Certainly don't use it as a reason to stop working on something.

Just try the simplest, dumbest, most obvious thing first. See if it works. In most cases, it will turn out fine. If not, try the next dumbest thing.

**(Bonus tip:** squares and circles are *really similar* in the eyes of a computer :p I ended up scrapping the square symbol and replacing it with an elongated rectangle, otherwise I just couldn't get accurate results.)

(**Bonus tip:** I implemented the \$1 algorithm first, for unistrokes. It was slightly simpler, and worked fine, but it takes the *order* of strokes into account. This means I would have to manually input each symbol in many different ways to make the game playable, which reduces performance and is a lot of work.

That's why I switched to \$Q, which uses a point cloud and does not care about order/starting point.)

## Lesson 2: Test on your worst device first

After implementing the algorithm, I was happy. I drew a few circles, I drew a few lines and stars, and they were recognized correctly 95% of the time.

I already started work on the rest of the game, the art, other systems, more symbols.

But then I tested it on my smartphone, just to see if touch drawing worked.

And it was *laggy*, oh so laggy.

Apparently, it took *half a second* to recognize the shape! (On the computer, it took \~100 ms, which also isn't that great.)

**Step 1:** use multiple threads. After some fiddling around, the recognition code now runs on a separate thread, which means that the main game isn't locked up and won't lag.

But that doesn't remove the *0.5s delay* between drawing something and the result. How do we solve that?

**Step 2:** use simpler symbols and fewer sample points. At first, I *drew* the shapes into my library. But a perfect square only needs four points of course, which is simpler and quicker, so I changed all those basic shapes.

Additionally, when drawing, it only registers a new point if it's significantly different ( = far away) from the previous point.

Well, it makes my code (and drawings) a bit neater ... but doesn't solve the problem.

**Step 3:** perfect the code. Use all the tricks in the book to make it faster! Cache variables, use smarter calculations, predefine the size of arrays, etcetera.

That shaved only 10-20 ms off. Disappointing.

Which leads me to the next lesson ...

## Lesson 3: Optimization is about the big things

Optimization is usually about the big things, not the small code tricks and math wizardry.

I spent all that time to perfect the code, whilst I should have been looking at the configuration of the recognizer.

It was still at the defaults, copied from the example code on the website.

Those defaults had a *huge* size for the caching of symbols!

(The algorithm works by saving symbols as a low-resolution grid and matching *those* using nearest-neighbor like tactics.)

**Step 4:** Once I cut that in half, it only took 100ms on mobile, and 20-40ms on desktop. And there was no noticeable loss of accuracy.

Literally changing a value from **64** to **32** led to this improvement :p

(**Step 4.5:** It checks templates in order, exiting early if it already found something better. So I can get great improvements by adding the *most-used symbols* at the top of the list.)

But we can't stop here. Not yet!

At this point, I noticed that *rotations* of symbols were *not* considered. It only worked properly if you drew the symbol in the same rotation as it was in the library.

(I thought rotations would work as well, from the demo on the website. But it turns out I just got lucky and it randomly guessed the right symbol ten times, even when rotated. That's on me. I should check these things more thoroughly before implementing an algorithm :p)

But that's no good!

It's a chaotic game, playable on a mobile, where you can look at the screen (and draw) from any side. The symbols need to be recognized *with whatever orientation they are drawn*, *however crudely they are drawn*.

**Step 5:** For each shape, also save 8 *rotations* in the library. (North, Northeast, East, ...)

## Lesson 4: Design your game around your obstacles

Of course, this made the algorithm a bit *slower* again. (The number of symbols to check literally octupled!)

I saw no clear way to solve this.

So I used a different strategy: **design the game around this functionality.**

**Design Decision #1:** What advantage does this system have? Well, it allows me to *know* the orientation of a symbol. If you drew a triangle, I now automatically know *which way the triangle is pointing*.

I can use that. For example: you can **move** something to the left, by drawing a triangle/arrow **pointing to the left**.

**Design Decision #2:** The algorithm allows for **multi stroke gestures**! If I know a player has drawn two strokes, I can already filter loads of symbols (which have 1 stroke, or 3+), speeding it up.

Additionally, I can create more unique shapes, improving accuracy.

As such, I decided to use those *multi stroke gestures* for very important parts of the game. (Which need to be checked most quickly and accurately.)

**Design Decision #3:** And lastly, I decided that the "imperfection" in player drawings could also become an asset.

The algorithm gives me a *score* based on how confident it matched with a symbol.

The higher that score? The greater the reward for the players. ("Well done, you can draw circles *really well*!")

Or, let's say you can create chocolate bars by drawing a rectangle. (Seems intuitive to me, but I'll have to see if this ends up being in the final game.) What if you draw a *longer* rectangle? Well, you use more chocolate, to create a longer bar!

**Design Decision #4:** Of course, I can remove the (expensive!) need to create 4-8 rotations for each symbol if I only include *(mostly) symmetric* symbols.

A circle needs only one entry, as it's the same, no matter at what angle you draw it. Other symbols like a cross (X), a flower, an even-pointed star, etc. will only need ONE rotation.

(If you rotate an "x" 45 degrees, you get a "+". This of course has the downside that I can't use both symbols in the game, as they are rotations of each other. But that's fine.)

## Lesson 5: But don't take things for granted

I was getting quite frustrated, because I just *felt* that my implementation was *exceptionally slow*, and I had no idea why.

I used the Godot engine, with its GDScript language. I know it's certainly not the fastest, but this was unbearable. This game simply couldn't work with the current algorithms and systems.

My recognition averages 100ms compared to (at most) 1ms from the JavaScript code on the creator's website. That seems ... odd.

After trying to plow through using GDScript for a while, I eventually decided to give up and switch to C#. (The "fastest" step would be C++, but I'm not entirely comfortable with that language, certainly not in combination with Godot.)

**Remark:** Godot does have the property that it's always 2-4x slower *in the editor* than on a published/exported game. And indeed, when exported, I experience no lag at all on the computer, but still quite some on mobile. So I still want to try and improve that.

**After a few frustrating days\***, I got the C# version of the algorithm working!

And the results are ... surprisingly good! (Well, it also made me wonder about GDScript's performance and validity as a language even more, because this is just a stupid difference.)

The new algorithm, with *way better settings and accuracy*, takes \~5 ms on desktop, and \~10-15 ms on mobile, in *debug mode*.

In the final version, it will be faster, but that performance increase will be offset by the fact that I still need to add many of the symbols and their rotations, so I think these numbers are accurate for the final product.
