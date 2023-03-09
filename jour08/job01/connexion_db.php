<?php
    // Petit code qui convertit les infos de la table en json :)
?>

<?php
    // connexion à la base de données
    $connection = mysqli_connect("localhost", "root", "", "autocompletion") or die("Error " . mysqli_error($connection));

    // On fetch les lignes de la table à partir de la base de données
    $sql = "SELECT * FROM `infos`";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    // on crée un tableau

    $emparray = array();
    while($row = mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    // et enfin on convertit le résultat en json :)
    echo json_encode($emparray);

    $fp = fopen('empdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    //close the db connection
    mysqli_close($connection);

?>