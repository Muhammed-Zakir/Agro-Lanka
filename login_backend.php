<?php
session_start();

// Database connection code 
include 'db_connection.php';

// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? $_POST['remember'] : false;

    // Retrieve user data from the database
    $sql = "SELECT id, role, username, password FROM users WHERE username = '$username';";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['logged'] = true;

            // Redirect to the user's dashboard or home page
            if ($_SESSION['role'] == 'Admin') {
                header("Location: admin_dashboard.php");
            } elseif ($_SESSION['role'] == 'FieldOfficer') {
                header("Location: field_officer_dashboard.php");
            }

            if ($remember) {
                $cookie_name = "remember_me_cookie";
                $cookie_value = base64_encode($row['id'] . ":" . $row['email']);
                $expiration_time = time() + (365 * 24 * 60 * 60); // 1 year
                setcookie($cookie_name, $cookie_value, $expiration_time, "/");
            }


        } else {
            // $_SESSION['logged'] = false;
            // echo "Invalid password. Please try again.";
            ?>

            <script>

                alert("Invalid password. Please try again.")
                setTimeout(function () {
                    window.location.href = "login.php";
                }, 0);
            </script>

            <?php
        }
    } else {
        // echo "User not found. Please check your username.";
        ?>

        <script>

            alert("User not found. Please check your username.")
            setTimeout(function () {
                window.location.href = "login.php";
            }, 0);
        </script>
        <?php

    }
}

$conn->close();

?>