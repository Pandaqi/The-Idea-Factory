---
title: "Werewolf/Mafia Inspired"
categories: ["board-games"]
tags: ["party", "social"]
language: "en"
progress: 2
---

This article is a selection from my many attempts to come up with some kind of improved, simplified, different version of the game *Werewolves*. The conclusion is actually that it is very difficult to improve the game without removing exactly what makes it good in the first place. But we keep searching ...

## My problems with Werewolves

Werewolves is a fun game. But there are a few problems:

* It is a big chaos. There are too many people doing things at the same time.

  * Solution: split people into different groups (in some way), let people take turns doing something, different phases
* The loudest person wins, and often no arguments are made.

  * Solution: add structure, roles that require you to say/claim something/get attention briefly, always leave something behind (such as the "will" from Town of Salem)
* It is not logical/tactical/diverse enough. It is often not really possible to deduce which roles people are, and the roles become boring quickly.

  * Solution: roles that cooperate in such a way that you can deduce something (if you play well), roles that are more complex, roles that have a bigger impact (such as a vampire that wins if everyone has become a vampire, but it can take 6 rounds before people realize that person is there)
* It is stupid to be dead. People want to play, not watch from the sidelines. (Especially if you die immediately the first night.)

  * Solution: you cannot die, you can be other things than dead (paralyzed, petrified, moved, etc.), even if you are dead you still have something to do.

## 1. Loose Ideas

My current idea is as follows: everyone has a "role of the living" and a "role of the dead". People sit in two groups next to each other: the living and the dead.

Everyone starts alive. (Except a special role?) At night/during the day you play your "role of the living".

If you are murdered, you go to the group of the dead. From that moment on you play the "role of the dead".

By being murdered in the "world of the dead" (or by using a special action), you can return to the living.

*In what way are these two groups connected?* You can see them as completely separate, and just alternate day/night phases. But that is BORING. Maybe in certain cases they have to vote together, or always vote simultaneously, or perform actions through each other during the night.

Extra idea: people have multiple tokens in front of them with different meanings. These can be flipped, removed, etc. by various roles. This immediately gives "evidence" of what has happened to the outside world, and helps with a better discussion phase.

> These tokens of course also indicate important things. For example, they track whether someone is infected by the vampire, whether someone has been set on fire by the pyromaniac, etc.

Extra idea: I really like special, extremely strategic roles. So I would prefer:

