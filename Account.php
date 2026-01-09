<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_Admin/Head.php');   ?>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Navbar Admin Start ***** -->
 <?php  include('asset_Admin/navbar.php');   ?>
  <!-- ***** Navbar Admin End ***** -->



  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
             <div class="col-lg-6">
              <div class="center-image wow fadeInTop" data-wow-duration="1s" data-wow-delay="0.5s">
                  <form action="Account-Create-Admin.php" method="POST">
                    <button class="circle-button">Account <br> For <br> Admin</button> </div>
                    </form>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInTop" data-wow-duration="4s" data-wow-delay="0.8s">
                  <form action="Account-Create-User.php" method="POST">
                    <button class="circle-button">Account <br>For<br> User</button> </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php 
  $Monthnow = date('M Y');


  ?>
  
  
<?php include ('asset_Admin/Footer.php'); ?>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>