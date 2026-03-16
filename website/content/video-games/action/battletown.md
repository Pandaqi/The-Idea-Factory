---
title: "Battletown"
categories: ["video-games"]
tags: ["action", "online-multiplayer"]
language: "en"
progress: 4
---

Below follows an ambitious idea for a computer game. Since I had decided to stop making games (so that I could focus on my study and health and career where I hopefully *will* earn money), I’m putting it in a blog post, hoping others might be able to do something with it.

The first part below is a concise summary of the game idea. After that follows a more concrete elaboration.

**Note:** for someone who likes simple streamlined games, the idea below is somewhat elaborate. But that is okay. Most ideas have to go through 5, 10, 20 iterations in which they become simpler and more compact each time. For now I am satisfied with the elaborate game idea.

## The concise game idea

**Game in short:** you are a spy who must steal valuable information (and/or eliminate the opponents). This in itself is nothing new; however, I have never encountered the execution I thought of for this before.

**How many players?** You can play alone (or with friends) against the computer, or together on the couch against each other.

**Game style?** 2D, square grid, top-down. (Or a slanted top-down, like most 2D games, especially in the *rogue* genre.)

### How can you win?

There are several game modes.

- *Time pressure*: you play for a fixed amount of time and the one with the most points wins.
- *Secret information*: you must find the opponent’s base, steal secret information from it, and successfully bring it back to your own base.
- *Magical artifact*: many “hints” and secret locations are spread throughout the level; using these you must be the first to find the hidden magical artifact.

### Playfield

A “playfield” (this can be anything, but the most obvious is a small town) is randomly generated. Such a playfield has the following components:

- **Useful architecture**: positioning is very important in the game. There are buildings you can enter, rooms, tunnels, different layers (such as underground or through the ventilation shaft). Many areas are well sheltered and only reachable if you pay very good attention and think carefully, or if your character has a certain power. *Why is this important?* If you want to win this game, you must think carefully and come up with a strategic plan. (This as opposed to “whoever can aim the best or shoot the fastest wins”.) *Give an example?* It seems incredibly cool to me if, for example, during the game you can dig tunnels to enter the opponent’s base from behind, or if there are some well-hidden tunnels and rooms between the buildings that you can use if you have discovered them. Of course this must be balanced well; it should not be *so* easy to quickly dig an unseen tunnel to your opponent that everyone does it.

- **Usable objects**: various objects lie and stand throughout the entire playfield. These are mostly simple things (such as tables, chairs, cabinets), but sometimes you encounter something unique. All these objects can be *torn loose*, *taken along* and *destroyed*. Why would you want that? Well, because you can use them as *cover*, as a *weapon*, or as *building material*. *Why is this important?* Because it once again requires an intelligent and especially creative play style. Every moment you play becomes drastically different, because it depends on what is available in your environment. *Give an example?* You run into a room. You suddenly see that an opponent was already standing there. As fast as you can you run to the table, pick it up, and flip it on its side. Now you have cover while you think about your next action. The opponent comes closer. You see a trash can. You pick it up, drag it to the wall, jump on it, and just in time escape into the ventilation shaft.

- **Adaptable architecture**: it is possible to paint walls/ground/etc. in your color, so that you can walk over it unseen. You can blow up walls (although that of course attracts attention), or place a camera so you can spy on the others from time to time. The architecture of the playfield can be adapted to your wishes (provided you have the right items and such). *Why is this important?* Because I don’t see it often enough in games. I can even think of many things I have never seen before. By putting such emphasis on adaptable architecture, you once again get more emphasis on positioning and making use of what is in your environment. In addition this immediately gives an enormous amount of extra possibilities. (Not only is the architecture of each level different, but *what you can do with it* is also different every time you play.) *Give an example?* You could break down a number of objects, steal the wood from them, and build a staircase to a difficult-to-reach location.

### Restrictions

Contrary to what many people think, creative projects become better with restrictions and simple, characteristic game rules. Often gigantic open worlds or millions of different items are a remedy against disappointing gameplay :p These are my restrictions:

- **Field of view**: you only see things if they are lit, and if they are in your direct surroundings. If you have already been in a certain area, the game will show for example the buildings and rooms, but not whether there are currently characters there or objects have been moved. *Why is this important?* It is realistic and exciting. It also works well together with the idea that *positioning* is important: if you do not take the right position, you will not see the opponent coming. In addition it adds an extra element: lighting.

