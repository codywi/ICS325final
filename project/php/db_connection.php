<?php
//$db = mysqli_connect("localhost",'ics325sp230105','2944','ics325sp230105');
function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "ics325sp230105";
    $dbpass = "2944";
    $db = "ics325sp230105";


    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) 
            or die("Connect failed: %s\n". $conn -> error);

    return $conn;
 }
 
function CloseCon($conn) {
    $conn -> close();
 }
