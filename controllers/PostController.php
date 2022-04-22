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
    $post = getPost($_REQUEST['post_id']);
    $allCommentary = getAllCommentaryOfPost($_REQUEST['post_id']);
    include("views/post.php");
    break;
  }

  case 'addCommentary':
  {
    $post = getPost($_REQUEST['post_id']);
    addCommentary($_REQUEST['commentary'], $_SESSION['theUserId'], $_REQUEST['post_id']);
    $allCommentary = getAllCommentaryOfPost($_REQUEST['post_id']);
    include("views/post.php");
    break;
  }

  default :
  {
    include("views/post.php");
    break;
  }
}