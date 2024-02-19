<?php
session_start();
ob_start();

include_once "./model/connectdb.php";
include_once "./model/user.php";
include_once "./model/data-transfer.php";
connectdb();
$product = product();
$gucci = gucciproduct();
$dg = dgproduct();
include "./view/header.php";
if (isset($_GET['act'])) {
  switch ($_GET['act']) {
    case 'login':
      if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $kq = getuserinfo($user, $pass);
        $_SESSION['user'] = $kq[0]['user'];
        $_SESSION['pass'] = $kq[0]['pass'];
        $_SESSION['name'] = $kq[0]['name'];
        $_SESSION['email'] = $kq[0]['email'];
        $_SESSION['phone'] = $kq[0]['phonenumber'];
        if (($_SESSION['user']) && ($_SESSION['pass'])) {
          header('location: index.php');
        } else {
          header('location: ./view/login.php');
        }
      }
      break;
    case 'loginview':
      header('location: ./view/login.php');
      break;
    case 'home':
      include_once "./view/home.php";
      break;
    // case 'adlogin':
    //   if (isset($_POST['dangnhapadmin'])&&($_POST['dangnhapadmin']))
    //   {
    //     $user=$_POST['user'];
    //     $pass=$_POST['pass'];
    //     $kq=getuseradmin($user,$pass);
    //     $_SESSION['useradmin']=$kq[0]['useradmin'];
    //     $_SESSION['passadmin']=$kq[0]['passadmin'];
    //     if(($_SESSION['useradmin'])&&($_SESSION['passadmin']))
    //     {
    //       header('location: ./admin/admin.php');
    //     }
    //     else
    //     {
    //       header('location: ./view/adlogin.php');
    //     }
    //   }
    //   break;
    // case 'loginadmin':
    //   include_once "./admin/admin.php";
    //   break;
    case 'detail':
      if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $id = $_GET['id'];
        $detail = getdetail($id);
        include_once "./view/detail.php";
      }
      break;
    case 'profileview':
      include_once "./view/profile.php";
      break;
    case 'cart':
      include_once "./view/cart.php";
      break;
    case 'logout':
      if (isset($_SESSION['user']) && ($_SESSION['user'] != "")) {
        unset($_SESSION['user']);
      }
      if (isset($_SESSION['pass']) && ($_SESSION['pass'] != "")) {
        unset($_SESSION['pass']);
      }
      if (isset($_SESSION['useradmin']) && ($_SESSION['useradmin'] != "")) {
        unset($_SESSION['useradmin']);
      }
      if (isset($_SESSION['passadmin']) && ($_SESSION['passadmin'] != "")) {
        unset($_SESSION['passadmin']);
      }
      header('location: index.php');
      break;
    default:
      include "./view/home.php";
      break;
  }
} else {
  include "./view/home.php";
}
include "./view/footer.php";



?>