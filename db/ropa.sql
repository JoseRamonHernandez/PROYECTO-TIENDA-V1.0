-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2021 a las 07:06:21
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `username` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`username`, `nombre`, `apellido`, `edad`, `email`, `telefono`, `domicilio`) VALUES
('FernandoMartinez36', 'Fernando', 'Martinez', 36, 'fernandoMartinez@gmail.com', '247896547', 'Centro, Tlaxcala'),
('mariana22', 'Mariana', 'Hdz', 22, 'mariana_@gmail.com', '24112356', 'San Luis'),
('pedroJuarez', 'Pedro', 'Juarez', 58, 'pedrojuarez@gmail.com', '84846416161', 'Tlaxcala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `apellido`, `correo`, `username`, `contraseña`, `telefono`, `domicilio`, `puesto`) VALUES
(2, 'Joan', 'Rubalcava Mendoza', 'joan_ru@gmail.com', 'joan_ru', 'joan_ru', '241-128-79-45', 'Av. Chapultepec s/n Tlaxcala', 'Cajera'),
(5, 'Rosa', 'Perea Robles', 'rosa_pe@gmail.com', 'rosa_pe', 'rosa_pe', '247-154-83-30', 'Calle Juarez s/n, Huamantla', 'Cajero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `codigo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `modelo`, `nombre`, `codigo`, `cantidad`, `correo`) VALUES
(1, 'A-200', 'Abrigo black', 137809911, 6, 'www.shyla.com'),
(2, 'A-397', 'Abrigo mallorca', 141159921, 20, 'www.shyla.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CodigoBarras` int(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `NombreProducto` varchar(100) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CodigoBarras`, `modelo`, `NombreProducto`, `talla`, `precio`, `cantidad`, `imagen`) VALUES
(124500, 'J-756', 'Jeans roto azul', '3', 250, 15, '<img src=./assets/images/Jeans_roto_azul.jpg>'),
(459501, 'J-756', 'Jeans roto azul', '5', 250, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(794502, 'J-756', 'Jeans roto azul', '7', 250, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(1129503, 'J-756', 'Jeans roto azul', '9', 250, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(1464504, 'J-756', 'Jeans roto azul', '11', 250, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(1799505, 'J-756', 'Jeans roto azul', '13', 250, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(2134506, 'J-756', 'Jeans roto azul', '15', 250, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(2469507, 'J-756', 'Jeans roto azul', '1XL', 275, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(2804508, 'J-756', 'Jeans roto azul', '2XL', 275, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(3139509, 'J-756', 'Jeans roto azul', '3XL', 275, 15, '<img src=\"./assets/images/Jeans_roto_azul.jpg\">'),
(3474510, 'J-457', 'Jeans negro', '3', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(3809511, 'J-457', 'Jeans negro', '5', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(4144512, 'J-457', 'Jeans negro', '7', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(4479513, 'J-457', 'Jeans negro', '9', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(4814514, 'J-457', 'Jeans negro', '11', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(5149515, 'J-457', 'Jeans negro', '13', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(5484516, 'J-457', 'Jeans negro', '15', 300, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(5819517, 'J-457', 'Jeans negro', '1XL', 320, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(6154518, 'J-457', 'Jeans negro', '2XL', 320, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(6489519, 'J-457', 'Jeans negro', '3XL', 320, 15, '<img src=\"./assets/images/Jeans_negro.jpg\">'),
(6824520, 'J-398', 'Jeans parches', '3', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(7159521, 'J-398', 'Jeans parches', '5', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(7494522, 'J-398', 'Jeans parches', '7', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(7829523, 'J-398', 'Jeans parches', '9', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(8164524, 'J-398', 'Jeans parches', '11', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(8499525, 'J-398', 'Jeans parches', '13', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(8834526, 'J-398', 'Jeans parches', '15', 270, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(9169527, 'J-398', 'Jeans parches', '1XL', 290, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(9504528, 'J-398', 'Jeans parches', '2XL', 290, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(9839529, 'J-398', 'Jeans parches', '3XL', 320, 15, '<img src=\"./assets/images/Jeans_parches.jpg\">'),
(10174530, 'J-418', 'Jeans micaela', '3', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(10509531, 'J-418', 'Jeans micaela', '5', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(10844532, 'J-418', 'Jeans micaela', '7', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(11179533, 'J-418', 'Jeans micaela', '9', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(11514534, 'J-418', 'Jeans micaela', '11', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(11849535, 'J-418', 'Jeans micaela', '13', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(12184536, 'J-418', 'Jeans micaela', '15', 320, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(12519537, 'J-418', 'Jeans micaela', '1XL', 345, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(12854538, 'J-418', 'Jeans micaela', '2XL', 345, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(13189539, 'J-418', 'Jeans micaela', '3XL', 345, 15, '<img src=\"./assets/images/Jeans_micaela.jpg\">'),
(13524540, 'J-103', 'Jeans roto negro', '3', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(13859541, 'J-103', 'Jeans roto negro', '5', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(14194542, 'J-103', 'Jeans roto negro', '7', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(14529543, 'J-103', 'Jeans roto negro', '9', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(14864544, 'J-103', 'Jeans roto negro', '11', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(15199545, 'J-103', 'Jeans roto negro', '13', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(15534546, 'J-103', 'Jeans roto negro', '15', 260, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(15869547, 'J-103', 'Jeans roto negro', '1XL', 280, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(16204548, 'J-103', 'Jeans roto negro', '2XL', 280, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(16539549, 'J-103', 'Jeans roto negro', '3XL', 280, 15, '<img src=\"./assets/images/Jeans_roto_negro.jpg\">'),
(20224560, 'P-400', 'Pantalón negro', '3', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(20559561, 'P-400', 'Pantalón negro', '5', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(20894562, 'P-400', 'Pantalón negro', '7', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(21229563, 'P-400', 'Pantalón negro', '9', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(21564564, 'P-400', 'Pantalón negro', '11', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(21899565, 'P-400', 'Pantalón negro', '13', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(22234566, 'P-400', 'Pantalón negro', '15', 300, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(22569567, 'P-400', 'Pantalón negro', '1XL', 320, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(22904568, 'P-400', 'Pantalón negro', '2XL', 320, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(23239569, 'P-400', 'Pantalón negro', '3XL', 320, 15, '<img src=\"./assets/images/Pantalón_negro.jpg\">'),
(23574570, 'P-276', 'Pantalón gris', '3', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(23909571, 'P-276', 'Pantalón gris', '5', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(24244572, 'P-276', 'Pantalón gris', '7', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(24579573, 'P-276', 'Pantalón gris', '9', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(24914574, 'P-276', 'Pantalón gris', '11', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(25249575, 'P-276', 'Pantalón gris', '13', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(25584576, 'P-276', 'Pantalón gris', '15', 200, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(25919577, 'P-276', 'Pantalón gris', '1XL', 220, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(26254578, 'P-276', 'Pantalón gris', '2XL', 220, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(26589579, 'P-276', 'Pantalón gris', '3XL', 220, 15, '<img src=\"./assets/images/Pantalón_gris.jpg\">'),
(36974610, 'M-092', 'Mono girasoles', 'XS', 180, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(37309611, 'M-092', 'Mono girasoles', 'S', 180, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(37644612, 'M-092', 'Mono girasoles', 'M', 180, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(37979613, 'M-092', 'Mono girasoles', 'L', 180, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(38314614, 'M-092', 'Mono girasoles', 'XL', 180, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(38649615, 'M-092', 'Mono girasoles', '1XL', 200, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(38984616, 'M-092', 'Mono girasoles', '2XL', 200, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">'),
(39319617, 'M-092', 'Mono girasoles', '3XL', 200, 15, '<img src=\"./assets/images/Mono_girasoles.jpg\">');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proovedores`
--

CREATE TABLE `proovedores` (
  `codigo` int(11) NOT NULL,
  `NombreEmpresa` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proovedores`
--

INSERT INTO `proovedores` (`codigo`, `NombreEmpresa`, `correo`, `telefono`, `domicilio`) VALUES
(10023, 'ORIGINALES SHYLA, S.A. DE C.V.', 'www.shyla.com', '(52) 55 57090018', 'José Ma. Izazaga #65, Local 17, 06080 Ciudad de México, CDMX'),
(12054, 'GRUPO VANITY, S.A. DE C.V.', 'www.vanity.com.mx', '(52) 800 4802121', 'Av. Universidad #1050, General Anaya, Benito Juárez, 03330 Ciudad de México, CDMX'),
(14008, 'ROPA SIETE LEGUAS, S.A. DE C.V.', 'www.sieteleguas.com.mx', '(52) 871 748-1400', 'Calzada Tecnológico #1055, Cd. Lerdo, 35150 Ciudad Lerdo, Durango '),
(59874, 'OGGI JEANS, S.A. DE C.V.', 'www.oggi.mx', '222-232-34-79', 'Calle 2 Nte 211. Puebla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `NumeroVenta` int(11) NOT NULL,
  `CodigoBarras` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`NumeroVenta`, `CodigoBarras`, `username`, `cantidad`) VALUES
(1, '124500', 'FernandoMartinez36', 2),
(2, '459501', 'FernandoMartinez36', 2),
(3, '794502', 'FernandoMartinez36', 3),
(4, '124500', 'FernandoMartinez36', 5),
(5, '14529543', 'FernandoMartinez36', 10),
(6, '7494522', 'FernandoMartinez36', 6),
(7, '23574570', 'FernandoMartinez36', 10),
(8, '14864544', 'FernandoMartinez36', 8),
(9, '20507', 'pedroJuarez', 7),
(10, '36974610', 'mariana22', 1),
(11, '36974610', 'joan_ru_mendoza', 1),
(12, '124500', 'mariana22', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`CodigoBarras`);

--
-- Indices de la tabla `proovedores`
--
ALTER TABLE `proovedores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`NumeroVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `NumeroVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
