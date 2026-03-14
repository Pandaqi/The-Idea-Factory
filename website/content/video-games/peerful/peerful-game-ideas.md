---
title: "Peerful Game Idea List"
categories: ["video-games"]
tags: ["peerful"]
language: "en"
progress: 3
---

A long time ago, I discovered the _Jackbox_ games. I immediately taught myself how to code such a thing myself and dubbed it the _Peerful Project_. This article is a list of all my initial game ideas for such types of games.

A _Peerful_ game just means that everyone connects with their phone to a main screen, then plays on their own phone (like a personal controller). 

The advantage is that you don't need loads of actual controllers---everyone can play by just bringing their own phone. Another advantage is that phones have much more capabilities (thanks to their big touchscreen, accelerometer, etc) than a typical gamepad. A disadvantage is that these games are much harder to make, because they're essentially "online multiplayer" and require a server and extra steps.

I think some of the ideas below are quite good still. I even made prototypes for several. I simply did not see a way to monetize these games back then, and did not have the money to just keep expensive servers running so people could play for free, so I gave up on it personally.

## Idea #0 (River Rapids!)

All players are inside a typical *river rapid* boat. You are floating on a wild and unpredictable stream of water, trying to reach the finish first (and without destroying yourself).

You have three controls:

-   **Rotate**: rotates the boat
    -   The boat also rotates by itself, due to water current influence.
    -   Rotating is a bit imprecise; slow to start.
