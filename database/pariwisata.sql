-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 04:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Aplikasi', '<p>Aplikasi Panorama Wisata Kota Pontianak merupakan&nbsp;penerapan teknologi informasi secara efektif dan mudah diakses oleh masyarakat dalam maupun luar negeri. Aplikasi ini menerapkan teknologi informasi image panoramic wisata kota yang ada di Kota Pontianak. Menerapkan konsep seperti halnya fitur Street View pada Google Maps dan masih dikembangkan oleh Google untuk di Indonesia menjadi landasan penulis dalam pengimplementasian keindahan Kota Pontianak dalam sebuah sistem yang nantinya akan terintegrasi ke dalam sistem Dinas Kebudayaan dan Pariwisata Kota Pontianak. Dengan adanya visualisasi keindahan Kota Pontianak ini akan mempermudah wisatawan maupun masyarakat luas dalam pencarian mereka akan keindahan kota yang memiliki potensi, sehingga nantinya orang berbondong-bondong untuk mengunjungi Kota Pontianak.</p>', NULL, '2018-11-02 02:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `isi` text NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `slug`, `isi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Festival Meriam', 'festival-meriam', '<p>Ada satu momen menarik selama bulan puasa, terutama sepanjang tepi Sungai Kapuas. Pemandangan meriam berderet-deret sepanjang tepian. Meriam itu bukan meriam mesiu seperti gambar perang dengan VOC, pipa logam di atas gerobak/kereta. Yang ini meriam karbit, dibuat dari ruas-ruas bambu, batang kelapa. dan akhir-akhir ini langsung diambil dari batang pohon, diameternya bisa mencapai 60 cm. Ketika kita menyusuri Sungai Kapuas, seolah-olah moncong-moncongnya diarahkan ke kita.</p>', '1540704975.jpg', '2018-10-28 09:36:15', '2018-11-04 03:36:20'),
(2, 'Korem', 'korem', '<p>Taman Alun-Alun Kapuas ini memiliki bentuk dan dekorasi yang amat tertata rapi, sehingga tempat ini sering menjadi sarana refresing bagi beberapa kalangan masyarakat umum kota Pontianak, apalagi di tambah dengan adanya air mancur yang sangat indah, dengan dikelilingi anak-anak tangga taman alun-alun Kapuas serta ditambah dengan replika Tugu Khatulistiwa yang menjadi kebanggaan masyarakat Provinsi Kalimantan barat ini.</p>', '1540705063.jpg', '2018-10-28 09:37:43', '2018-11-03 12:29:19'),
(3, 'Bundaran Untan', 'bundaran-untan', 'Monumen Sebelas Digulis Kalimantan Barat, disebut juga sebagai Tugu Digulis atau Tugu Bambu Runcing atau Tugu Bundaran Untan oleh warga setempat, merupakan sebuah monumen yang terletak di Bundaran Universitas Tanjungpura, Jalan Jend. Ahmad Yani, Kelurahan Bansir Laut, Kecamatan Pontianak Tenggara, Kota Pontianak.', '1540705120.jpg', '2018-10-28 09:38:40', '2018-10-31 19:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_06_28_041823_create_panoramas_table', 2),
(5, '2018_06_29_064125_create_abouts_table', 3),
(6, '2018_10_29_162955_create_reviews_table', 4),
(7, '2019_01_24_104020_create_events_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `panoramas`
--

CREATE TABLE `panoramas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `panorama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panoramas`
--

