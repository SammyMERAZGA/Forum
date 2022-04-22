<div class="titlePost">
  <?php
  echo '<h1 class="text-center">'. $post['title'] .'</h1>';
  echo '<h3 class="alinea">'. $post['message'] .'</h3>';
  ?>
</div>

<?php
if($action === "addCommentary")
{
  echo '<div>
          <p>Votre commentaire à bien été ajouté !</p>
        </div>';
}
if($allCommentary){
foreach($allCommentary as $commentary)
  {
    echo '<div class="postMessage">
            <img id="profilePic" src="https://vetref.fr/wp-content/uploads/2021/02/blank-profile-picture-973460_640.png" alt="profilePicture"></img>
            <h1 id="pseudo">'. $commentary['pseudo'] .'</h1>
            <p id="messageOfPost">'. $commentary['message'] .'</p>
            <hr class="divider">
          </div>';
  }
}else{
  echo '<div>
          <h2 class="text-center">Aucun commentaire</h2>
        </div>';
}
?>
<!-- <div class="postMessage">
  <img id="profilePic" src="https://vetref.fr/wp-content/uploads/2021/02/blank-profile-picture-973460_640.png" alt="profilePicture"></img>
  <h1 id="pseudo">Pseudo</h1>
  <p id="messageOfPost">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, commodi veritatis optio officiis voluptatibus ipsam placeat maxime soluta, dicta similique aliquam perferendis cupiditate est praesentium neque nam architecto eos reiciendis? Magni illum provident aliquid in vel eligendi impedit magnam veniam dolore rem ea architecto earum, temporibus autem sint fugit accusamus debitis culpa. Doloremque nulla asperiores ullam quibusdam, accusantium laboriosam odit veritatis expedita illo odio tenetur beatae, officiis atque neque, sed alias facere! Doloremque repellendus labore recusandae natus iste ut deserunt itaque culpa hic, voluptatem laboriosam soluta officia dolores. Rerum reprehenderit ex magnam assumenda numquam exercitationem unde? Quibusdam illum autem esse obcaecati placeat, architecto laboriosam quis, corrupti ipsa voluptas beatae qui nesciunt? Molestiae dolorum nostrum magni praesentium neque. Dignissimos vel sit expedita sed exercitationem amet maxime officiis, ducimus dolore rerum eligendi veritatis itaque eum optio animi iste odio quasi? Molestiae facere temporibus cupiditate nam ratione sequi ut, optio voluptas quisquam laudantium itaque voluptates voluptatum eligendi nobis ullam doloribus reprehenderit quae quo officiis sed cum illum aspernatur incidunt explicabo? Id exercitationem dignissimos dolore et tempore odio repellat earum modi illo fuga molestiae, cupiditate quod optio architecto laudantium explicabo labore saepe repudiandae cum omnis. Repellendus distinctio sint enim praesentium, quae assumenda cumque at! Voluptatem vel a aspernatur placeat, accusantium molestias recusandae atque sed quas explicabo. Sed laudantium voluptatibus rerum nihil quibusdam iusto id quod adipisci quis alias natus, voluptatum sunt quo, ipsa saepe cum necessitatibus veritatis illo quidem ut quasi voluptates nisi deleniti at? Voluptatibus ut voluptatem explicabo delectus perferendis, autem dolorum est unde in aliquam ex! Veniam eligendi, non aspernatur nobis sunt neque at quia rerum autem ut voluptatum omnis quibusdam explicabo laudantium inventore reprehenderit quod corrupti culpa pariatur, eaque, quam error? Minus sed quos sint distinctio ut omnis, nulla recusandae facere magnam veniam, doloremque, dolore incidunt. Odit quisquam velit itaque et.</p>
  <hr class="divider">
</div> -->



<?php
if(isset($_SESSION['theUserEmail'])) {
echo '<div class="container">
  <hr>
  <form class="accountForm" method="POST">
    <div class="accountContainer">
      <h1 class="text-center">Mettre un commentaire</h1>

      <label for="commentary">Votre commentaire</label><br>
      <textarea rows="30" name="commentary" for="commentary" type="text" class="subjectPost" placeholder="Rédigez votre commentaire."></textarea>

      <input type="hidden" id="post_id" name="post_id" value="'. $post['post_id'] .'">
      <input type="hidden" id="uc" name="uc" value="post">
      <input type="hidden" id="action" name="action" value="addCommentary">
      <button id="accountSubmit" name="commentarySubmit" type="submit">Envoyez le commentaire</button>
    </div>
  </form>
</div>';
}
?>