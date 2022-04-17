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
    include("views/authentication/subscribe.php");
    break;
  }

  default :
  {
    include("views/authentication/subscribe.php");
    break;
  }
}