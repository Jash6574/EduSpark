<?php
error_reporting(0);

session_start();
include 'dbcon.php';
if (isset($_POST['register'])) {
  $f_name = mysqli_real_escape_string($con, $_POST['f_name']);
  $l_name = mysqli_real_escape_string($con, $_POST['l_name']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $email = mysqli_real_escape_string($con,  $_POST['email']);
  $password = mysqli_real_escape_string($con,  $_POST['password']);
  $cpassword = mysqli_real_escape_string($con,  $_POST['cpassword']);

  $pass = password_hash($password, PASSWORD_BCRYPT);
  $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

  $emailquery = "select * from users where email = '$email'";
  $query = mysqli_query($con, $emailquery);

  $_SESSION['username'] = $email_pass['userName'];
  

  $emailcount = mysqli_num_rows($query);
  if ($emailcount > 0) {
    $error = "ERROR: Email already exist!!!\nTry again with an another email";
  } else {
    if ($password === $cpassword) {

      $insertquery = "insert into users (first_name, last_name, userName, email, password, confirmPassword) values('$f_name','$l_name','$username','$email','$pass','$cpass')";

      $iquery = mysqli_query($con, $insertquery);

      if ($con) {
        $error = "Registration Succsesfully!!!";
        header('location:login.php');

      } else {
        $error = "ERROR: Try Again Latter!!!";
      }
    } else {
      $error = "Password and confirm password should be same";
    }
  }
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

  <link href="https://fonts.googleapis.com/css2?family=Display+Playfair:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet">


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

  <title>EduSpark Learning - Register</title>

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

  <div class="untree_co-hero inner-page overlay" style="background-image: url('images/img-school-5-min.jpg');">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-12">
          <div class="row justify-content-center ">
            <div class="col-lg-6 text-center ">
              <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Register</h1>

            </div>
          </div>
        </div>
      </div> <!-- /.row -->
    </div> <!-- /.container -->

  </div> <!-- /.untree_co-hero -->




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
                <input type="text" class="form-control" name="f_name" placeholder="First Name" required>
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" name="l_name" placeholder="Last Name" required>
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" name="username" placeholder="User Name" required>
              </div>
              <div class="col-12 mb-3">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
              <div class="col-12 mb-3">
                <input type="password" class="form-control" name="cpassword" placeholder="Re-type Password" required>
              </div>

              <div class="col-12 mb-3">
                <label class="control control--checkbox">
                  <span class="caption">Accept our <a href="#">terms and conditions</a></span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
              </div>

              <div class="col-12">
                <a href="login.php"> <input type="submit" name="register" value="Register" class="btn btn-primary"></a>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>
  </div> <!-- /.untree_co-section -->

  <?php 
 
 include 'footer.php'
 
 ?> <!-- /.site-footer -->

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