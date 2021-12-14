-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 08.20
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_manajemen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_user` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('admin','superadmin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_user`, `username`, `nama`, `email`, `password`, `level`) VALUES
(1, 'rifki', 'Muhammad Rifki Pratama', 'mrifkipratama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'superadmin'),
(2, 'ricu', 'ricu pratama', 'ricupratama@gmail.com', '4d4dc6c45f47b15778b590bdbedd386e', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `artikel` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`kode_artikel`, `judul`, `gambar`, `artikel`) VALUES
(1, 'Apa Itu Website?', 'https://www.sekawanmedia.co.id/wp-content/uploads/elementor/thumbs/website-adalah-ozy5y7ex66fhmu4mzc2g19z5mhhy3mnui3ysxmkabk.jpg', 'Pengertian website\r\nWebsite adalah kumpulan halaman dalam suatu domain yang memuat tentang berbagai informasi agar dapat dibaca dan dilihat oleh pengguna internet melalui sebuah mesin pencari. Informasi yang dapat dimuat dalam sebuah website umumnya berisi mengenai konten gambar, ilustrasi, video, dan teks untuk berbagai macam kepentingan.\r\n\r\nBiasanya untuk tampilan awal sebuah website dapat diakses melalui halaman utama (homepage) menggunakan browser dengan menuliskan URL yang tepat. Di dalam sebuah homepage, juga memuat beberapa halaman web turunan yang saling terhubung satu dengan yang lain.\r\n\r\nSejarah website\r\nSejarah website pertama kali dimulai dari seorang ilmuwan yang berasal dari Inggris, bernama Tim Berners-Lee. Orang tua dari Berners juga merupakan ilmuwan komputer pada era awal dunia komputasi. \r\n\r\nTujuan awal dari Tim Berners membuat sebuah website adalah supaya lebih memudahkan para peneliti di tempat kerjanya untuk mendapatkan dan bertukar informasi. Kemudian, pada tanggal 30 April 1993, secara resmi CERN yang merupakan laboratorium fisika di Swiss mengumumkan tentang perilisan website secara gratis.\r\n\r\nSebelum itu pada tahun 1990, Tim Berners-Lee juga menuliskan tentang tiga teknologi dasar web, antara lain:\r\n\r\nHTML (HyperText Markup Language)\r\nMerupakan bahasa markup atau format untuk halaman web.\r\n\r\nURI (Uniform Resource Identifier)\r\nMerupakan sebuah alamat unik untuk membuka halaman situs. Fungsinya adalah mengidentifikasi setiap sumber daya yang ada pada web. Saat ini sering disebut dengan URL (Uniform Resource Locator).\r\n\r\nHTTP (HyperText Transfer Protocol)\r\nTeknologi ini memungkinkan seseorang untuk mengambil kembali sumber daya yang terkoneksi dengan semua situs web.\r\n\r\nFungsi website\r\nTerdapat beberapa fungsi website yang memiliki keunggulan dan kualitas yang berbeda sesuai dengan target pemasaran maupun bisnis. Berikut ini merupakan beberapa fungsi yang dikategorikan sesuai dengan tujuan bisnis.'),
(5, 'BUKU ITU?', 'https://images.unsplash.com/photo-1543002588-bfa74002ed7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 'Pengertian Buku adalah jendela ilmu pengetahuan  Apakah kamu familiar dengan slogan tersebut? Tentu saja. Kalimat tersebut biasanya ada di bagian bawah lembaran buku tulis sekolah. Makna dari slogan ‘buku adalah jendela ilmu pengetahuan’ adalah kita bisa mendapatkan wawasan dan pengetahuan yang luas dengan membaca berbagai buku sebab dengan membaca buku, wawasanmu akan bertambah. Lalu menstimulasi otak dan meningkatkan rasa ingin tahu dan rasa ingin belajar.  Pengertian buku berdasarkan tipe buku ada dua yakni fiksi dan non fiksi. Buku fiksi merupakan karangan yang tidak berdasarkan kisah nyata dan fakta sehingga sifatnya faktual, sedangkan buku non fiksi sebaliknya. Keduanya memiliki nilai yang sama, yakni mampu menambah dan memperluas wawasan dan pengetahuan pembaca. '),
(6, 'Rekomendasi Laptop', 'https://images.unsplash.com/photo-1623040522601-18ef4bf3ddc9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80', 'Metode pembelajaran jarak jauh akibat pandemi Covid-19 menjadi salah satu alasannya.  Hari ini, terdapat banyak merek laptop yang menyediakan spesifikasi mumpuni untuk kegiatan belajar.  Mulai dari Acer, Asus, Lenovo, Dell, HP hingga Apple.  Namun, dari sekian banyak produk yang ditawarkan brand tersebut.  Mana ya yang kira-kira patut untuk dibeli?  Yuk, langsung saja kita simak daftar 8 rekomendasi laptop untuk mahasiswa dan pelajar terbaik tahun 2021 berikut ini.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisili`
--

CREATE TABLE `domisili` (
  `kode_domisili` int(11) NOT NULL,
  `domisili` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `domisili`
--

INSERT INTO `domisili` (`kode_domisili`, `domisili`) VALUES
(1, 'Probolinggo\r\n\r\n'),
(2, 'Surabaya'),
(4, 'Malang\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `industri`
--

CREATE TABLE `industri` (
  `kode_industri` int(11) NOT NULL,
  `industri` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `industri`
--

INSERT INTO `industri` (`kode_industri`, `industri`) VALUES
(2, 'Food'),
(3, 'Goverment'),
(4, 'Fashion');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(11) NOT NULL,
  `produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `produk`) VALUES
(1, 'Instagram konten'),
(2, 'Aplikasi mobile yok'),
(3, 'Website informasi'),
(5, 'Website profile'),
(6, 'Website dan Aplikasi'),
(7, 'Konten Instagram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `projek`
--

CREATE TABLE `projek` (
  `kode_projek` int(40) NOT NULL,
  `pelanggan` varchar(40) NOT NULL,
  `kode_domisili` int(20) NOT NULL,
  `kode_industri` int(20) NOT NULL,
  `kode_produk` int(20) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `facebook` varchar(40) NOT NULL,
  `nama_perwakilan` varchar(40) NOT NULL,
  `wa_perwakilan` varchar(40) NOT NULL,
  `kode_status` int(20) NOT NULL,
  `harga_projek` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `kode_status` int(20) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`kode_status`, `status`) VALUES
(1, 'Wawancara'),
(3, 'Pengerjaan'),
(4, 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indeks untuk tabel `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`kode_domisili`);

--
-- Indeks untuk tabel `industri`
--
ALTER TABLE `industri`
  ADD PRIMARY KEY (`kode_industri`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`kode_projek`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`),
  ADD UNIQUE KEY `kode_domisili` (`kode_domisili`),
  ADD UNIQUE KEY `kode_industri` (`kode_industri`),
  ADD UNIQUE KEY `kode_status` (`kode_status`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`kode_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_user` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `kode_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `domisili`
--
ALTER TABLE `domisili`
  MODIFY `kode_domisili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `industri`
--
ALTER TABLE `industri`
  MODIFY `kode_industri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `projek`
--
ALTER TABLE `projek`
  MODIFY `kode_projek` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `kode_status` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
