-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: mirandadb
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amenities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amenities`
--

LOCK TABLES `amenities` WRITE;
/*!40000 ALTER TABLE `amenities` DISABLE KEYS */;
INSERT INTO `amenities` VALUES (1,'Air conditioner'),(2,'Breakfast'),(3,'Cleaning'),(4,'Grocery'),(5,'Shop near'),(6,'24/7 Online Support'),(7,'Smart Security'),(8,'High-speed WiFi'),(9,'Kitchen'),(10,'Shower'),(11,'Towels'),(12,'Strong Locker'),(13,'Expert Team');
/*!40000 ALTER TABLE `amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `status` enum('Check-in','Check-out','In progress','Cancelled') DEFAULT 'In progress',
  `discount` tinyint NOT NULL,
  `room_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES (1,'Myriam','Rosenbaum','2024-05-02','2024-05-02','2024-05-03','Comitatus degero vorax cultura magni.','Cancelled',39,7),(2,'Jerod','Schiller','2024-05-01','2024-05-01','2024-05-03','Vulgaris clamo cursim victoria.','Cancelled',2,20),(3,'Maureen','Schumm','2024-05-01','2024-05-01','2024-05-03','Sublime quas uberrime summisse video.','Check-in',70,19),(4,'Ollie','Anderson','2024-05-01','2024-05-02','2024-05-02','Verbera theatrum decumbo.','In progress',10,14),(5,'Carlotta','Corwin','2024-05-01','2024-05-02','2024-05-02','Ultra porro atque comitatus sumptus.','Check-out',81,13),(6,'Velva','Abbott','2024-05-01','2024-05-01','2024-05-03','Defluo armarium rerum.','Cancelled',21,16),(7,'Leanna','Klocko','2024-05-02','2024-05-02','2024-05-03','Celo.','Check-out',64,4),(8,'Abdullah','Botsford','2024-05-01','2024-05-01','2024-05-02','Strenuus calco adipiscor vae.','Cancelled',62,11),(9,'Aileen','Padberg','2024-05-01','2024-05-01','2024-05-02','Conspergo terebro.','Cancelled',79,3),(10,'Garfield','Jacobson','2024-05-02','2024-05-01','2024-05-02','Cursim impedit verbum.','In progress',70,18),(11,'Oren','Fritsch','2024-05-02','2024-05-02','2024-05-03','Consuasor depulso.','Check-in',84,12),(12,'Joanne','Feest','2024-05-02','2024-05-01','2024-05-02','Temptatio apparatus sulum alias verto.','Check-out',20,9),(13,'Orlo','Dicki','2024-05-01','2024-05-02','2024-05-02','Cervus terebro.','In progress',36,5),(14,'Claudine','Schmidt','2024-05-01','2024-05-01','2024-05-03','Apparatus.','In progress',78,8),(15,'Greta','Pagac','2024-05-01','2024-05-01','2024-05-02','Ducimus.','Check-out',50,17),(16,'javier','Mayert','2024-05-07','2024-05-07','2024-05-08','hla buenas ','In progress',0,1),(19,'Marcosi','Tremblay-Gorczany','2024-05-08','2024-05-12','2024-05-16','Hola buenas queria esta habitacion pepinarda','In progress',0,3),(20,'Devon','wewe','2024-05-08','2024-05-08','2024-05-10','ee','In progress',0,2),(21,'Jorge','Guillen','2024-05-08','2024-05-12','2024-05-15','hola quetal','In progress',0,2),(22,'Alejandro','Fisman','2024-05-08','2024-05-10','2024-05-12','hola que tal esta es mi habitacion de asesino favorita','In progress',0,7),(23,'javier','Tremblay-Gorczany','2024-05-08','2024-05-13','2024-05-14','wwww','In progress',0,7),(24,'Ruben','Dopico','2024-05-08','2024-05-10','2024-05-15','hola buenas','In progress',0,19),(25,'john','rohn','2024-05-08','2024-05-16','2024-05-18','qqqqqqqqqqqqq','In progress',0,19),(26,'javier','Mayert','2024-05-08','2025-02-08','2025-02-12','a ver ','In progress',0,7),(27,'ruben','luisi','2024-05-08','2024-05-20','2024-05-22','prueba swal correct','In progress',0,19);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `date` date NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Monserrat','Kulas','Noel.Padberg@gmail.com','386.720.7973','Vallum demum tondeo.','Adicio tricesimus urbs baiulus tribuo vox utrum. Acer sunt tero universe copiose tabesco atrox patruus. Temporibus vacuus terminatio commodo suppono terra collum vulticulus comis beatus.','2024-05-01','https://loremflickr.com/640/480/people?lock=2707545974112256',0),(2,'Ford','Botsford','Christopher_Mann@gmail.com','694.486.3143 x5669','Vos decumbo patruus caelum tergo.','Artificiose admoneo thesis aureus tubineus acsi.','2024-05-02','https://loremflickr.com/640/480/people?lock=2021981367042048',0),(3,'Wilson','Mertz','Kaitlyn.Okuneva@hotmail.com','1-692-971-5346 x6227','Quae vesco peior.','Contabesco avarus creptio corrigo dapifer. Neque urbanus itaque cum cinis. Assumenda tabernus una temperantia suppellex tamisium curso adamo autem aestivus.','2024-05-02','https://loremflickr.com/640/480/people?lock=2900894035214336',0),(4,'Arthur','Frami','Dahlia57@yahoo.com','1-819-472-5709 x979','Aestas cauda adhaero nulla.','Adicio adulescens cultura acsi canis victus.\nCrepusculum nobis curvo delinquo terreo candidus tandem omnis pecco cognatus.\nSubito talis aestivus demulceo vir suggero.','2024-05-01','https://loremflickr.com/640/480/people?lock=3087090512297984',1),(5,'Liliane','Conn','Clyde85@hotmail.com','1-788-699-2635 x66365','Ante.','Casso uterque solitudo victus tempore venustas alii voveo. Tepidus vestrum ipsum. Accommodo temeritas damno tenuis absconditus. Claro blanditiis cum speciosus careo xiphias ater. Defendo ratione termes circumvenio compono arma averto officia.','2024-05-01','https://loremflickr.com/640/480/people?lock=4776900773806080',1),(6,'Kenneth','Powlowski','Betty_Pfeffer@gmail.com','1-997-217-5385 x6859','Cumque minima depraedor tabella alioqui.','Adaugeo aqua contego.\nVia varietas suscipit utor claudeo attero adhaero.\nCornu aro turpis tristis audeo amicitia artificiose coruscus ulciscor.','2024-05-02','https://loremflickr.com/640/480/people?lock=5165535847251968',0),(7,'Alejandra','Brakus','Coty_Kilback@yahoo.com','(839) 719-4188 x1569','Antea.','Arcesso conculco adsuesco ulterius tantillus tui. Tres abeo subseco quibusdam sui. Caelestis comburo accedo teres sum.\nLabore adulescens solio vesper certus perferendis laborum. Magnam appello quaerat curto. Ceno caveo crepusculum asperiores deficio.\nVentito angulus nisi cognomen aliqua solutio uterque testimonium. Crudelis ventosus cursim asperiores spectaculum creator speciosus. Vitae adicio depraedor at totam asperiores virga facilis.','2024-05-02','https://loremflickr.com/640/480/people?lock=2286392411422720',0),(8,'Arianna','Luettgen','Rogelio15@hotmail.com','(831) 456-2713','Omnis.','Pecto conqueror aliqua cubicularis validus utor uxor. Theologus caecus balbus demens. Campana attonbitus abduco.\nCinis auctor aeternus catena ago cernuus sumo defessus cibo aut. Defero cattus inflammatio illo accommodo volutabrum. Adaugeo deprecator timidus beatus adeo theca comminor defetiscor peior.\nSuggero velociter tristis arbustum vomito tonsor unde exercitationem adhuc curiositas. Dolorem adicio sortitus calcar officiis celer suasoria voluptatibus tabernus. Reprehenderit appello damnatio validus vulgaris.','2024-05-02','https://loremflickr.com/640/480/people?lock=8848314644561920',0),(9,'Kasey','Jacobson','Jonas_Ebert@gmail.com','563.340.4072 x1278','Aequus uberrime bis patrocinor ventus.','Vulnero alias tener cresco summisse caveo beatus. Ver accommodo vir caelestis. Sequi textus neque una sortitus.','2024-05-02','https://loremflickr.com/640/480/people?lock=7530371996450816',0),(10,'Damien','Rath','Trystan.Durgan@hotmail.com','1-324-891-0535','Adipisci.','Cursus thymbra tutis thema asporto. Tredecim vobis venustas accusantium clibanus quibusdam. Dolores venio ex.','2024-05-02','https://loremflickr.com/640/480/people?lock=1540950599925760',1),(11,'Zoey','Roob','Charley.Botsford@hotmail.com','856-556-1716 x803','Cohibeo ager approbo.','Depopulo pax urbs deripio quod vobis illum quidem versus libero.','2024-05-02','https://loremflickr.com/640/480/people?lock=6810787219767296',1),(12,'Blair','Crist','Travis.Auer16@gmail.com','1-717-835-4269 x609','Distinctio adsidue.','Arbor vigilo decet vulnus sollers solio.','2024-05-01','https://loremflickr.com/640/480/people?lock=5809179306491904',1),(13,'Angelo','Cartwright','Helena.Schaden36@gmail.com','397-857-3283 x813','Uberrime.','Trucido vestrum laborum apto. Patior velum varietas terra accusator debitis delibero laborum. Coniecto aestus creta civis tempore amita.\nDeporto cum voluptatem demulceo ambulo creo comparo adinventitias venustas quo. Speculum undique valde arca basium adulescens. Decens autem virgo creber paulatim cinis suasoria vae.\nAbutor utpote soluta tam autus. Contabesco agnosco cenaculum quasi tabella venio. Quos asper ratione aureus credo agnosco territo.','2024-05-01','https://loremflickr.com/640/480/people?lock=2042044891529216',1),(14,'Narciso','Kerluke','Alfred.Okuneva@gmail.com','1-462-441-1467','Cenaculum asperiores coruscus absorbeo.','Coniecto allatus voluptatum aperio substantia. Adhuc dedico acies ulciscor adulescens aptus angustus. Arbustum ascit amoveo temeritas sublime.','2024-05-01','https://loremflickr.com/640/480/people?lock=2108207174516736',0),(15,'Andre','Doyle','Llewellyn24@hotmail.com','993.756.9113 x960','Vulnero conqueror vitium.','Quas trado victoria addo conor ubi.','2024-05-02','https://loremflickr.com/640/480/people?lock=335334642548736',0),(16,'javier','Mayert','email@email.com','6555665678','prueba1ef','fffffffffffffffffffffffffff','2024-05-07','https://loremflickr.com/640/480/people?lock=4776900773806080',0),(17,'Devon','Cabañas','email@email.com','6555665678','Probando swal','Hola este es el primer mensaje con swal','2024-05-08','https://loremflickr.com/640/480/people?lock=4776900773806080',0),(18,'Alejandro','Fisman','asquerosidad@gai.com','666666666','Quien es virginia','Alejandro es un celoso y ahora quiere borrar su reserva.','2024-05-08','https://loremflickr.com/640/480/people?lock=4776900773806080',0);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'https://loremflickr.com/640/480/hotel,deluxe?lock=7823593761144832'),(2,'https://loremflickr.com/640/480/hotel,deluxe,bedroom?lock=1522676336164864'),(3,'https://loremflickr.com/640/480/hotel,bedroom?lock=5447252952743936'),(4,'https://loremflickr.com/640/480/hotel,bedroom?lock=8346601548414976'),(5,'https://loremflickr.com/640/480/hotel,single?lock=6113913607290880'),(6,'https://loremflickr.com/640/480/hotel,single?lock=7891268484988928'),(7,'https://loremflickr.com/640/480/hotel,deluxe?lock=1144042874208256'),(8,'https://loremflickr.com/640/480/hotel,deluxe?lock=8046460385886208'),(9,'https://loremflickr.com/640/480/hotel,deluxe?lock=1795237385076736'),(10,'https://loremflickr.com/640/480/hotel,deluxe,bedroom?lock=7894680792465408'),(11,'https://loremflickr.com/640/480/hotel,suite?lock=5144814894972928');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_amenities`
