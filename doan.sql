-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2023 lúc 02:22 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Truyện', '2023-05-17 02:41:38', '2023-05-17 03:46:15', NULL),
(2, 'Văn học', '2023-05-17 02:42:22', '2023-05-17 02:42:22', NULL),
(3, 'Khoa học - kỹ thuật', '2023-05-17 02:42:59', '2023-05-17 03:17:31', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite`
--

CREATE TABLE `favorite` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `favorite`
--

INSERT INTO `favorite` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 4, '2023-05-17 05:06:51', '2023-05-17 05:06:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mails`
--

CREATE TABLE `mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mails`
--

INSERT INTO `mails` (`id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Thông báo mã giảm giá', '<h4><strong>M&atilde; giảm gi&aacute;: <em>DEAL</em></strong></h4>\r\n\r\n<h4><strong>Hạn sử dụng m&atilde;</strong></h4>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;05 Th05 2023 00:00 - 05 Th06 2023 23:59</p>\r\n\r\n<h4><em><strong>Ưu đ&atilde;i</strong></em></h4>\r\n\r\n<h4>Lượt sử dụng c&oacute; hạn. Nhanh tay kẻo lỡ bạn nh&eacute;! Giảm ₫20k Đơn Tối Thiểu ₫1,000,000k</h4>\r\n\r\n<h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&Aacute;p dụng cho sản phẩm</h4>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&Aacute;p dụng tr&ecirc;n App cho một số sản phẩm tham gia chương tr&igrave;nh nhất định.</p>\r\n\r\n<p>&bull; Những sản phẩm bị hạn chế chạy khuyến mại theo quy định của Nh&agrave; nước sẽ kh&ocirc;ng được hiển thị nếu nằm trong danh s&aacute;ch sản phẩm đ&atilde; chọn.<a href=\"https://help.shopee.vn/portal/article/88025\">T&igrave;m hiểu th&ecirc;m.</a></p>\r\n\r\n<h4><strong><em>Thanh To&aacute;n</em></strong></h4>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tất cả c&aacute;c h&igrave;nh thức thanh to&aacute;n</p>\r\n\r\n<h4>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Đơn vị vận chuyển</h4>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&bull;Hỏa Tốc</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&bull;Nhanh</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&bull;Tiết kiệm</p>\r\n\r\n<h4><em><strong>Thiết bị</strong></em></h4>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; iOS, Android</p>', '2023-05-17 04:34:42', '2023-05-17 04:34:42', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_04_08_041522_create_categories', 1),
(4, '2023_04_08_041657_create_sub_categories', 1),
(5, '2023_04_08_041837_create_products', 1),
(6, '2023_04_08_042214_create_orders', 1),
(7, '2023_04_08_042402_create_order_details', 1),
(8, '2023_04_18_084839_create_news', 1),
(9, '2023_05_08_055317_create_fac', 1),
(10, '2023_05_08_172008_create_mails', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `image`, `description`, `content`, `hot`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sách là gì – Tác dụng của việc đọc sách là gì ?', 'ynNc7_1677404940_sach-la-gi.jpg', 'Cuộc sống hiện đại với công nghệ 4.0, bất kỳ ai cũng đều quen thuộc với cái tên Google. Nhưng không phải thế mà sách có thể mất đi giá trị thiết thực mà nó mang lại. Chúng ta hãy tìm hiểu sách là gì và nguồn tri thức sách mang lại nhé.', '<p style=\"text-align:justify\">S&aacute;ch l&agrave; nguồn tri thức v&ocirc; tận của con người, từ xa xưa những ph&aacute;t minh vĩ đại đều được ghi ch&eacute;p lưu giữ kỹ c&agrave;ng. Tuy nhi&ecirc;n, một quyển s&aacute;ch c&oacute; gi&aacute; trị khi người đọc đ&uacute;c kết được &yacute; nghĩa thật sự từ n&oacute;.</p>\r\n\r\n<p style=\"text-align:justify\">S&aacute;ch l&agrave; g&igrave;? Tưởng chừng c&acirc;u trả lời v&ocirc; c&ugrave;ng dễ d&agrave;ng, tuy nhi&ecirc;n mỗi người lại c&oacute; kh&aacute;i niệm về s&aacute;ch kh&aacute;c nhau. Những người y&ecirc;u th&iacute;ch đọc s&aacute;ch, nh&agrave; viết s&aacute;ch v&agrave; kể cả những người kh&ocirc;ng th&iacute;ch đọc s&aacute;ch, nếu được hỏi &ldquo;Bạn hiểu s&aacute;ch l&agrave; g&igrave;?&rdquo; chắc chắn mỗi người sẽ đưa những nhận định ri&ecirc;ng, kh&ocirc;ng ai giống ai.</p>\r\n\r\n<p style=\"text-align:justify\">Trong b&agrave;i viết sau đ&acirc;y, đ&uacute;c kết từ những &yacute; kiến của nhiều chuy&ecirc;n gia, sẽ giải đ&aacute;p được c&acirc;u trả lời &ldquo;S&aacute;ch l&agrave; g&igrave;?&rdquo; cũng như c&aacute;ch đọc s&aacute;ch ra sao để c&oacute; hiệu quả tốt nhất.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>S&aacute;ch l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Chẳng c&oacute; định nghĩa n&agrave;o chắc chắn về s&aacute;ch. Nếu hiểu đơn giản, s&aacute;ch được h&igrave;nh th&agrave;nh từ những trang giấy đầy chữ, lưu giữ những b&agrave;i học, c&acirc;u chuyện, b&iacute; quyết hay kinh nghiệm m&agrave; người viết s&aacute;ch đ&atilde; từng trải hoặc dựa tr&ecirc;n tr&iacute; tưởng tượng của t&aacute;c giả quyển s&aacute;ch.</p>\r\n\r\n<p style=\"text-align:justify\">S&aacute;ch l&agrave; một sản phẩm tr&iacute; thức được con người s&aacute;ng tạo dựa tr&ecirc;n những chi&ecirc;m nghiệm trong x&atilde; hội. Cho d&ugrave; cuộc sống hiện đại, đời sống con người ng&agrave;y c&agrave;ng phụ thuộc v&agrave;o c&ocirc;ng nghệ, nhưng s&aacute;ch chẳng bao giờ l&agrave; dư thừa khi n&oacute; chứa đựng nguồn tr&iacute; thức v&ocirc; tận, m&agrave; con người kh&ocirc;ng thể n&agrave;o kh&aacute;m ph&aacute; ra hết được.</p>\r\n\r\n<p style=\"text-align:justify\">S&aacute;ch như một chiếc tủ khổng lồ v&agrave; kh&ocirc;ng c&oacute; đ&aacute;y, kh&ocirc;ng c&oacute; giới hạn, những g&igrave; ch&uacute;ng ta thấy, ch&uacute;ng ta đọc được chỉ l&agrave; một bề mặt nổi của quyển s&aacute;ch, gi&aacute; trị b&ecirc;n trong &ndash; những b&agrave;i học cần ghi nhớ, cần đ&uacute;t kết mới ch&iacute;nh l&agrave; gi&aacute; trị thật sự của một quyển s&aacute;ch.</p>\r\n\r\n<p style=\"text-align:justify\">Trong lịch sử ph&aacute;t triển của nh&acirc;n loại, liệu kh&ocirc;ng c&oacute; s&aacute;ch ghi ch&eacute;p lại những th&agrave;nh tựu, kết quả nghi&ecirc;n cứu của những lớp người đi trước th&igrave; thế hệ sau c&oacute; thể c&oacute; những bước đột ph&aacute;, s&aacute;ng tạo, tiếp tục ph&aacute;t triển tr&ecirc;n nền tảng những c&aacute;i đ&atilde; c&oacute;?</p>\r\n\r\n<p style=\"text-align:justify\">S&aacute;ch ch&iacute;nh l&agrave; chiếc kho&aacute; v&agrave;ng gi&uacute;p con người mở mang, nu&ocirc;i dưỡng ước mơ, niềm đam m&ecirc;, kh&aacute;t vọng của ch&iacute;nh m&igrave;nh.</p>\r\n\r\n<p style=\"text-align:justify\">Hơn nữa, s&aacute;ch l&agrave; m&oacute;n qu&agrave; tinh thần d&agrave;nh cho mỗi người, l&agrave; tinh hoa văn ho&aacute; của mỗi d&acirc;n tộc mỗi đất nước. Lịch sử ph&aacute;t triển, th&agrave;nh quả m&agrave; d&acirc;n tộc đ&atilde; đ&uacute;t kết để lại trong những quyển s&aacute;ch phần n&agrave;o gi&uacute;p cho thế hệ mai sau nh&igrave;n thấy tự h&agrave;o v&agrave; c&agrave;ng c&oacute; những tiến bộ, nghi&ecirc;n cứu mới mẻ hơn.</p>\r\n\r\n<p style=\"text-align:justify\">Để tạo được vị thế của m&igrave;nh, s&aacute;ch chứa đựng những gi&aacute; trị s&acirc;u xa đằng sau mỗi n&eacute;t chữ tr&ecirc;n từng trang giấy. Nếu l&agrave; người hiểu được lợi &iacute;ch của s&aacute;ch, bạn sẽ nh&igrave;n thấy được những g&igrave; qu&yacute; gi&aacute; ẩn đằng sau từng c&acirc;u chuyện, từng n&eacute;t chữ hiện r&otilde; tr&ecirc;n từng trang giấy.</p>\r\n\r\n<p style=\"text-align:justify\">Về mặt nghĩa đen, s&aacute;ch ch&iacute;nh l&agrave; một vật dụng được cấu th&agrave;nh từ những trang giấy, mỗi trang giấy được ghi ch&eacute;p c&aacute;c nội dung li&ecirc;n quan để tạo th&agrave;nh chủ đề chung của một quyển s&aacute;ch.</p>\r\n\r\n<p style=\"text-align:justify\">Một quyển s&aacute;ch c&oacute; thể l&agrave; b&agrave;i thơ, b&agrave;i văn, truyện đọc, lịch sử, kết quả nghi&ecirc;n cứu thực nghiệm, t&agrave;i liệu ghi ch&eacute;p,&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">Với nhịp sống hiện đại, s&aacute;ch kh&ocirc;ng chỉ tồn tại ở dạng những trang giấy được b&oacute; lại đ&oacute;ng th&agrave;nh quyển th&agrave;nh tập như truyền thống m&agrave; n&oacute; c&ograve;n tồn tại ở dạng s&aacute;ch điện tử, s&aacute;ch Ebook hay File tập tin lưu trữ bằng bộ nhớ hay xem trực tuyến,&hellip;</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>Những lợi &iacute;ch từ việc đọc s&aacute;ch</strong></h3>\r\n\r\n<h4 style=\"text-align:justify\"><strong>Đọc s&aacute;ch gi&uacute;p Bảo vệ mắt</strong></h4>\r\n\r\n<p style=\"text-align:justify\">Với sự ph&aacute;t triển từ Internet, s&aacute;ch b&aacute;o điện tử, mạng x&atilde; hội kh&ocirc;ng c&ograve;n xa lạ với mọi người, thế nhưng khi mắt tiếp x&uacute;c qu&aacute; l&acirc;u với m&agrave;n h&igrave;nh điện thoại, m&aacute;y t&iacute;nh sẽ khiến giảm đi phần n&agrave;o thị lực. C&ograve;n đọc s&aacute;ch b&aacute;o giấy truyền thống th&igrave; kh&aacute;c, n&oacute; kh&ocirc;ng mang những ảnh hưởng của bức xạ đến mắt lại dễ d&agrave;ng ghi ch&uacute;, quen thuộc.</p>\r\n\r\n<h4 style=\"text-align:justify\"><strong>Đọc s&aacute;ch gi&uacute;p Giảm stress</strong></h4>\r\n\r\n<p style=\"text-align:justify\">Với những người thường xuy&ecirc;n phải l&agrave;m việc với m&aacute;y t&iacute;nh, c&ocirc;ng việc văn ph&ograve;ng dễ d&agrave;ng mắc phải t&igrave;nh trạng stress, đau đầu v&agrave; mỏi mắt. Việc đọc s&aacute;ch để thư gi&atilde;n l&agrave; một c&aacute;ch gi&uacute;p giảm bớt đi những căng thẳng mệt mỏi, l&agrave;m cho tr&iacute; &oacute;c khoẻ mạnh, th&ocirc;ng suốt hơn.</p>\r\n\r\n<h4 style=\"text-align:justify\"><strong>Giải tr&iacute; l&agrave;nh mạnh với chi ti&ecirc;u thấp</strong></h4>\r\n\r\n<p style=\"text-align:justify\">Thay v&igrave; tốn tiền v&agrave;o những cuộc vui chơi tốn ph&iacute;, bạn chỉ cần t&igrave;m mua một quyển s&aacute;ch ph&ugrave; hợp với m&igrave;nh hoặc những chủ đề nội dung mới mẻ để chi&ecirc;m nghiệm những gi&aacute; trị m&agrave; quyển s&aacute;ch mang lại th&igrave; c&agrave;ng bổ &iacute;ch hơn nhưng chi ph&iacute; chẳng tốn k&eacute;m bao nhi&ecirc;u.</p>\r\n\r\n<h4 style=\"text-align:justify\"><strong>Mở mang kiến thức</strong></h4>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng chỉ l&agrave; nguồn giải tr&iacute; l&agrave;nh mạnh, s&aacute;ch c&ograve;n l&agrave; gi&aacute; trị thiết thực cho những kỹ năng, kiến thức trong c&ocirc;ng việc, học tập. Qua những m&agrave;i m&ograve; từ những g&igrave; s&aacute;ch mang lại, sẽ gi&uacute;p cho người đọc hiểu ra những vấn đề trong thực tiễn, từ đ&oacute; c&oacute; những c&aacute;ch giải quyết, thay đổi, ph&aacute;t triển bản th&acirc;n, trau dồi những kỹ năng cần thiết cho c&ocirc;ng việc, cho cuộc sống.</p>\r\n\r\n<h4 style=\"text-align:justify\"><strong>Ch&igrave;a kho&aacute; th&agrave;nh c&ocirc;ng</strong></h4>\r\n\r\n<p style=\"text-align:justify\">T&iacute;ch luỹ cho m&igrave;nh nguồn kiến thức v&ocirc; tận từ s&aacute;ch l&agrave; cơ hội để đến đ&iacute;ch của sự th&agrave;nh c&ocirc;ng. Thực chất, s&aacute;ch l&agrave; sản phẩm tr&iacute; tuệ của con người, n&oacute; đ&uacute;c kết tất cả những kinh nghiệm, những kết quả đ&atilde; đạt được từ thực tiễn l&agrave;m cơ sở, nền tảng cho thế hệ sau. V&igrave; thế, ngẫm được những g&igrave; qu&yacute; gi&aacute; trong s&aacute;ch, từ đ&oacute; &aacute;p dụng v&agrave;o thực tiễn cuộc sống, từng bước ph&aacute;t triển bản th&acirc;n vươn đến th&agrave;nh c&ocirc;ng.</p>', 1, '2023-05-17 02:58:14', '2023-05-17 03:00:18', NULL),
(2, 'Cách đọc sách nhanh và hiệu quả mà nhiều “mọt sách” chưa biết', 'Q3NEX_1677405451_anh2.jpg', 'Dù công nghệ ngày càng phát triển nhưng đọc sách vẫn được nhiều người lựa chọn như một cách vừa thư giãn vừa củng cố kiến thức. Trong bài viết hôm nay Nshop sẽ chia sẻ 3 cách đọc sách nhanh và hiệu quả. Cùng tìm hiểu nhé!', '<h3 style=\"text-align:justify\"><strong>B&iacute; quyết đọc s&aacute;ch hiệu quả</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Để đọc s&aacute;ch một c&aacute;ch c&oacute; hiệu quả, bản th&acirc;n kh&ocirc;ng n&ecirc;n dồn &eacute;p m&igrave;nh phải đọc thật nhiều s&aacute;ch hay đọc bao nhi&ecirc;u trang s&aacute;ch trong một ng&agrave;y,&hellip; m&agrave; đọc s&aacute;ch l&agrave; phải thường thức, suy ngẫm từng vấn đề, từng c&acirc;u chuyện tr&ecirc;n từng trang s&aacute;ch đọc qua giống như thưởng thức một m&oacute;n ăn ngon, cảm nhận từng hương vị trong m&oacute;n ăn đ&oacute;.</p>\r\n\r\n<p style=\"text-align:justify\">H&atilde;y tạo đọc s&aacute;ch th&agrave;nh th&oacute;i quen mỗi ng&agrave;y, thay v&igrave; mỗi s&aacute;ng bạn ngủ nướng th&ecirc;m 5-10 ph&uacute;t, h&atilde;y d&agrave;nh 5-10 ph&uacute;t ấy, đọc v&agrave;i trang s&aacute;ch c&ugrave;ng nh&acirc;m nhi một t&aacute;ch c&agrave; ph&ecirc; n&oacute;ng hay tr&agrave; xanh, sẽ gi&uacute;p cho một ng&agrave;y mới bắt đầu với sự tươi tỉnh v&agrave; tr&agrave;n đầy năng lượng.</p>\r\n\r\n<p style=\"text-align:justify\">Trước khi đọc s&aacute;ch, bạn cần phải x&aacute;c định rằng mục ti&ecirc;u để m&igrave;nh đọc s&aacute;ch l&agrave; g&igrave;, m&igrave;nh sẽ chọn s&aacute;ch c&oacute; nội dung ra sao, thể loại n&agrave;o ph&ugrave; hợp. Nếu c&oacute; nhiều s&aacute;ch, bạn n&ecirc;n sắp xếp ra xem m&igrave;nh n&ecirc;n đọc loại s&aacute;ch n&agrave;o trước.</p>\r\n\r\n<p style=\"text-align:justify\">Chọn mua một quyển s&aacute;ch kh&ocirc;ng n&ecirc;n để &yacute; b&ecirc;n ngo&agrave;i tấm b&igrave;a c&oacute; t&ecirc;n, h&igrave;nh ảnh bắt mắt ra sao, bạn cần phải đọc nội dung t&oacute;m tắt, lời mở đầu giới thiệu để biết được m&igrave;nh c&oacute; thực sự c&oacute; hứng th&uacute; với nội dung đ&oacute;, tr&aacute;nh việc sau n&agrave;y bạn sẽ cảm thấy ch&aacute;n nản, kh&ocirc;ng h&agrave;i l&ograve;ng với quyển s&aacute;ch m&agrave; m&igrave;nh đ&atilde; chọn.</p>\r\n\r\n<p style=\"text-align:justify\">Bắt đầu đọc s&aacute;ch từ những trang t&oacute;m tắt, giới thiệu đầu ti&ecirc;n rồi dần đến những nội dung b&ecirc;n trong. Từ từ ngẫm từng con chữ từng trang s&aacute;ch bằng mắt, tuyệt đối kh&ocirc;ng n&ecirc;n đọc s&aacute;ch th&agrave;nh tiếng. V&igrave; khi đ&oacute;, mức độ tập trung sẽ bị chi phối. Cho d&ugrave; bạn đọc nhiều đi nữa th&igrave; những g&igrave; đọng lại trong đầu cũng chẳng c&oacute; bao nhi&ecirc;u.</p>\r\n\r\n<p style=\"text-align:justify\">Khi đọc s&aacute;ch h&atilde;y thật tập trung v&agrave; suy nghĩ li&ecirc;n tưởng đến những g&igrave; m&agrave; s&aacute;ch đang n&oacute;i đến, đừng để mắt th&igrave; lướt nh&igrave;n chữ c&ograve;n trong đầu th&igrave; nghĩ những chuyện kh&aacute;c. Bạn sẽ chẳng thể n&agrave;o t&iacute;ch luỹ được từ quyển s&aacute;ch được đ&acirc;u.</p>\r\n\r\n<p style=\"text-align:justify\">B&ecirc;n cạnh quyển s&aacute;ch bạn cũng cần chuẩn bị th&ecirc;m giấy hoặc b&uacute;t để note ghi ch&uacute; lại những g&igrave; bạn r&uacute;t ra được từ c&acirc;u chuyện m&agrave; m&igrave;nh đ&atilde; đọc qua. Trang bị cho quyển s&aacute;ch một vật dụng để đ&aacute;nh dấu trang m&agrave; m&igrave;nh đang đọc dở để lần sau kh&ocirc;ng phải vất vả t&igrave;m kiếm trang n&agrave;o m&igrave;nh đ&atilde; đọc đến.</p>\r\n\r\n<h2 style=\"text-align:justify\">3 C&aacute;ch đọc s&aacute;ch nhanh v&agrave; hiệu quả</h2>\r\n\r\n<p style=\"text-align:justify\">Dưới đ&acirc;y l&agrave; một số kỹ năng đọc s&aacute;ch hiệu quả m&agrave; bạn n&ecirc;n biết để c&oacute; thể đọc s&aacute;ch nhanh v&agrave; ghi nhớ l&acirc;u hơn.</p>\r\n\r\n<h3 style=\"text-align:justify\">Đọc những c&acirc;u từ quan trọng &ndash; C&aacute;ch đọc s&aacute;ch nhanh v&agrave; hiệu quả</h3>\r\n\r\n<p style=\"text-align:justify\">Khi học trong trường, bạn sẽ c&oacute; một th&oacute;i quen khiến bạn đọc chậm đ&oacute; l&agrave; phải quan t&acirc;m đến tất cả c&aacute;c từ trong c&acirc;u theo thứ tự. Nhưng bạn c&oacute; biết t&acirc;m tr&iacute; ch&uacute;ng ta c&oacute; một khả năng tuyệt vời l&agrave; lấp đầy c&aacute;c khoảng trống bằng những th&ocirc;ng tin th&iacute;ch hợp. V&igrave; vậy, ch&uacute;ng ta cũng c&oacute; thể tận dụng khả năng n&agrave;y để c&oacute; thể đọc s&aacute;ch hiệu quả hơn.</p>\r\n\r\n<p style=\"text-align:justify\">Khi đ&atilde; quen với việc đọc m&agrave; kh&ocirc;ng đọc r&otilde; từng từ trong đầu, bạn sẽ thấy m&igrave;nh bắt đầu&nbsp; c&oacute; thể nh&oacute;m nhiều từ lại với nhau th&agrave;nh những cụm c&oacute; &yacute; nghĩa lớn hơn. Thay v&igrave; nh&igrave;n thấy &ldquo;con&rdquo; &ldquo;m&egrave;o&rdquo; &ldquo;bị&rdquo; &ldquo;đi&ecirc;n&rdquo; từng chữ ri&ecirc;ng lẻ th&igrave; t&acirc;m tr&iacute; của bạn sẽ nhận thức &ldquo;con m&egrave;o bị đi&ecirc;n&rdquo; như l&agrave; một th&ocirc;ng tin duy nhất. Khi điều đ&oacute; xảy ra, cụm từ c&oacute; &yacute; nghĩa nhất định sẽ nổi bật trong đoạn văn. V&agrave; đ&ocirc;i mắt của bạn sẽ chỉ lướt qua c&aacute;c từ phụ cũng như kh&ocirc;ng mất qu&aacute; nhiều thời gian v&agrave; sức lực v&agrave;o nghĩa của ch&uacute;ng.</p>\r\n\r\n<h3 style=\"text-align:justify\">Đọc c&acirc;u đầu v&agrave; c&acirc;u cuối của đoạn văn &ndash; C&aacute;ch đọc s&aacute;ch nhanh v&agrave; hiệu quả</h3>\r\n\r\n<p style=\"text-align:justify\">Một vấn đề thực tế m&agrave; c&aacute;c mọt s&aacute;ch c&oacute; thể thấy rằng c&aacute;c cuốn&nbsp;<a href=\"https://shopee.vn/search?keyword=s%C3%A1ch%20phi%20ti%E1%BB%83u%20thuy%E1%BA%BFt\">s&aacute;ch phi tiểu thuyết</a>&nbsp;thường kh&ocirc;ng được viết tốt. N&oacute; thường lặp đi lặp lại v&agrave; kh&aacute; d&agrave;i d&ograve;ng. Họ sẽ mang đến cho bạn hết v&iacute; dụ n&agrave;y đến v&iacute; dụ kh&aacute;c về một kh&aacute;i niệm đơn giản m&agrave; bạn đ&atilde; hiểu. Kh&ocirc;ng c&oacute; l&yacute; do để bạn phải mất thời gian v&igrave; điều n&agrave;y. Đặc biệt nếu bạn l&agrave; một người đọc s&aacute;ch th&ocirc;ng minh v&agrave; c&oacute; chọn lọc.</p>\r\n\r\n<p style=\"text-align:justify\">Một c&aacute;ch gi&uacute;p bạn đọc hiệu quả hơn l&agrave; đọc c&acirc;u đầu ti&ecirc;n v&agrave; c&acirc;u cuối c&ugrave;ng của mỗi đoạn văn. Bạn sẽ thật sự bất ngờ trước lượng th&ocirc;ng tin bạn c&oacute; thể thu được chỉ bằng phương ph&aacute;p n&agrave;y.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Li&ecirc;n kết th&ocirc;ng tin tới những điều thực tế m&agrave; bạn biết</h3>\r\n\r\n<p style=\"text-align:justify\">Khi đọc nhiều s&aacute;ch, bạn cảm thấy lo lắng sẽ kh&ocirc;ng nhớ được tất cả c&aacute;c th&ocirc;ng tin đ&atilde; đọc. Bạn cảm gi&aacute;c kh&ocirc;ng thể gợi nhớ lại tất cả mọi thứ ngay lập tức. V&igrave; vậy, đ&ocirc;i khi bạn đọc h&agrave;ng trăm trang m&agrave; kh&ocirc;ng nhớ được g&igrave;. Bạn sẽ cảm thấy sự th&ocirc;i th&uacute;c tự hỏi lại ch&iacute;nh m&igrave;nh về những g&igrave; m&agrave; m&igrave;nh vừa đọc.</p>\r\n\r\n<p style=\"text-align:justify\">Bạn cần biết c&aacute;ch m&agrave; bộ n&atilde;o hoạt động như sau: phần lớn c&aacute;c k&yacute; ức của ch&uacute;ng ta trong cuộc sống sẽ tồn tại trong tiềm thức v&agrave; chỉ li&ecirc;n kết được trong bối cảnh li&ecirc;n quan. V&acirc;ng, ch&uacute;ng chỉ cần được kết hợp với một c&aacute;i g&igrave; đ&oacute; thực tế c&oacute; li&ecirc;n quan để xuất hiện trong tr&iacute; nhớ của bạn.</p>\r\n\r\n<p style=\"text-align:justify\">Đ&acirc;y l&agrave; l&yacute; do v&igrave; sao mỗi khi gặp một &yacute; tưởng mới hoặc hữu &iacute;ch, bạn phải mất một ch&uacute;t thời gian để li&ecirc;n kết n&oacute; với một c&aacute;i g&igrave; đ&oacute; m&agrave; bạn đ&atilde; biết, hiểu v&agrave; sử dụng. H&atilde;y thử &aacute;p dụng xem hiệu quả mang lại thế n&agrave;o nh&eacute;.</p>', 1, '2023-05-17 03:02:19', '2023-05-17 03:02:19', NULL),
(3, 'Top 10 cuốn sách bạn nên đọc nhất hiện nay', 'w19gU_1677406032_sach-la-gi (1).jpg', 'Đọc sách là một thói quen tốt cần được duy trì bởi đọc sách đem lại những giá trị to lớn, đôi khi thay đổi cuộc sống của chính chúng ta. Một quyển sách hay có thể cung cấp góc nhìn mới, khía cạnh mới trong lĩnh vực của đời sống.', '<h2 style=\"text-align:justify\">Dưới đ&acirc;y l&agrave; những cuốn s&aacute;ch hay n&ecirc;n đọc gi&uacute;p bạn thay đổi tư duy v&agrave; c&aacute;c nh&igrave;n nhận cuộc sống của ch&iacute;nh m&igrave;nh.</h2>\r\n\r\n<h3 style=\"text-align:justify\">Nh&agrave; giả kim &ndash; The Alchemist</h3>\r\n\r\n<p style=\"text-align:justify\">Nh&agrave; giả kim l&agrave; tiểu thuyết xoay quanh chuyến h&agrave;nh tr&igrave;nh theo đuổi ước mơ của cậu b&eacute; chăn cừu Santiago. Mọi chuyện bắt đầu từ việc cậu mơ c&ugrave;ng một giấc mơ đến hai lần m&agrave; kh&ocirc;ng thể n&agrave;o l&yacute; giải nổi. Một ng&agrave;y nọ, cậu gặp được một người đo&aacute;n mộng đồng thời cậu phải hứa chia cho người n&agrave;y một phần mười kho b&aacute;u khi đến được Kim Tự Th&aacute;p. Chuyến phi&ecirc;u lưu mang đến cho cậu nhiều kh&oacute; khăn v&agrave; thử th&aacute;ch nhưng cũng gi&uacute;p cậu nhận ra được những ch&acirc;n l&yacute; của cuộc đời, khai s&aacute;ng con người Santiago.</p>\r\n\r\n<h3 style=\"text-align:justify\">Quốc gia khởi nghiệp &ndash; Start-up Nation</h3>\r\n\r\n<p style=\"text-align:justify\">Quốc gia khởi nghiệp l&agrave; cuốn s&aacute;ch ph&acirc;n t&iacute;ch để đi t&igrave;m c&acirc;u trả lời cho c&acirc;u hỏi tại sao một quốc gia &ldquo;trẻ&rdquo; như Israel với d&acirc;n số chỉ 7,1 triệu người nhưng lại l&agrave; quốc gia c&oacute; nhiều c&ocirc;ng ty được ni&ecirc;m yết tr&ecirc;n s&agrave;n chứng kho&aacute;n NASDAQ nhất tr&ecirc;n thế giới. Theo t&aacute;c giả th&igrave; chế độ nghĩa vụ qu&acirc;n sự bắt buộc v&agrave; nhập cư đ&atilde; c&oacute; ảnh hưởng lớn đến tăng trưởng kinh tế quốc gia ở Israel. B&ecirc;n cạnh việc đề cập đến c&aacute;c th&agrave;nh tựu li&ecirc;n quan đến c&ocirc;ng nghệ v&agrave; y tế, th&igrave; Quốc gia khởi nghiệp c&ograve;n đưa ra những l&yacute; giải về việc tại sao Israel vẫn kh&ocirc;ng c&oacute; c&aacute;c tập đo&agrave;n lớn của ri&ecirc;ng m&igrave;nh như Samsung của H&agrave;n Quốc hay IBM của Mỹ,&hellip;</p>\r\n\r\n<h3 style=\"text-align:justify\">Bắt trẻ đồng xanh &ndash; The catcher in the rye</h3>\r\n\r\n<p style=\"text-align:justify\">Bắt trẻ đồng xanh l&agrave; t&aacute;c phẩm được kể qua lời của nh&acirc;n vật ch&iacute;nh Holden Caulfield, ch&agrave;ng thanh ni&ecirc;n 17 tuổi vừa mới bị đuổi khỏi ng&ocirc;i trường thứ tư của m&igrave;nh. C&oacute; thể n&oacute;i, t&aacute;c giả đ&atilde; mượn c&aacute;i nh&igrave;n của một ch&agrave;ng thiếu ni&ecirc;n để phản &aacute;nh những thực tại của x&atilde; hội thời bấy giờ. Đ&oacute; l&agrave; một x&atilde; hội xấu xa được thể hiện qua những c&acirc;u từ đ&ocirc;i khi rất th&ocirc; tục.</p>\r\n\r\n<h3 style=\"text-align:justify\">&Ocirc;ng gi&agrave; v&agrave; biển cả &ndash; The old man and the sea</h3>\r\n\r\n<p style=\"text-align:justify\">&Ocirc;ng gi&agrave; v&agrave; biển cả l&agrave; c&acirc;u chuyện về &ocirc;ng l&atilde;o đ&aacute;nh c&aacute; Santiago c&ugrave;ng chuyến đ&aacute;nh bắt c&aacute; l&ecirc;nh đ&ecirc;nh tr&ecirc;n biển của m&igrave;nh. &Ocirc;ng đ&atilde; chiến đấu 3 ng&agrave;y 3 đ&ecirc;m với con c&aacute; kiếm khổng lồ tr&ecirc;n v&ugrave;ng Giếng Lớn. Nhưng sau đ&oacute;, &ocirc;ng lại gặp một đ&agrave;n c&aacute; mập v&agrave; phải tiếp tục chiến đấu với ch&uacute;ng. D&ugrave; đ&atilde; cố gắng thế nhưng khi về đến bờ, con c&aacute; kiếm của &ocirc;ng l&atilde;o Santiago chỉ c&ograve;n lại l&agrave; một bộ xương khổng lồ.</p>\r\n\r\n<h3 style=\"text-align:justify\">Thế giới phẳng &ndash; The world is flat</h3>\r\n\r\n<p style=\"text-align:justify\">Thế giới phẳng l&agrave; cuốn s&aacute;ch đề cập đến sự b&ugrave;ng nổ v&agrave; những ph&aacute;t triển vượt bậc về c&ocirc;ng nghệ cũng như qu&aacute; tr&igrave;nh to&agrave;n cầu h&oacute;a. Tuy nhi&ecirc;n, sự tăng trưởng về kinh tế cũng k&eacute;o theo nhiều vấn đề nan giải. Sự ph&aacute;t triển của Internet đ&atilde; tạo n&ecirc;n một thế giới phẳng hơn bởi chỉ cần một chiếc m&aacute;y t&iacute;nh l&agrave; ch&uacute;ng ta c&oacute; thể l&agrave;m bất cứ điều g&igrave;, kết nối với bất kỳ ai. V&igrave; vậy đ&atilde; mở ra những cơ hội mới cho con người tr&ecirc;n to&agrave;n cầu.</p>\r\n\r\n<h3 style=\"text-align:justify\">Đi t&igrave;m lẽ sống &ndash; Man&rsquo;s search for meaning</h3>\r\n\r\n<p style=\"text-align:justify\">Đi t&igrave;m lẽ sống l&agrave; cuốn s&aacute;ch dựa tr&ecirc;n những trải nghiệm thực tế của t&aacute;c giả Victor Frankl trong thảm họa diệt chủng của Đức quốc x&atilde;. Cũng giống như nhiều người Do Th&aacute;i sống tại Đức v&agrave; Đ&ocirc;ng u trong những năm 1930, Frankl phải trải qua những ng&agrave;y th&aacute;ng khốn c&ugrave;ng trong trại tập trung Auschwitch.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">Mười ba nguy&ecirc;n tắc nghĩ gi&agrave;u l&agrave;m gi&agrave;u &ndash; Think and grow rich</h3>\r\n\r\n<p style=\"text-align:justify\">Nếu bạn đang muốn t&igrave;m kiếm một cuốn s&aacute;ch gi&uacute;p ph&aacute;t triển bản th&acirc;n, gi&uacute;p bạn t&igrave;m ra được những nguồn lực để trở n&ecirc;n gi&agrave;u c&oacute; hơn. Cuốn s&aacute;ch đ&atilde; đ&uacute;c kết kinh nghiệm của hơn 500 tỷ ph&uacute; tự th&acirc;n, những người l&agrave;m gi&agrave;u bằng đ&ocirc;i b&agrave;n tay v&agrave; khối &oacute;c của m&igrave;nh. D&ugrave; đ&atilde; được viết rất l&acirc;u nhưng cuốn s&aacute;ch vẫn giữ được những gi&aacute; trị v&agrave; được &aacute;p dụng trong nhiều lĩnh vực kh&aacute;c nhau.</p>\r\n\r\n<h3 style=\"text-align:justify\">Tư duy như một kẻ lập dị &ndash; Think like a freak</h3>\r\n\r\n<p style=\"text-align:justify\">Với lối viết ph&aacute; c&aacute;ch mong muốn hướng độc giả đến lối tư duy đơn giản v&agrave; logic, Tư duy như một kẻ lập dị chỉ ra rằng con người vẫn lu&ocirc;n c&oacute; t&acirc;m l&yacute; bầy đ&agrave;n d&oacute; đ&oacute; m&agrave; suy nghĩ hay h&agrave;nh động của họ đều bị ảnh hưởng bởi số đ&ocirc;ng. Hơn nữa, điều n&agrave;y sẽ l&agrave;m cản trở sự ph&aacute;t triển, khiến họ kh&ocirc;ng thể ph&aacute;t huy được những thế mạnh của bản th&acirc;n.</p>\r\n\r\n<h3 style=\"text-align:justify\">Chiến binh cầu vồng &ndash; The rainbow troops</h3>\r\n\r\n<p style=\"text-align:justify\">Chiến binh cầu vồng l&agrave; c&acirc;u chuyện về một ng&ocirc;i l&agrave;ng ngh&egrave;o tr&ecirc;n đảo Belitong, Indonesia v&agrave;o những năm 80. Những cậu b&eacute; trong t&aacute;c phẩm học tại một ng&ocirc;i trường m&agrave; c&oacute; thể sẽ phải đ&oacute;ng cửa nếu kh&ocirc;ng đủ 10 học sinh. V&agrave; Harun, một cậu b&eacute; bị khuyết tật tr&iacute; tuệ, xuất hiện đ&atilde; gi&uacute;p ng&ocirc;i trường c&oacute; thể tiếp tục duy tr&igrave; hoạt động.</p>\r\n\r\n<h3 style=\"text-align:justify\">Đọc vị bất kỳ ai &ndash; You can read anyone</h3>\r\n\r\n<p style=\"text-align:justify\">Đọc vị bất kỳ ai l&agrave; t&aacute;c phẩm được viết bởi nh&agrave; h&agrave;nh vi học nổi tiếng David J. Lieberman gồm hai phần được chia th&agrave;nh 15 chương. Cuốn s&aacute;ch l&agrave; những kết quả ph&acirc;n t&iacute;ch được dựa tr&ecirc;n phương ph&aacute;p S.N.A.P. Đ&acirc;y l&agrave; c&aacute;ch gi&uacute;p con người hiểu được đối phương m&agrave; kh&ocirc;ng g&acirc;y ra sự hiểu lầm.</p>\r\n\r\n<h2 style=\"text-align:justify\">Kết luận</h2>\r\n\r\n<p style=\"text-align:justify\">Những cuốn s&aacute;ch hay th&igrave; &iacute;t nhiều đều chứa đựng những gi&aacute; trị vĩnh hằng. V&igrave; thế h&atilde;y cố gắng duy tr&igrave; một th&oacute;i quen đọc s&aacute;ch để trang bị cho bản th&acirc;n một tư duy mới v&agrave; một c&aacute;ch sống mới nh&eacute;!</p>', 1, '2023-05-17 03:04:58', '2023-05-17 03:04:58', NULL),
(4, 'Quà tặng 20/11: Những cuốn sách đẹp về Người Thầy', 'bqtAM_1677406343_qua-tang-20-11-sach-ve-thay-co.jpg', 'Trong những cuốn sách này, hình ảnh những người thầy giáo, cô giáo được khắc hoạ đều chứa chan tình yêu dành cho học trò. Đó là sự thấu hiểu tâm lý các em, những bài giảng đầy tâm huyết và niềm tin giúp họ trò trưởng thành.', '<h2 style=\"text-align:justify\">C&acirc;y vỹ cầm cuồng nộ</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Joanne Lipman &amp; Melanie Kupchynsky</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;C&acirc;y vĩ c&acirc;̀m cu&ocirc;̀ng n&ocirc;̣&rdquo; là cu&ocirc;́n h&ocirc;̀i ký tuy&ecirc;̣t vời, c&acirc;u chuy&ecirc;̣n v&ecirc;̀ m&ocirc;̣t người th&acirc;̀y đã dùng linh h&ocirc;̀n ngh&ecirc;̣ thu&acirc;̣t của mình, sức mạnh của những n&ocirc;̃i đau trong quá khứ đ&ecirc;̉ phá bỏ những giới hạn v&ecirc;̀ nh&acirc;̣n thức năng lực của bi&ecirc;́t bao th&ecirc;́ h&ecirc;̣ học trò. Th&acirc;̀y là người đã thắp l&ecirc;n ngọn lửa của sự đam m&ecirc;, tình y&ecirc;u thương, ni&ecirc;̀m tin tưởng mãnh li&ecirc;̣t vào sức mạnh của vi&ecirc;̣c luy&ecirc;̣n t&acirc;̣p chăm chỉ. Cu&ocirc;́n sách kh&ocirc;ng chỉ là m&ocirc;̣t c&acirc;u chuy&ecirc;̣n mang tính định hướng, kh&ocirc;ng chỉ là m&ocirc;̣t c&acirc;u chuy&ecirc;̣n v&ecirc;̀ phong cách giáo dục. Nó còn là c&acirc;u chuy&ecirc;̣n đặt ra cho chúng ta m&ocirc;̣t c&acirc;u hỏi đơn giản nhưng s&acirc;u sắc &ldquo;Làm th&ecirc;́ nào đ&ecirc;̉ s&ocirc;́ng?</p>\r\n\r\n<h2 style=\"text-align:justify\">Tottochan &ndash; C&ocirc; b&eacute; ngồi b&ecirc;n cửa sổ</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Tetsuko Kuroyanagi</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: YBox)\" src=\"https://cth.edu.vn/wp-content/uploads/vnwriter.net/wp-content/uploads/2016/11/sach-totochan.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: YBox</p>\r\n\r\n<p style=\"text-align:justify\">Totto Chan l&agrave; một c&ocirc; b&eacute; hiếu động kh&ocirc;ng thể ngồi y&ecirc;n trong lớp. Mới 6 tuổi, c&ocirc; b&eacute; đ&atilde; bị &ldquo;đuổi học&rdquo; bởi t&iacute;nh c&aacute;ch lạ l&ugrave;ng của m&igrave;nh. Mẹ c&ocirc; b&eacute; đ&atilde; quyết định chuyển em đến trường Tomoe. Thầy hiệu trưởng Kobayashi lu&ocirc;n khuyến kh&iacute;ch c&aacute;c em n&oacute;i l&ecirc;n điều m&igrave;nh muốn. Thầy c&ograve;n chăm lo đến từng bữa ăn của học sinh, nh&igrave;n ra thế mạnh của từng em&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">Nhờ phương ph&aacute;p gi&aacute;o dục &ldquo;mở&rdquo; n&agrave;y, học sinh Tomoe đều trở th&agrave;nh những người th&agrave;nh đạt trong x&atilde; hội. Trong lời kể ng&acirc;y thơ của c&ocirc; b&eacute; Tottochan, thầy hiệu trưởng hiện l&ecirc;n như một người cha nh&acirc;n từ. Sau n&agrave;y, t&aacute;c giả Tetsuko Kuroyanagi chia sẻ: &ldquo;Nếu kh&ocirc;ng học ở Tomoe, nếu kh&ocirc;ng được gặp thầy Kobayashi, c&oacute; lẽ t&ocirc;i đ&atilde; l&agrave; một người mang đầy mặc cảm tự ti với c&aacute;i m&aacute;c &lsquo;đứa b&eacute; hư&rsquo; m&agrave; mọi người g&aacute;n cho&rdquo;.</p>\r\n\r\n<h2 style=\"text-align:justify\">Những tấm l&ograve;ng cao cả</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Edmondo De Amicis</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: YBox)\" src=\"https://cth.edu.vn/wp-content/uploads/vnwriter.net/wp-content/uploads/2016/11/sach-nhung-tam-long-cao-ca.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: YBox</p>\r\n\r\n<p style=\"text-align:justify\">Cuốn s&aacute;ch ra đời từ những năm 80 của thế kỷ 19 nhưng vẫn c&ograve;n vẹn nguy&ecirc;n gi&aacute; trị, đặc biệt với ng&agrave;nh gi&aacute;o dục. Qua trang nhật k&yacute; của cậu học tr&ograve; Enrico, ta bắt gặp h&igrave;nh tượng những người thầy vừa gần gũi, vừa đ&aacute;ng k&iacute;nh trọng.</p>\r\n\r\n<h5 style=\"text-align:justify\">Đ&oacute; l&agrave; thầy hiệu trưởng cao lớn, đầu h&oacute;i, r&acirc;u d&agrave;i, ăn mặc rất chỉn chu nhưng lại rất hiền. Với những học sinh mắc lỗi, thầy chỉ &ldquo;nắm lấy tay học tr&ograve;, dịu d&agrave;ng khuyến kh&iacute;ch, giảng giải cho họ phải cư xử như thế n&agrave;o&rdquo;. V&agrave; kết quả l&agrave; &ldquo;thường thường th&igrave; học sinh hối hận v&igrave; lỗi lầm của m&igrave;nh v&agrave; sẽ kh&ocirc;ng mắc lại nữa&rdquo;.</h5>\r\n\r\n<p style=\"text-align:justify\">H&agrave;nh động ấm &aacute;p ấy khiến &ldquo;ra khỏi ph&ograve;ng của thầy, học sinh đều rơm rớm nước mắt, v&agrave; hổ thẹn hơn l&agrave; bị phạt&rdquo;. Sau khi đứa mất đứa con trai, thầy muốn nghỉ hưu. Nhưng thầy lại thấy đau khổ khi phải chia tay học sinh. Thầy chần chừ m&atilde;i v&agrave; rồi đ&atilde; phải x&eacute; l&aacute; đơn xin từ chức đi v&agrave; tiếp tục ở lại trường.</p>\r\n\r\n<h5 style=\"text-align:justify\">V&agrave; thầy gi&aacute;o c&oacute; t&ecirc;n P&eacute;c-b&ocirc;-ni, chủ nhiệm lớp Enrico cũng thật đ&aacute;ng k&iacute;nh. &Ocirc;ng kh&ocirc;ng c&oacute; gia đ&igrave;nh ri&ecirc;ng, mặc d&ugrave; kh&ocirc;ng bao giờ cười nhưng thầy lại lu&ocirc;n ki&ecirc;n nhẫn, t&igrave;m hiểu, y&ecirc;u thương v&agrave; chia sẻ với từng học sinh. Khi phải bắt buộc phạt một học sinh v&igrave; ngỗ ngược, ph&aacute; rối th&igrave; thầy rất đau l&ograve;ng. Khi thấy kết quả thi cuối năm của học sinh m&igrave;nh đều tốt, thầy đ&atilde; l&agrave;m vui học sinh m&igrave;nh bằng c&aacute;ch giả bộ trượt ch&acirc;n, phải b&aacute;m v&agrave;o bức tường cho khỏi ng&atilde;.</h5>\r\n\r\n<h2 style=\"text-align:justify\">Người Thầy</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>:&nbsp;Frank McCourt</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: Thái Hà Books)\" src=\"https://cth.edu.vn/wp-content/uploads/www.kenhso5.com/wp-content/uploads/2015/11/Thay-1.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Th&aacute;i H&agrave; Books</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Người thầy&rdquo; l&agrave; cuốn tự truyện gi&agrave;u cảm x&uacute;c của Frank McCourt, nh&agrave; văn đ&atilde; từng đoạt giải Pulitzer.&nbsp;&Ocirc;ng đồng thời cũng l&agrave; một thầy gi&aacute;o dạy văn.</p>\r\n\r\n<p style=\"text-align:justify\">&Ocirc;ng từng phải đối mặt với v&ocirc; v&agrave;n t&igrave;nh huống o&aacute;i oăm từ lũ học tr&ograve; 16 tuổi ngỗ ngược. &Ocirc;ng cũng su&yacute;t bị sa thải bởi phương ph&aacute;p dạy học ngược đời. Thế nhưng McCourt vẫn kh&ocirc;ng bao giờ từ bỏ ước mơ đ&aacute;nh thức t&acirc;m hồn bọn trẻ, những thiếu ni&ecirc;n nổi loạn v&agrave; c&oacute; phần l&atilde;nh cảm trước gi&aacute;o vi&ecirc;n v&agrave; cả nền gi&aacute;o dục.</p>\r\n\r\n<p style=\"text-align:justify\">Bằng l&ograve;ng ki&ecirc;n nhẫn của m&igrave;nh, McCourt đ&atilde; thực sự mang đến những thay đổi v&agrave; ảnh hưởng mạnh mẽ với học tr&ograve; của m&igrave;nh.&nbsp;Những giờ học của &ocirc;ng lu&ocirc;n rộn r&agrave;ng v&agrave; tr&agrave;n đầy năng lượng.</p>\r\n\r\n<h2 style=\"text-align:justify\">Tr&ecirc;n bục giảng</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Brad Cohen, Lisa Wysocky</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: Ybox)\" src=\"https://cth.edu.vn/wp-content/uploads/vnwriter.net/wp-content/uploads/2016/11/sach-tren-buc-giang.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Ybox</p>\r\n\r\n<p style=\"text-align:justify\">Brad Cohen mắc chứng bệnh rối loạn thần kinh. Ở thập ni&ecirc;n 1980, đ&acirc;y l&agrave; một chứng bệnh cực hiếm m&agrave; kh&ocirc;ng b&aacute;c sĩ n&agrave;o c&oacute; thể l&yacute; giải r&otilde; r&agrave;ng. V&igrave; thế, anh trở th&agrave;nh t&acirc;m điểm bị chế nhạo.&nbsp;Ngo&agrave;i gia đ&igrave;nh, Brad chỉ biết tin tưởng, bấu v&iacute;u v&agrave;o những người thầy m&agrave; anh v&ocirc; c&ugrave;ng ngưỡng mộ. Nhưng rồi họ cũng nhiều lần đuổi anh ra khỏi lớp khiến anh đau khổ v&ocirc; c&ugrave;ng.</p>\r\n\r\n<p style=\"text-align:justify\">Để chữa l&agrave;nh vết thương của ch&iacute;nh m&igrave;nh, Brad nu&ocirc;i ước mơ trở th&agrave;nh thầy gi&aacute;o &ndash; một h&igrave;nh mẫu gi&aacute;o vi&ecirc;n ch&acirc;n ch&iacute;nh m&agrave; anh lu&ocirc;n mường tượng. Đ&oacute; l&agrave; người kh&ocirc;ng chỉ truyền đạt kiến thức m&agrave; c&ograve;n n&acirc;ng đỡ t&acirc;m hồn học tr&ograve;.</p>\r\n\r\n<p style=\"text-align:justify\">Muốn hiện thực h&oacute;a điều đ&oacute;, Brad đ&atilde; phải trả qua h&agrave;nh tr&igrave;nh gian nan, đầy rẫy ch&ocirc;ng gai. Sau nhiều năm, Brad cũng chạm tới ước mơ của m&igrave;nh. Năm 2006, cuốn s&aacute;ch mang t&ecirc;n<em>&nbsp;Tr&ecirc;n bục giảng</em>&nbsp;của anh gi&agrave;nh giải thưởng s&aacute;ch gi&aacute;o dục d&agrave;nh cho những nh&agrave; xuất bản tự do.</p>\r\n\r\n<h2 style=\"text-align:justify\">Viết l&ecirc;n hy vọng</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Erin Gruwell</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: Thái Hà Books)\" src=\"https://cth.edu.vn/wp-content/uploads/www.kenhso5.com/wp-content/uploads/2015/11/Thay-4.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Th&aacute;i H&agrave; Books</p>\r\n\r\n<p style=\"text-align:justify\">V&agrave;o năm 1994, Erin Gruwell &ndash; một gi&aacute;o vi&ecirc;n Ngữ văn mới 23 tuổi v&agrave; tr&agrave;n đầy l&yacute; tưởng &ndash; về dạy tại trường Trung học Wilson, Long Beach, California. Như nhiều gi&aacute;o vi&ecirc;n mới ra trường kh&aacute;c, c&ocirc; phải đương đầu với một lớp học to&agrave;n những học sinh c&aacute; biệt, những th&agrave;nh phần &ldquo;hết thuốc chữa&rdquo; v&ocirc; c&ugrave;ng &ldquo;nguy hiểm&rdquo;.</p>\r\n\r\n<p style=\"text-align:justify\">Erin giới thiệu với c&aacute;c em cuốn nhật k&yacute; của Anne Frank v&agrave; truyền cảm hứng cho c&aacute;c em viết. Những trang viết của lũ trẻ t&aacute;i hiện lại cuộc sống đầy rẫy bạo lực, v&ocirc; gia cư, ph&acirc;n biệt chủng tộc, bệnh tật, bị lạm dụng&hellip; Từ những d&ograve;ng nhật k&yacute; đ&oacute;, Erin Grruwell dần thấu hiểu học tr&ograve; v&agrave; t&igrave;m mọi c&aacute;ch gi&uacute;p c&aacute;c em lấy lại niềm tin v&agrave;o cuộc sống.</p>\r\n\r\n<p style=\"text-align:justify\">Cuốn s&aacute;ch&nbsp;<em>Viết l&ecirc;n hy vọng</em>, tập hợp những trang nhật k&yacute; của c&ocirc; v&agrave; c&aacute;c em được xuất bản v&agrave;o năm 1999, l&agrave;m rung chuyển nền gi&aacute;o dục nước Mỹ thời điểm bấy giờ.</p>\r\n\r\n<h2 style=\"text-align:justify\">T&igrave;nh thầy tr&ograve;</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Todd Whitaker</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Người Thầy (Ảnh: Báo Mới)\" src=\"https://cth.edu.vn/wp-content/uploads/plo.vn/uploaded/phamquang/2014_11_16/8-sachtinhthaytro_htub.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: B&aacute;o Mới</p>\r\n\r\n<p style=\"text-align:justify\">Cuốn s&aacute;ch mang đến 34 c&acirc;u chuyện c&oacute; thật v&agrave; cảm động, đ&ocirc;i khi h&agrave;i hước về những người thầy tuyệt vời. Mỗi t&igrave;nh huống nhỏ cũng c&oacute; thể trở th&agrave;nh c&aacute;c kỷ niệm kh&oacute; qu&ecirc;n v&agrave; l&agrave; b&agrave;i học cho cả thầy lẫn tr&ograve;.</p>\r\n\r\n<p style=\"text-align:justify\">Những c&acirc;u chuyện trong T&igrave;nh thầy tr&ograve; (nguy&ecirc;n t&aacute;c For the love of teacher) cũng thể hiện một th&ocirc;ng điệp: Ảnh hưởng của người thầy đối với học tr&ograve; l&agrave; rất lớn, cả việc gi&uacute;p định h&igrave;nh nh&acirc;n c&aacute;ch học tr&ograve; trong suốt cuộc đời.</p>\r\n\r\n<h2 style=\"text-align:justify\">M&aacute;i trường th&acirc;n y&ecirc;u</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Thầy gi&aacute;o L&ecirc; Khắc Hoan</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: Zing News)\" src=\"https://cth.edu.vn/wp-content/uploads/znews-photo.zadn_.vn/w660/Uploaded/mzdqv/2015_11_19/68efa58f.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Zing News</p>\r\n\r\n<p style=\"text-align:justify\">Cuốn s&aacute;ch&nbsp;l&agrave; c&acirc;u chuyện c&oacute; thật kể về cậu học sinh t&ecirc;n Việt, vốn l&agrave; một học sinh thị x&atilde; chuyển về trường huyện L&acirc;m Thao. Do điều kiện gia đ&igrave;nh, Việt phải ở c&ugrave;ng b&agrave; nội v&agrave; bắt đầu l&agrave;m quen với thầy c&ocirc;, c&aacute;c bạn v&agrave; m&ocirc;i trường học tập mới.</p>\r\n\r\n<p style=\"text-align:justify\">Việt vốn l&agrave; một học sinh học giỏi, nhất l&agrave; m&ocirc;n to&aacute;n. Nhưng với m&ocirc;i trường mới, Việt chưa h&ograve;a nhập được, từ đ&oacute; xảy ra biết bao chuyện bi h&agrave;i trong năm học ấy. Cũng từ đấy, Việt c&ugrave;ng c&aacute;c nh&acirc;n vật v&agrave; c&aacute;c người bạn kh&aacute;c như c&ocirc; gi&aacute;o M&ugrave;i, Chiến, Mạnh, San, Loan, Quế&hellip; đ&atilde; tạo n&ecirc;n một c&acirc;u chuyện sinh động, ch&acirc;n thật v&agrave; cảm động về một ng&ocirc;i trường cấp hai miền Bắc trong thời chiến tranh bom đạn kh&oacute; khăn.</p>\r\n\r\n<h2 style=\"text-align:justify\">Thầy Thi&ecirc;n Đức</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>:&nbsp;Trần Việt Trung</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Người Thầy (Ảnh: VietnamNet)\" src=\"https://cth.edu.vn/wp-content/uploads/imgs.vietnamnet.vn/Images/2016/11/16/11/20161116114047-thay-thien-duc-2.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: VietnamNet</p>\r\n\r\n<p style=\"text-align:justify\">Cuốn s&aacute;ch&nbsp;kể về vị thầy l&agrave; nguy&ecirc;n mẫu c&oacute; thật, l&agrave;m sống lại một thế hệ tr&iacute; thức của nền văn h&oacute;a xưa &ndash; nền văn h&oacute;a dựa tr&ecirc;n nền tảng Nho học với những gi&aacute; trị ri&ecirc;ng. Ở đ&oacute; Nho &ndash; Y &ndash; L&iacute; &ndash; Số l&agrave; bốn bộ m&ocirc;n gắn b&oacute; rất chặt chẽ với đời sống cộng đồng, đ&aacute;p ứng được kh&aacute; đầy đủ những nhu cầu thường gặp trong cuộc sống của mỗi con người cũng như của to&agrave;n x&atilde; hội.</p>\r\n\r\n<p style=\"text-align:justify\">V&agrave; thật th&uacute; vị, thầy Thi&ecirc;n Đức l&agrave; một người c&oacute; thể n&oacute;i đ&atilde; th&acirc;u t&oacute;m được cả bốn bộ m&ocirc;n ấy trong h&agrave;nh trang cuộc đời m&igrave;nh. V&igrave; vậy, t&igrave;m hiểu về thầy Thi&ecirc;n Đức kh&ocirc;ng chỉ để biết về một con người cụ thể, m&agrave; c&ograve;n l&agrave; dịp để, qua đ&oacute;, ch&uacute;ng ta biết th&ecirc;m nhiều kh&iacute;a cạnh trong đời sống tinh thần của c&aacute;c bậc tiền nh&acirc;n, mang đậm dấu ấn Việt, t&acirc;m thức Việt, bản sắc Việt.</p>\r\n\r\n<h2 style=\"text-align:justify\">Những người thầy trong sử Việt</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>T&aacute;c giả</strong>: Nguyễn Quốc T&iacute;n &ndash; Nguyễn Huy Thắng &ndash; Nguyễn Như Mai</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Quà tặng 20/11: Những cuốn sách đẹp về Thầy Cô (Ảnh: Zing News)\" src=\"https://cth.edu.vn/wp-content/uploads/znews-photo.zadn_.vn/w660/Uploaded/ymnuc/2016_11_18/Nhung_nguoi_thay_trong_su_Viet1.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Zing News</p>\r\n\r\n<p style=\"text-align:justify\">&ldquo;Những người thầy trong sử Việt&rdquo; dựng n&ecirc;n trước mắt người đọc h&igrave;nh ảnh những người thầy rất đặc biệt trong lịch sử Việt Nam.</p>\r\n\r\n<p style=\"text-align:justify\">Đ&oacute; l&agrave; c&acirc;u chuyện cuộc đời vinh quang v&agrave; thăng trầm của L&ecirc; Văn Thịnh, trạng nguy&ecirc;n khai khoa đầu ti&ecirc;n, hầu học cho th&aacute;i tử C&agrave;n Đức con vua L&yacute; Th&aacute;nh T&ocirc;ng. Hay c&acirc;u chuyện về người thầy chuẩn mực mu&ocirc;n đời &ndash; được nh&acirc;n d&acirc;n t&ocirc;n l&agrave; &ldquo;vạn thế sư biểu&rdquo; Chu Văn An.</p>\r\n\r\n<p style=\"text-align:justify\">Một người thầy của thế kỷ 20 l&agrave; học giả Trần Trọng Kim &ndash; nh&agrave; gi&aacute;o dục t&acirc;m huyết &ndash; ch&iacute;nh trị gia &ldquo;bất đắc dĩ&rdquo;. Hay họa sĩ Tardieu, một người Ph&aacute;p kh&ocirc;ng c&oacute; đầu &oacute;c thực d&acirc;n, đ&atilde; d&agrave;nh nửa cuối cuộc đời m&igrave;nh để x&acirc;y dựng trường Cao đẳng Mỹ thuật Đ&ocirc;ng Dương v&agrave; đ&agrave;o tạo những thế hệ họa sĩ t&agrave;i năng đầu ti&ecirc;n của nước ta</p>', 1, '2023-05-17 03:05:58', '2023-05-17 04:17:02', NULL);
INSERT INTO `news` (`id`, `name`, `image`, `description`, `content`, `hot`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Những cuốn sách Giáng sinh siêu đáng yêu dành cho bé', 'P6IjM_1677406579_sach-giang-sinh-sieu-dang-yeu-cho-be.jpg', 'Những cuốn sách Giáng sinh có thể là món quà bất ngờ tặng con. Mùa giáng sinh an lành và ấm áp bên gia đình. Hãy đọc cho bé nghe những câu chuyện ấm áp này. Bạn sẽ mang tới cho con những phút giây yêu thương gia đình ngọt ngào.', '<h2 style=\"text-align:justify\">Gi&aacute;ng sinh diệu kỳ</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>Bộ s&aacute;ch gồm 5 cuốn sau:</strong></p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">C&acirc;y th&ocirc;ng kỳ diệu</li>\r\n	<li style=\"text-align:justify\">Gi&aacute;ng sinh của c&aacute;c con vật</li>\r\n	<li style=\"text-align:justify\">L&aacute; thư của c&aacute;c ch&uacute; l&ugrave;n</li>\r\n	<li style=\"text-align:justify\">Gi&aacute;ng sinh của cha xứ</li>\r\n	<li style=\"text-align:justify\">B&aacute;nh quy gi&aacute;ng sinh</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: Tiki)\" src=\"https://cth.edu.vn/wp-content/uploads/2018/12/bo-sach-giang-sinh-dieu-ky.png\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Tiki</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute;ng sinh nh&agrave; n&agrave;o cũng cần một c&acirc;y th&ocirc;ng để trang tr&iacute;. Nhưng c&aacute;c em c&oacute; biết khi Olga v&agrave; Erik c&ugrave;ng cha m&igrave;nh v&agrave;o rừng đốn th&ocirc;ng đ&atilde; gặp chuyện g&igrave; kh&ocirc;ng? C&aacute;c ti&ecirc;n nữ t&iacute; hon ch&iacute;nh l&agrave; những thi&ecirc;n thần bảo vệ c&acirc;y th&ocirc;ng đấy. Vậy l&agrave;m sao để họ c&oacute; c&acirc;y th&ocirc;ng trang tr&iacute; cho gia đ&igrave;nh m&igrave;nh đ&acirc;y? Mời c&aacute;c em h&atilde;y c&ugrave;ng đ&oacute;n đọc cuốn C&acirc;y th&ocirc;ng kỳ diệu nh&eacute;!</p>\r\n\r\n<p style=\"text-align:justify\">C&ograve;n ở Gi&aacute;ng sinh của c&aacute;c con vật, c&aacute;c em sẽ được đến với một xứ sở v&ocirc; c&ugrave;ng lạnh lẽo. Trời nổi b&atilde;o suốt đ&ecirc;m. C&aacute;c con vật kh&ocirc;ng c&oacute; g&igrave; để ăn trong dịp Gi&aacute;ng sinh. Ch&uacute;ng m&igrave;nh phải l&agrave;m g&igrave; để gi&uacute;p ch&uacute;ng nhỉ? V&agrave; &ocirc;ng gi&agrave; Noel đ&atilde; nghĩ ra một c&aacute;ch. &Ocirc;ng viết một bức thư để xin c&aacute;c bạn nhỏ một m&oacute;n qu&agrave;&hellip; Rồi thế l&agrave; cuối c&ugrave;ng cũng xuất hiện &ldquo;những b&oacute; rơm kh&ocirc; cho Hoẵng, những t&uacute;i hạt cho Chim, b&aacute;nh m&igrave; hoặc c&agrave; rốt cho Thỏ&rdquo;&hellip;. Đ&oacute; l&agrave; một đ&ecirc;m Gi&aacute;ng sinh tuyệt vời kh&ocirc;ng thể qu&ecirc;n với &ldquo;những đứa trẻ đầy l&ograve;ng hảo t&acirc;m&rdquo; v&agrave; với một &ldquo;đại tiệc&rdquo; cực kỳ &ldquo;ngọt ng&agrave;o&rdquo;.</p>\r\n\r\n<h2 style=\"text-align:justify\">C&acirc;u chuyện Gi&aacute;ng sinh</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>Bộ s&aacute;ch song ngữ d&agrave;nh cho trẻ 7-12 tuổi, gồm 5 cuốn</strong>:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Ph&eacute;p m&agrave;u đ&ecirc;m Gi&aacute;ng sinh</li>\r\n	<li style=\"text-align:justify\">Những m&oacute;n qu&agrave; Gi&aacute;ng sinh</li>\r\n	<li style=\"text-align:justify\">Chuyến t&agrave;u ng&agrave;y Gi&aacute;ng sinh</li>\r\n	<li style=\"text-align:justify\">C&acirc;y cầu ng&agrave;y Gi&aacute;ng sinh</li>\r\n	<li style=\"text-align:justify\">Gi&aacute;ng sinh&nbsp;ở n&ocirc;ng trại</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: VinaBook)\" src=\"https://cth.edu.vn/wp-content/uploads/www.vinabook.com/images/detailed/200/P66902Mbo.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: VinaBook</p>\r\n\r\n<p style=\"text-align:justify\">Bộ s&aacute;ch l&agrave; những c&acirc;u chuyện b&igrave;nh dị về ng&agrave;y Gi&aacute;ng sinh &ndash; ng&agrave;y lễ của sự quan t&acirc;m v&agrave; chia sẻ. Do đ&oacute;, th&ocirc;ng điệp được truyền tải trong từng cuốn s&aacute;ch v&ocirc; c&ugrave;ng gần gũi v&agrave; mang t&iacute;nh gi&aacute;o dục cao. Bộ s&aacute;ch kh&ocirc;ng những gi&uacute;p c&aacute;c độc giả nh&iacute; biết đến bầu kh&ocirc;ng kh&iacute; ấm &aacute;p đầy&nbsp;t&igrave;nh y&ecirc;u&nbsp;thương của ng&agrave;y lễ n&agrave;y. Ch&uacute;ng c&ograve;n hướng c&aacute;c em đến lối sống l&agrave;nh mạnh, t&iacute;ch cực. Phần truyện kể được chuyển ngữ b&aacute;m s&aacute;t, dễ hiểu, g&oacute;p phần hữu &iacute;ch cho c&aacute;c em trong việc học th&ecirc;m từ vựng tiếng Anh.&nbsp;Chưa kể phần tranh minh hoạ rất đẹp v&agrave; sinh động.</p>\r\n\r\n<h2 style=\"text-align:justify\">Gi&aacute;ng sinh đến từ tầng &aacute;p m&aacute;i</h2>\r\n\r\n<p style=\"text-align:justify\"><strong>Bộ s&aacute;ch gồm 2 cuốn</strong>:</p>\r\n\r\n<ol>\r\n	<li style=\"text-align:justify\">Kỳ nghỉ đ&ocirc;ng</li>\r\n	<li style=\"text-align:justify\">Đ&ecirc;m sum vầy</li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: Bookdi)\" src=\"https://cth.edu.vn/wp-content/uploads/product.hstatic.net/1000130728/product/combo-giang-sinh-den-tu-tang-ap-mai-bookdi.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Bookdi</p>\r\n\r\n<p style=\"text-align:justify\">K&igrave; nghỉ đ&ocirc;ng năm nay, Felicity được ở nh&agrave; &ocirc;ng b&agrave;. C&ocirc; t&igrave;m thấy một kho những k&iacute; ức cũ kĩ v&agrave; ấm &aacute;p từ gian nh&agrave; kho &aacute;p m&aacute;i. Mỗi lần lục lọi gian ph&ograve;ng, c&ocirc; lại ph&aacute;t hiện ra một kỉ vật qu&yacute; gi&aacute;, cất giữ những hồi ức ấm &aacute;p của &ocirc;ng b&agrave; v&agrave; bố mẹ m&igrave;nh. Tấm gương nhỏ, chiếc xe n&ocirc;i trượt tuyết, chiếc hộp &acirc;m nhạc&hellip; đều chứa đựng một c&acirc;u chuyện đầy t&igrave;nh cảm.&nbsp;Từng đồ vật kể lại những c&acirc;u chuyện nho nhỏ của m&igrave;nh. Cuộc sống ấm &aacute;p của những thế hệ trước dần dần trải ra trước mắt Felicity. C&ocirc; b&eacute; c&agrave;ng th&ecirc;m y&ecirc;u v&agrave; tr&acirc;n trọng gi&acirc;y ph&uacute;t sum vầy m&ugrave;a Gi&aacute;ng Sinh.</p>\r\n\r\n<h2 style=\"text-align:justify\">Babushka v&agrave; Gi&aacute;ng sinh y&ecirc;u thương</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: NXB Kim Đồng)\" src=\"data:image/jpeg;base64,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\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: NXB Kim Đồng</p>\r\n\r\n<p style=\"text-align:justify\">B&agrave; Babushka ph&uacute;c hậu sống một m&igrave;nh trong căn nh&agrave; nhỏ ở một nơi xa rất xa, b&ecirc;n trong căn nh&agrave; mọi thứ lu&ocirc;n v&ocirc; c&ugrave;ng sạch sẽ v&agrave; gọn g&agrave;ng. Nhưng b&agrave; l&uacute;c n&agrave;o cũng bận rộn lau dọn mọi thứ đến nỗi b&agrave; đ&atilde; kh&ocirc;ng nhận ra một sự kiện thần k&igrave; đang xảy đến với m&igrave;nh. V&agrave; rồi một giấc mơ k&igrave; lạ đ&atilde; khiến b&agrave; bỏ qua mọi nỗi đắn đo thường nhật m&agrave; mạo hiểm đi t&igrave;m một đứa b&eacute;. Tr&ecirc;n h&agrave;nh tr&igrave;nh của m&igrave;nh, b&agrave; nhận ra rằng, trong&nbsp;t&igrave;nh y&ecirc;u, bạn c&agrave;ng cho đi nhiều, sẽ nhận lại bấy nhi&ecirc;u. Độc giả ở mọi lứa tuổi sẽ bị thu h&uacute;t bởi c&acirc;u chuyện d&acirc;n gian Nga cảm động n&agrave;y.</p>\r\n\r\n<h2 style=\"text-align:justify\">Những c&acirc;u chuyện chờ đ&oacute;n Gi&aacute;ng sinh</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: NXB Kim Đồng)\" src=\"https://cth.edu.vn/wp-content/uploads/nxbkimdong.com_.vn/sites/default/files/styles/uc_product_full/public/nhung_cau_chuyen_cho_don_giang_sinh.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: NXB Kim Đồng</p>\r\n\r\n<p style=\"text-align:justify\">Đ&ecirc;m&nbsp;Gi&aacute;ng Sinh&nbsp;huyền diệu đang dần đến.&nbsp;Những&nbsp;c&acirc;y th&ocirc;ng rực rỡ c&ugrave;ng &aacute;nh đ&egrave;n m&agrave;u. Những sự cố kh&ocirc;ng ngờ tới đ&atilde; xảy ra? &Ocirc;ng gi&agrave; Noel phải l&agrave;m thế n&agrave;o đ&acirc;y? 24&nbsp;c&acirc;u chuyện&nbsp;kể hấp dẫn sẽ đồng h&agrave;nh c&ugrave;ng b&eacute;&nbsp;đ&oacute;n chờ Gi&aacute;ng Sinh.&nbsp;Một cuốn s&aacute;ch ấm &aacute;p cho ng&agrave;y đ&ocirc;ng gi&aacute; lạnh cuối năm.</p>\r\n\r\n<h2 style=\"text-align:justify\">Những c&acirc;u chuyện Gi&aacute;ng sinh vui nhộn d&agrave;nh cho trẻ em</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: Tiki)\" src=\"https://cth.edu.vn/wp-content/uploads/salt.tikicdn.com/cache/550x550/media/catalog/product/n/x/nxbtrestoryfull_18232015_082301.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Tiki</p>\r\n\r\n<p style=\"text-align:justify\">Gi&aacute;ng sinh lu&ocirc;n mở ra trước mắt trẻ em &ndash; v&agrave; cả người lớn &ndash; một thế giới diệu kỳ. Với &ocirc;ng gi&agrave; Noel đ&ocirc;n hậu. Những ch&uacute; y&ecirc;u tinh chăm chỉ sản xuất&nbsp;đồ chơi. C&acirc;y th&ocirc;ng lấp l&aacute;nh sắc m&agrave;u. C&aacute;c ch&uacute; người tuyết&hellip;&nbsp; V&agrave; tr&ecirc;n hết l&agrave; một tinh thần Gi&aacute;ng sinh nhiệm m&agrave;u với t&igrave;nh người ấm &aacute;p v&agrave; sẻ chia&hellip;</p>\r\n\r\n<p style=\"text-align:justify\">Cuốn s&aacute;ch n&agrave;y mở ra cho c&aacute;c em một m&ugrave;a Noel đ&aacute;ng y&ecirc;u như thế, qua s&aacute;u c&acirc;u chuyện Gi&aacute;ng sinh th&uacute; vị. Mỗi c&acirc;u chuyện được minh họa bằng c&aacute;c tranh vẽ tuyệt đẹp. Mỗi đứa trẻ ở xứ nhiệt đới cũng c&oacute; thể cảm nhận một Noel rộn r&agrave;ng như c&aacute;c xứ đang ngập trong tuyết trắng.<br />\r\nMỗi trang s&aacute;ch cũng được ph&acirc;n bố số chữ hợp l&yacute; để c&aacute;c em nhỏ c&oacute; thể đọc dễ d&agrave;ng. Hoặc cả nh&agrave; c&ugrave;ng ngồi b&ecirc;n nhau để thư gi&atilde;n trong c&aacute;c buổi tối m&ugrave;a đ&ocirc;ng ấm &aacute;p.</p>\r\n\r\n<h2 style=\"text-align:justify\">Những l&aacute; thư Gi&aacute;ng sinh của Felix &ndash; Ch&uacute; thỏ b&eacute; đi thăm &ocirc;ng gi&agrave; Noel</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: PiBook)\" src=\"https://cth.edu.vn/wp-content/uploads/pibook.vn/uploads/products/86257_29_12_17_nhung-la-thu-moi-cua-felix-mot-chu-tho-be-du-hanh-ve-qua-khu.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: PiBook</p>\r\n\r\n<p style=\"text-align:justify\">Ch&uacute; thỏ b&ocirc;ng Felix đ&atilde; b&iacute; mật viết một bức thư khẩn, rằng: &ldquo;&Ocirc;ng gi&agrave; Noel y&ecirc;u qu&yacute;, ch&aacute;u c&oacute; một vấn đề si&ecirc;u-khẩn-cấp, mong &ocirc;ng đừng giận. Ch&aacute;u muốn biết ngay lập tức rằng &ocirc;ng c&oacute; thật hay kh&ocirc;ng&hellip;&rdquo;. V&agrave;i ng&agrave;y sau, Felix nhận được một bức thư gửi về từ Bắc Cực&hellip; V&agrave; v&agrave;o buổi s&aacute;ng ng&agrave;y Th&aacute;nh Nicolas, Felix đột ngột biến mất. Rồi những l&aacute; thư li&ecirc;n tiếp được gửi đến tay Sophia&hellip; N&agrave;o, ch&uacute;ng m&igrave;nh h&atilde;y c&ugrave;ng Felix v&agrave; c&aacute;c bạn nhỏ kh&aacute;c kh&aacute;m ph&aacute; những phong tục Gi&aacute;ng sinh ở khắp nơi tr&ecirc;n thế giới nh&eacute;!</p>\r\n\r\n<h2 style=\"text-align:justify\">Nh&oacute;c khủng long Rory cần t&igrave;m c&acirc;y Gi&aacute;ng sinh</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: Tiki)\" src=\"https://cth.edu.vn/wp-content/uploads/salt.tikicdn.com/cache/w1200/ts/product/62/96/da/efb2a9e0fd434c26868b28b0bf13ddfc.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Tiki</p>\r\n\r\n<p style=\"text-align:justify\">Kh&ocirc;ng kh&iacute; Gi&aacute;ng Sinh đang ngập tr&agrave;n khắp nơi. Nh&oacute;c Khủng long Rory t&igrave;m khắp đảo m&agrave; chẳng c&oacute; c&acirc;y th&ocirc;ng n&agrave;o? Gi&aacute;ng Sinh m&agrave; kh&ocirc;ng c&oacute; c&acirc;y Gi&aacute;ng Sinh th&igrave; thật l&agrave; mất vui, Rory phải l&agrave;m sao?</p>\r\n\r\n<h2 style=\"text-align:justify\">Trang tr&iacute; Gi&aacute;ng sinh c&ugrave;ng B&agrave; Baba</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: Tiki)\" src=\"https://cth.edu.vn/wp-content/uploads/salt.tikicdn.com/cache/550x550/ts/product/6b/8a/95/a00f25a2c880be39ad382b52074f2753.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Tiki</p>\r\n\r\n<p style=\"text-align:justify\">Trang Tr&iacute; Gi&aacute;ng Sinh C&ugrave;ng B&agrave; Baba l&agrave; cuốn tranh truyện đặc biệt dịp Noel. Cuốn tranh truyện hướng dẫn chi tiết c&aacute;ch l&agrave;m c&aacute;c m&oacute;n đồ trang tr&iacute; nhỏ xinh. M&oacute;n n&agrave;o cũng độc đ&aacute;o th&uacute; vị m&agrave; lại v&ocirc; c&ugrave;ng dễ l&agrave;m. Vừa đọc tranh truyện vừa c&ugrave;ng nhau tự tay cắt cắt, d&aacute;n d&aacute;n, treo treo,&hellip;, cả gia đ&igrave;nh chắc chắn sẽ c&oacute; những giờ ph&uacute;t qu&acirc;y quần thật đầm ấm v&agrave; rộn r&atilde; tiếng cười. Thuộc series truyện về B&agrave; Baba rất nổi tiếng tại Nhật của t&aacute;c giả Sato Wakiko, qua nh&acirc;n vật b&agrave; Baba, truyện hướng dẫn c&aacute;c b&eacute; l&agrave;m c&aacute;c đồ thủ c&ocirc;ng đơn giản.</p>\r\n\r\n<h2 style=\"text-align:justify\">Siri v&agrave; Gi&aacute;ng sinh bất ngờ</h2>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Sách Giáng sinh siêu đáng yêu cho bé (Ảnh: Tiki)\" src=\"https://cth.edu.vn/wp-content/uploads/salt.tikicdn.com/cache/550x550/media/catalog/product/f/u/full_e3d56e4f354df863317f7b9cc1d4d557.u547.d20160829.t161831.438913.jpg\" /></p>\r\n\r\n<p style=\"text-align:justify\">Ảnh: Tiki</p>\r\n\r\n<p style=\"text-align:justify\">Siri v&ocirc; c&ugrave;ng h&agrave;o hứng với c&ocirc;ng việc chuẩn bị cho lễ Gi&aacute;ng sinh. Nhưng điều kh&ocirc;ng may đ&atilde; xảy ra: Mẹ bị ốm, kh&ocirc;ng thể l&agrave;m g&igrave; được. Bố th&igrave; đi c&ocirc;ng t&aacute;c xa nh&agrave; tới tận đ&ecirc;m Noel mới về. Siri ch&aacute;n nản nghĩ tới viễn cảnh sẽ chẳng c&oacute; Gi&aacute;ng sinh n&agrave;o hết. Nhưng tất nhi&ecirc;n rồi, Siri th&ocirc;ng minh, lanh lợi đ&acirc;u để mọi việc tr&ocirc;i qua như thế. C&ocirc; b&eacute; c&ograve;n rất nhiều bạn tốt quanh m&igrave;nh&hellip;</p>', 0, '2023-05-17 03:07:11', '2023-05-17 03:07:34', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `date`, `status`, `total`, `users_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 2, '82,500', 4, '2023-05-01 05:04:14', '2023-05-17 05:04:14', NULL),
(2, NULL, 2, '1,530,000', 4, '2023-05-02 05:04:49', '2023-05-17 05:05:22', NULL),
(3, NULL, 2, '290,000', 4, '2023-05-03 05:08:26', '2023-05-17 05:08:26', NULL),
(4, NULL, 2, '375,000', 4, '2023-05-04 05:10:01', '2023-05-17 05:10:01', NULL),
(5, NULL, 2, '2,315,000', 4, '2023-05-05 05:11:23', '2023-05-17 05:11:23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `orders_id` bigint(20) UNSIGNED DEFAULT NULL,
  `products_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `price`, `quantity`, `orders_id`, `products_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 41250, 2, 1, 12, '2023-05-17 05:04:14', '2023-05-17 05:04:14', NULL),
(2, 153000, 10, 2, 17, '2023-05-17 05:04:49', '2023-05-17 05:04:49', NULL),
(3, 170000, 1, 3, 18, '2023-05-17 05:08:26', '2023-05-17 05:08:26', NULL),
(4, 120000, 1, 3, 21, '2023-05-17 05:08:26', '2023-05-17 05:08:26', NULL),
(5, 75000, 1, 4, 2, '2023-05-17 05:10:01', '2023-05-17 05:10:01', NULL),
(6, 100000, 3, 4, 7, '2023-05-17 05:10:01', '2023-05-17 05:10:01', NULL),
(7, 25000, 15, 5, 10, '2023-05-17 05:11:23', '2023-05-17 05:11:23', NULL),
(8, 50000, 10, 5, 26, '2023-05-17 05:11:23', '2023-05-17 05:11:23', NULL),
(9, 144000, 10, 5, 3, '2023-05-17 05:11:23', '2023-05-17 05:11:23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

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
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` double NOT NULL,
  `hot` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `sub_categories_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `author`, `description`, `quantity`, `discount`, `hot`, `created_at`, `updated_at`, `deleted_at`, `sub_categories_id`) VALUES
(1, 'Sao Chúng Ta Lại Ngủ - Why We SLeep', 'EPaxp_SaoChungTaLaiNgu.JPG', 200000, 'Matthew Walker', 'Là cuốn sách về giấc ngủ đầu tiên được viết bởi chính một chuyên gia khoa học hàng đầu, giám đốc Trung tâm về Khoa học Giấc ngủ Con người của trường Đại học California, Berkeley, giải thích việc chúng ta có thể khai thác được sức mạnh biến đổi của giấc ngủ nhằm làm thay đổi cuộc sống của chúng ta trở nên tốt đẹp hơn như thế nào.', 20, 50, 0, '2023-05-17 03:28:20', '2023-05-17 03:28:20', NULL, 5),
(2, 'Toàn Cảnh Dinh Dưỡng - Thức Tỉnh Và Hành Động', '7Qqyu_ToanCanhDinhDuong.JPG', 150000, 'Collin Campbell', 'Nếu bạn muốn sống một cuộc đời không phải ưu lo về ung thư, bệnh tim, tiểu đường,... thì tất cả những gì cần làm đều đã nằm trong tay bạn: “Toàn cảnh dinh dưỡng – Thức tỉnh và hành động”. Đây là cuốn sách nổi tiếng khắp toàn cầu của Tiến sĩ Y khoa T.Colin Campbell – Ông hiện là giáo sư dinh dưỡng ở Đại học', 20, 50, 0, '2023-05-17 03:32:23', '2023-05-17 03:32:23', NULL, 5),
(3, 'Hành Trang Lập Trình - Những Kỹ Năng Lập Trình', 'wKtU5_KyThuatLT.JPG', 180000, 'Vũ Công Tấn Tài', 'Đây là một cuốn sách về kĩ thuật, nhưng bạn đừng quá lo lắng nếu như chưa có nhiều kiến thức chuyên môn trong ngành. Cuốn sách này được thiết kế và trình bày đơn giản hóa theo những cách dễ hiểu nhất để các bạn sinh viên hoặc các bạn vừa mới đi làm cũng có thể hiểu một cách dễ dàng', 50, 20, 1, '2023-05-17 03:37:15', '2023-05-17 03:37:15', NULL, 6),
(4, 'Làm Chủ Các Mẫu Thiết Kế Kinh Điển Trong Lập Trình', 'dF05T_ChuLT.JPG', 250000, 'Tạ Văn Dũng', 'uốn sách Làm chủ các mẫu thiết kế kinh điển trong lập trình sẽ giới thiệu đến bạn hơn 20 mẫu thiết kế thuộc các nhóm khác nhau, cung cấp cho bạn cả lý thuyết và thực hành thông qua việc thiết kế sơ đồ lớp tiêu chuẩn và tạo mã nguồn cho sơ đồ tiêu chuẩn này.', 20, 10, 1, '2023-05-17 03:39:27', '2023-05-17 03:39:27', NULL, 6),
(5, 'Tăng Cường Tin Học Quốc Tế - IC3 - GS6 Level 2', '1Wz1V_TinHocIIG.JPG', 90000, 'Nhiều Tác Giả', 'Bộ giáo trình là tài liệu bổ trợ, giúp học sinh bổ sung các kiến thức được cập nhật mới nhất, ngang tầm với trình độ cùng cấp của các nước trên toàn thế giới. Chúng tôi rất mong nhận được sự phản hồi, đóng góp ý kiến của quý thầy cô, phụ huynh cùng các em học sinh để bộ sách ngày càng được hoàn thiện hơn.', 20, 10, 0, '2023-05-17 03:42:22', '2023-05-17 03:42:22', NULL, 6),
(6, 'IC3 Spark - Cuộc Sống Trực Tuyến', '88a7g_IIG.JPG', 70000, 'Nhiều Tác Giả', 'Mục tiêu của giáo trình này là giúp các học sinh có đủ kiến thức và kỹ năng để chinh phục các bài thi lấy chứng chỉ IC3 Spark. Các giáo viên tiểu học có thể sử dụng bộ giáo trình này và các học liệu đi kèm để làm tư liệu giảng dạy hiệu quả.', 10, 20, 0, '2023-05-17 03:44:51', '2023-05-17 03:44:51', NULL, 6),
(7, 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 2', 'Hf8Lq_MatNgu2.JPG', 200000, 'B R O Group', 'HHT - Khi cạ cứng tự nhiên quay ra giận đùng đùng. Là có thân dữ chưa? Nếu bạn đã hoặc đang rơi vào tình huống bực bội với bạn mình, Lớp Học Mật Ngữ phiên bản mới Tập 2 chính là cẩm nang để xóa tan hiểu lầm và nạp thêm năng lượng cho chuyến xe tình bạn lại lao đi vun vút.', 20, 50, 0, '2023-05-17 03:48:14', '2023-05-17 03:48:14', NULL, 1),
(8, 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 1', 'ugw6I_MatNgu1.JPG', 200000, 'B R O Group', 'Tập này không chỉ được học cách tiết kiệm và quản lý tiền, bạn còn có thể chơi game vui tẹt ga với hội cạ hoặc cả nhà tại “khu vui chơi” mang chủ đề của truyện. Nào là truy tìm từ vựng tiếng Anh, phân công nhiệm vụ cho heo đất rồi tham dự cuộc đua rinh Lớp Học Mật Ngữ nữa.', 10, 25, 0, '2023-05-17 03:49:59', '2023-05-17 03:49:59', NULL, 1),
(9, 'Lớp Học Mật Ngữ Phiên Bản Mới - Tập 3', 'KjOCB_MatNgu3.JPG', 200000, 'B R O Group', 'Anh em Song Tử vội vàng “cháp” liền tay. Lớp vỏ bên ngoài là đường trái cây, bên trong nhân mềm dai, chua chua, ngọt ngọt… Nhóp nhép! Nhóp nhép! Nói có một câu mà mũi Song Tử em đã dài ra như một bó đũa. Còn Bạch Dương thì mũi mọc ra bàn tay tự tát vào mặt.', 25, 15, 0, '2023-05-17 03:52:09', '2023-05-17 03:52:09', NULL, 1),
(10, 'I Will Be Better - Những Câu Chuyện Truyền Cảm Hứng', 'Sq4VC_ConSeTuGiac.JPG', 50000, 'Yunan', 'Bộ sách “Những câu chuyện truyền cảm hứng” được chia thành các chủ đề thiết thực, giúp bạn đọc nhỏ tuổi tìm hiểu và rèn  những  thói  quen,  đức  tính  tốt.  Mỗi  cuốn  gồm  nhiều câu chuyện nhỏ, trong đó có cả những hồi ức đáng nhớ của các nhân vật nổi tiếng trên thế giới...', 20, 50, 0, '2023-05-17 03:53:52', '2023-05-17 03:53:52', NULL, 1),
(11, 'Gieo Mầm Tính Cách - Tự Tin', 'EwWU4_TuTin.JPG', 60000, 'Hà Yên', 'Bộ sách Gieo mầm tính cách (12 tập) là tập hợp những câu chuyện như vậy. Mỗi tập là một hạt giống tính cách gieo vào trẻ những bài học Tử tế, Tha thứ, Kiên trì, Thật thà, Quan tâm, Yêu thương, Mạnh mẽ, Tự tin, Ước mơ, Lịch sự, Hiếu thảo, Công bằng bằng những câu chuyện cảm động, đầy ý nghĩa đáng để suy ngẫm.', 10, 20, 0, '2023-05-17 03:55:43', '2023-05-17 03:55:43', NULL, 1),
(12, 'Gieo Mầm Tính Cách - Lịch Sự', 'e8GUL_LichSu.JPG', 55000, 'Hà Yên', 'Bộ sách Gieo mầm tính cách (12 tập) là tập hợp những câu chuyện như vậy. Mỗi tập là một hạt giống tính cách gieo vào trẻ những bài học Tử tế, Tha thứ, Kiên trì, Thật thà, Quan tâm, Yêu thương, Mạnh mẽ, Tự tin, Ước mơ, Lịch sự, Hiếu thảo, Công bằng bằng những câu chuyện cảm động, đầy ý nghĩa đáng để suy ngẫm.', 20, 25, 1, '2023-05-17 03:58:41', '2023-05-17 03:58:41', NULL, 1),
(13, 'Truyện Trạng Cười Việt Nam', '2oQir_1677401352_truyen-trang-cuoi-viet-nam_45240_1.jpg', 50000, 'Nhiều Tác Giả', 'Truyện Trạng cười Việt Nam là một bức tranh châm biếm đả kích sắc sảo, chân thực xã hội phong kiến. Những nhân vật này đã thay mặt nhân dân lao động làm một cuộc khởi nghĩa bằng tiếng cười để từ giã chế độ phong kiến suy tàn một cách hài hước nhất.', 15, 20, 0, '2023-05-17 04:01:20', '2023-05-17 04:01:20', NULL, 2),
(14, 'Truyện Cười Song Ngữ Hoa - Việt', 'UrxvC_1677401557_truyen-cuoi-song-ngu-hoa-viet_44875_1.jpg', 50000, 'Nhiều Tác Giả', 'Truyện cười song ngữ Hoa - Việt được biên dịch và sưu tầm trong hàng ngàn câu truyện cười để chọn ra 100 truyện đặc sắc nhất. Với những tình tiết và nội dung thú vị, khôi hài, cuốn sách không những đem lại nụ cười sảng khoái mà còn giúp độc giả luyện đọc và học tiếng Trung', 20, 10, 0, '2023-05-17 04:02:12', '2023-05-17 04:02:12', NULL, 2),
(15, 'Truyện Trạng Quỳnh Và Xiển Bột', 'fzqsC_1677401762_truyen-trang-quynh-va-xien-bot_66461_1.jpg', 45000, 'Hà Yên', 'Sau tiếng cười hả hê, sách hiện lên là những kẻ mất nhân cách, dốt nát, xảo quyệt, gian tham, tàn ác, vào luồn ra cúi; những thói hư tật xấu của con người... Bên cạnh tiếng cười đả kích còn có tiếng cười dí dỏm nhẹ nhàng khi tự trào, đùa cợt bạn bè, người thân.', 20, 5, 0, '2023-05-17 04:03:05', '2023-05-17 04:03:05', NULL, 2),
(16, 'Donald Trump Và Cô Bé Sài Gòn', 'bqSgI_1677401242_donald-trump-va-co-be-sai-gon_75204_1.jpg', 130000, 'Matthew Walker', 'Cuốn sách này không viết theo những nguyên tắc thông thường mà các bạn vẫn đọc. Vì sao? Vì đa số cuộc đời của chúng ta đã trôi qua vô nghĩa là do quen chấp nhận sự thông thường.', 20, 10, 0, '2023-05-17 04:04:10', '2023-05-17 04:04:10', NULL, 2),
(17, 'Khi Học Tập Hóa Niềm Vui', 'cffbg_1677402909_khi-hoc-tap-hoa-niem-vui_121734_1.jpg', 170000, 'Matthew Walker', 'Trong cuốn Khi học tập hỏa niềm vui, bằng trải nghiệm của bản thân, tác giả đã chỉ ra cho chúng ta một chân lý quý giá mà ít người biết đến: hiểu được vì sao mình cần học, ai cũng có thể tìm thấy niềm vui trong việc học và học một cách hiệu quả.', 10, 10, 1, '2023-05-17 04:06:22', '2023-05-17 05:05:22', NULL, 4),
(18, 'Hành Trình Thức Tỉnh', 'rE3u2_1677402811_hanh-trinh-thuc-tinh_121644_1.jpg', 200000, 'Hà Yên', 'Hành trình thức tỉnh ghi lại những giác ngộ của tác giả Tạ Minh Tuấn trong hành trình đi tìm lẽ thực, những trăn trở trong tâm thức của anh về con người, bản thể, sự sống và chết, vũ trụ… được mô tả qua cuộc đối thoại giữa hai nhân vật Thành Toàn và Bờm.', 20, 15, 1, '2023-05-17 04:07:26', '2023-05-17 04:07:26', NULL, 3),
(19, 'Chuyện Đã Cũ Cứ Thong Dong Mà Cũ', 'NrpfF_1677401177_chuyen-da-cu-cu-thong-dong-ma-cu_121720_1.jpg', 90000, 'Matthew Walker', 'ãy cùng bước vào thế giới đầy chất thơ của “Chuyện đã cũ cứ thong dong mà cũ” cùng tác giả Winlinh, và bỏ lại đằng sau những chuyện cũ đã qua nhé. Cuộc sống đâu chỉ có những nỗi buồn, mà còn có những niềm vui nhỏ bé lấp lánh dưới ánh mặt trời nữa.', 20, 10, 0, '2023-05-17 04:09:01', '2023-05-17 04:22:53', NULL, 4),
(20, 'Chiếc thìa bạc', 'VNL3b_1677401093_chiec-thia-bac_121738_1.jpg', 200000, 'Matthew Walker', 'Bằng ngòi bút đầy tinh tế và đa màu, thủ pháp hành văn linh hoạt và nhẹ nhàng, Naka sẽ dẫn lối người đọc trở về với tuổi thơ trong veo, hồn nhiên, vui vẻ dẫu vô cùng đói khổ, đồng thời để chúng ta được cùng trải nghiệm trải nghiệm sự ngập ngừng, bỡ ngỡ,', 10, 15, 0, '2023-05-17 04:09:50', '2023-05-17 04:09:50', NULL, 4),
(21, 'Bắt Đầu Bằng Để Lại', '02c6h_1677400484_bat-dau-bang-de-lai_121724_1 (1).jpg', 150000, 'Hà Yên', 'Bằng ngòi bút đầy tinh tế và đa màu, thủ pháp hành văn linh hoạt và nhẹ nhàng, Naka sẽ dẫn lối người đọc trở về với tuổi thơ trong veo, hồn nhiên, vui vẻ dẫu vô cùng đói khổ, đồng thời để chúng ta được cùng trải nghiệm trải nghiệm sự ngập ngừng, bỡ ngỡ,', 20, 20, 1, '2023-05-17 04:10:55', '2023-05-17 04:10:55', NULL, 3),
(22, 'Đừng Để Tâm Trạng Trở Thành Thái Độ', '9ftDa_1677402766_dung-de-tam-trang-tro-thanh-thai-do_121749_4.jpg', 200000, 'Matthew Walker', 'Mỗi chúng ta ai cũng từng trăn trở tại sao lại khó yêu thương chính mình đến vậy. Nhưng thời gian sẽ khiến bạn nhận ra đây là việc không ai có thể làm thay ngoài bản thân mình.', 20, 20, 0, '2023-05-17 04:11:45', '2023-05-17 04:11:45', NULL, 4),
(23, 'Siêu Kết Nối', 'Xae5G_1677402846_sieu-ket-noi_121530_1.jpg', 220000, 'Hà Yên', 'Đây không chỉ là cuốn sách dạy cách kết giao. Cuốn sách này không giống bất cứ cuốn sách dạy kết giao nào mà bạn từng đọc (hoặc đã bỏ qua) trước đó. Đây là một cuốn sách nói về cách mạng lưới vận hành trong thực tế.', 20, 10, 1, '2023-05-17 04:12:38', '2023-05-17 04:12:38', NULL, 3),
(24, 'Ta chỉ gặp nhau vào ban đêm', '6LSWc_1677401027_anh2.jpg', 50000, 'Matthew Walker', 'Sau khi nghe Hayakawa Misako nói rằng từng nhìn thấy một “bóng ma” trong phòng đặt chân đế xích đạo của đài thiên văn, chúng tôi – những người bạn cùng lớp của cô, đã quyết định đi vào khu rừng nhỏ ấy vào ban đêm.', 20, 10, 0, '2023-05-17 04:14:32', '2023-05-17 04:14:32', NULL, 4),
(25, 'Đứa trẻ ánh trăng', 'dAbBC_1677400974_dua-tre-anh-trang_121758_1.jpg', 150000, 'Hà Yên', 'Bà nhìn thấy một bé gái đang rửa bát vào lúc nửa đêm. Gia đình Fleming không có con ở độ tuổi đó nếu bà nhớ không lầm, và ngay cả khi họ có con ở độ tuổi đó thì sao cô bé lại làm việc nhà vào giờ này?', 20, 30, 0, '2023-05-17 04:15:40', '2023-05-17 04:15:40', NULL, 3),
(26, '12 Xu Hướng Công Nghệ Trong Thời Đại 4.0', 'VTqkT_1677402581_fd_105071_2.jpg', 100000, 'Matthew Walker', 'Với việc phân tích 12 xu hướng làm thay đổi thế giới công nghệ, “The Inevitable: Làm chủ công nghệ làm chủ tương lai” cung cấp cho độc giả cái nhìn mới mẻ hơn về một thế giới tương lai đầy tiềm năng,', 20, 50, 0, '2023-05-17 04:20:16', '2023-05-17 04:20:16', NULL, 6),
(27, 'AI - Trí Tuệ Nhân Tạo - 101 Điều Cần Biết Về Tương Lai', 'U5P4x_1677402670_ai-tri-tue-nhan-tao-101-dieu-can-biet-ve-tuong-lai_115800_1.jpg', 200000, 'Matthew Walker', 'Làn sóng Trí tuệ nhân tạo và Cách mạng Công nghiệp Lần thứ Tư đã đưa cuộc sống loài người bước sang một kỉ nguyên mới, mà sớm hay muộn, không có ai đứng ngoài cuộc. Hãy cùng tác giả Lasse Rouhiainen tìm hiểu về AI', 10, 20, 0, '2023-05-17 04:21:35', '2023-05-17 04:21:35', NULL, 6),
(28, 'Thói Quen Sinh Hoạt Nuôi Dưỡng Não Bộ', 'gDuyP_1677402411_thoi-quen-sinh-hoat-nuoi-duong-nao-bo_120559_1.jpg', 60000, 'B R O Group', 'Thói quen sinh hoạt nuôi dưỡng não bộ sẽ giúp bạn giải thích dưới góc độ khoa học hiện đại nhất về hiệu quả có được từ hoạt động Thiền và cải thiện tình trạng giấc ngủ, tư thế, ăn uống nhằm nâng cao hơn nữa hiệu quả của nó.', 25, 5, 0, '2023-05-17 04:24:25', '2023-05-17 04:24:25', NULL, 5),
(29, 'Sự Sống, Vũ Trụ Và Vạn Vật', 'Pt6Md_1677402258_su-song-vu-tru-va-van-vat_121292_1.jpg', 50000, 'Matthew Walker', 'Những cư dân hiền hòa yêu ca hát ấy làm gì để vượt qua cú choáng váng này? Họ quyết tiêu diệt toàn bộ sự sống, Vũ Trụ và vạn vật ngoài hành tinh.', 25, 0, 0, '2023-05-17 04:26:37', '2023-05-17 04:26:37', NULL, 5),
(30, 'Cao Thủ EQ - Trân Lí Trí, Trọng Cảm Xúc', 'zW68x_1677402133_cao-thu-eq-tran-li-tri-trong-xuc-cam_121370_1.jpg', 50000, 'Matthew Walker', 'Cuốn sách Trân Lí Trí, Trọng Xúc Cảm đem đến những bài học hữu ích về nghệ thuật nhận thức cảm xúc, nghệ thuật làm bạn với cảm xúc, nghệ thuật kết nối, nghệ thuật giao tiếp và nghệ thuật bày tỏ tình yêu. Bằng cách đối mặt, trân trọng mọi cảm xúc', 55, 0, 0, '2023-05-17 04:28:10', '2023-05-17 04:28:10', NULL, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`, `categories_id`) VALUES
(1, 'Truyện thiếu nhi', '2023-05-17 02:45:13', '2023-05-17 03:46:30', NULL, 1),
(2, 'Truyện cười', '2023-05-17 02:45:28', '2023-05-17 03:46:38', NULL, 1),
(3, 'Văn học Việt Nam', '2023-05-17 02:46:38', '2023-05-17 02:46:38', NULL, 2),
(4, 'Văn học Nước Ngoài', '2023-05-17 02:46:51', '2023-05-17 02:47:00', NULL, 2),
(5, 'Y học', '2023-05-17 02:47:21', '2023-05-17 03:18:18', NULL, 3),
(6, 'Tin học', '2023-05-17 02:47:36', '2023-05-17 04:18:00', NULL, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `password`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nhung 1', 'Hưng Hà, Thái Bình', '0836175799', 'nhung1@gmail.com', '$2y$10$0RcKwI/PbAm16HGSlmjU4ufvPaTOcRSeV20X7QKT8cz5UupFnTqjC', 2, '2023-05-01 02:30:07', '2023-05-01 02:30:07', NULL),
(2, 'Nhung 2', '433 Russel Mission\r\nRogahnside, Hà Nội', '0902619987', 'nhung2@gmail.com', '$2y$10$9B7niqQnjAJXvnIlNhbsOOVhDAfZhAkMRfbNT7vzszWDCe8PlDX62', 1, '2023-05-01 02:30:07', '2023-05-01 02:30:07', NULL),
(3, 'Nhung 3', '485 Russel Mission, Hà Nội, Việt Nam', '0356354895', 'nhung3@gmail.com', '$2y$10$tH3gnULDJaw78sxWnccY9OnXN.NvW0tiWjkHx/V/CTGnD6UuhiHou', 1, '2023-05-17 02:37:12', '2023-05-17 02:39:49', NULL),
(4, 'Nhung', 'Hưng Hà, Thái Bình', '0895665986', 'nhung2001ha@gmail.com', '$2y$10$5dhl/r9SX31vTyDG5P4xTOSYYa2umChDNOTkLuX2FnKlxl1bUeAsO', 0, '2023-05-17 02:38:25', '2023-05-17 02:38:25', NULL),
(5, 'Nguyễn', 'Bắc Từ Liêm, Hà Nội', '0965832568', 'nguyen@gmail.com', '$2y$10$wBLBRRiswfafDm7MO9LExu28xM2rtxWKIlSuTczJyUYvGHrNNNSS2', 0, '2023-05-17 02:39:38', '2023-05-17 02:39:38', NULL),
(6, 'Nva', 'Bắc Từ Liêm, Hà Nội', '0859685366', 'nva@gmail.com', '$2y$10$J1J9GZaJp9pOCrE9Pd20X.iPPbjIiRiF58ad9FsLvbtSXbWwSbhE6', 0, '2023-05-17 02:41:03', '2023-05-17 02:41:03', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_product_id_foreign` (`product_id`),
  ADD KEY `favorite_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_foreign` (`users_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_orders_id_foreign` (`orders_id`),
  ADD KEY `order_details_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sub_categories_id_foreign` (`sub_categories_id`);

--
-- Chỉ mục cho bảng `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `mails`
--
ALTER TABLE `mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_sub_categories_id_foreign` FOREIGN KEY (`sub_categories_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
