<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>ENROLLMENT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
            color: black; 
        }

        th {
            background-color: darkgray;
        }

        button {
            display: block;
            margin: 20px auto;
            padding: 10px;
            background-color: black; 
            color: white; 
            text-decoration: none;
            font-size: 16px;
            border: none;
            text-align: center;
        }

        button a {
            color:white; 
            text-decoration: none;
        }


    </style>
</head>
<body>
    <table>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Course ID</th>
            <th>Course Name</th>
        </tr>
    
        <?php
            $conn = new mysqli('localhost', 'root', '', 'LAGTO');
            if ($conn->connect_error) {
                die('Connection Failed: ' . $conn->connect_error);
            } else {
                $query = "SELECT USERS.usersID, USERS.firstName, COURSE.coursesID, COURSE.courseName FROM USERS, COURSE;";
                $result = $conn->query($query);
    
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["usersID"] . "</td>";
                        echo "<td>" . $row["firstName"] . "</td>";
                        echo "<td>" . $row["coursesID"] . "</td>";
                        echo "<td>" . $row["courseName"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>NO ENROLLMENTS AS OF THE MOMENT</td></tr>";
                }
            }
        ?>
    </table>
    <button><a href="Start.html">Menu</a></button>
</body>
</html>