CREATE TABLE IF NOT EXISTS `tblventas` (
 `idventa` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `categoria` varchar(20) NOT NULL,
 `mes` varchar(10) NOT NULL,
 `total` decimal(9,2) unsigned NOT NULL,
 PRIMARY KEY (`idventa`)
) ENGINE=InnoDB