<?php

if(isset($_POST['button']) ){

$username=$_POST['name'];
$password=$_POST['password'];


// echo $username ." ".$password;

require_once 'connection.php';
require_once 'functions.inc.php';


 $emptyuser=emptyInputLogin($username,$password);
        if($emptyuser!==false)
        {      
                
                 exit();
        }


        else{
                
               
                loginUser($conn,$username,$password);
        }

  
       

 

}

else{

  header("Location:Login.php");
  exit();

 }

