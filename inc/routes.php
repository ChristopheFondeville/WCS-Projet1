
<?php
// Tableau des fichiers à importer
$arrayPages = array(

    'home' => 'home.php',
    'connexion' => 'connexion.php',
    'inscription' => 'inscription.php',
    'profil' => 'profil.php',
    'accueil' => 'accueil.php',
    'contact' => 'contact.php',
    'candidate' => 'candidate.php',
    'choice' => 'choice.php'
);

// La variable $page existe-elle dans l'url ?
if(!empty($_GET['page']))
{
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['page']), $arrayPages))
    {
        // Oui, alors on l'importe
        include('inc/'. $arrayPages[ strtolower($_GET['page']) ] );
    }
    else
    {
        // Non, alors on importe un fichier par défaut
        include('inc/404.php');
    }
}
else
{
    // Non, on affiche la page d'accueil par défaut
    include('inc/'. $arrayPages['home']);
}
