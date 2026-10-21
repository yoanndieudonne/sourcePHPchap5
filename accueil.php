<?php
session_start();
// Page reservee aux utilisateurs connectes
if (!isset($_SESSION['utilisateur'])) {
    header("Location: connexion.php");
    exit;
}
?>
<html>
<body>
<h2>Accueil</h2>
<p>Bonjour <?php echo htmlentities($_SESSION['utilisateur']); ?>,
vous etes connecte.</p>
<a href="deconnexion.php">Se deconnecter</a>
</body>
</html>
