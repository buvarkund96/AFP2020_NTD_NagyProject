
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

CREATE TABLE `termekek`



DROP table IF EXISTS `kosar`;

CREATE TABLE `kosar` 

