<?php

// session_start();
require_once ("./models/database/DataSource.php");
require_once("./include/Bibliotheque.inc.php");
require_once("./include/Security.php");

$sessionOuverte = isOpenUserSession();
$sessionAdmin = isAdminSesion();
include("./include/Header.php");

if (!isset($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'home';
}

$uc = $_REQUEST['uc'];

switch ($uc)
{
  case 'add':
  {
    include ('controllers/AddController.php');
    break;
  }

  case 'forum':
  {
    include ('controllers/ForumController.php');
    break;
  }

  case 'home':
  {
    include ('controllers/HomeController.php');
    break;
  }

  case 'listPost':
  {
    include ('controllers/ListPostController.php');
    break;
  }

  case 'subscribe':
  {
    include ('controllers/SubscribeController.php');
    break;
  }

  case 'login':
  {
    include("controllers/LoginController.php");
    break;
  }

  case 'about':
  {
    include("controllers/AboutController.php");
    break;
  }

  case 'account':
  {
    include("controllers/AccountController.php");
    break;
  }

  case 'logout':
  {
    include("controllers/LoginController.php");
    break;
  }
}

include("include/Footer.php");
?>

