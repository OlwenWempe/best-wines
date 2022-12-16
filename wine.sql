-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 18:14
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `best_wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `wine`
--

CREATE TABLE `wine` (
  `wine_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `wine_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `grape_variety` varchar(255) NOT NULL,
  `link_picture_max` varchar(255) NOT NULL,
  `prix_d_achat` decimal(5,2) NOT NULL,
  `prix_de_vente` decimal(5,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_type_wine` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wine`
--

INSERT INTO `wine` (`wine_id`, `created_at`, `wine_name`, `description`, `grape_variety`, `link_picture_max`, `prix_d_achat`, `prix_de_vente`, `stock`, `id_region`, `id_type_wine`, `id_supplier`) VALUES
(40000, '2022-12-15 10:43:49', 'ANGEL DE LARRAINZAR 2018 - PAGO DE LARRAINZAR', 'Régalez vous avec ce Angel 2018 doublement médaillé... Une vraie bête de concours, d\'une souplesse et d\'un soyeux incroyable !\r\nLa Bodega Pago de Larrainzar plantée sur un terroir calcaire est parfaitement adapté à la production de grands vins espagnols. Souhaitant créer de vins de grande qualité, elle a décidé de planter des cépages comme le Merlot, le Cabernet Sauvignon en plus des cépages beaucoup plus traditionnels comme le Tempranillo et le Garnacha. Vendanges réalisées entre Septembre et Octobre, vinification digne de celles utilisée des grands châteaux de Bordeaux, une sélection très minitieuse des raisins pour un résultat somptueux : Vos papilles vont naviguer entre suavité et puissance aromatique...\r\n', '40% Tempranillo, 30% Cabernet-sauvignon, 25% Merlot, 5% Grenache', 'uploads/639aec5565908.png', '4.50', '9.00', 25, 4, 1, 4),
(40001, '2022-12-15 10:56:46', 'MONTAGNE NOIRE 2019 - CHATEAU AUZIAS', 'Pour les amateurs de valeurs sûres : ce rouge du Languedoc multi-récompensé à petit prix est fait pour vous !\r\nDes amis qui débarquent à l’improviste ? Une envie de s’ouvrir un bouteille de rouge, comme ça, juste pour le plaisir d’accompagner un morceau de fromage et un peu de charcuterie ? Avec Montagne Noire du Château d’Auzias on a tout bon ! Ses notes de fruits noirs et d’épices délicates agrémentent à merveille ce petit vin rouge du Languedoc au rapport qualité-prix-plaisir imbattable ! Foncez !\r\n', 'Cabernet-sauvignon, Grenache, Syrah, Merlot', 'uploads/639aef5da7c88.png', '3.45', '6.90', 25, 1, 1, 4),
(40002, '2022-12-15 11:03:16', 'CHATEAU BRIOT 2016', 'Récompensé par la presse Française et même Internationale, ce Bordeaux est une valeur sûre à prix très doux !\r\nLa propriété du Château Briot est un havre de paix en plein coeur de l\'Entre-Deux-Mers entretenu avec soin par la famille Ducourt depuis 1980. D\'une robe grenat foncé, ce Château Briot 2016 nous révèle au nez de jolis arômes de petits fruits rouges, avec une pointe de noix fraîche et de vanille grillée. Fraîche, la bouche se dévoile sur le fruit et la rondeur, avec une structure tannique élégante et douce, et une bonne longueur. Ce Château Briot 2016 sera votre valeur sûre avec des charcuteries ou des tapas par exemple.', 'Cabernet-sauvignon, Merlot', 'uploads/639af0e4549b1.png', '4.15', '8.30', 25, 2, 1, 4),
(40003, '2022-12-15 11:08:49', 'SYRAH DES PRINCES 2020 - CELLIER DES PRINCES', '3 médailles d\'or pour cette Syrah au profil frais qui n\'a pas fini de ravir vos palais !\r\nOn retrouve dans cette cuvée signée du Cellier des Princes toute la typicité de la Syrah mêlée à un climat chaud et sec, et à un terroir de galets roulés, exaltant une trame fraîche et une palette aromatique intense. Notes de cassis et de réglisse en bouche, vous serez conquis par cette touche légèrement poivrée en finale. En résumé, une pépite à un prix des plus accessibles !', '100% Syrah', 'uploads/639af231ae939.png', '3.25', '6.50', 25, 5, 1, 4),
(40004, '2022-12-15 11:13:03', 'LE TRIPORTEUR ROUGE 2020', 'Sortez les bouteilles, un vin médaillé d\'or à ce prix : succès garanti !\r\nInspiré par le chef d\'oeuvre des années \'50 \"Le Triporteur\", cette cuvée gourmande, fédératrice et originale fera plaisir aux hipsters, bobos et cinéphiles ! Séduisant par son palais bien structuré, ses tanins fondus, le tout enrobés d\'un fruité explosif. Son assemblage dominé par le Grenache issu de vignes plantées à proximité de Châteauneuf-du-Pape en fait un vin de pure plaisir ! Une vrai découverte qui va faire du bruit !', '70% Grenache, 30% Carignan', 'uploads/639af32fa4677.png', '3.25', '6.50', 25, 5, 1, 4),
(40005, '2022-12-15 11:39:56', 'ISATIS ROUGE 2020 - ALAIN GAYREL', 'Un rouge délicieux à l\'accent du Sud-Ouest au rapport qualité-prix incroyable !\r\nNom scientifique du pastel des teinturiers, plante autrefois cultivée dans la région pour la production de la teinte bleue: le pastel. Cette petite fleur représente la fraîcheur, l\'élégance et le plaisir que vous retrouverez dans cette cuvée. Ce millésime 2020 à la belle robe brillante s\'ouvre sur des arômes de fruits rouges mûrs, d\'épices et de cannelle. L\'attaque en bouche est souple et soyeuse suivie d\'une douce sucrosité. Fruité et gourmand, c\'est un vrai délice et une top affaire !', 'Braucol, Syrah', 'uploads/639af97c1c7b1.png', '3.45', '6.90', 25, 6, 1, 4),
(40006, '2022-12-15 11:46:33', 'HARMONIE DE GASCOGNE BLANC 2021 - DOMAINE PELLEHAUT', 'Complexe et plein d\'expression, cet Harmonie de Gascogne blanc est délicieusement bon!\r\nDans une robe limpide et brillante, le vin offre un nez plein de senteurs sur des notes de fleurs, de fruits mûrs et de fruits confits. L\'attaque est franche pour une bouche souple et suave, très équilibrée et persistante. Ce millésime révèle une intensité et une concentration sans égale!', 'Ugni blanc, Colombard, Sauvignon, Gros Manseng, Petit Manseng', 'uploads/639afb09d199c.png', '4.45', '8.90', 25, 6, 2, 4),
(40007, '2022-12-15 11:51:51', 'SAUVIGNON BLANC 2021 - VIGNERONS DE FLORENSAC', '4 Médailles d\'Or ! Ne cherchez plus, voici l\'allié de vos apéritifs et de vos poissons grillées cet été !\r\nFraicheur et forte expréssion aromatique définissent ce Sauvignon. Juteux, frais et net, c\'est bon rapport qualité-prix pour un Blanc avec vivacité et verve. Vinifié en cuve inox uniquement pour gardez toute l\'expression du fruit, ce vin affiche aussi des notes de fleurs blanches, d\'agrumes, pamplemousse rose et zeste de citron avec suffisamment de texture pour tenir son rang face à des plats raffinés. Il saura aussi vous réjouir en apéritif ou sur des fruits de mers et poissons grillées ! Profitez en maintenant, il est prêt à exprimer tout son potentiel au contact de vos papilles !\r\nRégion d\'origine du produit : Languedoc-Roussillon', '100% Sauvignon blanc', 'uploads/639afc4751768.png', '3.70', '7.40', 25, 1, 2, 4),
(40008, '2022-12-15 12:02:51', 'MORILLON BLANC 2021 - BY JEFF CARREL', 'Ce 100% chardonnay, frais et équilibré va vous subjuguer et vous surprendre ! Encore une réussite signée Jeff Carrel !\r\nLa cuvée mono-cépage Morillon Blanc, élaborée à base de raisins botrytisés et vinifiée en sec, dévoile des arômes mûrs et expressifs sur des notes de fruits blancs comme la poire, la pêche, avec de légers arômes grillés. Ample, rond, dense avec une acidité équilibré, rafraîchissant, ce vin à l\'excellent rapport qualité-prix s\'accordera à perfection pour vos apéros estivaux ou accompagné d\'un foie gras mi-cuit, d\'une pintade aux champignons ou encore d\'une tarte aux pommes. Une petite pépite !', '100% Chardonnay', 'uploads/639afedb5f653.png', '5.45', '10.90', 25, 5, 2, 4),
(40009, '2022-12-15 12:06:40', 'COSTIERES DE NÎMES - VEUVE MATHILDE 2021 - CAVE DE PAZAC', 'Un superbe Costières de Nîmes à prix canon ! Amateurs de bonnes affaires, cette cuvée est faite pour vous !\r\nLa Cave de Pazac nous régale avec cette très jolie cuvée ! Au nez, c’est une explosion aromatique de fleurs blanches et de fruits à chair jaune (abricot, pêche). En bouche, nous retrouvons cette puissance aromatique fraîchement citronnée. En somme, c\'est un vin blanc fruité très élégant et équilibré, qui fera sensation à l\'apéritif... mais pas que !', '30% Grenache blanc, 30% Vermentino, 20% Viognier, 20% Roussanne', 'uploads/639affc071a1b.png', '4.70', '9.40', 25, 5, 2, 4),
(40010, '2022-12-15 12:10:11', 'ROUSSETTE DE SAVOIE 2021 - DOMAINE JEAN VULLIEN', 'Fruitée et élégante, cette roussette nous a bluffé à la dégustation !\r\nSéduisante dès le nez, cette roussette nous a très agréablement surpris en dégustation et a confirmé les médailles obtenues dans son millésime précédent. Sa bouche soutenue par un joli gras aboutit dans une finale d\'une belle longueur. Un vin complexe à prix mini. Avez-vous d\'autres raisons de résister ?', '100% Altesse', 'uploads/639b00931d789.png', '6.45', '12.90', 25, 7, 2, 4),
(40011, '2022-12-15 12:14:30', 'RESERVE BLANC 2021 - CHATEAU LAMOTHE-VINCENT', 'Cette cuvée Réserve est un vin frais, gras, ample, avec une longueur en bouche intéressante !\r\nDepuis sa fondation il y a 4 générations, le Château Lamothe-Vincent demeure une propriété familiale, assistée par un personnel attentif et expérimenté. D\'une robe jaune paille à reflets verts, cette cuvée Réserve nous livre des arômes envoutants de pêche, fruits exotiques, pamplemousse, buis et minéral, avec des touches légèrement fumées. En bouche, on retrouve un bon équilibre entre maturité et vivacité. A déguster dès maintenant sur des fruits de mer par exemple, pour une expression aromatique maximale !', '87% Sauvignon blanc, 13% Sémillon', 'uploads/639b01966d476.png', '4.50', '9.00', 25, 2, 2, 4),
(40012, '2022-12-15 14:30:23', 'CHAMPAGNE HATON et FILLES - CARTE BLANCHE', 'Notre meilleure vente de champagne depuis 2003 !!!\r\nLe champagne Haton & Filles brut Carte Blanche est équilibré, fruité et gourmand. Expressif au nez, vous serez immédiatement séduit par sa rondeur et sa fraîcheur en bouche. Enfin un champagne de producteur au rapport qualité-prix incomparable !', '100% Pinot meunier', '639b216f84bf7.png', '11.50', '23.00', 25, 3, 4, 4),
(40013, '2022-12-15 14:34:17', 'CHAMPAGNE MICHEL FURDYNA - BRUT RESERVE', 'Un nectar à la porte de la cour des grands !\r\nDe l\'élégance, de la finesse et de la fraîcheur : tout est réuni dans ce champagne Michel Furdyna au talent évident ! Issu de la sélection des cuvées de Pinot Noir les plus fines, ce Blanc de Noirs étonnera vos invités...il est digne des plus grandes marques de champagne ! Rapport qualité-prix explosif !', '100% Pinot noir', '639b2259046f9.png', '14.75', '29.50', 25, 3, 4, 4),
(40014, '2022-12-15 14:41:43', 'CHAMPAGNE CL DE LA CHAPELLE - INSTINCT 1ER CRU', 'Un champagne de vignerons double médaillé d\'or au rapport prix/plaisir imbattable et certifié HVE en 2020 !\r\nLa Maison CL De La Chapelle est issue du collectif des champagnes de vignerons, ce qui garantit qu\'un champagne est issu des vignes cultivées par le vigneron lui-même et élaboré sur son domaine. Instinct brut 1er Cru saura restituer le relief et le terroir de la région champenoise. Un premier nez sur des fruits blancs laisse sa place à des notes de fleurs blanches, un nez aérien tout en dentelle. L\'attaque est gourmande, fine avec une belle minéralité. Un champagne très agréable en apéritif à découvrir sans attendre.', '55% Pinot meunier, 30% Pinot noir, 15% Chardonnay', '639b24175a697.png', '14.95', '29.90', 25, 3, 4, 4),
(40015, '2022-12-15 14:45:53', 'CHAMPAGNE JEAN DE LA FONTAINE - L’ÉLOQUENTE', 'Elégance et fraîcheur sont au rendez-vous de la dégustation de ce champagne à prix tout doux !\r\nInspirée de la fable \"La poule aux œufs d\'or\", cette Cuvée issue de Pinot Meunier très majoritaire, avec un apport de Chardonnay et de Pinot noir, vinifiée en partie sous-bois, dévoile un nez tonique montrant aussi des nuances évoluées de cire, une bouche crémeuse, fraîche et longue aux arômes de fleurs et de fruits murs avec une touche de tabac. Un ensemble tout en finesse au prix mini, 100% valeur sûre !', '73% Pinot meunier, 16% Chardonnay, 11% Pinot noir', '639b2510f17f6.png', '9.99', '19.99', 25, 3, 4, 4),
(40016, '2022-12-15 14:49:48', 'CHAMPAGNE GRUET - BRUT SELECTION', 'L’harmonie tout en longueur de ce champagne accompagnera vos instants rares!\r\nNé d’un assemblage des 3 cépages champenois, le brut Sélection de la Maison Gruet libère des arômes élégants de fruits blancs et de pêche de vigne. Sa matière ronde se révèle en bouche ou il se montre droit, d’un équilibre juste et d’une belle longueur. Un superbe rapport qualité/prix !', '70% Pinot noir, 20% Chardonnay, 10% Pinot meunier', '639b25fc62fd1.png', '13.45', '26.90', 25, 3, 4, 4),
(40017, '2022-12-15 14:53:56', 'CHAMPAGNE THIERRY MASSIN - CUVEE ARPENTS', 'Le champagne hommage, doux, crémeux à la typicité de la Côte des Bar !\r\nAu cœur de la Côte des Bar et à l’entrée de la vallée de l’Arce,le village dans lequel s\'est implanté Thierry Massin bénéficie des meilleures conditions pour produire des raisins d\'une maturité exceptionnelle et d\'une expression unique. Le Champagne \"Cuvée Arpent\" est un assemblage de Pinot noir et de Chardonnay, deux cépages garantissant un remarquable équilibre des champagnes du domaine. Une dégustation sur des notes fruitées et florales laisse se dévoiler une belle ampleur en bouche et un joli fondu. Finesse et élégance sont de mise pour sublimer la dégustation et le partage de cette cuvée !', '85% Pinot noir, 15% Chardonnay', '639b26f4a90fd.png', '11.95', '23.90', 25, 3, 4, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wine`
--
ALTER TABLE `wine`
  ADD PRIMARY KEY (`wine_id`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_type_wine` (`id_type_wine`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wine`
--
ALTER TABLE `wine`
  MODIFY `wine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40018;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
