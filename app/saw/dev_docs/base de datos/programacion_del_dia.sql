/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-05-29 00:00:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `programacion_del_dia`
-- ----------------------------
DROP TABLE IF EXISTS `programacion_del_dia`;
CREATE TABLE `programacion_del_dia` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `dispositivoId` int(11) NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime DEFAULT NULL,
  `estado` enum('ENCENDIDO','APAGADO') NOT NULL DEFAULT 'APAGADO',
  `cancelado` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `idEvento` (`idEvento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of programacion_del_dia
-- ----------------------------
INSERT INTO `programacion_del_dia` VALUES ('1', '1', '2012-05-28 11:10:00', '2012-05-28 11:15:00', 'APAGADO', '0');
INSERT INTO `programacion_del_dia` VALUES ('2', '2', '2012-05-28 01:00:00', '2012-05-28 23:59:59', 'ENCENDIDO', '1');
