<!DOCTYPE html>
<html>
<head>
<title>Jour08.Job03</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav>

    </nav>
</header>

<section>

<h2 class="text-red-700 text-center">Formulaire de création de compte</h2>

<br>
<br>

<form>

    <div class="form text-center">

        <div class="form1">

            <p>Civilité :</p>

            <input type="radio" id="civilite1" name="civilite">
                <label for="civilite1">Homme</label><br>
            <input type="radio" id="civilite2" name="civilite">
                <label for="civilite2">Femme</label><br>
           
        </div>
        <br>

        <div class="form2 border-solid">

                <label for="prenom">Prénom :</label><br>
        <br>
            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="prenom" name="prenom" autocomplete="off">
        <br>
        <br>
                <label for="nom">Nom :</label><br>
        <br>
            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="nom" name="nom" autocomplete="off">
        <br>
        <br>
                <label for="adresse">Adresse :</label><br>
        <br>    
            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" id="adresse" name="adresse" autocomplete="off">
        <br>
        <br>
                <label for="email">Email :</label><br>
        <br>    
            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="email" id="email" name="email" autocomplete="off">

        <br>
        <br>
                <label for="password">Mot de passe :</label><br>
        <br>    
            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password" id="password" name="password" autocomplete="off">

        <br>
        <br>

                <label for="password">Confirmation du mot de passe :</label><br>
        <br>    
            <input class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="password" id="confirmed_password" name="confirmed_password" autocomplete="off">
        
        </div>
        
        <br>
        
        <div class="checkbox">

            <input type="checkbox" id="informatique" name="informatique">
                <label for="informatique">Informatique</label>
            <br>
            <br>
            <input type="checkbox" id="voyages" name="voyages">
                <label for="voyages">Voyages</label>
            <br>
            <br>
            <input type="checkbox" id="sport" name="sport">
                <label for="sport">Sport</label>
            <br>
            <br>
            <input type="checkbox" id="lecture" name="lecture">
                <label for="lecture">Lecture</label>

        </div>
    </div>

    <br>
    <br>

    <div class="submit text-center">
        <input class="border-2" type="submit" name="Envoyer" value="Envoyer mon formulaire">
    </div>

</form>
</section>

<br>

<footer class="text-center list-none text-blue-800">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="index.php">Inscription</a></li>
    <li><a href="index.php">Connexion</a></li>
    <li><a href="index.php">Rechercher</a></li>
</footer>
</body>