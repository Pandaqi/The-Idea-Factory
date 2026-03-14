---
title: "Leaf Blower"
categories: ["video-games"]
tags: ["mobile", "hypercasuals"]
language: "en"
progress: 1
---

You are a cute creature who can do one thing: blow wind in a certain direction.

Leaves are falling from absolutely everywhere. These are just `RigidBody`s with different shapes and sizes. (Would need Matter.js in Phaser.)

When you blow in a direction, it does a simple impulse check:

- Find all leaves within radius
- Blow them *away* from the blowing point
- The closer they are, the more strength is applied

**Objective?** Don't allow leaves to fall in the wrong spots. (So there are spaces they must *not* go, and spaces they *must* go. It's not about destroying leaves, it's about blowing them to other places.)

*Inspiration: "Blowing in the Wind" by Bob Dylan*
