/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : facturacion_expresso

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-06-28 23:22:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `idioma_objeto`
-- ----------------------------
DROP TABLE IF EXISTS `idioma_objeto`;
CREATE TABLE `idioma_objeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `fk_objeto` int(11) DEFAULT NULL,
  `fk_idioma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of idioma_objeto
-- ----------------------------
INSERT INTO `idioma_objeto` VALUES ('1', 'UNO', '1', '1');
INSERT INTO `idioma_objeto` VALUES ('2', 'ONE', '1', '2');
INSERT INTO `idioma_objeto` VALUES ('3', 'DOS', '2', '1');
INSERT INTO `idioma_objeto` VALUES ('4', 'TWO', '2', '2');
INSERT INTO `idioma_objeto` VALUES ('5', 'TRES', '3', '1');
INSERT INTO `idioma_objeto` VALUES ('6', 'THREE', '3', '2');
INSERT INTO `idioma_objeto` VALUES ('7', 'CUATRO', '4', '1');
INSERT INTO `idioma_objeto` VALUES ('8', 'FOUR', '4', '2');
INSERT INTO `idioma_objeto` VALUES ('9', 'CINCO', '5', '1');
INSERT INTO `idioma_objeto` VALUES ('10', 'FIVE', '5', '2');
INSERT INTO `idioma_objeto` VALUES ('11', 'SEIS', '6', '1');
INSERT INTO `idioma_objeto` VALUES ('12', 'SIX', '6', '2');
