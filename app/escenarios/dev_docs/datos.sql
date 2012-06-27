/*
SQLyog Enterprise - MySQL GUI v6.05
Host - 5.5.8-log : Database - facturacion_expresso
*********************************************************************
Server version : 5.5.8-log
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `cms_menus` */

CREATE TABLE `cms_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` char(25) NOT NULL,
  `target` char(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `cms_menus` */

insert  into `cms_menus`(`id`,`texto`,`target`) values (1,'Home','home');
insert  into `cms_menus`(`id`,`texto`,`target`) values (2,'About','about');
insert  into `cms_menus`(`id`,`texto`,`target`) values (3,'Proyectos','projects');
insert  into `cms_menus`(`id`,`texto`,`target`) values (4,'Contacto','contacts');
insert  into `cms_menus`(`id`,`texto`,`target`) values (5,'Requisitos','Requisitos');

/*Table structure for table `esc_objecto` */

CREATE TABLE `esc_objecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `x` decimal(10,2) DEFAULT NULL,
  `y` decimal(10,2) DEFAULT NULL,
  `fk_escena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `esc_objecto` */

insert  into `esc_objecto`(`id`,`x`,`y`,`fk_escena`) values (1,'750.00','80.00',1);
insert  into `esc_objecto`(`id`,`x`,`y`,`fk_escena`) values (2,'150.00','50.00',1);
insert  into `esc_objecto`(`id`,`x`,`y`,`fk_escena`) values (3,'400.00','140.00',1);
insert  into `esc_objecto`(`id`,`x`,`y`,`fk_escena`) values (4,'220.00','300.00',1);
insert  into `esc_objecto`(`id`,`x`,`y`,`fk_escena`) values (5,'550.00','390.00',1);
insert  into `esc_objecto`(`id`,`x`,`y`,`fk_escena`) values (6,'880.00','290.00',1);

/*Table structure for table `idioma_objeto` */

CREATE TABLE `idioma_objeto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `fk_objeto` int(11) DEFAULT NULL,
  `fk_idioma` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `idioma_objeto` */

/*Table structure for table `idiomas` */

CREATE TABLE `idiomas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `idiomas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
