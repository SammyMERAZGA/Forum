<div class="listPost">
  <h1 class="text-center">Admin</h1>
</div>

<h1 class="alinea">Liste des utilisateurs :</h1>
<hr class="divider">

<?php
  if($action === 'deleteUser')
  {
    echo '<div>
            <p>L\'utilisateur a bien été supprimer</p>
          </div>';
  }
  foreach ($allUsers as $user) {
?>
  <div class="postMessage">
    <?php
      echo '<a class="theme" href="index.php?uc=admin&action=deleteUser&user_id='. $user['user_id'] .'">';
      echo '<img class="logoTheme" src="https://cdn-icons-png.flaticon.com/512/561/561125.png" alt="deleteUser"></img></a>';
      echo '<div class="alinea"><h3>Pseudo : '. $user['pseudo'] .'</h3>';
      echo '<h3>Adresse e-mail : '. $user['email'] .'</h3>';
      echo '<h3>Administrateur : '. $user['admin'] .'</h3> </div>';
      echo '<hr class="divider">';
    ?>
  </div>
<?php } ?>