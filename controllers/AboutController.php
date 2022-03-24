<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'about';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'about':
    {
      include("views/about.php");
      break;
    }

  default :
  {
    include("views/about.php");
    break;
  }
}