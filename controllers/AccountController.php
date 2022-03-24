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

  default :
  {
    include("views/account.php");
    break;
  }
}