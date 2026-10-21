<html>
<body>
<?php
$f = "journal.txt";

if (file_exists($f)) {
    echo "$f existe, taille : " . filesize($f) . " octets<br>";

    copy($f, "sauvegarde.txt");
    echo "Copie creee : sauvegarde.txt<br>";

    rename("sauvegarde.txt", "sauvegarde_old.txt");
    echo "Copie renommee en sauvegarde_old.txt<br>";

    unlink("sauvegarde_old.txt");
    echo "sauvegarde_old.txt supprimee<br>";
} else {
    echo "$f n'existe pas.";
}
?>
</body>
</html>
