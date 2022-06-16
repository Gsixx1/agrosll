<?php
session_start();
include '/xampp/htdocs/xamppProjects/agrosll/codes/connect.php';
$id = $_GET['id'];

$select = "SELECT * FROM customers WHERE customerID = '$id'";
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
    <div class="text-center">
    <img src="/codes/images/ <?php echo $fetch['customer_image'] ?>" alt="photo" width="70px">
    </div> <br><br>
    <input type="submit" name="update_btn" value="update">
</form>
</div>
<?php
if (isset($_POST['update_btn'])) {
    $customer_name = $_POST['customer_name'];
    $business_name = $_POST['business_name'];
    $customer_image = $_FILES['customer_image']['name'];
    $customer_image_tmp_name = $_FILES['customer_image']['tmp_name'];
    $destination = "/codes/images/".$customer_image;
    if ($customer_image != "") {
        move_uploaded_file($customer_image_tmp_name, $destination);
        $update = "UPDATE customers SET customer_name = '$customer_name', business_name = '$business_name', customer_image = '$customer_image' WHERE customerID = '$id'";
        $update_q = mysqli_query($con, $update);
        header('location: customers.php');
    } else {
        move_uploaded_file($customer_image_tmp_name, $destination);
        $update = "UPDATE customers SET customer_name = $customer_name, business_name = $business_name,  WHERE customerID = $id";
        $update_q = mysqli_query($con, $update);
        header('location: customers.php');
    }
}
?>
</body>
</html>