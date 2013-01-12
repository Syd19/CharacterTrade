/*
Navicat MySQL Data Transfer

Source Server         : Project57
Source Server Version : 50528
Source Host           : 78.46.97.186:3306
Source Database       : characters

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-01-12 12:09:57
*/

SET FOREIGN_KEY_CHECKS=0;

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

-- ----------------------------
-- Records of submited_chars
-- ----------------------------
INSERT INTO `submited_chars` VALUES ('49', 'Limao', '80', '', 'Pala', '', '0');
INSERT INTO `submited_chars` VALUES ('50', 'Welly', '80', '', 'Warrior', '', '0');
INSERT INTO `submited_chars` VALUES ('51', 'Limao', '80', '', 'Pala', '', '0');
INSERT INTO `submited_chars` VALUES ('52', 'Nivia', '80', '', 'Druid', 'd', '15');
