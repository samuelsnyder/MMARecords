-- need to add foreign key constraints

DROP TABLE IF EXISTS `Fighters`;
-- Check for duplicate table

	CREATE TABLE Fighters(
  FighterID int(5) NOT NULL AUTO_INCREMENT,
  FirstName varchar(100) NOT NULL,
  LastName varchar(100) NOT NULL,
  HeightFeet int NOT NULL,
  HeightInches int NOT NULL,
  Pounds int NOT NULL,
  InchesReach int NOT NULL,
  PRIMARY KEY (`FighterID`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Gyms`;
-- Check for duplicate table

	CREATE TABLE Gyms(
  GymID int(5) NOT NULL AUTO_INCREMENT,
  GymName varchar(100) NOT NULL,
  PRIMARY KEY (`GymID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Styles`;
-- Check for duplicate table
  
	CREATE TABLE Styles(
  StyleID int(5) NOT NULL AUTO_INCREMENT,
  StyleName varchar(100) NOT NULL,
  PRIMARY KEY (`StyleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `FighterStyles`;
-- Check for duplicate table. Bridge table for many to many relationship between fighters and styles

		CREATE TABLE FighterStyles(
  StyleID int(5) NOT NULL,
  FighterID int(5) NOT NULL,
  PRIMARY KEY (`FighterID`, `StyleID`),
  CONSTRAINT `FK_Styles_FighterStyles` 
    FOREIGN KEY(`StyleID`)
    REFERENCES Styles(`StyleID`),
  CONSTRAINT `FK_Fighters_FighterStyles` 
    FOREIGN KEY(`FighterID`)
    REFERENCES Fighters(`FighterID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Promotions`;
-- Check for duplicate table

		CREATE TABLE Promotions(
  PromoID int NOT NULL AUTO_INCREMENT,
  PromotionName varchar(100) NOT NULL,
  PRIMARY KEY (`PromoID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Events`;
-- Check for duplicate table

    CREATE TABLE Events(
  EventID int NOT NULL AUTO_INCREMENT,
  EventName varchar(100) NOT NULL,
  EventDate datetime NOT NULL,
  PromoID int NOT NULL,
  PRIMARY KEY (`EventID`),
  CONSTRAINT `FK_Promotions_Events` FOREIGN KEY (`PromoID`) REFERENCES `Promotions` (`PromoID`) 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `Fights`;
-- Check for duplicate table

		CREATE TABLE Fights(
  FightID int NOT NULL AUTO_INCREMENT,
  EventID int NOT NULL,
  Fighter1 int NOT NULL,
  Fighter2 int NOT NULL,
  ResultCode bit(1),
  CONSTRAINT `FK_Events_Fights` FOREIGN KEY (`EventID`) REFERENCES `Events` (`EventID`),
  PRIMARY KEY (`FightID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;