-- MySQL dump 10.13  Distrib 5.6.26, for osx10.6 (x86_64)
--
-- Host: localhost    Database: DBSistema
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Table structure for table `Administrador`
--
USE `DBSistema` ;

DROP TABLE IF EXISTS `Administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Administrador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Administrador`
--

LOCK TABLES `Administrador` WRITE;
/*!40000 ALTER TABLE `Administrador` DISABLE KEYS */;
/*!40000 ALTER TABLE `Administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Candidato`
--

DROP TABLE IF EXISTS `Candidato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Candidato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Partido_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Candidato_Partido_idx` (`Partido_id`),
  CONSTRAINT `fk_Candidato_Partido` FOREIGN KEY (`Partido_id`) REFERENCES `Partido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Candidato`
--

LOCK TABLES `Candidato` WRITE;
/*!40000 ALTER TABLE `Candidato` DISABLE KEYS */;
/*!40000 ALTER TABLE `Candidato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Casilla`
--

DROP TABLE IF EXISTS `Casilla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Casilla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MAC` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Jornada_id` int(11) NOT NULL,
  `lugar_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Casilla_Jornada1_idx` (`Jornada_id`),
  KEY `fk_Casilla_lugar1_idx` (`lugar_id`),
  CONSTRAINT `fk_Casilla_Jornada1` FOREIGN KEY (`Jornada_id`) REFERENCES `Jornada` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Casilla_lugar1` FOREIGN KEY (`lugar_id`) REFERENCES `lugar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Casilla`
--

LOCK TABLES `Casilla` WRITE;
/*!40000 ALTER TABLE `Casilla` DISABLE KEYS */;
INSERT INTO `Casilla` VALUES (26,'ea616bdc-80d5-36ff-9495-f7cb678d632d','$2y$10$8Hp/sP0Y8b5ZMCy44etB6.qj1CzXa8ACbR64FB4WR8tpL6KQJ3N9C',26,27,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(27,'8530bc36-9e28-33df-a96e-1d7336a40329','$2y$10$j3hkQcPKJKvn2hvKcw4qFueoA39hQgA4vdR399HU4TyCwGh80ntX6',27,28,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(28,'5127acb3-b116-3df2-8c2e-b25688501962','$2y$10$Xl/F/1nuOk6gZupk./FAwuJ0n7swxIWdMMZylocw9bGl8HvEQFgJy',28,29,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(29,'8c127788-712e-30fa-a9bc-b979885479d8','$2y$10$L33aYyWQcKH3YgDlL3Q2DOQccbx6WpHSdsXniXG04M8qJb016C5M2',29,30,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(30,'e60d4b46-03aa-3b8e-952f-e5b5db810719','$2y$10$YsFMx1oqquroIZ18d0TOGOWv9fXlENxmmDQDYNoMrrOTSikdk4p96',30,31,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(31,'6b92afa4-e8a8-3b1a-b1c0-e3ad79639057','$2y$10$dAePfmZmIEHMuWvi3MF3deCVew7.hFv/CjrnRbLe3FNsBHXCm/xE6',31,32,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(32,'ca2ea80f-e7a4-3182-bd83-5d0be385d2e4','$2y$10$.QZy7ZfE7LLB5vZge3NMmeRYItNzW1Ncbq.keqOhVjJAIkaNX.Oqa',32,33,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(33,'b3135464-b24d-3608-9aba-0ca48e5a12df','$2y$10$nSdsj.wJrZTvvvqeLqcwjuf6LW.G6dWlPtL.vLyqxCJwW/Q1FA9m2',33,34,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(34,'a29e7cdc-f90b-3958-99a0-a70766c0b62a','$2y$10$GnVg4Oeo5YzNbyn15//QLueKKcxG1vnRvL.K2HIKdKQLnz0Ye/TEi',34,35,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(35,'4b43ae68-6155-37a5-bfad-94a05f29314b','$2y$10$aMcmo8JmzSFyBo4Y9PLt.etd3l0EL0I2F/v0i45MUayyNx26BSdNy',35,36,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(36,'cac45a0d-7e9b-3c64-a9e6-7545890e9d60','$2y$10$RTDuKuytDNtEQI.ZuxKoyOnBwXWUxizpMd9bLomufX8AmEPcCBD.6',36,37,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(37,'d723a7cd-7f21-38d5-b726-e18449dc5c8b','$2y$10$x2GzpgfZZZgn0t/45jcIceCr09vkifUfunE9JNynC/1smzP0G5xT.',37,38,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(38,'78b71a0c-7434-3769-ad96-1f8281949482','$2y$10$2q4C0CytDfQ1xDi5QFB/9uc3Sh8eIp8FyHrMNeRKL2wUwL.osXdey',38,39,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(39,'108d2547-5e9f-318d-a977-a2148a80a1f8','$2y$10$Wcqte8/Yt1WcY47.yGjCjuMw9LK/TA8fJVhLsM1Ghb/982IQbbZj.',39,40,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(40,'ddc4702a-6e0a-3401-acc5-2d4fb4a36819','$2y$10$qT0cqDs6gtN3eXqcRuSMR.vDaAhAZmjENcOcy2LSSDCZjzwKgdmYe',40,41,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(41,'78cec879-2475-35c1-a799-714412464d2c','$2y$10$s1b9st11yte6fEZ5FFeE.eZsAQtrfPyzoR0Ntb.imXA/SGEqKVUle',41,42,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(42,'92cf0335-e126-3e1f-9aed-54eb885fd28f','$2y$10$5sscl9xlsy7czysLrMsvWuf.NwxYh9mCqjEBy0OAg/wsIsvEgxO3G',42,43,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(43,'376203a2-6fb2-3796-9fb4-5e79d727b2a4','$2y$10$CpsRpLs3azLPcqYUTPT6eO.dPE7u7QGh4f3fLrJ.BQFGRp7SbRTuq',43,44,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(44,'95a0ebd8-99a9-3d2c-b833-63c94a611100','$2y$10$6WBFxqChnzPmb7t9Q3zGpO61RYLkWuMrSoGvbFZJEyFxKJ9wJNLmm',44,45,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(45,'4b5ee3cc-55ce-3583-ae26-43e3b572e880','$2y$10$q5eXMrzpSjrnKa8vedsozu9H88eIktT9hodzEZGiu6HeV2NZaO46S',45,46,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(46,'5fa966ec-35c9-3085-a8c3-eec303f69cee','$2y$10$5o7QkTFjsf/OUtyIp1gnVOkaqRFfqv4HHiT07tldUiwxy8NaoSTdm',46,47,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(47,'53493da5-2bd6-3ff3-811b-3466481a478c','$2y$10$tMepNEm0Gs7DCelPVCYsAerNBhD790yuJaPmflLHauPGiUluUw.Oe',47,48,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(48,'6dfbd3c8-86e3-3e92-be31-768d7a1f98bf','$2y$10$apSDXOCsHpo.xgz6w3diPu3xcccSfafFOidhkxAh3CD76VZiwWXV.',48,49,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(49,'ea2f4b8f-d201-38dd-ae39-f18fab3eb100','$2y$10$uwwjXG9BXpbFgEGPq3cu2O5AbluINIJQXYVNNRUfkv.B/uPfaSNWu',49,50,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(50,'0ce574e9-a346-3ea3-ba9b-7fe81ce90bd5','$2y$10$lJaLDubRcOm9g6ccw7NHC.r/.heZenzZIATHoK/blGhKSpteQBVl2',50,51,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL);
/*!40000 ALTER TABLE `Casilla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Funcionario_casilla`
--

DROP TABLE IF EXISTS `Funcionario_casilla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Funcionario_casilla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(145) DEFAULT NULL,
  `huella` varchar(300) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Casilla_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Funcionario_casilla_Casilla1_idx` (`Casilla_id`),
  CONSTRAINT `fk_Funcionario_casilla_Casilla1` FOREIGN KEY (`Casilla_id`) REFERENCES `Casilla` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Funcionario_casilla`
--

LOCK TABLES `Funcionario_casilla` WRITE;
/*!40000 ALTER TABLE `Funcionario_casilla` DISABLE KEYS */;
INSERT INTO `Funcionario_casilla` VALUES (1,'Kameron Raynor','e52d16e1-a205-33ae-81c4-30f91efd50f8','$2y$10$Xu59l/5sHxr/GMve0ENvJ.D7C.5wP1skKFz9BEvG/uEHAcN81SwdC',26,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(2,'Mr. Jaron McDermott DVM','a0ddfd81-f18b-3ab4-9104-885bf53beed4','$2y$10$M8UrlAPAvVOoGqUmPM1fwufMWr41XvV/6LjWSdEkDU93qwDlEsIrC',26,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(3,'Curt Schoen','5a02c27b-7311-34f8-86a0-5f1639958eba','$2y$10$5C2LkS4Qld/qsJFdXau.Je2XSVHnCiZvO1y8qPiKjzLHTKsnrdSo6',26,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(4,'Murphy Klocko','88fb5fce-697a-3fe0-8790-4c4a4e5b1c83','$2y$10$gSbi2bWTYLIBqGrccRPs3uomHZv.UDJJxTGtl8a5JXhwmBjC2l/Q2',27,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(5,'Natalie Ledner','ec2a0e5b-0007-33bd-b920-4ee746c00788','$2y$10$zDIX3ezhGyow6WiqUgktvu8BYhItYr5KOCw9DzuxO2slGrxhjcr6C',27,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(6,'Jaunita Donnelly','6e4ff5cc-430d-3260-827e-f129dae89d22','$2y$10$PT2oqCLOdDH3cDQ0FeWWreeZCyFezILbUirOg8wyaToCxeGyWsNMS',27,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(7,'Roselyn Armstrong V','bde47783-a07f-38b1-b9cb-67031f6ad0bf','$2y$10$WxPoQ9fQEonG1vIlmj8zGehmqW4qlIOM4Ji1ZTTyICw7vaplOtG7K',28,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(8,'Markus Weber','ba03d4e4-1331-3b79-a9e6-4b302708e5be','$2y$10$3QY6IPoTJ2Klhg5khYPQs.HI92ZqmizNDvGBCpCtLSVLUEw2.Q1DK',28,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(9,'Arvid Wolf','829f5891-4929-319c-9c88-a6461a5510f6','$2y$10$ASeLr9P/qk6.uS0MFfqfuOWGUO233n3G2nH0aYS45s4AP7O3McBVa',28,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(10,'Amaya Grimes','1043569a-6f7f-362a-b2e7-bc396e8b2ab5','$2y$10$n2RL2ltww82IyqX.yv9dH.qCrakVJEt6xq06L.nU8J1TBU02Y27RO',29,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(11,'Newton Moore','266b4e7c-f00d-3657-9260-1495df40f6ce','$2y$10$aJJtTYGETf9O6d2tQ00smuqOro0S1euq5oxsEw6zd4zqqLbm22LM2',29,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(12,'Mr. Savanah Lebsack','0f214297-23f8-3bfc-b12e-bc529281374e','$2y$10$WeD/Ik0px5RaHEAA5dIzWuHInB8VJVLMk.LRZL9BzFNm49BdMQsRW',29,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(13,'Graham Wolf DVM','644f59a2-1291-3070-8657-423a36c56d7c','$2y$10$7/SbM5rmZaQs5Fu.yS4oL.Kor/Ax3.tsPlInGX1kornTbFM7Xnqb.',30,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(14,'Mayra Trantow','1f91c09f-8111-3caf-b72f-a67053c95c81','$2y$10$DzIJk7L7SO9zMm/aBh8Uq.zQW6jpaX6nNCPWpKfKO9kpwm/.edlnm',30,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(15,'Mr. Katelynn Ernser Jr.','de357842-7b34-3a33-9cf2-96ebe5a9a1aa','$2y$10$hOSEz.uhTO71KwTfgOM/Ju9nAJENwWZrRxGK2yB5ax5Ml.m8rfv5u',30,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(16,'Jaquan Krajcik','0806395e-5708-3995-8f77-75586eede8fb','$2y$10$LrgOYQ7hdQv0Q0gSZc7dg.5CWs7Ok9YMnbJFsgRseXBN19vaQ0u8i',31,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(17,'General Wuckert','5360f7f6-ee1d-3cfe-ab02-8233642bd561','$2y$10$vqHuj4HCXslMmU.L7WkzFOZRnt2.zLmJ4wKjFLcUf7ao9fD3UwPWu',31,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(18,'Willis Barton MD','5bcf248b-fe38-3197-8e67-6fa28cb8c2cf','$2y$10$UHPDL8.n4U7DYgwKL3osQ.dj546sCOp3dn2cOCE06BrIWDWeJXZV.',31,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(19,'Faustino Treutel','423beb91-3b2b-3f14-a347-38ee92aa0427','$2y$10$XBfgjm.8JWn6kHZRUl8lrOMrPzkDfXKHm44H/DyTHnEle7WA2SkYO',32,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(20,'Gwen Frami','1da755f3-794d-3be1-9f79-377ff211a143','$2y$10$V9ZJKZAjh3iKOX9vG.CVQuIcSkdt92Xt037x4O/B8TbVhQa17KPEK',32,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(21,'Ms. Wilmer Kiehn MD','ea09afb3-8403-31e4-9feb-df3f605e8bea','$2y$10$Vh3R734JxSxsuD3YJrc.Cucp.Ln09TZTnRtccarHnx3qfPMff1XU6',32,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(22,'Juanita Gerlach','35a4e939-85e6-3d52-a9c1-081a0db6d102','$2y$10$mzXjVo65gJNBWkf/3eoZjucaEpaSvo4B.EPH.IdTAuZ1rK62w6zCy',33,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(23,'Fay Koelpin','414b0a64-5aba-32d6-9870-0c4673250976','$2y$10$VzeAstjZ94VTUQ/KYjyXC.fwlAJrCQ5ItdaM.YlFclJMLSHE8wlHS',33,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(24,'Mr. Novella Steuber II','65b39497-d44c-3f93-937a-8857dca24c9a','$2y$10$Wrwl68oTIgzImjLpHYf6xOgVdtVoLIC39qkoW05N5Gzl8l.dVScOG',33,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(25,'Mrs. Nettie Jewess Jr.','8fc6ca72-740d-37e7-8f40-3a10fa4da16d','$2y$10$2NM08fO1Ruv8Hkgu4S3LmuIAVc6p2j15q5vO0KLl7VCTy9xd/oICm',34,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(26,'Miss Coleman Stracke IV','083147d2-b40f-34b0-91e7-387c0fca321b','$2y$10$Im540nxbZ94mxMYAwBDCou2kDPL91Dk44bQfzEmxr6qK2J/MDCIsK',34,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(27,'Jayson Waelchi','baa4c71d-3ef4-3289-97b0-4437c7076223','$2y$10$FqyD3dUSYTuTewbqIq4HLuv9.6DTP4Cp1rzmFakcYTQ4qVBuDIj.2',34,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(28,'Carolyn Simonis','04a318a1-a8b3-36a3-bc66-a0ada67fa9e4','$2y$10$6aUBwz1TjXt7sM2//oHroOv/K.qpeg1p7CxubShoNbrMHHYykKDua',35,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(29,'Mrs. Timmothy Dach','8b197734-3813-312e-a33f-79eadce6417b','$2y$10$r6x3ftJFo.V46i4Pqp2zP..I3/jmxfhXrql9Vim6de5gLJJykj/Y6',35,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(30,'Freda Beer III','63a6889d-cabf-3203-90ac-899306d1dd0d','$2y$10$bmTKaRFqZgyXQWaFL7RO4OAdCnkvpC3lOmdEwKLpaLPfjhhuAwwA2',35,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(31,'Yoshiko Torphy','89045776-5c22-352b-8f57-fb2989f8447b','$2y$10$srzFBjNrAY.0Dbs6O9MeC.u6uUpzDG1wv62Zs66DOJc4EhBdD4vw2',36,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(32,'Russ Swaniawski','d5b9b35c-c64a-3bd7-9c4d-64ece7093d71','$2y$10$SMYpf5BKCTmQFf3Zbb2ImuB/t4hoKrJ0c/eU6ke.3NzyQfS5ti2iS',36,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(33,'Trent Marks Jr.','3714e40a-ba93-321e-9a74-40ecb5bae9c5','$2y$10$iGFIMh61eAzWp6VUhaT.DuNR3MKdnWUwlu4GaXKA/hAzvbelCSAtK',36,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(34,'Randy Prohaska I','343137aa-2e43-383e-ae50-927b580a3e72','$2y$10$WnZx0RVdCBbfHqeZhSr2o.0E/12pdvEkMaNbUCllN32MYDbysYpNS',37,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(35,'Shanel Konopelski','08732aad-d6c0-3aef-94e4-f60356d6650b','$2y$10$8AL5Hs8J.C05gyUTY1rtMeTn.8Uw9BWs66j9EqZ.TG0WKPDe1iT6a',37,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(36,'Madge Cronin','51e4b674-08db-349e-8765-7901d4a7f31b','$2y$10$WnCUcW1j0S2tvyCBqNAmTuEoq/rrvsJwJG9bCy/vEgVFR4NjtDWOG',37,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(37,'Abigail Strosin','df1a2166-2efb-314d-a5d4-78534fd2e1af','$2y$10$F7/eRmVvfFKoXhUenZucfuxaQBWKVxJk8BKalr7oJtCyne1HpEZZO',38,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(38,'Deontae Ferry','79578bc8-85d4-329e-aac8-ce055786ae57','$2y$10$XulTfOypX9DTmOTVFsxSRujvQTGZVcQ/AmpuvKvHoz.HKyMw.ncFe',38,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(39,'Ferne Prohaska','0add7e20-e50b-3922-89c1-c75fe95019c3','$2y$10$rYnd1uLSRXkD1SRwvd.lre8JnaO.M.8oPFgO9VB..oXnl.CnLqad2',38,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(40,'Dudley Tremblay','845b5d80-4a17-3332-9a76-62dba490d349','$2y$10$1yGL7Fqlg6ZuEVkqB492nOaQoWESzujv6ceFRcIuhLGdhuZvqwN/6',39,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(41,'Ms. Conner Dach DDS','d97fd410-20ca-3e25-8daa-7cdfb4b5b3f6','$2y$10$3Tnf8OEvrc1UuO04sHBgZ.I.tGVsU7mIWKEZLRaEFdEujAf221y0C',39,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(42,'Mr. Chadrick Witting II','2b9ab7bd-fb74-3799-a96c-d674c09f57ee','$2y$10$Yaoxqv.dAFPTDWbLw9DIwObBqOShXkKAXkBDaEyQGqmcgRzl.H7gC',39,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(43,'Ms. Annie Pacocha','907a7d56-f40d-3692-a4ac-055ba0c0bb9c','$2y$10$PiI51AIr5eNRLQ3zG9XvWubZ/nflXtZg2t8FZDfspI0f1Y1uOfOM.',40,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(44,'Michelle Dooley DVM','29f8a7c6-6ca8-328b-ad07-c2402e94c10a','$2y$10$2G6jFHgcqM5TS.7pNsnsyOD.PK9hIaU0RLHx7fkfxnPmlZ..tdV0q',40,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(45,'Jovan Mante','62c2315d-b5f0-3599-9f64-b43a179b68fc','$2y$10$FEULHrq619.P9HPxxZuTPOmZb3ubPmjJ7o8INHlyP1ddz877LwP2e',40,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(46,'Jan Kerluke','39e5c927-06f2-34c7-a76d-8898d5019f2a','$2y$10$VprwzmEsGjzwRioJdhvxdOoKosL1FbBGsNpwW4AxQ0In.BIKa5exS',41,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(47,'Tierra Keeling','e8883ebd-626a-3093-9e04-d5a482d083c9','$2y$10$2DseLoqBhiUr.BYyxzRENeA9EJmU.YwNUBPtURUuBW6QKimMR/nqC',41,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(48,'Florence DuBuque','7659c770-aa41-304e-818a-84ff3c0fcddb','$2y$10$n9jZnVZPLsMBUdesvtsxAOJWlXAi68qr8m00llgq.Ewyx1qy6h706',41,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(49,'Stanton Kuhn','febd2a92-d7a4-3395-afb0-611cb588cb0b','$2y$10$mdy/Cy6GsDV8pc6owDxx.eIwmeJCPImP3/Su9bd.vxzQ4MlNLN5jO',42,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(50,'Arturo Kuvalis Sr.','3ca14050-b590-38fe-862c-ff6b1bf53c51','$2y$10$TmkbTmo0pFiibFzYArrOR.2WBnj0N4vbOflvnCHwu2p.UAwHiCHIS',42,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(51,'Orland Littel','4d36d6f4-30d3-3807-944b-acae3228f348','$2y$10$S4YX5T9h0nWaJaBclLvouuThX6FKGVPLjAIvjAk5ucyrxTiOAigYe',42,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(52,'Nya Hilll','988cb1bf-fc10-3992-a2eb-609f07b9863c','$2y$10$8cs0gxetpTNwseVwjuNq8OsEgIv7yEH5MqSgh4yCgc0.C8MM7ZyeC',43,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(53,'Jairo Satterfield','6623c8cb-2ddf-3718-8515-0b0d99588dfa','$2y$10$UL7kie7A4Qj.63aNImaM0Oi9IddBFw9y14NTLGEtDXy7CNTckmn3e',43,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(54,'Francis Jakubowski','5ab4b802-003c-3cc7-a555-30a02a81d447','$2y$10$9VdtniSRcDVrP0kR.aNnCeNIWsvtDEzFyHaFV5MpJzs5QNqa0tKOe',43,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(55,'Jayson Heller','4f756f31-6830-3af3-84b5-bd409c97c41b','$2y$10$003m6.fkpFdRbvfF45K5kOcCTU1H7DNRkjOHuxOEaLx4f9wz47.fK',44,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(56,'Virgil Gaylord DDS','abda95f9-8426-376e-9eba-de52581f35df','$2y$10$wolgH3tcNWgvD.ZbMEWp0ud2ObANNYu.xZwGH1JDnwu2vTX59SgOy',44,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(57,'Miss Rosa Cronin','8aad457f-12a0-3959-950b-b7d34fca38df','$2y$10$5i99bV1GC7EEWQ2CaBj/MeyaJ590V93SQw2/7J4Oaia8C6cPq0bGS',44,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(58,'Dr. Johann Cartwright DDS','3f875176-19c9-3163-bc5f-e389ba741c4b','$2y$10$D.SLdaSjUUvPvPw3o.q16e4y5paYTQIRnmGcjoppkEomW/wE/HSrC',45,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(59,'Jace Halvorson','646281b2-ed18-33ad-858f-4f538f81a8ef','$2y$10$vWI8u4lFBwcNM.IO0sDpbe326mXhAZZWE2Cybrkrv7p19bWUEGdUC',45,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(60,'Frances Feil II','2150ccb6-8eba-3532-a47b-29ca6a5956fd','$2y$10$9acTgjWKcdfRm3vKtoX/de6vuKLzO/GSzGnd./Ag47rpd1NALeLMq',45,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(61,'Ms. Bartholome Smith','e9a16d8c-5efb-35bc-82cb-c7ac6238d30f','$2y$10$XBu0jsba.DeOLcDhRYkA4.JyOkjDRSWlkyCo24YbAKyv/SXLd7P6C',46,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(62,'Dr. Vivian Hansen','a267f024-c232-375f-826e-66371ad7adf5','$2y$10$PXjNvGOShw37JnwKBY3nz.6nwncchufLh8wBxK3s8OKWq9fXHOPL6',46,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(63,'Emmitt Bins','25a3ac52-741a-3a0f-9309-04f88f7567d2','$2y$10$MbnTLZ2Z5fmMzM6n3.kWNuTrY7NAWaCMsZlWAg6Y/n8nTpanI4Cga',46,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(64,'Mr. Tia McDermott DDS','4a322f80-5f34-3e81-9aec-aec4f3293d88','$2y$10$IrC8oV5upGyfhRjA4T7e4.Y4xXdGen0D3UvdovJ3uBjHAB/3c7ice',47,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(65,'Mr. Cale Stamm Jr.','b67dbe2e-ee14-3d29-b52a-eed15f42effa','$2y$10$1.j6MtIf5SYQ/ixZuEXeJeteqsdnCVu5qtItht1rS8YsDY3Kt.jXG',47,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(66,'Mr. Isaac Block DVM','0329495c-0a09-3d5b-b19d-5f3a4bb7449f','$2y$10$TLtYtBOr1x9NxaQLhX7VFu1Za6v.MbubZwc6mwcoQhD/4BlwGa7aa',47,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(67,'Milo Carroll','d317f22c-5434-34b8-9009-3286d6b1c909','$2y$10$j2B77xpFtqSPIAaecvKPnOKzvwB7g9U.WfUiEg8tVOowyNz2Ydnou',48,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(68,'Nathaniel Bartell','1a08b120-9663-356a-b49b-ebf36b08c709','$2y$10$o2ZtcHq5gORdMsWlJFza8evimTaJdspxTwafHT8gceEyb6GHpmvsK',48,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(69,'Pietro West','0649ef37-ebf3-33b6-932f-0842eabf5ce8','$2y$10$69H8HDHKcFgM1w3k7iyiquK5umzEDXr2D0RRKw0VSOVd/buKxDsbS',48,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(70,'Josianne Bauch Sr.','19df0234-2f6f-3b5a-ae1a-f870ecd64184','$2y$10$QP1F2Bp3VCWpoXV0SimODuAdn9uTlWcM6L.E0LA6bPuzYIzzQWgGy',49,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL),(71,'Madelynn Predovic','bd37f96a-984a-361c-9d28-5cb83d1853f9','$2y$10$ZBeXRUPBbuF14RLR8T4z/u20fsZSGOHhhiWDGEY0A16Zgp3l13G5G',49,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL),(72,'Madonna Armstrong PhD','91a560de-4ad1-31d1-b50e-24e707946fb2','$2y$10$1CjTVrG4luTRLlJNQFrgY.YxqIj5853ausjTjNSU9yj8O3yGXxfeC',49,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL),(73,'Mireya Cummings','08716c58-3c1f-3767-85dc-57bf4ff15ab1','$2y$10$5xYutzE0JGXQrtSvimyrzOkesa./0TacIjU8EoIEtdBpPF0TPaHlq',50,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL),(74,'Fredy Leffler','430ce296-4cb7-3dc0-ab22-f70573e97509','$2y$10$J3qJ6nrCkmyBgjaOSPCjS.KFtPFUOLqXSSQ5Uy2afbnee7yNQyAja',50,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL),(75,'Fletcher Marquardt','f1aa1f20-0d06-30e2-83a5-2ee9aefe3856','$2y$10$Nd5HNBV/14PagBmc1sr3WemSgA0JWX6fk66vlLUrVhZujYjQhB/Xi',50,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL);
/*!40000 ALTER TABLE `Funcionario_casilla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Jornada`
--

DROP TABLE IF EXISTS `Jornada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Jornada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Jornada`
--

LOCK TABLES `Jornada` WRITE;
/*!40000 ALTER TABLE `Jornada` DISABLE KEYS */;
INSERT INTO `Jornada` VALUES (26,'2016-02-13 23:25:30','2016-02-13 23:25:30','jornada0','2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(27,'2016-02-13 23:25:30','2016-02-13 23:25:30','jornada1','2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(28,'2016-02-13 23:25:30','2016-02-13 23:25:30','jornada2','2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(29,'2016-02-13 23:25:31','2016-02-13 23:25:31','jornada3','2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(30,'2016-02-13 23:25:31','2016-02-13 23:25:31','jornada4','2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(31,'2016-02-13 23:25:31','2016-02-13 23:25:31','jornada5','2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(32,'2016-02-13 23:25:32','2016-02-13 23:25:32','jornada6','2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(33,'2016-02-13 23:25:32','2016-02-13 23:25:32','jornada7','2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(34,'2016-02-13 23:25:32','2016-02-13 23:25:32','jornada8','2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(35,'2016-02-13 23:25:33','2016-02-13 23:25:33','jornada9','2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(36,'2016-02-13 23:25:33','2016-02-13 23:25:33','jornada10','2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(37,'2016-02-13 23:25:33','2016-02-13 23:25:33','jornada11','2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(38,'2016-02-13 23:25:34','2016-02-13 23:25:34','jornada12','2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(39,'2016-02-13 23:25:34','2016-02-13 23:25:34','jornada13','2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(40,'2016-02-13 23:25:34','2016-02-13 23:25:34','jornada14','2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(41,'2016-02-13 23:25:35','2016-02-13 23:25:35','jornada15','2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(42,'2016-02-13 23:25:35','2016-02-13 23:25:35','jornada16','2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(43,'2016-02-13 23:25:35','2016-02-13 23:25:35','jornada17','2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(44,'2016-02-13 23:25:36','2016-02-13 23:25:36','jornada18','2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(45,'2016-02-13 23:25:36','2016-02-13 23:25:36','jornada19','2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(46,'2016-02-13 23:25:36','2016-02-13 23:25:36','jornada20','2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(47,'2016-02-13 23:25:37','2016-02-13 23:25:37','jornada21','2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(48,'2016-02-13 23:25:37','2016-02-13 23:25:37','jornada22','2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(49,'2016-02-13 23:25:37','2016-02-13 23:25:37','jornada23','2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(50,'2016-02-13 23:25:38','2016-02-13 23:25:38','jornada24','2016-02-14 05:25:38','2016-02-14 05:25:38',NULL);
/*!40000 ALTER TABLE `Jornada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Partido`
--

DROP TABLE IF EXISTS `Partido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `logo` varchar(70) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Partido`
--

LOCK TABLES `Partido` WRITE;
/*!40000 ALTER TABLE `Partido` DISABLE KEYS */;
/*!40000 ALTER TABLE `Partido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Votado`
--

DROP TABLE IF EXISTS `Votado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Votado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_elector` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Votado`
--

LOCK TABLES `Votado` WRITE;
/*!40000 ALTER TABLE `Votado` DISABLE KEYS */;
/*!40000 ALTER TABLE `Votado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Voto`
--

DROP TABLE IF EXISTS `Voto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Voto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NULL DEFAULT NULL,
  `Candidato_id` int(11) NOT NULL,
  `Casilla_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Voto_Candidato1_idx` (`Candidato_id`),
  KEY `fk_Voto_Casilla1_idx` (`Casilla_id`),
  CONSTRAINT `fk_Voto_Candidato1` FOREIGN KEY (`Candidato_id`) REFERENCES `Candidato` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Voto_Casilla1` FOREIGN KEY (`Casilla_id`) REFERENCES `Casilla` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Voto`
--

LOCK TABLES `Voto` WRITE;
/*!40000 ALTER TABLE `Voto` DISABLE KEYS */;
/*!40000 ALTER TABLE `Voto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugar`
--

DROP TABLE IF EXISTS `lugar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lugar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `municipio` int(11) DEFAULT NULL,
  `localidad` int(11) DEFAULT NULL,
  `seccion` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugar`
--

LOCK TABLES `lugar` WRITE;
/*!40000 ALTER TABLE `lugar` DISABLE KEYS */;
INSERT INTO `lugar` VALUES (27,3397,927,0,0,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(28,86827,7074,0,1,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(29,9413,307,0,2,'2016-02-14 05:25:30','2016-02-14 05:25:30',NULL),(30,973,545,0,3,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(31,66504,8134,0,4,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(32,145,57110,0,5,'2016-02-14 05:25:31','2016-02-14 05:25:31',NULL),(33,9205,517,0,6,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(34,1077,33,0,7,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(35,38893,20,0,8,'2016-02-14 05:25:32','2016-02-14 05:25:32',NULL),(36,84187,622,0,9,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(37,3936,43446,0,10,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(38,63,8334,0,11,'2016-02-14 05:25:33','2016-02-14 05:25:33',NULL),(39,8594,5742,0,12,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(40,9819,874,0,13,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(41,19,86,0,14,'2016-02-14 05:25:34','2016-02-14 05:25:34',NULL),(42,533,500,0,15,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(43,18324,8699,0,16,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(44,120,793,0,17,'2016-02-14 05:25:35','2016-02-14 05:25:35',NULL),(45,5325,287,0,18,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(46,3255,238,0,19,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(47,8800,51339,0,20,'2016-02-14 05:25:36','2016-02-14 05:25:36',NULL),(48,574,7368,0,21,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(49,177,1538,0,22,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(50,998,748,0,23,'2016-02-14 05:25:37','2016-02-14 05:25:37',NULL),(51,3236,3704,0,24,'2016-02-14 05:25:38','2016-02-14 05:25:38',NULL);
/*!40000 ALTER TABLE `lugar` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-13 17:27:29
