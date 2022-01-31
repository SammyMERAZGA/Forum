<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'account';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'account':
  {
    include("view/account.php");
    break;
  }

  default :
  {
    include("view/account.php");
    break;
  }
}