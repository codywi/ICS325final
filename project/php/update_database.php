<!DOCTYPE html>
<html>

<head>
  <title> Movie Update</title>
</head>

<body>
  <h1>Movie Update</h1>

  <?php

  // Short variables for the movie variables
  $title = (string) $_POST['title'];
  $year = (int) $_POST['year'];
  $director = (string) $_POST['director'];
  $producer = (string) $_POST['producer'];
  $actor = (string) $_POST['actor'];

  $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');
  // check connection 
  if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo nl2br("\nConnected successfully <br />");

  $stmt = $conn->prepare("UPDATE movies SET title = ?, year = ? , director = ?, producer = ?, actor = ? WHERE title = ?");

  $stmt->bind_param("sissss", $title, $year, $director, $producer, $actor, $title);

  $stmt->execute();
  if ($stmt->error) {
    echo "FAILURE!!! " . $stmt->error;
  } else
    echo "Updated {$stmt->affected_rows} rows";


  $stmt->close();
  $conn->close();

  ?>

</body>

</html>