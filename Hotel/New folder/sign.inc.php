<?php

if(isset($_POST['button']) ){

$name=$_POST['name'];
$email=$_POST['email'];
$contactNumber=$_POST['contactnumber'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmpassword'];


//  echo $username ." ".$password;

require_once 'connection.php';
require_once 'functions.inc.php';

$emptyInputs=emptyInputSignup($name,$contactNumber,$username,$password,$confirmPassword);
$invalidUserName=invalidUserName($username);
$invalidEmail=invalidEmail($email);
$passwordMatch=passwordMatch($password,$confirmPassword);
$userNameExist=userNameExist($conn,$username,$email);

        if($emptyInputs !==false)
        {  
             header('Location:sign.php?error=invalidinputs');
             exit();
        }


        if($invalidUserName !== false)
        {
           

            header('Location:sign.php?error=invalidusername');
                exit();
            
        }



        if($invalidEmail !==false)
        {
               header('Location:sign.php?error=invalidemail');
                exit();
        }


        if($passwordMatch !==false)
        {
               header('Location:sign.php?error=passworddoesnotmatch');
                exit();
        }


        if($userNameExist !==false)
        {
               header('Location:sign.php?error=usernameexist');
                exit();
        }


        createUser($conn,$name,$email,$contactNumber,$username,$password);

}

 else{

  header('Location:login.php');
  exit();

 }