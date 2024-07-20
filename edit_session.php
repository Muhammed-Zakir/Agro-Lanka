<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the session ID from the URL parameter
    $session_id = $_GET['id'];

    // Database connection code 
    include 'db_connection.php';

    // SQL query to fetch session details based on session ID
    $sql = "SELECT * FROM training_sessions WHERE session_id = $session_id";

    // Execute the query
    $result = $conn->query($sql);

    // Check if a session with the given ID exists
    if ($result->num_rows == 1) {
        // Fetch session details
        $row = $result->fetch_assoc();

        // Now you have session details in $row, and you can use them for editing
        $session_name = $row["session_name"];
        $session_date = $row["session_date"];
        $session_time = $row["session_time"];
        $session_location = $row["session_location"];
        $session_capacity = $row["session_capacity"];
        $session_topics = $row["session_topics"];

        // Display the session details in a form for editing
        echo "<h2>Edit Training Session</h2>";
        echo "<form method='post' action='update_session.php'>";
        echo "<input type='hidden' name='session_id' value='$session_id'>";
        echo "<label for='session_name'>Session Name:</label>";
        echo "<input type='text' id='session_name' name='session_name' value='$session_name' required><br>";
        echo "<label for='session_date'>Session Date:</label>";
        echo "<input type='date' id='session_date' name='session_date' value='$session_date' required><br>";
        echo "<label for='session_time'>Session Time:</label>";
        echo "<input type='time' id='session_time' name='session_time' value='$session_time' required><br>";
        echo "<label for='session_location'>Session Location:</label>";
        echo "<input type='text' id='session_location' name='session_location' value='$session_location' required><br>";
        echo "<label for='session_capacity'>Session Capacity:</label>";
        echo "<input type='number' id='session_capacity' name='session_capacity' value='$session_capacity' required><br>";
        echo "<label for='session_topics'>Session Topics:</label>";
        echo "<textarea id='session_topics' name='session_topics' rows='4' required>$session_topics</textarea><br>";
        echo "<input type='submit' value='Update Session'>";
        echo "</form>";
    } else {
        echo "Session not found.";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid session ID.";
}
?>