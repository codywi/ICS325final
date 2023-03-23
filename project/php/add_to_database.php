<?php
// variables to connect to the DB
$servername = "";
$username = "ics325sp230105";
$password = "2944";
// Short variables for the movie variables
$movie_title = "movie_title";
$year = "year";
$director = "director";
$producer = "producer";
$lead_actor = "lead_actor";
// $services = "services"; NOT SURE HOW WE'RE GOING TO DO THIS ONE

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Create the table if not exists
$createTableIfNotExists = 'CREATE TABLE [IF NOT EXISTS] movies(  
    movieID INT NOT NULL auto_increment Primary key,
    movie_title varchar (40) NOT NULL,  
    year int NOT NULL,
    director varchar (40) NOT NULL,
    producer varchar(40) NOT NULL,
    lead_actor varchar(40) NOT NULL
    -- services
      )';
function addMovie($conn,$movie_title, $year, $director, $producer, $lead_actor)
{
    $sql = 'INSERT INTO movies (movie_title,year,director,producer,lead_actor) 
    VALUES(' . $movie_title . ',' . $year . ',' . $director . ',' . $producer . ',' . $lead_actor . ')';
    if (mysqli_query($conn,$sql)) {
        echo"record inserted sucessfully";
    } else {
     echo"Could not insert record: " .mysqli_error($conn);

    }
    mysqli_close($conn);
}

?>