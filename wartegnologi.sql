-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2022 at 05:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wartegnologi`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `merek` varchar(199) NOT NULL,
  `name` varchar(199) NOT NULL,
  `email` varchar(199) NOT NULL,
  `alamat` varchar(199) NOT NULL,
  `nomor` varchar(199) NOT NULL,
  `catatan` varchar(199) NOT NULL,
  `bayar` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `merek`, `name`, `email`, `alamat`, `nomor`, `catatan`, `bayar`) VALUES
(17, 'HP Omen 15-ek0044TX', 'administrator', 'admin@gmail.com', 'wonogiri', '081385078633', 'lempar depan rumah', 'warteg.png'),
(18, 'Macbook Pro 2020 13 M1', 'user', 'user@gmail.com', 'bekasi', '0814354315', 'lempar atas rumah', 'Selection_001.png'),
(19, 'HP Omen 15-ek0044TX', 'user', 'user@gmail.com', 'wonogiri', '081385078633', 'lempar depan rumah', 'Selection_001.png'),
(20, 'Razer Blade 14', 'administrator', 'admin@gmail.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `merek` varchar(199) NOT NULL,
  `typeProduk` varchar(199) NOT NULL,
  `prosesor` varchar(199) NOT NULL,
  `storage` varchar(199) NOT NULL,
  `ram` varchar(199) NOT NULL,
  `layar` varchar(199) NOT NULL,
  `gpu` varchar(199) NOT NULL,
  `fitur` varchar(199) NOT NULL,
  `harga` varchar(199) NOT NULL,
  `img` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `merek`, `typeProduk`, `prosesor`, `storage`, `ram`, `layar`, `gpu`, `fitur`, `harga`, `img`) VALUES
(12, 'Acer', 'Swift 1 SF114', 'INTEL Pentium Silver N6000', '512GB SSD NVMe', '4GB DDR4', '1920X1080 14 inch', 'Intel UHD Graphics', 'Wifi 6, FingerPrint, LED Backlight keyboard', '6.109.000', 'Acer Swift 1 SF114-34a.png'),
(13, 'Acer', 'Aspire 5 A515', 'AMD Ryzen™ 5-5500U', '512GB SSD NVMe', '8GB DDR4', '1366x768 15.6 inch', 'AMD Radeon Graphics', 'Windows 10 Home+OHS 2019', '8.799.000', 'Acer Aspire 5 A515 45a.png'),
(14, 'Acer', 'Nitro 5 AN515', 'AMD Ryzen™ 5 4600H', '512GB SSD NVMe', '8GB DDR4', '1920x1080 15.6 inch LED IPS 144Hz', 'NVIDIA® GeForce® GTX 1650Ti with 4GB of GDDR6', 'Refresh Rate 144Hz. Dual Slot NVMe, RGB', '12.595.000', 'Acer Nitro 5 AN515-44-R2Z0a.png'),
(15, 'Razer', 'Book 13', 'Intel® Core® i7-1165G7', '512GB PCIe M.2 NVMe', '16GB DDR4', '3840 x 2100 13.4 inch UHD+ Touch', 'Intel® Iris Xe', 'Thunderbolt 4, Intel Evo Certified, Touch', '38.900.542', 'Razer book 13d .png'),
(16, 'Razer', 'Blade 14', 'AMD Ryzen™ 9 5900HX', '1TB SSD NVMe', '16GB DDR4', '14 inch QHD 165Hz', 'NVIDIA GeForce RTX 3070', 'Refresh Rate 165Hz, THX Spatial Audio', '31.806.355', 'Razer Blade 14 2021a.png'),
(17, 'Razer', 'Blade 15', 'Intel® Core® i7-10750H', '512GB SSD NVMe PCIe Gen3', '16GB DDR4', '15.6 inch 4K OLED', 'NVIDIA GeForce RTX 2070 Max-Q', 'Thunderbolt 3', '26.023.355', 'Razer Blade 15c.png'),
(18, 'Dell', 'G3 15-3579', 'Intel Core i7', '2 TB 5400RPM', '4 GB', '15,6 inci', 'Nvidia GeForce GTX 1050Ti', 'Wifi, Fingerprint, Fast Charging & Anti-glare Display', '11.479.000', 'Dell G3 15-3579.png'),
(19, 'Dell', 'Alienware 17 R4', 'Intel core i7-7700HQ Kabylake 2.8GHz', 'HDD 1 TB', '16 GB', '17,3 inch', 'Nvidia Gefore GTX 1070 8GB', 'Wifi & RGB Backlit', '29.900.000', 'Dell Alienware 17 R4.png'),
(20, 'Dell', 'Inspiron 13-7386 2-in-1', 'Intel® Core™ i7-8565U', '512 SSD', '8 GB, 16 GB', '13,3 inci', 'Wifi AC, Anti-Glare Display & 2 Stereo Speaker', 'Wifi AC, Anti-Glare Display & 2 Stereo Speaker', '15.499.000', 'Dell Inspiron 13-7386 2-in-1.png'),
(21, 'Lenovo', 'Yoga Duet 7i', 'Intel Core i7-10510U', '512 SSD NVMe', '16 GB', '13 inci', 'Intel UHD Graphics', 'Wifi 6, 2 x Dolby Audio™ Speakers', '18.099.000', 'Lenovo Yoga Duet 7i.png'),
(22, 'Lenovo', 'thinkpad Yoga X1 Carbon (5th Gen)', 'Intel Core Pro i7-7600U', '512 SSD NVMe', '16 GB', '14 inci', 'Intel HD Graphics 620', 'WiFi 2 x 2 AC, Dolby Premium, NFC & Fingerprint', '19.299.000', 'Lenovo Thinkpad Yoga X1 Carbon (5th Gen).png'),
(23, 'Lenovo', 'Yoga 6 13ARE05', 'AMD Ryzen 5 PRO 4650U', '512 SSD NVMe', '16 GB', '13,3 inci', 'Integrated AMD Radeon Graphics', 'WiFi, Backlit Keyboard & Fingerprint', '14.458.000', 'Lenovo Yoga 6 13ARE05.png'),
(24, 'Microsoft', 'Surface Go', 'Intel Pentium Gold Processor 4415Y Cache 2 M', '128GB SSD3', '8GB RAM', '10 inch', 'Intel® HD Graphics 615', 'Wifi 6, Fingerprint, Fast Charging & Backlight', '7.999.000', 'Microsoft Surface GO.png'),
(25, 'Microsoft', 'Surface Pro 7', 'Intel core i7 10th Gen', '512GB SSD', '16GB DDR4', '12.3 inch', 'Intel Iris Plus Graphics', 'Wifi 6, Fingerprint, Fast Charging & Backlight', '22.035.000', 'Microsoft Surface Pro 7.png'),
(26, 'Microsoft', 'Surface Pro 6', 'Intel Core i5 8th Gen', '128GB SSD', '8GB LPPDR3', '12.3 inch', 'Intel® UHD Graphics 620', 'Wifi 6, Fingerprint, Fast Charging & Backlight', '11.766.000', 'Microsoft Surface Pro 6.png'),
(27, 'HP', 'Omen 15-ek0044TX', 'Intel core i7 -10750H 10th Gen', '1TB PCIe NVMe M.2 SSD', '16GB DDR4', '15.6 inch', 'NVIDIA® GeForce® RTX 2060 6GB', 'Wifi 6, Fast Charging & Backlight RGB', '24.000.000', 'HP Omen 15-ek0044TX.png'),
(28, 'HP', 'ENVY x360 13-ay0005au', 'AMD Ryzen™ 5 4500U', '512 GB PCIe® NVMe™ M.2 SSD', '8 GB DDR4', '13.3 inch', 'AMD Radeon™ Graphics', 'Wifi 6, Fingerprint, Fast Charging & Backlight', '15.999.000', 'HP ENVY x360 13-ay0005au.png'),
(29, 'HP', 'Pavilion Gaming 15-ec2047AX', 'AMD Ryzen 5 5600H 4.2 GHz', '512 GB PCIe NVMe M.2 SSD', '16 GB DDR4-3200 MHz ', '15.6 inci 1920 x 1080), 144 Hz', 'NVIDIA GeForce GTX 1650', 'Windows 10 Home + Office Home and Student 2019', '13.870.000', 'HP Pavilion Gaming 15-EC1077AX.png'),
(30, 'Macbook', 'Pro 2020 13 M1', 'M1 Chip 8 Core', '256GB SSD storage', '8GB unified memory', '13-inch Retina ', '16-core Neural Engine', 'Two Thunderbolt / USB 4 ports, Touch Bar and Touch ID', '17.799.000', 'MacBook Pro  13 (M1 2020.png'),
(31, 'Macbook', '12', 'Intel M 1,1ghz', 'SSD 256', '8GB', ' 12inc retina', 'Intel UHD Graphics', 'wifi webcam bluetooth', '9.500.000', 'MacBook 12 (Early 2016).png'),
(32, 'Macbook ', 'Air 13 M1 2020', 'M1 Chip 8 Core', '256GB SSD', '8GB unified memory', '13 inch Retina display', '16‑core Neural Engine', 'Touch ID Force Touch trackpad Two Thunderbolt / USB 4 ports', '15.099.000', 'MacBook Air 13 M1 2020.png'),
(33, 'Toshiba', 'portege z30E', 'Core i5 4300u ', '256GB SSD', '8GB', '13.3 inch', 'VGA INTEL HD', 'WiFi HDMI', '3.899.000', 'Toshiba portege z30E.png'),
(34, 'Toshiba', 'Tecra A40-D128', 'i3 7100U', '256GB SSD', '4GB', '14.0 inci  TFT display', 'VGA Intel HD Graphics 620', 'Camera Built-in HD Web Camera with Dual', '7.700.000', 'Tecra A40-D128.png'),
(35, 'Toshiba', 'Satellite L50T', 'Intel Core i5  i5-5200U.', '500GB HDD', '4 GB', '15.6 inch', 'AMD Radeon R7 M260', '15.6 inch', '8.101.000', 'Satellite L50T B1779.png'),
(36, 'MSI ', 'GT76 Titan DT 10SGS', 'Intel Core i9-10900K', '64GB', '64GB DDR4', '17.3\" UHD', 'GeForce RTX 2080S 8GB DDR6', 'Killer Wi-Fi 6 AX1650', '74.799.120', 'MSI GT76 Titan DT 10SGS.png'),
(37, 'MSI ', 'GS76 Stealth', 'Intel® Core™ i9 Processor', '4TB SSD', '32GB DDR4, 3200 MHz', '17.3\" FHD (1920 x 1080), IPS-Level', 'NVIDIA® GeForce® RTX 3080', 'Refresh Rate 360Hz, RGB, 2 Front-Firing Speakers', '44.974.702', 'MSI GS76 Stealth.png'),
(38, 'MSI ', 'GE76 Dragon Tiamat 10UH', 'Intel® Core™ i9 Processor', '2TB', '32GB DDR4, 3200 MHz', '17.3\" FHD (1920 x 1080), IPS-Level', 'NVIDIA® GeForce® RTX 3080', 'Refresh Rate 300Hz, RGB, 2x M.2 SSD slot', '79.999.000', 'MSI GT76 Titan DT 10SGS.png'),
(39, 'Asus ', 'VivoBook Ultra A412', 'Intel® Core™ i3, Intel® Core™ i5', '512GB M.2 SSD', '8GB DDR4', '14\" Full HD (1920x1080)', 'NVIDIA® GeForce® MX250', 'Intel UHD Graphics 620, USB 3.1 Type-C, M.2 SSD', '13.799.000', 'Asus VivoBook Ultra A412.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'administrator', 'admin@gmail.com', 'default.png', '$2y$10$ZYo1ntnCQHg/HPCdx2jO/uMrqLsB.sgjWOoLAQ4QjQF97ifh4sCtK', 1, 1, 1640612525),
(8, 'user', 'user@gmail.com', 'default.png', '$2y$10$V4KEEBUawh2DBqDmSGE6mOjOUgZ.XkI1wxPW53tVnCqN7SpmJT3nW', 2, 1, 1640787826),
(9, 'ahmad', 'ahmad@gmail.com', 'default.png', '$2y$10$A7ObV119QhivnX1wTl.Go.utv3hqaHrjCoQrOJCDWA7mQU65/327K', 2, 1, 1642563332);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(9, 1, 3),
(10, 1, 2),
(12, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 1, 'Produk', 'menu/produk', 'fas fa-fw fa-shopping-bag', 1),
(5, 3, 'Menu Manajement', 'menu', 'fas fa-fw fa-folder-open', 1),
(6, 3, 'Submenu Manajement', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-users-cog', 1),
(9, 1, 'Pembeli', 'menu/pembeli', 'fas fa-fw fa-store', 1),
(10, 2, 'Pembelian', 'user/pesanan', 'fas fa-fw fa-shopping-cart', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
