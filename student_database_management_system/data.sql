CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');



CREATE TABLE `students_table` (
  
  `roll_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `ph_no` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);




ALTER TABLE `students`
  ADD PRIMARY KEY (`roll_no`);


  INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'geetika', 'geetikaellipilli12@gmail.com', 'geetika1234');




CREATE TABLE `3_1results` (
  
  `roll_no` int(11) NOT NULL,
  `software_engineering` int(5) NOT NULL,
  `operating_system` int(5) NOT NULL,
  `database_management_system` int(5) NOT NULL,
  `compiler_design` int(5) NOT NULL,
  
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `3_2results` (
  
  `roll_no` int(11) NOT NULL,
  `web_technologies` int(5) NOT NULL,
  `computer_networks` int(5) NOT NULL,
  `artificial_intelligence` int(5) NOT NULL,
  `daa` int(5) NOT NULL,
  
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;