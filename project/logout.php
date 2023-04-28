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
    <title>Log out</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/page_outline_stylesheet.css">
    <link rel="stylesheet" href="stylesheets/user_table.css">
</head>

<body>
    <?php
    session_start();
    include 'isAdminCheckFN.php';
    // store to test if they *were* logged in
    $old_user = $_SESSION['valid_user'];
    unset($_SESSION['valid_user']);
    unset($_SESSION['isAdmin']);
    session_destroy();
    ?>
    <div class="header">
        <img src="images/logo.png">
    </div>

    <!--- navigation bar links --->
    <div class="navbar">
        <a href="user_page_home.php" class="active">Home</a>
        <!-- <a href="user_page_select_services.html">Select Services</a> -->
        <a href="user_page_search_movie.php">Search for a Movie</a>
        <a href="user_page_remove_movie.php">Remove Movie</a>

        <!--- Displays currently logged in person EDIT to show user name based on login --->
        <p class="right">USER</p>

    </div>
    <!--- main content window --->
    <div class="main">
        <h1>Log Out</h1>
        <?php
        if (!empty($old_user)) {
            echo '<p>You have been logged out.</p>';
        } else {
            // if they weren't logged in but came to this page somehow
            echo '<p>You were not logged in, so you have not been logged out.</p>';
        }
        ?>
        <p><button><a href="login.php">Back to Home Page</a></button></p>

</body>

</html>

</html>