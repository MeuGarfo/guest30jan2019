-- 2019-01-25T15:41:57-02:00 - mysql:dbname=guest;host=localhost

-- Table structure for table `messages`

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `message` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `messages`

LOCK TABLES `messages` WRITE;
INSERT INTO `messages` VALUES (1,'oi','2019-01-24 16:17:40','2019-01-24 16:17:40');
INSERT INTO `messages` VALUES (2,'xau','2019-01-24 19:22:33','2019-01-24 19:22:33');
UNLOCK TABLES;

-- Completed on: 2019-01-25T15:41:57-02:00
