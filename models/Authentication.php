<?php

require_once ("./models/database/DataSource.php");

// add md5 for hash password
function inscription(/*$nickName, */$email, $password)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'INSERT INTO user (user_id, lastname, firstname, pseudo, email, password, admin) VALUES ( NULL, NULL, NULL, NULL,\'' . $email . '\',\'' . hash('sha256', $password) . '\', 0)';
    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
  return $resultat;
}

// Connexion

// Mot de passe oublié (Bonus)

?>