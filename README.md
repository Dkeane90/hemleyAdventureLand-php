# AdventureLand Website

## Project Structure

adventureland/
│
├── css/
│ └── styles.css
│
├── img/
│ └── (images for the site)
│
├── js/
│ └── scripts.js
│
├── includes/
│ ├── header.php
│ ├── footer.php
│ └── db.php
│
├── pages/
│ ├── about.php
│ ├── login.php
│ ├── ragga_muffin.php
│ ├── kool_runnings.php
│ ├── krazy_karts.php
│ ├── ez_skankin.php
│ ├── arcade.php
│ ├── restaurant_live_music.php
│ ├── faq.php
│ └── ticketing.php
│
├── index.php


## Database Setup
Create a MySQL database named `adventureland` with tables for users.

## Pages
- **About Page:** Description of the park and visitor information.
- **Login Page:** User authentication form.
- **Ticketing Page:** Link to stripe to view and purchase tickets.
- **FAQ Page:** Frequently asked questions with an embedded map.

## Styles
Located in `css/styles.css`.

## Scripts
Located in `js/scripts.js`. Includes hamburger menu toggle and infinite scroll functionality.

## Server-Side Code
PHP files located in the root directory and `pages/` directory.

## Database Connection
Configured in `includes/db_connect.php`.

## Running the Project
1. Set up the database as described.
CREATE DATABASE adventureland;

USE adventureland;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

2. Configure your web server to point to the project directory.
3. Open `index.php` in your browser.
