CREATE DATABASE `support my day`;
USE `support my day`;

CREATE TABLE `Organisations` (
  `Organisation_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(20) DEFAULT NULL,
  `VAT_Number` VARCHAR(20) DEFAULT NULL,
  `CoC_Number` VARCHAR(20) DEFAULT NULL,
  `IBAN` VARCHAR(50) DEFAULT NULL,
  `Telephone_Number` VARCHAR(20) DEFAULT NULL,
  `Email` VARCHAR(60) DEFAULT NULL,
  `Contact_Person` VARCHAR(40) DEFAULT NULL,
  PRIMARY KEY (`Organisation_ID`)
);

CREATE TABLE `Festivals` (
  `Organisation_ID` INT(11) NOT NULL,
  `Festival_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(40) NOT NULL,
  `Genre` ENUM('Reggae', 'House', 'Jazz'),
  `Start_Date` DATE NOT NULL,
  `End_Date` DATE NOT NULL,
  `Capacity` INT(11) NOT NULL,
  `Score` INT(11) DEFAULT NULL,
  `Price` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`Festival_ID`),
  CONSTRAINT `FK_FestivalsOrganisations` FOREIGN KEY (`Organisation_ID`)
  	REFERENCES `Organisations` (`Organisation_ID`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE `Stages` (
  `Stage_ID` INT(11) NOT NULL,
  `Festival_ID` INT(11) NOT NULL,
  `Location` VARCHAR(40) DEFAULT NULL,
  `Capacity` INT(5) DEFAULT NULL,
  PRIMARY KEY (`Stage_ID`),
  CONSTRAINT `FK_StagesFestivals` 
    FOREIGN KEY (`Festival_ID`) REFERENCES Festivals (`Festival_ID`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE `Facilities` (
  `Stage_ID` INT NOT NULL,
  `Facility_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `Facility_Type` ENUM('Toilet', 'Drinks', 'Food') NOT NULL,
  `Latitude` DECIMAL(10,8) NOT NULL,
  `Longitude` DECIMAL(11,8) NOT NULL,
  `Capacity` INT(11),
  PRIMARY KEY (`Facility_ID`),
  CONSTRAINT FK_FacilitiesFestivals
    FOREIGN KEY (`Stage_ID`) REFERENCES Stages (`Stage_ID`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE `Users` (
  `Screen_Name` VARCHAR(40) NOT NULL,
  `First_Name` VARCHAR(40) NOT NULL,
  `Last_Name` VARCHAR(40) NOT NULL,
  `Email` VARCHAR(40) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Image` TEXT,
  `Role` ENUM ('user', 'organisation', 'admin') DEFAULT 'user' NOT NULL,
  `Organisation_ID` INT(11) DEFAULT NULL,
  PRIMARY KEY (`Email`),
  CONSTRAINT FK_Users
    FOREIGN KEY (`Organisation_ID`) REFERENCES Organisations (`Organisation_ID`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE `Wallets` (
  `Email` VARCHAR(40) NOT NULL,
  `Amount` DECIMAL DEFAULT '0.00',
  `IBAN` VARCHAR(50) DEFAULT NULL,
  `Payment_Option` ENUM ('iDeal','PayPal','Credit Card') NOT NULL,
  CONSTRAINT FK_WalletsUsers FOREIGN KEY (`Email`)
  REFERENCES Users (`Email`)
);

CREATE TABLE `UserLocations` (
  `User_Location_ID` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(40) NOT NULL,
  `Location` FLOAT NOT NULL,
  `Time` DATE NOT NULL,
   PRIMARY KEY (`User_Location_ID`),
   CONSTRAINT `FK_UserLocationsUsers` 
   FOREIGN KEY (`Email`) REFERENCES `Users` (`Email`)
   ON UPDATE CASCADE
   ON DELETE CASCADE
);

CREATE TABLE `Artists` (
  `Artist_Name` VARCHAR(40) NOT NULL,
  `Stage_ID` INT(11) NOT NULL,
  `Start_Time` Datetime NOT NULL,
  `End_Time` Datetime NOT NULL,
  `Location` FLOAT,
  PRIMARY KEY (`Artist_Name`),
  CONSTRAINT FK_ArtistsStages 
    FOREIGN KEY (`Stage_ID`) REFERENCES Stages (`Stage_ID`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE `Visits` (
  `Date` DATE DEFAULT NULL,
  `Festival_ID` INT NOT NULL,
  `Email` VARCHAR(40) NOT NULL,
  CONSTRAINT PK_Visits PRIMARY KEY (`Festival_ID`, `Email`),
  CONSTRAINT FK_VisitsFestivals
    FOREIGN KEY (`Festival_ID`) REFERENCES Festivals (`Festival_ID`)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
  CONSTRAINT FK_VisitsUsers 
    FOREIGN KEY (`Email`) REFERENCES Users (`Email`)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE `SearchTerms` (
    `Text` VARCHAR(40) PRIMARY KEY NOT NULL
);
