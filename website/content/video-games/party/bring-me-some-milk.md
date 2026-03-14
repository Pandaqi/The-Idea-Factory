---
title: "Bring Me Some Milk!"
categories: ["video-games"]
tags: ["local-multiplayer", "online-multiplayer", "peerful"]
language: "en"
progress: 2
---

A game where every player **is a shopping cart**. You're racing around randomly generated supermarkets trying to **find the right products + load them into your cart**, then check out before time runs out.

This feels like a strong premise for a (local) multiplayer silly casual party game. It's simple: just find where products are, load in the right amount, get to check out.

But it's completely physics-based and the supermarket is different each time. 

Players only get two buttons (movement + action). _How_ do you collect groceries like that?

* When you hold your action button, you _attract_ all products within a certain radius.
* It's up to you to maneouver the shopping cart + attract at the right times to make the right products fall into the cart.
* (And to _not_ take corners with too much speed and risk crashing or products flying out again.)

Could be competitive: be the fastest with the fewest mistakes. 

Could be cooperative: there is only a **single** shopping cart, and all the players are actual **player characters** who are grabbing products off the shelves and dumping them in that shared cart. => This is probably the easier way to control and play this game.


## A "Peerful" Version

This game was originally envisioned as a "peerful"-game. That is, all players connect to a computer with their phone, and now their phone is their personal controller.

That version could still work absolutely fine, but it's just harder to make/setup than a regular game for no real reason, so I ditched it. Below are the summarized notes still.

### What's the idea? 

Your parents have given you a rather strange grocery list. Even worse, they've given you only 5 minutes to collect everything and leave the store. Work together to complete the grocery list in time!

### More specifically

-   The game takes place inside a **grocery store**: rows of tables/shelves with lots of different products.
-   Every player receives his own character in the game => use your smartphone to move it around.
-   Additionally, all players share a single **shopping cart**.
-   This shopping cart can hold products *and* can be used to race around the shop.
-   To grab products, simply **shake** your smartphone when you're standing near them.
-   To throw products, again **shake** your smartphone => the *direction* in which you shake determines your throwing direction!

### Implementation Details

IMPORTANT: I need a "lobby" or "test" screen for every player, because different browsers and devices implement the accelerometer in different ways.

So, when the game starts, I should:

-   Check all possible stuff. If I find something, use that.
-   Use the **Permission API** whenever needed.
    -   Search "iOS Safari 13 accelerometer" and find an article about exactly this (it's literally one line of code, using promises)
    -   LITERAL ARTICLE: "How to Request Device Motion and Orientation Permission in iOS 13"
-   Show coordinates/effect
    -   Add button that allows you to **reverse** coordinates, if you find that it works the wrong way (or just unintuitively).
-   Check if it's working => if I receive no (proper) values, display a message with the common causes.
    -   If you have Safari, you might need to allow usage in the Settings (+ image/explanation here)
    -   Look up Accelerometer support your Browser Version (e.g. "Chrome version 31 Accelerometer"). If you find reports that it's not supported, I'm really sorry, but it just won't work.
    -   Check if your phone actually *has* an accelerometer.
    -   If all else fails, reload and try again.

Add a quick/easy **button (or email)** for people to leave **feedback** if it doesn't work. (Browsers are updated all the time, there's a good chance I can fix it quickly by updating a few lines of code.)

Once all players have CONFIRMED that it's working for them, the game can actually start.

How to detect a **shake** with JavaScript: <https://www.raymondcamden.com/2017/04/25/using-device-motion-on-the-web>

**Acelerometer** (for movement) **/gyroscope** (for tilt; not needed I guess?):

-   <https://www.emanueleferonato.com/2015/01/10/playing-with-phaser-and-accelerometer-with-gyro-js/>
-   <https://github.com/tomgco/gyro.js?files=1>
-   <https://www.livescience.com/40103-accelerometer-vs-gyroscope.html>

**What's the technology?** I want to use Phaser.io + Enabled3D (or some 3D extension) to make this a top-down 3D game.
