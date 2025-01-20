# Project Name

This project is a dynamic website built with PHP, CSS, JavaScript, and includes an admin panel to manage packages and view orders.

## Features

- **Admin Panel**: Allows the admin to add packages and view orders.
- **Package Management**: Admin can add new packages.
- **Order Viewing**: Admin can view customer orders.
- **User Interaction**: Users can browse and book packages through the front end.


## Installation

To run this project locally:

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
     You should now be able to view the project, interact with the admin panel, and access the database.

## Usage

- **Admin Panel**: Visit `admin.php` to log in to the admin panel where you can add packages and view orders.
- **Booking**: Users can book packages through the `book.php` page.

