<!DOCTYPE html>
<html lang="en">

 <?php  include('asset_User/Head.php');   ?>

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



  




<!-- ***** Modal ***** -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color:rgba(24, 39, 47, 0.97);">
     
       <div class="modal-body" style="color:white">
              <div class="row">
                <form action="Processing.php" method="POST">
                    <div Class="col-12">
                        <h1 align="center"><b>BDE-SYSTEM</b></h1>
                        <hr>
                      
                        <h2>User</h2>
                          <input type="text" class="form-control" name="Username" required value="">
                          <br>
                           
                          <h2>Password</h2>
                          <input type="password" class="form-control" name="Password" required value="">
                          <br>
                          <hr>
                    </div>
                    <div class="col-12" align="center">
                      <button type="submit" name="Login" class="form-control btn btn-dark" >Login</button>
                    </div>
                    <br>
                    </form>
              </div>
      </div>
     
    </div>
  </div>
</div>
<!-- ***** End Modal ***** -->

 
  
  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Activities News</h6>
            <h4>Activity For <em>IT-Man</em></h4>
                     <div class="border-first-button scroll-to-section">
                        <a href="Activity-Create.php"><i class="fa fa-plus"></i> สร้างกิจกรรมใหม่</a>
                        <a href="User-Activities.php"><i class="fa fa-pencil"></i>จัดการกิจกรรม</a>
                    </div>
            
          </div>

        </div>

      <?php 
          $GetActivity_1 = "SELECT * FROM activity_tb where Site_ID = '$Login_Site'  ORDER BY ACT_ID DESC limit 1";
          $ResultGetActivity_1 = mysqli_query($conn, $GetActivity_1);
          $row_1 = mysqli_fetch_array($ResultGetActivity_1);
          $ACTID_1 = $row_1['ACT_ID'];
          $ACTName_1 = $row_1['ACT_Name'];
          $ACTTarget_1 = $row_1['ACT_Target'];
          $ACTObject_1 = $row_1['ACT_Object'];
          $ACTRemark_1 = $row_1['ACT_Remark'];
          $ACTDateActivity_1 = $row_1['ACT_DateActivity'];
          $AccID_1 = $row_1['Acc_ID'];
          

                        $GetAccount_1 = "SELECT * FROM account_tb Where Acc_ID = '$AccID_1'";
                        $ResultGetAccount_1 = mysqli_query($conn, $GetAccount_1);
                        $rowAccount_1 = mysqli_fetch_array($ResultGetAccount_1);
                        $AccFullname_1 = $rowAccount_1['Acc_Fullname'];
                        $Acc_ImgProfile_1 = $rowAccount_1['Acc_ImgProfile'];



          $ACT_Image_1 = $row_1['ACT_Image'];
          $GetImage_1 = explode(",",$ACT_Image_1);
          $ACT_Image_1_0 = $GetImage_1[0];
          $ACT_Image_1_1 = $GetImage_1[1];
          $ACT_Image_1_2 = $GetImage_1[2];
          $ACT_Image_1_3 = $GetImage_1[3];
          $ACT_Image_1_4 = $GetImage_1[4];
          $ACT_Image_1_5 = $GetImage_1[5];
          $ACT_Image_1_6 = $GetImage_1[6];
          $ACT_Image_1_7 = $GetImage_1[7];
          $ACT_Image_1_8 = $GetImage_1[8];
          $ACT_Image_1_9 = $GetImage_1[9];

      ?>

        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <?php
              // Display up to 10 images as a simple slider (with navigation)
              $images_1 = [$ACT_Image_1_0, $ACT_Image_1_1, $ACT_Image_1_2, $ACT_Image_1_3, $ACT_Image_1_4, $ACT_Image_1_5, $ACT_Image_1_6, $ACT_Image_1_7, $ACT_Image_1_8, $ACT_Image_1_9];
              $validImages_1 = array_filter($images_1, function($img_1) { return !empty($img_1); });
              if (count($validImages_1) > 0) {
                echo '<div id="activitySlider" class="carousel slide" data-ride="carousel">';
                echo '<div class="carousel-inner">';
                $active_1 = 'active';
                foreach ($validImages_1 as $img_1) {
                  echo '<div class="carousel-item '.$active_1.'">';
                  echo '<img src="'.htmlspecialchars($img_1).'" class="d-block w-100" alt="">';
                  echo '</div>';
                  $active_1 = '';
                }
                echo '</div>';
                if (count($validImages_1) > 1) {
                  echo '<a class="carousel-control-prev" href="#activitySlider" role="button" data-slide="prev">';
                  echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                  echo '<span class="sr-only">Previous</span>';
                  echo '</a>';
                  echo '<a class="carousel-control-next" href="#activitySlider" role="button" data-slide="next">';
                  echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                  echo '<span class="sr-only">Next</span>';
                  echo '</a>';
                }
                echo '</div>';
              } else {
                echo '<a href="#"><img src="assets/images/blog-post-01.jpg" alt=""></a>';
              }
              ?>
            </div>
            <div class="down-content">
              <span class="category">กิจกรรม ล่าสุด</span>
              <span class="date"><?php echo $ACTDateActivity_1 ?></span>
              <a href="#"><h4><?php echo $ACTName_1 ?></h4></a>
              <p><?php echo $ACTRemark_1 ?></p>
              <span class="author"><img src="<?php echo $Acc_ImgProfile_1 ?>" alt="">โดย: <?php echo $AccFullname_1 ?></span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          </div>
        </div>

      <?php 
          $GetActivity_2 = "SELECT * FROM activity_tb where Site_ID = '$Login_Site' ORDER BY ACT_ID DESC limit 1,1";
          $ResultGetActivity_2 = mysqli_query($conn, $GetActivity_2);
          $row_2 = mysqli_fetch_array($ResultGetActivity_2);
          $ACTID_2 = $row_2['ACT_ID'];
          $ACTName_2 = $row_2['ACT_Name'];
          $ACTTarget_2 = $row_2['ACT_Target'];
          $ACTObject_2 = $row_2['ACT_Object'];
          $ACTRemark_2 = $row_2['ACT_Remark'];
          $ACTDateActivity_2 = $row_2['ACT_DateActivity'];
          $AccID_2 = $row_2['Acc_ID'];

                        $GetAccount_2 = "SELECT Acc_Fullname,Acc_ImgProfile FROM account_tb Where Acc_ID = '$AccID_2'";
                        $ResultGetAccount_2 = mysqli_query($conn, $GetAccount_2);
                        $rowAccount_2 = mysqli_fetch_array($ResultGetAccount_2);
                        $AccFullname_2 = $rowAccount_2['Acc_Fullname'];
                        $Acc_ImgProfile_2 = $rowAccount_2['Acc_ImgProfile'];


          $ACT_Image_2 = $row_2['ACT_Image'];
          $GetImage_2 = explode(",",$ACT_Image_2);
          $ACT_Image_2_0 = $GetImage_2[0];
          $ACT_Image_2_1 = $GetImage_2[1];
          $ACT_Image_2_2 = $GetImage_2[2];
          $ACT_Image_2_3 = $GetImage_2[3];
          $ACT_Image_2_4 = $GetImage_2[4];
          $ACT_Image_2_5 = $GetImage_2[5];
          $ACT_Image_2_6 = $GetImage_2[6];
          $ACT_Image_2_7 = $GetImage_2[7];
          $ACT_Image_2_8 = $GetImage_2[8];
          $ACT_Image_2_9 = $GetImage_2[9];

      ?>



        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">

                  <?php 
                  if(!empty($ACT_Image_2_0)) { echo  '<a href="#"><img src="<?php echo $ACT_Image_2_0 ?>" style="width:230px;" alt="" /></a>';} 
                  else {echo '<a href="#"><img src="assets/images/blog-post-01.jpg" style="width:230px;" alt=""></a>';}
                  ?>
                  </div>
                  <div class="right-content">
                  <?php 
                    if(!empty($ACT_Image_2_0)) { echo '
                    <span class="category">กิจกรรม</span>
                    <span class="date"><?php echo $ACTDateActivity_2 ?> </span><br>
                    <a href="#"><h6><?php echo $ACTName_2 ?></h6></a>
                    <span class="author">
                      <img src="<?php echo $Acc_ImgProfile_2 ?>" alt="" style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                      โดย: <?php echo $AccFullname_2 ?>
                    </span>';
                  } 
                    else {
                      echo '
                      <span class="category">กิจกรรม</span>
                    <span class="date">ยังไม่มีการสร้างกิจกรรม</span><br><br>
                    <a href="#"><h6>ยังไม่มีการสร้างกิจกรรม</h6></a>';
                    }
                    ?>

                  </div>
                </div>
              </div>
              <br>



 <?php 
          $GetActivity_3 = "SELECT * FROM activity_tb where Site_ID = '$Login_Site' ORDER BY ACT_ID DESC limit 1,1";
          $ResultGetActivity_3 = mysqli_query($conn, $GetActivity_3);
          $row_3 = mysqli_fetch_array($ResultGetActivity_3);
          $ACTID_3 = $row_3['ACT_ID'];
          $ACTName_3 = $row_3['ACT_Name'];
          $ACTTarget_3 = $row_3['ACT_Target'];
          $ACTObject_3 = $row_3['ACT_Object'];
          $ACTRemark_3 = $row_3['ACT_Remark'];
          $ACTDateActivity_3 = $row_3['ACT_DateActivity'];
          $AccID_3 = $row_3['Acc_ID'];

                        $GetAccount_3 = "SELECT Acc_Fullname,Acc_ImgProfile FROM account_tb Where Acc_ID = '$AccID_3'";
                        $ResultGetAccount_3 = mysqli_query($conn, $GetAccount_3);
                        $rowAccount_3 = mysqli_fetch_array($ResultGetAccount_3);
                        $AccFullname_3 = $rowAccount_3['Acc_Fullname'];
                        $Acc_ImgProfile_3 = $rowAccount_3['Acc_ImgProfile'];


          $ACT_Image_3 = $row_3['ACT_Image'];
          $GetImage_3 = explode(",",$ACT_Image_3);
          $ACT_Image_3_0 = $GetImage_3[0];
          $ACT_Image_3_1 = $GetImage_3[1];
          $ACT_Image_3_2 = $GetImage_3[2];
          $ACT_Image_3_3 = $GetImage_3[3];
          $ACT_Image_3_4 = $GetImage_3[4];
          $ACT_Image_3_5 = $GetImage_3[5];
          $ACT_Image_3_6 = $GetImage_3[6];
          $ACT_Image_3_7 = $GetImage_3[7];
          $ACT_Image_3_8 = $GetImage_3[8];
          $ACT_Image_3_9 = $GetImage_3[9];

      ?>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="<?php echo $ACT_Image_3_0 ?>" style="width:230px;" alt="" /></a>

                  </div>
                  <div class="right-content">
                    <span class="category">กิจกรรม</span>
                    <span class="date"><?php echo $ACTDateActivity_3 ?></span>
                    <a href="#"><h6><?php echo $ACTName_2 ?></h6></a>
                    <span class="author">
                      <img src="<?php echo $Acc_ImgProfile_2 ?>" alt="" style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                      โดย: <?php echo $AccFullname_2 ?>
                    </span>
                  </div>
                </div>
              </div>
              




              
 <?php 
          $GetActivity_3 = "SELECT * FROM activity_tb where Site_ID = '$Login_Site' ORDER BY ACT_ID DESC limit 1,1";
          $ResultGetActivity_3 = mysqli_query($conn, $GetActivity_3);
          $row_3 = mysqli_fetch_array($ResultGetActivity_3);
          $ACTID_3 = $row_3['ACT_ID'];
          $ACTName_3 = $row_3['ACT_Name'];
          $ACTTarget_3 = $row_3['ACT_Target'];
          $ACTObject_3 = $row_3['ACT_Object'];
          $ACTRemark_3 = $row_3['ACT_Remark'];
          $ACTDateActivity_3 = $row_3['ACT_DateActivity'];
          $AccID_3 = $row_3['Acc_ID'];

                        $GetAccount_3 = "SELECT Acc_Fullname,Acc_ImgProfile FROM account_tb Where Acc_ID = '$AccID_3'";
                        $ResultGetAccount_3 = mysqli_query($conn, $GetAccount_3);
                        $rowAccount_3 = mysqli_fetch_array($ResultGetAccount_3);
                        $AccFullname_3 = $rowAccount_3['Acc_Fullname'];
                        $Acc_ImgProfile_3 = $rowAccount_3['Acc_ImgProfile'];


          $ACT_Image_3 = $row_3['ACT_Image'];
          $GetImage_3 = explode(",",$ACT_Image_3);
          $ACT_Image_3_0 = $GetImage_3[0];
          $ACT_Image_3_1 = $GetImage_3[1];
          $ACT_Image_3_2 = $GetImage_3[2];
          $ACT_Image_3_3 = $GetImage_3[3];
          $ACT_Image_3_4 = $GetImage_3[4];
          $ACT_Image_3_5 = $GetImage_3[5];
          $ACT_Image_3_6 = $GetImage_3[6];
          $ACT_Image_3_7 = $GetImage_3[7];
          $ACT_Image_3_8 = $GetImage_3[8];
          $ACT_Image_3_9 = $GetImage_3[9];

      ?>
      
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <br><br>
                  <div class="thumb">
                    <a href="#"><img src="<?php echo $ACT_Image_3_0 ?>" style="width:230px;" alt="" /></a>
                  </div>
                  <div class="right-content">
                    <span class="category">กิจกรรม</span>
                    <span class="date"><?php echo $ACTDateActivity_3 ?></span>
                    <a href="#"><h6><?php echo $ACTName_2 ?></h6></a>
                    <span class="author">
                      <img src="<?php echo $Acc_ImgProfile_2 ?>" alt="" style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                      โดย: <?php echo $AccFullname_2 ?>
                    </span>
                  </div>
                </div>
              </div>







                          
 <?php 
          $GetActivity_3 = "SELECT * FROM activity_tb where Site_ID = '$Login_Site' ORDER BY ACT_ID DESC limit 1,1";
          $ResultGetActivity_3 = mysqli_query($conn, $GetActivity_3);
          $row_3 = mysqli_fetch_array($ResultGetActivity_3);
          $ACTID_3 = $row_3['ACT_ID'];
          $ACTName_3 = $row_3['ACT_Name'];
          $ACTTarget_3 = $row_3['ACT_Target'];
          $ACTObject_3 = $row_3['ACT_Object'];
          $ACTRemark_3 = $row_3['ACT_Remark'];
          $ACTDateActivity_3 = $row_3['ACT_DateActivity'];
          $AccID_3 = $row_3['Acc_ID'];

                        $GetAccount_3 = "SELECT Acc_Fullname,Acc_ImgProfile FROM account_tb Where Acc_ID = '$AccID_3'";
                        $ResultGetAccount_3 = mysqli_query($conn, $GetAccount_3);
                        $rowAccount_3 = mysqli_fetch_array($ResultGetAccount_3);
                        $AccFullname_3 = $rowAccount_3['Acc_Fullname'];
                        $Acc_ImgProfile_3 = $rowAccount_3['Acc_ImgProfile'];


          $ACT_Image_3 = $row_3['ACT_Image'];
          $GetImage_3 = explode(",",$ACT_Image_3);
          $ACT_Image_3_0 = $GetImage_3[0];
          $ACT_Image_3_1 = $GetImage_3[1];
          $ACT_Image_3_2 = $GetImage_3[2];
          $ACT_Image_3_3 = $GetImage_3[3];
          $ACT_Image_3_4 = $GetImage_3[4];
          $ACT_Image_3_5 = $GetImage_3[5];
          $ACT_Image_3_6 = $GetImage_3[6];
          $ACT_Image_3_7 = $GetImage_3[7];
          $ACT_Image_3_8 = $GetImage_3[8];
          $ACT_Image_3_9 = $GetImage_3[9];

      ?>
      
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <br><br>
                  <div class="thumb">
                    
                    <a href="#"><img src="<?php echo $ACT_Image_3_0 ?>" style="width:230px;" alt="" /></a>
                  </div>
                  <div class="right-content">
                    <span class="category">กิจกรรม</span>
                    <span class="date"><?php echo $ACTDateActivity_3 ?></span>
                    <a href="#"><h6><?php echo $ACTName_2 ?></h6></a>
                    <span class="author">
                      <img src="<?php echo $Acc_ImgProfile_2 ?>" alt="" style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                      โดย: <?php echo $AccFullname_2 ?>
                    </span>
                  </div>
                </div>
              </div>














            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  




<?php 
include('asset_User/Footer.php');
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