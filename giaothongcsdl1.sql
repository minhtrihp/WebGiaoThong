-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 10, 2020 lúc 05:02 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giaothongcsdl1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `ID` int(10) UNSIGNED NOT NULL,
  `contents` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `driving_licenses`
--

CREATE TABLE `driving_licenses` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `driving_licenses`
--

INSERT INTO `driving_licenses` (`ID`, `name`, `description`) VALUES
(1, 'Bằng lái xe hạng A1', 'Người lái xe mô tô hai bánh có dung tích xy lanh từ 50 cm3 đến dưới 175 cm3.Người khuyết tật lái xe mô tô ba bánh dành cho người khuyết tật.'),
(2, 'Bằng lái xe hạng A2', 'Người lái xe để điều khiển xe mô tô hai bánh có dung tích xy lanh từ 175 cm3 trở lên và các loại xe quy định cho giấy phép lái xe hạng A1.'),
(3, 'Bằng lái xe hạng A3', 'Hạng A3 cấp cho người lái xe để điều khiển xe mô tô ba bánh, các loại xe quy định cho giấy phép lái xe hạng A1 và các xe tương tự.'),
(4, 'Bằng lái xe hạng A4', 'Người lái xe các loại máy kéo nhỏ có trọng tải đến 1000kg.\r\n\r\n'),
(5, 'Bằng lái xe ô tô hạng B1', 'Số tự động cấp cho người không hành nghề lái xe để điều khiển các loại xe sau đây:\r\nÔ tô số tự động chở người đến 9 chỗ ngồi, kể cả chỗ ngồi cho người lái xe\r\nÔ tô tải, kể cả ô tô tải chuyên dùng số tự động có trọng tải thiết kế dưới 3.500 kg\r\nÔ tô dùng cho người khuyết tật.'),
(6, 'Bằng lái xe ô tô hạng B2', 'Hạng B2 cấp cho người hành nghề lái xe để điều khiển các loại xe sau đây:\r\nNgười lái xe ô tô 4 - 9 chỗ, ô tô chuyên dùng có trọng tải thiết kế dưới 3,5 tấn\r\nCác loại xe quy định cho giấy phép lái xe hạng B1'),
(7, 'Bằng lái xe hạng C', 'Người lái xe ô tô 4 - 9 chỗ, ô tô tải kể cả ô tô tải chuyên dùng và ô tô chuyên dùng có trọng tải thiết kế từ 3.500kg trở lên\r\nMáy kéo kéo một rơ moóc có trọng tải thiết kế từ 3.500 kg trở lên\r\nCác loại xe quy định cho giấy phép lái xe hạng B1, B2'),
(8, 'Bằng lái xe hạng D', 'Ô tô chở người từ 10 - 30 chỗ, kể cả chỗ của người lái xe\r\nCác loại xe quy định cho giấy phép lái xe hạng B1, B2, C'),
(9, 'Bằng lái xe hạng E', 'Ô tô chở người trên 30 chỗ\r\nCác loại xe quy định cho giấy phép lái xe hạng B1, B2, C, D'),
(10, 'Bằng lái xe hạng F', 'Người đã có giấy phép lái xe các hạng B2, C, D và E để điều khiển các loại xe ô tô tương ứng kéo rơ moóc có trọng tải thiết kế lớn hơn 750 kg, sơ mi rơ moóc, ô tô khách nối toa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `driving_tests`
--

CREATE TABLE `driving_tests` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `driving_licenses_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `driving_tests`
--

INSERT INTO `driving_tests` (`ID`, `name`, `date`, `description`, `driving_licenses_id`) VALUES
(1, 'Đề 001', '2020-10-15', 'Đề thi 001 của bằng lái hạng A1', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `ID` int(11) UNSIGNED NOT NULL,
  `contents` mediumtext NOT NULL,
  `comments_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `contents` longtext NOT NULL,
  `topics_id` int(10) UNSIGNED DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `hot` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`ID`, `name`, `description`, `contents`, `topics_id`, `date`, `picture`, `hot`, `views`) VALUES
