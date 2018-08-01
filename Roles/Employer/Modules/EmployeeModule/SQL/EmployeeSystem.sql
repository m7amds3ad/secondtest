--
-- Table structure for table `Employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_num` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `sec_name` varchar(25) NOT NULL,
  `third_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) NOT NULL,
  `nationality` varchar(25) NOT NULL,
  `national_id` int(20) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone_number` int(16) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `emp_status` varchar(25) NOT NULL,
  `dept_id` int(10) NOT NULL,
  `img_id` int(25) DEFAULT NULL,

  PRIMARY KEY (`emp_num`),
  KEY `employee_dept_id_fk` (`dept_id`),
  KEY `employee_img_id_fk` (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `Employee Login`
--

DROP TABLE IF EXISTS `emp_login`;
CREATE TABLE IF NOT EXISTS `emp_login` (
  `emp_num` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emp_role` varchar(25) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `acco_status` varchar(10) NOT NULL,

  PRIMARY KEY (`emp_num`),
  KEY `emp_login_emp_num_fk` (`emp_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `Departments`
--

DROP TABLE IF EXISTS `deparments`;
CREATE TABLE IF NOT EXISTS `deparments` (

  `dept_id` int(25) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) NOT NULL,


  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `Employee Contracts`
--

DROP TABLE IF EXISTS `emp_contracts`;
CREATE TABLE IF NOT EXISTS `emp_contracts` (
  `contract_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,
  `start_date` DATE NOT NULL,
  `contract_dur` int(10) DEFAULT NULL,
  `salary` varchar(25) NOT NULL,
  `position` varchar(255) NOT NULL,
  `national_id` int(20) NOT NULL,
  `emp_grade` int(10) DEFAULT NULL,
  `emp_level` int(10) DEFAULT NULL,
  `vacation_balance` int(10) DEFAULT NULL,
  `travel_ticket` varchar(25) NOT NULL,
  

  PRIMARY KEY (`contract_id`),
  KEY `emp_contracts_emp_num_fk` (`emp_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `Employee Mandate`
--

DROP TABLE IF EXISTS `emp_mandate`;
CREATE TABLE IF NOT EXISTS `emp_mandate` (
  `mandate_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,
  `mandate_start_date` DATE NOT NULL,
  `mandate_start_date` DATE NOT NULL,
  `mandate_dur` int(10) NOT NULL,
  `mandate_country` varchar(25) DEFAULT NULL,
  `mandate_city` varchar(25) DEFAULT NULL,
  `mandate_value` int(25) NOT NULL,
 
  PRIMARY KEY (`mandate_id`),
  KEY `emp_mandate_emp_num_fk` (`emp_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `Employee Allowances`
--
DROP TABLE IF EXISTS `emp_allowances`;
CREATE TABLE IF NOT EXISTS `emp_allowances` (
  `emp_allowance_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,
  `allowance_id` int(25) NOT NULL,
  `allownece_value` int(25) NOT NULL,
 
  PRIMARY KEY (`emp_allowance_id`),
  KEY `emp_allowances_allowance_id_fk` (`allowance_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `Allowances`
--
DROP TABLE IF EXISTS `allowances`;
CREATE TABLE IF NOT EXISTS `allowances` (
  `allowances_id` int(25) NOT NULL AUTO_INCREMENT,
  `allowances_name` varchar(25) NOT NULL,
 
  PRIMARY KEY (`allowances_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `Employee Vacation`
--
DROP TABLE IF EXISTS `emp_vacation`;
CREATE TABLE IF NOT EXISTS `emp_vacation` (
  `emp_vacation_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,
  `vacation_dur` int(25) NOT NULL,
  `vacation_id` int(25) NOT NULL,
  `vacation_start_date` Date NOT NULL,
  `vacation_end_date` Date NOT NULL,

 
  PRIMARY KEY (`emp_vacation_id`),
  KEY `emp_vacation_vacation_id_fk` (`vacation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `Vacation`
--
DROP TABLE IF EXISTS `vacation`;
CREATE TABLE IF NOT EXISTS `vacation` (
  `vacation_id` int(25) NOT NULL AUTO_INCREMENT,
  `vacation_name` varchar(255) NOT NULL,


  PRIMARY KEY (`vacation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `emp_custody`
--
DROP TABLE IF EXISTS `emp_custody`;
CREATE TABLE IF NOT EXISTS `emp_custody` (
  `custody_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,
  `custody_date` Date NOT NULL,
  `custody_value` int(255) NOT NULL,
 

  PRIMARY KEY (`custody_id`),
  KEY `emp_custody_emp_num_fk` (`emp_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `emp_decrease`
--
DROP TABLE IF EXISTS `emp_decrease`;
CREATE TABLE IF NOT EXISTS `emp_decrease` (
  `decrease_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,
  `decrease_date` Date NOT NULL,
  `decrease_name` varchar(25) NOT NULL,
  `decrease_value` int(25) NOT NULL,

 
  PRIMARY KEY (`decrease_id`),
  KEY `emp_decrease_emp_num_fk` (`emp_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `emp_images`
--
DROP TABLE IF EXISTS `emp_images`;
CREATE TABLE IF NOT EXISTS `emp_images` (
  `img_id` int(25) NOT NULL AUTO_INCREMENT,
  `emp_num` varchar(25) NOT NULL,

  `image_name` varchar(255) NOT NULL,


  PRIMARY KEY (`img_id`),
  KEY `emp_images_emp_num_fk` (`emp_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;
