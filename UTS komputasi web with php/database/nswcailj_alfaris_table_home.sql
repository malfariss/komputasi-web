
-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) DEFAULT NULL,
  `home_h1` varchar(255) DEFAULT NULL,
  `home_p1` text DEFAULT NULL,
  `home_p2` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `home_h1`, `home_p1`, `home_p2`) VALUES
(NULL, 'Hi. I\'m Alfaris.,A Programmer', 'Informatics Undergrad at Universitas Pembangunan Jaya', 'I\'m interested in the program and also interested in design');
