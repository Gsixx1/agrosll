<?php
session_start();
include '/xampp/htdocs/xamppProjects/agrosll/codes/connect.php';
$id = $_GET['id'];

$select = "SELECT * FROM customers WHERE `id` = '$id'";
$select_q = mysqli_query($con, $select);
$fetch = mysqli_fetch_array($select_q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container w-50">
    <div class="my-2 text-center">
        <h1 class="text-secondary">EDIT</h1>
    </div>
<form class="" action="" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control mb-3" name="customer_name" placeholder="customer name" value="<?php echo $fetch['customer_name'] ?>">
    <input type="text" class="form-control mb-3" name="business_name" placeholder="Business name" value="<?php echo $fetch['business_name'] ?>">
    <input type="file" class="form-control mb-2" name="customer_image"> 
    <div class="text-center border border-secondary  ">
    <img src="../pics/ <?php echo $fetch['customer_image'] ?>" alt="photo">
    </div> <br><br>
    <div class="d-flex justify-content-evenly">
        <input type="submit" name="update_btn" value="update">
        <button type="button" class="btn btn-primary"><a href="customers.php" class="text-light text-decoration-none " >Return</a></button>
    </div>
</form>
</div>
<?php
if (isset($_POST['update_btn'])) {
    $customer_name = $_POST['customer_name'];
    $business_name = $_POST['business_name'];
    $customer_image = $_FILES['customer_image']['name'];
    $customer_image_tmp_name = $_FILES['customer_image']['tmp_name'];
    $destination = "../pics/".$customer_image;
    if ($customer_image != "") {
        move_uploaded_file($customer_image_tmp_name, $destination);
        $update = "UPDATE customers SET customer_name = '$customer_name', business_name = '$business_name', customer_image = '$customer_image' WHERE id = '$id'";
        $update_q = mysqli_query($con, $update);
        header('location: customers.php');
    } 
    else {
        move_uploaded_file($customer_image_tmp_name, $destination);
        $update = "UPDATE customers SET customer_name = '$customer_name', business_name = '$business_name',  WHERE id = '$id' ";
        $update_q = mysqli_query($con, $update);
        header('location: customers.php');
    }
}
?>
</body>
</html>