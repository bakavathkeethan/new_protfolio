<<<<<<< HEAD
# new_protfolio
=======
# Developer Portfolio

A modern, responsive portfolio website for developers built with HTML, CSS, JavaScript, PHP, and MySQL.

## Features

- Clean and modern design with white and dark blue color scheme
- Responsive layout that works on all devices
- Contact form with PHP backend
- Dynamic loading of skills and projects from database
- Smooth scrolling navigation

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)

## Installation

1. Clone this repository to your web server's root directory:
   ```
   git clone [repository-url] /path/to/your/htdocs/portfolio
   ```

2. Create a new MySQL database named `portfolio_db`

3. Import the database schema:
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Select the `portfolio_db` database
   - Click on the "Import" tab
   - Choose the `database/portfolio_db.sql` file
   - Click "Go" to import the database structure and sample data

4. Update the database configuration in `config/db.php` if needed:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'your_username');
   define('DB_PASSWORD', 'your_password');
   define('DB_NAME', 'portfolio_db');
   ```

5. Make sure the following directories are writable by the web server:
   - `img/` - For project images
   - `config/` - For configuration files

## Customization

1. Update your personal information in `index.html`
2. Add your skills to the `skills` table in the database
3. Add your projects to the `projects` table in the database
4. Replace the placeholder images in the `img/` directory with your project images
5. Update the color scheme in `css/style.css` if desired

## Database Structure

### Messages Table
- id (INT, AUTO_INCREMENT, PRIMARY KEY)
- name (VARCHAR)
- email (VARCHAR)
- subject (VARCHAR)
- message (TEXT)
- created_at (TIMESTAMP)

### Skills Table
- id (INT, AUTO_INCREMENT, PRIMARY KEY)
- name (VARCHAR)
- icon (VARCHAR)
- category (VARCHAR)

### Projects Table
- id (INT, AUTO_INCREMENT, PRIMARY KEY)
- title (VARCHAR)
- description (TEXT)
- image_url (VARCHAR)
- project_url (VARCHAR)
- github_url (VARCHAR)
- created_at (TIMESTAMP)

## License

This project is open source and available under the [MIT License](LICENSE).

## Contact

For any questions or suggestions, please open an issue or contact the repository owner.
>>>>>>> 6aea127 (my_portfolio)
