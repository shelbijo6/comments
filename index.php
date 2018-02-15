<?php
  date_default_timezone_set('America/Denver')
?>

<!DOCTYPE html>
<html>
  <title>Comments</title>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <?php
     echo "<form>
              <input type='hidden' name='uid' value='Anonymous'>
              <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
              <textarea name='message'></textarea><br>
              <button name='submit' typer='submit'>Comment</button>
           </form>";
    ?>
  </body>
</html>