* roles that can choose from multiple options
* roles that have a delayed effect (such as vampires)
* roles that make major changes (such as changing someone's role, or status, etc.)
* roles that belong to a subgroup (so that you suddenly have to cooperate with others to make your group win)

Moreover, it seems wise to have a large collection of roles, so that you are never sure what is in the game, and people have more freedom to claim things.

*QUESTION: But if you cannot die, when does the game end?* It seems logical that it ends when all others are in the "world of the dead".

Otherwise there must be some kind of ticking time bomb. Or: people have multiple lives, and must eliminate all lives of the others.

## 2. Online Werewolves Game

Website format. (Automatically playable on computer, tablet and mobile.)

An online variant of werewolves/mafia, but better. (More based on logic/tactics, dead players are not out of the game, more interesting roles.)

### Theme

The theme of the game is **fairy tales**. Everyone lives together in the **enchanted forest**, and the roles are all related to fairy tale characters (or otherwise magical/special characters).

### Setup

When you sign up for a game, you must come up with a good fake name. (This ensures that people do not know who is who, and cannot play based on that.)

At the start of the game everyone gets two secret roles: the "role of the living" and the "role of the dead".

Everyone starts in the world of the *living*. The game starts with the *night* phase.

### Phases

The game is turn-based.

The creator of the game can set the length of the day/night phase themselves. (If you set this very short, it becomes practically real-time.)

* If the time for that phase has passed, the phase ends automatically.
* A phase also ends immediately if everyone has chosen their action and declared it final.

*Note:* there is also an option to make the game faster, by automatically making every action final.

### Day Phase

During the day everyone talks together in the forest chat. If you say something it is by default public and visible to everyone. The goal is to discuss and figure out who the villain is.

Some roles can perform an action during the day, but most cannot.

During the day people can vote on another player. When the number of votes *exceeds 50%*, the day phase is extended with two phases: defense and judgment.

**Defense:** the person in question gets time to defend themselves to the forest.

**Judgment**: everyone votes whether the person is guilty or innocent. You can also choose not to vote.

If the majority votes *guilty*, the person is lynched. Otherwise they are acquitted, and the night begins immediately.

*Important:* who votes for whom, and whether someone votes guilty/innocent/abstains, is all made public.

*Important:* there are two *separate* day phases for the world of the living and the world of the dead. Each world therefore has its own discussion (which the other cannot see), and its own lynching.

**Lynched players** go to the other world.

## Night Phase

At night everyone performs their action. If you are in the world of the living, you perform your "role of the living". (In the other world you of course perform your "role of the dead".)

In many cases you can choose not to perform an action. You generally cannot perform actions on people from the other world.

Some roles make you part of a group, or allow you to talk to people from the other world, and for that you automatically get a private chat at night.

Once you have made your choice, you can always change it later. Only when everyone has made a choice and indicated that it is *final* does the night end.

At the end of the night all actions that were performed are combined and resolved in the correct order.

*For example:* a wolf can choose to kill person A, but if A was protected by another role, nothing ultimately happens.

*For example:* a vampire decides to bite person A, but A was swapped with another character, and that other character happens to be a role that can defend itself, then the vampire ultimately dies.

Only the result of the actions is given to everyone in the forest. The result for someone personally is communicated to that person in more detail (e.g.: "attacked, but you were moved")

**Killed** players go to the other world.

## Extras

You can whisper ("send whispers") to specific players. This allows you to communicate privately, but the whole forest can still see that you are whispering with that person.

Everyone has a personal section (a diary, or last will) that they can keep. Others can view this whenever they want. In it you can keep track of suspicions, secretly send messages to the right people, pretend to be good, etc.

## End of the Game

Different roles have different win conditions. But most roles win when they are the only remaining group.

*How do you "really" die?* Each player has a limited number of lives. Each transfer costs a life. Additionally, some roles can grant extra lives, or take extra lives (possibly without transfer).

If the number of lives is 0, the person truly dies. A dead person is removed from the game. They can still read along with the rest of the game, and chat with the truly dead (via the same chat; the players simply do not see these messages). They can also choose to permanently leave the game (probably to start a new game).

It is more likely, however, that a group wins for another reason. For example, vampires win if everyone is infected, regardless of where they are. In a game with few players, and "protective roles" that are not paying attention, that can happen quickly.

*Note:* moreover, there are roles that win on their own. For example: a role that wins if it ... ?? (Regardless of whether they win or lose, the rest of the game continues, and more people can still win.)

Role ideas:

* Someone who can block a transfer (from world to world).
* Someone who can force a transfer.
* Someone who can swap the two roles (living role / dead role)
* Someone who can talk to people from the other world (via whispers? Others can also fake whisper?)
* Someone who listens in on the other world (but no interaction)

  * In the same way, someone who listens in on the wolves, or the vampires, etc.
* Someone who can give one of their own lives to someone else?
* Someone who can take one life from someone else?

**QUESTION:** A third role? So your "character" that everyone can see from the outside, or the "house" you live in?

**QUESTION:** If you are truly dead, do you become a standard role (based on what you were before)? So, if you were good, you become X. If you were bad, you become Y. And you can still do things?

**QUESTION:** It becomes difficult to make such games not extremely chaotic, or to give one of the groups a big advantage ...

## 3. Board Game Variant

Inspired by *Ultimate Werewolf: Inquisition*.

There are several different roles. Some belong to the "good" camp, some belong to the "bad" camp.

By performing roles, people can (among other things) gain "votes" (or "power").

Performing a "bad role" gives you -1 reputation (or increases your criminality, or something). But "bad roles" are extra strong!

The lower your reputation (etc.), the more dangerous it becomes for you, because if you drop below a certain number you are out of the game. (Or at least you lose all your voters? Or something else? Player elimination is stupid.)

> Maybe your reputation counts as "fixed opposing votes". So if you have -2 reputation, you automatically have 2 votes against you?

After the roles are chosen and performed, people choose one of two options:

* The king suspects one of the subjects and starts a vote to kill/banish them.
* The king is overthrown and a new one is chosen.

The person who has been king the longest wins?

But ... when does the game end? Maybe, by killing/banishing players (or overthrowing the king), people gradually disappear from the royal staff.

NOTE: I need to find a way to connect the *players* (and their situation/role) with their *votes* and the *royal staff*.

> Maybe players have different "allegiances", and therefore want to preserve as many of their own allegiance as possible.
>
> Maybe the *overall* reputation of an allegiance must not drop below a certain level? (So at the start of the game everyone learns their group members?) (SEEMS LIKE A GOOD PLAN. This way you must pay attention to teammates, plan ahead, and others can possibly deduce which team you belong to.)

OKAY, the idea:

> Everyone is part of a rebellion that wants to seize power.
>
> During the game they try to gather votes ("support"), because with a greater majority they can achieve more.
>
> Each round, people choose one of the remaining roles (from the royal staff) to play. This can yield votes, information, or just mess things up.
>
> When everyone has played a role, it remains in front of them. Now comes the *voting phase*.
>
> The king suspects one of his subjects and wants the group to find the mole together. One by one, everyone places votes on the person they suspect. (You must, if possible, cast at least one vote. If you have more, you *may* cast more.)
>
> The person with the most votes is "banished". The role in front of them is removed from the game. The player does receive all the votes that others placed on them (all remaining votes disappear). The king remains the king.
>
> Alternatively, each player (non-king) may raise their hand and call to overthrow the king. (This may happen at most once per voting phase.) Everyone votes simultaneously, face-down, for or against the current king. If the result is against, the king is "banished" (role disappears). Everyone gets their vote back. Finally, everyone votes for a new king.

NOTE: What is so special about the king? Maybe you have special powers. And/or you receive an "I-am-the-king" token each turn, and how many your team has also matters.

NOTE: Both the day and night phase always start with (the first player to the left of) the king and proceed clockwise.

SOLUTION: The gameplay is day -> voting phase -> night

If a role is "banished", it leaves the day phase, but then appears in the night phase. All players who do not choose a role during the day phase (because they cannot, or because they choose not to) must play a role in the night phase.

The roles in the night phase are of a very different nature (and less strong) than the day phase, but still important.

Everyone who has already performed a role during the day must close their eyes at night.

WHAT CAN THE KING DO?

* The king does *not* choose a role during the day. (The king always sleeps at night.)
* The king has the deciding vote in case of a tie.
* The king votes last in the voting round (since you always start with the player to the left of the king)
* The king's *reputation* automatically goes up/down by 1 or 2 each round (I don't yet know which is more interesting??)
* The king automatically receives 3 extra votes each day (regardless of what happens) (Maybe 3 is a bit much ... we will see??)

