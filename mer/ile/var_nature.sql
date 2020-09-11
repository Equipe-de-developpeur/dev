-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 10 sep. 2020 à 16:32
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mer_ile`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_deux_frères_rocher`
--

CREATE TABLE `WD_commentaire_deux_frères_rocher` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire_deux_frères_rocher`
--

INSERT INTO `WD_commentaire_deux_frères_rocher` (`comment_id`, `parent_comment_id`, `comment`, `comment_nom_membre`, `date`) VALUES
(21, 0, 'Test incrementation comm', 'Sangohan83', '2020-09-06 20:58:48'),
(22, 21, 'test numero 2', 'Sangohan83', '2020-09-06 20:59:20'),
(23, 21, 'test 3', 'Sangohan83', '2020-09-10 15:18:07'),
(24, 0, 'rhebfbf', 'Sangohan83', '2020-09-10 15:46:28');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_les_fourmigues`
--

CREATE TABLE `WD_commentaire_les_fourmigues` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_le_lion_de_mer`
--

CREATE TABLE `WD_commentaire_le_lion_de_mer` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_le_lion_de_terre`
--

CREATE TABLE `WD_commentaire_le_lion_de_terre` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_rocher_du_rascas`
--

CREATE TABLE `WD_commentaire_rocher_du_rascas` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_des_embiez`
--

CREATE TABLE `WD_commentaire_île_des_embiez` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_des_vieilles`
--

CREATE TABLE `WD_commentaire_île_des_vieilles` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_de_bagaud`
--

CREATE TABLE `WD_commentaire_île_de_bagaud` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_de_bendor`
--

CREATE TABLE `WD_commentaire_île_de_bendor` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_de_la_redonne`
--

CREATE TABLE `WD_commentaire_île_de_la_redonne` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_de_porquerolles`
--

CREATE TABLE `WD_commentaire_île_de_porquerolles` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_de_port_cros`
--

CREATE TABLE `WD_commentaire_île_de_port_cros` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_grand_gaou`
--

CREATE TABLE `WD_commentaire_île_du_grand_gaou` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_grand_ribaud`
--

CREATE TABLE `WD_commentaire_île_du_grand_ribaud` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_grand_rouveau`
--

CREATE TABLE `WD_commentaire_île_du_grand_rouveau` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_levant`
--

CREATE TABLE `WD_commentaire_île_du_levant` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_petit_gaou`
--

CREATE TABLE `WD_commentaire_île_du_petit_gaou` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_petit_ribaud`
--

CREATE TABLE `WD_commentaire_île_du_petit_ribaud` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_du_petit_rouveau`
--

CREATE TABLE `WD_commentaire_île_du_petit_rouveau` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_d_or`
--

CREATE TABLE `WD_commentaire_île_d_or` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_île_rousse`
--

CREATE TABLE `WD_commentaire_île_rousse` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_îlot_de_la_gabinière`
--

CREATE TABLE `WD_commentaire_îlot_de_la_gabinière` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_nom_membre` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `liste_ile`
--

CREATE TABLE `WD_liste_ile` (
  `liste_ile_id` int(11) NOT NULL,
  `liste_ile_nom` varchar(50) DEFAULT NULL,
  `liste_ile_ville` varchar(50) DEFAULT NULL,
  `liste_ile_ecologie` varchar(255) DEFAULT NULL,
  `liste_ile_nombre_de_vote` int(11) DEFAULT 0,
  `liste_ile_note_moyenne` int(11) DEFAULT 0,
  `liste_ile_latitude` float NOT NULL,
  `liste_ile_longitude` float NOT NULL,
  `liste_ile_distance` float NOT NULL DEFAULT 0,
  `liste_ile_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `liste_ile`
--

