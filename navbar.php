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
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?>><a href="index.php">Home</a></li>
          <!-- <li class="has-children">
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
            </li> -->
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>><a href="about.php">About</a></li>
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'staff.php') echo 'class="active"' ?>><a href="staff.php">Our Staff</a></li>
          <!-- <li <?php if (basename($_SERVER['PHP_SELF']) == 'news.php') echo 'class="active"' ?> ><a href="news.php">News</a></li> -->
          <!-- <li <?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'class="active"' ?> ><a href="gallery.php">Gallery</a></li> -->
          <li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?>><a href="contact.php">Contact</a></li>
        </ul>


        <?php
        if (basename($_SERVER['PHP_SELF']) != 'login.php' && basename($_SERVER['PHP_SELF']) != 'register.php') {
        
        ?>
          <p class="btn-book btn btn-secondary btn-sm menu-absolute">

            <?php
            if (!isset($_SESSION['username'])) {
            ?>
              Enroll Now
            <?php
            } else {
              $profile =  $_SESSION["username"] . ' | Logout';
              echo "<a href='logout.php' style='text-decoration:none;color:white'>$profile</a>";
            }
            ?>

          </p>
        <?php
        }

        ?>






        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </div>
</nav>