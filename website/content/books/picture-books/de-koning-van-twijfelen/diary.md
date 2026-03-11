
# Devlog

Welkom bij mijn dagboek(je) over de ontwikkeling van "Koning van Twijfelen" \<TO DO: Link hier>

Ik schrijf deze dagboeken eigenlijk voor mezelf, want het helpt met nadenken over problemen en oplossingen vinden. Maar hopelijk is het leuk om te lezen of heb je er iets aan als je zelf interactieve prentenboeken wilt maken!

## Het idee

Ik wilde een interactief prentenboek maken. Rond die tijd gaf ik toevallig een presentatie ergens waarin ik een stukje over mezelf vertelde. Spontaan noemde ik mijzelf "de koning van twijfelen"

Ik dacht meteen: "hé, dat is een goede titel!"

Al vrij snel bedacht ik dat ik het letterlijk kon nemen. Jij bent een koning. Jouw koninkrijk heet *Twijfelen*. (Elke provincie is een *Twijfel* :p)

In dit boek moet je jouw koninkrijk in goede banen leiden.

Hoe? Elk hoofdstuk gebeurt er iets groots. (Een storm, een virus dat uitbreekt, tekort aan eten, piraten, weet ik het.) Aan het einde krijg je een lijst met opties van hoe je erop kan reageren. Kies er eentje, ga door.

Dat was het originele idee.

## Waarom?

Ik ben geïnteresseerd in (bord)spellen, en in (prenten)boeken. Dit is de combinatie daarvan.

Tevens wil ik altijd nieuwe dingen bedenken en innoveren. Zoveel interactieve prentenboeken zijn er niet, zeker niet zoals ik ze wil maken. Dat maakt het meteen een stuk aantrekkelijker :p

Zoals je kunt verwachten, heb ik veel meer ideeën voor dit "genre", dus de betere vraag is eigenlijk: waarom *dit* specifieke project?

Nou, vanwege iets dat ik heb geleerd in al die jaren van spellen ontwikkelen.

Als je mensen vertelt dat ze, elke beurt in een bordspel, uit dezelfde 4 acties kunnen kiezen ... voelt dat overweldigend. Ze vergeten het, vragen het steeds opnieuw, weten niet wat ze moeten doen. Ook al zijn het *dezelfde* acties elke keer. Ook al zijn het er maar vier.

Als je mensen een *lijst met specifieke opties voorlegt* en vraagt dat ze er één kiezen, stopt het tegenstribbelen. Dat is makkelijk! Ze kijken naar elke optie, checken hoe leuk ze het vinden, en kiezen de winnaar (in hun ogen).

Door elk hoofdstuk een lijst met unieke opties te geven, maak je het heel toegankelijk om te spelen. Je hoeft niet eens te weten hoe het boek werkt: de opties leggen zichzelf uit, hun voorwaarden en hun gevolgen, en je kan er een kiezen die aanspreekt.

(Zelfs als de keuzes dus *compleet verschillend* zijn elke keer. Dat maakt het juist leuk en divers in de ogen van de spelers.)

Vergelijk dit met het volgende. Aan het begin van het boek geef ik een kaart van het land en een lijst met de acties die je kan doen. Vervolgens zeg ik: doe aan het einde van elk hoofdstuk 1 van die acties!

Ik garandeer je dat de meesten compleet zouden *vergeten* dat ze iets moesten doen, of wat ze moesten doen. En aangezien die acties redelijk vaag moeten zijn ("ruil een grondstof voor geld" of zoiets), zullen mensen dus niet weten hoe ze het moeten aanpakken.

Ik denk dat dit idee, voor nu, het makkelijkst is om te maken op zo'n manier dat mensen het goed kunnen spelen.

## Een duidelijker idee

Het idee was erg vaag en liet veel open voor interpretatie. Dus laten we het specificeren.

In principe lees je het boek zoals elk ander boek: je begint aan het begin en bent klaar als je het laatste hoofdstuk uithebt.

Hoe "win" je het spel? Door een bepaald **doel** te behalen zodra je **het verhaal uithebt.**

