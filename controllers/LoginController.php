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
    $email = $_REQUEST['email'];
    $mdp = $_REQUEST['psw'];
    $user = userAccountCerification($email, $mdp);
    if($user)
    {
      openUserSession($email);
      header("Location: index.php?uc=home&action=home");
    }
    else
    {
      $action = 'erreurConnexion';
      include("views/authentication/login.php");
    }
    break;
  }

  case 'logout':
    {
      closeUserSession();
      header("Location: index.php?uc=home&action=home");
      break;
    }

    case 'valideInscription':
      {
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