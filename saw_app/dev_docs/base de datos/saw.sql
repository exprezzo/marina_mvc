/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : saw

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-06-20 21:04:52
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
INSERT INTO `config` VALUES ('1', '2000', '2012-06-20');

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
INSERT INTO `dispositivos` VALUES ('2', 'Aula 2', 'AA', 'OFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');
INSERT INTO `dispositivos` VALUES ('3', 'Aula 3', 'AA', 'OFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');
INSERT INTO `dispositivos` VALUES ('4', 'Aula 4', 'AA', 'OFF', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0');

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

-- ----------------------------
-- Table structure for `old_horarios`
-- ----------------------------
DROP TABLE IF EXISTS `old_horarios`;
CREATE TABLE `old_horarios` (
  `id` double NOT NULL AUTO_INCREMENT,
  `aula` int(1) NOT NULL,
  `id_dia` double NOT NULL,
  `id_horainicio` double NOT NULL,
  `id_horafinal` double NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `activo` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of old_horarios
-- ----------------------------
INSERT INTO `old_horarios` VALUES ('68', '1', '6', '23', '24', '1', '1');
INSERT INTO `old_horarios` VALUES ('7', '1', '3', '1', '4', '1', '1');
INSERT INTO `old_horarios` VALUES ('65', '1', '6', '21', '22', '1', '1');
INSERT INTO `old_horarios` VALUES ('64', '1', '6', '20', '21', '1', '1');
INSERT INTO `old_horarios` VALUES ('63', '1', '6', '19', '20', '1', '1');
INSERT INTO `old_horarios` VALUES ('62', '1', '6', '18', '19', '1', '1');
INSERT INTO `old_horarios` VALUES ('61', '1', '5', '8', '9', '1', '1');
INSERT INTO `old_horarios` VALUES ('80', '1', '4', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('79', '1', '2', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('17', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('18', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('19', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('20', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('21', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('22', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('23', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('24', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('25', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('26', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('27', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('28', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('72', '2', '1', '5', '6', '1', '1');
INSERT INTO `old_horarios` VALUES ('30', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('31', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('32', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('33', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('34', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('35', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('36', '1', '2', '1', '1', '1', '1');
INSERT INTO `old_horarios` VALUES ('71', '1', '1', '5', '7', '1', '1');
INSERT INTO `old_horarios` VALUES ('66', '1', '6', '22', '23', '1', '1');
INSERT INTO `old_horarios` VALUES ('59', '1', '1', '5', '6', '1', '1');
INSERT INTO `old_horarios` VALUES ('58', '2', '1', '2', '3', '1', '1');
INSERT INTO `old_horarios` VALUES ('70', '1', '1', '4', '8', '1', '1');
INSERT INTO `old_horarios` VALUES ('78', '1', '2', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('73', '2', '1', '6', '7', '1', '1');
INSERT INTO `old_horarios` VALUES ('74', '2', '3', '1', '2', '1', '1');
INSERT INTO `old_horarios` VALUES ('75', '2', '2', '3', '4', '1', '1');
INSERT INTO `old_horarios` VALUES ('76', '2', '5', '6', '7', '1', '1');
INSERT INTO `old_horarios` VALUES ('81', '1', '4', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('82', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('83', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('84', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('85', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('86', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('87', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('88', '1', '1', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('89', '1', '3', '1', '2', '1', '0');
INSERT INTO `old_horarios` VALUES ('90', '1', '1', '1', '2', '1', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of programacion_del_dia
-- ----------------------------
INSERT INTO `programacion_del_dia` VALUES ('1', '1', '2012-06-20 11:20:00', '2012-06-20 15:40:00', 'APAGADO', '0');
INSERT INTO `programacion_del_dia` VALUES ('2', '1', '2012-06-20 02:45:00', '2012-06-20 03:00:00', 'APAGADO', '0');
INSERT INTO `programacion_del_dia` VALUES ('3', '1', '2012-06-20 00:00:00', '2012-06-20 08:18:00', 'APAGADO', '0');
INSERT INTO `programacion_del_dia` VALUES ('4', '1', '2012-06-20 20:20:00', '2012-06-20 20:54:00', 'APAGADO', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of programacion_semanal
-- ----------------------------
INSERT INTO `programacion_semanal` VALUES ('2', '1', 'MARTES', '2012-05-22 11:15:00', '2012-05-22 11:20:00', '0');
INSERT INTO `programacion_semanal` VALUES ('3', '1', 'MIERCOLES', '2012-05-22 11:20:00', '2012-05-22 15:40:00', '0');
INSERT INTO `programacion_semanal` VALUES ('4', '1', 'JUEVES', '2012-05-22 15:40:00', '2012-05-22 17:40:00', '0');
INSERT INTO `programacion_semanal` VALUES ('5', '2', 'VIERNES', '2012-05-22 01:00:00', '2012-05-22 23:59:59', '0');
INSERT INTO `programacion_semanal` VALUES ('6', '1', 'SABADO', '2012-05-22 01:00:00', '2012-05-22 23:59:59', '0');
INSERT INTO `programacion_semanal` VALUES ('7', '1', 'DOMINGO', '2012-06-03 01:00:00', '2012-06-03 03:30:00', '0');
INSERT INTO `programacion_semanal` VALUES ('11', '1', 'DOMINGO', '2012-06-04 03:30:00', '2012-06-04 04:30:00', '0');
INSERT INTO `programacion_semanal` VALUES ('12', '1', 'DOMINGO', '2012-06-22 00:15:00', '2012-06-22 03:30:00', '0');
INSERT INTO `programacion_semanal` VALUES ('13', '1', 'DOMINGO', '2012-06-03 00:30:00', '2012-06-03 03:15:00', '0');
INSERT INTO `programacion_semanal` VALUES ('14', '1', 'SABADO', '2012-06-03 00:15:00', '2012-06-03 03:30:00', '0');
INSERT INTO `programacion_semanal` VALUES ('15', '1', 'JUEVES', '2012-06-03 02:00:00', '2012-06-03 03:15:00', '0');
INSERT INTO `programacion_semanal` VALUES ('16', '1', 'DOMINGO', '2012-06-04 00:15:00', '2012-06-04 00:45:00', '1');
INSERT INTO `programacion_semanal` VALUES ('17', '1', 'DOMINGO', '2012-06-04 00:00:00', '2012-06-04 01:45:00', '0');
INSERT INTO `programacion_semanal` VALUES ('18', '1', 'DOMINGO', '2012-06-04 00:00:00', '2012-06-04 01:45:00', '0');
INSERT INTO `programacion_semanal` VALUES ('19', '1', 'DOMINGO', '2012-06-04 00:15:00', '2012-06-04 22:00:00', '0');
INSERT INTO `programacion_semanal` VALUES ('20', '1', 'DOMINGO', '2012-06-04 00:00:00', '2012-06-04 23:45:00', '0');
INSERT INTO `programacion_semanal` VALUES ('21', '1', 'VIERNES', '2012-06-04 00:00:00', '2012-06-04 02:45:00', '0');
INSERT INTO `programacion_semanal` VALUES ('22', '0', '', '2012-06-04 10:30:00', '2012-06-04 12:00:00', '0');
INSERT INTO `programacion_semanal` VALUES ('23', '0', '', '2012-06-04 10:30:00', '2012-06-04 12:00:00', '0');
INSERT INTO `programacion_semanal` VALUES ('24', '0', '', '2012-06-04 10:30:00', '2012-06-04 12:00:00', '0');
INSERT INTO `programacion_semanal` VALUES ('25', '2', 'DOMINGO', '2012-06-04 00:30:00', '2012-06-04 02:15:00', '0');
INSERT INTO `programacion_semanal` VALUES ('26', '1', 'JUEVES', '2012-06-04 03:00:00', '2012-06-04 03:15:00', '0');
INSERT INTO `programacion_semanal` VALUES ('28', '1', 'LUNES', '2012-06-04 00:00:00', '2012-06-04 01:00:00', '0');
INSERT INTO `programacion_semanal` VALUES ('31', '1', 'LUNES', '2012-06-04 00:45:00', '2012-06-04 01:15:00', '0');
INSERT INTO `programacion_semanal` VALUES ('33', '1', 'MIERCOLES', '2012-06-21 02:45:00', '2012-06-21 03:00:00', '0');
INSERT INTO `programacion_semanal` VALUES ('34', '1', 'MIERCOLES', '2012-06-21 00:00:00', '2012-06-21 08:18:00', '0');
INSERT INTO `programacion_semanal` VALUES ('35', '1', 'MIERCOLES', '2012-06-21 20:20:00', '2012-06-21 20:54:00', '0');
