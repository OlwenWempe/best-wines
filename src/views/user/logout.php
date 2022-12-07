<?php
// Initialiser la session
session_start();

// Détruire la session.
if (session_destroy()) {
  // Redirection vers la page de connexion
  header("Location: login.php");
}
?>

//la partie au-dessus est à mettre dans UserController dans la méthode logout. Faudra remplacer l'echo.
//La partie en-dessous servira à mettre la mise en page du message logout plus un bouton "page d'acceuil".

<section>




</section>