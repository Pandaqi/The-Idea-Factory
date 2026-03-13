---
title: "Barely: A Tower Defense Game"
categories: ["video-games"]
tags: ["action", "local-multiplayer"]
language: "en"
progress: 5
---

Tower defense, but local multiplayer on the smartphone. You defeat monsters with specific _gestures_ (tap them, swipe them away in a specific direction, draw circle around them, etc)

I also liked the idea of creating a series of games called _Barely_. That is, "Barely: A Tower Defense Game", "Barely: A Racing Game", etcetera. Each game would obviously be about _barely_ surviving or getting over the finish line.

## Core game idea

Players (1-4) sit in a circle around the smartphone.

In the center of the screen is your "tower". (Could be anything really: a treasure, a plush toy, etc.)

From all sides, monsters will start to attack it (in real time). Each monster type works differently and needs a different tactic/mechanic/action to get rid of them.

**Your goal?** Keep the tower alive for as long as possible. (Or we work with levels: keep the tower alive through 10 waves, or something. And then the next level you get another enemy type.)

**The problem?** Each wave, your defense/attack mechanisms change. On top of that, there are certain events that change how things work and what's good to do (or not).

## Game start

Each game uses a random terrain. This is generated upon game start.

This isn't just for visual purposes, it also changes the mechanics/strategy:

