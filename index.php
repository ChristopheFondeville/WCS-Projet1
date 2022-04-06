<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include('inc/title.php') ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700&display=swap');
    </style>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
</head>
    <body>
    <header class="header">
        <nav class="menu">
            <a href="index.php"><h1>Drinkoeur</h1></a>
            <?php include ('inc/menu.php'); ?>
        </nav>
    </header>

    <div class="main">
        <?php include('inc/routes.php'); ?>
    </div>

    <footer class="footer">
        <ul>
            <li><a href="#">Conditions générales</a></li>
            <li> - </li>
            <li><a href="#">Règles communautés</a></li>
            <li> - </li>
            <li><a href="#">Politique de confidentialité</a></li>
            <li> - </li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li> - </li>
            <li><a href="#">Charte cookies</a></li>
            <li> - </li>
            <li><a href="#">Services</a></li>
        </ul>
    </footer>
    <script src='hammer.min.js'></script>
    <script src='main.js'></script>
    </body>
</html>


