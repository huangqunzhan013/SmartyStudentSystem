-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-04 17:23:06
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `huangqunzhan`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_grade`
--

CREATE TABLE `tb_grade` (
  `id` int(5) UNSIGNED NOT NULL,
  `xh` varchar(10) NOT NULL COMMENT '学号',
  `proid` int(5) NOT NULL COMMENT '科目编号',
  `grade` int(5) NOT NULL COMMENT '成绩'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_grade`
--

INSERT INTO `tb_grade` (`id`, `xh`, `proid`, `grade`) VALUES
(3, '07160802', 1, 85),
(4, '07160803', 1, 85),
(6, '07160808', 2, 84);

-- --------------------------------------------------------

--
-- 表的结构 `tb_student`
--

CREATE TABLE `tb_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `xh` varchar(10) NOT NULL COMMENT '学号',
  `xm` varchar(50) NOT NULL COMMENT '姓名',
  `sex` varchar(10) NOT NULL COMMENT '性别',
  `bj` varchar(50) NOT NULL COMMENT '班级'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_student`
--

INSERT INTO `tb_student` (`id`, `xh`, `xm`, `sex`, `bj`) VALUES
(3, '07160601', '王五', '男', '软件1606'),
(4, '07160702', '赵六', '男', '软件1607'),
(5, '07160703', '小王', '男', '软件1607'),
(6, '07160713', '小虾', '男', '软件1607'),
(7, '07160808', '小新', '男', '软件1608');

-- --------------------------------------------------------

--
-- 表的结构 `tb_sub`
--

CREATE TABLE `tb_sub` (
  `sub_id` int(5) UNSIGNED NOT NULL COMMENT '科目编号',
  `sub_name` varchar(20) NOT NULL COMMENT '科目名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_sub`
--

INSERT INTO `tb_sub` (`sub_id`, `sub_name`) VALUES
(2, 'php'),
(3, 'android'),
(4, 'javascript');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(48) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'aa@qq.com'),
(2, 'rrr', '4b43b0aee35624cd95b910189b3dc231', 'bb@qq.com'),
(3, 'a', '0cc175b9c0f1b6a831c399e269772661', 'aa@qq.com'),
(4, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aa@qq.com'),
(5, 'ccc', '9df62e693988eb4e1e1444ece0578579', 'cccc@qq.com'),
(6, 'ddd', '77963b7a931377ad4ab5ad6a9cd718aa', 'ddd@qq.com'),
(7, 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', 'eee@qq.com'),
(8, 'fff', '343d9040a671c45832ee5381860e2996', 'fff@qq.com'),
(9, 'ggg', 'b2f5ff47436671b6e533d8dc3614845d', 'ggg@qq.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_grade`
--
ALTER TABLE `tb_grade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `xh` (`xh`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `xh` (`xh`);

--
-- Indexes for table `tb_sub`
--
ALTER TABLE `tb_sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_grade`
--
ALTER TABLE `tb_grade`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `tb_sub`
--
ALTER TABLE `tb_sub`
  MODIFY `sub_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '科目编号', AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
