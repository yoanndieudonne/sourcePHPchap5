<?php
session_start();
$erreur = "";
if (isset($_POST['login']) && isset($_POST['mdp'])) {
    // Identifiants en dur pour l'exemple :
    // en pratique, verification dans une base de donnees
    if ($_POST['login'] === "alice" && $_POST['mdp'] === "secret") {
        $_SESSION['utilisateur'] = "alice";
        header("Location: accueil.php");  // redirection HTTP
        exit;
    } else {
        $erreur = "Identifiants incorrects.<br>";
    }
}
?>
<html>
<body>
<h2>Connexion</h2>
<?php echo $erreur; ?>
<form method="post" action="connexion.php">
Login : <input type="text" name="login"><br>
Mot de passe : <input type="password" name="mdp"><br>
<input type="submit" value="Se connecter">
</form>
</body>
</html>
