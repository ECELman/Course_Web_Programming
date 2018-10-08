-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2016-12-22 10:09:54
-- 伺服器版本: 5.7.14
-- PHP 版本： 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `foodid` int(4) NOT NULL,
  `foodname` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `menu`
--

INSERT INTO `menu` (`foodid`, `foodname`) VALUES
(1, '香菇雞湯'),
(2, '櫻花蝦炒飯'),
(3, '水果拼盤'),
(4, '冰淇淋饗宴'),
(5, '宮保雞丁'),
(6, '叉燒拼盤'),
(7, '炒麵'),
(8, '藥膳排骨湯'),
(9, '水信玄餅'),
(10, '豪華海鮮拼盤'),
(11, '清蒸石斑魚'),
(12, '季節時蔬');

-- --------------------------------------------------------

--
-- 資料表結構 `messageboard`
--

CREATE TABLE `messageboard` (
  `name` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `messageboard`
--

INSERT INTO `messageboard` (`name`, `email`, `message`) VALUES
('施彥廷', 'steven88sky@yahoo.com.tw', 'a6sx+e6f+x6e+'),
('蔡董', 'steven88sky@gmail.com', 'HI NUK BOSS TSAI'),
('蔡董', 'steven88sky@gmail.com', 'HI NUK BOSS TSAI'),
('蔡董', 'steven88sky@gmail.com', 'HI NUK BOSS TSAI'),
('蔡董', 'steven88sky@gmail.com', 'HI NUK BOSS TSAI');

-- --------------------------------------------------------

--
-- 資料表結構 `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL,
  `ordercode` varchar(10) NOT NULL,
  `orderlist` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `orderlist`
--

INSERT INTO `orderlist` (`id`, `ordercode`, `orderlist`) VALUES
(2, 'CSIE0001', '11');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(10) NOT NULL DEFAULT '',
  `sex` char(2) NOT NULL DEFAULT '',
  `year` tinyint(4) NOT NULL DEFAULT '0',
  `month` tinyint(4) NOT NULL DEFAULT '0',
  `day` tinyint(4) NOT NULL DEFAULT '0',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `cellphone` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(50) NOT NULL DEFAULT '',
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `name`, `sex`, `year`, `month`, `day`, `telephone`, `cellphone`, `address`, `email`, `url`, `comment`) VALUES
(2, 'steven88sky', '5985cbc31890d7adc96163c38493088c', '施彥廷', '男', 85, 11, 2, '', '', '', '', '', ''),
(3, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', '男', 85, 10, 1, '', '', '', '', '', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`foodid`);

--
-- 資料表索引 `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`ordercode`),
  ADD UNIQUE KEY `ordercode` (`ordercode`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
