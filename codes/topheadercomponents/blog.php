<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.72.0">
  <link rel="stylesheet" href="/codes/style.css" />
  <link
    href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic"
    rel="stylesheet" />
  <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/codes/bootstrap-5/css/animate.min.css">
  <title>Blog</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">
  
  
  
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
          integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
          integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
          crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"></script>
  
      <style>
          .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
          }
  
          @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                  font-size: 3.5rem;
              }
          }
      </style>
  
  
      <!-- Custom styles for this template -->
      <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
      <!-- Custom styles for this template -->
      <style>
          /* stylelint-disable selector-list-comma-newline-after */
  
          .blog-header {
              line-height: 1;
              border-bottom: 1px solid #e5e5e5;
          }
  
          .blog-header-logo {
              font-family: "Playfair Display", Georgia, "Times New Roman", serif;
              font-size: 2.25rem;
          }
  
          .blog-header-logo:hover {
              text-decoration: none;
          }
  
          h1,
          h2,
          h3,
          h4,
          h5,
          h6 {
              font-family: "Playfair Display", Georgia, "Times New Roman", serif;
          }
  
          .display-4 {
              font-size: 2.5rem;
          }
  
          @media (min-width: 768px) {
              .display-4 {
                  font-size: 3rem;
              }
          }
  
          .nav-scroller {
              position: relative;
              z-index: 2;
              height: 2.75rem;
              overflow-y: hidden;
          }
  
          .nav-scroller .nav {
              display: flex;
              flex-wrap: nowrap;
              padding-bottom: 1rem;
              margin-top: -1px;
              overflow-x: auto;
              text-align: center;
              white-space: nowrap;
              -webkit-overflow-scrolling: touch;
          }
  
          .nav-scroller .nav-link {
              padding-top: .75rem;
              padding-bottom: .75rem;
              font-size: .875rem;
          }
  
          .card-img-right {
              height: 100%;
              border-radius: 0 3px 3px 0;
          }
  
          .flex-auto {
              flex: 0 0 auto;
          }
  
          .h-250 {
              height: 250px;
          }
  
          @media (min-width: 768px) {
              .h-md-250 {
                  height: 250px;
              }
          }
  
          /* Pagination */
          .blog-pagination {
              margin-bottom: 4rem;
          }
  
          .blog-pagination>.btn {
              border-radius: 2rem;
          }
  
          /*
          * Blog posts
          */
          .blog-post {
              margin-bottom: 4rem;
          }
  
          .blog-post-title {
              margin-bottom: .25rem;
              font-size: 2.5rem;
          }
  
          .blog-post-meta {
              margin-bottom: 1.25rem;
              color: #727272;
          }
  
          /*
          * Footer
          */
          .blog-footer {
              padding: 2.5rem 0;
              color: #727272;
              text-align: center;
              background-color: #f9f9f9;
              border-top: .05rem solid #e5e5e5;
          }
  
          .blog-footer p:last-child {
              margin-bottom: 0;
          }
      </style>
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
        <div class="tabHover">
          <ul>
            <li><a href="../products.php">Products</a></li>
            <!-- <li><a href="topheadercomponents/businesses.php">Businesses</a></li> -->
          </ul>
        </div>
      </div>
      <div class="second-nav-bar">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="#third-cards">Services</a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../contact.php">Contact us</a></li>
          <!-- <li><a href="../signup.php">Sign up</a></li>
          <li><a href="../login.php">Log in</a></li> -->
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
  <!-- MAIN CONTAINER! -->

  
    <div class="container">                  
  
          <div class="p-4 p-md-5 mb-4 text-white rounded bg-success">
              <div class="col-md-6 px-0">
                  <h1 class="display-4 font-italic">Agriculture, the driving force of the lively hood of Sierra Leoneans</h1>
                  <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                      efficiently about what’s most interesting in this post’s contents.</p>
                  <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
              </div>
          </div>
  
         
      </div>
  
      <main class="container">
          <div class="row">
              <div class="col-md-8">
                  <h3 class="pb-4 mb-4 font-italic border-bottom">
                      From the FarmHouse
                  </h3>
  
                  <div class="blog-post">
                      <h2 class="blog-post-title">Sierra Leone vs its Neigbours in the Agric-sector</h2>
                      <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
  
                      <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                          Basic typography, images, and code are all supported.</p>
                      <hr>
                      <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus
                          mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                          consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                      <blockquote>
                          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                              ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      </blockquote>
                      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                          fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                      <h2>Heading</h2>
                      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                          commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                          porta ac consectetur ac, vestibulum at eros.</p>
                      <h3>Sub-heading</h3>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                      <pre><code>Example code block</code></pre>
                      <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.
                          Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                      <h3>Sub-heading</h3>
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                          lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                          amet risus.</p>
                      <ul>
                          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                          <li>Donec id elit non mi porta gravida at eget metus.</li>
                          <li>Nulla vitae elit libero, a pharetra augue.</li>
                      </ul>
                      <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
                      </p>
                      <ol>
                          <li>Vestibulum id ligula porta felis euismod semper.</li>
                          <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                          <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                      </ol>
                      <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
                  </div><!-- /.blog-post -->
  
                  <div class="blog-post">
                      <h2 class="blog-post-title">Another blog post</h2>
                      <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
  
                      <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus
                          mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere
                          consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                      <blockquote>
                          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                              ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                      </blockquote>
                      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                          fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                          commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus,
                          porta ac consectetur ac, vestibulum at eros.</p>
                  </div><!-- /.blog-post -->
  
                  <div class="blog-post">
                      <h2 class="blog-post-title">New feature</h2>
                      <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>
  
                      <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean
                          lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce
                          dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                          amet risus.</p>
                      <ul>
                          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                          <li>Donec id elit non mi porta gravida at eget metus.</li>
                          <li>Nulla vitae elit libero, a pharetra augue.</li>
                      </ul>
                      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet
                          fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                      <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.
                      </p>
                  </div><!-- /.blog-post -->
  
                  <nav class="blog-pagination">
                      <a class="btn btn-outline-primary" href="#">Older</a>
                      <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
                  </nav>
  
              </div> 
              
  
          </div><!-- /.row -->
  
      </main><!-- /.container -->
      <section id="footer">
      <div class="footer-first-row">
        <div class="footer-fstrow-column1">
          <div class="fterpc1">
            <p><span>AGROSL</span></p>
            <hr
              style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:rgb(255, 225, 0)">
            <P class="fterpc1p">Eiusmod dolore sit mollit dolor culpa dolore labore amet occaecat ea.</P>
          </div>
        </div>
        <div class="footer-fstrow-column2">
          <div class="footer-services">
            <div class="fterpc2">
              <p><span>SERVICES</span></p>
              <hr
                style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
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
              <hr
                style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
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
              <hr
                style="width:30px; margin-left :25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
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
              <hr
                style="width:30px; margin-left:25px; margin-top:0px; height:5px; border-radius: 5px; background-color:#EDDD5E;">
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
            <p><a class="footericon" href="https://www.facebook.com/"><img
                  src="https://img.icons8.com/ios-filled/30/26e07f/facebook-new.png" /></a></p>
            <p><a class="footericon" href="https://twitter.com/i/flow/login"><img
                  src="https://img.icons8.com/ios-filled/30/26e07f/twitter-circled--v1.png" /></a></p>
            <p><a class="footericon" href="https://www.linkedin.com/"><img
                  src="https://img.icons8.com/ios-filled/30/26e07f/linkedin-circled--v1.png" /></a></p>
            <p><a class="footericon" href="https://www.youtube.com/"><img
                  src="https://img.icons8.com/ios-filled/30/26e07f/youtube-play.png" /></a></p>
          </div>
        </div>
      </div>
    </section>  
</body>
</html>