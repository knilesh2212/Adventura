# Adventura (Travel & Tour E-Commerce Website)

## Overview

This project is a responsive e-commerce website designed to facilitate the booking of travel packages. It uses PHP for server-side logic and phpMyAdmin for database management. The website includes an admin panel that allows administrators to manage travel packages and booking details efficiently.

## Features

- **Responsive Design**: Ensures compatibility across various devices, providing a seamless user experience.
- **User Interface**: Intuitive and easy-to-navigate interface for browsing and booking travel packages.
- **Admin Panel**: Allows administrators to manage travel packages and view booking details. Administrators can also add new travel packages directly via the panel.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: phpMyAdmin
- **Framework**: Bootstrap (for responsive design)

## Installation

To set up the project locally:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/knilesh2212/your-repo-name.git
   ```

2. **Set up a local server**:  
   Ensure you have a local server that supports PHP, such as:
   - [XAMPP](https://www.apachefriends.org/index.html)
   - [WAMP](https://www.wampserver.com/en/)
   - [MAMP](https://www.mamp.info/en/)

3. **Move the project files**:
   - Copy the project files to the `htdocs` folder (for XAMPP) or the appropriate folder for your local server setup.

4. **Set up the database**:
   - Open phpMyAdmin (usually available at `http://localhost/phpmyadmin`).
   - Create a new database (e.g., `book_db`).
   - Import the `book_db.sql` file into the newly created database.

5. **Configure the database connection**:
   - Ensure the database connection details in your PHP files (like `add_package.php`, `admin.php`, etc.) match the credentials of your local database.

6. **Start the local server**:
   - Launch your local server (XAMPP, WAMP, etc.).
   - Ensure that Apache and MySQL are running.

7. **Access the site**:
   - Open your browser and navigate to:
     ```
     http://localhost/your-repo-name
     ```
