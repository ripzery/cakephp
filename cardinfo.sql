-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2015 at 06:38 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cardinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_infos`
--

CREATE TABLE `card_infos` (
  `name` varchar(25) NOT NULL,
  `number` varchar(25) NOT NULL,
  `issuer` varchar(25) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `limit` int(11) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `card_infos`
--

INSERT INTO `card_infos` (`name`, `number`, `issuer`, `exp`, `limit`, `currency`, `uid`) VALUES
('John Doe', '4019 2445 0277 5567', 'Green Bank', '01/18', 5000, 'TH', 4),
('Jane Doe', '4019 3445 0277 5568', 'Blue Bank', '02/20', 70000, 'TH', 5),
('Mary Lamb', '1122 3344 5566 7788', 'Red Bank', '10/18', 50000, 'THB', 6),
('Bob Cat', '1234 5678 1234 5678', 'Green Bank', '12/18', 50000, 'TH', 7);

-- --------------------------------------------------------

--
-- Table structure for table `card_statements`
--

CREATE TABLE `card_statements` (
  `date` date NOT NULL,
  `sellerno` varchar(25) NOT NULL,
  `product` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `number` varchar(25) NOT NULL,
  `uid` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `card_statements`
--

INSERT INTO `card_statements` (`date`, `sellerno`, `product`, `price`, `number`, `uid`, `id`) VALUES
('2013-02-01', 'F102', 'EGCI', 300, '4019 2445 0277 5567', 4, 1),
('2013-02-01', 'P001', 'Tablet', 1200, '4019 2445 0277 5567', 4, 2),
('2013-03-01', 'C001', 'The Mall', 2200, '4019 2445 0277 5567', 4, 3),
('2013-02-04', 'S002', 'Food Court', 67000000, '4019 3445 0277 5568', 5, 4),
('2013-02-02', 'C003', 'Smartphone', 18000, '4019 3445 0277 5568', 5, 5),
('2013-03-01', 'D001', 'The Mall 23', 33100, '4019 3445 0277 5568', 5, 6),
('2013-03-03', 'D002', 'ETC', 700, '1234 5678 1234 5678', 7, 7),
('2013-03-03', 'D003', 'ETC', 850, '1234 5678 1234 5678', 7, 8),
('2015-02-11', 'C005', 'IPad Air', 20000, '2345 1111 2222 3333', 3, 9),
('2015-02-09', 'Orange', 'CPad', 10001, '3377 4422 6699 1122', 4, 10),
('2015-02-12', 'Banana', 'BPad', 1200, '1122 4455 6677 8811', 1, 11),
('2015-02-09', 'Pineapple', 'EPad', 500, '5522 9933 7744 6666', 1, 12),
('2015-02-19', '123', 'F0002', 10000, '88', 99, 13),
('2015-02-20', '11', '22', 555, '222', 123, 14),
('2015-02-14', '232', 'F002', 500, '22', 11, 15),
('2015-02-12', '123', 'dasa1', 1111, '213', 123, 16),
('2015-02-14', 'F999', 'S120', 15000, '555', 123, 17),
('2015-02-06', '1099', 'T001', 5600, '23', 99, 18),
('2015-02-14', '123', 'I9900', 15600, '4444', 123123, 19),
('2015-02-14', '1111', 'P999', 12300, '222', 123, 20),
('2015-02-14', '123', 'F999', 12500, '555', 1234, 21),
('2015-02-14', 'F988', 'A111', 25000, '555', 123, 22),
('2015-02-13', 'F001', 'A444', 2500, '555', 123, 23),
('1999-06-24', 'F300', '1200', 45000, '433', 2122, 24),
('2015-02-14', '222', '123', 555, '555', 5, 25),
('2015-02-14', '255', 'F003', 2500, '555', 4, 26),
('2015-02-06', '1233', 'EG123', 12500, '444 555 666', 4, 27),
('2015-02-07', 'F003', 'F111', 2500, '4444 5555 6666 1234', 5, 28),
('1144-12-01', 'P021', 'Ya', 2100, '', 0, 29),
('0001-01-01', 'A21', 'Crepe', 5, '', 0, 30),
('0001-03-02', 'A3', 'Gaha', 3344, '1111', 0, 31);

-- --------------------------------------------------------

--
-- Table structure for table `person_infos`
--

CREATE TABLE `person_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `person_infos`
--

INSERT INTO `person_infos` (`id`, `firstname`, `lastname`, `city`, `country`, `telephone`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '111', 'admin@admin.com'),
(4, 'John', 'Doe', 'LA', 'USA', '111-1111', 'john.doe@person.com'),
(5, 'Jane', 'Doe', 'NY', 'USA', '222-2222', 'jane.doe@person.com'),
(6, 'Mary', 'Lamb', 'BK', 'Thailand', '333-3333', 'mary.lamb@person.com'),
(7, 'Bob', 'Cat', 'BK', 'Thaliand', '444-4444', 'bob.cat@person.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'john', '824e6e629bf960193c4d1a5fdd0520ffa408eec7'),
(3, 'amie', 'a7958c8f181fef605c9e70b4ba71611408dd3344'),
(5, 'jane', '81737c37835c6b70cf6d2092308e420a5bf66bcf'),
(7, 'bob', '17d9a2a9c4b97a4fb43ad9be65d63712591a2bfb'),
(1, 'admin', 'de90ef93de6f23621ffc697532ccaeebe36dd3c9'),
(6, 'mary', '8eeb4c2ef787e4d91013a2013302e4e176c32b7c'),
(2, 'jim', 'e083795651420f71c71c4f30de462a8eb8406cb8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
