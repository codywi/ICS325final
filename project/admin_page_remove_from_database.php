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
  <title>Admin Remove movie</title>
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
    <a href="admin_page_my_list.php">My List</a>

    <!--- Displays Admin or User based on login - EDIT to display user name in My List view --->
    <p class="right">ADMIN</p>
    <?php
    echo '<a  href="logout.php">Log out</a>';

    ?>
  </div>

  <!--- main content window --->
  <div class="main">

  </div>




</body>

</html>