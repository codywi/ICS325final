<!DOCTYPE html>
<html>

<head>
    <title> Movie Entry</title>
</head>

<body>
    <h1>Movie Entry Testing</h1>

    <?php

    $movie_title = (string)$_POST['movie_title'];
    $year = (int)$_POST['year'];
    $director = (string)$_POST['director'];
    $producer = (string)$_POST['producer'];
    $lead_actor = (string)$_POST['lead_actor'];
    // $services = $_POST["services"];
echo $movie_title . $year . $director . $producer . $lead_actor;

    // create connection 
    $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');
    
// Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo  nl2br("\nConnected successfully");

    $stmt = $conn->prepare("INSERT INTO movies (movie_title, movie_year, movie_director, movie_producer, movie_actor) VALUES (?, ?, ?,?,?)");

    $stmt->bind_param("sisss",$movie_title, $year, $director, $producer, $lead_actor);


$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

    ?>
</body>

</html>