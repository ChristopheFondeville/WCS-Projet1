<?php
if(!empty($_GET['page']))
{
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(strtolower($_GET['page']) === 'choice' || strtolower($_GET['page']) === 'accueil' || strtolower($_GET['page']) === 'candidate' || strtolower($_GET['page']) === 'contact')
    {
    echo '<ul>
<!--            <li><a href="index.php?page=accueil">Accueil</a></li>-->
            <li><a href=""#><img src="img/photoprofile.jpg" class="imgProfil" alt="Photo de profil" width="50px"></a></li>
<!--            <li><a href="index.php?page=contact">Contactez-nous!</a> </li>-->
          </ul>';

    }
    else
    {
        // Non, alors title page Error 404
/*        echo '<ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contactez-nous!</a> </li>
          </ul>';*/
    }
}
else {
    // Non, on affiche le title de la page d'accueil par défaut/*
    /*echo '<ul>
            <li><a href="index.php?page=inscription">Inscription</a></li>
            <li><a href="index.php?page=contact">Contactez-nous!</a> </li>
          </ul>';*/
}