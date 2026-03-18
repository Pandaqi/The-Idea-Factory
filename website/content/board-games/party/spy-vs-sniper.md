---
title: "Spy vs Sniper"
categories: ["board-games"]
tags: ["experimental"]
language: "en"
progress: 2
---

You are all at a party. Everyone plays an innocent partygoer, but meanwhile a battle breaks out. At the party there is one *spy*, who must complete several missions to prevent a bomb from going off. In the building across the street sits a *sniper*, with only one task: unmask the spy and eliminate him. The rest of the party are their accomplices. Which team manages to win?

## Goal

The sniper (and his team) win if they eliminate the spy.

The spy (and his team) win if the missions are completed (before the spy is eliminated).

## Setup

This game is played in two locations. This can be in two different rooms, but also in two corners of the same room (provided they are far enough apart).

Each player is assigned a secret role.

Then the party is set up at both locations.

## Gameplay

This game is played in rounds until it ends. Each round has two phases:

* Action
* Walking around

### Action

Everyone performs one action. These actions have no order. *When everyone in a location has taken their turn, the location calls this out* ("done!").

When both locations are done, the walking phase begins.

### Walking around

The people who choose to do so walk simultaneously from one location to the other. (So you may also stay in the same place.)

*Note:* there may be all sorts of reasons to deviate from this. For example: a certain action allows a location to perform *multiple* actions before it announces that it is done.

*Tip:* it is not wise to leave someone alone at a location :p

## Actions

*Important*: you may **never** show your secret role. (You may of course *say* that you are something, and bluff about it or negotiate with it.)

Yet to specify ...

## Tasks

There are eight different things at the party that can be part of a task.

* Glasses:
* Artwork:
* Books:
* Staring out the window:
* Plant (hiding?):
* Checking security (fire alarm? ventilation shaft?)
* Food:
* Valuable package
* Adjusting the clock:

IDEA: The sniper is already known to everyone? So he is the only one who must make his role public. This removes the mystery/uncertainty, *but* also gives the sniper some special actions he can now perform. (For example: aiming his laser at someone by handing over his laser card?)

IDEA: Only the spy knows who the sniper is currently aiming at (if he chooses to ask for that)? (And if the sniper aims at the same person for five turns in a row, the spy will also know where the suspicions lie.)

## Secret roles

### Team Spy

* **Spy**: tries very hard not to stand out. This person is the only one allowed to perform certain actions (??). If he has completed all his tasks, he wins the game.
* Client:
* President:

### Team Sniper

* Sniper:
* Accomplice:
* Waiter:

IDEA: The sniper has (in some way) overview, because he can see the entire party from outside. So he can focus on certain areas (with his laser beam) and then observe exactly what happens?

IDEA: People can perform "fake actions". (For example, only the spy may actually swap something, but others may look at/pick up the cards and then put them back as they were.)

IDEA: The non-spies all receive tasks that they must perform anyway. (Walk to the other side next round, immediately grab a glass, etc.)

> So they know roughly what has already happened, and what is still in the deck?
>
> The spy does not know that, and must guess what "natural" behavior is.
>
> FOLLOW-UP IDEA: It would be fun if there are things the spy does not know, *and* some things the sniper does not know.

## Inspiration

This whole idea was inspired by a computer game that you play 1 versus 1 (*Spy Party*). One person is a sniper who observes a party from a nearby rooftop and has to shoot one person. The other is the spy who must try not to stand out at that party so they are not shot.

These are some excerpts of what the developers of that game said:

**How many missions will there be?**

Again, hopefully a lot. There are 6 right now (Bug Ambassador, Swap Statue, Transfer Microfilm, Contact Double Agent, Inspect Statues, and Seduce Target), and a couple more that are partially implemented (Steal Plans and Poison Drink). I tend to do new missions to explore completely new types of *tells*, like trying out an audio tell, or *figuring out if the Sniper can perceive when two people at the party are spending a lot of time together*. There are three main categories of tells: 1) *hard tells*, which are when a character plays an animation no NPC will play, and if it is seen, identifies him or her as the Spy, 2) *soft tells*, which allow the Sniper to reduce the number of suspects, but not positively identify the Spy, and 3) *behavioral tells*, which are cues like "that character is acting funny" but that don't have any specific identifying characteristics. The space of these tells is a very large design space to explore, so I'm confident I'll be able to add many missions that are completely different from each other.

**Will the Sniper be able to do anything else besides observe the party?**

Yes, that is the plan, although I've been surprised by how much gameplay there is in just trying to perceive without having any other verbs available. But, the plan is to add things like the Sniper can control a video camera to record areas of the party that are offscreen, but rewinding and playing back the tape takes attention, and the Spy knows when you're doing it, and having the Sniper be able to ask the Security Guard to take someone aside and ask them questions from their dossier. Both the Spy and the Sniper need to know the correct answers, of course. And, to make it more ludicrous, the Spy could choose to be the Security Guard, so the Sniper can't even trust that character.

**Can the Sniper influence the Spy and/or partygoers?**

