-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 01:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkdigitalservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `roadmap`
--

CREATE TABLE `roadmap` (
  `IDRoadmap` int(11) NOT NULL,
  `RoadmapName` varchar(200) DEFAULT NULL,
  `RoadmapIcon` varchar(50) DEFAULT NULL,
  `RoadmapIntroduction` text DEFAULT NULL,
  `RoadmapDescription` text DEFAULT NULL,
  `RoadmapImage` varchar(100) DEFAULT NULL,
  `RoadmapSlug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roadmap`
--

INSERT INTO `roadmap` (`IDRoadmap`, `RoadmapName`, `RoadmapIcon`, `RoadmapIntroduction`, `RoadmapDescription`, `RoadmapImage`, `RoadmapSlug`) VALUES
(1, 'Teknik Komputer & Jaringan', 'icontkj.png', '<p>Roadmap ini disusun berdasarkan hasil kerjasama antara CV Educare Digital Indonesia (perusahaan yang menaungi smkdigitalservice ) dengan PT Len Industri.\r\n                    PT Len Industri adalah sebuah BUMN Sub-Klaster Industri Pertahanan di bawah koordinasi Kementrian BUMN. dengan tujuan\r\n                    <br>\r\n                    Tim Penyusun :\r\n                <ul>\r\n                    <li>\r\n                        <p>\r\n                            1. Haidir Mustofa (CV Educare Digital Indonesia).\r\n                        </p>\r\n                    </li>\r\n                    <li>\r\n                        <p>\r\n                            2. Natsir ( PT Len Industri Persero )\r\n                        </p>\r\n                    </li>\r\n                </ul>\r\n                </p>', '<h2>Apa itu jurusan Teknik Komputer dan Jaringan</h2>\r\n                <p>TKJ adalah singkatan dari Teknik Komputer Jaringan.TKJ merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer dan menginstalasi program komputer.Kejurusan ini hanya ada di STM/SMK.Program keahlian TKJ berbeda dengan RPL(Rekayasa Perangkat Lunak) RPL adalah jurusan yang mempalajari tentang program-program yang ada di komputer dan jika kita mengambil jurusan ini kita akan menjadi seorang programmer.\r\n                    Jurusan TKJ sangatlah mudah untuk dipelajari hanya modal kemauan untuk belajar dan belajar. banyak siswa yang awalnya tidak tahu apa itu TKJ, tapi setelah sekolah di jurusan ini siswa jadi banyak tahu mengenai bagaimana memperbaiki PC, menginstalasi Jaringan LAN maupun yang lainnya</p>\r\n                <h2>Yang diperlajari jurusan TKJ</h2>\r\n                <h2>Peluang Bekerja</h2>\r\n                <p>Dari segi peluang kerja setelah lulus sangat banyak peluangnya. Mulai dari menjadi teknisi komputer, teknisi jaringan, membuka toko komputer, atau bisa juga membuka warnet sendiri</p>', 'roadmaptkj.png', 'teknik-komputer-dan-jaringan'),
(2, 'Rekayasa Perangkat Lunak', 'iconrpl.png', '<p>Roadmap ini disusun berdasarkan hasil kerjasama antara CV Educare Digital Indonesia (perusahaan yang menaungi smkdigitalservice ) dengan PT Len Industri.\r\n                    PT Len Industri adalah sebuah BUMN Sub-Klaster Industri Pertahanan di bawah koordinasi Kementrian BUMN. dengan tujuan\r\n                    <br>\r\n                    Tim Penyusun :\r\n                <ul>\r\n                    <li>\r\n                        <p>\r\n                            1. Haidir Mustofa (CV Educare Digital Indonesia).\r\n                        </p>\r\n                    </li>\r\n                    <li>\r\n                        <p>\r\n                            2. Natsir ( PT Len Industri Persero )\r\n                        </p>\r\n                    </li>\r\n                </ul>\r\n                </p>', '<h2>Apa itu jurusan Teknik Komputer dan Jaringan</h2>\r\n                <p>TKJ adalah singkatan dari Teknik Komputer Jaringan.TKJ merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer dan menginstalasi program komputer.Kejurusan ini hanya ada di STM/SMK.Program keahlian TKJ berbeda dengan RPL(Rekayasa Perangkat Lunak) RPL adalah jurusan yang mempalajari tentang program-program yang ada di komputer dan jika kita mengambil jurusan ini kita akan menjadi seorang programmer.\r\n                    Jurusan TKJ sangatlah mudah untuk dipelajari hanya modal kemauan untuk belajar dan belajar. banyak siswa yang awalnya tidak tahu apa itu TKJ, tapi setelah sekolah di jurusan ini siswa jadi banyak tahu mengenai bagaimana memperbaiki PC, menginstalasi Jaringan LAN maupun yang lainnya</p>\r\n                <h2>Yang diperlajari jurusan TKJ</h2>\r\n                <h2>Peluang Bekerja</h2>\r\n                <p>Dari segi peluang kerja setelah lulus sangat banyak peluangnya. Mulai dari menjadi teknisi komputer, teknisi jaringan, membuka toko komputer, atau bisa juga membuka warnet sendiri</p>', 'roadmaprpl.png', 'rekayasa-perangkat-lunak'),
(3, 'Akutansi dan Keuangan Lembaga', 'iconakl.png', '<p>Roadmap ini disusun berdasarkan hasil kerjasama antara CV Educare Digital Indonesia (perusahaan yang menaungi smkdigitalservice ) dengan PT Len Industri.\r\n                    PT Len Industri adalah sebuah BUMN Sub-Klaster Industri Pertahanan di bawah koordinasi Kementrian BUMN. dengan tujuan\r\n                    <br>\r\n                    Tim Penyusun :\r\n                <ul>\r\n                    <li>\r\n                        <p>\r\n                            1. Haidir Mustofa (CV Educare Digital Indonesia).\r\n                        </p>\r\n                    </li>\r\n                    <li>\r\n                        <p>\r\n                            2. Natsir ( PT Len Industri Persero )\r\n                        </p>\r\n                    </li>\r\n                </ul>\r\n                </p>', '<h2>Apa itu jurusan Teknik Komputer dan Jaringan</h2>\r\n                <p>TKJ adalah singkatan dari Teknik Komputer Jaringan.TKJ merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer dan menginstalasi program komputer.Kejurusan ini hanya ada di STM/SMK.Program keahlian TKJ berbeda dengan RPL(Rekayasa Perangkat Lunak) RPL adalah jurusan yang mempalajari tentang program-program yang ada di komputer dan jika kita mengambil jurusan ini kita akan menjadi seorang programmer.\r\n                    Jurusan TKJ sangatlah mudah untuk dipelajari hanya modal kemauan untuk belajar dan belajar. banyak siswa yang awalnya tidak tahu apa itu TKJ, tapi setelah sekolah di jurusan ini siswa jadi banyak tahu mengenai bagaimana memperbaiki PC, menginstalasi Jaringan LAN maupun yang lainnya</p>\r\n                <h2>Yang diperlajari jurusan TKJ</h2>\r\n                <h2>Peluang Bekerja</h2>\r\n                <p>Dari segi peluang kerja setelah lulus sangat banyak peluangnya. Mulai dari menjadi teknisi komputer, teknisi jaringan, membuka toko komputer, atau bisa juga membuka warnet sendiri</p>', 'roadmaptkj.png', 'aktansi-dan-keuangan-lembaga'),
(4, 'Manajemen Perkantoran Lembaga Binis', 'iconmplb.png', '<p>Roadmap ini disusun berdasarkan hasil kerjasama antara CV Educare Digital Indonesia (perusahaan yang menaungi smkdigitalservice ) dengan PT Len Industri.\r\n                    PT Len Industri adalah sebuah BUMN Sub-Klaster Industri Pertahanan di bawah koordinasi Kementrian BUMN. dengan tujuan\r\n                    <br>\r\n                    Tim Penyusun :\r\n                <ul>\r\n                    <li>\r\n                        <p>\r\n                            1. Haidir Mustofa (CV Educare Digital Indonesia).\r\n                        </p>\r\n                    </li>\r\n                    <li>\r\n                        <p>\r\n                            2. Natsir ( PT Len Industri Persero )\r\n                        </p>\r\n                    </li>\r\n                </ul>\r\n                </p>', '<h2>Apa itu jurusan Teknik Komputer dan Jaringan</h2>\r\n                <p>TKJ adalah singkatan dari Teknik Komputer Jaringan.TKJ merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer dan menginstalasi program komputer.Kejurusan ini hanya ada di STM/SMK.Program keahlian TKJ berbeda dengan RPL(Rekayasa Perangkat Lunak) RPL adalah jurusan yang mempalajari tentang program-program yang ada di komputer dan jika kita mengambil jurusan ini kita akan menjadi seorang programmer.\r\n                    Jurusan TKJ sangatlah mudah untuk dipelajari hanya modal kemauan untuk belajar dan belajar. banyak siswa yang awalnya tidak tahu apa itu TKJ, tapi setelah sekolah di jurusan ini siswa jadi banyak tahu mengenai bagaimana memperbaiki PC, menginstalasi Jaringan LAN maupun yang lainnya</p>\r\n                <h2>Yang diperlajari jurusan TKJ</h2>\r\n                <h2>Peluang Bekerja</h2>\r\n                <p>Dari segi peluang kerja setelah lulus sangat banyak peluangnya. Mulai dari menjadi teknisi komputer, teknisi jaringan, membuka toko komputer, atau bisa juga membuka warnet sendiri</p>', 'roadmaptkj.png', 'Manajemen-Perkantoran-Lembaga-Binis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roadmap`
--
ALTER TABLE `roadmap`
  ADD PRIMARY KEY (`IDRoadmap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `IDRoadmap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
