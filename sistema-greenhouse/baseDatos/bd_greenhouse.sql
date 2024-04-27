-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2024 a las 21:33:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_greenhouse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabaña`
--

CREATE TABLE `cabaña` (
  `cabaña-id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `estado-id` int(11) NOT NULL,
  `capacidad-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cabaña`
--

INSERT INTO `cabaña` (`cabaña-id`, `nombre`, `descripcion`, `imagen`, `precio`, `estado-id`, `capacidad-id`) VALUES
(1, 'cabaña pepe', 'cabaña con pileta', 'cabaña-presentacion.jpg', 2000.00, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `capacidad-id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `capacidad`
--

INSERT INTO `capacidad` (`capacidad-id`, `descripcion`) VALUES
(1, 'Grande');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado-id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`estado-id`, `descripcion`) VALUES
(1, 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_de_pagos`
--

CREATE TABLE `medios_de_pagos` (
  `mediosPago-id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `reserva-id` int(11) NOT NULL,
  `fecha-llegada` date NOT NULL,
  `fecha-salida` date NOT NULL,
  `usuario-id` int(11) NOT NULL,
  `cabaña-id` int(11) NOT NULL,
  `mediosPago-id` int(11) NOT NULL,
  `fecha-reserva` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tipoUsuario-id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario-id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `tipoUsuario-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabaña`
--
ALTER TABLE `cabaña`
  ADD PRIMARY KEY (`cabaña-id`),
  ADD KEY `estado-id` (`estado-id`),
  ADD KEY `capacidad-id` (`capacidad-id`);

--
-- Indices de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  ADD PRIMARY KEY (`capacidad-id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estado-id`);

--
-- Indices de la tabla `medios_de_pagos`
--
ALTER TABLE `medios_de_pagos`
  ADD PRIMARY KEY (`mediosPago-id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`reserva-id`),
  ADD KEY `mediosPago-id` (`mediosPago-id`),
  ADD KEY `cabaña-id` (`cabaña-id`),
  ADD KEY `usuario-id` (`usuario-id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tipoUsuario-id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario-id`),
  ADD KEY `tipoUsuario-id` (`tipoUsuario-id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cabaña`
--
ALTER TABLE `cabaña`
  MODIFY `cabaña-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `capacidad-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `estado-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medios_de_pagos`
--
ALTER TABLE `medios_de_pagos`
  MODIFY `mediosPago-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `reserva-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `tipoUsuario-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cabaña`
--
ALTER TABLE `cabaña`
  ADD CONSTRAINT `cabaña_ibfk_1` FOREIGN KEY (`capacidad-id`) REFERENCES `capacidad` (`capacidad-id`),
  ADD CONSTRAINT `cabaña_ibfk_2` FOREIGN KEY (`estado-id`) REFERENCES `estado` (`estado-id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`mediosPago-id`) REFERENCES `medios_de_pagos` (`mediosPago-id`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`usuario-id`) REFERENCES `usuarios` (`usuario-id`),
  ADD CONSTRAINT `reserva_ibfk_3` FOREIGN KEY (`cabaña-id`) REFERENCES `cabaña` (`cabaña-id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipoUsuario-id`) REFERENCES `tipo_usuario` (`tipoUsuario-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
