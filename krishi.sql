-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 07:59 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krishi_unnayon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `name`) VALUES
(1, 'khan', '$2y$10$yNhyQL1IAbTrAxlmTfiMve27zFQ5L7VUA8ZrNy4j.giEkrdIUKlE.', 'Md. Ahmed Khan'),
(2, 'naz', '$2y$10$WZ3TbOTLHQCjPKKoIG13Zu9WqqpAjHWgQWcDcYCmBMeGEJ5.satU6', 'Nazmul');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `createdby` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `createdby`, `name`, `phone`, `email`, `designation`, `address`, `image`, `password`, `createdate`) VALUES
(3, '1', 'Rayhan', '01768204575', 'limon.bd.0306@gmail.com', 'Developer', 's-25', '20191115_100312IMG_20161119_210508.jpg', '54cd35acce887505549325b1e4f550a6', '2020-10-13 17:49:06'),
(7, '5', 'Abu Rayhan Miah', '01768204575', 'miahaburayhan@gmail.com', 'admin', 's-25', '20201013_115055IMG_20180929_122410_burned-Copy.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2020-10-13 17:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `name`, `message`, `date`, `admin`) VALUES
(0, 'tushar', 'aw', '2020-07-28 19:52:58', NULL),
(1, 'aw', 'ttw', '2020-07-28 19:53:06', NULL),
(1, 'ppp', 'ppp', '2020-07-28 19:58:57', NULL),
(1, 'ppp', 'hwllo', '2020-07-28 20:02:19', NULL),
(1, 'ppp', 'how are you', '2020-07-28 20:02:30', NULL),
(1, 'ppp', 'ok ', '2020-07-28 20:04:52', 'Super'),
(1, 'aw', 'awawawawawaw', '2020-07-28 20:16:15', 'admin'),
(0, 'ppp', 'আমার\r\n', '2020-07-29 16:07:07', NULL),
(0, 'ppp', 'drearawrw', '2020-07-29 18:40:20', NULL),
(1, '', 'asd', '2020-08-12 20:21:48', ''),
(1, '', 'dwdwd', '2020-08-12 20:21:52', ''),
(1, '', 'awd', '2020-08-12 20:22:54', ''),
(1, '', 'awd', '2020-08-12 20:23:45', ''),
(1, '', '', '2020-08-12 20:32:00', 'naz'),
(1, '', '', '2020-08-12 20:32:37', 'naz'),
(1, '', 'dwwwwww', '2020-08-12 20:32:55', 'naz');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT 'N/A',
  `cell` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT 'N/A',
  `otherInfo` varchar(510) CHARACTER SET utf8 NOT NULL DEFAULT 'N/A',
  `flag` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `name`, `designation`, `image`, `email`, `cell`, `otherInfo`, `flag`) VALUES
