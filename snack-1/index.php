<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  var_dump($_GET);
// Salvo in una variabile il $_GET
  $data = $_GET;
  // Stampo a schermo il valore di tutte le chiavi
  // echo $data['name'];
  // echo $data['mail'];
  // echo $data['age'];
  // Salvo il valore in una variabile
  $name = $data['name'];
  $mail = $data['mail'];
  $age = $data['age'];
  $text = 'Completato';
  echo is_numeric($age);
  // Se name è minore uguale di 3 la variabile text prende il valore accesso negato
  // Con strlen recupero la lunghezza della variabile $name
  if (strlen($name) <= 3) {
    $text = 'Accesso negato';
  }  elseif (strpos($mail, '@') && strpos($mail, '.')) {
    $text = 'Completato';
  } elseif (is_numeric($age)) {
    $text = 'Accesso riuscito';
  } else {
    // $text = 'Accesso eseguito';
    $text = 'Accesso negato';
  }
  echo $text;
?>
