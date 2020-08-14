-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 10:56 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allphptricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `the gt road`
--

CREATE TABLE `the gt road` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `the gt road`
--

INSERT INTO `the gt road` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Special Drinks', 'specialdrinks01', 7.79, 'images/img-01new.jpg'),
(2, 'Special Drinks', 'specialdrinks02', 9.79, 'images/img-02new.jpg'),
(3, 'Special Drinks', 'specialdrinks03', 10.79, 'images/img-03new.jpg'),
(4, 'Special Lunch', 'specialdrinks04', 15.00, 'images/img-04new.jpg'),
(5, 'Special Lunch', 'specialdrinks05', 18.00, 'images/img-05new.jpg'),
(6, 'Special Lunch', 'specialdrinks06', 100.79, 'images/img-06new.jpg'),
(7, 'Special Dinner', 'specialdrinks07', 18.00, 'images/img-07new.jpg'),
(8, 'Special Dinner', 'specialdrinks08', 17.00, 'images/img-08new.jpg'),
(9, 'Special Dinner', 'specialdrinks09', 10.79, 'images/img-09new.jpg'),
(10, 'Indian Aloo Paratha', 'IndianAlooParatha', 10.79, 'images/indian/i_1new.jpg'),
(11, 'Indian Golgappa', 'Indiangolgappa', 22.79, 'images/img-01new.jpg'),
(12, 'Indian Burger', 'Indianburger', 24.79, 'images/indian/i_3new.jpg'),
(13, 'Indian chicken wings', 'Indianchickenwings', 24.79, 'images/indian/i_6new.jpg'),
(14, 'Special Indian Gulab Jamun', 'Indiangulabjamun', 24.79, 'images/indian/i_7new.jpg'),
(15, 'Special Indian misal Pav', 'Indianmisalpav', 30.00, 'images/img-08new.jpg'),
(16, 'Special chinese veg-rice', 'chinesevegrice', 10.79, 'images/chinese/c1new.jpg'),
(17, 'chinese Gobi-manturian', 'chinesegobimanturian', 22.79, 'images/chinese/c2new.jpg'),
(18, 'Chinese saga Gobi-manturian', 'chinesesagagobi', 9.79, 'images/chinese/c3new.jpg'),
(19, 'Special chinese maggi', 'chinesemaggi', 10.79, 'images/chinese/c4new.jpg'),
(20, 'Chicken-tripple-noodles', 'chinesetripplenoodles', 22.79, 'images/chinese/c5new.jpg'),
(21, 'Special bijing-noodles', 'chinesebijingnoodles', 25.79, 'images/chinese/c2new.jpg'),
(22, 'Special Indian sejwan-Bhaji', 'indian1', 25.79, 'images/starter/s1new.jpg'),
(23, 'Special chocklate milk cake', 'indian2', 22.79, 'images/starter/s2new.jpg'),
(24, 'Special strawberry cake', 'indian3', 24.79, 'images/starter/s3new.jpg'),
(25, 'Special vanila pestry', 'indian4', 24.79, 'images/starter/s4new.jpg'),
(26, 'Special Cup cake', 'indian5', 23.79, 'images/starter/s5new.jpg'),
(27, 'Special coco-cakke', 'indian6', 24.79, 'images/starter/s6new.jpg'),
(28, 'Special chocklate slice cake', 'indian7', 24.79, 'images/starter/s7new.jpg'),
(29, 'Special chilli soop', 'indian8', 37.79, 'images/starter/s8new.jpg'),
(30, 'Special Barbiq', 'indian9', 45.00, 'images/starter/s9new.jpg'),
(31, 'Special Cup cherry', 'indian10', 60.00, 'images/starter/s10new.jpg'),
(33, 'mutton kolhapuri thali', 'maharashtra0', 120.00, 'images/restaurants/delhi_images/rest3/indian/maharashtrian/maharashtra muttton kolhapuri thali 7new.jpg'),
(34, 'Special maharashtra puranpoli', 'maharashtra2', 150.00, 'images/restaurants/delhi_images/rest3/indian/maharashtrian/maharashtra puranpoli7new.jpg'),
(35, ' maharashtra varan bhat', 'maharashtra3', 80.00, 'images/restaurants/delhi_images/rest3/indian/maharashtrian/maharashtra varan bhat7new.jpg'),
(36, 'maharashtra.zunkabhakar', 'maharashtra4', 50.00, 'images/restaurants/delhi_images/rest3/indian/maharashtrian/maharashtra.zunkabhakar7new.jpg'),
(37, 'Special Panjabi DalMakhni', 'punjabi1', 100.00, 'images\\restaurants\\delhi_images\\rest3\\indian\\punjabi\\punjabi.dal makhni5new.jpg'),
(38, 'Special Panjabi Aloo paratha', 'punjabi2', 120.00, 'images/restaurants/delhi_images/rest3/indian/punjabi/punjabi.aloo paratha4new.jpg'),
(39, 'Special Punjabi Chanamasala', 'punjabi3', 120.00, 'images/restaurants/delhi_images/rest3/indian/punjabi/punjabi.chanamasala5new.jpg'),
(40, 'Special Panjabi Rajmamasala', 'punjabi4', 200.00, 'images/restaurants/delhi_images/rest3/indian/punjabi/punjabi.rajmamasala5new.jpg'),
(41, 'Special gujrati methi thepla', 'gujrati1', 60.00, 'images/restaurants/delhi_images/rest3/indian/gujrati/gujratimethitheplanew.jpg'),
(42, 'Special gujrati undhiyu', 'gujrati2', 90.00, 'images/restaurants/delhi_images/rest3/indian/gujrati/gujratiundhiyunew.jpg'),
(43, 'Special chinese chicken needles', 'chinese1', 97.79, 'images/restaurants/delhi_images/rest3/chinese/noodles/chicken noodlesnew.jpg'),
(44, 'Special chinese egg noodles', 'chinese2', 90.79, 'images/restaurants/delhi_images/rest3/chinese/noodles/egg noodlesnew.jpg'),
(45, 'Special chinese paneer noodes', 'chinese3', 100.00, 'images/restaurants/delhi_images/rest3/chinese/noodles/paneer noodlesnew.jpg'),
(46, 'Special chinese chickenrice', 'chinese4', 150.00, 'images/restaurants/delhi_images/rest3/chinese/rice/chinese.chikeniiirice6new.jpg'),
(47, 'Special chinese egg rice', 'chinese5', 89.79, 'images/restaurants/delhi_images/rest3/chinese/rice/chinese.egg rice6new.jpg'),
(48, 'Special chinese hongkong rice', 'chinese6', 100.00, 'images/restaurants/delhi_images/rest3/chinese/rice/chinese.hongkong rice6new.jpg'),
(49, 'Special schezwan fried rice', 'chinese7', 87.79, 'images/restaurants/delhi_images/rest3/chinese/rice/schezwan fried ricenew.jpg'),
(50, 'Special Cube Steak', 'american1', 87.79, 'images/restaurants/delhi_images/rest3/american/main_course/Reuben sandwichnew.jpg'),
(51, 'Falafel curry with spinach', 'american2', 78.00, 'images/restaurants/delhi_images/rest3/american/main_course/Tomato, Spinach, and Fetanew.jpg'),
(52, 'Special Mushroom Gravy', 'american3', 130.00, 'images/restaurants/delhi_images/rest3/american/main_course/Spiced shakshukanew.jpg'),
(53, 'Special Onion Beef Gravy', 'american4', 50.79, 'images/restaurants/delhi_images/rest3/american/main_course/salmon rostinew.jpg'),
(54, 'Special fig and almond salad', 'american5', 70.00, 'images/restaurants/delhi_images/rest3/american/salad/mushroom broccoli saladnew.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `the gt road`
--
ALTER TABLE `the gt road`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `the gt road`
--
ALTER TABLE `the gt road`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
