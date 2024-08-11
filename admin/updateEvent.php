<?php
require './../pages/connect.php';

// Fetch the record to be updated
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Prevent SQL Injection
    $result = mysqli_query($conn, "SELECT * FROM event WHERE eventId = $id");

    if (mysqli_num_rows($result) > 0) {
        $event = mysqli_fetch_assoc($result);
        // Populate variables with current event data
        $eventName = htmlspecialchars($event['eventName']);
        $eventType = htmlspecialchars($event['eventType']);
        $eventPrice = htmlspecialchars($event['eventPrice']);
        $NoOfParticipants = htmlspecialchars($event['NoOfParticipants']);
    } else {
        echo "No event found with the provided ID.";
        exit;
    }
}

// Update record
if (isset($_POST['update'])) {
    $eventName = $_POST['eventName'];
    $eventType = $_POST['eventType'];
    $eventPrice = $_POST['eventPrice'];
    $NoOfParticipants = $_POST['NoOfParticipants'];

    $eventName = $conn->real_escape_string($eventName); // Prevent SQL Injection
    $eventType = $conn->real_escape_string($eventType);
    $eventPrice = $conn->real_escape_string($eventPrice);
    $NoOfParticipants = $conn->real_escape_string($NoOfParticipants);

    $sql = "UPDATE event SET eventName='$eventName', eventType='$eventType', eventPrice='$eventPrice', NoOfParticipants='$NoOfParticipants' WHERE eventId='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record updated successfully'); window.location.href='event.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Update Event</title>
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<body>
    <!-- Update Event Form -->
    <div id="update-form">
    <h3>Update Event</h3>
    <form action="updateEvent.php?id=<?php echo $id; ?>" method="post">
        <input type="hidden" id="id" name="id" value='<?php echo $id; ?>'>

        <label for="eventName">Event Name:</label>
        <select id="editEventName" name="eventName" required>
            <option value="" disabled selected>Select Event Name</option>
            <option value="Wedding" <?php if($eventName == 'Wedding') echo 'selected'; ?>>Wedding</option>
            <option value="Birthday Parties" <?php if($eventName == 'Birthday Parties') echo 'selected'; ?>>Birthday Parties</option>
            <option value="Met Gala Dinner" <?php if($eventName == 'Met Gala Dinner') echo 'selected'; ?>>Met Gala Dinner</option>
            <option value="Funeral" <?php if($eventName == 'Funeral') echo 'selected'; ?>>Funeral</option>
            <option value="Product Launch" <?php if($eventName == 'Product Launch') echo 'selected'; ?>>Product Launch</option>
            <option value="Conference" <?php if($eventName == 'Conference') echo 'selected'; ?>>Conference</option>
            <option value="Workshop" <?php if($eventName == 'Workshop') echo 'selected'; ?>>Workshop</option>
            <option value="Musical Concert" <?php if($eventName == 'Musical Concert') echo 'selected'; ?>>Musical Concert</option>
            <!-- Add more options as needed -->
        </select>

        <label for="eventType">Event Type:</label>
        <select id="editEventType" name="eventType" required>
            <option value="" disabled selected>Select Event Type</option>
            <option value="Indoor" <?php if($eventType == 'Indoor') echo 'selected'; ?>>Indoor</option>
            <option value="Outdoor" <?php if($eventType == 'Outdoor') echo 'selected'; ?>>Outdoor</option>
            
            <!-- Add more options as needed -->
        </select>

        <label for="eventPrice">Event Price:</label>
        <input type="number" id="editEventPrice" name="eventPrice" value='<?php echo htmlspecialchars($eventPrice); ?>' required>

        <label for="NoOfParticipants">Number of Participants:</label>
        <input type="number" id="editNoOfParticipants" name="NoOfParticipants" value='<?php echo htmlspecialchars($NoOfParticipants); ?>' required>

        <input type="submit" name="update" value="Update Event">
    </form>
</div>

</body>
</html>
