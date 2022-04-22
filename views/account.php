<div class="container">
  <form class="accountForm" method="POST">
    <div class="accountContainer">
      <h2>Modifier vos informations</h2>

      <label for="e-mail">Email</label>
      <input id="e-mail" name="e-mail" class="inputAccount" type="email" value="<?php echo($_SESSION['theUserEmail']); ?>">

      <label for="pseudo">Pseudo</label>
      <input name="pseudo" class="inputAccount" type="text" placeholder="Changer de pseudo" value="<?php echo($_SESSION['theUserPseudo']); ?>">

      <label for="firstname">Prénom</label>
      <input id="firstname" name="firstname" class="inputAccount" type="text" placeholder="Changer le prénom" value="<?php echo($_SESSION['theUserFirstname']); ?>">

      <label for="lastname">Nom</label>
      <input id="lastname" name="lastname" class="inputAccount" type="text" placeholder="Changer le nom de famille" value="<?php echo($_SESSION['theUserLastname']); ?>">


      <!-- <label for="newMdp">Nouveau mot de passe</label>
      <input id="newMdp" name="newMdp" class="inputAccount" type="password" placeholder="nouveau mot de passe">

      <label for="mdp">Mot de passe actuel*</label>
      <input id="mdp" name="mdp" class="inputAccount" type="password" placeholder="confirmer les modification" required> -->

      <input type="hidden" id="action" name="action" value="updateUserInfos">
      <button id="accountSubmit" name="accountSubmit" class="inputAccount" type="submit" >Modifier les informations</button>
    </div>
  </form>
  <hr>
  <form class="accountFormPwd" method="POST">
    <div class="accountContainer">
      <h2>Modifier votre mot de passe</h2>

      <label for="mdp">Mot de passe actuel*</label>
      <input id="mdp" name="mdp" class="inputAccount" type="password" placeholder="confirmer les modification" required>

      <label for="newMdp">Nouveau mot de passe*</label>
      <input id="newMdp" name="newMdp" class="inputAccount" type="password" placeholder="Nouveau mot de passe" required>

      <label for="newMdpConfirm">Confirmer le mot de passe*</label>
      <input id="newMdpConfirm" name="newMdpConfirm" class="inputAccount" type="password" placeholder="Confirmer le nouveau mot de passe" required>

      <input type="hidden" id="action" name="action" value="updateUserPwd">
      <button id="accountSubmit" name="accountSubmit" class="inputAccount" type="submit">Modifier le mot de passe</button>
    </div>
  </form>
</div>
