-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 19, 2011 at 01:23 AM
-- Server version: 5.0.24
-- PHP Version: 5.1.6
-- 
-- Database: `data_multiple`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_data`
-- 

CREATE TABLE `tbl_data` (
  `id_notifications` int(5) NOT NULL,
  `notifications` text collate latin1_general_ci NOT NULL,
  `nama_pengirim` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_notifications`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_data`
-- 

INSERT INTO `tbl_data` VALUES (146, '<a href=#>Gede Lumbung Suka Online</a>  mengomentari koleksi foto <a href=#>Member ini</a>', 'Gede Lumbung Suka Online');
INSERT INTO `tbl_data` VALUES (145, '<a href=#>Gede Lumbung Suka Online</a>  mengomentari koleksi foto <a href=#>Member ini</a>', 'Gede Lumbung Suka Online');
INSERT INTO `tbl_data` VALUES (144, '<a href=#>Gede Lumbung Suka Online</a>  mengomentari koleksi foto <a href=#>Member ini</a>', 'Gede Lumbung Suka Online');
INSERT INTO `tbl_data` VALUES (118, '<a href=#>Gede Lumbung Suka Online</a>  membalas postingan anda di <a href=#>Topik forum ini</a>', 'Gede Lumbung Suka Online');
INSERT INTO `tbl_data` VALUES (110, '<a href=#>Ari Sopyan</a> mengomentari profil <a href=#>Member ini</a>', 'Ari Sopyan');
INSERT INTO `tbl_data` VALUES (143, '<a href=#>Gede Lumbung Suka Online</a>  mengomentari koleksi foto <a href=#>Member ini</a>', 'Gede Lumbung Suka Online');
INSERT INTO `tbl_data` VALUES (113, '<a href=#>Ari Sopyan</a> mengomentari profil <a href=#>Member ini</a>', 'Ari Sopyan');
INSERT INTO `tbl_data` VALUES (142, '<a href=#>Gede Lumbung Suka Online</a>  mengomentari koleksi foto <a href=#>Member ini</a>', 'Gede Lumbung Suka Online');
