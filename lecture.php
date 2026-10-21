<html>
<body>
<?php
// 1. Lecture ligne par ligne (fgets)
$id = fopen("journal.txt", "r");
if ($id !== FALSE) {
    echo "<b>Ligne par ligne :</b><br>";
    // fgets retourne FALSE quand il n'y a plus rien a lire
    while (($ligne = fgets($id)) !== FALSE) {
        echo htmlentities($ligne) . "<br>";
    }
    fclose($id);
}

// 2. Lecture complete en une seule chaine (pas besoin de fopen)
echo "<b>Avec file_get_contents :</b><br>";
$contenu = file_get_contents("journal.txt");
if ($contenu !== FALSE) {
    echo "<pre>" . htmlentities($contenu) . "</pre>";
}

// 3. Lecture complete en tableau (pas besoin de fopen)
echo "<b>Avec file :</b><br>";
$lignes = file("journal.txt");
if ($lignes !== FALSE) {
    echo "Nombre de lignes : " . count($lignes) . "<br>";
    foreach ($lignes as $i => $l) {
        echo "ligne $i : " . htmlentities($l) . "<br>";
    }
}
?>
</body>
</html>
