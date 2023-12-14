<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>REGISTRATION</title>
    <style>
        body {
            font-family: 'Poppins';
            background-color: white; 
            color: black; 
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black; 
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: black;
            color: white; 
        }

        a {
            color: black; 
            text-decoration: none;
        }

        button {
            margin-top: 20px;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }

        button a {
            color: white; 
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>User ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Address</th>
        </tr>

        <?php
        $conn = new mysqli('localhost', 'root', '', 'LAGTO');
        if ($conn->connect_error) {
            die('Connection Failed :' . $conn->connect_error);
        } else {
            $query = "SELECT * FROM USERS;";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo  "<tr><td>" . $row["usersID"] . "</td>
                           <td>" . $row["email"] . "</td>
                           <td>" . $row["firstName"] . "</td>
                           <td>" . $row["lastName"] . "</td>
                           <td>" . $row["age"] . "</td>
                           <td>" . $row["phoneNumber"] . "</td>
                           <td>" . $row["address"] . "</td></tr>";
                }
            } else {
                echo "NO REGISTRATION AS OF THE MOMENT" .
                    "<tr><td>" . "N/A" .
                    "</td><td>" . "N/A" .
                    "</td><td>" . "N/A" .
                    "</td><td>" . "N/A" .
                    "</td><td>" . "N/A" .
                    "</td><td>" . "N/A" .
                    "</td><td>" . "N/A" . "</td></tr>";
            }
            $conn->close();
        }
        ?>
    </table>
    <button><a href="UpdateInfo.html" style="font-family:'Poppins';">Update your details</a></button>
    <button><a href="DeleteInfo.html" style="font-family:'Poppins';">Delete your account</a></button>
    <button><a href="RegisterInfo.html" style="font-family:'Poppins';">Register another account</a></button>
    <button><a href="Start.html" style="font-family:'Poppins';">Return to homepage</a></button>
</body>

</html>
