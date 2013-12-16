-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2013 at 01:59 AM
-- Server version: 5.5.27
-- PHP Version: 5.3.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baoveantam_vl`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0e023d9646fb5ede7519a33a946c1cc2', '66.249.77.225', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387153610, ''),
('3a433f284a5f014a8621532def1f3dbe', '123.20.191.151', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36', 1387155662, ''),
('4bed877789725abb019d485a113fbd09', '66.249.77.225', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387152518, ''),
('60c05b7c8eaaff2318e816c2d44b9057', '66.249.74.9', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387159119, ''),
('63ac9fae4afdfeaa75bfb6d11f88d2cf', '66.249.77.225', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387154364, ''),
('b664dd1f2115e3b2655a3fc98edf3cb0', '66.249.77.225', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387158616, ''),
('ccf955d624ca5d073bc85f45fe2600f6', '66.249.77.225', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387155827, ''),
('e4d8bbbe964c9977f2bd06cbcbb7ce7d', '66.249.77.225', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1387150905, ''),
('fd8ddb9c3cdf63c2bc979419c1620c3b', '123.20.202.135', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.41 Safari/537.36', 1387156874, 'a:9:{s:4:"u_id";s:2:"19";s:10:"u_username";s:29:"vieclamdatphuongnam@gmail.com";s:10:"u_fullname";s:0:"";s:8:"u_status";s:1:"1";s:6:"u_role";s:1:"3";s:10:"u_birthday";s:1:"0";s:8:"u_adress";s:92:"Số 7, đường 49, phường Hiệp Bình Chánh, Quận Thủ Đức, Tp Hồ Chí Minh.";s:7:"u_phone";s:0:"";s:3:"sex";s:0:"";}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenthat` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `capdo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `solanvao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ql_ungvien` int(11) NOT NULL,
  `ql_tintuc` int(11) NOT NULL,
  `ql_nhatuyendung` int(11) NOT NULL,
  `ql_email` int(11) NOT NULL,
  `ql_quancao` int(11) NOT NULL,
  `ql_lienhe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `ten`, `matkhau`, `tenthat`, `email`, `capdo`, `solanvao`, `ql_ungvien`, `ql_tintuc`, `ql_nhatuyendung`, `ql_email`, `ql_quancao`, `ql_lienhe`) VALUES
