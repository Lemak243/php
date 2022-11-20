
<?php
    //session_start();
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    $recipes = [
        [
            'id' => 1,
            'title'=>'Cassoulet',
            'recipe'=>'Etape 1 : des flageolets',
            'author'=>'mickael.andrieu@exemple.com',
            'is_enabled'=> true,
        ],
        [
            'id' => 2,
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : de la semoule',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'id' => 3,
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
    ];

    $restaurant = json_encode($recipes);

    echo $restaurant;
?>