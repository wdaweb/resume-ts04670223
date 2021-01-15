-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-15 09:24:27
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `s1090422`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `text`, `img`, `sh`) VALUES
(5, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', '', 0),
(6, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', '', 1),
(7, '轉知2012年全國青年水墨創作大賽活動', '', 0),
(8, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', '', 0),
(9, '轉知:教育是人類升沉的樞紐-2013教師生命成長營', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(3, 'admin', '1234'),
(4, 'ass', '789');

-- --------------------------------------------------------

--
-- 資料表結構 `award_numbers`
--

CREATE TABLE `award_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL,
  `period` tinyint(1) NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_numbers`
--

INSERT INTO `award_numbers` (`id`, `year`, `period`, `number`, `type`) VALUES
(40, 2020, 1, '12620024', 1),
(41, 2020, 1, '39793895', 2),
(42, 2020, 1, '67913945', 3),
(43, 2020, 1, '09954061', 3),
(44, 2020, 1, '54574947', 3),
(45, 2020, 1, '007', 4),
(46, 2020, 2, '91911374', 1),
(47, 2020, 2, '08501338', 2),
(48, 2020, 2, '57161318', 3),
(49, 2020, 2, '23570653', 3),
(50, 2020, 2, '47332279', 3),
(51, 2020, 2, '519', 4),
(52, 2020, 3, '03016191', 1),
(53, 2020, 3, '62474899', 2),
(54, 2020, 3, '33657726', 3),
(55, 2020, 3, '06142620', 3),
(56, 2020, 3, '66429962', 3),
(57, 2020, 3, '790', 4),
(58, 2020, 4, '13362795', 1),
(59, 2020, 4, '27580166', 2),
(60, 2020, 4, '53227282', 3),
(61, 2020, 4, '35082085', 3),
(62, 2020, 4, '37175928', 3),
(63, 2020, 4, '987', 4),
(64, 2020, 4, '614', 4),
(65, 2020, 5, '42024723', 1),
(66, 2020, 5, '64157858', 2),
(67, 2020, 5, '68550826', 3),
(68, 2020, 5, '84643124', 3),
(69, 2020, 5, '46665810', 3),
(70, 2020, 5, '651', 4),
(71, 2020, 5, '341', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(11) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2020科技大學頁尾版權');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `text`, `img`, `sh`) VALUES
(3, '', '01D05.jpg', 1),
(4, '', '01D02.jpg', 1),
(7, '', '01D03.jpg', 1),
(8, '', '01D04.jpg', 1),
(9, '', '01D05.jpg', 1),
(10, '', '01D10.jpg', 1),
(11, '', '01D08.jpg', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) UNSIGNED NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` tinyint(1) UNSIGNED NOT NULL,
  `payment` int(11) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `name_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoices`
--

INSERT INTO `invoices` (`id`, `code`, `number`, `period`, `payment`, `date`, `create_time`, `name_id`) VALUES
(1, 'GD', '40264934', 6, 8642, '2020-12-24', '2020-12-02 00:57:18', 'admin'),
(2, 'KJ', '98797068', 5, 15346, '2020-09-12', '2020-12-02 00:57:18', 'admin'),
(3, 'FJ', '74009550', 1, 12978, '2020-01-01', '2020-12-02 00:57:18', 'admin'),
(4, 'AB', '27723789', 1, 3703, '2020-02-13', '2020-12-02 00:57:18', 'admin'),
(5, 'IY', '11578442', 6, 16525, '2020-12-02', '2020-12-02 00:57:18', 'admin'),
(6, 'AB', '72374502', 2, 14448, '2020-04-24', '2020-12-02 00:57:19', 'admin'),
(7, 'IY', '92604886', 3, 8716, '2020-05-03', '2020-12-02 00:57:19', 'admin'),
(8, 'IY', '12091015', 3, 9759, '2020-05-12', '2020-12-02 00:57:19', 'admin'),
(9, 'FJ', '58568013', 3, 16832, '2020-05-14', '2020-12-02 00:57:19', 'admin'),
(10, 'AB', '29198509', 3, 1536, '2020-05-05', '2020-12-02 00:57:19', 'admin'),
(11, 'AB', '60354388', 4, 10908, '2020-07-19', '2020-12-02 00:58:14', 'mack1'),
(12, 'IY', '17785424', 5, 6416, '2020-10-01', '2020-12-02 00:58:14', 'mack1'),
(13, 'IY', '49024798', 3, 17816, '2020-05-16', '2020-12-02 00:58:14', 'mack1'),
(14, 'AB', '61351109', 3, 17895, '2020-06-02', '2020-12-02 00:58:14', 'mack1'),
(15, 'FF', '71704328', 4, 13637, '2020-08-02', '2020-12-02 00:58:14', 'mack1'),
(19, 'FV', '12345698', 1, 5511, '2020-12-18', '2020-12-03 02:02:20', 'admin'),
(20, 'SS', '45678912', 6, 8888, '2020-12-23', '2020-12-03 07:56:51', 'mack1');

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` int(11) UNSIGNED NOT NULL,
  `acc` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`id`, `acc`, `pw`, `email`, `create_time`) VALUES
(1, 'admin', '1234', 'aadsadsad@sfdfds', '2020-11-04 05:51:55'),
(2, 'mack1', '1111', 'sadsad@adsad', '2020-11-09 05:54:05'),
(3, 'mary2', '3333', 'dasdsa@adsdsad', '2020-11-09 05:54:25'),
(4, 'mary3', '3333', 'gsgsds@fsofjjfo', '2020-11-09 05:54:48'),
(5, 'mary4', '4444', 'fdsfdsa@dfdsafds', '2020-11-09 05:55:14');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `role` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `name`, `birthday`, `role`, `addr`, `education`, `login_id`) VALUES
(1, '管理員', '2020-11-04', '管理員', 'afafdff', '國中', 1),
(2, 'afdf', '2020-11-05', '會員', 'afaf', '高中', 2),
(3, '神奇海螺', '2020-11-05', 'VIP', '泰山', '碩士', 3),
(4, 'dsadsadsad', '2020-11-03', '會員', 'fgafdgfdg', '碩士', 4),
(5, 'fdsfadsf', '2020-11-07', '會員', 'dfdsfa', '博士', 5);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) UNSIGNED NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `text`, `href`, `parent`, `sh`) VALUES
(2, '管理登入', '?do=login', 0, 1),
(3, '網站首頁', 'index.php', 0, 1),
(9, 'adda', 'asasa', 4, 1),
(11, 'sadsad', 'sadsad', 3, 1),
(12, 'adsad', 'sadsad', 2, 1),
(14, 'dsad', 'sadsa', 0, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `text`, `img`, `sh`) VALUES
(1, '', '01C05.gif', 0),
(3, '', '01C03.gif', 1),
(4, '', '01C04.gif', 1),
(5, '', '01C02.gif', 1),
(6, '', '01C01.gif', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `text`, `img`, `sh`) VALUES
(2, '教師研習「世界公民生命園丁國內研習會」\r\n1.主辦單位：世界展望會\r\n2.研習日期：101年11月14日（三）～15日（四）\r\n3.詳情請參考：\r\nhttp://gc.worldvision.org.tw/seed.html。\r\n請線上報名。', '', 1),
(3, '公告綜合高中一年級英數補救教學時間\r\n上課日期:10/27.11/3.11/10.11/24共計四次\r\n上課時間:早上8:00~11:50半天\r\n費用:全程免費\r\n參加同學:綜合科一年級第一次段考成績需加強者\r\n已將名單送交各班及導師\r\n參加同學請帶紙筆.課本.第一次段考考卷\r\n並將家長通知單給家長\r\n若有任何疑問\r\n請洽綜合高中學程主任\r\n', '', 1),
(4, '102年全國大專校院運動會\r\n「主題標語及吉祥物命名」\r\n網路票選活動\r\n一、活動期間：自10月25日起至11月4日止。\r\n二、相關訊息請上宜蘭大學首頁連結「102全大運在宜大」\r\n活動網址：http://102niag.niu.edu.tw/', '', 1),
(5, '台灣亞洲藝術文化教育交流學會第一屆年會國際研討會\r\n活動日期：101年3月3～4日(六、日)\r\n活動主題：創造力、文化、全人教育\r\n有意參加者請至http://www.caaetaiwan.org下載報名表', '', 1),
(6, '11月23日(星期五)將於彰化縣田尾鄉菁芳園休閒農場\r\n舉辦「高中職生涯輔導知能研習」\r\n中區學校每校至多2名\r\n以普通科、專業類科教師優先報名參加\r\n生涯規劃教師次之，參加人員公差假\r\n並核實派代課\r\n當天還有專車接送(8:35前在員林火車站集合)\r\n如此好康的機會，怎能錯過？！\r\n熱烈邀請師長們向輔導室(分機234)報名\r\n名額有限，動作要快！！\r\n報名截止日期：本周四 10月25日17:00前！', '', 1),
(7, '台視百萬大明星節目辦理海選活動\r\n時間:101年10月27日下午13時\r\n地點:彰化', '', 1),
(8, '國立故宮博物院辦理\r\n「商王武丁與后婦好 殷商盛世文化藝術特展」暨\r\n「赫赫宗周 西周文化特展」', '', 1),
(9, '財團法人漢光教育基金會\r\n辦理2012「舊愛新歡-古典詩詞譜曲創作暨歌唱表演競賽」\r\n參賽獎金豐厚!!', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `q1_total`
--

CREATE TABLE `q1_total` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `q1_total`
--

INSERT INTO `q1_total` (`id`, `total`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `re_admin`
--

CREATE TABLE `re_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_admin`
--

INSERT INTO `re_admin` (`id`, `acc`, `pw`) VALUES
(3, 'admin', '1234'),
(4, 'ass', '0000');

-- --------------------------------------------------------

--
-- 資料表結構 `re_aut`
--

CREATE TABLE `re_aut` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_aut`
--

INSERT INTO `re_aut` (`id`, `text`, `sh`, `rank`) VALUES
(2, '我畢業於德明財經科技大學財務金融系，父母親教育採用民主制度，一切都用溝通來取代打罵，因此我對待他人也都以溝通為主，盡量不發生衝突，因此我們一家相當和睦。\r\n　　我最喜歡的一句話是史邁爾說的：「對微小事物的仔細觀察，就是事業、藝術、科學及生命各方面的成功秘訣。」這句話讓我在往後的人生都更注重小細節，因為這使我更加清楚每件事的重點，另外我喜歡有效率的做事情，會盡可能找出最省時省力的方法完成每一件事。', 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `re_connection`
--

CREATE TABLE `re_connection` (
  `id` int(11) UNSIGNED NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_connection`
--

INSERT INTO `re_connection` (`id`, `icon`, `text`, `text2`, `href`, `sh`, `rank`) VALUES
(10, 'ion-ios-telephone-outline', '電話', '0981779727', 'tel:0981779727', 1, 3),
(11, 'ion-ios-email-outline', '信箱', 'ts04670223@gmail.com', 'mailto:ts04670223@gmail.com', 1, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `re_education`
--

CREATE TABLE `re_education` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_education`
--

INSERT INTO `re_education` (`id`, `text`, `text2`, `sh`, `rank`) VALUES
(3, '德明財經科技大學', '財務金融系2016年~2020年', 1, 1),
(13, 'dsadassad', 'sdsadsd', 0, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `re_experience`
--

CREATE TABLE `re_experience` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_experience`
--

INSERT INTO `re_experience` (`id`, `text`, `text2`, `sh`, `rank`) VALUES
(3, '水礦科技股份有限公司', '一般行政2019年~2020年', 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `re_headshot`
--

CREATE TABLE `re_headshot` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `re_headshot`
--

INSERT INTO `re_headshot` (`id`, `img`, `text`, `sh`, `rank`) VALUES
(1, 'my.jpg', '賴俊宇', 1, 8);

-- --------------------------------------------------------

--
-- 資料表結構 `re_menu`
--

CREATE TABLE `re_menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_menu`
--

INSERT INTO `re_menu` (`id`, `text`, `href`, `sh`, `rank`) VALUES
(3, '網站首頁', '#intro', 1, 1),
(18, '自傳', '#aut', 1, 2),
(32, '學歷', '#education', 1, 3),
(33, '經歷', '#experience', 1, 4),
(34, '作品集', '#portfolio', 1, 5),
(36, '聯絡我', '#contact', 1, 6);

-- --------------------------------------------------------

--
-- 資料表結構 `re_port`
--

CREATE TABLE `re_port` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL,
  `text2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` int(2) NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `re_port`
--

INSERT INTO `re_port` (`id`, `text`, `img`, `sh`, `text2`, `class`, `rank`, `href`) VALUES
(1, 'illustrator', 'ai1.jpg', 1, '女孩', '3', 1, ''),
(3, 'Photoshop', 'ps1.jpg', 1, '年曆', '3', 2, ''),
(4, 'Photoshop', 'ps2.jpg', 1, '酒標', '3', 3, ''),
(5, 'Photoshop', 'ps3.jpg', 1, '旅遊海報', '3', 4, ''),
(29, 'Css', 'but.JPG', 1, '蝴蝶', '1', 5, 'https://codepen.io/ts04670223/pen/QWEGgbe'),
(30, 'Css', 't.JPG', 1, '表格', '1', 6, 'https://codepen.io/ts04670223/pen/LYNMqvV'),
(31, 'Css', 'w.JPG', 1, '鯨魚動畫', '1', 7, 'https://codepen.io/ts04670223/pen/dyXGZNb'),
(32, 'Illustrator', 'logo.jpg', 1, 'logo設計', '3', 8, ''),
(33, 'Php', 'invoice.JPG', 1, '發票系統', '2', 11, 'https://github.com/ts04670223/invoice'),
(34, 'Illustrator', 'ccss.jpg', 1, '圖標製作', '3', 9, ''),
(36, 'Illustrator', '30animo.jpg', 1, '鋼筆練習', '3', 10, '');

-- --------------------------------------------------------

--
-- 資料表結構 `re_skill`
--

CREATE TABLE `re_skill` (
  `id` int(11) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text NOT NULL,
  `sh` int(1) NOT NULL,
  `rank` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `re_skill`
--

INSERT INTO `re_skill` (`id`, `img`, `text`, `class`, `sh`, `rank`) VALUES
(5, 'g1.png', 'photoshop', '3', 1, 1),
(6, 'g2.png', 'Illustrator', '3', 1, 2),
(7, 'mysql.png', 'MySql', '2', 1, 3),
(8, 'w5.png', 'Bootstrap', '1', 1, 4),
(9, 'w1.png', 'Html', '1', 1, 5),
(10, 'w2.png', 'Css', '1', 1, 6),
(11, 'w3.png', 'JavaScript', '1', 1, 7),
(12, 'w4.png', 'jQuery', '1', 1, 8),
(13, 'w8.png', 'Php', '2', 1, 9),
(14, 'github (2).png', 'GitHub', '3', 1, 10),
(15, 't3.png', 'Excel', '3', 1, 11),
(16, 't2.png', 'Word', '3', 1, 12),
(17, 't4.png', 'PowerPoint', '3', 1, 13),
(18, 'w10.png', 'Xampp', '2', 1, 14),
(19, 'w6.png', 'Ajax', '3', 1, 15);

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` int(11) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `text`, `img`, `sh`) VALUES
(4, '卓越科技大學校園資訊系統', '01B02.jpg', 0),
(7, 'sdd', '01B04.jpg', 0),
(8, 'sadsadd', '01B03.jpg', 1),
(9, 'adasdasd', '01B01.jpg', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(11) UNSIGNED NOT NULL,
  `total` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 1032);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `award_numbers`
--
ALTER TABLE `award_numbers`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `q1_total`
--
ALTER TABLE `q1_total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_admin`
--
ALTER TABLE `re_admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_aut`
--
ALTER TABLE `re_aut`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_connection`
--
ALTER TABLE `re_connection`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_education`
--
ALTER TABLE `re_education`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_experience`
--
ALTER TABLE `re_experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_headshot`
--
ALTER TABLE `re_headshot`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_menu`
--
ALTER TABLE `re_menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_port`
--
ALTER TABLE `re_port`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `re_skill`
--
ALTER TABLE `re_skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `q1_total`
--
ALTER TABLE `q1_total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_admin`
--
ALTER TABLE `re_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_aut`
--
ALTER TABLE `re_aut`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_connection`
--
ALTER TABLE `re_connection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_education`
--
ALTER TABLE `re_education`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_experience`
--
ALTER TABLE `re_experience`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_headshot`
--
ALTER TABLE `re_headshot`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_menu`
--
ALTER TABLE `re_menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_port`
--
ALTER TABLE `re_port`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `re_skill`
--
ALTER TABLE `re_skill`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
