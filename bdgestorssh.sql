-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gestorssh
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acesso_servidor`
--

DROP TABLE IF EXISTS `acesso_servidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acesso_servidor` (
  `id_acesso_servidor` int(10) NOT NULL AUTO_INCREMENT,
  `id_servidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_mestre` int(11) NOT NULL DEFAULT '0',
  `id_servidor_mestre` int(11) NOT NULL DEFAULT '0',
  `qtd` int(10) NOT NULL DEFAULT '0',
  `demo` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_acesso_servidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acesso_servidor`
--

LOCK TABLES `acesso_servidor` WRITE;
/*!40000 ALTER TABLE `acesso_servidor` DISABLE KEYS */;
/*!40000 ALTER TABLE `acesso_servidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessKEY` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `textocon` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `textorev` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_administrador`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','admin','Administrador','meuemail@gmail.com','11999999999',NULL,'GESTOR-SSH','Abra o app que você instalou e selecione a operadora, digite o usuário e a senha, ligue o dados móveis e desligue Wi-fi, clique em Conectar. Deve aparecer *Conectado*. 🚀','Seja bem vindo revenda e tenha sucesso nas *vendas*. 🚀');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anuncios` (
  `anuncio1` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anuncio2` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anuncio3` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anuncio4` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anuncio5` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `anuncio6` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` VALUES ('Insira o Código Adsense no Painel','Insira o Código Adsense no Painel','Insira o Código Adsense no Painel','Insira o Código Adsense no Painel','Insira o Código Adsense no Painel','Insira o Código Adsense no Painel');
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arquivo_download`
--

DROP TABLE IF EXISTS `arquivo_download`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arquivo_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('funcionando','testes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('ehi','apk','outros') COLLATE utf8mb4_unicode_ci NOT NULL,
  `operadora` enum('todas','claro','vivo','tim','oi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `detalhes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_arquivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_tipo` enum('vpn','revenda','todos') COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arquivo_download`
--

LOCK TABLES `arquivo_download` WRITE;
/*!40000 ALTER TABLE `arquivo_download` DISABLE KEYS */;
/*!40000 ALTER TABLE `arquivo_download` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chamados`
--

DROP TABLE IF EXISTS `chamados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chamados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `id_mestre` int(11) NOT NULL DEFAULT '0',
  `tipo` enum('contassh','revendassh','usuariossh','servidor','outros') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aberto','resposta','encerrado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `resposta` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chamados`
--

LOCK TABLES `chamados` WRITE;
/*!40000 ALTER TABLE `chamados` DISABLE KEYS */;
/*!40000 ALTER TABLE `chamados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configs`
--

DROP TABLE IF EXISTS `configs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configs`
--

LOCK TABLES `configs` WRITE;
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` VALUES (1,'msg_id','01'),(2,'sesexp','30'),(3,'logo','https://i.ibb.co/q1LnDVT/logo.png'),(4,'largura',''),(5,'altura',''),(6,'link','http://meu.dominio'),(7,'titulo','Painel Conecta4G');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracao`
--

DROP TABLE IF EXISTS `configuracao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracao` (
  `id_configuracao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `titulo_pagina` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_configuracao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracao`
--

LOCK TABLES `configuracao` WRITE;
/*!40000 ALTER TABLE `configuracao` DISABLE KEYS */;
/*!40000 ALTER TABLE `configuracao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `configuracoes`
--

DROP TABLE IF EXISTS `configuracoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_owner` int(11) NOT NULL,
  `versao` int(11) NOT NULL DEFAULT '2',
  `notas` mediumtext COLLATE utf8mb4_unicode_ci,
  `sms` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `att` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logoonline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fundoonline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fundoDoLogOnline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contato` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `termos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkuser` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` mediumtext COLLATE utf8mb4_unicode_ci,
  `att_msg` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `configuracoes`
--

LOCK TABLES `configuracoes` WRITE;
/*!40000 ALTER TABLE `configuracoes` DISABLE KEYS */;
INSERT INTO `configuracoes` VALUES (1,1,2,'👋 ATUALIZAÇÃO DISPONÍVEL! 👋\n🚀 CLIQUE EM ATUALIZAR 🚀','http://meu.dominio/update/admin/sms','http://meu.dominio/update/admin/config',NULL,NULL,NULL,'meuemail@gmail.com','https://t.me/telegram','http://meu.dominio/apps/termos.php','true',NULL,1);
/*!40000 ALTER TABLE `configuracoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conta_ssh`
--

DROP TABLE IF EXISTS `conta_ssh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conta_ssh` (
  `id_usuario_ssh` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_servidor` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `login` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_validade` date NOT NULL,
  `data_suspensao` datetime DEFAULT NULL,
  `apagar` int(2) NOT NULL DEFAULT '0',
  `acesso` int(10) NOT NULL DEFAULT '1',
  `online` int(11) NOT NULL DEFAULT '0',
  `online_start` datetime DEFAULT NULL,
  `online_hist` int(11) NOT NULL DEFAULT '0',
  `demo` enum('nao','sim') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `valorconta` decimal(10,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario_ssh`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conta_ssh`
--

LOCK TABLES `conta_ssh` WRITE;
/*!40000 ALTER TABLE `conta_ssh` DISABLE KEYS */;
/*!40000 ALTER TABLE `conta_ssh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fatura`
--

DROP TABLE IF EXISTS `fatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fatura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `servidor_id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  `tipo` enum('vpn','revenda','outros') COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `datavencimento` datetime NOT NULL,
  `status` enum('pendente','cancelado','pago') COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrição` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fatura`
--

LOCK TABLES `fatura` WRITE;
/*!40000 ALTER TABLE `fatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `fatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fatura_clientes`
--

DROP TABLE IF EXISTS `fatura_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fatura_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `id_mestre` int(11) NOT NULL DEFAULT '0',
  `servidor_id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  `tipo` enum('vpn','revenda','outros') COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `datavencimento` datetime NOT NULL,
  `status` enum('pendente','cancelado','pago') COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrição` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `desconto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fatura_clientes`
--

LOCK TABLES `fatura_clientes` WRITE;
/*!40000 ALTER TABLE `fatura_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `fatura_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fatura_comprovantes`
--

DROP TABLE IF EXISTS `fatura_comprovantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fatura_comprovantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fatura_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `status` enum('aberto','fechado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aberto',
  `data` datetime NOT NULL,
  `formapagamento` enum('boleto','deptra') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fatura_comprovantes`
--

LOCK TABLES `fatura_comprovantes` WRITE;
/*!40000 ALTER TABLE `fatura_comprovantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `fatura_comprovantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fatura_comprovantes_clientes`
--

DROP TABLE IF EXISTS `fatura_comprovantes_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fatura_comprovantes_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mestre` int(11) NOT NULL DEFAULT '0',
  `fatura_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `status` enum('aberto','fechado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aberto',
  `data` datetime NOT NULL,
  `formapagamento` enum('boleto','deptra') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fatura_comprovantes_clientes`
--

LOCK TABLES `fatura_comprovantes_clientes` WRITE;
/*!40000 ALTER TABLE `fatura_comprovantes_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `fatura_comprovantes_clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hist_usuario_ssh_online`
--

DROP TABLE IF EXISTS `hist_usuario_ssh_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hist_usuario_ssh_online` (
  `id_hist_usrSSH` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `hora_conexao` datetime NOT NULL,
  `hora_desconexao` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_hist_usrSSH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hist_usuario_ssh_online`
--

LOCK TABLES `hist_usuario_ssh_online` WRITE;
/*!40000 ALTER TABLE `hist_usuario_ssh_online` DISABLE KEYS */;
/*!40000 ALTER TABLE `hist_usuario_ssh_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hist_usuario_ssh_online_free`
--

DROP TABLE IF EXISTS `hist_usuario_ssh_online_free`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hist_usuario_ssh_online_free` (
  `id_hist_usrSSH` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `hora_conexao` datetime NOT NULL,
  `hora_desconexao` datetime DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_hist_usrSSH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hist_usuario_ssh_online_free`
--

LOCK TABLES `hist_usuario_ssh_online_free` WRITE;
/*!40000 ALTER TABLE `hist_usuario_ssh_online_free` DISABLE KEYS */;
/*!40000 ALTER TABLE `hist_usuario_ssh_online_free` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historico_login`
--

DROP TABLE IF EXISTS `historico_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historico_login` (
  `id_historico_login` int(10) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) NOT NULL,
  `data_login` datetime NOT NULL,
  `ip_login` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navegador` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_historico_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historico_login`
--

LOCK TABLES `historico_login` WRITE;
/*!40000 ALTER TABLE `historico_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `historico_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informativo`
--

DROP TABLE IF EXISTS `informativo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informativo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informativo`
--

LOCK TABLES `informativo` WRITE;
/*!40000 ALTER TABLE `informativo` DISABLE KEYS */;
/*!40000 ALTER TABLE `informativo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagens`
--

DROP TABLE IF EXISTS `mensagens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_owner` int(11) NOT NULL,
  `msg` longtext COLLATE utf8mb4_unicode_ci,
  `att` int(11) DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagens`
--

LOCK TABLES `mensagens` WRITE;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` VALUES (1,1,'Atualização com todas as\noperadoras funcionando!\nMantenha o APP sempre atualizado!\nNosso compromisso é deixar vocês \nsempre ON! 🚀🔰',1);
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mercadopago`
--

DROP TABLE IF EXISTS `mercadopago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mercadopago` (
  `CLIENT_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CLIENT_SECRET` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mercadopago`
--

LOCK TABLES `mercadopago` WRITE;
/*!40000 ALTER TABLE `mercadopago` DISABLE KEYS */;
/*!40000 ALTER TABLE `mercadopago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('ativo','desativado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacoes`
--

DROP TABLE IF EXISTS `notificacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `conta_id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `tipo` enum('fatura','conta','revenda','outros','usuario','chamados') COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkfatura` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_outros` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lido` enum('nao','sim') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  `admin` enum('nao','sim') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacoes`
--

LOCK TABLES `notificacoes` WRITE;
/*!40000 ALTER TABLE `notificacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `notificacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ovpn`
--

DROP TABLE IF EXISTS `ovpn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ovpn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `servidor_id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ovpn`
--

LOCK TABLES `ovpn` WRITE;
/*!40000 ALTER TABLE `ovpn` DISABLE KEYS */;
/*!40000 ALTER TABLE `ovpn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payloads`
--

DROP TABLE IF EXISTS `payloads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_owner` int(11) NOT NULL,
  `Name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `FLAG` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Payload` mediumtext COLLATE utf8mb4_unicode_ci,
  `SNI` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TlsIP` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProxyIP` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProxyPort` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Info` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payloads`
--

LOCK TABLES `payloads` WRITE;
/*!40000 ALTER TABLE `payloads` DISABLE KEYS */;
INSERT INTO `payloads` VALUES (1,1,'📱 VIVO SPEED ON 01 📡 💜','vivo','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','162.247.241.14','','443','Tlsws'),(2,1,'📱 VIVO SPEED ON 02 📡 💜','vivo','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','104.16.123.175','','443','Tlsws'),(3,1,'📱 VIVO SPEED ON 03 📡 💜','vivo','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','104.16.56.6','','443','Tlsws'),(4,1,'📱 VIVO SPEED ON 04 📡 💜','vivo','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','104.16.57.6','','443','Tlsws'),(5,1,'📱 VIVO SPEED ON 05 📡 💜','vivo','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','bam.nr-data.net','','443','Tlsws'),(6,1,'📱 VIVO SPEED ON 06 📡 💜','vivo','GET / HTTP/1.3[crlf]Host: [host][crlf]Upgrade: websocket[crlf][crlf]','','','104.16.122.175','80','Proxy'),(7,1,'📱 VIVO EASY 01 📡 💜','vivo','GET wss://vivo360.vivo.com.br/ HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf][crlf]','vivo360.vivo.com.br','104.18.6.80','104.18.6.80','443','Tlsws'),(8,1,'📱 VIVO EASY 02 📡 💜','vivo','GET wss://vivoid.vivo.com.br/ HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: websocket[crlf][crlf]','vivoid.vivo.com.br','104.18.7.80','104.18.7.80','443','Tlsws'),(9,1,'📱 TIM 5G 01 📡 💙','tim','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','162.247.241.14','','443','Tlsws'),(10,1,'📱 TIM 5G 02 📡 💙','tim','GET wss://bam.nr-data.net// HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: Websocket[crlf]Connection: Keep-Alive[crlf]Connection: Keep-Alive[crlf][crlf]','bam.nr-data.net','bam.nr-data.net','','443','Tlsws'),(11,1,'📱 CLARO 5G 01 📡 ❤️','claro','GET wss://player-api.new.livestream.com/ HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: websocket[crlf][crlf]','player-api.new.livestream.com','player-api.new.livestream.com','player-api.new.livestream.com','443','Tlsws'),(12,1,'📱 CLARO 5G 02 📡 ❤️','claro','GET wss://player-api.new.livestream.com/ HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: websocket[crlf][crlf]','player-api.new.livestream.com','162.159.136.60','162.159.136.60','443','Tlsws'),(13,1,'📱 OI 5G 01 📡 💛','oi','GET ws://www.hbogo.com.br HTTP/1.1\nHost: [app_host]\nUpgrade: ws\n\n','www.hbogo.com.br','www.hbogo.com.br','','','Tlsws'),(14,1,'📱 OI 5G 02 📡 💛','oi','GET ws://www.hbogo.com.br HTTP/1.1\nHost: [app_host]\nUpgrade: ws\n\n','www.hbogo.com.br','104.16.53.91','','','Tlsws'),(15,1,'📱 OI 5G 03 📡 💛','oi','GET / HTTP/1.3[crlf]Host: [host][crlf]Upgrade: websocket[crlf][crlf]','oii.gdmhost.ga','oii.gdmhost.ga','oii.gdmhost.ga','80','proxy'),(16,1,'📱 OI 5G 04 📡 💛','oi','GET / HTTP/1.3[crlf]Host: [app_host][crlf]Upgrade: websocket[crlf][crlf]','oii.gdmhost.ga','oii.gdmhost.ga','oii.gdmhost.ga','443','Tlsws'),(17,1,'📱 OI 5G 05 📡 💛','oi','GET / HTTP/1.1[crlf]Host: [app_host][crlf]Upgrade: websocket[crlf][crlf]','[app_host]','104.16.51.91','','443','Tlsws'),(18,1,'📱 OI 5G 06 📡 💛','oi','GET ws://www.hbogo.com.br HTTP/1.1\nHost: [app_host]\nUpgrade: ws\n\n','www.hbogo.com.br','www.hbogo.com.br','','','Tlsws'),(19,1,'📱 OI 5G 07 📡 💛','oi','GET ws://www.hbogo.com.br HTTP/1.1\nHost: [app_host]\nUpgrade: ws\n\n','www.hbogo.com.br','104.16.53.91','','','Tlsws'),(20,1,'📱 OI 5G 08 📡 💛','oi','GET / HTTP/1.3[crlf]Host: [host][crlf]Upgrade: websocket[crlf][crlf]','oii.gdmhost.ga','104.16.56.6','104.16.56.6','','Tlsws');
/*!40000 ALTER TABLE `payloads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portas`
--

DROP TABLE IF EXISTS `portas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `portas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_owner` int(11) NOT NULL,
  `Porta` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portas`
--

LOCK TABLES `portas` WRITE;
/*!40000 ALTER TABLE `portas` DISABLE KEYS */;
INSERT INTO `portas` VALUES (1,1,'7300');
/*!40000 ALTER TABLE `portas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servidor`
--

DROP TABLE IF EXISTS `servidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servidor` (
  `id_servidor` int(11) NOT NULL AUTO_INCREMENT,
  `ativo` int(10) NOT NULL DEFAULT '0',
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regiao` enum('asia','america','europa','australia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `limite_usuario` int(10) NOT NULL DEFAULT '0',
  `ip_servidor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_servidor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_server` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porta` int(10) NOT NULL DEFAULT '22',
  `dias` int(10) NOT NULL DEFAULT '0',
  `demo` int(11) NOT NULL DEFAULT '0',
  `online` int(11) NOT NULL,
  `autenticado` int(11) NOT NULL,
  `ehi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localizacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacao_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` int(11) NOT NULL,
  `limite` int(11) NOT NULL,
  `tipo` enum('premium','free') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'premium',
  `manutencao` enum('nao','sim') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nao',
  PRIMARY KEY (`id_servidor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servidor`
--

LOCK TABLES `servidor` WRITE;
/*!40000 ALTER TABLE `servidor` DISABLE KEYS */;
/*!40000 ALTER TABLE `servidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servidores`
--

DROP TABLE IF EXISTS `servidores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servidores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_owner` int(11) NOT NULL,
  `Name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `TYPE` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'premium',
  `FLAG` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'br.png',
  `ServerIP` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckUser` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ServerPort` int(11) DEFAULT '22',
  `SSLPort` int(11) DEFAULT NULL,
  `USER` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PASS` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servidores`
--

LOCK TABLES `servidores` WRITE;
/*!40000 ALTER TABLE `servidores` DISABLE KEYS */;
INSERT INTO `servidores` VALUES (1,1,'⚡ SERVIDOR 01','premium','br.png','dominio.vps.ssh','http://dominio.vps.ssh:8080/checkUser',22,443,'','');
/*!40000 ALTER TABLE `servidores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessao`
--

DROP TABLE IF EXISTS `sessao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessao` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `uid` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `expira` int(100) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`,`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessao`
--

LOCK TABLES `sessao` WRITE;
/*!40000 ALTER TABLE `sessao` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sms`
--

DROP TABLE IF EXISTS `sms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sms` (
  `id_sms` int(11) NOT NULL AUTO_INCREMENT,
  `id_remetente` int(11) NOT NULL,
  `id_destinatario` int(11) NOT NULL,
  `assunto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensagem` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_resquisicao` datetime NOT NULL,
  `hora_envio` datetime NOT NULL,
  `status` enum('Aguardando','Enviado','Erro') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aguardando',
  PRIMARY KEY (`id_sms`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sms`
--

LOCK TABLES `sms` WRITE;
/*!40000 ALTER TABLE `sms` DISABLE KEYS */;
/*!40000 ALTER TABLE `sms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smtp`
--

DROP TABLE IF EXISTS `smtp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smtp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `servidor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porta` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssl_secure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtp`
--

LOCK TABLES `smtp` WRITE;
/*!40000 ALTER TABLE `smtp` DISABLE KEYS */;
/*!40000 ALTER TABLE `smtp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smtp_usuarios`
--

DROP TABLE IF EXISTS `smtp_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smtp_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ssl_secure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `servidor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porta` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtp_usuarios`
--

LOCK TABLES `smtp_usuarios` WRITE;
/*!40000 ALTER TABLE `smtp_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `smtp_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(60) NOT NULL AUTO_INCREMENT,
  `id_mestre` int(10) DEFAULT '0',
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  `atualiza_dados` int(11) NOT NULL DEFAULT '0',
  `login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `tipo` enum('vpn','revenda','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `subrevenda` enum('nao','sim') COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` date DEFAULT NULL,
  `suspenso` date DEFAULT NULL,
  `token_user` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permitir_demo` int(11) NOT NULL DEFAULT '0',
  `dias_demo_sub` int(10) NOT NULL DEFAULT '0',
  `apagar` int(11) NOT NULL DEFAULT '0',
  `idcliente_mp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokensecret_mp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dadosdeposito` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `accesstoken` varchar(330) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `valorrevenda` decimal(10,0) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `token_user` (`token_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '1',
  `banido` int(11) NOT NULL DEFAULT '0',
  `limite_pay` int(11) NOT NULL DEFAULT '4',
  `limite_ser` int(11) NOT NULL DEFAULT '15',
  `pasta_att` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'GESTOR-SSH','admin','21232f297a57a5a743894a0e4a801fc3',3,0,4,15,'admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-11 17:45:06
