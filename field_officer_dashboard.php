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
    </div>

    <div class="container">
        <div class="container">
        <br>
        <p>
        <h2>Trainings</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Schedule Training</h4>
                        <a href="schedule_training.php">
                            <img src="https://static.thenounproject.com/png/2671530-200.png" alt="training-image"
                                style="height: 100px;">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">My Upcoming Trainings</h4>
                        <a href="view_upcoming_training.php">
                            <img src="https://static.thenounproject.com/png/1853614-200.png" alt="training-image"
                                style="height: 100px;">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">My Previous Trainings</h4>
                        <a href="view_previous_training.php">
                            <img src="https://static.thenounproject.com/png/4236074-200.png" alt="training-image"
                                style="height: 100px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <br>
        <p>
        <h2>Queries</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">New Queries</h4>
                            <a href="new_queries.php">
                                <img src="https://static.thenounproject.com/png/2801024-200.png" style="height: 100px;"
                                    alt="training-image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Previous Queries</h4>
                            <a href="view_old_query.php">
                                <img src="https://static.thenounproject.com/png/1326844-200.png" alt="training-image"
                                    style="height: 100px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="container">
        <br>
        <p>
        <h2>Loan Applications</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">New Loan Applications</h4>
                            <a href="new_loan_applications.php">
                                <img src="https://www.pngitem.com/pimgs/m/495-4957155_finance-icon-loan-approval-icon-png-transparent-png.png"
                                    alt="training-image" style="height: 100px;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Approved Applications</h4>
                            <a href="new_loan_applications.php">
                                <img src="https://png.pngtree.com/png-clipart/20230330/original/pngtree-loan-line-icon-png-image_9011669.png"
                                    style="height: 100px;">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Rejected Applications</h4>
                            <a href="new_loan_applications.php">
                                <img src="https://cdn-icons-png.flaticon.com/512/3898/3898044.png" alt="training-image"
                                    style="height: 100px;">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</body>

</html>