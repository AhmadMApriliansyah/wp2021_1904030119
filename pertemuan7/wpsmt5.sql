-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 04. Januari 2022 jam 00:32
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE IF NOT EXISTS `calon_mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(40) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `Nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Ahmad', 'Pandeglang,Banten', 'laki-laki', 'Islam', 'SMA 1 Pandeglang', 'foto1.png'),
(2, 'Siti', 'Perumahan Bukit Tiara', 'Perempuan', 'Islam', 'SMA 5 Tangerang', 'foto2.png'),
(3, 'Reza', 'jln.Merdeka', 'laki-laki', 'Islam', 'SMA 5 Pandeglang', 'foto3.png'),
(4, 'Siti Aminah', 'Perumahan citra', 'Perempuan', 'Islam', 'SMA 2 Tangerang', 'foto4.png'),
(5, 'Azril', 'jln.Labuan', 'laki-laki', 'Islam', 'SMA 10 Pandeglang', 'foto5.png');
