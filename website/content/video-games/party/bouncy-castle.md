---
title: "Bouncy Castle"
categories: ["video-games"]
tags: ["party"]
language: "en"
progress: 0
---

**A physics-based party game where players are on a bouncy castle!**

In other words, the whole environment is bouncy, players are constantly bouncing.

Your goal is to push others off the field. (Different mode: you're playing ball sports on that bouncy castle.)

**How on earth do we make this?**

-   **SoftBodies?** Nah, can't *inflate* those again.
-   **Use a bunch of spheres, draw a *mesh* around them**. (The spheres would need to stay together somehow. And each frame, we need to update the mesh to contain all related spheres.)
-   **Forget realism**. Just model something that looks like a bouncy castle, add fake tweens to objects, and do the bouncing through physics manipulation.
