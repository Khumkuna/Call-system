<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_User/Head.php');  ?>

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
 <?php 
  include('asset_User/navbar.php');   
  ?>
  <!-- ***** Navbar User End ***** -->



  

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Create Activity</h6>
            <h4>สร้างกิจกรรม<br> <em>ศูนย์ดิจิทัลชุมชน</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
            <form id="contact" action="Processing.php" method="post" enctype="multipart/form-data">
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
                    <fieldset>
                      <input type="text" name="Activity_Name" id="Activity_Name"  class="form-control" placeholder="ชื่อกิจกรรม" required>
                    </fieldset>
                    
                  </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="Activity_Target" id="Activity_Target"  class="form-control" placeholder="กลุ่มเป้าหมาย" required>
                      </fieldset>

                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="Activity_Object" id="Activity_Object"  class="form-control" placeholder="วัตถุประสงค์" required>
                      </fieldset>

                    </div>
                    <div class="col-lg-12">
                    <fieldset>
                      <textarea name="Activity_Remark" id="Activity_Remark"  class="form-control" placeholder="รายละเอียดกิจกรรม" required></textarea>
                    </fieldset>

   
                    
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="date" name="Activity_Date" id="Activity_Date"  class="form-control" placeholder="เวลาที่จัดกิจกรรม" required>
                      <p>วันที่จัดกิจกรรม</p>    
                    </fieldset>
                    
                  </div>
                  
                  <div class="col-lg-3">
                    <fieldset>
                      <input type="time" name="Activity_Time" id="Activity_Time"  class="form-control" placeholder="เวลาที่จัดกิจกรรม" required>
                      <p>เวลาเริ่มที่จัดกิจกรรม</p>
                    </fieldset>
                  </div>
                  <div class="col-lg-3">
                    <fieldset>
                      <input type="time" name="Activity_TimeEnd" id="Activity_TimeEnd"  class="form-control" placeholder="เวลาที่จัดกิจกรรม" required>
                      <p>เวลาสิ้นสุด</p>
                    </fieldset>
                  </div>

                    <div class="col-lg-3">
                      <fieldset>
                        <input type="number" name="Activity_QTY" id="Activity_QTY" class="form-control" placeholder="จำนวนผู้เข้าร่วมกิจกรรม" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-9">
                      <fieldset>
                        <input type="file" name="Activity_Image[]" class="form-control" accept="image/*" multiple required />
                        <p>อัพโหลดรูปภาพกิจกรรมสูงสุด 10 ภาพ</p>
                      </fieldset>
                    </div>
                     <div class="col-lg-12">
                      <fieldset>
                            <select type="select" class="form-control" name="Activity_Job" required>
                              <option value="" selected disabled>โปรดเลือกรายการ</option>
                              <option value="บุคคลทั่วไป">บุคคลทั่วไป</option>
                              <option value="นักเรียน">นักเรียน</option>
                              <option value="นักศึกษา">นักศึกษา</option>
                              <option value="พนักงานบริษัท">พนักงานบริษัท</option>
                              <option value="เจ้าหน้าที่รัฐ">เจ้าหน้าที่รัฐ</option>
                            </select>
                        <p align="left">ประเภทผู้เข้าร่วมกิจกรรม</p>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="Site_ID" class="form-control"  value="<?php echo $Login_Site; ?>"  readonly hidden>
                        <input type="text" name="Acc_ID" class="form-control"  value="<?php echo $Acc_ID; ?>" readonly hidden>
                        <button type="submit" name="Create_Activity" id="form-submit" class="main-button">สร้างกิจกรรม</button>
                      </fieldset>
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