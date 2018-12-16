-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2018 pada 02.08
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lwdatabase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `nama_destinasi` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat_destinasi` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` blob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `destinasi`
--

INSERT INTO `destinasi` (`id`, `user_id`, `nama_destinasi`, `slug`, `kota`, `alamat_destinasi`, `deskripsi`, `gambar`, `created_at`) VALUES
(11, '', 'Pantai Kuta', 'Pantai-Kuta', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem mauris, iaculis id scelerisque ac, commodo non augue. Fusce turpis lacus, viverra vel interdum non, vestibulum nec nibh. Mauris euismod, augue at tristique varius, metus ligula venenatis odio, a dignissim dolor mauris ut ipsum. Praesent pharetra neque nibh. Sed id enim rutrum diam auctor tincidunt et et lacus. Nunc dignissim tortor eu nisi rutrum, eget condimentum felis aliquet. Sed libero libero, varius in rhoncus sit amet, e', '', '2018-12-11 00:34:21'),
(12, '', 'fastgarg', 'fastgarg', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem mauris, iaculis id scelerisque ac, commodo non augue. Fusce turpis lacus, viverra vel interdum non, vestibulum nec nibh. Mauris euismod, augue at tristique varius, metus ligula venenatis odio, a dignissim dolor mauris ut ipsum. Praesent pharetra neque nibh. Sed id enim rutrum diam auctor tincidunt et et lacus. Nunc dignissim tortor eu nisi rutrum, eget condimentum felis aliquet. Sed libero libero, varius in rhoncus sit amet, e', '', '2018-12-11 00:38:55'),
(13, '', 'SEtawr', 'SEtawr', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sem mauris, iaculis id scelerisque ac, commodo non augue. Fusce turpis lacus, viverra vel interdum non, vestibulum nec nibh. Mauris euismod, augue at tristique varius, metus ligula venenatis odio, a dignissim dolor mauris ut ipsum. Praesent pharetra neque nibh. Sed id enim rutrum diam auctor tincidunt et et lacus. Nunc dignissim tortor eu nisi rutrum, eget condimentum felis aliquet. Sed libero libero, varius in rhoncus sit amet, e', '', '2018-12-11 00:39:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `kritik` varchar(250) NOT NULL,
  `wisata` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `email`, `username`, `password`, `pertanyaan`, `jawaban`, `reg_date`) VALUES
(1, 'Mochamad Fa\'izin Ahsan', 'dadd', 'yogaprambudisp@gmail.com', 'sabers1', 'c8837b23ff8aaa8a2dde915473ce0991', 'Kucing pertama?', 'asdasd', '2018-12-10 04:58:05'),
(2, 'yoga', 'dasda', 'mamamamama@gg.com', 'kabuki52', '08c68fd9c9977b189d287143472be2ca', 'Kucing pertama?', 'asdasd', '2018-12-10 05:02:23'),
(3, 'kevin', 'BDG', 'kevin@gmail.com', 'yoga17007', '202cb962ac59075b964b07152d234b70', 'Kucing pertama?', 'asep', '2018-12-10 05:08:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
