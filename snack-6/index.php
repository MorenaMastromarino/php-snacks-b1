<?php

// ## Snack 6
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

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
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      width: 80%;
      margin: 0 auto;
    }
    .grey, .green {
      padding: 20px;

    }
    .grey {
      background-color: lightgrey;
      border: 2px solid grey;
    }
    .green {
      background-color: lightgreen;
      border: 2px solid green;
    }
  </style>
</head>
<body>
  <div class="grey">

    <h2>Teachers:</h2>
    <ul>
      <?php foreach ($db['teachers'] as $teacher) {?>
        <li>
          <?php echo $teacher['name'] ?>
          <?php echo $teacher['lastname'] ?>
        </li>
      <?php } ?>
    </ul>

  </div>

  <div class="green">

    <h2>PM:</h2>
    <ul>
      <?php foreach ($db['pm'] as $pmMember) {?>
        <li>
          <?php echo $pmMember['name'] ?>
          <?php echo $pmMember['lastname'] ?>
        </li>
      <?php } ?>
    </ul>

  </div>
</body>
</html>