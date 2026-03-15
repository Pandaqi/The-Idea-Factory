---
title: "The Wishing Table"
categories: ["video-games"]
tags: ["local-multiplayer", "online-multiplayer"]
language: "en"
progress: 2
---

The basic idea is as follows: what if you ran a reverse restaurant? Food appears automatically on your table, you can only **move the table to get the right food in front of the right customer**.

In other words,

* Both players can move around freely. They're standing at the **ends of a single table**.
* The table simply rotates and resizes to fit between them. 
  * It calculates the distance between players and draws a rectangle to fit between, at the right angle.
  * It also calculates which plates should show (because they fit on the current table), and which ones are currently hidden (because table too small)
* So, together with your friend, you are constantly deciding the exact size + rotation + position of that table by where you stand!

It follows simple systemic rules:

* A larger table is tougher to maneouver + makes you slower.
* Do I simulate obstacles in a simple way, so your table can't go _through_ customers or pillars or whatever?

What's the goal?

* You run a restaurant. 
* Regularly, food/plates fall down from the sky and you must catch them. (Don't need to make them yourself.)
* Regularly, customers come in demanding the things falling from the sky.
* **Place the right food in front of/near the right customer to satisfy them and earn points.**

That's it.

Could be both 2D and 3D.

> In this version, though, probably best if food is _shot in the air_ (by "food cannons") or _slowly rolls down some slope/delivery tube_. This way you can **see it coming** and more accurately predict when and where it will be---so you can place yourself and your table there.
>
> If you have to catch things falling from the sky, with a table between two players, you'll probably be annoyed at how hard that is to do.

It could be modified into a kind of "keep the egg/ball up"-game. Things are constantly falling from the sky, and you need to move around to catch the right things (before they bounce too often/crash on the floor), while allowing other bad things to fall on purpose.

_The Wishing Table_ is from that fairy tale ("tafeltje dekje").
