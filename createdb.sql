DROP DATABASE jojo;
CREATE DATABASE jojo;

USE jojo;

CREATE TABLE  `a7753653_jojo`.`userRegistration` (
	firstName VARCHAR( 100 ) NOT NULL,
	lastName VARCHAR( 100 ) NOT NULL,
	phoneNumber VARCHAR( 100 ) NOT NULL,
	email VARCHAR( 100 ) NOT NULL,
	password VARCHAR( 100 ) NOT NULL,
	dogName VARCHAR( 100 ) NOT NULL,
	dogBreed VARCHAR( 100 ) NOT NULL,
	PRIMARY KEY (email)
) ENGINE = MYISAM