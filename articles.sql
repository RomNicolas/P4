-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : racoonstwwromain.mysql.db
-- Généré le :  mar. 18 juin 2019 à 09:59
-- Version du serveur :  5.6.39-log
-- Version de PHP :  7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `racoonstwwromain`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `author`, `title`, `content`, `date_creation`, `date_modification`) VALUES
(1, 'Jean Forteroche', 'Chapitre 1 : Le grand saut', '<p><em><strong>Lorem</strong></em> ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor ipsum nec ipsum efficitur suscipit. Cras risus mi, fermentum sed sagittis vitae, tincidunt vitae justo. Nunc vel augue feugiat, porta elit a, molestie lorem. Maecenas lacus odio, accumsan sit amet orci consectetur, blandit molestie libero. Vivamus placerat ante at sem interdum porta. Suspendisse dui justo, rutrum id diam sit amet, auctor laoreet velit. Proin convallis vestibulum lectus eget semper. Nam erat ex, consequat non mauris sit amet, pharetra aliquam nisi. Vestibulum auctor justo eget erat finibus, sed consectetur dolor ornare. Praesent euismod tellus id purus molestie, pharetra sagittis tellus molestie. Sed ullamcorper nulla in est faucibus, at tincidunt purus elementum. Nullam euismod ut purus at mollis. Nam ultrices nibh ante, gravida gravida mi fringilla vitae. Quisque accumsan purus tortor, ullamcorper porta enim commodo sed. Aenean vel convallis justo. Nulla non venenatis purus, in faucibus neque.</p>\r\n<p>&nbsp;</p>\r\n<p>Vivamus ac odio eget metus placerat porta sed vitae ligula. Nunc quis felis iaculis justo semper lobortis a id elit. Pellentesque ac imperdiet eros. Mauris luctus nulla id ligula iaculis, at lacinia ipsum porta. Etiam hendrerit nibh leo, et egestas elit imperdiet laoreet. Praesent fermentum ex at leo rutrum, semper auctor augue pellentesque. Ut eleifend nisl lorem, vel lobortis diam tristique sit amet. Maecenas eu justo nec risus facilisis consequat eget quis leo. Donec porta odio nec velit porta, nec dictum nisl viverra. Cras eu euismod nunc. Duis efficitur eros eu elit maximus lobortis. Phasellus porttitor tellus ut nisl blandit lacinia. Maecenas posuere eros vitae eros viverra, gravida porttitor lectus varius.</p>', '2019-06-10 09:02:27', '2019-06-10 09:16:38'),
(3, 'Jean Forteroche', 'Chapitre 2 : Une poudreuse sans fin', '<p>Vestibulum sagittis pellentesque quam, eu dignissim erat facilisis a. Maecenas varius nec magna eu efficitur. Aenean euismod congue massa, eget vestibulum urna viverra id. Vestibulum lacinia vestibulum pulvinar. Praesent egestas erat non leo lacinia, at pulvinar metus efficitur. Vestibulum vel lectus et ante efficitur bibendum. Quisque convallis euismod massa. Vivamus at tellus id tellus rutrum tincidunt. Suspendisse vel tortor lacinia, tristique quam ac, aliquet nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>\r\n<p>&nbsp;</p>\r\n<p>Phasellus sodales erat eu urna iaculis, eu iaculis erat cursus. Quisque in sodales nisl, sit amet cursus felis. Vestibulum mi justo, lobortis et felis eget, porta dignissim nibh. Fusce turpis magna, lacinia at rhoncus sit amet, volutpat at purus. Suspendisse fringilla tincidunt cursus. Nam dapibus mi metus, quis tristique justo venenatis sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla id sagittis justo.</p>', '2019-06-10 10:25:53', '2019-06-10 10:25:53'),
(4, 'Jean Forteroche', 'Chapitre 3 : Le mont d\'un autre monde', '<p>In felis ex, fringilla porta aliquam in, blandit at ipsum. Proin molestie a diam sit amet bibendum. Aliquam erat volutpat. Etiam sed laoreet lorem. Aliquam lectus nisi, accumsan in ultrices ac, iaculis vitae mauris. Morbi metus magna, rhoncus sit amet pulvinar eu, semper vel tortor. Sed rhoncus pellentesque eros at vestibulum. Pellentesque a congue dui. Phasellus tempus enim rhoncus, vehicula turpis sit amet, vehicula tellus. Donec nibh massa, rhoncus et egestas ac, aliquam nec magna. Integer efficitur condimentum metus ac fringilla.</p>\r\n<p>&nbsp;</p>\r\n<p>Nulla gravida eleifend ultrices. Nunc sed diam nec ex dapibus accumsan quis eget est. Ut mi purus, pretium sed nibh vel, porttitor faucibus nunc. Mauris volutpat mi dui, ut mattis ligula viverra sed. Pellentesque sit amet arcu vitae ligula aliquam semper a sed nisl. Vivamus egestas quis neque nec ultrices. Nullam sit amet sapien metus. Praesent tortor dui, viverra vel lobortis non, convallis at mauris. Aenean finibus metus ut enim molestie pharetra. Nulla et ex nec risus tempus sodales. Aenean a neque eget ante efficitur malesuada sit amet ac sem.</p>', '2019-06-10 10:48:14', '2019-06-10 10:48:14'),
(5, 'Jean Forteroche', 'Chapitre 4 : Noir sombre fut la nuit', '<p>Pellentesque ultrices lacinia consectetur. Nullam luctus ligula quis turpis consectetur congue. Sed malesuada, turpis id iaculis semper, leo mi scelerisque libero, id faucibus felis dolor in mauris. Nam in nisi arcu. Maecenas ligula tellus, pellentesque tristique iaculis vel, rutrum ac mauris. Praesent sapien est, vulputate tincidunt odio at, lobortis faucibus nulla. Duis maximus ex in molestie porta. Integer nibh magna, bibendum a vestibulum eget, luctus ut leo.</p>\r\n<p>&nbsp;</p>\r\n<p>Aliquam eget lectus et magna pretium sodales at in lectus. Aenean in molestie erat. Curabitur lacus arcu, imperdiet consequat convallis sed, imperdiet eu nisl. Curabitur elementum nisi venenatis augue sodales, id pellentesque eros laoreet. Quisque eu eros nec ante malesuada lobortis. Mauris imperdiet pretium nisi, et commodo sem ornare vel. Aliquam erat volutpat. Fusce a tincidunt enim, vitae euismod mauris. Morbi a turpis semper, interdum lorem in, imperdiet sem. Etiam lectus ligula, fringilla id tempus non, tempus vel lacus. Proin malesuada, enim nec tempus blandit, nisl leo varius dui, maximus porttitor ex ex ut libero. Praesent blandit ligula vel massa aliquet, ut viverra nunc pulvinar. Sed laoreet venenatis dignissim. Vivamus sollicitudin erat sit amet justo sodales vehicula. Praesent felis lectus, iaculis id justo blandit, egestas efficitur erat.</p>', '2019-06-10 11:21:07', '2019-06-10 11:21:07'),
(7, 'Jean Forteroche', 'Chapitre 5 : Or du cristal', '<p>Curabitur non dictum justo. Phasellus placerat ex tincidunt metus pretium lacinia. Aliquam a lacus eu ligula gravida ultricies. Praesent non mauris ac tellus feugiat volutpat. Nunc sit amet arcu commodo, elementum eros sit amet, rhoncus metus. Cras pulvinar quam faucibus, posuere magna quis, euismod ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo semper efficitur. Nam et velit nunc. Cras sit amet ullamcorper lacus. Fusce sit amet ultrices nunc. Pellentesque ultrices luctus tristique. Curabitur vestibulum condimentum tincidunt. Pellentesque facilisis ligula eget accumsan tincidunt. Vestibulum elementum accumsan massa pulvinar dictum. Mauris semper semper mattis. Pellentesque condimentum sollicitudin dolor, sed bibendum sem tristique in. Duis a aliquam turpis, nec tincidunt orci.</p>\r\n<p>&nbsp;</p>\r\n<p>Proin venenatis nisi justo, aliquam tempus turpis dictum sed. Aenean vitae egestas purus. Curabitur nec sem non metus finibus ultricies et et dui. Vivamus efficitur consequat ipsum ornare efficitur. Mauris vestibulum dictum justo ac iaculis. Vivamus tempor tortor a leo hendrerit, at volutpat nulla maximus. Donec luctus nisi sit amet est consequat feugiat. Aenean eu arcu quam. Phasellus finibus urna ut vulputate ultrices. Praesent dignissim mauris at libero interdum, in semper enim vulputate. Integer eu aliquam nibh. Donec tincidunt ex a rutrum mattis. Cras fermentum vel felis et dignissim. Aliquam iaculis nisi at sodales aliquam. Maecenas auctor sagittis suscipit. Vestibulum eleifend pellentesque est, eu posuere enim tempus vel.</p>', '2019-06-10 12:40:57', '2019-06-10 12:40:57'),
(8, 'Jean Forteroche', 'Chapite 6 : La créature d\'hiver', '<p><em><strong>Maecenas</strong></em> cursus vehicula urna, mattis tincidunt massa luctus non. Cras tempus efficitur purus. Duis lacinia enim ante, sed vehicula urna luctus vitae. Curabitur facilisis eu sapien a pellentesque. Duis lorem neque, tincidunt nec arcu in, ornare lobortis orci. Pellentesque tempor sagittis nisl id tincidunt. In porta nulla vel mi maximus tincidunt. Cras ipsum augue, venenatis ac egestas et, pharetra convallis magna. Morbi urna libero, suscipit et metus in, efficitur finibus nulla. Phasellus sit amet ex a risus venenatis fermentum at a arcu. Proin eu placerat neque. Sed eu pellentesque odio. Aliquam erat volutpat. Quisque eu libero quis erat tristique mattis non eu nisi. Phasellus egestas nunc in ipsum gravida, sit amet dapibus augue lacinia.</p>\r\n<p>&nbsp;</p>\r\n<p>Donec aliquam lacinia euismod. Suspendisse potenti. Proin condimentum consequat elit nec sagittis. Mauris in orci non sapien vehicula condimentum vestibulum fermentum nulla. Quisque nibh lorem, scelerisque ac lorem eget, suscipit sodales nisi. Mauris hendrerit odio molestie turpis eleifend elementum. Vestibulum ac vestibulum lectus, a scelerisque orci. Suspendisse vel lobortis elit. Vestibulum eu mattis odio. Donec non ligula ac massa egestas consequat. Pellentesque congue pellentesque mi, vitae fermentum lectus scelerisque id. Nulla iaculis accumsan metus id bibendum. Curabitur mattis maximus malesuada. Nullam laoreet ornare purus, a fermentum erat maximus quis. Fusce dignissim sem id luctus luctus. Sed hendrerit vulputate est. Donec imperdiet semper convallis.</p>\r\n<p>&nbsp;</p>\r\n<p>Etiam pharetra ultricies risus eu sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut laoreet, quam id bibendum suscipit, elit nunc convallis augue, tincidunt pretium elit odio in urna. Nunc non elit urna. Cras mollis, lacus sit amet ornare ultricies, enim est venenatis mauris, a laoreet neque nunc non ipsum. Suspendisse in nunc sed nisi blandit porta sit amet sed nulla. Vestibulum dapibus sit amet eros vitae aliquam. Curabitur sodales lacus eu diam aliquet lacinia. Ut maximus dui eros, eu fermentum ante varius eu. Duis eget lorem tristique, congue augue eu, sodales velit.</p>', '2019-06-10 12:42:58', '2019-06-18 09:55:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
