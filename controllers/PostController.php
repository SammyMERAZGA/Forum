<?php
require_once ("./models/Subcategory.php");
require_once("./models/Post.php");

if(!isset($_REQUEST['action'])){
  $_REQUEST['action'] = 'listPost';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'post':
  {
    include("views/post.php");
    break;
  }

  default :
  {
    include("views/post.php");
    break;
  }
}