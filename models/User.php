<?php

require_once ("./models/database/DataSource.php");

function userExist($pseudo)
{
  $connexion = SGBDConnect();

  $requete = 'SELECT user_id, pseudo, admin, password'
          . ' FROM user'
          . ' WHERE pseudo = "' . $pseudo . '"';

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

// Get all users (for back-office)

// Update user

// Delete user (only admin)

?>