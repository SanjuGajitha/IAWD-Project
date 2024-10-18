<?php


include_once "connection.php";

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    echo $name.$email.$message;



    $res=mysqli_query($conn,"INSERT INTO contactdetails(name,email,	message) VALUES('$name','$email','$message')");
    header("Location:home.php");
}



else{
    header("Location:contact.php");
}


?>