Right now the only feedback is the laser sight, which definitely influences the Spy's behavior. In fact, a great "newb test" is to just aim the laser at each character's head and see which one starts moving—that's usually the newbie Spy. In the future, I hope to have lots of ways for the Sniper to influence the party, including deciding when it's time to serve dinner, when the musical act goes on stage, dimming the lights, etc.

For example, every time two people speak they exchange something (as "proof" that they talk to each other a lot), and if that gets high enough the spy has completed a mission.

The "seduce target" or "poison drink" also sounds very interesting, but I do not know exactly how that would work.

IDEA: One of the locations has a clock that slowly counts down. (Per turn?) The spy may therefore increase it again, but that gives you away very much.

IDEA: There still needs to be something that is more "vague". Something that requires more bluffing and improvisation and storytelling skills. Something with those "conversation circles" that are also in SpyParty?

PROBLEM: There must be a way to prove that someone has completed their missions (instead of just taking everyone at their word)

IDEA: The sniper has placed a bomb. The spy must try to defuse it.

> IN OTHER WORDS: Before the game begins there is a preparation round. Everyone goes one by one to both locations, while the rest wait in the hallway or something, and performs an action that only they may do. The sniper lays out the "puzzle" for the bomb (and spreads more pieces among other people?)
>
> FOLLOW-UP IDEA: The sniper has no accomplices at all?! So everyone is trying very hard to discover the sniper and hide the strange actions of their spy?

A similar game, but simpler, is something like: [https://gun-asylem.itch.io/spy-vs-sniper](https://gun-asylem.itch.io/spy-vs-sniper)

<!---
Je bent met z'n allen op een feest. Iedereen speelt een onschuldige feestganger, maar ondertussen barst een strijd los. Op het feest loopt één *spion*, die enkele missies moet vervullen om te voorkomen dat een bom afgaat. In het gebouw aan de overkant zit een *sniper*, met als enige taak: ontmasker de spion en schakel hem uit. De rest van het feest zijn hun handlangers. Welk team lukt het om te winnen?

## Doel

De sniper (en zijn team) winnen als ze de spion uitschakelen.

De spion (en zijn team) winnen als de missies worden volbracht (voordat de spion wordt uitgeschakeld).

## Opzet

Dit spel wordt op twee locaties gespeeld. Dit kan in twee verschillende kamers, maar ook in twee hoeken van dezelfde kamer (mits ver genoeg uit elkaar).

Iedere speler krijgt een geheime rol toegediend.

Vervolgens wordt het feest opgezet op beide locaties.

## Spelverloop

Dit spel speelt in rondes totdat het eindigt. Elke ronde heeft twee fases:

-   Actie
-   Rondlopen

### Actie

Iedereen doet één actie. Deze acties hebben geen volgorde. *Wanneer iedereen in een locatie zijn beurt heeft gedaan, roept de locatie dit om* ("klaar!").

Als beide locaties klaar zijn, gaat de rondloopfase in.

### Rondlopen

De personen die daarvoor kiezen, lopen tegelijkertijd van de ene locatie naar de ander. (Je mag dus ook op dezelfde plek blijven.)

*Opmerking:* er kunnen allerlei redenen zijn dat hiervan wordt afgeweken. Bijvoorbeeld: een bepaalde actie zorgt ervoor dat een locatie *meerdere* acties mag doen voordat het omroept dat het klaar is.

*Tip:* het is niet verstandig om iemand alleen te laten op een locatie :p

## Acties

*Belangrijk*: je mag **nooit** je geheime rol laten zien. (Je mag best *zeggen* dat je iets bent, en daarover bluffen of daarmee onderhandelen.)

## Opdrachten

Er zijn acht verschillende dingen op het feest die onderdeel kunnen zijn van een opdracht.

-   Glazen:
-   Kunstwerk:
-   Boeken:
-   Uit raam staren:
-   Plant (verstoppen?):
-   Beveiliging checken (brandalarm? Ventilatieschaft?)
-   Eten:
-   Waardevol pakketje
-   De klok verzetten:

IDEE: De sniper is al wel bekend bij iedereen? Dus hij is de enige die zijn rol openbaar moet maken. Dit zorgt dat de mysterie/onzekerheid weg is, *maar* geeft de sniper ook enkele bijzondere acties die hij nu kan doen. (Bijvoorbeeld: zijn laser op iemand richten door iemand zijn laserkaart te overhandigen?)

IDEE: Alleen de spion weet op wie de sniper op dat moment gericht staat (als hij besluit dat op te vragen)? (En als de sniper vijf beurten achter elkaar op dezelfde richt, weet de spion ook wel waar de verdenkingen liggen.)

## Geheime rollen

### Team Spion

-   **Spion**: doet heel erg hard zijn best niet op te vallen. Deze persoon mag als enige bepaalde acties doen (??). Als hij al zijn opdrachten heeft volbracht, wint hij het spel.
-   Opdrachtgever:
-   President:

### Team Sniper

-   Sniper:
-   Handlanger:
-   Ober:

IDEE: De sniper heeft (op de een of andere manier) overzicht, want hij kan van buiten het hele feest zien. Hij kan zich dus op bepaalde delen focussen (met z'n laserstraal) en dan precies meekrijgen wat er gebeurt?

IDEE: Men kan "nep-acties" doen. (Bijv, alleen de spion mag echt iets verwisselen, maar anderen mogen de kaarten wel bekijken/oppakken en vervolgens weer neerleggen zoals ze al lagen.)

IDEE: De niet-spionnen krijgen allemaal opdrachten die ze sowieso moeten uitvoeren. (Loop volgende ronde naar de andere kant, pak meteen een glas, etc.)

> Zij weten dus wat er ongeveer al geweest is, en wat nog in het deck zit?
>
> De spion weet niet wat dat is, en moet gokken wat "natuurlijk" gedrag is.
>
> VERVOLG IDEE: Sowieso leuk als er dingen zijn die de spion niet weet, én enkele dingen die de sniper niet weet.

## Inspiratie

Dit hele idee was geïnspireerd door een computerspel dat je 1 tegen 1 speelt (_Spy Party_). Eén iemand is een sniper die een feestje van een dak in de buurt aanschouwt en één iemand moet neerschieten. De ander is de spion die moet proberen niet op te vallen in dat feestje zodat ze niet worden geschoten.

Dit zijn wat stukken die de ontwikkelaars van dat spel zeiden:

**How many missions will there be?**

Again, hopefully a lot. There are 6 right now (Bug Ambassador, Swap Statue, Transfer Microfilm, Contact Double Agent, Inspect Statues, and Seduce Target), and a couple more that are partially implemented (Steal Plans and Poison Drink). I tend to do new missions to explore completely new types of *tells*, like trying out an audio tell, or *figuring out if the Sniper can perceive when two people at the party are spending a lot of time together*. There are three main categories of tells: 1) *hard tells*, which are when a character plays an animation no NPC will play, and if it is seen, identifies him or her as the Spy, 2) *soft tells*, which allow the Sniper to reduce the number of suspects, but not positively identify the Spy, and 3) *behavioral tells*, which are cues like "that character is acting funny" but that don't have any specific indentifying characteristics. The space of these tells is a very large design space to explore, so I'm confident I'll be able to add many missions that are completely different from each other.

