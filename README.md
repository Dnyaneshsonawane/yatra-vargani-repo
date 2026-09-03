# Yatra Vargani

A simple PHP + MySQL web app for managing *vargani* (donation) collections and expenses for a yatra (pilgrimage/trip).

## Features
- Admin login
- Add and view vargani (donation) entries
- Add and view expenses
- Dashboard summary

## Tech Stack
- PHP
- MySQL (via `mysqli`)
- HTML/CSS

## Setup
1. Install a PHP environment with MySQL support (e.g. XAMPP, WAMP, or LAMP).
2. Create a MySQL database named `yatra_vargani`.
3. Import the schema from `yatra.sql` (note: currently empty — add your table definitions here).
4. Update the database credentials in `config.php` if needed:
   ```php
   $conn = mysqli_connect("localhost","root","","yatra_vargani");
   ```
5. Place the project folder in your server's document root (e.g. `htdocs` for XAMPP).
6. Visit `login.php` in your browser to get started.

## Project Structure
```
├── add_expense.php     # Add a new expense entry
├── add_vargani.php     # Add a new vargani (donation) entry
├── config.php          # Database connection config
├── dashboard.php       # Main dashboard
├── login.php           # Admin login page
├── logout.php          # Logout handler
├── style.css           # Stylesheet
├── temple.jpg          # Temple image asset
├── view_expense.php    # View expense records
├── view_vargani.php    # View vargani records
└── yatra.sql           # Database schema
```

