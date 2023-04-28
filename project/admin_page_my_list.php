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

        This is the admin's profile, this is "view as user"
--->

<!DOCTYPE html>
<html lang="en">

<head>
  <title>admin My List</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/page_outline_stylesheet.css">

</head>

<body>
  <?php
  session_start();
  if (!($_SESSION['isAdmin'])) {
    include('notAnAdmin.php');
    die();
  }
  ?>

  <div class="header">
    <a href="admin_page_home.php">
      <img src="images/logo.png">
    </a>
  </div>

  <!--- navigation bar links --->
  <div class="navbar">
    <a href="admin_page_home.php" class="active">Home</a>
    <a href="admin_page_add_to_database.php">Add to Database</a>
    <a href="admin_page_remove_from_database.php">Remove from Database</a>
    <a href="admin_page_update_movie.html">Update Current Information</a>
    <a href="admin_page_manage_users.php">Manage Users</a>
    <!--  <a href="admin_page_my_list.php">My List</a> -->

    <!--- Displays Admin or User based on login - EDIT to display user name in My List view --->
    <p class="right">User view</p>
  </div>

  <!--- main content window --->
  <div class="main">
    <table>

      <tr>
        <th>Add to queue?</th>
        <th>Movie Title</th>
        <th>Movie year</th>
        <th>Lead Director</th>
        <th>Lead Producer</th>
        <th>Main Actor</th>
      </tr>

      <tr>
        <?php
        use LDAP\Result;

        $conn = mysqli_connect('localhost', 'ics325sp230105', '2944', 'ics325sp230105');

        if (!$conn) {
          die("Connection failed: " . $conn->connect_error);
        }

        $query = 'select title, year, director, producer, actor FROM movies;';

        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_row($result)) {

          echo "<tr>";
          echo "<td></td>";
          echo "<td>" . $row[0] . "</td>";
          echo "<td>" . $row[1] . "</td>";
          echo "<td>" . $row[2] . "</td>";
          echo "<td>" . $row[3] . "</td>";
          echo "<td>" . $row[4] . "</td>";
          echo "</td> </tr>";
        }
        ?>

      </tr>

    </table>

  </div>




</body>

</html>