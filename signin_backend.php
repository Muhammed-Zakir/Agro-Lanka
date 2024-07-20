<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php
    // Database connection code 
    include 'db_connection.php';

    // Retrieve user data from the POST request
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform basic validation
    if (empty($fname) || empty($lname) || empty($email) || empty($role) || empty($username) || empty($password)) {
        echo "All fields are required.";
    } else {
        // Hash the password for security (you should use a more secure hashing method)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute an SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO users (fname, lname, email, role, username, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $fname, $lname, $email, $role, $username, $hashedPassword);

        $response = ($stmt->execute()) ? "User registration successful!" : "Error: " . $stmt->error;
        echo $response;
        // Close the prepared statement and database connection
        $stmt->close();
        $conn->close();
    }
    ?>