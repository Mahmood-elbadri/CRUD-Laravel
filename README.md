# Laravel CRUD Application

A simple CRUD (Create, Read, Update, Delete) application built with Laravel.

![Laravel CRUD](./public/images/laravel-crud.png)

## Table of Contents

- [About the Project](#about-the-project)
- [Getting Started](#getting-started)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## About the Project

This project demonstrates a basic CRUD functionality using Laravel. It includes features such as creating, reading, updating, and deleting posts.

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

Make sure you have the following installed:

- PHP
- Composer
- MySQL

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/yourusername/laravel-crud.git
2. Navigate to the project folder
   ```sh
   cd laravel-crud
3. Install dependencies
    ```sh
    composer install
4. Create a copy of the .env.example file and rename it to .env
    ```sh
    cp .env.example .env
5. Generate the application key
   ```sh
   php artisan key:generate
6. Configure your database in the .env file
    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
7. Run migrations and seed the database
   ```sh
   php artisan migrate --seed
8. Start the development server
   ```sh
   php artisan serve

9. Open your browser and navigate to
   ```sh
   http://localhost:8000
## Usage
    Create, edit, and delete posts using the web interface.
    View the list of posts on the homepage.

