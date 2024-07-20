<!DOCTYPE html>
<html>
<head>
    <title>Submit Query</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .query-option {
            margin-bottom: 20px;
        }
        .query-option h3 {
            font-size: 18px;
            margin-top: 10px;
        }
        .query-option p {
            font-size: 14px;
        }
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
        <div class="container">
    <?php
        include 'header.php';
    ?>
    </div>


    <div class="container mt-5">
        <h2 class="text-center">Submit Query</h2>
        <div class="row">
            <div class="col-md-3 query-option">
                <div class="card">
                    <img src="https://s42814.pcdn.co/wp-content/uploads/2020/01/Pest-Control_iStock-1152831927.0-768x576-1500x1125.jpg.webp" alt="Pest Control Image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Organic Pest Control</h3>
                        <p class="card-text">Explore organic pest control options.</p>
                        <a href="organic_pest_control.php" class="btn btn-primary">Submit Query</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 query-option">
                <div class="card">
                    <img src="https://s3-us-east-2.amazonaws.com/maryville/wp-content/uploads/2021/02/26110230/hands-in-soil.jpg" alt="Soil Health Image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Soil Health and Conservation</h3>
                        <p class="card-text">Learn about soil health and conservation techniques.</p>
                        <a href="soil_health_conservation.html" class="btn btn-primary">Submit Query</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 query-option">
                <div class="card">
                    <img src="https://climapod.com/wp-content/uploads/2022/09/b6b81555344f637716fcea75dcfcf3bc.jpg" alt="Crop Rotation Image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Crop Rotation and Planting</h3>
                        <p class="card-text">Find information on crop rotation and planting methods.</p>
                        <a href="crop_rotation_planting.html" class="btn btn-primary">Submit Query</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 query-option">
                <div class="card">
                    <img src="https://www.thespruce.com/thmb/XlcyHooeL1ZYzMsIHcQVgE8B5W0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/the-hands-of-a-man-planting-pumpkin-seeds-150800726-5b022e0b6bf0690036aa2c6b.jpg" alt="Seed Management Image" class="card-img-top">
                    <div class="card-body">
                        <h3 class="card-title">Organic Seed Management</h3>
                        <p class="card-text">Manage your organic seeds effectively.</p>
                        <a href="organic_seed_management.html" class="btn btn-primary">Submit Query</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="homepage.php" class="btn btn-primary mt-3">Back to Home Page</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
