-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.5.46-0ubuntu0.14.04.2 - (Ubuntu)
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de données de la table scotchbox.delegues_regionaux : ~15 rows (environ)
/*!40000 ALTER TABLE `delegues_regionaux` DISABLE KEYS */;
REPLACE INTO `delegues_regionaux` (`id`, `region`, `identite`, `departements`, `lieuExercice`, `telPrincipal`, `telSecondaire`, `telPortable`, `telBureau`, `fax`, `email`) VALUES
	(1, 'Bourgogne-Franche-Compté', 'Dr Jacqueline Bertrand', '21 - 58 - 71', 'CHG William Morey, 71100 Chalon sur Saone', '03.86.48.48.48', '', '', '03.86.48.47.19', '03.86.48.47.19', 'jacqueline.bertrand@ch-chalon71.fr'),
	(2, 'Bourgogne-Franche-Compté', 'Dr Rodriguez Michel', '89', 'Centre Hospitalier - 89800 Auxerre', '03.68.48.48.48', '', '', '', '03.86.48.47.19', '0'),
	(3, 'Bourgogne-Franche-Compté', 'Dr Schoch Jean-Pierre', '25 - 39 - 70', 'Centre Hospitalier 2 rue Flamand, 25209 Montbeliard', '03.81.91.63.92', '03.81.91.62.24', '', '', '03.81.91.63.92', 'jean-pierre.schoch@wanadoo.fr'),
	(4, 'Bourgogne-Franche-Compté', 'Dr Doutre Pierre-Antoine', '90', 'Centre Hospitalier - 14 rue Muhouse, 90016 Belfort', '03.84.57.40.00', '03.84.57.47.12', '', '03.84.57.41.86', '03.84.57.47.56', 'padoutre@ch-belfort-montbeliard.rss.fr'),
	(5, 'Bretagne', 'Dr Brule Remi', '22', '', '', '', '06.73.25.71.98', '', NULL, 'remi.brule@wanadoo.fr'),
	(6, 'Centre-Val-de-Loire', 'Dr Brodeur James', '22 - 28 - 36 - 37 - 41 - 45', 'Centre Hospitalier - 145 av Fr Mitterand, 18000 Bourges', '02.48.48.49.14', '02.48.48.48.48', '', '', '02.48.48.48.13', 'james.brodeur@wanadoo.fr'),
	(7, 'Grands-Est', 'Dr Tonnelier Hubert', '', 'Centre Hospitalier - 3 av Robert Schuman', '03.29.68.70.00', '03.29.68.76.69', '', '03.29.34.27.75', '03.29.34.27.75', 'samu88@wanadoo.fr'),
	(8, 'Hauts-de-France', 'Dr Desmidt Marc', '59 - 62', 'Centre Hospitalier St Philibert 59462 Lomme, 97 Avenue Pottier, 59130 Lambersart', '03.20.22.50.65', '03.20.08.26.97', '06.09.20.38.96', '', '03.20.22.50.25', 'desmidt@club-internet.fr'),
	(9, 'Ile-de-France', 'Dr Vignier', '78', 'Centre Hospitalier - Bl Sully, 78021 Mantes la jolie', '01.34.97.40.00', '01.34.97.41.10', '', '', '01.34.97.41.14', 'pen6f@aol.com'),
	(10, 'Ile-de-France', 'Dr Cazaban Denis', '93 - 92', 'Centre Hospitalier - 10 rue Gnl Leclerc, 93370 Montfermeil', '01.41.70.82.55', '', '', '01.41.70.82.02', '01.41.70.82.02', 'denis.cazaban@wanadoo.fr'),
	(11, 'Ile-de-France', 'Dr Reyes Seti', '93 - 92', 'Centre Hospitalier - ,93100 Montreuil', '01.49.20.30.40', '', '', '', NULL, 'seti.reyes@wanadoo.fr'),
	(12, 'Nouvelle-Aquitaine', 'Dr Goumard Daniele', '16 - 17 - 79 - 86', '', '05.46.34.11.31', '', '06.81.58.58.06', '', NULL, 'daniele.gourmard@wanadoo.fr'),
	(13, 'Occitanie', 'Dr Perucho Pierre', '11 - 30 - 34 - 48 - 66', 'Centre Hospitalier - 20 av Languedoc, 66000 Perpignan', '04.68.61.66.33', '', '', '', '04.68.61.69.89', 'pierre.perucho@ch-perpignan.fr'),
	(14, 'Provence-Alpes-Cote-d\'Azur', 'Dr Bretszajn Alain', '04 - 05', '207 Av Julien Fabre, 13658', '04.90.44.91.44', '', '', '', '04.90.44.92.54', 'rea@ch-salon.fr'),
	(15, 'Provence-Alpes-Cote-d\'Azur', 'Dr Kaidomar Michel', '83', 'Centre Hospitalier - 605 av A. Léotard, 83608 Frejus', '04.94.40.20.68', '', '', '', '04.94.17.79.03', 'kaidomar-m@chi-frejus-saint-raphael.fr');
/*!40000 ALTER TABLE `delegues_regionaux` ENABLE KEYS */;

-- Export de données de la table scotchbox.wusers : ~2 rows (environ)
/*!40000 ALTER TABLE `wusers` DISABLE KEYS */;
REPLACE INTO `wusers` (`id`, `username`, `email`, `password`, `role`) VALUES
	(7, 'mm', 'marcmura@hotmail.fr', '$2y$10$D7Ulm/oZmDIyf3b8DkfOQOCdjo/1JZ1iXWF71S.aiAyHWjs8hp9TC', 'admin'),
	(8, 'testUser', 'mail@truc.fr', '$2y$10$TNQ83mJ7p/F2gJuKWCksyuN8GrZbzvlLPvrEcFVKcrdTjvvl.m6FG', 'user');
/*!40000 ALTER TABLE `wusers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
