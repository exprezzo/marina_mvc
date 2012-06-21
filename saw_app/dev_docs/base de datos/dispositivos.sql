/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-05-23 21:10:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dispositivos`
-- ----------------------------
DROP TABLE IF EXISTS `dispositivos`;
CREATE TABLE `dispositivos` (
  `idDispositivo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL COMMENT 'cuando el campo sea nula se muestra la descripcion del tipo de dispositivo concetenado con "_"+idDispositivo',
  `tipo` enum('CERRADURA','CANDADO','AA') DEFAULT 'AA',
  `estado` enum('ON','OFF') NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `eventoCancelado` tinyint(1) DEFAULT NULL,
  UNIQUE KEY `idPrimario` (`idDispositivo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dispositivos
-- ----------------------------
INSERT INTO `dispositivos` VALUES ('1', 'Aula 1', 'AA', 'OFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `dispositivos` VALUES ('2', 'Aula 2', 'AA', 'OFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `dispositivos` VALUES ('3', 'Aula 3', 'AA', 'ON', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `dispositivos` VALUES ('4', 'Aula 4', 'AA', 'OFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');
