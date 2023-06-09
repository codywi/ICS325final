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
    <title>admin add to DB</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheets/page_outline_stylesheet.css">

</head>

<body>
    <?php
    session_start();
    include 'isAdminCheckFN.php';
    if (!isAdminCheck()) {
        include 'notAnAdmin.php';
        die();
    }
    ;
    ?>

    <div class="header">
        <a href="admin_page_home.php">
            <img src="images/logo.png">
        </a>
    </div>

    <!--- navigation bar links --->
    <div class="navbar">
        <a href="admin_page_home.php">Home</a>
        <a href="admin_page_add_to_database.php" class="active">Add to Database</a>
        <a href="admin_page_remove_from_database.php">Remove from Database</a>
        <a href="admin_page_update_movie.html">Update Current Information</a>
        <a href="admin_page_manage_users.php">Manage Users</a>
        <a href="admin_page_my_list.php">My List</a>

        <!--- Displays Admin or User based on login - EDIT to display user name in My List view --->
        <p class="right">ADMIN</p>
    </div>

    <!--- main content window --->
    <div class="main">
        <form action="php/add_to_database.php" method="post">

            <label for="title">Movie title</label> <br />
            <input required type="text" name="title" id="title"> <br />

            <label for="year">Year</label> <br />
            <input required type="number" name="year" id="year"> <br />

            <label for="director">Director</label> <br />
            <input required type="text" name="director" id="director"> <br />

            <label for="producer">Producer</label> <br />
            <input required type="text" name="producer" id="producer"> <br />

            <label for="actor">Lead actor</label> <br />
            <input required type="text" name="actor" id="actor"> <br />

            <!-- <h4>services</h4> <br />
            <label for="hulu">Hulu</label>
            <input type="checkbox" name="services" value="hulu" id="hulu"> <br />
            
            <label for="amazon_prime">Amazon Prime</label>
            <input type="checkbox" name="services" value="amazon_prime" id="amazon_prime"> <br />
            
            <label for="HBO_Max">HBO max</label>
            <input type="checkbox" name="services" value="hbo_max" id="hbo_max"> <br />
            
            <label for="netflix">Netflix</label>
            <input type="checkbox" name="services" value="netflix"  id="netflix"> <br />
                -->
            <input type="submit" value="add movie">
        </form>
    </div>




</body>

</html>