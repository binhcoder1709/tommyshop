<?php
function connectdb()
{
  $servername = "localhost";
  $username = "root";
  $password = "";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=if0_35234194_tommyshop", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
  }
  return $conn;


}
?>