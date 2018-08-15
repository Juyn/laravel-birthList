-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 août 2018 à 23:45
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `birthlist`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `created_at`, `updated_at`, `name`, `keywords`, `visible`) VALUES
(1, '2018-07-24 19:21:13', '2018-07-24 19:21:13', 'Jouets', 'jouet éveil peluche nounours', 1),
(2, '2018-07-29 20:27:26', '2018-07-29 20:27:26', 'Vétements', 'body', 1);

-- --------------------------------------------------------

--
-- Structure de la table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
CREATE TABLE IF NOT EXISTS `data_rows` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'locale', 'text', 'Locale', 0, 1, 1, 1, 1, 0, '', 12),
(12, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '', 12),
(13, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(14, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(15, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(16, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(17, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(18, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(19, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '', 3),
(20, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '', 4),
(21, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(22, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, '', 9),
(23, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(24, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 2),
(25, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 3),
(26, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(27, 4, 'keywords', 'text', 'Keywords', 0, 1, 1, 1, 1, 1, NULL, 5),
(28, 4, 'visible', 'text', 'Visible', 1, 1, 1, 1, 1, 1, NULL, 6),
(40, 4, 'category_hasmany_product_relationship', 'relationship', 'product', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Product\",\"table\":\"product\",\"type\":\"hasMany\",\"column\":\"category\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"category\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(49, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(50, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(51, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(55, 7, 'product_id', 'text', 'Product Id', 1, 1, 1, 1, 1, 1, NULL, 2),
(56, 7, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, NULL, 5),
(57, 7, 'quantity', 'text', 'Quantity', 1, 1, 1, 1, 1, 1, NULL, 6),
(60, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(61, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, NULL, 3),
(62, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(63, 8, 'image', 'text', 'Image', 0, 1, 1, 1, 1, 1, NULL, 5),
(64, 8, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 6),
(65, 8, 'description', 'text', 'Description', 1, 1, 1, 1, 1, 1, NULL, 7),
(66, 8, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, NULL, 8),
(67, 8, 'quantity', 'text', 'Quantity', 1, 1, 1, 1, 1, 1, NULL, 9),
(68, 8, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, NULL, 10),
(69, 8, 'brandFree', 'text', 'BrandFree', 1, 1, 1, 1, 1, 1, NULL, 11),
(70, 8, 'category_id', 'text', 'Category Id', 1, 1, 1, 1, 1, 1, NULL, 2),
(71, 8, 'product_belongsto_category_relationship', 'relationship', 'category', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"category\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category\",\"pivot\":\"0\",\"taggable\":null}', 12);

-- --------------------------------------------------------

--
-- Structure de la table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
CREATE TABLE IF NOT EXISTS `data_types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(4, 'category', 'category', 'Category', 'Categories', NULL, 'App\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-24 19:15:00', '2018-07-24 19:15:00'),
(7, 'wish', 'wish', 'Wish', 'Wishes', NULL, 'App\\Wish', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-07-24 19:30:35', '2018-07-24 19:30:35'),
(8, 'product', 'product', 'Product', 'Products', 'voyager-shop', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null}', '2018-08-01 18:07:40', '2018-08-01 18:07:40');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-07-24 19:14:22', '2018-07-24 19:14:22');

-- --------------------------------------------------------

--
-- Structure de la table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2018-07-24 19:14:22', '2018-07-24 19:14:22', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2018-07-24 19:14:22', '2018-07-24 19:29:14', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-07-24 19:14:22', '2018-07-24 19:14:22', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-07-24 19:14:22', '2018-07-24 19:14:22', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2018-07-24 19:14:22', '2018-07-24 19:32:35', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2018-07-24 19:14:22', '2018-07-24 19:29:14', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2018-07-24 19:14:22', '2018-07-24 19:29:14', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2018-07-24 19:14:22', '2018-07-24 19:29:14', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2018-07-24 19:14:22', '2018-07-24 19:29:14', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 8, '2018-07-24 19:14:22', '2018-07-24 19:32:35', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2018-07-24 19:14:22', '2018-07-24 19:29:14', 'voyager.hooks', NULL),
(12, 1, 'Categories', '', '_self', 'voyager-categories', '#000000', NULL, 6, '2018-07-24 19:15:00', '2018-07-24 19:30:05', 'voyager.category.index', 'null'),
(13, 1, 'Products', '', '_self', 'voyager-shop', '#000000', NULL, 5, '2018-07-24 19:15:07', '2018-07-24 19:29:44', 'voyager.product.index', 'null'),
(15, 1, 'Wishes', '', '_self', 'voyager-gift', '#000000', NULL, 7, '2018-07-24 19:30:35', '2018-07-24 19:32:52', 'voyager.wish.index', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2018_07_22_212549_socialite_user_extended', 1),
(24, '2018_07_22_214720_create_Product_table', 1),
(25, '2018_07_22_214720_create_Wish_table', 1),
(26, '2018_07_22_214730_create_foreign_keys', 1),
(27, '2018_07_24_210342_create_category_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(2, 'browse_bread', NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(3, 'browse_database', NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(4, 'browse_media', NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(5, 'browse_compass', NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(6, 'browse_menus', 'menus', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(7, 'read_menus', 'menus', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(8, 'edit_menus', 'menus', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(9, 'add_menus', 'menus', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(10, 'delete_menus', 'menus', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(11, 'browse_roles', 'roles', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(12, 'read_roles', 'roles', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(13, 'edit_roles', 'roles', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(14, 'add_roles', 'roles', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(15, 'delete_roles', 'roles', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(16, 'browse_users', 'users', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(17, 'read_users', 'users', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(18, 'edit_users', 'users', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(19, 'add_users', 'users', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(20, 'delete_users', 'users', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(21, 'browse_settings', 'settings', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(22, 'read_settings', 'settings', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(23, 'edit_settings', 'settings', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(24, 'add_settings', 'settings', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(25, 'delete_settings', 'settings', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(26, 'browse_hooks', NULL, '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(27, 'browse_category', 'category', '2018-07-24 19:15:00', '2018-07-24 19:15:00'),
(28, 'read_category', 'category', '2018-07-24 19:15:00', '2018-07-24 19:15:00'),
(29, 'edit_category', 'category', '2018-07-24 19:15:00', '2018-07-24 19:15:00'),
(30, 'add_category', 'category', '2018-07-24 19:15:00', '2018-07-24 19:15:00'),
(31, 'delete_category', 'category', '2018-07-24 19:15:00', '2018-07-24 19:15:00'),
(42, 'browse_wish', 'wish', '2018-07-24 19:30:35', '2018-07-24 19:30:35'),
(43, 'read_wish', 'wish', '2018-07-24 19:30:35', '2018-07-24 19:30:35'),
(44, 'edit_wish', 'wish', '2018-07-24 19:30:35', '2018-07-24 19:30:35'),
(45, 'add_wish', 'wish', '2018-07-24 19:30:35', '2018-07-24 19:30:35'),
(46, 'delete_wish', 'wish', '2018-07-24 19:30:35', '2018-07-24 19:30:35'),
(47, 'browse_product', 'product', '2018-08-01 18:07:40', '2018-08-01 18:07:40'),
(48, 'read_product', 'product', '2018-08-01 18:07:40', '2018-08-01 18:07:40'),
(49, 'edit_product', 'product', '2018-08-01 18:07:40', '2018-08-01 18:07:40'),
(50, 'add_product', 'product', '2018-08-01 18:07:40', '2018-08-01 18:07:40'),
(51, 'delete_product', 'product', '2018-08-01 18:07:40', '2018-08-01 18:07:40');

-- --------------------------------------------------------

--
-- Structure de la table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `quantity` smallint(6) NOT NULL DEFAULT '1',
  `link` text COLLATE utf8_unicode_ci,
  `brandFree` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_category_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `created_at`, `updated_at`, `image`, `title`, `description`, `price`, `quantity`, `link`, `brandFree`, `category_id`) VALUES
(5, '2018-07-29 20:26:00', '2018-08-01 18:27:07', NULL, 'Produit 2', 'test', 2.22, 5, NULL, 0, 1),
(6, '2018-08-01 18:08:39', '2018-08-01 18:08:39', 'https://media.vertbaudet.fr/Pictures/vertbaudet/18889/parc-en-bois-pliant-3-positions-flexipark.jpg?width=1320', 'Parc en bois pliant 3 positions Flexipark - gris', 'Grâce à ses 3 hauteurs, ce parc accompagne bébé dans sa croissance et lui permet de jouer et de s\'éveiller en toute sécurité. Le petit plus : il se plie facilement pour un gain de place dans votre pièce.', 149, 1, 'https://www.vertbaudet.fr/parc-en-bois-pliant-3-positions-flexipark-gris.htm?ProductId=703350011&FiltreCouleur=6429&FiltreTaille=TU&Track=ref_payant&cmpid=SEM0296&gclid=CjwKCAjwtIXbBRBhEiwAWV-5ntvNW4Jzc1N3m6N3rYBLXxLvHzWPUH5KmJxKC3hSllxFUYkAmM-dUxoC-GEQAvD_BwE', 0, 2),
(7, '2018-07-29 20:26:00', '2018-08-01 18:27:07', NULL, 'Produit 25', 'test', 2.22, 5, NULL, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2018-07-24 19:14:22', '2018-07-24 19:14:22'),
(2, 'user', 'Normal User', '2018-07-24 19:14:22', '2018-07-24 19:14:22');

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  `details` text COLLATE utf8_unicode_ci,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Virgule !', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(14, 'site.reservation_custom_text', 'Custom message for reservation modal', '<p>C\'est trop cool !</p>\r\n<p>Pour valider ta r&eacute;servation, il ne te reste plus qu\'&agrave; choisir une quantit&eacute;, l&agrave;, juste en dessous.</p>', NULL, 'rich_text_box', 6, 'Site');

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

DROP TABLE IF EXISTS `translations`;
CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'users/default.png',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `avatar`, `remember_token`, `settings`, `created_at`, `updated_at`, `facebook_id`) VALUES
(1, 1, 'xavier', 'juyn89@gmail.com', '$2y$10$y2.dfLxnoeEhFtJA7iUaW.kx05IxMmZXiicxym4f8HgyUItCsLA76', 'users/default.png', 'GSdWoBmaMmJ4l5X65gqfdwvtYI0FxdjMbl3EDyzuYo9ZxIEF7FOo0dhKFjhj', NULL, '2018-07-24 19:14:40', '2018-07-24 19:14:40', NULL),
(2, 2, 'Xavier', 'xavier@email.com', '', 'users/default.png', '7aqS9h5ZYXGUZW4xLCUDkoMl7lHh0HjdqTFEcpmQCaXu79zhp66OxBCw1HM8', NULL, '2018-07-25 19:22:48', '2018-07-25 19:22:48', NULL),
(3, 2, 'test', 'test@test.com', '', 'users/default.png', 'PVd2sbO2PQnKDMxVj3MjeXhqxjSLWiFImSOsvIvKq6VRqw2mpqmXQpq8thoO', NULL, '2018-07-25 19:22:59', '2018-07-25 19:22:59', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE IF NOT EXISTS `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `wish`
--

DROP TABLE IF EXISTS `wish`;
CREATE TABLE IF NOT EXISTS `wish` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `wish_product_index` (`product_id`),
  KEY `wish_user_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `wish`
--

INSERT INTO `wish` (`id`, `created_at`, `updated_at`, `product_id`, `user_id`, `quantity`) VALUES
(22, '2018-08-15 21:07:27', '2018-08-15 21:07:27', 6, 1, 1),
(23, '2018-08-15 21:07:50', '2018-08-15 21:07:50', 5, 1, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `wish`
--
ALTER TABLE `wish`
  ADD CONSTRAINT `wish_product_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