Echter, als er maar één doel is, kan je het spel niet zo vaak opnieuw spelen. (Tenzij je het zó moeilijk maakt dat je honderd pogingen nodig hebt, maar dan stoppen kinderen gewoon na 10 keer.)

Ook wist ik niet precies wat dat doel dan zou moeten zijn. Zoveel mogelijk geluk in je land? Zoveel mogelijk mensen? Een precies aantal mensen?

Nee, het leek me logischer om **missies** of **scenario's** te maken. Zo'n missie:

-   Heeft een bepaalde startkaart. (Dus hoe het koninkrijk eruitziet als je begint.)

-   En één duidelijke, concrete manier waarop je wint. (Zoals: minstens 100 goud in de schatkist.)

Maar het is een *interactief prentenboek*. Kinderen van veel verschillende leeftijden en capaciteiten moeten het kunnen lezen.

Dus ik moest ook **moeilijkheidsgraden** hebben. Gelukkig is dat niet zo moeilijk in dit systeem: *verlaag gewoon het getal dat je moet halen.* Als je minstens 50 goud moet halen, in plaats van 100, is de kans veel groter dat het binnen een paar pogingen lukt.

Ik bedacht de niveaus "Baby", "Prins" en "Koning" (voor elk scenario), wat dus gewoon oplopende getallen zijn.

## Is dat niet ongelofelijk veel werk?

Nee. Niet als je een *computer* de scenario's laat doorrekenen!

Het idee is als volgt:

-   Ik schrijf een programma

-   Waarin ik de *kaart* kan invoeren en de *keuzes* (van elk hoofdstuk, die staan natuurlijk vast).

-   En dan berekent deze *alle* mogelijke paden hierdoorheen.

-   Dan sorteer ik die op basis van hoe je de missie wint: bijvoorbeeld op hoeveel *goud* je aan het einde hebt. Op basis van de getallen die daaruit komen, kan ik inschatten wat een goed doelwit is. (Als er bijvoorbeeld maar twee oplossingen zijn met een goudwaarde boven de 100, lijkt me dat inderdaad een goed doel voor de hoogste moeilijkheidsgraad.)

Dit is niet *makkelijk* of *snel gedaan*. Zeker niet. Maar het is natuurlijk veel sneller dan dat ik zelf, handmatig, 20 scenario's (met 3 moeilijkheidsgraden) moet bedenken en waterdicht maken.

En ik heb soortgelijke dingen al eerder gedaan voor computerspellen.

Dit legt wel enkele restricties op.

-   Keuzes moeten *eenduidig zijn.* Ik moet niet zeggen: "Je kiest ervoor om de piraten aan te vallen. Ofwel je verliest X goud, ofwel je verliest Y eten." Want dan moet er een keuze *in een keuze* worden gemaakt.

-   Keuzes mogen niet *willekeurig zijn*. Ik kan een dobbelsteen toevoegen en zeggen dat een worp onder de 3 succes is, maar dat kan zo'n computer dus niet doorrekenen. Past tevens niet bij dit idee.

-   Er moeten niet té veel keuzes en hoofdstukken zijn.

Die laatste vergt wat extra uitleg.

Het probleem is natuurlijk dat er véél mogelijkheden zijn. En zelfs computers hebben moeite met biljoenen situaties uitrekenen.

Stel je hebt een boek met **5 hoofdstukken** en elk hoofdstuk heeft **5 keuzes**. Nee, dan heb je niet 25 mogelijke oplossingen. Je hebt 5 *tot de macht* 5 = 3125.

Zelfs in dit vroege stadium heb ik al 15 mogelijke gebeurtenissen ( = hoofdstukken) bedacht, de meeste met méér dan 5 opties. Dat aantal loopt snel op.

Wat kunnen we hieraan doen?

We kunnen zorgen dat *sommige keuzes afvallen*. Ik merkte steeds meer hoe handig het was om keuzes een voorwaarde te geven: dit kan je alleen kiezen als je reputatie X is, of dit kan alleen als je Y goud betaalt.

De totale hoeveelheid keuzes op een pagina is misschien 10. Maar afhankelijk van de situatie zijn er vaak maar 2 of 3 "geldige" keuzes, wat veel beter is.

## Een nóg duidelijker idee

