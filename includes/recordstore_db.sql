-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2020 at 10:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recordstore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `genre_id` tinyint(10) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`genre_id`, `genre`, `description`) VALUES
(1, 'Classic Rock', 'Classic rock is a radio format which developed from the album-oriented rock (AOR) format in the early 1980s. In the United States, the classic rock format features rock music ranging generally from the mid-1960s to the 1980s, primarily focusing on commercially successful blues rock and hard rock popularized in the 1970s AOR format. The radio format became increasingly popular with the baby boomer demographic by the end of the 1990s.'),
(2, 'Indie', 'Independent music (often referred to as indie music or indie) is music produced independently from commercial record labels or their subsidiaries, a process that may include an autonomous, do-it-yourself approach to recording and publishing.'),
(3, 'Rap', 'Rap is a type of music in which the words are not sung but are spoken in a rapid, rhythmic way.'),
(4, 'Blues', 'Blues is an African-American music that traverses a wide range of emotions and musical styles. “Feeling blue” is expressed in songs whose verses lament injustice or express longing for a better life and lost loves, jobs, and money. But blues is also a raucous dance music that celebrates pleasure and success.'),
(5, 'Heavy Metal', 'Heavy metal, genre of rock music that includes a group of related styles that are intense, virtuosic, and powerful. Driven by the aggressive sounds of the distorted electric guitar, heavy metal is arguably the most commercially successful genre of rock music.'),
(6, 'Reggae', 'Reggae is a music genre that originated in Jamaica in the late 1960s. The term also denotes the modern popular music of Jamaica and its diaspora.');

-- --------------------------------------------------------

--
-- Table structure for table `Records`
--

CREATE TABLE `Records` (
  `id` int(11) NOT NULL,
  `album` varchar(120) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `production_date` date NOT NULL,
  `label` varchar(50) NOT NULL,
  `number_of_discs` tinyint(2) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `genre_id` tinyint(10) NOT NULL,
  `image` varchar(120) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Records`
--

INSERT INTO `Records` (`id`, `album`, `artist`, `production_date`, `label`, `number_of_discs`, `price`, `genre_id`, `image`, `description`) VALUES
(1, 'Revolver', 'The Beatles', '2012-11-13', 'Capitol', 1, '18.89', 1, 'http://..... /cover225x225.jpeg', 'Manufactured on 180-gram, audiophile quality vinyl with replicated artwork, the 14 albums return to their original glory with details including the poster in The Beatles (The White Album), the Sgt. Pepper\'s Lonely Heart Club Band\'s cut-outs, and special inner bags for some of the titles'),
(2, 'Currents', 'Tame Impala', '2015-07-17', 'Interscope', 1, '20.69', 2, 'http://..... /cover225x225.jpeg', 'Limited double vinyl LP pressing. 2015 release, the highly anticipated third full length album from the much loved Australian band.'),
(3, 'The College Dropout', 'Kanye West', '2004-02-24', 'Roc A Fella', 1, '24.01', 3, 'http://..... /cover225x225.jpeg', 'Kanye West debut album, The College Dropout fuses social commentary with eclectic beats to form a masterpiece of music. '),
(4, 'Etta James At Last', 'Etta James', '2013-09-17', 'Wax Time', 1, '21.31', 4, 'http://..... /cover225x225.jpeg', 'Limited direct metal mastered 180gm vinyl LP pressing of this album from the Blues great including four bonus tracks.. Wax Time.'),
(5, 'Iron Maiden', 'Iron Maiden', '2014-10-14', 'Sanctuary', 1, '38.77', 5, 'http://..... /cover225x225.jpeg', 'Iron Maiden - Iron Maiden Vinyl LP. Iron Maiden - Iron Maiden Vinyl LPSide 11. Prowler2. Remember Tomorrow3. Running Free4. Phantom Of The Opera'),
(6, 'Legend', 'Bob Marley and the Wailers', '2009-07-07', 'Tuff Gong', 1, '18.95', 6, 'http://..... /cover225x225.jpeg', 'Bob Marley & The Wailers - Legend Vinyl LP. Bob Marley & The Wailers - Legend Vinyl LPDisc 1Side 11: Is This Love2: No Woman, No Cry3: Could You Be Loved');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `firstname`, `lastname`, `username`, `password`, `role`) VALUES
(1, 'Danny', 'Harris', 'DHarris', 'database', 1),
(2, 'Megan', 'Boone', 'MBoone', 'database', 1),
(3, 'Jennifer', 'Baldwin', 'JBaldwin', 'database', 1),
(4, 'Evan', 'Thomas', 'EThomas', 'database', 1),
(5, 'Jane', 'Doe', 'JDoe', 'user', 2),
(6, 'John', 'Smith', 'JSmith', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `Records`
--
ALTER TABLE `Records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `genre_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Records`
--
ALTER TABLE `Records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Records`
--
ALTER TABLE `Records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `Genre` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
