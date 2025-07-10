<?php
require_once("db.php");

$result = $mysqli->query("SELECT * FROM bookings ORDER BY booking_date DESC");

echo "<h2>All Bookings</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Check-in</th>
<th>Check-out</th>
<th>Room</th>
<th>Guests</th>
<th>Extras</th>
<th>Payment</th>
<th>Total</th>
<th>Action</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['fullname']}</td>
        <td>{$row['checkin']}</td>
        <td>{$row['checkout']}</td>
        <td>{$row['room_type']}</td>
        <td>{$row['guests']}</td>
        <td>{$row['extras']}</td>
        <td>{$row['payment_method']}</td>
        <td>\${$row['total_cost']}</td>
        <td><a href='delete_booking.php?id={$row['id']}' onclick=\"return confirm('Delete this booking?')\">Delete</a></td>
    </tr>";
}
echo "</table>";
?>
