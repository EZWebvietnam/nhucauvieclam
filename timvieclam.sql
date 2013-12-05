-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 10:02 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `timvieclam`
--

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
-- Table structure for table `tbl_capbac`
--

CREATE TABLE IF NOT EXISTS `tbl_capbac` (
  `d_id` int(20) NOT NULL AUTO_INCREMENT,
  `d_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_active` int(11) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`c_id`, `c_name`, `c_active`) VALUES
(1, 'Trách nhiệm hữu hạn', 1),
(2, 'Cổ Phần Dịch Vụ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diadiem`
--

CREATE TABLE IF NOT EXISTS `tbl_diadiem` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `n_active` int(11) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `tbl_diadiem`
--

INSERT INTO `tbl_diadiem` (`n_id`, `n_name`, `n_active`) VALUES
(0, 'Bất kỳ', 1),
(1, 'TP.Hồ Chí Minh', 1),
(2, 'An Giang', 1),
(3, 'Bạc Liêu', 1),
(4, 'Bà Rịa-Vũng Tàu', 1),
(5, 'Bắc Cạn', 1),
(6, 'Bắc Giang', 1),
(7, 'Bắc Ninh', 1),
(8, 'Bến Tre', 1),
(9, 'Bình Dương', 1),
(10, 'Bình Định', 1),
(11, 'Bình Phước', 1),
(12, 'Bình Thuận', 1),
(13, 'Cao Bằng', 1),
(14, 'Cà Mau', 1),
(15, 'Cần Thơ', 1),
(16, 'Đà Nẵng', 1),
(17, 'Đắk Lắk', 1),
(18, 'Đắk Nông', 1),
(19, 'Điện Biên', 1),
(20, 'Đồng Nai', 1),
(21, 'Đồng Tháp', 1),
(22, 'Gia Lai', 1),
(23, 'Hà Giang', 1),
(24, 'Hà Nam', 1),
(25, 'Hà Tây', 1),
(26, 'Hà Tĩnh', 1),
(27, 'Hải Dương', 1),
(28, 'Hải Phòng', 1),
(29, 'Hậu Giang', 1),
(30, 'Hòa Bình', 1),
(31, 'Hưng Yên', 1),
(32, 'Khánh Hòa', 1),
(33, 'Kiên Giang', 1),
(34, 'Kon Tum', 1),
(35, 'Lai Châu', 1),
(36, 'Lạng Sơn', 1),
(37, 'Lào Cai', 1),
(38, 'Lâm Đồng', 1),
(39, 'Long An', 1),
(40, 'Nam Định', 1),
(41, 'Nghệ An', 1),
(42, 'Ninh Bình', 1),
(43, 'Ninh Thuận', 1),
(44, 'Phú Thọ', 1),
(45, 'Phú Yên', 1),
(46, 'Quảng Bình', 1),
(47, 'Quảng Nam', 1),
(48, 'Quảng Ngãi', 1),
(49, 'Quảng Ninh', 1),
(50, 'Quảng Trị', 1),
(51, 'Sóc Trăng', 1),
(52, 'Sơn La', 1),
(53, 'Tây Ninh', 1),
(54, 'Thái Bình', 1),
(55, 'Thái Nguyên', 1),
(56, 'Thanh Hóa', 1),
(57, 'Thừa Thiên Huế', 1),
(58, 'Tiền Giang', 1),
(59, 'Trà Vinh', 1),
(60, 'Tuyên Quang', 1),
(61, 'Vĩnh Long', 1),
(62, 'Vĩnh Phúc', 1),
(63, 'Yên Bái', 1),
(64, 'Toàn Quốc', 1),
(65, 'Nước Ngoài', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employers_post`
--

CREATE TABLE IF NOT EXISTS `tbl_employers_post` (
  `j_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id` int(20) NOT NULL,
  `m_id` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nghe3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_countryID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_cityID3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_copy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_year` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_perID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_degID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_muctieunn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_kynang` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_dalam` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_luongdaco` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_chucmm` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_luongmm` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_timeID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_goto` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_date` int(10) NOT NULL,
  `j_update` int(10) NOT NULL,
  `j_lastdate` int(11) NOT NULL,
  `j_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_active` int(11) NOT NULL,
  `j_anTen` int(11) NOT NULL,
  `j_anNS` int(11) NOT NULL,
  `j_anAdress` int(11) NOT NULL,
  `j_anPhone` int(11) NOT NULL,
  `j_anImg` int(11) NOT NULL,
  `j_anTuoi` int(11) NOT NULL,
  `j_activeSearch` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_hienthi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_trinhdo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_nganhhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_namtotnghiep` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_loaitotnghiep` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_truongdahoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_ngoaingu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_trinhdonn` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_tinhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_bangcapkhac` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_kinhnghiem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_infokinhnghiem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `j_datestart` int(11) NOT NULL,
  `j_thamkhao` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_employers_post`
--

INSERT INTO `tbl_employers_post` (`j_id`, `u_id`, `m_id`, `j_nghe1`, `j_nghe2`, `j_nghe3`, `j_countryID`, `j_cityID`, `j_cityID1`, `j_cityID2`, `j_cityID3`, `j_title`, `j_copy`, `j_year`, `j_perID`, `j_degID`, `j_muctieunn`, `j_kynang`, `j_dalam`, `j_luongdaco`, `j_chucmm`, `j_luongmm`, `j_timeID`, `j_goto`, `j_date`, `j_update`, `j_lastdate`, `j_visits`, `j_active`, `j_anTen`, `j_anNS`, `j_anAdress`, `j_anPhone`, `j_anImg`, `j_anTuoi`, `j_activeSearch`, `j_hienthi`, `j_trinhdo`, `j_nganhhoc`, `j_namtotnghiep`, `j_loaitotnghiep`, `j_truongdahoc`, `j_ngoaingu`, `j_trinhdonn`, `j_tinhoc`, `j_bangcapkhac`, `j_kinhnghiem`, `j_infokinhnghiem`, `j_datestart`, `j_thamkhao`) VALUES
(3, 3, 'php developer', 'coder', 'IT phần cứng', 'Ăn chơi nhảy múa', '1', '1', '2', '3', '4', 'Nhân viên công nghệ thông tin', 'dán demo vào đây', '1', '1', '1', 'team leader', 'nhiều', 'teera Sorfware', '4000000', 'teamleader', '1000000', 'lấy ở bảng thời gian', '1', 12032013, 30042013, 30052013, '33', 1, 1, 1, 1, 1, 1, 1, '0', '1', 'Đại học', 'Công nghệ thông tin', '2013', 'khá', 'Đại học công nghiệp Hà Nội', 'English - Tiếng Anh', 'siêu sao', 'cao thủ', 'đéo có', '1 năm', 'chém đấy chưa có kinh nghiệm', 0, 'ko có ai'),
(5, 4, 'bán hàng', 'phổ thông', 'đánh nhau', 'chém nhau', '1', '1', '3', '5', '8', 'Nhân viên công nghệ thông tin', 'demo vào đây', '2', '1', '1', 'giàu', 'bao la', 'rất nhiều', '6000000', 'to nhất', '200000000', '1', '1', 1, 1, 0, '14', 1, 1, 1, 1, 1, 1, 1, '0', '1', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(6, 5, '', '', '', '', '', '', '', '', '', 'Nhân viên IT webDevoloper', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(15, 0, '', '', '', '', '', '', '', '', '', 'Nhân viên web developer', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, '', '', '2', 'CNTT', '', '', '', '', '', '', '', '', '', 0, ''),
(16, 0, '', '', '', '', '', '', '', '', '', 'Nhân viên web developer', '', '', '', '', 'thay vị trí giám đốc đê', 'nhiều lắm', '', '', '', '1', '', '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, '', '', '2', 'CNTT', '2013', '3', 'Đại Học Công Nghiệp Hà Nội', 'EN', '3', 'siêu sao', 'chẳng có ji cả', '2', 'Tên công ty:\r\nVị trí công việc:\r\nNgành nghề:\r\nThời gian bắt đầu:\r\nThời gian kết thúc:\r\nMô tả công việc:\r\nLý do thôi việc:\r\nThành tích đạt được:\r\nMức lương:', 0, 'Họ và tên:\r\n                    Địa chỉ:\r\n                    Điện thoại:\r\n                    Nghề nghiệp:\r\n                    Quan hệ:\r\n                    Thời gian quen biết:'),
(17, 0, '10', '', '', '', '', '1', '', '', '', 'Nhân viên kinh doanh', '', '', '', '', 'adwqeqw', 'sdasdasda', '', '', '3', '1', '1', '', 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, '', '', '1', 'Đánh nhau vô tội vạ', '2013', '1', 'ádasduhqwiueyiu', 'EN-DE', '1', 'dqwhwuieyiqwy', 'uhsiywuheoqjnkbuyg', '8', 'Tên công ty:\r\nVị trí công việc:\r\nNgành nghề:\r\nThời gian bắt đầu:\r\nThời gian kết thúc:\r\nMô tả công việc:\r\nLý do thôi việc:\r\nThành tích đạt được:\r\nMức lương:\r\n                            ', 0, 'Họ và tên:\r\nĐịa chỉ:\r\nĐiện thoại:\r\nNghề nghiệp:\r\nQuan hệ:\r\nThời gian quen biết:\r\n                            ');

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
  `e_luong` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_luonga` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_luongb` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_trinhdo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_capbacID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_timeID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_cityID3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_nghe3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_descript` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_request` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_hoso` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_phucLoi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_kinhnghiem` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_date` int(11) NOT NULL,
  `e_dateActive` int(11) NOT NULL,
  `e_lastDate` int(11) NOT NULL,
  `e_visits` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_hienthi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_indam` int(11) NOT NULL,
  `e_maudo` int(11) NOT NULL,
  `e_hot` int(11) NOT NULL,
  `e_sanggia` int(11) NOT NULL,
  `e_sanggiaN` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_active` int(11) NOT NULL,
  `e_active_home` int(11) NOT NULL,
  `e_sex` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_skill` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `e_timetest` int(11) NOT NULL,
  `e_datesave` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_job_post`
--

INSERT INTO `tbl_job_post` (`e_id`, `u_id`, `e_title`, `e_mem`, `e_luong`, `e_luonga`, `e_luongb`, `e_trinhdo`, `e_capbacID`, `e_timeID`, `e_cityID`, `e_cityID1`, `e_cityID2`, `e_cityID3`, `e_nghe`, `e_nghe1`, `e_nghe2`, `e_nghe3`, `e_descript`, `e_request`, `e_hoso`, `e_phucLoi`, `e_kinhnghiem`, `e_date`, `e_dateActive`, `e_lastDate`, `e_visits`, `e_hienthi`, `e_indam`, `e_maudo`, `e_hot`, `e_sanggia`, `e_sanggiaN`, `e_active`, `e_active_home`, `e_sex`, `e_skill`, `e_timetest`, `e_datesave`, `m_id`) VALUES
(1, 3, 'Tim viec lam nhanh nhat qua dat', '5', '2', '5000000', '7000000', 'lao động phổ thông', '1', '1', '1', '0', '0', '0', '4', '2', '0', '0', 'Mô tả công việc vào đây', 'yêu cầu thêm', 'hồ sơ cần ji viết vào đây', 'phúc lợi ra sao', 'yêu cầu kinh nghiệm thế nào', 28112013, 29112013, 12122012, '56', '1', 1, 1, 1, 1, '1', 1, 1, 'Nam', 'kỹ năng thì ghi vào đây', 12, 12122013, 10),
(2, 5, 'title tìm việc làm', '5', '700$', '900$', '800$', 'Đại học', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'skhkjdahsidiuwhiuh', 'thông tin hả', 'ji cũng đc', 'như nhà nước quy định', '1', 12052013, 13052013, 12062013, '32', '1', 1, 1, 1, 1, '1', 1, 1, '1', '1', 0, 0, 10),
(3, 4, 'Tim viec nhanh, tuyen dung nhanh', '1', '1', '1', '1', 'Cao đẳng', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, '1', '1', 0, 0, 0, 0, '11', 0, 0, '', 'ừ thì kỹ năng', 0, 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_user`
--

CREATE TABLE IF NOT EXISTS `tbl_job_user` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `u_confpassword` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_job_user`
--

INSERT INTO `tbl_job_user` (`u_id`, `u_username`, `u_password`, `u_confpassword`, `u_salt`, `u_companyName`, `u_companyadress`, `u_companyTypeID`, `u_companyIntro`, `u_companyRun`, `u_companyMem`, `u_img`, `u_home`, `u_companyphone`, `u_companyMobi`, `u_fax`, `u_email`, `u_contactName`, `u_contactPosition`, `u_contactPhone`, `u_contactMobi`, `u_contactEmail`, `u_lienhe`, `u_countryID`, `u_cityID`, `u_urban`, `u_adress`, `u_redate`, `u_lasttime`, `u_now`, `u_sotin`, `u_visits`, `u_active`, `u_contactAdress`, `u_role`, `u_fullname`, `u_sex`, `u_birthday`, `u_age`, `u_marry`, `u_menh`, `u_mobi`, `u_national`) VALUES
(3, 'quangthang12891@gmail.com', '12345', '', 'CHGD5', 'CP DV An Tâm', '', '2', 'sơ lược về công ty', 'lĩnh vực hoạt động', 'quy mô công ty 13', 'đường link ảnh logo', 'baoveantam.net', '09348374748', '', '37438468237', 'kinhdoanh@baoveantam.net', 'Tên ng liên hệ', 'chức vụ người liên hệ', 'điện thoại ng liên hệ', 'điện thoại di động', 'emailnguoilienhe@gmail.com', '', '1', '1', 'quận nào', 'địa chỉ - của người - tuyển dụng', 12052013, 22052013, 'cái này bỏ được ko', '2', '43', 1, 'địa chỉ ng liên hệ', 1, 'Đoàn Quang Thắng', 'Nam', 12081991, '23', 'Độc thân', 'Thổ', '0962925599', 'Việt Nam'),
(4, 'chipshock12891@gmail.com', '', '0', '', 'Công ty Phát Tài', 'địa chỉ cty', '', '       ssssssssssss', '', '1', '', 'baoveantam.net', '03675236212', '', '2323364', '', 'Mr.Thắng', '', '0962925599', '0931273626', 'quangthang12891@gmail.com', '0', '', '1', '', 'địa chỉ ng liên hệ', 0, 0, '', '', '', 0, '', 1, '', '', 0, '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

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
-- Table structure for table `tbl_vitri_nangluc`
--

CREATE TABLE IF NOT EXISTS `tbl_vitri_nangluc` (
  `p_id` int(20) NOT NULL AUTO_INCREMENT,
  `p_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `p_active` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_vitri_nangluc`
--

INSERT INTO `tbl_vitri_nangluc` (`p_id`, `p_name`, `p_active`, `u_id`) VALUES
(1, 'Bất kỳ', 1, 0),
(2, 'Nhân viên', 1, 0),
(3, 'Kỹ sư', 1, 0),
(4, 'Phó phòng', 1, 0),
(5, 'Trưởng phòng', 1, 0),
(6, 'Cố vấn/Giám sát', 1, 0),
(7, 'Phó giám đốc/Phó tổng giám đốc', 1, 0),
(8, 'Giám đốc/Tổng giám đốc', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