- **Forbidden to do nothing:** if you do nothing you are out :p This can be applied in many ways. For example: if you stand still for too long, you slowly lose life. A good thematic reason must then be invented for this.

- **Relatively small map:** the smaller the map, the more you are forced to take action and be creative. You do not have to walk enormous distances, or wait a long time until you encounter others. In fact, you could even connect the edges of the map with each other (so if you walk against the end of the map on the left, you immediately appear again completely on the right).

- **Character roles:** there are about 6 different characters to play. Each of them has an enormously useful and unique special power. They only have that power; they cannot take something from others, they cannot switch halfway, and there are also no items that make these character roles somewhat vague.

- **Limited storage:** you only have a small storage for items, and therefore must think carefully about what you do or do not take along.

- **Weapons:** there are “only” about 6/8/10 different weapons. These weapons are general and multi-purpose. (For example: bow and arrow. You can shoot others with it, but also use it as a grappling hook.) Under weapons I also understand tools with which you can for example dig those tunnels. You cannot carry more than one weapon at a time.
    - Weapons require ammunition — you must collect ammunition yourself. If you have shot all your arrows, you must retrieve them yourself. Every bullet you shoot must be picked up again. Therefore you must be very *careful* and also think about how you get the ammunition back.
    - Aiming is important, but not extremely precise. You roughly have nine directions to shoot in, but the hitboxes of characters are large and bullets are steered a little bit if necessary.

### How does it work with lives, dying and spawning?

I hate games where you have to wait a long time (half or a whole minute) before you come back. There are also games where lives are “discrete” (in other words: you have 4 hearts, and when you take damage, one or two whole hearts immediately disappear), and that is often extremely unfair. So I want to do it differently.

Your lives can be any number between 0 and 100. It also depends very much on the situation how much damage you receive. (Suppose someone blows up a wall, and there is a table between you and the explosion, then you take a bit less damage.)

If you die, you are dropped back into the game as quickly as possible, at a random place. You have lost all your items and look like a homeless person. People also *cannot* see which team you belong to and you may not be attacked directly. (You can of course still take damage if a bomb explodes right next to you.) Only when you pick up a weapon again do you transform back into your former self.

### What can a player do?

- **Walking:** This speaks for itself. Some characters walk faster than others.
    - You can also run by pressing an extra button, but that tires you quickly, so that per minute you can perhaps only run for ten seconds.

- **Jumping:** This also seems clear to me. Some characters jump higher, can double-jump, or can hang on walls (and use them to push off).

- **Use weapon:** Hold a button to charge and aim your weapon. (This aiming uses the same buttons as walking.) When you release this button, you shoot.

- **Pick up items:** Items that belong to your current weapon are picked up automatically. (For example: you have a bow and arrow, and walk past some old arrows, then you do not have to do anything to pick them up.) If you do not have a weapon, you also pick those up automatically.  
  If an item does *not* directly belong to you (an object, such as a table), you must press a button to pick it up. From that moment you hold this item above your head. Such an object can be used as a weapon (you throw it at someone else), or as defense (by throwing it away in the right direction).

- **Throw away items:** You must press a button to throw away your current item. (To aim which direction you throw it, you use the same buttons as walking.)

*Note:* you could also say that aiming is done using the second joystick on a controller. You could even take a double-tap approach: the first time you press “X” you enter an aiming mode, and only the second time you press “X” do you actually shoot.

*Note:* there are of course still many buttons left, but I see no reason to use them and prefer to keep it as simple as possible.

## The concrete game idea

Below follows a worked-out, more concrete version of the game idea.

### All weapons

#### Bow and arrow

You shoot arrows.

- **Disadvantage:** such arrows take some time (just like in real life) to reach the opponent, and are therefore easier to dodge. They do less damage than bullets.
- **Advantage:** they can turn (“steer”) during their flight and therefore have a greater chance of hitting something. They work equally well from far away as from nearby. They can shoot through some objects (such as a glass window).
- **Extra power:** if you hold an extra button, you shoot an arrow with a rope attached. With that you can pull yourself toward things.

