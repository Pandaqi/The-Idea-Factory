# To-Do

## 1st Priority

### Storms

* Merge the original implementation (with health and stuff) with the StormRealistic I created in playground.
* How to weaken them over time (with buildings/obstacles)? Can I check for body_entered signal? And then take an average over all points inside a wind line?

### Game Loop

* Start with a few gems on the map
* Add camera + proper map sizing/bounds usage
* Close game loop and check if it's actually fun

TUTORIAL (sketch/wip):
* Press SPACE to become invincible; this drains your gems.
* Press SPACE again to stop; this throw any gems used in the direction of your arrows.
* Gems automatically recharge when the storm passes over them.
* You can only pick up fully charged gems.


## 2nd priority

### Storms

* Ramp up over time (speed + health + shield + THICKNESS + number of them)
* Storm moves player (and loose objects) around (like being blown into the wind)? => Add a module we can simply add to all those things

### Map

* Place fixed spots for special actions => when using a gem, it checks where you are and picks the action accordingly.
* Place buildings using gems (and they wind-break the storms) => for now, you're still just defending yourself.

## 3rd priority

### Map

* Place people => you're protecting the people now.
* When placing a building, people in nearby area will move into it.
* Allow upgrading buildings to higher levels (which also increases the range) => first-time building is expensive, but upgrading less so?


* Try alternative input method of ..
  * You drop gemstones automatically once depleted
  * You can still move around freely

@IDEA: Gems are sorted by "exhaustion-percentage", and when using you always start with the first one, and when dropping you always do the last one ( = most empty) => This is just another Health module, isn't it?