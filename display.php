<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
</head>
<body>

    <h1>Event Details</h1>

    <?php
    
    if (isset($_SESSION['event_data'])) {
        $event = $_SESSION['event_data'];
        echo "<h2>".$event['event_name']."</h2>";
        echo "<p><strong>Date:</strong> ".$event['event_date']."</p>";
        echo "<p><strong>Location:</strong> ".$event['event_location']."</p>";
        echo "<p><strong>Description:</strong> ".$event['event_description']."</p>";
    } else {
        echo "<p>No event data found.</p>";
    }
    ?>

    <br><br>
    <a href="index.php">Go back to submit another event</a>

</body>
</html>
