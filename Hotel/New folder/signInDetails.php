<?php

include_once "connection.php";


?>



<?php

if(isset($_GET['id']))

{  
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM usersigndetails WHERE userId ='$id'");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signInDetails.css">
</head>
<body>
    <h2> Users' Sign In Deatils</h2>
    <table>
      <tr>
        <th>User Id</th>
        <th>User Real Name</th>
        <th>User Email</th>
        <th>User Contact</th>
        <th>User Name</th>
        <th>Password</th> 
        <th colspan="2">Actions</th>
      </tr>

      <?php 
        
        $result = mysqli_query($conn, "SELECT * FROM usersigndetails");
        while ($row = mysqli_fetch_array($result)) 
    {
       echo"
                <tr>
                    <td>". $row['userId']." </td>
                    <td>". $row['userName']." </td>
                    <td>". $row['userEmail']."</td>
                    <td>". $row['userContact']."</td>
                    <td>". $row['userUserName']."</td>
                    <td>". $row['userPassword']."</td>
                    <td><a href='signInDetails.php?id=".$row['userId']."'>Delete</a></td>
                </tr>
          ";

    }

?>


    </table>

    <a href="dashboard.php" class="home-button">Home</a>
</body>
</html>