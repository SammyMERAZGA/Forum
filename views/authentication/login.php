<?php
if($action === 'valideInscription')
{
  echo '<div class="success valideInscription"><p>Vous avez bien été inscrit, connectez-vous!</p></div>';
}

if($action === 'erreurConnexion')
{
  echo '<div class="error erreurConnexion"><p>Adresse e-mail ou mot de passe incorrect !</p></div>';
}
?>

<form method="POST">
  <div id="containerRegister">
    <h1 class="text-center">Connexion</h1>
      <img class="loginPicture" src="assets/images/login.svg" alt="loginPicture"></img>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Entrer votre email" name="email" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer votre mot de passe" name="psw" required>

    <input type="hidden" id="action" name="action" value="valideConnexion">
    <button type="submit" class="registerbtn" href="view/authentication/login.php" >Se connecter</button>
  </div>

  <!-- <div class="container signin">
    <a href="index.php">Mot de passe oublié</a>
  </div> -->
</form>