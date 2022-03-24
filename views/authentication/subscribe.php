<form>
  <div id="containerRegister">
    <h1 class="text-center">Inscription</h1>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Entrer votre email" name="email" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer votre mot de passe" name="psw" required>

      <label for="psw-repeat"><b>Confirmer votre mot de passe</b></label>
      <input type="password" placeholder="Confirmer votre mot de passe" name="psw-repeat" required>
    <button type="submit" class="registerbtn" href="view/authentication/login.php" >S'inscrire</button>
  </div>

  <div class="container signin">
    <p>Vous avez déjà un compte ? <a href="index.php?uc=login&action=login">Se connecter</a></p>
  </div>
</form>