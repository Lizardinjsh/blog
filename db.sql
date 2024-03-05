CREATE DATABASE blog_IPb22;

USE blog_kocins;
CREATE TABLE posts (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL

);

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");

CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT NULL

);

INSERT INTO categories (name) VALUES 
('sport'),
('music'),
('food');

ALTER TABLE posts
ADD COLUMN category_id INT;

ALTER TABLE posts
ADD  FOREIGN KEY (category_id)
    REFERENCES categories(id);