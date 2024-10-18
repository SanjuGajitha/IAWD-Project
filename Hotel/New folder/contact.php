<?php

 include_once 'header.php'




?>
<link rel="stylesheet" href="newContact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<h2>Contact Us</h2>
<div class="contact">
       

        

        <div class="contact-form">
            <img src="contactUs.jpg" alt="">
           
            <form action="contact_inc.php" method="post">
                <input type="text" name="name" class="textbox" placeholder="Enter your name">
                <input type="email" name="email" class="textbox" placeholder="Enter your email">
                <textarea name="message" rows="5" placeholder="Your message"></textarea><br>
                <input type="submit" name="submit" class="send_btn" value="Send">
            </form>
        </div>

        
    </div>



        <div class="contact-info">
            <div><i class="fa-solid fa-location-dot"></i>Address, City, Country</div>
            <div><i class="fa-solid fa-envelope"></i>contact@gmail.com</div>
            <div><i class="fa-solid fa-phone"></i>+94 78 562 968 / 91 856 789</div>
            <div><i class="fa-solid fa-clock"></i>Mon - Tues 9:00 AM TO 10:00 PM</div>
            
        </div>




    <?php
  include_once 'footer.php';
?>

</body>
</html>