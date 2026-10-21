<html>
<body>
<?php
// Ecriture classique : fopen + fwrite + fclose, en mode ajout
$id = fopen("journal.txt", "a");
if ($id !== FALSE) {
    fwrite($id, "Ligne ajoutee le " . date("d/m/Y H:i") . "\n");
    fclose($id);
    echo "Ligne ajoutee.<br>";
} else {
    echo "Ouverture impossible.";
}
echo "Fin de l'exécution.";
?>
</body>
</html>
