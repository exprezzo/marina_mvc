/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-05-23 21:10:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `config`
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `idConfig` tinyint(11) NOT NULL AUTO_INCREMENT,
  `tiempo_entre_peticiones` int(11) DEFAULT NULL,
  `fecha_actual` date DEFAULT NULL,
  PRIMARY KEY (`idConfig`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('1', '2000', '2012-05-21');
