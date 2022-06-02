CREATE DATABASE  IF NOT EXISTS `db_pweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_pweb`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: db_pweb
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_event` date DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `description` longtext,
  `event_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'2022-04-09','contest','A nation-wide game development contest held annually.','Algerian Game Challenge'),(2,'2022-02-26','conference','A conference about cybersecurity alongside a national CTF competition organised by Micro Club.','Micro Catch The Flag'),(3,'2022-01-20','conference,workshop','A month long celebration of open source presented by digital ocean, sponsored by Github and hosted by Micro Club.','MC Hacktober FEST'),(4,'2022-01-05','workshop','Two days bootcamp about visiualization and cloud-computing presented by Dr Djelloul BOUIDA.','MC RedHat Training Camp');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruit`
--

DROP TABLE IF EXISTS `recruit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recruit` (
  `matricule` bigint NOT NULL,
  `first_name` varchar(70) DEFAULT NULL,
  `last_name` varchar(70) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `year` varchar(2) DEFAULT NULL,
  `faculty` varchar(5) DEFAULT NULL,
  `message` text,
  `date_reg` date DEFAULT (curdate()),
  PRIMARY KEY (`matricule`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruit`
--

LOCK TABLES `recruit` WRITE;
/*!40000 ALTER TABLE `recruit` DISABLE KEYS */;
INSERT INTO `recruit` VALUES (23,'lol','mdr','dfghfdg@lkgjfdlkjg',98798,'L3','FGC','<script>select * from recruits </script>','2022-05-03'),(123,'yanis','lol','xd@gmail',1235,'L2','FMT','LOOOL','2022-05-03'),(145,'yanis','lol','xd2@gmail',12,'M1','FMC','mdrrr','2022-05-03'),(256,'SALIM','MDRRR','xd3@gmail',12,'M2','FSB','mdrrr','2022-05-03'),(7475,'yanissss','mmdrrrr','loool@gmail',4395345,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(98749,'kjdshfjshd','lkfdjlsgkj','ddshfiuds@dsfkjhds',90909,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(98793,'kjfshksdj','lsdkfjlfskdf','cehcejce@gmlhk',9809809,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(98798,'helo','sqdùfds','kdsjfsdkf@dslfkjds',909,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(787632,'sdfsjd','dfjhdsfds','yais@gmail',897987,'L3','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(874685,'dhgfidshfhdsgjf','dsjhfjdskfds','check@gmail',9809809,'L1','FCH','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(959834,'last check ','sdfksdfljsdlfk','mdrrr@gmail',98098098098,'L1','FCH','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-20'),(987948,'MDR','YANIS','yaniiisisss@gmail.com',987987,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(987987,'yihdsfj','idsofijsd@dslfkjdslkf','iudsqhfiudshfis@dslfkjsdofkj',9809854,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(9098543,'ofjdskfjdsf','KJFKJDSKF','KDSQLKJD@dmlflgmfdlk',904983,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(9804968,'KDSJFLKSJDFL','KDJFHKSJDHF','jshgkjg@dslkjsldkfj',9809809,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(9843985,'hello','yanis','yanis@gmail',98098,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(98430958,'SQOIDSQOJDQ','kdsjhfhds','dsjkfskjdf@sdfkjdsflk',90984095843,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(98745345,'kdjsfkjsf','lldsfkjdsk','iudshifuhds@mdskjfmldsk',9809809,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(98759843,'kdshhfds','dkjfkdsjf','sdlkfjfds@sdlkfjslfdkj',9324092843,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(876876876,'yanis','loll','mdr@gmail.com',98798798,'L2','FMT','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-04'),(943850943,'sjdhflk','ldskjflskdjf','kjfkds@sdlkfjdslkjfls',909809,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(4938509348,'dsfihsidfh','kjdsfkjdsh','chekkkkk@dslkfjldskfj',909809,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(8768273642,'dsjfhdsf','jkfjsdkjfs','dfhdsfdsf@dslfkdslfkj',980593845,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(9879847957,'kjdskj','lfdskjldskjf','lfdskkdsf@dslkfjdslkfj',90980,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19'),(202031085911,'salim','tabeloout','salim@gmail',9987987,'L2','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-03'),(202031085921,'Tabellout','yanis','yanistabellout4@gmail.com',657522790,'L2','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal\r\n','2022-05-02'),(304298029348,'ydsjhfsd','jdsfhsjdhfds','yanisssssss@gmail',980398,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(948509384059,'09583049543FIDSJDS','KJFDGKJFDGFD','yanis@glufiudshi',9098098,'L1','FEI','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-18'),(8746387564387,'yanis','loool','yanis@gmail.com',909809,'L2','FGC','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-05'),(38463287432423,'dkfhksjdf','kjdsfk','hgjds@sfjkdsfds',90909,'M2','FCH','J\'ai pris la bande d\'arrêt j\'avais pas l\'temps pour faire la file\r\nOuais j\'suis mal entouré, bouré comme la moitié d\'ma ville\r\nOn oublie pas l\'ADN, on oublie pas les douilles\r\nLe diable s\'habille en Prada ou comme il veut j\'mens bats les couilles\r\nHier à tout oublier, demain matin parle mal','2022-05-19');
/*!40000 ALTER TABLE `recruit` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-20 15:53:21
