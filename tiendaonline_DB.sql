-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2022 a las 19:42:43
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaonline`
--
CREATE DATABASE IF NOT EXISTS `tiendaonline` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tiendaonline`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `calle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patio` double DEFAULT NULL,
  `puerta` double DEFAULT NULL,
  `numero` double NOT NULL,
  `cod_postal` double NOT NULL,
  `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `calle`, `patio`, `puerta`, `numero`, `cod_postal`, `ciudad`, `provincia`, `pais`, `created_at`, `updated_at`) VALUES
(6, 1, 'Llano', NULL, NULL, 86, 46390, 'Valencia', 'Valencia', 'España', '2022-02-17 13:07:27', '2022-02-17 13:07:27'),
(7, 1, 'Paseo de las famasss', NULL, NULL, 1, 46000, 'Madrid', 'Valencia', 'España', '2022-02-17 13:08:15', '2022-02-17 13:45:54'),
(10, 1, 'direccion', NULL, NULL, 23, 46990, 'Madrid', 'Valencia', 'España', '2022-02-17 13:47:41', '2022-02-17 13:47:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_lines`
--

DROP TABLE IF EXISTS `cart_lines`;
CREATE TABLE `cart_lines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Electronica', 'Productos electronicos', '2022-02-17 10:59:31', '2022-02-17 10:59:31'),
(2, 'Electrodomesticos', 'Productos de hogar', '2022-02-17 11:25:35', '2022-02-17 11:25:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `product_id`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 1, 'products-imgs/4fJpBF9UucCdKqpooMpX7W3xxxr9M2xuxvBpCTFo.jpg', '2022-02-17 11:00:37', '2022-02-17 11:00:37'),
(2, 1, 'products-imgs/EiYHwYXn5h0lq9XaMXmBpK7ph07icVYGsxtII7ej.jpg', '2022-02-17 11:00:38', '2022-02-17 11:00:38'),
(5, 3, 'products-imgs/xOD6QuzzTwfCZcziIAZblh92qjmuhNcevVAWA5Dz.jpg', '2022-02-17 11:15:23', '2022-02-17 11:15:23'),
(6, 3, 'products-imgs/oeDQjZ7ore0nNXcBo1gXn7Hb48u6CSOAYAPHfKLH.jpg', '2022-02-17 11:15:24', '2022-02-17 11:15:24'),
(7, 4, 'products-imgs/1I8nf4iF5ZbrpvIGdyVMWs2aSpSwE6jf2EZOwzqC.jpg', '2022-02-17 11:28:04', '2022-02-17 11:28:04'),
(8, 4, 'products-imgs/AYgYtIdAb6GtUTKYeXzKdkoeAQYQ07UCqar6i0v6.jpg', '2022-02-17 11:28:04', '2022-02-17 11:28:04'),
(9, 5, 'products-imgs/9WK6P4IfrBLrkTCMSdr3YWgIIQF7RiaNgz4WW6Fg.jpg', '2022-02-17 11:29:58', '2022-02-17 11:29:58'),
(10, 5, 'products-imgs/IkxYhO32wsjZtu1aykhvv9JYo7MGwwbuDrbmxiQz.jpg', '2022-02-17 11:29:59', '2022-02-17 11:29:59'),
(11, 6, 'products-imgs/DJ3cp5zODt6506m3CJUIF2slbVfzctIi9d44by6O.jpg', '2022-02-17 11:34:14', '2022-02-17 11:34:14'),
(13, 6, 'products-imgs/uJdcunFkLve6aUwmOZXwW6XfggU4JWtO6oht1S3l.jpg', '2022-02-17 11:34:43', '2022-02-17 11:34:43'),
(14, 7, 'products-imgs/Jivt7td2vKRy4ODkMqOwg9jdC5uXk9NPVbYs1SyR.jpg', '2022-02-17 11:36:44', '2022-02-17 11:36:44'),
(15, 7, 'products-imgs/UUNC3CfjlltUp3X83p0V7hWIvT4atyB8TD0t1RPd.jpg', '2022-02-17 11:36:44', '2022-02-17 11:36:44'),
(16, 8, 'products-imgs/bqSUJDrhXjmQyBWxBCU4OoN9al0bqKUWqWK2mFJU.jpg', '2022-02-17 11:39:05', '2022-02-17 11:39:05'),
(17, 8, 'products-imgs/eIYdnkqatYVsypfWNVDDV4fSbS96bpYzxtaiNfS0.jpg', '2022-02-17 11:39:05', '2022-02-17 11:39:05'),
(18, 9, 'products-imgs/8SVK82xzGA44o2Vu49Hb6popr2MfcMgxJaKfo2Th.jpg', '2022-02-17 11:40:07', '2022-02-17 11:40:07'),
(19, 10, 'products-imgs/MrermxnP33UZr9sOXRnMtAwq3xVMIgB1duo95SI8.jpg', '2022-02-17 11:42:05', '2022-02-17 11:42:05'),
(20, 10, 'products-imgs/SvnZUHTg6SVafJJY72isNrJyUpcXf763gfbidzP7.jpg', '2022-02-17 11:42:05', '2022-02-17 11:42:05'),
(22, 11, 'products-imgs/phJYiQ2U6mg2LLJBXmvkgvn0CCXZ0QVdR9PJkeCi.jpg', '2022-02-17 11:43:34', '2022-02-17 11:43:34'),
(23, 11, 'products-imgs/BLawPd7O17iypjB7kdCzzfpaHpPWvuzTyPaDTqfD.jpg', '2022-02-17 11:43:50', '2022-02-17 11:43:50'),
(24, 12, 'products-imgs/JFHnh7Whh5nApjCgwaXamm8Uv6ULedzZFeKvAFNi.jpg', '2022-02-17 11:45:11', '2022-02-17 11:45:11'),
(25, 12, 'products-imgs/DZv8wgUAQpKwDLzm6zwVxWisz8lMXoJ7Kr5ZXKNk.jpg', '2022-02-17 11:45:11', '2022-02-17 11:45:11'),
(26, 13, 'products-imgs/VPVllkU0QUwY027MarneJ8OTqNyCSs8ChfSqXK1d.jpg', '2022-02-17 11:47:27', '2022-02-17 11:47:27'),
(27, 13, 'products-imgs/HchNRWxZtSNWpjA5uZkD8ZBqC0vmGkGTyvON97cH.jpg', '2022-02-17 11:47:27', '2022-02-17 11:47:27'),
(28, 14, 'products-imgs/owHRRQvpYvJdVeLtMSBNXaOYUMYEFoqmZ6dlcF8A.jpg', '2022-02-17 11:49:37', '2022-02-17 11:49:37'),
(29, 14, 'products-imgs/IOLX7MFjUPXwkIuwXgRREB5IuB5oHdA7DWD72A2s.jpg', '2022-02-17 11:49:37', '2022-02-17 11:49:37'),
(30, 15, 'products-imgs/ySYKHG2SxsHaK8zhqReT3YwjWg2433dLJkp9UoRm.jpg', '2022-02-17 11:50:45', '2022-02-17 11:50:45'),
(31, 15, 'products-imgs/siYadvH1rfhlrBSenbkmElGvwkjlh5ww6YQdZieN.jpg', '2022-02-17 11:50:45', '2022-02-17 11:50:45'),
(32, 16, 'products-imgs/kuKzl9u2i8s1QS69xmNNDsiK5cn7KBosSkzFM7Ek.jpg', '2022-02-17 12:04:25', '2022-02-17 12:04:25'),
(33, 17, 'products-imgs/YRzWr89Z68ZYmifyNlQFfRvisIZUNkU8E9CyP6mp.jpg', '2022-02-17 13:52:07', '2022-02-17 13:52:07'),
(34, 17, 'products-imgs/AmtLAhH09VswThMFaW3pcDxVY3JT7UosZA05CLU1.jpg', '2022-02-17 13:52:08', '2022-02-17 13:52:08'),
(35, 18, 'products-imgs/80f4knmCl0SKbiLKDHwZeLfEId62XXMAlhSaXM5a.jpg', '2022-02-17 13:54:05', '2022-02-17 13:54:05'),
(36, 18, 'products-imgs/eFENM6jY5UH1dTaiZvQ81Y3O0Cur7KwEprbdVunj.jpg', '2022-02-17 13:54:05', '2022-02-17 13:54:05'),
(37, 19, 'products-imgs/xwnQN52TOG9NaRznMTMmdUzW388488fXYMBkOeRi.jpg', '2022-02-17 13:55:55', '2022-02-17 13:55:55'),
(38, 19, 'products-imgs/w0uGfOo1VU73NWYCidueAXWcjyALa5HUH4GHGfrD.jpg', '2022-02-17 13:55:55', '2022-02-17 13:55:55'),
(39, 20, 'products-imgs/GoyxHDLaTutNRFHGjgMvx5GvfybcCEuR5FzwdoOV.jpg', '2022-02-17 13:57:40', '2022-02-17 13:57:40'),
(40, 20, 'products-imgs/bRwApmiBzKvMxkTf1IeGdLifFU2jxwq31TEBWlbn.jpg', '2022-02-17 13:57:41', '2022-02-17 13:57:41'),
(41, 21, 'products-imgs/KHYtXujQ5ndmhW4FHNJq0kvcDb9rXPw4quUr0W2t.jpg', '2022-02-17 13:59:29', '2022-02-17 13:59:29'),
(42, 21, 'products-imgs/ful1WfkSFtbMSmNR1rgg17wOdrie6W7X1oRA6e0W.jpg', '2022-02-17 13:59:29', '2022-02-17 13:59:29'),
(43, 22, 'products-imgs/6oDAEVCUJE5k4Red20ERGhVt8VQs62ucN4j7vxKT.jpg', '2022-02-17 14:01:33', '2022-02-17 14:01:33'),
(45, 23, 'products-imgs/xdudxb0avp8ADdcQ8WbVf0pav2i7Ee9mwWOfZJv6.jpg', '2022-02-17 14:03:33', '2022-02-17 14:03:33'),
(46, 23, 'products-imgs/yypkbCZbKMMILNF2RmdReIt4W7tKEIA12Os4QaPf.jpg', '2022-02-17 14:03:47', '2022-02-17 14:03:47'),
(48, 24, 'products-imgs/FldxYpNK2BSSwstD1lG9ikk2q9WQ1oGqWm7g5fch.jpg', '2022-02-17 14:06:16', '2022-02-17 14:06:16'),
(49, 24, 'products-imgs/GrWcBGgc2xViZ3aDjhd4DlgsmnofI6Bj6w1NKHHh.jpg', '2022-02-17 14:06:28', '2022-02-17 14:06:28'),
(50, 25, 'products-imgs/zDS0EVybVPvhKSzoZNFULMt3Ky4eecqZ3CMB8zQD.jpg', '2022-02-17 14:08:15', '2022-02-17 14:08:15'),
(51, 25, 'products-imgs/NTax5XcOBZMVTGZJjLIq63Vaf519Fn7kTZUkjdnt.jpg', '2022-02-17 14:08:15', '2022-02-17 14:08:15'),
(53, 26, 'products-imgs/Xqn0u6jfjUXXlDj6mtaAS2XUqRimiRYvP91d0pg3.jpg', '2022-02-17 14:09:43', '2022-02-17 14:09:43'),
(54, 26, 'products-imgs/vk73JISLUM4jv4Ohil4CvlwjylG1qpw542T7FrMW.jpg', '2022-02-17 14:09:57', '2022-02-17 14:09:57'),
(56, 27, 'products-imgs/unIvvxPafFK6zH9GETaQKdNsS0Wl76445x9gFQZE.jpg', '2022-02-17 14:13:29', '2022-02-17 14:13:29'),
(57, 27, 'products-imgs/9iMW6Y6RrUydf4CzJAKfJMep9YKHMGtMLU1dxqbw.jpg', '2022-02-17 14:13:42', '2022-02-17 14:13:42'),
(59, 2, 'products-imgs/DqkIdcBENlbbW1VTk5I5PzTq0W29vieEprgkrwBA.jpg', '2022-02-17 14:16:18', '2022-02-17 14:16:18'),
(60, 2, 'products-imgs/KPI948atyUPOH9DZtVvavsopggcxdW2qWe3WhtAJ.jpg', '2022-02-17 14:16:44', '2022-02-17 14:16:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_31_154930_create_sessions_table', 1),
(7, '2022_02_01_152738_create_addresses_table', 1),
(8, '2022_02_04_112518_create_orders_table', 1),
(9, '2022_02_04_112620_create_categories_table', 1),
(10, '2022_02_04_112621_create_products_table', 1),
(11, '2022_02_04_112706_create_orderlines_table', 1),
(12, '2022_02_04_181422_create_images_table', 1),
(13, '2022_02_09_162114_create_cart_lines_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orderlines`
--

