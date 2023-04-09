<?php

$db = mysqli_connect("localhost",'ics325sp230105','2944','ics325sp230105');
// Short variables for the movie variables
$movie_title = "movie_title";
$year = "year";
$director = "director";
$producer = "producer";
$lead_actor = "lead_actor";
// $selected_movie = "";


// check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // 

  echo  nl2br("\nConnected successfully");

    $stmt = $conn->prepare("UPDATE movies (movie_title, movie_year, movie_director, movie_producer, movie_actor) VALUES (?, ?, ?,?,?) WHERE ");

    $stmt->bind_param("sisss",$movie_title, $year, $director, $producer, $lead_actor);
  
    $stmt->execute();


    echo "New records created successfully";

    $stmt->close();
    $conn->close();
    
?>