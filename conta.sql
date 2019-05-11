-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2019 a las 00:32:28
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_egresos`
--

CREATE TABLE `cat_egresos` (
  `id_cat_egreso` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_cat_padre_egresos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cat_egresos`
--

INSERT INTO `cat_egresos` (`id_cat_egreso`, `codigo`, `nombre`, `id_cat_padre_egresos`) VALUES
(1, 410101, 'Sueldo base', 1),
(2, 410102, 'Horas extras', 1),
(3, 410103, 'Ley N°19.933', 1),
(4, 410104, 'Incremento % zona', 1),
(5, 410105, 'BRP título y mención Ley 20.158', 1),
(6, 410106, 'Ley 19.464 asistentes ', 1),
(7, 410107, 'Asignación desempeño condiciones difíciles docentes ', 1),
(8, 410108, 'Bonificación compensatoria art 3 Ley 19.200', 1),
(9, 410109, 'SEND docentes art.40 DFL N 2/98 ED.', 1),
(10, 410110, 'SEND asistentes educación Ley Ne 20.244', 1),
(11, 410111, 'UMP complementaria Inciso 2 art 10 ley 19.278', 1),
(12, 410112, 'Bonificacion profesores encargados Ley N 19.715 art 13', 1),
(13, 410113, 'Asignación de excelencia pedagógica (AEP) Ley N°19.715', 1),
(14, 410114, 'Asignación variable de desempeño individual art.17, Ley N°19.933', 1),
(15, 410115, 'Asignación por desempeño colectivo, art.18, Ley N°19.933', 1),
(16, 410116, 'Asignaciones', 1),
(17, 410117, 'Pago otros bonos docentes fiscales', 1),
(18, 410118, 'Pago otros bonos asistentes de la educación fiscales', 1),
(19, 410119, 'Colación y movilización', 1),
(20, 410120, 'Devolución bonos remuneracionales fiscales', 1),
(21, 410121, 'Bonos acordados con el sostenedor', 1),
(22, 410122, 'Gratificaciones', 1),
(23, 410123, 'Asignación desempeño condiciones difíciles asistentes de la educación', 1),
(24, 410124, 'Bono incentivo al desempeño Ley N°20.248 art. 8° N°4', 1),
(25, 410125, 'Ley N°19.410 (planilla complementaria)', 1),
(26, 410126, 'Bono extraordinario subvención adicional especial (Bono SAE)', 1),
(28, 410201, 'Pago bono de escolaridad y adicional', 2),
(29, 410202, 'Pago aguinaldo de navidad', 2),
(30, 410203, 'Pago aguinaldo de fiestas patrias', 2),
(31, 410204, 'Pago bono especial', 2),
(32, 410205, 'Pago bono vacaciones', 2),
(33, 410206, 'Pago bono desempeño laboral', 2),
(34, 410207, 'Otros bonos no imponibles Ley de reajuste', 2),
(35, 410208, 'Devolución bonos Ley de reajuste', 2),
(36, 410301, 'Indemnizaciones y/o feriado proporcional', 3),
(37, 410302, 'Viáticos', 3),
(38, 410303, 'Bono retiro asistentes educación (Ley Nº 20.244, art.1º transitorio)', 3),
(39, 410304, 'Otros gastos en personal', 3),
(40, 410305, 'Bono especial para docentes jubilados art. N° 4 Ley N°20.501', 3),
(41, 410306, 'Bonificación adicional por antigüedad, art. N°6 Ley N°20.652', 3),
(42, 410307, 'Aporte fiscal extraordinario, art 6° Y 7° Ley N° 20.822', 3),
(43, 410308, 'Aporte complementario, art 6° Ley N°20.822', 3),
(44, 410309, 'Sala cuna', 3),
(45, 410310, 'Saneamiento cotizaciones previsionales', 3),
(46, 410311, 'Saneamiento aportes previsionales empleador', 3),
(47, 410401, 'Seguro de accidente del trabajo', 4),
(48, 410402, 'Seguro de cesantía', 4),
(49, 410403, 'Seguro de invalidez y sobrevivencia (SIS)', 4),
(50, 410404, 'Otros aportes previsionales del sostenedor', 4),
(51, 410501, 'Asesoría técnica y capacitación de empresas (registro ATE)', 5),
(52, 410502, 'Perfeccionamiento y capacitación de RR.HH.', 5),
(53, 410601, 'Implementos de laboratorio', 6),
(54, 410602, 'Implementos deportivos', 6),
(55, 410603, 'Instrumentos musicales y artísticos', 6),
(56, 410604, 'Recursos audiovisuales y software educativo', 6),
(57, 410605, 'Material y recursos didácticos', 6),
(58, 410606, 'Bibliotecas, libros y revistas', 6),
(59, 410607, 'Eventos educativos y culturales', 6),
(60, 410608, 'Instrumentos de evaluación diagnóstica', 6),
(61, 410609, 'Otros gastos en recursos de aprendizaje', 6),
(62, 410701, 'Equipos de fotografía y filmación ', 7),
(63, 410702, 'Pizarras interactivas', 7),
(64, 410703, 'Equipos informáticos', 7),
(65, 410704, 'Equipos reproductores de imagen', 7),
(66, 410705, 'Equipos multicopiadores', 7),
(67, 410706, 'Equipos de amplificación y sonido', 7),
(68, 410707, 'Otros gastos en equipamiento de apoyo pedagógico', 7),
(69, 410801, 'Uniformes y vestuario', 8),
(70, 410802, 'Otros gastos bienestar alumnos', 8),
(71, 410803, 'Talleres deportivos', 8),
(72, 410804, 'Consultas médicas', 8),
(73, 410805, 'Apoyo al estudiante', 8),
(74, 410806, 'Útiles escolares', 8),
(75, 410901, 'Transporte escolar', 9),
(76, 410902, 'Materiales de oficina', 9),
(77, 410903, 'Reproducción de documentos', 9),
(78, 410904, 'Alimentación', 9),
(79, 410905, 'Insumos computacionales', 9),
(80, 410906, 'Combustible y peajes', 9),
(81, 410907, 'Materiales y útiles de aseo', 9),
(82, 410908, 'Publicidad', 9),
(83, 410909, 'Pasajes', 9),
(84, 410910, 'Otros gastos de operación', 9),
(85, 410911, 'Gastos municipales e impuestos', 9),
(86, 410912, 'Créditos financieros', 9),
(87, 410913, 'Gastos bancarios', 9),
(88, 410914, 'Devolución apoyo inicio actividad', 9),
(89, 410915, 'Reintegros Fondo de Apoyo a la Educación Pública (FAEP)', 9),
(90, 410916, 'Contratación de seguros', 9),
(91, 411001, ' Internet', 10),
(92, 411002, 'Agua', 10),
(93, 411003, 'Gas', 10),
(94, 411004, 'Electricidad', 10),
(95, 411005, 'Servicio de correspondencia (correos)', 10),
(96, 411006, 'Telefonía (móvil y fija)', 10),
(97, 411007, 'Calefacción', 10),
(98, 411008, 'Otros gastos servicios básicos', 10),
(99, 411101, 'Contratación servicios de aseo y jardinería', 11),
(100, 411102, 'Contratación servicios de seguridad', 11),
(101, 411103, 'Contratación otros servicios externos', 11),
(102, 411201, 'Multas e intereses fiscales y previsionales', 12),
(103, 411401, 'Arriendo de local escolar', 13),
(104, 411402, 'Arriendo de oficinas y/o dependencias de administración', 13),
(105, 411403, 'Arriendo de otros bienes inmuebles', 13),
(106, 411501, 'Arriendo de equipos informáticos', 14),
(107, 411502, 'Arriendo de maquinarias y equipos', 14),
(108, 411503, 'Arriendo de mobiliario', 14),
(109, 411504, 'Arriendo de otros bienes muebles', 14),
(110, 411601, 'Mantención y reparación de infraestructura', 15),
(111, 411602, 'Construcción de infraestructura [obra gruesa]', 15),
(112, 411603, 'Terminaciones de infraestructura', 15),
(113, 411604, 'Instalaciones eléctricas e iluminación', 15),
(114, 411605, 'Instalaciones de gas', 15),
(115, 411606, 'Instalaciones de agua', 15),
(116, 411607, 'Alcantarillados o pozos sépticos', 15),
(117, 411608, 'Cierres perimetrales y obras complementarias', 15),
(118, 411609, 'Servicios higiénicos', 15),
(119, 411610, 'Eliminación de barreras arquitectónicas de menor envergadura', 15),
(120, 411701, 'Mantención y reparación de bienes muebles', 16),
(121, 411702, 'Repuestos, mantenimiento y reparación de vehículos', 16),
(122, 411703, 'Mantención y reparación de equipos computacionales', 16),
(123, 411704, 'Mantención y reparación de mobiliario escolar', 16),
(124, 411705, 'Mantención y reparación de máquinas de oficina', 16),
(125, 411801, 'Adquisición de bienes inmuebles', 17),
(126, 411802, 'Adquisición de mobiliario', 17),
(127, 411803, 'Vehículo', 17),
(128, 411804, 'Adquisición de otros bienes muebles no pedagógicos', 17),
(129, 700001, 'Egresos por recursos centralizados', 18),
(130, 600001, 'Retiros', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_ingresos`
--

CREATE TABLE `cat_ingresos` (
  `id_cat_ingresos` int(11) NOT NULL,
  `id_cat_padre_ingresos` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cat_ingresos`
--

INSERT INTO `cat_ingresos` (`id_cat_ingresos`, `id_cat_padre_ingresos`, `codigo`, `nombre`) VALUES
(1, 1, 310101, 'subvención Base Art.9'),
(2, 1, 310102, 'Incremento Sub. Pie '),
(3, 1, 310103, 'Incremento de Zona'),
(4, 1, 310104, 'Incremento de ruralidad'),
(5, 1, 310106, 'Ley N°2 19.410'),
(6, 1, 310107, 'Ley N°2 19.464'),
(7, 1, 310108, 'Aporte de fondo de Becas'),
(8, 1, 310109, 'Aporte por gratitud'),
(9, 2, 310201, 'Asig,desempeño docente'),
(10, 2, 310202, 'Bonif. comp.Art 3 Leu N°19.200'),
(11, 2, 310203, 'UMP comple.inc 2 art 10 Ley 19.278'),
(12, 2, 310204, 'SNED docent Art 40 dfl n°2'),
(13, 2, 310205, 'SNED asist.Edu. Ley 20.244'),
(14, 2, 310206, 'Bonif de profe.encargados'),
(15, 2, 310207, 'BRP titulo y mención '),
(16, 2, 310208, 'Asig.de excelencia pedagogica '),
(17, 2, 310209, 'Asig variable de desempeño individual'),
(18, 2, 310210, 'Asig. por desempeño colectivo'),
(19, 2, 310211, 'Asig desem.condic.difíciles asis. de la educación '),
(20, 3, 310301, 'Subv.escolar preferencial ley 20.248 SEP'),
(21, 3, 310302, 'Subv por concentración art.16 Ley 20.248'),
(22, 3, 310303, 'Aporte adicional SEP'),
(23, 3, 310304, 'Aporte extraordinario SEP'),
(24, 3, 310305, 'Suvb anual de apoyo y mantenimiento '),
(25, 3, 310306, 'Subv Ed.pro retención Ley N° 19.873 '),
(26, 3, 310307, 'Subv de internado'),
(27, 3, 310308, 'Subv,de refuerzo educativo'),
(28, 4, 310401, 'Reliquidaciones'),
(29, 4, 310402, 'Reliquidaciones FICOM'),
(30, 4, 310403, 'Pagos manuales'),
(31, 4, 310404, 'Devoluciones'),
(32, 4, 310406, 'Ajustes por pagos rezagados SEP'),
(33, 5, 310501, 'Reintegros'),
(34, 5, 310502, 'Multas'),
(35, 5, 310503, 'Descuentos por discrepancias '),
(36, 5, 310504, 'descuentos por derecho de escolaridad'),
(37, 5, 310505, 'Descuentos por FICOM'),
(38, 5, 310506, 'Dcto. por anticipo suvb ley N°20.822'),
(39, 5, 310507, 'Otros descuentas'),
(40, 6, 310601, 'Bono escolar y adicional'),
(41, 6, 310602, 'Aguinaldo de Navidad'),
(42, 6, 310603, 'Aguinaldo de fiestas patrias'),
(43, 6, 310604, 'Bono Especial'),
(44, 6, 310605, 'Bono vacaciones '),
(45, 6, 310606, 'Bono desempeño laboral'),
(46, 6, 310607, 'Otros bonos fiscales'),
(47, 7, 310701, 'Franquicia D.L 889'),
(48, 7, 310702, 'Otros ingresos Fiscales'),
(49, 7, 310704, 'Bonif adicional por antiguedad '),
(50, 7, 310705, 'Aporte fiscal Extraordinario'),
(51, 7, 310706, 'Aporte complementario '),
(52, 7, 310707, 'Fondo de apoyo a la educación publica'),
(55, 8, 310801, 'Matriculas'),
(56, 8, 310802, 'Derecho Escolaridad'),
(57, 8, 310803, 'Ventas de Cert,y otros documentos'),
(58, 8, 310804, 'venta de material pedagógico'),
(59, 8, 310805, 'Ingreso Internado pagado'),
(60, 8, 310806, 'Arriendo de instalaciones'),
(61, 8, 310807, 'Otros ingresos propios'),
(62, 8, 310808, 'Ingreso Financiamiento compartido FICOM'),
(63, 9, 310901, 'Centro de padres y apoderados'),
(64, 9, 310902, 'Instituciones y empresas'),
(65, 9, 310903, 'Personas Naturales'),
(66, 9, 310904, 'Otras Donaciones'),
(67, 10, 311001, 'Ventas de productos y servicios'),
(68, 11, 311101, 'Intereses reajustes mercados capitales'),
(69, 11, 311102, 'Otros ingresos financieros '),
(70, 11, 311103, 'Otros Ingresos'),
(71, 11, 311104, 'Ingreso apoyo inicio actividad'),
(72, 11, 311105, 'Reintegros licencias medicas'),
(73, 11, 311106, 'Aporte municipal'),
(74, 12, 800001, 'Ingresos por recursos centralizados'),
(75, 13, 900001, 'Ingresos por gastos no aceptados ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_padre_egresos`
--

CREATE TABLE `cat_padre_egresos` (
  `id_padre_egreso` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(80) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cat_padre_egresos`
--

INSERT INTO `cat_padre_egresos` (`id_padre_egreso`, `codigo`, `nombre`) VALUES
(1, 410100, 'Gastos remuneracionales'),
(2, 410200, 'Gastos por bonos y aguinaldos'),
(3, 410300, 'Otros Gastos en personal'),
(4, 410400, 'Aportes previsionales'),
(5, 410500, 'Asesoría técnica y capacitación'),
(6, 410600, 'Gastos en recursos aprendizaje'),
(7, 410700, 'Equipamiento Ap. pedagógico'),
(8, 410800, 'Bienestar Alumnos'),
(9, 410900, 'Gastos de Operación '),
(10, 411000, 'Servicios básicos'),
(11, 411100, 'Servicios generales'),
(12, 411200, 'Multas e intereses'),
(13, 411400, 'Arriendos de inmuebles'),
(14, 411500, 'Arriendos de bienes muebles'),
(15, 411600, 'Gastos en Construcción y mantención de infraestructura'),
(16, 411700, 'Gastos en mantención y reparación de bienes muebles'),
(17, 411800, 'Adquisición de bienes muebles e inmuebles '),
(18, 700000, 'Egresos por recursos centralizados'),
(19, 600000, 'Retiros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_padre_ingresos`
--

CREATE TABLE `cat_padre_ingresos` (
  `id_padre_ingreso` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre` varchar(80) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cat_padre_ingresos`
--

INSERT INTO `cat_padre_ingresos` (`id_padre_ingreso`, `codigo`, `nombre`) VALUES
(1, 310100, 'por subvenciones'),
(2, 310200, 'bonif e incrementos remuneracionales'),
(3, 310300, 'Subvenciones Especiales'),
(4, 310400, 'Reliqui.devoluciones y pagos manuales'),
(5, 310500, 'Descuentos Y Multas'),
(6, 310600, 'Bonos y aguinaldos '),
(7, 310700, 'otros ingresos fiscales'),
(8, 310800, 'ingresos propios establecimiento'),
(9, 310900, 'Donaciones'),
(10, 311000, 'Ventas Unidad de Gestión '),
(11, 311100, 'otros ingresos'),
(12, 800000, 'ingresos por recursos centralizados'),
(13, 900000, 'ingresos por gatos no aceptados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET latin1 NOT NULL,
  `capital` int(11) NOT NULL,
  `numero` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `nombre`, `capital`, `numero`) VALUES
(1, 'Banco Chile SEP', 594343, NULL),
(2, 'Banco Chile General', 98602341, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `id` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_cat_egresos` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `egresos`
--

INSERT INTO `egresos` (`id`, `id_cuenta`, `id_cat_egresos`, `id_factura`, `fecha`) VALUES
(1, 2, 51, 7, '2019-03-19 16:53:37'),
(2, 2, 83, 2, '2019-03-25 18:34:17'),
(3, 2, 84, 3, '2019-03-25 19:19:44'),
(4, 2, 84, 4, '2019-03-25 19:29:24'),
(5, 2, 121, 6, '2019-03-25 19:33:03'),
(6, 2, 50, 7, '2019-03-25 19:37:02'),
(7, 2, 84, 8, '2019-03-25 19:41:06'),
(8, 2, 50, 9, '2019-03-26 12:59:58'),
(9, 2, 123, 10, '2019-03-26 13:04:01'),
(10, 2, 83, 11, '2019-03-26 16:16:41'),
(11, 2, 84, 12, '2019-03-26 16:20:46'),
(12, 2, 84, 13, '2019-03-26 16:23:22'),
(13, 2, 84, 14, '2019-03-26 16:31:12'),
(14, 2, 81, 15, '2019-03-26 16:42:57'),
(15, 2, 84, 16, '2019-03-26 16:45:04'),
(16, 2, 84, 17, '2019-03-26 16:47:25'),
(17, 2, 84, 18, '2019-03-26 16:49:07'),
(18, 2, 84, 19, '2019-03-26 16:51:49'),
(19, 2, 84, 20, '2019-03-26 16:54:38'),
(20, 2, 92, 21, '2019-03-26 16:58:23'),
(21, 2, 80, 22, '2019-03-26 17:05:25'),
(22, 2, 84, 23, '2019-03-26 17:08:20'),
(23, 2, 94, 24, '2019-03-26 17:11:16'),
(24, 2, 120, 25, '2019-03-26 17:14:25'),
(25, 2, 91, 26, '2019-03-26 18:53:28'),
(26, 2, 96, 27, '2019-03-26 18:57:38'),
(28, 2, 84, 29, '2019-03-26 19:06:11'),
(29, 2, 84, 30, '2019-03-26 19:10:15'),
(30, 2, 39, 31, '2019-03-28 13:44:38'),
(31, 2, 100, 32, '2019-03-28 14:20:53'),
(32, 2, 100, 33, '2019-03-28 14:23:54'),
(33, 2, 100, 34, '2019-03-28 14:26:27'),
(34, 2, 100, 35, '2019-03-28 14:30:57'),
(35, 2, 39, 36, '2019-03-28 14:40:21'),
(36, 2, 78, 37, '2019-03-28 14:44:42'),
(37, 2, 78, 38, '2019-03-28 14:48:46'),
(38, 2, 99, 39, '2019-03-28 16:08:26'),
(39, 2, 78, 40, '2019-03-28 16:13:46'),
(40, 2, 78, 41, '2019-03-28 16:17:56'),
(41, 2, 101, 42, '2019-03-28 16:22:05'),
(42, 2, 84, 43, '2019-03-28 16:26:16'),
(43, 2, 79, 44, '2019-03-28 16:29:36'),
(44, 2, 101, 45, '2019-03-28 16:37:18'),
(45, 2, 84, 46, '2019-03-28 16:40:43'),
(46, 2, 81, 47, '2019-03-28 16:46:32'),
(47, 2, 70, 48, '2019-03-28 16:54:36'),
(48, 2, 31, 49, '2019-03-28 17:04:21'),
(49, 2, 31, 50, '2019-03-28 17:06:49'),
(50, 2, 75, 51, '2019-03-28 17:09:26'),
(51, 2, 32, 52, '2019-03-28 17:11:52'),
(52, 2, 101, 53, '2019-03-28 17:13:51'),
(53, 2, 75, 54, '2019-03-28 17:24:28'),
(54, 2, 84, 55, '2019-03-28 17:24:49'),
(55, 2, 32, 56, '2019-03-28 17:31:04'),
(56, 2, 32, 57, '2019-03-28 17:34:42'),
(57, 2, 84, 58, '2019-03-28 17:37:07'),
(58, 2, 84, 59, '2019-03-28 17:42:15'),
(59, 2, 123, 60, '2019-04-01 13:30:15'),
(60, 2, 84, 61, '2019-04-01 13:32:46'),
(61, 2, 84, 1, '2019-04-09 13:57:43'),
(62, 2, 95, 67, '2019-04-10 20:16:02'),
(63, 2, 36, 3, '2019-04-29 18:46:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos_sep`
--

CREATE TABLE `egresos_sep` (
  `id_egreso` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_cat_egresos` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `egresos_sep`
--

INSERT INTO `egresos_sep` (`id_egreso`, `id_cuenta`, `id_cat_egresos`, `id_factura`, `fecha`) VALUES
(1, 1, 79, 62, '2019-04-04 19:06:12'),
(2, 1, 79, 63, '2019-04-05 01:37:39'),
(3, 1, 84, 64, '2019-04-09 13:35:16'),
(4, 1, 79, 65, '2019-04-09 13:38:16'),
(5, 1, 51, 9, '2019-04-30 21:55:20'),
(6, 1, 47, 9, '2019-04-30 21:57:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `folio` int(11) NOT NULL,
  `fecha_emision` date NOT NULL,
  `fecha_pago` date DEFAULT NULL,
  `tipo` enum('BOL','BOLE','FAC','FACE','ODE','BOLEC','BOLEX','FACEL','FACEX','FIN','DOCEX','NOTACRE','NOTADEB','PLANILLA','COMPROBANTE PAGO','BOLH','BHE','ODE','BPST','BPSTE','BOLHE','FIN','CHEQUE') COLLATE utf8_unicode_ci NOT NULL,
  `monto` int(11) NOT NULL,
  `detalle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `estado` enum('PENDIENTE','PAGADA','','') COLLATE utf8_unicode_ci NOT NULL,
  `conegreso` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `id_proveedor`, `folio`, `fecha_emision`, `fecha_pago`, `tipo`, `monto`, `detalle`, `estado`, `conegreso`) VALUES
(1, 1, 1, '2019-01-04', '2019-01-04', 'COMPROBANTE PAGO', 300000, 'fondos a rendir ', 'PAGADA', 1),
(2, 2, 7274419, '2019-01-07', '2019-01-07', 'FACEX', 229000, 'PASAJES  REUNIÓN HECTOR SEPULVEDA', 'PAGADA', 1),
(3, 1, 2147483647, '2019-04-18', '2019-03-28', 'COMPROBANTE PAGO', 50000, 'prueba sistema lv', 'PAGADA', 1),
(4, 4, 101, '2019-01-04', '2019-01-04', 'COMPROBANTE PAGO', 6068, 'COMISION SERVICIO DE PAGOS', 'PAGADA', 1),
(5, 4, 101, '2019-01-04', '2019-01-04', '', 6068, 'COMISION SERVICIO DE PAGOS', 'PAGADA', 0),
(6, 6, 972224, '2019-01-05', '2019-01-05', 'FACEL', 27520, 'TOMACORRIENTES , FUSIBLES DÉBITO', 'PAGADA', 1),
(7, 7, 2147483647, '2019-01-06', '2019-01-06', 'COMPROBANTE PAGO', 1804985, '', 'PAGADA', 1),
(8, 8, 2, '2019-01-07', '2019-01-06', 'COMPROBANTE PAGO', 10000000, 'TRASPASO DESDE CTA GENERAL A SEP', 'PAGADA', 1),
(9, 7, 2, '2019-01-06', '2019-01-06', 'COMPROBANTE PAGO', 10420000, 'PAGO IMPOSICIONES COLEGIO LMA ', 'PAGADA', 1),
(10, 9, 95344597, '2019-01-06', '2019-01-06', 'FACEL', 314918, 'MATERIALES DE MANTENCIÓN ', 'PAGADA', 1),
(11, 10, 555182716, '2019-01-07', '2019-01-07', 'COMPROBANTE PAGO', 72200, 'PASAJES CURSO CONGREGACIÓN MARÍA AUXILIADORA', 'PAGADA', 1),
(12, 11, 15656, '2019-01-09', '2019-01-09', 'FACEL', 314738, 'ALOJAMIENTO CURSO CONGREGACIÓN', 'PAGADA', 1),
(13, 5, 3, '2018-11-10', '2019-01-10', 'COMPROBANTE PAGO', 1541099, 'COMISIÓN REC. INTERNET', 'PAGADA', 1),
(14, 12, 7, '2019-01-12', '2019-01-12', 'COMPROBANTE PAGO', 955298, 'IMPUESTOS DICIEMBRE MARIA AUXILIADORA', 'PAGADA', 1),
(15, 13, 68474966, '2019-01-12', '2019-01-12', 'FACEL', 102270, 'ART DE ASEO', 'PAGADA', 1),
(16, 8, 4, '2019-01-12', '2019-01-12', 'COMPROBANTE PAGO', 1000000, 'TRASPASO DESDE CUENTA GENERAL A SEP', 'PAGADA', 1),
(17, 12, 5, '2019-01-12', '2019-01-12', 'COMPROBANTE PAGO', 92308, 'IMPUESTOS COLEGIO MARIA AUXILIADORA', 'PAGADA', 1),
(18, 12, 6, '2019-01-12', '2019-01-12', 'COMPROBANTE PAGO', 3361, 'IMPUESTO DICIEMBRE POR VENTAS', 'PAGADA', 1),
(19, 14, 923893, '2019-01-15', '2019-01-15', 'BOLEC', 65000, 'DIESEL', 'PAGADA', 1),
(20, 15, 8077050, '2019-01-16', '2019-01-16', 'COMPROBANTE PAGO', 400000, 'APERTURA CAJA CHICA 2019 CHQ: 8077050 ', 'PAGADA', 1),
(21, 16, 2088984, '2019-01-17', '2019-01-17', 'BOLEC', 366900, 'SERVICIO DE AGUA BOL 2088984-2088986', 'PAGADA', 1),
(22, 14, 0, '2019-01-17', '2019-01-17', 'BOLEC', 35000, 'DIESEL', 'PAGADA', 1),
(23, 14, 0, '2019-01-17', '2019-01-17', 'BOLEC', 9000, 'CONSUMO', 'PAGADA', 1),
(24, 17, 38930075, '2019-01-08', '2019-01-17', 'BOLEC', 576994, 'SERVICIO ELÉCTRICO BOLEC 38930075-3893007-38930076', 'PAGADA', 1),
(25, 18, 6481, '2019-01-17', '2018-12-17', 'FACEL', 59300, 'REPARACION CORTADORA DE PASTO', 'PAGADA', 1),
(26, 19, 7678812, '2019-01-01', '2019-01-17', 'FACEL', 542532, 'SERVICIO DE INTERNET CHEQUE 8077051', 'PAGADA', 1),
(27, 19, 0, '2019-01-08', '2019-01-17', 'FACEL', 89971, 'CELULARES CHEQUE N°8077052', 'PAGADA', 1),
(28, 19, 0, '2019-01-08', '2019-01-17', 'FACEL', 89971, 'CELULARES CHEQUE N°8077052', 'PAGADA', 1),
(29, 20, 1, '2019-01-17', '2019-01-17', 'COMPROBANTE PAGO', 35043, 'RETENCION JUDICIAL', 'PAGADA', 1),
(30, 21, 534724, '2019-01-17', '2019-01-17', 'COMPROBANTE PAGO', 547084, 'DESCUENTOS COOPEUCH', 'PAGADA', 1),
(31, 22, 0, '2019-02-18', '2019-01-18', 'COMPROBANTE PAGO', 55000, 'ADELANTO DE SUELDO ', 'PAGADA', 1),
(32, 23, 2694958, '2019-01-01', '2019-01-17', 'FACEL', 48221, 'MONITOREO ALARMA', 'PAGADA', 1),
(33, 23, 2720480, '2019-01-01', '2019-01-17', 'FACEL', 42644, 'MONITOREO ALARMA CHK n°8077061', 'PAGADA', 1),
(34, 23, 2705976, '2019-01-01', '2019-01-17', 'FACEL', 57734, 'MONITOREO ALARMA CHQ N°8077058', 'PAGADA', 1),
(35, 23, 2704946, '2019-01-01', '2019-01-17', 'FACEL', 47893, 'MONITOREO ALARMA CHQ N°8077062', 'PAGADA', 1),
(36, 24, 0, '2019-01-17', '2019-01-17', 'COMPROBANTE PAGO', 52202, 'DESCUENTOS CHQ N° 8077057', 'PAGADA', 1),
(37, 25, 10275960, '2019-01-09', '2019-01-17', 'FACEL', 89790, 'ALIMENTOS  COLONIAS', 'PAGADA', 1),
(38, 26, 4134058, '2019-01-07', '2019-01-17', 'FACEL', 93215, 'JUGOS COLONIAS N° 8077063', 'PAGADA', 1),
(39, 27, 76, '2019-01-21', '2019-01-23', 'BHE', 202500, 'MANTENCIÓN PASTO Y PODA BOL 76', 'PAGADA', 1),
(40, 28, 0, '2019-01-25', '2019-01-28', 'BOLEC', 14800, 'CONSUMO', 'PAGADA', 1),
(41, 29, 615, '2019-01-18', '2019-01-29', 'FACEL', 96701, 'ALMUERZOS CONSEJO DIRECTIVO ', 'PAGADA', 1),
(42, 30, 27, '2019-01-28', '2019-01-28', 'FACEL', 476000, 'PINTURA SALAS Y PASILLOS', 'PAGADA', 1),
(43, 4, 0, '2019-01-29', '2019-01-29', 'COMPROBANTE PAGO', 19681, 'COMISIÓN MENSUAL PLAN PYME', 'PAGADA', 1),
(44, 31, 288914, '2019-01-27', '2019-01-29', 'FACEL', 249990, 'AUDÍFONOS OVER ', 'PAGADA', 1),
(45, 32, 22, '2019-01-24', '2019-01-28', 'BHE', 800000, 'ENTREVISTAS ASISTENTE SOCIAL', 'PAGADA', 1),
(46, 8, 0, '2019-01-30', '2019-01-30', 'COMPROBANTE PAGO', 8585356, 'TRASPASO DE CTA GENERAL A SEP', 'PAGADA', 1),
(47, 9, 510357694, '2019-01-30', '2019-01-30', '', 29290, 'ART. DE ASEO', 'PAGADA', 1),
(48, 33, 32, '2019-01-21', '2019-01-30', 'FACEL', 50105100, 'TABLET FAC 32 CHQ N°8077068', 'PAGADA', 1),
(49, 8, 0, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 4306000, 'BONO VACACIONES', 'PAGADA', 1),
(50, 10, 1311, '2019-01-31', '2019-01-31', 'BHE', 700000, 'SERVICIOS DE CONTABILIDAD Y PREVISION', 'PAGADA', 1),
(51, 8, 0, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 29972116, 'SUELDOS DICIEMBRE', 'PAGADA', 1),
(52, 8, 0, '2019-01-31', '2019-01-31', 'PLANILLA', 1190000, 'BONO VACACIONES ', 'PAGADA', 1),
(53, 30, 28, '2019-01-31', '2019-01-31', 'FACEL', 356988, 'SERVICIO DE LIMPIEZA', 'PAGADA', 1),
(54, 34, 8077069, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 238697, 'SUELDO ENERO 2019', 'PAGADA', 1),
(55, 35, 8077070, '2019-01-31', '2019-03-31', 'COMPROBANTE PAGO', 208255, 'SUELDO ENERO 2019', 'PAGADA', 1),
(56, 35, 8077071, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 119000, 'BONO VACACIONES CHQ 8077071', 'PAGADA', 1),
(57, 34, 8077072, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 119000, 'BONO VACACIONES', 'PAGADA', 1),
(58, 15, 8077073, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 99750, 'RENDICIÓN ENERO CAJA CHICA', 'PAGADA', 1),
(59, 36, 8077074, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 96706, 'PATENTE MUNICIPAL ', 'PAGADA', 1),
(60, 9, 11111, '2019-01-21', '2019-01-21', 'BOLEC', 37710, 'MATERIALES DE CONSTRUCCIÓN ', 'PAGADA', 1),
(61, 8, 1, '2019-01-21', '2019-01-21', 'COMPROBANTE PAGO', 7715, 'CARGO SEGURO PROTECCIÓN BANCARIA', 'PAGADA', 1),
(62, 37, 1483, '2019-01-31', '2019-01-31', 'FACEL', 562633, 'KIT DE MANTENIMIENTO ', 'PAGADA', 1),
(63, 37, 1480, '2019-01-09', '2019-01-31', 'FACEL', 240000, 'TONER ', 'PAGADA', 1),
(64, 8, 1, '2019-01-31', '2019-01-31', 'COMPROBANTE PAGO', 4871462, 'PROVISIÓN DE SUELDOS', 'PAGADA', 1),
(65, 37, 1483, '2019-01-11', '2019-01-31', 'FACEL', 562633, 'KIT MANTENIMIENTO  FAC 14836', 'PAGADA', 1),
(66, 38, 1620, '2019-01-29', '2019-01-31', 'FACEL', 129364, 'INSTALACIÓN DE VIDRIOS TERMOPANEL', 'PAGADA', 1),
(67, 4, 76857, '2019-04-10', '2019-04-10', 'BOLEX', 100000, 'prueba sistema', 'PAGADA', 1),
(68, 35, 0, '2019-04-12', NULL, 'FIN', 2147483647, 'aaaaaaaaaaaaa', 'PENDIENTE', 0),
(69, 16, 2147483647, '2019-04-19', NULL, 'CHEQUE', 678678677, 'FHKFDK', 'PENDIENTE', 0),
(70, 1, 23232, '2019-04-11', NULL, 'PLANILLA', 5000000, 'prueba', 'PENDIENTE', 0),
(71, 1, 234234, '2019-04-18', NULL, 'COMPROBANTE PAGO', 50000, 'dsfgsdfg', 'PENDIENTE', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cat_ingresos` int(11) NOT NULL,
  `comentario` varchar(80) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `monto`, `id_cuenta`, `fecha`, `id_cat_ingresos`, `comentario`) VALUES
(1, 5, 2, '2019-01-02 03:00:00', 70, 'AJUSTE POR REC . DE SERVICIOS'),
(2, 57401, 2, '2019-01-02 03:00:00', 62, 'RECAUDACION FICOM'),
(3, 134678, 2, '2019-01-01 03:00:00', 62, 'REC.FICOM'),
(4, 5862446, 2, '2019-01-02 03:00:00', 70, 'TRASPASO DE FONDOS DE SEP A GENERAL'),
(5, 6310215, 2, '2019-01-02 03:00:00', 70, 'TRASPASO DE SEP A GENERAL'),
(6, 7367762, 2, '2019-01-02 03:00:00', 68, 'TRASPASO DE SEO A GENERAL'),
(7, 62007, 2, '2019-01-03 03:00:00', 62, 'FICOM'),
(8, 6431568, 2, '2019-01-03 03:00:00', 70, 'TRASPASO DE FONDOS '),
(9, 101250, 2, '2019-01-07 03:00:00', 62, 'PAGO MARTINA BADILLA AÑO 2018 FICOM'),
(10, 17500, 2, '2019-01-11 03:00:00', 55, 'MATRICULAS'),
(11, 1477437, 2, '2019-01-11 03:00:00', 70, 'REINTEGRO CMD POR PAGO DE FACTURAS '),
(12, 130935, 2, '2019-01-09 03:00:00', 62, 'FICOM'),
(13, 647056, 2, '2019-01-10 03:00:00', 62, 'FICOM'),
(14, 644156, 2, '2019-01-16 03:00:00', 62, 'FICOM'),
(15, 126506, 2, '2019-01-22 03:00:00', 61, 'FICOM'),
(16, 110000, 2, '2019-01-16 03:00:00', 61, 'AGENDAS Y PIOCHAS'),
(17, 113724, 2, '2019-01-23 03:00:00', 70, 'DEVOLUCIÓN BELCY GONZALEZ POR FONDOS A RENDIR '),
(18, 259950, 2, '2019-01-24 03:00:00', 70, 'DEVOLUCIÓN POR FONDOS A RENDIR COLONIAS VERANO'),
(19, 46482757, 2, '2019-01-25 03:00:00', 70, 'PAGO PROVEEDORES MINISTERIO DE EDUCACIÓN'),
(20, 8585356, 2, '2019-01-25 03:00:00', 70, 'PAGO PROVEEDORES PROYECTO SEP'),
(21, 209975, 2, '2019-01-28 03:00:00', 62, 'FICOM'),
(22, 5972000, 2, '2019-01-30 03:00:00', 70, 'PAGO PROVEEDORES BONO ESPECIAL '),
(23, 6905951, 2, '2019-01-30 03:00:00', 70, 'PAGO PROVEEDORES MINISTERIO EDUCACION'),
(24, 141587, 2, '2019-01-30 03:00:00', 62, 'FICOM'),
(25, 180375, 2, '2019-01-30 03:00:00', 62, 'FICOM'),
(26, 10000, 2, '2019-04-11 04:00:00', 20, 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos_sep`
--

CREATE TABLE `ingresos_sep` (
  `id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cat_ingresos` int(11) NOT NULL,
  `comentario` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingresos_sep`
--

INSERT INTO `ingresos_sep` (`id`, `monto`, `id_cuenta`, `fecha`, `id_cat_ingresos`, `comentario`) VALUES
(1, 10000, 1, '2019-04-10 04:00:00', 20, 'prueba sep');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedores` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `razon_social` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `giro` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedores`, `nombre`, `apellido`, `rut`, `razon_social`, `giro`, `direccion`, `telefono`, `ciudad`, `comuna`) VALUES
(1, '', '', '10621621-5', 'BELSY GONZALEZ ', '', '', '', '0', '0'),
(2, '', '', '80314700-0', 'TUR BUS', 'TRANSPORTE', '', '', '0', '0'),
(3, '', '', '7008769-3', 'HECTOR SEPULVEDA ', '', '', '', '0', '0'),
(4, '', '', '65149163-0', 'BANCO CHILE ', '', '', '', '0', '0'),
(5, '', '', '65149163-0', 'BANCO CHILE ', '', '', '', '0', '0'),
(6, '', '', '76762740-8', 'SOC. COMERC. DE REPUESTOS S.A', '', '', '', '0', '0'),
(7, '', '', '96929390-0', 'PREVIRED S.A', '', '', '', '0', '0'),
(8, '', '', '65149163-0', 'CORPORACION ED. SAN IGNACIO DE LOS RIOS', '', '', '', '0', '0'),
(9, '', '', '96792430-K', 'SODIMAC S.A', '', '', '', '0', '0'),
(10, '', '', '7796343-K', 'FLOR RIQUELME ', '', '', '', '0', '0'),
(11, '', '', '76034465-6', 'INMOBILIARIA ENCOMENDEROS S.A', '', '', '', '0', '0'),
(12, '', '', '', 'SERVICIO DE IMPUESTOS INTERNOS ', '', '', '', '0', '0'),
(13, '', '', '8888888', 'prueba update', '', '', '', '0', '0'),
(14, '', '', '76115236-4', 'DE LA FUENTES MARTINES Y CIA LTDA', '', '', '', '0', '0'),
(15, '', '', '15665016-1', 'GIGLIOLA MOGLIA', '', '', '', '0', '0'),
(16, '', '', '96703230-11111', 'AGUASDECIMAaaaaaaaaaaaaa', '', '', '', '0', '0'),
(17, '', '', '76076162-5', 'SAESA', '', '', '', '0', '0'),
(18, '', '', '13399894-2', 'CLAUDIA ALEJANDRA ALVAREZ BARRIL', '', '', '', '0', '0'),
(19, '', '', '96697410-9', 'ENTEL TELEFONÍA LOCAL S.A', '', '', '', '0', '0'),
(20, '', '', '', 'ROSALINA AGUILA ', '', '', '', '0', '0'),
(21, '', '', '', 'COOPEUCH', '', '', '', '0', '0'),
(22, '', '', '', 'LAURA PLASCENCIO', '', '', '', '0', '0'),
(23, '', '', '76058647-1', 'VERISURE SMART ALARMS', '', '', '', '0', '0'),
(24, '', '', '', 'LA CHILENA CONSOLIDADA', '', '', '', '0', '0'),
(25, '', '', '81201000-K', 'CENCISUD RETAIL S.A JUMBO', '', '', '', '0', '0'),
(26, '', '', '84156500-2', 'ALIMENTOS FRUNA LTDA', '', '', '', '0', '0'),
(27, '', '', '7262727-K', 'JOSE ALEJANDRO GONZALEZ GONZALEZ', '', '', '', '0', '0'),
(28, '', '', '', 'EL CAMPERO', '', '', '', '0', '0'),
(29, '', '', '7182936-7', 'OLGA IJULINA BASCUNAN GUZMAN', '', '', '', '0', '0'),
(30, '', '', '76829286-8', 'FULL CLEAN SPA', '', '', '', '0', '0'),
(31, '', '', '78936330-7', 'MACONLINE ', '', '', '', '0', '0'),
(32, '', '', '16599792-1', 'PAULA ALEJANDRA SUAZO SUAZO', '', '', '', '0', '0'),
(33, '', '', '76491053-2', 'IMPORT Y COMEC DE TECNO. FRANCISCO SEPULVEDA', '', '', '', '0', '0'),
(34, '', '', '', 'NORA URBINA SALGADO', '', '', '', '0', '0'),
(35, '', '', '', 'ANA ROMAN CABRERA', '', '', '', '0', '0'),
(36, '', '', '69200100-1', 'ILUSTRE MUNICIPALIDAD DE VALDIVIA', '', '', '', '0', '0'),
(37, '', '', '8016536-6', 'SERGIO ARTURO IRARRAZABAL VELIZ', 'FOTOCOPIAS Y VENTAS ', '', '', '0', '0'),
(38, '', '', '76339654-1', 'INVERSIONES SOTO GOMEZ LIMITADA', '', '', '', '0', '0'),
(39, '', '', '17964044-9', 'jorge obreque', 'informatica', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maux` int(11) DEFAULT '0',
  `lv` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `password`, `maux`, `lv`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1),
(3, 'prueba', '711383a59fda05336fd2ccf70c8059d1523eb41a', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_egresos`
--
ALTER TABLE `cat_egresos`
  ADD PRIMARY KEY (`id_cat_egreso`),
  ADD KEY `id_cat_padre_egresos` (`id_cat_padre_egresos`);

--
-- Indices de la tabla `cat_ingresos`
--
ALTER TABLE `cat_ingresos`
  ADD PRIMARY KEY (`id_cat_ingresos`),
  ADD KEY `id_cat_padre_ingresos` (`id_cat_padre_ingresos`);

--
-- Indices de la tabla `cat_padre_egresos`
--
ALTER TABLE `cat_padre_egresos`
  ADD PRIMARY KEY (`id_padre_egreso`);

--
-- Indices de la tabla `cat_padre_ingresos`
--
ALTER TABLE `cat_padre_ingresos`
  ADD PRIMARY KEY (`id_padre_ingreso`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero` (`numero`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cuenta` (`id_cuenta`),
  ADD KEY `id_cat_egresos` (`id_cat_egresos`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `egresos_sep`
--
ALTER TABLE `egresos_sep`
  ADD PRIMARY KEY (`id_egreso`),
  ADD KEY `id_cuenta` (`id_cuenta`),
  ADD KEY `id_cat_egresos` (`id_cat_egresos`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cuenta` (`id_cuenta`),
  ADD KEY `id_cat_ingresos` (`id_cat_ingresos`);

--
-- Indices de la tabla `ingresos_sep`
--
ALTER TABLE `ingresos_sep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cuenta` (`id_cuenta`,`id_cat_ingresos`),
  ADD KEY `id_cat_ingresos` (`id_cat_ingresos`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedores`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_egresos`
--
ALTER TABLE `cat_egresos`
  MODIFY `id_cat_egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `cat_ingresos`
--
ALTER TABLE `cat_ingresos`
  MODIFY `id_cat_ingresos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `cat_padre_egresos`
--
ALTER TABLE `cat_padre_egresos`
  MODIFY `id_padre_egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cat_padre_ingresos`
--
ALTER TABLE `cat_padre_ingresos`
  MODIFY `id_padre_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `egresos_sep`
--
ALTER TABLE `egresos_sep`
  MODIFY `id_egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `ingresos_sep`
--
ALTER TABLE `ingresos_sep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_egresos`
--
ALTER TABLE `cat_egresos`
  ADD CONSTRAINT `cat_egresos_ibfk_1` FOREIGN KEY (`id_cat_padre_egresos`) REFERENCES `cat_padre_egresos` (`id_padre_egreso`);

--
-- Filtros para la tabla `cat_ingresos`
--
ALTER TABLE `cat_ingresos`
  ADD CONSTRAINT `cat_ingresos_ibfk_1` FOREIGN KEY (`id_cat_padre_ingresos`) REFERENCES `cat_padre_ingresos` (`id_padre_ingreso`);

--
-- Filtros para la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD CONSTRAINT `egresos_ibfk_1` FOREIGN KEY (`id_cuenta`) REFERENCES `cuentas` (`id`),
  ADD CONSTRAINT `egresos_ibfk_2` FOREIGN KEY (`id_cat_egresos`) REFERENCES `cat_egresos` (`id_cat_egreso`),
  ADD CONSTRAINT `egresos_ibfk_3` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`);

--
-- Filtros para la tabla `egresos_sep`
--
ALTER TABLE `egresos_sep`
  ADD CONSTRAINT `egresos_sep_ibfk_1` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`),
  ADD CONSTRAINT `egresos_sep_ibfk_2` FOREIGN KEY (`id_cat_egresos`) REFERENCES `cat_egresos` (`id_cat_egreso`),
  ADD CONSTRAINT `egresos_sep_ibfk_3` FOREIGN KEY (`id_cuenta`) REFERENCES `cuentas` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedores`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`id_cuenta`) REFERENCES `cuentas` (`id`),
  ADD CONSTRAINT `ingresos_ibfk_2` FOREIGN KEY (`id_cat_ingresos`) REFERENCES `cat_ingresos` (`id_cat_ingresos`);

--
-- Filtros para la tabla `ingresos_sep`
--
ALTER TABLE `ingresos_sep`
  ADD CONSTRAINT `ingresos_sep_ibfk_1` FOREIGN KEY (`id_cat_ingresos`) REFERENCES `cat_ingresos` (`id_cat_ingresos`),
  ADD CONSTRAINT `ingresos_sep_ibfk_2` FOREIGN KEY (`id_cuenta`) REFERENCES `cuentas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
