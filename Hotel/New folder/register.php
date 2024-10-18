
<?php
include_once "connection.php";
include_once "header.php";
?>

<?php

if(isset($_POST['submit']))
{

 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $addLine1=$_POST['line1'];
 $addLine2=$_POST['line2'];
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


$stmt=mysqli_query($conn,"INSERT INTO userdetails(firstName,lastName,addLine1,addLine2,city,state,postal,contact,email,arriveDate,depatureDate,adults,kids,roomType,noOfRooms) VALUES('
 $firstName' , '$lastName' , ' $addLine1' , ' $addLine2' , ' $city' ,' $state' ,' $postal' ,' $contact' ,' $email' ,' $arriveDate',' $depatureDate',' $noAdults',' $noKids',' $typeOfRoom',' $numberOfRooms')");


 header("Location:userDetails.php");



}



?>


<link rel="stylesheet" href="regi.css">



<div class="way">
 <pre class="">Way 
       to 
           Paradise
          
      </pre>
</div>


        <div class="backimage">
            <img src="eve.jpg" alt="">
        </div>



        

    

<form  class="register"  method="post" onsubmit="return validate()">
        <img src="catchabreak.65b115fe8b8dc3.01177570.png" alt="">
        <h2>Hotel Reservation Form</h2>
        <h4>Please Complete the Form Below</h4>

        <div class="lables">
            <label  for="">Full Name</label><br>
            <input  class="first"  name="firstName"    id="first" type="text" placeholder="First Name" required>    <input     name="lastName"   id="last"  class="last" type="text" placeholder="Last Name" required><br>
            <label for="">Address</label><br>
            <input   name="line1"   id="line1"  class="address" type="text" placeholder="Street Address" required><br>
            <input   name="line2"   id="line2"  class="address" type="text" placeholder="Street Address line 2" required><br>
            <input   name="city"  class="city"  type="text"  id="city" placeholder="City" required>   <input   name="state"  class="state"  type="text"  id="state" placeholder="State/Province"><br>
            <input  name="postal"  class="postal" id ="postal" type="text" placeholder="Postal Code"><br>
           
            
                    <div class="emailcon">
                        <label  class="con" for="">Contact Number</label>
                        <label  class="emai" for="">Email</label><br>
                    </div>
          
            <input  name="contact" class="contact" id="contact" type="text" placeholder="07x-xxx-xxxx"> 
            <input  name="Email" class="email"  id="email" type="text" placeholder="eg:name@gmail.com"><br>
                 
                    <div class="date">
                        <label class="arrival"  for="">Arraival-Date</label>
                        <label  class="depature" for="">Depature-Date</label><br>
                    </div>

              <input name="arriveDate"  id="arriveDate" class="arriveDate" type="date"> 
              <input name="depatureDate"  id="depatureDate" class="depatureDate" type="date">

                    <div class="members">
                      <label class="adults"  for="">Number of Adults</label>
                      <label class="kids"  for="">Number of Kids</label><br>
                    </div>
              
             <input  class="noAdults" id="noAdults"  name="noAdults" type="number">
             <input  class="noKids" id="noKids"  name="noKids" type="number">
                   
             <div class="rooms">
                <label class="roomType"  for="">Type Of Room</label>
                <label class="numberRooms"  for="">Number of Rooms</label><br>
              </div>

               
             <select  class="typeOfRoom" name="typeOfRoom" id="typeOfRoom">
                <option value=""   disabled selected>Select Room Type</option>
                <option value="Single">Single</option>
                <option value="Double">Double</option>
                <option value="Triple">Triple</option>
                <option value="Quad">Quad</option>
                <option value="Queen">Queen</option>
                <option value="King">King</option>
                <option value="Twin">Twin</option>

             </select>
             
             <input  class="numberOfRooms" id="numberOfRooms"  name="numberOfRooms" type="number"><br>

             <input  class="submit"  name="submit" type="submit">
                   



        </div>
    </form>


  
    <?php
      include_once "footer.php";
     ?>
   


   
<script src="validation.js"></script>

</body>
</html>









