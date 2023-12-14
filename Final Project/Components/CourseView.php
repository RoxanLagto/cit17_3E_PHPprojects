<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
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
                <th>Course Id </th>
                <th>Course Name </th>
                <th>Course Code </th>
                <th>Course Description </th>
               
            </tr>
        
            <?php
                $conn = new mysqli('localhost', 'root','','LAGTO');
                    if($conn->connect_error){
                        die('Connection Failed :' .$conn->connect_error);

                    }else{
                        $query = "SELECT * FROM course;"; 
                        $result = $conn->query($query); 
                
                            if ($result->num_rows > 0)  
                                { 
                                    while($row = $result->fetch_assoc()) 
                                        { 
                                            echo  "<tr><td>". $row["coursesID"] ."</td>
                                                   <td>". $row["courseName"]."</td>
                                                   <td>". $row["courseCode"]."</td>
                                                   <td>". $row["courseDescription"]."</td></tr>";
                                        }
                                }   
                            else { 
                                echo "NO COURSE AS OF THE MOMENT".
                                     "<tr><td>". "N/A" .
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". 
                                     "</td><td>". "N/A". "</td></tr>";
                                }
                            $conn->close(); 
                        }
            ?>
        </table>
        <button ><a href="CourseUpdate.html">Update your course</button></a>
        <button ><a href="CourseDelete.html">Delete Course</button></a>
        <button ><a href="CourseInfo.html">Register another course</button></a>
        <button><a href="Start.html">Return to homepage</a></button>
    </body>
</html>