<div class="listPostTop">
<?php
  echo '<h3 class="themesTitle">' . $subcategory['title'] . '</h3>';
  echo '<div><p class="descriptionSubcategory">'.$subcategory['description'].'</p></div>';
?>
</div>
<!-- <div class="listPost">
  <?php 
    // foreach($allPost as $post){
    //   if($post['subcategory_id'] === $subcategory['subcategory_id']){
      ?>
    <div class="post">
      <div class="userPost">
        <?php
        //  echo '<h3>'. $post['pseudo'] .'</h3>'; 
         ?>
      </div>
      <div class="postMessage">
        <?php 
          // echo '<h2>'. $post['title'] .'</h2>';
          // echo '<p>'. $post['message'] .'</p>';
        ?>
      </div>
    </div>
  <?php
    //   }
    // }
  ?>
</div> -->

<div class="listPost">
  <div class="text-center">
      <h1>Liste des postes</h1>
  </div>
  <div class="post">
    <div class="userPost">
      <h2>Pseudo 1</h2>
    </div>
    <div class="postMessage">
      <h3>Titre du post 1</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, ipsam expedita deleniti assumenda inventore itaque!</p>
    </div>
  </div>
  <div class="post">
    <div class="userPost">
      <h2>Pseudo 2</h2>
    </div>
    <div class="postMessage">
      <h3>Titre du post 2</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam aliquid assumenda facilis pariatur, dolore voluptatibus.</p>
    </div>
  </div>
</div>