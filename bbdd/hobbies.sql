-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-05-2022 a las 22:59:27
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hobbies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

DROP TABLE IF EXISTS `libros`;
CREATE TABLE IF NOT EXISTS `libros` (
  `cod_libro` tinyint(3) UNSIGNED NOT NULL,
  `libro` varchar(100) NOT NULL,
  `portada` varchar(15) NOT NULL,
  `biografia` varchar(500) NOT NULL,
  `escritor` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_libro`),
  UNIQUE KEY `biografia` (`biografia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE IF NOT EXISTS `peliculas` (
  `cod_pelicula` tinyint(3) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `Foto` varchar(15) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `director` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_pelicula`),
  UNIQUE KEY `descripcion` (`descripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`cod_pelicula`, `titulo`, `Foto`, `descripcion`, `director`) VALUES
(1, '300', '300.jpg', 'Es la adaptación cinematográfica de la serie limitada de cómics homónima de Frank Miller, la cual relata la Batalla de las Termópilas. Miller sirvió como productor ejecutivo y consultor. La película fue rodada en su mayoría con una técnica de superposición de croma, para ayudar a reproducir las imágenes del cómic original.', 'Zack Snyder'),
(2, 'Los ocho odiosos', '8_odiosos.jpg', 'Pocos años después de la Guerra de Secesión, una diligencia avanza por el invernal Wyoming. Los pasajeros, el cazarrecompensas John Ruth (Kurt Russell) y su fugitiva Daisy Domergue (Jennifer Jason Leigh), intentan llegar al pueblo de Red Rock, donde Ruth entregará a Domergue .Mientras la tormenta cae sobre la parada , los ocho viajeros descubren que tal vez no lleguen hasta Red Rock.', 'Quentin Tarantino'),
(3, 'Gran Torino', 'Gran_torino.jpg', 'Walt Kowalski (Clint Eastwood), un veterano de la guerra de Corea (1950-1953), es un obrero jubilado del sector del automóvil que ha enviudado recientemente. Su máxima pasión es cuidar de su más preciado tesoro: un coche Gran Torino de 1972.Es un hombre inflexible y cascarrabias, al que le cuesta trabajo asimilar los cambios que se producen a su alrededor.', 'Clint Eastwood'),
(4, 'Venganza', 'Venganza.jpg', 'Bryan Mills, busca tener una relación más cercana con su hija, de 17 años, Kim, quien vive con su ex esposa y su nuevo marido. El trabajo lo alejo de su familia, le costo su divorcio, pero se resiste a ser una razón para el distanciamiento con Kim. ', 'Pierre Morel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

DROP TABLE IF EXISTS `videojuegos`;
CREATE TABLE IF NOT EXISTS `videojuegos` (
  `cod_videojuego` tinyint(3) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `caratula` varchar(15) NOT NULL,
  `datos` varchar(500) NOT NULL,
  `desarrolladora` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cod_videojuego`),
  UNIQUE KEY `datos` (`datos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`cod_videojuego`, `nombre`, `caratula`, `datos`, `desarrolladora`) VALUES
(1, 'Darksiders 1', 'Darksiders.jpg', ' Cuatro jinetes del Apocalipsis han iniciado el Armageddon por error, y ahora la Tierra está llena de muerte y desolación, dominada por los demonios. Nosotros encarnaremos a Guerra, uno de los cuatro jinetes, dispuesto a saber qué ha pasado y por qué le han engañado.', 'THQ Nordic'),
(2, 'Just Cause 3', 'Just_cause.jpg', 'Nos trasladaremos a la república de Medici, una tierra oprimida por un tirano dictador sediento de poder. A nuestra disposición tendremos más de 1000km2 de tierra, mar y aire que surcar libremente, además de un enorme arsenal de armas, artefactos y vehículos;', 'Avalanche Studios'),
(3, 'Mario Kart Wii', 'Mario_kart.jpg', 'El jugador compite contra 11 jugadores controlados por el juego. Cada competición consiste de una Copa de cuatro carreras. En total hay 8 Copas y al completar cada una, el jugador es recompensado con un trofeo si se clasifica en 1º, 2º o 3º lugar y se muestra una tabla con puntos basados en su rendimiento del juego en cada copa.', 'Nintendo'),
(4, 'Overwatch', 'Ow.jpg', 'Overwatch pone a los jugadores en equipos de seis personas, con cada persona escogiendo uno de varios héroes disponibles, cada uno con movimientos y habilidades únicas. Los héroes están divididos en tres clases: Daño, Tanque y Apoyo. Los jugadores de cada equipo trabajan juntos para atacar y defender puntos de control o para atacar/defender objetivos móviles que se mueven alrededor del mapa.', 'Activision-Blizzard');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