**Will the Sniper be able to do anything else besides observe the party?**

Yes, that is the plan, although I've been surprised by how much gameplay there is in just trying to perceive without have any other verbs available. But, the plan is to add things like the Sniper can control a video camera to record areas of the party that are offscreen, but rewinding and playing back the tape takes attention, and the Spy knows when you're doing it, and having the Sniper be able to ask the Security Guard to take someone aside and ask them questions from their dossier. Both the Spy and the Sniper need to know the correct answers, of course. And, to make it more ludicrous, the Spy could choose to be the Security Guard, so the Sniper can't even trust that character.

**Can the Sniper influence the Spy and/or partygoers?**

Right now the only feedback is the laser sight, which definitely influences the Spy's behavior. In fact, a great "newb test" is to just aim the laser at each character's head and see which one starts moving---that's usually the newbie Spy. In the future, I hope to have lots of ways for the Sniper to influence the party, including deciding when it's time to serve dinner, when the musical act goes on stage, dimming the lights, etc.

Bijvoorbeeld, elke keer als twee mensen spreken wisselen ze iets uit (als "bewijs" dat ze veel met elkaar praten), en als dat hoog genoeg is heeft de spion een missie volbracht.

Het "seduce target" of "poison drink" klinkt ook heel interessant, maar ik weet niet precies hoe dat zou werken.

IDEE: Eén van de locaties heeft een klok die langzaam afloopt. (Per beurt?) De spion mag deze dus weer omhoog zetten, maar ja, dat geeft je wel heel erg weg.

IDEE: Er moet nog iets zijn wat "vager" is. Iets wat meer bluf en improvisatie en lulverhaal-vaardigheden nodig heeft. Iets met die "conversatie-cirkels" die ook in SpyParty zitten?

PROBLEEM: Er moet een manier zijn om te bewijzen dat iemand zijn missies heeft volbracht (in plaats van iedereen op z'n woord te geloven)

IDEE: De sniper heeft een bom geplaatst. De spion moet die zien te ontmantelen.

> OFTEWEL: Voordat het spel begint is er een voorbereidingsronde. Iedereen gaat een voor een naar beide locaties, terwijl de rest op de gang wacht ofzo, en voert een actie uit die alleen zij mogen. De sniper legt de "puzzel" neer voor de bom (en verspreid nog meer stukjes onder andere mensen?)
>
> VERVOLG IDEE: De sniper heeft helemaal geen handlangers?! Dus iedereen doet heel hard moeite om de sniper te ontdekken en de rare acties van hun spion te verbergen?

Een soortgelijk spel, maar dan simpeler, is zoiets als: <https://gun-asylem.itch.io/spy-vs-sniper>
--->