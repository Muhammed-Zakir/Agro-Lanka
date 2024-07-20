<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        // Include header.php or any other relevant PHP includes
        include 'header.php';
        ?>
    </div>
    <div class="container">
        <h1>Queries</h1>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Query Type</th>
                    <th>Query Description</th>
                    <th>Previous Methods</th>
                    <th>Image Path</th>
                    <th>Full Name</th>
                    <th>Mobile Number</th>
                    <th>WhatsApp Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Town</th>
                    <th>Province</th>
                    <th>Postal Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "new_db");

                // Get all queries
                $sql = "SELECT * FROM agriculture_queries";
                $result = $conn->query($sql);

                // Display each query in a row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["query_type"] . "</td>";
                    echo "<td>" . $row["query_description"] . "</td>";
                    echo "<td>" . $row["previous_methods"] . "</td>";
                    echo "<td>" . $row["image_path"] . "</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<td>" . $row["mobile_number"] . "</td>";
                    echo "<td>" . $row["whatsapp_number"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["town"] . "</td>";
                    echo "<td>" . $row["province"] . "</td>";
                    echo "<td>" . $row["postal_code"] . "</td>";
                    echo "<td><a href='add_note.php?id=" . $row["id"] . "' class='btn btn-primary'>Update Sttus</a></td>";
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
