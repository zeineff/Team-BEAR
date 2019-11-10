DROP DATABASE activitour;
CREATE DATABASE activitour;
USE activitour;

CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,
	username varchar(64) NOT NULL UNIQUE,
	password varchar(255) NOT NULL,
	email varchar(64) NOT NULL,
	
	PRIMARY KEY (id)
);

CREATE TABLE counties (
	id int NOT NULL AUTO_INCREMENT,
	name varchar(16),
	
	PRIMARY KEY (id)
);

CREATE TABLE locations (
	id int NOT NULL AUTO_INCREMENT,
	county_id int NOT NULL,
	name varchar(64) NOT NULL,
	lng decimal(3,3),
	lat decimal(3,3),
	
	PRIMARY KEY (id),
	FOREIGN KEY (county_id) REFERENCES counties(id)
);

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
