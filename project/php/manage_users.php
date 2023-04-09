<?php
// variables to connect to the DB
$servername = "";
$username = "ics325sp230105";
$password = "2944";
// Short variables for the user variables


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// Create the table if not exists
// TODO: Figure out how to handle passwords and such
$createTableIfNotExists = 'CREATE TABLE [IF NOT EXISTS] users(  
    userID INT NOT NULL auto_increment Primary key,
    userName varchar(40) NOT NULL,

      )';
function addUser($conn, $userID, $username)
{
    $sql = 'INSERT INTO users (userName) 
    VALUES(' . $username . ')';
    if (mysqli_query($conn, $sql)) {
        echo "record inserted sucessfully";
    } else {
        echo "Could not insert record: " . mysqli_error($conn);

    }
    mysqli_close($conn);
}

?>