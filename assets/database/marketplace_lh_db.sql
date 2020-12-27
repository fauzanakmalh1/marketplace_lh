-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 02:55 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace_lh_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `kode_donasi` int(20) NOT NULL,
  `judul_donasi` varchar(50) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `tanggal_donasi` date NOT NULL,
  `kode_koin` varchar(20) NOT NULL,
  `jumlah_donasi` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`kode_donasi`, `judul_donasi`, `deskripsi`, `tanggal_donasi`, `kode_koin`, `jumlah_donasi`, `email`, `gambar`, `nilai`) VALUES
(1, 'Trimulyo Hijau bersama Candle Bliss', '<h2><em>&quot;Yuk Hijaukan Trimulyo Bersama Candle Bliss!&quot;</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lokasi: Pesisir Trimulyo, Semarang | Kota: Semarang</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Halo Sahabat,<br />\r\nSalam Lestari!<br />\r\nPerkenalkan, Saya Tania Salim. Saya adalah seorang Owner dari Candle Bliss. Candle Bliss merupakan salah satu home industri yang bergerak di bidang aromatherapy. Kami menjual premium home fragrances dan sekarang kami mempunyai produk baru yaitu anti bacterial spray.<br />\r\n<br />\r\nSebagai sebuah produk, kami ingin turut berpartisipasi dalam menjaga lingkungan. Kami ingin mengajak semua orang terutama konsumen kami untuk berkontribusi mengatasi masalah lingkungan. Tidak perlu menjadi aktivis lingkungan, cukup dari rumah saja untuk berpartisipasi menjaga kelestarian alam.<br />\r\n<br />\r\nSalah satu caranya adalah dengan mengikuti kampanye alam. Kampanye alam ini merupakan program kerjasama dengan LindungiHutan untuk menghijaukan alam melalui donasi. Lokasi penghijauan kali ini ada di pesisir Trimulyo. Pesisir Trimulyo seringkali dilanda banjir Rob. Tidak adanya vegetasi Mangrove membuat pesisir ini semakin tenggelam dikarenakan banjir rob dan abrasi. Sedikit demi sedikit pesisir Trimulyo menjadi tidak layak huni.<br />\r\n<br />\r\nBersama Tripari, sebuah kelompok pelestarian lingkungan di pesisir Trimulyo, kami mengajak kalian semua untuk berpartisipasi dalam kampanye alam ini. Kalian dapat berdonasi sebesar Rp 10.000/pohon gunanya untuk pembibitan, penanaman, dan perawatan pohon Mangrove.<br />\r\n<br />\r\nBagaimana Cara Berdonasi ??<br />\r\n1. Klik Tombol &ldquo;DONASI SEKARANG&rdquo;<br />\r\n2. Input nominal yang akan di donasikan&pi;<br />\r\n3. Pilih metode pembayaran transfer Bank (transfer bank BNI, Mandiri, BCA, BRI, BNI), Go-Pay dan Doku Wallet<br />\r\n4. Konfirmasi melalui WhatsApp, Website atau E-mail<br />\r\n5. Selesai<br />\r\n<br />\r\nAnda Juga dapat melakukan Gabung Aksi penanaman dengan melakukan pendaftaran di<br />\r\nTombol &ldquo;Gabung Aksi&rdquo;, biaya ditanggung peserta.<br />\r\nSalam Lestari !!</p>\r\n', '2020-09-15', '', 1000000000, 'admin@gmail.com', 'd35c3a2c72e6e328d5440d270bb9d6a1.png', 1),
(2, 'Eat Jot Munch x LindungiHutan', '<h2><em>&quot;You Eat = You Plant For Earth, For Health&quot;</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lokasi: Pesisir Trimulyo, Semarang | Kota: Semarang</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hai teman-teman!<br />\r\n<br />\r\nPerkenalkan saya Gusti Anindya, Founder dari Jot Munch. Jot Munch merupakan platform yang saya buat untuk menjalankan aksi nyata peduli lingkungan. Jot Munch menjual makanan berbahan dasar nabati, kemasan yang minim plastik, dan pengiriman makanan menggunakan sepeda.<br />\r\n<br />\r\nKami bertujuan untuk mengajak lebih banyak orang untuk menjalankan aksi nyata peduli lingkungan lewat cara yang sederhana, yaitu dengan mengurangi konsumsi daging, mengurangi jejak karbon, dan mengedukasi konsumen lewat makanan yang dikonsumsi.<br />\r\n<br />\r\nKami juga berkomitmen menyumbangkan sebagian hasil penjualan makanan untukpenanaman pohon, sehingga konsumen secara tidak langsung ikut berpartisipasi dalam penanaman pohon.<br />\r\n<br />\r\nKami berkolaborasi dengan LindungiHutan sebagai mitra penanaman dan menyumbangkan sebagian keuntungan kami. Kami akan melakukan penanaman di Pesisir Trimulyo, Semarang. Lokasi ini sangat mengkhawatirkan karena semakin hari baris batas pantai makin mendekati pemukiman warga. Lokasi ini juga terancam mengalami abrasi parah akibat minimnya mangrove sebagai pemecah ombak.<br />\r\n<br />\r\nKami mengajak kamu untuk ikut berkontribusi memperbaiki pesisir Trimulyo dengan cara berdonasi sebesar Rp 10.000/pohon. Donasi yang terkumpul akan digunakan untuk keperluan penanaman dan perawatan pohon.<br />\r\n<br />\r\nBagaimana Cara Berdonasi?<br />\r\n1. Klik tombol &ldquo;DONASI&rdquo;<br />\r\n2. Masukkan nominal yang akan didonasikan<br />\r\n3. Pilih metode pembayaran (transfer bank BNI, Mandiri, BCA, BRI, BNI, Go-Pay, atau Doku Wallet)<br />\r\n4. Konfirmasi melalui WhatsApp, Website atau E-mail<br />\r\n5. Selesai<br />\r\n<br />\r\nKamu juga dapat gabung aksi penanaman dengan melakukan pendaftaran di tombol &ldquo;Gabung Aksi&rdquo;, biaya ditanggung peserta.<br />\r\n<br />\r\nSalam lestari,<br />\r\n<br />\r\nGusti.</p>\r\n', '2020-07-08', '', 2000000000, 'admin@gmail.com', 'f4d6e8ed07b63729d9aeac6868b92e87.png', 1),
(3, 'Alam Kita, Tanggung Jawab Siapa?', '<h2><em>&quot;Jika bukan kita yang menanam, mau siapa?&quot;</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lokasi: Desa Bedono, Demak | Kota: Demak</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Halo Sahabat Alam,<br />\r\nSalam Lestari!<br />\r\n<br />\r\nPerkenalkan, kami adalah Bizlab. Bizlab merupakan sebuah perusahaan yang bergerak di bidang teknologi pendidikan (edtech) dan memiliki misi untuk menciptakan inklusi akses pendidikan profesional di Indonesia.<br />\r\n<br />\r\nAlam merupakan tempat tinggal dan sumber dari segala kehidupan. Menjaga alam berarti turut serta menyambung kehidupan generasi yang akan datang. Oleh karenanya, sebagai salah satu wujud kontribusi menjaga alam, Bizlab bekerjasama dengan Lindungi Hutan untuk mengembalikan ekosistem pantai-pantai yang rusak karena terkena abrasi. Dengan membeli kelas reguler Bizlab, kamu juga bisa turut berkontribusi untuk alam. Di setiap kelas yang kamu beli, Rp 10,000 diantaranya akan langsung didonasikan untuk gerakan penanaman pohon bakau melalui Lindungi Hutan. Yuk pilih kelas belajar profesimu sekaligus berdonasi di&nbsp;<strong><a href=\"https://bizlab.co.id/\">https://bizlab.co.id</a></strong><br />\r\n<br />\r\nWilayah yang akan dicover adalah Bedono, Demak - Pantai Berigheen, Situbondo- Kampung Laut, Cilacap - Pantai Karang Malang, Kendal. Pohon yang akan ditanam adalah Mangrove, dengan tujuan menguatkan wilayah-wilayah tersebut dari bahaya abrasi yang dapat melumpuhkan perekonomian maupun kehidupan sosial masyarakat sekitarnya.<br />\r\n<br />\r\nBesaran Donasi yang diperlukan untuk melakukan penanaman dan perawatan pohon adalah<br />\r\nRp 10,000/pohon.<br />\r\n<br />\r\nBagi Ihwanudin, Demak bukan hanya tempat dimana dilahirkan melainkan tempat dimana tumbuh dan berproses. Sebagai anak pesisir utara pulau Jawa, Demak khususnya pantai dan lautan memberi banyak kekayaan alam baik tumbuhan maupun hewan. Tapi sayangnya saat ini rasa syukur harus dibarengi dengan rasa ikhlas, sabar dan sedih karena Demak sedang terancam bahaya. Mari bantu Ihwanudin untuk melakukan penanaman mangrove di Bedono sebagai upaya penyelamatan pesisir Demak<br />\r\n<br />\r\nBagaimana Cara Berdonasi ??<br />\r\n1. Klik Tombol &ldquo;DONASI SEKARANG&rdquo;<br />\r\n2. Input nominal yang akan di donasikan&pi;<br />\r\n3. Pilih metode pembayaran transfer Bank (transfer bank BNI, Mandiri, BCA, BRI, BNI), Go-<br />\r\nPay dan Doku Wallet<br />\r\n4. Konfirmasi melalui WhatsApp, Website atau E-mail<br />\r\n5. Selesai<br />\r\n<br />\r\nAnda Juga dapat melakukan Gabung Aksi penanaman dengan melakukan pendaftaran di<br />\r\nTombol &ldquo;Gabung Aksi&rdquo;, biaya ditanggung peserta.<br />\r\nSalam Lestari !!</p>\r\n', '2020-10-02', '', 3000000000, 'admin@gmail.com', '2433c42079f1ff0e807afec330157af1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `email` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nomortelepon` varchar(15) NOT NULL,
  `fotoktp` varchar(255) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `tanggallahir` date NOT NULL,
  `admin` int(5) NOT NULL,
  `validasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`email`, `nama`, `jenis_kelamin`, `nomortelepon`, `fotoktp`, `NIK`, `password`, `tanggallahir`, `admin`, `validasi`) VALUES
('admin@gmail.com', 'admin', 'pria', '08238585855', '', '10235629847', '$2y$10$gWFPHJD4bwkUCwzvrhgdCOEjNvMrqh4kJqsL10SfO02H/bJL1Bt36', '2020-11-01', 1, 1),
('member@gmail.com', 'Member', 'pria', '084679846587', 'c63f845e5df59dc116c4ecce1c045e50.jpg', '4568791340598756', '$2y$10$j0zI.p1CjnP8P7rVDMgMtezV7s426Gou1X1ToTsi9t.E3f3v8O/mC', '2020-12-01', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kampanye`
--

CREATE TABLE `kampanye` (
  `kode_kampanye` int(20) NOT NULL,
  `judul_kampanye` varchar(150) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_koin` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `verifikasi` int(5) NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampanye`
--

INSERT INTO `kampanye` (`kode_kampanye`, `judul_kampanye`, `deskripsi`, `tanggal`, `kode_koin`, `email`, `gambar`, `verifikasi`, `penulis`) VALUES
(1, 'Let\'s Keep The Earth Clean and Green', '<h2><em>&quot;Bersama Stoneroot Essentials bantu pulihkan Kampung Laut, Cilacap!&quot;</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lokasi: Kampung Laut, Cilacap | Kota: Cilacap</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Halo Sahabat,<br />\r\nSalam Lestari!<br />\r\n<br />\r\nPerkenalkan, saya Yuvinta Riandisty. Saya adalah&nbsp;<em>owner</em>&nbsp;dari Stoneroot Essentials. Produk kami merupakan produk perawatan tubuh yang menggunakan bahan alam berkualitas terbaik. Produk kami memiliki fungsi meningkatkan kesehatan dan kebersihan tubuh. Dengan menggunakan produk kami, kami harap tercipta harmoni antara manusia dan alam.<br />\r\n<br />\r\nBersama Lindungi Hutan, kami melakukan kampanye alam penanaman pohon mangrove. Kami berkomitmen menyalurkan sebagian hasil penjualan kami setiap bulannya untuk penanaman pohon.<br />\r\n<br />\r\nKami memilih Kampung Laut sebagai lokasi kampanye alam kami. Kami percaya bahwa Kampung Laut memiliki banyak potensi alam yang masih bisa dikembangkan. Namun, abrasi dan kenaikan permukaan air laut menjadi penghalang utama.<br />\r\n<br />\r\nKampung Laut berlokasi di Segara Anakan, Cilacap, Jawa Tengah. Kampung Laut terdiri dari gugusan pulau kecil dan beberapa desa termasuk Desa Ujung Alang, Desa Kleces, Desa Ujung Gagak, dan Desa Panikel.<br />\r\n<br />\r\nDi masa lalu, banyak rumah panggung yang bisa ditemukan di sini. Seiring berjalannya waktu, rumah-rumah tersebut rusak akibat abrasi dan kenaikan permukaan air laut. Kerusakan itu merupakan bukti nyata bahwa masyarakat Kampung Laut dan lingkungannya membutuhkan bantuan kita semua.<br />\r\n<br />\r\nKami mengajak kalian untuk berkolaborasi bersama kami membuat perubahan terhadap lingkungan. Kalian dapat turut serta dalam kampanye ini melalui donasi sebesar Rp 10.000/pohon. Donasi akan digunakan untuk penanaman, perawatan, dan monitoring mangrove. Mari jaga kesehatan jiwa, raga, dan alam secara bersamaan.<br />\r\n<br />\r\nBagaimana Cara Berdonasi?<br />\r\n1. Klik tombol &ldquo;DONASI SEKARANG&rdquo;<br />\r\n2. Input nominal yang akan didonasikan<br />\r\n3. Pilih metode pembayaran (transfer bank BNI, Mandiri, BCA, BRI, BNI, GoPay, atau Doku Wallet)<br />\r\n4. Konfirmasi melalui WhatsApp, Website atau E-mail<br />\r\n5. Selesai<br />\r\n<br />\r\nAnda juga dapat gabung aksi penanaman dengan melakukan pendaftaran di tombol &ldquo;Gabung Aksi&rdquo;, biaya ditanggung peserta.<br />\r\n<br />\r\nSalam Lestari!</p>\r\n', '2020-10-01', '', 'member@gmail.com', '5227c2d308c7aeff94dbd0abf4267de8.png', 1, 'Yuvinta Riandisty'),
(2, 'Tanam Hutanmu dari Rumah!', '<h2><em>&quot;Bersama Taman Bayang, Tanam Pohon untuk Bumi&quot;</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lokasi: Pesisir Trimulyo, Semarang | Kota: Semarang</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Halo Sahabat,<br />\r\nSalam Lestari!<br />\r\n<br />\r\nPerkenalkan, Saya&nbsp;<strong>Anggie Malem Sitompul</strong>. Saya adalah seorang&nbsp;<em>Co-Founder&nbsp;</em>dari Taman Bayang. Taman Bayang merupakan toko online yang menjual berbagai jenis tanaman. Kami berkomitmen menyalurkan sebagian hasil penjualan produk tanaman kami setiap bulannya untuk penanaman pohon dalam program&nbsp;<strong><em>HousePlantTree</em></strong>&nbsp;campaign&nbsp;<strong>&quot;Tanam Hutanmu dari Rumah!&quot;</strong>. Sudah terlalu banyak kerusakan alam, maka kami ingin berkontribusi untuk memperbaiki kerusakan alam yang telah terjadi.<br />\r\n<br />\r\nPenanaman pohon dilakukan di Pesisir Trimulyo, Semarang. Dampak perubahan iklim mulai terasa di Kelurahan Trimulyo sekitar 10&ndash;20 tahun yang lalu rob dan abrasi telah merusak mangrove dan menghilangkan lahan tambak yang ada dan saat ini, terutama setiap bulan April atau Mei, rob atau pasang tinggi telah memasuki rumah warga. Kenaikan air laut yang disertai angin dan gelombang tinggi berdampak pada kegiatan para nelayan dari desa tersebut. Masyarakat di Kelurahan Trimulyo melakukan peninggian dasar lantai, peninggian di daerah sekitar rumah, membuat tanggul, dan menaruh barang berharga serta alat rumah tangga di tempat yang lebih tinggi. Penyebab tenggelamnya Trimulyo yaitu penurunan muka tanah mencapai 10 cm per tahun dan perkembangan kota yang semakin menggerus kawasan hijau di pesisir akibat pembukaan tambak oleh warga.<br />\r\nSaat ini, kondisi pesisir Trimulyo sangat memprihatinkan karena abrasi yang sangat tinggi. Bersama Anggie,&nbsp;<em>Co-Founder</em>&nbsp;Taman Bayang mari peduli dengan lingkungan yaitu menanam pohon mangrove di pesisir Trimulyo. Menggandeng LindungiHutan untuk melakukan penanaman di Semarang, tepatnya di pesisir Trimulyo dengan kondisi tersebut maka kami berinisiatif ingin memperbaiki kondisi kerusakan alam tersebut. Sehingga dengan adanya penanaman dipesisir Trimulyo diharapkan abrasi berkurang dan daerah sekitar menjadi lebih hijau dari sebelumnya.<br />\r\n<br />\r\nBesaran Donasi yang diperlukan untuk melakukan penanaman dan perawatan pohon adalah<br />\r\nRp 10,000/pohon.<br />\r\n<br />\r\nBagaimana Cara Berdonasi ??<br />\r\n1. Klik Tombol &ldquo;DONASI SEKARANG&rdquo;<br />\r\n2. Input nominal yang akan di donasikan<br />\r\n3. Pilih metode pembayaran transfer Bank (transfer bank BNI, Mandiri, BCA, BRI, BNI), Go-<br />\r\nPay dan Doku Wallet<br />\r\n4. Konfirmasi melalui WhatsApp, Website atau E-mail<br />\r\n5. Selesai<br />\r\n<br />\r\nAnda Juga dapat melakukan Gabung Aksi penanaman dengan melakukan pendaftaran di<br />\r\nTombol &ldquo;Gabung Aksi&rdquo;, biaya ditanggung peserta.<br />\r\nSalam Lestari !!</p>\r\n', '2020-10-01', '', 'member@gmail.com', '2ce264ccdab6aa69abf15c227c045df8.png', 1, 'Anggie Malem Sitompul'),
(3, '100 Pohon Minatozaki Sana Twice', '<h2><em>&quot;Once Indonesia ayo lestarikan hutan Indonesia &quot;</em></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lokasi: Bontang Mangrove Park, Bontang | Kota: Bontang</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Halo Once Indonesia<br />\r\nSalam Lestari!<br />\r\nSalam kenal kami dari @peoplesay201 dan @ooh_twicecy Bulan Desember 2020 nanti salah satu member Twice akan merayakan ulang tahun yaitu Minatozaki Sana Twice<br />\r\ndan kami ingin mengajak Once Indonesia untuk berpartisipasi dalam memberikan sesuatu dampak baik untuk bumi dengan cara menanam<br />\r\npohon atas nama Minatozaki Sana Twice.<br />\r\n<br />\r\nCaranya gampang banget, hanya dengan IDR 10.000/Pohon Once Indonesia sudah berpartisipasi dalam program ini.<br />\r\n<br />\r\nBesaran Donasi yang diperlukan untuk melakukan penanaman dan perawatan pohon adalah<br />\r\nRp 10,000/pohon.<br />\r\n<br />\r\nBMP dibangun dengan konsep Conservation, Education and Adventure, dan diharapkan dapat menjadi sarana pendidikan mangrove yang terbaik di Indonesia. Untuk mendukung fungsi BMP sebagai sarana edukasi, disepanjang boardwalk yang terbentang dari daratan sampai ke laut, terdapat berbagai informasi tentang jenis-jenis vegetasi hutan mangrove. Selain boardwalk sepanjang 1.3 km, terdapat menara pandang dengan tinggi 20 m, yang dapat difungsikan sebagai sarana &ldquo;bird watching&rdquo;. View menara pandang ini persis menghadap ke laut yaitu Selat Makassar. Gazebo yang dapat digunakan sebagai tempat istirahat, juga tersedia pada beberapa titik. Untuk mengakomodir para pengunjung yang ingin melakukan kegiatan di dalam ruangan, tersedia Balai Pertemuan pada welcome area, yang dapat menampung 200-300 orang. Welcome area, juga sedang dipersiapkan sebagai bumi perkemahan yang dapat mengakomodir peserta sampai seribu orang.<br />\r\n<br />\r\nBagaimana Cara Berdonasi ??<br />\r\n1. Klik Tombol &ldquo;DONASI SEKARANG&rdquo;<br />\r\n2. Input nominal yang akan di donasikan&pi;<br />\r\n3. Pilih metode pembayaran transfer Bank (transfer bank BNI, Mandiri, BCA, BRI, BNI), Go-<br />\r\nPay dan Doku Wallet<br />\r\n4. Konfirmasi melalui WhatsApp, Website atau E-mail<br />\r\n5. Selesai<br />\r\n<br />\r\nAnda Juga dapat melakukan Gabung Aksi penanaman dengan melakukan pendaftaran di<br />\r\nTombol &ldquo;Gabung Aksi&rdquo;, biaya ditanggung peserta.<br />\r\nSalam Lestari !!</p>\r\n', '2020-11-14', '', 'member@gmail.com', '5b9167a519ebcbfb7529ae60594f4a96.png', 1, 'Peoplesay201');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` int(50) NOT NULL,
  `judul_produk` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` bigint(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `penjual` varchar(50) DEFAULT NULL,
  `gambar` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `judul_produk`, `deskripsi`, `harga`, `email`, `penjual`, `gambar`) VALUES
(1, 'Reusable Straw Stainless', '<p>Produk: Reusable Straw Stainless</p>\r\n', 50000, 'admin@gmail.com', 'Lindungi Hutan', '45fcac6b06e9548394465c476344902d.jpg'),
(2, 'Reusable Straw Bamboo', '<p>Produk: Reusable Straw Bamboo</p>\r\n', 100000, 'admin@gmail.com', 'Lindungi Hutan', '9de86302df1a22257d7150c879197f8a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`kode_donasi`),
  ADD KEY `emaill` (`email`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `kampanye`
--
ALTER TABLE `kampanye`
  ADD PRIMARY KEY (`kode_kampanye`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`),
  ADD KEY `emailll` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `kode_donasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kampanye`
--
ALTER TABLE `kampanye`
  MODIFY `kode_kampanye` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `emaill` FOREIGN KEY (`email`) REFERENCES `identitas` (`email`);

--
-- Constraints for table `kampanye`
--
ALTER TABLE `kampanye`
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `identitas` (`email`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `emailll` FOREIGN KEY (`email`) REFERENCES `identitas` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
