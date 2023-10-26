
**Project Description**

This is a programme that allows you to login to create food receipe. you can view the link using this url


https://food.majestylearningfields.com/



**Project Technology**

The project is a Vue 3, Laravel 10 Project.


**Project Requirement**

To run this project you need

Php 8.2.8

Composer 2.5.8

Latest version of MySql

Apache server or any other server

Node v18.16.1

**To use this project Clone, you need to  start up both the laravel and vue applicaton together**


**To setup the laravel applicaton**

Rename .env.example to .env Create a database using the name specific in the .env file Run the following command command

1. composer update

2. Clone the project

3. Rename .env.example to .env

4. Create a database using the name specific in the .env file

5.  the following command command

6. composer update

7. composer install

8. php artisan migrate fresh --seed


**To setup the vue application**

Run the following command command

1. npm install

2. num run dev


**How to use the project**

1. php artisan serve to start the api server

2. npm run dev

3. Open the frontend url on the browser


**Lists of created endpoints**


1. /api/v1/recipes: to create and read recipes


2. /api/v1/restaurants/: to create and view restaurants


3. /api/v1/users/: to create and view  all users;

4. /api/v1/login: login route

5. api/v1/log-out: logout route

**Route payLoad**

1. /api/v1/recipes 

    {

        name:

        instruction:

        calories_count:

        cost:
    }


2. /api/v1/restaurants
   
    {
        image

        name

        city

        description

        address

        opening_hours
    }

3. /api/v1/users/: to create and view users;

    
    {

        email:

        phone_number:

        fullname:

        password:
    }

4. /api/v1/login

    {
        email

        password
    }

**Project limitation**

The backend of the applicaton endpoints are currently working but not all endpoints have been consumed on the frontend.

The restaurant endpoint has not been consumed

**Admin Login**

    {
        email:admin@gmail.com

        password: 12345678
    }
