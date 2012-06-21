/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-05-28 23:59:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `programacion_semanal`
-- ----------------------------
DROP TABLE IF EXISTS `programacion_semanal`;
CREATE TABLE `programacion_semanal` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `dispositivoId` int(11) NOT NULL,
  `dia` enum('LUNES','MARTES','MIERCOLES','JUEVES','VIERNES','SABADO','DOMINGO') NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `cancelado` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of programacion_semanal
-- ----------------------------
INSERT INTO `programacion_semanal` VALUES ('1', '1', 'LUNES', '2012-05-22 11:10:00', '2012-05-22 11:15:00', '0');
INSERT INTO `programacion_semanal` VALUES ('2', '1', 'MARTES', '2012-05-22 11:15:00', '2012-05-22 11:20:00', '0');
INSERT INTO `programacion_semanal` VALUES ('3', '1', 'MIERCOLES', '2012-05-22 11:20:00', '2012-05-22 15:40:00', '0');
INSERT INTO `programacion_semanal` VALUES ('4', '1', 'JUEVES', '2012-05-22 15:40:00', '2012-05-22 17:40:00', '0');
INSERT INTO `programacion_semanal` VALUES ('5', '2', 'LUNES', '2012-05-22 01:00:00', '2012-05-22 23:59:59', '0');
