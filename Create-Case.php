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
                 
                   <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">ศูนย์ดิจิทัลชุมชน</label>
                          <select class="form-control" name="Si_Selected" required>
                            <option value="" disabled selected>-- เลือกศูนย์ดิจิทัลชุมชน --</option>
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
                          <select class="form-control" name="Dev_Selected" required>
                            <option value="" disabled selected>-- เลือกอุปกรณ์ --</option>
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

                  <div class="col-4">
                     <div class="mb-3">
                      <label  class="form-label">Serial Number</label>
                      <input type="text" class="form-control" name="Case_SN"  required>
                    </div>
                  </div>

                  <div class="col-4">
                     <div class="mb-3">
                      <label  class="form-label">ชื่อผู้แจ้ง</label>
                      <input type="text" class="form-control" name="Case_User"  required>
                    </div>
                  </div>

                  <div class="col-4">
                     <div class="mb-3">
                      <label  class="form-label">เบอร์ติดต่อ</label>
                      <input type="text" class="form-control" name="Case_Tel"  required>
                    </div>
                  </div>


                  <div class="col-12">
                     <div class="mb-3">
                      <label  class="form-label">สาเหตุ/อาการเสีย</label>
                      <textarea class="form-control" name="Case_Detail" rows="3" required></textarea>
                    </div>
                  </div>

                  <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">ภาพประกอบ</label>
                      <input type="file" class="form-control" name="Case_Image" accept="image/*" capture="environment" >
                    </div>
                  </div>

                  <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">Video</label>
                      <input type="file" class="form-control" name="Case_Video" accept="video/*" capture="camcorder">
                    </div>
                  </div>

                  <div class="col-12">
                     <div class="mb-3">
                      <br>
                        <button type="submit" class="form-control btn btn-info"  name="Open_Case">Open Case</button>

                    </div>
                  </div>

                                  
                   <!-- <div class="col-12" align="right"><hr></div> -->
                   <div class="col-12" align="right">
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