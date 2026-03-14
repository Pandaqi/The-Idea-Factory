# To Do

Transfer all our files to new project. Install node modules. Update TS declarations.

**Step 1: a moving basket**

-   Players manager to create PlayerSpawner
-   Player class is a sprite (the basket); the other parts are simply sprites behind it
-   Attach MovementDrag, with correct parameters

**Step 2: chickens flying in and out**

-   Create a Chicken class.
-   Add BoundsSpawner
-   Which adds the FlyIn component and makes them appear

**Step 3: chickens dropping eggs**

-   Give chickens a PointSpawner
-   Create an Egg class => give it to the spawner
-   Create a listener that tells FlyIn to go away when done
-   Destroy eggs when they fall off-screen (below or above)

**Step 4: checking egg overlap with basket**

-   Give egg correct physics body
-   Give basket correct physics body as *sensor*, and two static bodies at the sides
-   React properly on overlap

**Step 5: create systems for zones and blocks**

**Step 6: finish game loop, add more types, icons, etc.**

**Step 7: multiplayer, UI, etcetera**

Use a **BoundsSpawner** (with the screen being the bounds). But add custom functionality to invoke in the add() function => Use this to add a FlyIn component with right target/params

Managers (part of MAP)

-   Zones => this is just a rectangle that checks for overlap. All the \"manager\" does, is make sure these zones don\'t overlap and there aren\'t too many of them.
-   Blocks => again, this manager merely ensures blocks don\'t overlap or create impossible situations. The blocks themselves are rotated to \"nice\" angles (30 degrees, 45 degrees, \...). They are just static bodies.
