<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture Loan Application</title>

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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center">Agriculture Loan Application</h2>
                <form id="agricultureLoanApplicationForm" action="loan_application_backend.php" method="post"
                    enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="loan_type" class="form-label">Loan Type:</label>
                        <select class="form-select form-select-sm" aria-label="loan_type" name="loan_type" required>
                            <option value="Crop Loan">Crop Loan</option>
                            <option value="Livestock Loan">Livestock Loan</option>
                            <option value="Machinery Loan">Machinery Loan</option>
                            <option value="Infrastructure Loan">Infrastructure Loan</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="loan_amount" class="form-label">Loan Amount:</label>
                        <input type="text" class="form-control" name="loan_amount" placeholder="Enter loan amount" required>
                    </div>

                    <div class="mb-3">
                        <label for="farm_size" class="form-label">Farm Size (in acres):</label>
                        <input type="text" class="form-control" name="farm_size" placeholder="Enter farm size" required>
                    </div>

                    <div class="mb-3">
                        <label for="loan_purpose" class="form-label">Loan Purpose:</label>
                        <textarea class="form-control" name="loan_purpose" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="documents" class="form-label">Upload Documents (if required):</label>
                        <input type="file" class="form-control-file" name="loan_documents" accept="application/pdf">
                    </div>

                    <!-- Contact Details -->
                    <h4 class="card-title text-center">Fill Contact Details</h4><br>

                    <div class="mb-3">
                        <label for="full_name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="full_name"
                            placeholder="Enter your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="mobile-number" class="form-label">Mobile Number:</label>
                        <input type="text" class="form-control" name="mobile-number"
                            placeholder="Enter your mobile number" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email"
                            placeholder="Enter your email address" required>
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
                        <input type="text" class="form-control" name="postal-code" placeholder="Postal Code" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
                <a href="agriculture_dashboard.html" class="btn btn-secondary mt-3">Back to Dashboard</a>
            </div>
        </div>
    </div>
    <?php
    include 'footer.php';
    ?>
</body>

</html>
