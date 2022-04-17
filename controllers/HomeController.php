<?php
require_once ("./models/Subcategory.php");

if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'home';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'home':
  {
    $allCategory = getAllSubcategory();
    include("views/home.php");
    break;
  }

  default :
  {
    $allCategory = getAllSubcategory();
    include("views/home.php");
    break;
  }
}