
-- ----------------------------
-- Table structure for `submited_chars`
-- ----------------------------
DROP TABLE IF EXISTS `submited_chars`;
CREATE TABLE `submited_chars` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL DEFAULT '',
  `level` int(4) DEFAULT NULL,
  `armory` varchar(200) NOT NULL DEFAULT '',
  `class` varchar(65) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `s_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

