-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2013 at 02:39 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lemonpie`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug`
--

CREATE TABLE IF NOT EXISTS `bug` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `category` int(11) NOT NULL,
  `view_status` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `changed` datetime NOT NULL,
  `changed_by` int(11) NOT NULL,
  `assigned_to` int(11) NOT NULL,
  `operating_system` int(11) NOT NULL,
  `programming_language` int(11) NOT NULL,
  `summary` text NOT NULL,
  `description` text NOT NULL,
  `files` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bug`
--

INSERT INTO `bug` (`id`, `name`, `category`, `view_status`, `priority`, `status`, `created`, `created_by`, `changed`, `changed_by`, `assigned_to`, `operating_system`, `programming_language`, `summary`, `description`, `files`) VALUES
(2, 'Bug One', 1, 1, 1, 1, '2013-04-12 19:49:43', 1, '2013-04-12 19:49:43', 1, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae risus ut quam lacinia pellentesque vel ultrices lorem. Sed quis libero a urna laoreet fringilla. In lectus nibh, luctus quis adipiscing eget, euismod at neque. Cras rutrum magna sed tellus condimentum hendrerit. Nullam sit amet elit ut quam venenatis commodo. Cras malesuada mauris ac velit blandit a aliquam dolor molestie. Sed ut magna vel leo ullamcorper pulvinar.', 'Lorem ipsum dolor sit amet.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bug_file`
--

CREATE TABLE IF NOT EXISTS `bug_file` (
  `file_id` int(11) NOT NULL,
  `bug_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bug_note`
--

CREATE TABLE IF NOT EXISTS `bug_note` (
  `bug_id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bug_user`
--

CREATE TABLE IF NOT EXISTS `bug_user` (
  `user_id` int(11) NOT NULL,
  `bug_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE IF NOT EXISTS `file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `path` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `level` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `changed` datetime NOT NULL,
  `changed_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE IF NOT EXISTS `priority` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `name`) VALUES
(1, 'Low'),
(2, 'Medium'),
(3, 'High');

-- --------------------------------------------------------

--
-- Table structure for table `programming_language`
--

CREATE TABLE IF NOT EXISTS `programming_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `programming_language`
--

INSERT INTO `programming_language` (`id`, `name`, `description`, `created`, `created_by`) VALUES
(1, 'PHP', 'PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. PHP is now installed on more than 244 million websites and 2.1 million web servers.[2] Originally created by Rasmus Lerdorf in 1995, the reference implementation of PHP is now produced by The PHP Group.[3] While PHP originally stood for Personal Home Page, it is now said to stand for PHP: Hypertext Preprocessor, a recursive acronym.[4]', '2013-04-12 19:56:20', 1),
(2, 'Java', 'ava is a general-purpose, concurrent, class-based, object-oriented computer programming language that is specifically designed to have as few implementation dependencies as possible. It is intended to let application developers "write once, run anywhere" (WORA), meaning that code that runs on one platform does not need to be recompiled to run on another. Java applications are typically compiled to bytecode (class file) that can run on any Java virtual machine (JVM) regardless of computer architecture. Java is, as of 2012, one of the most popular programming languages in use, particularly for client-server web applications, with a reported 10 million users.[10][11]', '2013-04-12 19:57:23', 1),
(3, 'ColdFusion', '', '2013-04-12 19:57:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `changed` datetime NOT NULL,
  `changed_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `display_name` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `state` smallint(6) DEFAULT '1',
  `deleted` tinyint(4) NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `group_id`, `username`, `display_name`, `password`, `surname`, `lastname`, `email`, `state`, `deleted`, `created_by`) VALUES
(1, 1, 'Rick', 'Rick', '$2y$14$TibeD8pgJ3otJh/H.iKNquJKrNsWEYlCxZxLsRyCdc8lK5nzOufcm', 'Rick', 'van Schalkwijk', 'rickvschalkwijk@gmail.com', 1, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
