-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-04-2025 a las 02:56:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_04_02_204816_create_res_ambiente_table', 1),
(2, '2025_04_02_212701_create_sessions_table', 1),
(3, '2025_04_04_154706_create_cache_table', 1),
(4, '2025_04_04_154829_create_res_tipou_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('penas6422@gmail.com', '$2y$12$e4Wnfu/sgRh3T/tTCMeU3.Z3mfdZGQQknVLARiOLIS/oplfv.G5Yu', '2025-04-05 02:24:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_ambiente`
--

CREATE TABLE `res_ambiente` (
  `cod_amb` int(10) UNSIGNED NOT NULL,
  `nom_amb` varchar(35) NOT NULL,
  `capacidad_amb` int(11) NOT NULL,
  `piso_amb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `res_ambiente`
--

INSERT INTO `res_ambiente` (`cod_amb`, `nom_amb`, `capacidad_amb`, `piso_amb`) VALUES
(1, 'HUB13', 45, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `res_tipou`
--

CREATE TABLE `res_tipou` (
  `cod_tipo` varchar(1) NOT NULL,
  `nom_tipo` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `res_tipou`
--

INSERT INTO `res_tipou` (`cod_tipo`, `nom_tipo`, `created_at`, `updated_at`) VALUES
('A', 'Administrador', NULL, NULL),
('F', 'Funcionario', NULL, NULL),
('P', 'Aprendiz', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MnIj7BxZQk4SFVizg1WWKD87RISIUCQZS6yvwxdU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnVsR3Rib2dnbjdiREp0MTRUd3NsRk9lZ0Z5OEl6TkhNV2J0TVpNNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1743813531);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL,
  `numero_documento` bigint(20) NOT NULL,
  `cod_tipo_fk` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `tipo_documento`, `numero_documento`, `cod_tipo_fk`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samuel Pena', 'T.I', 1141715231, 'A', 'penas6422@gmail.com', NULL, '$2y$12$qLSJulO7aGSuYVaIa1EWye.3fn9SRts76MO9GdZriAhxuhY/XcBw6', NULL, NULL, NULL),
(4, 'Andy Mateo Castillo Cardenas', 'C.C', 1016123412, 'P', 'andy2005@gmail.com', NULL, '$2y$12$odi5F/eY0FZc/7PXObGUiuC5oC5TNXa06RJqtVK2o80J8CmXOFLtO', NULL, '2025-04-05 00:33:59', '2025-04-05 00:33:59'),
(5, 'Edson Vega', 'C.C', 1141715235, 'F', 'edjo114@correo.com', NULL, '$2y$12$ypERW2WSAMq6s8FamGdFDOGuIbK87m8ndKZ2IgpPdHQ.ypo23mNyS', NULL, '2025-04-05 02:07:39', '2025-04-05 02:07:39'),
(6, 'Yissell Valeria Patiño', 'C.C', 12323213213, 'P', 'valeria@gmail.com', NULL, '$2y$12$O21KCTEY7Me2PhVnNszNKeNC.gO.ZRtsf4xAuVWxjEVIYmqJShqye', NULL, '2025-04-05 04:09:18', '2025-04-05 04:09:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD UNIQUE KEY `password_reset_tokens_email_unique` (`email`);

--
-- Indices de la tabla `res_ambiente`
--
ALTER TABLE `res_ambiente`
  ADD PRIMARY KEY (`cod_amb`),
  ADD UNIQUE KEY `res_ambiente_nom_amb_unique` (`nom_amb`);

--
-- Indices de la tabla `res_tipou`
--
ALTER TABLE `res_tipou`
  ADD PRIMARY KEY (`cod_tipo`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_cod_tipo_fk_foreign` (`cod_tipo_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `res_ambiente`
--
ALTER TABLE `res_ambiente`
  MODIFY `cod_amb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_cod_tipo_fk_foreign` FOREIGN KEY (`cod_tipo_fk`) REFERENCES `res_tipou` (`cod_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
