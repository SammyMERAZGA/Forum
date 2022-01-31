<?php

// session_start();
require_once ("./model/DataSource.php");
require_once("./include/Bibliotheque.inc.php");

include("./include/Header.inc.php");

if (!isset($_REQUEST['uc'])) {
    $_REQUEST['uc'] = 'home';
}

$uc = $_REQUEST['uc'];

switch ($uc)
{
  case 'add':
  {
    include ('controller/AddController.php');
    break;
  }

  case 'forum':
  {
    include ('controller/ForumController.php');
    break;
  }

  case 'home':
  {
    include ('controller/HomeController.php');
    break;
  }

  case 'listPost':
  {
    include ('controller/ListPostController.php');
    break;
  }

  case 'subscribe':
  {
    include ('controller/SubscribeController.php');
    break;
  }

  case 'login':
  {
    include("controller/LoginController.php");
    break;
  }

  case 'about':
  {
    include("controller/AboutController.php");
    break;
  }

  case 'account':
  {
    include("controller/AccountController.php");
    break;
  }
}

include("include/Footer.inc.php");
?>

