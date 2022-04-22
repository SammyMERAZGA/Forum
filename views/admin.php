<div class="listPost">
  <h1 class="text-center">Admin</h1>
</div>

<h1 class="text-center">Liste des utilisateurs :</h1>
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

<h1 class="text-center blue-text">Liste des posts :</h1>
<hr class="divider">

<?php
  foreach ($allPosts as $post) {
?>
  <div class="postMessage">
    <?php
      echo '<a class="theme" href="index.php?uc=admin&action=deleteUser">';
      echo '<img class="logoTheme" src="assets/images/blueTrash.png" alt="deleteUser"></img></a>';
      echo '<div class="alinea blue-text"><h3>Titre du post : '. $post['post_title'] .'</h3></div>';
      echo '<hr class="divider">';
    ?>
  </div>
<?php } ?>

<h1 class="text-center">Liste des commentaires :</h1>
<hr class="divider">

<?php
  foreach ($allCommentaries as $commentary) {
?>
  <div class="postMessage">
    <?php
      echo '<a class="theme" href="index.php?uc=admin&action=deleteUser">';
      echo '<img class="logoTheme" src="https://cdn-icons-png.flaticon.com/512/561/561125.png" alt="deleteUser"></img></a>';
      echo '<div class="alinea"><h3>Titre du post : '. $commentary['title'] .'</h3>';
      echo '<h3>Commentaire : '. $commentary['message'] .'</h3>';
      echo '<h3>Auteur du commentaire : '. $commentary['pseudo'] .'</h3>';
      echo '<h3>Date du commentaire : '. $commentary['commentary_date'] .'</h3> </div>';
      echo '<hr class="divider">';
    ?>
  </div>
<?php } ?>