<?php
session_start();
include 'dbconnect.php'; 
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $query = "DELETE FROM customers WHERE id = '$id'";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $_SESSION['message'] = "Customer Deleted Successfully";
    $_SESSION['type'] = "danger";
    header('location:index.php');
}
?>