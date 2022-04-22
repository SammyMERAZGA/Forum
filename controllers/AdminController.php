<?php
require_once("./models/User.php");
require_once("./models/Post.php");

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'account';
}
$action = $_REQUEST['action'];

switch($action)
{
  case 'admin': {
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  case 'deleteUser': {
    deleteUser($_REQUEST['user_id']);
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  case 'deletePost': {
    deletePost($_REQUEST['post_id']);
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  case 'deleteCommentary': {
    deleteCommentary($_REQUEST['commentary_id']);
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  default :
  {
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }
}