-   **Boost**: adds an extra speed boost (in the direction in which you're rotated)
    -   Needs time to fill up?
-   **Shoot:** each boat has a water gun. Use it to slow down other nodes, destroy them, or shoot people *out* of the boats.
    -   Also needs time to fill up? Or is it more interesting if you need to *reload it yourself* (in a specific way or location)?

**Shooting people out of boats?** Yes! On higher player counts, you are in boats together, each one getting different controls.

When someone is *out of the boat*, that control is lost of course! You must be near them, and they need to press a button "Enter Boat", before all is well again.

**How do I see this in my head?** Create a course based on pre-defined parts. (Bends, slopes, wider areas, etc.) Each part has a "water-layer" in it. All these waters follow the same shader that makes waves using sine functions.

Within the course, play bumpers, waterfalls, traps, slowdowns and speedups, that kind of stuff.

## Idea #1 (Survival Zoo)

Some sort of *survival* game.

Why? Easy objective: stay alive until the level ends. (Or: protect the base until time's up.)

This can take on any theme:

-   Maybe you're a zoo/nature reserve trying to protect itself. Animals need stuff, but also try to escape. People from the outside try to claim parts of the forest and bulldoze trees, you need to repel them.
-   Something else??

## Idea #2 (Robbery)

A random house layout appears on the screen.
-   A few people "live" in the house and try to catch the burglars.
-   The rest are burglars themselves.

The house is dark, so people can be anywhere.

It's up to the residents to place *boobytraps* (and not get caught themselves), keep a good eye for irregularities, turn on lights at the right time, and make sure the burglars are either caught or don't get away with too much money.

It's up to the burglars to stay out of sight, strike at the right time (when stealing something or moving across a well-surveilled space), mislead the others with noises/breaking stuff/etc., and get away safely with lots of stuff.

## Idea #3 (Time Tricksters; Peerful)

IDEA: Time-manipulation game => you're all on a map trying to perform some objective ... but time can scroll forwards and backwards!

-   **Backward:** It saves everyone's movement (X frames per second), then it just retraces it.
-   **Forward:** It simply repeats the *last* movement by everyone.

This could be applied to *all* players (in which case it could be cooperative OR two teams; evil vs good), or it could be an individual control (in which case people would have personal goals).

> Of course, there's a limit to how far you can change time. Basically, you generate/collect time crystals, and you can only do something when you have enough of them.

**COMBINE Idea #3 with Idea #4?** (So, a Peerful game about time manipulation, but you can *give* each other time or *take it away*? You *share* it?)

## Idea #4 (Firefighting Frenzy)

A cooperative game about firefighting through a (small, cute, low-poly) city.

The kicker? You only have *one* shared water supply!

(And of course, it's a game about strategical positioning, aiming your beam right, managing to get through traffic ... and probably some more.)

**IDEA!** Each player has their own firefighter truck. However, only ONE player can be connected to the water supply. All other players must connect with **other trucks** and get their water from there.

**Programming**: create a system that can create *dynamic water hoses*.

-   Create X static body circles.
-   Connect them with spring joints ( => or whatever can *vary in length*)
    -   If we want it to wrap around buildings without making mistakes, the circles should be really close to each other.
-   Create a cylinder that wraps around the edges of the circles, creating a dynamic hose. (Alternatively, the circles themselves may be enough, especially if I give them some animated pumping shader.)

## Idea #5 (Among Us Better)

Something like *Among Us*, but better, and of course Peerful.

-   Randomly generated map/area
-   Everyone has secret roles, but they must also simply play a game and perform tasks during the game.
-   Computer: You get a main screen with a global overview, but very little details.
    -   (Maybe stuff can be bought/unlocked during the game to reveal this. For example: there are 4 switches on the map, once all of them are "ON", the computer permanently reveals ... something.)
-   Phone: you see where you currently are and get your secret actions/buttons

Call it: **AMONG DUCKS**. Because everyone is a duck. Maybe multiple people even steer the same duck.

This has transformed into another idea: **THE ROYAL ASSASSIN.**

## Idea #6 (Train of Thought)

**Issue:** there's already a game called "Train of Thought", but it's wildly different, and from Luminosity (the brain games website) => just keep the name?

You are the *Train(s) of Thought!*

A cooperative (I think?) game where everyone steers their own train.

The map is a small city (or group of towns with landscape between) and a road network.

-   To expand the road network, deliver the thought "I should expand the network!" to a "builder" person.
-   To get an upgrade to your train, deliver the thought "I should upgrade the trains" to a "researcher/inventor" person.

This is really cool! Not only is it a nice play on words and a good train game, those thoughts can also actually mean something! (They do what they say, so the thoughts you choose determine the outcome of the game. A bit of a message about thought positivity in there as well.)

-   I could even go *all in*. Maybe someone is thinking negative thoughts, and if you deliver too many of them, they commit suicide? (Or a weaker effect, like, they disappear from the map or become lonely or whatever.)
-   And then you have to control the mood/thoughts/well-being of the town! (For example, when a politician tries to send a thought across the map, you can choose to block it if you don't like it.

The *content* of your train is shown on your mobile phone screen. (The computer is already full, showing the city, the trains, and abstract thought bubbles everywhere.)

## Idea #7 (The Royal Assassin)

The map is a randomly generated area with a castle + the surrounding structures and environment. (So, main rooms, stables and storage around it, then forest area around that.)

Each player is one member of the royal staff. You get:
-   A random name (so nobody knows who all the other players are)
-   A random role (which includes powers/weaknesses and perhaps an objective)

However, some of you will try to **assassinate the king**.
-   Once the king is dead, they automatically win.
-   Otherwise, the rest wins when they assassinate all bad guys.

(**QUESTION:** How to ensure this moves fast and towards an ending within time limits?)

As is the case, people need things in order to survive:

-   **Food** (regularly, especially if you work hard or have a big body)
    -   Gather plants *or* slaughter animals
    -   Prepare them over fire or in a boiling pot
    -   Then bring them to other people or eat it yourself

-   **Warmth** (hearths warm up rooms, fires outside are needed, otherwise wool clothes)
    -   Chop wood *or* use special magic
    -   Throw it in hearths or onto existing fires

-   **Treatment** (from wounds or when ill)
    -   Gather the right plants and give them immediately

These must all be gathered and prepared by the players. Chop trees for wood, scour the area for plants, combine it all into a simmering pot.

**IDEA:** Everyone has a secret inventory, only displayed on their phone.

**IDEA:** Everyone can add stuff to a meal that's being prepared in the kitchen.

**IDEA:** There are secret passageways only the assassins can use.

**IDEA:** Tap an empty spot in your inventory to *grab* whatever you're near to (and put it in that slot), tap a filled spot to *drop* or *use* that ingredient.

> **IDEA:** Everyone gets exactly ONE action-button. If you carry a sword (for example), it swings the sword.
>
> **PROBLEM:** How to distinguish between "using" and "dropping" ingredients? Or can you simply never actively drop something that you have?

**IDEA:** The main screen shows a lot of good information, but you can purposely hide something, blend in, hide a body in the woods, etc.

> **IDEA:** To report a dead body, you need to stand next to it and get the button to do so. (This is how someone can hide a death? But ... won't the player that died protest?)
>
> **IDEA:** In some cases, you can stream parts of the map to yourself, but in simplified form:

-   A pixelated/small view of your surroundings ( => in any case, this should be compressed so that internet can handle it, and only update like once per second)

-   A set of dots on the map

-   A set of statements (you are in area X with player Y)

**HOW TO** (for image stuff): create Image object, get raw buffer, convert raw to base64: <https://github.com/godotengine/godot/issues/25571>

**IDEA:** Show footprints on the bottom texture? (Just keep a separate low-res texture, add blocks whenever someone moves, fade out once every second. Then add that on top of the regular texture.)

> **IDEA:** Similarly, someone can go "hide", in which case you only see a vague dot on the floor, or on the minimap, but their actual model is gone.

**IDEA:** A bomb you can plant => then it goes off after a timer, or whenever you press the button on your phone.

> **In general**, all methods should be delayed, or hidden. Otherwise people can just clearly see who killed them on the screen.

**POTIONS/POWERS:**

-   Get list of roles in the game
-   Stay warm/fed/protected for X seconds
-   Poison (slow)
-   Poison (fast)

**ROOMS:**

-   King's Bedroom
-   Kitchen
-   Stables
-   Storage
-   Dining Room
-   Map Room / Strategy Room / Military Room

## Idea #8 (Hackland)

Players are divided into two teams. Each team gets their own "server" in the game.

(A "server" is represented by a main node, connected with another bunch of nodes, each of which can hold "one bit of information" => it's basically like an Age of Empires map on the screen, but smaller and everything is a bit more abstract.)

Your **goal?** Bankrupt the other player.

-   Each team starts out with a LOT of cash.
-   However, you can only store things "digitally", which means people can steal it just by hacking.
-   You can earn more cash by doing jobs for people (represented in some simple way on the map?), but you also need to pay cash to build things and stuff.

**How would this work in practice?** Each player is a character that can walk around.

During the game, you can build stuff at your current location, or interact with stuff by standing next to it.

The idea is that you connect stuff (to electricity, to each other, or via Wi-Fi) to *protect* your cash (or other valuable information).

**All sorts of communication, defensive measures and information storage are just BUILDNGS**.

Asking for a password is just one type of building you can place.

> Also fun: the passwords are not shown anywhere. So you must remember them during the game, or be locked out of your own system.
>
> Maybe there's also a "forgot password" building, which sends the password if you interact with it. (If you place an "admin" property on it, that first needs to be accepted by the leader of your group.)

Supplying electricity is a building.

Connecting with Wi-Fi is one.

Of course, you must unlock new buildings with **research!**

**HOW TO BUILD:** It would clutter the screen to give you the icons for ALL buildings. Instead, I just give players a **text box** and a **"build!" button**. The computer translates what you wrote into the correct building.

-   "wifi" => places internet building
-   "energy" => places electricity building ("elec" or "electricity" is also fine)

**BIGGEST PROBLEM:** If everything on the screen is visible, it's hard to catch others off-guard. (They can just see your character walking up to them.)

Somehow, most of the game should be *hidden information*.

-   It should happen on your phone. (Invisible actions you take there. Information you gather from buildings on the map.)
-   **YES!** Within a team, you can communicate by typing on your phone. (These messages are just sent to the computer, which relays them to the right person. No need to directly connect anything)
    -   **YES!** Players can also start with unknown information.
    -   Sending messages to each other ALSO requires its own building!
    -   So the other team can "bug/spy" that building and also receive your messages!

## Idea #11 (Make Love, And War)

A cute, tiny "Age of Empires"-like game. Yes, it's about fighting and conflict and territory ... but it's also about love.

How? Not sure.
-   Maybe your arrows just make people in love, so they stop fighting.
-   Maybe your swords just break people's hearts, so they stop fighting.
-   Maybe one of the strong units are just cute rabbits that "convert" all soldiers near it to regular people who don't want to fight!

_Inspired by that local multiplayer AoE-game from Sokpop => King Pins!_