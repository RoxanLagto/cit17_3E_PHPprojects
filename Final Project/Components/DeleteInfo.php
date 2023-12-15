<?php
if (isset($_POST['Delete'])) {
    $conn = new mysqli('localhost', 'root', '', 'LAGTO');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }
    $usersID = $_POST['usersID'];

    $queryDelete = "DELETE FROM USERS WHERE usersID='$usersID'";
    
    $resultDelete = mysqli_query($conn, $queryDelete);

    if ($resultDelete) {
        echo 'Record deleted successfully.';
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
            font-family: Arial, sans-serif;
            background-color: white; 
            color: black; 
            text-align: center;
        }

        h1 {
            color: #000; 
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            background-color: black; 
            color: white; 
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    
</head>
<body>
    <h1>Your data has been Deleted!</h1>
    <button><a href="View.php" style="text-decoration: none; color: white;">View Details</a></button>
</body>
</html>
