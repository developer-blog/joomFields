DROP TABLE IF EXISTS `#__joomfields_fields`;
CREATE TABLE IF NOT EXISTS `#__joomfields_fields` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `label` varchar(50) DEFAULT NULL,
  `options` text,
  PRIMARY KEY (`id`)
);