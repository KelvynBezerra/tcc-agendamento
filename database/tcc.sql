/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.11.2-MariaDB : Database - agendamento_tcc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`agendamento_tcc` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `agendamento_tcc`;

/*Table structure for table `agendamento` */

DROP TABLE IF EXISTS `agendamento`;

CREATE TABLE `agendamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ativa` tinyint(1) NOT NULL,
  `data_hora` datetime NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_tipoAgendamento` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_paciente` (`id_paciente`),
  KEY `id_medico` (`id_medico`),
  KEY `id_tipoAgendamento` (`id_tipoAgendamento`),
  CONSTRAINT `agendamento_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id`),
  CONSTRAINT `agendamento_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id`),
  CONSTRAINT `agendamento_ibfk_3` FOREIGN KEY (`id_tipoAgendamento`) REFERENCES `tipoagendamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `agendamento` */

/*Table structure for table `medico` */

DROP TABLE IF EXISTS `medico`;

CREATE TABLE `medico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `especialidade` varchar(64) NOT NULL,
  `CEP` int(11) DEFAULT NULL,
  `pais` varchar(32) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `cidade` varchar(32) DEFAULT NULL,
  `bairro` varchar(32) DEFAULT NULL,
  `logradouro` varchar(32) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `complemento` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `celular_1` varchar(18) DEFAULT NULL,
  `celular_2` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `medico` */

/*Table structure for table `paciente` */

DROP TABLE IF EXISTS `paciente`;

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `CEP` int(11) DEFAULT NULL,
  `pais` varchar(32) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `cidade` varchar(32) DEFAULT NULL,
  `bairro` varchar(32) DEFAULT NULL,
  `logradouro` varchar(32) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `complemento` varchar(64) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `celular_1` varchar(18) DEFAULT NULL,
  `celular_2` varchar(18) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `paciente` */

insert  into `paciente`(`id`,`nome`,`cpf`,`senha`,`CEP`,`pais`,`UF`,`cidade`,`bairro`,`logradouro`,`numero`,`complemento`,`email`,`celular_1`,`celular_2`) values 
(1,'Erick Inamoto','12345678910','senha',17522660,'pa1s','SP','c1dade','ba1rro','l0gradouro','numer0','','ema1l@email.com','123',''),
(2,'Boneco de Teste','10987654321','senha',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'xXragdollXx@hotmail.com',NULL,NULL);

/*Table structure for table `tipoagendamento` */

DROP TABLE IF EXISTS `tipoagendamento`;

CREATE TABLE `tipoagendamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipoAgendamento` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `tipoagendamento` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
