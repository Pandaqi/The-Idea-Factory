---
title: "Film Festival"
categories: ["video-games"]
tags: ["incremental"]
language: "en"
progress: 2
---

Incremental game about placing people into the seats at a film theater. 

Your goal is to **fill the entire theater** so you can unlock the next, bigger one. 

At first you can only place one customer/viewer at a time, small cinema, picky people with rules that prevent good placement, etcetera. 

Your hand size gets bigger, people move more quickly, their restrictions are loosened, you can play into the kind of film playing, etcetera.

I guess the biggest part of such a game would be **seating and reseating**. Click on a group, move your mouse to put them somewhere else. As you upgrade, the radius of this moving improves, guests are more likely/quicker to follow it, etcetera.

If **seating** is too hard, we can also make it more generic. Like people standing at a concert, people waiting in line at a theme park, etcetera. (This has no fixed positions so moving them is easier.)

Because if you have fixed seats, then we need to do something like ...

* Evaluate from center outwards (closest person to mouse -> furthest)
* Each person goes to sit in the closest seat.

This way, though, it can actually be a **great puzzle-strategy game**. If you have a blob of 5 "blue chairs", and 3 "blue people" waiting somewhere, you really want to grab them in the right way and move them such that they end up seated correctly for maximum points.