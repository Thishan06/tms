<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!doctype html>
<html lang="en-gb" class="no-js">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourest - Explore the World</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comforter+Brush&family=Heebo:wght@400;500;600;700&display=swap"
    rel="stylesheet">


</head>

<body>
 <?php include('includes/header.php'); ?>
 <!--/.header-->
 <div id="#top"></div>

 <section class="section hero"
        style="background-image: url('./assets/images/hero-bg-bottom.png') url('./assets/images/hero-bg-top.png')">
        <div class="container">

          <img src="./assets/images/shape-1.png" width="61" height="61" alt="Vector Shape" class="shape shape-1">

          <img src="./assets/images/shape-2.png" width="56" height="74" alt="Vector Shape" class="shape shape-2">

          <img src="./assets/images/shape-3.png" width="57" height="72" alt="Vector Shape" class="shape shape-3">

          <div class="hero-content">

            <p class="section-subtitle">Explore Your Travel</p>

            <h2 class="hero-title">Trusted Travel Agency</h2>

            <p class="hero-text">
              I travel not to go anywhere, but to go. I travel for travel's sake the great affair is to move.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Contact Us</a>

              <a href="#" class="btn btn-outline">Learn More</a>
            </div>

          </div>

          <figure class="hero-banner">
            <img src="./assets/images/hero-banner.png" width="686" height="812" loading="lazy" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>

 <section class="section destination">
        <div class="container">

          <p class="section-subtitle">Destinations</p>

          <h2 class="h2 section-title">Choose Your Place</h2>

          <ul class="destination-list">

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-1.jpg" width="1140" height="1100" loading="lazy"
                    alt="Malé, Maldives" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Malé</p>

                  <h3 class="h3 card-title">Maldives</h3>
                </div>

              </a>
            </li>

            <li class="w-50">
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-2.jpg" width="1140" height="1100" loading="lazy"
                    alt="Bangkok, Thailand" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Bangkok</p>

                  <h3 class="h3 card-title">Thailand</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-3.jpg" width="1110" height="480" loading="lazy"
                    alt="Kuala Lumpur, Malaysia" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Kuala Lumpur</p>

                  <h3 class="h3 card-title">Malaysia</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-4.jpg" width="1110" height="480" loading="lazy"
                    alt="Kathmandu, Nepal" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Kathmandu</p>

                  <h3 class="h3 card-title">Nepal</h3>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="destination-card">

                <figure class="card-banner">
                  <img src="./assets/images/destination-5.jpg" width="1110" height="480" loading="lazy"
                    alt="Jakarta, Indonesia" class="img-cover">
                </figure>

                <div class="card-content">
                  <p class="card-subtitle">Jakarta</p>

                  <h3 class="h3 card-title">Indonesia</h3>
                </div>

              </a>
            </li>

          </ul>

        </div>
      </section>


   <!-- 
        - #ABOUT
      -->

      

<section id="aboutUs" class="secPad">
<section class="section about">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Explore all tour of the world with us.</h2>

            <p class="about-text">
              Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or
              randomised words
              which don't look even slightly believable.
            </p>

            <ul class="about-list">

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="compass"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Tour guide</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="briefcase"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Friendly price</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

              <li class="about-item">

                <div class="about-item-icon">
                  <ion-icon name="umbrella"></ion-icon>
                </div>

                <div class="about-item-content">
                  <h3 class="h3 about-item-title">Reliable tour</h3>

                  <p class="about-item-text">
                    Lorem Ipsum available, but the majority have suffered alteration in some.
                  </p>
                </div>

              </li>

            </ul>

            <a href="#" class="btn btn-primary">Booking Now</a>

          </div>

          <figure class="about-banner">
            <img src="./assets/images/about-banner.png" width="756" height="842" loading="lazy" alt="" class="w-100">
          </figure>

        </div>
      </section>  
</section>