#### Pistol

You shoot bullets.

- **Disadvantage:** ammunition. Bullets that hit cannot be retrieved (they are inside the opponent), and bullets that miss can get stuck in for example the wall. (Which means you must first smash some things again to retrieve it.)
- **Advantage:** you shoot instantly and in a straight line. The opponent has no time to dodge it. They also do a lot of damage and go through most objects.
- **Extra power:** you can make things explode from a distance. (Place a barrel of oil in the middle of the field, stand on a roof, and when someone comes near you shoot the barrel for an explosion.)

#### Boomerang

You throw a boomerang.

- **Disadvantage:** you must learn to aim well to account for the circular movement.
- **Advantage:** it automatically comes back, it is difficult for others to predict, and you can hit many things at once.
- **Extra power:** you can use the boomerang as defense (by throwing it against an incoming arrow, or using it as a shield)

#### Swiss army knife

This is a collective name for several tools. These are: a shovel, a pickaxe, a hammer, and a knife. *Important*: you do not automatically have these tools. You must find and pick them up yourself. But you can have them all with you at the same time.

- **Disadvantage:** you cannot attack from a distance, and you also hardly do damage.
- **Advantage:** you can do a whole lot of special things. With the shovel you can dig tunnels under the playfield. With the pickaxe you can even break the strongest walls and objects. With a hammer you can build anything you want. With a knife you can attack people from very close by (and kill them in one hit?).
- **Extra power:** you can throw the knife in a straight line.

#### Spy kit

This is also a collective name for some “spy tools”. These are: a paint roller, a camera, a tracker, a disguise. (The mechanism is the same as the Swiss army knife.)

- **Disadvantage:** you literally cannot attack.
- **Advantage:** you can again do many special things. A paint roller can color the environment in your own color; as long as you stand on colored tiles you are invisible to the opponent. You can place a camera somewhere; from that moment you can always (with a special button) briefly check what it looks like there. A *tracker* can be thrown at someone (or something); from that moment you always know where that other person is. You can put on a disguise; everyone who sees you thinks you belong to them, but if you do something suspicious they can still shoot you down.
- **Extra power:** you can turn off all the lights somewhere, and quickly open/close doors/windows. (This means the opponent suddenly cannot see anything anymore, or they must make extra effort to get inside or outside again.)

#### Bomber

You throw bombs.

- **Disadvantage:** you must aim the bombs well, and of course there is a few seconds delay. To keep it simple you can retrieve your own bombs again.
- **Advantage:** bombs do *a lot* of damage and also over a large area.
- **Extra power:** with bombs you can change architecture; blow away walls, collapse underground tunnels, etc.

### All character roles

In my opinion the usefulness of character roles is the following: everyone has something with which they are essential for the team, everyone enjoys playing a character (people are just like that; they prefer to play the elf with a magical spell rather than the generic character with generic powers), and it once again promotes strategy and teamwork.

These character roles I have thought of:

- **The fast one:** this person can jump higher than the rest, run faster, gets tired less quickly.
- **The strong one:** this person has more lives, receives less damage, and deals more damage himself. (Where applicable; he can for example shoot an arrow faster, but with his strength he will not influence a bullet.)
- **The smart one:** lala
- **The sneaky one:** this person emits less light himself, almost takes on the color of the environment (like a chameleon), and can hide more easily behind or inside things. (Possibly: this person makes less or no noise such as footsteps.)
- **The builder:** lala
- **The magical one:** lala

### What can you make/build/pick up?

Lala


<!---
Hieronder volgt een idee voor een computerspel. Aangezien ik had besloten om geen spellen meer te maken (zodat ik me kon focussen op mijn studie en gezondheid en carrière waar ik hopelijk wél geld mee verdien), zet ik het in een blogpost, hopende dat anderen er iets mee kunnen.

Het eerste stuk hieronder is een beknopte samenvatting van het spelidee. Daarna volgt een concretere invulling.

**Opmerking:** voor iemand die houdt van simpele gestroomlijnde spellen, is het idee hieronder wat uitgebreid. Maar dat is oké. De meeste ideeën moeten door 5, 10, 20 iteraties gaan waarin ze steeds simpeler en compacter worden. Voor nu ben ik tevreden met het uitgebreide spelidee.

