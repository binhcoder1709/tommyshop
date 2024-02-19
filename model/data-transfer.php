<?php
include_once "connectdb.php";
function product()
{
    $conn = connectdb();
    $sql = "SELECT * FROM product order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $product = $stmt->fetchAll();
    return $product;
}
function gucciproduct()
{
    $conn = connectdb();
    $sql = "SELECT * FROM gucci order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $gcproduct = $stmt->fetchAll();
    return $gcproduct;
}
function dgproduct()
{
    $conn = connectdb();
    $sql = "SELECT * FROM dolcegabana order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $dgproduct = $stmt->fetchAll();
    return $dgproduct;
}
function getalluser()
{
    $conn = connectdb();
    $sql = "SELECT * FROM user order by id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $getalluser = $stmt->fetchAll();
    return $getalluser;
}
?>