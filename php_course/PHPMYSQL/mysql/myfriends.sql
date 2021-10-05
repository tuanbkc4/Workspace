-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 07:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfriends`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL,
  `content` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone`, `content`) VALUES
(1, 'Nguyễn Văn Tèo', 'teo@vinaenter.edu.vn', 981234567, 'Nội dung liên hệ 1'),
(2, 'Trần Thị Diệu Thảo', 'teo@vinaenter.edu.vn', 981234567, 'Nội dung liên hệ 2'),
(3, 'Tuấn Bùi', 'tuanbachkhoadn@gmail.com', 918044509, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `fid` int(6) UNSIGNED NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_create` datetime NOT NULL,
  `fl_id` int(6) NOT NULL,
  `count_number` int(10) NOT NULL,
  `picture` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`fid`, `fname`, `preview`, `detail`, `date_create`, `fl_id`, `count_number`, `picture`) VALUES
(1, 'Nguyễn Văn Tèo', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. ', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', '2015-01-14 07:17:42', 1, 20, 'hinh1.jpg'),
(2, 'Trần Thị Diệu Thảo', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. ', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', '2015-01-14 07:17:43', 1, 10, 'hinh2.jpg'),
(3, 'Trần Việt Anh', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. ', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', '2014-01-14 07:17:44', 2, 1, 'hinh3.jpg'),
(4, 'Nguyễn Xuân Thành', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. ', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', '2014-01-14 07:17:45', 4, 2, 'hinh4.jpg'),
(5, 'Trần Thị Mỹ Hạ', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. ', 'Tôi và thằng bạn thân vẫn chia sẻ, trò chuyện trước những tin vịt đã truyền qua lớp khác. hôm trước, sẵn sàng đâm va vào tàu Việt Nam.', '2013-01-14 07:17:46', 3, 1, 'hinh5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `friend_list`
--

CREATE TABLE `friend_list` (
  `fl_id` int(6) UNSIGNED NOT NULL,
  `fl_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend_list`
--

INSERT INTO `friend_list` (`fl_id`, `fl_name`) VALUES
(1, 'Bạn quen thời phổ thông'),
(2, 'Bạn quen thời đại học'),
(3, 'Bạn tâm giao'),
(4, 'Bạn bạn chí cốt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `friend_list`
--
ALTER TABLE `friend_list`
  ADD PRIMARY KEY (`fl_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `fid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `friend_list`
--
ALTER TABLE `friend_list`
  MODIFY `fl_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
