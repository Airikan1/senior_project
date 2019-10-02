<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
  <head>
    <title>Preliminary Anonymous Board</title>
  </head>
  <body>
    <h1>Testing the webserver for functionality</h1>
    <hr />
    <?php
      date_default_timezone_set('America/New_York');
      echo "<p>" . date('m/d/Y h:i:s a', time()) . "</p>\n";

      include "inc_user_connect.php";
      if ($conn === FALSE) {
        echo "<p>Could not connect to the database. " . mysqli_error() . "</p>\n";
      }
      else {
        echo "<hr />\n<h2>Categories</h2>\n<hr />\n";
	mysqli_select_db($conn, $database);
	$categories = @mysqli_query($conn, "SELECT names FROM category");

	while ($row = mysqli_fetch_row($categories)) {
	  echo "<hr />\n<h3>" . $row . "</h3>\n";
	}

	mysqli_close($conn);
      }
    ?>
  </body>
</html>
