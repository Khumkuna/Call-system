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



  <?php 
  $Monthnow = date('M Y');


  ?>
  
  
  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Time Attendance</h6>
            <h4><em><?php echo $Monthnow ?></em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <?php
          // ตัวอย่างข้อมูลศูนย์แต่ละจังหวัด (ควรดึงจากฐานข้อมูลจริง)
          $centers = [
            ['province' => 'Bangkok', 'count' => 12, 'lat' => 13.7563, 'lng' => 100.5018],
            ['province' => 'Chiang Mai', 'count' => 7, 'lat' => 18.7883, 'lng' => 98.9853],
            ['province' => 'Phuket', 'count' => 4, 'lat' => 7.8804, 'lng' => 98.3923],
            // เพิ่มจังหวัดอื่นๆ ตามต้องการ
          ];
          ?>

          <div class="card mb-4">
            <div class="card-header">
            </div>
            <div class="card-body">
            <div id="map" style="height: 400px; width: 100%;"></div>
            <ul class="mt-3">
              <?php foreach ($centers as $center): ?>
              <li><?php echo htmlspecialchars($center['province']); ?>: <?php echo $center['count']; ?> ศูนย์</li>
              <?php endforeach; ?>
            </ul>
            </div>
          </div>

          <!-- Leaflet.js แผนที่ -->
          <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
          <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
          <script>
            var map = L.map('map').setView([13.7563, 100.5018], 6); // ศูนย์กลางประเทศไทย

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            var centers = <?php echo json_encode($centers); ?>;
            centers.forEach(function(center) {
            L.marker([center.lat, center.lng])
              .addTo(map)
              .bindPopup(center.province + ': ' + center.count + ' ศูนย์');
            });
          </script>
        </div>
        
      </div>
    </div>
  </div>  

  
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
           <div class="col-lg-6">
                <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <button >ดูข้อมูลศูนย์ดิจิทัลชุมชน</button>
                </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.8s">

                    <button >สร้าง / แก้ไข ศูนย์ดิจิทัลชุมชน</button>              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 DigiMedia Co., Ltd. All Rights Reserved. 
          <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>