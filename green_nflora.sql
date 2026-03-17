-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2026 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_nflora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `address` varchar(255) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `customer_name`, `customer_email`, `quantity`, `order_date`, `address`, `total_price`) VALUES
(1, 14, 'John', 'John@gmail.com', 1, '2026-02-22 04:04:15', 'Colombo', 7000.00),
(2, 26, 'Jane', 'Jane@gmail.com', 2, '2026-02-22 04:07:14', 'Homagama', 16400.00),
(3, 15, 'Smith', 'Smith@gmail.com', 2, '2026-02-22 04:11:52', 'Homagama', 9000.00);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `description`, `price`, `image`) VALUES
(1, 'Silver Petal Symphony', 'Anniversary', 'Elegant White Roses Bouquet Arranged To Celebrate Happy Moments Together', 7500.00, 'images/anniversary.jpg'),
(2, 'Forever & Always Bouquet', 'Anniversary', 'Classic Red Roses Bouquet That Speak The Language Of Eternal Love', 8900.00, 'images/anniversary2.jpg'),
(3, 'Golden Love Bloom', 'Anniversary', 'Vibrant Yellow Roses Bouquet To Celebrate Happiness, Friendship, & Cherished Moments Together', 13000.00, 'images/anniversary3.jpg'),
(4, 'Ever After Elegance', 'Anniversary', 'Graceful Pink & White Tulips In a Stunning, Elegant Arrangement.', 4500.00, 'images/anniversary4.jpg'),
(5, 'Heart Petals', 'Anniversary', 'Red Roses In a Heart Design, Crafted To Make Your Love Unforgettable', 9700.00, 'images/anniversary5.jpg'),
(6, 'Forever Flowers', 'Anniversary', 'A Delicate Mix Of Light Pink, Purple, & White Blooms In a Charming, Elegant Arrangement.', 5200.00, 'images/anniversary6.jpg'),
(7, 'Sweet Anniversary', 'Anniversary', 'A Beautiful Blend Of Red & White Roses, Perfect For Celebrating a Special Anniversary', 8000.00, 'images/anniversary7.jpg'),
(8, 'Blush of Forever Bouquet', 'Anniversary', 'Pink & White Roses Bouquet Arranged Beautifully For a Charming & Elegant Gift', 8400.00, 'images/anniversary8.jpg'),
(9, 'Happy Moments', 'Anniversary', 'Cheerful Sunflowers & Yellow Roses Combined In a Bright, Joyful Bouquet', 4200.00, 'images/anniversary9.jpg'),
(10, 'Everlasting Bloom', 'Anniversary', 'Delicate Pink & White Tulips Arranged In a Graceful & Elegant Bouquet', 5000.00, 'images/anniversary10.jpg'),
(11, 'Promise Of Love', 'Anniversary', 'A Romantic Blend Of Pink & Red Roses, Beautifully Arranged To Express Love & Devotion', 8000.00, 'images/anniversary11.jpg'),
(12, 'Bliss Bouquet', 'Anniversary', 'Delicate Pink, Purple, & White Flowers Arranged In a Joyful, Elegant Bouquet', 4800.00, 'images/anniversary12.jpg'),
(13, 'Golden Achievement Bouquet', 'Graduation', 'Bright Sunflowers Arranged In a Cheerful Bouquet, Perfect For Celebrating Success', 7500.00, 'images/graduation1.jpg'),
(14, 'Victory Blossom Wrap', 'Graduation', 'A Delightful Mix Of Pink & White Chrysanthemums Paired With a Cute Teddy Bear', 7000.00, 'images/graduation2.jpg'),
(15, 'Proud Graduate Petals', 'Graduation', 'Fresh White & Green Blooms Arranged In a Stylish Bouquet, Perfect For Honoring Graduation Success', 4500.00, 'images/graduation3.jpg'),
(16, 'Next Step Elegance', 'Graduation', 'A Graceful Bouquet Of Pink & White Peonies & Roses, Celebrating New Beginnings & Achievements', 6000.00, 'images/graduation4.jpg'),
(17, 'Happy Graduation', 'Graduation', 'A Cheerful Bouquet Of Roses & Chrysanthemums Paired With a Cute Teddy Bear', 5300.00, 'images/graduation5.jpg'),
(18, 'Success Sparkle Bouque', 'Graduation', 'Bouquet Featuring Soft Pink & Pure White Roses Acented With Delicate Purple Blooms', 7450.00, 'images/graduation6.jpg'),
(19, 'Proud Moment Bouquet', 'Graduation', 'Elegant Pink Lilies & Roses Combined In a Stunning Bouquet, Perfect For Celebrating Graduation Achievements', 4000.00, 'images/graduation7.jpg'),
(20, 'Milestone Magic Bouquet', 'Graduation', 'A Beautiful Mix Of Pink & White Blooms, Crafted To Celebrate Graduation Milestones In Style', 8000.00, 'images/graduation8.jpg'),
(21, 'Cap & Crown Blooms', 'Graduation', 'A Vibrant Mix Of Pink, White, & Red Roses, Perfect For Celebrating Graduation Achievements With Elegance', 6700.00, 'images/graduation9.jpg'),
(22, 'Glory Garden Bouquet', 'Graduation', 'A Graceful Mix Of White Lilies, Light Pink Roses, & Purple Blooms, Perfect For Honoring Graduation Success', 4550.00, 'images/graduation10.jpg'),
(23, 'Blossoms of Success', 'Graduation', 'Soft-Colored Roses & a Light Yellow Hydrangea Paired With a Cute Teddy Bear', 3700.00, 'images/graduation11.jpg'),
(24, 'Celebration Bloom Bouquet', 'Graduation', 'Delicate Light Pink Flowers Arranged In an Elegant Bouquet, Perfect For Celebrating Graduation', 5400.00, 'images/graduation12.jpg'),
(25, 'Elegant Petal Podium', 'Decor', 'A Graceful Arrangement Of Blue & Pink Blooms, Designed To Add Charm & Elegance To Any Podium Setting', 7400.00, 'images/decoration1.jpg'),
(26, 'Classic Rose Podium', 'Decor', 'A Refined Arrangement Of Roses & Complementary Blooms, Perfect For Enhancing Any Podium With Timeless Elegance', 8200.00, 'images/decoration2.jpg'),
(27, 'Golden Stem Podium', 'Decor', 'A Vibrant Arrangement Of Sunflowers & Yellow Blooms, Designed To Brighten & Elevate Any Podium Setting', 7000.00, 'images/decoration3.jpg'),
(28, 'Blossom Edge Decor', 'Decor', 'A Striking Blend Of Red & White Roses, Crafted To Add Elegance & Charm To Any Stage Setting', 16000.00, 'images/decoration4.jpg'),
(29, 'Grand Petal Arrangement', 'Decor', 'A Stunning Blend Of White & Soft Pink Blooms, Beautifully Designed To Create an Elegant & Welcoming Arch Entrance', 20000.00, 'images/decoration5.jpg'),
(30, 'Golden Petal Arrangement', 'Decor', 'A Radiant Mix Of Yellow & White Roses, Elegantly Arranged To Enhance Any Stage With Charm ', 15000.00, 'images/decoration6.jpg'),
(31, 'Royal Bloom Podium', 'Decor', 'An Elegant Arrangement Of White Lilies & Soft Pink Blooms, Designed To Add a Refined Touch To Any Podium Setting', 8000.00, 'images/decoration7.jpg'),
(32, 'Velvet Petal Podium', 'Decor', 'A Luxurious Blend Of Anthuriums, Gerberas, Lilies, & Roses Beautifully Arranged To Elevate Any Podium With Elegance', 6300.00, 'images/decoration8.jpg'),
(33, 'Ivory Garden Podium', 'Decor', 'A Stunning Mix Of Orchids, Gerberas, Lilies, & Green Accents, Crafted To Add Elegance To Any Podium', 5700.00, 'images/decoration9.jpg'),
(34, 'Celestial Flame Decor', 'Decor', 'A Dreamy Blend Of Hydrangeas & Roses, Gently Illuminated by Warm Candlelight For an Enchanting Table Centerpiece', 8500.00, 'images/decoration10.jpg'),
(35, 'Prosperity Petal Ring', 'Decor', 'A Radiant Circle Of Lush Peonies Paired With Elegant Hanging Candles, Perfect For Adding Charm & Grace To Lamp Lighting Ceremony', 5500.00, 'images/decoration11.jpg'),
(36, 'Everlasting Blossom Stands', 'Decor', 'A Stunning Display Of Pink & White Roses With Complementary Blooms, Elegantly Arranged on Stands To Bring Timeless Beauty To Any Event', 17400.00, 'images/decoration12.jpg'),
(37, 'Birthday Bliss Bouquet', 'Birthday', 'A Beautiful Blend Of White Lilies & Soft Pink & White Roses, Perfect For Celebrating a Special Birthday.', 5900.00, 'images/birthday01.jpg'),
(38, 'Sweet Surprise', 'Birthday', 'A Combination Of Vibrant Red Roses & Delicious Kinder Chocolates, Perfect For Making Any Birthday Extra Special', 8700.00, 'images/birthday02.jpg'),
(39, 'Happiness in Bloom', 'Birthday', 'A Charming Blend Of Pink & White Roses, Lilies & Orchids, Beautifully Arranged To Make Any Birthday Extra Special', 8000.00, 'images/birthday03.jpg'),
(40, 'Twinkle Tulips', 'Birthday', 'A Lovely Mix Of Pink & White Lilies, Arranged To Add Charm & Joy To Any Birthday Celebration', 4500.00, 'images/birthday04.jpg'),
(41, 'Ocean Petals', 'Birthday', 'A Blend Of Blue & White Blooms, Beautifully Arranged To Bring a Cool & Elegant Touch To Any Birthday Celebration', 6000.00, 'images/birthday05.jpg'),
(42, 'Bloomy Bear', 'Birthday', 'A Mix Of Red Roses & Purple Chrysanthemums Paired With a Cute Teddy Bear, Perfect For a Sweet Birthday Surprise', 5200.00, 'images/birthday06.jpg'),
(43, 'Rosy Celebration', 'Birthday', 'A Vibrant Blend Of Red & Pink Roses, Beautifully Arranged To Brighten Any Birthday Celebration', 9000.00, 'images/birthday07.jpg'),
(44, 'Golden Glow', 'Birthday', 'Bright Sunflowers & Elegant White Roses Combined In a Radiant Bouquet, Perfect For Celebrating a Special Birthday', 7000.00, 'images/birthday08.jpg'),
(45, 'Enchanted Bloom', 'Birthday', 'A Bouquet Of Soft, Light-Colored Blooms, Perfect For Adding Delicate & Joyful Touch To Any Birthday Celebration', 11500.00, 'images/birthday09.jpg'),
(46, 'Royal Petals', 'Birthday', 'A Mix Of Light Pink Orchids, Roses, & Chrysanthemums Arranged To Make Any Birthday Celebration Extra Special', 6300.00, 'images/birthday10.jpg'),
(47, 'Sparkle Petals', 'Birthday', 'A Soft & Elegant Mix Of Light-Colored Roses, Peonies & Tulips, Arranged To Brighten Any Birthday Celebration', 7500.00, 'images/birthday11.jpg'),
(48, 'Happy Petal Surprise', 'Birthday', 'A Cheerful Bouquet Of Light & Dark Pink Roses, Perfectly Arranged To Bring Joy & Smiles On Any Birthday', 15000.00, 'images/birthday12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