### Keuzes met Voorwaarden

Een belangrijk deel van leiderschap is natuurlijk ... *wie* de leider is.

Ik speelde al een beetje met het idee dat de Koning zou kunnen sterven en dat je een opvolger moest kiezen. Toen ik hoofdstukken bedacht met vijanden die aanvielen, of een plaag die uitbreekt, werd dit nog belangrijker.

Ineens was er een reële kans dat de koning halverwege je potje stierf en je een opvolger moest kiezen uit diens kinderen.

Tja, verschillende leiders zullen verschillende keuzes maken.

Weet je wat dat betekent? **Keuzes zijn afhankelijk van wie de baas is.** Op een pagina staan misschien 10 keuzes, maar alleen de eerste 5 kan de koning maken. De volgende twee kan je alleen maken als de oudste zoon de baas is. De andere drie alleen als iemand anders het land heeft overgenomen.

Als je dit allemaal samenneemt, zie je dat keuzes nogal afhankelijk zijn van bepaalde voorwaardes. Dus dat moet een belangrijk deel zijn van het ontwerp: icoontjes/kleuren die dit aangeven.

-   "Deze keuze behoort tot leider X"

-   "Voor deze keuze heb je Y van dit nodig, anders mag het niet"

-   "Deze keuze is alleen beschikbaar op moeilijkheidsgraad Z"

(Dit helpt opnieuw met het verminderen van de *valide* keuzes die mijn algoritme moet nagaan.)

### Paniek!

Het is vrij moeilijk om een gevarieerd spel te maken als je altijd van begin tot eind door het boek loopt.

Het leek me leuker om toe te staan dat je *heen en weer springt*. Niet zomaar, natuurlijk, maar volgens de regels van het boek.

-   Standaard: je gaat simpelweg naar het volgende hoofdstuk.

-   Speciale Keuzes: deze vertellen je naar welk specifieke hoofdstuk je moet gaan

-   Paniek: als je land in een crisis komt, moet je naar het bijbehorende paniekhoofdstuk

Een crisis? Jup.

Ik weet op dit moment nog niet precies *hoe* je het land gaat regelen. (Grondstoffen? Fiches? Vage meters zoals "geluk" en "reputatie"?)

Maar ik weet wel dat er situaties zijn die onhoudbaar zijn en sowieso een crisisreactie moeten opleveren. Zoals: al het eten is op, al het geld is op, overbevolking, etcetera.

Aan het einde van *elk hoofdstuk* ( = elke keuze), controleer je of een van deze situaties aan de gang is. Zo ja, moet je dus naar het bijbehorende "paniekhoofdstuk". Daar krijg je een paar harde keuzes. En als je geen daarvan kan maken, verlies je direct het spel.

(Voelt logisch. Helpt tevens met de simulatie: hoe sneller je "slechte potjes" kan afkappen, hoe sneller de code door kan naar het volgende!)

## Hoe regel je een land in een prentenboek?

Dé grote vraag van dit project.

Het is een garantie dat je bij zo'n project eerst *te moeilijk begint* en het daarna moet versimpelen. Dus ik stond mezelf toe om allerlei dingen toe te voegen die me leuk leken voor "versie 1", daarna zou ik de ruwe randjes er wel af halen.

### Versie 1

**Ten eerste:** we hebben een kaart nodig. Deze moet vaststaan, want het moet geprint. Dat betekent dat ik een lay-out voor het land moet tekenen, opdelen in provincies, en iets van terrein moet geven.

Maar, herinner je nog dat elke missie een andere beginkaart kan hebben? Dat kan alleen als de rest dus *niet* vaststaat. Mensen die er wonen, gebouwen, natuur, al die dingen moeten met *fiches* die je erop kunt leggen of eraf kunt halen.

**Ten tweede:** die fiches kunnen we dan meteen gebruiken voor de rest van het spel.

Een land heeft natuurlijk inwoners nodig: **Mensen** en **Dieren**.

Het heeft gebouwen of structuren nodig:

-   **Universiteit** => levert Kennis op (essentieel als je "slimmere" keuzes wilt maken)

-   **Natuur** => essentieel voor keuzes die meer geluk of gezondheid opleveren

