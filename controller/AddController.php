<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'add';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'add':
    {
      include("view/add.php");
      break;
    }

  default :
  {
    include("view/add.php");
    break;
  }
}