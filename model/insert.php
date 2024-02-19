<?php
$servername = "sql203.infinityfree.com";
$username = "if0_35234194";
$password = "w9Q9ewX4J5zrFOq";
$dbname = "if0_35234194_tommyshop";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    if (($user != "") && ($pass != "") && ($email != "")) {
      $sql = "INSERT INTO user (user, pass, email)
    VALUES ('$user', '$pass', '$email')";
      // use exec() because no results are returned
      $conn->exec($sql);
      header("../index.php?act=register");
    }
  }
  if (isset($_POST['themnguoidung']) && ($_POST['themnguoidung'] != "")) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    if (($user != "") && ($pass != "") && ($email != "") && ($name != "") && ($phone != "")) {
      $sql = "INSERT INTO user (user, pass, email, nameuser, phone)
    VALUES ('$user', '$pass', '$email', '$name', '$phone')";
      // use exec() because no results are returned
      $conn->exec($sql);
    }
    header("../controller/index-admin.php");
  }


} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>