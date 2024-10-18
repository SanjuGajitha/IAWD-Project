<?php


include_once "connection.php";


?>



<?php

if(isset($_GET['id']))

{  
    $id=$_GET['id'];
    $delete=mysqli_query($conn,"DELETE FROM userdetails WHERE userId ='$id'");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bookingDetails.css">
</head>
<body>
    <h2> Reservation Deatils</h2>
    <table>
      <tr>
        <th>User Id</th>
        <th>FirstName </th>
        <th>LastName</th>
        <th>AddLine1</th>
        <th>AddLine2</th>
        <th>City</th>
        <th>State</th>
        <th>Postal</th>
        <th>Contact </th>
        <th>Email</th>
        <th>ArriveDate</th>
        <th>DepatureDate</th>
        <th>Adults</th>
        <th>Kids</th>
        <th>RoomType</th>
        <th>No-ofRooms</th> 
        <th colspan="2">Actions</th>
      </tr>

      <?php 
        
        $result = mysqli_query($conn, "SELECT * FROM userdetails");
        while ($row = mysqli_fetch_array($result)) 
    {
       echo"
                <tr>
                        <td>". $row['userId']." </td>
                        <td>". $row['firstName']." </td>
                        <td>". $row['lastName']."</td>
                        <td>". $row['addLine1']."</td>
                        <td>". $row['addLine2']."</td>
                        <td>". $row['city']."</td>
                        <td>". $row['state']."</td>
                        <td>". $row['postal']."</td>
                        <td>". $row['contact']."</td>
                        <td>". $row['email']."</td>
                        <td>". $row['arriveDate']."</td>
                        <td>". $row['depatureDate']."</td>
                        <td>". $row['adults']."</td>
                        <td>". $row['kids']."</td>
                        <td>". $row['roomType']."</td>
                        <td>". $row['noOfRooms']."</td>
                          
                         
                          
                         
                    <td><a href='bookingDetails.php?id=".$row['userId']."'>Delete</a></td>
                </tr>
          ";

    }

?>


    </table>

    <a href="dashboard.php" class="home-button">Home</a>
</body>
</html>