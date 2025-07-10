# ************************************************************
# Sequel Ace SQL dump
# Version 20089
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 5.5.5-10.5.9-MariaDB-1:10.5.9+maria~focal)
# Database: hangerdb
# Generation Time: 2025-06-13 16:07:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table contestents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contestents`;

CREATE TABLE `contestents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `nickname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `contestents` WRITE;
/*!40000 ALTER TABLE `contestents` DISABLE KEYS */;

INSERT INTO `contestents` (`id`, `name`, `firstname`, `nickname`, `email`, `phone`, `experience`)
VALUES
	(1,'Elslander','Kjell','KJ','elslanderkjell@gmail.com',487345301,1),
	(2,'Messner','Reinhold','Border Crosser','messner.reinhold@gmail.com',4123456,2),
	(3,'qsdfghj','dfghjk','dfghjk','dfghjk@dfghjkl.dfghjk',1234567890,2);

/*!40000 ALTER TABLE `contestents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reviews
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `posted-date` date DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;

INSERT INTO `reviews` (`id`, `firstname`, `name`, `description`, `posted-date`, `rating`)
VALUES
	(1,'Leo','Mendoza','The Grappling Hook Throwing Competition was an unexpected blast. Who knew coat hangers could fly this far?','2025-05-18',4),
	(2,'Marit','Verhoeven','Used the coat hanger death ride handles last weekend, honestly more stable than the ones at the park!','2025-05-12',3),
	(3,'Jonah','Stein','Tried the hanger pick on a short ice wall. It held surprisingly well… and the photos looked epic.','2025-05-26',4),
	(4,'Aïsha','Dervic','Made a DIY grappling hook from an old coat hanger and some rope. It worked, and looked weirdly cool.','2025-05-22',5);

/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
