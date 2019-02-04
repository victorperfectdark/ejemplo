/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.7.18-log : Database - crud poo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud poo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `crud poo`;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idUsuario` int(10) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(20) NOT NULL,
  `contraseña` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `fechaDeCreacion` date NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `usuario` */

insert  into `usuario`(`idUsuario`,`NombreUsuario`,`contraseña`,`email`,`fechaDeCreacion`,`estado`) values (1,'jenniffer',12345,'jenni@gmail.com','2017-05-04','activo'),(2,'daniel',14567,'dani88@hotmail.com','2017-05-04','activo');

/* Procedure structure for procedure `insert_usuario` */

/*!50003 DROP PROCEDURE IF EXISTS  `insert_usuario` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_usuario`(
IN _NombreUsuario VARCHAR(20),
_contraseña int(10),
_email varchar(20),
_fechaDeCreacion date,
_estado varchar(20)
)
BEGIN
IF NOT EXISTS (SELECT * FROM usuario WHERE NombreUsuario=_NombreUsuario AND contraseña=_contraseña)THEN
INSERT INTO usuario(NombreUsuario,contraseña,email,fechaDeCreacion,estado)
VALUES(_NombreUsuario,_contraseña,_email,_fechaDeCreacion,_estado);
END IF;
END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
