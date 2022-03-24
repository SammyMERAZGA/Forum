<?php
if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'forum';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'forum':
  {
    include("views/forum.php");
    break;
  }

  default :
  {
    include("views/forum.php");
    break;
  }
}