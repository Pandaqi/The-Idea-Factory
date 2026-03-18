---
title: "Card & Soul"
categories: ["video-games"]
tags: ["strategy", "local-multiplayer"]
language: "en"
progress: 2
---

A **(cooperative) card game** with **simultaneous turns**.

-   Everyone has their own *deck of cards.* (Displayed above their head? In a corner?)
-   Each turn, people can freely play any cards from their hand, try out moves, etc.
-   Once everyone is satisfied, the changes are committed and the actions are handled.

To make this work, everyone is their own **player character,** and the field is a **grid**. Yes, *moving* would also be a card that you play!

Basically, I wanted to see if you could make a "deck building" or "card-based video game" that can be played _multiplayer_. One where _everything_ happens via selecting and deselecting cards, so you can even play with multiple people behind the same screen, and you're all part of the same world.

More specifically,

-   Players simply play cards, choose targets, etcetera in real-time (simultaneously)
-   *Drawing new cards* or *re-charging "mana"* => how to solve that?
    -   Put on a timer?
    -   Collect stuff around the field to restock?
    -   Only do so when the round ends?
    -   *Cooperate to help each other with this?* => probably strongest. Others need to give you something/work together with you to get new cards.
-   We need some idea of **pauses** or **rounds** anyway. Why? Because people need that time *to read what their card is saying*.
    -   Alternatively, we can go a step further: *add a card that, when played, initiates such a pause/time freeze*.
    -   When that happens, the game completely pauses for X seconds. Nobody can play cards, but you can read your hand, strategize, communicate, and generally take a breather.

## Input

-   Joystick/arrow keys moves through your cards.
-   Press a button to highlight a card (to make it bigger, get extra info, etc.).
-   Hold that button for a second to actually (permanently) *play* the card.

I think an *undo/reset* button per player would also be nice.

## Theme

I **don't** want the typical "fantasy heroes battle monsters" theme that all these games go with. Instead, I want something cute, family friendly, innovative, simple.

How about: **you are ghosts/spirits trying to scare as many people as possible?**

-   The map would just be a simple 2D (or 3D?) layout of a location, perhaps a street or small city.
-   Cards could combine to increase "scariness"
-   More positively, we might also be spirits trying to *help* as many dead people as possible, guiding them to the afterlife.

I also like the idea of **running a school**. But in that case, the whole game would become a parody, with cards like "Teach useless facts" and "Waste time"

## Objective

With a title like "Card & Soul", it feels like we should be guiding spirits or something.

## Notes & Issues

### The Name

Alternative titles:

-   Cardache
-   Deckless Druids
-   Speaking from the Card
-   Eat your Card out
-   **Card & Soul**
-   Follow Your Card
-   A Change of Card

**Proverbs with "heart"** (replace with "card" for a title): <https://www.spellzone.com/blog/Twenty_Five_Idioms_about_the_Heart.htm>

## Problems

These are big problems that would have to be solved to make this game work:

-   **Lack of space** => each player has its *own* deck, with cards that have to be easily readable, without hiding too much of the map
    -   Of course, instead of literal "cards", they could be simplified to just an icon and some text?
-   **Replayability** => how to increase difficulty/make each next level interesting?
    -   Decks are permanent? So after each stage, you keep your deck and must do with what you have?
    -   (In which case, discarding cards/being picky becomes an important factor. As well as permanently losing "the good cards".)
-   **AI** => because it's cooperative, it would need some strong computer challenger.
    -   In this case, it might be *easier* to fight against a *system*, instead of literal enemies.
    -   For example, running a kitchen, running a school, etc.
