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



  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Create Site</h6>
            <h4>สร้างสถานที่จัดตั้ง<br> <em>ศูนย์ดิจิทัลชุมชน</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="Processing.php" method="post">
            <div class="row">
              <div class="col-lg-12">
              <div class="contact-dec">
                <img src="assets/images/contact-dec.png" alt="">
              </div>
              </div>
              
              <div class="col-lg-12">
              <div class="fill-form">
                <div class="row">
                <div class="col-lg-12">
                  <h2>กรอกข้อมูลสถานที่จัดตั้ง</h2>

                  <p>
                    <input type="text" name="Site_Name" id="Site_Name"  class="form-control" placeholder="ชื่อศูนย์ดิจิทัลชุมชน" required>
                  </p>
                  <p>
                    <input type="text" name="Site_Address" id="Site_Address" class="form-control" placeholder="ที่อยู่" required>
                  </p>
                  <hr>

                  <p>
                    <select name="province" id="province" class="form-control" required>
                      <option value="">เลือกจังหวัด</option>
                      <?php
                      $sql = "SELECT id, name_in_thai FROM Provinces_tb ORDER BY name_in_thai ASC";
                      $result = mysqli_query($conn, $sql);
                      while($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="'.$row['id'].'">'.$row['name_in_thai'].'</option>';
                      }
                      ?>
                    </select>
                  </p>
                  <p>
                  <select name="amphures" id="amphures" class="form-control" required >
                    <option value="">เลือกอำเภอ</option>
                  </select>
                  </p>
                  <p>
                  
                  <select name="subdistrict" id="subdistrict" class="form-control" required >
                    <option value="">เลือกตำบล</option>
                  </select>
                  </p>
                  <p>
                  
                  <div class="form-group">
                  <div id="latitude"></div>
                  <div id="longitude"></div>
                  </div>
                  </p>

                  </div>
                  <div class="col-lg-12">
                   <p>
                    พิกัดที่ตั้งของศูนย์ดิจิทัลชุมชน
                    
                    <button type="button" class="btn btn-primary" onclick="openGoogleMapCurrentLocation()">Open Google Map &amp; Marker My Location ปัจจุบัน (New Tab)</button>
                    <script>
                    function openGoogleMapCurrentLocation() {
                      if (navigator.geolocation) {
                      navigator.geolocation.getCurrentPosition(function(position) {
                        var lat = position.coords.latitude;
                        var lng = position.coords.longitude;
                        var url = 'https://www.google.com/maps?q=' + encodeURIComponent(lat) + ',' + encodeURIComponent(lng);
                        window.open(url, '_blank');
                      }, function() {
                        alert('ไม่สามารถเข้าถึงตำแหน่งของคุณได้');
                      });
                      } else {
                      alert('เบราว์เซอร์ของคุณไม่รองรับการระบุตำแหน่ง');
                      }
                    }
                    </script>
                  </p>
                  </div>
                  
                  <div class="col-lg-6">
                   <p>
                    <input type="text" name="Site_Latitude" id="Site_Latitude" class="form-control" placeholder="Latitude" required>
                  </p>
                  </div>
                  <div class="col-lg-6">

                   <p>
                    <input type="text" name="Site_Longitude" id="Site_Longitude" class="form-control" placeholder="Longitude" required>
                  </p>
                  </div>



                  <button type="submit" name="Create_Site" class="filled-button">บันทึกข้อมูล</button>
                  
                  
                  
                  
                </div>
                </div>
              </div>
              </div>
               
              
          </form>
        </div>
      </div>
    </div>
  </div>
  
  


<?php 
include('asset_Admin/Footer.php');
?>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>

 <?php  include('Code-script.php'); ?>