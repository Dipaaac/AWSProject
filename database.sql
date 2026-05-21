CREATE DATABASE IF NOT EXISTS AWSProject;

USE AWSProject;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL
);

INSERT INTO users(username, password_hash, role)
VALUES
(
    'RickyPrime',
    '$2y$10$5W1uYx6f1M0QWQkM5c7bVeW5M1TgH7s1uZ9r1r8M6nQeYq4Qx5r7C',
    'admin'
),
(
    'Meccariello',
    '$2y$10$J3Q4nB9Qm0JdY8mP4V8z7u3N1vM4gH2kS6yF8mR9vT7pW3xQ2aL6K',
    'user'
);