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

function getPost($postId, $userId)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, user_id, pseudo, category_id'
          . ' FROM user INNER JOIN post'
          . ' ON user.user_id = post.user_id'
          . ' INNER JOIN category'
          . ' ON post.category_id = category.category_id'
          . ' WHERE post_id = "' . $postId . '"'
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

// SET (UPDATE) by user_id

// UPDATE by user_id

// DELETE by user_id

?>