<?php

require_once './models/database/DataSource.php';
require_once './models/User.php';

session_start();

function userAccountCerification($email, $mdp) {

  $bonEmail = userExist($email);
  $mdpHash = hash('sha256', $mdp);
  $bonPass = false;
  if ($bonEmail)
  {
    if($mdpHash == $bonEmail['password'])
    {
      return $bonPass = true;
    }
    if ($bonPass)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  else
  {
    return false;
  }
}

function openUserSession($email) {
  // $_SESSION['theUserEmail'] = $email;

  $userInfo = getUserInfo($email);

  $_SESSION['theUserId'] = $userInfo['user_id'];
  $_SESSION['theUserEmail'] = $userInfo['email'];
  $_SESSION['theUserLastname'] = $userInfo['lastname'];
  $_SESSION['theUserFirstname'] = $userInfo['firstname'];
  $_SESSION['theUserPseudo'] = $userInfo['pseudo'];
  $_SESSION['theUserType'] = $userInfo['admin'];
}

function isOpenUserSession() {
  return isset($_SESSION['utilPseudo']);
}

function isAdminSesion() {
  if (isOpenUserSession())
  {
    if ($_SESSION['theUserType'] == true)
    {
      return true;
    }
  }
  else
  {
    return false;
  }
}

function closeUserSession() {
  session_destroy();
}


// Fermeture automatique de la session au bout d'un certain temps

// if(isOpenUserSession()){ // si le membre est connecté
//      if(isset($_SESSION['timestamp'])){ // si $_SESSION['timestamp'] existe
//              if($_SESSION['timestamp'] + 900 > time()){
//                     $_SESSION['timestamp'] = time();
//              }else{
//                  session_unset();
//                  session_destroy();
//              echo "<script language='JavaScript'>alert('Vous avez été déconnecté pour inactivité trop longue!')</script>";
//              }
//      }else{ $_SESSION['timestamp'] = time(); }
// }