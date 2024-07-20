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
    include 'header.php';
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Create New Account</h4>
                        <h5 class="card-title text-center">Field Officers</h4>
                            <form action="signin_backend.php" method="post" class="row g-3 needs-validation" novalidate>

                                <div class="mb-3">
                                    <label for="fname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" name="fname"
                                        placeholder="Enter your first name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" name="lname"
                                        placeholder="Enter your last name" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter your email address" required>
                                    <!-- <div class="invalid-feedback">
                                        Please enter your email address.    
                                    </div> -->
                                </div>

                                <div class="mb-3">
                                    <label for="user-type" class="form-label">Register As:</label>
                                    <div class="form-check">
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option value="Admin">Admin</option>
                                            <option value="FieldOfficer">Field Officer</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="username" class="form-label">Username (is your Officer ID
                                        Number):</label>
                                    <input type="text" class="form-control" name="username"
                                        placeholder="Enter your Officer ID" required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Enter a Strong Password" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary btn-block"
                                            onclick="validateLoginForm()">Submit</button>
                                    </div>
                                </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    <?php
    include 'footer.php';
    ?>

</body>

</html>