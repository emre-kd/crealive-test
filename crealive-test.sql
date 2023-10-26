-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Eki 2023, 14:52:19
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `crealive-test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `category_id`, `user_id`) VALUES
(7, 'Lorem İpsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698277763.png', '2023-10-25 19:43:01', '2023-10-25 20:49:23', 52, 1),
(8, 'Id quaerat voluptas', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore impedit dolorem corporis, a iusto velit molestiae veniam dolores, eum perspiciatis voluptas itaque, incidunt sed beatae quam voluptates debitis aliquid nostrum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore impedit dolorem corporis, a iusto velit molestiae veniam dolores, eum perspiciatis voluptas itaque, incidunt sed beatae quam voluptates debitis aliquid nostrum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore impedit dolorem corporis, a iusto velit molestiae veniam dolores, eum perspiciatis voluptas itaque, incidunt sed beatae quam voluptates debitis aliquid nostrum?', '1698277726.png', '2023-10-25 20:46:36', '2023-10-25 20:48:46', 52, 1),
(9, 'Lorem İpsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698277887.png', '2023-10-25 20:51:27', '2023-10-25 20:51:27', 52, 1),
(10, 'Lorem İpsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698277944.png', '2023-10-25 20:52:24', '2023-10-25 20:52:24', 50, 1),
(11, 'Lorem Picsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698277980.png', '2023-10-25 20:53:00', '2023-10-25 20:53:00', 51, 1),
(12, 'Lorem Ticsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698277996.png', '2023-10-25 20:53:16', '2023-10-25 20:53:16', 49, 1),
(13, 'Lorem Kicksum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698278007.png', '2023-10-25 20:53:27', '2023-10-25 20:53:27', 53, 1),
(14, 'Lorem Miksum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, cumque. Sunt cupiditate quaerat beatae ratione iure enim, ipsa accusantium voluptas ipsam totam modi a fuga libero. Facere placeat delectus mollitia?', '1698278018.png', '2023-10-25 20:53:38', '2023-10-25 20:53:38', 54, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(49, 1, 'Yaşam Tarzı', '2023-10-25 18:56:24', '2023-10-26 09:33:45'),
(50, 1, 'Sanat', '2023-10-25 18:56:32', '2023-10-25 18:56:32'),
(51, 1, 'Teknoloji', '2023-10-25 18:56:43', '2023-10-25 18:56:43'),
(52, 1, 'Oyun', '2023-10-25 18:56:54', '2023-10-25 18:56:54'),
(53, 1, 'Resim', '2023-10-25 18:57:08', '2023-10-25 18:57:08'),
(54, 1, 'Müzik', '2023-10-25 18:58:16', '2023-10-25 18:58:16'),
(55, 1, 'Edebiyat', '2023-10-25 18:58:38', '2023-10-25 18:58:38'),
(56, 1, 'Tarih', '2023-10-25 18:58:45', '2023-10-25 18:58:45');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$AU6tpJAKb7UGKMVj/5kvmOl8tICKX0o4ywG.tBAKfPBYaSKpqL7Da', 'IAtLFWC8xXO3ijSBirjZHN53Tp3nuI9rzYmOiFLkpNAf96zubrFPCInKwWgl', NULL, NULL),
(2, 'Dorothy Patrick', 'hedokebe@mailinator.com', NULL, '$2y$10$9QJZOOZAgb6aw3KhqO2llOU2Y9jlsSaVyrYh4MPLymm2NsvHyIUTC', NULL, '2023-10-25 12:55:22', '2023-10-25 12:55:22');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_secondary` (`category_id`),
  ADD KEY `user_id_secondary_blogs` (`user_id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_secondary` (`user_id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `category_id_secondary` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_secondary_blogs` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `user_id_secondary` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
