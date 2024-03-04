# PHP Laravel - Task   : Assignment from Coding Junior

##  User Registration / Login System. 
This Laravel application is allow users to Registration. It includes basic functionalities such as user registration, login.

# Features
- User Registration: Users can registration as a new account by providing necessary details.
- User Login: Existing users can log in securely using their credentials.


# Technologies Used
- Laravel v10+
- Bootstrap (latest version)

# Getting started

## Installation

Clone the repository

git clone https://github.com/w3reza/coding_junior_PHP_task.git

Switch to the repo folder

    cd coding_junior_PHP_task

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate


Run the database migrations 

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Acknowledgments
Laravel Documentation: https://laravel.com/docs
Bootstrap Documentation: https://getbootstrap.com/docs
