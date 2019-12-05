DROP DATABASE activitour;
CREATE DATABASE activitour;
USE activitour;



CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,
	email varchar(64) NOT NULL UNIQUE,
	username varchar(64) NOT NULL UNIQUE,
	password varchar(255) NOT NULL,
	
	PRIMARY KEY (id)
);

CREATE UNIQUE INDEX users_email_index
ON users (username, email);

INSERT INTO users (email, username, password) VALUES
("admin@email.com", "admin", "$2y$10$Kz61YGhJbgpeYMITa5GUwOU3w0Crobr/ddWFxhBT64O17ud5u9yC.");



CREATE TABLE counties (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(16),
	
	PRIMARY KEY (id)
);

INSERT INTO counties (name) VALUES
("Antrim"),
("Armagh"),
("Carlow"),
("Cavan"),
("Clare"),
("Cork"),
("Derry"),
("Donegal"),
("Down"),
("Dublin"),
("Fermanagh"),
("Galway"),
("Kerry"),
("Kildare"),
("Kilkenny"),
("Laois"),
("Leitrim"),
("Limerick"),
("Longford"),
("Louth"),
("Mayo"),
("Meath"),
("Monaghan"),
("Offaly"),
("Roscommon"),
("Sligo"),
("Tipperary"),
("Tyrone"),
("Waterford"),
("Westmeath"),
("Wexford"),
("Wicklow");



CREATE TABLE location_type (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(64) NOT NULL,
	
	PRIMARY KEY (id)
);

INSERT INTO location_type (name) VALUES
("Town"),
("Mountain"),
("Monument"),
("Dolmen");



CREATE TABLE locations (
	id int NOT NULL AUTO_INCREMENT,
	county_id int NOT NULL,
	name varchar(64) NOT NULL,
	lng decimal(8,5),
	lat decimal(8,5),
	
	PRIMARY KEY (id),
	FOREIGN KEY (county_id) REFERENCES counties(id)
);

INSERT INTO locations (county_id, name, lng, lat) VALUES
(20, "Carlingford", 54.04294, 6.18609),
(32, "Wicklow Mountains", NULL, NULL),
(20, "Proleek Dolmen", 54.03720, 6.34827);



CREATE TABLE filetypes (
	id int NOT NULL AUTO_INCREMENT,
	filetype varchar(3) NOT NULL,
	
	PRIMARY KEY (id)
);

INSERT INTO filetypes (filetype) VALUES
("png"),
("jpg");



CREATE TABLE location_images (
	id int NOT NULL AUTO_INCREMENT,
	location_id int NOT NULL,
	filetype_id int NOT NULL,
	filename varchar(64) NOT NULL,
	
	PRIMARY KEY (id),
	FOREIGN KEY (location_id) REFERENCES locations(id),
	FOREIGN KEY (filetype_id) REFERENCES filetypes(id)
);

INSERT INTO location_images (location_id, filetype_id, filename) VALUES
(1, 2, "carlingford"),
(2, 2, "wicklow_mountains"),
(3, 2, "proleek_dolmen");



CREATE TABLE location_types (
	location_id int NOT NULL,
	location_type_id int NOT NULL,
	
	PRIMARY KEY (location_id, location_type_id),
	FOREIGN KEY (location_id) REFERENCES locations(id),
	FOREIGN KEY (location_type_id) REFERENCES location_type(id)
);

INSERT INTO location_types (location_id, location_type_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(3, 4);



CREATE TABLE location_audio (
	id int NOT NULL AUTO_INCREMENT,
	location_id int NOT NULL,
	name varchar(64),
	
	PRIMARY KEY (id),
	FOREIGN KEY (location_id) REFERENCES locations(id)
);

CREATE TABLE favourite_locations (
	user_id int NOT NULL,
	location_id int NOT NULL,
	
	PRIMARY KEY(user_id, location_id),
	FOREIGN KEY (user_id) REFERENCES users(id),
	FOREIGN KEY (location_id) REFERENCES locations(id)
);

CREATE TABLE weather_times (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(32) NOT NULL,
	
	PRIMARY KEY (id)
);

CREATE TABLE weather_types (
	id int NOT NULL,
	name varchar(32) NOT NULL,
	
	PRIMARY KEY (id)
);

CREATE TABLE weather (
	location_id int NOT NULL,
	weather_type_id int NOT NULL,
	temperature decimal(2,2) NOT NULL,
	wind_speed decimal(2,2),
	
	PRIMARY KEY (location_id, weather_type_id)
);



CREATE VIEW view_location_images AS
SELECT location_id, filename, filetype
FROM location_images, filetypes
WHERE location_images.filetype_id = filetypes.id;
