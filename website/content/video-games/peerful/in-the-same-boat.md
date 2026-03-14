---
title: "In The Same Boat"
categories: ["video-games"]
tags: ["peerful"]
language: "en"
progress: 3
---

This is a _Peerful_ game. Everyone connects with their phone to a main screen, and plays on their own phone. (Like the _Jackbox_ games.)

Many years ago, I actually tried to make this idea myself. The source code is available here: [In The Same Boat (Github)](https://github.com/Pandaqi/In-the-Same-Boat). It contains even more details, such as a Wiki with detailed explanation of roles, game rules, mechanics, etcetera. 

As usual, I got the core concept working (play using phone, split roles so multiple players steer the same ship), then realized it was far too big and not currently "monetizable". I made it using open web technology, and spaghetti code, and no clear plan for a commercial release :p

I still think it's an awesome idea. The few playtests I did with family/friends had them all so excited they still talk about/remember it once in a while, years later! I was just too inexperienced to make it myself, and I've since decided not to make it myself anymore.

## What's the idea? 

All players are on a ship together. Everyone gets a unique role (or set of roles), which means they must work together.

On high player counts, you get split into multiple ships.

**Camera:** simply change zoom level to accommodate multiple ships/players that are far apart?

## Objective

**How do you win?** You need to collect three treasures and defeat Blackbeard.

**How do you lose?** If your ship breaks down completely (health \<= 0).

## Gameplay

This is what the general gameplay looks like:

-   You are mostly moving around in your ship, navigating to different locations or battling.
-   The game follows day/night cycles.
    -   During the **day**, everything is easier to see and there are fewer dangers.
    -   During the **night**, you can hide yourself or be surprise attacked, and deals are often better.
    -   Lighting Workflow in Phaser? <https://phaser.io/examples/v3/view/game-objects/lights/tilesprite-light>
-   At midnight the game pauses and goes to a **shop window**.
    -   Perhaps it also displays the results of that day (points scored, enemies shot, etc.)
    -   Every player, on his device, receives the buttons to buy stuff depending on their role.

**BETTER IDEA:** You need to go to harbors in order to trade/buy/upgrade. (It seems weird that you'd need to wait until midnight, but allowing you to upgrade anytime would clutter the interface and be too powerful.)

## Resources

Are publicly available at the top of the screen.

What are they?

-   Gold
-   Treasure
-   Wood
-   Cannonballs/Gunpowder
-   (Food/Water)
-   (Spices/Magic Crystals or whatever/...)

How do you get/lose resources?

-   You can **get** resources by destroying ships, sea monsters, or doing favorable trades.
-   You can **lose** resources by buying stuff (upgrading), bad investments, or being attacked and losing health.

## Treasure 

At the start of the game, three treasures are randomly scattered across the map. I also generate X unique hints about the treasures. Think of:

-   The treasure lies somewhere in columns A-E.
-   The treasure does not lie at rows 6-9.
-   The treasure is close to Parisio (some random town I generated)

Treasures can be both *at sea* and *on land*

At several locations (such as harbors), you can **buy** a hint. You'll then receive a hint about the location of a treasure.

-   The **Treasure Seeker** must buy the hints.
-   That person must also press the "Search Treasure" button to immediately search his current area.
-   It takes some time to complete the search. Once done, you either receive the treasure, or it says that nothing was found.

## Captain

Captain is able to make people go on/off the ship.
-   When on the ship, you simply show as "on the ship" (at the computer) and can do all your regular actions.
-   When off the ship, you see yourself as a unique person. (On sea, you are in a small boat.) You get an extra tab which you can use to *move* yourself around. All your other roles still exist, though most of them will not function when off the ship.

Why would you go off the ship? It might be the best/only way to reach a certain harbor and get a certain resource. Or you might flee. Or the treasure seeker needs to go search some place.

## Which roles are available?

### Captain
-   Action? You make the big decisions:
    -   Fire all the cannons
    -   Allow someone to leave/enter the ship
    -   Go "lights out" at night.
    -   More?
-   Store? ??

### First Mate
-   Action? Steer the ship
-   Store? Buy a better compass/steering wheel

### Cartographer
-   Action? Change the camera (move, zoom in/out) and get hints on nearby monsters/ships/harbours
-   Store? Buy better equipment

### Sailor
-   Action? Change ship speed (by using more/less workforce)
-   Store? Buy better sails/peddles/quality material?

### Cannoneer
-   Action? Load cannons at all sides of the ship
-   Store? Buy more cannonballs or upgrade the cannons.

### Treasure Seeker
-   Action? Buy hints and actually dig up treasures
-   Store? Better digger (bigger range for finding, cheaper to dig) and better persuasion (for better hints)?

**NOTES:** The captain cannot leave the ship. Thus, the captain can never *also* be the treasure seeker.

**NOTES 2:** The camera is set to automatically follow the ship. So, if the cartographer leaves the ship, the camera will still follow in its current configuration.
