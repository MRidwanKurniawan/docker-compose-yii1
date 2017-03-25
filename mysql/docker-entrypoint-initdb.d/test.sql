USE `test`;

CREATE TABLE IF NOT EXISTS `kota` (
`id` int(11) NOT NULL,
  `propinsi_id` int(11) NOT NULL,
  `nama_kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `propinsi_id`, `nama_kota`) VALUES
(1, 1, 'Kodya Jogja'),
(2, 2, 'Kodya Solo'),
(3, 1, 'Bantul'),
(4, 1, 'Kulon Progo'),
(5, 2, 'Klaten'),
(6, 2, 'Magelang'),
(8, 2, 'Boyolali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`nim` int(9) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `agama` char(1) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `foto` varchar(15) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `password`, `foto`, `email`) VALUES
(12, 'saryoto', 'L', '1', 'Yogyakarta', '1994-09-05', 'gunung kidul', '12345', 'chealse.PNG', 'saryoto@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `propinsi`
--

CREATE TABLE IF NOT EXISTS `propinsi` (
`id` int(11) NOT NULL,
  `propinsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `propinsi`
--

INSERT INTO `propinsi` (`id`, `propinsi`) VALUES
(1, 'DIY'),
(2, 'Jawa Tengah'),
(4, 'Jawa Barat'),
(5, 'Banten'),
(6, 'Bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE IF NOT EXISTS `tbl_pegawai` (
  `nip` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`nip`, `nama`, `alamat`, `tanggal_lahir`, `agama`) VALUES
(10580004, 'Andika N.C', 'Krakitan, Bayat, Klaten', '1993-10-02', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `aktive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `email`, `level`, `aktive`) VALUES
(1, 'Five', 'Five', '8cbad96aced40b3838dd9f07f6ef5772', 'Five@akakom.ac.id', 1, 1),
(2, 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@hol.com', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_kota` (`propinsi_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `propinsi`
--
ALTER TABLE `propinsi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
 ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `nim` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `propinsi`
--
ALTER TABLE `propinsi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kota`
--
ALTER TABLE `kota`
ADD CONSTRAINT `FK_kota` FOREIGN KEY (`propinsi_id`) REFERENCES `propinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
