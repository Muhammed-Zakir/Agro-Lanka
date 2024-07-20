<?php
// Database connection code 
include 'db_connection.php';

// Get data from the form
$loan_type = $_POST['loan_type'];
$loan_amount = $_POST['loan_amount'];
$farm_size = $_POST['farm_size'];
$loan_purpose = $_POST['loan_purpose'];
$full_name = $_POST['full_name'];
$mobile_number = $_POST['mobile-number'];
$email = $_POST['email'];
$address = $_POST['address'];
$town = $_POST['town'];
$province = $_POST['province'];
$postal_code = $_POST['postal-code'];

// Upload loan documents (if provided)
$loan_documents = "";
if ($_FILES['loan_documents']['name']) {
    $target_directory = "uploads/"; // Specify the directory where you want to store uploaded files
    $target_file = $target_directory . basename($_FILES["loan_documents"]["name"]);

    if (move_uploaded_file($_FILES["loan_documents"]["tmp_name"], $target_file)) {
        $loan_documents = $target_file;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// SQL query to insert data into the loan_applications table
$sql = "INSERT INTO loan_applications (loan_type, loan_amount, farm_size, loan_purpose, loan_documents, full_name, mobile_number, email, address, town, province, postal_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and execute the SQL statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("iddsssssssis", $loan_type, $loan_amount, $farm_size, $loan_purpose, $loan_documents, $full_name, $mobile_number, $email, $address, $town, $province, $postal_code);

if ($stmt->execute()) {
    include 'header.php';
    echo "Loan application submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>