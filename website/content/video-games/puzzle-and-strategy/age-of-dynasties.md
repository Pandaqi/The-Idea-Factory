---
title: "Age of Dynasties"
categories: ["video-games"]
tags: ["strategy"]
language: "en"
progress: 4
---

In the past I was a big fan of _Age of Empires_. Two aspects especially appealed to me: *building an entire empire from nothing* and *exploring the world*. There was nothing more fun than finding out where the water flows, or where new resources could be found, or where the base of your opponent is located. (And then finding a way to get there unseen with your army.)

Unfortunately, however, there are also things I like less about the game.

-   The world is ultimately quite small. Before you know it you have discovered everything, before you know it you are already building right next to your neighbor, before you know it all resources are gone.
-   Managing your colony is too simplistic. I would like to see that you actually have to implement laws, get a political system running, maintain the global economy and trade, etc.
-   There is too little variation, tactics, strategy. Especially in online multiplayer it often comes down to who has the optimal build order best memorized and who can click the fastest.

Now there are many great people who make "mods" for _Age of Empires_ that solve some of those problems, but it is not enough for me. I am also familiar with similar games, such as the Civilization series, but those are also not quite what I am looking for.

That is why I will now explain my own game idea! I would love it if this were ever made. (Essentially my game will become a mix between Age of Empires, Civilization, and something like Europa Universalis. Plus some other things.)

## The idea

It is most fun as an (online) multiplayer game, but can also easily have a singleplayer campaign. The game is 2D, but looks 3D, just like Age of Empires 1 and 2. The reason for this is that it is less heavy for the computer, and therefore it can handle larger maps and more units.

The game is played in realtime. (So not turn-based, like Civilization.)

A random map of the game world is generated. (Of course people may also create nice maps themselves and use those if they want.) This map must be *very large*. The map consists of many areas with a random shape and size (although the differences should not be too large). Some areas are part of land, some are ocean, some are islands, some are polar caps, etc. When you zoom all the way out, you should see something that resembles a realistic world map.

It is important that the map provokes many interesting geographical decisions. So besides sea and land, there are also mountains, deserts, swamps, jungles, rivers (which cannot simply be crossed). It must matter where you do or do not build things, how you arrange (trade) routes, how your army maneuvers and positions itself, etc.

Every player begins in a random area. The rest of the world is black/undiscovered for that person. Besides human players, other neutral population tribes will also start here and there in an area.

The goal of the game is to become the greatest power in the world. You win if all opponents are defeated (possibly because they surrender, or because their territories are under your control). Optionally you can add extra victory conditions. For example, someone who owns more than 50% of all territories wins, or someone who is the first to research the technology for building a rocket.

During the game you therefore mainly have three goals:

-   Explore the world + keep track of what happens everywhere. (Through diplomatic relations, or by letting your people hold high positions in another country, or by secretly sending spies.)
-   Strategically colonize and expand. (It costs a lot to make an area yours, even if it was previously unmanaged, but once that succeeds you gain something.)
-   Build up your economy and everything else, allowing you to defend yourself and attack opponents.

It is important to note that *exploration* and *expansion* are very important. If you are the first to find and take some remote island, you already have a big advantage. If you are the first to find a strategic place along a river or between mountains, you can build a nice safe city there. Because the world consists of *many* areas (200? 300? 500?) a lot is possible if you explore and expand intelligently.

I also find the "espionage" aspect important. In Age of Empires, for example, once you have explored things you already know roughly what everything looks like. If you then also place a few buildings, or a small army, near your opponent, you see everything that happens. I think that is a missed opportunity! In my game you must work hard to gather information. You must equip your boats with radar to detect opponents. You must get spies into a country unseen.

Below I will go into detail about the core parts of the game.

## Starting situation

Everyone starts with two characters: a man and a woman. Despite this simple beginning, every player has a completely different starting situation. This situation determines what you can do/invent, and ultimately also partly determines the culture and way of trade of your civilization.

First of all, everyone begins with different DNA. The man and the woman have random "genes" that make them good or bad at certain things. (Of course this must happen fairly. You do not want one player to have only bad things and another only good ones. Players must be *different*, not stronger/weaker.)

The children they get will inherit those traits again, just like their children, and so it is passed down.

Second, everyone begins with different resources (and weather conditions) in a different area. If you start in the desert you will not use techniques that require a lot of water, if you start in a colder area you will pay more attention to warmth and insulation.

Over time the DNA and the choices you have made (especially at the beginning) will form your "civilization". If this is implemented well, each playthrough should therefore create an entirely new, unique civilization. You started with DNA that produced great physical strength? Your civilization will later be known as "strong". You started with DNA that gave extra IQ? Your civilization will later be known as "intelligent". (You can go even further. For example, that early in the DNA it appeared that people had a preference for the color red, and the computer then gives all your buildings red shades.)

In this way each match becomes completely different and every player will take a different path. Eventually, when you encounter others, you can figure out where their strength lies and make use of it. (Or discover where their weakness lies and exploit it.) This opens the door for much smarter and more strategic diplomatic actions. If one people happens to produce enormous amounts of stone but struggles to get money, they can trade with someone else who does have money but no stone.

## Exploring

Exploring is simple: you select one of your characters and send it somewhere. By character I mean anything that can move: citizens, soldiers, ships, airplanes. (Although airplanes and similar things only become available very late in the game. I doubt this. Maybe it is more fun if those things are left out and there is a ceiling to technological progress. Or if they become more imaginative units: instead of airplanes we give players hot air balloons.)

