<?php

require_once ("./models/database/DataSource.php");

// GET ALL
function getAllSubcategory()
{
  $connexion = SGBDConnect();

  $requete = 'SELECT subcategory_id, title, description, category_id, user_id'
          .  ' FROM subcategory';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

// GET
function getSubcategory($subcategoryId)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT subcategory_id, title, description, category_id, user_id'
          . ' FROM subcategory'
          . ' WHERE subcategory_id = "' . $subcategoryId . '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

// add admin verification
// SET (UPDATE) only admin
function setSubcategory($title, $description, $category_id, $subcategory_id)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'UPDATE subcategory'
            . ' SET title = "' . $title
            . '", description = "' . $description
            . '", category_id = ' . $category_id
            . ' WHERE subcategory_id = ' . $subcategory_id;
    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
return $resultat;
}

// add admin verification
// DELETE only admin
function deleteSubcategory($subategoryId)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'DELETE FROM subcategory WHERE subcategory_id = ' . $subategoryId . '';
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