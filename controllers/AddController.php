<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'add';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'add':
    {
      include("views/add.php");
      break;
    }

  default :
  {
    include("views/add.php");
    break;
  }
}