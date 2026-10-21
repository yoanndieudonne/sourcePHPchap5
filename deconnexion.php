<?php
session_start();
session_unset();     // vide toutes les variables de session
session_destroy();   // detruit la session cote serveur
header("Location: connexion.php");
exit;
?>
