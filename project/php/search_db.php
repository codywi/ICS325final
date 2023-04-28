<!DOCTYPE html>
<html>

<head>
    <title> Movie Entry</title>
</head>

<body>

    <?php
    session_start();
    ?>
    <h1>Search</h1> <br />
    <?php
    $searchCritera = (string) $_POST['search'];

    // create connection 
    $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo nl2br("\nConnected successfully <br />");
    // Prepared statement keeps things a bit more secure!
    $sql = ("SELECT * FROM movies WHERE title LIKE ?");
    $result = $conn->prepare($sql);
    $stmt->bind_param("s", $searchCritera);
    $stmt->execute();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch()) {

            echo "<tr>";
            echo "<td></td>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "<td>" . $row[4] . "</td>";
            echo "</td> </tr>";
        }
    }



    $stmt->close();
    $conn->close();

    ?>
</body>

</html>