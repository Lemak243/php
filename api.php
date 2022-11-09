<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
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

    $restaurant = json_encode($recipes);

    echo $restaurant;
?>