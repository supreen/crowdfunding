-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: custsql-dom04.eigbox.net
-- Generation Time: Aug 11, 2021 at 10:33 AM
-- Server version: 5.6.49-89.0-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crowdfunding`
--
CREATE DATABASE IF NOT EXISTS `crowdfunding` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crowdfunding`;

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `id` text NOT NULL,
  `pass` text NOT NULL,
  `memo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`id`, `pass`, `memo`) VALUES
('fandf', 'fandfpass#123', 'Weclome Friend and Family'),
('admin', 'adminpass#123', 'Admin memo'),
('investor', 'ipass#123', 'Welcome Investor'),
('vc', 'vcpass#123', 'Welcome VC');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `serial` int(11) NOT NULL,
  `packname` text NOT NULL,
  `packcontent` text NOT NULL,
  `packprice` int(11) NOT NULL,
  `packprice2` int(11) NOT NULL,
  `packprice3` int(11) NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`serial`, `packname`, `packcontent`, `packprice`, `packprice2`, `packprice3`, `color`) VALUES
(1, 'Backer', 'Email notifications and First dibs on future Investment Opportunities.', 20, 25, 50, '#DE5350 '),
(2, 'Supporter', 'Access to Investment Insight Quarterly Newsletter and First dibs on future Investment Opportunities', 70, 100, 250, '#A3D86C '),
(3, 'Pioneer', 'Energy Efficiency Home Monitor Gift plus Access to Investment Insight Quarterly Newsletter and First dibs on future Investment Opportunities.', 300, 350, 500, '#4E3878 '),
(4, 'Planeteer', '0.025% Company Equity, Energy Efficiency Home Monitor Gift plus Access to Investment Insight Quarterly Newsletter and First dibs on future Investment Opportunitie', 850, 1000, 1500, '#E56A2E '),
(5, 'Captain Planet', '0.1% Company Equity, Advanced Energy Efficiency Home Monitor Gift plus Access to Investment Insight Quarterly Newsletter and First dibs on future Investment Opportunities', 25000, 3000, 4000, '#3F4752 '),
(6, 'Investor', '0.5% Company Equity, Advanced Energy Efficiency Home Monitor Gift plus Access to Investment Insight Quarterly Newsletter and First dibs on future Investment Opportunities.', 10000, 12000, 15000, '#000000 ');

-- --------------------------------------------------------

--
-- Table structure for table `Settings`
--

CREATE TABLE `Settings` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `value` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Settings`
--

INSERT INTO `Settings` (`id`, `Name`, `value`, `date`) VALUES
(1, 'content', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus purus turpis, quis vehicula sapien vulputate sit amet. Donec at nibh quis neque lacinia pulvinar. Nullam blandit leo in felis consectetur maximus. Praesent id augue vehicula, viverra enim in, egestas turpis. In venenatis aliquam sem, et auctor libero maximus volutpat. In sagittis, felis ut ornare cursus, lorem nibh egestas justo, vitae fringilla odio arcu id nibh. Nulla placerat nibh nec semper volutpat. Donec condimentum eros eget mauris condimentum pulvinar. Maecenas sagittis dui in ante ultrices convallis. Aliquam in euismod erat. Duis in ante consequat elit malesuada maximus vel vitae mi. Mauris magna risus, porttitor sit amet risus quis, eleifend malesuada sapien. Fusce euismod pretium ante, auctor aliquet sapien viverra quis. Cras feugiat nisl eget magna iaculis lobortis. Ut ac nisi lacinia, rhoncus justo at, hendrerit augue. Aenean vel interdum nunc.', '2021-06-30'),
(2, 'progressbar', '22500,150000', '2021-07-21'),
(3, 'clientid', 'Your paypal client id', '2021-07-25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
