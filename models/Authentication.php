<?php

require_once ("./models/database/DataSource.php");

// add md5 for hash password
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

// Connexion

// Mot de passe oublié (Bonus)

?>