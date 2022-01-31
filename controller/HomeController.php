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
    include("view/home.php");
    break;
  }

  default :
  {
    include("view/home.php");
    break;
  }
}