END OF THE GAME:

The game ends when ...

* Only one group still has roles in the day phase. (That group wins.)
* The king alone has more votes than all other players combined. (His group wins.)

NOTE: But if the king can also be banished ... what happens then? Because he never has a role in front of him.

NOTE: If a player uses a certain role card at night, they simply put it back afterward. This way the others do not know what they did (and whether they did anything). (An alternative is to place the card face-down, but you can still infer a lot of information from that.)

NOTE: What exactly happens when a player is banished? What is the significance, and how can I connect that thematically?

NOTE: Is there anything important about choosing a role that is not of your color (or precisely is)?

NOTE: It is a bit unfortunate if one team is smaller than another. (For example, with 5 players and 3 teams, you get 2 + 2 + 1.) Solutions:

* The 3rd team is a special type of team. It always has fewer members than the other teams, but can do more/something different.
* We do not care. In Saboteur you also have unevenly distributed teams.
* We use 4 teams. If the player count cannot be divided over 4 teams, we use the 4th team as a kind of "decoy" team. (The neutral/grey/outsider team.) In that situation nobody belongs to the 4th team, but they can still use the roles and everything.

I considered naming the game "Whispers in the Castle" or "Whispers from the King".

But then whispers really have to be involved. So maybe something secret that is passed along (like the "Werewolf night" in Ultimate Werewolf, where everyone passes something, but only the werewolves may see/change the stack).

NOTE: During the day you *must* perform a role (if available). At night you *may* perform a role (as long as available), and almost all night roles are only usable for (significant) payment in some way.

NOTE: Or should the king actually be able to watch at night? That he is the only one who experiences both the day and the night? (And then you immediately have control over people following the rules at night, etc.)

IDEA: If your reputation is too low, you may no longer do anything at night (because someone with such a reputation would definitely not be given a key to the castle).

NOTE: Now the king has nothing to do at all, except during the voting round (and waiting to see what mess the rest produces). Maybe he should get a bit more power. (Such as determining who can be voted on during the voting phase? A special action?)

NOTE: All role cards are double-sided (one side shows the day role, the other side the night role). In the middle of both sides is an empty circle/square. In that you place the "group token" => this determines which group the person belongs to. (That does not change for the rest of the game.)

It seems useful to always have a multiple of the number of teams in role cards. (So that, when laying out the cards, you can simply alternate tokens and automatically get something balanced.)

> Should I just duplicate some roles? Because I think a number of "basic roles" are too important to miss/lose/not have in your team.
>
> Especially something like the bodyguard/prince/jester can easily be doubled.

For example:

* 4 players => 2 teams => 10
* 5 players => 3 teams => 12 role cards
* 6 players => 3 teams => 15
* 7 players => 3 teams => 15
* 8 players => 3 teams => 15
* 9 players => 4 teams (?) => 16 (or 20? Are we even going that far?)

### Roles

#### Bodyguard (maybe Palace Guard is more fun)

**Day:** the king must sleep at night, and the bodyguard watches for him. (The next morning the bodyguard can lie about what happened. Because ... even the night players must keep their eyes closed when it is not their turn? Or they may not comment on the communication between king and bodyguard, but that is meh.)

**Night:** the king must sleep during the day. The king therefore has no say during the day (and is also not part of the vote?)

#### Prince

**Day:** the charming prince easily gathers votes. The player gets 3 extra votes.

**Night:**

#### Jester

**Day:** everyone enjoys your funny jokes -- your reputation increases by 2 (or 3?)

**Night:** Lala

#### Magician

**Day:** may, at the end of the voting round, swap at most 10 (or 5?) votes between two people.

**Night:** may swap all votes of one player with all votes of another player (who has more than 0 votes ...?? Otherwise it might be too powerful).

#### Advisor

**Day:** the advisor advises to come back again at night.

**Night:** Lala

#### Banker (... there is a better word for that; Notary? Accountant?)

**Day:** Lala

**Night:** Lala

#### Commander

Small IDEA: The commander is the *only* person who can call to overthrow the king? Nah.

BETTER IDEA: the commander may single-handedly overthrow the king (by force, so to speak)? Or only at night?

**Day:** chooses one player; that player may not choose a role during the day

> Aaaah no the baker already does this!

**Night**: gather votes? You mean torture people until they vote for you! You may steal one vote from all players, or all votes from one player (or something??)

#### Knight

**Day:** you are protected from all actions from now on; but not from banishment.

**Night:** you are protected from all actions, even banishment. *Note:* this card remains with you. You do not choose a card the next day and night; the day after that the knight is gone again.

#### Marshal

**Day:** you determine for another player which role they choose. (You pick up this card and place it with that person; they execute it on their turn.)

