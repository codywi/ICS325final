<?php
use LDAP\Result;


// Check connection
/**
 * Summary of populateTable
 * @param mixed $conn
 * @return void
 */
populateRecommendationTable();

function populateRecommendationTable()
{
    $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');

    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "sucessful connection";
    }

    echo "<b> <center>Database Output</center> </b> <br> <br>";
    $query = 'select * from movies;';

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_row($result)) {
        printf("%u %s %u %s %s %s \n", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
        echo '<br />';


    }
}

// if ($result = $mysqli->query($query)) {
//     while ($row = $result->fetch_assoc()) {
//         $title = $row["title"];
//         $year = $row["year"];
//         $director = $row["director"];
//         $producer = $row["producer"];
//         $actor = $row["actor"]; 

//         echo '<tr> 
//                   <td>'.$title.'</td> 
//                   <td>'.$year.'</td> 
//                   <td>'.$director.'</td> 
//                   <td>'.$producer.'</td> 
//                   <td>'.$actor.'</td> 
//               </tr>';
//     }
//     $query->close();
//     $result->free();
//     $conn->close();
// } 
?>