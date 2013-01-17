

-- ----------------------------
-- Table structure for `char_proposal`
-- ----------------------------
DROP TABLE IF EXISTS `char_proposal`;
CREATE TABLE `char_proposal` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `p_char` varchar(65) NOT NULL DEFAULT '',
  `s_char` varchar(65) NOT NULL DEFAULT '',
  `p_id` int(100) DEFAULT NULL,
  `s_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

