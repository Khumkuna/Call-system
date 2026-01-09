<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_User/Head.php');   ?>

 <?php 
if (isset($_POST['search'])) 
  {
    $_SESSION['SearchMonth'] = $_POST['SearchMonth'];
  }
 $SearchMonth = $_SESSION['SearchMonth']



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



  <div id="contact" class="contact-us section">
    <div class="container-fluit">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4><em>กิจกรรมของศูนย์</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <div class="row">
              <div class="col-lg-12">
              <div class="contact-dec">
                <img src="assets/images/contact-dec.png" alt="">
              </div>
              </div>
              
              <div class="col-lg-12">
              <div class="fill-form">
                <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-10">
                      <p>
                      <select name="SearchMonth" id="SearchMonth" class="form-control" required>
                        <option disabled value="">เลือกเดือนที่ต้องการ</option>
                        <?php
                        $sql = "SELECT * FROM publicservice_tb WHERE Site_ID = '$Login_Site' GROUP BY PBS_MonthYear ORDER BY PBS_MonthYear DESC";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)) {
                        $monthYear = $row['PBS_MonthYear']; // สมมติ PBS_MonthYear เป็นรูปแบบ YYYY-MM
                        list($year, $month) = explode('-', $monthYear);
                        $thaiMonths = [
                          1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                          5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                          9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                        ];
                        $thaiMonth = isset($thaiMonths[(int)$month]) ? $thaiMonths[(int)$month] : '';
                        $Monthshow = $thaiMonth . ' ' . ($year + 543);
                        echo '<option value="'.$monthYear.'">'.$Monthshow.'</option>';
                        }
                        ?>
                      </select>
                      </p>
                    </div>
                    <div class="col-lg-2">
                      <p>
                        <button type="submit" class="btn btn-primary" name="search">
                        <i class="fa fa-search"></i> ค้นหา
                        </button>
                      </p>
                    </div>
                  </form>

                <h6>ผลการค้นหา : <em><?php
                if ($SearchMonth) {
                  list($year, $month) = explode('-', $SearchMonth);
                  $thaiMonths = [
                    1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
                    5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
                    9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
                  ];
                  $thaiMonth = isset($thaiMonths[(int)$month]) ? $thaiMonths[(int)$month] : '';
                  echo $thaiMonth . ' ' . ($year + 543);
                } else {
                  echo 'กรุณาเลือกเดือน';
                }
                ?></em></h6>
                <div class="table-responsive">
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
                          
                          $Count = 0;
                          $sql_Service="Select * from publicservice_tb Where Site_ID = '$Login_Site' and PBS_DateStart LIKE '$SearchMonth%'  ORDER BY PBS_DateStart DESC";
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