<!DOCTYPE html>
<html>

<head>
    <title> Movie Entry</title>
</head>

<body>
    <h1>Movie Entry</h1>
    <?php
    $title = (string)$_POST['title'];
    $year = (int)$_POST['year'];
    $director = (string)$_POST['director'];
    $producer = (string)$_POST['producer'];
    $lead_actor = (string)$_POST['lead_actor'];
    // $services = $_POST["services"];
    var_dump($title);
echo $title . $year . $director . $producer . $lead_actor;

    // create connection 
    $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');
    
// Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo  nl2br("\nConnected successfully");

    $stmt = $conn->prepare("INSERT INTO movies (title, year, director, producer, actor) VALUES (?, ?, ?,?,?)");

    $stmt->bind_param("sisss",$title, $year, $director, $producer, $actor);


$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

    ?>
</body>

</html>