<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking Form</title>
</head>
<body>
    <h2>Hotel Booking Form</h2>
    <form action="booking.php" method="post">
        <label>Full Name:</label>
        <input type="text" name="fullname" required><br><br>

        <label>Check-in Date:</label>
        <input type="date" name="checkin" required><br><br>

        <label>Check-out Date:</label>
        <input type="date" name="checkout" required><br><br>

        <label>Room Type:</label>
        <select name="room_type" required>
            <option value="Single">Single - $50/night</option>
            <option value="Double">Double - $80/night</option>
            <option value="Suite">Suite - $150/night</option>
        </select><br><br>

        <label>Number of Guests:</label>
        <input type="number" name="guests" min="1" max="6" required><br><br>

        <label>Extras:</label><br>
        <input type="checkbox" name="extras[]" value="Breakfast"> Breakfast ($10/day)<br>
        <input type="checkbox" name="extras[]" value="Airport Pickup"> Airport Pickup ($20 once)<br>
        <input type="checkbox" name="extras[]" value="Gym Access"> Gym Access ($5/day)<br><br>

        <label>Payment Method:</label><br>
        <input type="radio" name="payment" value="Credit Card" required> Credit Card
        <input type="radio" name="payment" value="Mobile Money" required> Mobile Money<br><br>

        <label>Special Requests:</label><br>
        <textarea name="requests" rows="3" cols="30"></textarea><br><br>

        <input type="submit" value="Book Now">
    </form>
</body>
</html>