DROP TABLE IF EXISTS `orderlines`;
CREATE TABLE `orderlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `descuento` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orderlines`
--

INSERT INTO `orderlines` (`id`, `order_id`, `product_id`, `cantidad`, `precio`, `descuento`, `created_at`, `updated_at`) VALUES
(1, 1, 16, 1, 593, 0, '2022-02-17 13:07:37', '2022-02-17 13:07:37'),
(2, 2, 15, 1, 200, 0, '2022-02-17 13:48:34', '2022-02-17 13:48:34'),
(3, 3, 25, 1, 242, 0, '2022-02-17 14:21:10', '2022-02-17 14:21:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, '2022-02-17 13:07:37', '2022-02-17 13:07:37'),
(2, 1, 6, '2022-02-17 13:48:34', '2022-02-17 13:48:34'),
(3, 1, 6, '2022-02-17 14:21:10', '2022-02-17 14:21:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibilidad` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `precio_base` double NOT NULL,
  `impuestos` double NOT NULL,
  `descuento` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `descripcion`, `visibilidad`, `cantidad`, `category_id`, `precio_base`, `impuestos`, `descuento`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 13', 'iPhone 13: Tu nuevo superpoder. Nuestro sistema de cámara dual más avanzado. El chip que hace morder el polvo a la competencia. Un subidón de autonomía que vaya si notarás. Ceramic Shield, más duro que cualquier vidrio de smartphone. Pantalla Super Retina XDR de 6,1 pulgadas. Diseño robusto con bordes planos y resistente al agua.', 1, 200, 1, 700.21, 21, 0, '2022-02-17 11:00:37', '2022-02-17 11:00:37'),
(2, 'Monitor', '¿Estás preparado para la verdadera competición? El monitor OMEN X 25f de 240 Hz con sincronización adaptable ha sido diseñado específicamente para los deportes electrónicos, con especificaciones que te proporcionan una ventaja casi injusta. Una ultrarrápida frecuencia de actualización de 240 Hz y un tiempo de respuesta de 1 ms hacen que tu ascenso a la cima sea mucho más fácil.', 1, 200, 1, 300, 21, 0, '2022-02-17 11:07:49', '2022-02-17 14:16:52'),
(3, 'Monitor FHD 15 pulgadas', '¿Estás preparado para la verdadera competición? El monitor OMEN X 25f de 240 Hz con sincronización adaptable ha sido diseñado específicamente para los deportes electrónicos, con especificaciones que te proporcionan una ventaja casi injusta. Una ultrarrápida frecuencia de actualización de 240 Hz y un tiempo de respuesta de 1 ms hacen que tu ascenso a la cima sea mucho más fácil.', 1, 200, 1, 300.21, 21, 0, '2022-02-17 11:15:23', '2022-02-17 11:15:23'),
(4, 'Microondas', 'Desde Origial presentamos el microondas ORIMICNG20FSW, el elemento indispensable que todo el mundo debe tener en casa. Calentar, descongelar o cocinar con un solo aparato compacto y que ocupe poco lo convierte, sin duda, en uno de los imprescindibles de tu cocina. Te guste o no cocinar sacarás todo el partido a tus alimentos de forma rápida y sencilla con los microondas de la serie infinityheat, ya sea en su versión essential o mirror.', 1, 200, 2, 60, 21, 0, '2022-02-17 11:28:04', '2022-02-17 11:28:04'),
(5, 'Cafetera de Espresso Roja', 'Tradición y modenidad se unen en un sorprendente diseño compacto, ofreciéndote la emoción de un delicioso espresso hecho con arte y pasión.\r\nCon Dedica prepararás un excelente Espresso y un cremoso Cappuccino con resultados de barista. Gracias a su filtro profesional podrás preparar hasta dos tazas simulataneamente.\r\nIncorpora doble bandeja de goteo, para tazas o vasos de distintos tamaños, y una bandeja recoge gotas extraíble con indicador de nivel de agua. Permite regular la temperatura del café, y su función Flow Stop para personalizar de forma automática el tamaño de su café. Su control es muy sencillo gracias al panel de control intuitivo con 3 botones iluminados, el indicador acústico de descalcificación, y el botón on-off con función Stand-by automática para ahorrar energía.', 1, 200, 2, 178, 21, 10, '2022-02-17 11:29:58', '2022-02-17 11:29:58'),
(6, 'Siemens WT47G439ES Secadora', 'Secadora Siemens WT47G439ES con bomba de calor y condensador autolimpiante, que se limpia solo y mantiene el consumo de energía constante durante la vida útil de la secadora. Tiempos de secado considerablemente más cortos que antes, seca hasta en 35 minutos más rápido. Clase de eficiencia energética A++.', 1, 211, 2, 593, 21, 0, '2022-02-17 11:34:14', '2022-02-17 11:34:14'),
(7, 'Rowenta Perfect Steam Pro', 'Este centro de planchado de gran potencia se convertirá en un imprescindible en tu casa. Conseguirás unos resultados de planchado perfectos gracias a su gran potencia de vapor: sus 6,9 bares de presión de vapor harán que las sesiones de planchado sean más cortas y ahorres tiempo, mientras que su golpe de vapor de 450 g/min se deshará con facilidad de las arrugas más rebeldes. La suela patentada Microsteam 400 HD Láser de este centro de planchado te proporcionará la mejor distribución de vapor del mercado (Con respecto al total de orificios de la superficie activa de las suelas de los 10 principales fabricantes en 2017) para maximizar la eficiencia de planchado.', 1, 356, 2, 199, 21, 0, '2022-02-17 11:36:43', '2022-02-17 11:36:43'),
(8, 'Cecotec Mambo', 'Cecotec Mambo 10070 es un robot de cocina multifunción con 30 funciones: trocea, pica, licua, tritura, sofríe, muele, pulveriza, ralla, recalienta, bate, yogurtera, monta, emulsiona, mezcla, cocina, remueve, cocina al vapor, escalfa, confita, amasa, cocina a baja temperatura, hierve, mantiene caliente, fermenta, SlowMambo, cocina con precisión grado a grado, cocina al baño maría, cocción lenta, velocidad cero y dispone de función Turbo.', 1, 356, 2, 223, 21, 0, '2022-02-17 11:39:05', '2022-02-17 11:39:05'),
(9, 'Olimpia Splendid Dolceclima Silent', 'El mejor equilibrio entre confort y silenciosidad con el aire acondicionado portátil Olimpia Splendid Dolceclima Silent S1 10 P.', 1, 200, 2, 369, 21, 0, '2022-02-17 11:40:07', '2022-02-17 11:40:07'),
(10, 'LED UltraHD 4K HDR10', 'Los televisores LG UHD superan sus expectativas en todo momento. Experimente una calidad de imagen realista y colores vivos con cuatro veces más precisión de píxeles que Full HD gracias al LG 43UP75006LF.', 1, 356, 1, 600, 21, 0, '2022-02-17 11:42:05', '2022-02-17 11:42:05'),
(11, 'Xiaomi Mi TV P1 32', 'Vida inteligente, visión ilimitada. Los nuevos televisores Xiaomi Mi TV P1 vienen en una variedad de opciones de tamaño de pantalla que van desde 55\", 50\", 43\", hasta un estándar de 32\".', 1, 356, 1, 178, 21, 0, '2022-02-17 11:43:34', '2022-02-17 11:43:34'),
(12, 'Kobo Clara HD eReader', 'El Kobo Clara HD es el compañero perfecto para cualquier amante de la lectura. Siempre proporciona la mejor luz de lectura, gracias a la ComfortLight PRO, y es garantía de una experiencia de lectura natural, como si se tratase de papel impreso, con su excepcional pantalla HD de 6?. Sus funciones fácilmente personalizables te ayudan a disfrutar de la lectura justo como más te gusta. Con 8 GB de memoria interna y capacidad para almacenar hasta 6000 eBooks, el Kobo Clara HD siempre tiene hueco para tu próxima aventura.', 1, 123, 1, 45, 21, 0, '2022-02-17 11:45:11', '2022-02-17 11:45:11'),
(13, 'Owlotech Soporte Televisión', 'Owlotech quiere hacerte la vida más cómoda gracias a otro increíble producto como este.  Un soporte en materiales de primera calidad que permite fijar televisores de 17 hasta 55 pulgadas, para que veas la televisión de una manera muy cómoda y en cualquier sitio sin necesidad de usar ninguna mesa o mueble de soporte, ya que es idóneo para casi cualquier tipo de pared. \r\n\r\nAdemás, viene con una guía rápida de instalación y tornillos tanto para sujetar la televisión al soporte como para sujetar la televisión a la pared, así no tendrás que comprar nada mas para hacer la instalación completa y poder disfrutar de su televisión cómodamente anclada a su pared.', 1, 123, 1, 60, 21, 0, '2022-02-17 11:47:27', '2022-02-17 11:47:27'),
(14, 'Realme Pad 10.4', 'realme Pad nació para que puedas imaginar y jugar sobre la marcha. Su exterior de metal sin costuras lo mantiene delgado y ligero como una pluma para una verdadera portabilidad. Colócalo en un bolso con facilidad, sostenlo durante horas sin fatiga y deleita tus ojos con su elegante aspecto minimalista.', 1, 123, 1, 300, 21, 0, '2022-02-17 11:49:36', '2022-02-17 11:49:36'),
(15, 'Lenovo Tab M10', 'Subiendo el listón de las tablets en todas partes. Con un cuerpo totalmente metálico y un diseño ultramoderno, la Tab M10 FHD Plus (2.ª generación) destaca entre la multitud. Su pantalla FHD de 26,16 cm (10,3\") y sus altavoces duales con Dolby Atmos® te ofrecen un entretenimiento realmente envolvente. Y con la estación de carga inteligente opcional, puedes gestionar tu hogar inteligente mediante el Asistente de Google. También puede optar por una funda en forma de libro para proteger tu dispositivo en los desplazamientos. En otras palabras, no es una tablet cualquiera.', 1, 122, 1, 200, 21, 0, '2022-02-17 11:50:45', '2022-02-17 13:48:34'),
(16, 'Apple iPad 2021', 'Potente, versátil y sencillísimo de usar.\r\n\r\nEl nuevo iPad está diseñado para que disfrutes como nunca de lo que te gusta. Trabaja, juega, crea, aprende, comunícate y mil cosas más.\r\n\r\nTodo por menos de lo que te imaginas', 1, 199, 1, 593, 21, 0, '2022-02-17 12:04:25', '2022-02-17 13:07:37'),
(17, 'Forgeon Solarian Cooler', 'Hoy traemos desde FORGEON el nuevo modelo de disipador Solarian Cooler 4 Pipes. Está disponible tanto en color blanco como negro y le proporciona a tu PC una potencia de disipación de 130W TDP gracias a sus 4 tubos y ventilador incluido. Con unas medidas de 158 mm x 122 mm x 76 mm hace que su instalación sea fácil y sencilla garantizando una total protección de tu procesador a una muy buena temperatura.', 1, 211, 1, 40, 21, 0, '2022-02-17 13:52:06', '2022-02-17 13:52:06'),
(18, 'Hiditec C12', 'Hoy traemos desde FORGEON el nuevo modelo de disipador Solarian Cooler 4 Pipes. Está disponible tanto en color blanco como negro y le proporciona a tu PC una potencia de disipación de 130W TDP gracias a sus 4 tubos y ventilador incluido. Con unas medidas de 158 mm x 122 mm x 76 mm hace que su instalación sea fácil y sencilla garantizando una total protección de tu procesador a una muy buena temperatura.', 1, 211, 1, 18, 10, 0, '2022-02-17 13:54:05', '2022-02-17 13:54:05'),
(19, 'HP AMD Ryzen 5', 'Permanece conectado a lo que más te importa gracias a una batería de larga duración y a un fino diseño de bisel con microborde. Diseñado para mantener la productividad y estar entretenido en cualquier parte, el portátil HP de 15,6\" cuenta con un rendimiento fiable y una amplia pantalla, para que puedas transmitir, navegar y completar tareas con rapidez.', 1, 211, 1, 453, 100, 0, '2022-02-17 13:55:55', '2022-02-17 13:55:55'),
(20, 'MSI GP76 Leopard', 'Prepárate para sentir todo el poder del juego con el potente ordenador portátil de MSI GP76 Leopard .\r\n\r\nDirectamente de la línea de sangre de la legendaria serie GP, llega una bestia rugiente con un diseño deportivo y un potente rendimiento. Con la nueva serie GP, eres el dueño del mundo gaming.', 1, 211, 1, 1580, 100, 0, '2022-02-17 13:57:40', '2022-02-17 13:57:40'),
(21, 'Redline Intel Celeron', 'Ordenador portátil Redline RL-1001SGS-CC con pantalla LCD de 15.6\" con resolución HD (1366 x 768 pixeles), sistema operativo Windows 10, procesador Intel Celeron N4020 (2,8GHz), capacidad 256GB, 8GB de RAM, WiFi, Bluetooth, USB y mini HDMI, cámara integrada 0.3 MP y batería de polímero de iones de litio 7,4 V/5000 mAh.', 1, 211, 1, 600, 100, 0, '2022-02-17 13:59:28', '2022-02-17 13:59:28'),
(22, 'Gigabyte AERO 15 OLED', 'AERO | El ordenador portátil para Creadores de Contenido número 1 - Recomendado por los principales profesionales de la industria.\r\n\r\nLa galardonada serie AERO de GIGABYTE ofrece a los profesionales un rendimiento sin concesiones. El contenido es clave en el mundo actual y los creadores merecen más que la potencia y la velocidad que ofrece una ordenador portátil gaming. La serie AERO ha sido diseñada para ofrecer estabilidad, renderizados de precisión y una excelente calibración de la gama de colores en un diseño potente a la vez que elegante. Ya sea editando en vivo o renderizado en 3D, editando fotos o diseño gráfico, la serie AERO es el mejor ordenador portátil para la edición de video y la solución perfecta para hacer frente a la gran carga del flujo de trabajo creativo actual.', 1, 356, 1, 2460, 21, 0, '2022-02-17 14:01:33', '2022-02-17 14:01:33'),
(23, 'MSI B560M PRO', 'La serie PRO ayuda a los usuarios a trabajar de forma más inteligente al ofrecer una experiencia eficiente y productiva. Con una funcionalidad estable y un ensamblaje de alta calidad, las placas base de la serie PRO brindan no solo flujos de trabajo profesionales optimizados, sino también menos resolución de problemas y longevidad.', 1, 456, 1, 80, 21, 0, '2022-02-17 14:03:33', '2022-02-17 14:03:33'),
(24, 'Blue Microphones Yeti Micrófono', 'Yeti es un micrófono USB óptimo, con un nítido y potente sonido con calidad de difusión para podcasts, producciones de YouTube, streaming de juegos, Skype y música. La tecnología patentada de tres cápsulas de Yeti posibilita que los patrones de captación cardioide, omnidireccional, bidireccional y estéreo ofrezcan una flexibilidad increíble que permite grabar y hacer streaming de formas que normalmente requerirían varios micrófonos.\r\n\r\nYeti dispone además de controles de estudio para el volumen de los auriculares, la selección de patrones, el silenciamiento instantáneo y la ganancia del micrófono que ponen en tus manos el proceso de grabación y streaming. Móntalo en unos segundos con la base de sobremesa incluida o conéctalo directamente a una base o brazo de micrófono.', 1, 211, 1, 100, 21, 0, '2022-02-17 14:06:15', '2022-02-17 14:06:28'),
(25, 'Nintendo Switch Azul', '¿Alguna vez has dejado un juego por falta de tiempo? La consola Nintendo Switch V2 puede transformarse para adaptarse a tu situación, de modo que puedes jugar a los juegos que tú quieras por muy ocupado que estés. Es una nueva era en la que no tienes que adaptar tu vida a los videojuegos: ahora es la consola la que se adapta a tu vida. Disfruta de tus juegos cuando quieras, donde quieras y como quieras con modos de juego flexibles.', 1, 210, 1, 242, 50, 0, '2022-02-17 14:08:15', '2022-02-17 14:21:10'),
(26, 'Nintendo Switch Lite Azul', 'Nintendo presenta Nintendo Switch Lite, un dispositivo enfocado al juego portátil ideal para los jugadores que no se están quietos. Nintendo Switch Lite es la nueva incorporación a la familia Nintendo Switch: se trata de una consola compacta y ligera que se puede llevar a cualquier sitio con facilidad.', 1, 200, 1, 197, 21, 0, '2022-02-17 14:09:43', '2022-02-17 14:09:57'),
(27, 'Microsoft Xbox Series S', 'Rendimiento de nueva generación en la Xbox más pequeña de la historia. La nueva generación de videojuegos ofrece nuestra biblioteca de lanzamientos digitales más grande a la Xbox más pequeña de la historia. Con mundos más dinámicos, tiempos de carga más rápidos y la adición de Xbox Game Pass (se vende por separado), la Xbox Series S totalmente digital es el mejor valor disponible en el mundo de los videojuegos.', 1, 211, 1, 140, 60, 0, '2022-02-17 14:13:28', '2022-02-17 14:13:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3WOxUCqkKi4FXkzAFqx8JRNW3PYMx3brSaK1UDX6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiajRHRDJiQnl3OHZHakxZUHVQVlB1V0U4VU44NEJMY3dMVXdqZHpLdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly90aWVuZGFvbmxpbmUudGVzdC9kaXJlY2Npb24vMS9lZGl0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1645105755),
('L6bhD8BlsExCEMNzvG5ud6DD1Xovj2azdYzEyFPb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:97.0) Gecko/20100101 Firefox/97.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNm9iNlUxTkdkcU9vcnhVMmNnUUtiTFdmVUp0OHVreFFtWkJFOFJSNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly90aWVuZGFvbmxpbmUudGVzdC9kaXJlY2Npb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGt2RGFicGU3TnluMWt1bE9Gd084b09Rc1N1eGZBb3dPaWhqaGN2Ny9uUEVlLmpaZm9UOVZHIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRrdkRhYnBlN055bjFrdWxPRndPOG9PUXNTdXhmQW93T2loamhjdjcvblBFZS5qWmZvVDlWRyI7fQ==', 1645106256),
('sKxvmGQiVQZyLLSkooEo9LffbLN9GIzQvbxO6dlN', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTEc3WEg1VGR0V1JUTDk2Y0ZlODBxQXBRTERuRnRWQzVlVUM5V0U1QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly90aWVuZGFvbmxpbmUudGVzdC9jYXRhbG9nby9jcmVhdGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAka3ZEYWJwZTdOeW4xa3VsT0Z3TzhvT1FzU3V4ZkFvd09paGpoY3Y3L25QRWUualpmb1Q5VkciO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGt2RGFicGU3TnluMWt1bE9Gd084b09Rc1N1eGZBb3dPaWhqaGN2Ny9uUEVlLmpaZm9UOVZHIjt9', 1645111302),
('Zp39Uhr9fXPtsiKNoFv1tkcKsYris9tOm5hvVMh5', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV25rMjkzemdyZjBZSXp0Q1NQamFlWmhmSTBzZHUzSE5Ya3hWZGh0bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90aWVuZGFvbmxpbmUudGVzdC9jYXRhbG9nby8yNyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQ2bUt6TUhPaVc1RHZaZ1N4bGY5VzF1NVM5YlhsWFlFUGFTZzdmdkJaZFY1bVVUUmxsQVBGSyI7fQ==', 1645113947);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nif`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `profile_photo_path`, `rol`, `remember_token`, `current_team_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '12345678D', '$2y$10$kvDabpe7Nyn1kulOFwO8oOQsSuxfAowOihjhcv7/nPEe.jZfoT9VG', NULL, NULL, NULL, 'administrador', NULL, NULL, '2022-02-17 10:57:29', '2022-02-17 10:57:29'),
(2, 'usuario', 'usuario@usuario.com', '54856975S', '$2y$10$6mKzMHOiW5DvZgSxlf9W1u5S9bXlXYEPaSg7fvBZdV5mUTRllAPFK', NULL, NULL, NULL, 'user', NULL, NULL, '2022-02-17 15:05:44', '2022-02-17 15:05:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `cart_lines`
--
ALTER TABLE `cart_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_lines_user_id_foreign` (`user_id`),
  ADD KEY `cart_lines_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orderlines`
--
ALTER TABLE `orderlines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderlines_order_id_foreign` (`order_id`),
  ADD KEY `orderlines_product_id_foreign` (`product_id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `cart_lines`
--
ALTER TABLE `cart_lines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `orderlines`
--
ALTER TABLE `orderlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `cart_lines`
--
ALTER TABLE `cart_lines`
  ADD CONSTRAINT `cart_lines_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_lines_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `orderlines`
--
ALTER TABLE `orderlines`
  ADD CONSTRAINT `orderlines_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderlines_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
