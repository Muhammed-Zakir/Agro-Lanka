<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pest Control Query</title>

    <!-- CSS and JavaScript dependencies -->
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

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center">Agriculture Queries</h2>
                <div class="row container mt-5">
                    <div class="col-md-6">
                    <h4 class="card-title text-center">Fill Query Details</h4><br>
                        <form id="pestControlForm" action="query_form_backend.php" method="post"
                            enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="query_type" class="form-label">Query Type:</label>
                                <select class="form-select form-select-sm" aria-label="query_type" name="query_type"
                                    required>
                                    <option value="Organic Pest Control">Organic Pest Control</option>
                                    <option value="Soil Health and Conservation">Soil Health and Conservation</option>
                                    <option value="Crop Rotation and Planting">Crop Rotation and Planting</option>
                                    <option value="Organic Seed Management">Organic Seed Management</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="query_description" class="form-label">Describe the Problem:</label>
                                <textarea class="form-control" name="query_description" rows="4" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="previous_methods" class="form-label">Previous Control Methods Used (if
                                    any):</label>
                                <textarea class="form-control" name="previous_methods" rows="4"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="qury_images" class="form-label">Upload Images (if available):</label>
                                <input type="file" class="form-control-file" name="qury_images" accept="image/*">
                            </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Contact Details -->
                        <h4 class="card-title text-center">Fill Contact Details</h4><br>

                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Enter your full name"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="mobile-number" class="form-label">Mobile Number:</label>
                            <input type="text" class="form-control" name="mobile-number"
                                placeholder="Enter your mobile number" required>
                        </div>

                        <div class="mb-3">
                            <label for="whatsapp-number" class="form-label">WhatsApp Number:</label>
                            <input type="text" class="form-control" name="whatsapp-number"
                                placeholder="Enter your WhatsApp number">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email address"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Home Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>

                        <div class="mb-3">
                            <label for="town" class="form-label">Town:</label>
                            <input type="text" class="form-control" name="town" placeholder="Town" required>
                        </div>

                        <div class="mb-3">
                            <label for="province" class="form-label">Province:</label>
                            <select class="form-select form-select-sm" aria-label="Province" name="province" required>
                                <option value="0"></option>
                                <option value="Western Province">Western Province</option>
                                <option value="Central Province">Central Province</option>
                                <option value="Southern Province">Southern Province</option>
                                <option value="Northern Province">Northern Province</option>
                                <option value="Eastern Province">Eastern Province</option>
                                <option value="North Western Province">North Western Province</option>
                                <option value="North Central Province">North Central Province</option>
                                <option value="Uva Province">Uva Province</option>
                                <option value="Sabaragamuwa Province">Sabaragamuwa Province</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="postal-code" class="form-label">Postal Code:</label>
                            <input type="text" class="form-control" name="postal-code" placeholder="Postal Code"
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
                <a href="homepage.html" class="btn btn-secondary mt-3">Back to Dashboard</a>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>