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
                                  <h6>Update Account</h6>
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
                      <th>ชื่อ - นามสกุล</th>
                      <th>เบอร์โทรศัพท์</th>
                      <th>Line ID</th>
                      <th>วันที่เริ่มงาน</th>
                      <th>Rule</th>
                      <th>สถานะ Active</th>
                      <th>เลือก</th>

                    </tr>
                  </thead>
                  <tbody>
                      <?php
                          $MonthNow = date('m/Y');
                          $Count = 0;
                          $sql_Account="Select * from Account_tb where Acc_Fullname != 'Admin-System'";
                          $query_Account=mysqli_query($conn,$sql_Account);
                          if ($query_Account && $query_Account->num_rows > 0) 
                          {
                            while ($data_Account=mysqli_fetch_array($query_Account))                       
                            { 
                              $Count++;
                                echo '
                                
                                <tr>';
                                echo '<td>' . htmlspecialchars($Count) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc_Site']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc_Fullname']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc-Telephone']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc_Line']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc-Start']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc_Rule']) . '</td>';
                                echo '<td>' . htmlspecialchars($data_Account['Acc_Activate']) . '</td>';
                                echo '<td>
                                <form method="POST" action="Profile-Edit.php">
                                <input type="hidden" name="AccID" value="' . htmlspecialchars($data_Account['Acc_ID']) . '">
                                <button name="Select_Edit" class="btn btn-info btn-sm ">เลือก</button>
                                </form>
                                </td>';

                                echo '</tr>
                                
                                ';
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