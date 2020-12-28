-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 11:59:19
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autos_leo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcliente`
--

CREATE TABLE `tblcliente` (
  `id_cliente` int(11) NOT NULL,
  `Nom_Cliente` varchar(50) NOT NULL,
  `Ape_Cliente` varchar(50) NOT NULL,
  `Dir_Cliente` varchar(100) DEFAULT NULL,
  `Cel_Cliente` varchar(50) NOT NULL,
  `Corr_Cliente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldatos_pre-factura`
--

CREATE TABLE `tbldatos_pre-factura` (
  `Id_Nota` int(11) NOT NULL,
  `Id_Vehiculo` int(11) NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Fecha_Nota` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetalle_pre_factura`
--

CREATE TABLE `tbldetalle_pre_factura` (
  `Id_Detalle` int(11) NOT NULL,
  `Id_Nota` int(11) NOT NULL,
  `Cantidad` int(6) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Vlr_Unitario` float(8,2) NOT NULL,
  `Vlr_Total` float(8,2) NOT NULL,
  `Id_Tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblinsumo_repuesto`
--

CREATE TABLE `tblinsumo_repuesto` (
  `Id_Insumo` int(11) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Vlr_Unitario` float(8,2) NOT NULL,
  `Vlr_Total` float(8,2) NOT NULL,
  `Id_Proveedor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblporveedores`
--

CREATE TABLE `tblporveedores` (
  `Id_Proveedor` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpreferencias`
--

CREATE TABLE `tblpreferencias` (
  `Id_Preferencia` int(11) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrecordatorio`
--

CREATE TABLE `tblrecordatorio` (
  `Id_Recordatorio` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrol`
--

CREATE TABLE `tblrol` (
  `Id_Rol` int(2) NOT NULL,
  `Nombre_Rol` varchar(50) NOT NULL,
  `Descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblservicios_ofertados`
--

CREATE TABLE `tblservicios_ofertados` (
  `Id_Servicio` int(11) NOT NULL,
  `Tipo_Servicio` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Valor` float(8,2) NOT NULL,
  `Id_Proveedor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsolicitud_servicio`
--

CREATE TABLE `tblsolicitud_servicio` (
  `Id_servicio` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Tipo_Servicio` int(11) DEFAULT NULL,
  `Id_Cliente` int(11) DEFAULT NULL,
  `Id_Vehiculo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Id_Cliente` int(11) NOT NULL,
  `Id_Rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblvehiculo`
--

CREATE TABLE `tblvehiculo` (
  `id_Vehiculo` int(11) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Modelo` int(4) NOT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Tipo_Vehiculo` varchar(45) NOT NULL,
  `Vencimiento_SOAT` date NOT NULL,
  `Vencimiento_Tecno` date NOT NULL,
  `Id_Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcliente`
--
ALTER TABLE `tblcliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tbldatos_pre-factura`
--
ALTER TABLE `tbldatos_pre-factura`
  ADD PRIMARY KEY (`Id_Nota`),
  ADD KEY `fk_tbl_Notas_Entregas_tblCliente1_idx` (`Id_Cliente`),
  ADD KEY `fk_tbl_Notas_Entregas_tblVehiculo1_idx` (`Id_Vehiculo`);

--
-- Indices de la tabla `tbldetalle_pre_factura`
--
ALTER TABLE `tbldetalle_pre_factura`
  ADD PRIMARY KEY (`Id_Detalle`),
  ADD KEY `fk_tblDetalle_Entrega_tbl_Notas_Entregas1_idx` (`Id_Nota`),
  ADD KEY `fk_tblDetalle_Entrega_tblInsumo_Repuesto1_idx` (`Id_Tipo`);

--
-- Indices de la tabla `tblinsumo_repuesto`
--
ALTER TABLE `tblinsumo_repuesto`
  ADD PRIMARY KEY (`Id_Insumo`),
  ADD KEY `fk_tblInsumo_Repuesto_tblPorveedores1_idx` (`Id_Proveedor`);

--
-- Indices de la tabla `tblporveedores`
--
ALTER TABLE `tblporveedores`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- Indices de la tabla `tblpreferencias`
--
ALTER TABLE `tblpreferencias`
  ADD PRIMARY KEY (`Id_Preferencia`),
  ADD KEY `fk_tblPreferencias_tblCliente1_idx` (`Id_Cliente`);

--
-- Indices de la tabla `tblrecordatorio`
--
ALTER TABLE `tblrecordatorio`
  ADD PRIMARY KEY (`Id_Recordatorio`),
  ADD KEY `fk_tblRecordatorio_tblCliente1_idx` (`Id_Cliente`);

--
-- Indices de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  ADD PRIMARY KEY (`Id_Rol`);

--
-- Indices de la tabla `tblservicios_ofertados`
--
ALTER TABLE `tblservicios_ofertados`
  ADD PRIMARY KEY (`Id_Servicio`),
  ADD KEY `fk_tblServicios_Ofertados_tblPorveedores1_idx` (`Id_Proveedor`);

--
-- Indices de la tabla `tblsolicitud_servicio`
--
ALTER TABLE `tblsolicitud_servicio`
  ADD PRIMARY KEY (`Id_servicio`),
  ADD KEY `fk_tblReservas_tblCliente1_idx` (`Id_Cliente`),
  ADD KEY `fk_tblSolicitud_Servicio_tblVehiculo1_idx` (`Id_Vehiculo`),
  ADD KEY `fk_tblSolicitud_Servicio_tblServicios_Ofertados1_idx` (`Tipo_Servicio`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `fk_tblUsuario_tblRol_idx` (`Id_Rol`),
  ADD KEY `fk_tblUsuario_tblCliente1_idx` (`Id_Cliente`);

--
-- Indices de la tabla `tblvehiculo`
--
ALTER TABLE `tblvehiculo`
  ADD PRIMARY KEY (`id_Vehiculo`),
  ADD KEY `fk_tblVehiculo_tblCliente1_idx` (`Id_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbldatos_pre-factura`
--
ALTER TABLE `tbldatos_pre-factura`
  MODIFY `Id_Nota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbldetalle_pre_factura`
--
ALTER TABLE `tbldetalle_pre_factura`
  MODIFY `Id_Detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblinsumo_repuesto`
--
ALTER TABLE `tblinsumo_repuesto`
  MODIFY `Id_Insumo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpreferencias`
--
ALTER TABLE `tblpreferencias`
  MODIFY `Id_Preferencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblrecordatorio`
--
ALTER TABLE `tblrecordatorio`
  MODIFY `Id_Recordatorio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblrol`
--
ALTER TABLE `tblrol`
  MODIFY `Id_Rol` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblservicios_ofertados`
--
ALTER TABLE `tblservicios_ofertados`
  MODIFY `Id_Servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblsolicitud_servicio`
--
ALTER TABLE `tblsolicitud_servicio`
  MODIFY `Id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `Id_Rol` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblvehiculo`
--
ALTER TABLE `tblvehiculo`
  MODIFY `id_Vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbldatos_pre-factura`
--
ALTER TABLE `tbldatos_pre-factura`
  ADD CONSTRAINT `fk_tbl_Notas_Entregas_tblCliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `tblcliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_Notas_Entregas_tblVehiculo1` FOREIGN KEY (`Id_Vehiculo`) REFERENCES `tblvehiculo` (`id_Vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbldetalle_pre_factura`
--
ALTER TABLE `tbldetalle_pre_factura`
  ADD CONSTRAINT `fk_tblDetalle_Entrega_tblInsumo_Repuesto1` FOREIGN KEY (`Id_Tipo`) REFERENCES `tblinsumo_repuesto` (`Id_Insumo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblDetalle_Entrega_tblServicios_Ofertados1` FOREIGN KEY (`Id_Tipo`) REFERENCES `tblservicios_ofertados` (`Id_Servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblDetalle_Entrega_tbl_Notas_Entregas1` FOREIGN KEY (`Id_Nota`) REFERENCES `tbldatos_pre-factura` (`Id_Nota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblinsumo_repuesto`
--
ALTER TABLE `tblinsumo_repuesto`
  ADD CONSTRAINT `fk_tblInsumo_Repuesto_tblPorveedores1` FOREIGN KEY (`Id_Proveedor`) REFERENCES `tblporveedores` (`Id_Proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblpreferencias`
--
ALTER TABLE `tblpreferencias`
  ADD CONSTRAINT `fk_tblPreferencias_tblCliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `tblcliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblrecordatorio`
--
ALTER TABLE `tblrecordatorio`
  ADD CONSTRAINT `fk_tblRecordatorio_tblCliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `tblcliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblservicios_ofertados`
--
ALTER TABLE `tblservicios_ofertados`
  ADD CONSTRAINT `fk_tblServicios_Ofertados_tblPorveedores1` FOREIGN KEY (`Id_Proveedor`) REFERENCES `tblporveedores` (`Id_Proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblsolicitud_servicio`
--
ALTER TABLE `tblsolicitud_servicio`
  ADD CONSTRAINT `fk_tblReservas_tblCliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `tblcliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblSolicitud_Servicio_tblServicios_Ofertados1` FOREIGN KEY (`Tipo_Servicio`) REFERENCES `tblservicios_ofertados` (`Id_Servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblSolicitud_Servicio_tblVehiculo1` FOREIGN KEY (`Id_Vehiculo`) REFERENCES `tblvehiculo` (`id_Vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD CONSTRAINT `fk_tblUsuario_tblCliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `tblcliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblUsuario_tblRol` FOREIGN KEY (`Id_Rol`) REFERENCES `tblrol` (`Id_Rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tblvehiculo`
--
ALTER TABLE `tblvehiculo`
  ADD CONSTRAINT `fk_tblVehiculo_tblCliente1` FOREIGN KEY (`Id_Cliente`) REFERENCES `tblcliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
