-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 22 juin 2025 à 16:53
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `archeologie`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualités`
--

CREATE TABLE `actualités` (
  `id` int NOT NULL,
  `titre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lien` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `text` text NOT NULL,
  `image` varchar(33) NOT NULL,
  `date` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `actualités`
--

INSERT INTO `actualités` (`id`, `titre`, `lien`, `text`, `image`, `date`) VALUES
(1, 'Bibracte, le musee s aggrandit et recois le label <<architecture comtemporaine remarquable>>', 'https://www.culture.gouv.fr/fr/regions/drac-bourgogne-franche-comte/actualite-a-la-une/bibracte-le-musee-s-agrandit-et-recoit-le-label-architecture-contemporaine-remarquable', 'Le musée de Bibracte, pour ses 30 ans, inaugure, à l’occasion des Journées européennes de l’archéologie le 14 juin 2025, sa nouvelle extension avec l’ouverture de l’exposition ...', 'musee.webp', 'Publié le 16 juin 2025'),
(2, 'A Bibracte , 40ans de fouille archeologique européenes', 'https://www.culture.gouv.fr/fr/actualites/a-bibracte-40-ans-de-fouilles-archeologiques-europeennes', 'Le site archéologique bourguignon fête cette année les trente ans de l’ouverture de son musée et les quarante ans de son chantier de fouilles...\r\n\r\n', 'foret.webp', 'Publié le 16 juin 2025'),
(3, ' les dessous de l archeologie révélés a l occasion des journees ', 'https://www.culture.gouv.fr/fr/regions/drac-hauts-de-fr', 'De la truelle au musée, et bien plus encore : les 14 et 15 juin 2025, les métiers de l’archéologie se révèlent pour petits ...\r\n\r\n\r\n', 'chantier.webp', 'Publié le 13 juin 2025'),
(4, 'Exposition Les méandres du passé : quand la Bresse raconte l’âge du bronze', 'https://www.culture.gouv.fr/fr/regions/drac-bourgogne-franche-comte/actualite-a-la-une/exposition-les-meandres-du-passe-quand-la-bresse-raconte-l-age-du-bronze', 'Comment vivait-on en Bresse, à l’âge du Bronze ? Comment la maîtrise de la fabrication de ce nouveau métal a-t-il fait évoluer les techniques et le commerce ? ', 'bronze.webp', 'Publié le 13 juin 2025'),
(5, 'Fêtons l’archéologie du 13 au 15 juin en Bourgogne-Franche-Comté !', 'https://www.culture.gouv.fr/fr/regions/drac-bourgogne-franche-comte/actualite-a-la-une/fetons-l-archeologie-du-13-au-15-juin-en-bourgogne-franche-comte', 'Depuis 2010, le ministère de la Culture met chaque année en lumière cette science qui éclaire notre passé grâce à une grande manifestation. \r\n\r\n', 'fete.webp', 'Publié le 13 juin 2025'),
(6, 'Immersion inédite à \"Lascaux : L\'exposition internationale\" débute à Bordeaux', 'https://www.culture.gouv.fr/fr/regions/drac-nouvelle-aquitaine/patrimoines-et-architecture-a-la-drac-nouvelle-aquitaine/l-archeologie-a-la-drac-nouvelle-aquitaine/immersion-inedite-a-lascaux-l-exposition-internationale-debute-a-bordeaux', 'Le 13 juin 2025, Cap Sciences à Bordeaux inaugurera \"Lascaux, l\'Exposition Internationale\". Avant de s\'envoler pour une tournée mondiale, cette exposition...', 'lasceau.webp', 'Publié le 11 juin 2025'),
(7, 'Archéologie : une villa antique découverte à Auxerre', 'https://www.culture.gouv.fr/fr/regions/drac-bourgogne-franche-comte/actualite-a-la-une/archeologie-une-villa-antique-decouverte-a-auxerre', 'Une équipe de l’Inrap fouille actuellement, sur prescription de l’État (Drac Bourgogne-Franche-Comté, à quelques kilomètres d’Auxerre une surface de 16 000 m2 au lieu-dit Sainte-Nitasse.', 'villa.webp', 'Publié le 4 juin 2025'),
(8, 'Entre archéologie funéraire et monumentale : un hommage au travail de Jacques Roger', 'https://www.culture.gouv.fr/fr/regions/drac-nouvelle-aquitaine/patrimoines-et-architecture-a-la-drac-nouvelle-aquitaine/l-archeologie-a-la-drac-nouvelle-aquitaine/entre-archeologie-funeraire-et-monumentale-un-colloque-hommage-au-travail-de-jacques-roger', 'La Cité internationale de la tapisserie, à Aubusson, accueille du 11 au 13 juin un colloque sur le travail de Jacques roger... \r\n\r\n', 'cite.webp', 'Publié le 21 mai 2025');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `id` int NOT NULL,
  `nom` varchar(33) NOT NULL,
  `prenom` varchar(33) NOT NULL,
  `Email` varchar(33) NOT NULL,
  `Demande` varchar(33) NOT NULL,
  `Commentaire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `Email`, `Demande`, `Commentaire`) VALUES
(25, 'lillu', 'pascale', 'lollienta@gmail.com', 'Demande de renseignements', 'dehjzdeeeeeeeeeeeeeeee');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int NOT NULL,
  `nom` varchar(33) NOT NULL,
  `prenom` varchar(33) NOT NULL,
  `Email` varchar(33) NOT NULL,
  `mot_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `Email`, `mot_passe`) VALUES
(31, 'line', 'ange', 'line@gmail.com', '$2y$10$3tMcC/4lDxDnUw8UNOi5nu0rgMiZLOMoHx7fR9lyUXqTnnSbBSDMS'),
(32, 'line', 'ange', 'line@gmail.com', '$2y$10$GvoSrh7AjjEdcccB3NUBIOOd1UdUp71dqoN8iueJfl6N5ZrOwaYBO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualités`
--
ALTER TABLE `actualités`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualités`
--
ALTER TABLE `actualités`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
