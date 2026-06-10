-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_pweb1_2026_1
CREATE DATABASE IF NOT EXISTS `db_pweb1_2026_1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_pweb1_2026_1`;

-- Copiando estrutura para tabela db_pweb1_2026_1.bandas
CREATE TABLE IF NOT EXISTS `bandas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) COLLATE utf8mb4_bin DEFAULT NULL,
  `paisorigem` varchar(80) COLLATE utf8mb4_bin DEFAULT NULL,
  `anoformacao` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_pweb1_2026_1.bandas: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb1_2026_1.discocd
CREATE TABLE IF NOT EXISTS `discocd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ano` int DEFAULT '0',
  `genero` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `artista` varchar(80) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_pweb1_2026_1.discocd: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_pweb1_2026_1.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nome` varchar(130) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT '0',
  `senha` varchar(120) COLLATE utf8mb4_bin DEFAULT '0',
  `email` varchar(80) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_pweb1_2026_1.usuario: ~4 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `telefone`, `senha`, `email`) VALUES
	(0000000001, 'Jackson Five', '84 988622581', '0', 'lordjackson@gmail.com'),
	(0000000002, 'Jackson Five 2', '84 9888-55522', '0', 'lordjackson@gmail.com'),
	(0000000003, 'Jackson Five 2', '84 9888-55522', '0', 'lordjackson@gmail.com'),
	(0000000004, 'Jackson Five 2', '84 9888-55522', '0', 'lordjackson@gmail.com'),
	(0000000005, 'Jasper', '49999999999', '$2y$12$H7kNI84RqmMohdAZ.hV3UePnL.wmdEuXzxHU.akPZPWJ7iAnq84wq', 'Jasper@gmail.com'),
	(0000000006, 'Teste2', '12345678', '123', 'Emailteste@gmail.com');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
