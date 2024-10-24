
-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `img` varchar(255) DEFAULT NULL,
  `project_h3` varchar(100) DEFAULT NULL,
  `project_p1` text DEFAULT NULL,
  `project_p2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`img`, `project_h3`, `project_p1`, `project_p2`) VALUES
('img/Screenshot 2024-10-22 104231.png', 'Simple snake game', 'Game protorype ular sederhana seperti game pada umumnya dengan menggunakan bahasa pemrograman python.', 'Pemain mengendalikan ular yang bergerak di grid 20x20 menggunakan tombol panah pada keyboard. Permainan berakhir jika ular menabrak tubuhnya sendiri, dan pemain dapat memulai ulang dengan menekan tombol apapun. Kecepatan ular diatur pada 10 frame per detik'),
('img/Screenshot 2024-10-22 104418.png', 'Tictactoe game', 'Game Tictactoe 2 player sesuai peraturan pada umumnya menggunakan bahasa pemrograman python.', 'Ketika salah satu pemain berhasil membuat garis lurus (horizontal, vertikal, atau diagonal), garis merah akan muncul menandakan kemenangan. Permainan akan berakhir jika ada pemain yang menang atau seluruh kotak telah terisi (seri). Pemain dapat memulai permainan baru dengan mengklik papan setelah permainan berakhir.'),
('img/Screenshot 2024-10-22 134128.png', 'Scan number with handsign', 'Project scan angka 1-5 menggunakan isyarat tangan dengan bahasa pemrograman python.', 'Aplikasi dibuat dengan memanfaatkan library OpenCV untuk pengolahan gambar/video dan MediaPipe untuk mendeteksi landmark tangan. Program akan mengakses kamera komputer untuk menangkap video secara real-time. Setiap frame video akan diproses untuk mendeteksi tangan dan menggambar 21 titik landmark pada tangan yang terdeteksi.');
