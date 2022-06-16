 <?php
      SESSION_START();
      include("./connect.php");
      include("./functions.php");

      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
          $user_id = random_num(20);
          $query = "insert into users (user_id, user_name, password) values ('$user_id','$user_name','$password')";
          mysqli_query($con, $query);
          header("Location: login.php");
          die;
        } else {
          echo ' Please enter some valid information';
        }
      }
      ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/codes/bootstrap-5/css/animate.min.css">
  <title>Signup</title>
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
            <p><img src="../resources/pngss/email-open-50.png" alt="" style="width:30px;height:30px"> <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" style="list-style:none; text-decoration:none;">info@agrosl.sl</a></p>
          </div>
          <div>
            <p><img src="../resources/pngss/ringer-volume-50.png" alt="" style="width:30px;height:30px"> <a href="tel:+23276458340" style="list-style:none; text-decoration:none;">+232-76-458-340</a></p>
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
  <div class="sgnform">
    <div class="signup-form">
      <div class="signup-border">
        <form action="signup.php" method="POST" class="form">
          <div class="signup-in">
            <div class="signup-header">
              <p>Sign up</p>
            </div>
            <!-- <?php
                  if (isset($error)) {
                    foreach ($error as $error) {
                      echo '<span class="error-msg">' . $error . '</span>';
                    }
                  }
                  ?> -->
            <div class="signup-first-row">
              <input type="text" id="sgusername" class="sgusername" name="user_name" placeholder="Username" required>
              <!-- <input type="text" id="lname" name="lname" placeholder="Last Name" required> -->
            </div>
            <!-- <div class="signup-second-row">
            <input type="text" id="signup-Email" name="email" placeholder="Email" required>
          </div> -->
            <div class="signup-third-row">
              <input type="text" id="signup-Password" class="sgpassword" name="password" placeholder="Password" required>
            </div>
            <!-- <div class="signup-fourth-row">
            <input type="text" id="signup-confirm-password" name="cpassword" placeholder="Confirm Password" required>
          </div> -->
            <!-- <select name="user-type" id="" required>
            <option value="user">user</option>
            <option value="admin">admin</option>
          </select> -->
            <div class="terms">
              <div class="accept-terms">
                <input type="checkbox" name="" id="signup-chkbox">
                <h6>I accept Terms of Use</h4>
              </div>
              <div class="signupbtn">
                <input type="submit" name="submit" id="signupbtn" value="Submit" class="btn btn-primary">
              </div>
            </div>
            <div>
              <div>
                <p>already have an account? <a href="login.php">Login Now</a></p>
              </div>
              <div style="display:flex; justify-content: flex-end">
                <a href="/codes/admin/adminsignup.php" style="text-decoration:none" >Admin</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <section id="footer">
    <div class="footer-first-row">
      <div class="footer-fstrow-column1">
        <div class="fterpc1">
          <p><span>AGROSL</span></p>
          <hr style="width:30px; margin-left:20px; margin-top:0px; height:5px; border-radius: 5px; background-color:rgb(247, 219, 9);">
          <P>Eiusmod dolore sit mollit dolor culpa dolore labore amet occaecat ea.</P>
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
    <div>
      <hr style="height:3px; color: white">
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
          <p><a class="footericon" href="https://www.facebook.com/"><img src="https://img.icons8.com/ios-filled/50/26e07f/facebook-new.png" /></a></p>
          <p><a class="footericon" href="https://twitter.com/i/flow/login"><img src="https://img.icons8.com/ios-filled/50/26e07f/twitter-circled--v1.png" /></a></p>
          <p><a class="footericon" href="https://www.linkedin.com/"><img src="https://img.icons8.com/ios-filled/50/26e07f/linkedin-circled--v1.png" /></a></p>
          <p><a class="footericon" href="https://www.youtube.com/"><img src="https://img.icons8.com/ios-filled/50/26e07f/youtube-play.png" /></a></p>
        </div>
      </div>
    </div>
  </section>
</body>

</html>