(11, 'sadad', 'ad', '568s8.png', 'dwdioyoy@gmail.com', '24245353464', '', 1),
(9, 'পেশাদার কর্মীরা', 'ad', '867s8.jpg', 'dwdioyoy@gmail.com', '24245353464', 'as', 1),
(10, 'asufio', 'ad', '88s8.png', 'miahaburayhan@gmail.com', '24245353464', 'asaSAsd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productimage` varchar(300) NOT NULL,
  `productinfo` text NOT NULL,
  `flag` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productimage`, `productinfo`, `flag`) VALUES
(61, 'হাতে চাপ দিয়ে মাটির আর্দ্রতা পরীক্ষা', '32420201015_111447bg_2.jpg', '<p>বীজ বপন করা থেকে বেড়ে ওঠা পর্যন্ত বিষয়টি নির্ভর করে জমি তৈরির উপর। জমির মাটি কিভাবে তৈরি করা হবে তা নির্ভর করে বীজের আকৃতির উপর এবং আর্দ্রতার উপর। প্রচলিত জ্ঞান’র মাধ্যমে মাটির আর্দ্রতা পরীক্ষা করা সম্ভব।<br><br>মাটির আর্দ্রতা পরীক্ষা করার পদ্ধতি<br><br>প্রচলিত জ্ঞানের মাধ্যমে মাটির আর্দ্রতা পরীক্ষা করা যায়<br><br>মাটি হাতে মুঠি করে নিয়ে জোড়ে চাপ দিতে হবে।<br>চাপ দেবার পর মাটি থেকে পানি বের হলে বুঝতে হবে যে মাটি এখনো ভেজা এবং এখনো চাষের উপযোগী হয়নি।<br>যদি মাটি থেকে পানি বের না হয় কিন্তু চাকা বা বলের আকার ধারণ করে এবং তা কোমর সমান উচ্চতা থেকে মাটির উপর ফেললে বলটি যদি ভেঙে না যায় তখন বুঝতে হবে মাটি ভেজা এবং লাঙ্গল চালাতে ২-৪দিন অপেক্ষা করতে হবে।<br>মাটি পড়ার পর বলটি যদি সম্পূর্ণ ভেঙে গুঁড়া হয়ে যায় তাহলে বুঝতে হবে যে, চাষ দেবার সময় হয়েছে।<br>আর মাটি যদি চাকা বা বল কোনটির আকারই ধারণ না করে তাহলে বুঝতে হবে মাটি শুকনা এবং চাষ করতে হলে বৃষ্টি হওয়া পর্যন্ত অপেক্ষা করতে হবে অথবা সেচ দিয়ে মাটিতে জো বা রস আনতে হবে।<br>উপকারিতা<br><br>এর সাহায্যে কৃষক সঠিক সময়ে সুন্দর ও পরিপাটি করে জমি তৈরি করতে পারেন।<br>এর ফলে ফসলের উৎপাদন বৃদ্ধি এবং আয় বৃদ্ধি সম্ভব।<br>&nbsp;<br><br>সচরাচর জিজ্ঞাসা <br><br>প্রশ্ন ১ : জমির মাটি কর্ষণ পদ্ধতি কিসের উপর নির্ভর করে ?<br><br>উত্তর :বীজের আকৃতির উপর এবং আদ্রতার উপর।<br><br>প্রশ্ন ২ : হাতে চাপ দিয়ে মাটির আর্দ্রতা পরীক্ষায় কি সুবিধা পাওয়া যায় ?<br><br>উত্তর : এর ফলে সঠিক সময়ে সুন্দর ও পরিপারি করে জমি তৈরি করতে পারেন।<br><br>&nbsp;<br><br>তথ্যসূত্র <br><br>&nbsp;বাংলার বীজ প্রথম সংখ্যা, বৈশাখ-আষাঢ় -১৪১৪।<br></p>', 1),
(62, 'আলু সংরক্ষণ পদ্ধতি', '20520201015_111522bg_1.jpeg', '<p>বাংলাদেশে দানাজাতীয় ফসল হিসেবে গম দ্বিতীয় স্থানে রয়েছে। জনগনের মধ্যে স্বাস্থ্য সচেতনতা বৃদ্ধির ফলে ক্রমেই আটার রুটির চাহিদা বাড়ছে। বিভিন্ন কারণে যেমন, অন্যান্য রবি ফসলের সাথে প্রতিযোগীতায় গমের চাষাবাদ তেমন বাড়ছে না। দেশের দক্ষিনাঞ্চলের উপকূলীয় এলাকায় লবনাক্ততার কারণে গমের চাষাবাদ বাধাগ্রস্থ হচ্ছে।<br><br>বাংলাদেশের উপকূলীয় অঞ্চল মূলত: সুমুদ্রে পলল দ্বারা গঠিত ভূমি। ফলে মাটিস্তর এবং ভূ-গর্ভস্থ পানিতে বিভিন্ন মাত্রার লবনাক্ততা রয়েছে। যতই সুমুদ্রের কাছাকাছি যাওয়া যায়, লবনাক্ততার মাত্রা ততই বাড়তে থাকে। বর্ষাকালে প্রচুর বৃষ্টিপাতের দরুন বিধৌতকরনের ফলে আমন মৌসুমে মাটিতে লবনাক্ততার মাত্রা কম থাকে। বর্ষা শেষে পূণরায় যখন মাটির উপরের স্তর শুষ্ক হতে থাকে, বাষ্পীয়ভবনের ফলে মাটিস্তর থেকে লোনা পানির উর্দ্ধমুখী প্রবাহ শুরু হয়, এবং শুধুমাত্র পানি বাষ্পীয় আকারে চলে যায় ও লবণ মাটিতে থেকে যায়। ফলশ্রুতিতে মাটিতে লবণের পরিমাণ বাড়তে থাকে। ফলে রবি মৌসুমে ফসলের স্বাভাবিক বৃদ্ধি বাধাগ্রস্থ হয় ও ফলন কম হয়।<br><br>এ সমস্ত এলাকায় ফসলের সন্তোষজনক ফলনের জন্য দরকার বিভিন্ন ফসলের লবণ সহিষ্ণু জাত নির্বাচন, বিদ্যমান লোনা ও স্বাদু (পুকুর/খালে জমাকৃত বৃষ্টির) পানির সমন্বিত ব্যবহার এবং সঠিক মাত্রার সারের ব্যবহার।<br><br>বাংলাদেশ পরমাণু কৃষি গবেষণা ইনস্টিটিউট (বিনা) এর কৃষি প্রকৌশল বিভাগ কর্তৃক ইতিপূর্বে এক গবেষণা ফলাফলে লবনাক্ত এলাকার জন্য জমি: পুকুর – এর অনুপাত ২০: ১ রাখার সুপারিশ করা হয়েছে (পুকুরের গভীরতা ২.৫ মি.), যার দ্বারা শীতকালীন শস্য যেমন সরিষা, তিল, গম ইত্যাদিতে ২-১ টি সেচ দিয়ে শস্য চাষ করা যায়।<br><br>গমের জাত নির্বাচনঃ<br><br>লবনাক্ত এলাকার জন্য সুপারিশকৃত জাতসমূহ – যেমন ’’বিনাগম-১’’, ’’বারি গম ২৫’’।<br><br>বপনের সময়ঃ<br><br>উপকূলীয় লবনাক্ত এলাকায় সাধারনত: আমন ধান কর্তন ও জমি ’’জো’’ আসতে দেরী হয়। ’’জো’’ আসা মাত্রই জমি চাষ করে বীজ বপন করতে হবে। ডিসেম্বরের ৭ (২৩ অগ্রহায়ণ) তারিখে বপন করেও (শ্যামনগর, সাতক্ষীরা সন্তোষজনক ফলন পাওয়া গেছে। তবে দেরীতে বপন করলে প্রাকৃতিক দূর্যোগ যেমন ঝড়, শিলাবৃষ্টি, জলোচ্ছাস ইত্যাদি দ্বারা ক্ষতির সম্ভাবনা থাকে।<br><br>বপন পদ্ধতি ও অমত্মবর্তীকালীন পরিচর্যাঃ<br><br>স্বাভাবিক জমিতে চাষকৃত অন্যান্য জাতের মতই। সারিতে বপন করলে (সারি থেকে সারির দূরত্ব ২০ সেমি.) ভাল ফলন পাওয়া যায়। নিড়ানী ও পাতলাকরণের সময় গাছ থেকে গাছের গড় দূরত্ব&nbsp; ৫.০ সেমি. রাখা ভাল।<br><br>বপনের সময় যদি মাটির আদ্রতা (রস) খুব কমে যায়, তবে বপনের পর সেচ (ঝরনার সাহায্যে লাইনে, বা হালকা প্লাবন সেচ) দেওয়ার প্রয়োজন হতে পারে। মাঝারী আর্দ্রতার মাটিতে বপনের পূর্বে প্রাইমিং (অর্থ্যাৎ, ১২-১৪ ঘন্টা পনিতে ভিজিয়ে রেখে উঠানোর পর ৬ ঘন্টা হালকা রোদে শুকানো) করে বপন করলে অংকুরোদগম ভাল হয়।<br><br>সারের স্বাভাবিক মাত্রাঃ<br><br>হেক্টরপ্রতি ইঊরিয়া, টি.এস.পি., মিউরেট অফ পটাশ, জিপসাম, জিংক সালফেট ও বরিক এসিড- এর স্বাভাবিক মাত্রা যথাক্রমে: ২২০, ১৫০, ১৪০, ৯০, ৬ ও ৬ কেজি। এছাড়াও প্রতি হেক্টরে ৫.০ টন পঁচা গোবর বা কম্পোষ্ট ব্যবহার করা ভাল।<br><br>উদ্ভাবিত প্রযুক্তিঃ<br><br>সাতক্ষীরা জেলার শ্যামনগর&nbsp; এলাকায় লবনাক্ত এলাকায় গম ফসলের উপর বিভিন্ন মাত্রার লবনাক্ত পানির ও জিপসাম-পটাশ প্রয়োগের প্রভাব নিয়ে গবেষণার মাধ্যমে নিম্নোক্ত ফলাফল পাওয়া গেছে:<br><br>(১) ৭-৮ ডি.এস. মাত্রার লবনাক্ত পানি ও বৃষ্টির&nbsp; (পুকুরে জমাকৃত)&nbsp; পানির পর্যায়ক্রমিক সেচ, এবং ৯০% অতিরিক্ত জিপসাম (উপরে উল্লেখিত&nbsp; স্বাভাবিক মাত্রার চেয়ে)&nbsp; প্রয়োগের মাধ্যমে ভাল&nbsp; ফলন (৩.৫-৪.০ টন/হে) পাওয়া যায়।<br><br>অর্থাৎ, লবনাক্ত পানির সেচ – পুকুরের&nbsp; পানির সেচ – লবনাক্ত পানির সেচ – পুকুরের&nbsp; পানির সেচ। বপনের ১৮-২০, ৩৫-৩৭, ৫২-৫৫ ও ৬২-৬৫ দিন পর (অর্থ্যাৎ, সি.আর.আই., কুশি বৃদ্ধির শেষ পর্যায়, থোড় বৃদ্ধি পর্যায়, ও ফুল আসার পর) সেচ দিতে হয়।<br><br>(২) ১০-১২ ডি.এস. মাত্রার লবনাক্ত পানির ৩টি সেচ, অর্থাৎ বপনের ১৮, ৩৫, ও&nbsp; ৫৫ দিন পর এবং এতদসংগে ৯০% অতিরিক্ত জিপসাম প্রয়োগের মাধ্যমে&nbsp; সন্তোষজনক ফলন (২.৫-৩ টন/হে) পাওয়া যায়।<br><br>সম্পূর্ণ জিপসাম সার (মোট ১৬২ কেজি/হেক্টর) জমি তৈরীর সময়, বা অর্ধেক ১ম সেচের সময় ও বাকী অর্ধেক ৩য় সেচের সময় প্রয়োগ করা যায়।<br><br>ইউরিয়া সারের অর্ধেক শেষ চাষের সময় প্রয়োগ করতে হয়। বাকী ইউরিয়া ১ম সেচ ও ৩য় সেচের সময় অর্ধেক করে প্রয়োগ করা যায়।<br><br>এভাবে বাংলাদেশে দক্ষিনাঞ্চলের লবনাক্ত জমিতে গমের চাষাবাদের মাধ্যমে একদিকে কৃষকেরা অর্থনৈতিকভাবে লাভবান হবে এবং অন্যদিকে দেশে গমের ক্রমবর্ধমান চাহিদাও মেটানো সম্ভব হবে।<br></p>', 1),
(63, 'ক) টমেটো গাছ হতে সংরক্ষণ করে ঠাণ্ডা শুষ্ক ও ছায়াযুক্ত স্থানে রাখতে হবে।', '63720201015_111543all_about.jpg', '<p>কা, হলুদ কলার পরিবর্তে কাঁচাপাকা সবুজাভ কলা কেনা যেতে পারে। এবং তা ঘরের স্বাভাবিক তাপমাত্রায় রেখে দেয়া যেতে পারে। কাঁচা বা অর্ধকাঁচা কলা ফ্রিজে রাখা ছাড়াই অনেকদিন পর্যন্ত ভালো থাকে।যদি পাকা কলা কিনে তা সংরক্ষণ করার প্রয়োজন হয় তাহলে একটা কাগজের ব্যাগে ঢুকিয়ে ব্যাগের মুখ আটকিয়ে তা ফ্রিজে রাখা যেতে পারে। কলার খোসায় হয়ত দাগ পড়তে পারে কিন্তু ভেতরের অংশে কিছু হবে না।<br>&nbsp;<br>কলা কিনে আনার পর যত দ্রুত সম্ভব প্লাস্টিক ব্যাগ থেকে বের করে নিতে হবে। ব্যাগের মধ্যে বদ্ধ অবস্থায় থাকলে কলা দ্রুত পেকে নরম হয়ে যায়। কিন্তু ঘরের স্বাভাবিক তাপমাত্রায় রাখলে ধীরে ধীরে পাকে। তবে খেয়াল রাখতে হবে কলা যেন উষ্ণ স্থানে বা সরাসরি সূর্যালোকে না রাখা হয়। বরং রাখতে হবে ঠাণ্ডা ও অন্ধকার স্থানে।তবে ঝুলিয়ে রাখলে কলা ভালো থাকে।কলা দ্রুত পেকে যাওয়া ঠেকাতে তা অন্যান্য পাকা ফল থেকে আলাদা করে রাখতে হবে। পাকা ফল থেকে ইথিলিন উৎপন্ন হয় যা অন্যান্য কাঁচা ফলের সংস্পর্শে আসলে সেগুলোকেও পাকিয়ে দেয়।<br>&nbsp;<br>কলা তাজা রাখার আরেকটি উপায় হচ্ছে কলার ডাঁটকে প্লাস্টিকে মুড়িয়ে রাখা। এটা কলার ডাঁট থেকে আর্দ্রতা বেরিয়ে যাওয়া এবং অন্যান্য পাকা ফল থেকে নির্গত ইথিলিনকে গ্রহণ করা থেকে প্রতিরোধ করে। প্লাস্টিক ছাড়াও ফয়েল পেপার অথবা টেপ দিয়ে ডাঁট মুড়িয়ে রাখা যেতে পারে। যতবার গোছা থেকে কলা ছেঁড়া হবে ততবার কলার ডাঁট সাবধানে মুড়িয়ে নিতে হবে। তাতে কলা অনেকদিন তাজা থাকবে।যদি উপরের পদ্ধতিটি অনুসরণ করতে অসুবিধা হয় তাহলে আরেকটি সহজ উপায় হচ্ছে, কলার গোছা থেকে কলাগুলোকে পৃথক করে নিয়ে প্রতিটি কলার ডাঁটকে মুড়িয়ে নেয়া। এর ফলে কলার খোসায় সহজে দাগও পড়বে না।<br>&nbsp;<br>কলা কেটে রাখার পরও বাদামী হয়ে যাওয়া রোধ করা যেতে পারে। কেটে রাখা কলার টুকরোর ওপর আনারস, কমলা, আঙুর, ভিনেগার অথবা লেবুর রস বা জুস ছিটিয়ে দিতে হবে। কিংবা শুধু লেবুর রসে কলার টুকরোগুলোকে ২-৩ মিনিট ডুবিয়ে রাখতে হবে। টুকরোগুলো বাদামী রঙ ধারণ করবে না।<br>&nbsp;<br>আর যদি কলা সংরক্ষণ করতে দেরি হয়ে যায়, কিংবা কলা যদি বেশি পেকে যায়, তবে সেগুলো দিয়ে বিভিন্ন ধরণের মুখর<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `village` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `division` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `district` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `thana` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `post` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `jomi` double DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `eamil` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `village` text CHARACTER SET utf8 NOT NULL,
  `division` varchar(200) CHARACTER SET utf32 NOT NULL,
  `district` varchar(200) CHARACTER SET utf8 NOT NULL,
  `thana` varchar(200) CHARACTER SET utf8 NOT NULL,
  `post` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 NOT NULL,
  `jomi` text CHARACTER SET utf8,
  `item` text CHARACTER SET utf8,
  `eamil` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `village`, `division`, `district`, `thana`, `post`, `phone`, `jomi`, `item`, `eamil`, `created_at`) VALUES
(48, 'limon', '$2y$10$JRMn56hr.rWl5Zm3lp3LOeQPw9E7e3HI1m9USkoBegCsqSZ0o.ofu', 'limon miah', 'asd', 'রাজশাহী', 'srg', 'r', 'sh', '01768204575', NULL, NULL, '01724545103', '2020-10-13 23:06:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
