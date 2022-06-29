<?php
include '../connect.php';
$id = $_GET['id'];
$delete = "DELETE FROM customers WHERE id = '$id'";
$delete_q = mysqli_query($con, $delete);
header('location: customers.php');
?>