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
    $user = deleteUser($_REQUEST['id']);
    include("views/deleteUser.php");
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