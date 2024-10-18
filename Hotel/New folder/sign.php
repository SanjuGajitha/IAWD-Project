<?php 
    include_once 'header.php';
  ?>


<link rel="stylesheet" href="sign.css">


<div class="login-container">

        <div class="image-side">
            <img src="welcome.jpg" alt="Hotel Image">
        </div>
    <form action="sign.inc.php" method="post" class="login-form">
      
        <h2>Sign Form</h2>

            <input type="text" name="name" placeholder="Your Name"><br>
            <input type="text" name="email" placeholder="Your Email"><br>
            <input type="text"  name="contactnumber" placeholder="Contact Number.."><br>
            <input type="text"  name="username" placeholder="Username.."><br>
            <input type="password"  name="password" placeholder="Password.."><br>
            <input type="password"  name="confirmpassword" placeholder="Confirm Password.."><br>
            <button name="button">Sign Up</button>
            
            <div class="account1">
                  <p>Already you hava an acoount ? <a   style=" color:green"  href="login.php">Login</a></p>
            </div>

        
    </form>

</div>
  







  </form>
  
  </div>

  <!-- create account setting... -->
  

 

  
  

  <?php 
    include_once 'footer.php';
   ?>