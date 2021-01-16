-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-12-2019 a las 07:48:54
-- Versión del servidor: 10.1.41-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `circulos2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `usuario` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `paterno` varchar(45) NOT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`usuario`, `nombre`, `paterno`, `materno`, `pass`) VALUES
('root', 'Adrian', 'Nuñez', '', 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `ncontrol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `aPaterno` varchar(45) NOT NULL,
  `aMaterno` varchar(45) DEFAULT NULL,
  `semestre` int(11) NOT NULL,
  `pass` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asesor`
--

INSERT INTO `asesor` (`ncontrol`, `nombre`, `aPaterno`, `aMaterno`, `semestre`, `pass`) VALUES
(1, 'Rodriguez', 'Soberne', '', 3, '1'),
(132435, 'Gabriel', 'Tarantino', '', 10, 'Alfanumerico78');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_horario`, `dia`, `hora`) VALUES
(43, 55, '2019-12-16', '07:22:23'),
(44, 56, '2019-12-16', '07:22:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `id_aula` int(11) NOT NULL,
  `aula` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`id_aula`, `aula`) VALUES
(1, 'ADA BYRON'),
(2, 'LC1'),
(7, 'Auditorio'),
(8, 'K4'),
(11, 'K5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_tutor` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `lunes` varchar(45) DEFAULT NULL,
  `martes` varchar(45) DEFAULT NULL,
  `miercoles` varchar(45) DEFAULT NULL,
  `jueves` varchar(45) DEFAULT NULL,
  `viernes` varchar(45) DEFAULT NULL,
  `id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `id_materia`, `id_tutor`, `id_aula`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `id_periodo`) VALUES
(55, 1, 15140102, 1, '8-9', '', '8-9', '', '', 7),
(56, 1, 17120102, 7, '', '13-14', '', '13-14', '', 7),
(57, 13, 17021254, 1, '', '', '13-14', '', '13-14', 7),
(58, 6, 15140102, 11, '17-18', '', '', '17-18', '', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre`) VALUES
(1, 'Programacion'),
(6, 'Matematicas Discretas'),
(11, 'TAP'),
(13, 'Automatas I'),
(16, 'Web');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodo`
--

CREATE TABLE `periodo` (
  `id_periodo` int(11) NOT NULL,
  `periodo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `periodo`
--

INSERT INTO `periodo` (`id_periodo`, `periodo`) VALUES
(7, 'Agosto-Diciembre 2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `ncontrol` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `aPaterno` varchar(60) NOT NULL,
  `aMaterno` varchar(60) DEFAULT NULL,
  `semestre` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`ncontrol`, `nombre`, `aPaterno`, `aMaterno`, `semestre`, `id_periodo`) VALUES
(15140102, 'Jose', 'Mujica', 'Versalles', 3, 7),
(17021254, 'Jaime', 'Velazquez', '', 2, 7),
(17120102, 'Brandon', 'Rodriguez', 'Molina', 6, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`ncontrol`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_tutor` (`id_tutor`),
  ADD KEY `id_aula` (`id_aula`),
  ADD KEY `pk` (`id_periodo`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `periodo`
--
ALTER TABLE `periodo`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`ncontrol`),
  ADD KEY `pk_2` (`id_periodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `periodo`
--
ALTER TABLE `periodo`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_horario`) REFERENCES `horario` (`id_horario`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `horario_ibfk_1` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`),
  ADD CONSTRAINT `horario_ibfk_2` FOREIGN KEY (`id_tutor`) REFERENCES `tutor` (`ncontrol`),
  ADD CONSTRAINT `horario_ibfk_3` FOREIGN KEY (`id_aula`) REFERENCES `aula` (`id_aula`),
  ADD CONSTRAINT `pk` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id_periodo`);

--
-- Filtros para la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `pk_2` FOREIGN KEY (`id_periodo`) REFERENCES `periodo` (`id_periodo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
