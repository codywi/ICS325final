<?php

$db = mysqli_connect("localhost",'ics325sp230105','2944','ics325sp230105');
// Short variables for the movie variables
$movie_title = "movie_title";
$year = "year";
$director = "director";
$producer = "producer";
$lead_actor = "lead_actor";


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
  
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($db);


?>