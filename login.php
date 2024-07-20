<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

    <script>
           
            function validateForm() {
                
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;

                if (username === "") {
                    alert("Username must be filled out");
                    return false;
                }

                if (password === "") {
                    alert("Password must be filled out");
                    return false;
                }

                return true;
            }

    </script>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    </div>

    <div class="container mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row justify-content-center">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Log in to your account</h4>
                                <form action="login_backend.php" onsubmit="return validateForm();" method="post" class="row g-3 needs-validation"
                                    novalidate>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username (Officer ID):</label>
                                        <input type="text" class="form-control" name="username"
                                            placeholder="Enter your username" id="username" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" id = "password" required>
                                    </div>

                                    <div class="mb-3">
                                        <input type="checkbox" class="form-check-input" name="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>

                                    <div class="mb-3 row">
                                        <button type="submit" id="myButton"
                                            class="btn btn-primary btn-block">Log In</button>
                                    </div>
                                </form>

                                <div class="mb-3 row"><span>Not a Registered User? <a href="signup.php">Sign
                                            Up</a></span></div>
                                <div class="mb-3 row"><span>Need help? <a href="contact.php">Contact us</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <img src="login-page-image.jpg" class="d-block w-100" alt="Image 3" style="height: 100%">
                </div>
            </div>
</body>

</html>