Once you have explored an area, the geographical elements remain on your map forever, but you do not see what happens there. Someone could build all kinds of things there, or place an army, and you would not see it. You only see what happens in areas that belong to you and areas where your characters are present. (Yes, you therefore see very little if you do not make extra effort. That seemed realistic and good for gameplay to me.)

You must also explore an area before you are allowed to colonize it. (But that seemed obvious to me.)

You *cannot* pass through someone else's area unless that person explicitly has "open borders" with you (or allows immigrants).

## Keeping track of what happens everywhere

There are many ways to keep track of what happens everywhere. Below I give everything I have thought of so far, but there is surely more.

-   If you are friends with someone, you can send characters to work for that person. You lose the manpower (although you do get money for it), but you also receive everything about what happens within that specific area.
    -   An alternative is immigrants/refugees. As long as someone has chosen the law that allows immigrants, you can go there to live. Again: you temporarily lose manpower, but you gain information and shelter. (For example: that other person might be able to feed the characters, and you might not.)
-   You place radar on sea or air vehicles. They will not necessarily see everything happening in surrounding areas, but they *will* see all characters (that can be detected by radar).
-   You send spies! Spies are very expensive, because they require a lot of training and support, but if they are discovered they are immediately gone. A player can discover whether a spy is among their ranks by applying stricter border control, increasing police, manually inspecting someone, etc. (It becomes even more interesting if that person then has a small chance of being persuaded into becoming a double agent. Then you must also watch whether your spy still really belongs to you.)
-   Trade. Suppose you have a trade ship that constantly travels between your harbor and that of a friend. It immediately sees what happens in surrounding areas. On top of that you receive extra information—because traders always start talking with people who have interesting stories ...
-   Chat communication. Of course you can also sometimes just say or ask something in public or private chat. (Whether the other person responds, or tells the truth, is another story ...)
-   You continuously deploy reconnaissance forces. (Think of a drone that keeps flying over areas of the opponent. It costs you many resources, especially if it keeps getting shot down, but it yields a lot of information.)

*Why is it so important that people keep track of what happens?* If you cannot, it is no longer a game. You cannot make a plan, make strategic moves, think ahead, etc. You never know what happens or will happen. If you can see everything *too easily*, it is also no longer a game. You know exactly what everyone else will do, you can never secretly develop a plan or engage in favoritism, it is unrealistic, etc.

Moreover I personally find the idea of uncertainty, exploring what the opponent is doing, deploying spies, etc. very appealing.

## Colonizing

Colonizing an area is simple: you send a character there and click "colonize!". The more characters you send, the faster it goes.

This colonizing *costs* many resources, manpower and time.

At first it *provides*

-   Access to all resources
-   The possibility for population to grow. (As long as at least one man and one woman are in an area, a child appears every so often.)
-   Extra living space (so that you can maintain a larger population).
-   Extra building space (each area can hold one building).

Possibly the area has a strategic position or is necessary to reach somewhere else.

Later areas become increasingly useful. You can collect taxes over each area, you can build more buildings per area, population can grow faster (if they are satisfied and have good housing), build defenses, etc.

During the game a player tries to expand as quickly as possible *without* their whole country collapsing. If you expand too quickly, you probably cannot handle the large population. If you expand too slowly, you will quickly fall behind the rest.

If you colonize an area *that is not connected to your current territory*, it is considered a new country. For example: I started on continent A, but sent a ship to continent B to colonize there, then I have two countries under my rule.

*Note*: I do not know whether players should invent their own country names. That will probably produce a lot of nonsense :p Let the computer automatically generate something nice.

## Government

Each country under your rule can have different rules, laws and systems if you choose that. (By default they all use the same as the "main country".) In addition, each country contains "(capital)cities". The player must have a good balance between city and countryside. In the countryside one can place farms for example, while in the city the university provides new technology. Ideally you have only a few strong, large cities in good positions.

The governing itself happens on two levels: micro and macro.

**Micro:** each character can be individually selected and assigned to a task. You can also split an army within an area and send parts in different directions. (If this becomes too heavy it can always be adjusted. Then all your characters within the same area simply always form one unit. When you assign a new task, one of those units is randomly used to perform it.)

**Macro:** you make decisions (regarding diplomacy, trade, political system, etc.) for the entire country (or an entire city). I think the role of the political system should be highlighted here. If someone sets certain fascist laws, they receive the label fascism. Players who have another system (for example communism) can then never be friends with that person. And if you go too far, your people become angry and start a revolution for independence. (And if you do not win, you lose a colony, which then becomes a "neutral computer player".)

I want to prevent too much micromanagement. That is why I prefer applying everything as much as possible on area, city or country scale.

*Note*: I just realized that technically a player can have two countries under their rule that have *completely opposite* political systems. I do not know what to do with that :p

Which laws and systems should exist exactly, I do not know. It should not become too difficult. It is better to give a player one or two decisions about for example immigration policy than twenty subtly different legislative proposals.

## Economy

Your most important "resource" is **manpower**. Your population has children. When these children later become adults they become part of your *manpower*. (Unless you implement laws that approve child labor. You can also decide to adopt a law where women are not part of the manpower, or instead the men. But I do not immediately see what the advantage of that is :p)

