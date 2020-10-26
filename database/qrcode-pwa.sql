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

  CREATE TABLE attendance (
    attendanceID int(11) PRIMARY KEY NOT NULL,
    attendanceLecture int(11) NOT NULL,
    attendanceStart datetime NOT NULL,
    attendanceEnd datetime NOT NULL);

  CREATE TABLE course (
    courseID int(11) PRIMARY KEY NOT NULL,
    courseName VARCHAR(50) NOT NULL,
    courseCode VARCHAR(10) NOT NULL,
    courseDept VARCHAR(50) NOT NULL,
    courseSemester INT(11) NOT NULL,
    courseDate DATETIME not NULL);

  -- course inserts --
  INSERT INTO course (courseID, courseName, courseCode, courseDept, courseSemester, courseDate) VALUES
(1, 'Project 4', 'P4', 'Information and Design', '2020-09-20 19:05:00');

CREATE TABLE lecture (
  lectureID int(11) NOT NULL,
  lectureCourse int(11) NOT NULL,
  lecturer int(11) NOT NULL,
  lectureSemester tinyint(4) NOT NULL,
  lecureStart datetime NOT NULL,
  lectureStop datetime NOT NULL);