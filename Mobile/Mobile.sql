SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `admin_users`
CREATE TABLE `admin_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `admindate` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `added_by` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `admin_users`
INSERT INTO `admin_users` (`id`, `admindate`, `name`, `username`, `password`, `added_by`) VALUES
(1, '2022-5-20', 'ahmed', 'admin', 'admin123', 'ahmed');

-- --------------------------------------------------------

-- Table structure for table `category`
CREATE TABLE `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `catdate` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `category`
-- (No data insertion script for `category` provided in your original code)

-- --------------------------------------------------------

-- Table structure for table `comment`
CREATE TABLE `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `commentdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(5000) NOT NULL,
  `status` varchar(255) NOT NULL,
  `approved_by` varchar(255) NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `comment`
-- (No data insertion script for `comment` provided in your original code)

-- --------------------------------------------------------

-- Table structure for table `contact`
CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contactdate` date NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `contact`
INSERT INTO `contact` (`id`, `contactdate`, `name`, `email`, `phone`, `message`) VALUES
(4, '2019-10-24', 'AAVEZ AHMED ', 'aavezahmed@gmail.com', '7218450969', 'Hi teamalphacode, I want to publish one article on your Blog');

-- --------------------------------------------------------

-- Table structure for table `post`
CREATE TABLE `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `postDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `post`
-- (No data insertion script for `post` provided in your original code)

-- --------------------------------------------------------

COMMIT;
