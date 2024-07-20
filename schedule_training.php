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


</head>

<body>
    <?php
    include 'header.php';
    ?>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Create New Training Session</h2>
            </div>
            <div class="card-body">
                <form method="post" action="create_session_backend.php">
                    <div class="form-group">
                        <label for="session_name">Session Name:</label>
                        <input type="text" class="form-control" id="session_name" name="session_name" required>
                    </div>
                    <div class="form-group">
                        <label for="session_date">Session Date:</label>
                        <input type="date" class="form-control" id="session_date" name="session_date" required>
                    </div>
                    <div class="form-group">
                        <label for="session_time">Session Time:</label>
                        <input type="time" class="form-control" id="session_time" name="session_time" required>
                    </div>
                    <div class="form-group">
                        <label for="session_location">Session Location:</label>
                        <input type="text" class="form-control" id="session_location" name="session_location" required>
                    </div>
                    <div class="form-group">
                        <label for="session_capacity">Session Capacity:</label>
                        <input type="number" class="form-control" id="session_capacity" name="session_capacity"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="session_topics">Session Topics:</label>
                        <textarea class="form-control" id="session_topics" name="session_topics" rows="4"
                            required></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create Session">
                </form>
            </div>
        </div>
    </div>
    <div class="container mt-2">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="field_officer_dashboard.php" class="btn btn-outline-success">Back to Dashboard</a>
        </div>
        
    </div>
</body>

</html>