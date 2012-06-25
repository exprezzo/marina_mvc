/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : facturacion_expresso

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-06-24 21:46:46
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
INSERT INTO `cms_menus` VALUES ('3', 'Projectos', 'projectos');
INSERT INTO `cms_menus` VALUES ('4', 'Contacto', 'contacts');
INSERT INTO `cms_menus` VALUES ('5', 'Requisitos', 'Requisitos');
