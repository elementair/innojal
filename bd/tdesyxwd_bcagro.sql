-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2018 a las 17:38:58
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tdesyxwd_bcagro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion`
--

CREATE TABLE `accion` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `seccion_menu_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `observaciones` text,
  `icono` varchar(200) NOT NULL,
  `visible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accion`
--

INSERT INTO `accion` (`id`, `descripcion`, `seccion_menu_id`, `status`, `observaciones`, `icono`, `visible`) VALUES
(1, 'Alta', 1, 1, 'xxxx', 'glyphicon glyphicon-plus', 1),
(2, 'Lista', 1, 1, '', 'glyphicon glyphicon-list-alt', 1),
(3, 'Lista_ajax', 1, 1, '', 'glyphicon glyphicon-list-alt', 0),
(4, 'Alta_bd', 1, 1, '', 'glyphicon glyphicon-list-alt', 0),
(5, 'Elimina_bd', 1, 1, '', 'glyphicon glyphicon-minus', 0),
(6, 'Desactiva_bd', 1, 1, '', 'glyphicon glyphicon-trash', 0),
(7, 'Activa_bd', 1, 1, '', 'glyphicon glyphicon-ok', 0),
(8, 'Modifica', 1, 1, '', 'glyphicon glyphicon-pencil', 0),
(9, 'Modifica_bd', 1, 1, '', 'glyphicon glyphicon-pencil', 0),
(10, 'Alta', 2, 1, '', 'glyphicon glyphicon-plus', 1),
(11, 'Lista', 2, 1, '', 'glyphicon glyphicon-list-alt', 1),
(12, 'Lista_ajax', 2, 1, '', 'glyphicon glyphicon-list-alt', 0),
(13, 'Alta_bd', 2, 1, '', 'glyphicon glyphicon-list-alt', 0),
(14, 'Elimina_bd', 2, 1, '', 'glyphicon glyphicon-minus', 0),
(15, 'Desactiva_bd', 2, 1, '', 'glyphicon glyphicon-trash', 0),
(16, 'Activa_bd', 2, 1, '', 'glyphicon glyphicon-ok', 0),
(17, 'Modifica', 2, 1, '', 'glyphicon glyphicon-pencil', 0),
(18, 'Modifica_bd', 2, 1, '', 'glyphicon glyphicon-pencil', 0),
(19, 'Alta', 3, 1, '', 'glyphicon glyphicon-plus', 1),
(20, 'Lista', 3, 1, '', 'glyphicon glyphicon-list-alt', 1),
(21, 'Lista_ajax', 3, 1, '', 'glyphicon glyphicon-list-alt', 0),
(22, 'Alta_bd', 3, 1, '', 'glyphicon glyphicon-list-alt', 0),
(23, 'Elimina_bd', 3, 1, '', 'glyphicon glyphicon-minus', 0),
(24, 'Desactiva_bd', 3, 1, '', 'glyphicon glyphicon-trash', 0),
(25, 'Activa_bd', 3, 1, '', 'glyphicon glyphicon-ok', 0),
(26, 'Modifica', 3, 1, '', 'glyphicon glyphicon-pencil', 0),
(27, 'Modifica_bd', 3, 1, '', 'glyphicon glyphicon-pencil', 0),
(28, 'Alta', 4, 1, '', 'glyphicon glyphicon-plus', 1),
(29, 'Lista', 4, 1, '', 'glyphicon glyphicon-list-alt', 1),
(30, 'Lista_ajax', 4, 1, '', 'glyphicon glyphicon-list-alt', 0),
(31, 'Alta_bd', 4, 1, '', 'glyphicon glyphicon-list-alt', 0),
(32, 'Elimina_bd', 4, 1, '', 'glyphicon glyphicon-minus', 0),
(33, 'Desactiva_bd', 4, 1, '', 'glyphicon glyphicon-trash', 0),
(34, 'Activa_bd', 4, 1, '', 'glyphicon glyphicon-ok', 0),
(35, 'Modifica', 4, 1, '', 'glyphicon glyphicon-pencil', 0),
(36, 'Modifica_bd', 4, 1, '', 'glyphicon glyphicon-pencil', 0),
(37, 'Alta', 5, 1, '', 'glyphicon glyphicon-plus', 1),
(38, 'Lista', 5, 1, '', 'glyphicon glyphicon-list-alt', 1),
(39, 'Lista_ajax', 5, 1, '', 'glyphicon glyphicon-list-alt', 0),
(40, 'Alta_bd', 5, 1, '', 'glyphicon glyphicon-list-alt', 0),
(41, 'Elimina_bd', 5, 1, '', 'glyphicon glyphicon-minus', 0),
(42, 'Desactiva_bd', 5, 1, '', 'glyphicon glyphicon-trash', 0),
(43, 'Activa_bd', 5, 1, '', 'glyphicon glyphicon-ok', 0),
(44, 'Modifica', 5, 1, '', 'glyphicon glyphicon-pencil', 0),
(45, 'Modifica_bd', 5, 1, '', 'glyphicon glyphicon-pencil', 0),
(46, 'Alta', 6, 1, '', 'glyphicon glyphicon-plus', 1),
(47, 'Lista', 6, 1, '', 'glyphicon glyphicon-list-alt', 1),
(48, 'Lista_ajax', 6, 1, '', 'glyphicon glyphicon-list-alt', 0),
(49, 'Alta_bd', 6, 1, '', 'glyphicon glyphicon-list-alt', 0),
(50, 'Elimina_bd', 6, 1, '', 'glyphicon glyphicon-minus', 0),
(51, 'Inicio', 7, 1, '', 'glyphicon glyphicon-thumbs-up', 1),
(52, 'Logout', 7, 1, '', 'glyphicon glyphicon-off', 1),
(137, 'asigna_accion', 1, 1, '', 'glyphicon glyphicon-usd', 0),
(138, 'agrega_accion_bd', 1, 1, '', 'glyphicon glyphicon-usd', 0),
(139, 'elimina_accion_bd', 1, 1, '', 'glyphicon glyphicon-usd', 0),
(284, 'alta', 44, 1, '', 'fwf wf ew f wef', 1),
(285, 'alta_bd', 44, 1, NULL, 'dwcd  dw', NULL),
(286, 'lista', 44, 1, NULL, 'wdd wd w dw', 1),
(287, 'modifica', 44, 1, 'ewf', 'dwee ', NULL),
(288, 'modifica_bd', 44, 1, 'wef', 'wefwfe', NULL),
(292, 'lista_ajax', 44, 1, 'weew', 'dwew', NULL),
(295, 'alta', 45, 1, NULL, 'dwfwfw', 1),
(296, 'alta_bd', 45, 1, NULL, 'dwdw', NULL),
(297, 'lista', 45, 1, NULL, 'wefewf', 1),
(298, 'lista_ajax', 45, 1, NULL, 'dwqdwq', NULL),
(299, 'modifica', 45, 1, NULL, 'f4f4', NULL),
(300, 'modifica_bd', 45, 1, NULL, 'wdqdqw', NULL),
(301, 'elimina_bd', 45, 1, NULL, 'wwff wf wq f', NULL),
(302, 'alta', 46, 1, '', 'xxxff', 1),
(303, 'alta_bd', 46, 1, NULL, 'dwf44', NULL),
(304, 'lista', 46, 1, NULL, 'wdf4', 1),
(305, 'lista_ajax', 46, 1, NULL, 'dwf4', NULL),
(306, 'modifica', 46, 1, NULL, 'df434', NULL),
(307, 'modifica_bd', 46, 1, NULL, '232132', NULL),
(308, 'alta', 47, 1, NULL, 'wewf', 1),
(309, 'lista', 47, 1, NULL, 'ewewf', 1),
(310, 'alta_bd', 47, 1, NULL, 'fffww', NULL),
(311, 'modifica', 47, 1, NULL, 'wdwdw', NULL),
(312, 'modifica_bd', 47, 1, NULL, 'wefewf', NULL),
(313, 'elimina_bd', 47, 1, 'ddew', 'wdwd', NULL),
(314, 'activa_bd', 47, 1, NULL, 'wdwwed', NULL),
(315, 'desactiva_bd', 47, 1, 'wddwe', 'weddw', NULL),
(316, 'alta', 48, 1, NULL, 'asdasd', 1),
(317, 'alta_bd', 48, 1, NULL, 'asdasd', NULL),
(318, 'elimina_bd', 48, 1, '', 'asdasd', 0),
(319, 'modifica', 48, 1, '', 'asd', 0),
(320, 'modifica_bd', 48, 1, NULL, 'asdsg', NULL),
(322, 'activa_bd', 48, 1, NULL, 'afgsfd', NULL),
(323, 'desactiva_bd', 48, 1, NULL, 'gdf', NULL),
(324, 'lista', 48, 1, NULL, 'asd', 1),
(325, 'lista_ajax', 48, 1, NULL, 'qe', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accion_grupo`
--

CREATE TABLE `accion_grupo` (
  `id` int(11) NOT NULL,
  `accion_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `accion_grupo`
--

INSERT INTO `accion_grupo` (`id`, `accion_id`, `grupo_id`) VALUES
(248, 1, 1),
(217, 2, 1),
(201, 3, 1),
(203, 4, 1),
(213, 5, 1),
(6, 6, 1),
(7, 7, 1),
(218, 8, 1),
(216, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(161, 13, 1),
(162, 14, 1),
(163, 15, 1),
(164, 16, 1),
(165, 17, 1),
(166, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(48, 48, 1),
(49, 49, 1),
(50, 50, 1),
(51, 51, 1),
(422, 51, 2),
(52, 52, 1),
(423, 52, 2),
(200, 137, 1),
(138, 138, 1),
(139, 139, 1),
(466, 284, 1),
(467, 285, 1),
(468, 286, 1),
(469, 287, 1),
(470, 288, 1),
(471, 292, 1),
(472, 295, 1),
(473, 296, 1),
(474, 297, 1),
(475, 298, 1),
(476, 299, 1),
(477, 300, 1),
(478, 301, 1),
(479, 302, 1),
(480, 303, 1),
(481, 304, 1),
(482, 305, 1),
(483, 306, 1),
(484, 307, 1),
(485, 308, 1),
(486, 309, 1),
(487, 310, 1),
(488, 311, 1),
(489, 312, 1),
(490, 313, 1),
(491, 314, 1),
(492, 315, 1),
(493, 316, 1),
(494, 317, 1),
(495, 318, 1),
(496, 319, 1),
(497, 320, 1),
(499, 322, 1),
(500, 323, 1),
(501, 324, 1),
(502, 325, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elemento_lista`
--

CREATE TABLE `elemento_lista` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `observaciones` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `seccion_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `elemento_lista`
--

INSERT INTO `elemento_lista` (`id`, `descripcion`, `observaciones`, `status`, `seccion_menu_id`) VALUES
(1, 'seccion_menu_descripcion', NULL, '1', 2),
(2, 'accion_descripcion', NULL, '1', 3),
(3, 'seccion_menu_descripcion', '', '1', 3),
(4, 'elemento_lista_descripcion', NULL, '1', 44),
(5, 'menu_descripcion', NULL, '1', 4),
(6, 'grupo_descripcion', NULL, '1', 1),
(7, 'video_index_descripcion', NULL, '1', 45),
(8, 'video_index_archivo', NULL, '1', 45),
(9, 'fondo_index_descripcion', NULL, '1', 46),
(10, 'fondo_index_archivo', 'cwe', '1', 46),
(11, 'grupo_producto_descripcion', NULL, '1', 47),
(12, 'producto_descripcion', NULL, '1', 48),
(13, 'grupo_producto_descripcion', NULL, '1', 48),
(14, 'producto_archivo', NULL, '1', 48),
(15, 'producto_caracteristicas', NULL, '1', 48);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondo_index`
--

CREATE TABLE `fondo_index` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `archivo` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fondo_index`
--

INSERT INTO `fondo_index` (`id`, `descripcion`, `archivo`, `status`, `observaciones`) VALUES
(1, 'g45g54', './views/fondo_index/archivos/g45g54_537379.jpg', 1, '2452'),
(2, 'wfwfew', './views/fondo_index/archivos/wfwfew_603532.jpg', 1, 'wdwdw'),
(3, 'fwfq343', './views/fondo_index/archivos/fwfq343_379382.jpg', 1, 'wfqfqwe'),
(4, 'fwfq343', './views/fondo_index/archivos/fwfq343_460463.jpg', 1, 'wfqfqwe'),
(5, 'dwwe', './views/fondo_index/archivos/dwwe_384242.jpg', 1, ''),
(6, 'ttt', './views/fondo_index/archivos/ttt_674479.mp4', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `descripcion`, `observaciones`, `status`) VALUES
(1, 'Admins', 'No cambiar los permisos', 1),
(2, 'facturacion', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_producto`
--

CREATE TABLE `grupo_producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo_producto`
--

INSERT INTO `grupo_producto` (`id`, `descripcion`, `observaciones`, `status`) VALUES
(2, 'Siembra', 'Productos para siembra', 1),
(3, 'Foliar', 'Nutrición Foliar', 1),
(4, 'Herbicida', 'Herbicida', 1),
(5, 'Plaguicida', 'Plaguicida', 1),
(6, 'Otros', 'Productos que no entran en las demas categorías', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `icono` varchar(200) NOT NULL,
  `observaciones` text,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `descripcion`, `icono`, `observaciones`, `status`) VALUES
(1, 'Seguridad', 'glyphicon glyphicon-lock', '', 1),
(2, 'Session', 'glyphicon glyphicon-user', '', 1),
(7, 'Generales', 'glyphicon glyphicon-cog', '', 1),
(10, 'Galeria', 'glyphicon glyphicon-picture', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `grupo_producto_id` int(11) NOT NULL,
  `archivo` varchar(200) DEFAULT NULL,
  `caracteristicas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `observaciones`, `status`, `grupo_producto_id`, `archivo`, `caracteristicas`) VALUES
(2, 'Anual_Reygrass', '', 1, 2, './views/producto/archivos/Anual_Reygrass_350181.png', ''),
(3, 'Austar', '', 1, 3, './views/producto/archivos/Austar_496235.png', ''),
(4, 'Bactiva 2', '', 1, 4, './views/producto/archivos/Bactiva 2_415191.png', ''),
(5, 'BC Mix Seeds', '', 1, 2, './views/producto/archivos/BC Mix Seeds_693234.png', NULL),
(6, 'Biosan', '', 1, 5, './views/producto/archivos/Biosan_562194.png', NULL),
(7, 'Eco Film', '', 1, 6, './views/producto/archivos/Eco Film_780163.png', NULL),
(8, 'Endospor', '', 1, 5, './views/producto/archivos/Endospor_393485.png', ''),
(9, 'Endospor Granulado', '', 1, 2, './views/producto/archivos/Endospor Granulado_294046.png', ''),
(10, 'Folicab', '', 1, 3, './views/producto/archivos/Folicab_206454.png', NULL),
(11, 'Fosfonat', '', 1, 5, './views/producto/archivos/Fosfonat_683754.png', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion_menu`
--

CREATE TABLE `seccion_menu` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `observaciones` text,
  `status` tinyint(1) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `icono` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seccion_menu`
--

INSERT INTO `seccion_menu` (`id`, `descripcion`, `observaciones`, `status`, `menu_id`, `icono`) VALUES
(1, 'Grupo', 'xxxx', 1, 1, 'glyphicon glyphicon-th'),
(2, 'Seccion_Menu', '', 1, 1, 'glyphicon glyphicon-th-list'),
(3, 'Accion', '', 1, 1, 'glyphicon glyphicon-play'),
(4, 'Menu', '', 1, 1, 'glyphicon glyphicon-folder-close'),
(5, 'Usuario', '', 1, 1, 'glyphicon glyphicon-user'),
(6, 'Accion_Grupo', '', 1, 1, 'glyphicon glyphicon-lock'),
(7, 'Session', '', 1, 2, 'glyphicon glyphicon-off'),
(44, 'elemento_lista', '', 1, 7, 'cdfweew fe fw f ew fe f'),
(45, 'video_index', NULL, 1, 10, 'deed'),
(46, 'fondo_index', 'xxx', 1, 10, 'xxx'),
(47, 'grupo_producto', NULL, 1, 10, 'dfeewr'),
(48, 'producto', NULL, 1, 10, 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`, `email`, `grupo_id`, `status`) VALUES
(1, 'root', 'moro58', 'mgamboa@tdesystems.com.mx', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video_index`
--

CREATE TABLE `video_index` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `archivo` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `observaciones` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `video_index`
--

INSERT INTO `video_index` (`id`, `descripcion`, `archivo`, `status`, `observaciones`) VALUES
(16, 'VideoFresas', './views/video_index/archivos/Video1_687350.mp4', 1, ''),
(17, 'VideoNaranjas', './views/video_index/archivos/VideoNaranjas_977263.mp4', 1, 'Video de fondo en Index');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `accion`
--
ALTER TABLE `accion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seccion_menu_id` (`seccion_menu_id`);

--
-- Indices de la tabla `accion_grupo`
--
ALTER TABLE `accion_grupo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accion_grupo` (`accion_id`,`grupo_id`),
  ADD KEY `grupo_id` (`grupo_id`);

--
-- Indices de la tabla `elemento_lista`
--
ALTER TABLE `elemento_lista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `SECCION_ELEMENTO` (`seccion_menu_id`);

--
-- Indices de la tabla `fondo_index`
--
ALTER TABLE `fondo_index`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `grupo_producto`
--
ALTER TABLE `grupo_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`),
  ADD UNIQUE KEY `icono` (`icono`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion_menu`
--
ALTER TABLE `seccion_menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `descripcion` (`descripcion`),
  ADD UNIQUE KEY `icono` (`icono`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `grupo_id` (`grupo_id`);

--
-- Indices de la tabla `video_index`
--
ALTER TABLE `video_index`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `accion`
--
ALTER TABLE `accion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT de la tabla `accion_grupo`
--
ALTER TABLE `accion_grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT de la tabla `elemento_lista`
--
ALTER TABLE `elemento_lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `fondo_index`
--
ALTER TABLE `fondo_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `grupo_producto`
--
ALTER TABLE `grupo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `seccion_menu`
--
ALTER TABLE `seccion_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `video_index`
--
ALTER TABLE `video_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accion`
--
ALTER TABLE `accion`
  ADD CONSTRAINT `accion_ibfk_1` FOREIGN KEY (`seccion_menu_id`) REFERENCES `seccion_menu` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `accion_grupo`
--
ALTER TABLE `accion_grupo`
  ADD CONSTRAINT `accion_grupo_ibfk_1` FOREIGN KEY (`accion_id`) REFERENCES `accion` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `accion_grupo_ibfk_2` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `elemento_lista`
--
ALTER TABLE `elemento_lista`
  ADD CONSTRAINT `seccion_elemento_lista` FOREIGN KEY (`seccion_menu_id`) REFERENCES `seccion_menu` (`id`);

--
-- Filtros para la tabla `seccion_menu`
--
ALTER TABLE `seccion_menu`
  ADD CONSTRAINT `seccion_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
