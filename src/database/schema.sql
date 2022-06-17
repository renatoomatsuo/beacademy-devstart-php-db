DROP DATABASE IF EXISTS db_store;

CREATE DATABASE db_store CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE db_store;

CREATE TABLE IF NOT EXISTS tb_category (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30),
  description VARCHAR(100)
);

CREATE TABLE IF NOT EXISTS tb_products (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL,
  brand VARCHAR(30) NOT NULL,
  description VARCHAR(100) NOT NULL,
  price float(5,2) NOT NULL,
  photo VARCHAR(255) NOT NULL,
  category_id INT,
  quantity INT NOT NULL,
  create_at DATETIME NOT NULL,
);
