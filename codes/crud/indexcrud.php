<?php
session_start();

include ("../connect.php");
include ("../functions.php");

$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" />
    <title>Crud Index</title>
</head>

<body>
<nav class="nav">
    <div class="fluid">
      <div class="first-nav-bar">
        <a href="#">
          <img src="/resources/logo.png" alt="logo" class="logo" />
        </a>
        <div class="f-mid-nav">
          <div>
            <p><img src="/resources/pngss/email-open-50.png" alt="" style="width:30px;height:30px"> <a
                href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new"
                style="list-style:none; text-decoration:none;">info@agrosl.sl</a></p>
          </div>
          <div>
            <p><img src="/resources/pngss/ringer-volume-50.png" alt="" style="width:30px;height:30px"> <a
                href="tel:+23276458340" style="list-style:none; text-decoration:none;">+232-76-458-340</a></p>
          </div>
        </div>
        <!-- sizes="(max-width: 780px) 117px, 201px"
          srcset="/resources/logo.png 127w, /resources/logo.png 200w" -->
        <!-- <button class="nvbar-tgler" type="button">
          <span class="icon"></span>
        </button> -->
        <div class="tabHover">
          <ul>
            <li><a href="codes/topheadercomponents/blog.php">Blog</a></li>
            <li><a href="../products.php">Products</a></li>
            <!-- <li><a href="topheadercomponents/businesses.php">Businesses</a></li> -->
          </ul>
        </div>
      </div>
      <div class="second-nav-bar">
        <!-- <a href="" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a> -->
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact us</a></li>
          <!-- <li><a href="signup.php">Sign up</a></li>
          <li><a href="login.php">Log in</a></li> -->
        </ul>

        <!-- <div class="wrapper">
          <div class="Line-menu half start"></div>
          <div class="Line-menu"></div>
          <div class="Line-menu half end"></div>
        </div> -->
        <div class="lang-menu">
          <select name="dropdown" id="">
            <option value="English" selected>English</option>
            <option value="French">French</option>
            <option value="Spanish">Espanol</option>
          </select>
        </div>
      </div>
    </div>
  </nav>
    <div class="container my-5">
        <div class="mt-4 text-center">
            <h1 class="text-success" style="font-size:6vmax" >Welcome Admin</h1><img src="/codes/crud/pics/smile.png" alt=""style="width:70px">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary"><a class="text-decoration-none text-light" href="../logout.php">Logout</a></button>            
            </div>
        <div class="my-5 bg-info text-center py-2">
            <h1 class="text-dark">Do your Insertion Here.</h1>            
        </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <input type="text" class="form-control" name="customer_name" placeholder="Customer Name" Autocomplete="off">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="business_name" placeholder="Business Name" Autocomplete="off">
        </div>
        <!-- <div class="mb-3">
            <input type="file" class="form-control" name="customer_image">
        </div> -->
        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-success"name="insert_btn" value="Insert">
        </div>
        <div class="mt-3">
        <a href="customers.php" class="text-decoration-none">View your customer details.</a>
        </div>
    </form>
    </div>
    <?php include 'insert.php'; ?>
</body>

</html>