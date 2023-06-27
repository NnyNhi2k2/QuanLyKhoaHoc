-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2022 lúc 08:32 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ck`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name_courses` varchar(50) NOT NULL,
  `info_courses` varchar(50) NOT NULL,
  `creat_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `day_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `name_courses`, `info_courses`, `creat_update`, `day_update`) VALUES
(1, 'HTML', 'HTML basic', '2022-05-23 05:53:47', '2022-05-23 05:53:47'),
(2, 'CSS', 'CSS zero to hero', '2022-05-23 05:57:26', '2022-05-23 05:57:26'),
(3, 'Javascript', 'Advenced', '2022-05-23 05:58:18', '2022-05-23 05:58:18'),
(4, 'PHP', 'PHP for beginner', '2022-05-23 05:58:41', '2022-05-23 05:58:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_04_072104_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hoang vip', 'hoangcop4822@gmail.com', NULL, '$2y$10$zhS62VH1MT9r.veBPqGd4.pImKHv8D9.9trXKerj8.Mx7Xk9JrcOi', NULL, '2022-05-22 22:53:22', '2022-05-22 22:53:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL,
  `name_courses` varchar(50) NOT NULL,
  `exercise` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `videos`
--

INSERT INTO `videos` (`id`, `video`, `link`, `name_courses`, `exercise`, `created_at`, `updated_at`) VALUES
(1, 'Bài 1: HTML là gì ?', 'https://hoang.h5p.com/content/1291631304549064699/embed', 'HTML', 'https://hoang.h5p.com/content/1291636039119284039/embed', NULL, NULL),
(2, 'Bài 2: Làm quen với HTML', 'https://hoang.h5p.com/content/1291631871362795699/embed', 'HTML', 'https://hoang.h5p.com/content/1291636040827341249/embed', NULL, NULL),
(3, 'Bài 3: HTML Element and Attribute', 'https://hoang.h5p.com/content/1291631881690878419/embed', 'HTML', 'https://hoang.h5p.com/content/1291636047064366459/embed', NULL, NULL),
(4, 'Bài 4: Heading and Paragraph', 'https://hoang.h5p.com/content/1291631885296392899/embed', 'HTML', 'https://hoang.h5p.com/content/1291636048557335409/embed', NULL, NULL),
(5, 'Bài 5: Định danh cho Paragraph', 'https://hoang.h5p.com/content/1291631886244587789/embed', 'HTML', 'https://hoang.h5p.com/content/1291636061996037929/embed', NULL, NULL),
(6, 'Bài 1: Css là gì?', 'https://hoang.h5p.com/content/1291631812711381929/embed', 'CSS', 'https://hoang.h5p.com/content/1291636018684944879/embed', NULL, NULL),
(7, 'Bài 2: Độ ưu tiên trong Css', 'https://hoang.h5p.com/content/1291631826098478549/embed', 'CSS', 'https://hoang.h5p.com/content/1291636026115059129/embed', NULL, NULL),
(8, 'Bài 3: Cách sử dụng Css trong HTML', 'https://hoang.h5p.com/content/1291631832121991549/embed', 'CSS', 'https://hoang.h5p.com/content/1291636028303610289/embed', NULL, NULL),
(9, 'Bài 4: ID và Class', 'https://hoang.h5p.com/content/1291631838544186909/embed', 'CSS', 'https://hoang.h5p.com/content/1291636407376691099/embed', NULL, NULL),
(10, 'Bài 1: Làm quen với JavaScript', 'https://hoang.h5p.com/content/1291633387827689099/embed', 'Javascript', 'https://hoang.h5p.com/content/1291636291763041089/embed', NULL, NULL),
(11, 'Bài 2: Cách khai báo và sử dụng JavaScript', 'https://hoang.h5p.com/content/1291635958796666729/embed', 'Javascript', 'https://hoang.h5p.com/content/1291636307517186489/embed', NULL, NULL),
(12, 'Bài 3: Kiểu dữ liệu trong Javascript', 'https://hoang.h5p.com/content/1291635959484005149/embed', 'Javascript', 'https://hoang.h5p.com/content/1291636314016063629/embed', NULL, NULL),
(13, 'Bài 4: Sử dụng developer tool', 'https://hoang.h5p.com/content/1291635959850099199/embed', 'Javascript', 'https://hoang.h5p.com/content/1291636326067950789/embed', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
