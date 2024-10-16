-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2024 a las 05:18:44
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

CREATE DATABASE medoo_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES utf8mb4;

CREATE TABLE `carrera` (
  `idcarrera` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomcarrera` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `carrera` (`idcarrera`, `nomcarrera`, `descripcion`) VALUES
(1, 'Tec. Desarrollo Web', ''),
(2, 'Tec. Software Libre y Adm. en Sistemas', ''),
(3, 'Licenciatura en Ciencias de la Computación', ''),
(4, 'Licenciatura en Sistemas de Información', ''),
(5, 'Profesorado de Informática', ''),
(6, 'Maestría en Ciencias de la Computación', ''),
(7, 'Maestría en Enseñanza en Escenarios Digitales', '');

CREATE TABLE `rol` (
  `idrol` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `rol` (`idrol`, `nombre`) VALUES
(1, 'Profesor'),
(2, 'Alumno');

CREATE TABLE `usuario` (
  `legajo` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `id_carrera` bigint(20) NOT NULL,
  `rol` bigint(20) NOT NULL,  -- Cambiado de varchar(10) a bigint para referenciar correctamente la tabla `rol`
  PRIMARY KEY (`legajo`),
  FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`idcarrera`) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (`rol`) REFERENCES `rol` (`idrol`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `usuariorol` (
  `idusuario` bigint(20) NOT NULL,
  `idrol` bigint(20) NOT NULL,
  PRIMARY KEY (`idusuario`, `idrol`),
  FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`legajo`) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;