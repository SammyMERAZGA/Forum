<?php

require_once ("./models/database/DataSource.php");

// add md5 for hash password
function inscription($email, $password)
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
  password_hash($password, PASSWORD_DEFAULT);
}

// Connexion
function getInfosUser($email, $mdp)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'SELECT email, pseudo, lastname, firstname, admin ' .
    'FROM user ' .
    'WHERE email = "'. $email .'" AND password = "'. $mdp .'"';

    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
      echo 'Erreur !: ' . $e->getMessage() . '<br />';
      exit();
  }
  return ($resultat->rowCount() == 1);
}

// Mot de passe oublié (Bonus)

?>