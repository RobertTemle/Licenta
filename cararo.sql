# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: 127.0.0.1    Database: cararo
# ------------------------------------------------------
# Server version 5.5.5-10.4.22-MariaDB

DROP DATABASE IF EXISTS `cararo`;
CREATE DATABASE `cararo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cararo`;

#
# Source for table cars
#

DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `CarId` int(11) NOT NULL AUTO_INCREMENT,
  `Featured` int(11) DEFAULT 2,
  `Brand` varchar(255) DEFAULT NULL,
  `CarName` varchar(255) DEFAULT NULL,
  `MakeYear` int(11) DEFAULT NULL,
  `Capacity` int(11) DEFAULT NULL,
  `Fuel` varchar(255) DEFAULT NULL,
  `FuelConsumption` varchar(255) DEFAULT NULL,
  `Transmission` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image1-big` varchar(255) DEFAULT NULL,
  `image2-big` varchar(255) DEFAULT NULL,
  `image3-big` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CarId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table cars
#

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,2,'Toyota','RAV4',2020,5,'Hybrid','6.1km / 1-litre','Automatic',70,'img/cars/Toyota-1.jpg','img/cars/Toyota-2.jpg','img/cars/Toyota-3.jpg','img/cars/Toyota-1-big.jpg','img/cars/Toyota-2-big.jpg','img/cars/Toyota-3-big.jpg');
INSERT INTO `cars` VALUES (2,1,'BMW','3 Series',2019,4,'Gasoline','8.2km / 1-litre','Automatic',60,'img/cars/BMW3-1.jpg','img/cars/BMW3-2.jpg','img/cars/BMW3-3.jpg','img/cars/BMW3-1-big.jpg','img/cars/BMW3-2-big.jpg','img/cars/BMW3-3-big.jpg');
INSERT INTO `cars` VALUES (3,2,'Volkswagen','T-Cross',2020,4,'Gasoline','7.6km / 1-litre','Manual',70,'img/cars/VWTC-1.jpg','img/cars/VWTC-2.jpg','img/cars/VWTC-3.jpg','img/cars/VWTC-1-big.jpg','img/cars/VWTC-2-big.jpg','img/cars/VWTC-3-big.jpg');
INSERT INTO `cars` VALUES (4,1,'Cadillac','Escalade',2020,4,'Diesel','7.5km / 1-litre','Automatic',110,'img/cars/CadEsc-1.jpg','img/cars/CadEsc-2.jpg','img/cars/CadEsc-3.jpg','img/cars/CadEsc-1-big.jpg','img/cars/CadEsc-2-big.jpg','img/cars/CadEsc-3-big.jpg');
INSERT INTO `cars` VALUES (5,1,'BMW','4 Series GTI',2021,5,'Gasoline','7.9km / 1-litre','Automatic',90,'img/cars/BMW4-1.jpg','img/cars/BMW4-2.jpg','img/cars/BMW4-3.jpg','img/cars/BMW4-1-big.jpg','img/cars/BMW4-2-big.jpg','img/cars/BMW4-3-big.jpg');
INSERT INTO `cars` VALUES (6,1,'Tesla','Model S',2020,4,'Electric','10km / 1-kWh','Automatic',180,'img/cars/TeslaS-1.jpg','img/cars/TeslaS-2.jpg','img/cars/TeslaS-3.jpg','img/cars/TeslaS-1-big.jpg','img/cars/TeslaS-2-big.jpg','img/cars/TeslaS-3-big.jpg');
INSERT INTO `cars` VALUES (7,2,'Ford','Focus',2018,5,'Gasoline','5.2km / 1-litre','Manual',80,'img/cars/FordF-1.jpg','img/cars/FordF-2.jpg','img/cars/FordF-3.jpg','img/cars/FordF-1-big.jpg','img/cars/FordF-2-big.jpg','img/cars/FordF-3-big.jpg');
INSERT INTO `cars` VALUES (8,1,'Volkswagen','Passat B6',2017,5,'Diesel','7.8km / 1-litre','Manual',100,'img/cars/VWB6-1.jpg','img/cars/VWB6-2.jpg','img/cars/VWB6-3.jpg','img/cars/VWB6-1-big.jpg','img/cars/VWB6-2-big.jpg','img/cars/VWB6-3-big.jpg');
INSERT INTO `cars` VALUES (9,1,'Skoda','Octavia',2019,4,'Hybrid','6.7km / 1-litre','Automatic',90,'img/cars/SkOc-1.jpg','img/cars/SkOc-2.jpg','img/cars/SkOc-3.jpg','img/cars/SkOc-1-big.jpg','img/cars/SkOc-2-big.jpg','img/cars/SkOc-3-big.jpg');
INSERT INTO `cars` VALUES (10,2,'Renault','Symbol',2015,4,'Gasoline','6.9km / 1-litre','Manual',80,'img/cars/RenSym-1.jpg','img/cars/RenSym-2.jpg','img/cars/RenSym-3.jpg','img/cars/RenSym-1-big.jpg','img/cars/RenSym-2-big.jpg','img/cars/RenSym-3-big.jpg');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table drepturi
#

DROP TABLE IF EXISTS `drepturi`;
CREATE TABLE `drepturi` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdPage` int(11) DEFAULT NULL,
  `userType` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `PaginaID` (`IdPage`),
  KEY `userType` (`userType`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

#
# Dumping data for table drepturi
#

LOCK TABLES `drepturi` WRITE;
/*!40000 ALTER TABLE `drepturi` DISABLE KEYS */;
INSERT INTO `drepturi` VALUES (1,1,1);
INSERT INTO `drepturi` VALUES (2,1,2);
INSERT INTO `drepturi` VALUES (3,2,1);
INSERT INTO `drepturi` VALUES (4,2,2);
INSERT INTO `drepturi` VALUES (5,3,1);
INSERT INTO `drepturi` VALUES (6,3,2);
INSERT INTO `drepturi` VALUES (7,4,1);
INSERT INTO `drepturi` VALUES (8,4,2);
INSERT INTO `drepturi` VALUES (9,5,1);
INSERT INTO `drepturi` VALUES (10,6,1);
INSERT INTO `drepturi` VALUES (11,6,2);
INSERT INTO `drepturi` VALUES (12,7,1);
INSERT INTO `drepturi` VALUES (13,7,2);
INSERT INTO `drepturi` VALUES (14,8,1);
INSERT INTO `drepturi` VALUES (15,8,2);
INSERT INTO `drepturi` VALUES (16,9,1);
INSERT INTO `drepturi` VALUES (17,10,1);
INSERT INTO `drepturi` VALUES (18,11,1);
INSERT INTO `drepturi` VALUES (19,12,1);
INSERT INTO `drepturi` VALUES (20,13,1);
INSERT INTO `drepturi` VALUES (21,14,1);
INSERT INTO `drepturi` VALUES (22,15,1);
INSERT INTO `drepturi` VALUES (23,16,1);
INSERT INTO `drepturi` VALUES (24,17,1);
INSERT INTO `drepturi` VALUES (25,18,1);
INSERT INTO `drepturi` VALUES (26,19,1);
INSERT INTO `drepturi` VALUES (27,19,2);
INSERT INTO `drepturi` VALUES (28,20,1);
INSERT INTO `drepturi` VALUES (29,21,1);
INSERT INTO `drepturi` VALUES (30,22,1);
INSERT INTO `drepturi` VALUES (31,23,1);
INSERT INTO `drepturi` VALUES (32,24,1);
INSERT INTO `drepturi` VALUES (33,25,1);
INSERT INTO `drepturi` VALUES (34,26,1);
INSERT INTO `drepturi` VALUES (35,27,1);
INSERT INTO `drepturi` VALUES (36,28,1);
INSERT INTO `drepturi` VALUES (37,30,1);
INSERT INTO `drepturi` VALUES (38,30,2);
INSERT INTO `drepturi` VALUES (39,31,1);
INSERT INTO `drepturi` VALUES (40,31,2);
INSERT INTO `drepturi` VALUES (41,32,1);
INSERT INTO `drepturi` VALUES (42,32,2);
INSERT INTO `drepturi` VALUES (43,33,1);
INSERT INTO `drepturi` VALUES (44,33,2);
/*!40000 ALTER TABLE `drepturi` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table pagini
#

DROP TABLE IF EXISTS `pagini`;
CREATE TABLE `pagini` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nume_meniu` varchar(255) DEFAULT NULL,
  `pagina` varchar(255) DEFAULT NULL,
  `Meniu` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

#
# Dumping data for table pagini
#

LOCK TABLES `pagini` WRITE;
/*!40000 ALTER TABLE `pagini` DISABLE KEYS */;
INSERT INTO `pagini` VALUES (1,'Acasa','index-logged.php','1');
INSERT INTO `pagini` VALUES (2,'Despre Noi','about-logged.php','1');
INSERT INTO `pagini` VALUES (3,'Catalog','catalog-logged.php','1');
INSERT INTO `pagini` VALUES (4,'FAQ','faq-logged.php','1');
INSERT INTO `pagini` VALUES (5,'Utilizatori','user-display.php','1');
INSERT INTO `pagini` VALUES (6,'Privacy','privacy-logged.php','0');
INSERT INTO `pagini` VALUES (7,'Car Details','car-details.php','0');
INSERT INTO `pagini` VALUES (8,'Account','account.php','0');
INSERT INTO `pagini` VALUES (9,'Booking Add','booking-add.php','0');
INSERT INTO `pagini` VALUES (10,'Rezervari','booking-display.php','1');
INSERT INTO `pagini` VALUES (11,'Booking Search','booking-search.php','0');
INSERT INTO `pagini` VALUES (12,'Booking Search2','booking-search-action.php','0');
INSERT INTO `pagini` VALUES (13,'Booking Update','booking-update.php','0');
INSERT INTO `pagini` VALUES (14,'Car Add','car-add.php','0');
INSERT INTO `pagini` VALUES (15,'Masini','car-display.php','1');
INSERT INTO `pagini` VALUES (16,'Car Search','car-search.php','0');
INSERT INTO `pagini` VALUES (17,'Car Search2','car-search-action.php','0');
INSERT INTO `pagini` VALUES (18,'Car Update','car-update.php','0');
INSERT INTO `pagini` VALUES (19,'Contact','contact-logged.php','0');
INSERT INTO `pagini` VALUES (20,'User Add','user-add.php','0');
INSERT INTO `pagini` VALUES (21,'User Search','user-search.php','0');
INSERT INTO `pagini` VALUES (22,'User Search2','user-search-action.php','0');
INSERT INTO `pagini` VALUES (23,'User Update','user-update.php','0');
INSERT INTO `pagini` VALUES (24,'Delete Booking','delete-booking.php','0');
INSERT INTO `pagini` VALUES (25,'Delete Car','delete-car.php','0');
INSERT INTO `pagini` VALUES (26,'Delete User','delete-user.php','0');
INSERT INTO `pagini` VALUES (27,'Connect','connect.php','0');
INSERT INTO `pagini` VALUES (28,'Functions','functions.php','0');
INSERT INTO `pagini` VALUES (30,'Booking Add 2','booking-add-user.php','0');
INSERT INTO `pagini` VALUES (31,'Catalog Search','catalog-search.php','0');
INSERT INTO `pagini` VALUES (32,'Booking Update 2','booking-update-2.php','0');
INSERT INTO `pagini` VALUES (33,'User Update 2','user-update-2.php','0');
/*!40000 ALTER TABLE `pagini` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table rezervari
#

DROP TABLE IF EXISTS `rezervari`;
CREATE TABLE `rezervari` (
  `IdRezervare` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `CarId` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `phoneNum` varchar(255) DEFAULT NULL,
  `DelAddress` varchar(255) DEFAULT NULL,
  `DelDate` date DEFAULT NULL,
  `ReturnAddress` varchar(255) DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL,
  `Status` varchar(255) DEFAULT 'Active',
  PRIMARY KEY (`IdRezervare`),
  KEY `userId` (`userID`),
  KEY `carId` (`CarId`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

#
# Dumping data for table rezervari
#

LOCK TABLES `rezervari` WRITE;
/*!40000 ALTER TABLE `rezervari` DISABLE KEYS */;
INSERT INTO `rezervari` VALUES (1,24,1,'Mike Oxlong','0769403119','Baia-Mare, Victoriei 24','2022-12-30','Cluj-Napoca, nr. 39','2022-12-30','Active');
INSERT INTO `rezervari` VALUES (3,28,7,'John','0765428765','Baia-Mare, Centru','2022-10-04','Satu-Mare, Centru','2022-12-26','Inactive');
INSERT INTO `rezervari` VALUES (14,21,5,'Temle','0987 687 902','Baia-Mare, Bvd. Republicii 62','2022-06-26','Cluj-Napoca 2','2022-08-22','Active');
/*!40000 ALTER TABLE `rezervari` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user_types
#

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) DEFAULT NULL,
  `redirect` varchar(255) DEFAULT 'dashboardu.php',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Dumping data for table user_types
#

LOCK TABLES `user_types` WRITE;
/*!40000 ALTER TABLE `user_types` DISABLE KEYS */;
INSERT INTO `user_types` VALUES (1,'admin','account.php');
INSERT INTO `user_types` VALUES (2,'user','account.php');
/*!40000 ALTER TABLE `user_types` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table users
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `UserType` varchar(11) NOT NULL DEFAULT '2',
  `Email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

#
# Dumping data for table users
#

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (21,'Temle Robert','Robert','$2y$10$mHr5N25Jp239eND6/xDKqO2BR6V4RfXd7Z4Qf4iWjAL4M8FYygHNy','1','temleroby.tbd@gmail.com');
INSERT INTO `users` VALUES (22,'Jane Doe','JaneRulez','$2y$10$IwVJcpS0p/6SomJmiuwwquJBry3MJ6T6hNHLlsk6awofrBBe0nl.6','2','jane.doe@test.com');
INSERT INTO `users` VALUES (24,'Mike Oxlong','BigMike','$2y$10$4Fw5JsovsNm9zBzV9g9wH.ZDkjkoLL6LQN1sxIZHvcLqUgd.sFOpy','2','mike.huge@yahoo.com');
INSERT INTO `users` VALUES (27,'Vlad Emilia','EmiMimi','$2y$10$lO1Md5AO1NkJM4HfCegwLOz5G1Mv7VYupK9SljS0OWtTuj7XMo46C','2','emilia_mimi@gmail.com');
INSERT INTO `users` VALUES (28,'John Doe','NotNowJohn','$2y$10$fZ2xfYmo9vd9mpE8pn5aE.frEx/rrHGToyeea2k7Gyj0mvPtsbnzy','2','john.doe@hotlook.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

#
#  Foreign keys for table drepturi
#

ALTER TABLE `drepturi`
ADD CONSTRAINT `PaginaID` FOREIGN KEY (`IdPage`) REFERENCES `pagini` (`Id`),
ADD CONSTRAINT `userType` FOREIGN KEY (`userType`) REFERENCES `user_types` (`Id`);

#
#  Foreign keys for table rezervari
#

ALTER TABLE `rezervari`
ADD CONSTRAINT `carId` FOREIGN KEY (`CarId`) REFERENCES `cars` (`CarId`),
ADD CONSTRAINT `userId` FOREIGN KEY (`userID`) REFERENCES `users` (`UserId`);


/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
