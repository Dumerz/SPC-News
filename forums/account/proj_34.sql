-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2013 at 05:20 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proj_34`
--
CREATE DATABASE IF NOT EXISTS `proj_34` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proj_34`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `topic_id`, `user_id`, `comment`, `date`) VALUES
(1, 1, 1, 'sample comment 1', '2013-08-23'),
(2, 1, 1, 'sample comment 2', '2013-08-23'),
(3, 1, 2, 'Hello everyone if this message is not ok with you then its time to put your self in to the test that you are not good as the thing that you think you are', '2013-09-12'),
(4, 2, 2, 'Katangahan Lang yan sa ating nag iisang mundo', '2013-09-12'),
(5, 3, 2, 'The Quick Brown Fox Jump Over the Lazy Dog', '2013-09-12'),
(6, 3, 2, 'The Quick Brown Fox Jump Over the Lazy Dog', '2013-09-12'),
(7, 4, 2, 'The number one industry of San Pablo City Ilegal Biogesic', '2013-09-12'),
(8, 4, 2, 'qwerty', '2013-09-12'),
(9, 1, 8, 'yah really thast what happened', '2013-09-16'),
(10, 1, 2, 'reversing ever made in history', '2013-09-16'),
(11, 5, 2, 'The remarkable indigency', '2013-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `comments2`
--

CREATE TABLE IF NOT EXISTS `comments2` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `comments2`
--

INSERT INTO `comments2` (`comment_id`, `topic_id`, `user_id`, `comment`, `date`) VALUES
(11, 5, 2, 'reversing', '2013-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `comments3`
--

CREATE TABLE IF NOT EXISTS `comments3` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments4`
--

CREATE TABLE IF NOT EXISTS `comments4` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(255) NOT NULL,
  `topic_content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_title`, `topic_content`, `date`, `user_id`) VALUES
(1, 'sample topic', 'sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content ', '2013-08-23', 1),
(2, 'sample topic', 'sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content sample content ', '2013-08-23', 1),
(3, 'Ibat Ibang uri ng ating mga taga bundok at taga tugmo roon at tug mo rito :)', ':)\r\n', '2013-09-12', 2),
(4, 'What Do you Love to Do in San Pablo', 'People think that San Pablo is the place to be and the place where we can experienced to be with nature just like as you are not an interested individual\r\n', '2013-09-12', 7);

-- --------------------------------------------------------

--
-- Table structure for table `topics1`
--

CREATE TABLE IF NOT EXISTS `topics1` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(255) NOT NULL,
  `topic_content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `topics1`
--

INSERT INTO `topics1` (`topic_id`, `topic_title`, `topic_content`, `date`, `user_id`) VALUES
(5, 'The Rebirth of Freedom in the Island', 'rebersingly interesting', '2013-09-16', 2),
(6, 'The Rebirth of Freedom in the Island', 'rebersingly interesting', '2013-09-16', 2);

-- --------------------------------------------------------

--
-- Table structure for table `topics2`
--

CREATE TABLE IF NOT EXISTS `topics2` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(255) NOT NULL,
  `topic_content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `topics3`
--

CREATE TABLE IF NOT EXISTS `topics3` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(255) NOT NULL,
  `topic_content` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_image`, `username`, `password`) VALUES
(1, 'Mark Menodiado', 'avatar.jpg', 'mark', '12345678'),
(2, 'Paul Orlan Dumdum', 'comment-paul2.jpg', 'dumdum', '09199291233'),
(4, 'qwerty', 'coco.jpg', 'hayup', '123456789'),
(5, 'qweqwe', 'comment-paul.jpg', 'qweqwe', 'qweqweqwe'),
(6, 'wet', 'coco3.png', 'wet', '12345678'),
(7, '12345', 'coco2.png', '12345678', '12345678'),
(8, 'turtelya2', 'coco.jpg', 'turtelya2', '12345678'),
(9, '1', 'coco1.png', '1', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
