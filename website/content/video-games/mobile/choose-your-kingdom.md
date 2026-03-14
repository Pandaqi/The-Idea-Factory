---
title: "Choose Your Kingdom"
categories: ["video-games"]
tags: ["mobile", "local-multiplayer"]
language: "en"
progress: 1
---

This game could be summarized as **"pick the best option from a set of random options, quickly, again and again"**.

* On a quick timer (5 seconds? 10 seconds?), the screen presents a row of options.
* You must tap one. (You get it; the game moves to the next options.) => It automatically selects the "worst" option, so failing to do anything is bad. But might get an extra punishment anyway.

In this way, you try to run and grow a kingdom. The game would be completely UI (menus/buttons/interface), nothing else.

## What are the options?

The options are simple stuff like "get raw resources" or "invest resources into X" (advancement, tech progression, etcetera.)

* Obviously, I can calculate _if_ you have the resources beforehand, only presenting options when you _can_ pay them.
* There are random events / disasters.
* There are fluctuations in your population growth, what people want, etcetera.
* But there are also "enemies". In solo play, this is a simple computer that also makes choices and builds military and stuff. In multiplayer, you simply play against another (on the same screen) doing exactly the same things.

The **specific options** are:
* Get Resource => you simply get more of that type
* Use Resource => you use what you have for its special action
* Trade Resource => pay X to get Y

The **resources** are:
* Defense/Health => can't be used or gotten normally. 
	* If 0, you lose the game. 
	* If opponent 0, you win the game.
* Military => if used, you ATTACK the opponent with your current value.
* Technology => if used, you INVENT something new => the higher this is, the larger the chance of getting something great.
	* These are the powers/curses mentioned (x2 numbers on resource X, timer increase/decrease, etcetera)
* Wood/Stone/Resources => if used, this INCREASES your health/defense.

<!---
TODO:
* Add the second player. (Based on some CONFIG setting, either make this automatic or controlled by another player.)
	* Literally just duplicate the screen, upside-down, and have the computer make random choices at random speeds.
* Implement the different option types (to appear + execute)
* Handle game state (game over, restart, etcetera)
* Add actual sprites, nice font, nice GUI, etcetera
--->