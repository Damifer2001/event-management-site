<?php
require './../pages/connect.php';

// Fetch records
$sql = "SELECT * FROM event";
$result = $conn->query($sql);

// Delete record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $id = intval($id); // Prevent SQL Injection

    $sql = "DELETE FROM event WHERE eventId='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully'); window.location.href='event.php';</script>";
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
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>All Events</title>

</head>
<body>
    <!-- Display Events -->
    <div class="flex">
        <h3>Event List</h3>
        <a href="./addevent.php">Add new event</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Type</th>
                <th>Event Price</th>
                <th>No. of Participants</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['eventName']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['eventType']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['eventPrice']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['NoOfParticipants']) . "</td>";
                    echo "<td>";
                    echo "<a class='action-btn' href='updateEvent.php?id=" . htmlspecialchars($row['eventId']) . "'>Edit</a>";
                    echo "<a href='event.php?delete=" . htmlspecialchars($row['eventId']) . "' class='action-btn'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No events found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
