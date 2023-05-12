-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2023 at 10:44 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maedonor`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `tanggal`, `status`, `title`, `deskripsi`) VALUES
(3, 'Persyaratan Untuk Donor Darah', 'Dictum nunc egestas integer fringilla platea. Aenean diam ipsum rutrum orci praesent sem. Dis libero nascetur inceptos accumsan praesent tortor scelerisque. Porttitor lectus a dignissim efficitur pharetra habitasse sagittis magna ante. Eget arcu mollis platea nascetur risus malesuada fames consequat enim ornare ante.\r\n\r\nOrnare porta sed nostra sagittis malesuada habitasse morbi velit dictumst aenean donec. Vestibulum convallis aliquam at lorem augue nam. Bibendum praesent augue fringilla egestas felis nunc ad finibus habitant vivamus. Et praesent efficitur placerat interdum purus erat fames in. Morbi parturient fames dictum aliquet nascetur dui letius curabitur hac. Curae sem pretium maximus duis hendrerit egestas.\r\n\r\nProin ante primis finibus ad cursus turpis est dignissim dolor. Vitae mattis letius enim vulputate leo lorem curabitur sem et vivamus libero. Eu pretium metus semper lobortis purus sagittis maximus. Habitasse interdum enim viverra justo vivamus magnis placerat aenean metus. Orci fermentum nullam integer commodo mollis sapien sit. Rhoncus duis sit erat tempor risus. Taciti sociosqu auctor cubilia gravida euismod. Integer lobortis pharetra tristique nisl mattis dictumst felis dis vestibulum faucibus habitant.\r\n\r\nQuis dictum tempor amet quam curabitur. Vulputate erat si iaculis sem sociosqu curabitur. Praesent ipsum cras faucibus facilisis dictumst consequat mi. Taciti vestibulum habitasse mollis tristique mi quam ligula facilisis eu ullamcorper. Hendrerit quisque mollis semper rutrum pede lectus nascetur.\r\n\r\nOrnare magnis amet praesent platea nulla imperdiet efficitur per. Odio pellentesque pulvinar molestie congue nec platea magnis velit at in. Potenti felis rutrum fames aliquam netus malesuada aliquet fermentum. Ultricies magna parturient pellentesque sem rhoncus pulvinar nullam. Consectetur venenatis pretium natoque mauris elementum consequat ipsum curabitur class magna. Eget sapien cras velit porttitor maximus lorem molestie eleifend erat interdum tempor. Elementum mollis non porttitor placerat lacus phasellus.\r\n\r\nLeo curae natoque tincidunt neque sodales laoreet ad magna dis nec quisque. Congue vitae fringilla tempus maximus morbi aliquam. Vivamus erat nostra non eros hendrerit enim felis. Enim venenatis maecenas sodales fusce lobortis elementum vivamus nam. Letius aliquet sed egestas quam leo aliquam platea quis dis litora.\r\n\r\nIaculis consectetuer sodales rutrum ultrices nullam netus. Pulvinar sem lacus lobortis vestibulum dapibus torquent. Nibh rutrum lectus convallis ultricies senectus placerat. Ultrices pede nostra faucibus purus class vivamus nascetur hendrerit cursus. Inceptos nec at hendrerit scelerisque nascetur massa commodo ut.\r\n\r\nVenenatis nisi fermentum dolor lacinia eros et convallis tincidunt feugiat duis nulla. Blandit efficitur phasellus aliquet justo suspendisse dignissim nulla ligula primis. Viverra elementum penatibus pretium quis platea. Phasellus vel arcu pellentesque placerat nostra himenaeos.\r\n\r\nMassa placerat commodo consectetuer pulvinar a malesuada ad. Litora felis duis adipiscing netus per massa morbi dictum. Dapibus blandit tortor suspendisse morbi enim ac nostra tempor. Rhoncus ultricies ultrices pellentesque molestie sapien per. Tempus eu ridiculus duis purus pellentesque dapibus. Habitant neque turpis ultricies laoreet nisl aenean facilisis. Sed quam lectus imperdiet dignissim nec dictumst nunc.\r\n\r\nFringilla metus dapibus placerat maximus interdum. Habitasse magnis ultrices scelerisque pellentesque efficitur enim penatibus at tortor in. Tempus neque adipiscing eget etiam condimentum. Vitae nec ridiculus lobortis montes eget scelerisque finibus nascetur ac. Consectetuer donec urna natoque vulputate id fusce imperdiet conubia nec curae tempus.', '2023-04-04', '1', 'Persyaratan Untuk Donor Darah', 'Klik dibawah ini untuk mengetahui lebih lagi mengenai persyaratan donor darah'),
(4, 'Ayo bergabung menjadi anggota dds', 'Klik <a href=\"daftar.php\">disini </a> untuk mendaftar', '2023-04-05', '1', 'Ayo bergabung menjadi anggota dds', 'Klik dibawah ini untuk mengetahui lebih lagi mengenai syarat menjadi anggota dds'),
(5, 'Hubungi kami bila mengalami kesulitan', 'Urna dignissim potenti mollis iaculis arcu euismod ex tempor facilisis ac. Luctus nunc litora curabitur id pulvinar. Semper natoque eget elit parturient aptent dapibus adipiscing sagittis lectus efficitur aliquet. Dictumst ac pretium lacinia eros ridiculus accumsan sodales erat adipiscing. Pretium sed tempor vestibulum condimentum justo eu sodales. Mus elit mattis semper maximus sagittis eu.\r\n\r\nInceptos suscipit malesuada metus a conubia condimentum finibus tellus. Tristique arcu aliquet at sem elit nibh. Quam senectus mus sociosqu cubilia dui ridiculus. Nunc nullam tempor lectus sollicitudin sit facilisis. Commodo natoque luctus platea efficitur vel sagittis sapien condimentum ad etiam. Rutrum mus massa ligula habitasse ac laoreet si quis lorem donec.\r\n\r\nHabitant ligula porttitor luctus quam venenatis pharetra per faucibus. Viverra cursus tellus luctus non curae taciti ut. Facilisi sagittis molestie cubilia consectetur lacus odio sed. Dis posuere sodales arcu hac vulputate. Odio nostra pretium lorem eget vehicula justo praesent. Vulputate lobortis pulvinar auctor tempor pretium. Non posuere faucibus netus lobortis rhoncus arcu maecenas.\r\n\r\nCras cursus ac cubilia posuere lectus maximus magnis dolor euismod justo tempus. Aptent nam maximus pretium morbi urna tempor maecenas vivamus consectetuer diam. Leo parturient eros ante lectus malesuada luctus sed purus nisl potenti. Euismod ridiculus habitasse enim porta faucibus vestibulum consectetur curabitur porttitor. Odio nulla pulvinar iaculis a morbi in habitant tempor. Senectus auctor venenatis sodales dapibus tristique eros mi. Sollicitudin ultrices congue risus at libero mattis iaculis orci duis auctor.\r\n\r\nAliquet primis euismod est consectetuer vivamus integer vel magna. Gravida leo per sociosqu praesent enim tortor. Laoreet arcu dictum cras gravida pulvinar. Aliquam interdum hendrerit ridiculus etiam augue curae litora nunc pharetra suscipit tortor. Penatibus tristique litora per leo ornare fringilla commodo arcu tincidunt bibendum aptent. Dapibus himenaeos adipiscing est id eget porttitor.\r\n\r\nPede nam interdum bibendum taciti suscipit penatibus dictumst sed facilisis. Nullam ridiculus ante imperdiet maecenas ut tincidunt vulputate. Etiam id a congue nostra molestie pede morbi primis mauris habitant tristique. Proin iaculis fringilla dignissim mauris nibh. Vitae tellus nam venenatis ultrices turpis dictum ridiculus id fringilla sodales taciti. Id ornare suscipit vitae nascetur pretium.\r\n\r\nDapibus arcu aptent ornare lobortis euismod porta pretium. Dignissim ante vestibulum ipsum quisque ornare mattis tellus turpis. Velit eu fringilla natoque pellentesque erat. Sapien torquent rutrum molestie orci consequat arcu. Egestas vivamus ullamcorper leo placerat dis molestie letius sodales.\r\n\r\nNec placerat ad quam montes nostra. Potenti laoreet scelerisque faucibus finibus vehicula. Ornare curabitur convallis sem taciti praesent cubilia lobortis. Luctus phasellus nam nisl venenatis adipiscing tortor non si. Iaculis netus eget rutrum risus pretium libero ut bibendum si. Potenti class enim suspendisse pharetra eget venenatis condimentum.\r\n\r\nLobortis leo ultrices sodales sociosqu accumsan nascetur non semper dolor penatibus augue. Porta vivamus ante diam potenti fames donec euismod sollicitudin ultrices per. Iaculis sem tellus class a id sodales augue senectus mauris convallis parturient. Mattis felis molestie pretium elementum habitant malesuada dui nascetur mauris.\r\n\r\nUt pulvinar tristique vehicula sapien parturient suspendisse quam aenean. A integer elementum torquent vivamus dolor tortor consequat augue donec lorem eget. Rutrum habitasse consectetur lacinia venenatis nostra consectetuer pharetra rhoncus adipiscing. Suspendisse tristique sed lectus taciti augue suscipit consectetur porta ultricies aliquet nam. At quam faucibus augue mi sollicitudin leo taciti ipsum nulla velit.', '2023-04-04', '1', 'Hubungi kami bila mengalami kesulitan', 'Klik dibawah ini untuk mengetahui lebih banyak lagi mengenai kami'),
(6, 'Manfaat Mendonor', 'Aliquet id fringilla volutpat neque iaculis. Ornare ultricies nibh dui dis volutpat. Ante elit non venenatis netus egestas commodo. Rutrum dapibus semper quisque magna in.\r\n\r\nNisl suspendisse est ornare sem volutpat hac ullamcorper. Hendrerit penatibus eget natoque dictum tellus convallis interdum ac donec placerat pulvinar. Curabitur erat cursus condimentum luctus senectus dolor ad dignissim ullamcorper. Mus a luctus turpis pellentesque volutpat pretium praesent. Platea pede euismod ex natoque dolor vestibulum mus suspendisse nascetur sit. Vehicula maecenas inceptos fames viverra proin letius donec. Adipiscing lacus interdum proin facilisi massa dignissim rutrum congue. Purus massa commodo convallis cursus aliquet dictum auctor torquent nullam scelerisque taciti.\r\n\r\nSemper parturient aliquet elit duis consequat eget pharetra netus senectus aenean. Dictum risus donec urna dolor nam adipiscing egestas. Dictum integer ridiculus eros eu et si orci. Nostra ultrices tincidunt integer porta mus. Velit mi imperdiet consectetuer tellus taciti molestie pulvinar per habitasse. Neque senectus consectetuer placerat cras et platea libero tortor iaculis consequat.\r\n\r\nGravida dis elementum sodales duis curae pulvinar vitae mauris quisque lacus. Metus nulla bibendum odio egestas libero lacinia mus aliquam at. Sollicitudin maecenas senectus interdum vivamus nec odio dictum posuere. Hac turpis nibh malesuada luctus bibendum lacinia netus etiam. Placerat elementum quisque ornare venenatis elit vivamus egestas. Cursus purus elementum sodales auctor elit. Lobortis enim eros ullamcorper vulputate amet conubia tristique sodales finibus netus.\r\n\r\nSuscipit rutrum morbi curae nostra ornare augue in lorem. Nulla risus interdum curabitur porta auctor dignissim elementum amet eu arcu. Vestibulum netus tempor viverra habitant purus consequat faucibus iaculis venenatis. Efficitur neque feugiat platea lacus dolor. Maecenas nec habitasse pellentesque commodo sagittis etiam ac elit pede. Dictumst cras vestibulum curabitur aliquam mus nisi eu consequat tortor sed. Magna nulla fermentum rutrum inceptos congue nec ullamcorper scelerisque turpis sociosqu. Efficitur purus molestie ex nec nulla nibh scelerisque conubia.\r\n\r\nNec convallis integer eros per lobortis laoreet sapien neque justo aenean. Netus pretium platea id euismod fringilla dolor cursus. Aliquam blandit inceptos vestibulum consectetur elementum rhoncus magna ante iaculis senectus dui. Porttitor orci mattis fringilla aliquam sed ut congue adipiscing. Maecenas massa himenaeos fringilla pede adipiscing dolor convallis sagittis.\r\n\r\nFelis commodo scelerisque metus vivamus orci consequat maecenas class dictum efficitur. Imperdiet est sollicitudin lacus amet curabitur venenatis enim purus lacinia torquent. Lectus himenaeos quam suscipit blandit eros erat massa odio. Dignissim netus ad platea tempus velit integer. Dolor morbi vivamus bibendum proin non hac maximus congue magna scelerisque.\r\n\r\nLacinia potenti tempor risus turpis egestas facilisis nascetur. Risus orci nunc tincidunt tempus ullamcorper justo lobortis. Netus ridiculus consectetur neque etiam leo laoreet fringilla. Convallis placerat consectetuer lectus arcu potenti. Si nunc nostra ex natoque malesuada lacus sit quam eu feugiat.\r\n\r\nVenenatis accumsan morbi congue pede auctor erat condimentum ad. Pellentesque mauris posuere porta aptent nam volutpat commodo suspendisse vivamus montes in. Nisi commodo volutpat ex sodales a cras laoreet curabitur natoque ipsum primis. Platea nulla litora habitant id augue letius leo.\r\n\r\nFaucibus nec aenean volutpat sem velit ut laoreet habitasse convallis nostra. Natoque scelerisque imperdiet aliquam magnis a sem praesent ultricies turpis morbi. Dictumst vel nulla elementum libero semper ridiculus luctus. Euismod id maecenas accumsan iaculis potenti vivamus. Non congue egestas faucibus vehicula litora.', '2023-04-05', '0', 'Manfaat Donor Darah', 'Klik dibawah untuk membaca lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` longtext NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`id`, `nama`, `alamat`, `tanggal_lahir`, `tempat_lahir`, `status`, `jenis_kelamin`, `golongan_darah`, `riwayat_penyakit`, `no_telp`, `fakultas`) VALUES
(9, 'Marthin A;lfreinsco Salakory', 'Poka', '2001-01-14', 'Wassu', 'Mahasiswa', 'Laki-laki', 'O', 'Asam Lambung', '081318812027', 'Teknik'),
(10, 'fgd', 'dfd', '2023-04-05', 'fgfd', 'Mahasiswa', 'Laki-laki', 'A', 'ersdfdf', '5665446', 'Ekonomi dan Bisnis'),
(11, 'tes', 'tes', '2023-04-05', 'tes', 'Mahasiswa', 'Laki-laki', 'B', 'tes', '312', 'Kedokteran'),
(12, 'tes', 'tes', '2023-05-05', 'tes', 'Pegawai', 'Laki-laki', 'A', 'tes', '081318812027', 'Keguruan dan Ilmu Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `role`) VALUES
(2, 'Fakultas Teknik', 'fatek', 'fatek', '1'),
(3, 'Fakultas Kedokteran', 'kedokteran', 'kedokteran', '2');

-- --------------------------------------------------------

--
-- Table structure for table `permohonan`
--

CREATE TABLE `permohonan` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `rumah_sakit` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `kuota` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT '1',
  `nama_wali` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permohonan`
--

INSERT INTO `permohonan` (`id`, `nama_pasien`, `umur`, `rumah_sakit`, `golongan_darah`, `kuota`, `status`, `nama_wali`, `no_telp`, `hubungan`, `tanggal`) VALUES
(1, 'Cloudio Andre Thenu', '23', 'Rumah Sakit DR.Leimena', 'O', '4', '2', 'Marthin Alfreinsco Salakory', '081318812027', '3', '2023-04-03'),
(2, 'Tes', '12', 'Rumah Sakit DR.Leimena', 'A', '3', '2', 'Clodio', '08186968475', 'Orang Tua Kandung', '2023-04-04'),
(3, 'dio', '23', 'Rumah Sakit DR.Leimena', 'AB', '3', '1', 'Marthin', '0813', 'Lainnya', '2023-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