## Het beknopte spelidee

**Spel in het kort:** jij bent een spion die waardevolle informatie moet stelen (en/of de tegenstanders uitschakelen). Dit is op zich niks nieuws; de uitvoering die ik hiervoor bedacht ben ik echter nog nooit eerder tegengekomen.

**Hoeveel spelers?** Je kunt in je eentje (of met vrienden) tegen de computer spelen, of juist samen op de bank tegen elkaar.

**Spelstijl?** 2D, vierkant grid, top-down. (Of een schuine top-down, zoals de meeste 2D spellen, zeker in het *rogue* genre.)

### Hoe kun je winnen?

Er zijn verschillende spelmodi.

-   *Tijdsdruk*: je speelt voor een vaste hoeveelheid tijd en degene met de meeste punten wint.
-   *Geheime informatie*: je moet de base van de tegenstander vinden, daarvan geheime informatie stelen, en die succesvol terugbrengen bij je eigen base.
-   *Magisch artefact*: door het level verspreid zijn vele "hints" en geheime locaties; jij moet aan de hand hiervan als eerste het verstopte magische artefact vinden.

### Speelveld

Een "speelveld" (dat kan alles zijn, maar het meest voor de hand liggend is een klein stadje) wordt random gegenereerd. Zo'n speelveld heeft de volgende componenten:

-   **Nuttige architectuur**: positionering is heel belangrijk in het spel. Er zijn gebouwen waar je in kan, kamers, tunnels, verschillende lagen (zoals ondergronds of door de ventilatieschaft). Veel gebieden zijn goed beschut en alleen te bereiken als je heel goed oplet en nadenkt, of als jouw personage een bepaalde kracht heeft. *Waarom is dit belangrijk?* Als je dit spel wilt winnen, moet je goed nadenken en een strategisch plan bedenken. (Dit in tegenstelling tot "wie het beste kan richten of het snelste kan schieten wint".)*Geef eens een voorbeeld?* Het lijkt me ongelofelijk gaaf als je bijvoorbeeld gedurende het spel tunnels kunt graven om van achteren in de base van de tegenstander te komen, of als tussen de gebouwen enkele goed verborgen tunnels en kamers zitten die je kunt gebruiken als je ze hebt ontdekt. Natuurlijk moet dit goed gebalanceerd worden; het moet niet zó makkelijk zijn om even ongezien een tunnel naar je tegenstander te graven, dat iedereen dat doet.
-   **Bruikbare objecten**: door het gehele speelveld liggen en staan verschillende objecten. Dit zijn veelal simpele dingen (zoals tafels, stoelen, kasten), maar soms kom je iets unieks tegen. Deze objecten zijn allemaal *los te rukken*, *mee te nemen* en *kapot te maken*. Waarom zou je dat willen? Nou, omdat je ze kunt gebruiken als *beschutting*, als *wapen*, of als *bouwmateriaal*.*Waarom is dit belangrijk?* Omdat het, wederom, een intelligente en vooral creatieve speelstijl vereist. Elk moment dat je speelt wordt drastisch anders, omdat het afhangt van wat er in je omgeving beschikbaar is.*Geef eens een voorbeeld?* Je rent een kamer in. Je ziet ineens dat er al een tegenstander stond. Zo snel je kunt ren je naar de tafel, pakt hem op, en flipt hem op zijn zij. Nu heb je beschutting terwijl je nadenkt over je volgende actie. De tegenstander komt dichterbij. Je ziet een prullenbak staan. Je pakt hem op, sleept hem naar de muur, springt erop, en vlucht net op tijd de ventilatieschaft in.
-   **Aanpasbare architectuur**: het is mogelijk om muren/grond/etc. te schilderen in jouw kleur, zodat jij er ongezien overheen kan lopen. Je kunt muren opblazen (hoewel dat natuurlijk aandacht trekt), of een camera plaatsen zodat je van tijd tot tijd bij de anderen kunt spioneren. De architectuur van het speelveld is aanpasbaar naar jouw wensen (mits je de juiste items enzo hebt).*Waarom is dit belangrijk?* Omdat ik het niet vaak genoeg in spellen zie. Ik kan zelfs veel dingen bedenken die ik nog nooit heb gezien. Door zo'n nadruk te leggen op aanpasbare architectuur, krijg je wederom meer nadruk op positionering en gebruik maken van wat in je omgeving is. Daarnaast geeft dit meteen een enorme hoeveelheid extra mogelijkheden. (Niet alleen is de architectuur van elk level anders, ook *wat je ermee kan doen* is dus elke keer dat je speelt anders.)*Geef eens een voorbeeld?* Je zou een stel objecten kunnen afbreken, het hout daaruit stelen, en een trap bouwen naar een moeilijk te bereiken locatie.

