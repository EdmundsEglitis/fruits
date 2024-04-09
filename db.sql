CREATE DATABASE fruits;

USE fruits;

CREATE TABLE fruits (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	calories INT NOT NULL
);


INSERT INTO fruits
(name,calories)
VALUES
('Mangoo', 900),
('Apple', 5);
