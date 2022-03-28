<?php
require_once ("./controllers/HomeController.php")
?>
<img id="legendsCorp" src="./assets/images/legendsCorp.png" alt="image homePage"/></img>

<div class="container">
  <div class="categories">
    <div class="category">
      <div class="categoryTop">
        <img class="imgCategory" src="assets/images/dbzGogeta.png" alt="image categorie"></img>
        <h2 class="categoryTitle">Title 1</h2>
      </div>
      <div class="themes">
          <?php
          foreach($allCategory as $category){
              echo '<div class="theme">';
              echo '<img class="logoTheme" src="assets/images/boule.png" alt="logoTheme"></img>';
              echo '<h3 class="themesTitle">' . $category['title'] . '</h3>';
              echo '<div><p class="description">'.$category['description'].'</p></div>';
              echo '</div>';
          }
          ?>
      </div>
    </div>
  </div>
</div>