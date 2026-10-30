<?php
// Completer ici les appels a setcookie() AVANT tout HTML.

$message = "";

// 1. Langue
if (isset($_GET['langue'])) {
    if ($_GET['langue'] === "fr" || $_GET['langue'] === "en") {
        // Creer ou modifier le cookie langue
        // (expiration : time() + 7 * 24 * 3600, chemin "/").
    }
}

// 2. Couleur : valider, poser le cookie, et fixer la couleur d'affichage.
$couleur = "black";   // couleur d'affichage par defaut
if (isset($_GET['couleur']) && in_array($_GET['couleur'], ["red", "green", "blue"])) {
    // Creer ou modifier le cookie couleur
    // (meme expiration, meme chemin).
    // Mettre a jour $couleur avec le choix courant.
} elseif (isset($_COOKIE['couleur']) && in_array($_COOKIE['couleur'], ["red", "green", "blue"])) {
    // Reprendre le choix memorise dans $couleur.
}

// 3. Compteur de visites
if (isset($_COOKIE['visites'])) {
    // Incrementer le nombre de visites.
} else {
    // Premiere visite.
}
// Creer ou mettre a jour le cookie visites (meme expiration, meme chemin).

// 4. Suppression
if (isset($_GET['effacer'])) {
    // Supprimer les cookies langue, couleur et visites.
}
?>
<html>
<body text="<?php echo $couleur; ?>">
<?php echo $message; ?>

<p>
<a href="preferences.php?langue=fr">Francais</a> |
<a href="preferences.php?langue=en">English</a> |
<a href="preferences.php?couleur=red">Rouge</a> |
<a href="preferences.php?couleur=green">Vert</a> |
<a href="preferences.php?couleur=blue">Bleu</a> |
<a href="preferences.php?effacer=1">Effacer les cookies</a>
</p>
</body>
</html>
