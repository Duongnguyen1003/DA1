-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2021 at 04:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `adult_amount` int(11) NOT NULL,
  `child_amount` int(11) NOT NULL,
  `departure_day` date NOT NULL,
  `cart_status` varchar(255) NOT NULL,
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `id_parent` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `id_parent`, `create_at`) VALUES
(25, 'Nội Thành', 0, '2021-04-01 11:17:44'),
(26, 'Ngoại Thành', 0, '2021-04-01 11:17:44'),
(32, 'Quận Ba Đình', 25, '2021-04-01 12:16:52'),
(33, 'Quận Hoàn Kiếm', 25, '2021-04-01 12:17:26'),
(34, 'Quận Đống Đa', 25, '2021-04-01 12:17:42'),
(35, 'Quận Thanh Xuân', 25, '2021-04-01 12:17:50'),
(36, 'Quận Cầu Giấy', 25, '2021-04-01 12:18:01'),
(37, 'Quận Hoàng Mai', 25, '2021-04-01 12:18:28'),
(38, 'Quận Hai Bà Trưng', 25, '2021-04-01 12:18:38'),
(39, 'Quận Tây Hồ', 25, '2021-04-01 12:18:46'),
(40, 'Quận Long Biên', 26, '2021-04-01 13:35:21'),
(41, 'Quận Từ Liêm', 26, '2021-04-01 13:35:31'),
(42, 'Quận Hà Đông', 26, '2021-04-01 13:35:41'),
(43, 'Quận Thanh Trì', 26, '2021-04-01 13:35:49'),
(44, 'Quận Gia Lâm', 26, '2021-04-01 13:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `evaluate` int(11) NOT NULL,
  `content_comment` text NOT NULL,
  `id_parent` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_content` text NOT NULL,
  `contact_status` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `image_main` varchar(255) NOT NULL,
  `image_detail` varchar(255) NOT NULL,
  `image_plan1` varchar(255) NOT NULL,
  `image_plan2` varchar(255) NOT NULL,
  `image_plan3` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `image_main`, `image_detail`, `image_plan1`, `image_plan2`, `image_plan3`, `create_at`) VALUES
(4, 'Lang.jpg', 'tran_quoc_1__the_duong_1-12_50_21_499.jpg', 'van-mieu.jpg', 'bao-tang-dan-toc-hoc-viet-nam-nemtv-1.jpg', 'pho-co.jpg', '2021-04-01 14:43:35'),
(5, 'den-quan-thanh.jpg', 'pho-co.jpg', 'Lang.jpg', 'Hoang-thanh-Thang-Long-0_1603178754.jpg', 'van-mieu.jpg', '2021-04-01 14:52:53'),
(6, 'HoGuom01.jpg', 'tran_quoc_1__the_duong_1-12_50_21_499.jpg', 'van-mieu.jpg', 'pho-co.jpg', 'Lang.jpg', '2021-04-01 14:54:00'),
(7, 'HoGuom01.jpg', 'tran_quoc_1__the_duong_1-12_50_21_499.jpg', 'Lang.jpg', 'van-mieu.jpg', 'pho-co.jpg', '2021-04-01 14:54:29'),
(8, 'Nha-tu-hoa-lo (2).jpg', 'HoGuom01.jpg', 'pho-co.jpg', 'van-mieu.jpg', 'HoGuom01.jpg', '2021-04-01 14:54:58'),
(9, 'lang-gom.jpg', 'den-quan-thanh.jpg', 'HoGuom01.jpg', 'Lang.jpg', 'van-mieu.jpg', '2021-04-01 14:55:17'),
(10, 'tran_quoc_1__the_duong_1-12_50_21_499.jpg', 'Lang.jpg', 'lang-gom.jpg', 'van-mieu.jpg', 'HoGuom01.jpg', '2021-04-01 14:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id_information` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `information_phone` varchar(15) NOT NULL,
  `information_email` varchar(255) NOT NULL,
  `information_address` varchar(255) NOT NULL,
  `information_slogan` varchar(255) NOT NULL,
  `link_map` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id_information`, `logo`, `information_phone`, `information_email`, `information_address`, `information_slogan`, `link_map`, `create_at`) VALUES
(5, '—Pngtree—cartoon baby panda_4830499.png', '0968686686', 'songoku2192@gmail.com', 't', 'asd', 'sddasd', '2021-03-31 14:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `postnews`
--

CREATE TABLE `postnews` (
  `id_post` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_image2` varchar(255) NOT NULL,
  `content_short` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id_slide` int(11) NOT NULL,
  `name_slide` varchar(255) NOT NULL,
  `slide` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id_slide`, `name_slide`, `slide`, `link`, `create_at`) VALUES
