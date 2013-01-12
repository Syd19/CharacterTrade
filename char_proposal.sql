/*
Navicat MySQL Data Transfer

Source Server         : Project57
Source Server Version : 50528
Source Host           : 78.46.97.186:3306
Source Database       : characters

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-01-12 12:10:08
*/

SET FOREIGN_KEY_CHECKS=0;

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

-- ----------------------------
-- Records of char_proposal
-- ----------------------------
INSERT INTO `char_proposal` VALUES ('6', 'Dadaa', 'Dadaz', '15', '31');