-   Shrubs/bushes can hide enemies. (So they plop up suddenly, close to the tower.) You can remove them for money/actions, but do you want that?
-   Water can spawn different monsters. (But also, perhaps, extinguish stuff that's on fire?)

## During a wave

During a wave, monsters will just continually attack from all sides. These monsters are determined randomly, although it's known beforehand *which types of monsters* are available.

For each monster you kill, you get coins. The harder the monster (when it comes to difficulty/strength), and the faster you kill it, the more coins.

Once all monsters are dead (for this wave), and your tower still stands, the in-between period starts.

## Between waves

There's a timer counting down. When it runs out, the new wave starts. You can call it early, for which you get some extra coins.

This is the only time when you can build/purchase stuff and place it/use it.

(*What's the idea?* People can upgrade their defenses, like in a real tower defense game. But they can't think too long, or time runs out.)

## Theme

Reverse fairy tales.

> In a surprising turn of events, the dragon that was supposed to protect the princess in the tower ... got stuck in the tower himself.
>
> This, obviously, caused quite an uproar in the Fairy Forest.
>
> In fact, the news even reached the Cinderella Cities, Make-Believe Mountains and Dragon Deserts.
>
> When asked for comment, the Elder Dragon spoke wisely: "We want our dragon back."
>
> And thus, they send out their armies of monsters, dragons, wolves, orcs, witches and wizards!
>
> But in a cottage, cozy and cute, a group of rebels decided this would not stand.
>
> Defend your tower against hordes of enemies ... to restore peace to fairy land!

## Further Notes

### What are you protecting?

Well, you want to prevent the dragon's friends (monstes, wolves, etc.) from freeing their dragon. "They want their dragon back; you don't want to allow that."

**In the center of the screen** is the tower, with the dragon, maybe a treasure chest or something. You lose when the enemy has *moved the dragon off-screen* or has *released the dragon* (destroyed the chackles/tower).

### How to prevent/minimize actual violence?

-   Enemies disappear by moving off-screen, or through other methods. (For example: once they've visited all four areas, they disappear automatically.)
-   Stuff happens via magic: magic spells make enemies disappear, or freeze, or shatter, or whatever.

### Monetization

The game is free. (I don't feel like I can ask any money for local multiplayer games.)

When you play a level, you earn **coins**.

-   You can also, always, get more coins by **watching a rewarded ad**.
-   Sometimes, between matches (restarting current match, going to next match, ...) you get another option to earn coins by **watching a rewarded ad** or **interstitial**.

Why would you want coins?

-   To buy more upgrades (to place in a level)
-   To buy more enemies/mechanics/terrain types/etc.
-   To unlock new worlds/levels
    -   (We could work with a star system, in which you need enough stars to progress.)
    -   (Or we could ditch that, and work solely on a coin system. However, when people spend coins to buy something, this would mean they progress more slowly ... )

### Levels? Campaign?

I feel more strongly for randomly generated levels.

-   Less work
-   More variety
-   Perhaps more addicting, because you could just be "more lucky" next time.

However, I *could* turn that into some sort of campaign.

-   I simply create a campaign screen with a long list of levels (like Candy Crush)
-   These levels are divided into groups/worlds
-   With each new level, I introduce new stuff. (New enemy, new mechanic, new tower to place, new terrain, etc.)
-   Then, the levels itself are nothing more than a randomized terrain + randomized waves, according to a few parameters. (Such as: map size, monsters in waves, general wave size and timing, etc.)


## Monsters

These are some general ideas

-   Default: click on the monster to kill it
-   Throw: throw the monster off the field to kill it.
    -   However, in different levels, different sides of the field will be closed off.
    -   Does not interact with any other monsters
-   Bowling ball: throw the monster away and try to move as many enemies with it as possible.
-   Mover: will not damage your tower but will try to *move* it.
    -   If it moves off screen, you lose.
-   Bomb: when clicked, it explodes and takes nearby enemies with it.
-   Reverse bomb: when clicked, it explodes and HEALS nearby enemies.
    -   Alternative: when clicked, explodes into even MORE enemies.
-   Traveler: the field is split into 4 parts. This monster must visit all four parts before he is dead.
    -   I **LIKE** this one.
-   Cookie cutter: swipe/slash across the enemy to destroy it.

## Upgrades

Most of the upgrades can be either good or bad, depending on the current event for the wave (and how you use them).

-   Click to place a defensive turret/soldier
-   There are several units/garrisons/armies => you can only move these around by clicking + dragging

In the corner of the screen are four **buttons**. (Like with naivigation.)

These buttons hold special powers that you buy, or they hold the controls for the buildings you purchase.

You can only have four buttons activate at a time. As such, you need to be careful when you buy stuff, because you might lose control over something else.

## Mechanisms/Events

These events happen between waves. They are clearly shown/clarified, but that doesn't make them any easier to work with :p

Some of them just change how some things work and add/remove possibilities. Others add/remove complete mechanics.

-   IDEA: All your defense mechanisms work in reverse
-   IDEA: Your defense mechanisms will randomly break down and reboot
-   IDEA: When prompted (/when some weapon is fully loaded), shake the screen to get rid of all the enemies.
-   IDEA: The sides of the screen that are "closed off" (and through which you cannot throw away enemies), only change between waves, not during. That could be too confusing.
-   IDEA: You can draw lines with your finger to create shields.
-   IDEA: You must shoot arrows from your towers yourself. (By putting your finger over them and then dragging in the desired direction.)

**IMPORTANT MECHANIC IDEA:** Provide some way to *prevent* people touching stuff all over the place.

-   (some) Areas only allow a single touch.
-   Something only regenerates when *nobody* is touching the screen.
-   Or, it can be strategic to *wait* for a monster to come closer or to kill itself.
-   In general, encourage players to sit around the table/screen, and only work within their own area.

**IMPORTANT IDEA**: The money you earn appears as treasure chests on the field. These chests stay on the field *for one whole round* => you can only collect them next round. Obviously, monsters will be able to grab those chests and steal them from you, basically stealing your income.







## Fairy Tales / Fantasy Tropes

**What's this?** I want to directly link these characters/tropes to mechanics in the game. You're always playing AS them or AGAINST them.

What they do should be very intuitive and immediately clear from what people already know about them.

**IDEA:** *The 7 Goats*. A single goat is (mostly harmless). Whenever there are seven on the field, however, all hell breaks loose!

**IDEA:** *Three Little Pigs*. They build houses. (Of course, pig 1 builds a bad house, pig 2 slightly better, pig 3 the best one.) Monsters will attack these houses first, before they attack the tower. However, a WOLF can easily blow a house away with a single blow.

**IDEA:** *The Gardener and the Fakir*. Wherever the fakir walks, plants grow. Or, conversely, he turns all enemies within range into plants.

FOR EXAMPLE:

-   Little Red Riding Hood = distracts the wolf. (Or: picks flowers/removes patches of terrain.)
-   Aladdin = place him on your field, and he will regularly generate a genie that helps protect you.
    -   Or, he can fly around on his magic carpet, over obstacles?
    -   Or, he is the *only one* who can counteract genies => here, genies are the enemies?

**PROBLEM:** I'm now thinking of *characters* all the time. But, if you're playing multiplayer, you can't really control characters. You can only perform touches and control "touch zones"

-   Solution 1: Characters are like "towers" -\> you place them on the field during nighttime and then they do their thing
-   Solution 2: You *can* control characters by touching them and dragging (while keeping the touch!) to a new place/enemy/whatever
-   Solution 3: Each player *is* a certain character (which grants new actions or limits other things), and the buttons at the edges also relate to characters.

LINK: <https://www.storyberries.com/category/fairy-tales/famous-fairy-tales/>

### List 1

-   Little Red Riding Hood / Wolf
-   The Magical Tale of Cinderella
-   Snow White (and the seven dwarfs)
-   The wolf (and the seven little kids/goats)
-   The Elves and the Shoemaker (?)
-   The Little Mermaid
-   The Twelve Dancing Princesses (?)
-   Ali Baby and the Forty Thieves (?)
-   Hansel and Gretel
-   The three Billy Goats Gruff (?)
-   Snow White and Rose Red (?)
-   The Snow Queen
-   Beauty and the Beast
-   Rumpelstiltskin
-   The Golden Touch of King Midas
-   The Tale of Tom Thumb (?)
-   Jack and the Beanstalk
-   Aladdin and the Magic Lamp
-   The Pied Piper of Hamelin
-   The Golden Goose
-   Goldilocks and the Three Bears.

### List 2

-   The Emperor's New Clothes
-   The Princess and the Pea
-   Rapunzel
-   The Frog Prince
-   Thumbelina (?)
-   The Little Match Girl
-   The Ugly Duckling
-   The Three Little Pigs
-   The Happy Prince (?)
-   The Nightingale and the Rose (?)
-   Puss in Boots
-   The Sleeping Beauty in the Wood

### Sprookjesboom (Efteling; Dutch)

-   De sprookjesboom (natuurlijk)
-   Roodkapje
-   Klein Duimpje
-   De Reus
-   De Wolf
-   De Heks
-   Draak
-   De Kabouters
-   De Fakir
-   Langnek
-   Ezel
-   Assepoester
-   De zeven geitjes

### Shrek (Fairy Tale Characters)

-   Snow White
-   The Unicorn (?) (by Alice in Wonderland)
-   Witch
-   An Elf
-   The Three Bears (by Goldilocks)
-   Pinocchio (by Mister Geppetto)
-   Donkey (by The Old Woman)
-   Tinkerball (by Peter Pan)
-   Three Little Pigs
-   Big Bad Wolf
-   Three Blind Mice (by the Farmer's Wife)
-   Cinderella (by Doris and Mabel, her ugly stepsisters)
-   Old Woman in the Shoe (by the Royal Guards)
-   The Pied Piper (by citizens of Hamelin)
-   The Fairy Godmothers (by Sleeping Beauty)

### List of Fantasy tropes/creatures

Today I want to look at those who are still relevant. Again, this is not a definitive list.

1.  **Unicorns**-- Horses with horns, right? Not quite. If the dragon is the king of the fantastical creatures, the unicorn is not far behind. They are usually represented as benevolent creatures with healing and magical powers.
2.  **Phoenixes**-- The Western Phoenix is a multicolored bird who dies and it is reborn in flames. A symbol of hope and redemption throughout different cultures.
3.  **Elves**-- Originally they were minor gods of nature and fertility. Elves in fantasy usually are benign beings who live in forests and springs and protect nature. Although video games have popularized dark elves who practice dark magic.
4.  **Trolls**-- No, not the internet kind. Unlike elves who live in forests, trolls dwell on caves, rocks, and mountains. They are usually represented as huge and intimidating and control chaos and destructive magic. Not as helpful to humans as the elves.
5.  **Orcs**-- Brutish, carnivorous, aggressive, imposing. It is hinted by Tolkien orcs were created by Morgoth and were the result of tortured elves.
6.  **Dwarves, halflings, and gnomes**-- Dwarves are short, wise and associated with mining. Halfling is another word for hobbits. Gnomes are associated with alchemy, live underground and do not like humans. Yes, I also wonder what are they doing in people's gardens. Remember, dwarves and halflings = friendly; gnomes = antisocials.
7.  **Angels**-- The benevolent protectors and guides from the Bible. Pure spirits who control white magic. Everybody loves angels.
8.  **Demons**-- Demons were angels who rebelled against God. In fantasy, they are horrendous creatures seeking to cause evil, temptation and control dark magic.
9.  **Mermaids**-- Merfolk and mermen exist in fantasy but mermaids are more popular. The mythical sexy sirens are shapeshifters who control water base and alluring magic. They are also beautiful in a deadly kind of way.
10. **Djinns (AKA genies)** -- Djinns are creatures associated with air and smoke. They have enhanced strength, invisibility, teleportation, shapeshifting. By and large, they are more renown for their wish-granting abilities (for a price).
11. **Drakes**-- Yes, I said no dragons. But drakes deserve special mention. The drake dragons are intelligent and just as fearful even without wings.
12. **Imps** -- Like a fairy or goblin, but smaller. These spirits are characterized by playing pranks and creating mischief.
13. **Fairies** -- Rather than the benevolent godmothers from fairy tales, real fairies are magical creatures of temperamental character. They are feared for their propensity to steal children and babies. They protect trees and they disguised themselves using glamour spells.
14. **Giants and ogres** -- Granted, they are not the exactly the same. An ogre is an ugly giant that feeds of children. They both feature in fairy tales. The Odyssey and the Bible speak of giants. The Attack on Titan anime have popularize them to a newer generation.
15. **Goblins**--  Finally, my favorites. They are small and ugly. Furthermore, they are mischievous. You can find them on caves and forest but watch out; they are trouble. They like to wear red. Redcaps are the worst.

## The Original Idea (V1)

Tower Defense => but with random defense strategies.

In the middle of the screen is your tower/castle/village/whatever.

Players circle around smartphone (lay phone flat on table)

Hordes of enemies will come at your tower. It's your task to defend it in real time.

The core gameplay loop is:

-   New wave starts
-   You must defend in realtime.
    -   During the wave, it will tell you which main strategy is available.
    -   (There are also buttons on the sides with special attacks, which you can use when you see fit?)
-   When wave ends, you'll have money. (The better you performed, the more money you have.) You can buy certain upgrades? Or buildings? Or something?
-   Then the next wave starts.

The big problem is though: **your defense mechanisms change between waves** (and maybe even *during* a wave!)

Different defense mechanisms are:

-   Click enemy to remove it
-   Swipe to slash enemies in half
-   Swipe to throw up a shield/defense barrier
-   Click to place a defensive turret/soldier
-   There are several units/garrisons/armies => you can only move these around by clicking + dragging
-   There are different areas. You need to throw enemies around through these areas. (First zone 1, then zone 3, then zone 2.) This will need *cooperation* => player 1 might be in charge of zone 1, so whatever he receives, he must then pass on after X seconds
-   Shaking/rotating the screen. (More silly than strategical :p)
-   **See if I can find a "theme" that makes it logical to have many weird defense mechanisms**. (And which also makes it non-violent, thus family friendly.)
