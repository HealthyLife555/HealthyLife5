-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2023 a las 21:28:57
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutriologo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dietas`
--

CREATE TABLE `dietas` (
  `ID_D` int(11) NOT NULL,
  `FUNCION` varchar(200) NOT NULL,
  `COMIDA1` varchar(200) NOT NULL,
  `COMIDA2` varchar(200) NOT NULL,
  `COMIDA3` varchar(200) NOT NULL,
  `MERIENDAD1` varchar(200) NOT NULL,
  `MERIENDAD2` varchar(200) NOT NULL,
  `ALMUERZO1` varchar(200) NOT NULL,
  `ALMUERZO2` varchar(200) NOT NULL,
  `ALMUERZO3` varchar(200) NOT NULL,
  `MERIENDAA1` varchar(200) NOT NULL,
  `MERIENDAA2` varchar(200) NOT NULL,
  `CENA1` varchar(200) NOT NULL,
  `CENA2` varchar(200) NOT NULL,
  `CENA3` varchar(200) NOT NULL,
  `MERIENDAN1` varchar(200) NOT NULL,
  `MERIENDAN2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dietas`
--

INSERT INTO `dietas` (`ID_D`, `FUNCION`, `COMIDA1`, `COMIDA2`, `COMIDA3`, `MERIENDAD1`, `MERIENDAD2`, `ALMUERZO1`, `ALMUERZO2`, `ALMUERZO3`, `MERIENDAA1`, `MERIENDAA2`, `CENA1`, `CENA2`, `CENA3`, `MERIENDAN1`, `MERIENDAN2`) VALUES
(0, 'Bajar', 'asdasd', 'asdasd', 'asdasdgdfgf', 'fgd', 'gd', 'gd', 'gf', 'dgf', 'dg', 'fdg', 'fdg', 'fd', 'g', 'dg', 'g'),
(0, 'Bajar', '1 taza de yogur bajo en grasa con frutas frescas picadas (como fresas o plátano).', '2 rebanadas de pan integral tostado con una cucharadita de mermelada sin azúcar.', '1 taza de té verde o café sin azúcar.', '1 manzana o 1 puñado de nueces.', '', '1 porción de pechuga de pollo a la parrilla.', '1 taza de ensalada verde (lechuga, espinacas, pepino, tomate)', '1 taza de agua de limón sin azúcar.', '1 aguacate pequeño en rodajas.', '4 galletas de arroz o de maíz sin sal.', '1 porción de pescado a la plancha (como salmón o tilapia).', '1 taza de brócoli al vapor.', '1 taza de té de hierbas sin azúcar.', '1 yogur bajo en grasa.', ' 1 puñado de almendras.'),
(0, 'Mantener', ' 2 huevos revueltos con verduras (como espinacas, champiñones y tomates) ', 'Una porción de frijoles refritos', '', 'Un puñado de almendras o nueces.', '', 'Tacos de pescado a la plancha con tortillas de maíz', 'Ensalada de repollo', 'Salsa de yogur', 'Palitos de zanahoria y apio con guacamole casero ', '', 'Sopa de tortilla con pollo desmenuzado', 'Aguacate', 'Crema agria baja en grasa.', 'Una porción de frutas frescas (como piña, melón o sandía).', ''),
(0, 'Subir', '3 claras de huevo.', '1 taza de avena.', '1 plátano.', '1 yogur griego.', '1 puñado de nueces o almendras.', '1 taza de arroz integral.', '1 taza de frijoles negros o lentejas.', 'Agua natural o una bebida sin azúcar.', '1 plátano.', '1 cucharada de mantequilla de cacahuete (maní).', '150-200 gramos de salmón o carne magra (como bistec o filete de res).', '1 taza de quinoa o pasta integral.', 'Ensalada verde con aguacate, tomate y aceite de oliva.', '1 taza de requesón bajo en grasa', '1 puñado de frutos secos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutinas`
--

