<?php

include_once "connection.php";



if(isset($_POST['update']))
    
{
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
    

    echo $updateFirstName;

    mysqli_query($conn,"UPDATE userdetails SET firstName='$updateFirstName' ,lastName='$updateLastName' , addLine1='$line1' , addLine2='$line2' , city='$city',state='$state'
    ,postal='$postal' ,contact='$contact' , email='$email' ,arriveDate='$arriveDate' ,depatureDate='$depatureDate' ,adults='$noAdults',
    kids='$noKids' ,roomType='$typeOfRoom', noOfRooms='$numberOfRooms' WHERE userId ='$id'");
    header("Location:userDetails.php");


}


?>