### Restricties

In tegenstelling tot wat veel mensen denken, worden creatieve projecten beter van restricties en simpele, karakteristieke spelregels. Vaak zijn gigantische open werelden of miljoenen verschillende items een remedie tegen teleurstellende gameplay :p Dit zijn mijn restricties:

-   **Field of view**: je ziet dingen alleen als ze verlicht zijn, en als ze in jouw directe omgeving zijn. Als je al in een bepaald gebied geweest bent, laat het spel wel bijvoorbeeld de gebouwen en de kamers zien, maar niet of er op dat moment poppetjes zijn of objecten zijn verplaatst. *Waarom is dit belangrijk?* Het is realistisch en spannend. Ook werkt dit goed samen met het idee dat *positionering* belangrijk is: als jij niet de juiste positie pakt, zie jij de tegenstander niet aankomen. Daarnaast voegt het een extra element toe: verlichting.
-   **Verboden om niks te doen:** als je niks doet ben je af :p Dit kan op vele manieren toegepast. Bijvoorbeeld: als je té lang stil staat, verlies je langzaam leven. Hier moet dan maar een goede thematische reden voor verzonnen worden.
-   **Relatief kleine map:** hoe kleiner de map, hoe meer je wordt geforceerd om actie te ondernemen en creatief te zijn. Je hoeft geen ellenlange afstanden te lopen, of lang te wachten totdat je anderen tegenkomt. Sterker nog, je zou de randen van de map met elkaar kunnen verbinden (dus als je links tegen het einde van de map loopt, verschijn je helemaal rechts meteen weer).
-   **Karakterrollen:** er zijn een stuk of 6 verschillende personages om te spelen. Elk van hen heeft een enorm nuttige en unieke speciale kracht. Ze hebben alleen die kracht; ze kunnen niet iets van anderen overnemen, ze kunnen niet halverwege wisselen, en er zijn ook geen items die deze karakterrollen een beetje wazig maken.
-   **Gelimiteerde opslag:** je hebt slechts een kleine opslag voor items, en moet dus goed nadenken wat je wel of niet meeneemt.
-   **Wapens:** er zijn "slechts" iets van 6/8/10 verschillende wapens. Deze wapens zijn algemeen en multi-inzetbaar. (Bijvoorbeeld: pijl en boog. Je kunt er anderen mee schieten, maar het ook gebruiken als trekhaak.) Onder wapens versta ik ook gereedschappen waarmee je bijvoorbeeld die tunnels kunt graven. Je kunt niet meer dan één wapen tegelijk dragen.
    -   Wapens vereisen munitie - munitie moet je zelf halen. Als jij al je pijlen opgeschoten hebt, moet je die zelf weer terug ophalen. Elke kogel die je schiet moet je weer ophalen. Je moet daarom erg *zuinig* zijn en ook nadenken hoe je de munitie weer terugkrijgt.
    -   Richten is belangrijk, maar niet extreem precies. Je hebt grofweg negen richtingen om in te schieten, maar de hitboxes van poppetjes zijn groot en kogels worden een klein beetje bijgestuurd als nodig.

### Hoe werkt het met levens, doodgaan en spawnen?

Ik haat spellen waarbij je lang moet wachten (een halve of hele minuut) voordat je terugkomt. Ook zijn er spellen waarbij je levens "discreet" zijn (oftewel: je hebt 4 hartjes, en als je schade krijgt, gaat er altijd meteen een of twee hele hartjes vanaf), en dat is vaak overdreven oneerlijk. Dus ik wil het anders doen.

Jouw levens kunnen elk getal tussen 0 en 100 zijn. Ook hangt het heel erg af van de situatie hoeveel schade je krijgt. (Stel iemand blaast een muur op, en er staat een tafel tussen jou en de explosie, heb je iets minder schade.)

