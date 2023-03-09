<!DOCTYPE html>
<html>
<head>
<title><?php echo "Inscription" ?></title>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <li><a href="index.php" target=_blank style="color:white";>ACCUEIL</li></a>
        <li><a href="connexion.php" target=_blank style="color:white";>CONNEXION</li></a>
    </header>

    <main>

    <div class="formulaire">
    <body>  
    <form name="form" method="post" action="script.js">  
        Prénom: <br/><br/><input type="text" name="firstname"><br/> 
        <br/>
        <span id="firstname-error"></span>
        Nom: <br/><br/><input type="text" name="firstname"><br/>
        <br/>
        <span id="lastname-error"></span>
        Email: <br/><br/><input type="text" name="firstname"><br/>
        <span id="email-error"></span>
        <br/>
        Mot de passe: <br/><br/><input type="text" name="password"><br/>
        <br/>
        Confirmation du mot de passe: <br/><br/><input type="password" name="confirmed_password"><br/> 
        <br/> 
    <button onclick="return validateLastname()">Confirmer</button> 
    <span id="submit-error"></span>
    </form>  
    </div>

    <script src="srcipt.js"></script>

    </main>
</body>

    <footer>
        <li><a href="https://laplateforme.io/"><img src="Images/logo_laplateforme_bleu3.png" height=100px width=400px></a>
    </footer>
</body>