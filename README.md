# User Authentication System

## Setup Instructions

1. Clone the repository to your local machine.
2. Create a MySQL database named `user_auth`.
3. Import the provided SQL script to create the `users` table.
4. Update the `config.php` file with your database credentials.
5. Open your browser and navigate to `index.php`.
6. Follow the registration and login process.

## Features

- User registration
- User login
- User logout
- Basic CSRF protection
- Password hashing for security

## Database  Create Query 
CREATE DATABASE user_auth;

USE user_auth;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


## Set User Account for  Database 
CREATE USER 'people_technologies'@'localhost' IDENTIFIED BY 'people_tech@123#';

GRANT ALL PRIVILEGES ON user_auth.* TO 'people_technologies'@'localhost';

FLUSH PRIVILEGES;
