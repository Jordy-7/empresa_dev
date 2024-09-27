CREATE DATABASE IF NOT EXISTS empresa_dev;
USE empresa_dev;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    full_name VARCHAR(100) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar usuario administrador
INSERT INTO users (username, password, email, full_name, role) 
VALUES ('admin', '$2y$10$YourHashedPasswordHere', 'admin@empresa-dev.com', 'Admin User', 'admin');

-- Insertar usuarios de ejemplo
INSERT INTO users (username, password, email, full_name, role) VALUES
('john_doe', '$2y$10$ExampleHash1', 'john@example.com', 'John Doe', 'user'),
('jane_smith', '$2y$10$ExampleHash2', 'jane@example.com', 'Jane Smith', 'user'),
('bob_johnson', '$2y$10$ExampleHash3', 'bob@example.com', 'Bob Johnson', 'user'),
('alice_williams', '$2y$10$ExampleHash4', 'alice@example.com', 'Alice Williams', 'user'),
('charlie_brown', '$2y$10$ExampleHash5', 'charlie@example.com', 'Charlie Brown', 'user');
