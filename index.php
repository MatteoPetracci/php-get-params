<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
<?php
  $password = $_GET['password'];
  // echo $password;
  $text = 'Password corretta';
  // var_dump($password);
  if ($password == 'Boolean') {
    $class = 'green';
  } else {
    $class = 'red';
    $text = 'Password non corretta';
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <style media="screen">
      .green {
        color: green;
      }
      .red {
        color: red;
      }
    </style>
  </head>
  <body>
    <h2 class='<?php echo $class;?>'>
      <?php echo $text;?>
    </h2>
  </body>
</html>