-   **Graanvelden** => levert Eten op => elk persoon eet 1 eten

-   **Mijnen** => levert Steen op (om meer dingen van te bouwen)

-   **Huizen** => nodig om mensen in je land te laten wonen => 1 huis per persoon

**Ten derde:** moesten deze fiches iets *doen*.

Hier kwam ik in de problemen.

Je wilt zeggen: "een gebouw produceert alleen iets als een mens erin werkt" (Voelt raar als je koninkrijk vrolijk allerlei dingen produceert terwijl er geen ziel woont :p)

Maar ja, wat is dan het idee van Huizen? Als we mensen op andere gebouwen gaan leggen?

En is dat niet een vervelende extra stap, eerst mensen aantrekken en dan ook nog op de juiste plek moeten leggen anders gebeurt er niets?

Op dezelfde manier had ik de simpele regel: "nadat je een keuze hebt gemaakt, eet elk persoon één etensfiche uit diens provincie"

Maar dan ben je constant etensfiches aan het plaatsen en weghalen, en *waar* ze precies liggen is ook nog cruciaal.

Het was allemaal te ingewikkeld, te veel stappen. En dan waren we nog niet eens bij de laatste stap.

**Ten vierde:** algemene statistieken over het land. De voornaamste is natuurlijk hoeveel *goud* we hebben.

Aan het einde van je keuze, betaalt ieder persoon belasting in de vorm van één goudstuk.

Dat goud is hard nodig om de "leukere" keuzes te betalen.

Daarnaast merkte ik dat zoiets als "reputatie" en "geluk" erg belangrijk waren. Ze bepalen immers of jouw onderdanen achter je keuzes staan, of hoe succesvol je met het buurland kan onderhandelen.

Maar ja, dan hebben we dus óók nog 4 van die meters naast het koninkrijk. Nog meer stapels met fiches op een A4tje.

Maar het is een begin. Laten we eens verder kijken.

### Versie 2

**Ten eerste:** Ik wil zo *min* mogelijk dingen "automatisch" laten gebeuren. Zo min mogelijk regels *buiten* de keuzes zelf, die je als speler dus moet onthouden of zelf toepassen.

(Enerzijds omdat het saai is en een slechter spel betekent. Anderzijds omdat mensen het gaan vergeten, en dan valt het hele idee uit elkaar.)

Dus zoiets als "graanvelden produceren automatisch 1 eten" is leuk en logisch ... maar het kan beter.

Wat nou als we dit soort dingen **ook een keuze maken?**

Dus bij een aantal hoofdstukken is de keuze iets als: "Zet al je mensen in om eten te maken. Elk graanveld levert direct 1 voedsel op."

Twee grote voordelen:

-   Het haalt die losse regeltjes weg. Spelers hoeven zelf niks te doen of onthouden de hele tijd.

-   Het maakt keuzes nóg moeilijker. Want misschien heb je nú niet dat eten nodig ... maar wat als het nog 5 hoofdstukken duurt voordat je opnieuw de kans krijgt je graan te oogsten?