**Night:**

#### Baker

**Day:** he may choose a role and temporarily disable it. His food was expired and that role cannot act this day (or night).

**Night:** Lala

#### Other

**Secretary?**

**Master of Ceremonies?**

**Grandmaster?**

**Stablemaster?**

**Diplomat/communication?**

Alternative name for commander = *general* or *lieutenant*

VERY IMPORTANT ROLE IDEA: A role with which you can bring a character from the night back to the day. That of course must not be too powerful (or too easy to obtain). But it ensures that everyone always still has a chance and something to do.

VERY IMPORTANT ROLE IDEA: roles that give smaller amounts of reputation or votes, or only if certain conditions are met. ("If you currently have 0 votes, ..." or "If you currently have a perfect reputation ..." or something)

ROLE IDEA: Roles that do both at once (+1 reputation, +1 vote)

Role idea: someone who can swap the allegiances of people (only at night, and for a very high cost?)


<!---
Dit artikel is een greep uit mijn vele pogingen om een soort verbeterde, versimpelde, andere versie van het spel _Weerwolven_ te bedenken. De conclusie is eigenlijk dat je het spel heel lastig kunt verbeteren zonder precies datgene weg te halen wat het in eerste instantig goed maakt. Maar we blijven zoeken ...

## Mijn problemen met weerwolven

Weerwolven is een leuk spel. Maar er zijn een paar problemen:

-   Het is een grote chaos. Er zijn teveel mensen die tegelijkertijd dingen doen.
    -   Oplossing: mensen opdelen in verschillende groepen (op een of andere manier), mensen om de beurt iets laten doen, verschillende fases
-   De meest schreeuwende persoon wint, en vaak wordt er niet beargumenteerd.
    -   Oplossing: structuur aanbrengen, rollen die vereisen dat je iets zegt/beweert/eventjes de aandacht krijgt, altijd iets achterlaten (zoals bijv de "will" uit Town of Salem)
-   Het is niet logisch/tactisch/divers genoeg. Het is vaak niet per se te achterhalen welke rollen mensen zijn, en de rollen worden snel saai.
    -   Oplossing: rollen die dermate samenwerken dat je er (als je goed speelt) iets uit kan afleiden, rollen die complexer zijn, rollen die een groter effect hebben (zoals een vampier die wint als iedereen vampier is geworden, maar het kan 6 rondes duren voordat men doorheeft dat die persoon er is)
-   Het is stom om dood te zijn. Men wil spelen, niet van de zijkant toekijken. (Al helemaal als je de eerste nacht meteen doodgaat.)
    -   Oplossing: je kunt niet dood gaan, je kunt andere dingen zijn dan dood (verlamd, versteend, verplaatst, etc.), zelfs als je dood bent heb je iets te doen.

## 1. Losse Ideeën

Mijn huidige idee is als volgt: iedereen heeft een "rol van de levenden" en "rol van de doden". Men zit in twee groepen naast elkaar: de levenden en de doden.

Iedereen start levend. (Behalve een speciale rol?) In de nacht/overdag speel je jouw "rol van de levenden".

Als je vermoord wordt, ga je naar de groep doden. Vanaf dat moment speel je de "rol van de doden".

Door vermoord te worden in de "wereld der doden" (of door een speciale actie te gebruiken), kan je weer terugkomen naar de levenden.

*Op welke manier zijn deze twee groepen verbonden?* Je kunt ze compleet los zien, en dus gewoon om beurten dag/nacht fases doen. Maar dat is SAAI. Misschien dat ze in bepaalde gevallen bij elkaar moeten stemmen, of altijd tegelijk stemmen, of tijdens de nacht wel door elkaar heen acties doen.

Extra idee: men heeft meerdere fiches voor zich liggen met verschillende betekenissen. Deze kunnen door allerlei rollen worden omgedraaid, weggehaald, etc. Dit geeft meteen een "bewijs" van wat er is gebeurd aan de buitenwereld, en helpt met een betere discussiefase.

> Ook geven deze fiches natuurlijk belangrijke dingen aan. Bijv, ze houden bij of iemand besmet is door de vampier, of iemand door de pyromaan in de fik gestoken is, etc.

Extra idee: ik hou heel erg van bijzondere, extreem strategische rollen. Ik zou dus de voorkeur geven aan:

-   rollen die uit meerdere opties kunnen kiezen
-   rollen die een vertraagd effect hebben (zoals vampiers)
-   rollen die grote veranderingen aanbrengen (zoals iemands rol veranderen, of status, etc.)
-   rollen die binnen een subgroep vallen (zodat je ineens samen moet werken met anderen om je groepje te laten winnen)

Bovendien lijkt het me verstandig om een grote verzameling rollen te hebben, zodat je nooit zeker weet wat erin zit, en men meer vrijheid heeft om dingen te claimen.

*VRAAG: Maar, als je niet dood kan, wanneer eindigt het spel?* Het lijkt me logisch dat het eindigt als alle anderen in de "wereld der doden" zijn.

Anders moet er iets van een tikkende tijdbom zijn. Of: men heeft meerdere levens, en men moet alle levens van de anderen kwijtspelen.

## 2. Online Weerwolvenspel

Website-formaat. (Automatisch te spelen op computer, tablet en mobiel.)

