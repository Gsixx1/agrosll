<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../style.css" />
  <link rel="stylesheet" href="../iphoneSE.css" />
  <link rel="stylesheet" href="../phone.css" />
  <link rel="stylesheet" href="../responsive.css" />
  <title>Products</title>
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
            <p><img src="/resources/pngss/email-open-50.png" alt="" style="width:30px;height:30px"> <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" style="list-style:none; text-decoration:none;">info@agrosl.sl</a></p>
          </div>
          <div>
            <p><img src="/resources/pngss/ringer-volume-50.png" alt="" style="width:30px;height:30px"> <a href="tel:+23276458340" style="list-style:none; text-decoration:none;">+232-76-458-340</a></p>
          </div>
        </div>
        <!-- sizes="(max-width: 780px) 117px, 201px"
          srcset="/resources/logo.png 127w, /resources/logo.png 200w" -->
        <!-- <button class="nvbar-tgler" type="button">
          <span class="icon"></span>
        </button> -->
        <div class="tabHover">
          <ul>
            <li><a href="/codes/topheadercomponents/blog.php">Blog</a></li>
            <!-- <li><a href="../products.php">Products</a></li> -->
            <!-- <li><a href="topheadercomponents/businesses.php">Businesses</a></li> -->
          </ul>
        </div>
      </div>
      <div class="second-nav-bar">

        <ul>
          <li><a href="../index.php">Home</a></li>
          <!-- <li><a href="#third-cards">Services</a></li> -->
          <li><a href="../about.php">About</a></li>
          <li><a href="../contact.php">Contact us</a></li>
          <li><a href="../signup.php">Sign up</a></li>
          <li><a href="../login.php">Log in</a></li>
        </ul>
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
  <?php include '../connect.php' ?>
  <h1 class="text-center text-primary my-3">Welcome to our store</h1>
  <h1 class="text-center text-success mb-4">Category</h1>

  <div class="allcrud" >
  <div class="prdcrud_body" id="crudrow0">
    <div class="container mb-5" id="crudrow1" style="overflow:none">
      <div class="row" id="crudrow2" >
        <!-- PHP CODE -->
        <?php
        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          // $row=mysqli_fetch_assoc($result);
          // echo $row['category_name'];
          while ($row = mysqli_fetch_assoc($result)) {
            $category_id = $row['category_id'];
            $category_name = $row['category_name'];
            $category_desc = $row['category_desc'];
            $category_image = $row['category_image'];
            $category_price = $row['category_price'];
            echo '<div class="col-md-4 col-sm-6 col-xs-12 mb-5">
                                <div class="card" style="width: 20.5rem;">
                                    <img src=' . $category_image . ' class="card-img-top img-responsive" alt="card image" style="object-fit:contain; height:217px; width:100%">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $category_name . '.....</h5>
                                        <p class="card-text">' . substr($category_desc, 0, 55) . '.....</p>
                                        <p>le ' . $category_price . '.00</p>
                                        <a href="details.php?details_id=' . $category_id . '" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                          </div>';
          }
        }
        ?>

      </div>
    </div>
  </div>
  </div>
  <section id="footer">
    <div class="footer-first-row">
      <div class="footer-fstrow-column1">
        <div class="fterpc1">
          <p><span>AGROSL</span></p>
          <hr style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:rgb(255, 225, 0)">
          <P class="fterpc1p">Eiusmod dolore sit mollit dolor culpa dolore labore amet occaecat ea.</P>
        </div>
      </div>
      <div class="footer-fstrow-column2">
        <div class="footer-services">
          <div class="fterpc2">
            <p><span>SERVICES</span></p>
            <hr style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>Agro data collection</li>
              <li>Agro weather forecast</li>
              <li>Agricultural Agents</li>
              <li>Agro Mapping</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-fstrow-column3">
        <div class="footer-products">
          <div class="fterpc3">
            <p><span>PRODUCTS</span></p>
            <hr style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>Cereals</li>
              <li>Vegetables</li>
              <li>Legumes</li>
              <li>Fruits & Nuts</li>
              <li>Livestock</li>
              <li>Aquaculture</li>
              <li>Plant Health</li>
              <li>Equipment</li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-fstrow-column4">
        <div class="footer-company">
          <div class="fterpc4">
            <p><span>COMPANY</span></p>
            <hr style="width:30px; margin-left :25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>About Us</li>
              <li>Contact</li>
              <li>Join Us</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-fstrow-column5">
        <div class="footer-address">
          <div class="fterpc5">
            <p><span>ADDRESS</span></p>
            <hr style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>32 Wilkingson Road</li>
              <li>Clevely land</li>
              <li>Freetown, Sierra Leone</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div style="whiteLine">
      <hr style="height:3px; color: white; width: 100%">
    </div>
    <div class="footer-second-row">
      <div class="fsecrow1">
        <div class="footer-secrow-column1">
          <p>&#64;<span>2022 hsk design</span></p>
        </div>
      </div>
      <div class="ftcover">
        <div class="fterms">
          <p>Terms of use</p>
          <p>Privacy Policy</p>
          <p>Cookie Policy</p>
        </div>
      </div>
      <div class="fsecrow2">
        <div class="footer-secrow-column2">
          <p><a class="footericon" href="https://www.facebook.com/"><img src="https://img.icons8.com/ios-filled/30/26e07f/facebook-new.png" /></a></p>
          <p><a class="footericon" href="https://twitter.com/i/flow/login"><img src="https://img.icons8.com/ios-filled/30/26e07f/twitter-circled--v1.png" /></a></p>
          <p><a class="footericon" href="https://www.linkedin.com/"><img src="https://img.icons8.com/ios-filled/30/26e07f/linkedin-circled--v1.png" /></a></p>
          <p><a class="footericon" href="https://www.youtube.com/"><img src="https://img.icons8.com/ios-filled/30/26e07f/youtube-play.png" /></a></p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>