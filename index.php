<?php
  date_default_timezone_set('America/Denver');
  include 'dbh.inc.php';
  include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
  <title>Comments</title>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>
    <?php
     echo "<form method='POST' action='".setComment($connection)."'>
              <input type='hidden' name='uid' value='Anonymous'>
              <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
              <textarea name='message'></textarea><br>
              <button name='commentSubmit' type='submit'>Comment</button>
           </form>";
           getComment($connection);
    ?>
  </body>
</html>