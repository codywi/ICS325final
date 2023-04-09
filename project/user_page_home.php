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
  <title>Quevie Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/page_outline_stylesheet.css">
  <link rel="stylesheet" href="stylesheets/user_table.css">

</head>

<body>

  <div class="header">
    <img src="images/logo.png">
  </div>

  <!--- navigation bar links --->
  <div class="navbar">
    <a href="user_page_home.php" class="active">Home</a>
    <a href="user_page_select_services.html">Select Services</a>
    <a href="user_page_add_movie.html">Add Movie</a>
    <a href="user_page_remove_movie.html">Remove Movie</a>

    <!--- Displays currently logged in person EDIT to show user name based on login --->
    <p class="right">USER</p>
  </div>
  <!--- main content window --->
  <div class="main">

    <h2>Suggested Movies</h2>
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
          echo"<td></td>";
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