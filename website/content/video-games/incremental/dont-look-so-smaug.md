---
title: "Don't Look So Smaug"
categories: ["video-games"]
tags: ["incremental"]
language: "en"
progress: 1
---

An idea based on a really strong fantasy, but which struggles to put that into concrete (simple-to-code) gameplay logic.

> **Try to steal a treasure from under the nose of a dragon.** 

The coins you steal on each attempt are permanent and used to buy upgrades. (We can have a mode even where it DOESN'T reset, so next time those exact coins will be gone and you have an easier/faster path.)

* Could be a **stealth thingy.** The dragon keeps moving around. **Clicking a coin will "make a sound"** and awaken the dragon. **Clicking many coins** at once will surely wake it up and it will come storming at you. (Maybe there's some general "alertness" or "anger" meter for the dragon deciding its speed and such.)
  * Yeah, a sleepiness/drowsiness meter. Dragons take some time to wake up and be at full strength. You can also buy tools/upgrades to subdue them a bit more (play lullaby, scented aroma, whatever) to get more control over this.
* Yes, that should work quite well. And then **upgrades** can make your character **move more quickly** between spaces, make less sound, be able to carry more or lift heavier stuff, have more escape routes/defense mechanisms.
* (We could have a mode where the **attempt ends as soon as you leave/the timer is up**. We could ALSO have one where the **attempt ends only when the dragon captures you**; OR if the dragon catches you, then you LOSE all you've gained this attempt (or 50% or something). So it becomes this "push your luck"-thing.)


**I just think this is a really unique theme and core mechanic.** If we can program this "make noise mechanic" well!

* Detect collision between coin/object and something else.
* Detect the speed/severity of that collision, as well as the weight + noisiness of the object.
* Make a sound based on that + send sound waves of that power into the world (radiating from that point)

Alternative Name: Treasureguard Dragons