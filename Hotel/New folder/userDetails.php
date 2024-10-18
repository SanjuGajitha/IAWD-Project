
<link rel="stylesheet" href="userDetails.css">

<?php

include_once "header.php";
include_once "connection.php";



$res=mysqli_query($conn,"SELECT * FROM userdetails  ORDER BY  userId DESC LIMIT 1");
$row=mysqli_fetch_array($res);




if(isset($_POST['update'])){




    $id=$_POST['userId'];
    $updateFirstName=$_POST['firstName'];
    $updateLastName=$_POST['lastName'];
    $line1=$_POST['line1'];
    $line2=$_POST['line2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $postal=$_POST['postal'];
    $contact=$_POST['contact'];
    $email=$_POST['Email'];
    $arriveDate=$_POST['arriveDate'];
    $depatureDate=$_POST['depatureDate'];
    $noAdults=$_POST['noAdults'];
    $noKids=$_POST['noKids'];
    $typeOfRoom=$_POST['typeOfRoom'];
    $numberOfRooms=$_POST['numberOfRooms'];
    

   

    mysqli_query($conn,"UPDATE userdetails SET firstName='$updateFirstName' ,lastName='$updateLastName' , addLine1='$line1' , addLine2='$line2' , city='$city',state='$state'
    ,postal='$postal' ,contact='$contact' , email='$email' ,arriveDate='$arriveDate' ,depatureDate='$depatureDate' ,adults='$noAdults',
    kids='$noKids' ,roomType='$typeOfRoom', noOfRooms='$numberOfRooms' WHERE userId ='$id'");
   

     header("Location:userDetails.php");
    

    $stmt->close();
    $conn->close();
}

?>




<div class="head">
<h2>Data Submission Overview</h2>
</div>

    

<form  class="register"  method="post" >
        <img src="catchabreak.65b115fe8b8dc3.01177570.png" alt="">
        <h2>Hotel Reservation Form</h2>
        <h4>Please Check Accurate of Your Details</h4>
        
        

        <div class="lables">

             <!-- PASS USER ID -->
             <input   name="userId"   type="hidden" placeholder= "id"  value="<?php echo $row['userId'] ?>">
           
            <label  for="">Full Name</label><br>
            <input  class="first"  name="firstName"    id="first" type="text" placeholder="First Name"  value="<?php echo $row['firstName']   ?>">   <input     name="lastName"   id="last"  class="last" type="text" placeholder="Last Name" value="<?php echo $row['lastName']   ?>" ><br>
            <label for="">Address</label><br>
            <input   name="line1"   id="line1"  class="address" type="text" placeholder="Street Address"     value="<?php echo $row['addLine1']   ?>" ><br>
            <input   name="line2"   id="line2"  class="address" type="text" placeholder="Street Address line 2"  value="<?php echo $row['addLine2']   ?>" ><br>
            <input   name="city"  class="city"  type="text"  id="city" placeholder="City" required    value="<?php echo $row['city']   ?>">   <input   name="state"  class="state"  type="text"  id="state" placeholder="State/Province"   value="<?php echo $row['state']   ?>"><br>
            <input  name="postal"  class="postal" id ="postal" type="text" placeholder="Postal Code"  value="<?php echo $row['postal']   ?>"><br>
           
            
                    <div class="emailcon">
                        <label  class="con" for="">Contact Number</label>
                        <label  class="emai" for="">Email</label><br>
                    </div>
          
            <input  name="contact" class="contact" id="contact" type="text" placeholder="07x-xxx-xxxx"  value="<?php echo $row['contact'] ?> "> 
            <input  name="Email" class="email"  id="email" type="text" placeholder="eg:name@gmail.com"  value="<?php echo $row['email'] ?> "><br>
                 
                    <div class="date">
                        <label class="arrival"  for="">Arraival-Date</label>
                        <label  class="depature" for="">Depature-Date</label><br>
                    </div>

              <input name="arriveDate"  id="arriveDate" class="arriveDate" type="date"  value="<?php echo $row['arriveDate']   ?>"> 
              <input name="depatureDate"  id="depatureDate" class="depatureDate" type="date"  value="<?php echo $row['depatureDate']   ?>">

                    <div class="members">
                      <label class="adults"  for="">Number of Adults</label>
                      <label class="kids"  for="">Number of Kids</label><br>
                    </div>
              
             <input  class="noAdults" id="noAdults"  name="noAdults" type="text"  value="<?php echo $row['adults'] ?> ">
             <input  class="noKids" id="noKids"  name="noKids" type="text"  value="<?php echo $row['kids'] ?> ">
                   
             <div class="rooms">
                <label class="roomType"  for="">Type Of Room</label>
                <label class="numberRooms"  for="">Number of Rooms</label><br>
              </div>

               
              <select class="typeOfRoom" name="typeOfRoom" id="typeOfRoom">
                <?php
       
                           $room=$row['typeOfRoom'];

                          ?>
                        <option value="" disabled >Select Room Type</option>
                        <option value="Single" <?php if ($room == 'Single') echo 'selected'; ?> >Single</option>
                        <option value="Double" <?php if ($room  == 'Double') echo 'selected'; ?> >Double</option>
                        <option value="Triple" <?php if ($room == 'Triple') echo 'selected'; ?> >Triple</option>
                        <option value="Quad"  <?php if ($room  == 'Quad') echo 'selected'; ?> >Quad</option>
                        <option value="Queen" <?php if ($room == 'Queen') echo 'selected'; ?> >Queen</option>
                        <option value="King" <?php if ($room == 'King') echo 'selected'; ?> >King</option>
                        <option value="Twin" <?php if ($room == 'Twin') echo 'selected'; ?> >Twin</option>
              </select>

             
             <input  class="numberOfRooms" id="numberOfRooms"  name="numberOfRooms" type="text"  value="<?php echo $row['noOfRooms'] ?> "><br>
             <button type="submit" name="update" class="submit">Update</button>



        </div>
    </form>


  
<?php

      include_once "footer.php";

?>
   