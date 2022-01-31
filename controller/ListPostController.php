<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'listPost';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'listPost':
  {
    include("view/listPost.php");
    break;
  }

  default :
  {
    include("view/listPost.php");
    break;
  }
}