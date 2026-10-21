<?php
// Tous les setcookie AVANT tout envoi de HTML
$msg = "";

// 1. Creation d'un cookie de preference, valable 30 jours
if (!isset($_COOKIE['langue'])) {
    setcookie("langue", "fr", time() + 30 * 24 * 3600, "/");
    $msg .= "Cookie langue cree (visible des la prochaine requete).<br>";
} else {
    $msg .= "Cookie langue deja present : "
          . htmlentities($_COOKIE['langue']) . "<br>";
}

// 2. Compteur de visites stocke cote client
if (isset($_COOKIE['visites'])) {
    $visites = $_COOKIE['visites'] + 1;
} else {
    $visites = 1;
}
setcookie("visites", $visites, time() + 30 * 24 * 3600, "/");
$msg .= "Visites deja enregistrees : " . ($visites - 1) . "<br>";

// 3. Suppression : expiration dans le passe
if (isset($_GET['effacer'])) {
    setcookie("langue", "", time() - 3600, "/");
    setcookie("visites", "", time() - 3600, "/");
    $msg .= "Cookies supprimes (effectif a la prochaine requete).<br>";
}
?>
<html>
<body>
<?php echo $msg; ?>
<p>
<a href="cookies.php">Recharger</a> |
<a href="cookies.php?effacer=1">Effacer les cookies</a>
</p>
</body>
</html>
