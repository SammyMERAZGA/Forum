<?php
require_once ("./models/Subcategory.php");
require_once ("./models/Category.php");

if(!isset($_REQUEST['action']))
{
	$_REQUEST['action'] = 'home';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'home':
  {
    $allCategory = getAllCategory();
    $allSubcategory = getAllSubcategory();
    include("views/home.php");
    break;
  }

  default :
  {
    $allCategory = getAllCategory();
    $allSubcategory = getAllSubcategory();
    include("views/home.php");
    break;
  }
}