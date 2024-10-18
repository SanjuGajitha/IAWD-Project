<?php

function emptyInputSignup($name,$contactNumber,$username,$password,$confirmPassword)
{
  $result;
  if(empty($name)||empty($contactNumber)||empty($username)||empty($password)||empty($confirmPassword))
  {
    $result=true;
  }

  else{
    $result=false;
     }

   return $result;
}


function invalidUserName($username)
{
    $result;

    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
        {
        $result=true;
        }

    else{
        $result=false;
        }
    
       return $result;
 }




 function invalidEmail($email)
{
    $result;

    if( !filter_var($email, FILTER_VALIDATE_EMAIL))
        {
        $result=true;
        }

    else{
        $result=false;
        }
    
       return $result;
 }


 function passwordMatch($password,$confirmPassword)
{
    $result;

    if( $password !== $confirmPassword)
        {
        $result=true;
        }

    else{
        $result=false;
        }
    
       return $result;
 }


 function userNameExist($conn,$username,$email)
{
  $sql="SELECT * FROM usersigndetails WHERE userUserName = ?  OR   userEmail =?;";
  $stmt= mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt,$sql))
    {
      header('location:sign.php?error=stmtfailed');
      exit();

    }

    mysqli_stmt_bind_param($stmt,"ss",$username,$email);
    mysqli_stmt_execute($stmt);
    $resultData= mysqli_stmt_get_result($stmt);
    

    if($row=mysqli_fetch_assoc($resultData))
        {
   
        return $row;

        }

    else{

        return false;

        }


        mysqli_stmt_close($stmt);
}



 function createUser($conn,$name,$email,$contactNumber,$username,$password)
 {   
   
 
    $sql = "INSERT INTO usersigndetails(userName,userEmail,userContact,userUserName,userPassword)  VALUES(?,?,?,?,?);";

    $stmt= mysqli_stmt_init($conn);

  if(!mysqli_stmt_prepare($stmt,$sql))
    {
      header('location:sign.php?error=stmtfailed');
      exit();
    }

    

    $hashedPassword=password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss" ,$name ,$email,$contactNumber ,$username ,$hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:login.php?error=none");
    exit();

  


 }


 function emptyInputLogin($username,$password) 

 {
   $result;
  if(empty($name)||empty($password))
  {
    $result=true;
  }
    
     $result=false;
     

   return $result;
}


 function  loginUser($conn,$username,$password)
 {  //output is array

   
   $uidexist = userNameExist($conn,$username,$username);

   if ($uidexist === false )
   {
     header("Location:login.php?error=invalid login");
     exit();

   }

   $hashedPassword=$uidexist['userPassword'];
   $checkPassword=password_verify($password,$hashedPassword);

   if($checkPassword === false)
   {
    
    header("Location:login.php?error=wronglogin");
    exit();

   }

   else if($checkPassword === true)
   {
      session_start();
      $_SESSION['userId'] = $uidexist['userId'];
      $_SESSION['userusername'] = $uidexist['userUserName'];
      $_SESSION['username']  = $uidexist['userName'];
      header("Location:register.php");
      exit();



   }
   

}

 








?>