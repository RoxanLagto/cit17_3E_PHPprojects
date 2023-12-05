<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = "";
    $dbname = "SCHOOL";
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if($mysqli->connect_errno ) {
    printf("Connect failed: %s<br />", $mysqli->connect_error);
    exit();
    }
    printf('Connected successfully.<br />');

    if(! $mysqli ) {
    die('Could not connect: ' . mysqli_error($mysqli));
    }
    echo 'Connected successfully<br />';
    $retval = mysqli_select_db( $mysqli, 'School' );

    if(! $retval ) {
    die('Could not select database: ' . mysqli_error($mysqli));
    }
    echo "Database School selected successfully\n";

/*$sql = "CREATE TABLE STUDENT( ".
"StudentID int NOT NULL AUTO_INCREMENT, ".
"Firstname varchar(255), ".
"LastName varchar(255), ".
"DateOfBirth DATE, ".
"Email varchar(255),".
"ContactNumber varchar(255),".
"PRIMARY KEY ( StudentID )); ";

if ($mysqli->query($sql)) {
printf("Table student created successfully.<br />");
}
if ($mysqli->errno) {
printf("Could not create table: %s<br />", $mysqli->error);
}*/


/*$sql = "CREATE TABLE COURSE( ".
"CourseID int NOT NULL AUTO_INCREMENT, ".
"CourseName varchar(255), ".
"Credits varchar(255), ".
"PRIMARY KEY ( CourseID )); ";

if ($mysqli->query($sql)) {
printf("Table Course created successfully.<br />");
}
if ($mysqli->errno) {
printf("Could not create table: %s<br />", $mysqli->error);
}


$sql = "CREATE TABLE INSTRUCTOR( ".
"InstructorID int NOT NULL AUTO_INCREMENT, ".
"FirstName varchar(255), ".
"LastName varchar(255), ".
"Email varchar(255),".
"ContactNumber varchar(255),".
"PRIMARY KEY ( InstructorID )); ";

if ($mysqli->query($sql)) {
printf("Table Instructor created successfully.<br />");
}
if ($mysqli->errno) {
printf("Could not create table: %s<br />", $mysqli->error);
}*/



    $sql = "CREATE TABLE ENROLLMENT( ".
    "EnrollmentID int NOT NULL AUTO_INCREMENT, ".
    "FOREIGN KEY(EnrollmentID) References student(StudentID), ".
    "FOREIGN KEY(EnrollmentID) References Course(CourseID), ".
    "EnrollmentDate DATE, ".
    "Grade int,".
    "PRIMARY KEY ( EnrollmentID )); ";

    if ($mysqli->query($sql)) {
    printf("Table Enrollment created successfully.<br />");
    }
    if ($mysqli->errno) {
    printf("Could not create table: %s<br />", $mysqli->error);
    }
?>