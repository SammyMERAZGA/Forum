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
    $email = $_SESSION['theUserEmail'];
    $password = $_POST['mdp'];
    $user = userExist($email);
    if($user['password'] === hash('sha256',$password))
    {
      $userId = $_SESSION['theUserId'];
      $email = $_POST['e-mail'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $pseudo = $_POST['pseudo'];

      updateUser($lastname, $firstname, $pseudo, $email, $userId);
      openUserSession($_SESSION['theUserEmail']);
      $resultat = true;
      include("views/account.php");
    }else
    {
      $resultat = false;
      include("views/account.php");
    }
    break;
  }

  case 'updateUserPwd':
  {
    require_once './models/User.php';
    $email = $_SESSION['theUserEmail'];
    $password = $_POST['mdp'];
    $user = userExist($email);
    if($user['password'] === hash('sha256',$password))
    {
      $userId = $_SESSION['theUserId'];
      $newMdp = $_POST['newMdp'];
      updateUserPwd($userId, hash('sha256', $newMdp));
      $resultat = true;
      include("views/account.php");
    }else
    {
      $resultat = false;
      include("views/account.php");
    }
    break;
  }

  default :
  {
    include("views/account.php");
    break;
  }
}