<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
<?php
  $password = $_GET['password'];
  if ($password == 'Boolean') {
    $class = 'green';
    $text = 'Fatto';
  } else {
    $class = 'red';
    $text = 'Non fatto';
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <p><<?php echo $class; ?> <?php echo $text; ?></p>
  </body>
</html>
