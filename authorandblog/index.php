<?php
session_start();
require_once ("class/DBController.php");
//require_once ("class/author.php");
//require_once ("class/Attendance.php");

$db_handle = new DBController();

$action = "";
if (! empty($_GET["action"])) {
    $action = $_GET["action"];
}
switch ($action) {
    case "register":
            require_once "web/register.php";
            break;
    case "login":
          //  echo "hello";
            require_once "web/login.php";
            break;
    case "registerintodatabase":        
            $sql="insert into author values('$_POST[email]','$_POST[password]')";
            $result=$db_handle->insert($sql);
            if($result==true)
            require_once "web/registerintodatabase.php";
            else
            require_once "web/error.php";
            break;
    case "checkauthor":
            $user=$_POST['email'];
            $pass=$_POST['password'];
            $sql="select * from author where email='$user' and password='$pass'";
            $result=$db_handle->check($sql);
            if($result==true)
            {
            $_SESSION['user']=$user;
          //  echo $_SESSION['user'];
            require_once "web/createbloglink.php";
            }
            else
            require_once "web/error.php";
            break;
    case "bloglinkpage":
            require_once "web/bloglinkpage.php";
            break;
    case "blogcreated":
           // require_once "web/blogcreated.php";
           echo $_SESSION['user'];
          $user= $_SESSION['user'];
           $sql="insert into blog values('$_POST[title]','$_POST[description]','$_POST[published_date]','$_POST[author]','$user')";
           $result=$db_handle->insert($sql);
            if($result==true)
            {
                
               require_once "web/blogsaved.php";
            }
            else
            require_once "web/error.php";
            break;
      case "delete":
            $sql="delete from blog where title='$_GET[title]'";
            $result=$db_handle->insert($sql);
            if($result==true)
            require_once "web/blogsaved.php";
            else
            require_once "web/error.php";
            break;
      case "viewblogs":
            require_once "web/viewblogs.php";
            break;
      case "adminlogin":
            require_once "web/adminlogin.php";
            break;
      case "checkadmin":
          //  if($_POST['username']=="rishabh" && $_POST['password']=='rishabh')
    default:
            require_once "web/start.php";
            break;
                }
?>