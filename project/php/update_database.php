<?php

$db = mysqli_connect("localhost",'ics325sp230105','2944','ics325sp230105');
// Short variables for the movie variables
$title = "title";
$year = "year";
$director = "director";
$producer = "producer";
$actor = "lead_actor";
// $selected_movie = "";


// check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // 

  echo  nl2br("\nConnected successfully");

    $stmt = $conn->prepare("UPDATE movies (title, year, director, producer, actor) VALUES (?, ?, ?,?,?) WHERE ");

    $stmt->bind_param("sisss",$title, $year, $director, $producer, $actor);
  
    $stmt->execute();


    echo "New records created successfully";

    $stmt->close();
    $conn->close();
    
?>