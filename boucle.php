<?php
  $recipes = [
    ["Cassoulet", "[...]", "mickael.andrieu@exemple.com", true],
    ["Couscous", "[...]", "mickael.andrieu@exemple.com", false],
  ];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Php</title>
</head>
<body>
    
</body>
  <?php  for($line = 0; $line <= 1; $line++): ?>
    <li> <?php echo $recipes[$line][0] ." ( " . $recipes[$line][2] . " )" ; ?> </li>
  <?php endfor; ?>
</html>