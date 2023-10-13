-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21-Set-2023 às 15:45
-- Versão do servidor: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- versão do PHP: 7.2.24-0ubuntu0.18.04.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestorssh`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `app_configgl`
--

CREATE TABLE `app_configgl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `app_name` varchar(200) DEFAULT NULL,
  `app_logo` varchar(200) DEFAULT NULL,
  `logo_height` varchar(200) DEFAULT NULL,
  `logo_width` varchar(200) DEFAULT NULL,
  `app_qsTileIcon` varchar(200) DEFAULT NULL,
  `background_color` varchar(200) DEFAULT NULL,
  `card_color` varchar(200) DEFAULT NULL,
  `text_color` varchar(200) DEFAULT NULL,
  `button_color` varchar(200) DEFAULT NULL,
  `icon_color` varchar(200) DEFAULT NULL,
  `border_color` varchar(200) DEFAULT NULL,
  `app_background_image` varchar(200) DEFAULT NULL,
  `app_background_no_color` varchar(200) DEFAULT NULL,
  `app_contact_icon` varchar(200) DEFAULT NULL,
  `default_config_icon` varchar(200) DEFAULT NULL,
  `show_config_mode` varchar(200) DEFAULT NULL,
  `app_limiter_is_active` varchar(200) DEFAULT NULL,
  `server_state_fast` varchar(200) DEFAULT NULL,
  `server_state_slow` varchar(200) DEFAULT NULL,
  `app_contact_link` varchar(200) DEFAULT NULL,
  `app_dialog_config_background_color` varchar(200) DEFAULT NULL,
  `app_config_item_background_color` varchar(200) DEFAULT NULL,
  `app_dialog_image_success` varchar(200) DEFAULT NULL,
  `app_dialog_success_background_color` varchar(200) DEFAULT NULL,
  `app_dialog_success_text_color` varchar(200) DEFAULT NULL,
  `app_dialog_image_fail` varchar(200) DEFAULT NULL,
  `app_dialog_error_background_color` varchar(200) DEFAULT NULL,
  `app_dialog_error_text_color` varchar(200) DEFAULT NULL,
  `app_dialog_image_validate` varchar(200) DEFAULT NULL,
  `app_dialog_image_message` varchar(200) DEFAULT NULL,
  `app_dialog_image_limit_exceeded` varchar(200) DEFAULT NULL,
  `app_dialog_image_invalid_data` varchar(200) DEFAULT NULL,
  `app_text_check_user` varchar(200) DEFAULT NULL,
  `app_message_text` varchar(200) DEFAULT NULL,
  `app_message_type` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriagl`
--

CREATE TABLE `categoriagl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sort_order` varchar(200) DEFAULT NULL,
  `category_color` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `configgl`
--

CREATE TABLE `configgl` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `config_v2ray` varchar(1000) DEFAULT NULL,
  `server_hostname` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `server_port` varchar(200) DEFAULT NULL,
  `icon_image` varchar(200) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `udp_port` varchar(200) DEFAULT NULL,
  `category_id` varchar(200) DEFAULT NULL,
  `v2ray_uuid` varchar(1000) DEFAULT NULL,
  `primary_dns_server` varchar(200) DEFAULT NULL,
  `payload` text,
  `status` varchar(200) DEFAULT NULL,
  `secondary_dns_server` varchar(200) DEFAULT NULL,
  `sni` varchar(200) DEFAULT NULL,
  `config_mode` varchar(200) DEFAULT NULL,
  `url_check_user` varchar(200) DEFAULT NULL,
  `config_openvpn` varchar(1000) DEFAULT NULL,
  `proxy_hostname` varchar(200) DEFAULT NULL,
  `sort_order` varchar(200) DEFAULT NULL,
  `proxy_port` varchar(200) DEFAULT NULL,
  `ovpn_config` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariogl`
--

CREATE TABLE `usuariogl` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `credito` varchar(20) DEFAULT '0',
  `login` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `expirar` varchar(200) DEFAULT NULL,
  `permiss` varchar(200) DEFAULT NULL,
  `token` varchar(200) DEFAULT NULL,
  `info` varchar(400) DEFAULT NULL,
  `criador` varchar(200) DEFAULT NULL,
  `banido` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuariogl`
--

INSERT INTO `usuariogl` (`id`, `user`, `credito`, `login`, `pass`, `expirar`, `permiss`, `token`, `info`, `criador`, `banido`) VALUES
(1, 'ADMINISTRADOR', '0', 'admin', 'qd5g3FOd/srKlKmjIuO0YQ==', '3000-12-12', '9', 'gl-gestor', NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `app_configgl`
--
ALTER TABLE `app_configgl`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoriagl`
--
ALTER TABLE `categoriagl`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `configgl`
--
ALTER TABLE `configgl`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuariogl`
--
ALTER TABLE `usuariogl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `app_configgl`
--
ALTER TABLE `app_configgl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoriagl`
--
ALTER TABLE `categoriagl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `configgl`
--
ALTER TABLE `configgl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuariogl`
--
ALTER TABLE `usuariogl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
