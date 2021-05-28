CREATE TABLE `sorteio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ddd` int(11) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `telefone_sem_ddd` int(12) unsigned zerofill DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) 