(1, 'admin', '123456', 'Đoàn Quang Thắng', 'quangthang12891@gmail.com', '1', '22', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_age`
--

CREATE TABLE IF NOT EXISTS `tbl_age` (
  `age_id` int(11) NOT NULL AUTO_INCREMENT,
  `age_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`age_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_age`
--

INSERT INTO `tbl_age` (`age_id`, `age_name`) VALUES
(1, 'Dưới 18 tuổi'),
(2, '18 - 24 tuổi'),
(3, '25 - 29 tuổi'),
(4, '30 - 34 tuổi'),
(5, '35 - 39 tuổi'),
(6, '40 - 44 tuổi'),
(7, 'Trên 45 tuổi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bangcap`
--

CREATE TABLE IF NOT EXISTS `tbl_bangcap` (
  `bang_id` int(11) NOT NULL AUTO_INCREMENT,
  `bang_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`bang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_bangcap`
--

INSERT INTO `tbl_bangcap` (`bang_id`, `bang_name`) VALUES
(1, 'Trên đại học'),
(2, 'Đại học'),
(3, 'Cao đẳng'),
(4, 'Trung cấp'),
(5, 'Trung học'),
(6, 'Không yêu cầu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_capbac`
--

CREATE TABLE IF NOT EXISTS `tbl_capbac` (
  `cb_id` int(11) NOT NULL AUTO_INCREMENT,
  `cb_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_capbac`
--

INSERT INTO `tbl_capbac` (`cb_id`, `cb_name`) VALUES
(3, 'Quản trị cấp cao'),
(4, 'Trưởng/Phó phòng'),
(5, 'Tư vấn/Trợ lý'),
(6, 'Chuyên gia'),
(7, 'Nhân viên'),
(8, 'Khác'),
(9, 'Trưởng nhóm/Giám sát'),
(10, 'Kỹ thuật viên/Kỹ sư'),
(11, 'Chuyên viên');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE IF NOT EXISTS `tbl_city` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`n_id`, `n_name`) VALUES
(1, 'TP.Hồ Chí Minh'),
(2, 'Hà Nội'),
(3, 'An Giang'),
(4, 'Bạc Liêu'),
(5, 'Bà Rịa-Vũng Tàu'),
(6, 'Bắc Cạn'),
(7, 'Bắc Giang'),
(8, 'Bắc Ninh'),
(9, 'Bến Tre'),
(10, 'Bình Dương'),
(11, 'Bình Định'),
(12, 'Bình Phước'),
(13, 'Bình Thuận'),
(14, 'Cao Bằng'),
(15, 'Cà Mau'),
(16, 'Cần Thơ'),
(17, 'Đà Nẵng'),
(18, 'Đắk Lắk'),
(19, 'Đắk Nông'),
(20, 'Điện Biên'),
(21, 'Đồng Nai'),
(22, 'Đồng Tháp'),
(23, 'Gia Lai'),
(24, 'Hà Giang'),
(25, 'Hà Nam'),
(26, 'Hà Tây'),
(27, 'Hà Tĩnh'),
(28, 'Hải Dương'),
(29, 'Hải Phòng'),
(30, 'Hậu Giang'),
(31, 'Hòa Bình'),
(32, 'Hưng Yên'),
(33, 'Khánh Hòa'),
(34, 'Kiên Giang'),
(35, 'Kon Tum'),
(36, 'Lai Châu'),
(37, 'Lạng Sơn'),
(38, 'Lào Cai'),
(39, 'Lâm Đồng'),
(40, 'Long An'),
(41, 'Nam Định'),
(42, 'Nghệ An'),
(43, 'Ninh Bình'),
(44, 'Ninh Thuận'),
(45, 'Phú Thọ'),
(46, 'Phú Yên'),
(47, 'Quảng Bình'),
(48, 'Quảng Nam'),
(49, 'Quảng Ngãi'),
(50, 'Quảng Ninh'),
(51, 'Quảng Trị'),
(52, 'Sóc Trăng'),
(53, 'Sơn La'),
(54, 'Tây Ninh'),
(55, 'Thái Bình'),
(56, 'Thái Nguyên'),
(57, 'Thanh Hóa'),
(58, 'Thừa Thiên-Huế'),
(59, 'Tiền Giang'),
(60, 'Trà Vinh'),
(61, 'Tuyên Quang'),
(62, 'Vĩnh Long'),
(63, 'Vĩnh Phúc'),
(64, 'Yên Bái'),
(65, 'Toàn Quốc'),
(66, 'Nước Ngoài');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employers_post`
--

CREATE TABLE IF NOT EXISTS `tbl_employers_post` (
  `j_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `m_id` int(11) NOT NULL,
  `j_nghe1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_countryID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID` int(11) NOT NULL,
  `j_cityID1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_copy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_year` int(11) NOT NULL,
  `j_perID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_degID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_muctieunn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_kynang` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_dalam` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_luongdaco` int(11) NOT NULL,
  `j_chucmm` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_luongmm` int(11) NOT NULL,
  `j_timeID` int(11) NOT NULL,
  `j_goto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_date` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_update` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_lastdate` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_active` int(11) NOT NULL,
  `j_hot` int(11) NOT NULL,
  `j_activeSearch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_hienthi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_trinhdo` int(11) NOT NULL,
  `j_nganhhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_namtotnghiep` int(11) NOT NULL,
  `j_loaitotnghiep` int(11) NOT NULL,
  `j_truongdahoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_ngoaingu` int(11) NOT NULL,
  `j_trinhdonn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_tinhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_bangcapkhac` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_kinhnghiem` int(11) NOT NULL,
  `j_infokinhnghiem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_datestart` int(11) NOT NULL,
  `j_thamkhao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_sanggia` int(11) NOT NULL DEFAULT '0',
  `j_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_employers_post`
--

INSERT INTO `tbl_employers_post` (`j_id`, `u_id`, `m_id`, `j_nghe1`, `j_nghe2`, `j_nghe3`, `j_countryID`, `j_cityID`, `j_cityID1`, `j_cityID2`, `j_cityID3`, `j_title`, `j_copy`, `j_year`, `j_perID`, `j_degID`, `j_muctieunn`, `j_kynang`, `j_dalam`, `j_luongdaco`, `j_chucmm`, `j_luongmm`, `j_timeID`, `j_goto`, `j_date`, `j_update`, `j_lastdate`, `j_visits`, `j_active`, `j_hot`, `j_activeSearch`, `j_hienthi`, `j_trinhdo`, `j_nganhhoc`, `j_namtotnghiep`, `j_loaitotnghiep`, `j_truongdahoc`, `j_ngoaingu`, `j_trinhdonn`, `j_tinhoc`, `j_bangcapkhac`, `j_kinhnghiem`, `j_infokinhnghiem`, `j_datestart`, `j_thamkhao`, `j_sanggia`, `j_status`) VALUES
(11, 6, 0, '', '', '', '', 0, '', '', '', 'ss', '', 0, '', '', '', '', '', 0, '-1', -1, -1, '', '0', '0', '0', '', 0, 0, '', '', -1, '', -1, -1, '', -1, '-1', '', '', -1, '                            ', 0, '                            ', 0, 0),
(12, 6, 0, '', '', '', '', 0, '', '', '', 'sss', '', 0, '', '', '', '', '', 0, '-1', -1, -1, '', '0', '0', '0', '', 0, 0, '', '', -1, '', -1, -1, '', -1, '-1', '', '', -1, '                            ', 0, '                            ', 0, 0),
(13, 6, 25, '', '', '', '', 1, '', '', '', 'beobeboi91', '', 0, '', '', 'beobeboi91', 'beobeboi91', '', 0, '3', 2, 1, '', '1417564800', '1417564800', '1417564800', '', 0, 0, '', '', 1, 'beobeboi91', 1998, 1, 'beobeboi91', 19, '3', 'beobeboi91', 'beobeboi91', 5, '                            ', 0, 'beobeboi91', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hoso`
--

CREATE TABLE IF NOT EXISTS `tbl_hoso` (
  `hoso_id` int(11) NOT NULL AUTO_INCREMENT,
  `hoso_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`hoso_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_hoso`
--

INSERT INTO `tbl_hoso` (`hoso_id`, `hoso_name`) VALUES
(1, 'Trực tiếp'),
(2, 'Trực tuyến'),
(3, 'Qua Email');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_intuc`
--

CREATE TABLE IF NOT EXISTS `tbl_intuc` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_info` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_active` int(11) NOT NULL,
  `cat_order` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_show` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_intuc`
--

INSERT INTO `tbl_intuc` (`cat_id`, `cat_name`, `cat_info`, `cat_active`, `cat_order`, `cat_show`) VALUES
(1, 'Tin này xem', 'abcxyz', 1, 'ko hiểu là cái ji', '0'),
(2, 'Tin này xem', 'abcxyz', 1, 'ko hiểu là cái ji', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_post`
--

CREATE TABLE IF NOT EXISTS `tbl_job_post` (
  `e_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `e_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_mem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_luong` int(11) NOT NULL,
  `e_luonga` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_luongb` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_trinhdo` int(11) NOT NULL,
  `e_capbacID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_timeID` int(11) NOT NULL,
  `e_cityID` int(11) NOT NULL,
  `e_cityID1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe` int(11) NOT NULL,
  `e_nghe1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_descript` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_request` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_hoso` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_phucLoi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_kinhnghiem` int(11) NOT NULL,
  `e_date` int(11) NOT NULL,
  `e_dateActive` int(11) NOT NULL,
  `e_lastDate` int(11) NOT NULL,
  `e_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_hienthi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_indam` int(11) NOT NULL,
  `e_hot` int(11) NOT NULL,
  `e_sanggia` int(11) NOT NULL,
  `e_active` int(11) NOT NULL,
  `e_active_home` int(11) NOT NULL,
  `e_sex` int(11) NOT NULL,
  `e_skill` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_timetest` int(11) NOT NULL,
  `e_datesave` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `e_lienhe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_dotuoi` int(11) NOT NULL,
  `e_daluu1` int(11) NOT NULL,
  `e_daungtuyen1` int(11) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbl_job_post`
--

INSERT INTO `tbl_job_post` (`e_id`, `u_id`, `e_title`, `e_mem`, `e_luong`, `e_luonga`, `e_luongb`, `e_trinhdo`, `e_capbacID`, `e_timeID`, `e_cityID`, `e_cityID1`, `e_cityID2`, `e_cityID3`, `e_nghe`, `e_nghe1`, `e_nghe2`, `e_nghe3`, `e_descript`, `e_request`, `e_hoso`, `e_phucLoi`, `e_kinhnghiem`, `e_date`, `e_dateActive`, `e_lastDate`, `e_visits`, `e_hienthi`, `e_indam`, `e_hot`, `e_sanggia`, `e_active`, `e_active_home`, `e_sex`, `e_skill`, `e_timetest`, `e_datesave`, `m_id`, `e_lienhe`, `e_dotuoi`, `e_daluu1`, `e_daungtuyen1`) VALUES
(1, 11, 'Tuyển nhân viên Bán hàng', '5', 2, '5000000', '', 2, '1', 1, 1, '0', '0', '0', 4, '2', '0', '0', 'Mô tả công việc vào đây', 'yêu cầu thêm', 'hồ sơ cần ji viết vào đây', 'phúc lợi ra sao', 2, 28112013, 29112013, 12122012, '56', '1', 1, 1, 1, 1, 1, 1, 'kỹ năng thì ghi vào đây', 12, 12122013, 10, '', 0, 11, 12),
(2, 11, 'Tuyển nhân viên văn phòng', '5', 3, '900$', '800$', 2, '3', 1, 1, '1', '1', '1', 1, '1', '1', '1', 'skhkjdahsidiuwhiuh', 'thông tin hả', 'ji cũng đc', 'như nhà nước quy định', 1, 12052013, 13052013, 12062013, '32', '1', 1, 1, 1, 1, 1, 1, '1', 0, 0, 13, '', 0, 12, 11),
(3, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(4, 11, 'Nhân viên kinh doanh', '3', 4, '', '', 1, '3', 3, 15, '', '', '', 0, '', '', '', 'mô tả công việc', 'yêu cầu khác', 'hồ sơ bao gồm', 'quyền lợi được hưởng', 5, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 24, '3', 2, 0, 0),
(5, 11, 'Nhân viên IT phần mêm', '5', 1, '', '', 2, '7', 1, 1, '', '', '', 0, '', '', '', 'mô tả công việc', 'yêu cầu khác', 'yêu cầu của hồ sơ', 'quyền lợi được hưởng của nhân viên', 5, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 10, '3', 2, 0, 0),
(6, 11, 'Tuyển nhân viên bán hàng toàn quốc', '5', 1, '', '', 1, '4', 1, 2, '', '', '', 0, '', '', '', 'công việc dạng háng ăn hàng', 'yêu cầu khác của nhà tuyển dụng', 'hồ sơ cần những ji', 'hưởng đầy đủ quyền lợi', 2, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 10, '1', 1, 11, 11),
(7, 11, 'Giám đốc chém gió', '3', 4, '', '', 1, '3', 2, 2, '', '', '', 0, '', '', '', 'công việc thì chỉ ngồi và chém gió thôi', 'yêu cầu đẹp trai co to đen hôi', 'hồ sơ như bình thường', 'quyền của giám đốc thì đừng có hỏi', 1, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 11, '3', 2, 0, 0),
(8, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(9, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(10, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(11, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(12, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(13, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(14, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(15, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(16, 15, 'nhân viên nhân sự', '', 1, '', '', 2, '7', 1, 21, '', '', '', 0, '', '', '', '1.	Quản lý công tác tuyển dụng công ty theo thủ tục tuyển dụng :\n+	Nhận bản đăng kí nhân sự, trình ký.\n+	Làm thông báo tuyển dụng, liên hệ với các trung tâm việc làm để thông báo tuyển dụng, chuyển thông báo tuyển dụng cho thư ký HC đăng báo.\n+	Nhận hồ sơ, kiểm tra hồ sơ, trả hồ sơ không đạt, lên danh sách trình Giám đốc.\n+	Lập – gởi thư mời test theo yêu cầu Giám đốc, thông báo cho ứng viên thời gian test, chuẩn bị bài test, phòng test, chuyển bài cho Giám đốc, lên danh sách kết quả test, thông báo cho các ứng viên.\n+	Lên danh sách phỏng vấn, thông báo cho ứng viên thời gian, địa điểm phỏng vấn.Lập danh sách kết quả phỏng vấn, thông báo  cho các các ứng viên không đạt yêu cầu, thông báo lịch nhận việc cho các ứng viên đạt yêu cầu.\n2.	Chuyển bảng đánh giá ứng viên cho phòng kế toán tính lương, lập bảng đánh gia ứng viên khi thử việc.\n3.	Quản lý hồ sơ, lý lịch của CNV toàn công ty: lưu hồ sơ CNV trong file theo bộ phận .Lập danh sách CNV công ty theo biểu mẫu, cập nhật định kì hàng tháng.\n4.	Quản lý hồ sơ lý lịch của ứng viên không đạt yêu cầu : lập danh sách ứng viên không đạt yêu cầu theo biểu mẫu dan sách phỏng vấn của thủ tục tuyển dụng, hồ sơ của từng đợt tuyển dụng đối với mỗi loại chức danh được lưu giữu riêng theo thứ tự trong danh sách.\n', '', '-	Đơn xin việc;\n-	Sơ yếu lý lịch có chứng thực của UBND xã/phường/quận/huyện;\n-	Sơ yếu lý lịch ghi rõ kinh nghiệm làm việc ( nếu có);\n-	Phiếu khám sức khỏe của trung tâm quận/huyện cấp;\n-	1 giấy xác nhận của phường/xã không có tiền án, tiền sự;\n-	Bằng tốt nghiệp, bảng điểm;\n-	Bản sao các văn bằng, chứng chỉ khác ( nếu có):  quyết định xuất ngũ, quyết định thôi việc ( nếu có).\n', '6.	Chế độ:\n            +Theo luật lao động và chính sách của công ty;\n            + Được ký hợp đồng chính thức có mức lương ổn định từ 3 đến 6 triệu;\n            + Nhân viên được hưởng các chế độ BHXH, BHYT;\n            + Được hưởng phép năm: 12 ngày;\n         + Được cung cấp nhà trọ miễn phí cho nhân viên từ khi đào tạo, đến khi đi làm;\n            + Miễn phí đào tạo, huấn luyện do công ty thực hiện;\n            + Được làm việc trong môi trường chuyên nghiệp, có cơ hội thăng tiến cao; \n            + Các chế độ khác theo quy định của công ty.\n', 1, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 40, '3', 2, 0, 0),
(17, 15, 'nhân viên nhân sự', '3', 1, '', '', 2, '7', 1, 1, '', '', '', 0, '', '', '', '1.	Quản lý công tác tuyển dụng công ty theo thủ tục tuyển dụng :\n+	Nhận bản đăng kí nhân sự, trình ký.\n+	Làm thông báo tuyển dụng, liên hệ với các trung tâm việc làm để thông báo tuyển dụng, chuyển thông báo tuyển dụng cho thư ký HC đăng báo.\n+	Nhận hồ sơ, kiểm tra hồ sơ, trả hồ sơ không đạt, lên danh sách trình Giám đốc.\n+	Lập – gởi thư mời test theo yêu cầu Giám đốc, thông báo cho ứng viên thời gian test, chuẩn bị bài test, phòng test, chuyển bài cho Giám đốc, lên danh sách kết quả test, thông báo cho các ứng viên.\n+	Lên danh sách phỏng vấn, thông báo cho ứng viên thời gian, địa điểm phỏng vấn.Lập danh sách kết quả phỏng vấn, thông báo  cho các các ứng viên không đạt yêu cầu, thông báo lịch nhận việc cho các ứng viên đạt yêu cầu.\n2.	Chuyển bảng đánh giá ứng viên cho phòng kế toán tính lương, lập bảng đánh gia ứng viên khi thử việc.\n3.	Quản lý hồ sơ, lý lịch của CNV toàn công ty: lưu hồ sơ CNV trong file theo bộ phận .Lập danh sách CNV công ty theo biểu mẫu, cập nhật định kì hàng tháng.\n4.	Quản lý hồ sơ lý lịch của ứng viên không đạt yêu cầu : lập danh sách ứng viên không đạt yêu cầu theo biểu mẫu dan sách phỏng vấn của thủ tục tuyển dụng, hồ sơ của từng đợt tuyển dụng đối với mỗi loại chức danh được lưu giữu riêng theo thứ tự trong danh sách.\n5.	Quản lý hồ sơ CNV nghỉ việc: tất cả CNV nghỉ việc được luu theo thứ tự thời gian, trường hợp CNV  nghỉ việc rút lại hồ sơ thì photo hồ sơ.\n6.	Quản lý việc đào tạo của công ty: lập kế hoạch, chương trình đào tạo, liên hệ cơ sở đào tạo, làm thủ tục cho CNV đi đào tạo, lưu bằng cấp – chứng chỉ đào tạo của CNV, đánh giá kết quả đào tạo, lưu hồ sơ đào tạo.\n', '-	 Có ít nhất 1 năm  kinh nghiệm ở vị trí tương đương.\n-	Trung thực, nhiệt tình, có tinh thần trách nhiệm cao trong công việc.\n-	Nắm vững bộ luật lao động, luật thuế TNCN, luật BHYT, BHXH, có kiến thức và kỹ năng quản trị nhân lực\n', '-	Đơn xin việc;\n-	Sơ yếu lý lịch có chứng thực của UBND xã/phường/quận/huyện;\n-	Sơ yếu lý lịch ghi rõ kinh nghiệm làm việc ( nếu có);\n-	Phiếu khám sức khỏe của trung tâm quận/huyện cấp;\n-	1 giấy xác nhận của phường/xã không có tiền án, tiền sự;\n-	Bằng tốt nghiệp, bảng điểm;\n-	Bản sao các văn bằng, chứng chỉ khác ( nếu có):  quyết định xuất ngũ, quyết định thôi việc ( nếu có).\n', '+Theo luật lao động và chính sách của công ty;\n            + Được ký hợp đồng chính thức có mức lương ổn định từ 3 đến 6 triệu;\n            + Nhân viên được hưởng các chế độ BHXH, BHYT;\n            + Được hưởng phép năm: 12 ngày;\n         + Được cung cấp nhà trọ miễn phí cho nhân viên từ khi đào tạo, đến khi đi làm;\n            + Miễn phí đào tạo, huấn luyện do công ty thực hiện;\n            + Được làm việc trong môi trường chuyên nghiệp, có cơ hội thăng tiến cao; \n            + Các chế độ khác theo quy định của công ty.\n', 8, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 40, '3', 2, 0, 0),
(18, 15, 'nhân viên nhân sự', '3', 1, '', '', 2, '7', 1, 1, '', '', '', 0, '', '', '', '1.	Quản lý công tác tuyển dụng công ty theo thủ tục tuyển dụng :\n+	Nhận bản đăng kí nhân sự, trình ký.\n+	Làm thông báo tuyển dụng, liên hệ với các trung tâm việc làm để thông báo tuyển dụng, chuyển thông báo tuyển dụng cho thư ký HC đăng báo.\n+	Nhận hồ sơ, kiểm tra hồ sơ, trả hồ sơ không đạt, lên danh sách trình Giám đốc.\n+	Lập – gởi thư mời test theo yêu cầu Giám đốc, thông báo cho ứng viên thời gian test, chuẩn bị bài test, phòng test, chuyển bài cho Giám đốc, lên danh sách kết quả test, thông báo cho các ứng viên.\n+	Lên danh sách phỏng vấn, thông báo cho ứng viên thời gian, địa điểm phỏng vấn.Lập danh sách kết quả phỏng vấn, thông báo  cho các các ứng viên không đạt yêu cầu, thông báo lịch nhận việc cho các ứng viên đạt yêu cầu.\n2.	Chuyển bảng đánh giá ứng viên cho phòng kế toán tính lương, lập bảng đánh gia ứng viên khi thử việc.\n3.	Quản lý hồ sơ, lý lịch của CNV toàn công ty: lưu hồ sơ CNV trong file theo bộ phận .Lập danh sách CNV công ty theo biểu mẫu, cập nhật định kì hàng tháng.\n4.	Quản lý hồ sơ lý lịch của ứng viên không đạt yêu cầu : lập danh sách ứng viên không đạt yêu cầu theo biểu mẫu dan sách phỏng vấn của thủ tục tuyển dụng, hồ sơ của từng đợt tuyển dụng đối với mỗi loại chức danh được lưu giữu riêng theo thứ tự trong danh sách.\n5.	Quản lý hồ sơ CNV nghỉ việc: tất cả CNV nghỉ việc được luu theo thứ tự thời gian, trường hợp CNV  nghỉ việc rút lại hồ sơ thì photo hồ sơ.\n6.	Quản lý việc đào tạo của công ty: lập kế hoạch, chương trình đào tạo, liên hệ cơ sở đào tạo, làm thủ tục cho CNV đi đào tạo, lưu bằng cấp – chứng chỉ đào tạo của CNV, đánh giá kết quả đào tạo, lưu hồ sơ đào tạo\n', '-	 Có ít nhất 1 năm  kinh nghiệm ở vị trí tương đương.\n-	Trung thực, nhiệt tình, có tinh thần trách nhiệm cao trong công việc.\n-	Nắm vững bộ luật lao động, luật thuế TNCN, luật BHYT, BHXH, có kiến thức và kỹ năng quản trị nhân lực\n', '-	Đơn xin việc;\n-	Sơ yếu lý lịch có chứng thực của UBND xã/phường/quận/huyện;\n-	Sơ yếu lý lịch ghi rõ kinh nghiệm làm việc ( nếu có);\n-	Phiếu khám sức khỏe của trung tâm quận/huyện cấp;\n-	1 giấy xác nhận của phường/xã không có tiền án, tiền sự;\n-	Bằng tốt nghiệp, bảng điểm;\n-	Bản sao các văn bằng, chứng chỉ khác ( nếu có):  quyết định xuất ngũ, quyết định thôi việc ( nếu có).\n', '+Theo luật lao động và chính sách của công ty;\n            + Được ký hợp đồng chính thức có mức lương ổn định từ 3 đến 6 triệu;\n            + Nhân viên được hưởng các chế độ BHXH, BHYT;\n            + Được hưởng phép năm: 12 ngày;\n         + Được cung cấp nhà trọ miễn phí cho nhân viên từ khi đào tạo, đến khi đi làm;\n            + Miễn phí đào tạo, huấn luyện do công ty thực hiện;\n            + Được làm việc trong môi trường chuyên nghiệp, có cơ hội thăng tiến cao; \n            + Các chế độ khác theo quy định của công ty.\n', 1, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 40, '3', 2, 0, 0),
(19, 15, 'nhân viên nhân sự', '3', 1, '', '', 2, '7', 1, 1, '', '', '', 0, '', '', '', '1.	Quản lý công tác tuyển dụng công ty theo thủ tục tuyển dụng :\n+	Nhận bản đăng kí nhân sự, trình ký.\n+	Làm thông báo tuyển dụng, liên hệ với các trung tâm việc làm để thông báo tuyển dụng, chuyển thông báo tuyển dụng cho thư ký HC đăng báo.\n+	Nhận hồ sơ, kiểm tra hồ sơ, trả hồ sơ không đạt, lên danh sách trình Giám đốc.\n+	Lập – gởi thư mời test theo yêu cầu Giám đốc, thông báo cho ứng viên thời gian test, chuẩn bị bài test, phòng test, chuyển bài cho Giám đốc, lên danh sách kết quả test, thông báo cho các ứng viên.\n+	Lên danh sách phỏng vấn, thông báo cho ứng viên thời gian, địa điểm phỏng vấn.Lập danh sách kết quả phỏng vấn, thông báo  cho các các ứng viên không đạt yêu cầu, thông báo lịch nhận việc cho các ứng viên đạt yêu cầu.\n2.	Chuyển bảng đánh giá ứng viên cho phòng kế toán tính lương, lập bảng đánh gia ứng viên khi thử việc.\n3.	Quản lý hồ sơ, lý lịch của CNV toàn công ty: lưu hồ sơ CNV trong file theo bộ phận .Lập danh sách CNV công ty theo biểu mẫu, cập nhật định kì hàng tháng.\n4.	Quản lý hồ sơ lý lịch của ứng viên không đạt yêu cầu : lập danh sách ứng viên không đạt yêu cầu theo biểu mẫu dan sách phỏng vấn của thủ tục tuyển dụng, hồ sơ của từng đợt tuyển dụng đối với mỗi loại chức danh được lưu giữu riêng theo thứ tự trong danh sách.\n5.	Quản lý hồ sơ CNV nghỉ việc: tất cả CNV nghỉ việc được luu theo thứ tự thời gian, trường hợp CNV  nghỉ việc rút lại hồ sơ thì photo hồ sơ.\n6.	Quản lý việc đào tạo của công ty: lập kế hoạch, chương trình đào tạo, liên hệ cơ sở đào tạo, làm thủ tục cho CNV đi đào tạo, lưu bằng cấp – chứng chỉ đào tạo của CNV, đánh giá kết quả đào tạo, lưu hồ sơ đào tạo\n', '-	Tốt nghiệp Đại học trở lên  chuyên ngành  liên quan Qản trị nhân lực , luật.\n-	 Có ít nhất 1 năm  kinh nghiệm ở vị trí tương đương.\n-	Trung thực, nhiệt tình, có tinh thần trách nhiệm cao trong công việc.\n-	Nắm vững bộ luật lao động, luật thuế TNCN, luật BHYT, BHXH, có kiến thức và kỹ năng quản trị nhân lực.\n', '-	Đơn xin việc;\n-	Sơ yếu lý lịch có chứng thực của UBND xã/phường/quận/huyện;\n-	Sơ yếu lý lịch ghi rõ kinh nghiệm làm việc ( nếu có);\n-	Phiếu khám sức khỏe của trung tâm quận/huyện cấp;\n-	1 giấy xác nhận của phường/xã không có tiền án, tiền sự;\n-	Bằng tốt nghiệp, bảng điểm;\n-	Bản sao các văn bằng, chứng chỉ khác ( nếu có):  quyết định xuất ngũ, quyết định thôi việc ( nếu có).\n', '+Theo luật lao động và chính sách của công ty;\n            + Được ký hợp đồng chính thức có mức lương ổn định từ 3 đến 6 triệu;\n            + Nhân viên được hưởng các chế độ BHXH, BHYT;\n            + Được hưởng phép năm: 12 ngày;\n         + Được cung cấp nhà trọ miễn phí cho nhân viên từ khi đào tạo, đến khi đi làm;\n            + Miễn phí đào tạo, huấn luyện do công ty thực hiện;\n            + Được làm việc trong môi trường chuyên nghiệp, có cơ hội thăng tiến cao; \n            + Các chế độ khác theo quy định của công ty.\n', 1, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 40, '1', 2, 0, 0),
(20, 11, 'Tuyển nhân viên Bán hàng', '5', 2, '5000000', '7000000', 2, '1', 1, 1, '0', '0', '0', 4, '2', '0', '0', 'Mô tả công việc vào đây', 'yêu cầu thêm', 'hồ sơ cần ji viết vào đây', 'phúc lợi ra sao', 2, 28112013, 29112013, 12122012, '56', '1', 1, 1, 1, 1, 1, 1, 'kỹ năng thì ghi vào đây', 12, 12122013, 10, '', 0, 11, 12),
(21, 11, 'Tuyển nhân viên Bán hàng', '5', 2, '5000000', '7000000', 2, '1', 1, 1, '0', '0', '0', 4, '2', '0', '0', 'Mô tả công việc vào đây', 'yêu cầu thêm', 'hồ sơ cần ji viết vào đây', 'phúc lợi ra sao', 2, 28112013, 29112013, 12122012, '56', '1', 1, 1, 1, 1, 1, 1, 'kỹ năng thì ghi vào đây', 12, 12122013, 10, '', 0, 11, 12),
(22, 11, 'Tuyển cửu vạn bê vác', '1', 1, '1', '1', 3, '1', 1, 1, '1', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, '1', '1', 0, 0, 0, 0, 0, 1, 'ừ thì kỹ năng', 0, 0, 10, '', 0, 0, 0),
(23, 6, 'ss', '12', 2, '', '', 2, '3', 1, 1, '', '', '', 0, '', '', '', 'sss', 'sss', 'sss', 'sss', 8, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 10, '2', 1, 0, 0),
(24, 6, 'abc', '111', 1, '', '', 1, '3', 1, 1, '', '', '', 0, '', '', '', 'abc', 'abc', 'abc', 'abc', 8, 0, 0, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 10, '1', 1, 0, 0),
(25, 6, 'ss 123', '1', 1, '', '', 2, '3', 1, 1, '', '', '', 0, '', '', '', 'ss', 'sss', 'ss', 'ss', 8, 0, 0, 684028800, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 11, '2', 6, 0, 0),
(26, 6, 'sss12311', '123', 2, '', '', 1, '3', 1, 3, '', '', '', 0, '', '', '', 'sss12311', 'sss12311', 'sss12311', 'sss12311', 1, 1387094367, 1387094367, 1417564800, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 11, '1', 1, 0, 0),
(27, 19, 'Quản lý phụ trách An Ninh khu vực', '4', 4, '', '', 4, '9', 1, 1, '', '', '', 0, '', '', '', '•	Quản lý lãnh đạo, tổ chức công việc, lịch làm việc của các mục tiêu bảo vệ của công ty\n•	Tổ chức kiểm tra, huấn luyện nghiệp vụ cho nhân viên bảo vệ từng vị trí (tổ trưởng, cơ động, ca trưởng, nhân viên bảo vệ)\n•	Cập nhật, phổ biến thường xuyên kiến thức nghiệp vụ cho nhân viên. \n•	Động viên, hỗ trợ, đôn đốc cho nhân viên trong quá trình làm việc.\n•	Kiểm tra tác phong làm việc nhân viên.\n•	Kiểm tra công tác ghi sổ sách bàn giao ca trực của các mục tiêu.\n•	Đàm phán,  giao tiếp giới thiệu với khách hàng về dịch vụ bảo vệ của công ty.\n•	Tuyển dụng nhân viên bảo vệ.\n', '- Giới tính: Nam.\n- Độ tuổi: từ 28 tuổi trở lên.\n- Chiều cao: Từ 1m70 trở lên, nặng 65kg trở lên.\n- Đã được đào tạo từ các trường An ninh, Cảnh Sát, quân đội...\n- Biết võ thuật.\n- Chăm chỉ, nhiệt tình trong công việc...', '- Đơn xin việc.\n- sơ yếu lý lịch.\n- Giấy CMND + Giấy xác nhận hạnh kiểm + Giấy khám sức khỏe.\n- Số hộ khẩu.\n- Bằng cấp có liên quan.\nLưu ý: Tất cả giấy tờ trong hồ sơ đều phải photo công chứng.', '- Được làm việc trong môi trường chuyên nghiệp, năng động.\n- Thu nhập hấp dẫn.\n- Được tham gia BHXH, BHYT, BHTN...\n- Thưởng lương tháng thứ 13.\n- Ngoài ra còn được hưởng nhiều chế độ ưu đãi khác từ phía công ty...', 2, 1387156874, 1387156874, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 20, '1', -1, 0, 0),
(28, 19, 'Quản lý phụ trách An Ninh khu vực', '4', 4, '', '', 4, '9', 1, 1, '', '', '', 0, '', '', '', '•	Quản lý lãnh đạo, tổ chức công việc, lịch làm việc của các mục tiêu bảo vệ của công ty\n•	Tổ chức kiểm tra, huấn luyện nghiệp vụ cho nhân viên bảo vệ từng vị trí (tổ trưởng, cơ động, ca trưởng, nhân viên bảo vệ)\n•	Cập nhật, phổ biến thường xuyên kiến thức nghiệp vụ cho nhân viên. \n•	Động viên, hỗ trợ, đôn đốc cho nhân viên trong quá trình làm việc.\n•	Kiểm tra tác phong làm việc nhân viên.\n•	Kiểm tra công tác ghi sổ sách bàn giao ca trực của các mục tiêu.\n•	Đàm phán,  giao tiếp giới thiệu với khách hàng về dịch vụ bảo vệ của công ty.\n•	Tuyển dụng nhân viên bảo vệ.\n', '- Giới tính: Nam.\n- Độ tuổi: từ 28 tuổi trở lên.\n- Chiều cao: Từ 1m70 trở lên, nặng 65kg trở lên.\n- Đã được đào tạo từ các trường An ninh, Cảnh Sát, quân đội...\n- Biết võ thuật.\n- Chăm chỉ, nhiệt tình trong công việc...', '- Đơn xin việc.\n- sơ yếu lý lịch.\n- Giấy CMND + Giấy xác nhận hạnh kiểm + Giấy khám sức khỏe.\n- Số hộ khẩu.\n- Bằng cấp có liên quan.\nLưu ý: Tất cả giấy tờ trong hồ sơ đều phải photo công chứng.', '- Được làm việc trong môi trường chuyên nghiệp, năng động.\n- Thu nhập hấp dẫn.\n- Được tham gia BHXH, BHYT, BHTN...\n- Thưởng lương tháng thứ 13.\n- Ngoài ra còn được hưởng nhiều chế độ ưu đãi khác từ phía công ty...', 2, 1387156932, 1387156932, 0, '', '', 0, 0, 0, 0, 0, 1, '', 0, 0, 20, '3', -1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_user`
--

CREATE TABLE IF NOT EXISTS `tbl_job_user` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_salt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyadress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyTypeID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyIntro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyRun` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyMem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_home` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyphone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_companyMobi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_fax` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactName` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactPosition` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactPhone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_status` int(11) NOT NULL,
  `u_contactMobi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_contactEmail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_lienhe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_countryID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_cityID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_urban` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_adress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_redate` int(11) NOT NULL,
  `u_lasttime` int(11) NOT NULL,
  `u_now` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_sotin` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_active` int(11) NOT NULL,
  `u_contactAdress` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_role` int(11) NOT NULL DEFAULT '1',
  `u_fullname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_sex` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_birthday` int(11) NOT NULL,
  `u_age` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_marry` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_menh` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_mobi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_national` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_ip` text NOT NULL,
  `last_login` text NOT NULL,
  `u_daluu1` int(11) NOT NULL,
  `u_daluu2` int(11) NOT NULL,
  `u_daluu3` int(11) NOT NULL,
  `u_daungtuyen1` int(11) NOT NULL,
  `u_daungtuyen2` int(11) NOT NULL,
  `u_daungtuyen3` int(11) NOT NULL,
  `is_mail` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_job_user`
--

INSERT INTO `tbl_job_user` (`u_id`, `u_username`, `u_password`, `u_salt`, `u_companyName`, `u_companyadress`, `u_companyTypeID`, `u_companyIntro`, `u_companyRun`, `u_companyMem`, `u_img`, `u_home`, `u_companyphone`, `u_companyMobi`, `u_fax`, `u_email`, `u_contactName`, `u_contactPosition`, `u_contactPhone`, `u_status`, `u_contactMobi`, `u_contactEmail`, `u_lienhe`, `u_countryID`, `u_cityID`, `u_urban`, `u_adress`, `u_redate`, `u_lasttime`, `u_now`, `u_sotin`, `u_visits`, `u_active`, `u_contactAdress`, `u_role`, `u_fullname`, `u_sex`, `u_birthday`, `u_age`, `u_marry`, `u_menh`, `u_mobi`, `u_national`, `last_ip`, `last_login`, `u_daluu1`, `u_daluu2`, `u_daluu3`, `u_daungtuyen1`, `u_daungtuyen2`, `u_daungtuyen3`, `is_mail`) VALUES
(3, 'quangthang12891@gmail.com', '$2a$08$c0woLMpEHdsLSzr4MVN01uojIDzrKoGj9XGcB5AOSvUYvZYFX8Vla', 'CHGD5', 'CP DV An Tâm', '', '2', 'sơ lược về công ty', 'lĩnh vực hoạt động', 'quy mô công ty 13', 'đường link ảnh logo', 'baoveantam.net', '09348374748', '', '37438468237', 'kinhdoanh@baoveantam.net', 'Tên ng liên hệ', 'chức vụ người liên hệ', 'điện thoại ng liên hệ', 1, 'điện thoại di động', 'emailnguoilienhe@gmail.com', '', '1', '2', 'quận nào', 'địa chỉ - của người - tuyển dụng', 12052013, 22052013, 'cái này bỏ được ko', '2', '43', 1, 'địa chỉ ng liên hệ', 1, 'Đoàn Quang Thắng12', '1', 12, '23', '0', 'Thổ', '0962925599', 'Việt Nam', '127.0.0.1', '2013-12-07 09:50:15', 0, 0, 0, 0, 0, 0, 1),
(5, 'quangthang12891', '$2a$08$gupiwL9MdnyZ.I/tjRQ37uuIHo5Gz.Ze0XrnXsnW/v4oM.Y6A0uOG', '', '', '', '', '', '', '', '', '', '', '', '', 'quangthang12891@gmail.com', '', '', '', 1, '', '', '', '', '1', '', 'quangthang12891', 2013, 0, '', '', '', 0, '', 2, 'quangthang12891', 'Y', 9, '', '', '', '11111', '', '::1', '', 0, 0, 0, 0, 0, 0, 1),
(6, 'beobeboi91@gmail.com', '$2a$08$SiY/2UH4qcaM3bitriDSUu35z7Q7FMczaXKybjSHAiQ1kAPLpeIwW', '', '', '', '', '', '', '', '', '', '', '', '', 'beobeboi91@gmail.com', '', '', '', 1, '', '', '', '', '86', '', 'beobeboi91', 2013, 0, '', '', '', 0, '', 2, 'beobeboi912', '1', 673747200, '', '0', '', '01667039939', '', '222.254.191.220', '2013-12-15 15:45:25', 0, 0, 0, 0, 0, 0, 0),
(11, 'nguyentruonggiang91@gmail.com', '$2a$08$ZzCyE4QOPjvv.9yNvqvSQ.vi60SlAvC.K2ya7mYUnsgnS7CDH19pi', '', '', '', '', '', '', '', '', '', '', '', '', 'nguyentruonggiang91@gmail.com', '', '', '', 1, '', '', '', '', '1', '', 'Hải Dương', 1386641621, 0, '', '', '', 0, '', 3, 'Đoàn Quang Thắng', 'Y', 12, '', '', '', '0962925599', '', '127.0.0.1', '2013-12-12 20:18:24', 0, 0, 0, 0, 0, 0, 1),
(15, 'yenvieclam@gmail.com', '$2a$08$yqt3zKVDPBeGDAa4c7p5b.zgBnc2bx4kW99wetRwd7oZJP9jLfmLy', '', 'công ty cổ phần dịch vụ bảo vệ An Tâm', '7 Đường 49, khu phố 6, phường Hiệp Bình Chánh, quận Thủ Đức, TPHCM', '', '                                    Công ty Cổ Phần Dịch Vụ Bảo vệ An Tâm chuyên hoạt động trong lĩnh vực cung cấp dịch vụ bảo vệ, góp phần đảm bảo sự an toàn, an ninh trật tự trên toàn lãnh thổ Việt Nam. Công ty chúng tôi được xây dựng bởi một đội ngũ quản lý, cố vấn là những Luật sư, Công an, Sỹ quan Quân đội những người có kinh nghiệm nhiều năm trong ngành dịch vụ bảo vệ. Nhân viên bảo vệ được tuyển dụng theo quy trình tuyển dụng rất chặt chẽ, là những người có sức khỏe, hạnh kiểm tốt, được đào tạo chuyên nghiệp về nghiệp vụ bảo vệ, phòng cháy chữa cháy, sơ cấp cứu, võ thuật... có tinh thần cảnh giác cao, linh hoạt, phản ứng nhanh mọi lúc mọi nơi. \n*Chương trình đào tạo, huấn luyện từ cơ bản đến nâng cao nghiệp vụ. Đặc biệt, công ty bảo vệ An Tâm đang tiến hành đào tạo theo chương trình của hiệp hội bảo vệ và vệ sĩ quốc tế (International Bodyguard & Security Association – IBSA) trên cơ sở kết hợp và vận dụng linh hoạt phù hợp với đặc trưng của xã hội Việt Nam thời kì hội nhập WTO. \n*Với phương châm hoạt động “ AN TOÀN CỦA QUÝ KHÁCH LÀ THÀNH CÔNG CỦA CÔNG TY CHÚNG TÔI ”', '', '3', '', 'www.baoveantam.net ', '0866811995', '', '', 'yenvieclam@gmail.com', 'Ms. Yên', '', '0866811995', 1, '01642446754', 'baoveantam2@gmail.com', '', '', '1', '', '7 Đường 49, khu phố 6, phường Hiệp Bình Chánh, quận Thủ Đức, TPHCM', 1386921421, 0, '', '', '', 0, '', 3, '', '', 0, '', '', '', '', '', '123.20.192.147', '2013-12-13 07:58:31', 0, 0, 0, 0, 0, 0, 1),
(16, 'nhucauvieclam02@gmail.com', '$2a$08$vxYW6UR4rLZYtEUJo88rTupKT.YXj6Bi2bn.KrlslgzzsvI6jTCr2', '', 'Công ty CP DV BV An Tâm', 'Số 7, đường 49, phường Hiệp Bình chánh, quận Thủ Đức, Tp Hồ Chí Minh.', '', '        Công Ty Cổ Phần Dịch Vụ Bảo Vệ An Tâm được xây dựng bởi một đội ngũ quản lý, cố vấn là những Luật Sư, Công An, Sỹ Quan Quân Đội có kinh nghiệm nhiều năm trong ngành dịch vụ bảo vệ.\nQuy trình tuyển dụng khắt khe, Chương trình đào tạo - huấn luyện nghiệp vụ từ cơ bản đến nâng cao. Đặc biệt, Công ty đang tiến hành đào tạo theo chương trình của Hiệp Hội Bảo Vệ và Vệ Sỹ Quốc Tế (International Bodyguard & Security Association - IBSA) trên cơ sở kết hợp và vận dụng linh hoạt phù hợp với đặc trưng của xã hội Việt Nam thời kỳ hội nhập WTO.                            ', '', '0', '', 'baoveantam.com', '0866811995', '', '0837273609', 'nhucauvieclam02@gmail.com', 'Thoa', '', '0866811995', 1, '01656134306.', 'nhucauvieclam022gmail.com', '', '', '1', '', 'Số 7, đường 49, phường Hiệp Bình Chánh, Quận Thủ Đức, Tp Hồ Chí Minh.', 1386923023, 0, '', '', '', 0, '', 3, '', '', 0, '', '', '', '', '', '123.20.244.251', '', 0, 0, 0, 0, 0, 0, 1),
(17, 'vieclamchonld@gmail.com', '$2a$08$Pji1sYVFb0uqFlqMltpsFOdKNI71kHKH6FW9O1gxfZBmYfAirInky', '', 'Công ty CP DV BV An Tâm', 'Số 7, đường 49, phường Hiệp Bình chánh, quận Thủ Đức, Tp Hồ Chí Minh.', '', '          Công Ty Cổ Phần Dịch Vụ Bảo Vệ An Tâm được xây dựng bởi một đội ngũ quản lý, cố vấn là những Luật Sư, Công An, Sỹ Quan Quân Đội có kinh nghiệm nhiều năm trong ngành dịch vụ bảo vệ.\nQuy trình tuyển dụng khắt khe, Chương trình đào tạo - huấn luyện nghiệp vụ từ cơ bản đến nâng cao. Đặc biệt, Công ty đang tiến hành đào tạo theo chương trình của Hiệp Hội Bảo Vệ và Vệ Sỹ Quốc Tế (International Bodyguard & Security Association - IBSA) trên cơ sở kết hợp và vận dụng linh hoạt phù hợp với đặc trưng của xã hội Việt Nam thời kỳ hội nhập WTO.                          ', '', '0', '', 'baoveantam.com', '0866811995', '', '0837273609', 'vieclamchonld@gmail.com', 'Thoa', '', '0866811995', 1, '01656134306.', 'nhucauvieclam02gmail.com', '', '', '1', '', 'Số 7, đường 49, phường Hiệp Bình Chánh, Quận Thủ Đức, Tp Hồ Chí Minh.', 1386924165, 0, '', '', '', 0, '', 3, '', '', 0, '', '', '', '', '', '123.20.244.251', '', 0, 0, 0, 0, 0, 0, 1),
(18, 'thoale.qtnl@gmail.com', '$2a$08$OAtlRFsrOHhWyx2P85iaguUeD5V9j2ve8A4zLAp2H1SCGufvTE4ee', '', 'Công ty CP DV BV An Tâm', 'Số 7, đường 49, phường Hiệp Bình chánh, quận Thủ Đức, Tp Hồ Chí Minh.', '', '  Công Ty Cổ Phần Dịch Vụ Bảo Vệ An Tâm được xây dựng bởi một đội ngũ quản lý, cố vấn là những Luật Sư, Công An, Sỹ Quan Quân Đội có kinh nghiệm nhiều năm trong ngành dịch vụ bảo vệ.\nQuy trình tuyển dụng khắt khe, Chương trình đào tạo - huấn luyện nghiệp vụ từ cơ bản đến nâng cao. Đặc biệt, Công ty đang tiến hành đào tạo theo chương trình của Hiệp Hội Bảo Vệ và Vệ Sỹ Quốc Tế (International Bodyguard & Security Association - IBSA) trên cơ sở kết hợp và vận dụng linh hoạt phù hợp với đặc trưng của xã hội Việt Nam thời kỳ hội nhập WTO.                                  ', '', '0', '', 'baoveantam.com', '0866811995', '', '0837273609', 'thoale.qtnl@gmail.com', 'Thoa', '', '0866811995', 1, '01656134306.', 'vieclamchonld@gmail.com', '', '', '1', '', 'Số 7, đường 49, phường Hiệp Bình Chánh, Quận Thủ Đức, Tp Hồ Chí Minh.', 1386927785, 0, '', '', '', 0, '', 3, '', '', 0, '', '', '', '', '', '123.20.187.133', '', 0, 0, 0, 0, 0, 0, 1),
(19, 'vieclamdatphuongnam@gmail.com', '$2a$08$ZaahSRTSdCwAfwkT.qLsfewh0U2QYtWtTS8YSi7rN43pBowBi0WVa', '', 'Công ty CP DV BV An Tâm', 'Số 7, đường 49, phường Hiệp Bình chánh, quận Thủ Đức, Tp Hồ Chí Minh.', '', '    Công Ty Cổ Phần Dịch Vụ Bảo Vệ An Tâm được xây dựng bởi một đội ngũ quản lý, cố vấn là những Luật Sư, Công An, Sỹ Quan Quân Đội có kinh nghiệm nhiều năm trong ngành dịch vụ bảo vệ.\nQuy trình tuyển dụng khắt khe, Chương trình đào tạo - huấn luyện nghiệp vụ từ cơ bản đến nâng cao. Đặc biệt, Công ty đang tiến hành đào tạo theo chương trình của Hiệp Hội Bảo Vệ và Vệ Sỹ Quốc Tế (International Bodyguard & Security Association - IBSA) trên cơ sở kết hợp và vận dụng linh hoạt phù hợp với đặc trưng của xã hội Việt Nam thời kỳ hội nhập WTO.                               ', '', '0', '7e2ea59483c6229d5f8a2805dcd5a8e7.jpg', 'baoveantam.com', '0866811995', '', '0837273609', 'vieclamdatphuongnam@gmail.com', 'Ms. Thoa', '', '0866811995', 1, '01656134306.', 'vieclamdatphuongnam@gmail.com', '', '', '1', '', 'Số 7, đường 49, phường Hiệp Bình Chánh, Quận Thủ Đức, Tp Hồ Chí Minh.', 1387156204, 0, '', '', '', 0, '', 3, '', '', 0, '', '', '', '', '', '123.20.202.135', '2013-12-16 01:10:32', 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loaitn`
--

CREATE TABLE IF NOT EXISTS `tbl_loaitn` (
  `tn_id` int(11) NOT NULL AUTO_INCREMENT,
  `tn_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_loaitn`
--

INSERT INTO `tbl_loaitn` (`tn_id`, `tn_name`) VALUES
(1, 'Xuất sắc'),
(2, 'Giỏi'),
(3, 'Khá'),
(4, 'Trung bình khá'),
(5, 'Trung bình');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_luong`
--

CREATE TABLE IF NOT EXISTS `tbl_luong` (
  `luong_id` int(11) NOT NULL AUTO_INCREMENT,
  `luong_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`luong_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_luong`
--

INSERT INTO `tbl_luong` (`luong_id`, `luong_name`) VALUES
(1, 'Thỏa thuận'),
(2, '1 - 3 triệu'),
(3, '3 - 5 triệu'),
(4, '5 - 7 triệu'),
(5, '7 - 10 triệu'),
(6, '10 - 15 triệu'),
(7, '15 - 20 triệu'),
(8, '20 - 30 triệu'),
(9, 'Trên 30 triệu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mucvieclam`
--

CREATE TABLE IF NOT EXISTS `tbl_mucvieclam` (
  `m_id` int(20) NOT NULL AUTO_INCREMENT,
  `m_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  `e_nghe` int(11) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tbl_mucvieclam`
--

INSERT INTO `tbl_mucvieclam` (`m_id`, `m_name`, `u_id`, `e_nghe`) VALUES
(10, 'Bán hàng', 0, 10),
(11, 'Tư vấn bảo hiểm', 0, 11),
(12, 'Báo chí/Biên tập viên', 0, 12),
(13, 'Bất động sản', 0, 13),
(14, 'Biên dịch/Phiên dịch', 0, 14),
(15, 'Bưu chính viễn thông', 0, 15),
(16, 'Cơ khí/Kỹ thuật ứng dụng', 0, 16),
(17, 'Công nghệ thông tin', 0, 17),
(18, 'Dầu khí/Địa chất', 0, 18),
(19, 'Dệt may', 0, 19),
(20, 'Bảo vệ/Vệ sĩ/An ninh', 0, 20),
(21, 'Chăm sóc khách hàng', 0, 21),
(22, 'Điện/Điện tử/Điện lạnh', 0, 22),
(23, 'Du lịch/Nhà hàng/Khách sạn', 0, 23),
(24, 'Dược/Hóa chất/Sinh hóa', 0, 24),
(25, 'Giải trí/Vui chơi', 0, 25),
(26, 'Giáo dục/Đào tạo/Thư viện', 0, 26),
(27, 'Giao thông/Vận tải/Thủy lợi/Cầu đường', 0, 27),
(28, 'Giày da/Thuộc da', 0, 28),
(29, 'Hành chính/Thư ký', 0, 29),
(30, 'Kho vận/Vật tư', 0, 30),
(31, 'Kiến trúc/Nội thất', 0, 31),
(32, 'Kinh doanh', 0, 32),
(33, 'Lao động phổ thông', 0, 33),
(34, 'Luật/Pháp lý', 0, 34),
(35, 'Sinh viên/Mới tốt nghiệp/Thực tập', 0, 35),
(36, 'Môi trường/Xử lý chất thải', 0, 36),
(37, 'Mỹ phẩm', 0, 37),
(38, 'Ngân hàng/Chứng khoán/Đầu tư', 0, 38),
(39, 'Nghệ thuật/Điện ảnh', 0, 39),
(40, 'Nhân sự', 0, 40),
(41, 'Nông/Lâm/Ngư nghiệp', 0, 41),
(42, 'Quan hệ đối ngoại', 0, 42),
(43, 'Thẩm định/Giám định/Quản lý chất lượng', 0, 43),
(44, 'Quản lý điều hành', 0, 44),
(45, 'Quảng cáo/Marketing/PR', 0, 45),
(46, 'Sản xuất/Vận hành sản xuất', 0, 46),
(47, 'Tài chính/Kế toán/Kiểm toán', 0, 47),
(48, 'Thể dục/Thể thao', 0, 48),
(49, 'Thiết kế/Mỹ thuật', 0, 49),
(50, 'Thời vụ/Bán thời gian', 0, 50),
(51, 'Thực phẩn/Dịch vụ ăn uống', 0, 51),
(52, 'Xây dựng', 0, 52),
(53, 'Xuất-Nhập khẩu/Ngoại thương', 0, 53),
(54, 'Y tế', 0, 54),
(55, 'Khác', 0, 55),
(56, 'Ngoại ngữ', 0, 56),
(57, 'Khu chế xuất/Khu công nghiệp', 0, 57),
(58, 'Làm đẹp/Thể lực/Spa', 0, 58),
(59, 'Tài xế/Lái xe/Giao nhận', 0, 59),
(60, 'Trang thiết bị công nghiệp', 0, 60),
(61, 'Trang thiết bị gia dụng', 0, 61),
(62, 'Trang thiết bị văn phòng', 0, 62),
(63, 'Phục vụ/Tạp vụ/Giúp việc', 0, 63);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_namexp`
--

CREATE TABLE IF NOT EXISTS `tbl_namexp` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_namexp`
--

INSERT INTO `tbl_namexp` (`exp_id`, `exp_name`) VALUES
(1, 'Dưới 1 năm'),
(2, '1 Năm'),
(3, '2 năm'),
(4, '3 năm'),
(5, '4 năm'),
(6, '5 năm'),
(7, 'Hơn 5 năm'),
(8, 'Chưa có kinh nghiệm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ngoaingu`
--

CREATE TABLE IF NOT EXISTS `tbl_ngoaingu` (
  `nn_id` int(11) NOT NULL AUTO_INCREMENT,
  `nn_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`nn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_ngoaingu`
--

INSERT INTO `tbl_ngoaingu` (`nn_id`, `nn_name`) VALUES
(1, 'Tiếng Anh - Tiếng Đức'),
(2, 'Tiếng Anh - Tiếng Nha'),
(3, 'Tiếng Anh - Tiếng Ý'),
(4, 'Tiếng Anh - Tiếng Tây Ban Nha'),
(5, 'English - Tiếng Anh'),
(6, 'French - Tiếng Pháp'),
(7, 'United States - Tiếng Anh Mỹ'),
(8, 'Russian - Tiếng Nga'),
(9, 'Chinese - Tiếng Trung'),
(10, 'Korean - Tiếng Hàn'),
(11, 'Japanese - Tiếng Nhật'),
(12, 'German - Tiếng Đức'),
(13, 'Arabic - Tiếng Ả Rập'),
(14, 'Bengalic - Tiếng Bengal'),
(15, 'Bulgarian - Tiếng Bungary'),
(16, 'Burmese - Tiếng Miến điện'),
(17, 'Cambodian - Tiếng Campuchia'),
(18, 'Czech  - Tiếng Séc'),
(19, 'Danmark - Tiếng Đan mạch'),
(20, 'Dutch - Tiếng Hà Lan'),
(21, 'Finnish - Tiếng phần Lan'),
(22, 'Greek - Tiếng Hy Lạp'),
(23, 'Hindi - Tiếng Hinđi'),
(24, 'Hungarian - Tiếng Hungary'),
(25, 'Indonesian - Tiếng Inđônesia'),
(26, 'Italian - Tiếng Ý'),
(27, 'Laotian - Tiếng Lào'),
(28, 'Malay - Tiếng Mã Lai'),
(29, 'Norwegian - Tiếng Nauy'),
(30, 'Polish - Tiếng Ba Lan'),
(31, 'Portuguese - Tiếng Bồ Đào Nha'),
(32, 'Romanian  - Tiếng Ru ma ni'),
(33, 'Spanish - Tiếng Tây Ban Nha'),
(34, 'Taiwanese - Tiếng Đài Loan'),
(35, 'Turkish - Tiếng Thổ Nhĩ Kỳ'),
(36, 'Thai - Tiếng Thái'),
(37, 'Ukrainian - Tiếng Ucraina'),
(38, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nop_don`
--

CREATE TABLE IF NOT EXISTS `tbl_nop_don` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_job` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_cv` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_nop_don`
--

INSERT INTO `tbl_nop_don` (`id`, `id_job`, `id_user`, `title`, `content`, `id_cv`, `create_date`) VALUES
(1, 1, 6, 'ss', 'ss', 10, 0),
(2, 5, 6, 'ssss', 'sss', 11, 1387107026);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quancao`
--

CREATE TABLE IF NOT EXISTS `tbl_quancao` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `l_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_border` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_width` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_height` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_position` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_order` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_click` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_active` int(11) NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_quancao`
--

INSERT INTO `tbl_quancao` (`l_id`, `l_name`, `l_url`, `l_img`, `l_border`, `l_width`, `l_height`, `l_position`, `l_comment`, `l_order`, `l_click`, `l_active`) VALUES
(1, 'Tên công ty muốn quản cáo', 'link website công ty đó', 'logo công ty', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', '12', 1),
(2, 'Tên công ty muốn quản cáo', 'link website công ty đó', 'logo công ty', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', 'thông tin khung quảng cáo', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_save_tin`
--

CREATE TABLE IF NOT EXISTS `tbl_save_tin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_save_tin`
--

INSERT INTO `tbl_save_tin` (`id`, `id_user`, `id_job`, `create_date`) VALUES
(1, 6, 1, 1387109243),
(2, 6, 20, 1387122364);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sex`
--

CREATE TABLE IF NOT EXISTS `tbl_sex` (
  `sex_id` int(11) NOT NULL AUTO_INCREMENT,
  `sex_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sex_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_sex`
--

INSERT INTO `tbl_sex` (`sex_id`, `sex_name`) VALUES
(1, 'Nam'),
(2, 'Nữ'),
(3, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thoigian`
--

CREATE TABLE IF NOT EXISTS `tbl_thoigian` (
  `t_id` int(20) NOT NULL AUTO_INCREMENT,
  `t_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_thoigian`
--

INSERT INTO `tbl_thoigian` (`t_id`, `t_name`, `u_id`) VALUES
(1, 'Toàn thời gian cố định', 0),
(2, 'Toàn thời gian tạm thời', 0),
(3, 'Bán thời gian cố định', 0),
(4, 'Bán thời gian tạm thời', 0),
(5, 'Theo hợp đồng tư vấn', 0),
(6, 'Thực tập', 0),
(7, 'Khác', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tinchitiet`
--

CREATE TABLE IF NOT EXISTS `tbl_tinchitiet` (
  `k_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_id` int(20) NOT NULL,
  `k_tieude` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_trichdan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_noidung` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_ngaythang` int(11) NOT NULL,
  `k_img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_border` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_align` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_alt` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_width` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_height` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_tacgia` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_hot` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_showleft` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `k_active` int(11) NOT NULL,
  PRIMARY KEY (`k_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_tinchitiet`
--

INSERT INTO `tbl_tinchitiet` (`k_id`, `cat_id`, `k_tieude`, `k_trichdan`, `k_noidung`, `k_ngaythang`, `k_img`, `k_border`, `k_align`, `k_alt`, `k_width`, `k_height`, `k_tacgia`, `k_hot`, `k_showleft`, `k_active`) VALUES
(1, 1, 'tiêu đề tin tức', 'chèm link demo', 'nội dung là ji', 12042013, 'logo or ảnh ji cũng đc', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'tác giả', '1', 'showleft', 1),
(2, 1, 'tiêu đề tin tức', 'chèm link demo', 'nội dung là ji', 12042013, 'logo or ảnh ji cũng đc', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'kích thước', 'tác giả', '1', 'showleft', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trinhdonn`
--

CREATE TABLE IF NOT EXISTS `tbl_trinhdonn` (
  `td_id` int(11) NOT NULL AUTO_INCREMENT,
  `td_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`td_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_trinhdonn`
--

INSERT INTO `tbl_trinhdonn` (`td_id`, `td_name`) VALUES
(1, 'Sơ cấp'),
(2, 'Trung cấp'),
(3, 'Cao cấp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
