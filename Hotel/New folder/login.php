<?php 
    include_once 'header.php';
  ?>

  <link rel="stylesheet" href="login.css">
  

   
        
  

    <div class="login-container">

        <div class="image-side">
            <img src="welcome.jpg" alt="Hotel Image">
        </div>
        
    <form action="login.inc.php" method="post" class="login-form">
      
        <h2>Login</h2>
        <input type="text" name="name" placeholder="Your Email or Name.." required><br>
        <input type="password" name="password" placeholder="Your Password.." required><br>
        <button name="button">Login</button>

        <div class="account">
          <p>Don't have an Account ? <a  style=" color:green"  href="sign.php">Sign in</a></p>
        </div>

        <div class="socialmedia">
          <img src="facebook.png" alt="facebook">
          <img src="instagram.png" alt="instagram">
          <img src="twitter.png" alt="twitter">
        </div>
    </form>

</div>

   


  

  
  

  <?php 
    include_once 'footer.php';
   ?>
