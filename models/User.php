<?php

require_once ("./models/database/DataSource.php");

function userExist($email)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT user_id, email, admin, password'
          . ' FROM user'
          . ' WHERE email = "' . $email . '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

  return $ligne;
}

function getUserInfo($email)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT user_id, email, lastname, firstname, pseudo, admin '
          . ' FROM user '
          . ' WHERE email = "' . $email . '"';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
  return $ligne;
}

// Get all users (for back-office)
function getAllUsers()
{
  $connexion = SGBDConnect();

  $requete = 'SELECT user_id, lastname, firstname, pseudo, email, admin'
          .  ' FROM user';

  $resultat = $connexion->query($requete);
  $resultat->setFetchMode(PDO::FETCH_ASSOC);
  $lignes = $resultat->fetchAll(PDO::FETCH_ASSOC);
  return $lignes;
}

// Update user
function setUser($lastname, $firstname, $pseudo, $email, $password, $user_id)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'UPDATE user'
            . ' SET lastname = "' . $lastname
            . '", firstname = "' . $firstname
            . '", pseudo = "' . $pseudo
            . '", email = "' . $email
            . '", password = "' . $password
            . '" WHERE user_id = ' . $user_id;
    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
return $resultat;
}

// Update role of user for admin
function setUserRole($lastname, $firstname, $pseudo, $email, $password, $admin, $user_id)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'UPDATE user'
            . ' SET lastname = "' . $lastname
            . '", firstname = "' . $firstname
            . '", pseudo = "' . $pseudo
            . '", email = "' . $email
            . '", password = "' . $password
            . '", admin = ' . $admin
            . '" WHERE user_id = ' . $user_id;
    $resultat = $connexion->query($requete);
  }
  catch (PDOException $e)
  {
    echo 'Erreur !: ' . $e->getMessage() . '<br />';
    exit();
  }
return $resultat;
}

// Delete user (only admin)
function deleteUser($userId)
{
  try
  {
    $connexion = SGBDConnect();

    $requete = 'DELETE FROM user WHERE user_id = ' . $userId . '';
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