-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 25, 2021 lúc 03:30 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlts`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi`
--

CREATE TABLE `donvi` (
  `madonvi` int(11) NOT NULL,
  `tendonvi` varchar(255) DEFAULT NULL,
  `donvicha` varchar(255) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `ngaytao` date DEFAULT NULL,
  `nguoitao` varchar(255) DEFAULT NULL,
  `ngaycapnhat` date DEFAULT NULL,
  `nguoicapnhat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi`
--

INSERT INTO `donvi` (`madonvi`, `tendonvi`, `donvicha`, `mota`, `ngaytao`, `nguoitao`, `ngaycapnhat`, `nguoicapnhat`) VALUES
(35, 'nhan su', 'dieu hanh', 'mo ta chi tiet', '2021-07-02', 'nam yen nhi', '2021-07-01', '123458'),
(36, 'hanh chinh', 'hanh chinh', 'mo ta chi tiet', '2021-07-21', 'yeen nhi', '2021-07-08', 'hoa'),
(377, 'ipdate', NULL, NULL, NULL, NULL, NULL, NULL),
(446, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(789, 'nhan su', '789', '789', '2021-07-16', '889', '2021-07-31', 'manhp'),
(5862, '555555555', NULL, 'day la  tieu de', '2021-07-03', 'yyyyyyy', '2021-07-02', 'yyyyyyyyyyyy'),
(37712, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37755, NULL, NULL, NULL, NULL, NULL, NULL, 'manh'),
(99999, 'ipdate', NULL, NULL, NULL, NULL, NULL, NULL),
(999999, '99999999999', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_19_073828_create_table_unit_table', 1),
(5, '2021_07_19_080334_create_table_nguoidung_table', 1),
(6, '2021_07_22_104853_create_table_posts_table', 2),
(7, '2021_07_23_020423_add_attribute_status_into_posts_table', 3),
(8, '2021_07_23_023352_drop_posts_table', 4),
(9, '2021_07_23_024621_drop_posts_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NguoiTao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayCapNhat` date NOT NULL,
  `NguoiCapNhat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaDonVi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung1`
--

CREATE TABLE `nguoidung1` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `ngaytao` date DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `nguoitao` varchar(255) DEFAULT NULL,
  `ngaycapnhat` date DEFAULT NULL,
  `nguoicapnhat` varchar(255) DEFAULT NULL,
  `donvi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung1`
--

INSERT INTO `nguoidung1` (`id`, `hoten`, `mota`, `ngaysinh`, `ngaytao`, `diachi`, `nguoitao`, `ngaycapnhat`, `nguoicapnhat`, `donvi`) VALUES
(21, 'manh', 'day la  tieu de', '2021-07-11', '2021-07-03', 'ngatrai', 'manh', '2021-07-30', 'manh', 36),
(22, 'manh', 'day la  tieu de', '2021-07-11', '2021-07-03', 'ngatrai', 'manh', '2021-07-08', 'manh', 36),
(23, 'manh', 'day la  tieu de', '2021-07-03', '2021-07-02', 'ngatrai', 'manh', '2021-08-06', 'manh', 35),
(24, 'manh', 'day la  tieu de', '2021-07-11', '2021-07-03', 'ngatrai', 'manh', '2021-07-30', 'manh', 35),
(25, 'manh', 'day la  tieu de', '2021-07-11', '2021-07-03', 'ngatrai', 'manh', '2021-07-08', 'manh', 35),
(26, 'manh', 'day la  tieu de', '2021-07-11', '2021-07-03', 'ngatrai', 'manh', '2021-07-30', 'manh', 35),
(27, 'manh', 'day la  tieu de', '2021-07-11', '2021-07-03', 'ngatrai', 'manh', '2021-07-08', 'manh', 35),
(28, 'manh', 'day la  tieu de', '2021-07-09', '2021-07-09', 'ngatrai', 'manh', '2021-07-30', 'manh', 35),
(29, 'manh', 'day la  tieu de', '2021-07-09', '2021-07-02', 'ngatrai', 'manh', '2021-07-10', 'manh nam', 35),
(32, '99999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35),
(33, '8888888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `quyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `tentaikhoan`, `matkhau`, `quyen`) VALUES
(1, 'someone', '12345678', 0),
(3, 'someone1', '12345678', 1),
(4, 'someone2', '$2y$10$g32aLhR5QEfM8PB5/NZK1ON/hVmp0Z1lXfoVIYh7zlk24w3hFB.yG', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `unit`
--

CREATE TABLE `unit` (
  `TenDonVi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DonVi` int(11) NOT NULL,
  `DonViCha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayTao` date NOT NULL,
  `NgayCapNhat` date NOT NULL,
  `NguoiCapNhat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'someone1', 'abc@gmail.com', NULL, '12345678', NULL, NULL, NULL),
(2, 'someone2', 'abc123@gmail.com', NULL, '$2y$10$SVZYhReqQor3StSkbRAZqetwZxT4VoVrprfbhvyZ8gdinQUhO0KW6', NULL, '2021-07-23 02:16:52', '2021-07-23 02:16:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donvi`
--
ALTER TABLE `donvi`
  ADD PRIMARY KEY (`madonvi`);

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
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung1`
--
ALTER TABLE `nguoidung1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donvi` (`donvi`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`DonVi`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung1`
--
ALTER TABLE `nguoidung1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nguoidung1`
--
ALTER TABLE `nguoidung1`
  ADD CONSTRAINT `nguoidung1_ibfk_1` FOREIGN KEY (`donvi`) REFERENCES `donvi` (`madonvi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
