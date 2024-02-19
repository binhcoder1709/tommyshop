<?php
session_start();
ob_start();

include_once "../model/connectdb.php";
include_once "../model/user.php";
include_once "../model/data-transfer.php";
connectdb();
$product = product();
$gucci = gucciproduct();
$dg = dgproduct();
$getuser = getalluser();
include "/view/header-admin.php";
if (isset($_GET['act-admin'])) {
    switch ($_GET['act-admin']) {
        case 'login':
            if (isset($_POST['dangnhapadmin']) && ($_POST['dangnhapadmin'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $kq = getuseradmin($user, $pass);
                $_SESSION['useradmin'] = $kq[0]['useradmin'];
                $_SESSION['passadmin'] = $kq[0]['passadmin'];
                $_SESSION['nameadmin'] = $kq[0]['name'];
                $_SESSION['imageadmin'] = $kq[0]['image'];
                if (($_SESSION['useradmin']) && ($_SESSION['passadmin'])) {
                    header('location: index-admin.php');
                } else {
                    header('location: /view/adlogin.php');
                }
            }
            break;
        case 'logout':
            if (isset($_SESSION['useradmin']) && ($_SESSION['useradmin'] != "")) {
                unset($_SESSION['useradmin']);
            }
            if (isset($_SESSION['passadmin']) && ($_SESSION['passadmin'] != "")) {
                unset($_SESSION['passadmin']);
            }
            header('location: ../controller/index.php');
        default:
            include "../view/adlogin.php";
            break;
    }
} else {
    include "admin/admin.php";
}
?>