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
            font-family: 'Poppins';
            background-color: #f0f0f0;
            text-align: center;
            filter: grayscale(100%);
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

        a {
            color: inherit;
            text-decoration: none;
            font-family:inherit;
        }

    </style>
</head>
<body>
    <h1>Your course data has been successfully updated!</h1>
    <button ><a href="CourseView.php">View Details</button></a>
   
</body>
</html>