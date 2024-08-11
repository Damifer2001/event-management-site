<?php
require './../pages/connect.php';

// Add new record
if (isset($_POST['add'])) {
    $eventName = $_POST['eventName'];
    $eventType = $_POST['eventType'];
    $eventPrice = $_POST['eventPrice'];
    $NoOfParticipants = $_POST['NoOfParticipants'];

    $eventName = $conn->real_escape_string($eventName); // Prevent SQL Injection
    $eventType = $conn->real_escape_string($eventType);
    $eventPrice = $conn->real_escape_string($eventPrice);
    $NoOfParticipants = $conn->real_escape_string($NoOfParticipants);

    $sql = "INSERT INTO event (eventName, eventType, eventPrice, NoOfParticipants) VALUES ('$eventName', '$eventType', '$eventPrice', '$NoOfParticipants')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Event added successfully'); window.location.href='event.php';</script>";
    } else {
        echo "<script>alert('Error adding event')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Add Event</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<body>
    <h2>Event Management</h2>

    <!-- Add Event Form -->
    <div id="add-form">
        <h3>Add New Event</h3>
        <form method="post">
            <label for="eventName">Event Name:</label>
            <select id="eventName" name="eventName" required>
            <option value="" disabled selected>Select Event Name</option>
            <option value="Wedding">Wedding</option>
            <option value="Birthday Parties" >Birthday Parties</option>
            <option value="Met Gala Dinner" >Met Gala Dinner</option>
            <option value="Funeral" >Funeral</option>
            <option value="Product Launch" >Product Launch</option>
            <option value="Conference">Conference</option>
            <option value="Workshop">Workshop</option>
            <option value="Musical Concert">Musical Concert</option>

                <!-- Add more predefined event names as needed -->
            </select>

            <label for="eventType">Event Type:</label>
            <select id="eventType" name="eventType" required>
                <option value="" disabled selected>Select Event Type</option>
                <option value="Indoor">Indoor</option>
                <option value="Outdoor">Outdoor</option>
                <!-- Add more predefined event types as needed -->
            </select>

            <label for="eventPrice">Event Price:</label>
            <input type="number" id="eventPrice" name="eventPrice" required>

            <label for="NoOfParticipants">Number of Participants:</label>
            <input type="number" id="NoOfParticipants" name="NoOfParticipants" required>

            <input type="submit" name="add" value="Add Event">
        </form>
    </div>
</body>
</html>
