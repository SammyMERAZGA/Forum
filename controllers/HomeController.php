<?php
if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'home';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'home':
  {
    include("views/home.php");
    break;
  }

  default :
  {
    include("views/home.php");
    break;
  }
}