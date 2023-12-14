<?php
    if (isset($_POST['Update'])) {
        $conn = new mysqli('localhost', 'root', '', 'LAGTO');
        if ($conn->connect_error) {
            die('Connection Failed: ' . $conn->connect_error);
        }

        $coursesID = $_POST['coursesID'];
        $coursename = $_POST['courseName'];
        $coursecode = $_POST['courseCode'];
        $coursedescription = $_POST['courseDescription'];

        $query = "UPDATE COURSE SET courseName='$coursename', courseCode='$coursecode', courseDescription='$coursedescription' WHERE coursesID='$coursesID'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '';
        } else {
            echo '' . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Course</title>
    <style>
        body {
            font-family: 'Poppins', 'Poppins';
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: black;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Your course data has been successfully updated!</h1>
    <button ><a href="CourseView.php">VIEW DETAILS</button></a>
   
</body>
</html>