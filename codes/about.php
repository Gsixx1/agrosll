<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="phone.css">
  <link rel="stylesheet" href="tablet.css">
  <link rel="stylesheet" href="iphoneSE.css">
  <link rel="stylesheet" href="responsive.css">
  <title>about</title>
</head>

<body>
<nav class="nav">
    <div class="fluid">
      <div class="first-nav-bar">
        <a href="index.php">
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
            <li><a href="./topheadercomponents/blog.php">Blog</a></li>
            <li><a href="./crud/productscrud.php">Products</a></li>
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
          <li><a href="index.php#third-cards">Services</a></li>
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
  <div class="top-banner">
    <div id="about-inner-banner" class="top  bg-gradient d-flex justify-content-center " style="height:80vh; width:100%; flex-direction:column">
      <div class="row pb-5">
        <div class="col-md-12">
          <h1 class="text-center" style="font-size:4vmax">About</h1>
        </div>
      </div>
      <div class="row  justify-content-center" style="height:38vh">
        <img src="/codes/crud/pics/pitch-deck-pp.png" alt="" class="rounded-circle" style="width:42vh; height:38vh">
        <p style="text-align:center; color:#000000" >[CEO & Founder: Hassan Konneh]</p>
        <!-- <div class="card" style="width:18rem; height: 40vh"> -->
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <div class="row  d-flex justify-content-between">
      <div class="text-center mt-5 w-100">
        <h2>Who are we</h2>
        <h5>
          Agrivision is an online platform that is on a mission to make farming products and agro-based information
          available to consumers in an efficient way.
          <!-- Hassan S. Konneh is a dev......., a geo....... inf........ anal........ and an eco.......  -->
        </h5>
      </div>
      <div class="text-center mt-5 w-100">
        <h2>Our Dream</h2>
        <h5>Agrivision is to become the right platform that can be used to actualize agro e-commerce in Sierra Leone.
          This platform will be used to connect farmers and consumers.
          Agro e-commerce can be made flexible and efficient. We are working towards fulfilling this dream. </h5>
      </div>
    </div>
  </div>
  <section class="about-cards-section">
        <div class="container" >
            <div class="row"  >
                <div class="col-sm-4 card-wrapper">
                  <div class="card card-style" id="cardrow3">
                    <div class="h-75">
                      <img class="card-img-top rounded-circle circle-image img-fluid" src="/resources/pngss/FacilityManagement.jpg" style="height:100%; width:15vw" alt="Card image cap">
                    </div>
                      <!-- <img src="img/about/card-one.png" class="img-circle" alt="Cinque Terre" width="250" height="236">  -->

                    <div class="card-body">
                      <h3 class="card-title">Our Facilities</h3>
                      <p class="card-text">A short caption detailing an aspect of the brand which is worth mentioning.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 card-wrapper">
                  <div class="card card-style" id="cardrow3">
                    <div class="h-75" >
                    <img class="card-img-top rounded-circle circle-image img-fluid" src="/resources/pngss/research.png"style="height:100%; width:15vw" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">Our Research</h3>
                      <p class="card-text">A short caption detailing an aspect of the brand which is worth mentioning.</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4 card-wrapper">
                  <div class="card card-style" id="cardrow3">
                    <div class="h-75">
                      <img class="card-img-top rounded-circle circle-image" src="/resources/pngss/experties.png"style="height:100%; width:15vw" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h3 class="card-title">Our Expertise</h3>
                      <p class="card-text">A short caption detailing an aspect of the brand which is worth mentioning.</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
  <section id="footer">
    <div class="footer-first-row">
      <div class="footer-fstrow-column1">
        <div class="fterpc1">
          <p><span>AGROSL</span></p>
          <hr style="width:30px; margin-left:20px; margin-top:0px; height:5px; border-radius: 5px; background-color:rgb(247, 219, 9);">
          <P class="fterpc1p">Eiusmod dolore sit mollit dolor culpa dolore labore amet occaecat ea.</P>
        </div>
      </div>
      <div class="footer-fstrow-column2">
        <div class="footer-services">
          <div class="fterpc2">
            <p><span>
                <h5>SERVICES</h5>
              </span></p>
            <hr style="width:30px; margin-left:30px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>Agro data collection</li>
              <li>Agro weather forcast</li>
              <li>Agricultural Agents</li>
              <li>Agro Mapping</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-fstrow-column3">
        <div class="footer-products">
          <div class="fterpc3">
            <p><span>
                <h5>PRODUCTS</h5>
              </span></p>
            <hr style="width:30px; margin-left:30px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
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
        <div class="fterpc4">
          <div class="footer-company">
            <p><span>
                <h5>COMPANY</h5>
              </span></p>
            <hr style="width:30px; margin-left:30px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>About Us</li>
              <li>Contact</li>
              <li>Join Us</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-fstrow-column5">
        <div class="fterpc5">
          <div class="footer-address">
            <p><span>
                <h5>ADDRESS</h5>
              </span></p>
            <hr style="width:30px; margin-left:30px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
            <ul>
              <li>32 Wilkingson Road</li>
              <li>Clevely land</li>
              <li>Freetown, Sierra Leone</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div style="">
      <hr style="height:3px; color: white; width: 100%;">
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