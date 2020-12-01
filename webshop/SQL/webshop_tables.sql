USE webshop;

DROP table IF EXISTS `felhasznalok`;

CREATE TABLE `felhasznalok` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fnev` text COLLATE utf8_hungarian_ci NOT NULL,
  `fjelszo` text COLLATE utf8_hungarian_ci NOT NULL,
  `femail` text COLLATE utf8_hungarian_ci NOT NULL,
  `flakcim` text COLLATE utf8_hungarian_ci,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `fjelszo` (`fjelszo`(15)),
  UNIQUE KEY `fnev` (`fnev`(15)),
  UNIQUE KEY `femail` (`femail`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP table IF EXISTS `termekek`;

CREATE TABLE `termekek` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `tnev` text NOT NULL,
  `tleiras` text NOT NULL,
  `tar` bigint(20) NOT NULL,
  `kep` text NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;



DROP table IF EXISTS `kosar`;

CREATE TABLE `kosar` (
     `kid` INT(10) NOT NULL , 
     `fid` INT(10) NOT NULL , 
     `tid` INT(10) NOT NULL , 
     `kfizetve` INT(2),
     PRIMARY KEY (`kid`)
) ENGINE = InnoDB;

