-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2020 a las 02:45:22
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

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
  `id_paq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_comentarios`
--

INSERT INTO `tbl_comentarios` (`id_comentario`, `comentario_turista`, `puntuacion`, `id_tu`, `id_paq`) VALUES
(1, 'me gustÃ³ mucho', 5, 2, 2),
(2, 'me gustÃ³ mucho x2', 4, 2, 2),
(3, 'adasd', 1, 2, 110);

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
(34, 'julian', 'camilo', 'martinez', 'ocampo', '2019-01-01', 1234567890, 'mmm@gmail.com', 'TitiribÃ­', '123', ''),
(2342, 'andre', 'felipe', 'perez', 'ceballos', '2019-01-01', 34234, '0', 'Girardota', 'c4ca4238a0b923820dcc509a6f75849b', ''),
(23132, 'sAA', 'asaa', 'agudelo', 'aaa', '2000-02-03', 323456722, 'ASAA@asaaa.as', 'Amagá', '123', 'img_perfil/karen-mendez88764.jpg'),
(100780, 'melano', 'rosas', 'atras', 'delante', '2020-03-02', 2147483647, 'melano@gmail.com', 'AmagÃ¡', '12341', 'img_perfil/fondo.jpeg'),
(123242, 'ana', 'maria', 'palermo', 'zabala', '2019-02-11', 1234, 'maria@gmail.com', 'Barbosa', '123', 'img_perfil/makarenko.jpg'),
(124125, 'andrea', 'valentina', 'jaramillo', 'perea', '2019-02-11', 12412, 'andre@gmail.com', 'AngelÃ³polis', '123', ''),
(567856, 'asdfgh', 'fdsdfgh', 'hgfdsdfgh', 'gfdsdfgh', '2019-02-11', 45678, 'aaa@gmail.com', 'AngelÃ³polis', '123', ''),
(1231242, 'camila', 'andrea', 'loaiza', 'velez', '2019-02-11', 1231231, 'velez@gmail.com', 'AngelÃ³polis', '111', ''),
(1241234, 'maicol', 'andres', 'perez', 'ramirez', '2019-02-11', 1241212, 'maicol@gmail.com', 'Barbosa', '123', ''),
(12412412, 'julio', 'm', 'zampayo', 'jaramillo', '2019-02-12', 123321, 'bb@gmail.com', 'Andes', '123', 'img_perfil/avatar.jpg'),
(23456789, 'ana', 'sofia', 'agudelo', 'blandon', '2008-12-31', 123456789, 'sofialamejor@gmail.com', 'Betania', '123', ''),
(114663634, 'ana', 'wqwq', 'qqwqe', 'qwqe', '2000-05-03', 2147483647, 'asann@asaaa.com', 'Amagá', '123', ''),
(1007808977, 'andre', 'felipe', 'perez', 'ceballos', '2019-11-05', 2147483647, 'aa@gmail.com', 'Girardota', '123', ''),
(1007896534, 'andre', 'felipe', 'perez', 'ceballos', '2019-02-28', 5678954, 'eduermisen@gmail.com', 'Girardota', '123', ''),
(1007896754, 'eduer', 'jaramillo', 'balvin', 'estarda', '2020-03-02', 349034564, 'eduerelpapa@gmail.com', 'AmagÃ¡', 'baby', 'img_perfil/avatar.jpg'),
(2147483647, 'ana', 'Sofia', 'Agudelo', 'Blandon', '2000-05-02', 333342344, 'asa@asas.sa', 'Amagá', '123', 'img_perfil/chiste.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial_adquirido`
--

CREATE TABLE `tbl_historial_adquirido` (
  `id_compra` int(11) NOT NULL,
  `id_paquetes` int(4) NOT NULL,
  `doc_turista` int(15) NOT NULL,
  `fecha_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_historial_adquirido`
--

INSERT INTO `tbl_historial_adquirido` (`id_compra`, `id_paquetes`, `doc_turista`, `fecha_compra`) VALUES
(1, 2, 2, '2020-03-26 20:30:01'),
(2, 110, 2, '2020-03-26 20:46:28'),
(3, 1, 2, '2020-03-26 21:41:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paquetes`
--

CREATE TABLE `tbl_paquetes` (
  `id_paquete` int(11) NOT NULL,
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

INSERT INTO `tbl_paquetes` (`id_paquete`, `cedula`, `titulo`, `descripcion`, `url_image`, `estado`, `orden`) VALUES
(1, 0, 'Pueblito paisa', 'https://obedalvarado.pw/blog/sistema-inventario-simple-php/', '394f1feec2fbfd520cf5692860aca851.jpg', 1, 1),
(2, 0, 'Parque de los deseos', 'http://obedalvarado.pw/simple-invoice/', '8dc33298102e0e7f613602bf9fa94c76.jpg', 1, 2),
(17, 33299922, 'Sabaneta', 'Sabanta', '58ba6682d684e0f2b361c995294107c6.jpg', 1, 3),
(20, 2, 'asddsa', 'asddsa', 'asdasd', 1, 1),
(110, 333342344, 'Sabaneta', 'Hola', '0a3e49515afed06a80c9f3851ac18b72.jpg', 1, 25),
(117, 333311111, 'Cultural', 'Hola a todos', '1f53d9bcde8efbce721ec06c6d1f09e7.jpg', 1, 27);

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
(2, 'ASD', 'ASD', 'ASD', 'ASD', 'Albania', 3, '2018-11-04', 'a@a.a', '123', ''),
(4, 'jorman', 'santiago', 'patillo', 'zapata', 'AfganistÃ¡n', 2147483647, '2019-01-01', 'a@s.s', '1234', ''),
(321, 'asdasf', 'afasflaskfja', 'asflkjaslaksj', 'alskfajsk', 'andorra', 235236, '2019-01-01', 'lll@gmail.com', 'ppp', ''),
(343, 'san', 'ti', 'a', 'go', 'Albania', 23, '2019-01-01', '1@2.com', 'mmm', ''),
(87654, 'danilo', 'a', 'perez', 'escobar', 'Albania', 45678, '2019-02-11', 'a@gmail.com', '123', 'img_perfil/fondo 3d.jpg'),
(325253, 'eduer', 'de jesus', 'jaramillo', 'balbin', 'Albania', 3423523, '2001-12-31', 'eduertupapa@gmail.com', '123', ''),
(2352353, 'daniel', 'esteban', 'perez', 'andrade', 'Antigua y Barbuda', 253523625, '2020-12-02', 'andress@gmail.com', '123', ''),
(345678765, 'jorman', 'de jesus', 'osorio', 'zabala', 'AfganistÃ¡n', 2147483647, '2019-02-11', 'jormam@gmail.com', '222', 'img_perfil/eli.jpg'),
(485438683, 'bertulia', 'de ossa', 'ortiz', 'gom', 'Australia', 2147483647, '2019-12-04', 'bejhfpidsnkgnspr@gmail.com', 'colegio', ''),
(1007807779, 'raul', 'te espera', 'delante', 'atras', 'AfganistÃ¡n', 2147483647, '2020-03-10', 'edin@gmail.com', '123', 'img_perfil/facebook.png'),
(1007905678, 'arturo', 'calles', 'marin', 'peres', 'AfganistÃ¡n', 2147483647, '2012-01-01', 'calle@gmail.com', 'pepo', ''),
(2111111113, 'Jose', 'Manuel', 'Agudelo', 'aaa', 'Afganistán', 31111111, '2000-03-03', 'ana933749@gmail.com', '123', 'img_perfil/0a3e49515afed06a80c9f3851ac18b72.jpg'),
(2147483647, 'te amo', 'santiago', 'baby', 'no me odies', 'AfganistÃ¡n', 2147483647, '2020-03-10', 'santymy@gmail.com', '123', 'img_perfil/p2.JPG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_comentarios`
--
ALTER TABLE `tbl_comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id` (`id_tu`);

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
  ADD KEY `documento_turista` (`doc_turista`);

--
-- Indices de la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  ADD PRIMARY KEY (`id_paquete`),
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
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_paquetes`
--
ALTER TABLE `tbl_paquetes`
  MODIFY `id_paquete` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
