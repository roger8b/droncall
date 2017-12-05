CREATE SCHEMA `ci_admin` DEFAULT CHARACTER SET utf8 ;

use `ci_admin`;

CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(12) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `crm` VARCHAR(15) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `senha` VARCHAR(40) NOT NULL,
  `tipo` SMALLINT(1),
  `status` SMALLINT(1),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `crm` (`crm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `grupo` (
  `id` INT(12) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `status` SMALLINT(1) NOT NULL,
  `visualizar` SMALLINT(1),
  `id_user_admin` INT(12),
  PRIMARY KEY (`id`),
  FOREIGN KEY (id_user_admin) REFERENCES user(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `user_grupo` (
  `id_user` INT(12) NOT NULL,
  `id_grupo` INT(12) NOT NULL,
  `user_status` SMALLINT(1),
  PRIMARY KEY (id_user, id_grupo),
  FOREIGN KEY (id_user) REFERENCES user(id),
  FOREIGN KEY (id_grupo) REFERENCES grupo(id))
  ENGINE=InnoDB DEFAULT CHARSET=utf8;
  
  CREATE TABLE IF NOT EXISTS `solicitacao_grupo` (
  `id` INT(12) NOT NULL AUTO_INCREMENT,
  `id_user` INT(12) NOT NULL,
  `id_grupo` INT(12) NOT NULL,
  `user_status` SMALLINT(1),
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
  
  
  
  


