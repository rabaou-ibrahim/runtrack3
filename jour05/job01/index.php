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
// Si on n'a pas de variables sessions la personne n'est pas connectée, on la redirige vers la page warning.php

if (!isset($_SESSION) || !isset($_SESSION['login']) || !isset($_SESSION['password']) || !isset($_SESSION['id'])) {
    echo "<header>
          <li><a href='inscription.php' style='color:white';>INSCRIPTION</li></a>
          <li><a href='connexion.php' style='color:white';>CONNEXION</li></a>
          </header>
<main>

<h2>PROJET JavaScript</h2>

<p>
  Dans ce projet on va coder un module d'inscription et de connexion en s'aidant cette fois
  de JavaScript. Le code est disponible dans le lien github en dessous (cliquez sur le logo).
  (Ce message s'affiche si vous n'êtes pas connecté)
</p>";
} 

elseif ($_SESSION['loggedin'] = true) {
    echo "<main>
            <p> Bonjour " . $_SESSION['prenom'] . " </p>
         </main>";
}
?>

</main>

<footer>
    <li><a href='https://github.com/rabaou-ibrahim/runtrack3/tree/main/jour05/job01' target=_blank style='color:white';><img src='Images/25231.png' width='80px' height='80px'></a></li>
</footer>