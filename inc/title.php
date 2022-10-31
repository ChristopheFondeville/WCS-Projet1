<?php

$arrayTitle = array(
    'home' => 'Drinkoeur, la nouvelle façon de consommer',
    'inscription' => 'Inscrivez-vous sur Drinkoeur',
    'accueil' => 'Drinkoeur, une nouvelle façon de consommer',
    'choice' => 'Swip de Théo',
    'candidate' => 'Mercedes, celle ',
    /*'' => '';*/
    );

// La variable $page existe-elle dans l'url ?
if(!empty($_GET['page']))
{
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['page']), $arrayTitle))
    {
        // Oui, alors on importe la variable title
        echo $arrayTitle[ strtolower($_GET['page']) ];
    }
    else
    {
        // Non, alors title page Error 404
        echo 'ERROR 404 - Vous vous êtes trompé de chemin ...';
    }
}
else {
    // Non, on affiche le title de la page d'accueil par défaut
    echo 'Drinkoeur, la nouvelle façon de consommer';
}