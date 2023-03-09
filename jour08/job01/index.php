<!DOCTYPE html>
<html>
<head>
    <title>Jour08.Job01</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
      />   
    <link href="style.css" rel="stylesheet">
    <style type="text/css">a:link{text-decoration:none}</style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Index</title>
</head> 
<body>
    <header>
        <nav>
            <div>
                <li><a href="https://laplateforme.io" target="_blank" style="color:rgba(22, 42, 221, 0.815)">La Plateforme (site)</a></li>
            </div>
            <div>
                <li><a href="https://github.com/rabaou-ibrahim" target="_blank" style="color:rgba(22, 42, 221, 0.815)">Ma page github</a></li>
            </div>
        </nav>
    </header>

    <div class="image">
        <a href="https://laplateforme.io" target="_blank"><img src="Images/logo_laplateforme_bleu3.png" width="300px"></a>
    </div>

    <div class="container">     
        <input class="input" type="text" id="searchInput" method="get" placeholder="Recherche...">
    </div>
        <div id="suggestions"></div>
    </div>

    <script src="script.js"></script>
</body>
</html>