---
title: "Idle Packages"
categories: ["video-games"]
tags: ["mobile", "idle-games"]
language: "en"
progress: 1
---

An idle game.

You view a top-down town/city. You start in your own house or garage.

This is randomly generated. There are many ruined/incomplete roads and ruined buildings. You can repair these or use these somehow. (This allows our random generation to make a broken map, because the _player_ should fix it, which makes code easy.)

Slowly, you can buy more people to work for you, buy more spaces, buy better machines.

The important thing is that this is all *idle/simulation*. You're not actively placing stuff, making strategies, changing anything.

Doesn't need to be packages. Could be food. Could be a restaurant. Could be a zoo or theme park. Maybe candy.

Any way,

-   There are homes which order stuff that you can deliver
-   There are places where you can get the *resources* for what you want to do

I think a candyland theme might actually work. A bit magical and Willy Wonka. You can go to all sorts of weird candy places to get the resources:

-   Buy different employees for different purposes/specializations.
-   Upgrade them so they are faster, can carry more, etcetera.
-   *Advertise* to make people place more offers or to get more people into town.
-   *Clearing space* also allows more people to get into town?

Placement follows a grid. So pathfinding is just AStar. (Does Phaser have built-in support? => <https://www.dynetisgames.com/2018/03/06/pathfinding-easystar-phaser-3/>)
