-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Eki 2021, 22:54:30
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT '',
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `brands`
--

INSERT INTO `brands` (`id`, `title`, `img_url`, `rank`, `isActive`, `createdAt`) VALUES
(4, '<p>a<span style=\"background-color: rgb(255, 255, 0);\"><b>naysaslkdfhsldkfhdflkj lkasj</b></span>dflksasjdlk alk lkasdalksjd</p>', '<p>iletimsisdmidsmf sidmfisdmsdifms imsdfisdmismd </p>', 0, 1, '2017-12-29 08:04:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `courses`
--

CREATE TABLE `courses` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `courses`
--

INSERT INTO `courses` (`id`, `url`, `title`, `description`, `img_url`, `event_date`, `rank`, `isActive`, `createdAt`) VALUES
(2, 'codeigniter-4-egitimi', 'Codeigniter 4 Eğitimi', '<p>Bu eğitimde codeigniter ile ilgili birçok kavramı elden geçireceğiz..</p>', 'videosinif-proje.png', '2018-02-24 12:00:00', 0, 1, '2017-12-29 00:41:16');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `protocol` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `host` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `port` varchar(10) COLLATE utf8_turkish_ci DEFAULT '',
  `user` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `password` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `from` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `to` varchar(100) COLLATE utf8_turkish_ci DEFAULT '',
  `user_name` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `email_settings`
--

INSERT INTO `email_settings` (`id`, `protocol`, `host`, `port`, `user`, `password`, `from`, `to`, `user_name`, `isActive`, `createdAt`) VALUES
(1, 'smtp', 'ssl://smtp.gmail.com', '465', 'aysengezer.59@gmail.com', 'erim1995', 'aysengezer.59@gmail.com', 'aysebirolerim@gmail.com', 'müşteri eposta', 1, '2021-09-29 15:01:49');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE `files` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `files`
--

INSERT INTO `files` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`) VALUES
(1, 11, 'uploads/galleries_v/files/kataloglarimiz/web-tasarim-fiyat-teklifi.pdf', 1, 0, '2018-01-06 21:38:13'),
(4, 11, 'uploads/galleries_v/files/kataloglarimiz/nodejs-icerik.docx', 0, 1, '2018-01-06 22:05:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gallery_type` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `folder_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galleries`
--

INSERT INTO `galleries` (`id`, `url`, `title`, `gallery_type`, `folder_name`, `isActive`, `createdAt`, `rank`) VALUES
(13, 'nisan-galerisi', 'Nişan Galerisi', 'image', 'nisan-galerisi', 1, '2021-09-18 10:26:38', 0),
(14, 'dugun-galerisi', 'Düğün Galerisi', 'image', 'dugun-galerisi', 1, '2021-09-18 20:10:16', 0),
(16, 'videolar', 'videolar', 'video', '', 1, '2021-09-20 16:46:42', 0),
(17, 'mezuniyet-galerisi', 'Mezuniyet Galerisi', 'image', 'mezuniyet-galerisi', 1, '2021-09-23 15:30:16', 0),
(20, 'isyeri-cekimleri', 'İşyeri Çekimleri', 'image', 'isyeri-cekimleri', 1, '2021-09-27 23:57:36', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`) VALUES
(72, 13, '202.jpg', 2, 1, '2021-09-22 09:36:01'),
(73, 13, '203.jpg', 3, 1, '2021-09-22 09:36:03'),
(74, 14, '219.jpg', 0, 1, '2021-09-22 09:36:21'),
(75, 14, '220.jpg', 0, 1, '2021-09-22 09:36:22'),
(76, 14, '221.jpg', 0, 1, '2021-09-22 09:36:24'),
(77, 14, '222.jpg', 0, 1, '2021-09-22 09:36:25'),
(78, 17, 'product-1.jpg', 0, 1, '2021-09-23 15:30:36'),
(79, 17, 'product-2.jpg', 0, 1, '2021-09-23 15:30:36'),
(80, 17, 'product-3.jpg', 0, 1, '2021-09-23 15:30:37'),
(81, 17, 'product-4.jpg', 0, 1, '2021-09-23 15:30:37'),
(83, 13, '101.jpg', 0, 1, '2021-09-24 08:32:58'),
(84, 13, '102.jpg', 0, 1, '2021-09-24 08:32:59'),
(85, 13, '204.jpg', 0, 1, '2021-09-24 14:39:56'),
(86, 20, '2.jpg', 0, 1, '2021-09-27 23:57:52'),
(87, 20, '1.jpg', 0, 1, '2021-09-27 23:57:54'),
(88, 20, '3.jpg', 0, 1, '2021-09-27 23:57:56');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `members`
--

CREATE TABLE `members` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(50) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `news_type` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`id`, `url`, `title`, `description`, `news_type`, `img_url`, `video_url`, `rank`, `isActive`, `createdAt`) VALUES
(2, 'iphonex-satislari-beklenilenin-altindaaaaaa', 'iphoneX Satışları Beklenilenin altındaaaaaa', '<p>iphoneX Satışları <b>Beklenilenin altındaaaaaaaa</b><br></p>', 'image', 'ipphone8.jpeg', '#', 1, 1, '2017-12-25 22:59:32'),
(3, 'kablosuzkedi-den-yeni-bir-egitim-serisi-geldi-like/dislike', 'kablosuzkedi den yeni bir egitim serisi geldi like/dislike', '<p>kablosuzkedi den yeni bir egitim serisi geldi like/dislike<br></p>', 'image', 'kablosuzkedi-2-768x858.png', '#', 0, 1, '2017-12-25 23:02:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `popups`
--

CREATE TABLE `popups` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `page` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `url`, `title`, `description`, `rank`, `isActive`, `createdAt`) VALUES
(13, 'masa', 'masa', '', 0, 1, '2021-09-18 10:46:48'),
(14, 'makine', 'makine', '', 0, 1, '2021-09-18 10:48:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(11) DEFAULT NULL,
  `isCover` tinyint(11) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img_url`, `rank`, `isActive`, `isCover`, `createdAt`) VALUES
(56, 13, 'product-1.jpg', 0, 1, 0, '2021-09-18 10:48:30'),
(57, 13, 'product-4.jpg', 0, 1, 0, '2021-09-18 10:48:30'),
(58, 13, 'product-2.jpg', 0, 1, 0, '2021-09-18 10:48:30'),
(59, 13, 'product-3.jpg', 0, 1, 0, '2021-09-18 10:48:30'),
(60, 14, '219.jpg', 1, 1, 0, '2021-09-18 10:49:07'),
(61, 14, '223.jpg', 0, 1, 0, '2021-09-18 10:49:07'),
(62, 14, '220.jpg', 2, 1, 0, '2021-09-18 10:49:08'),
(63, 14, '221.jpg', 3, 1, 0, '2021-09-18 10:49:08'),
(64, 14, '222.jpg', 4, 1, 0, '2021-09-18 10:49:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `references`
--

CREATE TABLE `references` (
  `id` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `references`
--

INSERT INTO `references` (`id`, `url`, `title`, `description`, `img_url`, `rank`, `isActive`, `createdAt`) VALUES
(2, 'bu-bir-deneme-referans-bilgisidir---2', 'bu bir deneme referans bilgisidir.. 2', '<p>asdasdasd bu refransimiza cok güveniyoruz.. 2</p>', 'videosinif-proje.png', 1, 1, '2017-12-27 00:18:34');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `about_us` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `mission` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `vision` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `phone_1` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `phone_2` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax_1` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax_2` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `lat` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `long` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `about_us`, `mission`, `vision`, `logo`, `address`, `phone_1`, `phone_2`, `fax_1`, `fax_2`, `email`, `facebook`, `twitter`, `instagram`, `linkedin`, `createdAt`, `updatedAt`, `lat`, `long`) VALUES
(1, 'hatrı color', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Nereden Gelir?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif;\">Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', '                                                                                                                                                                                                                                                                                        <h2 style=\"box-sizing: inherit; outline: none; font-family: Roboto, Arial, sans-serif; font-size: 24px; line-height: 1.3; margin: 0px 0px 0.75em; letter-spacing: 0.2px; color: rgb(74, 74, 86);\">Lorem Ipsum Neden Kullanılır?</h2><p style=\"box-sizing: inherit; outline: none; margin-bottom: 32px; letter-spacing: 0.2px; font-size: 16px; line-height: 24px; color: rgb(74, 74, 86); font-family: Roboto, Arial, sans-serif;\">Yapılan araştırmalar gösteriyor ki, insanlar bir baskı ürününü ya da dijital tasarımı değerlendirirken kendilerini yazıya ve onun anlamına kaptırmadan objektif değerlendirme yapamıyorlar. Bu nedenle Lorem Ipsum insanların tasarıma daha iyi odaklanmaları ve aynı zamanda anlamlı bir yazı formuna çok benzer bir örnekle birlikte tasarımı görebilmeleri için kullanılır.  </p>                                                                                                                                                                                                                                                            ', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <h2 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">Nereden Gelir?</h2><p style=\"margin-bottom: 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif;\">Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ', 'hatri-color.png', 'çorlu', '05455795913', '05455795913', '', '', 'aysengezer.59@gmail.com', 'http://www.facebook.com\\ayse.sengezer.980', 'http://www.twitter.com\\@AyseSengezer', 'http://www.instagram.com\\ay_sengezer', '', '2021-09-18 10:40:30', '2021-10-12 22:41:17', '39.9251938515232', '32.83696535543461');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slides`
--

CREATE TABLE `slides` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `allowButton` tinyint(4) DEFAULT NULL,
  `button_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `button_caption` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `allowButton`, `button_url`, `img_url`, `button_caption`, `rank`, `isActive`, `createdAt`) VALUES
(2, 'Düğün Paketleri', '<p>Seçilen mekanda 1 saatlik fotoğraf çekimi </p><p>Ortalama 200-400 kare fotoğraf çekilir</p><p>30 adet özel rötuşlu fotoğraf </p><p>Fiyat alınız ...</p>', 0, 'aaaaa', 'shutterstock-284833298.jpg', 'aaaa', 0, 1, '2021-09-18 16:28:01'),
(3, 'Nişan Paketleri', '<p>Seçilen mekanda 1 saatlik fotoğraf çekimi&nbsp;</p><p>Ortalama 200-400 kare fotoğraf çekilir</p><p>30 adet özel rötuşlu fotoğraf&nbsp;</p><p>Fiyat alınız ...</p>', 0, '', 'unnamed.jpg', '', 0, 1, '2021-09-18 16:28:19'),
(4, 'Diğer Paketler', '<p>Seçilen mekanda 1 saatlik fotoğraf çekimi&nbsp;</p><p>Ortalama 200-400 kare fotoğraf çekilir</p><p>30 adet özel rötuşlu fotoğraf&nbsp;</p><p>Fiyat alınız ...</p>', 0, '', 'view-bigben.jpg', '', 0, 1, '2021-09-18 16:28:36'),
(5, 'Mezuniyet Galerisi', '<p>Seçilen mekanda 1 saatlik fotoğraf çekimi&nbsp;</p><p>Ortalama 200-400 kare fotoğraf çekilir</p><p>30 adet özel rötuşlu fotoğraf&nbsp;</p><p>Fiyat alınız ...</p>', 0, '', '5.jpg', '', 0, 1, '2021-09-24 16:19:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `isActive`, `createdAt`) VALUES
(3, 'Ayşe', 'Ayşe Şengezer', 'aysengezer.59@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-09-18 10:53:51'),
(4, 'AyŞen', 'Ayşe Şengezer', 'aysebirolerim@gmail.com', '7f0f877fcff1cfcba1940a9ebbeeef30', 1, '2021-10-05 13:45:47');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `videos`
--

CREATE TABLE `videos` (
  `id` int(11) UNSIGNED NOT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `rank` int(255) DEFAULT NULL,
  `isActive` tinyint(255) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `videos`
--

INSERT INTO `videos` (`id`, `gallery_id`, `url`, `rank`, `isActive`, `createdAt`) VALUES
(9, 16, 'https://www.youtube.com/embed/t47UhDYFaSA', 0, 1, '2021-09-24 10:45:06'),
(11, 16, 'https://www.youtube.com/embed/WFdLcr7oxEg', 0, 1, '2021-09-24 10:51:24'),
(20, 16, 'https://www.youtube.com/embed/kJoeCNIrlKQ', 0, 1, '2021-09-24 16:37:23');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Tablo için AUTO_INCREMENT değeri `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `popups`
--
ALTER TABLE `popups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Tablo için AUTO_INCREMENT değeri `references`
--
ALTER TABLE `references`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
