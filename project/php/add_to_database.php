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
    
    $db = mysqli_connect("localhost", 'ics325sp230105', '2944', 'ics325sp230105');

    // $db = mysqli_connect("localhost", 'ics325sp230105', '2944', 'movie');
    // Short variables for the movie variables
    $movie_title = $_REQUEST['movie_title'];
    $year = $_REQUEST['year'];
    $director = $_REQUEST['director'];
    $producer = $_REQUEST['producer'];
    $lead_actor = $_REQUEST['lead_actor'];
    $movies = "movies";
    //$services = "services"; //NOT SURE HOW WE'RE GOING TO DO THIS ONE
    
echo $movie . $year . $director . $producer . $lead_actor . $movies;
echo "test";
    // Create connection
    $conn = new mysqli($servername, $username, $password,'movies');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    // Create the table if not exists
/*$createTableIfNotExists = 'CREATE TABLE [IF NOT EXISTS] movies(  
    -- movieID INT NOT NULL auto_increment Primary key,
    -- movie_title varchar (40) NOT NULL,  
    -- year int NOT NULL,
    -- director varchar (40) NOT NULL,
    -- producer varchar(40) NOT NULL,
    -- lead_actor varchar(40) NOT NULL
    -- services
      )';*/
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

    if (mysqli_connect_errno()) {
        echo "<p>Error: Could not connect to database.<br/>
              Please try again later.</p>";
        exit;
     }
     mysqli_select_db($db, $movie);
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
 $db->close();
    ?>
</body>

</html>