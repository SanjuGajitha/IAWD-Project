<?php
// Database connection variables
$host = 'localhost'; // Your database host (usually localhost)
$username = 'root'; // Your database username
$password = ''; // Your database password
$database = 'your_database_name'; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT guest_name, address, city, state_province, postal_code, contact_number, email, arrival_date, departure_date, number_of_adults, number_of_children, room_type, number_of_rooms FROM guests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
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

// Close the connection
$conn->close();
?>