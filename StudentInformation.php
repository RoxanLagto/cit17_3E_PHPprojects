<!DOCTYPE html>
<html lang="en">
    <html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">

       <title>STUDENT INFORMATION REGISTRY</title>
       <style>
        table, th, td {
        border:1px solid black;
        }
        .button{
            color: black;
            text-decoration: none;
        }
        
        </style>
    </head>
    
    <body>
        <h1>STUDENT REGISTRY</h1>
        <table>
            <tr>
                <th>Username </th>
                <th>Email </th>    
            </tr>
        
            <?php
                $UserName = $_POST['Username'];
                $Email = $_POST['Email'];

                $conn = new mysqli('localhost', 'root','','login');
                    if($conn->connect_error){
                        die('Connection Failed :' .$conn->connect_error);

                    }else{

                        $stmt = $conn->prepare("insert into users(Username,Email)values(?, ?)");
                        $stmt->bind_param("ss", $Username, $Email);
                        $stmt->execute();
                  
                        $query = "SELECT * FROM users;"; 
                        $result = $conn->query($query); 
                
                            if ($result->num_rows > 0)  
                                { 
                                    while($row = $result->fetch_assoc()) 
                                        { 
                                            echo  "<tr><td>". $row["username"] ."</td>
                                                   <td>". $row["email"]."</td></tr>";
                                        }
                                }   
                            else { 
                                echo "NO REGISTRATION AS OF THE MOMENT".
                                     "<tr><td>". "N/A" .
                                     "</td><td>". "N/A". "</td></tr>";
                                }
                            $conn->close(); 
                        }
            ?>
        </table>
        <br>
        <button ><a href="Register.html">CREATE</button></a>
    </body>
</html>