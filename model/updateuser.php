<?php

// Kết nối đến cơ sở dữ liệu
$pdo = new PDO('mysql:host=localhost;dbname=database1', 'root', '');

// Lấy dữ liệu từ form
if (isset($_POST['save']) && ($_POST['save'])) {
    $email = $_POST['email'];

    // Cập nhật dữ liệu
    $sql = "UPDATE user
SET
email = :email
WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
}

// Chuyển hướng người dùng về trang chủ
header('Location: ../view/profile.php');
