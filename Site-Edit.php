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
                    <div class="left-content show-up header-text wow fadeInTop" data-wow-duration="1s" data-wow-delay="1s">
                    <form action="Processing.php" method="POST">
                          <div class="row">
                                <div class="section-heading" align="center">
                                  <h6>อัพเดทข้อมูลศูนย์ดิจิทัลชุมชน</h6>
                                  <h4><em><?php echo $Monthnow ?></em></h4>
                                  <div class="line-dec"></div>
                                </div>
                          </div>
                    </div>
              </div>



            <div class="col-lg-12 align-self-top">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <form action="Processing.php" method="POST">
                <div class="row">
                                    <div class="col-12">
                    <hr>
                  </div>
                  <table class="attendance-table">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>Site Code</th>
                      <th>ชื่อศูนย์</th>
                      <th>ที่อยู่</th>
                      <th>ตำบล</th>
                      <th>อำเภอ</th>
                      <th>จังหวัด</th>
                      <th>พิกัด</th>
                      <th>เลือก</th>

                    </tr>
                  </thead>
                  <tbody>
                      <?php
                          $MonthNow = date('m/Y');
                          $Count = 0;
                          $sql_Site="Select * from subdistricts,districts,provinces_tb,Site_tb 
                          where subdistricts.id = Site_tb.Sub_ID
                          and districts.id = Site_tb.Dis_ID
                          and provinces_tb.id = Site_tb.Pro_ID";



;
                          $query_Site=mysqli_query($conn,$sql_Site);
                          if ($query_Site && $query_Site->num_rows > 0) 
                          {
                            while ($data_Site=mysqli_fetch_array($query_Site))                       
                            { 
                              $Count++;
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($Count) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Site['Site_ID']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Site['Site_Name']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Site['Site_Address']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Site['name_in_thai_Sub']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Site['name_in_thai_Dis']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Site['name_in_thai']) . '</td>';
                                echo '<td><a href="https://www.google.com/maps?q=' . urlencode($data_Site['Site_Latitude'] . ',' . $data_Site['Site_Longitude']) . '" target="_blank">' . htmlspecialchars($data_Site['Site_Latitude'] . ',' . $data_Site['Site_Longitude']) . '</a></td>';
                                echo '<td>
                                <button name="Select_Edit" class="btn btn-info btn-sm " title="Edit">เลือก</button>
                                
                                
                                </td>';

                                echo '</tr>';
                              }
                              // ถ้าจำนวน row น้อยกว่า 10 ให้เพิ่ม row ว่าง
                              for ($i = $Count + 1; $i <= 10; $i++) {
                                echo '<tr>';
                                echo '<td>' . $i . '</td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '<td></td>';
                                echo '</tr>';
                            }




                          }
                              
                          
                          else
                          {
                              echo '<tr><td colspan="8" class="text-center">ไม่พบข้อมูลการลงเวลา กรุณาติดต่อ Admin-System</td></tr>';
                          }
                          
                        ?>
                  </tbody>
                </table>
                
                  
              </div>
              </form>
            </div>
            </div></div>
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