--

DROP TABLE IF EXISTS `room_amenities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_amenities` (
  `room_id` int NOT NULL,
  `amenities_id` int NOT NULL,
  KEY `room_id` (`room_id`),
  KEY `amenities_id` (`amenities_id`),
  CONSTRAINT `room_amenities_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE,
  CONSTRAINT `room_amenities_ibfk_2` FOREIGN KEY (`amenities_id`) REFERENCES `amenities` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_amenities`
--

LOCK TABLES `room_amenities` WRITE;
/*!40000 ALTER TABLE `room_amenities` DISABLE KEYS */;
INSERT INTO `room_amenities` VALUES (2,13),(19,9),(18,8),(3,8),(19,3),(12,13),(18,12),(18,11),(12,11),(14,9),(7,12),(3,2),(19,5),(1,5),(9,5),(1,7),(20,5),(4,13),(8,12),(17,1),(9,5),(14,8),(4,8),(19,5),(7,7),(15,8),(9,9),(11,5),(15,6),(2,6),(19,3),(20,2),(9,13),(3,4),(15,12),(12,6),(13,13),(12,9),(15,5),(3,12),(1,11),(17,5),(2,6),(3,1),(13,8),(4,1),(1,10),(18,4),(4,12),(4,1),(5,11),(13,2),(20,3),(14,9),(6,4),(9,8),(7,6),(17,5),(7,13),(19,2),(5,4),(16,1),(8,8),(11,9),(13,4),(11,13),(4,8),(4,3),(3,13),(10,7),(10,13),(13,6),(12,12),(17,11),(20,3),(8,12),(20,10),(12,5),(8,4),(12,3),(12,12),(20,10),(9,4),(8,6),(18,3),(17,5),(6,2),(18,9),(10,8),(11,1),(17,1),(2,3),(20,13),(17,11),(4,1),(18,2),(14,2),(1,1),(19,2),(4,13);
/*!40000 ALTER TABLE `room_amenities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_photos`
--

DROP TABLE IF EXISTS `room_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `room_photos` (
  `room_id` int NOT NULL,
  `photo_id` int NOT NULL,
  KEY `room_key` (`room_id`),
  KEY `photo_key` (`photo_id`),
  CONSTRAINT `photo_key` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `room_key` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_photos`
--

LOCK TABLES `room_photos` WRITE;
/*!40000 ALTER TABLE `room_photos` DISABLE KEYS */;
INSERT INTO `room_photos` VALUES (1,4),(2,9),(3,8),(4,8),(5,2),(6,4),(7,11),(8,2),(9,5),(10,10),(11,4),(12,10),(13,5),(14,2),(15,5),(16,6),(17,8),(18,7),(19,2),(20,3);
/*!40000 ALTER TABLE `room_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `room_type` enum('Suite','Single Bed','Double Bed','Double Superior') NOT NULL,
  `room_number` int NOT NULL,
  `description` text,
  `price` int NOT NULL,
  `offer` tinyint(1) NOT NULL,
  `discount` tinyint NOT NULL,
  `cancellation` text,
  `status` enum('Available','Booked') DEFAULT 'Available',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rooms`
--

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` VALUES (1,'Single Bed',68,'Quidem arcus via deripio deprimo.',472,1,91,'Aureus architecto casus adhaero ante esse atqui casso toties. Tonsor absconditus voluptate vulgus deduco caterva celer suffoco adulescens.','Booked'),(2,'Single Bed',274,'Sequi trado decet vir fugit crapula vesco claustrum considero tutis.',427,1,27,'Iste suppellex amissio uxor rem triumphus quis in deficio comitatus.\nAut quod curo utor depulso aequus thermae tergiversatio.\nCicuta beneficium conor dedico charisma crur cariosus creber.\nCohaero ara voluptate aer thermae pel harum officiis vallum trepide.','Booked'),(3,'Single Bed',21,'Porro aperte aestas vivo catena talis caecus quaerat.',187,1,61,'Coadunatio denuo decens toties. Vomito acquiro magni auctus quibusdam trepide vulgus vinum video. Vero praesentium odit tam esse. Cura acervus suscipit.','Available'),(4,'Double Bed',206,'Quaerat auctor victus.',313,1,56,'Conduco vix defessus repellendus adsum consequatur adaugeo curvo.','Booked'),(5,'Single Bed',352,'Capillus copia bibo asporto recusandae conscendo.',378,1,23,'Acceptus viscus tolero vetus demens beatus vergo. Tantillus earum cum succurro administratio angelus comparo derelinquo aggero. Absconditus canonicus aer ambulo teneo.\nRatione cultellus magnam sto adficio xiphias soluta vapulus abeo substantia. Advoco teneo causa teneo arcesso spiculum vapulus ipsum porro. Vilitas decens odit copiose adficio distinctio decens.\nApostolus absorbeo admoneo incidunt conspergo vicissitudo velum. Soleo cervus eligendi defessus. Collum corroboro deinde adfectus tunc aegre aveho ut amicitia xiphias.','Available'),(6,'Double Superior',111,'Ea tunc terra currus amita cilicium.',204,1,95,'Denuncio fugiat provident cursus suasoria thorax delectatio decet. Benevolentia voluptatem compono vado casso. Sto tristis corpus nam.\nTametsi asper atrocitas peccatus vox aer ars saepe infit. Volup succedo antea centum aperio suscipio alter tui stabilis cinis. Nemo tubineus capillus acceptus.\nChirographum vulticulus cattus confido apostolus caterva eligendi. Uberrime defero crustulum temeritas bibo ultio spiritus colo beatus nihil. Exercitationem altus fugiat catena caste.','Available'),(7,'Double Bed',35,'Ambitus deduco abutor ex adficio repudiandae torqueo cotidie.',318,1,21,'Amo aegre tredecim caelum molestiae advoco aliquam tondeo. Curatio advenio comptus bene. Administratio quam necessitatibus ducimus.','Booked'),(8,'Suite',169,'Corroboro apostolus fuga.',304,0,0,'Tutis cur cogo. Verecundia attollo deficio cunabula advoco cetera advenio vobis accusantium volaticus. Architecto tepidus cetera vulgaris quo delectus ultio arceo. Exercitationem tutamen corpus ducimus utrum crux virgo. Adipiscor creptio placeat subito custodia dedecor. Cito quibusdam inflammatio angustus cuppedia crastinus.','Booked'),(9,'Suite',226,'Solium vespillo vulpes pax vos ambulo aliquam decor tabgo.',239,0,0,'Ultra magni dedecor certe caritas virgo coniecto crastinus conspergo.\nConservo contra timor textilis aliqua demoror quo aliquid tres delicate.','Booked'),(10,'Double Superior',246,'Admitto aedificium angulus tempore arguo sumo spiritus tardus voluptatum.',392,1,42,'Pauci asper absque deinde. Altus curiositas optio fuga cilicium reprehenderit trans nam alii. Charisma conqueror alias canto.\nClibanus defero contego suffragium pecco. Defleo vomica quo. Calamitas curriculum exercitationem culpo.\nQuas voluptatem thema voluptas hic coaegresco dolorum. Casus caelum patrocinor tricesimus. Tandem curatio laborum.','Booked'),(11,'Double Bed',13,'Antiquus texo conicio delibero ter thesis chirographum careo cotidie curso.',251,0,0,'Tergum decretum ustulo audio vereor velit testimonium vesica traho. Comburo asper titulus strenuus reiciendis. Vulariter carus caecus beatae beatae cariosus crinis sursum defessus.','Booked'),(12,'Double Bed',163,'Cenaculum adeptio volva solio aequitas cito una autem subiungo amoveo.',488,1,57,'Aggero desolo vallum rem.','Booked'),(13,'Single Bed',474,'Cupio spes quod vociferor acerbitas caste in.',348,1,86,'Alioqui crebro coaegresco tamen tunc copiose occaecati tenus amplus.\nVirga suus corporis speculum auditor sed cetera.','Available'),(14,'Double Superior',335,'Ab decumbo thesis defaeco pariatur cupressus.',274,1,56,'A deputo absens crepusculum circumvenio acies vesco.','Booked'),(15,'Single Bed',349,'Repellendus tot uredo capillus.',387,1,35,'Vinco victus alioqui consectetur. Taedium facere tamdiu caelestis. Bellicus adipisci surgo defaeco ab video animadverto.\nEarum aliquam tabesco. Cui amet solum audeo quibusdam cuius defleo. Adnuo testimonium vomito aer reiciendis ante suasoria acervus.\nVolubilis vespillo placeat suscipio coadunatio fugiat. Brevis causa audeo cras vitiosus attollo usitas tametsi in. Aperiam vinitor solium.','Booked'),(16,'Suite',189,'Stips auditor creta aperio vapulus corpus virtus.',420,0,0,'Cubicularis unus benigne tubineus altus magni attollo celo socius. Pectus nostrum aranea argumentum inventore. Denuo bene valeo versus viduo fugit officia possimus.\nIpsa ullam auxilium. Curo collum currus tricesimus voluptate defaeco. Cogo cultura torrens tumultus colo comedo delicate.\nDecor creo deporto fugit spoliatio ascit vesica. Colo ater decipio compono cedo vergo cognomen sequi esse. Dapifer quis venustas annus canonicus solvo calcar studio.','Booked'),(17,'Double Bed',39,'Venia tabgo contego arguo.',462,0,0,'Comparo vel corona vix suadeo esse sequi cura summisse cresco. Curo crustulum exercitationem. Suppono commemoro defungo aedificium.','Booked'),(18,'Single Bed',415,'Crur cimentarius stabilis.',207,0,0,'Vado amor debilito labore demo abstergo pectus theca.\nCaste usitas accedo.\nSophismata ciminatio socius reiciendis attero commodo pauper minus cogo.','Available'),(19,'Double Superior',74,'Cubitum super toties debilito congregatio clementia tondeo capitulus conforto communis.',182,1,14,'Perferendis recusandae alter. Ciminatio solio deleniti summopere expedita. Impedit cibo deputo sodalitas.\nVilis virga clam defetiscor canis audio benevolentia. Verbum adamo excepturi adhuc suadeo dolores succurro. Apud copiose cupio carbo sollers cetera vito certus utilis.\nBardus cruentus sed spectaculum sono antea bos. Vester sapiente vilis congregatio vulticulus temperantia arbustum demulceo. Ager carcer urbs dolorem error.','Booked'),(20,'Double Superior',73,'Arguo tabella arma denego debitis.',195,1,12,'Testimonium tremo facere excepturi sursum aer. Tantum desidero eveniet antiquus copiose. Tenax ullus pecus contego.','Booked');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `job` enum('Room Service','Recepcionist','Manager') NOT NULL DEFAULT 'Room Service',
  `description` text,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'Isai','Schumm','Lily62@hotmail.com','2023-10-11','Manager','Vulticulus cerno.','https://loremflickr.com/640/480/people?lock=8995648256868352','(738) 861-9200','Inactive','$2a$05$aI/nD0nAO3wXSezTM8SMvOCyc/JCGomUXs7OGRjoLD7DhzXLB77Eu'),(2,'Delphia','Weimann','Dock.Boyle19@hotmail.com','2023-09-25','Recepcionist','Vulgo volva video anser suffoco.','https://loremflickr.com/640/480/people?lock=3363253285552128','921-440-7790','Active','$2a$05$Oo6C3i1o3j6m..SxDhFumOPSDDepReAF2x.yIY7Rb1R44zvYJBNd2'),(3,'Annabel','Pollich','Dereck.Mills@hotmail.com','2024-03-18','Recepcionist','Derideo trucido mollitia ulterius admitto.','https://loremflickr.com/640/480/people?lock=7574128089366528','(852) 392-6221 x160','Inactive','$2a$05$4PQ9NZd5NUOdawraJ7gxyOxOcyQHDKo4SA/ddP780V7g6DxOSzL0q'),(4,'Lauren','Hagenes','Bernadine38@gmail.com','2023-08-03','Room Service','Quo aut territo.','https://loremflickr.com/640/480/people?lock=594915574677504','1-594-299-1135 x0303','Active','$2a$05$zmt8LVl5hh1WOddusy8PBuksUuaAhHM0qvSzADU5LcQqXZf5PzkJW'),(5,'Godfrey','Powlowski','Alfonso_Stoltenberg20@yahoo.com','2024-01-16','Recepcionist','Abscido eius.','https://loremflickr.com/640/480/people?lock=2816945904680960','(950) 937-5746 x302','Inactive','$2a$05$RsKeiEak91aj5NTNeGvKFOFyDJxfD.l35ey22cAJVxrNGw4teelAS'),(6,'Jesus','Bahringer','Serenity.McLaughlin48@hotmail.com','2023-06-14','Recepcionist','Theatrum coma spes suppono dedecor.','https://loremflickr.com/640/480/people?lock=6598798499381248','(718) 609-4294 x84834','Inactive','$2a$05$CoCqIBCLaqCrxzP53a1bW.xCxDSrKHSG6Nb2qJLOWQ/vy1smKfbL6'),(7,'Orlo','Wuckert','Axel.Ziemann@yahoo.com','2023-06-11','Manager','Arx ancilla.','https://loremflickr.com/640/480/people?lock=4921294676033536','1-566-576-8659 x22726','Inactive','$2a$05$GEBiLf1DWliBpLFkNM2LW.WLZh4zdkF6WtvE.NkqdavkLIEJKFVha'),(8,'Hoyt','Gottlieb','Augusta_Romaguera1@yahoo.com','2023-09-06','Recepcionist','Addo dolore solum vapulus.','https://loremflickr.com/640/480/people?lock=9002066309545984','600.384.0397 x23622','Inactive','$2a$05$dFAxKLn1zv4CAUBSqkJpfexlpRUWykTCcvO36WcnIVLSrOAnVa4Yy'),(9,'Natalie','Nader','Imelda90@yahoo.com','2023-10-05','Manager','Tenuis atqui solio.','https://loremflickr.com/640/480/people?lock=127136000114688','1-248-705-2543 x098','Active','$2a$05$rNNoQwn/MMnQNJo4GAAngO.Wc1bPACXi27aVqMjD3AcgLJwIKa8wa'),(10,'Bradford','Wisoky','Brennon54@gmail.com','2023-12-05','Manager','Amoveo studio abundans utroque consectetur.','https://loremflickr.com/640/480/people?lock=3862309206228992','(660) 392-4881 x62357','Active','$2a$05$i7Z5d/3FIYN5mVoMD4xbyuwB7ILc/rXHYi0I3ZL0v9z.Trg2noutu'),(11,'Osborne','Bogisich','Leonor_Pfeffer@yahoo.com','2023-06-21','Room Service','Deserunt maxime.','https://loremflickr.com/640/480/people?lock=3690460474245120','(812) 909-0415','Inactive','$2a$05$Au0KQBSxDK16bmbaYPc4Y.ovtglPFIPTLgP6PQ43YWIITylut1G8y'),(12,'Lewis','Conn','Mina83@gmail.com','2023-09-19','Manager','Sollers tepesco copiose enim.','https://loremflickr.com/640/480/people?lock=2795136157220864','(612) 801-0051 x341','Active','$2a$05$6sZt6yd6i8vNMGBwR5enA.wy6ruDWiCK9VSPem5uEQYt6b3otk6pS'),(13,'Vickie','Homenick','Shemar.Krajcik27@hotmail.com','2023-11-05','Recepcionist','Maiores.','https://loremflickr.com/640/480/people?lock=8252177447387136','1-288-253-7574','Inactive','$2a$05$22rZaT2PaM72l.355kYRI.9iao3HN2z91tTMToB62grb7GxGIdKTq'),(14,'Julio','Turcotte','Helga.Schroeder54@yahoo.com','2023-05-31','Recepcionist','Cubo venustas volutabrum.','https://loremflickr.com/640/480/people?lock=3585503525863424','309.788.1242 x6244','Active','$2a$05$15jrxSgfMEyN8q8EmozLEufJuLyZIAUDogycDpvgC9SdCdpv1uUjC'),(15,'Mohammed','Denesik','Chelsey_Ernser@yahoo.com','2023-08-21','Recepcionist','Auctus sollers aptus.','https://loremflickr.com/640/480/people?lock=819743986548736','(274) 631-3455 x24950','Inactive','$2a$05$NH/kX3R0R2bOLFIAWoAjfe/fE34XUCR2Qe9OPrO7qAhvRfolSAEwa');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-09 11:08:55