INSERT INTO `WD_liste_ile` (`liste_ile_id`, `liste_ile_nom`, `liste_ile_ville`, `liste_ile_ecologie`, `liste_ile_nombre_de_vote`, `liste_ile_note_moyenne`, `liste_ile_latitude`, `liste_ile_longitude`, `liste_ile_distance`, `liste_ile_data`) VALUES
(1, 'Île des Embiez', 'Six Fours Les Plages', NULL, 0, 0, 43.0762, 5.78468, 52.62, 'L\'île des Embiez (leis Embiers en occitan selon la norme classique ou leis Embiés en provençal selon la norme mistralienne, signifiant « les deux ») est une île française située à un kilomètre de Six-Fours-les-Plages près de Toulon. Elle est formée par la réunion des îles de la Tour Fondue (en fait, « fendue ») à l\'Ouest et Saint-Pierre ou de la Pinède à l\'Est, reliées par des limons et des alluvions.\r\n\r\nToute l’île a été façonnée dans un style bucolique cher à Paul Ricard, qui donne à l\'île son cachet. La circulation automobile y est très limitée : Paul Ricard a d’ailleurs mis à disposition de ses employés présents sur l’île des voiturettes et mobylettes électriques\r\n '),
(2, 'Île du Grand Gaou', 'Six Fours Les Plages', NULL, 0, 0, 43.0703, 5.78152, 53.32, 'L\'Île du Grand Gaou est une île française du Var. Elle dépend administrativement de Six-Fours-les-Plages et fait géographiquement partie de l\'archipel des Embiez.\r\n\r\nLe site touristique est protégé pour ses plantes sous-marines de la famille des Posidoniaceae (Posidonie). L\'Île du grand Gaou renferme de nombreuses criques, est traversée par un sentier de découverte botanique et dispose d\'aires de pique-nique. Une passerelle la relie à l\'île du Petit Gaou\r\n\r\nL\'ensemble du site de la « Lagune du Brusc » est protégée par une charte Natura 2000, comprenant notamment les hauts fonds de l\'Archipel des Embiez, sur une superficie de 451 hectares'),
(3, 'Île du Petit Gaou', 'Six Fours Les Plages', NULL, 0, 0, 43.0683, 5.78443, 53.47, 'L\'île du Gaou, est située dans le prolongement du port du Brusc, face à l\'île des Embiez. Ce petit paradis est accessible par une passerelle. Elle est très appréciée des habitants et des touristes qui aiment allez y faire un pique nique en famille ou entre amis, ou faire une partie de pétanque sous les pins. Ces fameux pins sculptés par le vent que l\'on nomme pins anémomorphosés.\r\nPetit coin sous les arbres, petites plages, grands espaces pour jouer au ballon, la presqu\'ile est assez variée et tout le monde y trouve son plaisir. Par mauvais temps le Gaou a même une petite ressemblance avec la Bretagne, et ce n\'est pas pour nous déplaire !'),
(4, 'Île du Grand Rouveau', 'Six Fours Les Plages', NULL, 0, 0, 43.0806, 5.75886, 52.72, 'L\'île du Grand Rouveau fait partie de l\'archipel des Embiez qui comprend cinq îles avec le petit Rouveau, le petit Gaou, le grand Gaou et la plus grande l\'île des Embiez. Elle est située sur le territoire de la commune de Six-Fours-les-Plages dans le Var. Propriété du Conservatoire du Littoral depuis 2000, l\'île est gérée par la ville de Six-Fours-les-Plages avec le soutien de l\'initiative des Petites Iles de Méditerranée (initiative PIM), portée par la délégation internationale du Conservatoire du Littoral. C’est un endroit idéal pour la plongée sous marine. Aucune ligne régulière ne dessert l\'île.Au sommet de la petite île, à 17 m d’altitude se dresse le phare du Grand Rouveau. '),
(5, 'Île du Petit Rouveau', 'Six Fours Les Plages', NULL, 0, 0, 43.0837, 5.76959, 52.14, 'L\'île du Petit Rouveau est une île française du Var. Elle appartient administrativement à Six-Fours-les-Plages. Il s\'agit d\'un îlot, lieu de nidification fréquentée par de nombreux goélands leucophée. Il fait partie de l\'archipel des Embiez. Ses 5 hectares de superficie marque l\'entrée dans la rade du Brusc'),
(6, 'Île de Bagaud', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0112, 6.36214, 67.04, 'L\'Île de Bagaud ou îlot de Bagaud est, avec ses 59 hectares, une des plus petites des îles d\'Hyères. Proche de l\'Île de Port-Cros et à quelques kilomètres de Porquerolles, l\'île, qui est classée réserve intégrale de parc national, est actuellement inhabitée et interdite d\'accès. L\'île fait partie de la commune d\'Hyères.'),
(7, 'Îlot de la Gabinière', 'Hyeres Les Palmiers', NULL, 0, 0, 42.9883, 6.3863, 70.23, 'L\'îlot de la Gabinière est un des îlots des îles d\'Hyères.\r\n\r\nSitué au sud de Port-Cros, il fait partie du Parc national de Port-Cros et est classé réserve intégrale. Cependant et en dépit de sa petite taille, il est connu pour ses sites de plongée sous-marine.\r\n\r\nSur l\'ensemble du parc de Port-Cros, ce site représente celui qui abrite une exceptionnelle concentration de mérous bruns (Epinephelus marginatus). '),
(8, 'Rocher du Rascas', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0144, 6.38043, 67.48, 'Le rocher du Rascas est un des îlots des îles d\'Hyères.Situé au nord de Port-Cros, il fait partie du Parc national de Port-Cros. Il est classé réserve intégrale, et son accès est totalement interdit. '),
(9, 'Île du Levant', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0284, 6.43704, 68.68, 'L’île du Levant est la fraction la plus orientale de la commune française d’Hyères, commune du département du Var en région Provence-Alpes-Côte d\'Azur. Cette île méditerranéenne, la plus orientale de l\'archipel des îles d\'Hyères, fait face au massif des Maures au large des communes de Bormes-les-Mimosas et du Lavandou, d\'où la majorité des dessertes est assurée.\r\n\r\nL\'archipel est initialement considéré dans sa globalité et l\'île n\'en fait que partie. Il revêt un rôle essentiel pour une navigation surtout côtière. Elle comporte un farot au Moyen Âge central puis un phare au début du XIXe siècle, qui signale au large l\'entrée est de la rade d\'Hyères. Le sémaphore de même époque, désormais désaffecté, sert aussi aux signaux. '),
(10, 'Île de Porquerolles', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0002, 6.2023, 62.77, 'L’île de Porquerolles est la plus grande et la plus occidentale des trois îles d\'Hyères avec ses 12,54 km&#xB2; de superficie. Elle se situe à 2,6 km au sud-est de la Tour Fondue, l\'extrémité sud de la presqu\'île de Giens, et à 9,6 km à l\'ouest de l\'île de Port-Cros. Elle forme un arc orienté est-ouest, aux bords découpés, de 7,5 km de long sur 3 km de large. Son pourtour est d’une trentaine de kilomètres. L’île culmine au sémaphore à 142 m. Elle doit son état de conservation au fait qu\'elle est propriété de l\'État français depuis 1971 et bénéficie du statut de « parc national » depuis 2012.\r\n '),
(11, 'Île de Port-Cros', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0091, 6.38441, 68.15, 'L\'île de Port-Cros est une des trois îles d\'Hyères, archipel côtier de la mer Méditerranée, dans le département du Var et la région Provence-Alpes-Côte d\'Azur. Elle se situe à 1,1 km à l\'ouest de l\'île du Levant et à 8,3 km au sud du cap Bénat, une pointe rocheuse du littoral de Bormes-les-Mimosas.\r\n\r\nL\'île de Port-Cros correspond au cœur du Parc national de Port-Cros, un établissement public à caractère administratif, placé sous l\'autorité du Ministère de chargé de l\'écologie. Il vise à protéger le patrimoine naturel de l\'île et du périmètre marin situé autour d\'elle. '),
(12, 'Île du Grand Ribaud', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0188, 6.1346, 59.2, 'L\'île du Grand Ribaud se situe entre l\'île de Porquerolles et la presqu\'île de Giens, à 1 km au sud-ouest de l\'embarcadère de la Tour Fondue, à Hyères.\r\n\r\nCette île fut acquise par le Professeur Charles Richet, prix Nobel de physiologie en 1913. Elle appartient désormais à ses héritiers qui ont fondé une société civile. À leur demande, l\'île fut classée non constructible pour éviter les spéculations. Seules deux maisons existent sur le côté est ; une avec ses deux étages et une tourelle, l\'autre en longueur et sans étage.\r\n\r\nSa surface est de 16 hectares environ.\r\n\r\nSa côte ouest est rocailleuse et pauvre en végétation. Son centre est plus touffu, avec des chênes verts, arbousiers, myrtes et lentisques. Quelques pins et oliviers furent plantés avant la Seconde Guerre mondiale.\r\n\r\nDes viviers existent encore autour de l\'île où le professeur élevait des méduses et divers poissons venimeux utiles à ses recherches.\r\n\r\nLa pointe sud appartient à l\'État, avec son phare, un embarcadère et un vieux fort napoléonien.\r\n\r\nLe phare date de 1953, il a été reconstruit après les destructions de la Seconde Guerre mondiale. Il y avait un phare à cet endroit depuis 1851. '),
(13, 'Île du Petit Ribaud', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0234, 6.13842, 58.78, 'L\'île du Petit Ribaud est un îlot se situant entre l\'île du Grand Ribaud et la presqu\'île de Giens, au sud-ouest de l\'embarcadère de la Tour Fondue, à Hyères.\r\n\r\nL\'îlot du Ribaudon se trouve entre la pointe de Terre Rouge et l\'île du Petit Ribaud.\r\nPetit Ribaud\r\n\r\nUne maison en pierre édifiée sur deux niveaux est présente sur le Petit Ribaud. Elle paraît abandonnée.\r\n\r\nElle a été mise en vente il y a plusieurs dizaines d\'années (parution dans les pages immobilier du Figaro magazine), mais elle n\'a pas trouvé preneur. Cette île présente en effet de nombreux handicaps : exposition très forte au vent (mistral et vent d\'Est), petit terrain, absence de port abrité, pas de plage, impossibilité de construire, insularité. Toutefois, le site est unique en raison de son emplacement et de sa rareté. L\'île jouit d\'un dispositif d\'alimentation en eau et en électricité. '),
(14, 'Île de la Redonne', 'Hyeres Les Palmiers', NULL, 0, 0, 43.0426, 6.08949, 55.78, 'L\'île de la Redonne est un territoire riche et sensible d\'un point de vue environnemental, comme de nombreux lieux voisins et bénéficie à ce titre de diverses protections.\r\n\r\nElle fait partie de la zone naturelle d’intérêt écologique, faunistique et floristique (ZNIEFF) continentale de type 2 de la presqu\'île de Giens, est entourée par la ZNIEFF marine de type 2 de la presqu\'île de Giens, fait partie du site Natura 2000 (Directive oiseaux) de type A (Zone de Protection Spéciale) Iles d\'Hyères et du site Natura 2000 (Directive Habitats, faune, flore) de type B (Zone Spéciale de Conservation) Rade d\'Hyères, depuis l\'arrêté du 26 juin 2014.\r\n\r\nL\'île est aussi intégrée à l\'aire marine adjacente du parc national de Port-Cros, réplique maritime de l\'aire potentielle d\'adhésion du parc national, couvrant l\'ensemble du territoire de la commune d\'Hyères et d\'autres communes voisines.\r\n\r\nEnfin, l\'ensemble de l\'île fait partie de plusieurs parcelles de terrains acquises et protégées par le conservatoire du littoral et des rivages lacustres, depuis le 13 octobre 1978, sous le titre « Presqu\'île de Giens », pour une surface totale de 642,07 hectares, sites et acquisitions comprises, tandis que la parcelle acquise, dont l\'île fait partie, a une superficie calculée de 102,285 hectares. Cette protection est de catégorie IV sur le classement d\'aires naturelles protégées de l\'UICN, au titre d\'aire gérée pour l\'habitat et les espèces. '),
(15, 'Île de Bendor', 'Bandol', NULL, 0, 0, 43.1277, 5.75019, 47.96, 'L’île de Bendor est surnommée le « jardin des arts de la Méditerranée ». Paul Ricard, artiste peintre à ses heures et passionné d’art, a voulu faire de cette île le lieu de rencontre des artistes.\r\n\r\nOn peut croiser dans l\'ile, sous quantité de formes différentes (sculptures et ferronneries) la Croix de Bendor, symbole de l’île dessiné par Paul Ricard d’après la Croix des Templiers.\r\n\r\nL’île est parsemée de statues et d’œuvres d’art, dont le monolithe de Botinelly intitulé Nul bien sans peine, qui domine le débarcadère. L’œuvre fut érigée à la gloire de Pierre Puget, sculpteur, peintre et architecte provençal du XVIIe siècle à qui Paul Ricard emprunta la devise. Au sommet de l’île, la vierge du sculpteur marseillais Raymond Servian domine la mer et est l’objet d’un pèlerinage fervent chaque année pour le 15 août. On trouve aussi le « Neptune » œuvre imposante de Michel Barra et bien d’autres œuvres, bustes, statues et bas-reliefs nichés dans les jardins et les murs, créations d’élèves des Beaux-Arts de passage sur l’île. '),
(16, 'Deux Frères (rocher)', 'La Seyne sur Mer', NULL, 0, 0, 43.118, 5.77344, 48.39, 'Les Deux Frères (ou les Freirets, ces deux formations rocheuses portaient le nom de Rochers des Freirets au XIXe siècle) sont deux rochers émergeant à la pointe du Cap Sicié (Var, France) et visibles depuis la plage des Sablettes à La Seyne-sur-Mer. C\'est un lieu qui accueille de nombreux plaisanciers ainsi que des clubs de plongée dont l\'objectif est la visite d\'une épave située à proximité immédiate.\r\n\r\nLa légende locale raconte que deux frères trouvèrent un soir une sirène blessée sur la plage. Ils la soignèrent et tombèrent éperdument amoureux et dans leur folie, ils s\'entretuèrent. La sirène, avant de regagner les flots, supplia Poséidon de leur laisser une forme apparente en souvenir de leur passion. Le dieu de la mer y dressa les deux rocs'),
(17, 'Les Fourmigues', 'Hyeres Les Palmiers', NULL, 0, 0, 43.04, 6.06051, 55.64, 'Les Fourmigues sont des îles françaises du département du Var. Elles appartiennent administrativement à la commune de Hyères.\r\n\r\nC\'est un site très fréquenté de plongée sous-marine\r\n\r\nIl s\'agit de deux roches situées à l\'ouest de la presqu\'île de Giens. La Fourmigue est la plus grande des deux, le Fourmigon distant d\'une vingtaine de mètres à l\'ouest est plus petite. Une profondeur de 16-17 mètres sépare les deux îlots.\r\n\r\nÀ l\'est de la Fourmigue, une sèche, souvent appelée la « roche bleue » dans les centres de plongée locaux, remonte de 34 mètres jusqu\'à 9 mètres. '),
(18, 'Île Rousse', 'Bandol', NULL, 0, 0, 43.1331, 5.71958, 48.3, 'L\'île Rousse est une île du département du Var. Elles appartiennent administrativement à la commune de Bandol. '),
(19, 'Le Lion de mer', 'Saint Raphael', NULL, 0, 0, 43.4069, 6.76543, 67.36, 'Le Lion de mer est un îlot rocheux, composé de rochers roux (porphyre), situé dans la baie de Saint-Raphaël.\r\n\r\nUne Vierge trône sur le sommet de l\'île et la pointe est occupée par des installations techniques.\r\n\r\nLe site est également un spot de plongée reconnu. On y trouve notamment une voûte tapissée de coraux en fleur. Deux statues agrémentent la sortie du passage de l\'arche : la Vierge et la Sirène.\r\nIl se situe à proximité d\'un autre îlot rocheux appelé le Lion de terre. '),
(20, 'Le Lion de terre', 'Saint Raphael', NULL, 0, 0, 43.4081, 6.77364, 67.98, 'Le lion de terre est un îlot rocheux, composé de rochers roux (porphyre), situé dans la baie de Saint-Raphaël, à l\'est du port de plaisance de Santa-Lucia. Il se situe à proximité d\'un autre îlot rocheux appelé le Lion de mer. '),
(21, 'Île d\'Or', 'Saint Raphael', NULL, 0, 0, 43.4107, 6.84668, 73.71, 'L\'îlot est composé de rochers rouges — rhyolite — comme le reste du massif de l\'Esterel dont il fait partie et par ailleurs il bénéficie d\'un environnement particulier. En effet il se détache du rivage très proche car à terre la plage se compose d\'estérellites bleues qui côtoient le bleu, variant sans cesse, de la mer Méditerranée. Ainsi les nuances de la teinte de la mer diffèrent en fonction de l\'état du ciel qui s\'y reflète, tantôt éclatant tantôt chargé. À ces données il faut adjoindre suivant l\'heure l\'effet des rayons du soleil. Ceci explique l\'attrait du lieu pour de très nombreux artistes. '),
(22, 'Île des Vieilles', 'Saint Raphael', NULL, 0, 0, 43.4272, 6.89415, 77.17, 'L\'île des Vieilles est un îlot rocheux, composé de rochers roux, située à l\'est de Saint-Raphaël, près du site d\'Anthéor. Il appartient au massif de l\'Esterel. C\'est l\'îlot le plus étendu de la côte de ce massif.\r\n\r\nLe nom de l\'île fait sans doute référence à un type de poisson méditerranéen dénommé vieille.\r\n\r\nEst également nommé localement île des Veilles en référence à l\'usage qui en aurait été fait pour prévenir les risques d\'échouage des navires. Au sud de l\'île se trouve la balise cardinale sud dite la chrétienne. Elle signale un endroit a contourner ou se sont échoués de nombreux navires. C\'est un remarquable site de plongée. \r\n\r\nCet îlot à la particularité d\'abriter des espèces botaniques qu\'on ne trouve plus à Anthéor sur les rives d\'en face');

