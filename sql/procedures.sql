USE `support my day`;

DELIMITER //
CREATE PROCEDURE getArtistsByFestival 
(IN `festivalName` VARCHAR(40)) 
BEGIN
    SELECT * FROM `Artists`
    JOIN `Stages` ON `Artists`.`Stage_ID` = `Stages`.`Stage_ID`
    JOIN `Festivals` ON `Festivals`.`Festival_ID` = `Stages`.`Stage_ID`
    WHERE `Festivals`.`Name` = `festivalName`;
END//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE getMoneyByEmail
(IN `Email` VARCHAR(40))
BEGIN
	SELECT * FROM `Users`
	JOIN `Wallets` ON `Wallets`.`Email` = `Users`.`Email`
	WHERE `Users`.`Email` = `Email`;
END//
DELIMITER ;

DELIMITER //
CREATE PROCEDURE getVisitsByUserEmail
(IN `Email` VARCHAR(40))
BEGIN
	SELECT * FROM `Visits`
	JOIN `Users` ON `User`.`Email` = `Visits`.`Email`;
END//
DELIMITER ;