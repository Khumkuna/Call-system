<!DOCTYPE html>
<html lang="en">


<?php  include('asset_Admin/Head.php');  


if(isset($_POST['SelectCase'])) {
    $_SESSION['SelectedCase'] = $_POST['SelectCase'];
    // You can now use $SelectedCase to fetch and display the case details
    // For example:
    

}

$SelectedCase = $_SESSION['SelectedCase'];

$getCase = "SELECT * FROM repair_tb WHERE Rep_Ticket = '$SelectedCase' ";
$ResultGetCase = mysqli_query($conn, $getCase);
$RowGetCase = mysqli_fetch_array($ResultGetCase);
$Si_ID = $RowGetCase['Si_ID'];
$SelectUser = $RowGetCase['Rep_User'];
$Rep_Tel = $RowGetCase['Rep_Tel'];
$SelectName = $SelectUser . " - " . $Rep_Tel;
$SelectProblem = $RowGetCase['Rep_Problem'];
$SelectDatecreate = date("d-m-Y H:i", strtotime($RowGetCase['Rep_DateCreate']));
$SelectDevice = $RowGetCase['Rep_Device'];
$SelectSerial = $RowGetCase['Rep_Serial'];
$SelectImage = $RowGetCase['Rep_Image'];
$SelectVideo = $RowGetCase['Rep_Video'];
$SelectCreateBy= $RowGetCase['Rep_CreateBy'];
$SelectID = $RowGetCase['Rep_ID'];

$GetServiceCenter = "SELECT * FROM site_tb WHERE Si_ID = '$Si_ID'";
$ResultServiceCenter = mysqli_query($conn, $GetServiceCenter);
$RowServiceCenter = mysqli_fetch_array($ResultServiceCenter);
$SelectedSiName = $RowServiceCenter['Si_Name'];
$SelectSubDistrict = $RowServiceCenter['Si_Subdistrict'];
$SelectDistrict = $RowServiceCenter['Si_District'];
$SelectProvince = $RowServiceCenter['Si_Province'];




?>
<style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  body {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
  }
  .main-content {
    flex: 1 0 auto;
  }
  .footer-sticky {
    flex-shrink: 0;
    width: 100%;
  }