Een online variant op weerwolven/mafia, maar dan beter. (Meer gebaseerd op logica/tactiek, doden zijn niet uit het spel, meer interessante rollen.)

### Thema

Het thema van het spel is **sprookjes**. Iedereen leeft samen in het **sprookjesbos** (enchanted forest), en de rollen hebben allemaal te maken met sprookjesfiguren (of anderzijds magische/bijzondere figuren).

### Opzet

Wanneer je je aanmeldt voor een spel, moet je een goede nep-naam verzinnen. (Dit zorgt dat men niet weet wie wie is, en daar niet op kan spelen.)

Iedereen krijgt aan het begin van het spel twee geheime rollen: de "rol van de levenden" en "rol van de doden".

Iedereen begint in de wereld van de *levenden*. Het spel begint met de *nacht* fase.

### Fases

Het spel is turn-based.

De creator van het spel kan zelf de lengte van dag/nacht fase instellen. (Als je dit heel kort zet, wordt het praktisch realtime gespeeld.)

-   Als de tijd voor die fase verstreken is, eindigt automatisch die fase.
-   Een fase eindigt ook meteen als iedereen zijn actie gekozen heeft, en deze definitief heeft verklaard.

*Opmerking:* er is ook een optie om het spel sneller te laten gaan, door elke actie automatisch definitief te maken.

### Dag-Fase

Overdag praat iedereen gezamenlijk in de boschat. Als je iets zegt is dat standaard openbaar en voor iedereen te zien. Het is de bedoeling om te discussiëren en zo erachter te komen wie de slechterik is.

Sommige rollen kunnen overdag een actie doen, maar de meeste niet.

Gedurende de dag kan men stemmen op een andere speler. Wanneer het aantal stemmen *boven de 50% uitsteekt*, wordt de dag-fase verlengd met twee fases: verdediging en veroordeling.

**Verdediging:** de persoon in kwestie krijgt de tijd om zich te verdedigen tegenover het bos.

**Veroordeling**: iedereen stemt of desbetreffende persoon schuldig of onschuldig is. Je kunt ook niet stemmen.

Als de meerderheid *schuldig* stemt, wordt de persoon gelyncht. Anders wordt hij vrijgesproken, en begint meteen de nacht.

*Belangrijk:* wie op wie stemt, en of iemand schuldig/onschuldig/niet stemt, wordt allemaal bekend gemaakt.

*Belangrijk:* er lopen twee *aparte* dag-fases voor de wereld der levenden en wereld der doden. Elke wereld heeft dus een eigen discussie (die de rest niet kan bekijken), en een eigen lynching.

**Gelynchte spelers** gaan naar de andere wereld.

## Nacht-Fase

's Nachts doet iedereen zijn actie. Als je in de wereld van de levenden bent, doe je jouw "rol van de levenden". (In de andere wereld doe je natuurlijk jouw "rol van de doden".)

Je kunt er, in veel gevallen, voor kiezen om geen actie te doen. Je kunt (uitzonderingen daargelaten) geen acties doen op mensen uit de andere wereld.

Sommige rollen maken je onderdeel van een groep, of laten je bijvoorbeeld praten met mensen van de andere wereld, en daarvoor krijg je 's nachts automatisch een privé chat.

Als je jouw keuze hebt gemaakt, kun je die altijd later nog veranderen. Pas als iedereen een keuze heeft gemaakt, en heeft aangegeven dat deze *definitief* is, eindigt de nacht.

Aan het einde van de nacht worden alle acties die zijn gedaan samengenomen, en in de juiste volgorde afgehandeld.

*Bijvoorbeeld:* een wolf kan kiezen om persoon A te vermoorden, maar als A bescherming kreeg van een andere rol, gebeurt er uiteindelijk niets.

*Bijvoorbeeld:* een vampier besluit om persoon A te bijten, maar A is toevallig verwisseld met een ander personage, en dat andere personage is toevallig een rol die zichzelf kan verdedigen, dan gaat de vampier uiteindelijk dood.

Slechts het resultaat van de acties wordt gegeven aan iedereen in het bos. Het resultaat voor iemand persoonlijk wordt in meer detail aan die persoon doorgegeven (bijv: "aangevallen, maar je was verplaatst")

**Gedode** spelers gaan naar de andere wereld.

## Extra's

Je kunt fluisteren ("send whispers") naar specifieke spelers. Op die manier kun je privé communiceren, maar het hele bos ziet wel dát je met diegene fluistert.

Iedereen heeft een persoonlijk stukje (een dagboek, of laatste testament) dat ze bij kunnen houden. Anderen kunnen deze bekijken wanneer ze willen. Hierin kun je vermoedens bijhouden, stiekem berichten sturen naar de juiste personen, voordoen alsof je goed bent, etc.

## Einde van het Spel

Verschillende rollen hebben verschillende wincondities. Maar de meeste rollen winnen wanneer zij de enige overgebleven groep zijn.

*Hoe ga je "echt" dood?* Iedere speler heeft een beperkt aantal levens. Elke overplaatsing kost een leven. Verder kunnen sommige rollen extra levens geven, of extra levens afnemen (evt zonder overplaatsing).

