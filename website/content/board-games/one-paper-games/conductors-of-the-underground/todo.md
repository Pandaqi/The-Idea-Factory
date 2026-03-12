# Future To-Do

## BOARD GENERATION: Current to-do

* Detect whether all routes are connected. If not, use pathfinding to connect them.
* Find a way to make the routes more VARIED and good-looking. (Now they are mostly straight and parallel.)
* Use recursive flood-fill to find all empty areas on the board. (Will probably do something with them within the game.)
* VISUALS: Give each route its own color + shape. Give stations names.
* Restrictions (that should be used during random walk generation):
* When we\'ve been part of one HUGE station (5+ lines), break away and don\'t allow ourselves to come back.
* Don\'t allow more than X stations between us and the exact same set of lines.
* Fail-safe: If we have too few routes after generation, or too little diversity, mark the whole thing failed and start over from scratch.
* Hexagonal boards:
* Find a way to allow CROSSINGS (in any direction) => if a move is not allowed, check if the move is allowed when DOUBLED. If so, execute it. Mark the node at the crossing with \"\"crossing: true\"\", but don\'t claim it on the new route?
* Find a way to allow VERTICAL movement. (That should be starting from a midpoint, to another midpoint, then into a random direction.)

## BOARD GENERATION: Possible approaches

* Make subway lines smaller ( = more resolution)
* Disallow stations within X distance.
* When adding double connections, pick a side (left/right = positive/negative). Keep track on stations where each offset is, increase by 1 each time.
* When adding double connections \....
* I think the vectors are exactly reversed (to what they should be) at the moment? Or not?
* Adjust angle to match => abort mission if angle is impossible to match.

If all of this fails, try an ALTERNATIVE approach:

* After creating stations, create ROUTES (instead of individual connections).
* Use pathfinding to create the longest route possible which hits as many stations from OTHER routes as possible.
* As you create each route, remember which "side" of each station we're on. Only allow making connections on that side - crossing lines is ugly and messy.

Another ALTERNATIVE approach:

* When placing stations, immediately decide how many routes will go there, and at what angle.
* Now simply pathfind each of those routes towards another, without allowing any overlap. (Start with the ones most on the inside.)
* Repeat until something works (or out of options): find nearest node, pathfind toward it, discard if not possible/a bad option.
* Punish the pathfinding algorithm for changing direction, to keep most connections as straight as possible.
* Reward the pathfinding algorithm for running parallel other tracks.
* FORCE the pathfinding algorithm to start its search in the direction that the station is in.
* BIGGEST ISSUE: Determining the actual routes afterward. Maybe this should be done during generation: when we create a new route, we copy information about the color we\'re coming FROM or we\'re connecting WITH. If these two don\'t match, they are not allowed to connect.

This would also allow cutting the board into 4 pieces. Each piece simply has a special station at the edge, at a fixed location, that can connect with anything.

* Maybe, to make this more thematic/fitting, each piece can be a different \"\"part\"\" of the underworld. Like, one part can be the Styx, another can be the weighing of souls \-- you choose with which parts you play (are all compatible/interchangeable).

## PAGE

* Get a nice font and color scheme.
* Also, should probably give routes colors AND shapes.

## RULES

* Eh \... make up the rules.
