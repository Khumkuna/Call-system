<!DOCTYPE html>
<html lang="en">

  <?php  
  include('asset_User/Head.php');   
  ?> 

<!-- ******Check Site******* -->


<?php 
include('Gen_Time.php'); 
?>
<?php

        


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

  <!-- ***** Navbar User Start ***** -->
 <?php  include('asset_User/navbar.php');   ?>
  <!-- ***** Navbar User End ***** -->
  <?php 
  $Monthnow = date('n') . ' ' . (date('Y') + 543);
  $thaiMonths = [
    1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
    5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
    9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
  ];
  $Monthnow = $thaiMonths[date('n')] . ' ' . (date('Y') + 543);
  ?>
  
      <div id="blog" class="blog">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="section-heading">
                <h2>ข้อมูลผู้เข้าใช้บริการ</h2>
                <p>การบันทึกเวลาการเข้สใช้บริการของประชาชน</p>
                <h4><em><?php echo  $Monthnow ?></em></h4>
              <div class="border-first-button scroll-to-section">
                        <a href="User-Services-Report.php">ข้อมูลทั้งหมด</a>
                    </div>
            </div>
          </div>

          <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="blog-post">
              <div class="thumb">
                <table class="attendance-table">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>วันเวลา-เข้า</th>
                      <th>วันเวลา-ออก</th>
                      <th>ชื่อ-นามสกุล</th>
                      <th>ประเภทผู้เข้าใช้</th>
                      <th>รูปแบบ</th>
                      <th>รายละเอียด</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                          $MonthNow = date('Y-m');
                          
                          $Count = 0;
                          $sql_Service="Select * from publicservice_tb Where Site_ID = '$Login_Site' and PBS_DateStart LIKE '$MonthNow%'  ORDER BY PBS_DateStart DESC";
                          $query_Service=mysqli_query($conn,$sql_Service);
                          if ($query_Service && $query_Service->num_rows > 0) 
                          {
                            while ($data_Service=mysqli_fetch_array($query_Service))                       
                            { 
                              $PBSID = $data_Service['PBS_ID'];
                              $PBSType = $data_Service['PBS_Type'];
                              $PBSDateStop = $data_Service['PBS_DateStop'];
                              if ($PBSType == "Normal") {$PBSType = 'ลงทะเบียนแบบธรรมดา';}

                              $Count++;
                              echo '<tr' . $rowStyle . '>';
                              echo '<td' . $rowStyle . '>'.$Count. '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Service['PBS_DateStart']) . '</td>';
                              if( $PBSDateStop == NULL ){
                                echo '<td' . $rowStyle . '>
                                        <form method="POST" action="Processing.php">
                                            <input type="hidden" name="PBSID" value="'.htmlspecialchars($PBSID).'">
                                              <button class="btn btn-sm btn-primary" name="SaveDate">บันทึกเวลาออก</button>
                                        </form>
                                    </td>';
                              }
                              else{
                                echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Service['PBS_DateStop']) . '</td>';
                              }
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Service['PBS_Name']) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Service['PBS_Job']) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($PBSType) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Service['PBS_Objective']) . '</td>';
                              echo '</tr>';
                            }
                          }
                          else
                          {
                              echo '<tr><td colspan="8" class="text-center">ไม่พบข้อมูลผู้เข้าใช้บริการ</td></tr>';
                          }
                          
                        ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>


<!-- <?php include('asset_User/Footer.php'); ?> -->
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>