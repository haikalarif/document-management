-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.10.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for document-management
CREATE DATABASE IF NOT EXISTS `document-management` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */;
USE `document-management`;

-- Dumping structure for table document-management.client
CREATE TABLE IF NOT EXISTS `client` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.client: ~2 rows (approximately)
REPLACE INTO `client` (`id`, `name`, `address`, `contact`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Bank A', 'Bandung', '121323425', NULL, NULL, NULL),
	(2, 'Bank B', 'Jawa Tengah', '122135443', NULL, NULL, NULL);

-- Dumping structure for table document-management.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.documents: ~5 rows (approximately)
REPLACE INTO `documents` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
	(1, 'BPP', 'Badan Perenanaan dan Pengembangan', '2023-05-21 21:16:28', NULL),
	(2, 'FSD', 'Functional Specification Document', '2023-05-21 21:16:28', NULL),
	(3, 'BRD', 'Business Requirements Document', '2023-05-21 21:16:28', NULL),
	(4, 'UAT Script', 'User Acceptance Test Script', '2023-05-21 21:16:28', NULL),
	(5, 'BAST', 'Berita Acara Serah Terima', '2023-05-21 21:16:28', NULL);

-- Dumping structure for table document-management.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table document-management.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.kategori: ~4 rows (approximately)
REPLACE INTO `kategori` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Solutions', NULL, NULL),
	(2, 'Consulting', NULL, NULL),
	(3, 'Training', NULL, NULL),
	(4, 'Research', NULL, NULL);

-- Dumping structure for table document-management.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.migrations: ~10 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_01_13_040751_create_clients_table', 1),
	(6, '2023_01_13_041426_create_products_table', 1),
	(7, '2023_01_13_060215_create_projects_table', 1),
	(8, '2023_01_13_063827_create_documents_table', 1),
	(9, '2023_01_13_063931_create_project_documents_table', 1),
	(10, '2023_01_13_064025_create_kategori_table', 1);

-- Dumping structure for table document-management.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.password_resets: ~0 rows (approximately)

-- Dumping structure for table document-management.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table document-management.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `id_kategori` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.product: ~2 rows (approximately)
REPLACE INTO `product` (`id`, `nama`, `id_kategori`, `created_at`, `updated_at`) VALUES
	(1, 'Aplikasi TKB', 1, NULL, NULL),
	(2, 'Aplikasi PRC', 1, NULL, NULL);

-- Dumping structure for table document-management.project
CREATE TABLE IF NOT EXISTS `project` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `start_project` date NOT NULL,
  `finish_project` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.project: ~3 rows (approximately)
REPLACE INTO `project` (`id`, `client_id`, `product_id`, `start_project`, `finish_project`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2023-02-03', '2023-02-23', NULL, NULL),
	(2, 2, 1, '2023-02-10', '2023-02-25', NULL, NULL),
	(3, 2, 2, '2023-02-15', '2023-02-28', NULL, NULL);

-- Dumping structure for table document-management.projectdocuments
CREATE TABLE IF NOT EXISTS `projectdocuments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` bigint(20) unsigned NOT NULL,
  `document_id` bigint(20) unsigned NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.projectdocuments: ~3 rows (approximately)
REPLACE INTO `projectdocuments` (`id`, `project_id`, `document_id`, `file`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'documents/nrt8KRPxVen8gy6S77Brsetrz4lD0jZvQbkXaP28.pdf', '2023-05-21 21:39:22', '2023-05-21 21:39:22'),
	(2, 1, 2, 'documents/W9lcaR4qaPClp92zWcXekcCwmYTfvVN6I43SUijB.pdf', '2023-05-21 21:40:38', '2023-05-21 21:40:38'),
	(3, 1, 1, 'documents/hY0HMBzZ3wMFv7N0l4PZ0ytQY0tLQUPTux6zjLvm.pdf', '2023-05-21 21:41:11', '2023-05-21 21:41:11');

-- Dumping structure for table document-management.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `client_id` bigint(20) unsigned DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table document-management.users: ~3 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `role`, `client_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$v3O1s58IYm14fr42.cWvB./80GU2zGVLVs7ml1MsoJds4Oq9uEmky', NULL, 'admin', NULL, NULL, NULL, NULL),
	(2, 'operator', 'operator@gmail.com', NULL, '$2y$10$gSENqclnatj0ug/gsdwPMO90mmjN0/ZwCLvCYsWkE1pSyL9Y.F7MC', NULL, 'operator', NULL, NULL, NULL, NULL),
	(3, 'User Bank A', 'userbanka@gmail.com', NULL, '$2y$10$7Ro5/beDWDkgmP6F4k3Q6O5vPP73LIqjX83gt7GzcBT4l70.aovWu', NULL, 'client', 1, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
