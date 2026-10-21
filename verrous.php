<html>
<body>
<?php
$fichier = "journal.txt";

// 1. Ecriture sous verrou exclusif (LOCK_EX)
$id = fopen($fichier, "a");
if ($id !== FALSE) {
    flock($id, LOCK_EX);        // personne d'autre ne peut lire ou ecrire
    fwrite($id, "Visite le " . date("d/m/Y H:i:s") . "\n");
    flock($id, LOCK_UN);        // liberation : les autres processus peuvent passer
    fclose($id);
    echo "Ligne ajoutee sous verrou exclusif.<br>";
}

// 2. Lecture sous verrou partage (LOCK_SH)
$id = fopen($fichier, "r");
if ($id !== FALSE) {
    flock($id, LOCK_SH);        // bloque les ecritures pendant toute la lecture
    echo "<b>Contenu du journal :</b><br>";
    while (($ligne = fgets($id)) !== FALSE) {
        echo htmlentities($ligne) . "<br>";
    }
    flock($id, LOCK_UN);
    fclose($id);
}
?>
</body>
</html>
