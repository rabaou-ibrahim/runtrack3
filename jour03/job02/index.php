<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<h2>Job03.Job02</h2>

<div class="container">

<div class="intro">
<p> Voici l'arc en ciel. Cliquez sur le bouton pour mélanger les 6 parties et essayez ensuite de les reconstituer.
    Bon courage ! </p>
</div>

    <div class="rainbow">
    <img src = "Images/arc1.png"></img>
    <img src = "Images/arc2.png"></img>
    <img src = "Images/arc3.png"></img>
    <img src = "Images/arc4.png"></img>
    <img src = "Images/arc5.png"></img>
    <img src = "Images/arc6.png"></img>
    </div>

<script src="script.js"></script>

<div id="shuffle" class="shuffle">
    <button onclick="shuffle()">Mélanger</button>
</div>

<div class="guess"></div>

</div>

</body>
</html>
