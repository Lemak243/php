<h1>Retourne le nombre de chiffre dans une phase </h1>

<?php
    $recipe = "Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine";
    $length = strlen($recipe);

    echo "La phrase ci-dessous comporte <strong>$length</strong> caractères : $recipe";
?>

<h1>Rechercher et remplacer une chaine de caractères avec str_replace</h1>

<?php
    echo str_replace('bon', "bon pour la sainté", "le cassoulet, c'est très bon");
?>

<h1>Formater une chaine de caractère avec sprintf</h1>

<?php
    $recette = [
        'title'=>'Salade Romaine',
        'recipe'=>'Etape 1 : Lavez la salade; Etape 2 : euh...',
        'author'=>'laurene.castor@exemple.com',
    ];

    echo sprintf(
        '%s par "%s" : %s',
        $recette['title'],
        $recette['author'],
        $recette['recipe']
    );
?>

<h1>Récuperer la date</h1>

<?php
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $hour = date('H');
    $minut = date('i');

    echo "Bonjour ! Nous sommes le $day/$month/$year et il est $hour h $minut";
?>

<h1>Exemple 1 : vérifier la validité d'une recette</h1>

<?php
    $recette1 = [
        'title' => 'salade Romaine',
        'recipe' => 'Etape 1 : Lavez la salade; Etape 2 : euh...',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ];
?>

<?php
    function isValidRecipe(array $recette1)
    {
        if(array_key_exists('is_enabled', $recette1)){
            $isEnabled = $recette1['is_enabled'];
        } else {
            $isEnabled = false;
        }

        return $isEnabled;
    }

    $valeurFocntion = isValidRecipe($recette1);

    echo $valeurFocntion;
?>

<h1>Exemple 3 : afficher le nom de l'auteur</h1>

<?php

$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

function displayAuthor(string $authorEmail, array $users)
{
    foreach($users as $user){
        $valeurUsers = $user;
        if($authorEmail === $valeurUsers['email']){
            return $valeurUsers['full_name']. " (" .$valeurUsers['age']. "ans)";
        }
    }
}



function getRecipes(array $recipes)
{
    $valid_recipes = [];
    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $valid_recipes[] = $recipe;
        }
    }
    return $valid_recipes;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recettes de cuisine</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body>
    <div class="container">
        <h1>Liste des recettes de cuisine</h1>

        <?php foreach(getRecipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach ?>
    </div>   
</body>
</html>
