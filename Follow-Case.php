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
                    <h6>Follow Case</h6>
                    <h4><em></em></h4>
                    <!-- <div class="line-dec"></div> -->
                  </div>
                  <br>
                  <hr>
                  <div class="col-12">
                      <div class="form-group">
                          <!-- <label for="Case_Ticket"> Case Ticket </label>
                          <input type="text" class="form-control" id="Case_Ticket" name="Case_Ticket" placeholder="Enter Case Ticket" required> -->
                            <table class="table table-striped table-hover table-bordered" width="100%" style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                              <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-weight: bold;">
                                  <tr>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> Ticket </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> วันที่เปิด </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> ข้อมูลอุปกรณ์ </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> Serial Number </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> ชื่อศูนย์ </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> เวลาที่เหลือ </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> Status </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> Owner </th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                      $GetCase = "SELECT * FROM repair_tb ORDER BY Rep_DateCreate DESC";
                                      $ResultGetCase = mysqli_query($conn, $GetCase);
                                      while ($RowGetCase = mysqli_fetch_array($ResultGetCase)) {
                                          echo "<tr>";
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $RowGetCase['Rep_Ticket'] . "</td>";
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $RowGetCase['Rep_DateCreate'] . "</td>";
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $RowGetCase['Rep_Device'] . "</td>";
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $RowGetCase['Rep_Serial'] . "</td>";
                                         
                                          
                                          // Fetching Service Center Name
                                          $Si_ID = $RowGetCase['Si_ID'];
                                          $GetServiceCenter = "SELECT Si_Name FROM site_tb WHERE Si_ID = '$Si_ID'";
                                          $ResultServiceCenter = mysqli_query($conn, $GetServiceCenter);
                                          $RowServiceCenter = mysqli_fetch_array($ResultServiceCenter);
                                          $Si_Name = $RowServiceCenter['Si_Name'];

                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $Si_Name . "</td>";

                                          // Calculating Remaining Time (48 business hours)
                                          $DateCreated = new DateTime($RowGetCase['Rep_DateCreate']);
                                          $DateExpiry = clone $DateCreated;
                                          
                                          // Add 48 business hours (6 business days)
                                          $businessHoursToAdd = 48;
                                          $hoursAdded = 0;
                                          
                                          while ($hoursAdded < $businessHoursToAdd) {
                                              $DateExpiry->modify('+1 hour');
                                              $dayOfWeek = $DateExpiry->format('N'); // 1=Monday, 7=Sunday
                                              $hour = (int)$DateExpiry->format('H');
                                              
                                              // Skip weekends and outside business hours (9-17)
                                              if ($dayOfWeek < 6 && $hour >= 9 && $hour < 17) {
                                                  $hoursAdded++;
                                              }
                                          }
                                          $TimestampExpiry = $DateExpiry->getTimestamp();
                                          $Now = new DateTime();
                                          $Interval = $Now->diff($DateExpiry);
                                          echo "<td class='text-right countdown-cell' style='padding: 8px; border: none;'>" . $Interval->format('%dวัน %h:%i:%s') . "</td>";
                                          
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $RowGetCase['Rep_Status'] . "</td>";
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>" . $RowGetCase['Rep_LastAction'] . "</td>";
                                          echo "</tr>";
                                      }
                                      // PHP code to fetch and display case status from the database
                                  ?>
                              </tbody>

                            </table>
                      
                      
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