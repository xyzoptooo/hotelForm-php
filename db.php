
<?php
$host = "localhost";
$user = "root";
$pass = "Dannygram100%";
$db = "hotel_system";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>



<!-- CREATE DATABASE hotel_system;

USE hotel_system;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100),
    checkin DATE,
    checkout DATE,
    room_type VARCHAR(50),
    guests INT,
    extras TEXT,
    payment_method VARCHAR(50),
    requests TEXT,
    total_cost DECIMAL(10,2),
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->
