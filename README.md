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

## Note
`config.php` reads DB credentials from environment variables (`MYSQLHOST`, `MYSQLUSER`, `MYSQLPASSWORD`, `MYSQLDATABASE`, `MYSQLPORT`) with local defaults as a fallback, so it works both locally and when deployed.

## Deploying live (Railway)
1. Push this repo to GitHub (see steps below).
2. Go to [railway.app](https://railway.app) and sign in with GitHub.
3. Click **New Project → Deploy from GitHub repo**, select this repo. Railway detects the `Dockerfile` and builds automatically.
4. In the same project, click **+ New → Database → Add MySQL**. Railway auto-injects `MYSQLHOST`, `MYSQLUSER`, `MYSQLPASSWORD`, `MYSQLDATABASE`, `MYSQLPORT` into your app service — no manual config needed.
5. Open the MySQL service's **Data** tab (or connect via the provided connection string in a MySQL client) and run the contents of `yatra.sql` to create the tables and default admin user.
6. In your app service, go to **Settings → Networking → Generate Domain** to get a public live URL.
7. Visit `https://your-app.up.railway.app/login.php` — log in with `admin` / `admin123`, then change the password.

## Pushing to GitHub
```bash
git remote add origin https://github.com/YOUR-USERNAME/yatra-vargani.git
git branch -M main
git push -u origin main
```
