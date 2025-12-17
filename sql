CREATE DATABASE crud_db;
USE crud_db;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50),
 password VARCHAR(255),
 role VARCHAR(20)
);

CREATE TABLE students (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 faculty VARCHAR(100)
);

INSERT INTO users(username,password,role)
VALUES('admin','123','admin');
