<?php

// Database connection code 
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get Field Officer input for the new session
    $session_name = $_POST["session_name"];
    $session_date = $_POST["session_date"];
    $session_time = $_POST["session_time"];
    $session_location = $_POST["session_location"];
    $session_capacity = $_POST["session_capacity"];
    $session_topics = $_POST["session_topics"];



    // SQL query to insert the new session into the database
    $sql = "INSERT INTO training_sessions (session_name, session_date, session_time, session_location, session_capacity, session_topics) 
            VALUES ('$session_name', '$session_date', '$session_time', '$session_location', '$session_capacity', '$session_topics')";

    if ($conn->query($sql) === TRUE) {
        echo "New session created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
