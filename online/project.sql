-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 09:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'sir_sujad', 'f2019027053@umt.edu.pk', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5ef5310cb2f88', '5ef5310ccf70f'),
('5ef5310ce1ce2', '5ef5310ce2ef4'),
('5ef5310ceba15', '5ef5310cee7bf'),
('5ef5310cf34ca', '5ef5310d00393'),
('5ef5310d05844', '5ef5310d069e0'),
('5ef684019e238', '5ef68401f040d'),
('5ef6840215903', '5ef684021690c'),
('5ef684021d2ca', '5ef684021e0b8'),
('5ef68402227e4', '5ef6840223ab7'),
('5ef684022ac21', '5ef684022bd43'),
('5ef68a1bc3b05', '5ef68a1bca773'),
('5ef68a490b792', '5ef68a490b8e3'),
('5ef68cf4dfa4b', '5ef68cf4dfbe8'),
('5ef68d1cc5f52', '5ef68d1cc604d'),
('5ef68d9b6e630', '5ef68d9b6e735'),
('5ef69032a9954', '5ef69032aa8df'),
('5ef69032ae24d', '5ef69032af0b0'),
('5ef69032b3c7f', '5ef69032b49bd'),
('5ef69032ba1f0', '5ef69032bc1b4'),
('5ef69032bf6aa', '5ef69032c03c9');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('5ef13b1b9a726', 'waseem', 'f2019027053@umt.edu.pk', 'eng', '  i have a problem to understand english ,,,,,...........i wnt to help         ', '2020-06-23', '0000-00-00 00:00:00'),
('5ef13c3b5e1d3', 'rana', 'f2019027053@umt.edu.pk', 'math', 'thanks u for math quiz      ', '2020-06-23', '0000-00-00 00:00:00'),
('5ef13d6b420e6', 'rana', 'f2019027053@umt.edu.pk', 'math', 'thanks u for math quiz      all math quiz', '2020-06-23', '0000-00-00 00:00:00'),
('5ef13dc6062f6', 'rana', 'f2019027053@umt.edu.pk', 'math', 'thanks u for math quiz      all math quiz thanks', '2020-06-23', '01:24:54am'),
('5ef78109a1a2f', 'waseem', 'f2019027054@umt.edu.pk', 'wwww', '       best of luck', '2020-06-27', '07:25:29pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('', '5ef52d779fb0e', 4, 5, 4, 1, '2020-06-25 23:20:12'),
('', '5ef6822ce8399', 2, 5, 1, 4, '2020-06-26 23:41:00'),
('f2019027053@umt.edu.pk', '5ef68e117d37a', -5, 5, 0, 5, '2020-06-27 00:18:25'),
('f201902707@umt.edu.pk', '5ef68e117d37a', 19, 5, 4, 1, '2020-06-27 14:38:14'),
('f201902707@umt.edu.pk', '5ef6822ce8399', 10, 5, 5, 0, '2020-06-27 14:39:57'),
('f2019027054@umt.edu.pk', '5ef68e117d37a', 7, 5, 2, 3, '2020-06-27 17:22:08'),
('f2019027063@umt.edu.pk', '5ef68e117d37a', -1, 1, 0, 1, '2020-06-27 18:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5ef5310cb2f88', 'false', '5ef5310ccf706'),
('5ef5310cb2f88', 'true', '5ef5310ccf70f'),
('5ef5310cb2f88', 'both a and b', '5ef5310ccf711'),
('5ef5310cb2f88', 'none', '5ef5310ccf713'),
('5ef5310ce1ce2', 'Numeric Array', '5ef5310ce2ef4'),
('5ef5310ce1ce2', ' Associative Array', '5ef5310ce2efe'),
('5ef5310ce1ce2', ' Multidimentional Array  ', '5ef5310ce2f00'),
('5ef5310ce1ce2', ' None of the above', '5ef5310ce2f02'),
('5ef5310ceba15', ' array_sum()', '5ef5310cee7bf'),
('5ef5310ceba15', 'array_splice()', '5ef5310cee7ca'),
('5ef5310ceba15', 'array_udiff()', '5ef5310cee7cd'),
('5ef5310ceba15', 'array_udiff_assoc()', '5ef5310cee7ce'),
('5ef5310cf34ca', ' time()', '5ef5310d00386'),
('5ef5310cf34ca', 'getdate()', '5ef5310d00390'),
('5ef5310cf34ca', 'date()', '5ef5310d00393'),
('5ef5310cf34ca', ' None of the above', '5ef5310d00396'),
('5ef5310d05844', 'hypertext preprocessor', '5ef5310d069e0'),
('5ef5310d05844', 'private home page', '5ef5310d069ed'),
('5ef5310d05844', 'personal hypertext processor', '5ef5310d069f1'),
('5ef5310d05844', 'none ', '5ef5310d069f4'),
('5ef684019e238', 'cout<<\"hello word\"', '5ef68401f040d'),
('5ef684019e238', 'cin>>\"hello word\"', '5ef68401f0424'),
('5ef684019e238', 'cout>>\"hello word\"', '5ef68401f0428'),
('5ef684019e238', 'print(\"hello word\")', '5ef68401f042b'),
('5ef6840215903', '# this is cooment ', '5ef6840216903'),
('5ef6840215903', '// this is cooment ', '5ef684021690c'),
('5ef6840215903', '/* this is cooment ', '5ef684021690f'),
('5ef6840215903', '& this is cooment ', '5ef6840216912'),
('5ef684021d2ca', 'mystring', '5ef684021e0b2'),
('5ef684021d2ca', 'string', '5ef684021e0b8'),
('5ef684021d2ca', 'String', '5ef684021e0b9'),
('5ef684021d2ca', 'text', '5ef684021e0bb'),
('5ef68402227e4', 'x=5;', '5ef6840223aac'),
('5ef68402227e4', 'double x=5;', '5ef6840223ab4'),
('5ef68402227e4', 'int x=5;', '5ef6840223ab7'),
('5ef68402227e4', 'num x=5;', '5ef6840223ab8'),
('5ef684022ac21', 'num x=2.8;', '5ef684022bd3b'),
('5ef684022ac21', 'int x=2.8;', '5ef684022bd42'),
('5ef684022ac21', 'double x=2.8;', '5ef684022bd43'),
('5ef684022ac21', 'Double  x=2.8;', '5ef684022bd44'),
('5ef68a1bc3b05', 'margin', '5ef68a1bca769'),
('5ef68a1bc3b05', 'clear', '5ef68a1bca773'),
('5ef68a1bc3b05', 'float', '5ef68a1bca776'),
('5ef68a1bc3b05', 'padding', '5ef68a1bca777'),
('5ef68a490b792', 'margin', '5ef68a490b8dd'),
('5ef68a490b792', 'clear', '5ef68a490b8e3'),
('5ef68a490b792', 'float', '5ef68a490b8e5'),
('5ef68a490b792', 'padding', '5ef68a490b8e7'),
('5ef68cf4dfa4b', 'margin', '5ef68cf4dfbe0'),
('5ef68cf4dfa4b', 'clear', '5ef68cf4dfbe8'),
('5ef68cf4dfa4b', 'float', '5ef68cf4dfbea'),
('5ef68cf4dfa4b', 'padding', '5ef68cf4dfbec'),
('5ef68d1cc5f52', 'margin', '5ef68d1cc604a'),
('5ef68d1cc5f52', 'clear', '5ef68d1cc604d'),
('5ef68d1cc5f52', 'float', '5ef68d1cc604f'),
('5ef68d1cc5f52', 'padding', '5ef68d1cc6050'),
('5ef68d9b6e630', 'margin', '5ef68d9b6e731'),
('5ef68d9b6e630', 'clear', '5ef68d9b6e735'),
('5ef68d9b6e630', 'float', '5ef68d9b6e736'),
('5ef68d9b6e630', 'padding', '5ef68d9b6e737'),
('5ef69032a9954', 'font-style', '5ef69032aa8d6'),
('5ef69032a9954', 'text-size', '5ef69032aa8dd'),
('5ef69032a9954', 'font-size', '5ef69032aa8df'),
('5ef69032a9954', 'text-syle', '5ef69032aa8e1'),
('5ef69032ae24d', 'id', '5ef69032af0a8'),
('5ef69032ae24d', 'div', '5ef69032af0af'),
('5ef69032ae24d', 'class', '5ef69032af0b0'),
('5ef69032ae24d', 'span', '5ef69032af0b5'),
('5ef69032b3c7f', 'border-colore', '5ef69032b49b6'),
('5ef69032b3c7f', 'border-decoration', '5ef69032b49bc'),
('5ef69032b3c7f', 'border-style', '5ef69032b49bd'),
('5ef69032b3c7f', 'border-line', '5ef69032b49bf'),
('5ef69032ba1f0', 'id', '5ef69032bc1b4'),
('5ef69032ba1f0', 'text', '5ef69032bc1b8'),
('5ef69032ba1f0', 'class', '5ef69032bc1b9'),
('5ef69032ba1f0', 'name', '5ef69032bc1ba'),
('5ef69032bf6aa', 'wrap', '5ef69032c03c4'),
('5ef69032bf6aa', 'push', '5ef69032c03c8'),
('5ef69032bf6aa', 'float', '5ef69032c03c9'),
('5ef69032bf6aa', 'aling', '5ef69032c03ca');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5ef52d779fb0e ', '5ef5310cb2f88', 'Is PHP case sensitive?', 4, 1),
('5ef52d779fb0e ', '5ef5310ce1ce2', ' Which of the following array represents an array with a numeric index?', 4, 2),
('5ef52d779fb0e ', '5ef5310ceba15', 'Which of the following function returns the sum of the values in an array?', 4, 3),
('5ef52d779fb0e ', '5ef5310cf34ca', ' Which of the following method returns a formatted string representing a date?', 4, 4),
('5ef52d779fb0e ', '5ef5310d05844', 'What does PHP stand for?', 4, 5),
('5ef6822ce8399 ', '5ef684019e238', 'What is a correct syntax to output \"Hello World\" in C++?', 4, 1),
('5ef6822ce8399 ', '5ef6840215903', 'How do you insert COMMENTS in C++ code?', 4, 2),
('5ef6822ce8399 ', '5ef684021d2ca', 'Which data type is used to create a variable that should store text?', 4, 3),
('5ef6822ce8399 ', '5ef68402227e4', 'How do you create a variable with the numeric value 5?', 4, 4),
('5ef6822ce8399 ', '5ef684022ac21', 'How do you create a variable with the floating number 2.8?', 4, 5),
('5ef68e117d37a ', '5ef69032a9954', 'Which css property is used to control  text size of an element ?', 4, 1),
('5ef68e117d37a ', '5ef69032ae24d', 'which attribute can be added to many HTML  elements to identify them as  member of a specific group ??', 4, 2),
('5ef68e117d37a ', '5ef69032b3c7f', 'if we want to use a nice loking green dotted border around the image, which css property will we use?', 4, 3),
('5ef68e117d37a ', '5ef69032ba1f0', 'If we want define style for an unique element then which Css selector will we use ?', 4, 4),
('5ef68e117d37a ', '5ef69032bf6aa', 'if we want to wrapp a block of text around an image  which css property will we use ?', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `intro` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `intro`, `date`) VALUES
('5ef52d779fb0e', 'Php Coding', 1, 0, 5, 'best of luck', '2020-06-25 23:04:23'),
('5ef6822ce8399', 'C++', 2, 0, 5, 'best of luck', '2020-06-26 23:18:04'),
('5ef68e117d37a', 'Css', 5, 1, 5, 'Good luck', '2020-06-27 00:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(225) NOT NULL,
  `score` int(225) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('f2019027054@umt.edu.pk', 7, '2020-06-27 17:22:08'),
('f201902707@umt.edu.pk', 29, '2020-06-27 14:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `email`, `mob`, `password`, `image`, `date`) VALUES
('ali', 'M', 'f201902701@umt.edu.pk', 11111111111, '00000', 'pic/orang.jpg', '2020-06-22 23:14:54'),
('mehwish', 'F', 'f201902703@umt.edu.pk', 12345678901, '33333', 'pic/team_3.jpg', '2020-06-24 23:09:11'),
('waseem', 'M', 'f2019027054@umt.edu.pk', 3209543145, 'wwwww', 'pic/boy.jpg', '2020-06-27 17:21:05'),
('mudasr', 'M', 'f201902705@umt.edu.pk', 12345678901, '55555', 'pic/boy.jpg', '2020-06-24 23:17:40'),
('rabia', 'F', 'f2019027063@umt.edu.pk', 3160409828, 'rabia', 'pic/images (2).jpg', '2020-06-27 18:40:38'),
('hamza', 'M', 'f201902707@umt.edu.pk', 3209543145, 'hamza', 'pic/boy.jpg', '2020-06-27 14:31:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
