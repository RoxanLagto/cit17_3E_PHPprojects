<?php
//Initializing the connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = "";
$dbname = "LAGTO";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($mysqli->connect_errno ) {
    printf("Connection failed: %s<br />", $mysqli->connect_error);
    exit();
}
    printf('Connected successfully.<br />');

//Selecting of the specified database
$retval = mysqli_select_db( $mysqli, $dbname );

if(! $retval ) {
    die('Could not select database: ' . mysqli_error($mysqli));
 }
    echo "Database $dbname selected successfully <br />";
 
//Creation of the Tables

$sqlUSERS = "CREATE TABLE USERS  (
     usersID INT PRIMARY KEY AUTO_INCREMENT,
     email VARCHAR(255) NOT NULL,
     firstName VARCHAR(255) NOT NULL,
     lastName VARCHAR(255) NOT NULL,
     age INT NOT NULL, 
     phoneNumber VARCHAR(255) NOT NULL,
     address VARCHAR(255) NOT NULL
 )";
 
 if ($mysqli->query($sqlUSERS ) === TRUE) 
     echo "Table USERS  created successfully.<br />";
 

 $sqlCOURSE = "CREATE TABLE COURSE (
     coursesID INT PRIMARY KEY AUTO_INCREMENT,
     courseCode VARCHAR(255) NOT NULL,
     courseName VARCHAR(255) NOT NULL,
     courseDescription VARCHAR(255) NOT NULL
 )";
 
 if ($mysqli->query($sqlCOURSE) === TRUE) 
     echo "Table COURSE created successfully.<br />";
 
 $sqlENROLLMENT = "CREATE TABLE ENROLLMENT (
     enrollmentsID INT PRIMARY KEY,
     usersID INT,
     coursesID INT,
     FOREIGN KEY (usersID) REFERENCES USERS(usersID),
     FOREIGN KEY (coursesID) REFERENCES COURSE(coursesID)
 )";
 
 if ($mysqli->query($sqlENROLLMENT) === TRUE) 
     echo "Table ENROLLMENT created successfully.<br />";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href=setup.php>
    <title>Final Project</title>
    <style>
        body {
            font-family: 'Poppins';
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .heading {
            color: #333;
            text-align: center;
        }

        .register-button {
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px;
        }

    </style>
</head>
<body> 
    <h1 class="heading">STUDENT INFORMATION SYSTEM</h1>  
    <button class="register-button" ><a href="./Components/Start.html" style="text-decoration:none; font-family:'Poppins';">Register</button></a>
</body>
</html>