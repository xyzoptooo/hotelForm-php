<?php
require_once("db.php");

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM bookings WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    echo "Booking deleted.<br>";
}

echo "<a href='view_bookings.php'>Back to Bookings</a>";
?>
