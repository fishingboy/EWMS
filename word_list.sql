-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2014 年 07 月 19 日 10:46
-- 伺服器版本: 5.5.32
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `wbkuo`
--

-- --------------------------------------------------------

--
-- 表的結構 `word_list`
--

CREATE TABLE IF NOT EXISTS `word_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(100) NOT NULL,
  `symbol` varchar(100) NOT NULL,
  `word_type` varchar(20) NOT NULL,
  `meaning` varchar(100) NOT NULL,
  `example_en1` text NOT NULL,
  `example_ch1` text NOT NULL,
  `example_en2` text NOT NULL,
  `example_ch2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 轉存資料表中的資料 `word_list`
--

INSERT INTO `word_list` (`id`, `word`, `symbol`, `word_type`, `meaning`, `example_en1`, `example_ch1`, `example_en2`, `example_ch2`) VALUES
(1, 'address', '''ædrɛs', 'vt.', '向…發表演說;稱呼;寄信給…', 'This course is to teach students how to address a speech very well.', '這門課是教導學生們如何做好演講。', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