**Ten tweede:** op dit moment kan de leider van het land in maar liefst *zes staten* zijn. (Koning, kind #1, kind #2, kind #3, vijandige overname, geen leider.)

Da's een beetje veel. Laten we het terugbrengen tot *twee kinderen*, waarvan de tweede alleen in het spel komt *als je daarvoor kiest*. Als je géén leider kiest, eindigt het spel meteen. Dat brengt het terug naar 3 of 4 mogelijkheden.

**Ten derde:** nu is de regel "1 mens = 1 eten". Dat zorgde voor twijfels over hoe *dieren* te eten kregen. En het zorgde dus voor teveel fiches die steeds moesten worden verplaatst.

Op dezelfde manier was "1 mens = 1 gebouw/huis" té druk, terwijl dieren blijkbaar ... overal konden worden geplaatst?

Laten we twee problemen in één klap oplossen.

-   **Elk *huis* kan 4 mensen/dieren waarborgen.**

-   **Je betaalt 1 eten per huis.**

We groeperen dingen zodat de getallen laag en behapbaar blijven. En regels simpeler worden.

**Ten vierde:** ik zou willen dat er een manier was om die "algemene meters" (zoals "reputatie") intuïtief en zichtbaar te maken.

Maar ik kan niks vinden.

Ik dacht eraan om deze dingen te verbinden met andere grondstoffen die we al hebben. Bijvoorbeeld: het geluk van mensen is gelijk aan hoeveel natuur je hebt en hoe laag de belasting is.

Maar dit heeft twee grote nadelen:

-   Het is makkelijk te vergeten (of verkeerd toe te passen)

-   Het maakt verschuivingen (vanwege keuzes) onmogelijk. Ik kan niet meer zeggen "+2 Geluk!" want er is geen metertje meer dat je even twee omhoog kan schuiven.

### Versie 3

**Ten eerste:** weet je wat we moeten doen? We moeten *nog* harder leunen op "alles is een keuze".

Ik wilde belasting een groot, langdurig effect geven. Maar dat is simpelweg niet mogelijk, niet zonder allemaal extra regeltjes te verzinnen die men *elk hoofdstuk* moet handhaven.

Dus dan maken we het maar een keuze. Een heel aantal problemen krijgen als oplossing: "Verhoog/verlaag de belasting. Blabla gevolgen."

Nu gaat vrijwel alles dus via een keuze: bouwen/vernietigen van gebouwen, aantrekken van inwoners, gebouwen dingen laten produceren, etcetera.

**Ten tweede:** de twee losse regels "betaal 1 eten per huis" en "elk huis betaalt 1 belasting" voelden dubbelzinnig. Zeker nu belasting niet meer een metertje is met een aantal dat steeds verandert.

Dus er is nog maar één regel over: "na het maken van een keuze, betaalt elk huis 1 goudstuk belasting per 1 eten dat ze krijgen"

(Je hebt dus zelf de keuze om meer eten te geven als je meer goud denkt nodig te hebben. Ook is het realistisch: wie meer dingen koopt of gebruikt, betaalt daar meer belasting over.)

**Ten derde:** ugh, die globale metertjes blijven me achtervolgen.

Ik heb van "eten" ook maar een metertje gemaakt. (Voelde raar om dat als enige nog met losse fiches te doen, was niet consistent.) Dus het probleem wordt nog erger!

Dus ik heb "Reputatie" en "Geluk" samengevoegd in "Tevredenheid".

Ja, je verliest wat. Het is niet precies hetzelfde natuurlijk. (Je kunt nu niet meer de Reputatie van de leider zwaar omlaag gooien als de koning is gestorven, bijvoorbeeld.)

Maar de winst is een zwaar versimpeld spel, en dat is het waard.

En toen zag ik een patroon: **elk gebouw heeft een metertje gekregen.** De relatie is één-op-één, best wel duidelijk.

-   Graan => Eten

-   Huis => Goud (via belasting betalen)

-   School => Kennis

-   Natuur => Tevredenheid (ik had al enkele situaties bedacht waarbij het hebben van meer natuur je helpt met geluk van je inwoners)

Kan ik dit gebruiken?

Aan de andere kant: we hebben dus *vier* dingen die constant moeten worden bijgehouden, en allemaal gaan ze alleen vooruit als je een *optie* kiest die dit direct doet. Dat is nogal lastig om te balanceren. Omdat eten altijd belangrijk is, zal je eigenlijk altijd die graan optie kiezen.

En als laatste probleem: zoiets als "tevredenheid" zou naar een negatief getal kunnen gaan. Dat lijkt me niet handig in een prentenboek.

Gelukkig is dat redelijk op te lossen. We gebruiken alsnog *fiches* voor deze waardes.

-   Het is fysiek en intuïtief. Goudstukken, in plaats van een metertje dat je geld aangeeft.

-   Je kan niet onder de 0. (Want ja, je kan niet "-1 fiches" neerleggen.)

-   Je "tevredenheid" begint altijd op een vrij hoog getal (5 of 10). Je moet het wel héél erg verpesten als je dan onder de 0 probeert te duiken.

### Versie 4

**Ten eerste:** om even aan iets anders te denken, ging ik alvast uitschrijven hoe ik de code hiervoor zou schrijven.

Toen ik bij het onderdeel van "mensen/dieren wonen in huizen" aankwam, kreeg ik een onderbuikgevoel. Dit was nét een beetje stom om te programmeren. Wat suggereert dat het ook nét een beetje stom is om in het spel te stoppen.

De hele tijd is er al het idee van "provincies" (ook wel "Twijfels"). Maar die hebben nu helemaal geen betekenis. Dat is jammer, want in zekere zin zijn dat al *groeperingen* die ik kan gebruiken!

Kinderen kennen het idee van een provincie of grenzen van een gebied. (Misschien niet perse in detail of bij deze naam, maar het idee is genoeg.)

Wat nou als we de kaart opdelen in \~6 provincies, en elke provincie speelt de rol van een "huis" nu?

-   Provincies hebben een aantal "vlakken" in de vorm van de gebouwfiches. Een gebouw moet je dus op één van die vlakken bouwen.

-   Gebouwen laten cirkels zien die aangeven: hé, hier moet je mensen/dieren plaatsen.

-   Provincies *zonder inwoners* noemen we "Onbelangrijke Twijfels" en doen niks.

```{=html}
<!-- -->
```
-   Je krijgt 1 goudstuk belasting voor elk stuk eten dat je een *provincie met inwoners* geeft.

Dit heeft de volgende voordelen:

-   Je ziet precies waar ruimte is voor mensen en óf je ruimte hebt. (Je hoeft niet die regel te onthouden van "4 mensen/dieren in een huis")

-   Het deelt het probleem van een *heel koninkrijk* op in kleinere, behapbare probleempjes.

-   Je hebt specifieke plekken om je gebouwen te plaatsen. (En het kan vol geraken.)

-   Ik kan in mijn keuzes naar specifieke provincies verwijzen, waardoor locatie belangrijk wordt. Misschien hebben sommige provincies wel een bonus of handicap?

**Ten tweede:** mijn ontwerpersbrein zegt dat ik dat hele idee van "dieren" (naast "mensen") moet schrappen. Het maakt niet veel uit voor de huidige versie van het spel, terwijl het wederom een goede versimpeling is.

Maar kinderen houden van diertjes. En ik hou van diertjes.

Dus ik heb een andere oplossing bedacht!

Mensen ... *worden dieren*. Woooow.

Het is een prentenboek voor kinderen. Ik kan best wat fantasierijker worden en de inwoners van Twijfelen veranderen in een stel dieren. Weet je wat, we geven ze een naam: **Twivi**.

Dit heeft twee extra voordelen:

-   Ik wilde sowieso wat meer "fantasierijke" elementen in het verhaal krijgen. Als de inwoners al zelfverzonnen beesten zijn, helpt dat om die sprong te maken.

-   Het creëert afstand tot de kern van waar dit boek over gaat. Ik weet zeker dat veel ouders een boek als dit meteen zouden afschrijven omdat ze bang zijn dat hun kind rare ideeën krijgt over politiek ofzo. (Onterecht en geen gezonde houding voor ouders, maar het is wat het is.) Hoe meer je de inhoud *weghaalt* van de realiteit, hoe meer je de *details* verandert, hoe minder het opvalt. Dan wordt het gewoon een prentenboek over een of ander fantasy koninkrijk besturen -- leuk toch?

**Ten derde:** natuurlijk kan ik onderdelen weglaten op de *makkelijkere* moeilijkheidsgraden. Dat ik bijvoorbeeld het hele concept van "Scholen => Kennis" negeer als je op "Baby" speelt. Elke keuze die daarmee te maken heeft, is simpelweg niet beschikbaar dan.

**Ten derde:** zo, nu is het wel zwaar versimpeld. Ik zie niet wat ik nog meer weg kan halen zonder dat het hele spelelement praktisch niet aanwezig is.

Dit is de gehele uitleg van het spelelement:

-   Lees de hoofdstukken van begin tot eind.

-   Kies aan het einde steeds één optie en doe wat het zegt.

-   Krijg 1 goud per 1 voedsel dat je aan een provincie met Twivi geeft.

-   Check de drie panieksituaties (geen voedsel, geen geld, geen plek voor Twivi)

-   Speel door tot je verliest of het boek uit hebt.

Alle andere complexiteit zit aan mijn kant (bij het genereren van de puzzel), of geheel in de keuzes zelf.

Het is ook hoogste tijd om het *in de praktijk* te bekijken. Want misschien heb ik nu allemaal dingen bedacht die gewoon totaal niet werken, of was de vorige versie toch beter.

Ik moet het maar gaan maken en kijken of de "oplossingen" een beetje interessant zijn.

### Een snelle materiaalcheck

Het spel is simpel -- hartstikke leuk -- maar hoeveel materiaal hebben we hiervoor nodig?

-   De metertjes: 40 fiches. (0 tot 10 in 4 categorieën.)

-   De Twivi: 15 fiches. (Je wilt niet eens dat er meer dan dat nodig is.)

-   De gebouwen: 24 fiches. (6 in elk van de 4 categorieën.)

-   Overige hulpfiches. (Blijkt altijd nodig. Bijvoorbeeld: een paar kruizen om aan te geven dat bepaalde vakjes niet beschikbaar zijn in een specifieke missie.)

-   Eén kaart van Twijfelen.

Meer dan ik had gehoopt. Twee blaadjes voor nodig, minstens. Maar nog behapbaar.

(Mijn vorige prentenboek was véél dikker en had heel veel puzzels: Vierkante Ogre. Maar de basisregels bleven natuurlijk hetzelfde, en de puzzels zo klein mogelijk, dus die had aan één A4tje met materiaal genoeg.)

### Unieke Fiches

Na een nachtje slapen besefte ik dat het spel zo steeds meer "abstract" is geworden. Eigenlijk is elk fiche hetzelfde en is het een kwestie van getalletjes balanceren.

Enerzijds kan ik daar niks aan doen: om een spel simpel en speelbaar te maken *moet* het een abstracte vorm van de werkelijkheid zijn.

Anderzijds kan je het wel *aankleden* op een manier die dit verbergt. (Dat is dan ook wat alle spellen doen. Goocheltrucjes om spelers alsnog het idee te geven dat ze meer doen dan het abstracte probleem in de kern oplossen :p)

Ik zie twee manieren:

-   **Unieke Tekenstijlen:** De Twivi fiches hebben allemaal een *ander* gezicht. (Eventueel geldt hetzelfde voor de gebouwen die allemaal nét een andere vormgeving hebben.)

-   **Unieke ("One-Off") Fiches:** Heel veel problemen hebben een keuze met een uniek fiche! Bijvoorbeeld, als er **piraten** komen, kan je ervoor kiezen om ze te laten blijven en dus een speciaal **piratenfiche** op het land te leggen. Er is maar één zo'n fiche, en je kan het spel spelen en hem nooit tegenkomen of gebruiken. Maar daardoor voelt elk potje echt compleet anders en individueel, want je gebruikt steeds net wat andere speciale fiches.

Ja, het verhoogt het werk aan mijn kant. Maar het is relatief weinig moeite voor iets dat het boek 10x beter en interessanter maakt, dus de moeite waard.

Ik dacht eerst: "oh, moet ik die speciale fiches dan niet een beetje verbergen? Anders verklap je al wat er misschien aankomt!"

Maar dat was eigenlijk de verkeerde gedachte. Zodra kinderen zelf de fiches uitknippen/pakken, zien ze meteen die rare fiches, en ik denk dat het *juist* nieuwsgierig maakt. ("Huh? Wat doet die ene piraat hier? Ik hoop dat ik die ergens mag kiezen.")

## De eerste volledige versie

Ik heb nog niks getekend op dit ogenblik. Want er staat nog niks vast, dus dat zou zonde zijn.

Het is puur programmeren, keuzes bedenken en invoeren, en checken wat eruit komt.

Het leek me, echter, wel slim om alvast een ontwerpje te maken voor de *keuzes* en te controleren hoeveel er op één pagina passen. (Ik wil voorkomen dat er ooit een lijst keuzes is die op *twee* pagina's moet.)

### Keuzelijst

Lala TO DO

### Algoritme & Simulatie

Lala TO DO