-- --------------------------------------------------------

--
-- Structure de la table `recuperation`
--

CREATE TABLE `WD_recuperation` (
  `recuperation_id` int(11) NOT NULL,
  `code_recuperation` varchar(255) NOT NULL,
  `utilisateur_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `WD_utilisateur` (
  `utilisateur_id` int(11) NOT NULL,
  `utilisateur_pseudo` varchar(255) NOT NULL,
  `utilisateur_password` varchar(255) NOT NULL,
  `utilisateur_email` varchar(255) NOT NULL,
  `utilisateur_image` varchar(255),
  `utilisateur_role` varchar(255) NOT NULL DEFAULT 'Membre',
  `utilisateur_nb_comm` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `WD_utilisateur` (`utilisateur_id`, `utilisateur_pseudo`, `utilisateur_password`, `utilisateur_email`, `utilisateur_image`, `utilisateur_role`, `utilisateur_nb_comm`) VALUES
(9, 'Sangohan83', '0288f4ec2ac957a5f5deabe504896af3292e5616', 'david.walter.72000@gmail.com', '9.jpg', 'Admin', 4),
(17, 'Sergeserge', '388ad1c312a488ee9e12998fe097f2258fa8d5ee', 'baldacci.serge@gmail.com', '17.png', 'Membre', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ville_proxi`
--

CREATE TABLE `WD_ville_proxi` (
  `ville_proxi_id` int(11) NOT NULL,
  `ville_proxi_nom` varchar(50) DEFAULT NULL,
  `ville_proxi_lat` float DEFAULT NULL,
  `ville_proxi_long` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville_proxi`
--

INSERT INTO `WD_ville_proxi` (`ville_proxi_id`, `ville_proxi_nom`, `ville_proxi_lat`, `ville_proxi_long`) VALUES
(1, 'Seillons-Source-d\'Argens', 43.4964, 5.88362),
(2, 'Néoules', 43.3, 6.01667),
(3, 'Solliès-Toucas', 43.2, 6.01667),
(4, 'Cogolin', 43.25, 6.53333),
(5, 'Villecroze', 43.5833, 6.26667),
(6, 'Le Cannet-des-Maures', 43.4, 6.35),
(7, 'Claviers', 43.6, 6.56667),
(8, 'La Londe-les-Maures', 43.1333, 6.23333),
(9, 'Pontevès', 43.5667, 6.05),
(10, 'Brue-Auriac', 43.5333, 5.95),
(11, 'Régusse', 43.65, 6.13333),
(12, 'Plan-d\'Aups-Sainte-Baume', 43.33, 5.7175),
(13, 'Figanières', 43.5667, 6.5),
(14, 'Sainte-Maxime', 43.3, 6.63333),
(15, 'Solliès-Pont', 43.1833, 6.05),
(16, 'Rians', 43.6167, 5.75),
(17, 'Saint-Cyr-sur-Mer', 43.1833, 5.71667),
(18, 'Mazaugues', 43.3333, 5.91667),
(19, 'Cabasse', 43.4167, 6.23333),
(20, 'Nans-les-Pins', 43.3667, 5.78333),
(21, 'Cavalaire-sur-Mer', 43.1667, 6.53333),
(22, 'Flassans-sur-Issole', 43.3667, 6.21667),
(23, 'Ramatuelle', 43.2167, 6.61667),
(24, 'Le Thoronet', 43.45, 6.3),
(25, 'Saint-Zacharie', 43.3833, 5.71667),
(26, 'Le Bourguet', 43.7833, 6.51667),
(27, 'La Garde', 43.1248, 6.01056),
(28, 'Puget-sur-Argens', 43.45, 6.68333),
(29, 'Sanary-sur-Mer', 43.1167, 5.8),
(30, 'Bras', 43.4667, 5.95),
(31, 'Hyères', 43.1167, 6.11667),
(32, 'La Valette-du-Var', 43.1333, 5.98333),
(33, 'Méounes-lès-Montrieux', 43.2833, 5.96667),
(34, 'Ollioules', 43.1333, 5.85),
(35, 'Sillans-la-Cascade', 43.5667, 6.18333),
(36, 'Saint-Maximin-la-Sainte-Baume', 43.45, 5.86667),
(37, 'Saint-Antonin-du-Var', 43.5067, 6.28695),
(38, 'Callian', 43.6333, 6.75),
(39, 'Solliès-Ville', 43.1833, 6.03333),
(40, 'Rayol-Canadel-sur-Mer', 43.1587, 6.46167),
(41, 'La Celle', 43.4, 6.03333),
(42, 'Le Plan-de-la-Tour', 43.3333, 6.55),
(43, 'Vins-sur-Caramy', 43.4333, 6.15),
(44, 'Flayosc', 43.5333, 6.4),
(45, 'Bauduen', 43.7333, 6.18333),
(46, 'Camps-la-Source', 43.3833, 6.08333),
(47, 'Bargemon', 43.6167, 6.53333),
(48, 'Tanneron', 43.5833, 6.88333),
(49, 'Fox-Amphoux', 43.5833, 6.1),
(50, 'Aups', 43.6167, 6.23333),
(51, 'Taradeau', 43.45, 6.43333),
(52, 'Saint-Julien', 43.6912, 5.90695),
(53, 'La Martre', 43.7667, 6.6),
(54, 'Lorgues', 43.4833, 6.36667),
(55, 'Arcs', 43.45, 6.48333),
(56, 'Roquebrune-sur-Argens', 43.4333, 6.63333),
(57, 'Entrecasteaux', 43.5167, 6.23333),
(58, 'Callas', 43.5833, 6.53333),
(59, 'Ollières', 43.4833, 5.83333),
(60, 'Rougiers', 43.3833, 5.85),
(61, 'Pourcieux', 43.4667, 5.78333),
(62, 'Évenos', 43.1667, 5.85),
(63, 'Carnoules', 43.3, 6.18333),
(64, 'Le Pradet', 43.1, 6.01667),
(65, 'Bargème', 43.7333, 6.56667),
(66, 'Bormes-les-Mimosas', 43.15, 6.33333),
(67, 'Seillans', 43.6333, 6.63333),
(68, 'Pourrières', 43.5, 5.73333),
(69, 'Pignans', 43.3, 6.21667),
(70, 'Carqueiranne', 43.0833, 6.08333),
(71, 'Tavernes', 43.6, 6.01667),
(72, 'Adrets-de-l\'Estérel', 43.5256, 6.81417),
(73, 'Fayence', 43.6167, 6.68333),
(74, 'Six-Fours-les-Plages', 43.0934, 5.83945),
(75, 'Châteauvieux', 43.775, 6.575),
(76, 'Carcès', 43.4667, 6.18333),
(77, 'Vidauban', 43.4167, 6.43333),
(78, 'Garéoult', 43.3333, 6.05),
(79, 'Varages', 43.6, 5.96667),
(80, 'Draguignan', 43.5333, 6.46667),
(81, 'Saint-Martin', 43.5892, 5.88478),
(82, 'Esparron', 43.5917, 5.85),
(83, 'Barjols', 43.55, 6),
(84, 'Montauroux', 43.6167, 6.76667),
(85, 'Saint-Paul-en-Forêt', 43.5667, 6.68333),
(86, 'Moissac-Bellevue', 43.65, 6.16667),
(87, 'Le Val', 43.4333, 6.08333),
(88, 'Trans-en-Provence', 43.5, 6.48333),
(89, 'Le Muy', 43.4667, 6.55),
(90, 'Fréjus', 43.4339, 6.73611),
(91, 'Correns', 43.4833, 6.08333),
(92, 'Signes', 43.3, 5.86667),
(93, 'La Roquebrussanne', 43.3333, 5.98333),
(94, 'Riboux', 43.3, 5.75),
(95, 'Châteauvert', 43.5, 6.01667),
(96, 'Montmeyan', 43.65, 6.06667),
(97, 'Montferrat', 43.6167, 6.48333),
(98, 'Vérignon', 43.65, 6.26667),
(99, 'Cuers', 43.2333, 6.06667),
(100, 'Grimaud', 43.2667, 6.51667),
(101, 'Besse-sur-Issole', 43.35, 6.16667),
(102, 'Mons', 43.6833, 6.71667),
(103, 'Comps-sur-Artuby', 43.7167, 6.5),
(104, 'La Crau', 43.15, 6.06667),
(105, 'Tourrettes', 43.6234, 6.70223),
(106, 'Le Lavandou', 43.1333, 6.36667),
(107, 'Salernes', 43.55, 6.23333),
(108, 'Salles-sur-Verdon', 43.7667, 6.2),
(109, 'Gassin', 43.2167, 6.58333),
(110, 'Baudinard-sur-Verdon', 43.7164, 6.13445),
(111, 'Forcalqueiret', 43.3333, 6.08333),
(112, 'La Motte', 43.4833, 6.51667),
(113, 'Toulon', 43.1167, 5.93333),
(114, 'La Môle', 43.2, 6.46667),
(115, 'Puget-Ville', 43.2833, 6.13333),
(116, 'Le Beausset', 43.2, 5.8),
(117, 'La Verdière', 43.6333, 5.93333),
(118, 'La Cadière-d\'Azur', 43.2, 5.76667),
(119, 'Belgentier', 43.25, 6),
(120, 'Châteaudouble', 43.5833, 6.45),
(121, 'Aiguines', 43.7667, 6.25),
(122, 'Tourtour', 43.5833, 6.3),
(123, 'Brignoles', 43.4, 6.06667),
(124, 'Saint-Raphaël', 43.4167, 6.76667),
(125, 'Collobrières', 43.2333, 6.3),
(126, 'Sainte-Anastasie-sur-Issole', 43.3333, 6.13333),
(127, 'La Garde-Freinet', 43.3167, 6.46667),
(128, 'La Croix-Valmer', 43.2, 6.56667),
(129, 'Rocbaron', 43.3, 6.08333),
(130, 'Le Luc', 43.3833, 6.31667),
(131, 'La Bastide', 43.7333, 6.61667),
(132, 'Brenon', 43.7667, 6.55),
(133, 'Artignosc-sur-Verdon', 43.7, 6.1),
(134, 'Montfort-sur-Argens', 43.4667, 6.11667),
(135, 'Artigues', 43.6, 5.8),
(136, 'Gonfaron', 43.3167, 6.28333),
(137, 'Cotignac', 43.5333, 6.15),
(138, 'Tourves', 43.4, 5.93333),
(139, 'Saint-Tropez', 43.2667, 6.63333),
(140, 'Pierrefeu-du-Var', 43.2167, 6.13333),
(141, 'Le Revest-les-Eaux', 43.3667, 6.56667),
(142, 'La Farlède', 43.1667, 6.03333),
(143, 'Saint-Mandrier-sur-Mer', 43.0667, 5.93333),
(144, 'Le Castellet', 43.2028, 5.77667),
(145, 'Bandol', 43.1333, 5.75),
(146, 'Ampus', 43.6, 6.38333),
(147, 'La Seyne-sur-Mer', 43.1, 5.88333),
(148, 'La Roque-Esclapon', 43.7167, 6.63333),
(149, 'Vinon-sur-Verdon', 43.7167, 5.8),
(150, 'Bagnols-en-Forêt', 43.5333, 6.7),
(151, 'Mayons', 43.3167, 6.36667),
(152, 'Trigance', 43.7667, 6.45),
(153, 'Ginasservis', 43.6667, 5.85);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire_deux_frères_rocher`
--
ALTER TABLE `WD_commentaire_deux_frères_rocher`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_les_fourmigues`
--
ALTER TABLE `WD_commentaire_les_fourmigues`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_le_lion_de_mer`
--
ALTER TABLE `WD_commentaire_le_lion_de_mer`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_le_lion_de_terre`
--
ALTER TABLE `WD_commentaire_le_lion_de_terre`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_rocher_du_rascas`
--
ALTER TABLE `WD_commentaire_rocher_du_rascas`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_des_embiez`
--
ALTER TABLE `WD_commentaire_île_des_embiez`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_des_vieilles`
--
ALTER TABLE `WD_commentaire_île_des_vieilles`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_de_bagaud`
--
ALTER TABLE `WD_commentaire_île_de_bagaud`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_de_bendor`
--
ALTER TABLE `WD_commentaire_île_de_bendor`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_de_la_redonne`
--
ALTER TABLE `WD_commentaire_île_de_la_redonne`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_de_porquerolles`
--
ALTER TABLE `WD_commentaire_île_de_porquerolles`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_de_port_cros`
--
ALTER TABLE `WD_commentaire_île_de_port_cros`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_grand_gaou`
--
ALTER TABLE `WD_commentaire_île_du_grand_gaou`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_grand_ribaud`
--
ALTER TABLE `WD_commentaire_île_du_grand_ribaud`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_grand_rouveau`
--
ALTER TABLE `WD_commentaire_île_du_grand_rouveau`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_levant`
--
ALTER TABLE `WD_commentaire_île_du_levant`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_petit_gaou`
--
ALTER TABLE `WD_commentaire_île_du_petit_gaou`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_petit_ribaud`
--
ALTER TABLE `WD_commentaire_île_du_petit_ribaud`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_du_petit_rouveau`
--
ALTER TABLE `WD_commentaire_île_du_petit_rouveau`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_d_or`
--
ALTER TABLE `WD_commentaire_île_d_or`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_île_rousse`
--
ALTER TABLE `WD_commentaire_île_rousse`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `commentaire_îlot_de_la_gabinière`
--
ALTER TABLE `WD_commentaire_îlot_de_la_gabinière`
  ADD PRIMARY KEY (`comment_id`);

--
-- Index pour la table `liste_ile`
--
ALTER TABLE `WD_liste_ile`
  ADD PRIMARY KEY (`liste_ile_id`);

--
-- Index pour la table `recuperation`
--
ALTER TABLE `WD_recuperation`
  ADD PRIMARY KEY (`recuperation_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `WD_utilisateur`
  ADD PRIMARY KEY (`utilisateur_id`);

--
-- Index pour la table `ville_proxi`
--
ALTER TABLE `WD_ville_proxi`
  ADD PRIMARY KEY (`ville_proxi_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire_deux_frères_rocher`
--
ALTER TABLE `WD_commentaire_deux_frères_rocher`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaire_les_fourmigues`
--
ALTER TABLE `WD_commentaire_les_fourmigues`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_le_lion_de_mer`
--
ALTER TABLE `WD_commentaire_le_lion_de_mer`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_le_lion_de_terre`
--
ALTER TABLE `WD_commentaire_le_lion_de_terre`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_rocher_du_rascas`
--
ALTER TABLE `WD_commentaire_rocher_du_rascas`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_des_embiez`
--
ALTER TABLE `WD_commentaire_île_des_embiez`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_des_vieilles`
--
ALTER TABLE `WD_commentaire_île_des_vieilles`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_de_bagaud`
--
ALTER TABLE `WD_commentaire_île_de_bagaud`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_de_bendor`
--
ALTER TABLE `WD_commentaire_île_de_bendor`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_de_la_redonne`
--
ALTER TABLE `WD_commentaire_île_de_la_redonne`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_de_porquerolles`
--
ALTER TABLE `WD_commentaire_île_de_porquerolles`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `commentaire_île_de_port_cros`
--
ALTER TABLE `WD_commentaire_île_de_port_cros`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_grand_gaou`
--
ALTER TABLE `WD_commentaire_île_du_grand_gaou`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_grand_ribaud`
--
ALTER TABLE `WD_commentaire_île_du_grand_ribaud`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_grand_rouveau`
--
ALTER TABLE `WD_commentaire_île_du_grand_rouveau`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_levant`
--
ALTER TABLE `WD_commentaire_île_du_levant`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_petit_gaou`
--
ALTER TABLE `WD_commentaire_île_du_petit_gaou`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_petit_ribaud`
--
ALTER TABLE `WD_commentaire_île_du_petit_ribaud`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_du_petit_rouveau`
--
ALTER TABLE `WD_commentaire_île_du_petit_rouveau`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_d_or`
--
ALTER TABLE `WD_commentaire_île_d_or`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_île_rousse`
--
ALTER TABLE `WD_commentaire_île_rousse`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaire_îlot_de_la_gabinière`
--
ALTER TABLE `WD_commentaire_îlot_de_la_gabinière`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `liste_ile`
--
ALTER TABLE `WD_liste_ile`
  MODIFY `liste_ile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `recuperation`
--
ALTER TABLE `WD_recuperation`
  MODIFY `recuperation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `WD_utilisateur`
  MODIFY `utilisateur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `ville_proxi`
--
ALTER TABLE `WD_ville_proxi`
  MODIFY `ville_proxi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
