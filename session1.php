<!DOCTYPE html>
<html>
  <head>
    <title>Formular</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta charset="utf-8">
  </head>
  <body>

<?php
session_start();
$_SESSION['name'] = @$_POST['name'];
$_SESSION['alter'] = @$_POST['alter'];
if (empty($_SESSION['name']) != TRUE && empty($_SESSION['alter']) != TRUE)
{
  echo '<h2>';
  echo 'Ihr Name ist ' . $_POST['name'] . ".<br>";
  echo "Sie sind " . $_POST['alter'] . " Jahre alt.<br>";
  echo '</h2>';
}
else
{?>
  <section class="container">
    <div class="row">
      <h1>Registration</h1>
      <div class="col-md-12">

        <form action="session1.php" method="post">
        <input type="text" name="name" /*value="<?=@$_POST['name']?>" */ class="form-control" placeholder="Name"/>
        <br>
        <input type="number" name="alter" /*value="<?=(int)@$_POST['alter']?>" */ class="form-control" placeholder="Alter"/>
        <br>

          <button type="submit" value="speichern" class="form-control btn btn-default" /> Absenden</button>
      </div>
    </div>

    <div class="col-md-12">
      <?php
      echo "Bitte geben Sie Ihren Namen und Ihr Alter ein!";
}
      ?>

    </div>
  </section>



    <div class="col-md-12">

      <h3><a href='./session2.php'>>> Session 2</a></h3>

    </div>
  </body>
</html>
