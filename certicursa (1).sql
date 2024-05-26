-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2024 a las 20:58:19
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certicursa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesors`
--

CREATE TABLE `asesors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminAsesor` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia_id` bigint(20) UNSIGNED NOT NULL,
  `canton_id` bigint(20) UNSIGNED NOT NULL,
  `empresa_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantons`
--

CREATE TABLE `cantons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cantons`
--

INSERT INTO `cantons` (`id`, `nombre`, `provincia_id`, `created_at`, `updated_at`) VALUES
(1, 'Cuenca', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(2, 'Gualaceo', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(3, 'Chordeleg', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(4, 'Nabón', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(5, 'Girón', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(6, 'San Fernando', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(7, 'Santa Isabel', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(8, 'Pucará', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(9, 'Déleg', 1, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(10, 'Caluma', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(11, 'Chimbo', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(12, 'Las Naves', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(13, 'Mocha', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(14, 'Montecalvo', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(15, 'San Carlos de Echeandía', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(16, 'San Miguel de Bolívar', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(17, 'Warmi', 2, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(18, 'Azogues', 3, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(19, 'Biblián', 3, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(20, 'Déleg', 3, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(21, 'Cañar', 3, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(22, 'El Tambo', 3, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(23, 'Suscal', 3, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(24, 'Tulcán', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(25, 'Montufar', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(26, 'Bolívar', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(27, 'Huaca', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(28, 'Mira', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(29, 'Espejo', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(30, 'San Pedro de Huaca', 4, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(31, 'Riobamba', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(32, 'Alausí', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(33, 'Chambo', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(34, 'Chunchi', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(35, 'Guamote', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(36, 'Penipe', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(37, 'Colta', 5, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(38, 'Latacunga', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(39, 'Saquisilí', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(40, 'Salcedo', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(41, 'Sigchos', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(42, 'Pangua', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(43, 'La Maná', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(44, 'Quito (Distrito Metropolitano)', 6, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(45, 'Machala', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(46, 'Chilla', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(47, 'Pasaje', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(48, 'Santa Rosa', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(49, 'Balsas', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(50, 'Arenillas', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(51, 'Huaquillas', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(52, 'Morales', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(53, 'Portovelo', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(54, 'Atahualpa', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(55, 'Huaquillas', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(56, 'Las Lajas', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(57, 'Marcabelí', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(58, 'Piñas', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(59, 'Zaruma', 7, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(60, 'Atacames', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(61, 'Esmeraldas', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(62, 'Eloy Alfaro', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(63, 'Muros', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(64, 'Quinindé', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(65, 'Rioverde', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(66, 'San Lorenzo', 8, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(67, 'Isabela', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(68, 'San Cristóbal', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(69, 'Santa Cruz', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(70, 'Baltra', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(71, 'San Francisco', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(72, 'Floreana', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(73, 'Santa Fe', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(74, 'Jervis', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(75, 'Marchena', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(76, 'Rábida', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(77, 'Seymour Norte', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(78, 'Wolf', 9, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(79, 'Alfredo Baquerizo Moreno (Simón Bolívar)', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(80, 'Baba', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(81, 'Balzar', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(82, 'Colonia Yaguachi', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(83, 'Daule', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(84, 'Durán', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(85, 'El Empalme', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(86, 'El Triunfo', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(87, 'General Villamil Playas', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(88, 'Guayaquil', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(89, 'Isidro Carbo', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(90, 'La Concordia', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(91, 'Milagro', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(92, 'Naranjito', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(93, 'Oncativo', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(94, 'Pedro Carbo', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(95, 'Quimsacocha', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(96, 'Salinas', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(97, 'Samborondón', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(98, 'Santa Elena', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(99, 'Yaguachi', 10, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(100, 'Antonio Ante', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(101, 'Cotacachi', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(102, 'Ibarra', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(103, 'Otavalo', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(104, 'Pijal', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(105, 'Quito', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(106, 'San Miguel de Urcuquí', 11, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(107, 'Loja', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(108, 'Saraguro', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(109, 'Calvas', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(110, 'Espíndola', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(111, 'Chaguarpamba', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(112, 'Paltas', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(113, 'Celica', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(114, 'Quilanga', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(115, 'Sozoranga', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(116, 'Gonzanamá', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(117, 'Macará', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(118, 'Catamayo', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(119, 'Zapotillo', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(120, 'Loja (Rural)', 12, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(121, 'Babahoyo', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(122, 'Quevedo', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(123, 'Vinces', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(124, 'Ventanas', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(125, 'Urdaneta', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(126, 'Baba', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(127, 'Montalvo', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(128, 'Palestina', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(129, 'Valencia', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(130, 'Quinsaloma', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(131, 'Mocache', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(132, 'Buena Fe', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(133, 'Valencia (Rural)', 13, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(134, '24 de Mayo', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(135, 'Bolívar', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(136, 'Chone', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(137, 'El Carmen', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(138, 'Flavio Alfaro', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(139, 'Jipijapa', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(140, 'Junín', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(141, 'Kantón Manta', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(142, 'Montecristi', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(143, 'Pajal', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(144, 'Pedernales', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(145, 'Portoviejo', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(146, 'Puerto López', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(147, 'Quito', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(148, 'Rocafuerte', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(149, 'Santa Ana', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(150, 'Sucre', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(151, 'Tosagua', 14, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(152, 'Morona', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(153, 'Gualaquiza', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(154, 'Sucúa', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(155, 'Limón Indanza', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(156, 'Tiicya', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(157, 'Palora', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(158, 'Taisha', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(159, 'Yantzatza', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(160, 'Patuca', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(161, 'Rivera', 15, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(162, 'Archidona', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(163, 'Atahualpa', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(164, 'Baeza', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(165, 'Carlos Julio Arosemena Tola', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(166, 'El Chaco', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(167, 'Quijos', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(168, 'Tena', 16, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(169, 'Aguarico', 17, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(170, 'La Joya de los Sachas', 17, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(171, 'Loreto', 17, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(172, 'Orellana', 17, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(173, 'Pastaza', 18, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(174, 'Mera', 18, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(175, 'Santa Clara', 18, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(176, 'Arajuno', 18, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(177, 'Santiago de Mera', 18, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(178, 'Quito', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(179, 'Mejía', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(180, 'Rumiñahui', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(181, 'Pedro Vicente Maldonado', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(182, 'Diego Alonso Sánchez', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(183, 'Los Chillos', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(184, 'Eloy Alfaro', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(185, 'Manuela Sáenz', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(186, 'Quito Norte', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(187, 'Sangolquí', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(188, 'Pifo', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(189, 'Mariscal Sucre', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(190, 'Pedro Moncayo', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(191, 'Mejía', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(192, 'Rumiñahui', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(193, 'Pedro Vicente Maldonado', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(194, 'Diego Alonso Sánchez', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(195, 'Los Chillos', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(196, 'Eloy Alfaro', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(197, 'Manuela Sáenz', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(198, 'Quito Norte', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(199, 'Sangolquí', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(200, 'Pifo', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(201, 'Mariscal Sucre', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(202, 'Pedro Moncayo', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(203, 'Mejía', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(204, 'Rumiñahui', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(205, 'Pedro Vicente Maldonado', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(206, 'Diego Alonso Sánchez', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(207, 'Los Chillos', 19, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(208, 'Santa Elena', 20, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(209, 'Salinas', 20, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(210, 'La Libertad', 20, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(211, 'Atahualpa', 20, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(212, 'Shushufindi', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(213, 'Sucumbíos', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(214, 'Cascales', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(215, 'Gonzalo Pizarro', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(216, 'Putumayo', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(217, 'Lardón', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(218, 'Cachabi', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(219, 'Huaca', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(220, 'Viña del Río', 21, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(221, 'Ambato', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(222, 'Baños de Agua Santa', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(223, 'Cevallos', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(224, 'Mocha', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(225, 'Patate', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(226, 'Quero', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(227, 'Tisaleo', 22, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(228, 'Zamora', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(229, 'Chinchipe', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(230, 'Yantzaza', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(231, 'Nangaritza', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(232, 'Palanda', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(233, 'El Pangui', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(234, 'Yacuambi', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(235, 'Paquisha', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(236, 'Timbara', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(237, 'Nano', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(238, 'Chinchipe', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(239, 'Yantzaza', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(240, 'Nangaritza', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(241, 'Palanda', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(242, 'El Pangui', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(243, 'Yacuambi', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(244, 'Paquisha', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(245, 'Timbara', 23, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(246, 'Nano', 23, '2024-05-26 22:51:19', '2024-05-26 22:51:19'),
(247, 'Santo Domingo', 24, '2024-05-26 22:51:19', '2024-05-26 22:51:19'),
(248, 'La Concordia', 24, '2024-05-26 22:51:19', '2024-05-26 22:51:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `matriculado` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DEACTIVATE',
  `provincia_id` bigint(20) UNSIGNED NOT NULL,
  `canton_id` bigint(20) UNSIGNED NOT NULL,
  `asesor_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `direccion`, `telefono`, `correo`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Entre calle Venezuela y Avenida Pedro Vicente Maldonado esquina', '+593986635388', 'informacion@itecsurcosta.com', '20240526180320.png', '2024-05-26 22:51:18', '2024-05-26 23:03:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cualidades`
--

CREATE TABLE `cualidades` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cualidades`
--

INSERT INTO `cualidades` (`id`, `titulo`, `parrafo1`, `imagen`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Liderazgo Efectivo', 'El liderazgo efectivo es clave para cualquier organización exitosa. Un buen líder no solo dirige, sino que también inspira y motiva al equipo', 'img/ejemplo-liderazgo.jpg', 'ACTIVE', '2024-05-26 22:51:18', '2024-05-26 22:51:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantEstudiante` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `facultad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `cantEstudiante`, `duracion`, `imagen`, `status`, `facultad_id`, `created_at`, `updated_at`) VALUES
(1, 'Tecnico Superior en Enfermeria', '15', '5', '20240526180913.jpg', 'ACTIVE', 1, '2024-05-26 23:09:13', '2024-05-26 23:09:13'),
(2, 'Tecnología superior en Seguridad Ciudadana y orden Publico', '15', '5', '20240526180944.jpg', 'ACTIVE', 3, '2024-05-26 23:09:44', '2024-05-26 23:09:44'),
(3, 'Tecnología Superior en Rehabilitación Física', '15', '5', '20240526181013.jpg', 'ACTIVE', 1, '2024-05-26 23:10:13', '2024-05-26 23:10:13'),
(4, 'Tecnología Superior en Planificación Y Gestión de Transito', '15', '5', '20240526181309.jpg', 'ACTIVE', 3, '2024-05-26 23:13:09', '2024-05-26 23:13:09'),
(5, 'Tecnología Superior en Estética Integral', '15', '5', '20240526181340.jpg', 'ACTIVE', 1, '2024-05-26 23:13:40', '2024-05-26 23:13:40'),
(6, 'Tecnologia Superior en Entrenamiento Deportivo', '15', '5', '20240526181440.jpg', 'ACTIVE', 1, '2024-05-26 23:14:40', '2024-05-26 23:14:40'),
(7, 'Tecnología Superior en Emergencias Medicas', '15', '5', '20240526181537.jpg', 'ACTIVE', 1, '2024-05-26 23:15:37', '2024-05-26 23:15:37'),
(8, 'Tecnologia Superior en Desarrollo de Software', '15', '5', '20240526181606.jpg', 'ACTIVE', 4, '2024-05-26 23:16:06', '2024-05-26 23:16:06'),
(9, 'Tecnologia Superior en Desarrollo de Infantil', '15', '5', '20240526181646.jpg', 'ACTIVE', 2, '2024-05-26 23:16:46', '2024-05-26 23:16:46'),
(10, 'Tecnología Superior en Control de Incendios y Operaciones de Rescate', '15', '5', '20240526181755.jpg', 'ACTIVE', 3, '2024-05-26 23:17:55', '2024-05-26 23:17:55'),
(11, 'Tecnologia Superior en Ciberseguridad', '15', '5', '20240526181827.jpg', 'ACTIVE', 4, '2024-05-26 23:18:27', '2024-05-26 23:18:27'),
(12, 'Tecnologia Superior en Asistencia Pedagogica', '15', '5', '20240526181930.jpg', 'ACTIVE', 2, '2024-05-26 23:19:30', '2024-05-26 23:19:30'),
(13, 'Tecnologia Superior en Asistencia Pedagogica', '15', '5', '20240526182002.jpg', 'ACTIVE', 5, '2024-05-26 23:20:02', '2024-05-26 23:20:02'),
(14, 'Tecnología Superior en Administración', '15', '5', '20240526182043.jpg', 'ACTIVE', 5, '2024-05-26 23:20:43', '2024-05-26 23:20:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombre`, `ruc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CRUZ ROJA', '1234567895', 'ACTIVE', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(2, 'CERTICURSA', '1234567893', 'ACTIVE', '2024-05-26 22:51:17', '2024-05-26 22:51:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultads`
--

CREATE TABLE `facultads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `facultads`
--

INSERT INTO `facultads` (`id`, `titulo`, `status`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'SALUD', 'ACTIVE', '20240526180418.jpeg', '2024-05-26 23:04:18', '2024-05-26 23:04:18'),
(2, 'EDUCACION', 'ACTIVE', '20240526180429.jpeg', '2024-05-26 23:04:29', '2024-05-26 23:04:29'),
(3, 'ORDEN PUBLICO Y SEGURIDAD CIUDADANA', 'ACTIVE', '20240526180440.jpeg', '2024-05-26 23:04:40', '2024-05-26 23:04:40'),
(4, 'TICS', 'ACTIVE', '20240526180450.jpeg', '2024-05-26 23:04:50', '2024-05-26 23:04:50'),
(5, 'DERECHO Y ADMINISTRACION', 'ACTIVE', '20240526180506.jpeg', '2024-05-26 23:05:06', '2024-05-26 23:05:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicios`
--

CREATE TABLE `inicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parrafo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `nombreLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicios`
--

INSERT INTO `inicios` (`id`, `titulo`, `subtitulo`, `parrafo`, `status`, `nombreLink`, `link`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Instituto Superior Universitario Compu Sur', 'ITECSUR', 'Bienvenido(a), somos una institución sólida al servicio de la juventud ecuatoriana formando profesionales desde 1994 a nivel Técnico y Tecnológico con títulos registrados en la Senescyt. Además, certificamos a miles de personas mediante nuestros cursos de educación continua.', 'ACTIVE', 'REQUISITOS', 'https://drive.google.com/drive/folders/1VqJ2GK0Dgjkw5TgOyS2eXJKYOyCUfU5R?usp=sharing', '20240526175353.jpg', '2024-05-26 22:51:17', '2024-05-26 22:53:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `empresa_id` bigint(20) UNSIGNED NOT NULL,
  `asesor_id` bigint(20) UNSIGNED NOT NULL,
  `cliente_id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `fecha_matricula` date NOT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_03_09_022107_create_provincias_table', 1),
(5, '2024_03_09_022116_create_cantons_table', 1),
(6, '2024_03_09_022118_create_facultads_table', 1),
(7, '2024_03_09_022119_create_cursos_table', 1),
(8, '2024_03_09_022120_create_empresas_table', 1),
(9, '2024_03_10_165127_create_asesors_table', 1),
(10, '2024_03_10_165128_create_clientes_table', 1),
(11, '2024_03_25_170011_create_permission_tables', 1),
(12, '2024_04_08_020629_create_inicios_table', 1),
(13, '2024_04_08_141048_create_sobres_table', 1),
(14, '2024_04_10_201515_create_cualidades_table', 1),
(15, '2024_04_18_132749_create_redes_table', 1),
(16, '2024_04_18_165354_create_contactos_table', 1),
(17, '2024_04_19_143426_create_matriculas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'crear.inicio', 'Crear una nueva noticia', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(2, 'editar.inicio', 'editar noticia', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(3, 'ver.inicio', 'ver noticia', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(4, 'desactivar.inicio', 'desactivar noticias', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(5, 'crear.rol', 'Crear nuevo Rol', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(6, 'editar.rol', 'editar Rol', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(7, 'crear.cualidades', 'crear nueva cualidad', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(8, 'editar.cualidades', 'editar cualidad', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(9, 'ver.cualidades', 'ver cualidad', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(10, 'desactivar.cualidades', 'desactivar cualidad', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(11, 'crear.empresa', 'crear nueva empresa', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(12, 'editar.empresa', 'editar empresa', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(13, 'ver.empresa', 'ver empresa', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(14, 'desactivar.empresa', 'desactivar empresa', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(15, 'editar.sobre', 'editar Sobre Nosotros', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(16, 'crear.carrera', 'crear nueva carrera', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(17, 'editar.carrera', 'editar carrera', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(18, 'ver.carrera', 'ver carrera', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(19, 'desactivar.carrera', 'desactivar carrera', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(20, 'crear.facultad', 'crear nueva facultad', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(21, 'editar.facultad', 'editar facultad', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(22, 'ver.facultad', 'ver facultad', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(23, 'desactivar.facultad', 'desactivar facultad', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(24, 'editar.contacto', 'editar informacion de la empresa', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(25, 'crear.redes', 'crear nueva red social', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(26, 'editar.redes', 'editar red social', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(27, 'ver.redes', 'ver red social', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(28, 'desactivar.redes', 'desactivar red social', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(29, 'crear.asesor', 'crear nuevo asesor', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(30, 'admin.asesor', 'crear nuevo Administraor de Asesor', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(31, 'editar.asesor', 'editar asesor', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(32, 'ver.asesor', 'ver asesor', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(33, 'desactivar.asesor', 'desactivar asesor', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(34, 'ver.usuario', 'ver usuario', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(35, 'editar.usuario', ' editar rol de usuario', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(36, 'desactivar.usuario', 'desactivar usuario', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(37, 'crear.matricula', ' crear matricula', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(38, 'ver.matricula', ' visualizar matricula', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(39, 'crear.cliente', ' crear cliente', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(40, 'editar.cliente', ' editar cliente', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(41, 'ver.cliente', ' ver cliente', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(42, 'desactivar.cliente', ' desactivar cliente', 'web', '2024-05-26 22:51:18', '2024-05-26 22:51:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Azuay', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(2, 'Bolívar', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(3, 'Cañar', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(4, 'Carchi', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(5, 'Chimborazo', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(6, 'Cotopaxi', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(7, 'El Oro', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(8, 'Esmeraldas', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(9, 'Galápagos', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(10, 'Guayas', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(11, 'Imbabura', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(12, 'Loja', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(13, 'Los Ríos', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(14, 'Manabí', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(15, 'Morona Santiago', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(16, 'Napo', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(17, 'Orellana', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(18, 'Pastaza', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(19, 'Pichincha', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(20, 'Santa Elena', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(21, 'Sucumbíos', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(22, 'Tungurahua', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(23, 'Zamora Chinchipe', '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(24, 'Santo Domingo de los Tsáchilas', '2024-05-26 22:51:18', '2024-05-26 22:51:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'administador', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(2, 'adminAsesor', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17'),
(3, 'Asesor', 'web', '2024-05-26 22:51:17', '2024-05-26 22:51:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(29, 2),
(30, 1),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 3),
(38, 1),
(38, 2),
(38, 3),
(39, 1),
(39, 2),
(39, 3),
(40, 1),
(40, 2),
(41, 1),
(42, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobres`
--

CREATE TABLE `sobres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parrafo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parrafo2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloLink` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sobres`
--

INSERT INTO `sobres` (`id`, `parrafo1`, `parrafo2`, `tituloLink`, `status`, `link`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Misión\r\nFormar profesionales de niveles técnico, tecnológico, superior universitario y/o de posgrado con carácter humanista, científico, de pensamiento autocrítico, innovador y emprendedor, con criterios de formación autodidacta y principios de trabajo orientados al servicio, a través de un enfoque de calidad, mejoramiento continuo y con capacidad para generar estrategias en beneficio del desarrollo.', 'Visión\r\nSer una institución académica, investigativa y de vinculación con la sociedad de referencia nacional, líder en la formación de profesionales de niveles técnico, tecnológico, superior universitario y/o de posgrado con vocación de servicio, integralidad y excelencia.', 'Comunícate', 'ACTIVE', 'http://127.0.0.1:8000', '20240526175530.jpeg', '2024-05-26 22:51:18', '2024-05-26 22:55:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DEACTIVATE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@itecsurcosta.com', 'ACTIVE', NULL, '$2y$10$yTQ7Pi0BcYd/npo1ZpC5h.t3iS7QSCd7ADHd0x7zaHFiZBOWZ.l1C', NULL, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(2, 'Finanzas', 'finanzas@itecsurcosta.com', 'ACTIVE', NULL, '$2y$10$OFBRzjiXmUPQ4xuOToV7W.W/l.eRCgCu.zCZHqoaCAOSvZzT3nBjS', NULL, '2024-05-26 22:51:18', '2024-05-26 22:51:18'),
(3, 'Marketing', 'marketing@itecsurcosta.com', 'ACTIVE', NULL, '$2y$10$ubOyd4pXRnYh1smptu96MuJl6EJ81t.Ncw6QkJefnLGdkrtNfO13u', NULL, '2024-05-26 22:51:18', '2024-05-26 22:51:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesors`
--
ALTER TABLE `asesors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asesors_provincia_id_foreign` (`provincia_id`),
  ADD KEY `asesors_canton_id_foreign` (`canton_id`),
  ADD KEY `asesors_empresa_id_foreign` (`empresa_id`);

--
-- Indices de la tabla `cantons`
--
ALTER TABLE `cantons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cantons_provincia_id_foreign` (`provincia_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_provincia_id_foreign` (`provincia_id`),
  ADD KEY `clientes_canton_id_foreign` (`canton_id`),
  ADD KEY `clientes_asesor_id_foreign` (`asesor_id`),
  ADD KEY `clientes_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cualidades`
--
ALTER TABLE `cualidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursos_facultad_id_foreign` (`facultad_id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facultads`
--
ALTER TABLE `facultads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `inicios`
--
ALTER TABLE `inicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matriculas_empresa_id_foreign` (`empresa_id`),
  ADD KEY `matriculas_asesor_id_foreign` (`asesor_id`),
  ADD KEY `matriculas_cliente_id_foreign` (`cliente_id`),
  ADD KEY `matriculas_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sobres`
--
ALTER TABLE `sobres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesors`
--
ALTER TABLE `asesors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cantons`
--
ALTER TABLE `cantons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cualidades`
--
ALTER TABLE `cualidades`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `facultads`
--
ALTER TABLE `facultads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inicios`
--
ALTER TABLE `inicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sobres`
--
ALTER TABLE `sobres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesors`
--
ALTER TABLE `asesors`
  ADD CONSTRAINT `asesors_canton_id_foreign` FOREIGN KEY (`canton_id`) REFERENCES `cantons` (`id`),
  ADD CONSTRAINT `asesors_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`),
  ADD CONSTRAINT `asesors_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`);

--
-- Filtros para la tabla `cantons`
--
ALTER TABLE `cantons`
  ADD CONSTRAINT `cantons_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_asesor_id_foreign` FOREIGN KEY (`asesor_id`) REFERENCES `asesors` (`id`),
  ADD CONSTRAINT `clientes_canton_id_foreign` FOREIGN KEY (`canton_id`) REFERENCES `cantons` (`id`),
  ADD CONSTRAINT `clientes_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `clientes_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_facultad_id_foreign` FOREIGN KEY (`facultad_id`) REFERENCES `facultads` (`id`);

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_asesor_id_foreign` FOREIGN KEY (`asesor_id`) REFERENCES `asesors` (`id`),
  ADD CONSTRAINT `matriculas_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `matriculas_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `matriculas_empresa_id_foreign` FOREIGN KEY (`empresa_id`) REFERENCES `empresas` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
