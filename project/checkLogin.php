<!DOCTYPE html>
<!--

    <!DOCTYPE html> declaration defines that this document is an HTML5 document
    <html> element is the root element of an HTML page
    <head> element contains meta information about the HTML page
    <title> element specifies a title for the HTML page (which is shown in the browser's title bar or in the page's tab)
    <body> element defines the document's body, and is a container for all the visible contents, such as headings, paragraphs, images, hyperlinks, tables, lists, etc.
    <h1> element defines a large heading
    <p> element defines a paragraph
    <meta> tags always go inside the <head> element, and are typically used to specify character set, page description, keywords, author of the document, and viewport settings.

--->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
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
  <div class="login">

  </div>
  <?php
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

  $query = "select * from customer where userName='" . $userid . "' and password='" . $password . "'";
  $result = $conn->query($query);
  $row = $result->fetch_assoc();

  if ($result->num_rows) {
    session_start();
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;
    // This SETS the session indicator that the user is admin! Use this on admin pages
    $_SESSION['isAdmin'] = $row["isAdmin"];
  }

  if (isset($_SESSION['valid_user'])) {
    echo '<p>Welcome! ' . $_SESSION['valid_user'] . ' <br />';
    echo '<a href="logout.php"><button>Logout</button></a></p>';
    echo '<p><a href="user_page_home.php"><button>Go to User Home</button></a></p>';
  } else {
    if (isset($userid)) {
      // if they've tried and failed to log in
      echo '<p>Could not log you in.</p>';
      echo '<a href="login.php"><button>Try again?</button></a></p>';
    } else {
      // they have not tried to log in yet or have logged out
      echo '<p>You are not logged in.</p>';
      echo '<a href="login.php"><button>Try again?</button></a></p>';
    }
  }
  $conn->close();

  ?>



</body>

</html>