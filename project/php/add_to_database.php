<!DOCTYPE html>
<html>

<head>
    <title> Movie Entry</title>
</head>

<body>

    <?php
    session_start();
    if (!($_SESSION['isAdmin'])) {
        include('notAnAdmin.php');
        die();
    }
    ?>
    <h1>Movie Entry</h1> <br />
    <?php
    $title = (string) $_POST['title'];
    $year = (int) $_POST['year'];
    $director = (string) $_POST['director'];
    $producer = (string) $_POST['producer'];
    $actor = (string) $_POST['actor'];
    // $services = $_POST["services"];
    
    // create connection 
    $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo nl2br("\nConnected successfully <br />");
    // Prepared statement keeps things a bit more secure!
    $stmt = $conn->prepare("INSERT INTO movies (title, year, director, producer, actor) VALUES (?, ?, ?,?,?)");

    $stmt->bind_param("sisss", $title, $year, $director, $producer, $actor);


    $stmt->execute();

    echo "New records created successfully";

    $stmt->close();
    $conn->close();

    ?>
</body>

</html>