# To Do

## Read JSON Levels

-   Copy the code and structure from Windup Wizards. (Was *very* clear and useful.)

-   Which means we can easily read JSON files.

-   Use it to show the map + center on it

## Better Commands

-   Make base Command class that each command extends.

    -   Check validity before executing

    -   Have a "failed" state

    -   Have an "instant" mode

    -   Have a default behavior if *no* tween was activated, to still yield. (So we only need to write that code once, can change it any time)

-   Then create the essential commands:

    -   Move

    -   Kill

    -   Eat

    -   Encounter

    -   PointChange

## Make interactive

-   Allow moving by swiping/keypress/controller

-   Eat stuff on our way

-   Follow win/loss condition

## Simulation

### Level 2: Jumping

**Step 1: Jumping**

-   When an edge isn't connected, we can still move there with a jump. (Make it a valid move if we have 1+ points.)

-   Extend the Move command with a Jump command

**Step 2: Jump command**

-   Deducts one point (*command; PointChange*)

-   Creates a new edge + owns it (*command; EdgeToggle*)

**Step 3: Flying entities**

-   These are also placed on edges, but not necessarily active ones.

-   When moving, they also don't need to follow edges. They just pick another adjacent spot between points. (Will need some custom grid calculation magic.)

### Level 3: Specialties

**Step 1: Populate the specialty component**

**Step 2:**

-   In Eat command, also check the specialty.

-   If there is one, call a *SpecialtyChange* command.

**Note:** so, specialties are permanent, until you eat a new one that replaces it.

**Step 3:**

-   Wherever necessary, listen to the specialty.

### Level 4: Moving Entities

**Step 1:** Adapt "Move" to be for edges as well => probably want to split this, into PointMove and EdgeMove. Some duplicate code there is fine

-   They encounter entities on the *point* they cross => PointEncounter, EdgeEncounter commands?

-   And the edge they end up on?

### Level 5: Trails

**Step 1:** make edges you create *yours*. Make entities walking on it *stuck* (command)

**Step 2:** after a move, leave a trail

-   Change the Edge specialty (for non-players)

-   Change the Point specialty (for players)
