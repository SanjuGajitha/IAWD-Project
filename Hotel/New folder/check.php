<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Admin Panel</title>
    <link rel="stylesheet" href="admin.css"> 








</head>
<body>


     <h1> LUXURY HOTEL</h1>
    <div class="container">

        <h2>Hotel Admin Panel</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Guest Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State/province</th>
                    <th>Postal Code</th>
                    <th>Contact Number</th>
                    <th>Email</th>
                    <th>Arrival-Date</th>
                    <th>Departure-Date</th>
                    <th>Number of Adult</th>
                    <th>Number of Children</th>
                    <th>Type of Room</th>
                    <th>Number of Room</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>123,wallstreet</td>
                    <td>San Andreas</td>
                    <td>California</td>
                    <td>11230</td>
                    <td>+123-233-323-12</td>
                    <td>jhon@gmail.com</td>
                    <td>2024-09-28</td>
                    <td>2024-10-15</td>
                    <td>1</td>
                    <td>0</td>
                    <td>single</td>
                    <td>1</td>
                   
                </tr>
                <!-- Additional rows can be added here -->
                
            </tbody>
        </table>
        <div style="text-align: center; color: aqua;">
        <button class="btn">Edit</button> <button class="btn">Delete</button>
        </div>
    </div>


    <div class="service-section">
    <h2>Our Commitment to Exceptional Guest Service</h2>
    <p>
        At our hotel, we believe that every guest deserves an unforgettable experience. Our administration is dedicated to providing the highest level of service by ensuring that every detail of your stay is handled with care and professionalism. We are committed to:
    </p>
    <dl>
        <li>Offering personalized experiences tailored to your preferences.</li>
        <li>Ensuring quick and efficient check-ins and check-outs.</li>
        <li>Maintaining clean, comfortable, and well-equipped rooms for your utmost convenience.</li>
        <li>Addressing all guest inquiries and requests with promptness and courtesy.</li>
        <li>Creating a welcoming and safe environment for families, business travelers, and leisure guests alike.</li>
    </dl>
    <p>
        Our goal is to make your stay a seamless and relaxing experience, leaving you with lasting memories.
    </p>
    <a href="#" class="cta-button">Learn More</a>
</div>

    <!-- <h3 data-text="World Greatest Hotel Service ^-^">World Greatest Hotel Service ^-^</h3> -->

<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'your_database_name'; 


$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT guest_name, address, city, state_province, postal_code, contact_number, email, arrival_date, departure_date, number_of_adults, number_of_children, room_type, number_of_rooms FROM guests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["guest_name"]. "</td>
                <td>" . $row["address"]. "</td>
                <td>" . $row["city"]. "</td>
                <td>" . $row["state_province"]. "</td>
                <td>" . $row["postal_code"]. "</td>
                <td>" . $row["contact_number"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["arrival_date"]. "</td>
                <td>" . $row["departure_date"]. "</td>
                <td>" . $row["number_of_adults"]. "</td>
                <td>" . $row["number_of_children"]. "</td>
                <td>" . $row["room_type"]. "</td>
                <td>" . $row["number_of_rooms"]. "</td>
              </tr>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>


</body>



</html>