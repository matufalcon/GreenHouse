-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2024 a las 18:40:21
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

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
-- Estructura de tabla para la tabla `cabañas`
--

CREATE TABLE `cabañas` (
  `cabaña-id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `estado-id` int(11) NOT NULL,
  `capacidad-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cabañas`
--

INSERT INTO `cabañas` (`cabaña-id`, `nombre`, `descripcion`, `imagen`, `precio`, `estado-id`, `capacidad-id`) VALUES
(1, 'Mburucuyá Poty', 'Este alojamiento único ofrece un amplio espacio para disfrutar con tus seres queridos. Es un quincho independiente con dos dormitorios y un dormitorio principal con ventilador de techo, con capacidad para diez personas. Además, una amplia parrilla para asados, un comedor con ventilador de techo, un fogón y horno de hierro a leña, y un garaje interno para cuatro autos.\r\n\r\n\r\n\r\n\r\n\r\n', 'cabaña1.jpeg', 2000.00, 1, 1),
(2, 'Rincón de Montaña', 'Una acogedora cabaña de tres ambientes con capacidad para cinco personas. Incluye un amplio dormitorio con cama matrimonial, otro dormitorio con camas individuales o matrimonial, y un luminoso living comedor con cómodos sillones y una acogedora estufa a leña. Perfecta para disfrutar de la naturaleza en familia o con amigos.', 'cabaña1.0.jpg', 309111.00, 2, 2),
(3, 'Refugio Sereno', 'Una encantadora cabaña de dos ambientes, ideal para una escapada romántica o un retiro tranquilo. Incluye una acogedora sala de estar con cocina integrada, un baño completo y un dormitorio con una cómoda cama matrimonial. Decorada con un estilo rústico y cálido, ofrece un ambiente acogedor para relajarse y disfrutar de la naturaleza circundante.', 'cabaña4.jpg', 309111.00, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `capacidad-id` int(11) NOT NULL,
  `capacidad-nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `capacidad`
--

INSERT INTO `capacidad` (`capacidad-id`, `capacidad-nombre`) VALUES
(1, 'Grande'),
(2, 'Mediana'),
(3, 'Pequeña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado-id` int(11) NOT NULL,
  `estado-nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`estado-id`, `estado-nombre`) VALUES
(1, 'limpieza'),
(2, 'reparacion'),
(3, 'inactiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_de_pagos`
--

CREATE TABLE `medios_de_pagos` (
  `mediosPago-id` int(11) NOT NULL,
  `mediosPago-nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `medios_de_pagos`
--

INSERT INTO `medios_de_pagos` (`mediosPago-id`, `mediosPago-nombre`) VALUES
(1, 'Transferencia'),
(2, 'Tarjeta de Débito'),
(3, 'Tarjeta de Crédito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `reserva-id` int(11) NOT NULL,
  `fecha-entrada` date NOT NULL,
  `fecha-salida` date NOT NULL,
  `cantHuesped` int(11) NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `fecha-pago` date NOT NULL,
  `usuario-id` int(11) NOT NULL,
  `cabaña-id` int(11) NOT NULL,
  `mediosPago-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`reserva-id`, `fecha-entrada`, `fecha-salida`, `cantHuesped`, `monto`, `fecha-pago`, `usuario-id`, `cabaña-id`, `mediosPago-id`) VALUES
(2, '2024-06-28', '2024-06-29', 5, 309111.00, '2024-06-19', 2, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tipoUsuario-id` int(11) NOT NULL,
  `tipoUsuario-nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`tipoUsuario-id`, `tipoUsuario-nombre`) VALUES
(1, 'Administrador'),
(2, 'Huesped');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario-id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `tipoUsuario-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario-id`, `nombre`, `apellido`, `email`, `usuario`, `contraseña`, `tipoUsuario-id`) VALUES
(1, 'Ana', 'Lopez', 'anita@gmail.com', 'analopez', '$2y$10$5SzHIGkJXXC4jbCguejAzOPHZvmILjGO28SkfnoLDtCY/A.Qo0Kiy', 1),
(2, 'Juan', 'Perez', 'perez@gmail.com', 'juanperez', '$2y$10$IKo6oikXwWRHahCjsv8taeo22WrHNisLYtWliN7LLsAWh5K9QjfiC', 2),
(4, 'leo', 'mesi', 'mesi@gmail.com', 'mesi10', '$2y$10$0ovDVn10bBNfflRmo/anUem1ZJriwmwIOvWxW.ewme2WP8wuFXeG.', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cabañas`
--
ALTER TABLE `cabañas`
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
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`reserva-id`),
  ADD KEY `cabaña-id` (`cabaña-id`),
  ADD KEY `usuario-id` (`usuario-id`),
  ADD KEY `mediosPago-id` (`mediosPago-id`);

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
-- AUTO_INCREMENT de la tabla `cabañas`
--
ALTER TABLE `cabañas`
  MODIFY `cabaña-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `capacidad-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `estado-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medios_de_pagos`
--
ALTER TABLE `medios_de_pagos`
  MODIFY `mediosPago-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `reserva-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `tipoUsuario-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cabañas`
--
ALTER TABLE `cabañas`
  ADD CONSTRAINT `cabañas_ibfk_1` FOREIGN KEY (`capacidad-id`) REFERENCES `capacidad` (`capacidad-id`),
  ADD CONSTRAINT `cabañas_ibfk_2` FOREIGN KEY (`estado-id`) REFERENCES `estado` (`estado-id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`usuario-id`) REFERENCES `usuarios` (`usuario-id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`cabaña-id`) REFERENCES `cabañas` (`cabaña-id`),
  ADD CONSTRAINT `reservas_ibfk_3` FOREIGN KEY (`mediosPago-id`) REFERENCES `medios_de_pagos` (`mediosPago-id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipoUsuario-id`) REFERENCES `tipo_usuario` (`tipoUsuario-id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
