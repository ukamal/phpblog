-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 08:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`) VALUES
(1, 'Md.Kamal', 'Hossen', 'flkamal2016@gmail.com', 'This is test sent Message for blog Website.', 1, '2020-09-15 16:58:07'),
(2, 'Md.Kamal', 'Hossen', 'flkamal2016@gmail.com', 'This is test sent Message for blog Website.', 1, '2020-09-15 16:58:07'),
(3, 'Md.Kamal', 'Hossen', 'flkamal2016@gmail.com', 'This is test sent Message for blog Website.', 0, '2020-09-15 16:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copyright`) VALUES
(1, 'Md.Kamal Hossen');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `body`) VALUES
(1, 'About Us', '<p><span style=\"font-size: medium;\"><strong>About Us</strong></span></p>\r\n<p><span style=\"font-size: medium;\"><strong><span>i<span style=\"font-size: x-small;\">s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></strong></span></p>'),
(2, 'Privacy', '<p><span>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>'),
(3, 'DMCA', '<p><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`) VALUES
(6, 'Programming is a Brain Game ', 'upload/slider/f485641552.jpg'),
(7, 'PHP It imparts positive feelings about the brand.', 'upload/slider/6fa749adb9.jpg'),
(8, 'Front-End IT ', 'upload/slider/dc9747cf84.jpg'),
(9, 'TechUpIT', 'upload/slider/2db8aa1b9c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `ins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `fb`, `tw`, `ln`, `ins`) VALUES
(1, 'https://www.facebook.com/kamalh.bss', 'https://twitter.com/kamal06062193', 'https://www.linkedin.com/in/kamal-hossen-aa81ab11a/', 'https://www.instagram.com/flkamal2016/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(9, 'HTML'),
(10, 'CSS'),
(11, 'PHP'),
(12, 'OOP'),
(13, 'Laravel'),
(14, 'WordPress ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(19, 9, 'This is HTML5 static website', '<p><span>Hypertext Markup Language (</span><strong>HTML</strong><span>) is the standard markup language for documents designed to be displayed in a web browser. ...&nbsp;</span><strong>HTML</strong><span>&nbsp;describes the structure of a web page semantically and originally included cues for the appearance of the document.&nbsp;</span><strong>HTML</strong><span>&nbsp;elements are the building blocks of&nbsp;</span><strong>HTML</strong><span>&nbsp;pages.</span></p>', 'upload/837b5e89cd.png', 'Md.Kamal Hossen', 'html5', '2020-09-09 17:29:06', 0),
(21, 11, 'This is PHP dynamic website', '<p><strong>PHP</strong><span>&nbsp;(recursive acronym for&nbsp;</span><strong>PHP</strong><span>: Hypertext Preprocessor ) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</span></p>', 'upload/aa4a1dc6a5.jpg', 'Md.Kamal Hossen', 'php', '2020-09-09 17:31:29', 7),
(22, 13, 'This is laravel dynamic website also', '<p><strong>Laravel</strong><span>&nbsp;is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model&ndash;view&ndash;controller (MVC) architectural pattern and based on Symfony. ... The source code of&nbsp;</span><strong>Laravel</strong><span>&nbsp;is hosted on GitHub and licensed under the terms of MIT License.</span></p>', 'upload/5cd560cee0.jpg', 'Md.Kamal Hossen', 'laravel', '2020-09-09 17:33:11', 7),
(24, 12, 'This is excellent OOP Website ', '<p><strong>Object-oriented</strong><span>&nbsp;programming (</span><strong>OOP</strong><span>) is a programming language model organized around objects rather than \"actions\" and data rather than logic. Historically, a program has been viewed as a logical procedure that takes input data, processes it, and produces output data.</span></p>', 'upload/c7759d9eba.png', 'kamal hossen', 'oop,programming', '2020-09-10 08:03:39', 0),
(25, 13, 'বাংলায় নমুনা লেখা ', '<p><span>আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল&nbsp;</span><a title=\"Avro Keyboard - FREE\" href=\"http://www.omicronlab.com/avro-keyboard.html\" rel=\"noopener\" target=\"_blank\">অভ্র^</a><span>&nbsp;নামক এক যুগান্তকারী বাংলা সফ্&zwnj;টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum&hellip; সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই বাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum&nbsp;&ndash; কিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি:</span><span>&nbsp;</span><strong>অর্থহীন লেখা!</strong></p>', 'upload/6e2c77a8e8.jpg', 'Editor', 'laravel, html, sass', '2020-09-19 06:34:00', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(7, '', 'author', 'e10adc3949ba59abbe56e057f20f883e', '', '', 1),
(8, '', 'Editor', 'e10adc3949ba59abbe56e057f20f883e', '', '', 2),
(10, '', 'Subscriber', 'e10adc3949ba59abbe56e057f20f883e', '', '', 2),
(12, '', 'author', 'e10adc3949ba59abbe56e057f20f883e', '', '', 1),
(13, '', 'Editor', 'e10adc3949ba59abbe56e057f20f883e', 'email', '', 2),
(14, '', 'kamal', 'b4352fc92333bf7c08cc46cf9e9cb153', 'kamalhossain1@outlook.com', '', 2),
(15, 'admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com', 'Head of the department!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `theme`) VALUES
(1, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Full Stack Developer', 'PHP &amp; OOP Blog Project with Admin panel', 'upload/logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
