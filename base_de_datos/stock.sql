-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2019 at 01:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonos`
--

CREATE TABLE `abonos` (
  `id_abono` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `total_abono` float DEFAULT NULL,
  `fecha_abono` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `dni_cliente` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_cliente` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_cliente` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codigo_cliente` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `dni_cliente`, `direccion_cliente`, `correo_cliente`, `codigo_cliente`, `estado`) VALUES
(1, 'Administrador', 'D5AA170E875913B89D169C57B96B452548FABFFF', 'Administrador', 'Administrador', '0', 1),
(6, 'bomj321', '56456', 'La Rotaria. Calle 80', 'jmob612@gmail.com', '1', 1),
(7, 'Jorge', 'dfg', 'La Rotaria. Calle 80', 'jmob612@gmail.com', '0261', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion_producto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `precio_producto` float DEFAULT NULL,
  `stock_producto` int(11) DEFAULT NULL,
  `impuesto_producto` float DEFAULT NULL,
  `codigo_categoria` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion_categoria` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `subcodigo_categoria` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `subdescripcion_categoria` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `codigo_bodega` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `descripcion_bodega` longtext COLLATE utf8_spanish2_ci,
  `codigo_fabricante` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id_producto`, `codigo_producto`, `descripcion_producto`, `precio_producto`, `stock_producto`, `impuesto_producto`, `codigo_categoria`, `descripcion_categoria`, `subcodigo_categoria`, `subdescripcion_categoria`, `codigo_bodega`, `descripcion_bodega`, `codigo_fabricante`, `estado`) VALUES
(2, '0261', 'PRUEBA', 20, 23, 23, '00001', 'dsfsdf', '0261', 'sdfsdf', '0261', 'sdfdsf', '0261', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion_proveedor_1` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `direccion_proveedor_2` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `ciudad_proveedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pais_proveedor` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo_postal` varchar(25) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `contacto_proveedor` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_proveedor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_fax` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `numero_ruc` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `web_proveedor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `direccion_proveedor_1`, `direccion_proveedor_2`, `ciudad_proveedor`, `pais_proveedor`, `codigo_postal`, `contacto_proveedor`, `numero_proveedor`, `numero_fax`, `numero_ruc`, `web_proveedor`, `estado`) VALUES
(3, 'Bomj321', 'La Rotaria. Calle 80', 'La Rotaria. Calle 80', 'Maracaibo', 'Venezuela', '0261', 'Maria la Chismosa', '00001', '265+656', '1234', 'No tiene ok', 1),
(4, 'Bomj321123', 'La Rotaria. Calle 80', 'La Rotaria. Calle 80', 'Maracaibo', 'Mexico', '0261', 'Maria la Chismosa', '0145456', '456456', '1234', 'No tiene', 1);

-- --------------------------------------------------------

--
-- Table structure for table `proveedores_productos`
--

CREATE TABLE `proveedores_productos` (
  `id_proveedor_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `proveedores_productos`
--

INSERT INTO `proveedores_productos` (`id_proveedor_producto`, `id_proveedor`, `id_producto`) VALUES
(6, 3, 2),
(7, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vendedores`
--

CREATE TABLE `vendedores` (
  `id_vendedor` int(11) NOT NULL,
  `nombre_vendedor` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `dni_vendedor` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo_vendedor` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `vendedores`
--

INSERT INTO `vendedores` (`id_vendedor`, `nombre_vendedor`, `dni_vendedor`, `correo_vendedor`, `estado`) VALUES
(1, 'vendedor 1', '24736862', 'jmob612@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ventas_creditos`
--

CREATE TABLE `ventas_creditos` (
  `id_venta_credito` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `cantidad_comprado_producto` int(11) DEFAULT NULL,
  `precio_producto` float DEFAULT NULL,
  `comentario_venta` longtext COLLATE utf8_spanish2_ci,
  `abono_compra` float DEFAULT NULL,
  `codigo_compra` int(11) DEFAULT NULL,
  `fecha_compra` datetime DEFAULT NULL,
  `fecha_vencimiento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ventas_normales`
--

CREATE TABLE `ventas_normales` (
  `id_venta_normal` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `cantidad_comprado_producto` int(11) DEFAULT NULL,
  `precio_producto` float DEFAULT NULL,
  `comentario_venta` longtext COLLATE utf8_spanish2_ci,
  `codigo_compra` int(11) DEFAULT NULL,
  `fecha_compra` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonos`
--
ALTER TABLE `abonos`
  ADD PRIMARY KEY (`id_abono`),
  ADD KEY `abonos_ventas_creditos_idx` (`id_venta`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indexes for table `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indexes for table `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  ADD PRIMARY KEY (`id_proveedor_producto`),
  ADD KEY `id_proveedores_productos_productos_idx` (`id_producto`),
  ADD KEY `id_proveedores_productos_proveedores_idx` (`id_proveedor`);

--
-- Indexes for table `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- Indexes for table `ventas_creditos`
--
ALTER TABLE `ventas_creditos`
  ADD PRIMARY KEY (`id_venta_credito`),
  ADD UNIQUE KEY `id_producto_UNIQUE` (`id_producto`),
  ADD KEY `ventas_normales_clientes_idx` (`id_cliente`),
  ADD KEY `ventas_normales_productos_idx` (`id_producto`),
  ADD KEY `ventas_creditos_idx` (`id_vendedor`);

--
-- Indexes for table `ventas_normales`
--
ALTER TABLE `ventas_normales`
  ADD PRIMARY KEY (`id_venta_normal`),
  ADD KEY `ventas_normales_clientes_idx` (`id_cliente`),
  ADD KEY `ventas_normales_productos_idx` (`id_producto`),
  ADD KEY `ventas_normales_vendedores_idx` (`id_vendedor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonos`
--
ALTER TABLE `abonos`
  MODIFY `id_abono` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  MODIFY `id_proveedor_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ventas_creditos`
--
ALTER TABLE `ventas_creditos`
  MODIFY `id_venta_credito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ventas_normales`
--
ALTER TABLE `ventas_normales`
  MODIFY `id_venta_normal` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonos`
--
ALTER TABLE `abonos`
  ADD CONSTRAINT `abonos_ventas_creditos` FOREIGN KEY (`id_venta`) REFERENCES `ventas_creditos` (`id_venta_credito`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `proveedores_productos`
--
ALTER TABLE `proveedores_productos`
  ADD CONSTRAINT `id_proveedores_productos_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_proveedores_productos_proveedores` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ventas_creditos`
--
ALTER TABLE `ventas_creditos`
  ADD CONSTRAINT `ventas_creditos` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`id_vendedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_creditos_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_creditos_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ventas_normales`
--
ALTER TABLE `ventas_normales`
  ADD CONSTRAINT `ventas_normales_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_normales_productos` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `ventas_normales_vendedores` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedores` (`id_vendedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
