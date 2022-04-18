<?php
require_once ("./models/Subcategory.php");

if(!isset($_REQUEST['action'])){
  $_REQUEST['action'] = 'listPost';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'listPost':
  {
    $subcategory = getSubcategory($_REQUEST['subcategoryId']);
    include("views/listPost.php");
    break;
  }

  default :
  {
    $subcategory = getSubcategory($_REQUEST['subcategoryId']);
    include("views/listPost.php");
    break;
  }
}