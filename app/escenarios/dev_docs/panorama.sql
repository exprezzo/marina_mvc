/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : facturacion_expresso

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2012-07-14 06:50:26
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
  `ruta_imagen` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `x` decimal(10,2) DEFAULT NULL,
  `y` decimal(10,2) DEFAULT NULL,
  `fk_escena` int(11) NOT NULL,
  `widtth` decimal(11,6) DEFAULT NULL,
  `height` decimal(11,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_objetos
-- ----------------------------
INSERT INTO `panorama_objetos` VALUES ('1', 'imagenes/harmonia_pastelis/128/hp_dog.png', '750.00', '560.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('2', 'imagenes/harmonia_pastelis/128/hp_fav_star.png', '800.00', '50.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('3', 'imagenes/harmonia_pastelis/128/hp_boy.png', '400.00', '540.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('4', 'imagenes/harmonia_pastelis/128/hp_girl.png', '220.00', '540.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('5', 'imagenes/harmonia_pastelis/128/hp_recycle_bin_2_full.png', '10.00', '370.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('6', 'imagenes/harmonia_pastelis/128/hp_cat.png', '880.00', '600.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('7', 'imagenes/monkey_128.png', '500.00', '700.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('8', 'imagenes/parrot_128.png', '1130.00', '600.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('9', 'imagenes/1341953800_Cherry64.png', '1100.00', '200.00', '1', null, null);
INSERT INTO `panorama_objetos` VALUES ('11', 'imagenes/playa/umbrella.png', '650.00', '700.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('12', 'imagenes/playa/turtle.png', '450.00', '620.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('13', 'imagenes/playa/sunblock.png', '700.00', '750.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('14', 'imagenes/playa/snorkeling.png', '350.00', '530.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('15', 'imagenes/playa/sailing_ship.png', '-20.00', '400.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('17', 'imagenes/playa/help.png', '350.00', '640.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('18', 'imagenes/playa/dolphin.png', '100.00', '350.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('19', 'imagenes/playa/cube.png', '920.00', '550.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('20', 'imagenes/playa/board.png', '750.00', '600.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('21', 'imagenes/playa/bird.png', '900.00', '100.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('22', 'imagenes/playa/beach_sit.png', '600.00', '550.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('23', 'imagenes/playa/ball.png', '100.00', '600.00', '6', null, null);
INSERT INTO `panorama_objetos` VALUES ('24', 'imagenes/playa/2_fish.png', '40.00', '400.00', '6', null, null);

-- ----------------------------
-- Table structure for `panorama_panorama`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_panorama`;
CREATE TABLE `panorama_panorama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) NOT NULL,
  `ruta_imagen` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_panorama
-- ----------------------------
INSERT INTO `panorama_panorama` VALUES ('1', 'paraiso', 'imagenes/escenarios/Paraiso_Secreto_1280x960.jpg');
INSERT INTO `panorama_panorama` VALUES ('2', 'cabaña', 'imagenes/escenarios/1189-caban-1280x800-digital-art-wallpaper.jpg');
INSERT INTO `panorama_panorama` VALUES ('3', 'nieve', 'imagenes/escenarios/Beautiful-Snow-Scenery-1.jpeg');
INSERT INTO `panorama_panorama` VALUES ('4', 'el espacio', 'imagenes/escenarios/wallpaper___the_heat_of_love_by_gucken-d1e3f7m.jpg');
INSERT INTO `panorama_panorama` VALUES ('6', 'playa', 'imagenes/escenarios/beach-background-4-766455.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_subtitulos
-- ----------------------------
INSERT INTO `panorama_subtitulos` VALUES ('1', 'PERRO', '1', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('2', 'DOG', '1', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('3', 'ESTRELLA', '2', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('4', 'STAR', '2', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('5', 'NIÑO', '3', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('6', 'BOY', '3', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('7', 'NIÑA', '4', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('8', 'GIRL', '4', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('9', 'ELEFANTE', '5', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('10', 'ELEPHANT', '5', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('11', 'GATO', '6', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('12', 'CAT', '6', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('13', 'CHANGO', '7', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('14', 'MONKEY', '7', '2', '1');
INSERT INTO `panorama_subtitulos` VALUES ('15', 'PERICO', '8', '1', '1');
INSERT INTO `panorama_subtitulos` VALUES ('16', 'PARROT', '8', '2', '1');

-- ----------------------------
-- Table structure for `panorama_traducciones`
-- ----------------------------
DROP TABLE IF EXISTS `panorama_traducciones`;
CREATE TABLE `panorama_traducciones` (
  `id_traduccion` int(11) NOT NULL AUTO_INCREMENT,
  `fk_panorama` int(11) DEFAULT NULL,
  `fk_objeto` int(11) DEFAULT NULL,
  `ruta_trad` char(255) DEFAULT NULL,
  `fk_idioma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_traduccion`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of panorama_traducciones
-- ----------------------------
INSERT INTO `panorama_traducciones` VALUES ('1', '1', '1', 'traducciones/proto/perro.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('2', '1', '1', 'traducciones/proto/dog.mp3', '2');
INSERT INTO `panorama_traducciones` VALUES ('3', '1', '2', 'traducciones/proto/estrella.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('4', '1', '2', 'traducciones/proto/star.mp3', '2');
INSERT INTO `panorama_traducciones` VALUES ('5', '1', '3', 'traducciones/proto/niño.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('6', '1', '3', 'traducciones/proto/boy.mp3', '2');
INSERT INTO `panorama_traducciones` VALUES ('7', '1', '4', 'traducciones/proto/niña.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('8', '1', '4', 'traducciones/proto/girl.mp3', '2');
INSERT INTO `panorama_traducciones` VALUES ('9', '1', '5', 'traducciones/proto/elefante.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('10', '1', '5', 'traducciones/proto/elephant.mp3', '2');
INSERT INTO `panorama_traducciones` VALUES ('11', '1', '6', 'traducciones/proto/gato.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('12', '1', '6', 'traducciones/proto/cat.mp3', '2');
INSERT INTO `panorama_traducciones` VALUES ('13', '1', '7', 'traducciones/proto/chango.mp3', '1');
INSERT INTO `panorama_traducciones` VALUES ('14', '1', '7', 'traducciones/proto/monkey.mp3', '2');
