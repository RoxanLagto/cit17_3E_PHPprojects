<?php
    if (isset($_POST['Delete'])) {
        $conn = new mysqli('localhost', 'root', '', 'LAGTO');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }

    $coursesID = $_POST['coursesID'];

    $queryDelete = "DELETE FROM COURSE WHERE coursesID='$coursesID'";
    
    $resultDelete = mysqli_query($conn, $queryDelete);

    if ($resultDelete) {
    } else {
        echo 'Error deleting record: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Information</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: white;
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
            color: white;
            text-decoration: none;
        }

    </style>
    
</head>
<body>
    <h1>Your course has been Deleted!</h1>
    <button ><a href="CourseView.php">View Details</button></a>
   
</body>
</html>