(3, '', '—Pngtree—cartoon baby panda_4830499.png', 'https://www.youtube.com/watch?v=bY2B_oC9g-k&ab_channel=GinTrung', '2021-03-30 15:57:35');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id_tour` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `name_tour` varchar(255) NOT NULL,
  `holiday` varchar(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `place_start` text NOT NULL,
  `place_end` text NOT NULL,
  `price` int(11) NOT NULL,
  `promotional` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `content` text NOT NULL,
  `plan1` text NOT NULL,
  `plan2` text DEFAULT NULL,
  `plan3` text DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id_tour`, `id_category`, `id_image`, `name_tour`, `holiday`, `time_start`, `time_end`, `place_start`, `place_end`, `price`, `promotional`, `introduction`, `content`, `plan1`, `plan2`, `plan3`, `view`, `create_at`) VALUES
(40, 32, 4, '1.	LĂNG CHỦ TỊCH - BẢO TÀNG DÂN TỘC HỌC - VĂN MIẾU QUỐC TỬ GIÁM - CHÙA TRẤN QUỐC', 'no', '08:00:00', '17:00:00', 'Quảng trường Ba Đình, Quận Ba Đình', 'Hồ Hoàn Kiếm, Quận Hoàn Kiếm', 670000, 0, 'Hanoitourist tổ chức tour Hà Nội 1 ngày với lịch trình hợp lý tham quan các phố phường và Lăng Chủ Tịch, Bảo Tàng Dân Tộc Học, Văn Miếu - Quốc Tử Giám, Chùa Trấn Quốc, Tháp Rùa Hồ Hoàn Kiếm, ... ', 'Hà Nội là thủ đô, đồng thời cũng là một trung tâm chính trị, văn hóa và du lịch quan trọng của Việt Nam. Hà Nội có quá trình lịch sử lâu dài, nhiều công trình văn hóa kiến trúc, di tích lịch sử nổi tiếng, … là một trong những điểm đến thu hút du khách trong và ngoài nước nhất ở Việt Nam bởi dáng vẻ cổ kính, trầm mặc, thanh lịch và vẻ đẹp tiềm ẩn ở thành phố ngàn năm văn hiến này!', '8h00: Xe đón Quý khách tại khách sạn, bắt đầu Tour Du Lịch Hà Nội 1 Ngày. <br>\r\n09h00: Quý khách tham quan Lăng Chủ tịch Hồ Chí Minh – nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu của dân tộc Việt Nam, và Nhà sàn Bác Hồ – nơi Bác ở và làm việc từ năm 1958 đến năm 1969.<br>\r\n10h00: Điểm dừng chân tiếp theo là Chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của một đài sen mọc lên giữa lòng hồ vuông vắn.\r\n', '11h00: Quý khách đi tham quan Bảo tàng Dân tộc học, nơi lưu giữ và trưng bày nhiều hiện vật văn hoá của cả 54 dân tộc Việt Nam.<br>\r\n12h30: Đoàn trở lại Phố Cổ để ăn trưa tại nhà hàng. Sau bữa trưa, Quý khách sẽ ngắm 36 Phố phường từ trên xe và nghe Hướng dẫn viên kể chuyện về những con phố Hàng Đào-Ngang-Đương, Chợ Đồng Xuân…\r\n14h00: Đoàn khởi hành đi tham quan Văn Miếu - Quốc Tử Giám (ngôi trường đại học đầu tiên của Việt Nam). Sau đó tới thăm quần thể cảnh đẹp ở phía Tây thành phố đó là chùa Trấn Quốc (ngôi chùa cổ nhất Việt Nam từ năm 541). Điểm thăm quan cuối cùng quý khách thăm đền Ngọc Sơn (viên ngọc của Hồ Hoàn Kiếm). \r\n', '15h30: Điểm dừng chân cuối cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn. Hồ Hoàn Kiếm có nghĩa là hồ trả gươm, dân gian gọi tắt là Hồ Gươm. Tên gọi đó xuất hiện từ một truyền thuyết thời vua Lê Thái Tổ, thế kỷ XV. Hồ Hoàn Kiếm (còn gọi là Hồ Gươm) đẹp như một lẵng hoa giữa lòng thành phố, được bao quanh bởi các đường phố Đinh Tiên Hoàng, Lê Thái Tổ, Hàng Khay dài khoảng 1.800m. Đền Ngọc Sơn trong lòng Hồ Hoàn Kiếm là một quần thể kiến trúc phong cảnh, có non, có nước, có tháp, có đài, có cầu, có đình, có rừng cây cổ thụ và cỏ hoa bốn mùa, lại có cả một kho văn thơ kim cổ, có cả một bảo tàng về huyền thoại và lịch sử, có cả truyền thống văn hoá và đấu tranh cách mạng, điểm đến của du lịch tâm linh, du lịch nghiên cứu và du lịch sinh thái. <br>\r\n17h00: Xe và hướng dẫn viên đưa Quý khách về đến điểm đón ban đầu, chia tay Quý khách kết thúc tốt đẹp chuyến thăm quan Hà Nội - Citytour trong ngày cùng với Hanoitourist\r\n', NULL, '2021-04-01 15:06:05'),
(41, 32, 5, 'LĂNG CHỦ TỊCH – VĂN MIẾU QUỐC TỬ GIÁM - HOÀNG THÀNH THĂNG LONG - ĐỀN QUÁN THÁNH', 'no', '08:30:00', '17:00:00', ': Quảng trường Ba Đình, Quận Ba Đình', 'Hồ Hoàn Kiếm, Quận Hoàn Kiếm', 710000, 0, 'Hanoitourist tổ chức tour Hà Nội 1 ngày với lịch trình hợp lý tham quan các phố phường và Lăng Chủ Tịch, Bảo Tàng Dân Tộc Học, Văn Miếu - Quốc Tử Giám, Chùa Trấn Quốc, Tháp Rùa Hồ Hoàn Kiếm, ... ', 'Hà Nội là thủ đô, đồng thời cũng là một trung tâm chính trị, văn hóa và du lịch quan trọng của Việt Nam. Hà Nội có quá trình lịch sử lâu dài, nhiều công trình văn hóa kiến trúc, di tích lịch sử nổi tiếng, … là một trong những điểm đến thu hút du khách trong và ngoài nước nhất ở Việt Nam bởi dáng vẻ cổ kính, trầm mặc, thanh lịch và vẻ đẹp tiềm ẩn ở thành phố ngàn năm văn hiến này!', '8h30: Xe đón Quý khách tại khách sạn, bắt đầu Tour Du Lịch Hà Nội 1 Ngày. <br>\r\n09h00: Quý khách tham quan Lăng Chủ tịch Hồ Chí Minh – nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu của dân tộc Việt Nam, và Nhà sàn Bác Hồ – nơi Bác ở và làm việc từ năm 1958 đến năm 1969.<br>\r\n10h00: Điểm dừng chân tiếp theo là Chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của một đài sen mọc lên giữa lòng hồ vuông vắn.\r\n', '11h00: Hoàng thành Thăng Long là quần thể di tích gắn với lịch sử kinh thành Thăng Long – Đông Kinh và tỉnh thành Hà Nội bắt đầu từ thời kì tiền Thăng Long (An Nam đô hộ phủ thế kỷ VII) qua thời Đinh – Tiền Lê, phát triển mạnh dưới thời Lý, Trần, Lê và thành Hà Nội dưới triều Nguyễn. Đây là công trình kiến trúc đồ sộ, được các triều vua xây dựng trong nhiều giai đoạn lịch sử và trở thành một trong những di tích quan trọng bậc nhất trong hệ thống các di tích Việt Nam. Sau đó, đoàn trở lại Phố Cổ để ăn trưa tại nhà hàng.<br>\r\n14h00: Đoàn khởi hành đi tham quan Văn Miếu - Quốc Tử Giám (ngôi trường đại học đầu tiên của Việt Nam). Sau đó tới thăm quần thể cảnh đẹp Đền Quán Thánh, Đền có tên chữ là Trấn Vũ Quán. Đền có từ đời Lý Thái Tổ (1010 – 1028), thờ Huyền Thiên Trấn Vũ, là một trong bốn vị thần được lập đền thờ để trấn giữ bốn cửa ngõ thành Thăng Long khi xưa được gọi là Thăng Long tứ trấn. điểm thăm quan cuối cùng quý khách thăm đền Ngọc Sơn (viên ngọc của Hồ Hoàn Kiếm). <br>\r\n15h15: Điểm đến tiếp theo Đền Quán Thánh, tên chữ là Trấn Vũ Quán, có từ đời Lý Thái Tổ, thờ Huyền Thiên Trấn Vũ, là một trong bốn vị thần được lập đền thờ để trấn giữ bốn cửa ngõ thành Thăng Long khi xưa. Bốn ngôi đền đó là: Đền Bạch Mã - Bạch Mã tối linh từ; Đền Voi Phục - Tây trấn từ; Đền Kim Liên - Kim Liên từ\r\n', '16h30: Điểm dừng chân cuối cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn. Hồ Hoàn Kiếm có nghĩa là hồ trả gươm, dân gian gọi tắt là Hồ Gươm. Tên gọi đó xuất hiện từ một truyền thuyết thời vua Lê Thái Tổ, thế kỷ XV. Hồ Hoàn Kiếm (còn gọi là Hồ Gươm) đẹp như một lẵng hoa giữa lòng thành phố, được bao quanh bởi các đường phố Đinh Tiên Hoàng, Lê Thái Tổ, Hàng Khay dài khoảng 1.800m. Đền Ngọc Sơn trong lòng Hồ Hoàn Kiếm là một quần thể kiến trúc phong cảnh, có non, có nước, có tháp, có đài, có cầu, có đình, có rừng cây cổ thụ và cỏ hoa bốn mùa, lại có cả một kho văn thơ kim cổ, có cả một bảo tàng về huyền thoại và lịch sử, có cả truyền thống văn hoá và đấu tranh cách mạng, điểm đến của du lịch tâm linh, du lịch nghiên cứu và du lịch sinh thái. <br>\r\n17h00: Xe và hướng dẫn viên đưa Quý khách về đến điểm đón ban đầu, chia tay Quý khách kết thúc tốt đẹp chuyến thăm quan Hà Nội - Citytour trong ngày cùng với Hanoitourist\r\n\r\n', NULL, '2021-04-01 15:07:48'),
(42, 33, 6, 'PHỐ CỔ - CHÙA TRẤN QUỐC – LĂNG CHỦ TỊCH – VĂN MIẾU QUỐC TỬ GIÁM – HỒ HOÀN KIẾM', 'no', '07:30:00', '17:00:00', 'Hồ Hoàn Kiếm', 'Hồ Hoàn Kiếm', 670000, 0, 'Hanoitourist tổ chức tour Hà Nội 1 ngày với lịch trình hợp lý tham quan các phố phường và quần thể Hồ Chí Minh, Văn Miếu - Quốc Tử Giám, đền Ngọc Sơn, Tháp Rùa Hồ Hoàn Kiếm, ... ', 'Hà Nội là thủ đô, đồng thời cũng là một trung tâm chính trị, văn hóa và du lịch quan trọng của Việt Nam. Hà Nội có quá trình lịch sử lâu dài, nhiều công trình văn hóa kiến trúc, di tích lịch sử nổi tiếng, … là một trong những điểm đến thu hút du khách trong và ngoài nước nhất ở Việt Nam bởi dáng vẻ cổ kính, trầm mặc, thanh lịch và vẻ đẹp tiềm ẩn ở thành phố ngàn năm văn hiến này!', '07h30: Xe trung chuyển đón Quý khách tại khách sạn trên các tuyến phố như: Trần Quý Cáp, Nguyễn Khuyến, Lê Duẩn, Phạm Đình Hổ, Hàng Chuối, ...đưa về điểm tập trung<br>\r\n08h30: Xe và hướng dẫn viên đón Quý khách tại khách sạn trong khu vực Phố Cổ, khu vực Nhà Hát Lớn, khu vực Hàng Than, Hàng Bún, Quán Thánh, Phan Đình Phùng, Nguyễn Trường Tộ.<br>\r\n09h30: Quý khách vào thăm quan Chùa Trấn Quốc - một trong những ngôi chùa có kiến trúc cổ kính và Bảo Tháp Xá Lợi linh thiêng nằm bên bán đảo Tây Hồ\r\n', '10h00: Thăm quần thể di tích chủ tịch Hồ Chí Minh bao gồm: Bảo Tàng, Chùa Một Cột, viếng Lăng Bác, thăm Nhà sàn, Ao cá, phủ Chủ tịch, …<br>\r\n11h45: Thăm quan Bảo Tàng Dân Tộc Học nơi lưu giữ toàn bộ những giá trị văn hoá, lịch sử của 54 dân tộc. Hoặc tuỳ vào tình hình thực tế hướng dẫn viên có thể chuyển thăm quan Bảo Tàng Dân Tộc Học sang thăm quan làng gốm sứ Bát Tràng với các sản phẩm thủ công mỹ nghệ được làm từ gốm có lịch sử truyền thống từ hơn 700 năm về trước). Sau đó, đoàn trở lại Phố Cổ để ăn trưa tại nhà hàng. Thưởng thức bữa trưa tại nhà hàng với các món ăn đậm chất truyền thống Việt Nam<br>\r\n\r\n\r\n14h00: Đoàn khởi hành đi tham quan Văn Miếu - Quốc Tử Giám (ngôi trường đại học đầu tiên của Việt Nam). Sau đó tới thăm quần thể cảnh đẹp Đền Quán Thánh, Đền có tên chữ là Trấn Vũ Quán. Đền có từ đời Lý Thái Tổ (1010 – 1028), thờ Huyền Thiên Trấn Vũ, là một trong bốn vị thần được lập đền thờ để trấn giữ bốn cửa ngõ thành Thăng Long khi xưa được gọi là Thăng Long tứ trấn. điểm thăm quan cuối cùng quý khách thăm đền Ngọc Sơn (viên ngọc của Hồ Hoàn Kiếm). \r\n', '15h30: Điểm dừng chân cuối cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn. Hồ Hoàn Kiếm có nghĩa là hồ trả gươm, dân gian gọi tắt là Hồ Gươm. Tên gọi đó xuất hiện từ một truyền thuyết thời vua Lê Thái Tổ, thế kỷ XV. Hồ Hoàn Kiếm (còn gọi là Hồ Gươm) đẹp như một lẵng hoa giữa lòng thành phố, được bao quanh bởi các đường phố Đinh Tiên Hoàng, Lê Thái Tổ, Hàng Khay dài khoảng 1.800m. Đền Ngọc Sơn trong lòng Hồ Hoàn Kiếm là một quần thể kiến trúc phong cảnh, có non, có nước, có tháp, có đài, có cầu, có đình, có rừng cây cổ thụ và cỏ hoa bốn mùa, lại có cả một kho văn thơ kim cổ, có cả một bảo tàng về huyền thoại và lịch sử, có cả truyền thống văn hoá và đấu tranh cách mạng, điểm đến của du lịch tâm linh, du lịch nghiên cứu và du lịch sinh thái. <br>\r\n17h00: Xe và hướng dẫn viên đưa Quý khách về đến điểm đón ban đầu, chia tay Quý khách kết thúc tốt đẹp chuyến thăm quan Hà Nội - Citytour trong ngày cùng với Hanoitourist\r\n', NULL, '2021-04-01 15:09:25'),
(43, 32, 7, 'LĂNG CHỦ TỊCH – CHÙA TRẤN QUỐC – VĂN MIẾU – QUỐC TỬ GIÁM – PHỐ CỔ – HOÀN KIẾM', 'no', '09:30:00', '16:30:00', 'Quảng trường Ba Đình, Quận Ba Đình', 'Hồ Hoàn Kiếm, Quận Hoàn Kiếm', 550000, 0, 'Hanoitourist tổ chức tour Hà Nội 1 ngày với lịch trình hợp lý tham quan các phố phường và Lăng Chủ Tịch, Bảo Tàng Dân Tộc Học, Văn Miếu - Quốc Tử Giám, Chùa Trấn Quốc, Tháp Rùa Hồ Hoàn Kiếm, ... ', 'Hà Nội là thủ đô, đồng thời cũng là một trung tâm chính trị, văn hóa và du lịch quan trọng của Việt Nam. Hà Nội có quá trình lịch sử lâu dài, nhiều công trình văn hóa kiến trúc, di tích lịch sử nổi tiếng, … là một trong những điểm đến thu hút du khách trong và ngoài nước nhất ở Việt Nam bởi dáng vẻ cổ kính, trầm mặc, thanh lịch và vẻ đẹp tiềm ẩn ở thành phố ngàn năm văn hiến này!', '9h30: Xe và Hướng dẫn viên của Hanoitourist đón Quý khách tại điểm hẹn, khởi hành tham quan du lịch Hà Nội 1 ngày.<br>\r\n10h00: Quý khách tham quan Lăng Chủ tịch Hồ Chí Minh – nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu của dân tộc Việt Nam, và Nhà sàn Bác Hồ – nơi Bác ở và làm việc từ năm 1958 đến năm 1969.<br>\r\n11h45: Điểm dừng chân tiếp theo là Chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của một đài sen mọc lên giữa lòng hồ vuông vắn.\r\n', '12h10: Quý khách vào thăm quan Chùa Trấn Quốc - một trong những ngôi chùa có kiến trúc cổ kính và Bảo Tháp Xá Lợi linh thiêng nằm bên bán đảo Tây Hồ.<br>\r\n12h45: Quý khách thưởng thức ẩm thực tại nhà hàng trên phố, những món ăn truyền thống của Hà Nội.<br>\r\n14h00: Quý khách đi thăm Văn Miếu - Quốc Tử Giám. Văn Miếu - Quốc Tử Giám là quần thể di tích đa dạng và phong phú hàng đầu của thành phố Hà Nội, nằm ở phía Nam kinh thành Thăng Long. Văn Miếu được xây dựng tháng 10 năm 1070, thờ Khổng Tử, các bậc Hiền triết của Nho giáo và Tư nghiệp Quốc Tử Giám Chu Văn An, người thầy tiêu biểu đạo cao, đức trọng của nền giáo dục Việt Nam. Năm 1076, nhà Quốc Tử Giám được xây kề sau Văn Miếu, ban đầu là nơi học của các Hoàng Tử, sau mở rộng thu nhận cả các học trò giỏi trong thiên hạ.\r\n', '15h30: Điểm dừng chân cuối cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn. Hồ Hoàn Kiếm có nghĩa là hồ trả gươm, dân gian gọi tắt là Hồ Gươm. Tên gọi đó xuất hiện từ một truyền thuyết thời vua Lê Thái Tổ, thế kỷ XV. Hồ Hoàn Kiếm (còn gọi là Hồ Gươm) đẹp như một lẵng hoa giữa lòng thành phố, được bao quanh bởi các đường phố Đinh Tiên Hoàng, Lê Thái Tổ, Hàng Khay dài khoảng 1.800m. Đền Ngọc Sơn trong lòng Hồ Hoàn Kiếm là một quần thể kiến trúc phong cảnh, có non, có nước, có tháp, có đài, có cầu, có đình, có rừng cây cổ thụ và cỏ hoa bốn mùa, lại có cả một kho văn thơ kim cổ, có cả một bảo tàng về huyền thoại và lịch sử, có cả truyền thống văn hoá và đấu tranh cách mạng, điểm đến của du lịch tâm linh, du lịch nghiên cứu và du lịch sinh thái. <br>\r\n16h30: Xe và hướng dẫn viên đưa Quý khách về đến điểm đón ban đầu, chia tay Quý khách kết thúc tốt đẹp chuyến thăm quan Hà Nội - Citytour trong ngày cùng với Hanoitourist\r\n', NULL, '2021-04-01 15:10:42'),
(44, 32, 8, 'LĂNG CHỦ TỊCH– VĂN MIẾU – QUỐC TỬ GIÁM – PHỐ CỔ - HỎA LÒ – HOÀN KIẾM', 'no', '09:30:00', '16:30:00', 'Quảng trường Ba Đình, Quận Ba Đình', 'Hồ Hoàn Kiếm, Quận Hoàn Kiếm', 550000, 0, 'Hanoitourist tổ chức tour Hà Nội 1 ngày với lịch trình hợp lý tham quan các phố phường và Lăng Chủ Tịch, Bảo Tàng Dân Tộc Học, Văn Miếu - Quốc Tử Giám, Chùa Trấn Quốc, Tháp Rùa Hồ Hoàn Kiếm, ... ', 'Hà Nội là thủ đô, đồng thời cũng là một trung tâm chính trị, văn hóa và du lịch quan trọng của Việt Nam. Hà Nội có quá trình lịch sử lâu dài, nhiều công trình văn hóa kiến trúc, di tích lịch sử nổi tiếng, … là một trong những điểm đến thu hút du khách trong và ngoài nước nhất ở Việt Nam bởi dáng vẻ cổ kính, trầm mặc, thanh lịch và vẻ đẹp tiềm ẩn ở thành phố ngàn năm văn hiến này!', '9h30: Xe và Hướng dẫn viên của Hanoitourist đón Quý khách tại điểm hẹn, khởi hành tham quan du lịch Hà Nội 1 ngày.<br>\r\n10h00: Quý khách tham quan Lăng Chủ tịch Hồ Chí Minh – nơi an nghỉ cuối cùng của vị lãnh tụ kính yêu của dân tộc Việt Nam, và Nhà sàn Bác Hồ – nơi Bác ở và làm việc từ năm 1958 đến năm 1969.<br>\r\n11h45: Điểm dừng chân tiếp theo là Chùa Một Cột – ngôi chùa có kiến trúc độc đáo mang dáng dấp của một đài sen mọc lên giữa lòng hồ vuông vắn.</br>\r\n', '12h10: Quý khách vào thăm quan Chùa Trấn Quốc - một trong những ngôi chùa có kiến trúc cổ kính và Bảo Tháp Xá Lợi linh thiêng nằm bên bán đảo Tây Hồ.<br>\r\n12h45: Quý khách thưởng thức ẩm thực tại nhà hàng trên phố, những món ăn truyền thống của Hà Nội.<br>\r\n14h00: Quý khách đi thăm Văn Miếu - Quốc Tử Giám. Văn Miếu - Quốc Tử Giám là quần thể di tích đa dạng và phong phú hàng đầu của thành phố Hà Nội, nằm ở phía Nam kinh thành Thăng Long. Văn Miếu được xây dựng tháng 10 năm 1070, thờ Khổng Tử, các bậc Hiền triết của Nho giáo và Tư nghiệp Quốc Tử Giám Chu Văn An, người thầy tiêu biểu đạo cao, đức trọng của nền giáo dục Việt Nam. Năm 1076, nhà Quốc Tử Giám được xây kề sau Văn Miếu, ban đầu là nơi học của các Hoàng Tử, sau mở rộng thu nhận cả các học trò giỏi trong thiên hạ.\r\n', '15h30: Điểm dừng chân cuối cùng là Hồ Hoàn Kiếm và Đền Ngọc Sơn. Hồ Hoàn Kiếm có nghĩa là hồ trả gươm, dân gian gọi tắt là Hồ Gươm. Tên gọi đó xuất hiện từ một truyền thuyết thời vua Lê Thái Tổ, thế kỷ XV. Hồ Hoàn Kiếm (còn gọi là Hồ Gươm) đẹp như một lẵng hoa giữa lòng thành phố, được bao quanh bởi các đường phố Đinh Tiên Hoàng, Lê Thái Tổ, Hàng Khay dài khoảng 1.800m. Đền Ngọc Sơn trong lòng Hồ Hoàn Kiếm là một quần thể kiến trúc phong cảnh, có non, có nước, có tháp, có đài, có cầu, có đình, có rừng cây cổ thụ và cỏ hoa bốn mùa, lại có cả một kho văn thơ kim cổ, có cả một bảo tàng về huyền thoại và lịch sử, có cả truyền thống văn hoá và đấu tranh cách mạng, điểm đến của du lịch tâm linh, du lịch nghiên cứu và du lịch sinh thái. <br>\r\n16h30: Xe và hướng dẫn viên đưa Quý khách về đến điểm đón ban đầu, chia tay Quý khách kết thúc tốt đẹp chuyến thăm quan Hà Nội - Citytour trong ngày cùng với Hanoitourist\r\n', NULL, '2021-04-01 15:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `emai` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `permission` varchar(20) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `voucher_code` varchar(255) NOT NULL,
  `voucher_image` varchar(255) NOT NULL,
  `voucher_information` text NOT NULL,
  `voucher_number` int(11) NOT NULL,
  `voucher_people` int(11) NOT NULL,
  `voucher_endtime` datetime NOT NULL,
  `voucher_sale` float NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_information`);

--
-- Indexes for table `postnews`
--
ALTER TABLE `postnews`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `postnews`
--
ALTER TABLE `postnews`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
