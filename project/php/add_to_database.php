<!DOCTYPE html>
<html>

<head>
    <title> Movie Entry</title>
</head>

<body>
    <h1>Movie Entry Testing</h1>

    <?php
    print_r($_POST);
    //$movie_title = "movie_title";
    //$year = "year";
    //$director = "director";
    //$producer = "producer";
    //$lead_actor = "lead_actor";
    //$movie = "movies";
    //$services = "services"; //NOT SURE HOW WE'RE GOING TO DO THIS ONE
    
    $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');
    
    // Short variables for the movie variables
    // $movie_title = $_REQUEST['movie_title'];
    // $year = $_REQUEST['year'];
    // $director = $_REQUEST['director'];
    // $producer = $_REQUEST['producer'];
    // $lead_actor = $_REQUEST['lead_actor'];
    // $movies = 'movies';
    //$services = "services"; //NOT SURE HOW WE'RE GOING TO DO THIS ONE
    
// echo $movie_title . $year . $director . $producer . $lead_actor . $movies;
// echo "test";

//create connection - including db_connection.php, this establishes the connection to the server

//include 'db_connection.php'; 
//$conn = OpenCon();
//    echo "Connected Successfully";

// include 'db_conection.php';
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $db = "movies";

// Create connection

    // $conn = new mysqli($servername, $username, $password,$db);

// Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo  nl2br("\nConnected successfully");

//     $sql = "INSERT INTO movies (movies, year, director, producer, lead_actor)
//             VALUES ($movie_title, $year, $director, $producer, $lead_actor)";

//     if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }







 /*
 
  Create connection
  $conn = new mysqli($servername, $username, $password,'movies');

     Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
      
     mysqli_select_db($conn, 'movie');  

    function addMovie($conn, $movie_title, $year, $director, $producer, $lead_actor)
    {
        $sql = 'INSERT INTO movies (movie_title,year,director,producer,lead_actor) 
    VALUES(' . $movie_title . ',' . $year . ',' . $director . ',' . $producer . ',' . $lead_actor . ')';
        if (mysqli_query($conn, $sql)) {
            echo "record inserted sucessfully";
        } else {
            echo "Could not insert record: " . mysqli_error($conn);

        }
        mysqli_close($conn);
    }

   
    //  $query = "INSERT INTO movie (VALUES (?, ?, ?, ?, ?, ?)";
    //  $stmt = $db->prepare($query);
    //  $stmt->bind_param($movie_title, $year, $director, $producer, $lead_actor,$services);
    //  $stmt->execute();
 
    //  if ($stmt->affected_rows > 0) {
    //      echo  "<p>Book inserted into the database.</p>";
    //  } else {
    //      echo "<p>An error has occurred.<br/>
    //            The item was not added.</p>";
    //  }
 $db->close(); */

    CloseCon($conn);

    ?>
</body>

</html>