CREATE TABLE `rutinas` (
  `ID_RU` text NOT NULL,
  `FUNCION` text NOT NULL,
  `CALENTAMIENTO1` text NOT NULL,
  `CALENTAMIENTO2` text NOT NULL,
  `CALENTAMIENTO3` text NOT NULL,
  `CARDIOVASCULARES1` text NOT NULL,
  `CARDIOVASCULARES2` text NOT NULL,
  `CARDIOVASCULARES3` text NOT NULL,
  `FUERZA1` text NOT NULL,
  `FUERZA2` text NOT NULL,
  `FUERZA3` text NOT NULL,
  `ABDOMEN1` text NOT NULL,
  `ABDOMEN2` text NOT NULL,
  `ABDOMEN3` text NOT NULL,
  `ENFRIAMIENTO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutinas`
--

INSERT INTO `rutinas` (`ID_RU`, `FUNCION`, `CALENTAMIENTO1`, `CALENTAMIENTO2`, `CALENTAMIENTO3`, `CARDIOVASCULARES1`, `CARDIOVASCULARES2`, `CARDIOVASCULARES3`, `FUERZA1`, `FUERZA2`, `FUERZA3`, `ABDOMEN1`, `ABDOMEN2`, `ABDOMEN3`, `ENFRIAMIENTO`) VALUES
('', 'Bajar', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba'),
('', 'Bajar', 'Saltos de cuerda: 3 series de 1 minuto cada una.', 'Saltos laterales: 3 series de 20 repeticiones cada una.', 'Sentadillas: 3 series de 15 repeticiones cada una.', 'Burpees: 3 series de 10 repeticiones cada una.', 'Mountain climbers: 3 series de 20 repeticiones cada una.', 'Saltos al cajón (puedes utilizar una silla resistente): 3 series de 10 repeticiones cada una.', 'Flexiones de pecho: 3 series de 10 repeticiones cada una.', 'Sentadillas: 3 series de 15 repeticiones cada una.', 'Zancadas (lunges): 3 series de 10 repeticiones cada una (5 repeticiones por pierna).', 'Crunch abdominal: 3 series de 15 repeticiones cada una.', 'Russian twists: 3 series de 20 repeticiones cada una.', 'Plancha lateral: 3 series de 30 segundos cada una (15 segundos por lado).', 'Estiramientos estáticos para todo el cuerpo: dedica al menos 5 minutos a estirar los principales grupos musculares.'),
('', 'Mantener', 'Caminar en el lugar: 3-5 minutos.', 'Saltar a la cuerda: 2-3 minutos.', 'Estiramientos suaves de todo el cuerpo: 5-10 repeticiones por cada estiramiento.', 'Saltos de tijera: 3 series de 30 segundos, descanso de 15 segundos entre series.', 'Burpees: 3 series de 10 repeticiones, descanso de 30 segundos entre series.', 'Saltos al cajón o escalones: 3 series de 12 repeticiones, descanso de 20 segundos entre series.', 'Sentadillas: 3 series de 12-15 repeticiones, descanso de 30 segundos entre series.', 'Zancadas o lunges: 3 series de 10 repeticiones por pierna, descanso de 20 segundos entre series.', 'Flexiones de brazos: 3 series de 10-12 repeticiones, descanso de 30 segundos entre series.', 'Crunches o abdominales: 3 series de 15-20 repeticiones, descanso de 15 segundos entre series.', 'Plancha lateral: 2 series de 30-45 segundos por cada lado, descanso de 15 segundos entre series.', 'Russian twists: 3 series de 15-20 repeticiones, descanso de 15 segundos entre series.', 'Caminar en el lugar a ritmo lento: 3-5 minutos.'),
('', 'Subir Masa Muscular', 'Saltar la cuerda durante 5 minutos para elevar la frecuencia cardíaca y preparar los músculos.', 'Realiza movimientos articulares suaves para calentar las principales articulaciones del cuerpo (hombros, caderas, rodillas, tobillos).', '', 'Burpees: Realiza 3 series de 10 repeticiones. Este ejercicio trabajará todo tu cuerpo y aumentará tu ritmo cardíaco.', 'Saltos de tijera: Realiza 3 series de 20 repeticiones. Este ejercicio también te ayudará a elevar la frecuencia cardíaca y trabajar tus piernas.', '', 'Sentadillas: Realiza 3 series de 12 repeticiones. Asegúrate de mantener una buena postura y bajar hasta que tus muslos estén paralelos al suelo.', 'Flexiones de brazos: Realiza 3 series de 10 repeticiones. Si es necesario, puedes hacerlas apoyando las rodillas en el suelo.', 'Zancadas: Realiza 3 series de 10 repeticiones para cada pierna. Da un paso hacia adelante y baja tu cuerpo hasta que ambas rodillas estén en ángulo de 90 grados.', 'Plancha: Mantén la posición de plancha durante 30 segundos, descansa 10 segundos y repite 3 veces.', 'Crunch abdominal: Realiza 3 series de 15 repeticiones. Recuerda mantener la espalda baja pegada al suelo y concentrarte en contraer los músculos abdominales.', '', 'Estiramientos: Dedica al menos 5 minutos a estirar los principales grupos musculares, manteniendo cada estiramiento durante 20-30 segundos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USER` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CORREO` varchar(100) NOT NULL,
  `CONTRASEÑA` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USER`, `NOMBRE`, `CORREO`, `CONTRASEÑA`) VALUES
(1, 'spartancarlosyaelho', 'spartancarlosyael@hotmail.com', 'asdasda'),
(9, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
