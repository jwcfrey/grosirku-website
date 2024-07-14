-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2024 pada 09.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_iseng`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 3, 7, '2024-07-05 06:29:23', '2024-07-05 06:29:23'),
(2, 3, 3, '2024-07-05 06:29:30', '2024-07-05 06:29:30'),
(3, 3, 12, '2024-07-05 06:29:54', '2024-07-05 06:29:54'),
(4, 3, 4, '2024-07-05 06:31:20', '2024-07-05 06:31:20'),
(5, 4, 6, '2024-07-05 06:32:51', '2024-07-05 06:32:51'),
(6, 4, 6, '2024-07-05 06:53:35', '2024-07-05 06:53:35'),
(7, 3, 8, '2024-07-05 06:57:40', '2024-07-05 06:57:40'),
(8, 3, 10, '2024-07-05 07:50:54', '2024-07-05 07:50:54'),
(9, 3, 4, '2024-07-05 16:38:51', '2024-07-05 16:38:51'),
(10, 3, 4, '2024-07-05 17:03:11', '2024-07-05 17:03:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(7, 'Makanan Ringan', '2024-07-03 04:06:03', '2024-07-03 04:06:03'),
(8, 'Minuman', '2024-07-03 04:06:11', '2024-07-03 04:06:11'),
(9, 'Bumbu Dapur', '2024-07-03 04:06:20', '2024-07-03 04:06:20'),
(10, 'Produk Olahan Daging', '2024-07-03 04:06:29', '2024-07-03 04:06:29'),
(11, 'Makanan Instan', '2024-07-03 04:06:36', '2024-07-03 04:06:36'),
(12, 'Keperluan Rumah Tangga', '2024-07-03 04:06:43', '2024-07-03 04:06:43'),
(13, 'Produk Susu', '2024-07-03 04:06:49', '2024-07-03 06:54:25'),
(18, 'Alat Tulis dan Perlengkapan Sekolah', '2024-07-03 04:44:42', '2024-07-03 04:44:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_03_073304_create_categories_table', 2),
(5, '2024_07_03_140039_create_products_table', 3),
(6, '2024_07_05_124605_create_carts_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `category`, `quantity`, `created_at`, `updated_at`) VALUES
(3, 'Chitato Sapi Panggang 68 Gr - 3 Pcs', '\"Chitato Family Beef Barbeque 68 Gr x 3 Pcs Chitato terbuat dari kentang segar yang diiris bergelombang dan dibumbuhi dengan bumbu dari seluruh dunia. Keripik kentang CHITATO dengan sapi panggang. Dibuat dari kentang berkualitas yang menghasilkan rasa gurih. Renyahnya keripik menyatu dengan taburan bumbu spesial. Life is never flat.KOMPOSISI :Kentang (65%), minyak kelapa sawit, bumbu rasa sapi panggang (mengandung kedelai, susu, ikan, gandum, ekstrak daging sapi (1%), penguat rasa mononatrium glutamat, dinatrium inosinat dinatrium guanilat).\"', '1720105341.png', '28.900', 'Makanan Ringan', '129', '2024-07-04 08:02:21', '2024-07-04 10:06:04'),
(4, 'Snack Taro Net Seaweed Kemasan Renceng 10 x 9 gram', 'Taro Net Seaweed merupakan cemilan ringan legendaris yang tetap digemari hingga saat ini! Dibuat dalam bentuk jaring-jaring kotak, Taro Net Seaweed hadir dengan kombinasi nikmat antara rasa kentang yang gurih serta bumbu rumput laut yang nikmat. Cemilan ringan ini hadir dalam kemasan kecil hingga besar, sehingga cocok untuk konsumsi sendiri maupun rame-rame bersama orang terdekatmu!', '1720105502.png', '10.500', 'Makanan Ringan', '224', '2024-07-04 08:05:02', '2024-07-04 08:05:02'),
(5, 'Tango x JMK 48 Wafer Royal Chocolate 35g EXCLUSIVE JKT48 - [Isi 10 + 4]', 'Tango wafer renyah dengan krim rasa coklat yang unik di setiap lapisannya. Tercipta dari resep asli dan bahan pilihan berkualitas yang menghadirkan kesempurnaan rasa', '1720105890.jpg', '25.890', 'Makanan Ringan', '10', '2024-07-04 08:11:30', '2024-07-04 17:40:04'),
(6, 'Aqua Botol 600 ml - Dus', 'Aqua kemasan 600 ml. 1 dus isi 24 botol. Dijual per dus. Expired lama.', '1720106014.jpg', '53.000', 'Minuman', '44', '2024-07-04 08:13:34', '2024-07-04 08:13:34'),
(7, 'KECAP MANIS ABC 620 ML BOTOL', 'KECAP MANIS ABC 620 ML BOTOL\r\n\r\n\r\nISI 620 ML\r\n\r\n\r\nMOHON TANYAKAN STOK TERLEBIH DAHULU\r\n\r\nKITA SELALU MEMBERIKAN BARANG ORIGINAL , TERBARU , DAN EXP YG LAMA.\r\n\r\nUNTUK KOMPLAIN BARANG HRS MENYERTAKAN VIDEO UNBOXING\r\n\r\nUNTUK PEMBELIAN BARANG2 KEMASAN BOTOL KACA , KEMASAN SPRAY , DAN POUCH SEBAIKNYA MEMBELI BUBBLE WRAP DI TOKO KAMI\r\n\r\nUNTUK PERMINTAAN KHUSUS VARIANT HARAP TANYAKAN DULU DAN TULIS NOTES APABILA TIDAK TULIS NOTES MAKA AKAN KAMI KIRIM RANDOM\r\n\r\nUNTUK PEMBELIAN BUBBLE WRAP UNTUK PEMAKAIAN PRIBADI HARAP TULIS NOTES\r\n\r\nTERIMA KASIH ATAS KERJASAMANYA..HAPPY SHOPPING\r\n\r\nUNTUK COMPLAIN KURANG BARANG / BRG RUSAK HARAP ADA VIDEO UNBOXING', '1720106134.jpg', '42.500', 'Bumbu Dapur', '55', '2024-07-04 08:15:34', '2024-07-04 08:15:34'),
(8, 'So nice sosis ayam', 'Halal', '1720106299.jpg', '25.641', 'Produk Olahan Daging', '5', '2024-07-04 08:18:19', '2024-07-04 08:18:19'),
(9, 'Rinso Detergent Cair + Molto Pink 215Ml', 'Rinso membersihkan paling bersih plus keharuman tahan lama', '1720106433.jpg', '6.200', 'Keperluan Rumah Tangga', '44', '2024-07-04 08:20:33', '2024-07-04 08:20:33'),
(10, 'DANCOW Fortigro Instant 400gr', 'Q&A\r\nFree packaging cardboard\r\nuntuk masa exp kami kirim dg masa exp terjauh yg tersedia di toko kami\r\n\r\nNote\r\nKerusakan packaging hanya pada bagian luar (bagian dalam utuh, produk tidak ada kerusakan/kekurangan, dll) disebabkan penanganan paket dari Pihak Jasa Ekspedisi yang kurang baik\r\nDiharapkan agar Pembeli bisa melakukan komplain langsung ke Pihak Jasa Ekspedisi\r\n\r\nBelanja Nyaman Belanja Hemat\r\nHappy Shopping', '1720106534.png', '52.500', 'Produk Susu', '122', '2024-07-04 08:22:14', '2024-07-04 08:22:14'),
(11, 'Buku Tulis SIDU 38 - SINAR DUNIA - SIDU', 'Buku Tulis SINAR DUNIA dan SKOLA\r\n\r\nMerk : SIDU\r\n\r\nHarga yang tercantum adalah 1 Pack isi 10Buku x 38Lembar\r\n\r\nIsi : 10 buku/38 lembar', '1720106645.jpg', '39.300', 'Pilih Kategori', '31', '2024-07-04 08:24:05', '2024-07-04 08:24:05'),
(12, 'Good Day Coffee Drink 250ml Cappuccino', 'Ongkir Flat Rp12.000. Pengiriman di luar area Yogyakarta akan mendapatkan auto refund. Cara penggunaan: kocok sebelum diminum dan lebih nikmat jika diminum dingin. Komposisi: air, gula, krimer nabati, kopi instan (7%), susu bubuk skim, bubuk kakao, penstabil karboksimetil, perisa identik alami alpukat. Takaran per kemasan: satu sajian per kemasan. Takaran per serving: energi total 150 kkal, energi dari lemak 25 kkal. % AKG: lemak total 3g, lemak jenuh 3g, lemak trans 0g, kolesterol 0mg, protein 0g, karbohidrat total 12g, gula 22g, natrium 55mg, kalium 220mg. Takaran saji: 250mL. Tanggal produksi: 1 Agustus 2021. Tanggal kadaluarsa: 1 September 2022. Nomor legalitas halal: 00090074751115. Nomor BPOM/PIRT: MD 231509055112.', '1720109704.png', '6.500', 'Minuman', '50', '2024-07-04 09:15:04', '2024-07-04 09:15:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('az3DIAOr8rbTLk1Z4yfCq7HND8TvL8MuDGpSc9SD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2VSSmJuMjVNZzBCYmh2bUd3eGFOMFlGc0tIa2hVV3FPMDFXbzhmWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9fQ==', 1720260801),
('eBnAhnXpjz4gVSFW7FKI2qKQlOMjygIltaPrZlkC', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicHNueXRleEtQT3QwcEtyYVFrcnpnMHZ2dEk5SldPNnNCbnZISmtSSSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3Byb2R1Y3RfZGV0YWlscy81Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1720277413),
('fMh6MxBybXMQIF2Kz0RsKy8BgH74KmUBOxjnVWGf', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQklHWVBCN0Z5aGVEZVRFaGlrRGJ1ZEF1ZzhVUXBObHJJdDVsZ0lQdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2xvZ2luIjt9czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkZF9jYXJ0LzYiO319', 1720248713);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kelompok_3', 'kelompok3@gmail.com', 'user', '08978601538', 'Purwakarta', NULL, '$2y$12$65vrBKYPvPxnA7h8g8IIbOgLcWgfCzDjSM9dJsyIv000l0VA6fqTC', NULL, '2024-07-02 21:23:42', '2024-07-02 21:23:42'),
(2, 'admin', 'admin@gmail.com', 'admin', '082299865504', 'Karawang', NULL, '$2y$12$ZtLnT0xHmjZFLPIpytac6eVCIUBFeVbi/cfURmDyUQy7JCayWxwdu', NULL, '2024-07-02 21:25:05', '2024-07-02 21:25:05'),
(3, 'user', 'user@gmail.com', 'user', '082299875482', 'Jakarta', NULL, '$2y$12$1RLrlm9n0MTbzjFnt.tdcOEd5Z/HbN0b4MbYU46Fb36uKBi9uZBuG', NULL, '2024-07-04 23:07:33', '2024-07-04 23:07:33'),
(4, 'banu', 'bondanbanuaji@gmail.com', 'user', '192819289182', 'Bandung', NULL, '$2y$12$banY1glI3a9cpLrWQk.F9.6T3mV6PGZxvl3tzxAGyzS9xUbOFgYXu', NULL, '2024-07-05 06:32:41', '2024-07-05 06:32:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