</style>

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



  <div class="main-banner wow fadeIn main-content" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container-fluit">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                 <div class="section-heading" align="center">
                    <h6>Helpdesk And Verify</h6>
                    <h4><em></em></h4>
                    <!-- <div class="line-dec"></div> -->
                  </div>
                  <br>
                  <hr>
                  <div class="col-4">
                      <div class="form-group">
                          <!-- <label for="Case_Ticket"> Case Ticket </label>
                          <input type="text" class="form-control" id="Case_Ticket" name="Case_Ticket" placeholder="Enter Case Ticket" required> -->
                          <label for="Case_Detail"> รอการ Verify </label>
                            <table class="table table-striped table-hover table-bordered" width="100%" style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                              <thead style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; font-weight: bold;">
                                  <tr>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> Ticket </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> วันที่เปิด </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> เวลาที่เหลือ </th>
                                      <th scope="col" class="text-center" style="padding: 8px; border: none;"> Tools </th>
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
                                          echo "<td class='text-left' style='padding: 8px; border: none;'>
                                          <form action='Helpdesk-Manage.php' method='POST'>

                                            <button class='btn btn-sm btn-primary' name='SelectCase' value='" . $RowGetCase['Rep_Ticket'] . "'>Select</button></td>

                                          </form>";
                                          echo "</tr>";
                                      }
                                      // PHP code to fetch and display case status from the database
                                  ?>
                              </tbody>
                            </table>
                    
                      
                        </div>
                  </div>




                  
                    <div class="col-8">
                      <div class="form-group">
                         <form acction="Processing.php" method="POST">
                        <div class="row">
                        <div class="col-6" align="left">
                          <label for="Case_Detail"><b> Detail Case : </b><?php echo $SelectedCase; ?></label><br>
                          <label for="Case_Detail"><b>ชื่อศูนย์ : </b><?php echo $SelectedSiName; ?></label>
                        </div>
                        <div class="col-2" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                          <label for="Case_Detail"><b>ตำบล : </b><?php echo $SelectSubDistrict; ?></label>
                        </div>
                        <div class="col-2" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                          <label for="Case_Detail"><b>อำเภอ : </b><?php echo $SelectDistrict; ?></label>                        
                        </div>
                        <div class="col-2" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                          <label for="Case_Detail"><b>จังหวัด : </b><?php echo $SelectProvince; ?></label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-3" align="left">
                            <label for="Case_Detail"> <br> </label><br>
                            <label for="Case_Detail"><b>ชื่อผู้แจ้ง : </b><?php echo $SelectName; ?></label>
                        </div>
                        <div class="col-3" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                            <label for="Case_Detail"><b>ผู้รับแจ้ง : </b><?php echo $SelectCreateBy; ?></label>
                        </div>
                         <div class="col-6" align="left">
                            <label for="Case_Detail"> <br> </label><br>
                            <label for="Case_Detail"><b>วันที่เปิดเคสงาน : </b><?php echo $SelectDatecreate; ?></label>

                        </div>
                      </div>

                      <div class="row">
                        <div class="col-3" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                          <label for="Case_Detail"><b>อุปกรณ์ : </b><?php echo $SelectDevice; ?></label>
                        </div>

                         <div class="col-3" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                          <label for="Case_Detail"><b>Serial Number : </b><?php echo $SelectSerial; ?></label>
                        </div>
                        <div class="col-6" align="left">
                          <label for="Case_Detail"> <br> </label><br>
                          <label for="Case_Detail"><b>อาการเสีย/ปัญหา : </b><?php echo $SelectProblem; ?></label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-6" align="left">
                          <label for="Case_Detail"> </label>
                          <textarea class="form-control" id="Case_Detail" required name="Case_Edit" rows="4" placeholder="หมายเหตุการแก้ไข"></textarea>
                        </div>
                        <div class="col-6" align="left">
                          <label for="Case_Detail"> </label>
                           <textarea class="form-control" id="Case_Detail" name="Case_Remark" rows="4" placeholder="หมายเหตุการส่ง Case ต่อ"></textarea>
                        </div>
                      </div>


                       <div class="row">
                        <div class="col-3" align="left">
                          <label for="Case_Detail"> </label>
                          <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#imageModal"> Image ประกอบ </button>       
                        </div>
                        <div class="col-3" align="left">
                          <label for="Case_Detail"> </label>
                          <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#videoModal"> Video ประกอบ </button>       
                        </div>

                         <div class="col-6" align="left">
                          <label for="Case_Detail"> </label>
                          <select class="form-control" id="Case_Status" name="Case_Status" required>
                            <option value="" disabled selected> สถานะการดำเนินงาน </option>
                            <option value="กำลังดำเนินการ"> กำลังดำเนินการ </option>
                            <option value="ส่งงาน Onsite"> ส่งงาน Onsite </option>
                            <option value="ส่งงาน ISP Service"> ส่งงาน ISP Service </option>
                            <option value="เรียบร้อย"> เรียบร้อย </option>
                          </select>       
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-12" align="left">
                          <label for="Case_Detail"> </label>
                            <input type="hidden" class="form-control" id="SelectID" name="SelectID" value="<?php echo $SelectID; ?>" >
                            <button  class="form-control btn btn-success"  name="Update_Case"> บันทึกข้อมูล </button>                      
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
    </div>
  </div>
</div>



    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel">Image ประกอบ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php if(!empty($SelectImage)): ?>
              <img src="<?php echo $SelectImage; ?>" class="img-fluid" alt="Case Image">
            <?php else: ?>
              <p>ไม่มีรูปภาพ</p>
            <?php endif; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="
dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="videoModalLabel">Video ประกอบ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body
">
            <?php if(!empty($SelectVideo)): ?>
              <video class="img-fluid" controls>
                <source src="<?php echo $SelectVideo; ?>" type="video/mp4">
                Your browser does not support the video tag.
              </video>
            <?php else: ?>
              <p>ไม่มีวิดีโอ</p>
            <?php endif; ?>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
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