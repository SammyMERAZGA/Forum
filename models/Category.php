<?php

require_once ("./models/database/DataSource.php");

function getAllCategory()
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

// Add admin verification
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

// Add admin verification
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

?>