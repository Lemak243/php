<?php
    try{
        $bd = new PDO(
            'mysql:host=localhost;dbname=we_love_food;charset=utf8',
            'root',
            'root',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
    catch (Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }

    $sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = :is_enabled';

    $recipesStatement = $bd->prepare($sqlQuery);
    $recipesStatement->execute([
        'is_enabled'=> true,
    ]);

    $recipes = $recipesStatement->fetchAll();

    foreach($recipes as $recipe){
?>

 <p><?php  echo $recipe['author']; ?></p>

<?php
   }
?>