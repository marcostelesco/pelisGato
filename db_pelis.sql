-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2023 a las 17:33:03
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pelis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(10) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id_categorie`, `categorie`) VALUES
(1, 'Acción'),
(2, 'Drama'),
(3, 'Aventura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `release_date` int(50) NOT NULL,
  `url_img` varchar(500) DEFAULT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `categorie`, `name`, `description`, `release_date`, `url_img`, `id_categorie`) VALUES
(1, 'Acción', 'John Wick', 'Esta película protagonizada por Keanu Reeves sigue a un ex asesino a sueldo que busca venganza después de que le roben su auto y maten a su perro.\r\n', 2014, 'https://pics.filmaffinity.com/john_wick-166872838-mmed.jpg', 1),
(2, 'Acción', 'Mad Max: Fury Roa', 'En esta emocionante película de acción postapocalíptica dirigida por George Miller, Max se une a Furiosa en una épica persecución a través de un mundo desolado.\r\n', 2015, 'https://pics.filmaffinity.com/mad_max_fury_road-429261909-mmed.jpg', 1),
(3, 'Acción', 'The Dark Knight', 'Dirigida por Christopher Nolan, esta película sigue al Caballero de la Noche mientras lucha contra el caos desatado por el Joker en Gotham City.\r\n', 2008, 'https://pics.filmaffinity.com/the_dark_knight-102763119-mmed.jpg', 1),
(4, 'Acción', 'Die Hard', 'En este clásico del cine de acción, John McClane, un oficial de policía, se enfrenta a un grupo de terroristas que amenazan con tomar un edificio en Los Ángeles.\r\n', 1988, 'https://pics.filmaffinity.com/die_hard-336213173-mmed.jpg', 1),
(5, 'Acción', 'Mad Max 2: The Road Warrior', 'Esta película postapocalíptica es una de las más influyentes en el género y sigue a Max mientras lucha por proteger un convoy de sobrevivientes en un mundo desértico y peligroso.\r\n', 1981, 'https://pics.filmaffinity.com/mad_max_2_the_road_warrior-606967949-mmed.jpg', 1),
(6, 'Drama', 'Forrest Gump', 'Esta conmovedora película sigue la vida de Forrest Gump, interpretado por Tom Hanks, mientras atraviesa décadas de eventos históricos en Estados Unidos y busca el amor de su vida, Jenny.\r\n', 1994, 'https://pics.filmaffinity.com/forrest_gump-212765827-mmed.jpg', 2),
(7, 'Drama', 'Titanic', 'Dirigida por James Cameron, esta película narra el trágico hundimiento del Titanic y la historia de amor entre Jack y Rose, interpretados por Leonardo DiCaprio y Kate Winslet.\r\n', 1997, 'https://pics.filmaffinity.com/titanic-321994924-mmed.jpg', 2),
(8, 'Drama', 'El Padrino', 'Dirigida por Francis Ford Coppola, esta película épica narra la historia de la familia Corleone y su participación en el mundo del crimen organizado en Nueva York.\r\n', 1972, 'https://pics.filmaffinity.com/the_godfather-488102675-mmed.jpg', 2),
(9, 'Drama', 'Cadena Perpetua', 'Esta película, basada en una historia de Stephen King, sigue la vida de Andy Dufresne, un hombre condenado a cadena perpetua que busca la redención en la prisión de Shawshank.\r\n', 1994, 'https://pics.filmaffinity.com/the_shawshank_redemption-576140557-mmed.jpg', 2),
(10, 'Aventura', 'Piratas del Caribe: La Maldición del Perla Negra', 'El capitán Jack Sparrow, interpretado por Johnny Depp, se une a una tripulación variopinta en busca de un tesoro maldito en esta película de piratas llena de humor y acción.\r\n', 2003, 'https://pics.filmaffinity.com/pirates_of_the_caribbean_the_curse_of_the_black_pearl-627724446-mmed.jpg', 3),
(11, 'Aventura', 'Jurassic Park', 'Un grupo de personas se embarca en una aventura para escapar de un parque temático lleno de dinosaurios genéticamente recreados en esta película de ciencia ficción y aventuras dirigida por Steven Spielberg.\r\n', 1993, 'https://pics.filmaffinity.com/jurassic_park-187298880-mmed.jpg', 3),
(12, 'Aventura', 'El Señor de los Anillos: La Comunidad del Anillo', 'Basada en la obra de J.R.R. Tolkien, esta película sigue a Frodo y un grupo de compañeros mientras se embarcan en un viaje épico para destruir un anillo mágico y evitar que caiga en manos del malvado Sauron.\r\n', 2001, 'https://pics.filmaffinity.com/the_lord_of_the_rings_the_fellowship_of_the_ring-952398002-mmed.jpg', 3),
(13, 'Aventura', 'Los Goonies', 'Un grupo de jóvenes amigos se embarca en una aventura subterránea en busca de un tesoro pirata perdido para salvar sus hogares en esta película clásica llena de diversión y emoción.\r\n', 1985, 'https://pics.filmaffinity.com/the_goonies-301424062-mmed.jpg', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(600) NOT NULL,
  `password` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `password`) VALUES
(1, 'webadmin', '$2a$12$mX6cTRCTdr.J9of5NWx.Uu0EnoIj7MOR26ahA4e3hLWQ/B6XWDeZm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
