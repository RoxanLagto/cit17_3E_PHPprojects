<?php

if (isset($_POST['Update'])) {
    $conn = new mysqli('localhost', 'root', '', 'LAGTO');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    }
    $usersID = $_POST['usersID'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];

    $query = "UPDATE USERS SET firstname='$firstname', lastname='$lastname', age='$age', phoneNumber='$phoneNumber', address='$address' WHERE usersID='$usersID'";

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
    <title>Update Information</title>
    <style>
        <style>
        body {
            font-family: 'Poppins';
            background-color: white;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            color: black;
            text-decoration: none;
            border-radius: 5px;
        }

    </style>
    
</head>
<body>
    <h1>Your data has been successfully updated!</h1>
    <button ><a href="View.php">VIEW DETAILS</button></a>
   
</body>
</html>