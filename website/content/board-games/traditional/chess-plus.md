---
title: "Chess Plus"
categories: ["board-games"]
tags: []
language: "en"
progress: 4
---

A board game in which **players move and attack as if they were Chess pieces**. 

That is, every player plays a unique role/character. They receive a card that tells them "this is how you move" and "this is how you capture other pieces". (Some of those will be direct copies from Chess, but I can invent way more different movement patterns myself.)

We use this special movement for an actual thematic game that is otherwise completely unlike Chess. Namely, everyone is infiltrating the same secret location, trying to find and steal secrets without getting caught ("captured") by any of the other players moving around.

The most unique mechanic is that all information is sent via radio waves (or walkie-talkie, or internet, whatever you want). As such, if you find anything, you still need to _get the message out_ without anyone intercepting. Similarly, you receive your mission instructions over radio, which means other players might _take a peak_ before the message reaches you and know exactly what your secret mission is.

I think that idea is really strong and has lots of potential. Unfortunately, like with many of my oldest ideas, I heavily overcomplicated it, got stuck, and left a mess of notes about that. I'll give those notes below, summarized to the best of my ability all these years later.

> Note: The source file on GitHub also contains a comment at the end with the original Dutch version. But believe me, it's a mess and you won't get much out of it.

## Core Concept

Players control **secret organizations** exploring a **large abandoned building complex**. Each player starts with **two pieces** placed at different starting locations.

- Everyone knows **which organization** each player represents.
- However, **what each player is searching for is secret**.

The **goal of the game** is to complete missions.

## Turn Structure

During a turn a player **moves** a piece and performs an **action**.

### 1. Move One Piece

Move one piece you control. Remember, this follows chess-like movement patterns.

- If the piece can attack an opponent, the attack **happens immediately**.
- If the piece can attack **multiple targets**, they all die (unless exceptions apply). (WHY DID I THINK THIS WAS A GOOD RULE??)

### 2. Perform One Action

Using one of your pieces (not necessarily the same piece). Possible actions:

- **Place an object** (for example dropping a transmitter)
- **Pick up an object** and carry it
- **Send a message**

### End of Turn

At the end of each turn:

- Players move their **own messages** ("information waves") along their routes.
- Messages requiring responses must be **answered immediately**.

Next player!


### Missions

- Each player receives a **mission** at the start of the game.
- When a mission is completed, the player receives a **new mission**.
- The **first player to complete X missions wins**.

This system prevents the game from ending too quickly if someone happens to start near their objective.

### Mission Communication

Missions are delivered via **information waves**.

- Missions arrive through the player's **receiver**.
- A mission may be **intercepted or modified** before reaching the player.
- If you cannot receive messages, you may not receive your mission at all.

When a mission is completed, the player must also **send confirmation back to their boss**.

## The Game Board

The board represents a **large abandoned building or complex of buildings**.

- The board is a **grid of squares**, similar to a chessboard.
- However, the board **is not fixed beforehand**.

### Exploration System

Players begin in small starting areas (for example **2×2 or 3×3 spaces**).

When a piece moves into an **unexplored square**:

1. Draw a tile from a stack.
2. Place it on the board in any orientation.

Over time the board becomes fully revealed.

Eventually the entire map becomes connected and the **endgame begins**.

### Placement Rules

- It is **never allowed to create a completely sealed area**.
- There must always remain **some path to reach every space**.

### Environment Objects

Players may place or move **object tokens** on the board, such as:

- Barricades placed **on edges between squares** (to hide behind).
- Large objects placed **inside a square** that block movement completely.

### Terrain Layers

Objects may also create **multiple terrain layers**:

- A second layer can be built on top of the first.
- A special action can remove that layer again.

This sounds difficult, but it just means you place another tile on top of the map, adding some walls or furniture or other obstacles that weren't there before. This allows the environment to **change dynamically during the game**.

### Lighting Idea

The building may be **dark or poorly lit**.

Possible mechanics:
- Players only see tokens **near their pieces**.
- Line-of-sight rules determine what can be observed.
- Parts of the map may become hidden again if lights go out.

## Pieces

