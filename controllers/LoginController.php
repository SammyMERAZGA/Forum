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
    include("views/authentication/login.php");
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
      include("views/error.php");
      include("views/authentication/login.php");
    }
    else
    {
      $id = $user['id'];
      $nom = $user['nom'];
      $prenom = $user['prenom'];
      // connecter($id,$nom,$prenom);
      include("views/home.php");
    }
    break;
  }

  case 'logout':
    {
      // Code ajouté par moi. Sans cela les informations de sessions
      // ne sont pas supprimées lors d'une déconnexion.
      // deconnecter();
      include("views/authentication/login.php");
      break;
    }

    case 'valideInscription':
      {
        $email = $_REQUEST["email"];
        $mdp = $_REQUEST["psw"];
        require_once("models/Authentication.php");
        inscription($email, $mdp);
        $action = $_REQUEST["action"];
        include("views/authentication/login.php");
        break;
      }

  default :
  {
    include("views/authentication/login.php");
    break;
  }
}
?>