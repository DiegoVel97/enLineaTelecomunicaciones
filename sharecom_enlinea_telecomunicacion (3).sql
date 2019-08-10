-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2019 a las 18:26:35
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sharecom_enlinea_telecomunicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_banner`
--

CREATE TABLE `pag_banner` (
  `id` int(11) NOT NULL,
  `titulo` longtext NOT NULL,
  `descripcion` longtext NOT NULL,
  `descripcion_boton` longtext NOT NULL,
  `fecha_publicacion` varchar(11) NOT NULL,
  `fecha_expiracion` varchar(12) NOT NULL,
  `hipervinculo_boton` longtext NOT NULL,
  `imagen` longtext NOT NULL,
  `estado` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_banner`
--

INSERT INTO `pag_banner` (`id`, `titulo`, `descripcion`, `descripcion_boton`, `fecha_publicacion`, `fecha_expiracion`, `hipervinculo_boton`, `imagen`, `estado`) VALUES
(1, '<p>Bienvenidos</p>\n', '<p>El banner de la web de los asociados</p>\n', '<p>Bienvenidos</p>\n', '2017-12-12', '2019-02-14', 'https://blog.outbook.es/desarrollo-web/php/php-limitar-el-numero-de-caracteres-de-una-cadena', 'prueba.jpg', 'activo'),
(2, '<p>Bienvenidos</p>\n', '<p>Bienvenidos</p>\n', '<p>Bienvenidos</p>\n', '2018-12-12', '2019-07-24', 'https://blog.outbook.es/desarrollo-web/php/php-limitar-el-numero-de-caracteres-de-una-cadena', '1457718472844.jpg', 'activo'),
(3, '<p>Bienvenidos</p>\n', '<p>Bienvenidos</p>\n', '<p>Bienvenidos</p>\n', '2019-12-12', '2020-12-12', 'aa', 'estaes.jpg', 'activo'),
(4, '<p>Bienvenidos</p>\n', '<p>Bienvenidos</p>\n', '<p>Bienvenidos</p>\n', '2019-07-18', '2020-12-12', 'hOLA MUNDO COMO ESTAN', '4.jpg', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_contacto`
--

CREATE TABLE `pag_contacto` (
  `id` int(11) NOT NULL,
  `nombre` longtext NOT NULL,
  `telefono` varchar(13) NOT NULL,
  `direccion` longtext NOT NULL,
  `email` longtext NOT NULL,
  `mensaje` longtext NOT NULL,
  `estado` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_contacto`
--

INSERT INTO `pag_contacto` (`id`, `nombre`, `telefono`, `direccion`, `email`, `mensaje`, `estado`) VALUES
(1, 'd', 'd333', 'd3deed', 'ddeeded', 'eded', 'activo'),
(2, 'dedddddddddddddddddddddd', 'deeeeeeeeee', 'ddeeeeeeeeee', 'deeeeeeeeeedeeeeeeeeeedeeeeeeeeeedeeeeeeeeeedeeeeeeeeee', 'La página todavía se rompe en medio de mi mesa.\r\n\r\n¿Es posible configurar mi html / css para que la página se rompa antes que el elemento si el elemento excede la altura de la página?\r\n\r\nIdealmente, me gustaría dividir mi html en secciones div para que cada sección comience en una nueva página si va a superar la altura de la página actual.', 'deeeeeeeeee'),
(3, 'h', 'h', 'h', 'h', 'h', 'activo'),
(4, 'ffff', 'ff', 'f', 'f', 'ddd', 'activo'),
(5, 'Diego Velez', '3135523082', 'Cra 23 # 52 - 23 ', 'diego2gmail.com', 'ddddd', 'activo'),
(6, 'Diego', '3006227815', 'Cra 23', 'diegofernando9705@gmail.com', 'Hola, este es la prueba', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_controlador`
--

CREATE TABLE `pag_controlador` (
  `cont_id` int(11) NOT NULL,
  `mod_id` int(11) NOT NULL,
  `cont_nombre` varchar(40) NOT NULL,
  `cont_icono` varchar(40) NOT NULL,
  `cont_display` varchar(40) NOT NULL,
  `cont_descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_controlador`
--

INSERT INTO `pag_controlador` (`cont_id`, `mod_id`, `cont_nombre`, `cont_icono`, `cont_display`, `cont_descripcion`) VALUES
(14, 9, 'permisosController', 'mdi-action-lock', 'Permisos', 'Controlador de Permisos'),
(33, 21, 'headerController', 'mdi-editor-insert-photo', 'Header', 'Controlador de Header'),
(16, 11, 'prestamoController', 'mdi-action-shopping-cart', 'Prestamo', 'Controlador de Prestamos'),
(21, 15, 'personasController', 'mdi-action-perm-identity', 'Personas', 'Controlador de personas'),
(18, 13, 'rolesController', 'mdi-social-group', 'Roles', 'Controlador de Roles'),
(20, 15, 'usuariosController', 'mdi-action-account-circle', 'Usuarios', 'Controlador de Usuarios'),
(32, 21, 'galeriaController', 'mdi-editor-insert-photo', 'Banner', 'Controlador de Banner'),
(31, 20, 'navegacionController', 'mdi-action-subject', 'Navegacion', 'Controlador de Navegacion'),
(30, 19, 'contactoController', 'mdi-action-assignment', 'Contacto', 'Controlador de Contacto'),
(29, 18, 'noticiasController', 'mdi-editor-insert-drive-file', 'Noticias', 'Controlador de Noticias'),
(28, 17, 'nosotrosController', 'mdi-social-group', 'Nosotros', 'Controlador de Roles'),
(34, 22, 'planesController', 'mdi-action-view-list', 'Planes y Tarifas', 'Controlador de planes y tarifas'),
(35, 21, 'promocionController', 'mdi-editor-insert-photo', 'Promociones', 'Controlador de promocion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_estado`
--

CREATE TABLE `pag_estado` (
  `est_id` int(11) NOT NULL,
  `est_descripcion` varchar(45) NOT NULL,
  `tdoc_id` int(11) NOT NULL,
  `estado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_estado`
--

INSERT INTO `pag_estado` (`est_id`, `est_descripcion`, `tdoc_id`, `estado`) VALUES
(1, 'Activo', 1, NULL),
(2, 'Inactivo', 1, NULL),
(3, 'Creada', 2, NULL),
(4, 'En ejecuci?n', 2, NULL),
(5, 'Gestionada', 2, NULL),
(6, 'Cerrada', 2, NULL),
(7, 'Por atender', 4, NULL),
(8, 'Atendida', 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_funcion`
--

CREATE TABLE `pag_funcion` (
  `func_id` int(11) NOT NULL,
  `cont_id` int(11) NOT NULL,
  `func_nombre` varchar(40) NOT NULL,
  `func_display` varchar(40) NOT NULL,
  `func_descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_funcion`
--

INSERT INTO `pag_funcion` (`func_id`, `cont_id`, `func_nombre`, `func_display`, `func_descripcion`) VALUES
(53, 14, 'crear', 'Asignar', 'Asignar Permisos'),
(76, 20, 'eliminar', 'Eliminar Usuario', 'Eliminar Usuario'),
(75, 20, 'listar', 'Listar Usuarios', 'Listar Usuarios'),
(74, 20, 'editar', 'Editar Usuario', 'Editar Usuario'),
(73, 20, 'crear', 'Crear Usuario', 'Crear Usuario'),
(65, 18, 'crear', 'Crear Rol', 'Crear Rol'),
(66, 18, 'editar', 'Editar Rol', 'Editar Rol'),
(67, 18, 'listar', 'Listar roles', 'Lista los roles'),
(68, 18, 'eliminar', 'ELiminar Rol', 'ELiminar Rol'),
(77, 21, 'crear', 'Importar Archivo Plano', 'Importar Plano'),
(109, 33, 'update', 'Cambiar imagen header', 'Cambiar imagen header'),
(108, 32, 'listar', 'Listar imagenes', 'Listar imagenes'),
(107, 32, 'crear', 'Agregar imagen', 'Agregar Imagen'),
(106, 31, 'listar', 'Edicion navegacion', 'Editar navegacion'),
(105, 30, 'mapa', 'Edicion mapa', 'Listar contacto'),
(104, 30, 'listar', 'Listar contacto', 'Listar contacto'),
(103, 29, 'listar', 'Listar noticia', 'Listar noticia'),
(102, 29, 'crear', 'Crear noticia', 'Crear noticia'),
(99, 28, 'mision', 'Edicion mision', 'Editar Mision'),
(100, 28, 'vision', 'Editar vision', 'Editar Mision'),
(101, 28, 'nosotros', 'Editar nosotros', 'Editar Mision'),
(110, 34, 'agregar', 'Agregar plan', 'Agregar plan'),
(111, 28, 'servicios', 'Agregar servicio', 'Agregar servicio'),
(112, 28, 'listar', 'Listar servicios', 'Listar servicios'),
(113, 34, 'listar', 'Ver planes', 'listar planes'),
(115, 35, 'update', 'Cambiar imagen', 'Cambiar imagen promocional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_header`
--

CREATE TABLE `pag_header` (
  `id` int(11) NOT NULL,
  `imagen` longtext NOT NULL,
  `estado` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_header`
--

INSERT INTO `pag_header` (`id`, `imagen`, `estado`) VALUES
(1, 'logo-enlinea-comunicaciones.jpeg', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_mapa`
--

CREATE TABLE `pag_mapa` (
  `id` int(12) NOT NULL,
  `descripcion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_mapa`
--

INSERT INTO `pag_mapa` (`id`, `descripcion`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.623684997869!2d-76.49884728521563!3d3.44136507534203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a700efb0b247%3A0x8e9be65ffa2c275c!2sCra.+23+%2352-23%2C+Cali%2C+Valle+del+Cauca!5e0!3m2!1ses-419!2sco!4v1563649316413!5m2!1ses-419!2sco\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_menu_navegacion`
--

CREATE TABLE `pag_menu_navegacion` (
  `id_menu` int(11) NOT NULL,
  `descripcion` varchar(18) NOT NULL,
  `href` longtext NOT NULL,
  `estado` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_menu_navegacion`
--

INSERT INTO `pag_menu_navegacion` (`id_menu`, `descripcion`, `href`, `estado`) VALUES
(1, 'INICIO', '', 'activo'),
(2, 'NOSOTROS', '', 'activo'),
(3, 'NUESTROS SERVICIOS', '', 'activo'),
(4, 'NOTICIAS', '', 'activo'),
(5, 'CONTACTANOS', '', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_mision`
--

CREATE TABLE `pag_mision` (
  `id` int(11) NOT NULL,
  `title_page` longtext NOT NULL,
  `description_page` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_mision`
--

INSERT INTO `pag_mision` (`id`, `title_page`, `description_page`) VALUES
(1, '<h2>Nuestra mision</h2>\n', '<p>Nuestra mision</p>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_modulo`
--

CREATE TABLE `pag_modulo` (
  `mod_id` int(11) NOT NULL,
  `mod_nombre` varchar(20) NOT NULL,
  `mod_icono` varchar(40) NOT NULL,
  `mod_sitio_menu` varchar(20) NOT NULL,
  `mod_descripcion` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_modulo`
--

INSERT INTO `pag_modulo` (`mod_id`, `mod_nombre`, `mod_icono`, `mod_sitio_menu`, `mod_descripcion`) VALUES
(21, 'Banner', 'mdi-editor-insert-photo', 'principal', 'Modulo Banner'),
(20, 'Navegacion', 'mdi-action-subject', 'principal', 'Modulo navegacion'),
(9, 'Permisos', 'mdi-action-lock', 'configuracion', 'Modulo de Permisos'),
(19, 'Contacto', 'mdi-action-assignment', 'principal', 'Modulo contacto'),
(18, 'Noticias', 'mdi-editor-insert-drive-file', 'principal', 'Modulo noticias'),
(13, 'Roles', 'mdi-social-group', 'configuracion', 'Modulo asignar Roles a un usuario'),
(15, 'Usuarios', 'mdi-action-account-circle', 'configuracion', 'Modulo Usuarios'),
(17, 'Nosotros', 'mdi-social-group', 'principal', 'Modulo asignar Roles a un usuario'),
(22, 'Planes', 'mdi-action-view-list', 'principal', 'Modulo planes y tarifas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_nosotros`
--

CREATE TABLE `pag_nosotros` (
  `id` int(11) NOT NULL,
  `title_page` longtext NOT NULL,
  `description_page` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_nosotros`
--

INSERT INTO `pag_nosotros` (`id`, `title_page`, `description_page`) VALUES
(1, '<h1><strong><img alt=\"\" src=\"blob:http://localhost/3b38c041-3c6e-4732-a782-323cdb903c93\" style=\"width:1203px\" />&iquest;Quienes somos?</strong></h1>\n\n<hr />\n<p style=\"text-align:justify\"><span style=\"color:#000000\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</span></p>\n\n<p style=\"text-align:justify\"><span style=\"color:#000000\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</span></p>\n\n<p><img alt=\"\" src=\"blob:http://www.tecnoshare.com.co/a2eb1e36-ac64-401f-8e9b-271a37e5cc64\" style=\"width:1203px\" /></p>\n\n<p>&nbsp;</p>\n', '<p>Hola mundo</p>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_noticias`
--

CREATE TABLE `pag_noticias` (
  `id` int(11) NOT NULL,
  `title_notice` longtext NOT NULL,
  `description_notice` longtext NOT NULL,
  `publicate_date_notice` varchar(12) NOT NULL,
  `expirate_date_notice` varchar(12) NOT NULL,
  `image_notice` longtext NOT NULL,
  `estado_notice` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_noticias`
--

INSERT INTO `pag_noticias` (`id`, `title_notice`, `description_notice`, `publicate_date_notice`, `expirate_date_notice`, `image_notice`, `estado_notice`) VALUES
(20, '<h1><span style=\"font-size:36px\"><strong>An&aacute;lisis: &iquest;Por qu&eacute; una foto suya se puede convertir en meme</strong></span></h1>\n', '<p>Una foto suya con los ojos torcidos, un gesto gracioso o una cara particular. No se necesita mucho para convertirse en meme. La l&oacute;gica de estas im&aacute;genes virales en las redes sociales es la misma que en el mundo f&iacute;sico: la burla.&nbsp;&nbsp;<br />\n<br />\nAunque la s&aacute;tira y el humor son parte de la libertad de expresi&oacute;n, a nadie le gusta ser el objeto de las burlas de los otros. Pero ni usted ni yo estamos blindados de convertirnos en un fen&oacute;meno viral.&nbsp;<br />\n<br />\n&iquest;Quiere saber c&oacute;mo evitarlo? &iquest;Qu&eacute; hacer si llega a ocurrir? No hay una receta m&aacute;gica y hasta hace poco menos de una d&eacute;cada la posibilidad de demandar a alguien por haber creado un meme suyo era muy remota. Pero hay algunas opciones.&nbsp;</p>\n\n<h3><strong>&iquest;Puede evitar ser un meme?</strong></h3>\n\n<p>As&iacute; como en un sal&oacute;n alguien puede ser tratado de &#39;Dumbo&#39;, por el tama&ntilde;o de sus orejas, o de &#39;Cruella de Vil&#39;, por su edad o su car&aacute;cter,&nbsp; los memes que hacen referencia a una persona espec&iacute;fica (o a un tipo de persona) tienen el mismo efecto en el mundo f&iacute;sico y en el virtual: tender a normalizar el &#39;bullying&#39; y sugerir que la v&iacute;ctima sea &quot;menos sensible&quot;.&nbsp;<br />\n<br />\nPero si ya es bastante grave ser v&iacute;ctima en un sal&oacute;n de clases,&nbsp;<strong>imagine despertarse con miles de notificaciones, cientos de p&aacute;ginas falsas con su rostro y en distintos idiomas, en las que gente que no lo conoce a usted, ni su vida, ni su entorno, se burla indiscriminadamente, reiteradamente.</strong>&nbsp;El acoso &#39;online&#39; es un tema que no duerme, que no descansa y que siempre est&aacute; ah&iacute;, a la vuelta de un clic, desde su propio computador o celular.&nbsp;</p>\n', '2018-07-25', '2019-10-22', '5927b1facba79.jpeg', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_nuestros_servicios`
--

CREATE TABLE `pag_nuestros_servicios` (
  `id` int(12) NOT NULL,
  `descripcion_servicio` longtext NOT NULL,
  `estado_servicio` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_permisos`
--

CREATE TABLE `pag_permisos` (
  `perm_id` int(11) NOT NULL,
  `func_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_permisos`
--

INSERT INTO `pag_permisos` (`perm_id`, `func_id`, `rol_id`) VALUES
(935, 113, 1),
(934, 110, 1),
(933, 112, 1),
(932, 111, 1),
(931, 101, 1),
(930, 100, 1),
(929, 99, 1),
(928, 73, 1),
(927, 74, 1),
(926, 75, 1),
(925, 76, 1),
(924, 77, 1),
(923, 68, 1),
(922, 67, 1),
(921, 66, 1),
(920, 65, 1),
(919, 102, 1),
(918, 103, 1),
(917, 104, 1),
(916, 105, 1),
(915, 53, 1),
(914, 115, 1),
(913, 107, 1),
(912, 108, 1),
(911, 109, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_persona`
--

CREATE TABLE `pag_persona` (
  `per_id` bigint(20) NOT NULL,
  `per_nombre` varchar(45) NOT NULL,
  `per_apellido` varchar(45) NOT NULL,
  `per_telefono` varchar(45) NOT NULL,
  `per_movil` varchar(45) NOT NULL,
  `per_email` varchar(45) NOT NULL,
  `per_direccion` varchar(45) DEFAULT NULL,
  `per_tipo` varchar(50) DEFAULT NULL,
  `estado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_persona`
--

INSERT INTO `pag_persona` (`per_id`, `per_nombre`, `per_apellido`, `per_telefono`, `per_movil`, `per_email`, `per_direccion`, `per_tipo`, `estado`) VALUES
(1151956249, 'super', 'Administrador', '3845030', '3135396721', 'esteban@gmail.com', 'cll 15 BIS #4-9', 'usuario del sistema', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_plan`
--

CREATE TABLE `pag_plan` (
  `id` int(12) NOT NULL,
  `titulo_plan` longtext NOT NULL,
  `valor_plan` longtext NOT NULL,
  `descripcion_del_plan_tiempo` longtext NOT NULL,
  `descripcion_plan` longtext NOT NULL,
  `estado_plan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_plan`
--

INSERT INTO `pag_plan` (`id`, `titulo_plan`, `valor_plan`, `descripcion_del_plan_tiempo`, `descripcion_plan`, `estado_plan`) VALUES
(2, 'Pla Familia', '$156.000', 'Â¡Por aÃ±o!', 'si, esto, es, un, plan, familiar, para, ustedes, nuestros, usuarios', 'activo'),
(3, 'Plan unico', '$45.000', 'Anual', 'Unico e increible que disfruta su familia, Hola mundo, este plan es excelente', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_promocion`
--

CREATE TABLE `pag_promocion` (
  `id` int(11) NOT NULL,
  `imagen` longtext DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `solo_texto` longtext DEFAULT NULL,
  `descripcion_texto` longtext DEFAULT NULL,
  `estado` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_promocion`
--

INSERT INTO `pag_promocion` (`id`, `imagen`, `url`, `solo_texto`, `descripcion_texto`, `estado`) VALUES
(1, 'Si', 'rebajas.gif', 'No', 'No registra', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_rol`
--

CREATE TABLE `pag_rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(20) NOT NULL,
  `rol_descripcion` varchar(100) DEFAULT NULL,
  `estado` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_rol`
--

INSERT INTO `pag_rol` (`rol_id`, `rol_nombre`, `rol_descripcion`, `estado`) VALUES
(1, 'Administrador', 'Tiene acceso a todo el sistema', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_sub_menu`
--

CREATE TABLE `pag_sub_menu` (
  `id_sub` int(11) NOT NULL,
  `descripcion_sub` varchar(80) NOT NULL,
  `href_sub` longtext NOT NULL,
  `id_menu_principal` int(5) NOT NULL,
  `estado_sub` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_sub_menu`
--

INSERT INTO `pag_sub_menu` (`id_sub`, `descripcion_sub`, `href_sub`, `id_menu_principal`, `estado_sub`) VALUES
(1, 'Internet Dedicado y/o Banda Ancha segÃºn sus necesidades', 'Internet Dedicado y/o Banda Ancha segÃºn sus necesidades', 5, 'activo'),
(2, 'Conectividad entre sedes.', 's', 3, 'activo'),
(3, 'ConfiguraciÃ³n de redes LAN', 'ddddd', 3, 'activo'),
(4, 'SoluciÃ³n inalÃ¡mbrica para uso exterior (outdoor) y/o Interior (indoor). ', 'aaa', 3, 'activo'),
(5, 'Redes de cableado estructurado', 'aaa', 3, 'activo'),
(6, 'Venta y alquiler de equipos Networking.', 'ddd', 3, 'activo'),
(7, 'Soporte tï¿½cnico para redes LAN y WAN', 's', 3, 'activo'),
(8, 'Hola mundo\n', 'href', 3, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_tiempo_medidor`
--

CREATE TABLE `pag_tiempo_medidor` (
  `tm_id` int(11) NOT NULL,
  `tm_nombre` varchar(45) NOT NULL,
  `tm_seg` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_tiempo_medidor`
--

INSERT INTO `pag_tiempo_medidor` (`tm_id`, `tm_nombre`, `tm_seg`) VALUES
(1, 'dias', '86400'),
(2, 'semana', '604800'),
(3, 'mes', '2678400');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_usuario`
--

CREATE TABLE `pag_usuario` (
  `per_id` bigint(20) NOT NULL,
  `usu_usuario` varchar(45) NOT NULL,
  `usu_clave` varchar(200) NOT NULL,
  `usu_estado` varchar(45) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pag_usuario`
--

INSERT INTO `pag_usuario` (`per_id`, `usu_usuario`, `usu_clave`, `usu_estado`, `rol_id`) VALUES
(1151956249, 'admin', 'b9ddaf31e98e6d249804d3f7a9e936f82a12af32', 'activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pag_vision`
--

CREATE TABLE `pag_vision` (
  `id` int(11) NOT NULL,
  `title_page` longtext NOT NULL,
  `description_page` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pag_vision`
--

INSERT INTO `pag_vision` (`id`, `title_page`, `description_page`) VALUES
(1, '<h2>Nuestra Visi&oacute;n</h2>\n', '<p>Facilitar la construcion de una vida de prosperidad y bienestar.</p>\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pag_banner`
--
ALTER TABLE `pag_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_contacto`
--
ALTER TABLE `pag_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_controlador`
--
ALTER TABLE `pag_controlador`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indices de la tabla `pag_estado`
--
ALTER TABLE `pag_estado`
  ADD PRIMARY KEY (`est_id`),
  ADD KEY `tdoc_id` (`tdoc_id`);

--
-- Indices de la tabla `pag_funcion`
--
ALTER TABLE `pag_funcion`
  ADD PRIMARY KEY (`func_id`);

--
-- Indices de la tabla `pag_header`
--
ALTER TABLE `pag_header`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_mapa`
--
ALTER TABLE `pag_mapa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_menu_navegacion`
--
ALTER TABLE `pag_menu_navegacion`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `pag_mision`
--
ALTER TABLE `pag_mision`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_modulo`
--
ALTER TABLE `pag_modulo`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `pag_nosotros`
--
ALTER TABLE `pag_nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_noticias`
--
ALTER TABLE `pag_noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_nuestros_servicios`
--
ALTER TABLE `pag_nuestros_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_permisos`
--
ALTER TABLE `pag_permisos`
  ADD PRIMARY KEY (`perm_id`);

--
-- Indices de la tabla `pag_persona`
--
ALTER TABLE `pag_persona`
  ADD PRIMARY KEY (`per_id`);

--
-- Indices de la tabla `pag_plan`
--
ALTER TABLE `pag_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_promocion`
--
ALTER TABLE `pag_promocion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pag_rol`
--
ALTER TABLE `pag_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `pag_sub_menu`
--
ALTER TABLE `pag_sub_menu`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_menu_principal` (`id_menu_principal`);

--
-- Indices de la tabla `pag_tiempo_medidor`
--
ALTER TABLE `pag_tiempo_medidor`
  ADD PRIMARY KEY (`tm_id`);

--
-- Indices de la tabla `pag_usuario`
--
ALTER TABLE `pag_usuario`
  ADD PRIMARY KEY (`per_id`),
  ADD UNIQUE KEY `usu_usuario_UNIQUE` (`usu_usuario`);

--
-- Indices de la tabla `pag_vision`
--
ALTER TABLE `pag_vision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pag_banner`
--
ALTER TABLE `pag_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pag_contacto`
--
ALTER TABLE `pag_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pag_controlador`
--
ALTER TABLE `pag_controlador`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `pag_estado`
--
ALTER TABLE `pag_estado`
  MODIFY `est_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pag_funcion`
--
ALTER TABLE `pag_funcion`
  MODIFY `func_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de la tabla `pag_header`
--
ALTER TABLE `pag_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_mapa`
--
ALTER TABLE `pag_mapa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_menu_navegacion`
--
ALTER TABLE `pag_menu_navegacion`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pag_mision`
--
ALTER TABLE `pag_mision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_modulo`
--
ALTER TABLE `pag_modulo`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `pag_nosotros`
--
ALTER TABLE `pag_nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_noticias`
--
ALTER TABLE `pag_noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pag_nuestros_servicios`
--
ALTER TABLE `pag_nuestros_servicios`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pag_permisos`
--
ALTER TABLE `pag_permisos`
  MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=936;

--
-- AUTO_INCREMENT de la tabla `pag_plan`
--
ALTER TABLE `pag_plan`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pag_promocion`
--
ALTER TABLE `pag_promocion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_rol`
--
ALTER TABLE `pag_rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pag_sub_menu`
--
ALTER TABLE `pag_sub_menu`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pag_tiempo_medidor`
--
ALTER TABLE `pag_tiempo_medidor`
  MODIFY `tm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pag_vision`
--
ALTER TABLE `pag_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pag_sub_menu`
--
ALTER TABLE `pag_sub_menu`
  ADD CONSTRAINT `pag_sub_menu_ibfk_1` FOREIGN KEY (`id_menu_principal`) REFERENCES `pag_menu_navegacion` (`id_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
