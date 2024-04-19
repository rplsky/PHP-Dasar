-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 15.52
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `hak_akses` enum('Guru','Siswa') NOT NULL,
  `nip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`email`, `password`, `hak_akses`, `nip`) VALUES
('05.05.05rafi@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '103101697'),
('156ridho@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101756'),
('aa', '6228fcd5b58de800fd5798dd4cc5b6ccb233220b', 'Siswa', ''),
('abdulamana27@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202097'),
('adit250806@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101673'),
('agusgblk089@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101744'),
('aidahsalsabil01@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101674'),
('alazizsantoso@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202121'),
('aldayy27@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101675'),
('alifyanmochamadsyahdzanalifyan@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101688'),
('andirapradanaputra@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101676'),
('angkasahsn2021@gmail.com ', '4d9fcd87554439c18397933fef356d4bb6e9ac63', 'Guru', '01041100'),
('anisarisqy802@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101745'),
('apriliaasst@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101746'),
('arnanmuchamad@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101754'),
('arullmuhammadsyahrul82@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101759'),
('arvinkusmardiyana@Gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202063'),
('arymatthewpadang69@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202064'),
('astriansyahsahwa@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101767'),
('audiaafifa@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202065'),
('brilyanfahril01@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202131'),
('choisanakundua@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101762'),
('cikalatifah58@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101677'),
('coba', '6228fcd5b58de800fd5798dd4cc5b6ccb233220b', 'Siswa', ''),
('cortezhana082@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101777'),
('danielbawole33@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101747'),
('danisuryaputra12@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202066'),
('destaraditiah.p@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202127'),
('dhania713@gmail.com', '4d9fcd87554439c18397933fef356d4bb6e9ac63', 'Guru', '010420180067'),
('dhardiana29@gmail.com', 'e6a22437d717557a77d84c94524c21ffb52a0257', 'Guru', '6282240991657'),
('dianwiwimus.3@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101748'),
('dsd', '6228fcd5b58de800fd5798dd4cc5b6ccb233220b', 'Siswa', ''),
('ekaramadni9@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202129'),
('ekocandra564@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101749'),
('exsacilikk@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101680'),
('fadillahfajri988@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202068'),
('fathuryp@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202070'),
('fef', '6228fcd5b58de800fd5798dd4cc5b6ccb233220b', 'Siswa', ''),
('fergiefakhirusalam@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202106'),
('firmansyahsahrul621@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101703'),
('fkgaming92@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101751'),
('gemiyana6@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101775'),
('gibranputra256@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202075'),
('hanifdaffa36@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101752'),
('harjonsigalingging17@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101682'),
('ilhamminerva1430@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101684'),
('ilhamvila789@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101683'),
('ilmanwaterzon@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202078'),
('indrasubagja2006@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202079'),
('juliansyahhh.10@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101685'),
('kikithea713@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101686'),
('kumaratioarya@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202093'),
('levypanji06@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202081'),
('luckysnow995@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101681'),
('mahmudayunda4@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202143'),
('mdvsandi7@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101704'),
('messimahesa527@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202101'),
('mfirmansyh12345@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101690'),
('mhmmdjeck7@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202084'),
('miraandini2007@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202144'),
('mmuhammadthubagusali@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101692'),
('muhamadapda776@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101689'),
('muhamadraihan334455@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101691'),
('muhamadriziq0807@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202086'),
('muhamadzidanfazrian@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202085'),
('muhammadzakykalam@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101693'),
('mujahidahnadin@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202173'),
('muthiaraayu.n3@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202115'),
('mycommid01@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101707'),
('nabilahyuthi5@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101694'),
('nabilalfariji1@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202088'),
('nandimhmmd14@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101695'),
('nindyarifa82@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101760'),
('nirakurnia649@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101696'),
('nuryanilinda232@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101753'),
('oktavianisenia@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202187'),
('oohsucisapitri@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101770'),
('pramudyapebrinadp@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101761'),
('purnamaandri246@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101755'),
('putriaprimuliani1704@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101763'),
('pwyreva2502@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202181'),
('rafinurdiansyah597@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101698'),
('rahmanmeipan@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101687'),
('raihancikal123@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202089'),
('rakam4920@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101700'),
('ranggaalvareza09@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202119'),
('ranggiram123@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101764'),
('ratnasari2902@gmail.com', '4d9fcd87554439c18397933fef356d4bb6e9ac63', 'Guru', '0104200507120200'),
('regantsanyr@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101701'),
('rezel578@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101765'),
('rifalsetiawanstn@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202091'),
('rifkinurfadilah284@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101757'),
('risaykorabum@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101776'),
('rivkimaulana27@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202141'),
('rizkimuhamadm12@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101766'),
('rizky.fauzi96@gmail.com', '4d9fcd87554439c18397933fef356d4bb6e9ac63', 'Guru', '01040172'),
('rm590559@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202090'),
('robiyasilyasa@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202123'),
('romoaditia@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202092'),
('rpl.smkangkasalhs@gmail.com', 'bb95d94da0b66d7af0bc4c2449cb784c3df3d437', '', '123'),
('ruliyusufaryanto@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101702'),
('rw91204@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202118'),
('sabilafasya12@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101750'),
('salnafizh@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101768'),
('salsabilakeisha041@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202080'),
('salsabillafitri115@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202124'),
('saptiandandi124@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101678'),
('sarahnazira6132@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101769'),
('sentosagery@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202074'),
('skyptr358@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101705'),
('tasyawahidah665@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101706'),
('tiaranoviayasmin3@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101772'),
('veronicaef17@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101773'),
('virnasantika02@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101708'),
('winanna675@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101774'),
('yabukitia@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101771'),
('yulianarahma1307@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102202125'),
('yunitasafi83@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101778'),
('zahwaputriayu0@gmail.com', '271e9d011d07c91cfb7b8210fa7bd33050ec52ea', 'Siswa', '102101779');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(100) NOT NULL,
  `nama_siswa` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telp`, `kelas`) VALUES
('412312', 'Coba', 'L', 'Bandung', '2024-02-01', 'Coba alamat', '0895645', 'X RPL 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
