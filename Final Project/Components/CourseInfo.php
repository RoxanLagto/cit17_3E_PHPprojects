<?php
$conn = new mysqli('localhost', 'root', '', 'LAGTO');
if ($conn->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli->connect_error);
    exit();
} else {

    $coursename = $_POST['courseName'];
    $coursecode = $_POST['courseCode'];
    $coursedescription = $_POST['courseDescription'];

    $sql = "INSERT INTO COURSE(courseName, courseCode, courseDescription) VALUES ('$coursename', '$coursecode', '$coursedescription')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Successfully added your record!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTERED</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white; 
            color:black; 
            text-align: center;
        }

        h1 {
            color: black;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: black; 
            color: white; 
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <h1>Course Has Been Registered</h1>
    <button><a href="CourseView.php" style="text-decoration: none; color: white;">View Details</a></button>
</body>

</html>
