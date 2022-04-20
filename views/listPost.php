<div class="listPostTop">
<?php
  echo '<h1 class="themesTitle">' . $subcategory['title'] . '</h1>';
  echo '<p class="italic">' . $subcategory['description'] . '</p>';
?>
</div>


<div class="listPost">
  <div class="text-center">
      <h1>Liste des posts</h1>
  </div>
  <div class="post">
  <?php
    foreach ($allPosts as $post) {
            ?>
    <div class="postMessage">
      <?php
          echo '<a class="theme" href="index.php?uc=post&action=post">';
          echo '<img class="logoTheme" src="assets/images/boule.png" alt="logoTheme"></img>';
          echo '<h1>'. $post['post_title'] .'</h1> </a>';?>
    </div>
    <div class="userPost">
        <?php
          echo '<p class="italicGrey alinea">'. $post['pseudo'] .'</p>';
          echo '<p class="italicGrey alinea">'. $post['post_date'] .'</p>';
          echo '<hr class="divider">';
        ?>
    </div>
    <?php } ?>
  </div>

<?php if(isset($_SESSION['theUserEmail'])) {
echo '<div class="container">
  <hr>
  <form class="accountForm" method="POST">
    <div class="accountContainer">
      <h1 class="text-center">Poster un sujet</h1>

      <label for="titlePost">Titre du sujet</label>
      <input id="titlePost" name="titlePost" class="inputAccount" type="text" placeholder="Entrez le titre de votre sujet" value="">

      <label for="subjectPost">Votre sujet</label><br>
      <textarea rows="30" name="subjectPost" for="subjectPost" type="text" class="subjectPost" placeholder="Rédigez le contenu de votre sujet."></textarea>

      <input type="hidden" id="action" name="action" value="addPost">
      <button id="accountSubmit" name="postSubmit" type="submit" >Créer un sujet</button>
    </div>
  </form>
</div>';
}
?>

<?php
if($action === 'addPost'){
  echo '<div><p>Votre post a bien été crée !</p></div>';
  include("views/post.php");
}
?>

</div>