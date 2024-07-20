<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Website</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .navbar-brand {
            color: grey;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <a class="navbar-brand" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a class="navbar-brand" href="https://web.facebook.com/SLKDOA/?_rdc=1&_rdr"><i
                            class="fab fa-facebook"></i></a>
                    <a class="navbar-brand" href="https://twitter.com/i/flow/login?redirect_after_login=%2Fagritwitt"><i
                            class="fab fa-twitter"></i></a>
                    <a class="navbar-brand" href="https://www.youtube.com/@departmentofagricultureSLKDOA"> <i
                            class="fab fa-youtube"></i></a>
                </div>

                <div class="col-md-2">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <?php if (isset ($_SESSION['logged'])) { ?>
                            <a href="logout.php" class="btn btn-secondary">Log out</a>
                        
                        <?php } else { ?>    
                            <a href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
                        <?php } ?>  
                        <a href="signin.php"><button type="button" class="btn btn-outline-success">SignUp</button></a>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="card">
                        <img src="logo1.png" alt="Department Logo">
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <h6>Telephone<br>+94 812 388331/32/34
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <h6>Email Address<br>
                            <a href="mailto:info@doa.gov.lk">info@doa.gov.lk</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div>
                        <h6>Office Address<br>
                            <!-- <i class=""></i>  -->
                            Department of Agriculture, <br>P.O.Box. 01, Peradeniya
                    </div>
                </div>
            </div>

            <div class="row" style="background-color: #008265;">
                <div class="col-md-9">
                    <div class="navbar-text">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="homepage.php"
                                    style="color: #fff;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #fff;">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #fff;">Services</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="input-group" style="padding: 9px;">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="search-button">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="search-button"><i
                                    class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>

</html>