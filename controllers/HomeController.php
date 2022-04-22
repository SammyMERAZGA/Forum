<?php
require_once ("./models/Subcategory.php");
require_once ("./models/Category.php");
require_once ("./models/User.php");
require_once ("./models/Post.php");

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
    $nbUser = nbUser();
    $nbPosts = nbPosts();
    $nbCommentaries = nbCommentaries();
    include("views/home.php");
    break;
  }

  default :
  {
    $allCategory = getAllCategory();
    $allSubcategory = getAllSubcategory();
    $nbUser = nbUser();
    $nbPosts = nbPosts();
    $nbCommentaries = nbCommentaries();
    include("views/home.php");
    break;
  }
}