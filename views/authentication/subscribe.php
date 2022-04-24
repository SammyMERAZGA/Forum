<?php
  if($existEmail)
  {
    echo '<div class="error existEmail"><p>Ce compte existe déjà</p></div>';
  }
  if($errorPSW)
  {
    echo '<div class="error errorPSW"><p>Le mot de passe et le mot de passe confirmé n\'ont pas la même valeur</p></div>';
  }
?>

<form method="POST">
  <div id="containerRegister">
    <h1 class="text-center">Inscription</h1>
    <img class="loginPicture" src="assets/images/register.svg" alt="loginPicture"></img>
    <label for="email"><b>Email</b></label>
    <input id="email" type="email" placeholder="Entrer votre email" name="email" required>

    <label for="psw"><b>Mot de passe</b></label>
    <input id="psw" type="password" placeholder="Entrer votre mot de passe" name="psw" required>

    <label for="psw-repeat"><b>Confirmer votre mot de passe</b></label>
    <input id="psw-repeat" type="password" placeholder="Confirmer votre mot de passe" name="psw-repeat" required>

    <input type="hidden" id="action" name="action" value="subscribeTest">
    <input type="hidden" id="uc" name="uc" value="subscribe">
    <input type="submit" class="registerbtn" name="btnSubmit" id="btnSubmit" value="S'inscrire">
  </div>

  <div class="container signin">
    <p>Vous avez déjà un compte ? <a href="index.php?uc=login&action=login">Se connecter</a></p>
  </div>
</form>