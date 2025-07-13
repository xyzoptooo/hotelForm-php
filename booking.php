
<?php
require_once("db.php");

function dateDiffInDays($start, $end) {
    return max(1, (strtotime($end) - strtotime($start)) / 86400);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room_type = $_POST['room_type'];
    $guests = (int)$_POST['guests'];
    $extras = isset($_POST['extras']) ? implode(', ', $_POST['extras']) : "";
    $payment = $_POST['payment'];
    $requests = $_POST['requests'];

    $nights = dateDiffInDays($checkin, $checkout);

    $room_rates = ["Single" => 50, "Double" => 80, "Suite" => 150];
    $base_price = $room_rates[$room_type] * $nights;

    $extra_cost = 0;
    if (strpos($extras, "Breakfast") !== false) $extra_cost += 10 * $nights;
    if (strpos($extras, "Airport Pickup") !== false) $extra_cost += 20;
    if (strpos($extras, "Gym Access") !== false) $extra_cost += 5 * $nights;

    $total_cost = $base_price + $extra_cost;

    // Save to DB
    $stmt = $mysqli->prepare("INSERT INTO bookings (fullname, checkin, checkout, room_type, guests, extras, payment_method, requests, total_cost) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssd", $fullname, $checkin, $checkout, $room_type, $guests, $extras, $payment, $requests, $total_cost);
    $stmt->execute();

    echo "<h2>Booking Successful!</h2>";
    echo "<a href='view_bookings.php'>View All Bookings</a>";
}
?>
