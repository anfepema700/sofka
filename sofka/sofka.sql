-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2021 a las 18:23:16
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
-- Base de datos: `sofka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE `historico` (
  `idhistorico` int(11) NOT NULL,
  `jugador` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `historico`
--

INSERT INTO `historico` (`idhistorico`, `jugador`, `puntaje`) VALUES
(12, 'ANDRES FELIPE PEREZ', 40),
(13, 'PRUEBA ACTUALIZAR', 100),
(14, 'ANA MARIA GIL', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idpregunta` int(11) NOT NULL,
  `pregunta` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  `respuesta1` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `respuesta2` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `respuesta3` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `respuesta4` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `correcta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idpregunta`, `pregunta`, `nivel`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `correcta`) VALUES
(2, 'CUÁL ES LA RAÍZ CUADRADA DE 25', 1, '5', '25', '20', '10', 1),
(3, 'Cual es el mes con menos días del año', 1, 'Enero', 'Marzo', 'Febrero', 'Abril', 3),
(4, 'Complete el refrán \"Lo que por agua viene\"', 1, 'Joselito se lo lleva', 'Por agua se va ', 'Se moja antes de llegar', 'Se lo lleva la corriente', 2),
(5, 'Cuál es el Dios del trueno según la mitología griega', 1, 'Zeus', 'Poseidon', 'Hercules', 'Kratos', 1),
(6, '3 al cuadrado es', 1, '10', '9', '11', '15', 2),
(7, 'Quién es el libertador de colombia', 2, 'Guillermo Segundo', 'Simon Bolivar', 'Cristobal Colon', 'Francisco de Paula Santander', 2),
(8, 'En que continente se encuentra Egipto', 2, 'Africa', 'Asia', 'Oceania', 'America', 1),
(9, 'La capital de Antioquia es', 2, 'Bucaramanga', 'Medellín', 'Cali', 'Manizales', 2),
(10, 'En que mes del año se celebra Navidad', 2, 'ENERO', 'ABRIL', 'DICIEMBRE', 'MARZO', 3),
(11, 'Cuál es el resultadode (10*10) - 5', 2, '95', '105', '115', '90', 1),
(12, 'Un agricultor cosecha 15 kilos de maíz los primeros 3 meses del año, al finalizar siembra su cosecha nuevamente, si se sabe que 1 kilo de siembra gene', 3, '250 kilos', '300 kilos', '10 kilos', '150 kilos', 4),
(13, 'Cuál es la capital del mundo', 3, 'México D.C.', 'Nueva York', 'Los Angeles', 'Las vegas', 2),
(14, 'Cuál fue el primer colombiano en recibir un premio novel de la paz', 3, 'Juan Manuel Santos', 'Gabriel Garcia Marquez', 'Jorge Baron', 'Álvaro Uribe ', 1),
(15, 'Cuál fue el primer colombiano en recibir un premio novel de literatura', 3, 'Juan Manuel Santos', 'Gabriel Garcia Marquez', 'Jorge Baron', 'Álvaro Uribe', 2),
(16, 'Completa el refrán: \"Tanto va el agua al cántaro\"', 3, 'hasta que se llena', 'hasta que lo cambian', 'no se le mira el diente', 'hasta que se rompe', 4),
(17, 'En que año se aprobó la constitución colombiana vigente', 3, '1992', '1991', '1993', '1980', 2),
(18, 'Cual fue el primer hombre en pisar la luna ', 4, 'Tonny Stark', 'Anthony de la Rosa', 'Neil Armstrong', 'mark zuckerberg', 3),
(19, 'Cual es el nombre de la misión en el primer viaje a la luna ', 4, 'Apollo 11', 'Apollo 1', 'Misisipi 11 ', 'Misisipi 1', 1),
(20, 'Cual es el artista que pinto la mona lisa', 4, 'Martin Luter King', 'Leonardo Da Vinci', 'Miguel Ángel', 'Fernando Botero', 2),
(21, 'Quién escribió cien años de soledad ', 4, 'Paulo Coelho', 'Federico Gamboa', 'Gabriel Garcia Marquez', 'Jorge Carrasquilla', 3),
(22, 'Cual es la diferencia entre Mhz y Gb', 4, 'Mhz son los sonidos y Gb es referente a la frecuencia', 'Mhz la unidad de medida del espacio y Gb la unidad de medida del sol', 'Mhz datos  y Gb frecuencia', 'Mhz referencia a la frecuencia y Gb referencia almacenamiento de datos', 4),
(23, 'Cuál es el Rio más largo del mundo', 5, 'Ganges', 'Misisipi', 'Amazonas', 'Niágara', 3),
(24, 'Donde esta ubicada Transilvania', 5, 'Alemania', 'Nueva Zelanda', 'Rumania', 'América Central', 3),
(25, 'Cual es el protagonista de la película Titanic', 5, 'La oreja de van goh', 'Leonardo Da Vinci', 'Leonardo Dicaprio', 'Brad Pit', 3),
(26, 'El niño y la pijama es una película basada en una historia real ocurrida en', 5, 'Alemania', 'Suiza', 'Austria', 'Croacia', 1),
(27, 'En que año cayó el muro de Berlín', 5, '2001', '1670', '1987', '1989', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`idhistorico`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idpregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historico`
--
ALTER TABLE `historico`
  MODIFY `idhistorico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idpregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
