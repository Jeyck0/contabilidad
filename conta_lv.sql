-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2019 a las 00:32:51
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
-- Base de datos: `conta_lv`
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
(1, 'Banco Chile SEP', 697798, NULL),
(2, 'Banco Chile General', 98792341, NULL),
(3, 'Banco Chile PIE', 1000000, '21');

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
(1, 2, 72, 6, '2019-04-29 18:52:55'),
(2, 2, 36, 6, '2019-04-29 18:53:56'),
(3, 2, 49, 8, '2019-04-30 21:51:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos_pie`
--

CREATE TABLE `egresos_pie` (
  `id_egreso` int(11) NOT NULL,
  `id_cuenta` int(11) NOT NULL,
  `id_cat_egresos` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `egresos_pie`
--

INSERT INTO `egresos_pie` (`id_egreso`, `id_cuenta`, `id_cat_egresos`, `id_factura`, `fecha`) VALUES
(1, 3, 47, 12, '2019-05-01 02:28:01'),
(2, 3, 47, 13, '2019-05-05 15:29:45'),
(3, 3, 47, 13, '2019-05-05 15:31:30');

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
(1, 1, 36, 9, '2019-04-30 21:58:16'),
(2, 3, 51, 10, '2019-05-01 02:24:01'),
(3, 3, 1, 11, '2019-05-01 02:26:05');

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
  `tipo` enum('BOL','BOLE','FAC','FACE','ODE','BOLEC','BOLEX','FACEL','FACEX','FIN','DOCEX','NOTACRE','NOTADEB','PLANILLA','COMPROBANTE PAGO','BOLH','BHE','ODE','BPST','BPSTE','BOLHE','FIN') COLLATE utf8_unicode_ci NOT NULL,
  `monto` int(11) NOT NULL,
  `detalle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `estado` enum('PENDIENTE','PAGADA','','') COLLATE utf8_unicode_ci NOT NULL,
  `conegreso` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `id_proveedor`, `folio`, `fecha_emision`, `fecha_pago`, `tipo`, `monto`, `detalle`, `estado`, `conegreso`) VALUES
(6, 2, 111, '2019-04-17', '2019-04-04', 'NOTADEB', 50000, 'prueba', 'PAGADA', 1),
(7, 1, 222, '2019-04-18', '2019-04-04', 'PLANILLA', 10000, 'prueba 2', 'PAGADA', 1),
(8, 4, 10000, '2019-04-10', '2019-04-04', 'NOTADEB', 100000, 'prueba 3', 'PAGADA', 1),
(9, 2, 5000, '2019-04-11', '2019-04-11', 'COMPROBANTE PAGO', 9999, 'sep prueba', 'PAGADA', 1),
(10, 2, 111, '2019-04-17', '2019-04-30', 'NOTACRE', 20000, 'para pie', 'PAGADA', 1),
(11, 1, 343, '2019-04-17', '2019-03-28', 'NOTADEB', 10000, 'prueba pie', 'PAGADA', 1),
(12, 1, 32423, '2019-04-18', '2019-03-28', 'NOTADEB', 2342, 'prueba pie', 'PAGADA', 1),
(13, 1, 989866, '2019-05-01', '2019-01-01', 'NOTACRE', 10000, 'prueba fecha pago 1 enero 2019', 'PAGADA', 1);

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
(1, 100000, 2, '2019-04-18 04:00:00', 30, 'prueba ingreso'),
(2, 100000, 2, '2019-04-18 04:00:00', 30, 'prueba ingreso');

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
(1, 100000, 1, '2019-04-18 04:00:00', 28, 'prueba ingreso sep lv'),
(2, 3455, 1, '2019-05-01 04:00:00', 28, 'prueba');

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
(1, 'jorge', 'obreque', '17964044-9', 'jgom eirl', 'informatica', NULL, '', '', ''),
(2, '', '', '17964044-9', 'jorge eirl', 'info', '', '', '', ''),
(3, '', '', '17964044-9', 'jorge eirl', 'info', '', '', '', ''),
(4, '', '', '564654', 'no se', 'prueba', '', '', '', '');

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
-- Indices de la tabla `egresos_pie`
--
ALTER TABLE `egresos_pie`
  ADD PRIMARY KEY (`id_egreso`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `egresos`
--
ALTER TABLE `egresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `egresos_pie`
--
ALTER TABLE `egresos_pie`
  MODIFY `id_egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `egresos_sep`
--
ALTER TABLE `egresos_sep`
  MODIFY `id_egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ingresos_sep`
--
ALTER TABLE `ingresos_sep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Filtros para la tabla `egresos_pie`
--
ALTER TABLE `egresos_pie`
  ADD CONSTRAINT `egresos_pie_ibfk_1` FOREIGN KEY (`id_cuenta`) REFERENCES `cuentas` (`id`),
  ADD CONSTRAINT `egresos_pie_ibfk_2` FOREIGN KEY (`id_cat_egresos`) REFERENCES `cat_egresos` (`id_cat_egreso`),
  ADD CONSTRAINT `egresos_pie_ibfk_3` FOREIGN KEY (`id_factura`) REFERENCES `facturas` (`id_factura`);

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
