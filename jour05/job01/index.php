<!DOCTYPE html>
<html>
<head>
<title><?php echo "Index" ?></title>
<link href="style.css" rel="stylesheet">
</head>

<body>

<?php


// On fait une condition en PHP, s'il n'y a pas de session ouverte on affiche les liens de 
// connexion et d'inscription

if (!isset($_SESSION) || !isset($_SESSION['login']) || !isset($_SESSION['password']) || !isset($_SESSION['id'])) {
    echo '<header>
          <li><a href="index.php" target=_blank style="color:white";>ACCUEIL</li></a>
          <li><a href="connexion.php" target=_blank style="color:white";>CONNEXION</li></a>
          </header>'; // Si on n'a pas de variables sessions la personne n'est pas connectée, on la redirige vers la page warning.php
  }
    

?>

<main>

<h2>PROJET JavaScript</h2>

<p>
  Dans ce projet on va coder un module d'inscription et de connexion en s'aidant cette fois
  de JavaScript. Le code est disponible dans le répo github en dessous (cliquez sur le logo)
</p>

</main>

<footer>
        <li><a href="index.php" target=_blank style="color:white";><img src="Images/25231.png"></li></a>
</footer>