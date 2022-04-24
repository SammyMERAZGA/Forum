<?php
require_once('./models/Authentication.php');
if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'subscribe';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'subscribe':
  {
    $existEmail = false;
    $errorPSW = false;
    include("views/authentication/subscribe.php");
    break;
  }

  case 'subscribeTest':
  {
    if(userExist($_POST['email']))
    {
      $existEmail = true;
      $errorPSW = false;
      include("views/authentication/subscribe.php");
    }else
    {
      if($_POST['psw'] === $_POST['psw-repeat'])
      {
        $email = $_REQUEST["email"];
        $mdp = $_REQUEST["psw"];
        require_once("models/Authentication.php");
        inscription($email, $mdp);
        header("Location: index.php?uc=login&action=valideInscription");
      }else
      {
        $existEmail = false;
        $errorPSW = true;
        include("views/authentication/subscribe.php");
      }
    };
    break;
  }

  default :
  {
    include("views/authentication/subscribe.php");
    break;
  }
}