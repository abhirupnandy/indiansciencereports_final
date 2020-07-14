-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2020 at 10:02 AM
-- Server version: 10.3.23-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian_science`
--

-- --------------------------------------------------------

--
-- Table structure for table `Discipline_Thematic_Areas`
--

CREATE TABLE `Discipline_Thematic_Areas` (
  `SrNo` varchar(50) NOT NULL,
  `Disciplines` varchar(100) NOT NULL,
  `ThematicAreas` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Discipline_Thematic_Areas`
--

INSERT INTO `Discipline_Thematic_Areas` (`SrNo`, `Disciplines`, `ThematicAreas`) VALUES
('1', 'Agriculture(AGR)', 'Agronomy'),
('2', 'Agriculture(AGR)', ' Animal Science'),
('3', 'Agriculture(AGR)', ' Fishery'),
('4', 'Agriculture(AGR)', ' Food Science'),
('5', 'Agriculture(AGR)', ' Forestry'),
('6', 'Agriculture(AGR)', ' Irrigation and Water Management'),
('7', 'Agriculture(AGR)', ' Soil Science'),
('8', 'Agriculture(AGR)', ' Waste Management'),
('9', 'Chemistry', ' Analytical Chemistry'),
('10', 'Chemistry', ' Applied Chemistry'),
('11', 'Chemistry', ' Chromatography'),
('12', 'Chemistry', ' Combinatorial Chemistry'),
('13', 'Chemistry', ' Computational Chemistry'),
('14', 'Chemistry', ' Crystallography'),
('15', 'Chemistry', ' Inorganic Chemistry'),
('16', 'Chemistry', ' Mass Spectrometry'),
('17', 'Chemistry', ' Medicinal Chemistry'),
('18', 'Chemistry', ' Nuclear Magnetic Resonance'),
('19', 'Chemistry', ' Organic Chemistry'),
('20', 'Chemistry', ' Petroleum'),
('21', 'Chemistry', ' Photochemistry'),
('22', 'Chemistry', ' Physical Chemistry'),
('23', 'Chemistry', ' Polymer Chemistry'),
('24', 'Chemistry', ' Radiochemistry'),
('25', 'Chemistry', ' Stereochemistry'),
('26', 'Chemistry', ' Biochemistry'),
('27', 'Computer Science', ' Algorithms & Theory'),
('28', 'Computer Science', ' Security & Privacy'),
('29', 'Computer Science', ' Hardware & Architecture'),
('30', 'Computer Science', ' Software Engineering'),
('31', 'Computer Science', ' Artificial Intelligence'),
('32', 'Computer Science', ' Machine Learning & Pattern Recognition'),
('33', 'Computer Science', ' Data Mining'),
('34', 'Computer Science', ' Information Retrieval'),
('35', 'Computer Science', ' Natural Language & Speech'),
('36', 'Computer Science', ' Graphics'),
('37', 'Computer Science', ' Computer Vision'),
('38', 'Computer Science', ' Human-Computer Interaction'),
('39', 'Computer Science', ' Multimedia'),
('40', 'Computer Science', ' Networks & Communications'),
('41', 'Computer Science', ' World Wide Web'),
('42', 'Computer Science', ' Distributed & Parallel Computing'),
('43', 'Computer Science', ' Operating Systems'),
('44', 'Computer Science', ' Databases'),
('45', 'Computer Science', ' Real-Time & Embedded Systems'),
('46', 'Computer Science', ' Simulation'),
('47', 'Computer Science', ' Bioinformatics & Computational Biology'),
('48', 'Computer Science', ' Scientific Computing'),
('49', 'Computer Science', ' Computer Education'),
('50', 'Computer Science', ' Programming Languages'),
('51', 'Geological Science', ' Atmospheric Sciences'),
('52', 'Geological Science', ' Geochemistry'),
('53', 'Geological Science', ' Geodesy & Remote Sensing'),
('54', 'Geological Science', ' Geology'),
('55', 'Geological Science', ' Geophysics'),
('56', 'Geological Science', ' Geotechnical Engineering'),
('57', 'Geological Science', ' Geomorphology'),
('58', 'Geological Science', ' Hydrology'),
('59', 'Geological Science', ' Meterology'),
('60', 'Geological Science', ' Mineralogy & Petrology'),
('61', 'Geological Science', ' Oceanography'),
('62', 'Geological Science', ' Paleontology'),
('63', 'Geological Science', ' Seismology'),
('64', 'Materials Science', ' Cement'),
('65', 'Materials Science', ' Ceramics'),
('66', 'Materials Science', ' Composite Materials'),
('67', 'Materials Science', ' Fibres'),
('68', 'Materials Science', ' Glass'),
('69', 'Materials Science', ' Material Synthesis & Processes'),
('70', 'Materials Science', ' Metallurgy'),
('71', 'Materials Science', ' Paper Industry'),
('72', 'Materials Science', ' Polymer Materials'),
('73', 'Materials Science', ' Plastics'),
('74', 'Materials Science', ' Rubber'),
('75', 'Materials Science', ' New Materials'),
('76', 'Materials Science', ' Wood'),
('77', 'Mathematics', ' Algebra'),
('78', 'Mathematics', ' Mathematical Analysis'),
('79', 'Mathematics', ' Control and Optimization'),
('80', 'Mathematics', ' Discrete Mathematics'),
('81', 'Mathematics', ' Mathematics Education'),
('82', 'Mathematics', ' Topology'),
('83', 'Mathematics', ' Geometry'),
('84', 'Mathematics', ' Group Theory'),
('85', 'Mathematics', ' Statistics'),
('86', 'Mathematics', ' Mathematical Modelling'),
('87', 'Mathematics', ' Number Theroy'),
('88', 'Mathematics', ' Probability'),
('89', 'Medicine', ' Anatomy'),
('90', 'Medicine', ' Andrology'),
('91', 'Medicine', ' Cardiology'),
('92', 'Medicine', ' Dentistry'),
('93', 'Medicine', ' Dermatology'),
('94', 'Medicine', ' Diabetes'),
('95', 'Medicine', ' Diseases'),
('96', 'Medicine', ' Emergency and Critical Care'),
('97', 'Medicine', ' Endocrinology'),
('98', 'Medicine', ' Family Medicine'),
('99', 'Medicine', ' Gynecology & Obstetrics'),
('100', 'Medicine', ' Immunology'),
('101', 'Medicine', ' Medical Education & Training'),
('102', 'Medicine', ' Neuroscience'),
('103', 'Medicine', ' Nursing'),
('104', 'Medicine', ' Nutrition'),
('105', 'Medicine', ' Oncology'),
('106', 'Medicine', ' Ophthalmology'),
('107', 'Medicine', ' Pathology'),
('108', 'Medicine', ' Pharmacology'),
('109', 'Medicine', ' Physiology'),
('110', 'Medicine', ' Psychiatry and Psychology'),
('111', 'Medicine', ' Urology'),
('112', 'Physics', ' Atomic & molecular physics'),
('113', 'Physics', ' Optics & optoelectronics'),
('114', 'Physics', ' Chemical physics & material physics'),
('115', 'Physics', ' Radiation'),
('116', 'Physics', ' Computational Physics'),
('117', 'Physics', ' Condensed Matter Physics'),
('118', 'Physics', ' Statistical Physics'),
('119', 'Physics', ' Mathematical Physics'),
('120', 'Physics', ' Nuclear Physics'),
('121', 'Physics', ' Nuclear Energy'),
('122', 'Physics', ' Astrophysics and Space Sciences');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