Als je doodgaat, word je zo snel mogelijk terug in het spel gedropt, op een random plek. Je bent al je items kwijt en ziet eruit als een zwerver. Men kan dan ook *niet* zien bij welk team je hoort en je mag niet direct worden aangevallen. (Je kan natuurlijk wel schade krijgen als vlak naast jou een bom explodeert.) Pas wanneer jij weer een wapen oppakt transformeer je terug in je vroegere zelf.

### Wat kan een speler allemaal doen?

-   **Lopen**: Deze spreekt voor zich. Sommige karakters lopen sneller dan andere.
    -   Je kunt ook rennen door een extra knopje in te drukken, maar dat vermoeit je snel, waardoor je per minuut misschien maar tien seconden kan rennen.
-   **Springen**: Deze lijkt me ook duidelijk. Sommige karakters springen hoger, kunnen een double-jump, of kunnen aan muren hangen (en ze gebruiken om af te zetten).
-   **Wapen gebruiken:** Houdt een knop ingedrukt om je wapen te laden en te richten. (Dit richten gaat met dezelfde knopjes als waarmee je loopt.) Als je deze knop loslaat, schiet je.
-   **Items oppakken:** Items die bij jouw huidige wapen horen pak je automatisch op. (Bijv: je hebt een pijl en boog, en loopt langs een stel oude pijlen, dan hoef je niks te doen om ze op te pakken.) Als je géén wapen hebt, pak je die ook automatisch op.Als een item *niet* direct bij je hoort (een object, zoals een tafel), moet je op een knopje drukken om ze op te pakken. Je houdt dit item vanaf dat moment boven je hoofd. Zo'n soort object kun je als wapen gebruiken (je gooit het dan naar iemand anders), of als verdediging (door het in de juiste richting weg te gooien).
-   **Items weggooien:** Je moet een knopje indrukken om je huidige item weg te gooien. (Om te richten naar welke kant je het gooit, gebruik je dezelfde knopjes als waarmee je loopt.)

*Opmerking:* eventueel zou je ook kunnen zeggen dat richten gaat met behulp van de tweede joystick op een controller. Je zou zelfs een double-tap approach kunnen nemen: de eerste keer dat je op "X" drukt kom je in een richt-modus, en pas de tweede keer dat je op "X" drukt schiet je daadwerkelijk.

*Opmerking:* er zijn nu natuurlijk nog een hoop knopjes over, maar ik zie geen reden om die te gebruiken en houd het liever zo simpel mogelijk.

## Het concrete spelidee

Hieronder volgt een uitgewerkte, concretere versie van het spelidee.

### Alle wapens

#### Pijl en boog

Je schiet pijlen.

-   **Nadeel:** zulke pijlen hebben (net als in het echt) even tijd nodig om de tegenstander te bereiken, en zijn daardoor makkelijker te ontwijken. Ze doen minder schade dan kogels.
-   **Voordeel:** ze kunnen tijdens hun vlucht draaien ("bijsturen") en hebben zo meer kans om iets te raken. Ze werken even goed van ver als van dichtbij. Ze kunnen door sommige objecten heen schieten (zoals een raam van glas).
-   **Extra kracht:** als je een extra knop ingedrukt houdt, schiet je een pijl met een touw eraan vast. Daarmee kun je je aan dingen optrekken.

#### Pistool

Je schiet kogels.

-   **Nadeel:** munitie. Kogels die raak zijn kun je niet terugkrijgen (ze zitten in de tegenstander), en kogels die mis zijn kunnen vast komen te zitten in bijvoorbeeld de muur. (Waardoor je eerst weer wat dingen kapot moet slaan om het terug te krijgen.)
-   **Voordeel:** je schiet direct en in een rechte lijn. De tegenstander heeft geen tijd om het te ontwijken. Ook doen ze veel schade en gaan door de meeste objecten heen.
-   **Extra kracht:** je kunt van afstand dingen laten exploderen. (Zet een vat olie middenin het veld, ga op een dak staan, en als iemand in de buurt komt schiet je het vat voor een explosie.)

#### Boemerang

Je gooit met een boemerang.