Each piece has **unique movement rules**. No two pieces in the game move or attack in the same way.

Examples of movement:

- Move **1 square in any direction**
- Move **2 squares in any direction**
- Move **diagonally as far as possible**
- Move **horizontally/vertically as far as possible**
- **Knight move** (one diagonal + one horizontal/vertical)
- Move by **making a corner**
- Other special patterns

Some pieces:

- Can **jump over objects**
- Can **pass through other pieces**
- Cannot cross obstacles

### Movement Traps

A piece may become **trapped**.

For example:
- It enters a space but cannot return using the same movement rule.
- Another player blocks the path.
- A barricade is placed behind it.

This is **allowed and intentional**, even if unfortunate for that player.

### Corner Movement Problem

Some situations require turning corners even when a piece cannot normally move diagonally.  
A special movement rule may be needed to handle such cases.

## Combat

Each piece can attack in different ways.

Examples:

- Attack by **moving onto the opponent's square**
- Attack a piece **adjacent horizontally/vertically**
- Attack a piece **adjacent diagonally**
- Attack **all pieces in a radius of one**
- Shoot along a **horizontal or vertical line**
- Other attack patterns

### Items and Combat

Combat behavior can depend on **items**.

Two possible approaches:

1. Each piece has fixed combat rules.
2. **Preferred idea:** combat abilities depend entirely on the **item the piece carries**.

This prevents identical combat behavior across pieces.

### Death

A piece that is defeated is **dead for the rest of the game**.

Possible exceptions:

- Shields that absorb attacks
- Multiple lives

### Conversion

Instead of killing a piece, you may sometimes attempt to **convert it to your team**.

- Some pieces are immune.
- Success may depend on some condition (to be determined).

## Teams and Alliances

Players may form **teams during the game**.

When two players cooperate:

- Both place a **team token** to show the alliance.
- Allied players **do not automatically attack each other**.

### Betrayal

A player may betray their partner:

1. Remove the alliance token.
2. Immediately attack the former ally.

When betrayal occurs, an **information wave** (see next section) spreads through the game.

If that message **leaves the board**, the entire world learns the player is untrustworthy and they can **never form alliances again**.

If the message does **not** escape the board, the betrayal remains secret.

### Team Rules

- A player may belong to **only one team at a time**.
- Teams can grow: if C joins A+B, the team becomes **A+B+C**.
- There must always remain **at least two different teams** in the game.
- If player C already belongs to a team, they must **leave that team first**.

### Joining a Team

Joining requires communication:

1. Send a **join request message**.
2. One team member sends **acceptance**.

The team must respond **during the turn the request arrives**.

Requests may **not be delayed**.

### Controlling Teammates' Pieces

Teams may optionally allow players to **move each other's pieces**.

This creates uncertainty about whether allies are trustworthy.


## Information Waves

Information waves are the system used to **send messages and signals**.

### Sending a Message

