# laravel-project
Laravel project with VueJS integration 

Project setup
---------------------
 1, Download Files
 
 2, If you face any error when you load public directory, execute "composer update" on your cmd box
 
 3, Create DB (.env file)(DB Name : laraveltasklocalhero)
 
 4, Migrate DB
 
 5, Then open, you can see! 


Coding Task PHP/JS
----------------------------
###  Task 1
Implement a PostalCodeConflictValidator class (called "Validator" from here on) with 100% test coverage.

Each sales guy has a list of postal codes defining his sales area. For example: 76143, 762*, ... A postal code is always a 5 digit number or an abbrevation with the star annotation. So expression 762* means that all postal codes between 76200 and 76299 are included.

The validator needs to check if a new sales area has conflicts with the existing sales areas. So the validator will get a list with the codes of all sales guys and a list with codes of the new sales area.

Return all conflicting expressions from the list of all sales guys.



###  Task 2
Implement a view to prioritize the businesses of a sales guy.

Each sales guy needs to focus on specific business types, for example Hotel, Gym, Restaurant.

Implement a Controller with two functions:

Create dummy data and inject/return them into a view
Accept the selected data
Dummy data needs a name and some random stats.

The view should consist of 2 vue components: 

First component is to select multiple categories and call the controller. Use the vue-select library for the multi select.
Second component is to show the selected data in a table. 
