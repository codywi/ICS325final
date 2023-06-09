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

<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Website Map</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/page_outline_stylesheet.css">

</head>

<body>

  <div class="header">
    <a href="user_page_home.php">
      <img src="images/logo.png">
    </a>
  </div>

  <!--- navigation bar links --->
  <div class="navbar">
    <a href="#" class="active">Home</a>
    <!-- <a href="#"></a>
      <a href="#">Link</a>
      <a href="#">Link</a>
      <a href="#">Link</a> -->
    <!--- Displays Admin or User based on login - EDIT --->
    <p class="right">Admin/User</p>
  </div>

  <!--- main content window --->
  <div class="main">
    <a class="button" href="admin_page_home.php">Admin Home </a> <br />
    <a class="button" href="user_page_home.php">User Home </a>
  </div>




</body>

</html>