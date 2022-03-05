-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2022 at 10:05 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j2teamnnl_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `gender` enum('Nam','Nữ','Khác') NOT NULL,
  `birth` date NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_name`, `last_name`, `first_name`, `gender`, `birth`, `phone`, `address`, `email`, `password`, `token`) VALUES
(6, 'YiSuS', 'Nguyễn', 'Hùng', 'Nữ', '2001-03-17', '0967622166', 'Đâu đó', 'goldhungvip01@gmail.com', '123', NULL),
(7, 'asd', 'Nguyễn', 'Ngọc', 'Nữ', '2020-03-23', '0353891312', 'Đâu đó', 'nhhungcntt@gmail.com', '123', NULL),
(8, 'abcd1234', 'Nguyễn', 'Hùng', 'Nam', '2022-02-08', '0967622166', 'UB,QN', '19a10010201@students.hou.edu.vn', '@Huyhung1', NULL),
(9, 'YiSuS123', 'Nguyễn', 'Ngọc', 'Nam', '2022-02-06', '0353891312', 'Đâu đó', 'nhhungcntt@gmail.com', '@Huyhung1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_order`, `id_product`, `quantity`) VALUES
(40, 12, 1),
(41, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_serve` int(11) DEFAULT NULL,
  `id_customer` int(11) NOT NULL,
  `name_receiver` varchar(50) NOT NULL,
  `phone_receiver` char(20) NOT NULL,
  `address_receiver` text NOT NULL,
  `status` int(1) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `id_serve`, `id_customer`, `name_receiver`, `phone_receiver`, `address_receiver`, `status`, `date_order`, `total_price`) VALUES
(40, 15, 6, 'Nguyễn Hùng', '0967622166', 'Đâu đó', 0, '2022-02-26 10:02:42', 216000),
(41, 15, 6, 'Nguyễn Hùng', '0967622166', 'Đâu đó', 1, '2022-02-26 10:02:48', 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`id`, `name`, `image`, `phone`, `address`) VALUES
(3, 'Nguyễn Huy Hùng', '1645690759.jpg', '0967622166', 'Nguyễn Huy Hùng'),
(5, 'adidas', '1645690770.jpg', '0376368319', 'adidas'),
(6, 'Levi\'s', '1645692984.jpg', '0378004430', 'Levi\'s'),
(7, 'Nike', '1644131873.png', '0375536416', '72A Đ. Nguyễn Trãi, Thượng Đình, Thanh Xuân, Hà Nội, Việt Nam'),
(8, 'H&M', '1644131918.png', '0373586593', '56 Đ. Nguyễn Chí Thanh, Láng Thượng, Đống Đa, Hà Nội 11512, Việt Nam');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `detail` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `vote` float NOT NULL,
  `id_producer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `detail`, `image`, `price`, `vote`, `id_producer`) VALUES
