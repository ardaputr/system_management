-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2024 pada 19.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `victoryjaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `pass`) VALUES
(1, 'Superadmin', 'superadmin@gmail.com', 'superadmin'),
(3, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hutang`
--

CREATE TABLE `hutang` (
  `id_hutang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_hutang` date NOT NULL,
  `alasan` text NOT NULL,
  `penghutang` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `hutang`
--

INSERT INTO `hutang` (`id_hutang`, `jumlah`, `tgl_hutang`, `alasan`, `penghutang`) VALUES
(18, 50000, '2024-05-21', 'Beli makan', 'Joko'),
(19, 15000, '2024-06-17', 'Beli Bakso', 'Guntur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `posisi` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `umur` int(11) NOT NULL,
  `kontak` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `posisi`, `alamat`, `umur`, `kontak`) VALUES
(1, 'Othman Satria', 'Sekertaris', 'Magelang', 22, '123220157'),
(6, 'Nolan Tabina', 'Bendahara', 'Jembatan Merah', 20, '123220049'),
(7, 'Waramatja Yuda', 'Akunting', 'Bantul', 21, '123220163');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_sumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `tgl_pemasukan`, `jumlah`, `id_sumber`) VALUES
(46, '2024-05-31', 19890000, 1),
(47, '0000-00-00', 2350000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tgl_pengeluaran` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_sumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `tgl_pengeluaran`, `jumlah`, `id_sumber`) VALUES
(1, '2024-05-15', 7500000, 6),
(2, '2024-05-09', 250000, 3),
(3, '2024-05-24', 5500000, 2),
(4, '2024-06-14', 250000, 2),
(28, '2024-05-28', 300000, 2),
(29, '2024-05-27', 200000, 2),
(30, '2024-05-27', 40000, 4),
(31, '2024-05-27', 1500000, 5),
(32, '2024-06-01', 560000, 1),
(33, '2024-05-24', 454000, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` float NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto_produk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `foto_produk`) VALUES
(14, 'BonCabe Cabai Bubuk', 4500, 'BonCabe Cabai Bubuk ini dibuat dari yang cabai pilihan berkualitas yang rasanya benar – benar pedas, dan diproses dengan cara digiling sampai menjadi halus. Teksturnya yang halus dan alami tanpa campuran apapun, menjadikan BonCabe Cabai Bubuk ini cocok dicampurkan ke dalam setiap resep masakan untuk menambah citarasa pedas tanpa mengubah rasa asli makanan. BonCabe Cabai Bubuk praktis, sehingga kamu akan merasakan kemudahan menikmati makanan pedas tanpa harus ribet menghaluskan cabai sendiri. Rasakan dan buktikan sensasi rasa pedas alaminya, BonCabe Cabai Giling lebih praktis dan alami!', 'BubukCabe.jpg'),
(16, 'Premium Cireng ZEERENG', 21000, '	CIRENG adalah Cemilan kekinian yg di gemari segala usia, Rasanya yg gurih dan Enak membuat ini cocok dijadikan cemilan ,, dengan bumbu rujak atau kuah pedas dapat di pilih sesuai keinginan. Garing di Luar namun lembut didalam.', 'Cireng.png'),
(17, 'MamaSuka Bumbu Kuah Bakso', 3000, 'Bumbu Kuah Bakso Sapi MamaSuka merupakan bumbu yang terbuat dari bahan pilihan dan memiliki rasa gurih dengan aroma daging sapi yang sedap untuk kelezatan kuah bakso, tanpa harus menambahkan bumbu lainnya.', 'BumbuBakso.jpg'),
(18, 'Indofood Bumbu Kentang Goreng', 6500, 'INDOFOOD BUMBU KENTANG GORENG KEJU 25 GR\r\n\r\nBumbu Kentang Goreng Indofood membuat cemilan apapun jadi lebih seru, tinggal tuang di atas camilan favorit keluarga, aduk/kocok, dan siap dinikmati.', 'BumbuKentang.png'),
(19, 'Mazzoni Bumbu Tabur', 5000, 'Mazzoni Bumbu Tabur Balado Ijo memiliki aroma khas balado yang menggugah selera. Rasanya pedas dan gurih, dengan tekstur yang renyah. Cocok untuk berbagai macam camilan, seperti keripik, kerupuk, aneka gorengan, dan bakaran.', 'BumbuTabur.jpeg'),
(20, 'Kanzler Smoked Beef', 35000, 'Kanzler smoked beef diproduksi oleh PT. Macroprima Panganutama, merupakan irisan daging sapi impor yang diawetkan dengan asap hasil pembakaran kayu. Daging sapi asap kualitas premium yang sangat cocok untuk sajian keluarga atau tamu Anda.', 'Daging.png'),
(21, 'Kecap Bango', 9000, 'Bango Kecap Manis dibuat sepenuh hati dari perpaduan tepat bahan pilihan berkualitas dari alam: kedelai hitam Mallika, gula, garam dan air. Ciptakan rasa yang benar-benar kecap. Karena rasa tak pernah bohong.', 'Kecap.jpg'),
(22, 'Kanzler Nugget Bubble Crumb', 33500, 'Kanzler Crispy Chicken Nugget ini terbuat dari daging ayam pilihan dengan bubble crumb yang extra crispy. Nugget kualitas Premium ini cocok dimakan dengan nasi dan dijadikan cemilan bersama teman atau keluarga.', 'Nugget-Kanzler.jpg'),
(23, 'Ardena Food Otak-Otak Singapor', 27000, 'Otak-Otak Singapore Ardena Food merupakan hasil olahan ikan yang mengandung vitamin, protein dan omega 3, baik untuk kesehatan jantung, menurunkan tekanan darah tinggi, memerangi kolesterol jahat dalam tubuh, meningkatkan daya ingat, dan memperlambat proses penuaan.', 'OtakOtak.png'),
(24, 'Besto Rolade Sapi', 16500, 'Rolade berkualitas Merk Besto Bentuk Bulat pipih Satu pak isi 27 pcs, berat 500 gram Praktis, sangat cocok dijadikan camilan dan bekal', 'Rolade.jpg'),
(25, 'Indofood Saos Sambal Peda', 9700, 'ndofood Saus Sambal Extra Pedas adalah produk yang sering digunakan untuk memberikan sentuhan rasa pedas pada berbagai hidangan.', 'Saos.jpg'),
(26, 'Kanzler Cheese Frankfurter', 45000, 'Sosis matang dengan tekstur daging premium dan bumbu yang halus, disertai potongan keju cheddar', 'Sosis.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumber`
--

CREATE TABLE `sumber` (
  `id_sumber` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `sumber`
--

INSERT INTO `sumber` (`id_sumber`, `nama`) VALUES
(1, 'Hasil Penjualan'),
(2, 'Maintenance'),
(3, 'Sewa Tempat'),
(4, 'Operasional'),
(5, 'Gaji Karyawan'),
(6, 'Belanja Inventory');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id_hutang`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_sumber` (`id_sumber`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id_sumber`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id_hutang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id_sumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
