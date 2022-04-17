<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'account';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'account':
  {
    include("views/account.php");
    break;
  }

  case 'updateUserInfos':
    {
      require_once './models/User.php';

      $userId = $_SESSION['theUserId'];
      $email = $_POST['e-mail'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $pseudo = $_POST['pseudo'];
      $newMdp = $_POST['newMdp'];

      setUser($lastname, $firstname, $pseudo, $email, $newMdp, $userId);
      break;
    }

  default :
  {
    include("views/account.php");
    break;
  }
}