<!--Package-->
<section id="packages" class="section popular">
  <div class="container">
    
    <p class="section-subtitle">Featured Tours</p>

     <h2 class="h2 section-title">Most Popular Tours</h2>
  

 
      <?php 
      $sql = "SELECT * from tbltourpackages order by rand() ";
      $query = $dbh->prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);

      if($query->rowCount() > 0)
      {
        foreach($results as $result)
        { 
      ?>

      <ul class="popular-list">


  <div class="popular-card">

    <figure class="card-banner">
      <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">
        <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" width="740" height="518" loading="lazy"
          alt="Kuala Lumpur, Malaysia" class="img-cover">
      </a>
    </figure>

    <div class="card-content">

      <!-- <div class="card-wrapper">
        <div class="card-price">From $50.00</div>

        <div class="card-rating">
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star"></ion-icon>
          <ion-icon name="star-outline"></ion-icon>

   
        </div>
      </div> -->

      <h3 class="card-title">
        <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"><?php echo htmlentities($result->PackageName);?></a>
      </h3>
      <address class="card-location"><?php echo htmlentities($result->PackageLocation);?></address>
    </div>
        </div>
      </ul>


         <!-- <div class="col-md-3">
            <div class="card package-card">
              <figure class="card-banner">
                <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">
                  <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" width="740" height="518" loading="lazy" alt="Kuala" class="img-cover">
                </a>
              </figure>
              <div class="card-content">
                <h4 class="card-title">
                  <a href="package_details.php?pkgid=<?php echo htmlentities($result->PackageId);?>"><?php echo htmlentities($result->PackageName);?></a>
                </h4>
                
                <address class="card-location"><?php echo htmlentities($result->PackageLocation);?></address>
              </div>
            </div>
          </div> -->
      <?php 
        }
      } 
      ?>
  
  </div>
</section>


    




<!--Quote-->
<section id="quote" class="bg-parlex">
  <div class="parlex-back">
    <div class="container secPad text-center">
      <h2>"The World is a book, and those who do not travel read only a page."
      </h2><h3>-Saint Augustine</h3>
    </div>
    <!--/.container-->
  </div>
</section>
<!--Portfolio-->
<section id="portfolio" class="page-section section appear clearfix secPad">
  <div class="container">
    <div class="heading text-center">
      <!-- Heading -->
      <h2>Gallery</h2>
      <p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
    </div>
    <div class="row">            
      <div class="col-md-12">
        <div class="row">
          <div class="portfolio-items clearfix papper " id="3" >
            <article class="col-sm-4  isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/america.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img1.jpg" class="fancybox">                                                
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img2.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img2.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>


            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img3.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img3.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img4.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img4.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img5.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img5.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem webdesign">
              <div class="portfolio-item">
                <img src="images/portfolio/img6.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img6.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img7.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img7.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem photography">
              <div class="portfolio-item">
                <img src="images/portfolio/img8.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img8.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>

            <article class="col-sm-4 isotopeItem print">
              <div class="portfolio-item">
                <img src="images/portfolio/img9.jpg" alt="" />
                <div class="portfolio-desc align-center">
                  <div class="folio-Get It!">
                    <a href="images/portfolio/img9.jpg" class="fancybox">
                      <i class="fa fa-arrows-alt fa-2x"></i>
                    </a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Contact -->
<section id="contactUs" class="page-section secPad">
  <div class="container">
    <div class="row">
      <div class="heading text-center">
        <!-- Heading -->
        <h2>Let's Keep In Touch!</h2>
        <p>Thank you for visiting out my profile. If you would like to get into contact with me, please fill out the form below.</p>
      </div>
    </div>
    <div class="row mrgn30">
      <div class="col-sm-12 col-md-8">
        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  validate>
          <h3>Contact Form</h3>
          <div class="control-group">
            <div class="controls">
              <input type="text" class="form-control" 
              placeholder="Full Name" id="name" required
              data-validation-required-message="Please enter your name" />
              <p class="help-block"></p>
            </div>
          </div> 	
          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <input type="email" class="form-control" placeholder="Email" 
              id="email" required
              data-validation-required-message="Please enter your email" />
            </div>
          </div> 	

          <div class="control-group" style="margin-bottom: 8px;">
            <div class="controls">
              <textarea rows="10" cols="100" class="form-control" 
              placeholder="Message" id="message" required
              data-validation-required-message="Please enter your message" minlength="5" 
              data-validation-minlength-message="Min 5 characters" 
              maxlength="999" style="resize:none"></textarea>
            </div>
          </div> 		 
          <div id="success"> </div> <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary pull-right">Send</button><br />
        </form>
      </div> 

      <!-- signup -->
      <?php include('includes/signup.php');?>     
      <!-- //signu -->
      <!-- signin -->
      <?php include('includes/signin.php');?>     
      <!-- //signin -->
      <div class="col-sm-12 col-md-4">
        <h4>Address:</h4>
        <address>
          Code4berry Company<br>
          12th, street<br>
          Luthuli Avenue, California
          <br>
        </address>
        <h4>Phone:</h4>
        <address>
          17745-41189-2<br>
        </address>
      </div>
    </div>
  </div>
  <!--/.container-->
</section>
<?php include('includes/footer.php'); ?>

<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a>
<script src="js/modernizr-latest.js"></script>
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="js/jquery.nav.js" type="text/javascript"></script>
<script src="js/jquery.cslider.js" type="text/javascript"></script>
<script src="contact/contact_me.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
