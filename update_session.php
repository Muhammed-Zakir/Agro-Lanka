<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the updated session details from the form
    $session_id = $_POST["session_id"];
    $session_name = $_POST["session_name"];
    $session_date = $_POST["session_date"];
    $session_time = $_POST["session_time"];
    $session_location = $_POST["session_location"];
    $session_capacity = $_POST["session_capacity"];
    $session_topics = $_POST["session_topics"];

    // Database connection code 
    include 'db_connection.php';

    // SQL query to update the session details in the database
    $sql = "UPDATE training_sessions SET
            session_name = '$session_name',
            session_date = '$session_date',
            session_time = '$session_time',
            session_location = '$session_location',
            session_capacity = '$session_capacity',
            session_topics = '$session_topics'
            WHERE session_id = $session_id";

    if ($conn->query($sql) === TRUE) {
        echo "Training session updated successfully!";
    } else {
        echo "Error updating the training session: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>