Als het aantal levens 0 is, gaat de persoon echt dood. Een dood persoon is verwijderd uit het spel. Hij/zij kan nog meelezen met de rest van het spel, en met de echt doden kletsen (via dezelfde chat; de spelers zien deze berichten gewoon niet). Diegene kan ook kiezen definitief het spel te verlaten (wss om een nieuw spel te doen).

Het is waarschijnlijker, echter, dat een groep wint met een andere reden. Bijvoorbeeld, de vampiers winnen als iedereen besmet is, ongeacht waar ze zitten. In een spel met weinig spelers, en "beschermende rollen" die niet zitten op te letten, kan dat snel gaan.

*Opmerking:* bovendien zijn er rollen die op zichzelf winnen. Bijv: een rol die wint als deze ... ?? (Ongeacht of ze winnen of verliezen, de rest van het spel gaat gewoon door, en meer mensen kunnen nog steeds winnen.)

Rolideeën:

-   Iemand die een overplaatsing (van wereld naar wereld) kan blokkeren.
-   Iemand die een overplaatsing juist kan forceren.
-   Iemand die de twee rollen kan omwisselen (levende rol dode rol)
-   Iemand die kan praten met mensen uit de andere wereld (via fluisteren? Anderen kunnen dus ook nepfluisteren?)
-   Iemand die meeluistert met de andere wereld (maar geen interactie)
    -   Op dezelfde manier, iemand die meeluistert met de wolven, of de vampieren, etc.
-   Iemand die één van zijn eigen levens aan iemand anders kan geven?
-   Iemand die één leven van iemand anders kan afpakken?

**VRAAG:** Nog een derde rol? Dus je "karakter" dat iedereen van buiten kan zien, of het "huis" waar je woont?

**VRAAG:** Als je echt dood bent, wordt je een standaard rol (gebaseerd op wat je hiervoor was)? Dus, was je goed, dan wordt je X. Was je slecht, wordt je Y. En je kunt nog steeds dingen doen?

**VRAAG:** Het wordt lastig om zulke spellen niet extreem chaotisch te maken, of één van de groepen een groot voordeel te geven ...


## 3. Bordspel Variant

Geïnspireerd door *Ultimate Werewolf: Inquisition*.

Er zijn enkele verschillende rollen. Sommige daarvan horen bij het "goede" kamp, sommige horen bij het "slechte" kamp.

Door het uitvoeren van de rollen kan men (onder andere) "stemmen" (of "macht") vergaren.

Het uitvoeren van een "slechte rol" geeft je -1 reputatie (of verhoogt je criminaliteit, ofzo). Maar, "slechte rollen" zijn wel extra sterk!

Hoe lager jouw reputatie (oid), hoe gevaarlijker het voor jou wordt, want als je onder een bepaald getal uitkomt lig je uit het spel. (Of verlies je in ieder geval al jouw stemmers? Of iets anders? Spelereliminatie is stom.)

> Misschien telt jouw reputatie als "vaste tegenstemmen". Dus als jij -2 reputatie hebt, heb je automatisch 2 stemmen tegen?

Nadat de rollen zijn gekozen en uitgevoerd, kiest men een van twee opties:

-   De koning verdenkt een van de onderdanen en start een stemming om deze te vermoorden/verbannen.
-   De koning wordt afgezet en er wordt een nieuwe gekozen.

De persoon die het langste de koning is geweest wint?

Maar ... wanneer eindigt het spel? Misschien, door het vermoorden/verbannen van spelers (of afzetten van de koning), verdwijnen langzamerhand mensen van de koninklijke staf.

OPMERKING: Ik moet een manier vinden om de *spelers* (en hun situatie/rol) te verbinden met hun *stemmen* en de *koninklijke staf*.

> Misschien hebben spelers verschillende "allegiances", en willen ze dus zoveel mogelijk van hun eigen allegiance zien te behouden.
>
> Misschien mag de *algehele* reputatie van een allegiance niet onder een bepaald niveau zakken? (Dus aan het begin van het spel leert iedereen zijn groepsgenoten kennen?) (LIJKT ME EEN GOED PLAN. Hierdoor moet je goed op teamgenoten letten, vooruit plannen, én eventueel kunnen anderen daarmee achterhalen bij welk team jij hoort.)

OKEE, het idee:

> Iedereen is deel van een opstand die de macht wil overnemen.
>
> Gedurende het spel proberen ze stemmen ("steun") te vergaren, want met een grotere overmacht kunnen ze meer bereiken.
>
> Elke ronde kiest men één van de overgebleven rollen (van de koninklijke staf) om te spelen. Dit kan stemmen opleveren, of informatie, of gewoon dingen in de war schoppen.
>
> Wanneer iedereen een rol gespeeld heeft, blijft deze voor hen liggen. Nu komt de *stemfase*.
>
> De koning verdenkt één van zijn onderdanen en wil dat men gezamenlijk de mol vindt. Om de beurt legt iedereen stemmen neer bij de persoon die zij verdenken. (Men moet, als dat kan, minstens één stem uitbrengen. Als je meer hebt, *mag* je meer.)
>
> De persoon met de meeste stemmen wordt "verbannen". De rol die voor hem lag gaat uit het spel. De speler krijgt wel alle stemmen die de anderen op hem hebben ingezet (alle overige stemmen verdwijnen). De koning blijft de koning.
>
> Als alternatief kan elke speler (niet-koning) zijn hand opsteken en oproepen om de koning omver te werpen. (Dit mag hoogstens eenmaal per stemfase.) Iedereen stemt tegelijkertijd, gedekt vóór of tegen de huidige koning. Als de uitslag tegen is, wordt de koning "verbannen" (rol verdwijnt). Iedereen krijgt zijn stem terug. Als laatst mag iedereen stemmen voor een nieuwe koning.

