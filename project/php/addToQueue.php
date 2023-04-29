
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Added to queue</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/page_outline_stylesheet.css">

</head>

<body>
  <div class="header">
    <img src="images/logo.png">
  </div>

  <!--- navigation bar links --->
  <div class="navbar">
    <!-- <a href="signup.html" class="active">SIGN-UP</a> -->
  </div>

  <!--- main content window --->
  <div class="main">

  </div>
  <?php
  if (isset($_POST['movieID']) && isset($_SESSION['valid_user'])) {
    echo 'ready to add to the queue';
  }

  $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');

  if (mysqli_connect_errno()) {
    echo 'Connection to database failed:' . mysqli_connect_error();
    exit();
  }

  $query = "select * from customer where userName='" . $userid . "' and password='" . $password . "'";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();

  $conn->close();

  ?>



</body>

</html>
