SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `competences` (
  `id_competence` int(10) NOT NULL AUTO_INCREMENT,
  `domaine` varchar(50) NOT NULL DEFAULT '',
  `technologies` text NOT NULL,
  PRIMARY KEY (`id_competence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `complements` (
  `id_complement` int(10) NOT NULL AUTO_INCREMENT,
  `complement` varchar(50) NOT NULL DEFAULT '',
  `details` text NOT NULL,
  PRIMARY KEY (`id_complement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `experience` (
  `id_experience` int(10) NOT NULL AUTO_INCREMENT,
  `date_experience` varchar(4) NOT NULL DEFAULT '',
  `intitule` varchar(30) NOT NULL DEFAULT '',
  `entreprise` varchar(30) NOT NULL DEFAULT '',
  `ville` varchar(20) NOT NULL DEFAULT '',
  `infos` text NOT NULL,
  `periode` varchar(255) NOT NULL DEFAULT '',
  `est_fini` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_experience`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(10) NOT NULL AUTO_INCREMENT,
  `date_formation` varchar(4) NOT NULL DEFAULT '',
  `etablissement` varchar(50) NOT NULL DEFAULT '',
  `ville` varchar(20) NOT NULL DEFAULT '',
  `infos` text NOT NULL,
  `est_fini` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_formation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `informations` (
  `titre` varchar(50) NOT NULL DEFAULT '',
  `nom` varchar(255) DEFAULT NULL,
  `adresse1` varchar(255) DEFAULT NULL,
  `adresse2` varchar(255) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `telephone` int(9) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `naissance` varchar(10) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `viadeo` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `bio` text,
  `permis` varchar(50) DEFAULT NULL,
  `vehicule` tinyint(1) NOT NULL,
  PRIMARY KEY (`titre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `informations` (`titre`, `nom`, `adresse1`, `adresse2`, `cp`, `telephone`, `ville`, `email`, `naissance`, `twitter`, `googleplus`, `viadeo`, `linkedin`, `bio`, `permis`, `vehicule`) VALUES
('DÃ©veloppeur Web DRUPAL', 'John DOE', 'numÃ©ro, nom de rue', 'complÃ©ment d''adresse', '31000', 707070707, '', 'john.doe@domain.tld', '07/08/1987', 'https://twitter.com/johndoe', 'https://plus.google.com/johndoe', 'http://fr.viadeo.com/fr/profile/johndoe', 'http://fr.linkedin.com/in/johndoe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus, metus ut dapibus pretium, ex enim porttitor est, rhoncus ultricies erat nulla id orci. Duis tincidunt nulla sit amet neque rhoncus, eleifend vehicula magna tincidunt. Fusce finibus diam vitae maximus finibus. Ut hendrerit facilisis commodo. Nunc vel libero laoreet, accumsan enim in, commodo erat. Nullam molestie semper pharetra. Donec ornare sit amet tellus quis scelerisque. Duis venenatis, sapien non venenatis suscipit, ipsum nulla tempor massa, nec efficitur nulla tortor vitae enim. Donec accumsan lacus vitae ex consequat, eget tincidunt sapien finibus. ', 'B', 1);

CREATE TABLE IF NOT EXISTS `langues` (
  `id_langue` int(10) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) NOT NULL DEFAULT '',
  `niveau` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_langue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `liens` (
  `id_lien` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_lien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `technologies` (
  `id_technologie` int(10) NOT NULL AUTO_INCREMENT,
  `technologie` varchar(50) NOT NULL DEFAULT '',
  `definition` text NOT NULL,
  PRIMARY KEY (`id_technologie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `technologies` (`id_technologie`, `technologie`, `definition`) VALUES
(1, 'PHPTechnologie', 'une fefDÃ©finition'),
(2, 'Drupal', 'You rock my world !\r\n');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