OPMERKING: Wat is er zo speciaal aan de koning? Misschien dat je speciale krachten hebt. En/of je ontvangt elke beurt een "ik-ben-de-koning" fiche, en hoeveel jouw team daarvan heeft is ook nog belangrijk.

OPMERKING: Zowel dag als nachtfase begint altijd bij (de eerste speler links van) de koning en verloopt kloksgewijs.

OPLOSSING: Het spelverloop is dag -\> stemfase -\> nacht

Als een rol "verbannen" is, gaat deze uit de dagfase, maar verschijnt vervolgens in de nachtfase. Alle spelers die tijdens de dagfase geen rol kiezen (omdat het niet anders kan, of omdat ze dat zelf willen), moeten een rol in de nachtfase spelen.

De rollen in de nachtfase zijn van een hele andere aard (en minder sterk) dan de dagfase, maar wel belangrijk.

Iedereen die overdag al een rol heeft gedaan, moet 's nachts zijn ogen sluiten.

WAT KAN DE KONING?

-   De koning kiest overdag *geen* rol. (De koning slaapt altijd 's nachts.)
-   De koning heeft de beslissende stem bij gelijkspel.
-   De koning stemt als laatste in de stemronde (want men begint altijd bij de speler links van de koning)
-   De *reputatie* van de koning gaat elke ronde automatisch 1 of 2 omhoog/omlaag (ik weet nog niet welke interessanter is??)
-   De koning krijgt elke dag automatisch 3 extra stemmen (ongeacht wat er gebeurt) (Misschien is 3 wat veel ... we zullen zien??)

EINDE VAN HET SPEL:

Het spel eindigt als ...

-   Er slechts van één groep nog rollen in de dagfase zijn. (Die groep wint.)
-   De koning in z'n eentje meer stemmen heeft dan alle andere spelers bij elkaar. (Zijn groep wint.)

OPMERKING: Maar als de koning ook verbannen kan worden ... wat gebeurt er dan? Want hij heeft nooit een rol voor zich.

OPMERKING: Als een speler een bepaalde rollenkaart gebruikt in de nacht, legt hij deze daarna gewoon weer terug. Zo weet de rest niet wat hij gedaan heeft (en of ie iets gedaan heeft). (Een alternatief is dat men deze kaart gewoon gedekt legt, maar ja, daar kun je nog steeds veel informatie uit halen.)

OPMERKING: Wat gebeurt er precies als een speler verbannen wordt? Wat is de significantie, en hoe kan ik dat thematisch verbinden?

OPMERKING: Is er nog iets belangrijks als je een rol kiest die niet van jouw kleur is (of juist wel)?

OPMERKING: Het is een beetje lullig als het ene team kleiner is dan het andere. (Bijvoorbeeld, bij 5 spelers en 3 teams, heb je 2 + 2 + 1.) Oplossingen:

-   Het 3^e^ team is een speciaal soort team. Het heeft altijd minder personen dan de andere teams, maar kan wel meer/iets anders.
-   We hebben schijt. Bij saboteur heb je bijvoorbeeld ook slecht verdeelde teams.
-   We gebruiken 4 teams. Als het spelersaantal niet over 4 teams verdeeld kan worden, gebruiken we het 4^e^ team als een soort "decoy"-team. (Het neutrale/grijze/outsider team.) In die situatie is niemand lid van het 4^e^ team, maar ze kunnen de rollen en alles wel gebruiken.

Ik overwoog het spel "Whispers in the Castle" of "Whispers from the King" te noemen.

Maar dan moeten er eigenlijk wel fluisters aan te pas komen. Dus misschien iets wat geheim is en wordt doorgegeven (zoals de "Weerwolfnacht" bij Ultimate Werewolf, waarbij iedereen iets doorgeeft, maar alleen de weerwolven de stapel mogen zien/veranderen).

OPMERKING: Overdag *moet* je een rol doen (als deze beschikbaar is). In de nacht *mag* je een rol doen (zolang deze beschikbaar is), en vrijwel alle nachtrollen zijn slechts inzetbaar tegen (flinke) betaling op een of andere wijze.

OPMERKING: Of mag de koning juist 's nachts meekijken? Dat hij als enige de dag en de nacht meekrijgt? (En dan heb je meteen controle over dat men zich 's nachts aan de regels houdt enzo.)

IDEE: Als je reputatie te laag is, mag je 's nachts niks meer doen (want, iemand met zo'n reputatie geven ze echt geen sleutel van het kasteel).

OPMERKING: Nu heeft de koning helemaal niks te doen, behalve bij de stemronde (en afwachten welke rotzooi de rest produceert). Misschien moet hij toch iets meer macht krijgen. (Zoals bepalen op wie er gestemd mag worden bij de stemfase? Een speciale actie?)

