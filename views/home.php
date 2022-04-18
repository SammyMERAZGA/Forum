<?php
require_once ("./controllers/HomeController.php")
?>
<img id="legendsCorp" src="./assets/images/legendsCorp.png" alt="image homePage"/></img>

<div class="container">
  <div class="categories">
    <div class="category">
        <?php
          foreach($allCategory as $category)
          {
            echo '<div class="categoryTop">';
            echo '<img class="imgCategory" src="' . $category['image']  . '" alt="Image catégorie"></img>';
            echo '<h2 class="categoryTitle">' . $category['name'] . '</h2>';
            echo '</div>';
        ?>
      <div class="themes">
          <?php
          foreach($allSubcategory as $subcategory){
            if ($category['category_id'] == $subcategory['category_id']) {
                echo '<a class="theme" href="index.php?uc=listPost&action=listPost&subcategoryId=' . $subcategory['subcategory_id'] . '">';
                echo '<img class="logoTheme" src="assets/images/boule.png" alt="logoTheme"></img>';
                echo '<h3 class="themesTitle">' . $subcategory['title'] . '</h3>';
                echo '<div><p class="descriptionSubcategory">'.$subcategory['description'].'</p></div>';
                echo '</a>';
            }
          }
          ?>
      </div>
      <?php } ?>
    </div>
  </div>
</div>