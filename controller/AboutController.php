<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'about';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'about':
    {
      include("view/about.php");
      break;
    }

  default :
  {
    include("view/about.php");
    break;
  }
}