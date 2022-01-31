<?php
if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'subscribe';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'subscribe':
  {
    include("view/authentication/subscribe.php");
    break;
  }

  default :
  {
    include("view/authentication/subscribe.php");
    break;
  }
}