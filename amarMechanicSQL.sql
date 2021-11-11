-- --------------------------------------------------------
--
-- Table structure for table `mechanics`
--

CREATE TABLE IF NOT EXISTS `mechanics` (
  `mechanicID` int(11) NOT NULL,
  `mechanicName` varchar(40) NOT NULL,
  `serving` int(4) NOT NULL DEFAULT 0,
  `usertype` varchar(50) NOT NULL DEFAULT 'mechanic'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO `mechanics` (`mechanicID`, `mechanicName`, `serving`, `usertype`) VALUES
(1, 'M_1', 0 , 'mechanic'),
(2, 'M_2', 0 , 'mechanic'),
(3, 'M_3', 0 , 'mechanic'),
(4, 'M_4', 0 , 'mechanic');

-- --------------------------------------------------------
--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `appointmentID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(200) NOT NULL,
  `userAddress` varchar(10000) NOT NULL,
  `userPhone` int(10) NOT NULL,
  `userLicense` varchar(20) NOT NULL,
  `userEngine` varchar(20) NOT NULL,  
  `appointmentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mechanicID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Appointment and Mechanic relation Table';

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointmentID`, `userName` , `userAddress` ,`userPhone`,`userLicense` ,`userEngine`, `appointmentDate`, `mechanicID`) VALUES
(1, 'User 1', 'Dhaka', 1234567891, 'license-Number-1', 'Engine-Number-1', '2021-11-12 09:51:46', 1),
(2, 'User 2', 'Dhaka', 1234567892, 'license-Number-2', 'Engine-Number-2', '2021-11-13 09:00:00', 4);

