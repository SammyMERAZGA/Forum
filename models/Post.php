<?php

require_once ("./models/database/DataSource.php");

function getAllPost()
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, post.title as post_title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, pseudo, subcategory.title as subcategory_title'
          . ' FROM post INNER JOIN user'
          . ' ON post.user_id = user.user_id'
          . ' INNER JOIN subcategory'
          . ' ON subcategory.subcategory_id = post.subcategory_id';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

function getAllPostOfSubcategory($subcategory_id)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, post.title as post_title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, pseudo, post.subcategory_id'
          . ' FROM post INNER JOIN user'
          . ' ON post.user_id = user.user_id'
          . ' INNER JOIN subcategory'
          . ' ON subcategory.subcategory_id = post.subcategory_id'
          . ' WHERE subcategory.subcategory_id = '. $subcategory_id ;

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

function getPostOfUser($userId)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, user_id, pseudo, category_id'
          . ' FROM post INNER JOIN user'
          . ' ON user.user_id = post.user_id'
          . ' INNER JOIN category'
          . ' ON post.category_id = category.category_id'
          . ' AND user_id = "' . $userId . '"'
          . ' ORDER BY post_date';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

// INSERT
function addPost($postName, $postText, $userId, $subcategoryId)
{
  $connexion = SGBDConnect();

  $requete = 'INSERT INTO post '
            . ' (title, message, post_date, user_id, subcategory_id)'
            . ' VALUES ("' . $postName . '", "' . $postText . '", NOW(), "' . $userId . '", "' . $subcategoryId . '")';

  $resultat = $connexion->query($requete);
  return $resultat;
}

function getAllCommentaryOfPost($post_id)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT commentary.message, DATE_FORMAT(commentary_date, \'%d/%m/%Y à %Hh%imin%ss\') AS commentary_date, user.pseudo'
          . ' FROM commentary INNER JOIN user'
          . ' ON user.user_id = commentary.user_id'
          . ' INNER JOIN post'
          . ' ON commentary.post_id = post.post_id'
          . ' WHERE commentary.post_id = '. $post_id ;

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

function getAllCommentaries()
{
  $connexion = SGBDConnect();

  $requete = 'SELECT commentary.message, DATE_FORMAT(commentary_date, \'%d/%m/%Y à %Hh%imin%ss\') AS commentary_date, user.pseudo, post.title'
          . ' FROM commentary INNER JOIN user'
          . ' ON user.user_id = commentary.user_id'
          . ' INNER JOIN post'
          . ' ON commentary.post_id = post.post_id';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

function addCommentary($message, $userId, $postId)
{
  $connexion = SGBDConnect();

  $requete = 'INSERT INTO commentary '
            . ' (message, commentary_date, user_id, post_id)'
            . ' VALUES ("' . $message . '", NOW(), "' . $userId . '", "' . $postId . '")';

  $resultat = $connexion->query($requete);
  return $resultat;
}

function getPost($postId)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, post.title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, post.user_id, pseudo, category_id'
          . ' FROM post INNER JOIN user'
          . ' ON user.user_id = post.user_id'
          . ' INNER JOIN subcategory'
          . ' ON post.subcategory_id = subcategory.subcategory_id'
          . ' WHERE post_id = "' . $postId . '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

function nbPosts() {
  $connexion = SGBDConnect();

  $requete = 'SELECT COUNT(*) AS nbPosts FROM post';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

  return (int)$ligne['nbPosts'];
}

function nbCommentaries() {
  $connexion = SGBDConnect();

  $requete = 'SELECT COUNT(*) AS nbCommentaries FROM commentary';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

  return (int)$ligne['nbCommentaries'];
}

?>