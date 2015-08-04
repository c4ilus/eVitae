
--
-- Base de données: `evitae`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE IF NOT EXISTS `competences` (
  `id_competence` int(10) NOT NULL AUTO_INCREMENT,
  `domaine` varchar(50) NOT NULL DEFAULT '',
  `technologies` text NOT NULL,
  PRIMARY KEY (`id_competence`)
)


--
-- Structure de la table `complements`
--

CREATE TABLE IF NOT EXISTS `complements` (
  `id_complement` int(10) NOT NULL AUTO_INCREMENT,
  `complement` varchar(50) NOT NULL DEFAULT '',
  `details` text NOT NULL,
  PRIMARY KEY (`id_complement`)
)

--
-- Structure de la table `experience`
--

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
)

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id_formation` int(10) NOT NULL AUTO_INCREMENT,
  `date_formation` varchar(4) NOT NULL DEFAULT '',
  `etablissement` varchar(50) NOT NULL DEFAULT '',
  `ville` varchar(20) NOT NULL DEFAULT '',
  `infos` text NOT NULL,
  `est_fini` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_formation`)
) 

--
-- Structure de la table `informations`
--

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
) 

--
-- Structure de la table `langues`
--

CREATE TABLE IF NOT EXISTS `langues` (
  `id_langue` int(10) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) NOT NULL DEFAULT '',
  `niveau` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_langue`)
) 

--
-- Structure de la table `liens`
--

CREATE TABLE IF NOT EXISTS `liens` (
  `id_lien` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_lien`)
) 

--
-- Structure de la table `technologies`
--

CREATE TABLE IF NOT EXISTS `technologies` (
  `id_technologie` int(10) NOT NULL AUTO_INCREMENT,
  `technologie` varchar(50) NOT NULL DEFAULT '',
  `definition` text NOT NULL,
  PRIMARY KEY (`id_technologie`)
) 