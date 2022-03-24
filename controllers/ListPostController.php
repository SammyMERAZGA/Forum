<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'listPost';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'listPost':
  {
    include("views/listPost.php");
    break;
  }

  default :
  {
    include("views/listPost.php");
    break;
  }
}