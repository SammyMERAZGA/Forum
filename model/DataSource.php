<?php

function SGBDConnect() //Connexion à la base de données
{
  try
  {
    $connexion = new PDO('mysql:host=localhost;dbname=forum', 'root', '');
    $connexion->query('SET NAMES UTF8');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
  return $connexion;
}


function userExist($nickname)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT user_id, nickname, admin, password'
           . ' FROM user'
           . ' WHERE nickname = "' . $nickname . '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

  return $ligne;
}

function getUserInfo($pseudo)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT id_utilisateurs, id_groupes, pseudo, concat(nom, " ",prenom) as nomPrenom'
           . ' FROM utilisateurs '
           . ' WHERE pseudo = "' . $pseudo . '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

function getListCategory()
{
  $connexion = SGBDConnect();

  $requete = 'SELECT category_id, name, description, image'
           . ' FROM category';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

function getCategory($categoryId)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT category_id, name, description, image'
           . ' FROM category'
           . ' WHERE category_id = "' .$categoryId. '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

function getListPost()
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, user_id, nickname, category_id'
           . ' FROM user INNER JOIN post'
           . ' ON user.user_id = post.user_id'
           . ' INNER JOIN category'
           . ' ON post.category_id = category.category_id'
           . ' ODER BY post_date';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

function getPost($postId)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT post_id, title, message, DATE_FORMAT(post_date, \'%d/%m/%Y à %Hh%imin%ss\') AS post_date, user_id, nickname, category_id'
           . ' FROM user INNER JOIN post'
           . ' ON user.user_id = post.user_id'
           . ' INNER JOIN category'
           . ' ON post.category_id = category.category_id'
           . ' WHERE post_id = "' . $postId . '"'
           . ' ODER BY post_date';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

function setCategory($name, $description, $image/*, $idUtilisateur*/)
//modifier la table category pour connaitre l'id de l'admin qui la créer
{
  try
  {
    $connexion = SGBDConnect();

    // $requete = 'INSERT INTO category (id_articles, titre, contenu, date_creation, id_auteurs) VALUES (NULL, \'' . $name . '\', \'' . $description . '\', CURRENT_TIMESTAMP, ' . $idUtilisateur . ')';
    $requete = 'INSERT INTO category (id_articles, name, description, image) VALUES (NULL, \'' . $name . '\', \'' . $description . '\', \'' . $image . ')';
    $resultat = $connexion->query($requete);
  } 
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
return $resultat;
}

function deleteCategory($categoryId)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'DELETE FROM category WHERE category_id = ' . $categoryId . '';
    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
  return $resultat;
}

// setSousCategory créer la table sous catégorie

function inscription($name, $firstName, $nickName, $email, $password)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'INSERT INTO user (user_id, name, firstname, nickname, email, password, admin) VALUES ( NULL,\'' . $name . '\',\'' . $firstName . '\',\'' . $nickName . '\',\'' . $email . '\',\'' . $password . '\')';
    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
  return $resultat;
}