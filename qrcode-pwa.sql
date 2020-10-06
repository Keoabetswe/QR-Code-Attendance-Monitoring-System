CREATE TABLE admin (
  admin_num int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  admin_name varchar(50) NOT NULL,
  admin_email varchar(50) NOT NULL,
  admin_password varchar(50) NOT NULL);

CREATE TABLE lecturer (
  lecturer_num int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  lecturer_name varchar(50) NOT NULL,
  lecturer_email varchar(50) NOT NULL,
  lecturer_password varchar(50) NOT NULL);

CREATE TABLE student (
  student_num int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  student_name varchar(50) NOT NULL,
  student_email varchar(50) NOT NULL,
  student_password varchar(50) NOT NULL);
  