-   **Nadeel:** je moet goed leren richten om rekening te houden met de cirkelachtige beweging.
-   **Voordeel:** hij komt automatisch terug, hij is moeilijk te voorspellen voor anderen, en je kunt veel in één keer raken.
-   **Extra kracht:** je kunt de boemerang gebruiken als verdediging (door hem tegen een inkomende pijl aan te gooien, of als schild te gebruiken)

#### Zwitsers zakmes

Dit is een verzamelnaam voor meerdere tools. Dit zijn: een schep, een pikhouweel, een hamer, en een mes. *Belangrijk*: je hebt deze tools niet allemaal automatisch. Je moet ze zelf vinden en oppakken. Maar, je kunt ze allemaal tegelijk bij je hebben.

-   **Nadeel:** je kunt niet van afstand aanvallen, en je doet ook nauwelijks schade.
-   **Voordeel:** je kunt een hele hoop speciale dingen. Met de schep kun je tunnels graven onder het speelveld door. Met de pikhouweel kun je zelfs de sterkste muren en objecten afbreken. Met een hamer kun je alles bouwen wat je wilt. Met een mes kun je mensen van heel dichtbij aanvallen (en in één keer killen?).
-   **Extra kracht:** je kunt het mes in een rechte lijn gooien.

#### Spionage kit

Ook dit is een verzamelnaam voor enkele "spionnentools". Dit zijn: een verfroller, een camera, een tracker, een vermomming. (Het mechanisme is hetzelfde als het Zwitserse zakmes.)

-   **Nadeel:** je kunt letterlijk niet aanvallen.
-   **Voordeel:** je kunt weer veel speciale dingen. Een verfroller kan de omgeving kleuren in jouw eigen kleur; zolang jij op gekleurde tegels staat ben je onzichtbaar voor de tegenstander. Een camera kan je ergens plaatsen; vanaf dat moment kun je (met een speciaal knopje) altijd even kijken hoe het er daar uitziet. Een *tracker* kan je tegen iemand (of iets) aangooien; vanaf dat moment weet je altijd waar die ander zich bevindt. Een vermomming kan je omdoen; iedereen die jou ziet denkt dat jij bij hen hoort, maar als je iets verdachts doet kunnen ze je wel zo neerschieten.
-   **Extra kracht:** je kunt alle lampen ergens uitdoen, en deuren/ramen snel opendoen/sluiten. (Hierdoor ziet de tegenstander even niks meer, óf ze moeten extra moeite doen om weer naar binnen of buiten te komen.)

#### Bommenwerper

Je gooit met bommen.

-   **Nadeel:** je moet de bommen goed richten, en je hebt natuurlijk enkele seconden vertraging. Om het simpel te houden kun je jouw eigen bommen wel weer terug ophalen.
-   **Voordeel**: bommen doen véél schade en ook nog in een grote omgeving.
-   **Extra kracht:** je kunt met de bommen architectuur veranderen; muren wegblazen, ondergrondse tunnels doen instorten, etc.

### Alle karakterrollen

Het nut van karakterrollen is in mijn ogen het volgende: iedereen heeft iets waarmee hij essentieel is voor het team, iedereen vindt het fijn om een personage te spelen (zo zijn mensen gewoon; ze spelen liever de elf met een magische toverspreuk, dan het generieke poppetje met de generieke krachten), en het bevordert wederom strategie en teamwork.

Deze karakterrollen heb ik bedacht:

-   **De snelle:** deze persoon kan hoger springen dan de rest, sneller rennen, wordt minder snel moe.
-   **De sterke:** deze persoon heeft meer levens, krijgt minder schade, en doet zelf meer schade. (Waar toepasselijk; hij kan een pijl bijvoorbeeld sneller schieten, maar een kogel gaat hij met zijn kracht geen invloed op hebben)
-   **De slimme:** lala
-   **De stiekeme:** deze persoon geeft zelf minder licht, neemt nagenoeg de kleur over van de omgeving (als een kameleon), en kan zich makkelijker achter of in dingen verstoppen. (Eventueel: deze persoon maakt minder of geen lawaai zoals voetstappen.)
-   **De bouwer:** lala
-   **De magische:** lala

### Wat kan je allemaal maken/bouwen/oppakken?

Lala
--->
