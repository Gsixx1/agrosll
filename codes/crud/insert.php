<?php
include '../connect.php';
if(isset($_POST['insert_btn'])){
    $customer_name = $_POST['customer_name'];
    $business_name = $_POST['business_name'];
    $customer_image = $_FILES['customer_image']['name'];
    $tmp_name = $_FILES['customer_image']['tmp_name'];
    $destination = "pics/".$customer_image;
    move_uploaded_file($tmp_name, $destination);

    $insert = "INSERT INTO customers (customer_name, business_name, customer_image) VALUES ('$customer_name', '$business_name', '$customer_image')";
    $insert_q = mysqli_query($con, $insert);
    if($insert_q){ 
        ?>
        <script type="text/javascript">alert("Data Saved Successfully");</script>
        <?php
    }else{
        ?>
        <script type="text/javascript">alert("Please try again");</script>
        <?php

    }
}
?>