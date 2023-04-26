<?php

session_start();

if (isset($_POST['userid']) && isset($_POST['password'])) {
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
}

$conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');

if (mysqli_connect_errno()) {
  echo 'Connection to database failed:' . mysqli_connect_error();
  exit();
}

$query = "select * from customer where
userName='" . $userid . "' and
password='" . $password . "'";
$result = $conn->query($query);


if ($result->num_rows) {
// if they are in the database register the user id
$_SESSION['valid_user'] = $userid;
}
$conn->close();

if (isset($_SESSION['valid_user'])) {
echo '<p>You are logged in as: ' . $_SESSION['valid_user'] . ' <br />';
echo '<a href="logout.php">Log out</a></p>';
echo '<p><a href="user_page_home.php">Go to User Home</a></p>';
} else {
if (isset($userid)) {
// if they've tried and failed to log in
echo '<p>Could not log you in.</p>';
} else {
// they have not tried to log in yet or have logged out
echo '<p>You are not logged in.</p>';
}
}

?>