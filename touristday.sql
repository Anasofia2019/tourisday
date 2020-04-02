-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-04-2020 a las 03:36:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `touristday`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarios`
--

CREATE TABLE `tbl_comentarios` (
  `id_comentario` int(4) NOT NULL,
  `comentario_turista` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `puntuacion` int(1) DEFAULT NULL,
  `id_tu` int(15) NOT NULL,
  `id_paq` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_fotos_paquetes`
--

CREATE TABLE `tbl_fotos_paquetes` (
  `id` int(4) NOT NULL,
  `fotos_paquete` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_guias`
--

CREATE TABLE `tbl_guias` (
  `cedula` int(12) NOT NULL,
  `nombre_guia_1` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_guia_2` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_guia_1` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_guia_2` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_n_guia` date NOT NULL,
  `telefono_guia` int(10) NOT NULL,
  `correo_guia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_guia` text COLLATE utf8_spanish_ci NOT NULL,
  `contra_guia` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto_guia` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_guias`
--

INSERT INTO `tbl_guias` (`cedula`, `nombre_guia_1`, `nombre_guia_2`, `apellido_guia_1`, `apellido_guia_2`, `fecha_n_guia`, `telefono_guia`, `correo_guia`, `ciudad_guia`, `contra_guia`, `foto_guia`) VALUES
(2147483647, 'ana', 'Sofia', 'Agudelo', 'Blandon', '2000-05-02', 333342344, 'asa@asas.sa', 'Amagá', '123', 'img_perfil/chiste.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial_adquirido`
--

CREATE TABLE `tbl_historial_adquirido` (
  `id_compra` int(11) NOT NULL,
  `id_paquetes` int(4) NOT NULL,
  `doc_turista` int(15) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_historial_adquirido`
--

INSERT INTO `tbl_historial_adquirido` (`id_compra`, `id_paquetes`, `doc_turista`, `fecha_compra`) VALUES
(16, 1, 2111111113, '2020-04-01 21:03:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paquetes`
--

CREATE TABLE `tbl_paquetes` (
  `id_paquetes` int(4) NOT NULL,
  `cedula` int(12) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_paquetes`
--

INSERT INTO `tbl_paquetes` (`id_paquetes`, `cedula`, `titulo`, `descripcion`, `url_image`, `estado`, `orden`) VALUES
(1, 13546, 'Enciso', 'Comer salchipapas', 'descarga.jpg', 1, 1),
(298, 33, 'Hola', 'todos', 'tatuaje (1).jpg', 1, 2),
(306, 333342344, 'turismo', 'Paracaidismo san fenix', 'tatuaje-rosa-blanca-padilla_89314f31.jpg', 1, 3),
(308, 333342344, '33', 'mmm', 'infinito-tatuaje.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_turistas`
--

CREATE TABLE `tbl_turistas` (
  `documento_turista` int(15) NOT NULL,
  `nombre_turista_1` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_turista_2` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_turista_1` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_turista_2` text COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad_turista` text COLLATE utf8_spanish_ci NOT NULL,
  `telefono_turista` int(11) NOT NULL,
  `f_n_turista` date NOT NULL,
  `correo_turista` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `contra_turista` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto_turista` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_turistas`
--

INSERT INTO `tbl_turistas` (`documento_turista`, `nombre_turista_1`, `nombre_turista_2`, `apellido_turista_1`, `apellido_turista_2`, `nacionalidad_turista`, `telefono_turista`, `f_n_turista`, `correo_turista`, `contra_turista`, `foto_turista`) VALUES
(2111111113, 'Ana', 'Sofia', 'Agudelo', 'aaa', 'Afganistán', 31111111, '2000-03-03', 'ana933749@gmail.com', '123', 'img_perfil/0a3e49515afed06a80c9f3851ac18b72.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id` (`id_paq`),
  ADD KEY `id_tu` (`id_tu`);

--
-- Indices de la tabla `tbl_fotos_paquetes`
--
ALTER TABLE `tbl_fotos_paquetes`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tbl_guias`
--
ALTER TABLE `tbl_guias`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `tbl_historial_adquirido`
--
ALTER TABLE `tbl_historial_adquirido`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `documento_turista` (`doc_turista`),
  ADD KEY `id_paquetes` (`id_paquetes`);

--
-- Indices de la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  ADD PRIMARY KEY (`id_paquetes`),
  ADD KEY `cedula_guia` (`cedula`);

--
-- Indices de la tabla `tbl_turistas`
--
ALTER TABLE `tbl_turistas`
  ADD PRIMARY KEY (`documento_turista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  MODIFY `id_comentario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_historial_adquirido`
--
ALTER TABLE `tbl_historial_adquirido`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  MODIFY `id_paquetes` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD CONSTRAINT `tbl_comentarios_ibfk_1` FOREIGN KEY (`id_paq`) REFERENCES `tbl_paquetes` (`id_paquetes`),
  ADD CONSTRAINT `tbl_comentarios_ibfk_2` FOREIGN KEY (`id_tu`) REFERENCES `tbl_turistas` (`documento_turista`);

--
-- Filtros para la tabla `tbl_fotos_paquetes`
--
ALTER TABLE `tbl_fotos_paquetes`
  ADD CONSTRAINT `tbl_fotos_paquetes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tbl_paquetes` (`id_paquetes`);

--
-- Filtros para la tabla `tbl_historial_adquirido`
--
ALTER TABLE `tbl_historial_adquirido`
  ADD CONSTRAINT `tbl_historial_adquirido_ibfk_1` FOREIGN KEY (`doc_turista`) REFERENCES `tbl_turistas` (`documento_turista`),
  ADD CONSTRAINT `tbl_historial_adquirido_ibfk_2` FOREIGN KEY (`id_paquetes`) REFERENCES `tbl_paquetes` (`id_paquetes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
