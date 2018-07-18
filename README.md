# Laravel-Blog
Blog made using Laravel, MySQL and Bluma. 

The blog has its buttons and labels written in Portuguese. Although, I tried to coded in English.

First thing was to set up the local environment, which I did not have success using Valet, as recommended in Laravel documentation.
Although, I got a piece of advice from Docker community to use docker compose so I could successfully set it up.
Then, I could finally get to actually learn Laravel and follow as planned with the Sprints, as described bellow.

## Sprints

### First one: CRUD

- [x] Add CRUD functions 
  - [x] Read function with pagination (I've used Bulma, since Vue.js would require more time to learn this specific framework)
  - [x] Create, Update and Delete functions (User can do them when logged, and changes can be applied only to his own posts)
  - [x] Unit Test (Post's title)

### Second one: Users
- Register Users
- Show Post's creator on Read function

### Third one: Search
- Instant Search by Post's title or Post's creator (Algolia)
