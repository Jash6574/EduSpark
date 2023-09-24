<?php
error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
  
  header('location:login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet">


  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <title>EduSpark Learning - Sign of Success</title>
</head>

<body>

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>



  <nav class="site-nav mb-5">
  <?php
  
  if (!isset($_SESSION['username'])) {
  
 include 'header.php';
}

?>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">
          <a href="index.php" class="logo menu-absolute m-0">EduSpark</a>

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="has-children">
              <a href="#">Dropdown</a>
              <ul class="dropdown">
                <li><a href="elements.php">Elements</a></li>
                <li class="has-children">
                  <a href="#">Menu Two</a>
                  <ul class="dropdown">
                    <li><a href="#">Sub Menu One</a></li>
                    <li><a href="#">Sub Menu Two</a></li>
                    <li><a href="#">Sub Menu Three</a></li>
                  </ul>
                </li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li><a href="staff.php">Our Staff</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>

          <p class="btn-book btn btn-secondary btn-sm menu-absolute">

            <?php 
            if (!isset($_SESSION['username'])) {
              ?>
              Enroll Now
              <?php
            }
            else{
              echo $_SESSION['username']; 
            }
            ?>

          </p>

          <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light"
            data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>

        </div>
      </div>
    </div>
  </nav>


  <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.jpg');">


    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="col-12">

          <div class="row justify-content-center ">

            <div class="col-lg-6 text-center ">
              <a data-aos-delay="0" class="caption mb-4 d-inline-block">EduSpark Learning - Sign of Success</a>

              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Education is the Mother of
                Leadership</h1>
              <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-secondary">Explore
                  More</a></p>

            </div>


          </div>

        </div>

      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->


  <!-- <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Browse Top Category</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-atom"></i>
            </div>
            <div>
              <h3>Science</h3>
              <span>1,391 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-briefcase"></i>
            </div>
            <div>
              <h3>Business</h3>
              <span>3,234 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-calculator"></i>
            </div>
            <div>
              <h3>Finance Accounting</h3>
              <span>931 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>Design</h3>
              <span>7,291 courses</span>
            </div>
          </a>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-music"></i>
            </div>
            <div>
              <h3>Music</h3>
              <span>9,114 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-chart-pie"></i>
            </div>
            <div>
              <h3>Marketing</h3>
              <span>2,391 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-camera"></i>
            </div>
            <div>
              <h3>Photography</h3>
              <span>7,991 courses</span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-circle-layer"></i>
            </div>
            <div>
              <h3>Animation</h3>
              <span>6,491 courses</span>
            </div>
          </a>
        </div>
        

      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="400">
        <div class="col-lg-8 text-center">
          <p>We have more category here. <a href="#">Browse all</a></p>
        </div>
      </div>
    </div>
  </div> -->

  <div class="services-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 mb-5 mb-lg-0">

          <div class="section-title mb-3" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom mb-4">Become an Instructor</h2>
          </div>

          <p data-aos="fade-up" data-aos-delay="100">Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated they live.</p>

          <ul class="ul-check list-unstyled mb-5 primary" data-aos="zoom-in" data-aos-delay="0">
            <li>Behind the word Mountains.</li>
            <li>Far far away Mountains.</li>
            <li>Large language Ocean.</li>
          </ul>

          <p data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Get Started</a></p>

        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <figure class="img-wrap-2">
            <img src="images/teacher-min.png" alt="Image" class="img-fluid">
            <div class="dotted"></div>
          </figure>

        </div>
      </div>
    </div>
  </div>



  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">We Have Best Education</h2>
          <p>EduSpark Learning, we're dedicated to nurturing minds and building brighter futures through personalized,
            expert tutoring.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="feature">
            <span class="uil uil-music"></span>
            <h3>Music Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-calculator-alt"></span>
            <h3>Math Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-book-open"></span>
            <h3>English Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>


        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay=100">
          <div class="feature">
            <span class="uil uil-book-alt"></span>
            <h3>Reading for Kids</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="feature">
            <span class="uil uil-history"></span>
            <h3>History Class</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="feature">
            <span class="uil uil-headphones"></span>
            <h3>Music</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
              blind texts.</p>
          </div>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">The Right Course For You</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Education Program Title</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$87.00</span></div>
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Education Program Title</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$93.00</span></div>
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="custom-media">
            <a href="#"><img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid"></a>
            <div class="custom-media-body">
              <div class="d-flex justify-content-between pb-3">
                <div class="text-primary"><span class="uil uil-book-open"></span> <span>43 lesson</span></div>
                <div class="review"><span class="icon-star"></span> <span>4.8</span></div>
              </div>
              <h3>Education Program Title</h3>
              <p class="mb-4">Lorem ipsum dolor sit amet once is consectetur adipisicing elit optio.</p>
              <div class="border-top d-flex justify-content-between pt-3 mt-3 align-items-center">
                <div><span class="price">$65.00</span></div>
                <div><a href="#">Learn More</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('images/img-school-1-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Education for Tomorrow's Leaders</h2>
          <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Join us at EduSpark Learning - where
            learning knows no bounds!</p>
          <p><a href="#" class="btn btn-secondary" data-aos="fade-up" data-aos-delay="200">Enroll Now</a></p>
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 mb-5">
          <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">About Us</h2>
          <p data-aos="fade-up" data-aos-delay="100">Are you looking for top-notch tutoring services to help you or your
            child achieve academic excellence? Look no further! At EduSpark Learning, we're dedicated to nurturing minds
            and building brighter futures through personalized, expert tutoring.</p>
          <!-- <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
            <li>Separated they live</li>
            <li>Bookmarksgrove right at the coast</li>
            <li>large language ocean</li>
          </ul> -->

          <div class="row count-numbers mb-5">
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="0">
              <span class="counter d-block"><span data-number="12023">0</span><span>+</span></span>
              <span class="caption-2">No. Students</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="49">0</span><span></span></span>
              <span class="caption-2">No. Teachers</span>
            </div>
            <div class="col-4 col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <span class="counter d-block"><span data-number="12">0</span><span></span></span>
              <span class="caption-2">No. Awards</span>
            </div>
          </div>

          <p data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="btn btn-primary mr-1">Admission</a>
            <a href="#" class="btn btn-outline-primary">Learn More</a>
          </p>
        </div>
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="bg-1"></div>
          <img src="images/img-school-4-min.jpg" alt="Image" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <!-- <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">School News</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="100">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-1-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Education for Tomorrow's Leaders</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6"  data-aos="fade-up" data-aos-delay="200">
          <div class="media-h d-flex h-100">
            <figure>
              <img src="images/img-school-2-min.jpg" alt="Image">
            </figure>
            <div class="media-h-body">
              <h2 class="mb-3"><a href="#">Enroll Your Kids This Summer to get 30% off</a></h2>
              <div class="meta mb-2"><span class="icon-calendar mr-2"></span><span>June 22, 2020</span>  <span class="icon-person mr-2"></span>Admin</div>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p><a href="#">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- /.untree_co-section -->


  <!-- <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
          <h2 class="line-bottom text-center mb-4">Pricing</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="00">
          <div class="pricing">
            <div class="pricing-img mb-4"><img src="images/1x/asset-1.png" alt="Image" class="img-fluid"></div>
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Starter</h3>
              <div class="price"><span class="fig">$50.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
              <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="pricing">
            <div class="pricing-img mb-4"><img src="images/1x/asset-2.png" alt="Image" class="img-fluid"></div>
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Business</h3>
              <div class="price"><span class="fig">$99.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
              <p><a href="#" class="btn btn-primary">Get Started</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-lg-0 col-lg-4" data-aos="fade-up" data-aos-delay="300">
          <div class="pricing">
            <div class="pricing-img mb-4"><img src="images/1x/asset-3.png" alt="Image" class="img-fluid"></div>
            <div class="pricing-body">

              <h3 class="pricing-plan-title">Premium</h3>
              <div class="price"><span class="fig">$199.99</span><span>/month</span></div>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              
              <p><a href="#" class="btn btn-outline-primary">Get Started</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  -->
  <!-- /.untree_co-section -->


  <div class="untree_co-section bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">

          <h3 class="line-bottom mb-4">Testimonials</h3>
          <div class="owl-carousel wide-slider-testimonial">
            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;Litora. Eros nonummy a. Per eu nulla convallis Congue senectus netus. Maecenas dictum cras elit
                  mus adipiscing interdum montes. Cursus condimentum risus hendrerit. Torquent praesent odio egestas
                  ultrices nostra tellus nibh dapibus dictumst.&rdquo;</p>
                <div class="author">
                  <img src="images/avatar.png" alt="avatar">
                  <h3>Name</h3>
                  <p class="position">Short Info</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;Litora. Eros nonummy a. Per eu nulla convallis Congue senectus netus. Maecenas dictum cras elit
                  mus adipiscing interdum montes. Cursus condimentum risus hendrerit. Torquent praesent odio egestas
                  ultrices nostra tellus nibh dapibus dictumst.&rdquo;</p>
                <div class="author">
                  <img src="images/avatar.png" alt="avatar">
                  <h3>Name</h3>
                  <p class="position">Short Info</p>
                </div>
              </blockquote>
            </div>

            <div class="item">
              <blockquote class="block-testimonial">

                <p>
                  &ldquo;Litora. Eros nonummy a. Per eu nulla convallis Congue senectus netus. Maecenas dictum cras elit
                  mus adipiscing interdum montes. Cursus condimentum risus hendrerit. Torquent praesent odio egestas
                  ultrices nostra tellus nibh dapibus dictumst.&rdquo;</p>
                <div class="author">
                  <img src="images/avatar.png" alt="avatar">
                  <h3>Name</h3>
                  <p class="position">Short Info</p>
                </div>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="untree_co-section">


    <div class="container">
      <div class="row">
        <div class="col-lg-5 mr-auto mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
          <img src="images/img-school-5-min.jpg" alt="image" class="img-fluid" style="height: 380px;">
        </div>
        <div class="col-lg-7 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <h3 class="line-bottom mb-4">Why Choose Us</h3>
          <p>At EduSpark Learning, we're more than just tutors; we're your partners in learning. Here's why you should
            choose us:</p>

          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                  aria-expanded="false" aria-controls="collapseOne">Expert Tutors</button>
              </h2>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <!-- <div class="accordion-img mr-4">
                      <img src="images/img-school-1-min.jpg" alt="Image" class="img-fluid">
                    </div> -->
                    <div>
                      <p>Our team of experienced tutors is passionate about education. They are experts in their fields
                        and are dedicated to helping students succeed.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                  aria-expanded="false" aria-controls="collapseTwo">Personalized Approach</button>
              </h2>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <!-- <div class="accordion-img mr-4">
                      <img src="images/img-school-2-min.jpg" alt="Image" class="img-fluid">
                    </div> -->
                    <div>
                      <p>We understand that every student is unique. That's why we tailor our tutoring sessions to meet
                        the individual needs and learning styles of each student.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                  aria-expanded="false" aria-controls="collapseThree">Comprehensive Subjects</button>
              </h2>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <!-- <div class="accordion-img mr-4">
                      <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div> -->
                    <div>
                      <p>Whether it's math, science, physics, chemistry, biology, French, Punjabi, or English, we offer
                        a wide range of subjects to support students from elementary school to college.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->


            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour"
                  aria-expanded="false" aria-controls="collapseFour">Flexible Scheduling</button>
              </h2>

              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <!-- <div class="accordion-img mr-4">
                      <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div> -->
                    <div>
                      <p>We know that your schedule is busy. That's why we offer flexible scheduling options to
                        accommodate your needs.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive"
                  aria-expanded="false" aria-controls="collapseFive">Proven Results</button>
              </h2>

              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion_1">
                <div class="accordion-body">
                  <div class="d-flex">
                    <!-- <div class="accordion-img mr-4">
                      <img src="images/img-school-3-min.jpg" alt="Image" class="img-fluid">
                    </div> -->
                    <div>
                      <p>Our track record speaks for itself. Our students consistently achieve improved grades,
                        increased confidence, and a love for learning.</p>
                    </div>
                  </div>

                </div>
              </div>

            </div> <!-- .accordion-item -->

          </div>

        </div>
      </div>
    </div>
  </div> <!-- /.untree_co-section -->

  <div class="site-footer">


    <div class="container">

      <div class="row">
        <div class="col-lg-5 mr-auto">
          <div class="widget">
            <h3>About Us<span class="text-primary">.</span> </h3>
            <p>EduSpark Learning, we're more than just tutors; we're your partners in learning.</p>
          </div> <!-- /.widget -->
          <div class="widget">
            <h3>Connect</h3>
            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-youtube"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

        <!-- <div class="col-lg-3 ml-auto">
          <div class="widget">
            <h3>Projects</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
              <li><a href="#">jQuery</a></li>
              <li><a href="#">Bootstrap</a></li>
            </ul>
          </div> 
        </div>  -->

        <!-- <div class="col-lg-3">
          <div class="widget">
            <h3>Gallery</h3>
            <ul class="instafeed instagram-gallery list-unstyled">
              <li><a class="instagram-item" href="images/gal_1.jpg" data-fancybox="gal"><img src="images/gal_1.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_2.jpg" data-fancybox="gal"><img src="images/gal_2.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_3.jpg" data-fancybox="gal"><img src="images/gal_3.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_4.jpg" data-fancybox="gal"><img src="images/gal_4.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_5.jpg" data-fancybox="gal"><img src="images/gal_5.jpg" alt="" width="72" height="72"></a>
              </li>
              <li><a class="instagram-item" href="images/gal_6.jpg" data-fancybox="gal"><img src="images/gal_6.jpg" alt="" width="72" height="72"></a>
              </li>
            </ul>
          </div> 
        </div>  -->


        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>Ready to unlock your potential? Contact EduSpark Learning today to schedule a consultation.
            </address>
            <ul class="list-unstyled links mb-4">
              <li><a href="tel://11234567890">0-123-456-789</a></li>
              <li><a href="tel://11234567890">0-123-456-789</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-3 -->

      </div> <!-- /.row -->

      <div class="row mt-5" style="margin-bottom: -50px;">
        <div class="col-12 text-center">
          <p>Copyright &copy;
            <script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; EduSpark Learning -
            Sign of Success
          </p>
        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>