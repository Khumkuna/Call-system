<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_Admin/Head.php');  

if(isset($_POST["Select_Edit"]))
 {
  $_SESSION['ACCID'] = $_POST['AccID'];
 }
  $ACCID = $_SESSION['ACCID'];

  $Select_Acc=mysqli_query($conn, "SELECT * FROM Account_tb WHERE Acc_ID='$ACCID'");
  $Acc_Select=mysqli_fetch_array($Select_Acc);
  $Select_AccID = $Acc_Select['Acc_ID'];
  $Select_Name = $Acc_Select['Acc_Fullname'];
  $Select_User = $Acc_Select['Acc_Username'];
  $Select_Email = $Acc_Select['Acc-Email'];
  $Select_Telephone = $Acc_Select['Acc-Telephone'];
  $Select_Line = $Acc_Select['Acc_Line'];
  $Select_Password = $Acc_Select['Acc_Password'];
  $Select_Rule = $Acc_Select['Acc_Rule'];
  $Select_RuleAccount = $Acc_Select['Acc_RuleAccount'];
  $Select_RuleSite = $Acc_Select['ACC_RuleSite'];
  $Select_RuleService = $Acc_Select['Acc_RuleService'];
  $Select_RuleCallcenter = $Acc_Select['Acc_RuleCallcenter'];
  $Select_RuleProfile = $Acc_Select['Acc_RuleProfile'];

  $Select_DateUpdate = $Acc_Select['Acc_Update'];


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
 <?php  include('asset_Admin/navbar.php');   ?>
  <!-- ***** Navbar Admin End ***** -->



  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">

              <div class="col-lg-12 align-self-center">
                    <div class="left-content show-up header-text wow fadeInTop" data-wow-duration="1s" data-wow-delay="1s">
                        <h1 align="center">Edit Account</h1>
                        <p align="center">ข้อมูลของผู้ใช้ระบบ</p>
                         <a href=""><img src="image/User_Blank.png" style="width:100px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a><br>
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
                        <input type="text" class="form-control" id="Acc_Fullname"  name="Acc_Fullname" value="<?php echo $Select_Name; ?>" required>
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_Username">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" id="Acc_Username" disabled name="Acc_Username" value="<?php echo $Select_User; ?>" required>
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_Site">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="Acc_Site" name="Telephone" value="<?php echo $Select_Telephone; ?>" required>
                        </div>
                    <div class="col-lg-6">
                         <label  class="form-label">Email Address</label>
                          <input type="text" name="Email" class="form-control" required placeholder="name@example.com" value="<?php echo $Select_Email; ?>" >
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_LineID">Line ID</label>
                        <input type="text" class="form-control" id="Acc_LineID" name="Line_ID" value="<?php echo $Select_Line ?>" required>
                        </div>

                         <div class="col-lg-6">
                        <label for="Acc_Password">รหัสผ่านใหม่</label>
                        <input type="password" class="form-control"  name="New_Pass" value="" required>
                        </div>
                    <div class="col-lg-6">
                        <label for="Acc_Status">สถานะ</label>
                        <select class="form-select" id="Acc_Status" name="Acc_Status" required>
                          <option value="Actived" <?php echo ($Select_Rule == 'Actived') ? 'selected' : ''; ?>>Actived</option>
                          <option value="Holding" <?php echo ($Select_Rule == 'Holding') ? 'selected' : ''; ?>>Holding</option>
                          <option value="Expired" <?php echo ($Select_Rule == 'Expired') ? 'selected' : ''; ?>>Expired</option>
                        </select>
                      </div>

                       <div class="col-lg-6">
                        <label for="Acc_Status">Last Update</label>
                          <input type="text" class="form-control" disabled  name="New_Pass" value="<?php echo $Select_DateUpdate;?>" required>
                      </div>
                        <br>
                        </div>

                         
                        <hr>
                        <?php if($Select_RuleProfile == 'Allow'){ ?>
                        <h3>สิทธิ์การใช้งาน</h3>
                        <div class="col-lg-12">
                         <label for="Acc_Rule"><h4>จัดการผู้ใช้งานระบบ</h4></label>
                            <div class="row">
                                <div class="col-lg-4">
                                <input type="radio" id="Account_Rule" name="Account_Rule" value="Allow" <?php echo  ($Select_RuleAccount == 'Allow') ? 'checked' : ''; ?>> จัดการทั้งหมด
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Account_Rule" name="Account_Rule" value="View" <?php echo ($Select_RuleAccount == 'View') ? 'checked' : ''; ?>> ดูได้อย่างเดียว
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Account_Rule" name="Account_Rule" value="Block" <?php echo ($Select_RuleAccount == 'Block') ? 'checked' : ''; ?>> ปิดการใช้งาน
                                </div>
                                </div>
                          </div>
                          <hr>
                            <br>

                        <div class="col-lg-12">
                            <label for="Acc_Rule"><h4>จัดการข้อมูลของพื้นที่จัดตั้งศูนย์</h4></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                    <input type="radio" id="Site_Rule" name="Site_Rule" value="Allow" <?php echo ($Select_RuleSite == 'Allow') ? 'checked' : ''; ?>> จัดการทั้งหมด
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Site_Rule" name="Site_Rule" value="View" <?php echo ($Select_RuleSite == 'View') ? 'checked' : ''; ?>> ดูได้อย่างเดียว
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Site_Rule" name="Site_Rule" value="Block" <?php echo ($Select_RuleSite == 'Block') ? 'checked' : ''; ?>> ปิดการใช้งาน
                                    </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                          <div class="col-lg-12">
                            <label for="Acc_Rule"><h4>จัดการข้อมูลการให้บริการ</h4></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                    <input type="radio" id="Person_Rule" name="Person_Rule" value="Allow" <?php echo ($Select_RuleService == 'Allow') ? 'checked' : ''; ?>> จัดการทั้งหมด
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Person_Rule" name="Person_Rule" value="View" <?php echo ($Select_RuleService == 'View') ? 'checked' : ''; ?>> ดูได้อย่างเดียว
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Person_Rule" name="Person_Rule" value="Block" <?php echo ($Select_RuleService == 'Block') ? 'checked' : ''; ?>> ปิดการใช้งาน
                                    </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                            <div class="col-lg-12">
                            <label for="Acc_Rule"><h4>จัดการข้อมูลการแจ้งซ่อม</h4></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                    <input type="radio" id="Call_Rule" name="Call_Rule" value="Allow" <?php echo ($Select_RuleCallcenter == 'Allow') ? 'checked' : ''; ?>> จัดการทั้งหมด
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Call_Rule" name="Call_Rule" value="View" <?php echo ($Select_RuleCallcenter == 'View') ? 'checked' : ''; ?>> ดูได้อย่างเดียว
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Call_Rule" name="Call_Rule" value="Block" <?php echo ($Select_RuleCallcenter == 'Block') ? 'checked' : ''; ?>> ปิดการใช้งาน
                                    </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                            <div class="col-lg-12">
                            <label for="Acc_Rule"><h4>จัดการข้อมูล Profile</h4></label>
                                <div class="row">
                                    <div class="col-lg-4">
                                    <input type="radio" id="Profile_Rule" name="Profile_Rule" value="Allow" <?php echo ($Select_RuleProfile == 'Allow') ? 'checked' : ''; ?>> จัดการทั้งหมด
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Profile_Rule" name="Profile_Rule" value="View" <?php echo ($Select_RuleProfile == 'View') ? 'checked' : ''; ?>> ดูได้อย่างเดียว
                                    </div>
                                    <div class="col-lg-4">
                                    <input type="radio" id="Profile_Rule" name="Profile_Rule" value="Block" <?php echo ($Select_RuleProfile == 'Block') ? 'checked' : ''; ?>> ปิดการใช้งาน
                                    </div>
                                    </div>
                                </div>
                                <hr>
                                <br>
                                <?php } ?>

                                <div class="col-12" align="right">
                                    <input type="text" class="form-control" id="Acc_ID" hidden name="AccID" value="<?php echo $Select_AccID; ?>" required>
                                    <button type="submit" class="btn btn-info " <?php if($Acc_RuleProfile == 'View'){ echo 'disabled'; } ?>  name="Edit_Select_Profile"> Save </button>
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