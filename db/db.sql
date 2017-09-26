CREATE TABLE `rooms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sdesc` varchar(100) DEFAULT NULL,
  `maxguest` varchar(100) DEFAULT NULL,
  `numbrooms` varchar(10) DEFAULT NULL,
  `date_start` varchar(45) DEFAULT NULL,
  `numbbeds` varchar(100) DEFAULT NULL,
  `numbbaths` varchar(100) DEFAULT NULL,
      `end_date` varchar(100) DEFAULT NULL,
    `dayprice` varchar(100) DEFAULT NULL,
        `weeklyprice` varchar(100) DEFAULT NULL,

  `Botiquin` tinyint(1) DEFAULT NULL,
  `Pestillo en la puerta` tinyint(1) DEFAULT NULL,
  `Extintor de incendios` tinyint(1) DEFAULT NULL,
  `Ficha de instrucciones de seguridad` tinyint(1) DEFAULT NULL,

  `Cocina` tinyint(1) DEFAULT NULL,
  `Internet` tinyint(1) DEFAULT NULL,
  `TV` tinyint(1) DEFAULT NULL,
  `Calefaccion` tinyint(1) DEFAULT NULL,
  `Aire Acondicionado` tinyint(1) DEFAULT NULL,
   `Mascotas` tinyint(1) DEFAULT NULL,
    `Elementos Basicos` tinyint(1) DEFAULT NULL,
   `FreeAparcamiento` tinyint(1) DEFAULT NULL,
    `Rutas proximas` tinyint(1) DEFAULT NULL,


    `name` varchar(100) DEFAULT NULL,
    `email` varchar(100) DEFAULT NULL,
    `country` varchar(100) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
