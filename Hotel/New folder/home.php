<?php
 include_once 'header.php'
?>

<link rel="stylesheet" href="home.css">
    <h1>Enjoy A Luxuary<br> Experience</h1>
    <p>Welcome to Luxuary Hotel , where comfort meets convenience! Explore our selection of beautifully appointed rooms designed to suit every traveler’s needs. 
        Whether you’re here for a relaxing getaway or a productive business trip, our range of accommodations offers everything from cozy single rooms to luxurious suites. 
        Booking with us is easy—simply select your desired dates.
      </p>

      <button class="visit">Visit Our Hotel</button>

 
      <form action="">
         <br>
        <label  class="in">Check in Date</label>
        <label class="out">Check Out Date</label>
        <label class="adult">Adults</label>
        <label class="child">Childs</label>
        <label class="room">Rooms</label>

        <br>
        <input type="date" name="checkin" placeholder="mm/dd/yyyy">
        <input type="date" name="checkout" placeholder="mm/dd/yyyy">
        <input type="number" name="adults" placeholder="Adults">
        <input type="number" name="childs" placeholder="Childs">
        <input type="number" name="rooms" placeholder="Room">

         <button   class="submit" type="submit" name="submit">Check Availability</button>


      </form>
     
      
<?php
  include_once 'footer.php';
?>

</body>
</html>