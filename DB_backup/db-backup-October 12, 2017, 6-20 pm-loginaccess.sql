

CREATE TABLE `appartment_table` (
  `D_lastname` varchar(15) NOT NULL,
  `D_firstname` varchar(15) NOT NULL,
  `D_extension_name` varchar(5) NOT NULL,
  `D_id` int(10) NOT NULL AUTO_INCREMENT,
  `D_slot_number` int(10) NOT NULL,
  `D_address` varchar(50) NOT NULL,
  `D_dateofbirth` date DEFAULT NULL,
  `D_dateofdeath` date DEFAULT NULL,
  `D_middle` varchar(30) NOT NULL,
  `D_area_number` int(2) NOT NULL,
  `D_type` varchar(20) NOT NULL,
  PRIMARY KEY (`D_id`)
) ENGINE=MyISAM AUTO_INCREMENT=301 DEFAULT CHARSET=latin1;

INSERT INTO appartment_table VALUES("Ilagan","Raymond","III","300","2","San Nicolas","2017-09-05","2017-10-04","Juan","2","appartment");





CREATE TABLE `area_table` (
  `a_number` int(2) NOT NULL,
  PRIMARY KEY (`a_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO area_table VALUES("1");
INSERT INTO area_table VALUES("2");
INSERT INTO area_table VALUES("3");





CREATE TABLE `familylot_table` (
  `D_lastname` varchar(15) NOT NULL,
  `D_firstname` varchar(15) NOT NULL,
  `D_extension_name` varchar(5) NOT NULL,
  `D_slot_number` int(10) NOT NULL,
  `D_address` varchar(50) NOT NULL,
  `D_dateofbirth` date DEFAULT NULL,
  `D_dateofdeath` date DEFAULT NULL,
  `D_middle` varchar(30) NOT NULL,
  `D_area_number` int(2) NOT NULL,
  `D_type` varchar(20) NOT NULL,
  `D_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`D_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO familylot_table VALUES("Pascua","Arman","Jr.","1","Pambuan","2017-10-02","2017-10-11","Dela Cruz","1","family lot","4");





CREATE TABLE `museleo_table` (
  `D_lastname` varchar(15) NOT NULL,
  `D_firstname` varchar(15) NOT NULL,
  `D_extension_name` varchar(5) NOT NULL,
  `D_slot_number` int(10) NOT NULL,
  `D_address` varchar(50) NOT NULL,
  `D_dateofbirth` date DEFAULT NULL,
  `D_dateofdeath` date DEFAULT NULL,
  `D_middle` varchar(30) NOT NULL,
  `D_area_number` int(2) NOT NULL,
  `D_type` varchar(20) NOT NULL,
  `D_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`D_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO museleo_table VALUES("Ordonez","Aries","","4","Pambuan","2017-10-03","2017-10-25","Dg","2","museleo","5");





CREATE TABLE `slot_table` (
  `s_number` int(3) NOT NULL,
  `s_type` varchar(20) NOT NULL,
  PRIMARY KEY (`s_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO slot_table VALUES("5","Family lot");
INSERT INTO slot_table VALUES("4","museleo");





CREATE TABLE `users` (
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `question` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("admin","admin","admin","25f9e794323b453885f5181f1b624d0b","admin","Sto Cristo","09485934534","29","What is Your Favorite Sport?","piko");
INSERT INTO users VALUES("sinamban","johven","johven","c33367701511b4f6020ec61ded352059","user","Sto Cristo sur","09172652553","37","What is Your Favorite Sport?","basket ball");
INSERT INTO users VALUES("Ilgan","Raymond","user","25f9e794323b453885f5181f1b624d0b","user","Pambuan","09123214235","35","What is Your Favorite Color?","pink");
INSERT INTO users VALUES("Punzalan","Lester","lester","c33367701511b4f6020ec61ded352059","user","P cruz","09877655454","36","What is Your Favorite Sport?","piko");



