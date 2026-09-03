-- Yatra Vargani database schema

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS vargani (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  phone VARCHAR(20),
  amount DECIMAL(10,2) NOT NULL,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS expenses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  amount DECIMAL(10,2) NOT NULL,
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Default admin login: username "admin", password "admin123"
-- Change this after first login!
INSERT INTO users (username, password) VALUES ('admin', 'admin123');
