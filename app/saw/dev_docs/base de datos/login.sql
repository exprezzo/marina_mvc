/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-05-28 20:59:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `login`
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `login` varchar(16) NOT NULL DEFAULT '',
  `pass` varchar(16) DEFAULT NULL,
  `role` enum('CONTROLADOR','SUPER') DEFAULT 'CONTROLADOR',
  `nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('admin@saw.com', '1234', 'SUPER', 'SUPER');
