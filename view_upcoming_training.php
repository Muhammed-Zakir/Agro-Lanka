<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Training Sessions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
        <?php
        include 'header.php';
        ?>

    <div class="container">
        <h1>Upcoming Training Sessions</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Session Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Location</th>
                    <th>Topics</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "new_db");

                // Get all upcoming training sessions
                $sql = "SELECT * FROM training_sessions WHERE session_date >= CURDATE()";
                $result = $conn->query($sql);

                // Display each session in a row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["session_name"] . "</td>";
                    echo "<td>" . $row["session_date"] . "</td>";
                    echo "<td>" . $row["session_time"] . "</td>";
                    echo "<td>" . $row["session_location"] . "</td>";
                    echo "<td>" . $row["session_topics"] . "</td>";
                    echo "<td><a href='edit_session.php?id=" . $row["session_id"] . "' class='btn btn-primary'>Edit</a> | <a href='delete_session.php?id=" . $row["session_id"] . "' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>