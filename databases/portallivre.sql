-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06-Nov-2015 às 22:44
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portallivre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE IF NOT EXISTS `artigos` (
  `id_artigo` int(11) NOT NULL,
  `title` varchar(233) CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `img` varchar(233) CHARACTER SET latin1 NOT NULL,
  `cat_artigo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id_artigo`, `title`, `description`, `img`, `cat_artigo`, `id_user`, `date`) VALUES
(1, '', '', '1446671048_1800389.jpg', -1, 1, '2015-11-04 21:04:08'),
(2, '', '', '1446671075_1800389.jpg', -1, 1, '2015-11-04 21:04:35'),
(3, 'Bom bala', 'lorem con forÃ§a', '1446671195_tumblr_ntoaurBy7t1uaundno1_400.gif', 1, 1, '2015-11-04 21:06:35'),
(4, 'caraca doido', 'kmdoaijdopud aud  das dasd sadygsa daysd asdays dad  ysadas da sda dgysgd a', '1446672725_FB_IMG_1435472335942.jpg', 2, 1, '2015-11-04 21:32:05'),
(5, 'olha a festa kkk', 'bom a festa Ã© aora todos os carrinahas que querem se divertir aqui..... Lorem ipsum dolor sit amet, probo admodum sapientem ut has. Vel sonet erroribus quaerendum in, aliquam torquatos definiebas no mea. Movet nostrud iracundia ne pri, ut his alterum corrumpit appellantur. Consul efficiendi quaerendum ex eos, eam convenire prodesset ad. Vix an dico deseruisse, eam et meliore detraxit. Quem soluta at vix, qui eu virtute discere.\r\n\r\nSit te adhuc delicata scriptorem. Sit cu erant nonumes, senserit sadipscing referrentur mel te, cu harum adversarium sed. Quo ut senserit assentior intellegam, his laoreet quaestio consetetur ex, his assum possit erroribus in. Atqui quaerendum omittantur duo ne. Ius tale laboramus quaerendum an.\r\n\r\nId dicam dictas diceret qui, ea facilis mediocrem vim. Bonorum laoreet postulant ut sit, munere incorrupte ei mel. At vel timeam fastidii, duo falli semper ocurreret ut. Nulla eleifend consetetur te sit, cum no tale aeque fastidii.\r\n\r\nVel an scaevola intellegam, an his quod praesent gloriatur. Ius ne nemore volutpat, ne quo viris erroribus, usu et ridens sensibus corrumpit. Nostrud salutandi vix ea, in rebum impedit pro. Delectus ullamcorper at pro. Dico petentium sea ne, ut his suavitate percipitur, ne his laoreet molestie euripidis.\r\n\r\nSea at stet summo. Dolore apeirian concludaturque mei cu, et iusto civibus mel, mei invenire gubergren reformidans ne. Eam partem iracundia expetendis cu, in enim ullum viris eos, voluptaria scripserit sed ut. Malorum dolores maiestatis sea id. Nec dicat invenire in, putant denique has ut.', '1446681528_1800389.jpg', 1, 1, '2015-11-04 23:58:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL,
  `category` varchar(233) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `category`
--

INSERT INTO `category` (`id_category`, `category`) VALUES
(1, 'policial'),
(2, 'moda');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `id_tipo` int(11) NOT NULL,
  `name_cat` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id_tipo`, `name_cat`) VALUES
(0, 'Administrador'),
(1, 'Artigos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(234) NOT NULL,
  `email` varchar(234) NOT NULL,
  `pass` varchar(234) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `pass`, `id_tipo`) VALUES
(1, 'joe', 'joe@gmail.com', '6116afedcb0bc31083935c1c262ff4c9', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id_artigo`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id_artigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