1. A piece sends message **X** to a nearby **transmitter**.
2. Each turn the message moves **from transmitter to transmitter**. (These are fixed locations/spots on the map, so you're just pushing the message along a simple path with arrows/lines.)
3. A receiver within range eventually **receives the message**.

The sender determines the **route** and the **destination**.

If the sender forgets to move the message, it simply takes **an extra round**.

Each piece automatically has a **receiver**.

### Transmitters

Transmitters may be placed on the board.

Types include:

* **General transmitter**: Anyone may use it.
* **Team transmitter**: Only usable by the placing player's team.
* **Interception transmitter**: If a message passes through it, the owner may **read or secretly modify the message**.

### Information Restriction

Any information that could be sent via **information waves** may **never be spoken directly at the table**.

## Leaving the Board

A message has "left the board" when it exits the game world.

Possible methods:

- It moves beyond the **edge of the board**.
- It reaches a hidden **central transmitter**.
- Another special mechanic?

## Possible Message Types

Examples include:

- Team request (**JOIN / LEAVE**)
- Response (**ACCEPT / REJECT**)
- Mission update (**NEW / COMPLETED**)
- Betrayal alert
- Other humorous or absurd messages

## Communication Range

Range rules:

- A piece may receive a message from a transmitter **within 2 squares**.
- A transmitter may send a message to another transmitter **within 3 squares**.


# Scaling Problem

With more players, information waves move **faster** through the network, which may feel strange.

However this can also be interesting:

Advantages:
- Messages arrive faster.

Disadvantages:
- More players means **more chances for interception or modification**.

Possible alternative:
- Only the **owner of a message** may move it during their turn.




<!---
SIMPEL SPELIDEE:

Een soort schaken, maar dan *heel* *anders*.

Je hebt een terrein met allerlei verschillende kamers en hoeken en gaten. Iedereen begint op een andere plek, en heeft een X aantal poppetjes. (Laten we zeggen: iedereen heeft er 2.)

Iedereen speelt een geheime organisatie die op zoek is naar iets. Wie je speelt mag je zelf kiezen (en dat ziet de rest natuurlijk ook), maar waar je precies naar op zoek bent is geheim.

> **Idee:** Men weet welke doelen er allemaal in het spel zitten, en kan zo "deduceren" wat iedereen zoekt? Of is dat saai? Kan dat beter?
>
> **Idee:** misschien moeten we meerdere soorten "bizarre missies" inzitten.

**Doel van het spel:** als eerste krijgen wat je zoekt.

> **Probleem:** het spel kan heel snel voorbij zijn als iemand toevallig dichtbij zijn doel staat, of niet lastig gevallen wordt. \<BEDENK IETS>
>
> **OPLOSSING:** Misschien heeft men *meerdere missies*. Dus, men krijgt een eerste missie aan het begin van het spel. Deze lossen ze op, en dan pakken ze de volgende. Wie als eerste X missies volbrengt, wint.
>
> **IDEE:** Ook deze missies hebben te maken met communicatieproblemen! Je krijgt de missies binnen op je *receiver* via de informatiegolven. Het kan zijn dat ondertussen iemand je missie bekijkt, of verandert, voordat deze aankomt. (En als je niks kunt ontvangen, heb je sowieso een probleem.)
>
> **VERVOLG OP IDEE:** Daarnaast, moet je ook een bericht naar je *baas* terugsturen wanneer je de missie hebt volbracht.

Het **bord** is een verlaten gebouw (eventueel een terrein met meerdere gebouwtjes?). Het is een grid van vierkantjes, net als een schaakbord.

> **Idee:** er zijn losse fiches die te plaatsen/verplaatsen zijn over het grid. Zo kan men bijvoorbeeld een barricade op de rand van een vakje zetten (om achter te schuilen), of een grote ton middenin een vakje om deze helemaal af te sluiten.
>
> **Idee:** dit bord wordt automatisch gebouwd terwijl het wordt onderzocht? Nah.
>
> **Idee:** je begint allemaal los van elkaar in een klein gebiedje (2x2? 3x3?), elke keer als je een zet maakt naar een lege plek (nog niet verkend vakje), trek je een nieuw vakje van de stapel en legt deze neer hoe je maar wilt. (Uiteindelijk is het hele bord met elkaar verbonden en openbaar/onthuld, en begint het eindspel.)
>
> **Idee:** regels voor plaatsen: je mag nooit een geheel afgesloten ruimte maken (er moet altijd een manier zijn om overal te komen).
>
> **Wat wel belangrijk is:** het is heel saai om hier een "vast" bord voor te maken. Dus ofwel we moeten tekeningen/voorbeelden hebben in de spelregels, of er moet wel een mechaniek komen waarmee het bord automatisch random wordt gegenereerd.
>
> **Idee:** fiche op fiche. Bovenop de eerste laag kan men een volgende laag bouwen (met een speciale actie). Met een andere speciale actie kan deze laag weer weg. Hierdoor verandert het terrein ook steeds.
>
> **Idee:** desnoods speelt men in een "donker en slechtverlicht" magazijn, 's nachts. Misschien ziet men alleen de fiches direct in hun omgeving, of kan ik licht en line-of-sight een andere rol geven?

Elk **poppetje** kan op een andere manier bewegen. Bijvoorbeeld:

-   Eén vakje alle kanten op.
-   Twee vakjes alle kanten op.
-   Schuin zover als je kan.
-   Horizontaal/verticaal zover als je kan.
-   De paardensprong (één schuin, één horizontaal/verticaal)
-   Je mag een hoek maken (dus, bijv, twee keer schuin zover je kan)
-   Etc.

Sommige poppetjes kunnen over dingen heen, anderen niet. Sommige poppetjes kunnen *door* andere mensen/dingen heen.

> **Opmerking!** Het kan zijn dat een poppetje vast komt te zitten. Hij beweegt ergens in, maar kan niet op dezelfde manier terug. (Ofwel door de regels, of iemand anders gaat in de weg staan, of er wordt een barricade opgegooid.) Dit is jammer voor die speler, maar zeker niet verboden.
>
> **Opmerking!** In sommige gevallen zal een speler de hoek om moeten. Technisch gezien kan dat niet met een paardensprong (want dat is één schuin, terwijl je niet schuin kan), maar heb je daarvoor een aparte bewegingsmogelijkheid nodig. (\<BEDENK IETS>)

Elk **poppetje** kan op een andere manier slaan/schieten:

-   Je slaat iemand als je op zijn/haar plek eindigt.
-   Je slaat iemand als deze horizontaal/verticaal naast je staat (één vakje).
-   Je slaat iemand als deze schuin naast je staat (één vakje).
-   Je slaat iedereen in een cirkel van één om je heen
-   Je schiet mensen die op dezelfde horizontale/verticale lijn staan als jij.
-   Etc.

Lala

> **Idee:** Hoe ze slaan staat vast voor elk poppetje. Máár, je kunt iets extras toevoegen door poppetjes een item te geven.
>
> **Alternatief idee:** Hoe een poppetje vecht hangt volledig af van het item dat het op dat moment heeft. (Heeft mijn voorkeur! Anders heb je altijd dezelfde manier van slaan als je hetzelfde poppetje speelt.)

Een poppetje dat is geslagen, is dood voor de rest van het spel.

> **Idee:** er zijn uitzonderingen. Poppetjes kunnen een schild hebben dat ze beschermt, of meerdere levens.
>
> **Idee:** in plaats van iemand vermoorden, kan je ook kiezen om die persoon om te zetten naar jouw team. Sommige poppetjes zijn hier, echter, immuun voor. Anderzijds, of het lukt om ze om te toveren hangt af van \<BEDENK IETS>
>
> **BELANGRIJK** er zijn *geen* twee poppetjes in het hele spel die op dezelfde manier bewegen en/of slaan. Dit is denk ik het elegantst.

Je kunt gaandeweg **teams** vormen.

Wanneer jij met een andere speler samenwerkt, krijgen jullie allebei een fiche om dat aan iedereen te laten zien.

*Alleen* als jij met iemand samenwerkt, wordt deze niet automatisch geslagen.

> **Idee:** je kunt iemand "verraden". Dan leg je in jouw beurt het samenwerkingsfiche weg, en je schiet vervolgens je partner neer. Echter, als dit gebeurt gaat er een *informatiegolf* door het spel. Als deze golf het bord weet te verlaten, dan weet de hele wereld dat die speler niet te vertrouwen is, en hij kan met niemand meer samenwerken. (Zo niet heeft de speler geluk, en gaan we gewoon verder.)

Je kunt te allen tijde maar in één team zitten. Dus, stel persoon A werkt al samen met persoon B. Als persoon C wil joinen, komt hij dus automatisch in een team van A+B+C.

> **Idee:** je kunt zelfs elkaars poppetjes verplaatsen! Dit kan zorgen voor dat je nooit zeker weet of iemand daadwerkelijk een goed idee heeft, of jou dadelijk gaat verraden. (Eventueel is dit een optie waar je zelf, als team, een afspraak over kunt maken?)
>
> **Ander idee:** om bij een team te gaan, moet jij een bericht sturen dat je mee wilt doen. Vervolgens moet één van de spelers van het team een bericht terugsturen met "geaccepteerd". (Het lijkt me wat onhandig als *alle* spelers dit moeten doen.)
>
> **Belangrijke limiet:** er moeten altijd minstens twee verschillende teams in het spel zitten!
>
> **Idee:** Als C al in een team zat (van meer dan één persoon), moet deze eerst uit dat team stappen.
>
> **Belangrijke limiet:** men *moet* in de beurt dat een aanvraag aankomt reageren. Men mag dit niet vertragen.

Wat zijn die **informatiegolven?**

Het zijn manieren om "berichten" of "signalen" te sturen naar andere poppetjes. Voor een informatiegolf zijn een aantal stappen nodig:

-   Een poppetje stuurt bericht X (een fiche met bepaalde informatie) naar een transmitter die binnen het bereik ligt.
-   Elke beurt springt dit bericht van transmitter naar transmitter.
-   Een poppetje ontvangt het bericht (van een transmitter binnen bereik)

De persoon die dit bericht heeft verstuurd, bepaalt de route die wordt afgelegd, en waar het bericht uiteindelijk uitkomt. (Als hij het bericht vergeet te verplaatsen, is het zijn eigen schuld en moet hij een extra ronde erover doen.)

Elk poppetje heeft automatisch een eigen *receiver*.

Verspreid over het speelbord kan men *transmitters* droppen. Er zijn verschillende types:

-   **Algemeen:** iedereen mag deze gebruiken.
-   **Team-gebonden:** kunnen alleen gebruikt door het team van de persoon die hem heeft geplaatst.
-   **Storing:** als een bericht hier langs gaat, mag de eigenaar het bericht lezen (en eventueel stiekem veranderen)
-   **Nog meer?**

**Belangrijk:** alle informatie die via *informatiegolven* gegeven kan worden, mag *nooit* zomaar aan tafel worden verteld.

**Vraag:** wanneer heeft een informatiegolf het bord verlaten? Meerdere opties:

-   Als deze over de rand van het bord gaat. (Dus via een transmitter die 1 a 2 vakjes van de zijkant staat.)
-   Als deze langs een "hoofdtransmitter" gaat die ergens verdekt staat opgesteld?
-   Een andere, extra mechaniek invoeren?

Welke mogelijke **berichten** zijn er?

-   Vraag over team (AANSLUITEN of VERLATEN)
-   Reactie op team-vraag (ACCEPTATIE of AFWIJZING)
-   Missie (VOLBRACHT of NIEUW)
-   Iemand heeft zijn team verraden!
-   Nog meer grappige/idiote/absurde dingen?

Wanneer ben je **binnen het bereik?**

-   Een poppetje kan een bericht ontvangen als de transmitter hoogstens 2 blokjes verwijderd is.
-   Een transmitter kan een bericht naar een andere transmitter sturen als deze hoogstens 3 blokjes verwijderd is.

**Vraag:** wat te doen met donker/licht thema? Kunnen delen van het spel bedekt worden (zodat niemand meer weet hoe ze gaan -- oftewel: het licht is uit)? Kunnen delen van het gebouw instorten, of veranderen?

**WAT KUN JE DOEN IN JE BEURT?**

-   Eén poppetje verplaatsen (dat jij mag verplaatsen)
    -   Als dit poppetje iemand *kan* slaan, gebeurt dat ook meteen.
    -   Als dit poppetje *meerdere poppetjes* kan slaan, gaan ze allemaal dood. (Met uitzonderingen, natuurlijk.)
-   Eén actie uitvoeren (met een van jouw poppetjes; niet perse dezelfde)
    -   Ofwel je *plaatst* een voorwerp. (Zoals een transmitter droppen.)
    -   Ofwel je *pakt* een voorwerp op. (En sleurt het mee)
    -   Ofwel je *verstuurt een bericht*.

**AAN HET EINDE VAN ELKE BEURT**

-   Mag men hun eigen berichten verplaatsen
-   Als een bericht een reactie vereist, moet deze meteen worden gegeven.

**Probleem:** hoe meer spelers, hoe sneller de informatie stroomt ... wat raar zou zijn. Hoeft niet per se, trouwens. Kan in je voordeel werken (informatie komt sneller aan), maar ook in je nadeel (er zijn meer opties om de informatie aan te passen). (Alternatief is dat je alleen je eigen berichten verplaatst in je beurt ...)
--->