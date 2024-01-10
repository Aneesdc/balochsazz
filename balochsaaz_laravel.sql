-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2024 at 09:55 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balochsaaz_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int UNSIGNED NOT NULL,
  `album_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_id` int NOT NULL,
  `category_id` int NOT NULL,
  `multi_artists` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `album_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img180x180` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `320x320` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `album_name`, `album_slug`, `code`, `tags`, `artist_id`, `category_id`, `multi_artists`, `folder_key`, `album_image`, `description`, `status`, `img180x180`, `320x320`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '77', 'test', 62, 1, 'test', 'test', 'test', 'test', 'active', 'test', 'test', '2023-11-27 20:57:10', '2023-12-02 15:37:00'),
(3, 'shahjan dawoodi', 'shahjan-dawoodi', '001', 'anees rizwan imtiaz ismile', 75, 11, NULL, NULL, '1701779014.naseer.jpg', '<strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span>', 'active', '1701779014.naseer.jpg', NULL, '2023-12-05 07:23:34', '2023-12-05 07:23:34'),
(4, 'naseer baloch', 'naseer-baloch', '002', 'anees murad umar owais', 76, 12, NULL, NULL, '1701779065.naseer.jpg', '<font color=\"#1f2937\" face=\"ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, BlinkMacSystemFont, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 20px;\"><b>naseer&nbsp;</b></span></font><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</span>', 'active', '1701779065.naseer.jpg', NULL, '2023-12-05 07:24:25', '2023-12-05 07:24:25'),
(5, 'anees', 'anees', '11', 'no tag', 75, 11, 'aa', 'a', '1701779014.naseer.jpg', 'aaaa', 'active', 'aaaa', 'aaaaaaa', '2023-12-12 21:18:46', '2023-12-15 21:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int UNSIGNED NOT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img180x180` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `320x320` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `artist_name`, `artist_slug`, `artist_image`, `img180x180`, `320x320`, `description`, `code`, `tags`, `status`, `cat_id`, `created_at`, `updated_at`) VALUES
(75, 'Shahjan Dawood', 'shahjan-dawood', '1701778666.channels4_profile.jpg', '1701778666.channels4_profile.jpg', NULL, '<span style=\"color: rgb(153, 158, 162); font-family: Muli, sans-serif; font-size: 12px;\"><b>Shah Ja</b><u>n Dawoodi. You can experience New</u><b> Shah Jan Dawoodi songs list 2023 across all genres and moods like Heart Broken, Soulful, Chill, Happy, Tripping, Romance, Party. The most popular in gives you all the latest hit songs and music that you love!You can listen to top Shah Jan Dawoodi songs like Sengare Sengare. All latest Shah Jan Dawoodi songs are available to download &amp; listen on Hungama Music </b>for you.Hungama Music also allows you to download top mp3 songs list online for free and you can download all Indian Shah Jan Dawoodi new songs and download mp3 songs to listen offline. You can also find Shah Jan Dawoodi special new &amp; latest playlists with only Shah Jan Dawoodi songs.All hits Shah Jan Dawoodi songs are available on Hungama Music that you can listen online and also get free mp3 downloads. Listen to your favourite Shah Jan Dawoodi top Bollywood songs online in HD quality like never before. We not only have hits Bollywood songs of Shah Jan Dawoodi but also all hit regional songs on Hungama Music.You can also listen to popular albums with Shah Jan Dawoodi songs like Sengare Sengare and many others.You can download new albums of Shah Jan Dawoodi for free. Hungama music gives you the New Shah Jan Dawoodi mp3 songs easily available to listen online and to download off. All latest, top, new, hit &amp; best Shah Jan Dawoodi songs list available on both Hungama Music app and Hungama.com.</span><br style=\"font-family: Muli, sans-serif; margin: 0px; padding: 0px; color: rgb(153, 158, 162); font-size: 12px;\"><span style=\"color: rgb(153, 158, 162); font-family: Muli, sans-serif; font-size: 12px;\">View more at: https://www.hungama.com/artist/shah-jan-dawoodi/274285468/</span>', '001', 'anees rizwan imtiaz ismile', 'active', 11, '2023-12-05 07:17:47', '2023-12-05 07:17:47'),
(76, 'naseer balochi', 'naseer-balochi', '1701778870.naseer.jpg', '1701778870.naseer.jpg', NULL, 'hello my name is anees i am make new balochsazz website can you wach for now thenks you ', '002', 'anees murad umar owais', 'active', 12, '2023-12-05 07:21:10', '2023-12-05 07:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int UNSIGNED NOT NULL,
  `books_author_id` int DEFAULT NULL,
  `book_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pages` int NOT NULL,
  `publisher_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `books_author_id`, `book_title`, `book_slug`, `publisher_name`, `language`, `book_file`, `book_cover`, `pages`, `publisher_year`, `type`, `created_at`, `updated_at`) VALUES
(4, 1, 'balochi songs', 'balochi-songs', 'shahjan dawoodi test', 'english urdu sindhe', '1701807017.channels4_profile.jpg', NULL, 200, '2020', '1', '2023-12-05 15:10:17', '2023-12-05 15:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `book_authors`
--

CREATE TABLE `book_authors` (
  `id` int UNSIGNED NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_authors`
--

INSERT INTO `book_authors` (`id`, `author_name`, `author_slug`, `created_at`, `updated_at`) VALUES
(2, 'o', 'o', '2023-11-28 15:24:29', '2023-11-28 15:24:40'),
(3, 'shahjan dawoodi', 'shahjan-dawoodi', '2023-12-05 15:10:34', '2023-12-05 15:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_slug`, `code`, `tags`, `created_at`, `updated_at`) VALUES
(11, 'Shahjan Dawood', 'shahjan-dawood', '001', 'anees rizwan imtiaz ismile', '2023-12-05 07:11:33', '2023-12-05 07:11:33'),
(12, 'Nasir Balochi', 'nasir-balochi', '002', 'anees murad umar owais', '2023-12-05 07:12:08', '2023-12-05 07:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `news_id` int NOT NULL,
  `artist_id` int NOT NULL,
  `album_id` int NOT NULL,
  `truck_id` int NOT NULL,
  `type` enum('artist','album','track','user_track','news') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_track_id` int NOT NULL,
  `like_dislike` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_02_204103_create_albums_table', 2),
(7, '2023_11_02_204258_create_books_table', 2),
(8, '2023_11_02_204349_create_book_authors_table', 2),
(9, '2023_11_02_204418_create_category_table', 2),
(10, '2023_11_02_204510_create_likes_table', 2),
(11, '2023_11_02_204609_create_movies_table', 2),
(12, '2023_11_02_204652_create_movies_category_table', 2),
(13, '2023_11_02_204728_create_news_table', 2),
(14, '2023_11_02_204804_create_notifications_table', 2),
(15, '2023_11_02_204847_create_slider_table', 2),
(16, '2023_11_02_204905_create_tracks_table', 2),
(17, '2023_11_02_204921_create_tracks_count_table', 2),
(18, '2023_11_02_204953_create_tracks_download_table', 2),
(19, '2023_11_02_205025_create_user_socials_table', 2),
(20, '2023_11_02_205111_create_user_uploads_table', 2),
(21, '2023_11_02_205139_create_visitors_table', 2),
(23, '2023_11_02_204214_create_artists_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int UNSIGNED NOT NULL,
  `move_category_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quick_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `move_category_id`, `title`, `title_slug`, `description`, `quick_code`, `image`, `view`, `created_at`, `updated_at`) VALUES
(1, 475736, '1CW2J4nkFr', '1cw2j4nkfr', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '424048', NULL, 381599, '2023-11-28 16:14:32', '2023-11-28 16:14:32'),
(2, 76467, 'yB68ejARW3', 'yb68ejarw3', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '001934', NULL, 174043, '2023-11-28 16:15:00', '2023-11-28 16:15:00'),
(3, 283991, 'UalLS1XsxV', 'ualls1xsxv', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '374734', NULL, 958589, '2023-11-28 16:16:21', '2023-11-28 16:16:21'),
(4, 644265, 'DWiBxV4ILs', 'dwibxv4ils', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '784613', NULL, 456164, '2023-11-28 16:17:02', '2023-11-28 16:17:02'),
(5, 405054, 'RbOKkPvQUp', 'rbokkpvqup', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '935949', NULL, 593167, '2023-11-28 16:17:53', '2023-11-28 16:17:53'),
(6, 528513, 'Gyww51Ifpq', 'gyww51ifpq', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '392750', NULL, 153568, '2023-11-28 16:18:19', '2023-11-28 16:18:19'),
(7, 387760, 'RyiV8DJ4lw', 'ryiv8dj4lw', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '023543', NULL, 112258, '2023-11-28 16:22:00', '2023-11-28 16:22:00'),
(12, 279474, 'BObJGjVJwq', 'bobjgjvjwq', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '409148', NULL, 818513, '2023-11-28 16:26:05', '2023-11-28 16:26:05'),
(13, 656550, 'FAMzyyzatX', 'famzyyzatx', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '469581', NULL, 463421, '2023-11-28 16:26:46', '2023-11-28 16:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `movies_category`
--

CREATE TABLE `movies_category` (
  `id` int UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_ids` int NOT NULL,
  `folder_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int UNSIGNED NOT NULL,
  `type` enum('news','upcoming','events') COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `type`, `title`, `slug`, `image`, `url`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'news', 'news news', 'news-news', '1701209019.Untitled.png', 'BAJ0UC5a6D', 'Place <em>some</em> <u>text</u> <strong>here</strong>', 'inactive', '2023-11-28 17:03:40', '2023-11-28 17:04:44'),
(2, 'news', 'shahjan is death', 'shahjan-is-death', '1701807136.channels4_profile.jpg', 'https://websolapp.net', '<b>Shahan dawoodi&nbsp; </b>is death <b>rizwan&nbsp;</b>', 'active', '2023-12-05 15:12:16', '2023-12-05 15:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int UNSIGNED NOT NULL,
  `user_upload_id` int NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notify_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_upload_id`, `type`, `notify_to`, `title`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(4, 1, 'test', 'no', 'test', 'Place <em>some</em> <u>text</u> <strong>here</strong>', '1', '2023-12-05 15:13:08', '2023-12-05 15:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int UNSIGNED NOT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('front','login','header') COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider`, `title`, `title2`, `type`, `page_route`, `slider_slug`, `slider_image`, `created_at`, `updated_at`) VALUES
(4, 'Anees Ahmed Balochsazz  %  balochi songs', 'Anees Ahmed Balochsazz  %  balochi songs', 'Anees Ahmed Balochsazz  %  balochi songs', 'front', NULL, 'anees-ahmed-balochsazz-balochi-songs', '1701551795.pexels-matthias-groeneveld-4200747.jpg', '2023-12-02 16:16:36', '2023-12-02 16:16:36'),
(5, 'new balochi songs in balochsazz', 'new balochi songs in balochsazz', 'new balochi songs in balochsazz', 'front', NULL, 'new-balochi-songs-in-balochsazz', '1701551832.pexels-rene-asmussen-1539789.jpg', '2023-12-02 16:17:14', '2023-12-02 16:17:14'),
(6, 'balochi music available in balochsazz', 'balochi music available in balochsazz', 'balochi music available in balochsazz', 'front', NULL, 'balochi-music-available-in-balochsazz', '1701551929.pexels-pixabay-258965.jpg', '2023-12-02 16:18:50', '2023-12-02 16:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `id` int UNSIGNED NOT NULL,
  `album_id` int NOT NULL,
  `track_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_peot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `track_type` enum('audio','video') COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mf_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`id`, `album_id`, `track_title`, `track_slug`, `tags`, `code`, `track_peot`, `track_type`, `audio_file`, `mf_code`, `upload_key`, `status`, `created_at`, `updated_at`) VALUES
(5, 3, 'new balochi album', 'new-balochi-album', 'anees baloch', '10', 'track peot', 'audio', '1701812287_sample-file-1.mp3', '011', NULL, 'active', '2023-12-05 16:38:07', '2023-12-05 16:38:07'),
(6, 4, 'balochi songs', 'balochi-songs', 'rizwan noor', '002', 'no track peot', 'audio', '1701812356_sample-file-1.mp3', '022', NULL, 'active', '2023-12-05 16:39:16', '2023-12-05 16:39:16'),
(7, 5, 'test test 123', 'test-test-123', 'aU6foU3XCe', 'anees', 'aaaaa', 'audio', '1704541112_sample-file-1.mp3', 'aaaaaa', 'G8MUqfD2kW', 'active', '2024-01-06 06:38:32', '2024-01-06 06:38:32'),
(8, 5, 'aaaa', 'aaaa', 'eEeWqC6Pxl', 'anees', 'aaaaa', 'audio', '1704541133_sample-file-1.mp3', 'aaaaaa', '4qbiP8XWH5', 'active', '2024-01-06 06:38:53', '2024-01-06 06:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `tracks_count`
--

CREATE TABLE `tracks_count` (
  `id` int UNSIGNED NOT NULL,
  `track_id` int NOT NULL,
  `user_track_id` int NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracks_download`
--

CREATE TABLE `tracks_download` (
  `id` int UNSIGNED NOT NULL,
  `track_id` int NOT NULL,
  `user_track_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `roll` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `password`, `status`, `roll`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$9jCDuqRiXSUxOXXuHOptuOalQcaXWSCa6LMHaPdHRaLyp9s743doq', 'active', 1, NULL, '2023-11-01 02:11:32', '2023-11-06 17:20:13'),
(4, 'anees', 'anees@gmail.com', NULL, '$2y$10$3n5SvqdLVaHIDHa/4axEjuALgMkSBM8nt8GxaZURZgllDN11D0bZy', 'inactive', 0, NULL, '2023-11-04 17:40:16', '2023-11-30 07:52:08'),
(6, 'rizwan', 'rizwan@gmail.com', NULL, '$2y$10$XHi4GMBrvCkuBT.wTaN0b.oOsrDnOLlXNa/MKEMdxIrCjiF5VhNDu', 'active', 0, NULL, '2023-12-05 07:07:16', '2023-12-05 07:07:16'),
(7, 'imtiaz', 'imtiaz@gmail.com', NULL, '$2y$10$q9JVhnjGS4ALsIK4./AvaOMyYJoxTICvpWyo3LQWykoyqjp/YjKRe', 'active', 0, NULL, '2023-12-05 07:08:49', '2023-12-05 07:08:49'),
(8, 'frontend', 'frontend@gmail.com', NULL, '$2y$10$T1mmhtbJhv1pbzY2zSJnwerYvy6qzpvt0gsxCYfYiEvtrzEGJdKse', 'active', 0, NULL, '2024-01-04 01:48:16', '2024-01-04 01:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_socials`
--

CREATE TABLE `user_socials` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_uploads`
--

CREATE TABLE `user_uploads` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `s_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int NOT NULL,
  `code` int NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int UNSIGNED NOT NULL,
  `type` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_authors`
--
ALTER TABLE `book_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies_category`
--
ALTER TABLE `movies_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks_count`
--
ALTER TABLE `tracks_count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracks_download`
--
ALTER TABLE `tracks_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_socials`
--
ALTER TABLE `user_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_uploads`
--
ALTER TABLE `user_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_authors`
--
ALTER TABLE `book_authors`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies_category`
--
ALTER TABLE `movies_category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tracks_count`
--
ALTER TABLE `tracks_count`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracks_download`
--
ALTER TABLE `tracks_download`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_socials`
--
ALTER TABLE `user_socials`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_uploads`
--
ALTER TABLE `user_uploads`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
