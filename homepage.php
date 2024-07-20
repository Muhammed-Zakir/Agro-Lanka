<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page Agro Lanka</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        .custom-row {
            background-color: lightgreen;
            padding: 10px;
            text-align: center;
        }

        .heading-services {
            font-size: 30px;
            color: #black;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="container mt-3">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="chinese-farmer.jpg"
                            class="d-block w-100" alt="Image 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image2.jpg" class="d-block w-100" alt="Image 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image3.jpg" class="d-block w-100" alt="Image 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row custom-row">
            <h1 class="heading-services">Services</h1>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://media.istockphoto.com/id/922593814/photo/agronomist-consulting-with-farmer-outdoor-in-the-field.webp?b=1&s=170667a&w=0&k=20&c=5Z7XsB3sBRQu1qcGrg7tkpZvl_17f2p-SB3S4p-awpQ="
                        alt="field-officer-image" class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Ask From Experts</h5>
                        <p class="card-text">Have a question? Our officers are here to help. Submit your query now.</p>
                        <a href="query_form.php" class="btn btn-primary">Submit Query</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://img.freepik.com/premium-photo/farmer-vibrant-field-gathering-fresh-produce_768772-899.jpg"
                        class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Be a Trained Farmer</h5>
                        <p class="card-text">Join our upcoming training sessions to enhance your farming skills and
                            knowledge.</p>
                        <a href="upcoming_training_farmers_page.php" class="btn btn-primary">View Upcoming Trainings</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://cdn.firstcry.com/education/2022/04/06112641/1841818735.jpg" alt="Loan Image"
                        class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Financial Support</h5>
                        <p class="card-text">Explore our loan options and apply for financial support today.</p>
                        <a href="loan_application.php" class="btn btn-primary">Apply For Loan</a>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-4">
                <div class="card">
                    <img src="https://www.ambujacementfoundation.org/blog/uploads/6705organic.jpg" alt="Insurance Image"
                        class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h5 class="card-title">Ensure Your Organic Products</h5>
                        <p class="card-text">Protect your organic products with our insurance options. Apply today.</p>
                        <a href="apply_insurance.php" class="btn btn-primary">Apply Organic Insurance</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    </div>

    <?php
    include 'footer.php';
    ?>




</body>

</html>