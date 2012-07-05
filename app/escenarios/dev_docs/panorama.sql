/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : facturacion_expresso

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-07-02 21:45:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cms_menus`
-- ----------------------------
DROP TABLE IF EXISTS `cms_menus`;
CREATE TABLE `cms_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` char(25) NOT NULL,
  `target` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cms_menus
-- ----------------------------
INSERT INTO `cms_menus` VALUES ('1', 'Home', 'home');
INSERT INTO `cms_menus` VALUES ('2', 'About', 'about');
INSERT INTO `cms_menus` VALUES ('3', 'Proyectos', 'projects');
INSERT INTO `cms_menus` VALUES ('4', 'Contacto', 'contacts');
INSERT INTO `cms_menus` VALUES ('5', 'Requisitos', 'Requisitos');

-- ----------------------------
-- Table structure for `panorama_idiomas`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_idiomas`;
CREATE TABLE `panorama_idiomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_idiomas
-- ----------------------------
INSERT INTO `panorama_idiomas` VALUES ('1', 'INGLES');
INSERT INTO `panorama_idiomas` VALUES ('2', 'ESPAÑOL');

-- ----------------------------
-- Table structure for `panorama_objetos`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_objetos`;
CREATE TABLE `panorama_objetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x` decimal(10,2) DEFAULT NULL,
  `y` decimal(10,2) DEFAULT NULL,
  `fk_escena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_objetos
-- ----------------------------
INSERT INTO `panorama_objetos` VALUES ('1', '750.00', '80.00', '1');
INSERT INTO `panorama_objetos` VALUES ('2', '150.00', '50.00', '1');
INSERT INTO `panorama_objetos` VALUES ('3', '400.00', '140.00', '1');
INSERT INTO `panorama_objetos` VALUES ('4', '220.00', '300.00', '1');
INSERT INTO `panorama_objetos` VALUES ('5', '550.00', '390.00', '1');
INSERT INTO `panorama_objetos` VALUES ('6', '880.00', '290.00', '1');

-- ----------------------------
-- Table structure for `panorama_panorama`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_panorama`;
CREATE TABLE `panorama_panorama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_panorama
-- ----------------------------

-- ----------------------------
-- Table structure for `panorama_subtitulos`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_subtitulos`;
CREATE TABLE `panorama_subtitulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtitulo` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `fk_objeto` int(11) DEFAULT NULL,
  `fk_idioma` int(11) DEFAULT NULL,
  `fk_panorama` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_subtitulos
-- ----------------------------
INSERT INTO `panorama_subtitulos` VALUES ('1', 'UNO', '1', '1', null);
INSERT INTO `panorama_subtitulos` VALUES ('2', 'ONE', '1', '2', null);
INSERT INTO `panorama_subtitulos` VALUES ('3', 'DOS', '2', '1', null);
INSERT INTO `panorama_subtitulos` VALUES ('4', 'TWO', '2', '2', null);
INSERT INTO `panorama_subtitulos` VALUES ('5', 'TRES', '3', '1', null);
INSERT INTO `panorama_subtitulos` VALUES ('6', 'THREE', '3', '2', null);
INSERT INTO `panorama_subtitulos` VALUES ('7', 'CUATRO', '4', '1', null);
INSERT INTO `panorama_subtitulos` VALUES ('8', 'FOUR', '4', '2', null);
INSERT INTO `panorama_subtitulos` VALUES ('9', 'CINCO', '5', '1', null);
INSERT INTO `panorama_subtitulos` VALUES ('10', 'FIVE', '5', '2', null);
INSERT INTO `panorama_subtitulos` VALUES ('11', 'SEIS', '6', '1', null);
INSERT INTO `panorama_subtitulos` VALUES ('12', 'SIX', '6', '2', null);

-- ----------------------------
-- Table structure for `panorama_traducciones`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_traducciones`;
CREATE TABLE `panorama_traducciones` (
  `id_traduccion` int(11) NOT NULL AUTO_INCREMENT,
  `fk_panorama` int(11) DEFAULT NULL,
  `fk_objeto` int(11) DEFAULT NULL,
  `traduccion_src` char(255) DEFAULT NULL,
  `fk_idioma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_traduccion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_traducciones
-- ----------------------------
