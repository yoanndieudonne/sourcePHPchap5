<html>
<body>
<?php
// Creation du fichier s'il n'existe pas
if (!file_exists("journal.txt")) {
    touch("journal.txt");
    echo "Fichier journal.txt cree.<br>";
}

// Ouverture en mode ajout
$id = fopen("journal.txt", "a");
if ($id === FALSE) {
    echo "Probleme d'acces au fichier.";
} else {
    echo "Fichier ouvert, identifiant : ";
    var_dump($id);
    echo "<br>";
    fclose($id);
    echo "Fichier ferme.<br>";
}
?>
</body>
</html>