(1, 'Thêm 1 trạm thu phí ở cửa ngõ Đồng Nai chuẩn bị tạm dừng hoạt động', '<a data-utm=\"Cate_GiaoThong|MainList|1\" class=\"news-item__sapo\" title=\"Thêm 1 trạm thu phí ở cửa ngõ Đồng Nai chuẩn bị tạm dừng hoạt động\" href=\"/xa-hoi/them-1-tram-thu-phi-o-cua-ngo-dong-nai-chuan-bi-tam-dung-hoat-dong-20201029144632215.htm\">(Dân trí)&nbsp;- Sau các trạm BOT cầu Đồng Nai trên quốc lộ 1 và BOT Tân Phú trên quốc lộ 20, sắp tới trạm BOT trên quốc lộ 1K cũng sẽ cho tạm dừng thu phí từ ngày 31/10.</a>', 'https://dantri.com.vn/xa-hoi/them-1-tram-thu-phi-o-cua-ngo-dong-nai-chuan-bi-tam-dung-hoat-dong-20201029144632215.htm', NULL, '<span class=\"news-item__time\">Thứ Năm 29/10/2020 - 19:00</span>', 'anh-1603957520614.jpg', NULL, NULL),
(2, 'Lái ô tô tông chết 2 người rồi nhờ đàn em nhận tội thay', '<a data-utm=\"Cate_GiaoThong|MainList|2\" class=\"news-item__sapo\" title=\"Lái ô tô tông chết 2 người rồi nhờ đàn em nhận tội thay\" href=\"/xa-hoi/lai-o-to-tong-chet-2-nguoi-roi-nho-dan-em-nhan-toi-thay-20201029072659607.htm\">(Dân trí)&nbsp;- Sau khi lái xe ô tô “đại náo” trên đường phố khiến 2 người tử vong, Nguyễn Trọng Mười nhanh chóng rời khỏi hiện trường rồi nhờ một người khác ra cơ quan công an trình diện hòng trốn tránh trách nhiệm.</a>', 'https://dantri.com.vn/xa-hoi/lai-o-to-tong-chet-2-nguoi-roi-nho-dan-em-nhan-toi-thay-20201029072659607.htm', NULL, '<span class=\"news-item__time\">Thứ Năm 29/10/2020 - 09:48</span>', 'tn-1-1603931055409.jpg', NULL, NULL),
(3, 'Nâng bánh xe đầu kéo giải cứu một phụ nữ bị chèn ngang chân', '<a data-utm=\"Cate_GiaoThong|MainList|3\" class=\"news-item__sapo\" title=\"Nâng bánh xe đầu kéo giải cứu một phụ nữ bị chèn ngang chân\" href=\"/xa-hoi/nang-banh-xe-dau-keo-giai-cuu-mot-phu-nu-bi-chen-ngang-chan-20201028110539983.htm\">(Dân trí)&nbsp;- Một người phụ nữ đi xe máy đã bị xe đầu kéo cán ngang chân. Tài xế xe đầu kéo đã phải huy động xe cẩu nhấc bánh xe lên mới giải cứu được nạn nhân ra ngoài đưa đi cấp cứu.</a>', 'https://dantri.com.vn/xa-hoi/nang-banh-xe-dau-keo-giai-cuu-mot-phu-nu-bi-chen-ngang-chan-20201028110539983.htm', NULL, '<span class=\"news-item__time\">Thứ Tư 28/10/2020 - 11:54</span>', '2-1603857819746.jpg', NULL, NULL),
(4, 'Nghệ An: Chở quá tải trọng gần 50%, nhiều tài xế xe tải bị xử lý', '<a data-utm=\"Cate_GiaoThong|MainList|4\" class=\"news-item__sapo\" title=\"Nghệ An: Chở quá tải trọng gần 50%, nhiều tài xế xe tải bị xử lý\" href=\"/xa-hoi/nghe-an-cho-qua-tai-trong-gan-50-nhieu-tai-xe-xe-tai-bi-xu-ly-20201027170656218.htm\">(Dân trí)&nbsp;- Quá trình kiểm tra cho thấy có 4 xe tải chở quá tải trọng từ 42-49%, 1 xe có chiều cao vượt quy định. Ngoài việc yêu cầu hạ tải, hạ chiều cao, các tài xế và chủ xe đều bị xử lý theo quy định.</a>', 'https://dantri.com.vn/xa-hoi/nghe-an-cho-qua-tai-trong-gan-50-nhieu-tai-xe-xe-tai-bi-xu-ly-20201027170656218.htm', NULL, '<span class=\"news-item__time\">Thứ Tư 28/10/2020 - 10:38</span>', '1-dua-xe-vao-khu-vuc-can-xac-dinh-tai-trong-1603792632949.jpeg', NULL, NULL),
(5, 'CSGT Khánh Hòa nói gì về việc chặn xe trên quốc lộ 1 trước khi bão đổ bộ?', '<a data-utm=\"Cate_GiaoThong|MainList|5\" class=\"news-item__sapo\" title=\"CSGT Khánh Hòa nói gì về việc chặn xe trên quốc lộ 1 trước khi bão đổ bộ?\" href=\"/xa-hoi/csgt-khanh-hoa-noi-gi-ve-viec-chan-xe-tren-quoc-lo-1-truoc-khi-bao-do-bo-20201028083737221.htm\">(Dân trí)&nbsp;- Thượng tá Nguyễn Trọng Thắng, Phó Trưởng phòng CSGT Công an tỉnh Khánh Hòa sáng 28/10 đã phản hồi thông tin liên quan đến việc chặn xe ô tô đi vào vùng tâm bão từ Đà Nẵng - Phú Yên.</a>', 'https://dantri.com.vn/xa-hoi/csgt-khanh-hoa-noi-gi-ve-viec-chan-xe-tren-quoc-lo-1-truoc-khi-bao-do-bo-20201028083737221.htm', NULL, '<span class=\"news-item__time\">Thứ Tư 28/10/2020 - 10:18</span>', 'anh-1603848823789.jpg', NULL, NULL),
(6, 'Dòng phương tiện phải quay đầu tránh bão số 9, quốc lộ 1 tắc dài', '<a data-utm=\"Cate_GiaoThong|MainList|6\" class=\"news-item__sapo\" title=\"Dòng phương tiện phải quay đầu tránh bão số 9, quốc lộ 1 tắc dài\" href=\"/xa-hoi/dong-phuong-tien-phai-quay-dau-tranh-bao-so-9-quoc-lo-1-tac-dai-20201028035947883.htm\">(Dân trí)&nbsp;- Nhiều phương tiện được yêu cầu quay đầu trến Quốc lộ 1A. Phóng viên có mặt tại địa phận Cam Ranh, tỉnh Khánh Hoà ghi nhận nhiều phương tiện phải quay đầu khi đi từ Nam ra.</a>', 'https://dantri.com.vn/xa-hoi/dong-phuong-tien-phai-quay-dau-tranh-bao-so-9-quoc-lo-1-tac-dai-20201028035947883.htm', NULL, '<span class=\"news-item__time\">Thứ Tư 28/10/2020 - 07:46</span>', '91603830222850-1603845826792.jpg', NULL, NULL),
(7, 'Trạm kiểm tra tải trọng xin dừng hoạt động do… không có người làm việc', '<a data-utm=\"Cate_GiaoThong|MainList|7\" class=\"news-item__sapo\" title=\"Trạm kiểm tra tải trọng xin dừng hoạt động do… không có người làm việc\" href=\"/xa-hoi/tram-kiem-tra-tai-trong-xin-dung-hoat-dong-do-khong-co-nguoi-lam-viec-20201027105009052.htm\">(Dân trí)&nbsp;- Không có người làm việc để duy trì hoạt động 24/24 tại Trạm kiểm tra tải trọng xe lưu động số 53, Sở GTVT Đắk Lắk đã đề xuất cho dừng hoạt động của trạm.</a>', 'https://dantri.com.vn/xa-hoi/tram-kiem-tra-tai-trong-xin-dung-hoat-dong-do-khong-co-nguoi-lam-viec-20201027105009052.htm', NULL, '<span class=\"news-item__time\">Thứ Tư 28/10/2020 - 06:28</span>', 'tramcanb-104-d-1603770221573.jpg', NULL, NULL),
(8, 'Say rượu, nam công nhân băng đường ẩu gây tai nạn', '<a data-utm=\"Cate_GiaoThong|MainList|8\" class=\"news-item__sapo\" title=\"Say rượu, nam công nhân băng đường ẩu gây tai nạn\" href=\"/xa-hoi/say-ruou-nam-cong-nhan-bang-duong-au-gay-tai-nan-20201027080608618.htm\">(Dân trí)&nbsp;- Nam công nhân nồng nặc mùi rượu điều khiển xe máy băng ngang đường với tốc độ cao đã tông trúng 1 xe máy khác khiến cả 2 người văng xa trên đường, bị thương nặng.</a>', 'https://dantri.com.vn/xa-hoi/say-ruou-nam-cong-nhan-bang-duong-au-gay-tai-nan-20201027080608618.htm', NULL, '<span class=\"news-item__time\">Thứ Ba 27/10/2020 - 10:34</span>', 'anh-1-8-1603760686658.jpg', NULL, NULL),
(9, 'Đánh giá toàn diện việc chuyển quản lý giấy phép lái xe sang ngành công an', '<a data-utm=\"Cate_GiaoThong|MainList|9\" class=\"news-item__sapo\" title=\"Đánh giá toàn diện việc chuyển quản lý giấy phép lái xe sang ngành công an\" href=\"/xa-hoi/danh-gia-toan-dien-viec-chuyen-quan-ly-giay-phep-lai-xe-sang-nganh-cong-an-20201026195639343.htm\">(Dân trí)&nbsp;- Bộ Công an phải xây dựng báo cáo đánh giá đầy đủ, toàn diện hiệu quả về kinh tế, xã hội của việc đề xuất chuyển công tác quản lý giấy phép lái xe từ ngành Giao thông vận tải sang ngành Công an.</a>', 'https://dantri.com.vn/xa-hoi/danh-gia-toan-dien-viec-chuyen-quan-ly-giay-phep-lai-xe-sang-nganh-cong-an-20201026195639343.htm', NULL, '<span class=\"news-item__time\">Thứ Ba 27/10/2020 - 00:26</span>', 'giaypheplaixe-1600747609703-1603716803458.jpeg', NULL, NULL),
(10, 'Trắng đêm chong đèn khắc phục hàng chục điểm sạt lở nghiêm trọng', '<a data-utm=\"Cate_GiaoThong|MainList|11\" class=\"news-item__sapo\" title=\"Trắng đêm chong đèn khắc phục hàng chục điểm sạt lở nghiêm trọng\" href=\"/xa-hoi/trang-dem-chong-den-khac-phuc-hang-chuc-diem-sat-lo-nghiem-trong-20201026113850975.htm\">(Dân trí)&nbsp;- Nhằm khắc phục hậu quả mưa lũ, sớm thông các tuyến đường bị sạt lở, chia cắt, ngành GTVT Quảng Bình đã huy động mọi nguồn lực, thi công xuyên ngày đêm để sửa chữa, khắc phục các tuyến đường.</a>', 'https://dantri.com.vn/xa-hoi/trang-dem-chong-den-khac-phuc-hang-chuc-diem-sat-lo-nghiem-trong-20201026113850975.htm', NULL, '<span class=\"news-item__time\">Thứ Hai 26/10/2020 - 19:09</span>', 'img-7874-1603686630460.jpeg', NULL, NULL),
(11, 'Khách “cầm nhầm” đồng hồ hàng hiệu ở Nội Bài, bị giữ ngay khi tới Đà Nẵng', '<a data-utm=\"Cate_GiaoThong|MainList|12\" class=\"news-item__sapo\" title=\"Khách “cầm nhầm” đồng hồ hàng hiệu ở Nội Bài, bị giữ ngay khi tới Đà Nẵng\" href=\"/xa-hoi/khach-cam-nham-dong-ho-hang-hieu-o-noi-bai-bi-giu-ngay-khi-toi-da-nang-20201026172351689.htm\">(Dân trí)&nbsp;- Nam hành khách N.D.V.M (27 tuổi) cố tình “cầm nhầm” đồng hồ hàng hiệu ở cửa an ninh soi chiếu sân bay Nội Bài - Hà Nội. Tuy nhiên, khi chuyến bay hạ cánh xuống Đà Nẵng khách này lập tức bị giữ lại.</a>', 'https://dantri.com.vn/xa-hoi/khach-cam-nham-dong-ho-hang-hieu-o-noi-bai-bi-giu-ngay-khi-toi-da-nang-20201026172351689.htm', NULL, '<span class=\"news-item__time\">Thứ Hai 26/10/2020 - 18:07</span>', 'an-ninh-1603707575006.jpg', NULL, NULL),
(12, 'Ô tô nổ lốp tông nhiều khối bê tông phân cách &quot;bay&quot; vào 2 xe máy', '<a data-utm=\"Cate_GiaoThong|MainList|13\" class=\"news-item__sapo\" title=\"Ô tô nổ lốp tông nhiều khối bê tông phân cách &quot;bay&quot; vào 2 xe máy\" href=\"/xa-hoi/o-to-no-lop-tong-nhieu-khoi-be-tong-phan-cach-bay-vao-2-xe-may-20201026135828445.htm\">(Dân trí)&nbsp;- Chiếc ô tô đang chạy thì bất ngờ bị nổ lốp, mất lái rồi tông thẳng vào dải phân cách bằng bê tông khiến nhiều khối bê tông văng trúng 2 xe máy.</a>', 'https://dantri.com.vn/xa-hoi/o-to-no-lop-tong-nhieu-khoi-be-tong-phan-cach-bay-vao-2-xe-may-20201026135828445.htm', NULL, '<span class=\"news-item__time\">Thứ Hai 26/10/2020 - 14:39</span>', 'o-to-no-lop-tong-bay-dai-phan-cach-va-lua-nhieu-xe-may-1-1603697907789.jpeg', NULL, NULL),
(13, 'Xe khách chạy lấn làn tông trực diện xe tải, 2 tài xế thương vong', '<a data-utm=\"Cate_GiaoThong|MainList|14\" class=\"news-item__sapo\" title=\"Xe khách chạy lấn làn tông trực diện xe tải, 2 tài xế thương vong\" href=\"/xa-hoi/xe-khach-chay-lan-lan-tong-truc-dien-xe-tai-2-tai-xe-thuong-vong-20201026143516419.htm\">(Dân trí)&nbsp;- Trưa 26/10, Công an huyện Cẩm Mỹ (tỉnh Đồng Nai) cho biết đang điều tra làm rõ nguyên nhân vụ tai nạn nghiêm trọng giữa xe tải và xe khách trên tỉnh lộ 765 khiến 2 tài xế thương vong.</a>', 'https://dantri.com.vn/xa-hoi/xe-khach-chay-lan-lan-tong-truc-dien-xe-tai-2-tai-xe-thuong-vong-20201026143516419.htm', NULL, '<span class=\"news-item__time\">Thứ Hai 26/10/2020 - 13:50</span>', 'anh-261603697489597-1603698624709.jpg', NULL, NULL),
(14, 'Đường Hồ Chí Minh cần 24.000 tỷ đồng để thông từ Pác Bó tới Cà Mau', '<a data-utm=\"Cate_GiaoThong|MainList|16\" class=\"news-item__sapo\" title=\"Đường Hồ Chí Minh cần 24.000 tỷ đồng để thông từ Pác Bó tới Cà Mau\" href=\"/xa-hoi/duong-ho-chi-minh-can-24000-ty-dong-de-thong-tu-pac-bo-toi-ca-mau-20201024110651782.htm\">(Dân trí)&nbsp;- Đường Hồ Chí Minh dài gần 3.200km, làm đã 20 năm, nay vẫn còn hơn 1.000km cần triển khai để thông tuyến từ Cao Bằng tới Cà Mau, với tổng số vốn cần thu xếp thêm hơn 24.000 tỷ đồng.</a>', 'https://dantri.com.vn/xa-hoi/duong-ho-chi-minh-can-24000-ty-dong-de-thong-tu-pac-bo-toi-ca-mau-20201024110651782.htm', NULL, '<span class=\"news-item__time\">Thứ Bảy 24/10/2020 - 11:13</span>', 'duong-ho-chi-minh-1-1603512237621.jpg', NULL, NULL),
(15, 'Hi hữu tài xế bị chính xe mình cầm lái chèn tử vong', '<a data-utm=\"Cate_GiaoThong|MainList|17\" class=\"news-item__sapo\" title=\"Hi hữu tài xế bị chính xe mình cầm lái chèn tử vong\" href=\"/xa-hoi/hi-huu-tai-xe-bi-chinh-xe-minh-cam-lai-chen-tu-vong-20201023143631748.htm\">(Dân trí)&nbsp;- Ngày 23/10, Công an huyện Châu Thành, Tiền Giang cho biết, cơ quan này đang điều tra làm rõ nguyên nhân một vụ tai nạn hi hữu khi tài xế bị chính chiếc xe mình cầm lái chèn tử vong.</a>', 'https://dantri.com.vn/xa-hoi/hi-huu-tai-xe-bi-chinh-xe-minh-cam-lai-chen-tu-vong-20201023143631748.htm', NULL, '<span class=\"news-item__time\">Thứ Sáu 23/10/2020 - 15:49</span>', '20201022224625-1603438409565.jpg', NULL, NULL),
(16, 'Khởi công tuyến đường nghìn tỷ đến Cảng hàng không Thọ Xuân', '<a data-utm=\"Cate_GiaoThong|MainList|18\" class=\"news-item__sapo\" title=\"Khởi công tuyến đường nghìn tỷ đến Cảng hàng không Thọ Xuân\" href=\"/xa-hoi/khoi-cong-tuyen-duong-nghin-ty-den-cang-hang-khong-tho-xuan-20201023120346548.htm\">(Dân trí)&nbsp;- Đường nối TP Thanh Hóa với CHK Thọ Xuân phục vụ nhu cầu vận tải ngày càng tăng, đáp ứng nhu cầu phát triển của TP Thanh Hóa và CHK Thọ Xuân là CHK Quốc tế, dự bị cho CHK Quốc tế Nội Bài.</a>', 'https://dantri.com.vn/xa-hoi/khoi-cong-tuyen-duong-nghin-ty-den-cang-hang-khong-tho-xuan-20201023120346548.htm', NULL, '<span class=\"news-item__time\">Thứ Sáu 23/10/2020 - 14:52</span>', '183-d-5105121-t-90276-l-0-1603429246327.jpg', NULL, NULL),
(17, 'TPHCM cấm xe hàng loạt tuyến đường trung tâm', '<a data-utm=\"Cate_GiaoThong|MainList|19\" class=\"news-item__sapo\" title=\"TPHCM cấm xe hàng loạt tuyến đường trung tâm\" href=\"/xa-hoi/tphcm-cam-xe-hang-loat-tuyen-duong-trung-tam-20201023120049953.htm\">(Dân trí)&nbsp;- Hàng loạt tuyến đường tại TPHCM sẽ bị cấm xe nhiều ngày nhằm đảm bảo an toàn giao thông khi diễn tập phương án chữa cháy cứu nạn - cứu hộ tại đường hầm sông Sài Gòn và khu vực trung tâm TP.</a>', 'https://dantri.com.vn/xa-hoi/tphcm-cam-xe-hang-loat-tuyen-duong-trung-tam-20201023120049953.htm', NULL, '<span class=\"news-item__time\">Thứ Sáu 23/10/2020 - 14:45</span>', 'cam-xe-qua-ham-song-sai-gon-1603429137794.jpg', NULL, NULL),
(18, '&quot;Điểm danh&quot; các đoạn đường ngập lụt, sạt lở tại miền Trung', '<a data-utm=\"Cate_GiaoThong|MainList|21\" class=\"news-item__sapo\" title=\"&quot;Điểm danh&quot; các đoạn đường ngập lụt, sạt lở tại miền Trung\" href=\"/xa-hoi/diem-danh-cac-doan-duong-ngap-lut-sat-lo-tai-mien-trung-20201022123604144.htm\">(Dân trí)&nbsp;- Tổng Cục Đường bộ Việt Nam vừa thông tin về những điểm đường ùn tắc, ngập nặng do mưa lớn tại các tỉnh miền Trung. Theo đó, có nhiều điểm bị cấm đường, một số đoạn phương tiện có thể lưu thông.</a>', 'https://dantri.com.vn/xa-hoi/diem-danh-cac-doan-duong-ngap-lut-sat-lo-tai-mien-trung-20201022123604144.htm', NULL, '<span class=\"news-item__time\">Thứ Năm 22/10/2020 - 14:48</span>', 'z-2137663562972-b-5823001020-f-6597148-e-182-a-217-f-6-afe-1603344745488.jpg', NULL, NULL),
(19, 'Hai thanh niên bốc đầu xe máy, 1 người ngã ra đường bị ô tô cán chết', '<a data-utm=\"Cate_GiaoThong|MainList|22\" class=\"news-item__sapo\" title=\"Hai thanh niên bốc đầu xe máy, 1 người ngã ra đường bị ô tô cán chết\" href=\"/xa-hoi/hai-thanh-nien-boc-dau-xe-may-1-nguoi-nga-ra-duong-bi-o-to-can-chet-20201022115116328.htm\">(Dân trí)&nbsp;- Trong lúc người cầm lái bốc đầu xe máy, thì xảy ra va chạm vào dải phân cách, khiến người ngồi sau bị bắn sang làn đường ngược chiều và bị một xe ô tô đi tới cán tử vong.</a>', 'https://dantri.com.vn/xa-hoi/hai-thanh-nien-boc-dau-xe-may-1-nguoi-nga-ra-duong-bi-o-to-can-chet-20201022115116328.htm', NULL, '<span class=\"news-item__time\">Thứ Năm 22/10/2020 - 13:00</span>', 'img-30541569188427025-1603342067277.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `question_tests`
--

CREATE TABLE `question_tests` (
  `ID` int(10) UNSIGNED NOT NULL,
  `question` mediumtext NOT NULL,
  `option_a` mediumtext NOT NULL,
  `option_b` mediumtext NOT NULL,
  `option_c` mediumtext DEFAULT NULL,
  `option_d` mediumtext DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `driving_tests_id` int(10) UNSIGNED NOT NULL,
  `correct` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `question_tests`
--

INSERT INTO `question_tests` (`ID`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `picture`, `driving_tests_id`, `correct`) VALUES
(1, 'Biển nào cấm người đi bộ?', 'Biển báo 1', 'Biển báo 1 và 3', 'Biển báo 2', 'Biển báo 2 và 3', 'camnguoidibo.jpg', 1, 'C'),
(2, 'Gặp biển nào người lái xe phải nhường đường cho người đi bộ?', 'Biển báo 1', 'Biển báo 3', 'Biển báo 2', 'Biển báo 1 và 3', 'nhuongduongnguoidibo.jpg', 1, 'A'),
(3, 'Biển nào báo hiệu sắp đến chỗ giao nhau nguy hiểm?', 'Biển báo 2 và 3', 'Biển báo 1', 'Biển báo 1 và 2', 'Cả ba biển báo', 'chogiaonhau.jpg', 1, 'A'),
(4, 'Biển nào báo hiệu nguy hiểm giao nhau với đường sắt?', 'Biển báo 1 và 3', 'Biển báo 1 và 2', 'Biển báo 2 và 3', 'Cả ba biển báo', 'giaoduongsat.jpg', 1, 'A'),
(5, 'Biển nào chỉ dẫn được ưu tiên qua đường hẹp?', 'Biển báo 1', 'Biển báo 2', 'Biển báo 3', 'Biển báo 2 và 3', 'uutienduonghep.jpg', 1, 'C'),
(6, 'Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', 'Xe tải, xe lam, mô tô.', 'Xe lam, xe tải, mô tô.', 'Mô tô, xe lam, xe tải.', 'Xe lam, mô tô, xe tải.', '117.jpg', 1, 'C'),
(7, 'Thứ tự các xe đi như thế nào là đúng quy tắc giao thông?', 'Xe khách, xe tải, mô tô, xe con.', 'Xe con, xe khách, xe tải, mô tô.', 'Mô tô, xe tải, xe khách, xe con.', 'Mô tô, xe tải, xe con, xe khách.', '124.jpg', 1, 'C'),
(8, 'Trong hình dưới, những xe nào vi phạm quy tắc giao thông?', 'Xe con (E), mô tô (C).', 'Xe tải (A), mô tô (D).', 'Xe khách (B), mô tô (C).', 'Xe khách (B), mô tô (D).', '140.jpg', 1, 'A'),
(9, 'Khái niệm “người điều khiển giao thông” được hiểu như thế nào là đúng?', 'Là người điều khiển phương tiện tham gia giao thông.', 'Là người được giao nhiệm vụ hướng dẫn giao thông tại nơi thi công, nơi ùn tắc giao thông, ở bến phà, tại cầu đường bộ đi chung với đường sắt.', 'Là cảnh sát giao thông.', 'Câu B và C.', NULL, 1, 'D'),
(10, 'Tại nơi đường giao nhau, khi đèn điều khiển giao thông có tín hiệu vàng, người điều khiển phương tiện như thế nào?', 'Phải cho xe dừng lại trước vạch dừng,trừ trường hợp đã đi quá vạch dừng thì được đi tiếp; trong trường hợp tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát, nhường đường cho người đi bộ qua đường.', 'Phải cho xe nhanh chóng vượt qua vạch dừng để đi qua đường giao nhau và chú ý đảm bảo an toàn; khi đèn tín hiệu vàng nhấp nháy là được đi nhưng phải giảm tốc độ, chú ý quan sát người đi bộ để đảm bảo an toàn.', 'Cả 2 ý nêu trên đều đúng.', 'Cả 2 ý nêu trên đều sai.', NULL, 1, 'A'),
(11, 'Tại nơi đường bộ giao nhau cùng mức với đường sắt chỉ có đèn tín hiệu hoặc chuông báo hiệu, khi đèn tín hiệu màu đỏ đã bật sáng hoặc có tiếng chuông báo hiệu, người tham gia giao thông phải dừng lại ngay và giữ khoảng cách tối thiểu bao nhiêu mét tính từ ray gần nhất?', '5.00m.', '3.00m.', '4.00m.', '7.00m.', NULL, 1, 'A'),
(12, 'Người đủ 16 tuổi được điều khiển các loại xe nào dưới đây?', 'Xe mô tô hai bánh có dung tích xilanh từ 50 cm3 trở lên.', 'Xe gắn máy có dung tích xilanh từ 50 cm3 trở xuống.', 'Xe ô tô tải dưới 3,5 tấn, xe chở người đến 9 chỗ ngồi.', 'Tất cả các ý trên.', NULL, 1, 'B'),
(13, 'Trên đường bộ trong khu vực đông dân cư, xe mô tô hai bánh, xe gắn máy tham gia giao thông với tốc độ tối đa cho phép là bao nhiêu?', '60 km/h.', '50 km/h.', '40 km/h.', '30 km/h.', NULL, 1, 'C'),
(14, 'Khai gặp biển nào thì xe mô tô hai bánh được đi vào?', 'Không biển báo nào', 'Biển báo 1 và 2', 'Biển báo 2 và 3', 'Cả ba biển báo', '101.jpg', 1, 'C'),
(15, 'Biển nào báo hiệu cầu vượt liên thông?', 'Biển báo 2 và 3', 'Biển báo 1 và 2', 'Biển báo 1 và 3', 'Cả ba biển báo', '112.jpg', 1, 'C'),
(16, 'Bạn đang lái xe phía trước có một xe cứu thương đang phát tín hiệu ưu tiên bạn có được phép vượt hay không ?', 'Không được vượt.', 'Được vượt khi đang đi trên cầu.', 'Được phép vượt khi đi qua nơi giao nhau có ít phương tiện cùng tham gia giao thông.', 'Được vượt khi đảm bảo an toàn.', NULL, 1, 'A'),
(17, 'Tay ga trên xe mô tô hai bánh có tác dụng gì trong các trường hợp dưới đây ?', 'Để điều khiển xe chạy về phía trước.', 'Để điều tiết công suất động cơ qua đó điều khiển tốc độ của xe.', 'Để điều khiển xe chạy lùi.', 'Cả ý 1 và ý 2.', NULL, 1, 'D'),
(18, 'Theo hướng mũi tên, những hướng nào xe mô tô được phép đi ?', 'Cả ba hướng.', 'Hướng 1 và 2.', 'Hướng 1 và 3.', 'Hướng 2 và 3.', '24.jpg', 1, 'C'),
(19, 'Vạch kẻ đường nào dưới đây là vạch phân chia hai chiều xe chạy (vạch tim đường), xe không được lấn làn, không được đè lên vạch ?', 'Vạch 1', 'Vạch 2', 'Vạch 3', 'Cả 3 vạch', '21.jpg', 1, 'B'),
(20, 'Biển nào dưới đây báo hiệu hết cấm vượt ?', 'Biển 1', 'Biển 2', 'Biển 3', 'Biển 2 và 3', '20.jpg', 1, 'D');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`ID`, `Name`, `description`) VALUES
(1, 'An toàn giao thông đô thị', 'An toàn giao thông đô thị.'),
(2, 'An toàn giao thông địa phương', 'An toàn giao thông địa phương.'),
(3, 'Chính sách An toàn giao thông', 'Chính sách An toàn giao thông.'),
(4, 'Chiến lược An toàn giao thông', 'Chiến lược An toàn giao thông.'),
(5, 'Vấn đề chung về An toàn giao thông', 'Vấn đề chung về An toàn giao thông.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `level` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `birthdate`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'truongan', 'anmaster122@gmail.com', '1999-06-18', 0, NULL, '$2y$10$xP8fcyA2aWiBJ/SxyA9EFeJFNTY61fe4dmxFATk7Gb4.q25jhQnyy', 'DZJsXqKdqOMnOIPajznCLBdnrzJjbZpemo2ogpoEFJZfntUkXxLqijPY4ZxA', '2020-11-02 22:09:02', '2020-11-02 22:09:02'),
(2, 'truongan1', '1751010001an@ou.edu.vn', '1999-06-18', 1, NULL, '$2y$10$.aOJWBoLC4.RHNdTruxvD.6cVUNixmjejRCFIXobR6xb2RN4l2xf2', 'dvLyg7iPjPTFNrWaWaRnsjvAKuel1zBC1fAzLK6Rf0Kr7GHZHbPqCxdOKRDl', '2020-11-04 11:37:33', '2020-11-04 11:37:33'),
(3, 'Tri Hoang', 'hoangphamminhtri@gmail.com', '2020-11-05', 1, NULL, '$2y$10$.T5GBSmFTttmBeKaQUtEC./vMxGnqf9235xWjTi6PirJQ081.cza.', NULL, '2020-11-09 19:18:38', '2020-11-09 19:18:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `driving_licenses`
--
ALTER TABLE `driving_licenses`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `driving_tests`
--
ALTER TABLE `driving_tests`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `driving_licenses_id` (`driving_licenses_id`);

--
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `comments_id` (`comments_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `topics_id` (`topics_id`);

--
-- Chỉ mục cho bảng `question_tests`
--
ALTER TABLE `question_tests`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `driving_tests_id` (`driving_tests_id`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `driving_licenses`
--
ALTER TABLE `driving_licenses`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `driving_tests`
--
ALTER TABLE `driving_tests`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `question_tests`
--
ALTER TABLE `question_tests`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`news_id`) REFERENCES `news` (`ID`),
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `driving_tests`
--
ALTER TABLE `driving_tests`
  ADD CONSTRAINT `driving_tests_ibfk_1` FOREIGN KEY (`driving_licenses_id`) REFERENCES `driving_licenses` (`ID`);

--
-- Các ràng buộc cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_ibfk_1` FOREIGN KEY (`comments_id`) REFERENCES `comments` (`ID`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`topics_id`) REFERENCES `topics` (`ID`);

--
-- Các ràng buộc cho bảng `question_tests`
--
ALTER TABLE `question_tests`
  ADD CONSTRAINT `question_tests_ibfk_1` FOREIGN KEY (`driving_tests_id`) REFERENCES `driving_tests` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
