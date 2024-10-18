<?php

include_once "connection.php";


?>



<?php

if(isset($_GET['id']))

{  
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM contactdetails WHERE mgNumber ='$id'");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactDetails.css">
</head>
<body>
    <h2> Users' Contact Deatils</h2>
    <table>
      <tr>
        <th>Message Number</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Message</th>
        <th colspan="2">Actions</th>
      </tr>

      <?php 
        
        $result = mysqli_query($conn, "SELECT * FROM contactdetails");
        while ($row = mysqli_fetch_array($result)) 
    {
       echo"
                <tr>
                    <td>". $row['mgNumber']." </td>
                    <td>". $row['name']." </td>
                    <td>". $row['email']."</td>
                    <td>". $row['message']."</td>
                    <td><a href='contactDetails.php?id=".$row['mgNumber']."'>Delete</a></td>
                </tr>
          ";

    }

?>


    </table>

    <a href="dashboard.php" class="home-button">Home</a>
    
</body>
</html>