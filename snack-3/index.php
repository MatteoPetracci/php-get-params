<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .green {
        background-color: green;
      }
      .grey {
        background-color: grey;
      }
      div {
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="green">
      <ul>
        <?php
        $pm = $db['pm'];
        for ($i=0; $i < count($pm); $i++) {
          ?>
          <li>
            <?php echo $pm[$i]['name'] . ' ' . $pm[$i]['lastname'];?>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class="grey">
      <ul>
        <?php
        $teachers = $db['teachers'];
        for ($i=0; $i < count($teachers); $i++) {
          ?>
          <li>
            <?php echo $teachers[$i]['name'] . ' ' . $teachers[$i]['lastname'];?>
          </li>
        <?php } ?>
      </ul>
    </div>
  </body>
</html>
