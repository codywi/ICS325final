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
    <a href="signup.html" class="active">SIGN-UP</a>
  </div>

  <!--- main content window --->
  <div class="login">
    <form action="checkLogin.php" method="post">
      <fieldset>
        <legend>Login Now!</legend>
        <p><label for="userid">UserID:</label> 
          <input type="text" name="userid" id="userid" size="30" />
        </p>
        <p><label for="password">Password:</label>
          <input type="password" name="password" id="password" size="30" />
        </p>
      </fieldset>
      <button type="submit" name="login">Login</button>
    </form>
  </div>


</body>

</html>