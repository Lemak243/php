<?php 
    $recipes = [
        [
            'title'=>'Cassoulet',
            'recipe'=>'Etape 1 : des flageolets',
            'author'=>'mickael.andrieu@exemple.com',
            'is_enabled'=> true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : de la semoule',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
    ];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon document tableau</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body>
    <div class="container">
        <h1>Affichage des recettes</h1>
        <?php foreach($recipes as $valeur): ?>
            <?php if(array_key_exists('is_enabled', $valeur) && $valeur['is_enabled'] == true ): ?>
                <article>
                    <h3> <?php echo $valeur['title']; ?> </h3>
                    <div><?php echo $valeur['recipe']; ?> </div>
                    <i><?php echo $valeur['author']; ?> </i>
                </article>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>