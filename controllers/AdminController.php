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
    $session_user_id = $_SESSION['theUserId'];
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  case 'deleteUser': {
    deleteUser($_REQUEST['user_id']);
    $session_user_id = $_SESSION['theUserId'];
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  case 'deletePost': {
    deletePost($_REQUEST['post_id']);
    $session_user_id = $_SESSION['theUserId'];
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  case 'deleteCommentary': {
    deleteCommentary($_REQUEST['commentary_id']);
    $session_user_id = $_SESSION['theUserId'];
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }

  default :
  {
    $session_user_id = $_SESSION['theUserId'];
    $allUsers = getAllUsers();
    $allPosts = getAllPost();
    $allCommentaries = getAllCommentaries();
    include("views/admin.php");
    break;
  }
}