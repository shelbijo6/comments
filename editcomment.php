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
      $cid = $_POST['cid'];
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['MESSAGE'];
      echo "<form method='POST' action='".editComment($connection)."'>
              <input type='hidden' name='cid' value='".$cid."'>
              <input type='hidden' name='uid' value='".$uid."'>
              <input type='hidden' name='date' value='".$date."'>
              <textarea name='message'>".$message."</textarea><br>
              <button name='commentSubmit' type='submit'>Edit</button>
           </form>";
    ?>
  </body>
</html>