OPMERKING: Alle rollenkaarten zijn tweezijdig (aan de ene kant staat de dagrol, aan de andere kant de nachtrol). In het midden van beide kanten zit een lege cirkel/vierkant. Daarin leg je het "groepsfiche" => deze bepaalt bij welke groep de persoon hoort. (Dat verandert ook niet voor de rest van het spel.)

Het lijkt me handig om altijd een veelvoud van het aantal teams aan rollenkaarten te hebben. (Zodat je, bij het neerleggen van de kaarten, gewoon om en om fiches kan leggen en sowieso iets gebalanceerds krijgt.)

> Zal ik sommige rollen gewoon dubbel maken? Want ik denk dat een aantal "basisrollen" te belangrijk zijn om te missen/kwijt te raken/buiten je team te hebben.
>
> Zeker zoiets als de bodyguard/prins/nar kan best dubbel.

Bijvoorbeeld:

-   4 spelers => 2 teams => 10
-   5 spelers => 3 teams => 12 rollenkaarten
-   6 spelers => 3 teams => 15
-   7 spelers => 3 teams => 15
-   8 spelers => 3 teams => 15
-   9 spelers => 4 teams (?) => 16 (of 20? Gaan we überhaupt zo ver?)

### Rollen

#### Bodyguard (misschien is Paleiswacht leuker)

**Overdag:** de koning moet 's nachts gaan slapen, en de bodyguard let voor hem op. (De volgende ochtend kan de bodyguard liegen over wat er is gebeurd. Want ... zelfs de nachtpersonen moeten hun ogen dichthouden wanneer ze niet aan de beurt zijn? Of ze mogen geen opmerkingen maken over de communicatie tussen koning en bodyguard, maar dat is meh.)

**Nacht:** de koning moet overdag gaan slapen. De koning heeft dan dus niks in te brengen gedurende de dag (en is ook niet bij de stemming?)

#### Prins

**Overdag:** de charmante prins werft met gemak stemmen. De speler krijgt 3 stemmen erbij.

**Nacht:**

#### Nar

**Overdag:** iedereen geniet van je leuke grapjes -- je reputatie stijgt met 2 (of 3?)

**Nacht:** Lala

#### Goochelaar

**Overdag:** mag, aan het einde van de stemronde, op z'n hoogst 10 (of 5?) stemmen wisselen tussen twee personen.

**Nacht:** mag alle stemmen van één speler verwisselen met alle stemmen van een andere speler (die meer dan 0 stemmen heeft ...?? Anders is het misschien té krachtig).

#### Adviseur

**Overdag:** de adviseur adviseert om 's nachts nog een keertje terug te komen.

**Nacht:** Lala

#### Bankier (... daar is een beter woord voor; Notaris? Accountant?)

**Overdag:** Lala

**Nacht:** Lala

#### Commandant

IDEEtje: De commandant is de *enige* persoon die kan oproepen om de koning af te zetten? Nah.

BETER IDEEtje: de commandant mag in z'n eentje de koning afzetten (met geweld, zeg maar)? Of alleen 's nachts?

**Overdag:** kiest één speler; die mag overdag geen rol kiezen

> Aaaah nee de bakker kan dit al!

**Nacht**: stemmen werven? Mensen martelen tot ze op je stemmen zul je bedoelen! Je mag van alle spelers één stem jatten, of van één speler alle stemmen (ofzo??)

#### Ridder

**Overdag:** je bent beschermd tegen alle acties vanaf nu; maar niet tegen verbanning.

**Nacht:** je bent beschermd tegen alle acties, zelfs verbanning. *Opmerking:* deze kaart blijft wél bij je liggen. Je kiest de volgende dag en nacht geen kaart; de dag daarop is de ridder weer bij je weg.

#### Hofmaarschalk

**Overdag:** jij bepaalt voor een andere speler welke rol hij/zij kiest. (Je pakt deze kaart op en legt hem bij die ander; die voert het in zijn beurt uit.)

**Nacht:**

#### Bakker

**Overdag:** hij mag een rol kiezen en deze tijdelijk uitschakelen. Zijn eten was over de datum en die rol kan deze dag (of nacht) niet in actie komen.

**Nacht:** Lala

#### Overig

**Secretaris?**

**Ceremoniemeester?**

**Grootmeester?**

**Stalmeester?**

**Diplomaat/communicatie?**

Alternatieve naam voor commandant = *generaal* of *luitenant*

ZEER BELANGRIJK ROLIDEE: Een rol waarmee je een karakter uit de nacht terug naar de dag kan brengen. Die moet natuurlijk niet té krachtig zijn (of té makkelijk te behalen). Maar het zorgt ervoor dat iedereen altijd nog een kans maakt en iets te doen heeft.

ZEER BELANGRIJK ROLIDEE: rollen die in mindere mate reputatie of stemmen opleveren, of alleen als aan bepaalde voorwaarden is voldaan. ("Als jij op dit moment 0 stemmen hebt, ..." of "Als jij op dit moment een perfecte reputatie hebt ..." ofzo)

ROLIDEE: Rollen die beide tegelijk doen (+1 reputatie, +1 stem)

Rolidee: iemand die de allegiances van mensen kan omwisselen (alleen 's nachts, en voor een héle hoge prijs?)
--->