🧳 WooxTravel – Travel Agency Web Application

WooxTravel is a Laravel-based Travel Agency Management System designed to showcase travel destinations, tour packages, and related travel services. The project follows Laravel’s MVC architecture and provides a clean, organized structure suitable for learning full-stack web development using PHP and Laravel.

This project is developed mainly for academic and learning purposes.

🚀 Features

🌍 Display travel destinations and tour packages

🧾 Manage travel-related content through routes and views

🎨 Responsive UI using Blade templates and Bootstrap

🗂 Well-structured Laravel MVC architecture

⚙️ Environment-based configuration using .env

🧪 Testing support with PHPUnit

🛠️ Technology Stack

Backend: PHP (Laravel Framework)

Frontend: Blade, HTML, CSS, Bootstrap

Database: MySQL

Package Manager: Composer, NPM

Testing: PHPUnit

📂 Project Structure
wooxtravel/
│── app/               # Application logic (Controllers, Models)
│── bootstrap/         # Laravel bootstrap files
│── config/            # Configuration files
│── database/          # Migrations and seeders
│── public/            # Public assets (CSS, JS, images)
│── resources/         # Blade views and frontend assets
│── routes/            # Web routes
│── storage/           # Logs, cache, uploaded files
│── tests/             # Unit and feature tests
│── .env.example       # Environment configuration sample
│── artisan            # Laravel command-line tool
│── composer.json      # PHP dependencies
│── package.json       # Frontend dependencies
│── phpunit.xml        # Test configuration
│── README.md          # Project documentation

⚙️ Setup Instructions
Prerequisites

PHP 8.x

Composer

MySQL

Node.js & NPM

XAMPP / WAMP / Laragon

Installation Steps

Clone the repository

git clone https://github.com/samruddhi2865/wooxtravel.git


Navigate to the project directory

cd wooxtravel


Install PHP dependencies

composer install


Install frontend dependencies

npm install


Create environment file

cp .env.example .env


Generate application key

php artisan key:generate


Configure database

Update database credentials in .env

Run migrations (if applicable)

php artisan migrate


Start the application

php artisan serve


Open in browser

http://localhost:8000

🎯 Project Objective

Learn Laravel MVC architecture

Understand routing, views, and controllers

Practice real-world project structure

Build a domain-based web application (Travel Agency)

🔮 Future Enhancements

Online booking system

Admin panel for managing tours

User authentication and roles

Payment gateway integration

Travel reviews and ratings