You need manpower to get things done. If an area has 5 manpower for example, you can assign 5 characters to certain tasks. Maybe two of them go chopping wood, two join the army, and one harvests grain.

This manpower must be kept alive. You do this by providing **food** and **drink**. You get this by hunting, building near a river, building a farm, trading with other players, etc. If there is not enough food/drink, your population slowly dies.

To build new buildings you need **wood** and **stone**. Wood you naturally get by cutting trees within your area, and stone by finding stones and breaking them. (I will just write it down.)

The last important "resource" is **happiness** (the English *happiness* sounds better). If your characters are not happy, because of your stupid laws, or wars, or lack of education/entertainment/etc., they work less or stop working. They become sick more easily and reproduce more slowly. If it becomes very bad a revolution starts.

Finally there are some "wildcard" resources. I do not know exactly what to call them, but you choose about 5 to 10 resources that you can also obtain (to a lesser degree) in the world, which are necessary for all other things. For example, *clothing* might require wool. *Weapons* require gunpowder and metal. Possibly you only obtain such a resource after converting it through a process.

In reality you might need 100 additional resources, but that is unmanageable. That is why it is summarized :p

*Huh, no money!? WHAT?* Listen. Money is only important because everyone *agreed* that money is important. In other words, you can decide yourself what functions as "money" in your country. Suppose wood is very scarce in your area, then you can treat that as money. You pay your workers and such in wood. When you then trade with other countries, you must pay attention to the exchange rate. If that other country has *a lot* of wood, you will end up being cheated.

In this way you gain an extra dimension in the game. What do I use as money? When can I best exchange it? How will I evaluate other people's money? (Because you must decide yourself how much something is worth to you. Whether your 10 food is worth 5 wood. Whether your characters are paid enough in that other country.)

*Note*: resources are not shared across everything you own. Each city has its own resources, its own storage and supply. If a city gets into trouble, you must therefore establish trade routes (possibly with yourself) to solve that.

## Buildings

There is not much special here. You have houses for people to live in. Different huts for resources (lumberjack hut, stonecutter hut, etc.). A base/main building. Storage spaces, military buildings, hospitals, schools, police, etc.

Basically a sort of "SimCity meets Age of Empires" :p

As said earlier an area can by default only hold one building, but that can be increased. (Although ... maybe the default should be 2 or 3, because one is very little.)

## Technology

This is also not very special (and already discussed). You start with nothing. Gradually you discover how to build better roads, better soldiers, stronger buildings, better insulation, etc.

What you discover depends very much on your civilization. The DNA determines what people are best at, and how fast research goes (in a certain direction). (Possibly you can only research in a general direction and do not know exactly what you will get. This is realistic—because nobody says "I will discover the wheel in four weeks!"—but it may be too random.)

Moreover, depending on your starting situation, you cannot build everything. It is very nice if you have researched how to make a super cool spear ... but if the resources for that cannot be found anywhere nearby, you should have gone another direction.

Conclusion: non-linear technological progress.

I doubt how far that progress should go. If you start from nothing, it is quite a long distance to today's technology. I still prefer the earlier periods, when people indeed still had to invent the wheel, so I have another idea.

The idea is: "alternative world = alternative technology". Since the map you play on is a sort of alternative version of Earth, it only makes sense to also have alternative technology. In other words, you can go in many directions with technology, you do not know in advance exactly what exists in your match, and it ends in different places. Maybe in your current world people are not smart enough to reach airplanes and remain stuck at hot air balloons. Maybe your civilization discovered the car (but no weapons), while another civilization did not even invent the wheel (but does have strange guns).

My only remark is that this could become "too random/unpredictable". One must guard against that. If that succeeds, if enough structure enters such a system, it seems wonderful to me. Every match is completely different, and people cannot simply memorize the best upgrades and always go for those. All players become a completely different civilization. Eventually you must pay very close attention to which players your civilization is strong against, and which it is hopelessly weak against.

## Fighting

