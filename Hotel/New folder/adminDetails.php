<?php
if(isset($_POST['submit']))
{
    $name=$_POST['adminname'];
    $password=$_POST['password'];


  if($name=="hotel" && $password=="hotel")
  {
    header("Location:dashboard.php");
  }

  else{
    header("Location:admin.php?Invalid_Login???");
  }


}


else{
    header("Location:admin.php?Invalid_Login???");
}


?>
