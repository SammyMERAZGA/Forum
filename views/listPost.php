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
          echo '<img class="logoTheme" src="assets/images/boule.png" alt="logoTheme"></img>';
            echo '<h1>'. $post['post_title'] .'</h1>'; ?>
    </div>
    <div class="userPost">
        <?php
          echo '<p class="italicGrey">'. $post['pseudo'] .'</p>';
            echo '<p class="italicGrey">'. $post['post_date'] .'</p>'; ?>
    </div>
    <?php } ?>
  </div>

<div class="container">
  <hr>
  <form class="accountForm" method="POST">
    <div class="accountContainer">
      <h1 class="text-center">Poster un sujet</h1>

      <label for="titlePost">Titre du sujet</label>
      <input id="titlePost" name="titlePost" class="inputAccount" type="text" placeholder="Entrez le titre de votre sujet" value="">

      <label for="subjectPost">Votre sujet</label><br>
      <textarea rows="30" name="subjectPost" for="subjectPost" type="text" class="subjectPost" placeholder="Rédigez le contenu de votre sujet."></textarea>

      <input type="hidden" id="action" name="action" value="createPost">
      <button id="accountSubmit" name="accountSubmit" class="inputAccount" type="submit" >Créer un sujet</button>
    </div>
  </form>
</div>

</div>