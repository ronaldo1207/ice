-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2025 a las 20:37:33
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Codigo` bigint(20) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) DEFAULT NULL,
  `Categoria` varchar(100) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Modelo` varchar(100) DEFAULT NULL,
  `Fecha_de_compra` date DEFAULT NULL,
  `Garantia` varchar(100) DEFAULT NULL,
  `Precio_de_compra` decimal(10,2) DEFAULT NULL,
  `Ganancia_Neta` decimal(10,2) DEFAULT NULL,
  `Porcentaje_Ganancia` decimal(5,2) DEFAULT NULL,
  `Precio_De_Venta` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Codigo`, `Producto`, `Ubicacion`, `Categoria`, `Descripcion`, `Marca`, `Modelo`, `Fecha_de_compra`, `Garantia`, `Precio_de_compra`, `Ganancia_Neta`, `Porcentaje_Ganancia`, `Precio_De_Venta`) VALUES
(886490904713, 'Audifonos Tipo C', 'Punto Móvil', 'Audifonos Cable', 'Acabado Métalico, Cable acordonado, Micrófono HD, Efecto Subwoofer, Incluye Estuche', 'MOVISUN', 'ENJOY P2-TC', '2025-03-01', 'Primer Uso', '13000.00', '12000.00', '92.31', '26000.00'),
(1224361997697, 'Audifonos Jack 3.5mm', 'Punto Móvil', 'Audifonos Cable', 'Acabado Métalico, Cable acordonado, Micrófono HD, Incluye Bolsa De Tela Y Pinza', 'MOVISUN', 'ENJOY P1-3,5mm', '2025-03-01', 'Primer Uso', '10000.00', '10000.00', '100.00', '20000.00'),
(1542974199377, 'Audifonos Jack 3.5mm', 'Punto Móvil', 'Audifonos Cable', 'Micrófono, Sonido Estéreo, Cable Siliconado, Incluye Pinza', 'MOVISUN', 'CHACHA B2-3,5mm', '2025-03-01', 'Primer Uso', '5000.00', '7000.00', '140.00', '12000.00'),
(2890451678297, 'Audifonos Inalambricos', 'Punto Móvil', 'Audifonos Inalambricos', 'Bluetooth 5.3, 25 Horas Duración, Control Táctil, Micrófono HD, Tipo C', 'MOVISUN', 'W1', '2025-03-01', '6 Meses', '30000.00', '35000.00', '116.67', '65000.00'),
(3135784048393, 'Audifonos Inalambricos', 'Punto Móvil', 'Audifonos Inalambricos', 'Bluetooth 5.1, 20 Horas Duración, Micrófono HD, Tipo LG, Incluye Cargador Y Gomas Adicionales, Color Negro', 'MOVISUN', 'ITA-3', '2025-03-01', '6 Meses', '39000.00', '41000.00', '105.13', '80000.00'),
(6389091631220, 'Batería Portátil', 'Punto Móvil', 'Baterías Portátiles', '10,000Mah, 2 Salidas USB, Entrada Tipo C, Entrada Tipo Micro USB', 'MOVISUN', 'ROCKET P11', '2025-03-01', '6 Meses', '32000.00', '33000.00', '103.13', '65000.00'),
(7103838462947, 'Cable TC - LG', 'Punto Móvil', 'Cables', '1 Metro, 27W, Compatible Con Todos Los Modelos De IOS', 'MOVISUN', 'IC-10', '2025-03-01', 'Primer Uso', '5200.00', '14800.00', '284.62', '20000.00'),
(7588204050210, 'Cable Acordonado USB-C', 'Punto Móvil', 'Cables Reforzados', 'Carga Turbo, Transferencia Rápida De Datos, 2 Metros, Flexible', 'MOVISUN', 'Z200TC', '2025-03-01', 'Primer Uso', '5500.00', '14500.00', '263.64', '20000.00'),
(9285983286172, 'Cabezote + Cable TC', 'Punto Móvil', 'Cargadores', 'Carga Turbo, 20W 3.5A, Qualcomm Quick Charge 3.0, Seguro, Carga Garantizada', 'MOVISUN', 'MPD-80', '2025-03-01', '1 Mes', '16000.00', '19000.00', '118.75', '35000.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9285983286173;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
