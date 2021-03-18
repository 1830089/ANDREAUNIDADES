-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2021 a las 18:13:01
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roux`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `ruta` varchar(100) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`ruta`, `nombre`, `descripcion`, `id`) VALUES
('img/artists/Barot_Bellingham_tn.jpg', 'Barot Bellingham', 'Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture. Hailed as one of the most diverse artists of his generation, Barot is equally as skilled with watercolors as he is with oils.', 1),
('img/artists/Jonathan_Ferrar_tn.jpg', 'Jonathan G. Ferrar II', 'Labeled as “The Artist to Watch in 2016” by the London Review, Johnathan has already sold one of the highest priced commissions paid to an art student, ever on record. The piece, entitled Gratitude Resort, a work in oil and mixed media, was sold for $750,000.', 2),
('img/artists/Hillary_Goldwynn_tn.jpg', 'Hillary Hewitt Goldwynn-Post', 'Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle, the International Sculptor’s Medal, and the Academy of Paris Award. Hillary’s CAC exhibit features paintings that contain only water images including waves, deep sea, and river.', 3),
('img/artists/Hassum_Harrod_tn.jpg', 'Hassum Harrod', 'The Art College in New Dehli has sponsored Hassum for his entire undergraduate career at the university, seeing great promise in his contemporary paintings of landscapes - that use equal parts muted and vibrant tones. Hassum will be speaking on “The use and absence of color in modern art”.', 4),
('img/artists/Jennifer_Jerome_tn.jpg', 'Jennifer_Jerome', 'A native of New Orleans, much of Jennifer’s work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years. Despite the sadness of devastation and lives lost.', 5),
('img/artists/LaVonne_LaRue_tn.jpg', 'LaVonne L. LaRue', 'LaVonne’s giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart. LaVonne will share her love and skill of graffiti art on Monday’s schedule, as she starts the painting of a 20-foot high wall in the Rousseau Room of Hotel Contempo in front of a standing-room only audience in Art in Unexpected Places.', 6),
('img/artists/Constance_Smith_tn.jpg', 'Constance Olivia Smith', 'Constance received the Fullerton-Brighton-Norwell Award for Modern Art for her mixed-media image of a tree of life, with jewel-adorned branches depicting the arms of humanity, and precious gemstone-decorated leaves representing the spouting buds of togetherness.', 7),
('img/artists/Riley_Rewington_tn.jpg', 'Riley Rudolph Rewington', 'A first-year student at the Roux Academy of Art, Media, and Design, Riley is already changing the face of modern art at the university. Riley’s exquisite abstract pieces have no intention of ever being understood, but instead beg the viewer to dream, create, pretend, and envision with their mind’s eye. Riley will be speaking on the “Art of Abstract” during Thursday’s schedule.', 8),
('img/artists/Xhou_Ta_tn.jpg', 'Xhou Ta', 'A senior at the China International Art University, Xhou has become well-known for his miniature sculptures, often the size of a rice granule, that are displayed by rear projection of microscope images on canvas. Xhou will discuss the art and science behind his incredibly detailed works of art.', 9),
('img/artists/bruno-mars.jpeg', 'Bruno Mars', 'Mars comenzó a crear música desde una edad muy temprana y actuó en muchos escenarios de su pueblo natal a lo largo de su niñez realizando imitaciones. Se graduó de la escuela secundaria y se mudó a Los Ángeles para proseguir con su carrera musical.', 10),
('img/artists/dua.jpg', 'Dua Lipa', 'Dua Lipa es una cantante, compositora, modelo y diseñadora de moda británica de origen albano-kosovar. Inició su carrera musical a los 14 años, cuando comenzó a hacer covers de canciones de otros artistas en YouTube. En 2015, después de trabajar como modelo, firmó con la discográfica Warner Music Group y con 19 años lanzó su primer sencillo, «New Love», seguido de «Be the One».', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `compania` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `comentario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `compania`, `correo`, `comentario`) VALUES
(2, 'user', '1a1dc91c907325c69271ddf0c944bc72', '', '', ''),
(3, 'Lorena', '87f6f9d078c3bc5db5578f3b4add9470', 'amazon', 'lore@upv.com', 'lorena'),
(17, 'Carlos', '21232f297a57a5a743894a0e4a801fc3', 'apple', 'bardok1101@gmail.com', 'a'),
(22, 'Alexis', '21232f297a57a5a743894a0e4a801fc3', 'apple', 'bardok1101@gmail.com', 'a'),
(23, 'Andrea', '21232f297a57a5a743894a0e4a801fc3', 'apple', 'andrea@gmail.com', 'Hola'),
(26, 'Omar', 'e10adc3949ba59abbe56e057f20f883e', 'apple', 'bardok1101@gmail.com', 'Hola ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
