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
                    <h6>Create Account</h6>
                    <h4><em><?php echo $Monthnow ?></em></h4>
                    <div class="line-dec"></div>
                  </div>
                  <br>
                  <hr>
                  <div class="col-12">
                    
                    <h3>ข้อมูล Account</h3>
                  </div>
                  <div class="col-9">
                     <div class="mb-3">
                      <label  class="form-label">ชื่อ - นามสกุล</label>
                      <input type="text" name="Fullname" class="form-control" required>
                    </div>
                  </div>
                   <div class="col-3">
                     <div class="mb-3">
                      <label  class="form-label">เพศ</label>
                      <select class="form-select" name="Gender" required>
                            <option value="">-- เลือกเพศ --</option>
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                            <option value="ไม่ระบุ">ไม่ระบุ</option>
                          </select>
                    </div>
                  </div>
                  <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">เบอร์โทรศัพท์</label>
                      <input type="text" name="Telephone" class="form-control" required>
                    </div>
                  </div>
                   <div class="col-6">
                     <div class="mb-3">
                      <label  class="form-label">Email Address</label>
                      <input type="text" name="Email" class="form-control" required placeholder="name@example.com">
                    </div>
                  </div>
                   <div class="col-6">
                      <div class="mb-3">
                      <label  class="form-label">Line-ID</label>
                      <input type="text" name="Line" class="form-control" required >
                    </div>
                  </div>
                   <div class="col-6">
                       <div class="mb-3">
                          <label  class="form-label">Username</label>
                          <input type="text" name="Username" class="form-control" required >
                        </div>
                     
                  </div>
                   <div class="col-6">
                       <div class="mb-3">
                          <label  class="form-label">Password</label>
                          <input type="password" name="Password" class="form-control" required >
                        </div>
                  </div>
                   <div class="col-6">
                       <div class="mb-3">
                          <label  class="form-label">Confirm Password</label>
                          <input type="password" name="CFPassword"  class="form-control" required >
                        </div>
                     
                  </div>
                  <br>
                  <hr>
                  <div class="col-12">
                  <br>  
                  <h3>สิทธิ์การใช้งาน</h3>
                    <div class="col-lg-12">
                     <label for="Acc_Rule"><h4>จัดการผู้ใช้งานระบบ</h4></label>
                        <div class="row">
                            <div class="col-lg-4">
                            <input type="radio" id="Account_Rule" name="Account_Rule" value="Allow" required> จัดการทั้งหมด
                            </div>
                            <div class="col-lg-4">
                            <input type="radio" id="Account_Rule" name="Account_Rule" value="View"> ดูได้อย่างเดียว
                            </div>
                            <div class="col-lg-4">
                            <input type="radio" id="Account_Rule" name="Account_Rule" value="Block"> ปิดการใช้งาน
                            </div>
                        </div>
                      </div>
                      <hr>
                        <br>
                    <div class="col-lg-12">
                        <label for="Acc_Rule"><h4>จัดการข้อมูลของพื้นที่จัดตั้งศูนย์</h4></label>
                            <div class="row">
                                <div class="col-lg-4">
                                <input type="radio" id="Site_Rule" name="Site_Rule" value="Allow" required> จัดการทั้งหมด
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Site_Rule" name="Site_Rule" value="View"> ดูได้อย่างเดียว
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Site_Rule" name="Site_Rule" value="Block"> ปิดการใช้งาน
                                </div>
                            </div>
                        </div>
                        <hr>
                    <div class="col-lg-12">
                        <label for="Acc_Rule"><h4>จัดการข้อมูลการให้บริการ</h4></label>
                            <div class="row">
                                <div class="col-lg-4">
                                <input type="radio" id="Person_Rule" name="Person_Rule" value="Allow" required> จัดการทั้งหมด
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Person_Rule" name="Person_Rule" value="View"> ดูได้อย่างเดียว
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Person_Rule" name="Person_Rule" value="Block"> ปิดการใช้งาน
                                </div>
                            </div>
                        </div>
                        <hr>
                    <div class="col-lg-12">
                        <label for="Acc_Rule"><h4>จัดการข้อมูลการแจ้งซ่อม</h4></label>
                            <div class="row">
                                <div class="col-lg-4">
                                <input type="radio" id="Call_Rule" name="Call_Rule" value="Allow" required> จัดการทั้งหมด
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Call_Rule" name="Call_Rule" value="View"> ดูได้อย่างเดียว
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Call_Rule" name="Call_Rule" value="Block"> ปิดการใช้งาน
                                </div>
                            </div>
                        </div>
                    <hr>
                     <div class="col-lg-12">
                        <label for="Acc_Rule"><h4>จัดการข้อมูล Profile</h4></label>
                            <div class="row">
                                <div class="col-lg-4">
                                <input type="radio" id="Call_Profile" name="Call_Profile" value="Allow" required> จัดการทั้งหมด
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Call_Profile" name="Call_Profile" value="View"> ดูได้อย่างเดียว
                                </div>
                                <div class="col-lg-4">
                                <input type="radio" id="Call_Profile" name="Call_Profile" value="Block"> ปิดการใช้งาน
                                </div>
                            </div>
                        </div>
                    <hr>
              

                  </div>
                  
              
                
                   <!-- <div class="col-12" align="right"><hr></div> -->
                   <div class="col-12" align="right">
                       <button type="submit" class="btn btn-info " <?php if($Acc_RuleAccount == 'View'){ echo 'disabled'; } ?>  name="Create_AccountAdmin"> Create Account</button>
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