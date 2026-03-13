---
title: Future To Do
---

**Not really "Future To Do", though, as this game never got further than 1%.**

Game: Figure out some actual rules! What are we doing? What\'s the theme? What\'s the turn structure?

Board Generation:

* Instead of randomly placing planets/stars/moons, place the more intently. (Stars spaced apart, planets somewhere around it, and moons somewhere around THOSE)
* Randomly remove some midpoints to make stuff less crowded
* Add smooth falloff at the edges of the map => maybe just check if something is very close to the edge, and if so, apply a random push back towards the center of the map.
* Offset all points to center it on the page (only a visual adjustment; code stays 0-indexed completely)
* Connections between planet + midpoint should be drawn into planet and turned into \"\"space stations\"\". (Should look good and clearly signal you can land on this planet via those connections.)
* Turn groups of midpoints into asteroid belts. (Pick one at random, follow connections with decreasing probability to grow asteroid group.)
* Add random stuff to the world to make it more magical and vibrant: cities, special sights, secret treasures
* When printing PDF, make sure it automatically scales to full size (why is it not doing that??)

Material Generation:

* Add setting for player count
* Generate a player board for each player + some spaceships and tokens
* Each player gets some advantages/strengths and disadvantages/weaknesses. Additionally, their number and type of spaceships differs.
* The board should be completely sufficient! (No need to read extra rules, cut/print anything else, etc.)
* Add this material as images on page AND add to pdf. (When board generation is done, clear scene, then start a different one.)\"
