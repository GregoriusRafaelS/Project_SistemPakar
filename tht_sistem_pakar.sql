-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 11:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tht_sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `username`, `password`, `nama`) VALUES
('U001', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `namapenyakit` varchar(100) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`namapenyakit`, `gejala`) VALUES
('Penyakit Busuk Tandan Buah (marasmius palmivorus) 1', 'Benang-benang jamur yang berwarna putih mengkilat meluas dipermukaan tandan buah.'),
('Penyakit Busuk Tandan Buah (marasmius palmivorus) 1', 'Busuk basah'),
('Crown Disease (penyakit tajuk)', 'Kerusakan pada pelepah.'),
('Crown Disease (penyakit tajuk)', 'Tidak terdapat anak daun.'),
('Crown Disease (penyakit tajuk)', 'Anak daunnya kecil.'),
('Crown Disease (penyakit tajuk)', 'Daunnya robek-robek.'),
('Crown Disease (penyakit tajuk)', 'Daun tombak lebih dari satu.'),
('Penyakit busuk pangkal batang', 'Kerusakan pada pelepah.'),
('Penyakit busuk pangkal batang', 'Kelayuan menyeluruh seperti kurang air dan hara.'),
('Penyakit busuk pangkal batang', 'Nekrosis daun tua dimulai dari pelepah terbawah.'),
('Penyakit busuk pangkal batang', 'Daun tua yang mengering sengkleh.'),
('Penyakit busuk pangkal batang', 'Terbentuk buah cendawan dari pangkal batang.'),
('Penyakit cincin merah (red disease)', 'Daun yang tumbuh semakin mengecil.'),
('Penyakit cincin merah (red disease)', 'Bercak-bercak berwarna kuning sampai jingga dipetiol dan daun tombak.'),
('Penyakit cincin merah (red disease)', 'Munculnya cincin-cincin berkelir merah di batang tanaman, meskipun tidak selalu.'),
('Penyakit cincin merah (red disease)', 'Bintik-bintik hitam yang membentuk pola cincin tersebar disepanjang batang sawit.'),
('Penyakit akar', 'Daun berwarna kuning.'),
('Penyakit akar', 'Akar membusuk.'),
('Penyakit akar', 'Daun tua lebih cepat mati.'),
('Penyakit akar', 'Daun muda memudar.'),
('Penyakit akar', 'Jaringan akar yang sakit menguning dan berair.'),
('Otitis Media Akut', 'Demam'),
('Otitis Media Akut', 'Nyeri Telinga'),
('Otitis Media Akut', 'Mual Dan Muntah'),
('Otitis Media Akut', 'Radang Gendang Telinga'),
('Otitis Media Akut', 'Telinga Berdenging'),
('Otitis Media Akut', 'Telinga gatal'),
('Otitis Media Akut', 'Gangguan pendengaran'),
('Otitis Media Akut', 'Kejang'),
('Menniere', 'Nyeri Telinga'),
('Menniere', 'Mual Dan Muntah'),
('Menniere', 'Serangan Vertigo'),
('Menniere', 'Telinga Terasa Penuh'),
('Osteoklerosis', 'Tuli'),
('Osteoklerosis', 'Telinga Berdenging'),
('Sinusitis Maksialaris', 'Demam'),
('Sinusitis Maksialaris', 'Sakit Kepala'),
('Sinusitis Maksialaris', 'Batuk'),
('Sinusitis Maksialaris', 'Hidung Tersumbat'),
('Sinusitis Maksialaris', 'Hidung Meler'),
('Sinusitis Maksialaris', 'Letih Dan Lesu'),
('Sinusitis Maksialaris', 'Selaput Lendir Merah Dan Bengkak'),
('Sinusitis Maksialaris', 'Sakit Gigi'),
('Sinusitis Frontalis', 'Demam'),
('Sinusitis Frontalis', 'Sakit Kepala'),
('Sinusitis Frontalis', 'Batuk'),
('Sinusitis Frontalis', 'Hidung Tersumbat'),
('Sinusitis Frontalis', 'Hidung Meler'),
('Sinusitis Frontalis', 'Letih Dan Lesu'),
('Sinusitis Frontalis', 'Dahi Sakit'),
('Sinusitis Etmoidalis', 'Demam'),
('Sinusitis Etmoidalis', 'Batuk'),
('Sinusitis Etmoidalis', 'Hidung Tersumbat'),
('Sinusitis Etmoidalis', 'Hidung Meler'),
('Sinusitis Etmoidalis', 'Letih Dan Lesu'),
('Sinusitis Etmoidalis', 'Selaput Lendir Merah Dan Bengkak'),
('Sinusitis Etmoidalis', 'Dahi Sakit'),
('Sinusitis Etmoidalis', 'Nyeri Antara Mata'),
('Sinusitis Etmoidalis', 'Nyeri Pinggir Hidung'),
('Sinusitis Sfenoidalis ', 'Demam'),
('Sinusitis Sfenoidalis ', 'Sakit Kepala'),
('Sinusitis Sfenoidalis ', 'Batuk'),
('Sinusitis Sfenoidalis ', 'Hidung Tersumbat'),
('Sinusitis Sfenoidalis ', 'Hidung Meler'),
('Sinusitis Sfenoidalis ', 'Letih Dan Lesu'),
('Sinusitis Sfenoidalis ', 'Selaput Lendir Merah Dan Bengkak'),
('Sinusitis Sfenoidalis ', 'Nyeri Leher '),
('Faringitis', 'Demam'),
('Faringitis', 'Nyeri Saat Bicara Atau Menelan'),
('Faringitis', 'Batuk'),
('Faringitis', 'Nyeri Tenggorokan'),
('Faringitis', 'Letih Dan Lesu'),
('Faringitis', 'Mual Dan Muntah'),
('Faringitis', 'Pembengkakan Kelenjar Getah Bening'),
('Faringitis', 'Nyeri Leher '),
('Faringitis', 'Pilek'),
('Faringitis', 'Peradangan hidung dan tenggorokan'),
('Tonsilitis', 'Demam'),
('Tonsilitis', 'Sakit Kepala'),
('Tonsilitis', 'Nyeri Saat Bicara Atau Menelan'),
('Tonsilitis', 'Batuk'),
('Tonsilitis', 'Nyeri Tenggorokan'),
('Tonsilitis', 'Mual Dan Muntah'),
('Tonsilitis', 'Selaput Lendir Merah Dan Bengkak'),
('Tonsilitis', 'Sesak Napas'),
('Tonsilitis', 'Pernafasan bau'),
('Abses Peritonsiler', 'Demam'),
('Abses Peritonsiler', 'Sakit Kepala'),
('Abses Peritonsiler', 'Nyeri Tenggorokan'),
('Abses Peritonsiler', 'Pembengkakan Kelenjar Getah Bening'),
('Abses Peritonsiler', 'Suara Serak'),
('Abses Peritonsiler', 'Air Liur Menetes'),
('Laringitis', 'Demam'),
('Laringitis', 'Nyeri Saat Bicara Atau Menelan'),
('Laringitis', 'Nyeri Tenggorokan'),
('Laringitis', 'Pembengkakan Kelenjar Getah Bening'),
('Laringitis', 'Suara Serak'),
('Laringitis', 'Leher Bengkak'),
('Laringitis', 'Tenggorokan Gatal'),
('Laringitis', 'Bibir, wajah dan lidah kebiruan'),
('Laringitis', 'Nafas cepat'),
('Laringitis', 'Kejang'),
('Ranitis Alergi', 'Batuk'),
('Ranitis Alergi', 'Mata gatal dan keluar air mata'),
('Ranitis Alergi', 'Bersin-bersin'),
('Ranitis Alergi', 'Benjolan di rongga hidung'),
('Ranitis Alergi', 'Rasa tersumbat pada tenggorokan '),
('Influenza', 'Demam'),
('Influenza', 'Letih Dan Lesu'),
('Influenza', 'Pilek'),
('Influenza', 'Berdahak'),
('Otitis Eksternal', 'Demam'),
('Otitis Eksternal', 'Nyeri Telinga'),
('Otitis Eksternal', 'Telinga Terasa Penuh'),
('Otitis Eksternal', 'Telinga keluar cairan '),
('Otitis Eksternal', 'Telinga gatal');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`, `keterangan`) VALUES
('G01', 'Demam', 'Demam adalah kondisi medis di mana suhu tubuh seseorang meningkat di atas normal sebagai respons terhadap infeksi atau penyakit lainnya. Normalnya, suhu tubuh manusia adalah sekitar 37°C (98.6°F), tetapi suhu ini dapat sedikit bervariasi di antara individu dan waktu. Demam umumnya dianggap terjadi ketika suhu tubuh mencapai 38°C (100.4°F) atau lebih tinggi.'),
('G02', 'Sakit Kepala', 'Sakit kepala adalah kondisi medis umum yang dialami oleh banyak orang. Ini adalah rasa sakit atau ketidaknyamanan yang terjadi di kepala, kulit kepala, atau leher. Sakit kepala dapat bervariasi dalam hal intensitas, lokasi, dan durasi, dan bisa disebabkan oleh berbagai faktor.'),
('G03', 'Nyeri Saat Bicara Atau Menelan', 'Nyeri saat bicara atau menelan adalah kondisi yang dapat disebabkan oleh berbagai faktor yang mempengaruhi tenggorokan, mulut, atau saluran pencernaan atas. Kondisi ini bisa bervariasi dari ketidaknyamanan ringan hingga rasa sakit yang parah dan dapat mengganggu aktivitas sehari-hari seperti makan, minum, dan berbicara.'),
('G04', 'Batuk', 'Batuk adalah refleks alami tubuh untuk membersihkan saluran udara dari iritasi, lendir, atau benda asing. Meskipun sering dianggap sebagai gejala gangguan pernapasan, batuk sebenarnya adalah mekanisme pertahanan penting yang membantu menjaga kesehatan paru-paru dan saluran napas.'),
('G05', 'Hidung Tersumbat', 'Hidung tersumbat adalah kondisi di mana terjadi penyumbatan pada saluran hidung, yang membuat sulit untuk bernapas melalui hidung. Ini adalah gejala umum yang bisa disebabkan oleh berbagai kondisi, termasuk infeksi, alergi, atau iritasi. Hidung tersumbat bisa disertai dengan lendir yang berlebihan, bersin, dan terkadang sakit kepala atau tekanan di wajah.'),
('G06', 'Nyeri Telinga', 'Nyeri telinga, atau otalgia, adalah rasa sakit yang dirasakan di dalam atau di sekitar telinga. Ini adalah gejala umum yang bisa disebabkan oleh berbagai kondisi, termasuk infeksi, trauma, atau gangguan lain di telinga atau struktur terkait.'),
('G07', 'Nyeri Tenggorokan', 'Nyeri tenggorokan, atau faringitis, adalah rasa sakit, iritasi, atau ketidaknyamanan di tenggorokan yang sering kali diperburuk saat menelan. Ini adalah gejala umum yang bisa disebabkan oleh berbagai kondisi, termasuk infeksi, iritasi, atau faktor lingkungan.'),
('G08', 'Hidung Meler', 'Hidung meler adalah kondisi di mana hidung mengeluarkan lendir berlebih atau berair. Ini adalah gejala umum yang sering terjadi pada berbagai kondisi, seperti flu, alergi, atau infeksi sinus. Hidung meler dapat menjadi iritatif dan mengganggu aktivitas sehari-hari.'),
('G09', 'Letih Dan Lesu', 'Letih dan lesu adalah kondisi di mana seseorang merasa kelelahan yang berlebihan dan kurang bersemangat untuk melakukan aktivitas sehari-hari. Ini merupakan gejala umum yang bisa disebabkan oleh berbagai faktor, mulai dari kurang tidur, stres, hingga masalah kesehatan tertentu.'),
('G10', 'Mual Dan Muntah', 'Mual dan muntah adalah gejala umum yang sering disebabkan oleh berbagai kondisi, termasuk gangguan pencernaan, infeksi virus, perubahan hormonal, atau reaksi terhadap obat-obatan tertentu. Keduanya dapat menjadi tanda bahwa tubuh sedang berusaha menyingkirkan zat yang tidak diinginkan atau merespons stimulasi yang merugikan.'),
('G11', 'Selaput Lendir Merah Dan Bengkak', 'Selaput lendir yang merah dan bengkak adalah gejala yang sering kali menandakan adanya iritasi atau peradangan pada jaringan di dalam tubuh. Ini dapat terjadi di berbagai bagian tubuh, termasuk dalam mulut, hidung, tenggorokan, atau alat kelamin.'),
('G12', 'Pembengkakan Kelenjar Getah Bening', 'Pembengkakan kelenjar getah bening adalah kondisi di mana kelenjar getah bening membesar, biasanya karena adanya reaksi terhadap infeksi, peradangan, atau penyakit. Kelenjar getah bening merupakan bagian dari sistem kekebalan tubuh yang berfungsi untuk melawan infeksi dan menghasilkan sel-sel darah putih.'),
('G13', 'Suara Serak', ''),
('G14', 'Leher Bengkak', ''),
('G15', 'Tuli', ''),
('G16', 'Air Liur Menetes', ''),
('G17', 'Radang Gendang Telinga', ''),
('G18', 'Sakit Gigi', ''),
('G19', 'Serangan Vertigo', ''),
('G20', 'Telinga Berdenging', ''),
('G21', 'Telinga Terasa Penuh', ''),
('G22', 'Dahi Sakit', ''),
('G23', 'Nyeri Antara Mata', ''),
('G24', 'Nyeri Pinggir Hidung', ''),
('G25', 'Nyeri Leher ', ''),
('G26', 'Tenggorokan Gatal', ''),
('G27', 'Sesak Napas', ''),
('G28', 'Rasa sakit pada telinga', ''),
('G29', 'Pilek', ''),
('G30', 'Berdahak', ''),
('G31', 'Bibir, wajah dan lidah kebiruan', ''),
('G32', 'Nafas cepat', ''),
('G33', 'Mata gatal dan keluar air mata', ''),
('G34', 'Bersin-bersin', ''),
('G35', 'Hidung bau', ''),
('G36', 'Nyeri pipi', ''),
('G37', 'Pernafasan bau', ''),
('G38', 'Benjolan di rongga hidung', ''),
('G39', 'Telinga keluar cairan ', ''),
('G40', 'Telinga gatal', ''),
('G41', 'Gangguan pendengaran', ''),
('G42', 'Infeksi sinus ', ''),
('G43', 'Nyeri wajah', ''),
('G44', 'Kejang', ''),
('G45', 'Peradangan hidung dan tenggorokan', ''),
('G46', 'Rasa tersumbat pada tenggorokan ', '');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idpenyakit` varchar(20) NOT NULL,
  `namapenyakit` varchar(1000) NOT NULL,
  `pengendalian` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idpenyakit`, `namapenyakit`, `pengendalian`) VALUES
('P01', 'Otitis Media Akut', 'Penggunaan antibiotik (seperti amoksisilin), penghilang rasa sakit (paracetamol atau ibuprofen), dan dalam kasus yang parah, mungkin perlu dilakukan miringotomi untuk mengeluarkan cairan dari telinga tengah.'),
('P02', 'Menniere', 'Penggunaan diuretik untuk mengurangi retensi cairan, diet rendah garam, antihistamin, dan obat anti-mual. Dalam beberapa kasus, terapi rehabilitasi vestibular dan pembedahan mungkin diperlukan.'),
('P03', 'Osteoklerosis', 'Penggunaan alat bantu dengar untuk meningkatkan pendengaran. Jika kondisi parah, mungkin diperlukan pembedahan seperti stapedektomi.'),
('P04', 'Sinusitis Maksialaris', 'Antibiotik jika disebabkan oleh infeksi bakteri, dekongestan, irigasi sinus dengan larutan garam, penghilang rasa sakit, dan kortikosteroid nasal.'),
('P05', 'Sinusitis Frontalis', 'Antibiotik, dekongestan, irigasi sinus, dan penggunaan kortikosteroid nasal. Dalam kasus yang parah, pembedahan mungkin diperlukan untuk mengeluarkan nanah dari sinus frontal.'),
('P06', 'Sinusitis Etmoidalis', 'Jika sinusitis disebabkan oleh infeksi bakteri, antibiotik seperti amoksisilin atau antibiotik spektrum luas lainnya mungkin diresepkan oleh dokter.\r\n'),
('P07', 'Sinusitis Sfenoidalis ', 'Antibiotik, dekongestan, irigasi sinus, dan penggunaan kortikosteroid nasal. Pembedahan mungkin diperlukan jika ada komplikasi atau tidak ada respon terhadap pengobatan medis.'),
('P08', 'Faringitis', 'Penggunaan antibiotik jika disebabkan oleh infeksi bakteri (misalnya streptococcus), penghilang rasa sakit, berkumur dengan air garam hangat, dan minum banyak cairan.'),
('P09', 'Tonsilitis', 'Antibiotik jika disebabkan oleh infeksi bakteri, penghilang rasa sakit, istirahat, dan berkumur dengan air garam hangat. Tonsilektomi mungkin diperlukan untuk kasus berulang atau kronis.'),
('P10', 'Abses Peritonsiler', 'Antibiotik, drainase abses, penghilang rasa sakit, dan dalam beberapa kasus, tonsilektomi mungkin diperlukan.'),
('P11', 'Laringitis', 'Istirahat suara, hidrasi yang cukup, humidifikasi udara, dan penghilang rasa sakit. Penggunaan kortikosteroid jika kondisi parah.\r\n'),
('P12', 'Ranitis Alergi', 'Antihistamin, kortikosteroid nasal, dekongestan, dan menghindari alergen yang diketahui. Imunoterapi mungkin diperlukan dalam beberapa kasus.'),
('P13', 'Influenza', 'Antiviral (seperti oseltamivir), penghilang rasa sakit dan demam (paracetamol atau ibuprofen), banyak istirahat, dan minum banyak cairan.\r\n'),
('P14', 'Otitis Eksternal', 'Pembersihan saluran telinga, antibiotik tetes telinga, penghilang rasa sakit, dan menghindari masuknya air ke dalam telinga sampai sembuh.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idpenyakit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
