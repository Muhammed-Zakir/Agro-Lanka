<?php
// Database connection code 
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $queryType = $_POST['query_type'];
    $queryDescription = $_POST['query_description'];
    $previousMethods = $_POST['previous_methods'];

    // Handle file upload
    $targetDir = "uploads/"; // Create this directory to store uploaded images
    $targetFile = $targetDir . basename($_FILES["qury_images"]["name"]);

    // You can also validate and sanitize form data here

    // Insert data into the database
    $sql = "INSERT INTO agriculture_queries (query_type, query_description, previous_methods, image_path, full_name, mobile_number, whatsapp_number, email, address, town, province, postal_code)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssssssis", $queryType, $queryDescription, $previousMethods, $targetFile, $_POST['full_name'], $_POST['mobile-number'], $_POST['whatsapp-number'], $_POST['email'], $_POST['address'], $_POST['town'], $_POST['province'], $_POST['postal-code']);

    // Execute the statement
    if ($stmt->execute()) {
        // Data inserted successfully
        $insertMessage = "Data inserted into the database.";
    } else {
        // Error inserting data
        $insertMessage = "Error inserting data into the database: " . $conn->error;
    }

    // Close the statement
    $stmt->close();

    // Display the database insert message
    echo "<p><strong>Database Insert:</strong> " . $insertMessage . "</p>";

    // Close the database connection
    $conn->close();
}
?>