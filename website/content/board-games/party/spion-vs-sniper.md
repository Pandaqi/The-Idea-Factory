---
title: "Spion vs Sniper"
categories: ["board-games"]
tags: ["experimental"]
language: "nl"
progress: 2
---

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

@TODO

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