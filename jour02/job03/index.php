<!DOCTYPE html>
<html>

<head>
<script src="script.js"></script>
    <h1>Job02.Jour03</h1>
</head>

<button id="button">Ajouter 1</button>

<p id="compteur">0</p>

<script>
    // On crée une variable bouton qui correspond à l'element bouton qui a l'id button
    var button = document.getElementById("button");
    // On ajoute au bouton un évènement click, à chaque click la fonction addone va s'éxecuter
    button.addEventListener("click", addone);

    function addone() {
    var compteur = document.getElementById("compteur");
    var count = parseInt(compteur.innerHTML); 
    count++;
    compteur.innerHTML = count;
    }
</script>

</body>
</html>
