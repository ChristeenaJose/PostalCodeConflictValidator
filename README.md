# PostalCodeConflictValidator

## Description

A Laravel-based project with VueJS integration that implements a `PostalCodeConflictValidator` class designed to check if a new sales area has conflicts with existing sales areas. The application validates postal codes or postal code patterns (e.g., `762*` to represent all postal codes between 76200 and 76299).

This project aims to detect any conflicts in sales areas based on postal code definitions provided by multiple sales representatives.

## Features

- **Conflict Detection:** The `PostalCodeConflictValidator` class checks for conflicts between a new sales area and a list of existing sales areas.
- **Sales Area Format:** Postal codes are provided in two formats:
    - A 5-digit code (e.g., `76143`).
    - A pattern with a wildcard (`*`), e.g., `762*` for all postal codes between `76200` and `76299`.
- **100% Test Coverage:** Full test coverage for the conflict validation process.
- **Laravel Backend:** Laravel handles the backend logic and API for conflict checking.
- **VueJS Frontend:** A VueJS frontend interface for inputting sales areas and viewing results.

## Technologies

- **Backend:** Laravel
- **Frontend:** VueJS
- **Database:** MySQL (optional, if needed for storage)
- **Testing:** PHPUnit (for backend tests)

## Setup

### Requirements

- PHP >= 7.4
- Composer
- Node.js and npm
- Laravel 8.x or higher

### Steps to Set Up

1. **Clone the repository**
   ```bash
   git clone https://github.com/ChristeenaJose/PostalCodeConflictValidator.git
   cd postalcodeconflictvalidator
   ```

2. **Install backend dependencies**
    ```bash
    composer install
    ```
3. **Set up the environment Create a .env file by copying the .env.example file:**
    ```bash
    cp .env.example .env
    ```
   - Make sure your .env file has the correct database configuration.(DB_DATABASE=laraveltasklocalhero)
   - If the database laraveltasklocalhero does not exist, create it manually:
   
5. **Generate the application key**
    ```bash
    php artisan key:generate
    ```
6. **Set up the frontend Install Node.js dependencies:**
    ```bash
    npm install
    ```
7. **Run migrations (if using database)**
    ```bash
    php artisan migrate
    ```
8. **Run the application**
    - Start the Laravel development server:
    ```bash
    php artisan serve
    ```
    - In another terminal, start the VueJS development server:
    ```bash
    npm run dev
    ```
### Usage
#### API
- To check for conflicts, send a POST request to /api/validate with the following payload:
    ```json
    {
        "existing_sales_areas": ["76143", "762*"],
        "new_sales_area": ["76201", "76210"]
    }
    ```
- The API will return a list of conflicting sales area patterns. For example:
    ```json
    {
        "conflicts": ["762*"]
    }
    ```

### Frontend
On the frontend, users can input the postal codes for both existing and new sales areas. After submitting the form, the conflicts will be displayed.

### Testing
Run tests using PHPUnit to ensure 100% test coverage.
```bash
php artisan test
```



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