The fighting is also not groundbreaking :p Although, because of the setup of this game, it should proceed much more strategically and tactically than in for example Age of Empires. In my game you must choose position even better, handle your army carefully, colonize the right areas, and take the terrain/circumstances extra into account (as well as the opponent's civilization).

You can only fight with people with whom you are at war. To fight, you send your army into the area where the other army stands. Then they will fight each other until someone wins or someone retreats. (Retreating can only be done to a free area, of course.)

Suppose A and B fight over an area of A. If A retreats to a nearby area of their own, or B defeats A's entire army, A immediately loses their area. If B retreats, or A defeats B's entire army, nothing happens. (That A loses their area does not immediately make it belong to B. The area becomes neutral until someone colonizes it. The buildings and the people also remain. If B colonizes the area, they can decide what to do with it. They can absorb the people into their own nation, or subjugate them as slaves, or kill them all.)

Most "ranged units" can also only attack if they stand in the same area. Only a few ranged units have a large enough range to attack someone from a distance. (For example: archer has too small a range, but catapult is large enough?)

*Note*: if there is no defending army, B only needs to stand in the area for a while to slowly take it from A. In a sense areas have their own "health", depending on how strong the buildings are and how developed the area is. I still doubt exactly how this works, but what is written above is my first guess.

## That's it

This was the whole idea. I do not think it becomes better if it becomes even more complicated than this. (Of course I also mentioned quite a few things only briefly or summarized them in this explanation.)

I would love such a game. I do not know if anyone will ever read this, I do not know if it will ever be made (in this way), but I would think it is cool. (I would have done it myself if I were still pursuing a professional career as a game developer. And if I had been a better programmer :p)

Because I am familiar with game development, I also know quite well that the idea above is very difficult to work out in some respects. How do you make such a large map and large number of units work? How do you balance players if they can build such diverse civilizations? How do you find a good balance between micro and macro management? How do you let all of this run well in *online multiplayer* without too much delay?

But still, it is possible! I am sure of it! And someone has to do it!

<!---
Vroeger was ik een groot fan van _Age of Empires_. Twee onderdelen spraken mij vooral aan: *vanuit het niets een heel rijk opbouwen* en *de wereld verkennen*. Er was niks leuker dan erachter komen waar het water stroomt, of waar nieuwe grondstoffen te vinden waren, of waar de basis van je tegenstander zit. (En vervolgens een manier vinden om daar ongezien terecht te komen met je leger.)

Jammer genoeg, echter, zijn er ook dingen die ik minder vind aan het spel.

-   De wereld is uiteindelijk toch vrij klein. Binnen de kortste keren heb je alles ontdekt, binnen de kortste keren zit je al tegen je buurman aan te bouwen, binnen de kortste keren zijn alle grondstoffen op.
-   Het managen van je kolonie is te simplistisch. Ik zou graag zien dat je daadwerkelijk wetten moet doorvoeren, een politiek systeem aan de gang krijgt, de globale economie en handel handhaaft, etc.
-   Er is te weinig variatie, tactiek, strategie. Zeker in online multiplayer komt het vaak neer op wie de optimale bouwvolgorde het beste in zijn hoofd heeft zitten en wie het snelst kan klikken.

Nou zijn er wel veel geweldige mensen die "mods" maken voor _Age of Empires_ die sommige van die problemen oplossen, maar het is niet genoeg voor mij. Ook ben ik bekend met soortgelijke spellen, zoals de Civilization reeks, maar ook die zijn niet helemaal wat ik zoek.

Daarom ga ik nu mijn eigen spelidee uitleggen! Ik zou het geweldig vinden als dit ooit gemaakt werd. (In essentie wordt mijn spel een mix tussen Age of Empires, Civilization, en iets als Europa Universalis. Plus nog wat andere dingen.)

## Het idee

Het is het leukst als (online) multiplayer spel, maar kan ook prima een singleplayer campaign hebben. Het spel is 2D, maar ziet er wel 3D uit, net zoals Age of Empires 1 en 2. De reden hiervoor is dat het minder zwaar is voor de computer, en dat het daarom grotere kaarten en meer units aankan.

Het spel wordt realtime gespeeld. (Dus niet om de beurt, zoals Civilization.)

Er wordt een willekeurige kaart gegenereerd van de spelwereld. (Natuurlijk, mensen mogen ook zelf leuke kaarten maken en die gebruiken als ze willen.) Deze kaart moet *heel groot zijn*. De kaart bestaat uit heel veel gebieden met een willekeurige vorm en grootte (hoewel de verschillen niet té groot moeten zijn). Sommige gebieden zijn onderdeel van het land, sommige zijn oceaan, sommige zijn eilanden, sommige zijn poolkappen, etc. Als je helemaal uitzoomt, moet je iets zien wat lijkt op een realistische wereldkaart.

Het is belangrijk dat de kaart veel interessante geografische beslissingen uitlokt. Dus naast zee en land, zijn er ook bergen, woestijnen, moerassen, oerwouden, rivieren (waar men niet zomaar overheen kan). Het moet belangrijk zijn waar je dingen wel/niet bouwt, hoe je (handels)routes regelt, hoe jouw leger manouvreert en positioneert, etc.

Iedere speler begint op een willekeurig gebiedje. De rest van de wereld is voor die persoon zwart/onontdekt. Naast menselijke spelers zullen ook hier en daar andere, neutrale bevolkingsstammen in een gebiedje beginnen.

Het doel van het spel is om de grootste macht in de wereld te worden. Je wint als alle tegenstanders zijn verslagen (eventueel omdat ze opgeven, of omdat hun gebieden onder jouw controle zijn). Eventueel kun je extra wincondities toevoegen. Bijvoorbeeld, iemand die meer dan 50% van de totale gebieden heeft wint, of iemand die als eerste de technologie onderzoekt voor het bouwen van een raket.

Gedurende het spel heb je dus voornamelijk drie doelen:

-   De wereld verkennen + bijhouden wat overal gebeurt. (Door diplomatische relaties, of door personen van jou in andermans land een hoge functie te laten bekleden, of door stiekem spionnen te sturen.)
-   Strategisch kolonizeren en uitbreiden. (Het kost veel om een gebied van jou te maken, zelfs als dit gebied tot dusver onbeheerd was, maar als dat is gelukt heb je ook wat.)
-   Je economie en alles opbouwen, waardoor je ook jezelf kunt verdedigen en tegenstanders kan aanvallen.

Het is belangrijk om op te merken dat het *verkennen* en *uitbreiden* heel belangrijk is. Als jij de eerste bent die een of ander afgelegen eiland vindt en inneemt, heb je al een groot voordeel. Als jij als eerste een strategische plek langs een rivier of tussen bergen vindt, kan je daar mooi een veilige stad neerzetten. Omdat de wereld bestaat uit véél gebiedjes (200? 300? 500?) is er heel veel mogelijk als je slim verkent en uitbreidt.

Ook vind ik het "bespioneer"-gedeelte belangrijk. In Age of Empires, bijvoorbeeld, als je eenmaal de boel verkent hebt weet je al redelijk hoe alles eruit ziet. Als je dan ook nog een paar gebouwen plaatst, of een klein leger, in de buurt van je tegenstander, zie je alles wat er gebeurt. Dat vind ik een gemiste kans! In mijn spel moet je hard werken om informatie te verzamelen. Je moet je boten uitrusten met radar om tegenstanders te ontdekken. Je moet spionnen ongezien een land binnenkrijgen.

Hieronder zal ik in detail treden over de kernonderdelen van het spel.

## Startsituatie

Iedereen begint met twee poppetjes: een man en een vrouw. Ondanks dit simpele begin, heeft elke speler een compleet andere beginstiuatie. Deze situatie bepaalt wat je kunt doen/uitvinden, en bepaalt uiteindelijk ook deels de cultuur en handelswijze van jouw beschaving.

Ten eerste begint iedereen met ander DNA. De man en de vrouw hebben willekeurige "genen" die ze goed of slecht maken in bepaalde dingen. (Natuurlijk moet dit wel eerlijk gebeuren. Je wilt niet dat de ene speler alleen maar slechte dingen heeft, en de ander alleen maar goede. Spelers moeten *verschillend* zijn, niet sterker/minder sterk.)

De kinderen die zij krijgen zullen die eigenschappen weer meenemen, net als hun kinderen, en zo wordt dat doorgegeven.

Ten tweede begint iedereen met andere grondstoffen (en weersomstandigheden) in een ander gebied. Als je begint in de woestijn ga je geen technieken gebruiken die veel water vereisten, als je begint in een kouder gebied geef je meer aandacht aan warmte en isolatie.

Over tijd zal het DNA en de keuzes die je (vooral aan het begin) hebt gemaakt je "beschaving" vormen. Als dit goed wordt geïmplementeerd, zou je elke speelbeurt dus een geheel nieuwe, unieke beschaving creëren. Je begon met DNA waaruit grote fysieke kracht kwam? Jouw beschaving staat later bekend als "sterk". Je begon met DNA die extra IQ opleverden? Jouw beschaving staat later bekend als "intelligent". (Je kunt nog verder gaan. Dat, bijvoorbeeld, al vroeg in het DNA voorkwam dat men een voorliefde had voor de kleur rood, en dat de computer vervolgens al je gebouwen rode tinten geeft.)

Op deze manier wordt elk potje compleet anders en zal elke speler een andere weg afleggen. Uiteindelijk, als je anderen tegenkomt, kun je uitzoeken waar hun kracht ligt en daar gebruik van maken. (Of juist ontdekken waar hun zwakte ligt en daar misbruik van maken.) Dit opent de deur voor veel slimmere en meer strategische diplomatische acties. Als één volk toevallig gigantisch veel steen produceert, maar moeite heeft om aan geld te komen, kan deze handelen met iemand anders die wel geld heeft maar geen steen.

## Verkennen

Verkennen is simpel: je selecteert een poppetje van jezelf en stuurt het ergens heen. Met poppetje bedoel ik alles wat kan bewegen: burgers, soldaten, schepen, vliegtuigen. (Hoewel vliegtuigen en soortgelijke dingen pas zeer laat in het spel beschikbaar komen. Ik twijfel hierover. Misschien is het leuker als die dingen weggelaten worden en er een plafond zit aan technologische vooruitgang. Of als het wat meer fantasierijke poppetjes worden: in plaats van vliegtuigen geven we spelers luchtballonnen.)

Als je eenmaal een gebied verkent hebt, blijven de geografische elementen voor altijd in je kaart staan, maar je ziet niet wat er gebeurt. Iemand zou er van alles kunnen bouwen, of een leger kunnen neerzetten, en jij ziet dat niet. Jij ziet alleen wat er gebeurt in gebieden die van jou zijn en gebieden waar poppetjes van jou staan. (Ja, je ziet dus erg weinig als je geen extra moeite doet. Dat leek me alleen maar realistisch en goed voor de gameplay.)

Ook moet je eerst een gebied verkennen voordat je het mag kolonizeren. (Maar dat leek me vanzelfsprekend.)

Je kunt *niet* door een gebied heen van iemand anders, tenzij diegene expliciet "open borders" heeft met jou (of immigranten toelaat).

## Bijhouden wat overal gebeurt

Er zijn veel manieren om bij te houden wat overal gebeurt. Hieronder geef ik alles wat ik tot nog toe heb bedacht, maar er is vast meer

-   Als je bevriend bent met iemand, kun je poppetjes sturen om voor die ander te werken. Jij verliest de mankracht (hoewel je er wel geld voor krijgt), maar krijgt wel alles mee van wat er binnen dat specifieke gebied gebeurt.
    -   Een alternatief zijn immigranten/vluchtelingen. Zolang iemand de wet heeft gekozen die immigranten toestaat, kun je ernaartoe om er te komen wonen. Wederom: je raakt (tijdelijk) mankracht kwijt, maar je krijgt wel informatie én onderdak. (Bijvoorbeeld: die ander kan de poppetjes te eten geven, en jij misschien niet.)
-   Je plaatst een radar op zee- of luchtvoertuigen. Ze zien dan niet per se alles wat er in omringende gebieden gebeurt, maar wél alle poppetjes (die detecteerbaar zijn door radar).
-   Je stuurt spionnen! Spionnen zijn zeer kostbaar, want ze moeten veel training en ondersteuning hebben, maar als ze ontdekt worden zijn ze ook meteen weg. Een speler kan ontdekken of een spion tussen zijn gelederen zit door bijvoorbeeld betere grenscontrole toe te passen, of meer politie in te stellen, of handmatig iemand te controleren, etc. (Het wordt nóg interessanter als die persoon dan met een kleine kans wordt omgepraat tot dubbelspion. Dan moet je ook nog opletten of jouw spion nog wel echt van jou is.)
-   Handel. Stel je hebt een handelsschip dat de hele tijd pendelt tussen jouw haven en die van een vriend. Die ziet meteen wat er in omringende gebieden gebeurt. Daarbovenop krijg je extra informatie---want handelaars raken altijd aan de praat met mensen met interessante verhalen ...
-   Chatcommunicatie. Natuurlijk kun je ook gewoon soms iets zeggen of vragen in publieke of privé chat. (Of die ander reageert, of de waarheid spreekt, is een ander verhaal ...)
-   Je zet continu verkenningskrachten in. (Denk aan een drone die steeds blijft overvliegen boven gebieden van de tegenstander. Het kost jou veel grondstoffen, zeker als hij steeds wordt neergeschoten, maar het levert veel informatie.)

*Waarom is het zo belangrijk dat mensen bijhouden wat er gebeurt?* Als je dat niet kunt, is het geen spel meer. Je kunt namelijk geen plan maken, geen strategische zetten maken, niet vooruitdenken, etc. Je weet nooit wat er gebeurt of gaat gebeuren. Als je *te makkelijk* alles kunt zien, is het ook geen spel meer. Je weet precies wat de rest gaat doen, kunt nooit in het geheim een plan uitwerken of vriendjespolitiek bedrijven, het is onrealistisch, etc.

Bovendien vind ik zelf het idee van onzekerheid, verkennen wat de tegenstander doet, spionnen inzetten, etc. erg aantrekkelijk.

## Koloniseren

Een gebied koloniseren is simpel: je stuurt er een poppetje naar toe en klikt op "koloniseren!". Hoe meer poppetjes je stuurt, hoe sneller het gaat.

Dit koloniseren *kost* veel grondstoffen, mankracht en tijd.

Het *levert* in eerste instantie

-   Toegang tot alle grondstoffen
-   De mogelijkheid om populatie te groeien. (Zolang minstens één man en één vrouw in een gebied zijn, verschijnt eens in de zoveel tijd een kind.)
-   Extra leefruimte (zodat je een grotere populatie in stand kan houden).
-   Extra bouwruimte (elk gebied kan één gebouw aan).

Eventueel heeft het gebied een strategische ligging of is het nodig om ergens anders te komen.

Later heb je steeds meer aan gebieden. Je kunt belasting heffen over elk gebied, je kunt meer gebouwen bouwen per gebied, bevolking sneller groeien (als ze tevreden zijn en goede huisvesting hebben), verdedigingswerken bouwen, etc.

Gedurende het spel probeert een speler zo snel mogelijk uit te breiden *zonder* dat zijn hele land in de vernieling stort. Als je te snel uitbreidt, kun je waarschijnlijk de grote populatie niet aan. Als je te langzaam uitbreidt, loop je al snel achter op de rest.

Als je een gebied kolonizeert *dat niet aan jouw huidige gebied vastzit*, wordt het gezien als een nieuw land. Bijvoorbeeld: ik ben begonnen op continent A, maar heb een schip naar continent B gestuurd om daar te kolonizeren, dan heb ik twee landen onder mijn bewind.

*Opmerking*: ik weet niet of spelers hun eigen landnamen moeten verzinnen. Daar komt vast veel onzin van :p Laat de computer maar automatisch iets leuks maken.

## Landsbestuur

Elk land onder jouw bewind kan andere regels, wetten en systemen hebben als jij daarvoor kiest. (Standaard gebruiken ze allemaal hetzelfde als het "hoofdland".) Bovendien bevat elk land "(hoofd)steden". De speler dient een goede afwisseling te hebben tussen stad en land. Op het land kan men bijvoorbeeld boerderijen plaatsen, terwijl in de stad de universiteit voor nieuwe technologie zorgt. Het liefst heb je slechts enkele sterke, grote steden op goede posities.

Het besturen zelf gaat op twee niveau's: micro en macro.

**Micro:** elk poppetje kan je individueel selecteren en op een taak zetten. Ook kan je een leger binnen een gebied bijvoorbeeld splitsen en andere kanten opsturen. (Mocht dit te zwaar zijn kan dit altijd aangepast worden. Dan vormen al je poppetjes binnen eenzelfde gebied gewoon altijd één unit. Als je een nieuwe taak neerzet, wordt random één van die units gebruikt om hem uit te voeren.)

**Macro:** je maakt beslissingen (qua diplomatie, handel, politieke systeem, etc.) voor het hele land (of een hele stad). Ik denk dat daarbij de rol van het politieke systeem moet worden uitgelicht. Als iemand bepaalde fascistische wetten instelt, krijgt deze het stempel fascisme. Spelers die een ander systeem hebben (bijv. communisme) kunnen dan nooit bevriend zijn met diegene. En als je te ver doorslaat, dan wordt je volk boos, en begint het een revolutie voor onafhankelijkheid. (En als je niet wint, verlies je een kolonie, die vervolgens een "neutrale computerspeler" wordt.)

Ik wil voorkomen dat er teveel micromanagement moet gebeuren. Vandaar dat ik de voorkeur geef aan alles zoveel mogelijk op gebied-, stad- of landsschaal toepassen.

*Opmerking*: ik bedenk net dat technisch gezien een speler twee landen onder zijn bewind kan hebben die *compleet tegenovergestelde* politieke systemen hebben. Ik weet niet wat ik daarmee moet :p

Welke wetten en systemen er allemaal precies moeten komen, weet ik niet. Het moet niet te moeilijk worden. Het is beter om een speler één of twee beslissingen te geven over bijv. immigratiebeleid, dan twintig subtiel andere wetsvoorstellen.

## Economie

Je belangrijkste "grondstof" is **mankracht**. Jouw bevolking krijgt kinderen. Als deze kinderen even later volwassen zijn worden deze onderdeel van jouw *mankracht*. (Tenzij je wetten instelt die kinderarbeid goed vinden. Ook kun je besluiten om een wet aan te nemen waarbij vrouwen geen onderdeel zijn van de mankracht, of juist de mannen. Maar ik zie niet direct wat daar het voordeel van is :p)

Mankracht heb je nodig om dingen gedaan te krijgen. Als een gebied bijvoorbeeld 5 mankracht heeft, kun je 5 poppetjes op bepaalde taken zetten. Misschien gaan twee daarvan houthakken, twee het leger in, en eentje graan oogsten.

Deze mankracht moet in leven worden gehouden. Dit doe je door **eten** en **drinken** te geven. Je krijgt dit door te jagen, langs een rivier te bouwen, een boerderij te bouwen, te handelen met andere spelers, etc. Als er niet genoeg eten/drinken is, sterft je populatie langzaam af.

Om nieuwe gebouwen te bouwen heb je **hout** en **steen** nodig. Hout krijg je natuurlijk door hout binnen je gebied om te hakken, en steen door stenen te zoeken en die kapot te maken. (Ik schrijf het toch maar even op.)

De laatste belangrijke "grondstof" is **geluk** (het Engelse *happiness* klinkt beter). Als jouw poppetjes niet blij zijn, door jouw stomme wetten, of oorlogen, of gebrek aan onderwijs/entertainment/etc., gaan ze minder of niet meer werken. Ze worden sneller ziek en planten minder snel voort. Als het heel erg wordt begint een revolutie.

Als laatste heb je nog wat "wildcard" grondstoffen. Ik weet niet precies hoe je het moet noemen, maar je kiest een stuk of 5 à 10 grondstoffen die je ook (in mindere mate) kunt verkrijgen in de wereld, welke nodig zijn voor alle overige dingen. Bijvoorbeeld, *kleding* zou iets van wol nodig hebben. *Wapens* hebben kruit en metaal nodig. Eventueel krijg je zo'n grondstof pas nadat je het (via een proces) hebt omgezet.

In het echt zou je misschien wel 100 extra grondstoffen moeten hebben, maar dat is ondoenlijk. Vandaar dat het samengevat wordt :p

*Huh, geen geld!? WAT?* Luister. Geld is alleen belangrijk omdat iedereen *afgesproken* *heeft* dat geld belangrijk is. Oftewel, jij kunt zelf besluiten wat als "geld" fungeert in jouw land. Stel, hout is heel schaars in jouw gebied, dan kun je dat als geld zien. Jij betaalt jouw werkers enzo uit in hout. Als je dan met andere landen gaat handelen, moet je opletten wat de wisselkoers is. Als dat andere land héél veel hout heeft, ga je bedrogen uitkomen.

Op deze manier krijg je een extra dimensie in het spel. Wat gebruik ik als geld? Wanneer kan ik dat het beste wisselen? Hoe ga ik andermans geld beoordelen? (Want je moet zelf beslissen hoeveel je voor iets over hebt. Of jouw 10 eten wel 5 hout waard is. Of jouw poppetjes wel genoeg betaald krijgen in dat andere land.)

*Opmerking*: grondstoffen zijn niet gedeeld over alles wat je hebt. Elke stad heeft zijn eigen grondstoffen, zijn eigen opslag en voorraad. Als een stad in de problemen komt, moet je dus handelsroutes opstellen (eventueel met jezelf) om dat op te lossen.

## Gebouwen

Hier is niet zoveel bijzonders. Je hebt huizen voor mensen om in te leven. Verschillende hutjes voor de grondstoffen (houthakkershut, steenhakkershut, etc.). Een basis/hoofdgebouw. Opslagruimtes, legerruimtes, ziekenhuizen, scholen, politie, etc.

Eigenlijk een soort "SimCity meets Age of Empires" :p

Zoals eerder gezegd kan een gebied standaard maar één gebouw aan, maar dat kan worden vergroot. (Hoewel \... misschien moet de standaard 2 of 3 worden, want één is erg weinig.)

## Technologie

Dit is ook niet veel bijzonders (en al behandeld). Je begint met niks. Gaandeweg ontdek je hoe je betere wegen kan aanleggen, betere soldaten, stevigere gebouwen, betere isolatie, etc.

Wat je ontdekt hangt heel erg af van je beschaving. Het DNA bepaalt wat men het beste kan, en hoe snel onderzoek gaat (in een bepaalde richting). (Eventueel kun je slechts in een algemene richting onderzoeken, en weet je niet precies wat je krijgt. Dit is realistisch - want niemand zegt "ik ga het wiel ontdekken, over vier weken!" - maar kan té willekeurig zijn.)

Bovendien kun je, afhankelijk van je beginsituatie, niet alles bouwen. Het is hartstikke leuk als je hebt onderzocht hoe je een supercoole speer kunt maken ... maar als de grondstoffen daarvoor nergens in je buurt te vinden zijn, had je beter een andere kant op kunnen gaan.

Conclusie: niet-lineaire technologische vooruitgang.

Ik twijfel hoe ver die vooruitgang moet gaan. Als je vanuit het niets begint, is het wel een erg lange afstand naar de technologie van vandaag. Ik voel toch meer voor de eerste perioden, voor dat mensen inderdaad nog het wiel moeten uitvinden, dus ik heb een ander idee.

Het idee luidt: "alternatieve wereld = alternatieve technologie". Aangezien de kaart waarop je speelt een soort alternatieve versie van de aarde is, lijkt het alleen maar logisch om ook alternatieve technologie te hebben. Oftewel, je kunt heel veel kanten op met technologie, weet van tevoren niet precies wat er in jouw potje zit, en het eindigt op andere plekken. Misschien is men in jouw huidige wereld niet slim genoeg om tot vliegtuigen te komen en blijft men steken bij luchtballonnen. Misschien heeft jouw beschaving de auto ontdekt (maar geen wapens), terwijl die andere beschaving niet eens het wiel uitvond (maar wel gekke geweren heeft).

Mijn enige kanttekening is dat dit "te willekeurig/onvoorspelbaar" kan worden. Daar moet men voor waken. Als dat lukt, als er genoeg structuur in zo'n systeem komt, lijkt het me geweldig. Elk potje is compleet anders, en men kan niet gewoon de beste upgrades uit hun hoofd leren en daar altijd voor gaan. Alle spelers worden een compleet andere beschaving. Uiteindelijk moet je heel goed opletten tegen welke spelers jouw beschaving sterk is, en tegen welke hij juist hopeloos zwak is.

## Vechten

Ook het vechten is niet baanbrekend :p Hoewel, vanwege de opzet van dit spel, zou het een stuk strategischer en tactischer moeten verlopen dan in bijvoorbeeld Age of Empires. In mijn spel moet je nog beter positie kiezen, zuinig omgaan met je leger, de juiste gebieden kolonizeren, en het terrein/de omstandigheden extra meenemen (net als de beschaving van de tegenstander).

Je kunt alleen vechten met mensen waarmee je in oorlog bent. Om te vechten, stuur jij jouw leger het gebied in waar het andere leger staat. Vervolgens zal men elkaar bevechten totdat iemand wint of iemand zich terugtrekt. (Terugtrekken kan alleen naar een vrij gebied, natuurlijk.)

Stel A en B vechten om een gebied van A. Als A terugtrekt naar een eigen gebied in de buurt, of B verslaat het hele leger van A, verliest A meteen zijn gebied. Als B zich terugtrekt, of A verslaat het hele leger van B, gebeurt er niets. (Dat A zijn gebied verliest, maakt het niet meteen van B. Het gebied wordt neutraal totdat iemand het koloniseert. De gebouwen en de mensen blijven ook staan. Als B het gebied koloniseert, kan hij beslissen wat hij ermee doet. Hij kan de mensen opnemen in zijn eigen volk, of ze onderwerpen als slaven, of allemaal uitmoorden.)

Ook de meeste "ranged units" kunnen alleen aanvallen als ze in hetzelfde gebied staan. Slechts enkele ranged units hebben een groot genoeg bereik om vanaf een afstand iemand aan te vallen. (Bijvoorbeeld: boogschutter heeft te kleine range, maar katapult is groot genoeg?)

*Opmerking*: als er geen verdedigend leger is, hoeft B slechts een tijdje in het gebied te staan om het langzaam van A af te pakken. In zekere zin hebben gebieden een eigen "health", afhankelijk van hoe sterk de gebouwen zijn en hoe ver ontwikkeld het gebied is. Ik twijfel nog een beetje hoe dit precies gaat, maar wat hierboven staat is mijn eerste beste gok.

## Dit was het

Dit was het hele idee. Ik denk niet dat het beter wordt als het nog gecompliceerder wordt dan dit. (Ik heb natuurlijk ook heel wat dingen maar kort benoemd of samengevat in deze uitleg.)

Ik zou zo'n spel geweldig vinden. Ik weet niet of iemand dit ooit leest, ik weet niet of het ooit (op deze manier) gemaakt wordt, maar ik zou het tof vinden. (Ik zou het zelf gedaan hebben als ik nog een professionele carrière als spellenmaker achterna ging. En als ik een betere programmeur was geweest :p)

Omdat ik bekend ben met spellenmaken, weet ik ook best wel dat bovenstaand idee op sommige punten erg moeilijk is om uit te werken. Hoe maak je zo'n grote map en grote hoeveelheid units werkend? Hoe balanceer je spelers als ze zulke uiteenlopende beschavingen kunnen opbouwen? Hoe vindt je een goede balans tussen micro- en macromanagement? Hoe laat je dit allemaal *online multiplayer* goed draaien zonder al te veel vertraging?

Maar toch, het kan! Ik weet het zeker! En iemand moet het doen!
--->