<?php

if(!isset($_REQUEST['action']))
{
  $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'demandeConnexion':
  {
    include("view/authentication/login.php");
    break;
  }

  case 'valideConnexion':
  {
    $login = $_REQUEST['login'];
    $mdp = $_REQUEST['mdp'];
    $user = $pdo->getInfosUser($login,$mdp);
    if(!is_array( $user))
    {
      // ajouterErreur("Login ou mot de passe incorrect");
      include("view/v_erreurs.php");
      include("view/authentication/login.php");
    }
    else
    {
      $id = $user['id'];
      $nom = $user['nom'];
      $prenom = $user['prenom'];
      // connecter($id,$nom,$prenom);
      include("view/home.php");
    }
    break;
  }

  case 'logout':
    {
      // Code ajouté par moi. Sans cela les informations de sessions
      // ne sont pas supprimées lors d'une déconnexion.
      // deconnecter();
      include("view/authentication/login.php");
      break;
    }

  default :
  {
    include("view/authentication/login.php");
    break;
  }
}
?>