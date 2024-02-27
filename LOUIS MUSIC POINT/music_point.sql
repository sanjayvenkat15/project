-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2021 at 12:20 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `orderid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `uid`, `orderid`, `pid`, `price`, `quantity`, `amount`, `status`, `type`) VALUES
(5, '3', 5, 1, 2000, 1, 2000, 1, ''),
(6, '4', 6, 3, 18000, 1, 18000, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `usage` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `wty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `desc`, `price`, `usage`, `qty`, `wty`) VALUES
(2, 'Right beat', 'IMG-20210806-WA0016.jpg', 'Drums', '18000', 'Beat', '50', '2 years'),
(3, 'PSR-E373', 'IMG-20210806-WA0024.jpg', 'Soft music', '18000', 'Music band', '10', '2 years');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `location`, `address`, `uname`, `psw`) VALUES
(2, 'admin', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', 'trichy', 'admin', '111'),
(3, 'Sam', 'male', '21', 'sam@mail.com', '7644512312', 'Karur', 'no2 karuru', 'sam', '123'),
(4, 'Antony', 'male', '23', 'antony@mail.com', '8787878787', 'trichy', 'no2, trichy', 'antony', '123');
