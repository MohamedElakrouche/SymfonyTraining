E-Commerce Project: Training and Fundamentals
This repository contains the foundation of an e-commerce website project. It serves as a learning exercise to practice the basics of web development, user authentication, and database integration in a secure and scalable manner. The project is designed to gradually implement key features of an e-commerce platform, including products, cart management, orders, payments, and deployment to production.

Project Overview
The goal of this project is to build a foundational e-commerce application while focusing on:

Secure user management (registration and login).
Password hashing for enhanced security.
Database integration for user data.
This project is a work in progress and aims to cover the essential steps of creating an e-commerce platform.

Features Implemented
User Authentication

User registration form with validation.
Secure password hashing using industry-standard practices.
Login functionality for registered users.
Database Integration

Created the users table to store user data securely.
Includes fields for user credentials (e.g., email, hashed password).
Security Measures

Passwords are hashed before being stored in the database.
Validation ensures only valid and secure data is processed.
Technologies Used
Backend Framework: Symfony
Database: MySQL
Templating Engine: Twig
Styling: Bootstrap
Getting Started
Prerequisites
PHP 8.1 or higher
Composer
MySQL or compatible database
A web server (e.g., Apache, Nginx, or Symfony's built-in server)
Installation Steps
Clone the repository:

git clone https://github.com/yourusername/ecommerce-training.git
cd ecommerce-training
Install dependencies:

composer install
Configure the .env file:

Update the database credentials to match your local environment.
Run database migrations:

php bin/console doctrine:migrations:migrate
Start the development server:

symfony server:start
Usage
Access the application at http://localhost:8000.
Register a new user.
Log in using the credentials you created.
Contributing
This project is primarily for personal learning and practice. However, feel free to fork the repository and experiment with additional features or improvements.
