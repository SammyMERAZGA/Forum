<?php

require_once './models/database/DataSource.php';

session_start();

function userAccountCerification($pseudo, $mdp) {

  $bonPseudo = userExist($pseudo);
  if ($bonPseudo)
  {
    $bonPass = password_verify($mdp, $bonPseudo['pass']);
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

function openUserSession($pseudo) {
  $_SESSION['userNickName'] = $pseudo;

  $userInfo = getUserInfo($pseudo);

  $_SESSION['theUserId'] = $userInfo['user_id'];
  $_SESSION['theUserName'] = $userInfo['name'];
  $_SESSION['theUserFirstName'] = $userInfo['firstname'];
  $_SESSION['theUserNickName'] = $userInfo['nickname'];
  $_SESSION['theUserEmail'] = $userInfo['email'];
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