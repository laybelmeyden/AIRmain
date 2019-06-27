-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: c9
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `allnews`
--

DROP TABLE IF EXISTS `allnews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `allnews` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sodnew` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `allnews`
--

LOCK TABLES `allnews` WRITE;
/*!40000 ALTER TABLE `allnews` DISABLE KEYS */;
INSERT INTO `allnews` VALUES (1,'0321-03-21','231321321','allnews/August2017/YyGSZ03iuRx7sOD0ALNe.png','2017-08-21 15:29:22','2017-08-21 15:29:34',NULL),(2,'2017-08-08','Смерть всему живому','allnews/August2017/GdodeTzvGQKfK0RmFOjW.png','2017-08-21 15:58:47','2017-08-21 21:39:35','<h4><span style=\"color: #3366ff;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</span></h4>\r\n<h6>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</h6>\r\n<h6>\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</h6>'),(3,'2017-08-22','Откройте новые грани города на фестивале «Душевная Москва»!','allnews/August2017/nNnmPRI5GewfrvAPh933.jpg','2017-08-22 15:36:46','2017-08-22 16:46:15','<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">Фестиваль общественных организаций &laquo;Душевная Москва&raquo; пройдет в парке &laquo;Сокольники&raquo; 9-10 сентября.</p>\r\n<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">Мы приглашаем всех, кто меняет мир к лучшему и создает вокруг себя позитивную атмосферу, принять участие в самом душевном празднике столицы. Путешествие в мир добрых дел откроет тематическая фотовыставка, на которой будут представлены самые яркие кадры жизни московских некоммерческих организаций и горожан, которые всегда готовы прийти на помощь. Для самых активных москвичей разработан увлекательный квест за право получить паспорт гражданина &laquo;Душевной Москвы&raquo;, во время прохождения которого участники узнают все самое интересное о волонтерстве и возможностях участия в мероприятиях нашего города.</p>\r\n<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">Лучшие общественные организации Москвы раскроют старинные секреты гончаров, вместе с вами создадут неповторимые творческие шедевры, покажут, как правильно и быстро овладеть техникой спортивной игры. Творческие коллективы представят свои музыкальные и танцевальные номера.</p>\r\n<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">На выставке бездомных кошек и собак, о которых заботятся московские общественные организации, каждый сможет выбрать себе нового четвероногого друга, который станет верным членом семьи, а также узнать больше о том, как можно помочь бездомным животным.</p>\r\n<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">И, конечно же, большая детская площадка с прыжками на батутах, мастер-классами по созданию кукол, рисованию песком, резьбе по дереву, искусству самообороны и участию в средневековых сражениях. Сюрпризы и подарки, шоу фокусов и мыльных пузырей сделают этот праздник незабываемым для всех посетителей парка, юных москвичей и их родителей.</p>\r\n<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">&laquo;Душевная Москва&raquo; - праздник для дружных семей, теплых компаний и героев нашего времени. Примите участие в самом душевном празднике этой осени!</p>\r\n<p style=\"font-size: 18px; font-family: \'Open Sans Semibold\', sans-serif; color: black;\">Мероприятие организовано Ресурсным центром Комитета общественных связей города Москвы. Подробности на сайте: http: Душевная.Москва</p>'),(4,'1111-11-11','123123','allnews/August2017/b8trHj1wQw0BGEbVSgNH.jpg','2017-08-22 16:53:37','2017-08-22 16:53:37','<p>123123123123123</p>'),(5,'1111-11-11','123123123123','allnews/August2017/7JzxynWo8lvpNQ2Ekqy1.jpg','2017-08-22 16:53:56','2017-08-22 16:53:56','<p>12312312312312312312312</p>');
/*!40000 ALTER TABLE `allnews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blags`
--

DROP TABLE IF EXISTS `blags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img1` text COLLATE utf8_unicode_ci,
  `img2` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blags`
--

LOCK TABLES `blags` WRITE;
/*!40000 ALTER TABLE `blags` DISABLE KEYS */;
INSERT INTO `blags` VALUES (1,'blags/August2017/tkkrPBNtKUq7Vp3d1ZSn.png','blags/August2017/xUIrzTlzo3PuAEhZA65C.png','https://dota2.ru/forum/threads/hs-agro-deka.1108666/','2017-08-23 22:04:16','2017-08-23 22:07:39');
/*!40000 ALTER TABLE `blags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2017-08-21 15:23:59','2017-08-21 15:23:59'),(2,NULL,1,'Category 2','category-2','2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'author_id','text','Author',1,0,1,1,0,1,'',2),(3,1,'category_id','text','Category',1,0,1,1,1,0,'',3),(4,1,'title','text','Title',1,1,1,1,1,1,'',4),(5,1,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',5),(6,1,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(7,1,'image','image','Post Image',0,1,1,1,1,1,'\n{\n    \"resize\": {\n        \"width\": \"1000\",\n        \"height\": \"null\"\n    },\n    \"quality\": \"70%\",\n    \"upsize\": true,\n    \"thumbnails\": [\n        {\n            \"name\": \"medium\",\n            \"scale\": \"50%\"\n        },\n        {\n            \"name\": \"small\",\n            \"scale\": \"25%\"\n        },\n        {\n            \"name\": \"cropped\",\n            \"crop\": {\n                \"width\": \"300\",\n                \"height\": \"250\"\n            }\n        }\n    ]\n}',7),(8,1,'slug','text','slug',1,0,1,1,1,1,'\n{\n    \"slugify\": {\n        \"origin\": \"title\",\n        \"forceUpdate\": true\n    }\n}',8),(9,1,'meta_description','text_area','meta_description',1,0,1,1,1,1,'',9),(10,1,'meta_keywords','text_area','meta_keywords',1,0,1,1,1,1,'',10),(11,1,'status','select_dropdown','status',1,1,1,1,1,1,'\n{\n    \"default\": \"DRAFT\",\n    \"options\": {\n        \"PUBLISHED\": \"published\",\n        \"DRAFT\": \"draft\",\n        \"PENDING\": \"pending\"\n    }\n}',11),(12,1,'created_at','timestamp','created_at',0,1,1,0,0,0,'',12),(13,1,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',13),(14,2,'id','number','id',1,0,0,0,0,0,'',1),(15,2,'author_id','text','author_id',1,0,0,0,0,0,'',2),(16,2,'title','text','title',1,1,1,1,1,1,'',3),(17,2,'excerpt','text_area','excerpt',1,0,1,1,1,1,'',4),(18,2,'body','rich_text_box','body',1,0,1,1,1,1,'',5),(19,2,'slug','text','slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"}}',6),(20,2,'meta_description','text','meta_description',1,0,1,1,1,1,'',7),(21,2,'meta_keywords','text','meta_keywords',1,0,1,1,1,1,'',8),(22,2,'status','select_dropdown','status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(23,2,'created_at','timestamp','created_at',1,1,1,0,0,0,'',10),(24,2,'updated_at','timestamp','updated_at',1,0,0,0,0,0,'',11),(25,2,'image','image','image',0,1,1,1,1,1,'',12),(26,3,'id','number','id',1,0,0,0,0,0,'',1),(27,3,'name','text','name',1,1,1,1,1,1,'',2),(28,3,'email','text','email',1,1,1,1,1,1,'',3),(29,3,'password','password','password',1,0,0,1,1,0,'',4),(30,3,'remember_token','text','remember_token',0,0,0,0,0,0,'',5),(31,3,'created_at','timestamp','created_at',0,1,1,0,0,0,'',6),(32,3,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(33,3,'avatar','image','avatar',0,1,1,1,1,1,'',8),(34,5,'id','number','id',1,0,0,0,0,0,'',1),(35,5,'name','text','name',1,1,1,1,1,1,'',2),(36,5,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(37,5,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(38,4,'id','number','id',1,0,0,0,0,0,'',1),(39,4,'parent_id','select_dropdown','parent_id',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(40,4,'order','text','order',1,1,1,1,1,1,'{\"default\":1}',3),(41,4,'name','text','name',1,1,1,1,1,1,'',4),(42,4,'slug','text','slug',1,1,1,1,1,1,'',5),(43,4,'created_at','timestamp','created_at',0,0,1,0,0,0,'',6),(44,4,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',7),(45,6,'id','number','id',1,0,0,0,0,0,'',1),(46,6,'name','text','Name',1,1,1,1,1,1,'',2),(47,6,'created_at','timestamp','created_at',0,0,0,0,0,0,'',3),(48,6,'updated_at','timestamp','updated_at',0,0,0,0,0,0,'',4),(49,6,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(50,1,'seo_title','text','seo_title',0,1,1,1,1,1,'',14),(51,1,'featured','checkbox','featured',1,1,1,1,1,1,'',15),(52,3,'role_id','text','role_id',1,1,1,1,1,1,'',9),(53,7,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(55,7,'date','date','Date',0,1,1,1,1,1,NULL,2),(56,7,'body','text','Body',0,1,1,1,1,1,NULL,3),(57,7,'image','image','Image',0,1,1,1,1,1,NULL,4),(58,7,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,5),(59,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,6),(60,7,'sodnew','rich_text_box','Sodnew',0,1,1,1,1,1,NULL,7),(85,12,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(86,12,'title','text','Title',0,1,1,1,1,1,NULL,2),(87,12,'minibody','text','Minibody',0,1,1,1,1,1,NULL,3),(88,12,'body','rich_text_box','Body',0,1,1,1,1,1,NULL,4),(89,12,'date','date','Date',0,1,1,1,1,1,NULL,5),(90,12,'image','image','Image',0,1,1,1,1,1,NULL,6),(91,12,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,7),(92,12,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,8),(101,14,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(102,14,'title','text','Title',0,1,1,1,1,1,NULL,2),(103,14,'minibody','text','Minibody',0,1,1,1,1,1,NULL,3),(104,14,'body','rich_text_box','Body',0,1,1,1,1,1,NULL,4),(105,14,'date','date','Date',0,1,1,1,1,1,NULL,5),(106,14,'image','image','Image',0,1,1,1,1,1,NULL,6),(107,14,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,7),(108,14,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,8),(109,14,'zayavka','text','Zayavka',0,1,1,1,1,1,NULL,9),(110,14,'maindata','text','Maindata',0,1,1,1,1,1,NULL,10),(111,14,'formaregi','checkbox','Formaregi',0,1,1,1,1,1,NULL,11),(112,14,'ssilka','text','Ssilka',0,1,1,1,1,1,NULL,12),(113,15,'id','checkbox','Id',1,0,0,0,0,0,NULL,1),(114,15,'img1','image','Img1',0,1,1,1,1,1,NULL,2),(115,15,'img2','image','Img2',0,1,1,1,1,1,NULL,3),(116,15,'link','text','Link',0,1,1,1,1,1,NULL,4),(117,15,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,5),(118,15,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,6);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','','',1,0,'2017-08-21 15:23:58','2017-08-21 15:23:58'),(2,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page','','',1,0,'2017-08-21 15:23:58','2017-08-21 15:23:58'),(3,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','','',1,0,'2017-08-21 15:23:58','2017-08-21 15:23:58'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category','','',1,0,'2017-08-21 15:23:58','2017-08-21 15:23:58'),(5,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu','','',1,0,'2017-08-21 15:23:58','2017-08-21 15:23:58'),(6,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role','','',1,0,'2017-08-21 15:23:58','2017-08-21 15:23:58'),(7,'allnews','allnews','Новости','Новости',NULL,'App\\Allnews',NULL,NULL,1,0,'2017-08-21 15:27:39','2017-08-21 15:27:39'),(12,'allevents','allevents','Мероприятия','Мероприятия',NULL,'App\\Allevent',NULL,NULL,1,0,'2017-08-21 22:48:50','2017-08-21 22:48:50'),(14,'events','events','Мероприятия','Мероприятия',NULL,'App\\Event',NULL,NULL,1,0,'2017-08-21 22:55:10','2017-08-21 22:55:10'),(15,'blags','blags','Благодарности','Благодарности',NULL,'App\\Blag',NULL,NULL,1,0,'2017-08-23 21:57:43','2017-08-23 21:57:43');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci,
  `minibody` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci,
  `date` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `zayavka` text COLLATE utf8_unicode_ci,
  `maindata` text COLLATE utf8_unicode_ci,
  `formaregi` text COLLATE utf8_unicode_ci,
  `ssilka` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (7,'ТитлеТитлеТитлеТитлеТитлеТитле','МинититлеМинититлеМинититлеМинититлеМинититлеМинититлеМинититле','<p>БодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБодиБоди</p>','2001-11-11','events/August2017/7QqW7IzZERo8iTLQ5rDD.png','2017-08-22 02:06:35','2017-08-22 02:21:54','Принимаются до 41 октября баббвпы','12-13 сентября','0','https://vk.com/im?sel=33154106');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marks`
--

DROP TABLE IF EXISTS `marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nam` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marks`
--

LOCK TABLES `marks` WRITE;
/*!40000 ALTER TABLE `marks` DISABLE KEYS */;
INSERT INTO `marks` VALUES (1,'KYOCERA','marks/July2017/XaUJ3JP4XIoQCQKEheYg.png','2017-07-20 16:53:00','2017-07-21 18:32:12'),(2,'KONICA MINOLTA','marks/July2017/K9D6bCUmgW0VwjARKA5D.png','2017-07-20 16:56:00','2017-07-22 14:50:36'),(3,'OKI','marks/July2017/ylI3rFoVDF9NLOth4D1E.png','2017-07-20 16:57:34','2017-07-20 16:57:34'),(4,'HP','marks/July2017/crGPjI8OWL557pzCCgQU.png','2017-07-20 16:57:48','2017-07-20 16:57:48'),(5,'XEROX','marks/July2017/rBKoYE8IXZPsLWRdpULN.png','2017-07-22 14:37:00','2017-07-22 14:37:47'),(6,'Canon','marks/July2017/zwl4YgpBy3h21A18hrBT.png','2017-07-22 14:38:00','2017-07-22 14:39:00'),(7,'Brother','marks/July2017/1in9RxcmO0sOKNaMA9Zo.png','2017-07-22 14:39:28','2017-07-22 14:39:28'),(8,'Samsung','marks/July2017/YrHU09ZgFAKXtz9gm4Ms.png','2017-07-22 14:40:10','2017-07-22 14:40:10'),(9,'Ricoh','marks/July2017/aMjdEvJ4HHY7k2EudiyU.png','2017-07-22 14:40:49','2017-07-22 14:40:49'),(10,'Sharp','marks/July2017/DlhkGBTn5cOkBPf75Hgc.png','2017-07-22 14:41:16','2017-07-22 14:41:16'),(11,'Panasonic','marks/July2017/b9Qt8nUCGeHCALIkbTk1.png','2017-07-22 14:41:33','2017-07-22 14:41:33'),(12,'Philips','marks/July2017/o0ueuLn8QVugR6MBxdQl.png','2017-07-22 14:42:02','2017-07-22 14:42:02'),(13,'Epson','marks/July2017/HfveLYg7ABEkG0rhcsOP.png','2017-07-22 14:42:00','2017-07-22 14:44:27'),(14,'Lexmark','marks/July2017/NOalOVuj0PZWzCZP08HX.png','2017-07-22 14:44:58','2017-07-22 14:44:58'),(15,'Pantum','marks/July2017/L0CL1ZGlCLqwT42Vw6VP.png','2017-07-22 14:45:16','2017-07-22 14:45:16'),(16,'Toshiba','marks/July2017/iOZxKv7pLbcsjwkwjCFd.png','2017-07-22 14:45:37','2017-07-22 14:45:37'),(17,'Fujitsu','marks/July2017/rYeFAq7MI3UzWXflc13T.png','2017-07-22 14:45:51','2017-07-22 14:45:51'),(18,'Gestetner','marks/July2017/xLxdlVGWQQGLHg7ueyPI.png','2017-07-22 14:46:00','2017-07-22 14:46:17'),(19,'Sindoh','marks/July2017/rMqPrvnKXdWiUFMB13Z0.png','2017-07-22 14:46:37','2017-07-22 14:46:37');
/*!40000 ALTER TABLE `marks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','/admin','_self','voyager-boat',NULL,NULL,1,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL,NULL),(2,1,'Media','/admin/media','_self','voyager-images',NULL,NULL,4,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(3,1,'Posts','/admin/posts','_self','voyager-news',NULL,NULL,5,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(4,1,'Users','/admin/users','_self','voyager-person',NULL,NULL,3,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL,NULL),(5,1,'Categories','/admin/categories','_self','voyager-categories',NULL,NULL,7,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(6,1,'Pages','/admin/pages','_self','voyager-file-text',NULL,NULL,6,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(7,1,'Roles','/admin/roles','_self','voyager-lock',NULL,NULL,2,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL,NULL),(8,1,'Tools','','_self','voyager-tools',NULL,NULL,8,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(9,1,'Menu Builder','/admin/menus','_self','voyager-list',NULL,8,1,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(10,1,'Database','/admin/database','_self','voyager-data',NULL,8,2,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(11,1,'Settings','/admin/settings','_self','voyager-settings',NULL,NULL,9,'2017-08-21 15:23:59','2017-08-21 22:49:00',NULL,NULL),(12,1,'Новости','/admin/allnews','_self','voyager-news','#000000',NULL,10,'2017-08-21 15:27:56','2017-08-21 22:49:00',NULL,''),(13,1,'Мероприятия','/admin/events','_self',NULL,'#000000',NULL,11,'2017-08-21 22:30:17','2017-08-21 22:55:31',NULL,''),(14,1,'Благодарности','/admin/blags','_self','voyager-medal-rank-star','#000000',NULL,12,'2017-08-23 21:58:38','2017-08-23 21:58:38',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (81,'2014_10_12_000000_create_users_table',1),(82,'2014_10_12_100000_create_password_resets_table',1),(83,'2016_01_01_000000_add_voyager_user_fields',1),(84,'2016_01_01_000000_create_data_types_table',1),(85,'2016_01_01_000000_create_pages_table',1),(86,'2016_01_01_000000_create_posts_table',1),(87,'2016_02_15_204651_create_categories_table',1),(88,'2016_05_19_173453_create_menu_table',1),(89,'2016_10_21_190000_create_roles_table',1),(90,'2016_10_21_190000_create_settings_table',1),(91,'2016_11_30_135954_create_permission_table',1),(92,'2016_11_30_141208_create_permission_role_table',1),(93,'2016_12_26_201236_data_types__add__server_side',1),(94,'2017_01_13_000000_add_route_to_menu_items_table',1),(95,'2017_01_14_005015_create_translations_table',1),(96,'2017_01_15_000000_add_permission_group_id_to_permissions_table',1),(97,'2017_01_15_000000_create_permission_groups_table',1),(98,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(99,'2017_03_06_000000_add_controller_to_data_types_table',1),(100,'2017_04_21_000000_add_order_to_data_rows_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/AAgCCnqHfLlRub9syUdw.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_groups`
--

DROP TABLE IF EXISTS `permission_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission_groups_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_groups`
--

LOCK TABLES `permission_groups` WRITE;
/*!40000 ALTER TABLE `permission_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(55,1),(56,1),(57,1),(58,1),(59,1),(65,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(2,'browse_database',NULL,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(3,'browse_media',NULL,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(4,'browse_settings',NULL,'2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(5,'browse_menus','menus','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(6,'read_menus','menus','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(7,'edit_menus','menus','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(8,'add_menus','menus','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(9,'delete_menus','menus','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(10,'browse_pages','pages','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(11,'read_pages','pages','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(12,'edit_pages','pages','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(13,'add_pages','pages','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(14,'delete_pages','pages','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(15,'browse_roles','roles','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(16,'read_roles','roles','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(17,'edit_roles','roles','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(18,'add_roles','roles','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(19,'delete_roles','roles','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(20,'browse_users','users','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(21,'read_users','users','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(22,'edit_users','users','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(23,'add_users','users','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(24,'delete_users','users','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(25,'browse_posts','posts','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(26,'read_posts','posts','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(27,'edit_posts','posts','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(28,'add_posts','posts','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(29,'delete_posts','posts','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(30,'browse_categories','categories','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(31,'read_categories','categories','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(32,'edit_categories','categories','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(33,'add_categories','categories','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(34,'delete_categories','categories','2017-08-21 15:23:59','2017-08-21 15:23:59',NULL),(35,'browse_allnews','allnews','2017-08-21 15:27:39','2017-08-21 15:27:39',NULL),(36,'read_allnews','allnews','2017-08-21 15:27:39','2017-08-21 15:27:39',NULL),(37,'edit_allnews','allnews','2017-08-21 15:27:39','2017-08-21 15:27:39',NULL),(38,'add_allnews','allnews','2017-08-21 15:27:39','2017-08-21 15:27:39',NULL),(39,'delete_allnews','allnews','2017-08-21 15:27:39','2017-08-21 15:27:39',NULL),(55,'browse_allevents','allevents','2017-08-21 22:48:50','2017-08-21 22:48:50',NULL),(56,'read_allevents','allevents','2017-08-21 22:48:50','2017-08-21 22:48:50',NULL),(57,'edit_allevents','allevents','2017-08-21 22:48:50','2017-08-21 22:48:50',NULL),(58,'add_allevents','allevents','2017-08-21 22:48:50','2017-08-21 22:48:50',NULL),(59,'delete_allevents','allevents','2017-08-21 22:48:50','2017-08-21 22:48:50',NULL),(65,'browse_events','events','2017-08-21 22:55:10','2017-08-21 22:55:10',NULL),(66,'read_events','events','2017-08-21 22:55:10','2017-08-21 22:55:10',NULL),(67,'edit_events','events','2017-08-21 22:55:10','2017-08-21 22:55:10',NULL),(68,'add_events','events','2017-08-21 22:55:10','2017-08-21 22:55:10',NULL),(69,'delete_events','events','2017-08-21 22:55:10','2017-08-21 22:55:10',NULL),(70,'browse_blags','blags','2017-08-23 21:57:43','2017-08-23 21:57:43',NULL),(71,'read_blags','blags','2017-08-23 21:57:43','2017-08-23 21:57:43',NULL),(72,'edit_blags','blags','2017-08-23 21:57:43','2017-08-23 21:57:43',NULL),(73,'add_blags','blags','2017-08-23 21:57:43','2017-08-23 21:57:43',NULL),(74,'delete_blags','blags','2017-08-23 21:57:43','2017-08-23 21:57:43',NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/nlje9NZQ7bTMYOUG4lF1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-08-21 15:23:59','2017-08-21 15:23:59'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/7uelXHi85YOfZKsoS6Tq.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-08-21 15:23:59','2017-08-21 15:23:59'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/9txUSY6wb7LTBSbDPrD9.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-08-21 15:23:59','2017-08-21 15:23:59'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/yuk1fBwmKKZdY2qR1ZKM.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodazs`
--

DROP TABLE IF EXISTS `prodazs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodazs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model1` text COLLATE utf8_unicode_ci,
  `model2` text COLLATE utf8_unicode_ci,
  `resours` text COLLATE utf8_unicode_ci,
  `var` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `option` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipprint` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodazs`
--

LOCK TABLES `prodazs` WRITE;
/*!40000 ALTER TABLE `prodazs` DISABLE KEYS */;
INSERT INTO `prodazs` VALUES (3,'ESd','pO','23','123','32','HP','2017-07-21 10:43:06','2017-08-03 21:59:47','струйный'),(4,'Foo','Baar','213','123','32','HP','2017-07-21 10:43:22','2017-08-04 20:49:01','лазерный'),(5,'123','123','32','asd','asd','HP','2017-08-04 20:51:55','2017-08-04 20:53:44','струйный');
/*!40000 ALTER TABLE `prodazs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodmarks`
--

DROP TABLE IF EXISTS `prodmarks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodmarks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci,
  `image` text COLLATE utf8_unicode_ci,
  `option` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodmarks`
--

LOCK TABLES `prodmarks` WRITE;
/*!40000 ALTER TABLE `prodmarks` DISABLE KEYS */;
INSERT INTO `prodmarks` VALUES (12,'Ricoh','prodmarks/July2017/zO5aZooDMqoPCUufQ8SG.png','2','2017-07-23 16:22:38','2017-07-23 16:22:38'),(13,'Lexmark','prodmarks/July2017/6EdcdV0J2JxzgpioB5yT.png','2','2017-07-23 16:22:54','2017-07-23 16:22:54'),(14,'Xerox','prodmarks/July2017/UCbsEhjWfX5vrQATBogy.png','2','2017-07-23 16:23:14','2017-07-23 16:23:14'),(15,'Samsung','prodmarks/July2017/sHWtNZgp2KiItHj1Kkc0.png','2','2017-07-23 16:23:31','2017-07-23 16:23:31'),(16,'Brother','prodmarks/July2017/0dxY67snaLp6af5R8A1R.png','2','2017-07-23 16:23:47','2017-07-23 16:23:47'),(17,'Canon','prodmarks/July2017/BYIiOST01bDX85AjfeNJ.png','2','2017-07-23 16:23:58','2017-07-23 16:23:58'),(18,'HP','prodmarks/July2017/sQqIC1yAXg4azvWWYYrD.png','2','2017-07-23 16:24:12','2017-07-23 16:24:12'),(19,'Epson','prodmarks/July2017/KIRgphnJsPluZGZYR0F5.png','2','2017-07-23 16:24:25','2017-07-23 16:24:25'),(20,'OKI','prodmarks/July2017/vemyICc8xXra6FiAeOcB.png','1','2017-07-23 16:25:08','2017-07-23 16:25:08'),(21,'Epson','prodmarks/July2017/mvP2GROxOfCzXPhYBUft.png','1','2017-07-23 16:25:43','2017-07-23 16:25:43'),(22,'Panasonic','prodmarks/July2017/UI3rwTKZEHYR10PGp6xX.png','1','2017-07-23 16:26:09','2017-07-23 16:26:09'),(23,'Kyocera','prodmarks/July2017/H22ani0Dpk0XJGSVNEMW.png','1','2017-07-23 16:26:28','2017-07-23 16:26:28'),(24,'Ricoh','prodmarks/July2017/pGd3LqwjBfWJiU20t9O6.png','1','2017-07-23 16:26:43','2017-07-23 16:26:43'),(25,'Brother','prodmarks/July2017/RGO41p4twa5qZxhSeOBy.png','1','2017-07-23 16:26:58','2017-07-23 16:26:58'),(26,'Canon','prodmarks/July2017/SFBs4w0AZqCnpOYpWcN8.png','1','2017-07-23 16:27:09','2017-07-23 16:27:09'),(27,'Xerox','prodmarks/July2017/wN9KByfHUCEU4a3lpGPd.png','1','2017-07-23 16:27:21','2017-07-23 16:27:21'),(28,'Samsung','prodmarks/July2017/iuH20kgYj2NiYBwDNpyU.png','1','2017-07-23 16:27:33','2017-07-23 16:27:33'),(29,'HP','prodmarks/July2017/NNARYienRrqqFpH4PCxv.png','1','2017-07-23 16:27:43','2017-07-23 16:27:43');
/*!40000 ALTER TABLE `prodmarks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2017-08-21 15:23:59','2017-08-21 15:23:59'),(2,'user','Normal User','2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'title','Site Title','Site Title','','text',1),(2,'description','Site Description','Site Description','','text',2),(3,'logo','Site Logo','','','image',3),(4,'admin_bg_image','Admin Background Image','','','image',9),(5,'admin_title','Admin Title','Voyager','','text',4),(6,'admin_description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',5),(7,'admin_loader','Admin Loader','','','image',6),(8,'admin_icon_image','Admin Icon Image','','','image',7),(9,'google_analytics_client_id','Google Analytics Client ID','','','text',9);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci,
  `body` text COLLATE utf8_unicode_ci,
  `option` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stats`
--

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` VALUES (39,'Заправка картриджей','<p>231цвуцйуцйуцйуцйуцйыфввыф</p>','1','2017-07-21 13:50:18','2017-07-24 20:44:49'),(41,'Восстановление картриджей','<p>фывывф</p>','2','2017-07-21 14:08:16','2017-07-21 14:15:08'),(42,'Продажа новых картриджей',NULL,'3','2017-07-21 14:15:48','2017-07-21 14:15:48'),(43,'Заправка цветных картриджей',NULL,'4','2017-07-21 14:16:45','2017-07-21 14:16:45'),(44,'Выбор принтера',NULL,'5','2017-07-21 14:18:27','2017-07-21 14:18:27'),(45,'Дефекты печати',NULL,'6','2017-07-21 14:18:55','2017-07-21 14:18:55'),(46,'Бледная печать – причина',NULL,'7','2017-07-21 14:19:13','2017-07-21 14:19:13'),(47,'Бесплатные пакеты',NULL,'8','2017-07-21 14:19:30','2017-07-21 14:19:30'),(48,'Теория',NULL,'9','2017-07-21 14:19:50','2017-07-21 14:19:50'),(49,'Ответственность',NULL,'10','2017-07-21 14:20:10','2017-07-21 14:20:10'),(50,'География выезда',NULL,'11','2017-07-21 14:20:25','2017-07-21 14:20:25'),(51,'Контакты',NULL,'12','2017-07-21 14:20:45','2017-07-21 14:20:45'),(52,'FAQ&RAQ',NULL,'13','2017-07-21 14:21:06','2017-07-21 14:21:06'),(53,'Когда выгодно?',NULL,'14','2017-07-21 14:21:21','2017-07-21 14:21:21'),(54,'Замена фотовалов',NULL,'15','2017-07-21 14:21:37','2017-07-21 14:21:37'),(55,'Ролики заряда',NULL,'16','2017-07-21 14:21:49','2017-07-21 14:21:49'),(56,'Магнитные валы',NULL,'17','2017-07-21 14:22:08','2017-07-21 14:22:08'),(57,'Гарантия','<blockquote style=\"border-color: black;\">\r\n<p>выфвыфвыфвыфвыф</p>\r\n</blockquote>','18','2017-07-21 14:22:22','2017-07-24 20:48:58'),(61,'Юридическая информация','<p>Юридическая информация</p>','19','2017-07-21 14:48:57','2017-07-21 14:48:57'),(62,'Новая статья 1','<p>ыфвфыв</p>','20','2017-07-21 14:49:23','2017-07-21 14:49:23'),(63,'Новая статья 2','<p>ыаыва</p>','20','2017-07-21 14:49:36','2017-07-21 14:49:36');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',1,'pt','Post','2017-08-21 15:23:59','2017-08-21 15:23:59'),(2,'data_types','display_name_singular',2,'pt','Página','2017-08-21 15:23:59','2017-08-21 15:23:59'),(3,'data_types','display_name_singular',3,'pt','Utilizador','2017-08-21 15:23:59','2017-08-21 15:23:59'),(4,'data_types','display_name_singular',4,'pt','Categoria','2017-08-21 15:23:59','2017-08-21 15:23:59'),(5,'data_types','display_name_singular',5,'pt','Menu','2017-08-21 15:23:59','2017-08-21 15:23:59'),(6,'data_types','display_name_singular',6,'pt','Função','2017-08-21 15:23:59','2017-08-21 15:23:59'),(7,'data_types','display_name_plural',1,'pt','Posts','2017-08-21 15:23:59','2017-08-21 15:23:59'),(8,'data_types','display_name_plural',2,'pt','Páginas','2017-08-21 15:23:59','2017-08-21 15:23:59'),(9,'data_types','display_name_plural',3,'pt','Utilizadores','2017-08-21 15:23:59','2017-08-21 15:23:59'),(10,'data_types','display_name_plural',4,'pt','Categorias','2017-08-21 15:23:59','2017-08-21 15:23:59'),(11,'data_types','display_name_plural',5,'pt','Menus','2017-08-21 15:23:59','2017-08-21 15:23:59'),(12,'data_types','display_name_plural',6,'pt','Funções','2017-08-21 15:23:59','2017-08-21 15:23:59'),(13,'pages','title',1,'pt','Olá Mundo','2017-08-21 15:23:59','2017-08-21 15:23:59'),(14,'pages','slug',1,'pt','ola-mundo','2017-08-21 15:23:59','2017-08-21 15:23:59'),(15,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2017-08-21 15:23:59','2017-08-21 15:23:59'),(16,'menu_items','title',1,'pt','Painel de Controle','2017-08-21 15:23:59','2017-08-21 15:23:59'),(17,'menu_items','title',2,'pt','Media','2017-08-21 15:23:59','2017-08-21 15:23:59'),(18,'menu_items','title',3,'pt','Publicações','2017-08-21 15:23:59','2017-08-21 15:23:59'),(19,'menu_items','title',4,'pt','Utilizadores','2017-08-21 15:23:59','2017-08-21 15:23:59'),(20,'menu_items','title',5,'pt','Categorias','2017-08-21 15:23:59','2017-08-21 15:23:59'),(21,'menu_items','title',6,'pt','Páginas','2017-08-21 15:23:59','2017-08-21 15:23:59'),(22,'menu_items','title',7,'pt','Funções','2017-08-21 15:23:59','2017-08-21 15:23:59'),(23,'menu_items','title',8,'pt','Ferramentas','2017-08-21 15:23:59','2017-08-21 15:23:59'),(24,'menu_items','title',9,'pt','Menus','2017-08-21 15:23:59','2017-08-21 15:23:59'),(25,'menu_items','title',10,'pt','Base de dados','2017-08-21 15:23:59','2017-08-21 15:23:59'),(26,'menu_items','title',11,'pt','Configurações','2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@admin.com','users/default.png','$2y$10$QN/Pc.L65aAB/F.OOnJR1eL0sTQZZ5ChIohL6y394IVSt7W7ndoy6','kvDYf067bW4RtxGkBnvl6xXBpmPxo15BuYLQpVnP0qtS6mvv4MIC1gtuHeSm','2017-08-21 15:23:59','2017-08-21 15:23:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zapravkas`
--

DROP TABLE IF EXISTS `zapravkas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zapravkas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model1` text COLLATE utf8_unicode_ci,
  `model2` text COLLATE utf8_unicode_ci,
  `resourse` text COLLATE utf8_unicode_ci,
  `price` text COLLATE utf8_unicode_ci,
  `chip` text COLLATE utf8_unicode_ci,
  `price2` text COLLATE utf8_unicode_ci,
  `option` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zapravkas`
--

LOCK TABLES `zapravkas` WRITE;
/*!40000 ALTER TABLE `zapravkas` DISABLE KEYS */;
INSERT INTO `zapravkas` VALUES (1,'123','123','32','32','32','23','HP','2017-07-20 17:49:41','2017-07-20 17:49:41'),(2,'hp','Asd','34','23','12','5','sad','2017-07-20 21:25:55','2017-08-04 20:12:12'),(3,'Foo','Bar ggg ooo ttt','foo','gffgfsD','fooo','vaaa','HP','2017-08-03 21:32:28','2017-08-04 02:55:52');
/*!40000 ALTER TABLE `zapravkas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-23 22:08:27
