-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: tarantino
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id_articles` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `href` text NOT NULL,
  `source` varchar(150) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `alt` varchar(150) NOT NULL,
  `resumer` text NOT NULL,
  `date_publi` date DEFAULT NULL,
  `editeur` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_articles`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'https://www.lesinrocks.com/2019/08/02/cinema/actualite-cinema/on-a-classe-tous-les-films-de-tarantino-et-le-premier-va-sans-doute-vous-etonner/','travolta1.jpg','On a classé tous les films de Tarantino','Travolta Pulp Fiction','Quel est le meilleur film de Quentin Tarantino ? Quel est son moins bon ? Difficile d\'apporter une réponse définitive à cette question qui en appelle d\'autres, tant la filmographie du cinéaste est un bloc compact, travaillé par des obsessions qu\'il n\'a eu de cesse de revisiter. Mais à l\'occasion de la sortie, le 14 août prochain, de Once upon the time... in Hollywood, le dixième film de sa prodigieuse carrière, on a décidé de jouer le jeu du top 10, et de livrer un classement (forcément subjectif) de tous les films de QT, du moins bon au meilleur.','2019-08-02','Les Inrockuptibles'),(2,'https://www.20minutes.fr/culture/2154775-20171020-affaire-harvey-weinstein-quentin-tarantino-savait-rien-dit','weinstein.png','Affaire Harvey Weinstein: Quentin Tarantino sort de son silence.','Affaire Weinstein','« J\'en savais suffisamment pour réagir plus que ce que je n\'ai fait.» C\'est une interview en forme de confession. Jeudi, Quentin Tarantino qui a entretenu une relation quasi filiale avec Harvey Weinstein depuis Reservoir Dogs, en 1992, est sorti de son silence. « C\'était plus que les rumeurs habituelles, les ragots. Ce n\'était pas des \"on dit\". Je savais qu\'il avait fait plusieurs de ces choses.», avoue-t-il au New York Times.','2019-08-19','Paris Match'),(3,'https://www.huffingtonpost.fr/2018/03/15/la-maison-de-jimmie-dimmick-alias-quentin-tarantino-dans-pulp-fiction-est-a-vendre_a_23386825/','jimmie.jpg','La maison de Jimmie Dimmick, alias Quentin Tarantino, dans \"Pulp Fiction\" est à vendre','Maison de Jimmie Dimmick','C\'est une annonce qui va attirer les cinéphiles. Pour 1,395 millions de dollars (seulement), \nil est désormais possible d\'acheter une des maisons les plus cultes de l\'histoire du cinéma.\nMise en vente par l\'agence immobilière The Agency, la maison de Jimmie Dimmick, interprété par le réalisateur Quentin Tarantino, dans \"Pulp Fiction\" est à vendre. Située à Studio City, dans la vallée de San Fernando à Los Angeles, la maison se trouve au pied des collines et ne semble pas avoir changé depuis le mythique passage de John Travolta et Samuel L. Jackson, venus... cacher un corps dans la maison de Jimmie, qui s\'inquiète à juste titre pour son mariage.','2018-03-15','Huffingtonpost'),(4,'https://www.parismatch.com/People/Quentin-Tarantino-bientot-papa-a-56-ans-1642983','pere.jpg','Quentin Tarantino et son épouse Daniella Pick attendent leur premier enfant.','Quentin Tarantino et Daniella Pick','Alors que son nouveau film rencontre un vif succès dans les salles du monde entier, Quentin Tarantino s\'apprête à réaliser le rêve d\'une vie. A 56 ans, le talentueux réalisateur va devenir papa. Son épouse, Daniella Pick est enceinte de leur premier enfant. «Daniella et Quentin Tarantino sont très heureux d\'annoncer qu\'ils attendent un bébé», a simplement déclaré le couple dans un communiqué transmis mercredi 21 août 2019 au magazine «People».','2019-08-22','Paris Match'),(5,'https://www.huffingtonpost.fr/entry/pulp-fiction-de-tarantino-fete-ses-25-ans-a-cannes-comment-un-film-devient-il-culte_fr_5ce3a5b4e4b087700993bdb9','25-ans.png','\"Pulp Fiction\" de Tarantino fête ses 25 ans à Cannes: comment un film devient-il culte?','Pulp Fiction 25 ans','CINÉMA - “You know what they put on french fries in Holland instead of ketchup? Mayonnaise”. C’est une des nombreuses répliques cultes de “Pulp Fiction”, ce film de Quentin Tarantino qui fête cette année ses 25 ans. Alors que se tient le Festival de Cannes 2019, le réalisateur américain présente, ce mardi 21 mai, son nouveau long-métrage: “Once Upon a Time in Hollywood”. Une oeuvre qui pourrait bien atteindre le même niveau de popularité que “Pulp Fiction”.','2019-05-21','Huffingtonpost'),(6,'https://www.esquire.com/entertainment/movies/a27458589/once-upon-a-time-in-hollywood-leonardo-dicaprio-brad-pitt-quentin-tarantino-interview/','cabriolet.png','Quentin Tarantino, Brad Pitt, et Leonardo DiCaprio Vous embarques avec eux dans \'Once Upon a Time...In Hollywood\'','Once Upon a Time in Hollywood','Alors que le réalisateur dévoile son neuvième film très attendu, Esquire l’assied avec ses vedettes pour un interrogatoire provocateur à trois têtes sur le passé et le présent de Hollywood. Mais qu\'est-ce que Charles Manson et River Phoenix ont à voir avec cela? Par Michael Hainey et Photographies de Alexi Lubomirski','2019-05-21','Esquire'),(7,'https://www.huffingtonpost.fr/entry/once-upon-a-tim-hollywood-decor_fr_5d44488ae4b0ca604e310634?utm_hp_ref=fr-quentin-tarantino','huffingpost.png','Comment \"Once Upon a Time... in Hollywood\" a recréé le Los Angeles de 1969','Los Angeles 1969','CINÉMA - Le réalisateur a reconstitué l\'ambiance sonore et visuelle de l\'époque sans aucune retouche numérique, car pour lui, \"c\'est tricher\". Quelques jours à peine après les cinquante ans du meurtre de l’ancienne épouse de Roman Polanski, Sharon Tate, par des membres de la secte de Charles Manson en 1969, sort en salles ce mercredi 14 août “Once Upon a Time... in Hollywood”, le neuvième long-métrage de Quentin Tarantino.','2019-09-14','Huffpost, de Valentin Etancelin');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distrib`
--

DROP TABLE IF EXISTS `distrib`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `distrib` (
  `id_distrib` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom_distrib` varchar(40) NOT NULL,
  PRIMARY KEY (`id_distrib`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distrib`
--

LOCK TABLES `distrib` WRITE;
/*!40000 ALTER TABLE `distrib` DISABLE KEYS */;
INSERT INTO `distrib` VALUES (1,'Warner Bros'),(2,'Hollywood Pictures'),(3,'Dimension Films'),(4,'Universal Pictures'),(5,'The Weinstein Company'),(6,'Sony Pictures Releasing'),(7,'20th Century Fox'),(8,'Universal'),(9,'Paramount Pictures'),(10,'Miramax');
/*!40000 ALTER TABLE `distrib` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `id_film` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_distrib` smallint(5) unsigned NOT NULL,
  `id_genre` smallint(5) unsigned NOT NULL,
  `titre` varchar(100) NOT NULL,
  `resumer` text,
  `annee_prod` date NOT NULL,
  `duree_min` smallint(5) unsigned NOT NULL,
  `source` varchar(150) NOT NULL,
  `href` varchar(150) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES (1,11,1,'Reservoir Dogs','Il décrit une bande de truands et les événements qui surviennent avant et après un braquage raté. Première réalisation de Quentin Tarantino, ce film indépendant introduit dans ses thèmes et son esthétique ce qui deviendra la marque de fabrique Tarantino : dialogues stylisés, narration non linéaire, références à la culture populaire, violence et langage vulgaire.','1992-01-21',99,'reservoir-dogs.jpg','https://amzn.to/2lA22fj'),(2,1,13,'True Romance',' retrace l\'histoire d\'un couple de jeunes amoureux qui se retrouve en possession d\'une valise remplie de cocaïne appartenant à la mafia et essaie de la vendre à un producteur de cinéma.','1993-09-10',121,'true-romance.jpg','https://amzn.to/2lA22fj'),(3,1,25,'Tueurs nés','Mickey et Mallory, un jeune couple, décident de s’embarquer dans une virée sanglante, tuant les gens qu’ils rencontrent sur leur route, eux qui ont été victimes de mauvais traitements de la part de leurs parents respectifs. Leur déchéance à travers les États-Unis est détaillée dans les médias.','1994-08-26',118,'killer.jpg','https://amzn.to/2lAddEK'),(4,1,25,'Pulp Fiction','Deux truands, Jules Winnfield (Samuel L. Jackson) et son ami Vincent Vega (John Travolta), qui revient d\'Amsterdam, ont pour mission de récupérer une mallette au contenu mystérieux et de la rapporter à Marsellus Wallace (Ving Rhames), leur patron. Avant de commencer leur affaire, ils discutent de tout et de rien (les différences entre la vie en Europe et aux États-Unis, les hamburgers, le massage des pieds…) et Vincent confie à Jules que Marsellus l\'a chargé de tenir compagnie à sa femme Mia (Uma Thurman) pour une soirée. Evidemment, la soirée s\'annonce complexe et rien ne se passe comme prévu.','1994-10-14',154,'pulp_fiction.jpg','https://amzn.to/2nhV7I1'),(5,10,27,'Four Rooms','Ted (Tim Roth) entre en fonction comme groom dans un hôtel de luxe hollywoodien : le Mon Signor. Pendant la nuit de la Saint-Sylvestre, quatre histoires plus ou moins étranges lui arrivent avec les clients de 4 chambres de l\'hôtel.','1995-12-25',98,'four_rooms.jpg','https://amzn.to/2lNrU7p'),(6,2,10,'The Rock','Le général Hummel est un héros militaire américain, couvert de médailles et aux états de service exemplaires. Mais selon lui, les soldats tombés au combat lors de missions classées secrètes ne reçoivent pas les honneurs qu\'ils méritent, et leurs familles les pensions qui leur sont dues. Pour faire entendre sa position, il décide avec l\'aide de marines mercenaires de prendre en otage les touristes qui visitent l\'île d\'Alcatraz, et installe des batteries lance-missiles chargées d\'un gaz neurotoxique mortel qu\'il pointe sur la baie de San Francisco. Hummel a laissé 36 heures au gouvernement pour payer la rançon de 100 millions de dollars, sans quoi il lancera ses missiles.','1996-06-07',136,'rock.jpg','https://amzn.to/2lJf7CT'),(7,3,2,'From the Dusk Till Down','Une nuit en enfer raconte l\'histoire de deux frères et braqueurs en cavale, Seth (George Clooney) et Richard Gecko (Quentin Tarantino), qui prennent un pasteur (Harvey Keitel) et ses deux enfants en otage afin de passer la frontière mexicaine, mais seront confrontés à un bar rempli de vampires à leur arrivée.','1996-01-19',108,'dusk.jpg','https://amzn.to/2mLVsCg'),(8,10,25,'Jackie Brown','En 1995, Jacqueline « Jackie » Brown (Pam Grier) est une hôtesse de l\'air dans une petite compagnie mexicaine. Pour arrondir ses fins de mois, elle sert de passeuse du Mexique aux États-Unis pour un trafiquant d\'armes, Ordell Robbie (Samuel L. Jackson). Elle emporte dans ses bagages de l\'argent liquide pour le compte de ce truand. Jusqu\'au jour où deux policiers s\'interessent à elle..','1997-12-25',154,'jackiebrown.jpg','https://amzn.to/2niyy69'),(9,10,26,'Kill Bill Vol.1','La Mariée se rend chez son ancienne partenaire Vernita Green et s\'engage dans un impitoyable combat qui n\'est interrompu que par l\'arrivée de Nikki, la fille de Vernita, âgée de quatre ans et demi. Les deux femmes conviennent de reprendre leur duel plus tard dans la soirée, mais Vernita tire sur la Mariée, qui riposte en lui lançant un couteau en pleine poitrine, la tuant sur le coup. Nikki, attirée par le bruit du coup de feu, découvre la scène. La Mariée lui dit qu\'elle a tué sa mère pour une bonne raison mais qu\'elle comprendra si Nikki vient se venger d\'elle quand elle sera plus âgée.','2003-10-10',111,'killbill1.jpg','https://amzn.to/2mHKspF'),(10,10,26,'Kill Bill Vol.2','Le volume 2 s\'ouvre sur l\'arrivée de Bill à la chapelle de Two Pines (à El Paso, Texas), à la grande surprise de la Mariée, et une conversation s\'engage entre eux deux, la Mariée confirmant à Bill, qui lui reproche sa soudaine disparition, qu\'elle arrête définitivement le métier de tueuse à gages. Peu après, les autres membres du Détachement International des Vipères Assassines arrivent sur les lieux et commencent le massacre.','2004-04-16',136,'killbill2.jpg','https://amzn.to/2mG1MeK'),(11,3,9,'Boulevard de la mort','À Austin, trois amies, Arlene, Shanna et « Jungle » Julia, disc jockey d\'une radio locale, font une virée dans un bar. Elles ignorent qu\'elles sont étroitement surveillées par Stuntman Mike, un ancien cascadeur psychopathe qui sillonne les routes en tuant les femmes qu\'il trouve sur son chemin.','2007-04-06',110,'death_proof.jpg','https://amzn.to/2nhmt0U'),(12,4,17,'Inglorious Basterds','L\'histoire se déroule en France durant la Seconde Guerre mondiale et narre la vengeance d\'une jeune Juive, Shosanna Dreyfus (Mélanie Laurent), dont la famille a été assassinée par les nazis ainsi que les plans d\'un commando de soldats juifs alliés menés par le lieutenant Aldo Raine (Brad Pitt), envoyés en Europe occupée pour éliminer le plus de nazis possible, qu\'ils s\'appliquent à scalper, avant de s\'attaquer avec succès à leurs dirigeants.','2009-08-19',153,'inglorious.jpg','https://amzn.to/2l85Xzw'),(13,5,14,'Django Unchained','Nommé pour cinq Oscars dont celui du meilleur film en 2013, le film est récompensé à deux reprises ; meilleur acteur dans un second rôle pour Christoph Waltz et meilleur scénario original pour Quentin Tarantino. Doté d\'un budget de 100 millions de dollars, le film rapporte plus de 425 millions de dollars au box-office, ce qui en fait le meilleur succès commercial de Tarantino.','2012-12-25',165,'django_cover.jpg','https://amzn.to/2lAmrRo'),(14,5,14,'Les Huit Salopards','Quelques années après la guerre de Sécession, le cocher O. B. Jackson conduit dans sa diligence le chasseur de primes John Ruth et sa prisonnière, Daisy Domergue, jusqu\'à Red Rock. Ils rencontrent sur la route le major Marquis Warren, un ancien soldat de l\'Union et chasseur de primes et Chris Mannix, le nouveau shérif de Red Rock. Surpris par le blizzard, les cinq personnes trouvent refuge dans un chalet où sont déjà installés quatre autres personnes. Coincés par la tempête, les neuf voyageurs s\'apprêtent à cohabiter lorsque les tueries commencent : l\'un des occupants est un complice de Daisy qui est prêt à les tuer tous pour la faire évader.','2015-12-25',167,'hateful_eight.jpg','https://amzn.to/2l7OzuJ'),(15,6,1,'Once Upon a Time.. in Hollywood','L’histoire se déroule en 1969, à Hollywood, au moment de l’apogée du mouvement hippie. Les deux personnages principaux sont Rick Dalton (Leonardo DiCaprio), une ancienne star d’une série télévisée de western, et Cliff Booth (Brad Pitt), sa doublure cascade de toujours. Les deux hommes tentent de s’en sortir dans un Hollywood qu’ils ne reconnaissent plus. Mais Rick a une voisine très célèbre… Sharon Tate.','2019-07-26',161,'hollywood1.jpg','https://amzn.to/2lLYK8v');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `id_genre` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom_genre` varchar(40) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'Comedie dramatique'),(2,'Science fiction'),(3,'Drame'),(4,'Documentaire'),(5,'Animation'),(6,'Biopic'),(7,'Fantastique'),(8,'Action'),(9,'Thriller'),(10,'Aventure'),(11,'Varié'),(12,'Historique'),(13,'Romance'),(14,'Western'),(15,'Musical'),(16,'Horreur'),(17,'Guerre'),(18,'Espion'),(19,'Biographie'),(20,'Court-metrage'),(21,'Erotique'),(22,'Familiale'),(23,'Policier'),(24,'Péplum'),(25,'Gangster'),(26,'Art Martiaux'),(27,'Comedie');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_users` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmer_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (14,'Jordan','jordanphilippot@yahoo.fr','$2y$10$klZlTfNaFA.soAIOEOFW0Obq9wxeFgzwepezy7KEzNn3hTWTDB./a','AL0UzEGTHBCBFmrByuJ9e9cgkhPXDXxhFSLaJmha8aRDcEpZSgCdbw8CaWWL',NULL),(15,'amelia','amelia.benlemouy@gmail.com','$2y$10$vYr1Nh9qUjed7TzsYvCDgOe8rWyi5cQ0xp9.l/WF7srQ5iSKUKREy','ZqdxAseznatyHfnB4ugLmbNPFRTeaZP33UvmvCGNLrSylUDlaiPBbytErmCU',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id_video` smallint(6) NOT NULL AUTO_INCREMENT,
  `href` text NOT NULL,
  `titre` varchar(150) NOT NULL,
  `resumer` text NOT NULL,
  `date_publi` date DEFAULT NULL,
  `editeur` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'https://www.youtube.com/embed/WuX4u_XPcsY\"','Festival de Cannes : Palme d\'or à Quentin Tarantino pour \" Pulp fiction \" - Archive vidéo INA','Cinéma : en direct du Palais des festivals, à Cannes, annonce de l\'attribution de la palme d\'or à Quentin TARANTINO pour son film \"PULP FICTION\" par le Président du jury, Clint EASTWOOD . Présence sur la scène de Jeanne MOREAU et des acteurs du film John TRAVOLTA, Bruce WILLIS, Rosanna ARQUETTE','1994-05-23','Institut National de l\'Audiovisuel'),(2,'https://www.youtube.com/embed/fnLxthCNQQY\"','Interview de Tarantino by Konbini','Son neuvième film « Once upon a time in Hollywood » sort ce mercredi. À cette occasion, nous avons rencontré l’immense Quentin Tarantino ! Les films qui l’ont marqué durant sa jeunesse, ses années de travail dans un vidéoclub, l’écriture de ses dialogues et ses futurs projets… Le réalisateur culte nous dit tout!.','2019-08-12','Konbini'),(3,'https://www.youtube.com/embed/0eHI6t6ertY\"','Avec Tarantino et le casting de « Once Upon A Time In..Hollywood »','Ils ont enflammé cette édition 2019 du Festival de Cannes avec « Once Upon a Time… in Hollywood ». On a rencontré Quentin Tarantino, Margot Robbie, Brad Pitt et Leonardo DiCaprio !','2019-02-24','Konbini'),(4,'https://www.youtube.com/embed/Xe_ZQk_Rs98\"','Once Upon A Time In… Hollywood - Bande-annonce Officielle - VF','Un film réalisé par Quentin Tarantino.\n L’histoire se déroule en 1969, à Hollywood, au moment de l’apogée du mouvement hippie. Les deux personnages principaux sont Rick Dalton (Leonardo DiCaprio), une ancienne star d’une série télévisée de western, et Cliff Booth (Brad Pitt), sa doublure cascade de toujours. Les deux hommes tentent de s’en sortir dans un Hollywood qu’ils ne reconnaissent plus. Mais Rick a une voisine très célèbre… Sharon Tate.\nRendez-vous le 14 août au cinéma.','2019-06-19','Sony Pictures');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-01-05  0:30:02