(12, 'Kính mắt super vip pro', 'Hãy đeo kính để đẹp trai hơn =((', 'mắt kính thời trang chống nắng, chống mưa, chống bụi, chống cả người yêu cũ hay bất cứ thứ gì bạn muốn chống để bảo vệ cho đôi mắt yêu quý và đẹp đẽ của bạn.', '1645323289.jpg', 216000, 129, 7),
(13, 'YZY 700 MNVN ADULTS RESIN ', 'Sản phẩm được đảm bảo chất lượng Giá cả cạnh tranh Thiết kế thời trang\r\n', 'Giày Sneaker Thể Thao được làm từ chất liệu cao cấp, rất mềm mại và êm ái, tạo cảm giác thoải mái cho từng bước đi. Phần đế làm bằng cao su tổng hợp với phần rãnh chống trơn trượt, đảm bảo sự an toàn cho người mang.được thiết kế trẻ trung, là một thiết kế dành cho phái nam, giày chú trọng phom dáng với từng đừng nét cá tính, làm toát lên vẻ trẻ trung, thanh lịch. Đường may tỉ mỉ và đường keo dán chắc chắn và bền bỉ trong thời gian dài.\r\n', '1645323739.jpg', 6000000, 216, 7),
(14, 'GIÀY FORUM PREMIERE ', 'Sản phẩm được đảm bảo chất lượng Giá cả cạnh tranh Thiết kế thời trang\r\n\r\n', 'được thiết kế trẻ trung, là một thiết kế dành cho phái nam, giày chú trọng phom dáng với từng đừng nét cá tính, làm toát lên vẻ trẻ trung, thanh lịch. Mang dáng vẻ trẻ trung và hiện đại ', '1645323904.jpg', 4800000, 300, 7),
(15, 'GIÀY SUPERSTAR', 'Sản phẩm được đảm bảo chất lượng Giá cả cạnh tranh Thiết kế thời trang', 'Mẫu giày dàng cho trẻ em, trẻ trung và năng động là tất cả những thứ mà đôi giày này mang đến, hãy nâng niu từng bước chân của con em chúng ta. ', '1645323944.jpg', 1700000, 142, 7),
(16, 'MŨ SNAPBACK TOUR', 'Một chiếc mũ lưỡi chai basic để che nắng che mưa và che cả bộ tóc mới của bạn.\r\n\r\n', 'Chất liệu kaki của chiếc mũ giúp cho độ bền bỉ của mũ chống chọi được với thời gian, sự đơn giản của chiếc mũ chính là đặc điểm nổi bật của nó, với loho của nhãn hiệu được in ở mặt trước của mũ làm toát lên vẻ đẹp của chiếc mũ. ', '1645323977.jpg', 650000, 69, 5),
(17, 'TÚI ĐEO HÔNG ESSENTIAL CLASSIC  ', 'Chiếc túi mini bên hông, không chỉ đơn giản là để chứa đồ, mà còn để tôn lên vẻ đẹp của bạn.\r\n\r\n', 'Trên thị trường hiện tại có rất nhiều những chiếc túi nhưng ở đây chúng tôi mang đến cho bạn một sản phẩm hoàn hảo nhất, với sự tỉ mỉ quan sát của chúng tôi, đã tạo ra được một sản phẩm hoàn hảo để mang đến tay của khách hàng.  ', '1645324002.jpg', 400000, 623, 5),
(18, 'Women\'s Air Jordan 1 Low Black and University Blue', 'đôi giày air jordan đang là thịnh hành hiện tại sẽ không làm bạn thất vọng khi bạn lựa chọn.\r\n\r\n', 'Chiếc Low này có sự kết hợp cao cấp của da kiện, da nubuck và vật liệu tổng hợp ở phía trên. Bộ phận Air được bao bọc trong gót chân mang đến cho bạn lớp đệm nhẹ đã là một cảm giác trong hơn một thế hệ. Biểu tượng Wings ở gót giày, thiết kế Jumpman trên lưỡi gà và mấu ren \"23\" trang trí giày với các chi tiết mang tính biểu tượng.  ', '1645324031.jpg', 2929000, 396, 7),
(19, 'Nike Air Women\'s High-Rise Leggings  ', 'Quần bó thích hợp để tập thể hình hay chơi những môn thể thao.\r\n\r\n', 'Mềm mại và co giãn, vải jersey của những chiếc quần legging này di chuyển cùng bạn để tạo cảm giác thoải mái, vô tư, hoàn hảo cho trang phục hàng ngày. Một thiết kế cao tầng và một logo jacquard lặp lại trên dây thắt lưng nâng cao điều này.  ', '1645324076.jpg', 1279000, 76, 7),
(20, 'LEVI\'S - Áo Thun Polo Nữ Ss Slim  ', 'chiếc áo xinh xắn phù hợp để bạn khoác lên\r\n\r\n', 'Tránh ngâm trong nước quá lâu - Tránh tiếp xúc với các chất liệu gây loang màu - Không sử dụng các chất tẩy rửa, tránh giặt bằng máy, chiếc áo thoáng phù hợp để mặc đi chơi. ', '1645324107.jpg', 699000, 573, 6),
(21, 'LEVI\'S - Áo Thun Nam Ss Standard/Regular  ', 'Được thành lập năm 1873, Levi’s® được thế giới biết đến & ngợi khen bởi những sản phẩm jeans đạt chuẩn mực trong thiết kế. Chúng trở thành những sản phẩm thành công nhất, được công nhận nhiều nhất.\r\n\r\n', 'chất liệu vải mềm không gây ngứa ngáy khi mặc, cực kì mát mẻ. Tránh ngâm trong nước quá lâu - Tránh tiếp xúc với các chất liệu gây loang màu - Không sử dụng các chất tẩy rửa, tránh giặt bằng máy ', '1645324148.jpg', 899000, 261, 6);

-- --------------------------------------------------------

--
-- Table structure for table `serve`
--

CREATE TABLE `serve` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('Nam','Nữ','Khác') NOT NULL,
  `phone` varchar(50) NOT NULL,
  `identity` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `level` int(2) NOT NULL,
  `wage` float NOT NULL,
  `account` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serve`
--

INSERT INTO `serve` (`id`, `name`, `gender`, `phone`, `identity`, `address`, `level`, `wage`, `account`, `password`, `token`) VALUES
(15, 'Quản Lý', 'Nữ', '0353891312', '022201001677', 'Quản lý đâu đó\r\n', 2, 3000000, 'ql1', '123', NULL),
(16, 'Nhân Viên', 'Nam', '0373891312', '022201001677', 'Đâu đó', 1, 3000000, 'nv1', '123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_serve` (`id_serve`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producer` (`id_producer`);

--
-- Indexes for table `serve`
--
ALTER TABLE `serve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `serve`
--
ALTER TABLE `serve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id_serve`) REFERENCES `serve` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_producer`) REFERENCES `producer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