INSERT INTO `panoramas` (`id`, `nama`, `slug`, `thumbnail`, `deskripsi`, `panorama`, `maps`, `created_at`, `updated_at`) VALUES
(1, 'Istana Kadariah', 'istana-kadariah', '15693799921.jpg', '<p>Keraton Kadariah&nbsp;adalah istana&nbsp;Kesultanan Pontianak&nbsp;yang dibangun pada dari tahun 1771 sampai 1778 masehi. Sayyid Syarif Abdurrahman Alkadri adalah sultan pertama yang mendiami istana tersebut. Keraton ini berada di dekat pusat&nbsp;Kota Pontianak,&nbsp;Kalimantan Barat. Sebagai cikal-bakal lahirnya Kota Pontianak, Keraton Kadariah menjadi salah satu objek wisata sejarah. Dalam perkembanganya, keraton ini terus mengalami proses renovasi dan rekrontuksi hingga menjadi bentuk yang sekarang ini.</p>\r\n\r\n<p>Keberadan keraton Kadariah tidak lepas dari sosok Sayyid Syarif Abdurrahman Alkadrie (1738-1808M), yang masa mudanya telah mengunjungi berbagai daerah di Nusantara dan melakukan kontak dagang dari para Saudagar di berbagai Negara. Ketika Habib Husein Alkadrie, yang pernah menjadi Hakim agama kerajaan Matan dan ulama terkemuka di Kerajaan Mempawah, wafat pada tahun 1770M, Syarif Abdurrahman beserta keluarganya memutuskan untuk mencari daerah pemukiman baru. sampai pada tanggal 23 oktober 1771M (24 Rajab 1181H), mereka tiba di daerah dekat pertemuan tiga sungai, yaitu sungai Landak, Sungai Kapuas kecil dan Sungai Kapuas. mereka memutuskan untuk menetap didaerah tersebut.</p>\r\n\r\n<p>Secara historis Keraton Kadariah mulai dibangun pada tahun 1771M dan baru selesai pada tahun 1778M. Tak lama setelah Keraton selesai dibangun Sayyid Syarif Abdurrahman Alkadri di nobatkan sebagai sultan pertama Kesultanan Pontianak. Dalam perkembanganya, keraton ini terus mengalami proses renovasi dan rekonstruksi hingga menjadi bentuk yang sekarang ini</p>\r\n\r\n<p>(sumber : id.wikipedia.org)</p>', '15693799922.jpg', '<p>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8178130790443!2d109.34771141415199!3d-0.028892035553493272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d58492226606b%3A0x30190f6309dc377c!2sKeraton+Kadriyah+Pontianak!5e0!3m2!1sen!2sid!4v1530278112201</p>', '2018-06-29 06:27:26', '2019-09-25 02:53:12'),
(3, 'Rumah Adat Melayu', 'rumah-adat-melayu', '15693800861.jpg', '<p>Rumah Adat Melayu Kalimantan Barat (Kalbar) ini terletak Komplek Perkampungan Budaya, Jalan Sutan Syahrir Kota Pontianak.Secara historis, pembangunan Rumah Adat Melayu ini dimulai dengan penancapan tiang pertama pada tanggal 17 Mei 2003 hingga selesai dibangun pada tahun 2005.Selanjutnya, pada tanggal 9 November 2005Rumah Adat Melayu Kalbar diresmikan oleh Wakil Presiden RI Jusuf Kalla.Sejak diresmikan, bangunan berdiri diatas lahan seluas 1,4 Hektarini menjadi pusat/tempat diselenggarakannya berbagai kegiatan, resepsi pernikahan maupun salah satu destinasi kunjungan wisatawan lokal maupun mancanegara.Hakikat rumah/ruang balai adalah tempat melakukan kegiatan bermasyarakat dan kegiatan sosial, termasuk tempat mengadakan musyawarah dan sebagainya.Ungkapan diatas memberi petunjuk, bahwa rumah/ruang balai melambangkan falsafah hidup gotong royong, senasib sepenanggungan dan kesetiakawanan sosial pada masyarakat Melayu,&quot;Adat dijunjung, budaya disanjung&quot;.Rumah Adat Melayu juga berfungsi sebagai tempat musyawarah Majelis Adat Budaya Melayu (MABM) yang berperan dalam menyelenggarakan berbagi event budaya Melayu di Kalbar, satu diantaranya adalah Festival Seni Budaya Melayu. Seni arsitektur dan tipologi rumah tradisional Melayu adalah rumah panggung atau berkolong, dan memiliki tiang-tiang tinggi.Hal ini sesuai dengan iklim setempat serta kebiasaan yang sudah turun menurun.Tinggi tiang penyangga rumah sekitar dua sampai dengan dua setengah meter. Suasana didalam ruangan sejuk dan segarkarena banyak memiliki jendela serta lubang angin (ventilasi). Berdasarkan bentuk atapnya, Rumah Adat Melayu Kalbar memiliki bentuk atap lipat kajang (rumah dengan atap curam) yang berbentuk segitiga dengan tinggi kira-kira 30 derajat, memiliki fungsi untuk menyaring udara panas agar tidak terperangkap di dalam ruangan rumah tersebut. Posisi bangunan ini tegak lurus menghadap jalan raya yang disebut dengan Rumah Perabung Melintang.Selain itu di bagian bawah terdapat kolong yang cukup tinggi.Khusus untuk ornamen bangunan ini merupakan perpaduan dari ornamen-ornamen dari keraton-keraton yang ada di Kalimantan Barat. Keindahan kawasan Rumah Adat Melayu semakin elok dengan adanya taman yang dihiasi dengan bunga yang tertata rapi. Tak sebatas itu saja, bangunan ini dihiasi dengan adanya air mancur yang indah dan bersih. (sumber : pontinesia.com)</p>', '15693800862.jpg', '<p>https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8170334584142!2d109.31861811415209!3d-0.046018335542045444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d590fbbadc72d%3A0x995b3597f75b1ce2!2sRumah+Adat+Melayu!5e0!3m2!1sen!2sid!4v1530360541857</p>', '2018-06-30 05:09:40', '2019-09-25 02:54:46'),
(5, 'Rumah Adat Radakng Dayak', 'rumah-adat-radakng-dayak', '15304180851.jpg', 'Rumah Radank adalah sebutan untuk rumah panjang suku Dayak Kanayatn di provinsi Kalimantan Barat.\r\nDi Kalimantan Barat mulai dari Kota Pontianak dapat kita jumpai replika rumah adat Dayak. Salah satunya berada di jalan Letjen Sutoyo. Walaupun hanya sebuah Imitasi, tetapi rumah Betang ini, cukup aktif dalam menampung aktivitas kaum muda dan sanggar seni Dayak. kemudian jika kita ke Arah Kabupaten Landak, maka kita akan menjumpai sebuah Rumah Betang Dayak di Kampung Sahapm Kec. Pahauman. Kemudian jika kita ke Kabupaten Sanggau, maka kita dapat melihat Rumah Betang di kampung Kopar Kecamatan Parindu, Kemudian selanjutnya jika kita ke kabupaten Sekadau, maka kita dapat melihat rumah betang di Kampung Sungai Antu Hulu, Kecamatan Belitang Hulu, Kemudian di kabupaten Sintang kita Dapat melihat rumah Betang di Desa Ensaid panjang, Kecamatan Kelam, Kemudian Di Kapuas Hulu, Kita juga dapat melihat Masih banyak rumah-rumah betang Dayak yang masih lestari.\r\n\r\n(sumber : id.wikipedia.org)', '15304180852.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8169478854247!2d109.31699371415215!3d-0.04752373554106774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d590e266b7c1b%3A0x2a54516a1a09626b!2sRumah+Adat+Radakng+Dayak+Kalimantan+Barat!5e0!3m2!1sen!2sid!4v1530418071653', '2018-06-30 21:08:05', '2018-07-17 06:49:55'),
(6, 'Pelabuhan Senghie', 'pelabuhan-senghie', '15304183041.jpg', 'Pelabuhan ini merupakan pelabuhan rakyat pertama dan tertua yang berada di Kota Pontianak. Letaknya sangat strategis berhadapan dengan Sungai Kapuas dan dibelakangnya dekat dengan jalan Tanjungpura.\r\nNama pelabuhan ini di ambil dari seseorang pengusaha keturunan Cina bernama Than Seng Hie. Ia merupakan  pengusaha besar di bidang hasil bumi. Pada beberapa dekade ia membuka usaha di sekitar daerah ini. Namun disekitar tahun 1930-an usaha yang dibangunnya mengalami kemunduran. Sehingga ia terpaksa menjual tanahnya kepada pihak keuskupan, yang diperkirakan pada masa kepemimpinan Uskup Mosieur Pasisficus Bosch.\r\nPelabuhan Seng Hie ini memang tempat bongkat muat kapal-kapal barang. Ikan asin itu salah satu barang dagangan utama di sini. Makanya baunya tercium ke mana-mana. Berkarung-karung ikan asin, dikirim dari berbagai tempat di pelosok Kalimantan Barat. Selain ikan asin, ikan basah, sawit, dan karet juga biasa terlihat di seputaran Seng Hie.\r\nSelain kapal barang, banyak juga kapal penumpang yang merapat di sini. Ada yang rutenya jauh, sedang, dan dekat. Yang jauh itu contohnya Pontianak-Pulau Maya. Waktu tempuhnya kira-kira 12 jam. Kapal jarak jauh seperti ini, biasanya hanya jalan 1 minggu 2 kali saja.\r\nKalau kapal kecil jarak dekat atau klotok, jalan setiap saat. Rutenya hanya menyeberangi sungai Kapuas dari Seng Hie ke daerah Keraton Kadriah dan Mesjid Sultan Syarief Abdurrahman, Pontianak. Ongkosnya seribu rupiah saja. Satu klotok bisa mengangkut 10 penumpang.\r\n\r\n(sumber : wisatapontianak.com)', '15304183042.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8178111951634!2d109.34378831415206!3d-0.02894563555346143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d584efbe00199%3A0x9aa641086f2de072!2zUGVsYWJ1aGFuIFNlbmcgSGllIOaIkOWWnOa4rw!5e0!3m2!1sen!2sid!4v1530418292525', '2018-06-30 21:11:44', '2018-07-17 06:48:26'),
(7, 'Mesjid Jami\'', 'mesjid-jami', '15317975051.jpeg', 'Masjid Jami\' Pontianak atau dikenal juga dengan nama Masjid Sultan Syarif Abdurrahman adalah masjid tertua dan terbesar di Kota Pontianak, Provinsi Kalimantan Barat, Indonesia.Masjid ini merupakan satu dari dua bangunan yang menjadi pertanda berdirinya Kota Pontianak pada 1771 Masehi, selain Keraton Kadriyah.\r\n\r\nPendiri masjid sekaligus pendiri Kota Pontianak adalah Syarif Abdurrahman Alkadrie. Ia seorang keturunan Arab, anak Al Habib Husein, seorang penyebar agama Islam dari Jawa. Al Habib Husein datang ke Kerajaan Matan pada 1733 Masehi. Al Habib Husein menikah dengan putri Raja Matan (kini Kabupaten Ketapang) Sultan Kamaludin, bernama Nyai Tua. Dari pernikahan itu lahirlah Syarif Abdurrahman Alkadrie, yang meneruskan jejak ayahnya menyiarkan agama Islam.\r\n\r\nSyarif Abdurrahman melakukan perjalanan dari Mempawah dengan menyusuri sungai Kapuas. Ikut dalam rombongannya sejumlah orang yang menumpang 14 perahu. Rombongan Abdurrahman sampai di muara persimpangan Sungai Kapuas dan Sungai Landak pada 23 Oktober 1771. Kemudian mereka membuka dan menebas hutan di dekat muara itu untuk dijadikan daerah permukiman baru. Abdurrahman mendirikan sebuah kerajaan baru Pontianak. Ia pun membangun masjid dan istana untuk sultan.\r\n\r\nMasjid yang dibangun aslinya beratap rumbia dan konstruksinya dari kayu. Syarif Abdurrahman meninggal pada 1808 Masehi. Ia memiliki putera bernama Syarif Usman. Saat ayahnya meninggal, Syarif Usman masih berusia kanak-kanak, sehingga belum bisa meneruskan pemerintahan almarhum ayahnya. Maka pemerintahan sementara dipegang adik Syarif Abdurrahman, bernama Syarif Kasim. Setelah Syarif Usman dewasa, dia menggantikan pamannya sebagai Sultan Pontianak, pada 1822 sampai dengan 1855 Masehi. Pembangunan masjid kemudian dilanjutkan Syarif Usman, dan dinamakan sebagai Masjid Abdurrahman, sebagai penghormatan dan untuk mengenang jasa-jasa ayahnya.\r\n\r\nBeberapa ulama terkenal pernah mengajarkan agama Islam di masjid Jami\' Sultan Abdurrahman. Mereka di antaranya Muhammad al-Kadri, Habib Abdullah Zawawi, Syekh Zawawi, Syekh Madani, H. Ismail Jabbar, dan H. Ismail Kelantan.\r\n\r\nMasjid Jami\' Pontianak dapat menampung sekitar 1.500 jamaah salat. Masjid akan penuh terisi jamaah salat, saat waktu salat Jumat dan tarawih Ramadan. Pada sisi kiri pintu masuk masjid, terdapat pasar ikan tradisional. Di belakangnya merupakan permukiman padat penduduk Kampung Beting, kelurahan Dalam Bugis dan di bagian depan masjid, yang juga menghadap ke barat, terbentang Sungai Kapuas.\r\n\r\n(sumber : id.wikipedia.org)', '15317975052.jpg', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3989.8178702846208!2d109.3467956!3d-0.0272142!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d584f5a3bb62f%3A0xe5b9581a0a811153!2sJami\'+Mosque+Kadriyah+Palace!5e0!3m2!1sen!2sid!4v1531801158357', '2018-07-17 07:18:25', '2018-07-17 08:54:29'),
(8, 'Museum Kalbar', 'museum-kalbar', '15317977141.jpeg', 'Museum Provinsi Kalimantan Barat adalah sebuah museum yang berlokasi di Jalan Jenederal Achmad Yani, Kota Pontianak Provinsi Kalimantan Timur. Museum ini menyimpan berbagai benda-benda bernilai historis yang ada di Provinsi Kalimantan Barat salah satunya peninggalan-peninggalan sejarah dari peradaban beberapa jenis suku bangsa yang ada di Kalimantan Barat, yaitu: Suku Melayu, Suku Dayak, dan Suku Tionghoa. Jam kunjungan museum ini yaitu pada hari Selasa-Minggu 08.00-14.00, Jumat 08.00-11.00 dan 12.30-14.00. Sedangkan Hari Senin dan libur nasional tutup.\r\nMuseum Provinsi Kalimantan Barat dirintis sejak tahun 1974 oleh Kantor Wilayah Depdikbud Provinsi Kalimantan Barat melalui Proyek Rehabilitasi dan Perluasan Permuseuman Kalimantan Barat. Fungsionalisasinya diresmikan pada tanggal 4 Oktober 1983 oleh Direktur Jenderal Kebudayaan Depdikbud, sejak itu Museum Provinsi Kalimantan Barat dibuka untuk umum. Luas tanah museum ini ± 3905 meter persegi, sedangkan luas lahan keseluruhan ± 28.167 meter persegi.\r\nKoleksi di museumm ini terbagi menjadi tiga ruangan yaitu: Ruang Pengenalan terdapat tujuh jenis koleksi yaitu:\r\n\r\nKoleksi Geografika/Geologika berupa peta dan jenis batu-batuan.\r\nKoleksi Biologika berupa tengkorak atau rangka manusia, tumbuhan, dan binatang.\r\nKoleksi Arkeologika berupa benda yang merupakan hasil peninggalan budaya sejak masuknya budaya Barat seperti kapak perimbas (masa paleolitik), serpih dan mata panah (masa mesolitik), beliung, kapak persegi dan gerabah (masa neolitik), manik-manik, nekara (masa perundagian).\r\nKoleksi Historika, benda-benda ini pernah digunakan untuk hal-hal yang berhubungan dengan suatu peristiwa sejarah seperti negara, tokoh, dan kelompok yakni berupa Pakaian Sultan Pontianak, Pistol VOC, dll.\r\nKoleksi Numismatika berupa mata uang.\r\nKoleksi Heraldika berupa tanda jasa, mata uang, pangkat resmi, dan cap/stempel.\r\nRuang Budaya Kalimantan Barat, meliputi tujuh unsur kebudayaan: religi dan upacara kebudayaan, mata pencaharian hidup, organisasi kemasyarakatan, teknologi dan peralatan, pengetahuan, kesenian, bahasa.\r\n\r\nRuang Keramik, terdapat jenis koleksi yaitu jenis koleksi keramologika berupa tempayan, piring, mangkuk, sendok, dll. yang berasal dari China, Vietnam, Jepang, Eropa, dan keramik lokal Singkawang.\r\n\r\nSelain di tiga ruangan tersebut, juga terdapat berbagai macam koleksi di halaman belakang diantaranya: angkar kapal dagang asing, Miniatur Rumah Lanting, Miniatur lumbung padi/dangau, Miniatur Perahu Lancang Kuning, Miniatur Tungku Naga, Miniatur rumah kopra, Press karet, Replika Batu Pahit, Gazebo, dll.\r\n\r\n(sumber : id.wikipedia.org)', '15317977142.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8168933399843!2d109.34053431521275!3d-0.048458899964632096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59bcaaa2a73b%3A0x1036720635a69b5f!2sMuseum+of+West+Kalimantan!5e0!3m2!1sen!2sid!4v1531807467869', '2018-07-17 07:21:54', '2018-07-17 10:05:43'),
(9, 'Masjid Mujahiddin', 'masjid-mujahiddin', '15317982251.jpeg', 'Masjid Raya Mujahidin, yang berdiri megah di pusat Kota Pontianak sejak tahun 1978 ini, telah memasuki tahap akhir renovasi pembangunannya. Hal ini ditandai dengan diresmikannya Masjid terbesar di Kalimantan Barat tersebut oleh Presiden RI, Ir. H. Joko Widodo pada hari Selasa, 20 Januari 2015 (29 Rabiul Awal 1436 H). Peresmian ditandai dengan penandatanganan prasasti. Dalam acara tersebut, Presiden yang didampingi Ibu Negara melakukan peninjauan kesejumlah bagian Masjid Raya Mujahidin. Ikut hadir dalam peresmian tersebut, antara lain: Sekretaris Kabinet (Andi Wijayanto), Wakil Ketua MPR yang juga Ketua Umum Pembangunan (Oesman Sapta Odang), Wakil Ketua MPR (Hidayat Nurwahid), Anggota Dewan Pertimbangan Presiden (Sidharta Danusubroto), Kepala BIN (Maciano Norman), Gubernur Kalimantan Barat (Drs. Cornelis, M.H), Walikota Pontianak (H. Sutarmidji), Jajaran MUSPIDA serta masyarakat umum. Kedatangan Presiden di Kota Pontianak ini juga disambut dengan tradisi tepung tawar, yang merupakan tradisi khas masyarakat Melayu Pontianak.\r\nSejak masa-masa awal pembangunannya, Masjid kebanggaan ummat muslim Kalimantan Barat ini menyimpan histori perjuangan panjang. Dipilihnya nama Mujahidin untuk yayasan dan masjid yang dirintis tersebut, diusulkan oleh Achmad Mawardi Djafar, dengan pemikiran mengabadikan perjuangan kaum muslim dalam kancah kolektif mempersembahkan kemerdekaan Indonesia, khususnya di Kalimantan Barat. Mereka maksudkan, Mujahidin sebagai monumen perjuangan ummat. Para penggagas yayasan Mujahidin sendiri notabene-nya adalah pelaku sejarah di daerah ini, khususnya Achmad Mawardi Djafar dan H.Achmad Manshur Thahir. Setelah menempuh jangka waktu sekitar 30 tahun sejak inisiatif awal pembangunan yang ditandai dengan didirikannya Yayasan Mujahidin, akhirnya terwujudlah Masjid yang menjadi pusat dakwah islam di tengah Kota Pontianak, dengan nama Masjid Raya Mujahidin. Masjid ini diresmikan Presiden RI Soeharto pada 23 Oktober 1978 bersamaan 20 Zulkaidah 1398 bertepatan Hari Jadi ke 207 Kota Pontianak.\r\nTahap renovasi/pemugaran Masjid Raya Mujahidin yang dimulai sejak November tahun 2011 ini juga menyimpan makna perjuangannya. Pembangunan yang diketuai oleh Oesman Sapta Odang tersebut, menonjolkan arsitektur khas Kalimantan Barat dan ikon Pontianak sehingga menjadi daya tarik tersendiri sebagai landmark Islami Kota Khatulistiwa. Masjid Raya Mujahidin dapat menampung hingga 9 ribu jamaah. Bangunan masjid berlantai dua ini memiliki luas 60 meter x 60 meter di atas lahan seluas kurang lebih 4 hektar. Halaman luar masjid pun juga bisa menampung kurang lebih sebanyak 1.600 mobil jamaah yang akan beribadah di Masjid kebanggaan Kota Pontianak dan Kalimantan Barat tersebut. Keberadaan Masjid Raya Mujahidin dengan \"wajahbaru\" ini diharapkan dapat semakin menggiatkan dan mendukung aktivitas ibadah kaum muslim maupun sebagai pusat dakwah dan kajian Islam.\r\n\r\n(sumber : pontinesia.com)', '15317982252.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.817201678165!2d109.33586273074228!3d-0.04290531575636812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59a92b6e607f%3A0x30c73e472a791fdb!2sMasjid+Raya+Mujahidin!5e0!3m2!1sen!2sid!4v1531802983451', '2018-07-17 07:30:25', '2018-07-17 08:52:42'),
(10, 'Taman Ayani Pontianak', 'taman-ayani-pontianak', '15317984761.jpeg', 'Taman Ayani terletak di tengah kota pontianak tepatnya bagian barat laut tugu digulis. Kalau kalian ke Kota Pontianak pasti nemuin tugu yang iconic banget di kota ini, namanya Tugu Digulis atau Tugu Monumen Sebelas Kalimantan Barat atau Bundaran Untan atau Tugu Bambu Runcing, banyak mah nama tugu ini.\r\nTaman Ayani sendiri merupakan sebuah taman yang cukup unik berbentuk jalan setapak dengan luas sekitar 2.000 m2. Sekelilingnya di pagar, sementara di bagian tengahnya ditanami aneka tanaman hias, lapangan basket 3 on 3, skate park, perpustakaan digital dan lapangan catur raksasa yang dilengkapi dengan meja caturnya.\r\nHal menarik yang saya temui disini adalah kalian akan menemukan beberapa figura unik berbentuk kaca yang berisikan informasi yang identik dengan kota pontianak misalnya makanan khas pontianak, bagungan herigtage, daftar nama wali kota pontianak sejak awal berdiri hingga saat ini, ide kreatif ini diusung oleh #KamekPontianak.\r\nLokasinya yang strategis dan mudah diakses, menjadikan tempat ini sebagai tempat kumpul dan nongkrong yang asyik dan aman di kota pontianak baik siang maupun malam hari.\r\n\r\n(sumber : sitimustiani.com)', '15317984762.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8165933350347!2d109.34503361521294!3d-0.05330994996110105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5995d56af257%3A0x9381caac94356dbd!2sAhmad+Yani+Park!5e0!3m2!1sen!2sid!4v1531810513536', '2018-07-17 07:34:36', '2018-07-17 10:58:56'),
(11, 'Vihara Maitreya', 'vihara-maitreya', '15317986841.jpeg', 'Maha Vihara Maitreya terletak jalan Ahmad Yani 2 (Arteri Supadio),  Kabupaten Kubu Raya Kalimantan Barat. Peresmian Vihara Maitreya dilaksanakan meriah dan dihadiri lebih dari 5.000 umat Budha Kalimantan Barat.Berbagai komponen umat Buddha dari Kalimantan Barat hadir tumpah ruah pada evebt sakral tersebut. Tidak ketinggalan tamu dari luar negeri hadir, diantaranya Dubes Taiwan untuk Indonesia dan beberapa tamu luar negeri lainnya.\r\n\r\nKeberadaan Vihara megah tersebut bisa memberikan manfaat yang besar kepada ummat Budha di Kalimantan Barat untuk terus dapat meningkatkan keimanan dan memberikan kontribusi yang baik bagi perkembangan daerah dan Indonesia. Pembangunan gedung vihara Maitreya sudah dilaksanakan sejak tahun 2000 dengan dilakukan pemasangan tiang pertama. Dari pemasangan hingga peresmian, proses pembangunan vihara memakan waktu selama 13 tahun\r\n\r\n(sumber : homestaypontianak.wordpress.com)', '15317986842.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8180351212027!2d109.32698105859066!3d-0.021664693162200332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d58f604b0799b%3A0xc15cbbf4ff538592!2sVihara+Maitreya!5e0!3m2!1sen!2sid!4v1531810324890', '2018-07-17 07:38:04', '2018-07-17 10:52:30'),
(12, 'Tugu Khatulistiwa', 'tugu-khatulistiwa', '15317989581.jpeg', 'Tugu Khatulistiwa atau Equator Monument berada di Jalan Khatulistiwa, Pontianak Utara, Provinsi Kalimantan Barat. Lokasinya berada sekitar 3 km dari pusat Kota Pontianak, ke arah kota Mempawah.\r\nTugu ini menjadi salah satu ikon wisata Kota Pontianak dan selalu dikunjungi masyarakat, khususnya wisatawan yang datang ke Kota Pontianak.\r\nSejarah mengenai pembangunan tugu ini dapat dibaca pada catatan yang terdapat di dalam gedung.\r\nDalam catatan tersebut disebutkan bahwa : Berdasarkan catatan yang diperoleh pada tahun 1941 dari V. en. W oleh Opzichter Wiese dikutip dari Bijdragen tot de geographie dari Chef Van den topographischen dienst in Nederlandsch- Indië : Den 31 sten Maart 1928 telah datang di Pontianak satu ekspedisi Internasional yang dipimpin oleh seorang ahli Geografi berkebangsaan Belanda untuk menentukan titik/tonggak garis equator di kota Pontianak dengan konstruksi sebagai berikut :\r\na. Tugu pertama dibangun tahun 1928 berbentuk tonggak dengan anak panah.\r\nb. Tahun 1930 disempurnakan, berbentuk tonggak dengan lingkarang dan anak panah.\r\nc. Tahun 1938 dibangun kembali dengan penyempurnaan oleh opzicter / architech Silaban. Tugu asli tersebut dapat dilihat pada bagian dalam.\r\nd. Tahun tahun 1990, kembali Tugu Khatulistiwa tersebut direnovasi dengan pembuatan kubah untuk melindungi tugu asli serta pembuatan duplikat tugu dengan ukuran lima kali lebih besar dari tugu yang aslinya. Peresmiannya pada tanggal 21 September 1991.\r\n\r\nPeristiwa penting dan menakjubkan di sekitar Tugu Khatulistiwa adalah saat terjadinya titik kulminasi matahari, yakni fenomena alam ketika Matahari tepat berada di garis khatulistiwa. Pada saat itu posisi matahari akan tepat berada di atas kepala sehingga menghilangkan semua bayangan benda-benda dipermukaan bumi. Pada peristiwa kulminasi tersebut, bayangan tugu akan \"menghilang\" beberapa detik saat diterpa sinar Matahari. Demikian juga dengan bayangan benda-benda lain di sekitar tugu.\r\nPeristiwa titik kulminasi Matahari itu terjadi setahun dua kali, yakni antara tanggal 21-23 Maret dan 21-23 September. Peristiwa alam ini menjadi event tahunan kota Pontianak yang menarik kedatangan wisatawan.\r\n\r\n(sumber : id.wikipedia.org)', '15317989582.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8183197360727!2d109.32001651521284!3d0.0009994999992829722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320757fffe278079%3A0xc4c573474b7e5dc!2sThe+Equator+Monument+Museum!5e0!3m2!1sen!2sid!4v1531810035384', '2018-07-17 07:42:38', '2018-07-17 10:47:39'),
(13, 'Makam Batulayang', 'makam-batulayang', '15317991041.jpeg', 'Makam Kesultanan Pontianak di Batu Layang merupakan aset ketiga warisan Kesultanan Pontianak sesudah Istana Kadriah dan Mesjid Sultan Abdurrahman. Konon ketiga lokasi ini mempunyai letak dengan garis lurus dari istana, mesjid dan makam dari arah timur ke barat. Komplek pemakaman ini khusus bagi para Sultan Pontianak dan keluarganya dan bukan untuk umum. \r\nTerletak dipinggir sungai Kapuas, pada masa dahulu makam ini hanya dapat dicapai dengan perahu melalui sungai. Kini makam itupun dapat dikunjungi melalui jalan darat pada sisi jalan menuju Jungkat, kira kira 200 meter dari jalan raya. Selain ramai dikunjungi para peziarah, banyak pula wisatawan mengunjungi makam ini untuk mengetahui lebih lengkap tentang riwayat para Sultan Pontianak, dengan segala bukti keberadaannya.\r\n\r\nPada awalnya makam ini sebagai makam Sultan Abdurrahman yang wafat pada tahun 1808. Sultan dan kerabatnya telah memilih makam mereka di pinggir sungai Kapuas didaerah Batu Layang. Tidak jelas alasan yang kuat mengapa dipilih tempat pemakaman para Sultan itu dipinggir sungai Kapuas. Kebiasaan raja-raja Jawa atau Sumatera membuat tempat pemakaman disuatu bukit atau disekitar mesjid. Mungkin Sultan Syarif Abdurrahman mempunyai makna khusus yang bernilai sejarah baginya. Pada awal kedatangannya menelusuri muara sungai Kapuas tahun 1771, ia menemukan sebuah pulau ditengah sungai yang kemudian disebut pulau Batu Layang. Ketika ia berhenti di pulau itu, disinilah ia mulai diganggu oleh para “hantu” (Kuntilanak atau Pontianak) menurut dongeng. Tetapi sesungguhnya ia telah diganggu oleh para bajak laut dan perompak yang menghalangi perjalannya memasuki muara sungai Kapuas. Lima malam lamanya ia melawan dan menembaki para bajak laut itu dan akhirnya ia berhasil mengalahkan para bajak laut dan mendarat ditempat dimana kemudian ia mendirikan kerajaan Pontianak. Ditempat awal dimana ia berhasil menghalau gangguan musuhnya bajak laut ditempat bersejarah itu pulalah ia ingin dimakamkan yaitu di komplek Batu Layang.\r\nMengapa di sebut “Batu Layang” belum di dapat keterangan yang jelas. Mungkin waktu Syarif Abdurrahman diganggu perompak ada batu yang dilepar melayang ke perahunya. Di depan Batu Layang terdapat sekelompok batu warna kuning yang konon selalu tumbuh dan menjadi besar.\r\nSampai sekarang kedelapan Sultan Pontianak dimakamkan di Batu Layang. Begitupun beberapa keluarganya, yaitu isteri, anak dan cucunya.\r\n\r\n(sumber : wisatapontianak.com)', '15317991042.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4545754221981!2d109.30057211029029!3d0.005540528702215496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e2a75c82dba8cb%3A0x3e039658a939a17f!2sThe+tomb+of+the+Pontianak+Sultanate+Batulayang!5e0!3m2!1sen!2sid!4v1531802861509', '2018-07-17 07:45:04', '2018-07-17 08:48:12'),
(14, 'Taman Alun-alun Kapuas', 'taman-alun-alun-kapuas', '15317993111.jpeg', 'Taman Alun Kapuas merupakan salah satu lokasi wisata di kota Pontianak Provinsi Kalimantan Barat. Tata letaknya di tengah kota menjadikan Taman Alun Kapuas bisa dikunjungi dari arah mana saja, maka wajar saja jika hampir setiap harinya lokasi ini ramai dikunjungi oleh masyarakat yang datang bersama keluarga dan sesekali tampak wisatawan asing datang ke tempat ini. Taman yang merupakan salah satu proyek ‘Waterfront City’ dari Pemerintah Kota Pontianak, dan sering disebut dengan nama Taman Alun-alun Kapuas itu sendiri terletak di Pinggiran Sungai Kapuas, Pontianak, tepatnya berada di depan kantor wali kota Pontianak yakni di sekitaran Jalan Rahadi Usman.\r\n\r\nTaman ini sudah ada sejak puluhan tahun yang lalu, dan sejak pertama kali di bangun hingga sekarang, Taman Alun-Alun Kapuas ini tetap menjadi ikon dari Kota Pontianak itu sendiri. Taman Alun-Alun Kapuas ini telah beberapa kali di renovasi, Pembangunan yang pertama telah dilakukan sekitar tahun 1999-an, lalu renovasi taman yang kedua dilakuan pada tahun 2011, dan pada tahun 2012 inipun Pemerintah kota Pontianak sedang melakukan Proyek renovasi yang ketiga, menurut dia renovasi kali ini untuk memperluas daerah Taman Alun-Alun Kapuas, menambah beberapa air mancur lagi, serta membangun beberapa sarana dan prasarana untuk para pengunjung, hal ini bertujuan agar taman ini Semakin di kagumi para wisatawan, terutama wisatawan mancanegara. Saat ini luas dari Taman Alun-alun Kapuas, sudah mencapai kurang lebih sekitar tiga hektar, angka tersebut sudah dua kali lipat dari luas Taman sebelumnya yang hanya berkisar kurang lebih 1,5 hektar. Masyarakat kota Pontianak juga berharap agar proyek perluasan dan pembenahan Taman Alun-Alun Kapuas ini bisa selesai di akhir tahun 2012 ini atau pada awal 2013 nanti. Sedangkan lahan yang digunakan untuk meluaskan areal Taman Alun-Alun Kapuas ini adalah lahan bekas Balai Prajurit milik Komando Daerah Militer ( Kodam ) XII Tanjungpura.\r\n\r\n(sumber : id.wikipedia.org)', '15317993112.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.818037863313!2d109.33721351521284!3d-0.021560299984265934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d585c7cf1f73b%3A0x9ddf471c6103e958!2sAlun+Alun+Kapuas!5e0!3m2!1sen!2sid!4v1531807660538', '2018-07-17 07:48:31', '2018-07-17 10:08:00'),
(15, 'Taman Tugu Digulist', 'taman-tugu-digulist', '15323149531.jpeg', 'Monumen Sebelas Digulis Kalimantan Barat, disebut juga sebagai Tugu Digulis atau Tugu Bambu Runcing atau Tugu Bundaran Untan oleh warga setempat, merupakan sebuah monumen yang terletak di Bundaran Universitas Tanjungpura, Jalan Jend. Ahmad Yani, Kelurahan Bansir Laut, Kecamatan Pontianak Tenggara, Kota Pontianak.\r\nMonumen yang diresmikan oleh Gubernur Kalimantan Barat H. Soedjiman pada 10 November 1987 ini pada awalnya berbentuk sebelas tonggak menyerupai bambu runcing yang berwarna kuning polos. Pada tahun 1995, monumen ini dicat ulang dengan warna merah-putih. Penggunaan warna merah-putih ini menjadikan sebagian warga menganggap monumen ini lebih mirip lipstik daripada bambu runcing. Kemudian, pada tahun 2006 dilakukan renovasi pada monumen ini sehingga berbentuk lebih mirip bambu runcing seperti penampakan saat ini.\r\n\r\nMonumen ini didirikan sebagai peringatan atas perjuangan sebelas tokoh Sarekat Islam di Kalimantan Barat, yang dibuang ke Boven Digoel, Irian Barat karena khawatir pergerakan mereka akan memicu pemberontakan terhadap pemerintah Hindia Belanda di Kalimantan. Tiga dari sebelas tokoh tersebut meninggal pada saat pembuangan di Boven Digoel dan lima di antaranya wafat dalam Peristiwa Mandor. Nama-nama kesebelas tokoh tersebut kini diabadikan juga sebagai nama jalan di Kota Pontianak. Kesebelas pejuang itu antara lain:\r\n\r\nAchmad Marzuki, asal Pontianak, meninggal karena sakit dan dimakamkan di makam keluarga;\r\nAchmad Su\'ud bin Bilal Achmad, asal Ngabang, wafat dalam Peristiwa Mandor;\r\nGusti Djohan Idrus, asal Ngabang, wafat dalam pembuangan di Boven Digoel;\r\nGusti Hamzah, asal Ketapang, wafat dalam Peristiwa Mandor;\r\nGusti Moehammad Situt Machmud, asal gabang, wafat dalam Peristiwa Mandor;\r\nGusti Soeloeng Lelanang, asal Ngabang, wafat dalam Peristiwa Mandor;\r\nJeranding Sari Sawang Amasundin alias Jeranding Abdurrahman, asal Melapi, Kapuas Hulu, meninggal karena sakit di Putussibau.\r\nHaji Rais bin H. Abdurahman, asal Banjarmasin, wafat dalam Peristiwa Mandor;\r\nMoehammad Hambal alias Bung Tambal, asal Ngabang, wafat dalam pembuangan di Boven Digoel;\r\nMoehammad Sohor, asal Ngabang, wafat dalam pembuangan di Boven Digoel; dan\r\nYa\' Moehammad Sabran, asal Ngabang, meninggal karena sakit.', '15323149532.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8164651616357!2d109.34784351521283!3d-0.05525279995967947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d599435f3b5cd%3A0xddb5fe1c620b9903!2sTaman+DIGULIS!5e0!3m2!1sen!2sid!4v1532315339503', '2018-07-23 07:02:33', '2018-08-04 06:18:15'),
(16, 'Jogging Track UNTAN', 'jogging-track-untan', '15323152721.jpeg', 'Jogging Track yang berlokasi di kawasan Universitas Tanjungpura (UNTAN), tepatnya di belakang Kantin Yusra dan berbatasan dengan Pengadilan Tinggi KALBAR, telah diresmikan oleh Walikota Pontianak, Sutarmidji pada hari Sabtu (7/2/2015). Bang Midji, begitu panggilan akrab Pak Walikota, menyatakan bahwa sesuai dengan rencana tata ruang Pemkot Pontianak, maka akan terus diupayakan perbanyakan ruang terbuka hijau.\r\nKedepannya, Pemkot Pontianak juga berencana membangun taman bermain anak, taman BMX, skateboard dan fasilitas terapi untuk pejalan kaki. Dengan balutan taman di padu pohon-pohon rindang yang telah ada di sepanjang kawasan Kampus Khatulistiwa tersebut, membuat area Jogging Track sepanjang 800 meter ini menjadi daya tarik tersendiri dengan keasrian dan nuansa segarnya.\r\nSelain teduh, tempat ini juga tidak dilalui kendaraan bermotor. Suasana ini akan membuat masyarakat nyaman dalam menikmati taman kota atau melakukan aktivitas olahraga, baik pada pagi maupun sore hari. Pemkot Pontianak mengajak agar masyarakat dapat memanfaatkan public space ini dengan baik dan bijak dengan turut serta bersama menjaga kebersihan dan keindahan area Jogging Track.', '15323152722.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8164651616357!2d109.34784351521283!3d-0.05525279995967947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d599435f3b5cd%3A0xddb5fe1c620b9903!2sTaman+DIGULIS!5e0!3m2!1sen!2sid!4v1532315339503', '2018-07-23 07:07:52', '2018-08-04 06:22:18'),
(17, 'Taman Arboretum Sylva UNTAN', 'taman-arboretum-sylva-untan', '15323153591.jpeg', 'Hutan Kota (Arboretum Sylva Untan) merupakan kebun koleksi tanaman dan pepohonan khusus Kalimantan Barat sebagai tempat keanekaragaman hayati, pengembangan pendidikan, pengembangan hutan kota, serta sarana rekreasi dan hiburan masyarakat. Arboretum merupakan kabun koleksi tanaman dan pepohonan khusus Kalimantan Barat sebagai tempat pelestarian keanekaragaman hayati, pengembangan pendidikan, pegembangan hutan kota serta sarana rekreasi dan hiburan masyarakat.\r\nArboretum sylva untan merupakan kawasan pelestarian plasma nutfah Kalimantan Barat. Maksud pengelolaan arboretum ini adalah untuk pengoleksian, perlindungan dan pelestarian flora dan fauna Kalimantan Barat. Sedangkan tujuannya adalah sebagai tempat pengembangan keanekaragaman hayati, tempat pengembangan pendidikan, pengembangan hutan kota serta sarana rekreasi dan hiburan bagi masyarakat. Memang, sebelum dikelola secara baik kawasan arboretum merupakan areal percontohaan antara Departemen Perindustrian Dan Pertanian yang ditanami ubi dan jagung. Karena kurangnya pengelolaan terhadap kawasan tersebut, tanaman ubi dan jagung terbengkalai dan akhirnya ditumbuhi rumput dan alang-alang.\r\nTaman kota dengan luas kawasan sekitar 3,2 hektar ini terletak di kawasan Universitas Tanjungpura, Jalan Jendral Ahmad Yani Pontianak. Memiliki 190 jenis pohon, 86 anggrek, 176 perdu dan tumbuhan bawah, 12 jenis mamalia, 32 jenis bururng, 14 jenis hertofauna dan 35 jenis serangga. Suasana sejuk begitu terasa saat memasuki hutan mini di Kawasan Arboretum Sylva Untan. Pepohonan yang berderet di pinggir itu menyambut siapa saja yang singgah di kawasan tersebut. Dari jalan Ahmad Yani, kesejukan bahkan bisa dirasakan saat menunggu lampu traffic light.', '15323153592.jpeg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816430823582!2d109.3472427152128!3d-0.055761799959313005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59943b171463%3A0xb03977c7ddf2c745!2sTaman+Arboretum+Sylva+Untan!5e0!3m2!1sen!2sid!4v1532315395570', '2018-07-23 07:09:19', '2018-08-04 06:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `rate` tinyint(4) NOT NULL DEFAULT 0,
  `panorama_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `message`, `status`, `rate`, `panorama_id`, `created_at`, `updated_at`) VALUES
(2, 'Hafiz', 'm.hafiz.w@gmail.com', 'Sajaaa mantapp', 1, 5, 1, '2018-10-31 14:28:28', '2018-10-31 14:28:28'),
(3, 'Heru', 'heru@gmail.com', 'XXXX', 1, 5, 17, '2018-12-05 05:14:10', '2018-12-05 05:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Wisata', 'admin@gmail.com', '$2y$12$DdO74JafCbpQB3DmBgDWT.oDB4VTHd3hLJbqNhfxQ1odP.mLZlrba', 'i92NwnAkKTqCxxXKT4TYoS0txTUFwDRdGU2P0GQpoKMHROvkXbJwWe40lpOf', '2018-06-24 18:20:48', '2018-06-24 18:20:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_title_unique` (`title`),
  ADD UNIQUE KEY `events_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panoramas`
--
ALTER TABLE `panoramas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_panorama_id_foreign` (`panorama_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `panoramas`
--
ALTER TABLE `panoramas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_panorama_id_foreign` FOREIGN KEY (`panorama_id`) REFERENCES `panoramas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
