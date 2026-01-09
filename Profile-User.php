<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_User/Head.php');  
 
  $Acc_RuleAccount = $Acc_Result['Acc_RuleAccount'];
  $ACC_RuleSite = $Acc_Result['ACC_RuleSite'];
  $Acc_RuleService = $Acc_Result['Acc_RuleService'];
  $Acc_RuleCallcenter = $Acc_Result['Acc_RuleCallcenter'];
  $Acc_Telephone = $Acc_Result['Acc-Telephone'];
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

  <!-- ***** Navbar Admin Start ***** -->
 <?php  include('asset_User/navbar.php');   ?>
  <!-- ***** Navbar Admin End ***** -->



  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">

              <div class="col-lg-12 align-self-center">
                    <div class="left-content show-up header-text wow fadeInTop" data-wow-duration="1s" data-wow-delay="1s">
                        <h1 align="center">Profile User</h1>
                        <p align="center">ข้อมูลส่วนตัวของผู้ดูแลระบบ</p>
                        <form action="Processing.php" method="POST" enctype="multipart/form-data" style="text-align:center;">
                          <label for="profile_img">
                            <img src="<?php echo !empty($Acc_Result['Acc_ImgProfile']) ? $Acc_Result['Acc_ImgProfile'] : 'image/User_Blank.png'; ?>" style="width:100px; height:100px; object-fit:cover; border-radius:50%; cursor:pointer;" id="profilePreview">
                          </label>
                          <input type="text" name="ACCID" value="<?php echo $Acc_ID; ?>" hidden>
 
                          <input type="file" name="profile_img" id="profile_img" accept="image/*" style="display:none;" onchange="previewProfileImg(event)">
                          <br>
                          <button type="submit" class="btn btn-primary btn-sm" name="upload_profile">เปลี่ยนรูปโปรไฟล์</button>
                        </form>
                        <script>
                        function previewProfileImg(event) {
                          var reader = new FileReader();
                          reader.onload = function(){
                            var img = document.getElementById('profilePreview');
                            img.src = reader.result;
                            img.style.borderRadius = '50%'; // Ensure circle preview
                            img.style.objectFit = 'cover';  // Maintain aspect ratio
                          }
                          reader.readAsDataURL(event.target.files[0]);
                        }
                        </script>
                    </div>
              </div>



            <div class="col-lg-12 align-self-top">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <form action="Processing.php" method="POST">
                <div class="row">
                  <div class="col-12">
                    <hr>
                  </div>
                    <div class="col-lg-6">
                        <label for="Acc_Fullname">ชื่อ - นามสกุล</label>
                        <input type="text" class="form-control" id="Acc_Fullname"  name="Acc_Fullname" value="<?php echo $Login_Name; ?>" required>
                        </div>
                        <div class="col-lg-6">
                        <label for="Acc_Telephone">เบอร์ติดต่อ</label>
                        <input type="text" class="form-control" id="Acc_Telephone"  name="Acc_Telephone" value="<?php echo $Acc_Telephone; ?>" required>
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_Username">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" id="Acc_Username" disabled name="Acc_Username" value="<?php echo $Login_User; ?>" required>
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_Password">รหัสผ่านเดิม</label>
                        <input type="password" class="form-control"  name="Old_Pass" value="" required>
                        </div>
                         <div class="col-lg-6">
                        <label for="Acc_Password">รหัสผ่านใหม่</label>
                        <input type="password" class="form-control"  name="New_Pass" value="" required>
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_Rule">ยืนยันรหัสผ่าน</label>
                        <input type="password" class="form-control"  name="CF_Pass" value="" required>
                          </div>


                    <div class="col-lg-12">
                       
                          <hr>
                            <br>
                                <div class="col-12" align="right">
                                    <input type="text" class="form-control" id="Acc_ID" hidden name="Acc_ID" value="<?php echo $Acc_ID; ?>" required>
                                    <button type="submit" class="btn btn-info " <?php if($Acc_RuleProfile == 'View'){ echo 'disabled'; } ?>  name="Edit_ProfileUser"> Save </button>
                                </div>

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