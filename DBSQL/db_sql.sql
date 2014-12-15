CREATE DATABASE  IF NOT EXISTS `500efuma` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `500efuma`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: 500efuma
-- ------------------------------------------------------
-- Server version	5.6.20

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
-- Table structure for table `fm_admin`
--

DROP TABLE IF EXISTS `fm_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` longtext NOT NULL,
  `account` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `headimg` varchar(500) DEFAULT NULL,
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_admin`
--

LOCK TABLES `fm_admin` WRITE;
/*!40000 ALTER TABLE `fm_admin` DISABLE KEYS */;
INSERT INTO `fm_admin` VALUES (1,'6cc8c26d6ca0356c6890dcd1e8c35387','saki','30330e97a2bde4a811348340a16485de','大魔王','zha_zha@outlook.com','/Upload/headimg/saki.jpg','2014-12-12 10:15:10',NULL);
/*!40000 ALTER TABLE `fm_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_article_list`
--

DROP TABLE IF EXISTS `fm_article_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_article_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `type_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_list`
--

LOCK TABLES `fm_article_list` WRITE;
/*!40000 ALTER TABLE `fm_article_list` DISABLE KEYS */;
INSERT INTO `fm_article_list` VALUES (3,'实现一个大规模的文档存储服务','\n##MaHua是什么?\n一个在线编辑markdown文档的编辑器\n\n向Mac下优秀的markdown编辑器mou致敬\n\n##MaHua有哪些功能？\n\n* 方便的`导入导出`功能\n    *  直接把一个markdown的文本文件拖放到当前这个页面就可以了\n    *  导出为一个html格式的文件，样式一点也不会丢失\n* 编辑和预览`同步滚动`，所见即所得（右上角设置）\n* `VIM快捷键`支持，方便vim党们快速的操作 （右上角设置）\n* 强大的`自定义CSS`功能，方便定制自己的展示\n* 有数量也有质量的`主题`,编辑器和预览区域\n* 完美兼容`Github`的markdown语法\n* 预览区域`代码高亮`\n* 所有选项自动记忆\n\n##有问题反馈\n在使用中有任何问题，欢迎反馈给我，可以用以下联系方式跟我交流\n\n* 邮件(dev.hubo#gmail.com, 把#换成@)\n* QQ: 287759234\n* weibo: [@草依山](http://weibo.com/ihubo)\n* twitter: [@ihubo](http://twitter.com/ihubo)\n\n##捐助开发者\n在兴趣的驱动下,写一个`免费`的东西，有欣喜，也还有汗水，希望你喜欢我的作品，同时也能支持一下。\n当然，有钱捧个钱场（右上角的爱心标志，支持支付宝和PayPal捐助），没钱捧个人场，谢谢各位。\n\n##感激\n感谢以下的项目,排名不分先后\n\n* [mou](http://mouapp.com/) \n* [ace](http://ace.ajax.org/)\n* [jquery](http://jquery.com)\n\n##关于作者\n\n```javascript\n  var ihubo = {\n    nickName  : \"草依山\",\n    site : \"http://jser.me\"\n  }\n```',3,1,'2014-12-15 10:42:40','2014-12-15 10:42:40'),(9,'PostgreSQL vs. MS SQL Server','12',6,1,'2014-12-12 02:37:05',NULL),(10,'超越 JSON: Spearal 序列化协议简介','2',8,1,'2014-12-12 02:37:05',NULL);
/*!40000 ALTER TABLE `fm_article_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_article_type`
--

DROP TABLE IF EXISTS `fm_article_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_article_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `key` varchar(45) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key_UNIQUE` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_article_type`
--

LOCK TABLES `fm_article_type` WRITE;
/*!40000 ALTER TABLE `fm_article_type` DISABLE KEYS */;
INSERT INTO `fm_article_type` VALUES (1,'JAVA','java',1,1,'2014-12-10 02:35:35',NULL),(2,'PHP','php',1,1,'2014-12-10 02:35:53',NULL),(3,'Python','python',1,1,'2014-12-10 02:35:53',NULL),(4,'动漫资讯','acg',1,1,'2014-12-10 02:36:41',NULL),(5,'随笔','essay',1,1,'2014-12-10 02:36:41',NULL),(6,'NodeJS','nodejs',1,1,'2014-12-10 02:36:58',NULL),(7,'Linux','linux',1,1,'2014-12-10 02:37:15',NULL),(8,'C++','cjj',1,1,'2014-12-10 02:38:04',NULL),(9,'Git','git',1,1,'2014-12-10 02:39:07',NULL),(10,'开发杂项','other',1,1,'2014-12-10 02:39:07',NULL);
/*!40000 ALTER TABLE `fm_article_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fm_system`
--

DROP TABLE IF EXISTS `fm_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fm_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `value` varchar(1000) DEFAULT NULL,
  `key` varchar(20) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `ctm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utm` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fm_system`
--

LOCK TABLES `fm_system` WRITE;
/*!40000 ALTER TABLE `fm_system` DISABLE KEYS */;
/*!40000 ALTER TABLE `fm_system` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-15 18:44:44
