<?php
$conn = new mysqli('localhost', 'root', '', 'LAGTO');
if ($conn->connect_errno) {
    printf("Connect failed: %s<br />", $mysqli->connect_error);
    exit();
} else {
    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $age = $_POST['age'];
    $phoneNumber  = $_POST['phoneNumber'];
    $address  = $_POST['address'];

    $sql = "INSERT INTO USERS (email, firstname, lastname, age, phoneNumber, address) VALUES ('$email', '$firstName', '$lastName', '$age', '$phoneNumber', '$address')";

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
    <h1>Your Information Has Been Registered</h1>
    <button><a href="View.php" style="text-decoration: none; color: black; font-family='Poppins'">View Details</a></button>
</body>

</html>