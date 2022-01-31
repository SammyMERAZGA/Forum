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
    include("view/forum.php");
    break;
  }

  default :
  {
    include("view/forum.php");
    break;
  }
}