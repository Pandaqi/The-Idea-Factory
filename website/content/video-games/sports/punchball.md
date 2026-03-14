---
title: "Punchball"
categories: ["video-games"]
tags: ["sports", "local-multiplayer"]
language: "en"
progress: 3
---

Everyone is just a **big fist (boxing glove?)**.

By pressing your button, **you _shoot_ in your up direction very quickly**. Then you must wait until the fist returns to its original position/grounded position before you can move again.

This means you must _position_ yourself on ledges and slopes if you want to hit stuff at an angle. (The game constantly updates your boxing glove to show in which direction it would fly away if you pressed your button now.)

It also means you must _wait_ for your fist to return, adding extra strategy and timing. 

> The code would literally be "accelerate until contact with ball; accelerate to get back to ground". If we clamp those speeds a bit, you get an elastic movement and eventually the fist returns to you.

We can also make this a COMBO movement => you have a FIST and you have FEET/BODY. They both attract each other equally, so when the fist returns, it usually meets its body in mid-air, which is also how you _move_.

For a _simpler_ version, though, we might say that your fist always shoots AT the ball, as long as it's within range? For an _even simpler_ first try, make a 2D side-view version?