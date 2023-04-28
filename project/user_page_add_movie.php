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
  <title>Search for a movie</title>
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
    <a href="user_page_home.php">Home</a>
    <!-- <a href="user_page_select_services.html">Select Services</a> -->
    <a href="user_page_add_movie.php" class="active">Search for a Movie</a>
    <a href="user_page_remove_movie.php">Remove Movie</a>

    <!--- Displays currently logged in person EDIT to show user name based on login --->
    <p class="right">USER</p>
    <?php
    echo '<a href="logout.php">Log out</a>';

    ?>
  </div>

  <!--- main content window --->
  <div class="main">
    <div class="main">

      <h2>Add Movies</h2>

      <table>

        <tr>
          <th>header - Movie Title</th>
          <th>header - Lead Director</th>
          <th>header - Lead Producer</th>
          <th>header - Available Services</th>
        </tr>

        <tr>
          <td>Movie Title</td>
          <td>Lead Director</td>
          <td>Lead Producer</td>
          <td>Available Services</td>

        </tr>

        <tr>
          <td>Movie Title</td>
          <td>Lead Director</td>
          <td>Lead Producer</td>
          <td>Available Services</td>
        </tr>

        <tr>
          <td>Movie Title</td>
          <td>Lead Director</td>
          <td>Lead Producer</td>
          <td>Available Services</td>
        </tr>

        <tr>
          <td>Movie Title</td>
          <td>Lead Director</td>
          <td>Lead Producer</td>
          <td>Available Services</td>
        </tr>

        <tr>
          <td>Movie Title</td>
          <td>Lead Director</td>
          <td>Lead Producer</td>
          <td>Available Services</td>
        </tr>

        <tr>
          <td>Movie Title</td>
          <td>Lead Director</td>
          <td>Lead Producer</td>
          <td>Available Services</td>
        </tr>

      </table>

    </div>
  </div>




</body>

</html>