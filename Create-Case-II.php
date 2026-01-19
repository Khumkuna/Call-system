<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_Admin/Head.php');   ?>

 <?php 
 if(isset($_POST['Step_One'])) 
   {
     $_SESSION['Si_Selected'] = $_POST['Si_Selected'];
     $_SESSION['Dev_Selected'] = $_POST['Dev_Selected'];
   }
  $SiSelected = $_SESSION['Si_Selected'];
  $DevSelected = $_SESSION['Dev_Selected'];

 ?>

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
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <form action="Processing.php" method="POST">
                <div class="row">
                 <div class="section-heading" align="center">
                    <h6>Create Case</h6>
                    <h4><em><?php echo $Monthnow ?></em></h4>
                    <!-- <div class="line-dec"></div> -->
                  </div>
                  <br>
                  <hr>
                  <div class="col-12">
                    
                    <h3>การเปิดเคสงาน <?php echo $SiSelected.''.$DevSelected ?></h3>
                  </div>

                   <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">ศูนย์ดิจิทัลชุมชน</label>
                          <select class="form-control" name="Si_ID" required>
                              <?php
                              // SQL query to fetch categories
                              $GetSite = "SELECT * FROM site_tb";
                              $resultGetSite = mysqli_query($conn, $GetSite);
                               while($GetSiterow = mysqli_fetch_assoc($resultGetSite)) {
                                echo "<option value='" . $GetSiterow["Si_ID"] . "'>" .'('. $GetSiterow["Si_Code"].') -'.$GetSiterow["Si_Name"]. "</option>";

                               }
                              ?>
                          </select>
                    </div>
                  </div>
                  <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">รายการอุปกรณ์</label>
                          <select class="form-control" name="Si_ID" required>
                              <?php
                              // SQL query to fetch categories
                              $GetDevice = "SELECT * FROM device_tb";
                              $resultGetDevice = mysqli_query($conn, $GetDevice);
                               while($GetDevicerow = mysqli_fetch_assoc($resultGetDevice)) {
                                echo "<option value='" . $GetDevicerow["Dev_Code"] . "'>" .'('. $GetDevicerow["Dev_Code"].') -'.$GetDevicerow["Dev_Model"]. "</option>";

                               }
                              ?>
                          </select>
                    </div>
                  </div>
                                  
                   <!-- <div class="col-12" align="right"><hr></div> -->
                   <div class="col-12" align="right">
                       <button type="submit" class="btn btn-info "  name="Step_One"> Next --></button>
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php include('asset_Admin/Footer.php'); ?>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>