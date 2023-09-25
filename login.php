<?php

error_reporting(0);

session_start();


include 'dbcon.php';

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];


  $email_search = " select * from users where email='$email' ";
  $query = mysqli_query($con, $email_search);

  $email_count = mysqli_num_rows($query);

  if ($email_count) {
    $email_pass = mysqli_fetch_assoc($query);
    $dbpass = $email_pass['password'];

    $_SESSION['username'] = $email_pass['userName'];


    $pass_decode = password_verify($password, $dbpass);

    // $isAdmin = "select * from users where isAdmin='1'";
    // $getAdmin = mysqli_query($con, $isAdmin);
    // $checkAdmin = mysqli_fetch_assoc($getAdmin);

    if ($pass_decode) {
      if ($email_pass["is_admin"] == 1) {
        header('location:admin.php');
      } else {
        header('location:index.php');
      }
    } else {

        $error = "ERROR: Email or Password are incorrect!!!";
     
    }
  } else {
    $error = "ERROR: Email Invalid!!!\n Please register and then login";
    
  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="favicon.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

  <link
    href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/owl.theme.default.min.css" />
  <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="fonts/icomoon/style.css" />
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
  <link rel="stylesheet" href="css/aos.css" />
  <link rel="stylesheet" href="css/style.css" />

  <title>EduSpark Learning - Login</title>
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

  <?php 
include 'navbar.php'
?>

  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">
                Login
              </h1>
            </div>
            
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->


    
  </div>
  <!-- /.untree_co-hero -->

  <!-- /.untree_co-section -->

<div class="untree_co-section">
    <div class="container">

      <div class="row mb-5 justify-content-center">
        <div class="col-lg-5 mx-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="form-box">
        <?php 
          echo "<div class='alert' style='color:red'>$error</div>"
        ?>
            <div class="row">
              
             

              <div class="col-12 mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
              </div>

              <div class="col-12 mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>

              <div class="col-12 mb-3">
                <label class="control control--checkbox">
                  <span class="caption">Remember me</span>  
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>
              <div class="col-12 mb-3">
                  <span class="caption">Forgot password?<a href="passwordReset.php"> Click here</a></span>
              </div>

              <div class="col-12">
              <a href="index.php"><input type="submit" value="Login" name="login" class="btn btn-primary"></a>
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div>




  <?php 
 
 include 'footer.php'
 
 ?>
  <!-- /.site-footer -->

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