
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="dashboard.css">

</head>
<body>

<h2> Users' Details Dashboard</h2>
     <div class="catalog">
         <div class="userSignIn">
            <img src="user.jpg" alt=""  class="Image">
            <p class="Text"> User Login<br> Deatils</p>
            <button  onclick=signIn() class="Button">Check</button>
         </div>


         <div class="roomBooking">
            <img src="roomCartoon.jpg" alt=""  class="Image">
            <p class="Text"> User Reservation <br>Deatils</p>
            <button  onclick=booking() class="Button">Check</button>
         </div>


         <div class="cotact">
             <img src="conta.jpg" alt=""  class="Image">
            <p class="Text"> User Contact<br> Deatils</p>
            <button  onclick=contact() class="Button">Check</button>
         </div>


         <div class="resturant">
            <img src="food.jpg" alt=""  class="Image">
            <p class="Text"> User Resturant <br>Deatils</p>
            <button  onclick=resturant() class="Button">Check</button>
         </div>


     </div>

     <script src="detailsView.js"></script>

</body>
</html>



