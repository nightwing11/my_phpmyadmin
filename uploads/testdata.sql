
CREATE DATABASE TestData;
USE TestData;

CREATE TABLE `amis` (
`id_chat` int(11) NOT NULL,
  `id_user_from` int(11) NOT NULL,
  `id_user_to` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `amis`
--

INSERT INTO `amis` (`id_chat`, `id_user_from`, `id_user_to`) VALUES
(1, 2, 3),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
`id_auteur` int(11) NOT NULL,
  `nom_auteur` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom_auteur`) VALUES
(1, 'Eiichiro Oda'),
(2, 'Akira Amano '),
(3, 'Hirohiko Araki'),
(4, 'Akimine Kamij'),
(5, 'Hiromu Arakawa'),
(6, 'Kenji Oiwa'),
(8, 'Ken Akamatsu'),
(9, 'Seishi Kishimoto'),
(10, 'Masashi Kishimoto'),
(11, 'Gosho Aoyama'),
(12, 'T?ru Fujisawa'),
(13, 'Rumiko Takahashi'),
(14, 'Takashi Shiina'),
(15, 'Akira Toriyama'),
(16, 'Tsukasa H?j?'),
(17, 'Tite Kubo'),
(18, 'Masami Kurumada'),
(19, 'Tetsuya Chiba'),
(20, 'Asao Takamori'),
(21, 'Hiro Mashima'),
(22, 'Kazue Kato'),
(25, 'Naoko Takeuchi'),
(26, 'Otsuichi'),
(28, 'Ebine Yamaji'),
(29, 'Yuki Amemiya'),
(30, 'Takashi Okazaki');

-- --------------------------------------------------------

--
-- Structure de la table `bidon`
--

CREATE TABLE `bidon` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
`id_commentaire` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `date_commentaire` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tome` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `echange`
--

CREATE TABLE `echange` (
`id_echange` int(11) NOT NULL,
  `id_preteur` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_debut_echange` date NOT NULL,
  `id_receveur` int(11) NOT NULL,
  `date_fin_echange` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_manga`
--

CREATE TABLE `fiche_manga` (
`id_fiche_manga` int(30) NOT NULL,
  `titre` varchar(15) NOT NULL,
  `resume` varchar(10000) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fiche_manga`
--

INSERT INTO `fiche_manga` (`id_fiche_manga`, `titre`, `resume`, `id_auteur`, `url_img`, `id_genre`) VALUES
(1, 'One Piece', 'Résumé : Gold Roger est le seigneur des pirates. À sa mort, une grande vague de piraterie s''abat sur le monde. Ces pirates partent à la recherche du One Piece, le fabuleux trésor amassé par Gold Roger durant tout sa vie. \r\nNotre histoire commence dans un petit village dans lequel une bande de pirates réside depuis un an. Monkey D. Luffy, notre héros, est un petit garçon qui rêve de devenir pirate et demande inlassablement à Shanks le Roux, le chef des pirates, de le prendre dans son équipage. Celui-ci refuse évidemment à chaque fois en le tournant en ridicule. \r\nUn jour, Luffy mange par erreur le trésor des pirates qui n''est autre que l''un des fruits du démon, qui ont la réputation de donner des pouvoirs spéciaux. C''est ainsi que Luffy devient un homme élastique. Toutefois, le mangeur d''un fruit du démon se retrouve dans l''incapacité de nager... \r\nDix ans plus tard, nous retrouvons Luffy qui décide de prendre la mer à la recherche d''un équipage à lui et avec pour objectif de devenir le seigneur des pirates !', 1, 'http://cdn.joentjuh.nl/manga/33-v0-front-normal.jpg', 1),
(2, 'Reborn! ', 'Sawada Tsunayoshi autrement Tsuna, collégien malchanceux, mauvais en sport, nul en drague et zéro dans toutes les matières, surnommé "Tsunaze" dans son collège, vient uniquement en cours pour admirer la fille de ses rêves : Kyoko Sasagawa. Un jour, un professeur très spécial venu d''Italie débarque chez lui, à la requête du neuvième Parrain de la famille mafieuse Vongola, pour éduquer Tsuna afin d''en faire son successeur. Sous l''apparence d''un bébé, Reborn est un tueur à gages réputé. C''est ainsi que la vie tranquille de Tsuna va basculer dans des aventures périlleuses et des rencontres improbables.', 2, 'http://cdn.joentjuh.nl/manga/366-v1-front-normal.j', 1),
(3, 'Samurai Deeper ', 'Un jeune pharmacien, Kyoshiro Mibu, rencontre une jeune femme qui se dit asthmatique et souhaite la soigner. Mais cette femme se révèle être en fait Yuya Shiina, une célèbre chasseuse de prime, « celle qui se trouve partout sur la route de Tokai ». Elle croit avoir reconnu en Kyoshiro le portrait du grand meurtrier Kyo aux yeux de démon, l''homme aux 1 000 victimes…', 3, 'http://cdn.joentjuh.nl/manga/500-v1-front-normal.jpg', 1),
(4, 'Nobles paysans', 'Avec Nobles Paysans embarquez pour le nord du Japon, sur l''île de Hokkaïdo, à la découverte de la ferme Arakawa et de ses habitants hauts en couleurs.', 5, 'http://blog.kurokawa.fr/wp-content/uploads//2013/09/Nobles-Paysans-1.jpg', 2),
(5, 'Sailor Moon', 'Il y a plus de 10 000 ans, les continents de la Terre ne forment qu’un unique pays et la Lune est habitée par des Sélénites à la vie éternelle1. Les deux peuples, gouvernés par un système proche d''une monarchie, sont particulièrement évolués et semblent avoir atteint leur âge d’or. Depuis son royaume basé sur la Lune, le Silver Millenium, Queen Serenity, entourée de ses conseillers, les chats Luna et Artemis, veille sur la paix de la Terre2. Elle est entourée de sa fille, Princess Serenity, et de ses gardes du corps, les guerrières Sailors (??????, S?r? Senshi?) Sailor Mercury, Sailor Mars, Sailor Jupiter, guidées par leur leader, Sailor Venus1.', 25, 'http://cdn.joentjuh.nl/manga/1395-v1-front-normal.jpg', 2),
(6, 'Goth', 'Itsuki Kamiyama et Yoru Morino sont camarades de classe. Kamiyama est un garçon sociable et apprécié de ses camarades tandis que Morino est une jeune fille secrète qui semble ne parler à personne. Alors que tout les oppose, ils vont se rendre compte qu’ils ont une passion commune: la mort. Ils éprouvent tous deux une attirance irrésistible pour les histoires morbides, ce qui les amènera à se rapprocher l''un de l''autre.\r\n\r\nÀ travers cinq chapitres, les lecteurs vont découvrir le caractère des deux adolescents ainsi que leur passé.', 26, 'http://cdn.joentjuh.nl/manga/890-v1-front-normal.jpg', 3),
(7, 'Negima!', 'Negi Springfield, âgé de 10 ans, vient de terminer ses sept ans d''études de magie. Afin de devenir magicien accompli, il est envoyé au Japon pour être professeur d''anglais dans une classe du collège Mahora (2-A en japonais qui correspond à la 4-A en français). À son arrivée sur le campus, il a un accrochage avec Asuna Kagurazaka, une de ses élèves, chez qui il va loger, sur décision du directeur. Asuna va découvrir rapidement qu''il est magicien. Il va alors apprendre qu''être professeur dans une classe de filles n''est pas toujours de tout repos…', 8, 'http://cdn.joentjuh.nl/manga/574-v1-front-normal.jpg', 1),
(12, 'Ginga Patrol Ja', 'L’extraterrestre Jako s''écrase sur Terre et rencontre Omori, un scientifique à la retraite. Jako est un patrouilleur galactique, un policier de l''univers, venu sur Terre pour la protéger d’une attaque extraterrestre.', 15, 'http://wac.450f.edgecastcdn.net/80450F/comicsalliance.com/files/2013/06/GingaPatrolJako.jpg', 1),
(13, 'Fairy Tail', 'L’histoire se focalise principalement sur les missions effectuées par l’une des équipes de Fairy Tail, composée de Natsu Dragnir (chasseur de dragon de feu), Lucy Heartfilia (constellationniste) et Happy (un chat bleu Exceed pouvant se faire pousser des ailes, voler et parler), qui seront très vite rejoints par Erza Scarlett (mage chevalier) et Grey Fullbuster (mage et chasseur de démon de glace), deux autres membres de la fameuse guilde. Ils sont rejoints au cours de l''aventure par Carla (une chatte blanche Exceed comme Happy) et Wendy (chasseuse de dragon céleste).', 21, 'http://cdn.joentjuh.nl/manga/3793-v1-front-normal.jpg', 1),
(14, 'Bleach', 'Le récit commence en 2001 au Japon dans la ville fictive de Karakura. Ichigo Kurosaki, lycéen de 15 ans, arrive à voir, entendre et toucher les âmes des morts depuis qu''il est tout petit. Un soir, sa routine quotidienne vient à être bouleversée suite à sa rencontre avec une shinigami (??, littéralement « dieu de la mort »?), Rukia Kuchiki, et la venue d''un monstre appelé hollow. Ce dernier étant venu dévorer les âmes de sa famille et la shinigami venue le protéger ayant été blessée par sa faute, Ichigo accepte de devenir lui-même un shinigami afin de les sauver.\r\n\r\nCependant, le transfert de pouvoir, censé être temporaire et partiel, est complet et ne s''achève pas. Ichigo est forcé de prendre la responsabilité de la tâche incombant à Rukia Kuchiki. Il commence donc la chasse aux hollows tout en protégeant les âmes humaines.', 17, 'http://cdn.joentjuh.nl/manga/35-v1-front-normal.jpg', 1),
(15, 'Dr. Slump ', 'Le Docteur Slump (de son vrai nom Senbei Norimaki) crée un androïde qui a les traits d''une jeune fille de 13 ans et décide de la tester en l''insérant dans la vie du village Pingouin en la présentant comme sa sœur Aralé. Cependant, celle-ci possède des supers pouvoirs (force, vitesse, intelligence) ainsi qu''une grande naïveté, et va chambouler la vie du village habité par des êtres quelque peu extravagants… Le but inavoué de Senbei est d''épouser Midori Yamabuki, la ravissante institutrice de l''école du village Pingouin.', 15, 'http://cdn.joentjuh.nl/manga/4496-v1-bunko-front-normal.jpg', 1),
(16, 'Go! Go! Ackman', 'L''histoire commence lorsqu''Ackman, un petit enfant démoniaque âgé de 200 ans, se réveille après avoir dormi pendant cinquante ans. Les membres de sa famille lui expliquent alors qu''ils ont pour mission de tuer les gens et de vendre leur âme au diable pour gagner des Yens l''argent de l''époque. Ces aventures sont parues dans les histoires courtes (volume 3) d''Akira Toriyama', 15, 'http://www.romstation.fr/romstation/resources/games/snes/cover/34695.jpg', 1),
(17, 'Ranma', 'L''histoire commence chez la famille Tendô, qui réside à Nerima (arrondissement de Tokyo), Genma Saotome et son fils Ranma amis de la famille doivent venir les voir. Les pères des deux familles ont arrangé le mariage de Ranma avec l''une des trois filles Tendô depuis très longtemps, afin d''unir leurs deux écoles d''arts martiaux et poursuivre l''exploitation du dojo familial Tendô.\r\n\r\nTout irait pour le mieux si M. Saotome ne se transformait pas de temps à autres en panda géant et que Ranma Saotome n''alternait pas ses formes entre celles d''un beau lycéen très doué en arts martiaux et celle d''une ravissante jeune fille rousse (dans l''animé), également très douée dans ce domaine...\r\n\r\nLa double apparence de Ranma, ainsi que les autres transformations en humain ou en animal de plusieurs autres protagonistes constituent la source de nombreux quiproquos et coups de théâtre dans Ranma ½, au gré des expositions à l''eau froide (transformation) ou chaude (retour à la normale). Il en résulte suspens et effets comiques à un rythme effréné, d''autant que les transformations sont généralement un secret honteux connu d''un petit cercle d''intimes, qui peuvent en user comiquement.', 13, 'http://cdn.joentjuh.nl/manga/1049-v1-front-normal.jpg', 1),
(18, 'Love my life', 'Ichiko Izumiya est amoureuse de Eri Jôjima. Elle fait son coming out à son père. On suit l''évolution de ce couple, leurs doutes...', 28, 'http://cdn.joentjuh.nl/manga/670-v1-front-normal.jpg', 4),
(19, '07-Ghost', 'Teito Klein est un adolescent qui se prépare à passer son examen d’entrée à l’armée avec son meilleur ami Mikage. Teito n’a conservé aucun souvenir de son enfance. Mais, lors de l’examen, la vue de l’examinateur Ayanami déclenche en lui une vague de souvenirs. Teito voit Ayanami tuer son père. Ivre de rage, il se lance sur le militaire, qui l’arrête bien facilement et le fait emprisonner. Avec l’aide de Mikage, Teito fuit les cachots. Il n’est maintenant plus question pour lui de rester à l’académie militaire. Il vole un vaisseau et s’enfuit, pour s’écraser devant trois prêtres. Ceux-ci le conduisent dans une église. Tout en s’y reposant, Teito cherche à découvrir la vérité sur son passé et sur les Seven Ghost, protecteurs de cet endroit.', 29, 'http://cdn.joentjuh.nl/manga/1702-v1-front-normal.jpg', 2),
(20, 'Afro Samurai', 'Dans un Japon médiéval alternatif, le jeune Afro assiste au meurtre de son père par un assassin mystérieux portant un bandeau de numéro 2.\r\n\r\nCes bandeaux, sorte de récompense ultime pour les combattants, auraient été créés par les dieux eux-mêmes. Le détenteur du bandeau numéro 1, au sommet de la hiérarchie ne pouvant être défié que par porteur du bandeau numéro 2.\r\n\r\nAfro part alors à la recherche de l''assassin de son père pour comprendre les raisons de ce crime et se venger2 .', 30, 'http://www.bdnet.com/img/couvpage/76/9782809409765_cg.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
`id_genre` int(11) NOT NULL,
  `nom_genre` varchar(255) NOT NULL,
  `description_genre` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id_genre`, `nom_genre`, `description_genre`) VALUES
(1, 'Shonen', 'Pour les garçons'),
(2, 'Shôjo', 'Ce sont les mangas dits pour filles '),
(3, 'Seinen', 'Ce sont des mangas plus adultes tant au niveau du graphisme qu''au niveau de l''histoire.'),
(4, 'Mature Shôjo ou Josei', 'contrairement aux simples shôjo, ces mangas qui visent un public féminin averti contiennent des scènes érotiques '),
(5, 'Hentai', 'Ce sont les mangas réservés aux adultes. Bon, je crois que tout le monde sait ce que c''est : du sexe...'),
(6, 'Shônen-ai', 'Ils mettent en scène une histoire d''amour entre 2 hommes. Il n''y a aucune scène graphique.'),
(7, 'Yaoi', 'Comme dans le shônen-ai, les principaux protagonistes du yaoi sont des hommes, mais cette fois, les scènes sont beaucoup plus explicites'),
(8, 'Shôjo-ai', 'C''est l''équivalence féminine du shônen-ai'),
(9, 'Yuri', 'C''est l''équivalence féminine du yaoi'),
(10, 'Dôjinshi', 'Ce sont des mangas faits par des fans ou par d''autres mangakas, et qui reprennent les personnages d’une série déjà existante'),
(11, 'Sonyung', 'C''est l''équivalent du Shônen'),
(12, 'Sunjeong', 'C''est l''équivalent du Shôjo'),
(13, 'Tchungnyun', 'C''est l''équivalent du Seinen');

-- --------------------------------------------------------

--
-- Structure de la table `gg`
--

CREATE TABLE `gg` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hg`
--

CREATE TABLE `hg` (
`ID` int(11) NOT NULL,
  `Prename` varchar(50) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `StreetA` varchar(150) NOT NULL,
  `StreetB` varchar(150) NOT NULL,
  `StreetC` varchar(150) NOT NULL,
  `County` varchar(100) NOT NULL,
  `Postcode` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matable`
--

CREATE TABLE `matable` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matabletest`
--

CREATE TABLE `matabletest` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `matabletest2`
--

CREATE TABLE `matabletest2` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
`id_message` int(11) NOT NULL,
  `id_user_from` int(11) NOT NULL,
  `id_user_to` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `id_user_from`, `id_user_to`, `message`, `date_creation`) VALUES
(1, 2, 3, 'HEY BAPTISTE !', '2014-12-01'),
(2, 3, 2, 'HEY THEO !', '2014-12-02');

-- --------------------------------------------------------

--
-- Structure de la table `table3`
--

CREATE TABLE `table3` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `table4`
--

CREATE TABLE `table4` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tabletest`
--

CREATE TABLE `tabletest` (
`ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tome`
--

CREATE TABLE `tome` (
`id_tome` int(11) NOT NULL,
  `num_tom` int(11) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  `id_fiche_manga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tome`
--

INSERT INTO `tome` (`id_tome`, `num_tom`, `url_img`, `id_fiche_manga`) VALUES
(1, 1, 'http://cdn.joentjuh.nl/manga/33-v1-front-normal.jpg', 1),
(2, 2, 'http://cdn.joentjuh.nl/manga/33-v2-front-normal.jpg', 1),
(33, 3, 'http://cdn.joentjuh.nl/manga/33-v3-front-normal.jpg', 1),
(34, 4, 'http://cdn.joentjuh.nl/manga/33-v4-front-normal.jpg', 1),
(35, 5, 'http://cdn.joentjuh.nl/manga/33-v5-front-normal.jpg', 1),
(36, 6, 'http://cdn.joentjuh.nl/manga/33-v6-front-normal.jpg', 1),
(37, 7, 'http://cdn.joentjuh.nl/manga/33-v7-front-normal.jpg', 1),
(38, 8, 'http://cdn.joentjuh.nl/manga/33-v8-front-normal.jpg', 1),
(41, 9, 'http://cdn.joentjuh.nl/manga/33-v9-front-normal.jpg', 1),
(44, 10, 'http://cdn.joentjuh.nl/manga/33-v10-front-normal.jpg', 1),
(59, 11, 'http://cdn.joentjuh.nl/manga/33-v11-front-normal.jpg', 1),
(60, 12, 'http://cdn.joentjuh.nl/manga/33-v12-front-normal.jpg', 1),
(61, 1, 'http://cdn.joentjuh.nl/manga/366-v1-front-normal.jpg', 2),
(62, 2, 'http://cdn.joentjuh.nl/manga/366-v2-front-normal.jpg', 2),
(63, 3, 'http://cdn.joentjuh.nl/manga/366-v3-front-normal.jpg', 2),
(64, 4, 'http://cdn.joentjuh.nl/manga/366-v4-side-normal.jpg', 2),
(65, 5, 'http://cdn.joentjuh.nl/manga/366-v5-front-normal.jpg', 2),
(66, 6, 'http://cdn.joentjuh.nl/manga/366-v6-front-normal.jpg', 2),
(67, 1, 'http://cdn.joentjuh.nl/manga/500-v1-front-normal.jpg', 3),
(68, 2, 'http://cdn.joentjuh.nl/manga/500-v2-front-normal.jpg', 3),
(69, 3, 'http://cdn.joentjuh.nl/manga/500-v3-front-normal.jpg', 3),
(70, 4, 'http://cdn.joentjuh.nl/manga/500-v4-front-normal.jpg', 3),
(71, 1, 'http://cdn.joentjuh.nl/manga/3793-v1-front-normal.jpg', 13),
(72, 2, 'http://cdn.joentjuh.nl/manga/3793-v2-front-normal.jpg', 13),
(73, 3, 'http://cdn.joentjuh.nl/manga/3793-v3-front-normal.jpg', 13),
(74, 4, 'http://cdn.joentjuh.nl/manga/3793-v4-front-normal.jpg', 13),
(80, 1, 'http://cdn.joentjuh.nl/manga/35-v1-front-normal.jpg', 14),
(81, 2, 'http://cdn.joentjuh.nl/manga/35-v2-front-normal.jpg', 14),
(82, 3, 'http://cdn.joentjuh.nl/manga/35-v3-front-normal.jpg', 14),
(83, 4, 'http://cdn.joentjuh.nl/manga/35-v4-front-normal.jpg', 14),
(84, 5, 'http://cdn.joentjuh.nl/manga/35-v4-front-normal.jpg', 14),
(85, 1, 'http://cdn.joentjuh.nl/manga/4496-v1-bunko-front-normal.jpg', 15),
(86, 2, 'http://cdn.joentjuh.nl/manga/4496-v2-bunko-front-normal.jpg', 15),
(87, 3, 'http://cdn.joentjuh.nl/manga/4496-v3-bunko-front-normal.jpg', 15),
(88, 4, 'http://cdn.joentjuh.nl/manga/4496-v4-bunko-front-normal.jpg', 15),
(89, 5, 'http://cdn.joentjuh.nl/manga/4496-v5-bunko-front-normal.jpg', 15),
(90, 6, 'http://cdn.joentjuh.nl/manga/4496-v6-bunko-front-normal.jpg', 15),
(91, 7, 'http://cdn.joentjuh.nl/manga/4496-v7-bunko-front-normal.jpg', 15),
(92, 8, 'http://cdn.joentjuh.nl/manga/4496-v8-bunko-front-normal.jpg', 15),
(93, 9, 'http://cdn.joentjuh.nl/manga/4496-v9-bunko-front-normal.jpg', 15),
(94, 10, '', 15);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
`id_user` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `sexe` int(11) DEFAULT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `pays` varchar(15) DEFAULT NULL,
  `cp` int(6) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `url_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `mdp`, `date_naissance`, `sexe`, `prenom`, `nom`, `adresse`, `ville`, `pays`, `cp`, `note`, `url_img`) VALUES
(2, 'theodu60@live.fr', 'toto', '2014-12-01', 0, 'theophile', 'hemachandra', 'Musset', 'Crepy en valois', 'France', 60800, '1', './images/profils/theodu60@live.fr'),
(3, 'boulle_b@etna-alternance.net', 'toto2', '2014-12-17', 0, 'baptiste', 'boullenger', 'lol', 'Amiens', 'France', 80000, '5', './images/profils/boulle_b@etna-alternance.net'),
(4, 'mouloud1108@gmail.com', 'tati', '2014-12-17', 0, 'Mouloud', 'BENLALLI', 'rue jules verne', 'Clermont ', 'France', 60600, '20', 'https://intra.etna-alternance.net/report/trombi/im');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `code_postal` varchar(5) DEFAULT NULL,
  `nombre_achat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `amis`
--
ALTER TABLE `amis`
 ADD PRIMARY KEY (`id_chat`), ADD KEY `id_user_from` (`id_user_from`,`id_user_to`), ADD KEY `id_user_from_2` (`id_user_from`), ADD KEY `id_user_to` (`id_user_to`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
 ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bidon`
--
ALTER TABLE `bidon`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
 ADD PRIMARY KEY (`id_commentaire`), ADD KEY `id_user` (`id_user`,`id_tome`), ADD KEY `id_tome` (`id_tome`), ADD KEY `id_user_2` (`id_user`), ADD KEY `id_user_3` (`id_user`), ADD KEY `id_tome_2` (`id_tome`);

--
-- Index pour la table `echange`
--
ALTER TABLE `echange`
 ADD PRIMARY KEY (`id_echange`), ADD KEY `id_preteur` (`id_preteur`,`id_receveur`), ADD KEY `id_receveur` (`id_receveur`), ADD KEY `id_preteur_2` (`id_preteur`), ADD KEY `id_preteur_3` (`id_preteur`), ADD KEY `id_receveur_2` (`id_receveur`);

--
-- Index pour la table `fiche_manga`
--
ALTER TABLE `fiche_manga`
 ADD PRIMARY KEY (`id_fiche_manga`), ADD KEY `id_genre` (`id_genre`), ADD KEY `id_genre_2` (`id_genre`), ADD KEY `auteur` (`id_auteur`), ADD KEY `id_auteur` (`id_auteur`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
 ADD PRIMARY KEY (`id_genre`);

--
-- Index pour la table `gg`
--
ALTER TABLE `gg`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `hg`
--
ALTER TABLE `hg`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matable`
--
ALTER TABLE `matable`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matabletest`
--
ALTER TABLE `matabletest`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `matabletest2`
--
ALTER TABLE `matabletest2`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id_message`), ADD KEY `id_user_from` (`id_user_from`,`id_user_to`), ADD KEY `id_user_to` (`id_user_to`);

--
-- Index pour la table `table3`
--
ALTER TABLE `table3`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `table4`
--
ALTER TABLE `table4`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tabletest`
--
ALTER TABLE `tabletest`
 ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tome`
--
ALTER TABLE `tome`
 ADD PRIMARY KEY (`id_tome`), ADD KEY `id_fiche_manga` (`id_fiche_manga`), ADD KEY `id_fiche_manga_2` (`id_fiche_manga`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `amis`
--
ALTER TABLE `amis`
MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `bidon`
--
ALTER TABLE `bidon`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `echange`
--
ALTER TABLE `echange`
MODIFY `id_echange` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fiche_manga`
--
ALTER TABLE `fiche_manga`
MODIFY `id_fiche_manga` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `gg`
--
ALTER TABLE `gg`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `hg`
--
ALTER TABLE `hg`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `matable`
--
ALTER TABLE `matable`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `matabletest`
--
ALTER TABLE `matabletest`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `matabletest2`
--
ALTER TABLE `matabletest2`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `table3`
--
ALTER TABLE `table3`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table4`
--
ALTER TABLE `table4`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tabletest`
--
ALTER TABLE `tabletest`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tome`
--
ALTER TABLE `tome`
MODIFY `id_tome` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `amis`
--
ALTER TABLE `amis`
ADD CONSTRAINT `ck_user_chat` FOREIGN KEY (`id_user_from`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ck_user_to` FOREIGN KEY (`id_user_to`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
ADD CONSTRAINT `ck_tome_commentaire` FOREIGN KEY (`id_tome`) REFERENCES `tome` (`id_tome`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ck_user_commentaire` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `echange`
--
ALTER TABLE `echange`
ADD CONSTRAINT `ck_preteur_echange` FOREIGN KEY (`id_preteur`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ck_receveur_echange` FOREIGN KEY (`id_receveur`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fiche_manga`
--
ALTER TABLE `fiche_manga`
ADD CONSTRAINT `ck_auteur_fiche_manga` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ck_fiche_manga_genre` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
ADD CONSTRAINT `ck_users_to` FOREIGN KEY (`id_user_to`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ck_user_from` FOREIGN KEY (`id_user_from`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tome`
--
ALTER TABLE `tome`
ADD CONSTRAINT `ck_fiche_manga` FOREIGN KEY (`id_fiche_manga`) REFERENCES `fiche_manga` (`id_fiche_manga`) ON DELETE CASCADE ON UPDATE CASCADE;
