<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
<br>
<h2>
<?php

session_start();

if (empty($_SESSION['name']) != TRUE && empty($_SESSION['alter']) != TRUE)
{
  echo 'Ihr Name ist ' . $_SESSION['name'] . ".<br>";
  echo "Sie sind " . $_SESSION['alter'] . " Jahre alt.<br>";
}
else
{
  echo 'Name und Alter wurden nicht Angegeben!';
}




?>
</h2>

    <div class="col-md-12">
      <h3><a href='./session1.php'>>> Session 1</a></h3>
    </div>

  </body>
</html>
