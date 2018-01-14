-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 08:12 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a111609709`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `del_komen` (IN `a` INT(10))  NO SQL
begin
delete from bukutamu where no=a;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `in_komen` (IN `a` INT(10), IN `b` CHAR(50), IN `c` CHAR(50), IN `d` VARCHAR(200))  NO SQL
begin
insert into bukutamu values(a,b,c,d);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lihat_komen` ()  begin
select * from bukutamu;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `up_komen` (IN `a` INT(10), IN `b` CHAR(50), IN `c` CHAR(50), IN `d` VARCHAR(200))  NO SQL
begin
update bukutamu set nama=b,email=c,komentar=d
where no=a;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bukutamu`
--

CREATE TABLE `bukutamu` (
  `no` int(10) NOT NULL,
  `nama` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukutamu`
--

INSERT INTO `bukutamu` (`no`, `nama`, `email`, `komentar`) VALUES
(1, 'helmi', 'helmi@a.com', 'ini komen'),
(2, 'ss', 'dd', 'ff'),
(3, '3', '3', 'oi;hreh89yeaotihwlaehfkuegfoiljfoshliufgesiugiohiosegiues7gfiuesgi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
