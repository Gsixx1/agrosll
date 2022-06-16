
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css" />
    <title>E-Agro Commerce Details</title>
</head>

<body>
<nav class="nav">
    <div class="fluid">
      <div class="first-nav-bar">
        <a href="#">
          <img src="../resources/logo.png" alt="logo" class="logo" />
        </a>
        <div class="f-mid-nav">
          <div>
            <p><img src="../resources/pngss/email-open-50.png" alt="" style="width:30px;height:30px"> <a
                href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new"
                style="list-style:none; text-decoration:none;">info@agrosl.sl</a></p>
          </div>
          <div>
            <p><img src="../resources/pngss/ringer-volume-50.png" alt="" style="width:30px;height:30px"> <a
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
            <li><a href="topheadercomponents/businesses.php">Businesses</a></li>
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
          <li><a href="signup.php">Sign up</a></li>
          <li><a href="login.php">Log in</a></li>
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
    <?php include '../connect.php' ?>;
    <?php
    $id = $_GET['details_id'];
    $sql = "SELECT * FROM `products` WHERE `category_id`='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $category_id = $row['category_id'];
    $category_name = $row['category_name'];
    $category_desc = $row['category_desc'];
    $category_image = $row['category_image'];
    $category_price = $row['category_price'];

    ?>
    <div class="jumbotron">
        <div class="container">
        <h1 class="display-4 text-center text-primary"><?php echo $category_name ?></h1>
        <p class="lead"><?php echo $category_desc ?></p>
        <button class="btn btn-dark"> <a href="#" class="btn btn-dark" role="button">Continue</a> </button>        
        </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img src=<?php echo $category_image ?> alt="" class="img-fluid">                
            </div>
            <div class="col-lg-6 col-sm-12">
                    <h2 class="text-center text-danger"><?php echo $category_name ?></h2>
                    <p><?php echo $category_desc ?></p>
                    <p><strong>Price: le<?php echo $category_price ?></strong></p>
                    <button class="btn btn-success">Add to Cart</button>
                </div>            
        </div>
    </div>
</body>

</html>