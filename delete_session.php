<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the session ID from the URL parameter
    $session_id = $_GET['id'];

    // Database connection code 
    include 'db_connection.php';

    // SQL query to delete the session from the database
    $sql = "DELETE FROM training_sessions WHERE session_id = $session_id";

    if ($conn->query($sql) === TRUE) {
        echo "Training session deleted successfully!";
    } else {
        echo "Error deleting the training session: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid session ID.";
}
?>
