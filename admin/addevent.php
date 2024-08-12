<?php
require './../pages/connect.php'; // Including the database connection file

// Add new record
if (isset($_POST['add'])) { // Check if the form is submitted
    $eventName = $_POST['eventName'];
    $eventType = $_POST['eventType'];
    $eventPrice = $_POST['eventPrice'];
    $NoOfParticipants = $_POST['NoOfParticipants'];

    // Prevent SQL Injection by escaping user input
    $eventName = $conn->real_escape_string($eventName); 
    $eventType = $conn->real_escape_string($eventType);
    $eventPrice = $conn->real_escape_string($eventPrice);
    $NoOfParticipants = $conn->real_escape_string($NoOfParticipants);

    // Prepare SQL query to insert new event record
    $sql = "INSERT INTO event (eventName, eventType, eventPrice, NoOfParticipants) VALUES ('$eventName', '$eventType', '$eventPrice', '$NoOfParticipants')";
    
    // Execute the query and check if it was successful
    if ($conn->query($sql) === TRUE) {
        // If successful, show a success message and redirect to 'event.php'
        echo "<script>alert('Event added successfully'); window.location.href='event.php';</script>";
    } else {
        // If an error occurs, show an error message
        echo "<script>alert('Error adding event')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css"> <!-- Link to external CSS for styling -->
    <title>Add Event</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon"> <!-- Favicon -->
</head>
<body>
    <h2>Event Management</h2>

    <!-- Add Event Form -->
    <div id="add-form">
        <h3>Add New Event</h3>
        <form method="post"> <!-- Form submission method is POST -->
            <label for="eventName">Event Name:</label>
            <select id="eventName" name="eventName" required> <!-- Event Name dropdown -->
                <option value="" disabled selected>Select Event Name</option>
                <option value="Wedding">Wedding</option>
                <option value="Birthday Parties">Birthday Parties</option>
                <option value="Met Gala Dinner">Met Gala Dinner</option>
                <option value="Funeral">Funeral</option>
                <option value="Product Launch">Product Launch</option>
                <option value="Conference">Conference</option>
                <option value="Workshop">Workshop</option>
                <option value="Musical Concert">Musical Concert</option>
                <!-- Additional event names can be added here -->
            </select>

            <label for="eventType">Event Type:</label>
            <select id="eventType" name="eventType" required> <!-- Event Type dropdown -->
                <option value="" disabled selected>Select Event Type</option>
                <option value="Indoor">Indoor</option>
                <option value="Outdoor">Outdoor</option>
                <!-- Additional event types can be added here -->
            </select>

            <label for="eventPrice">Event Price:</label>
            <input type="number" id="eventPrice" name="eventPrice" required> <!-- Input field for event price -->

            <label for="NoOfParticipants">Number of Participants:</label>
            <input type="number" id="NoOfParticipants" name="NoOfParticipants" required> <!-- Input field for number of participants -->

            <input type="submit" name="add" value="Add Event"> <!-- Submit button to add the event -->
        </form>
    </div>
</body>
</html>
