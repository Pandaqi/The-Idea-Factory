## Todo / Bugs / Issues

-   **Critical:** AI crashes using the converter.
-   **Critical:** Sometimes riverMode isn't turned off for things, or it's turned off too early? (After only one or two swaps?)
    -   **When undoing**, it doesn't reset previousSwap properly?
-   Magnets do weird stuff => sometimes they occupy the same spot as a river?
-   Sometimes, sniper value is nil in blocksByName
-   *Improvement*: instead of removing blocks entirely (from the character/blocks arrays), just temporarily disable them.

**THE OBJECTIVE PROBLEM:** The objective really needs to be more solid and more fun. Now it's *really hard* to move the flag into your own half. (And until you can get to the flag, there's not much to do.)

> **Solution 1**: give the flag magnetism so it *automatically* falls toward your player half. (To compensate, maybe there is one specific location where the flag needs to end up, instead of the whole player half.)
>
> **Solution 2**: provide more blocks that allow faster/more controlled movement of flags (among other things) => for example, a teleport character. Whenever it switches with something, that something is immediately swapped towards the *original location* of the teleporter. (This is clearly marked. If there's something there, it gets swapped away.)
>
> **Solution 3**: come up with a completely different objective.

**TO DO: Fog system**. Whenever a character moves (or is placed), all tiles around it have their fog removed. => Is this even a good idea? It makes it harder to see all matches!

### Computer Opponent / Alpha-Beta Algo

**TO DO:** Allow computer to know all the rules:

-   When generating movesList, also check if magician is influencing anything.
-   (All other rules and effects are taken into account automatically. It uses the same functions/system as player actions.)

**TO DO:** The ultimate speed-up: just fill more of the field with blocks!

-   Create more blocks that are heavy, (almost) immovable
-   And fill the field almost completely with these blocks! (Just check how many empty spaces there are, and fill everything, minus some random error.)

**TO DO:** Speed it up.

-   Order moves
-   Transposition tables
-   Heuristics for ignoring moves/considering them only later

### General

Create button that opens a **pause menu/overlay**.

-   Add "restart" and "back" buttons to this menu. (More?)
-   Close menu by pressing somewhere outside/on "cross" button (top-right)

Create as many **blocks/tiles ( = random layouts) and characters** I can think of.

-   Experiment with how to make them as fun and interesting as possible!
-   (Give clear paths to victory in all cases => move flag down or kill stuff)

How to do the **tutorial?**

-   Create level-screen.
-   Every 5 levels or so, introduce a new character. Explain it => from that moment on, it is always available in levels.
-   When playing a quick match, you can enable/disable as you wish. (Can you unlock stuff by watching advertisments?)

**Problems/To-do:**

-   Levels should be playable/fun/achievable even when you've only unlocked a few of the characters!
-   Create actual level "layouts"? (With certain tiles being unavailable, different shapes, actual islands and stuff.)
-   

