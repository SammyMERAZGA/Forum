<?php
require_once ("./models/Subcategory.php");
require_once("./models/Post.php");

if(!isset($_REQUEST['action'])){
  $_REQUEST['action'] = 'listPost';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'listPost':
  {
    $subcategory = getSubcategory($_REQUEST['subcategoryId']);
    $allPosts = getAllPostOfSubcategory($subcategory['subcategory_id']);
    include("views/listPost.php");
    break;
  }

  case 'addPost':
  {
    $subcategory = getSubcategory($_REQUEST['subcategoryId']);
    $allPosts = getAllPostOfSubcategory($subcategory['subcategory_id']);
    $addPost = addPost($_REQUEST['titlePost'], $_REQUEST['subjectPost'], $_SESSION['theUserId'], $_REQUEST['subcategoryId']);
    include("views/addPost.php");
    break;
  }

  default :
  {
    $subcategory = getSubcategory($_REQUEST['subcategoryId']);
    $allPosts = getAllPost();
    include("views/listPost.php");
    break;
  }
}