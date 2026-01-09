<?php 
include('Connect.php');
include 'Navbar/Head.html';


	if(isset($_POST['lat']) && isset($_POST['lng'])){
		$Get_Lat = $_POST['lat'];
		$Get_Lng = $_POST['lng'];
	
	}
	else
	{ ?><form id="getGeo" action="index.php" method="POST">
		<input hidden ="Yes" id="lat" name="lat">
		<input hidden ="Yes" id="lng" name="lng">
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
					<script >
									if (navigator.geolocation) 
									{
										navigator.geolocation.getCurrentPosition(showPosition);
									} 

									function showPosition(position)
									{
										document.getElementById("lat").value = position.coords.latitude;
										document.getElementById("lng").value = position.coords.longitude;
										document.getElementById("getGeo").submit();
									}
					</script>	
	<?php }

  $SQLSite = "Select * from site_tb";
      $querySite=mysqli_query($conn,$SQLSite);
      while ($data_Site=mysqli_fetch_array($querySite)) 
      {	

        $SiLatitude = $data_Site['Site_Latitude'];
        $SiLongitude = $data_Site['Site_Longitude'];

        $Get_LatMin = $SiLatitude-0.001;
        $Get_LatMax = $SiLatitude+0.001;
        $Get_LngMin = $SiLongitude-0.001;
        $Get_LngMax = $SiLongitude+0.001;

        $AddLatLong = $Get_LatMin."-".$Get_LatMax."-".$Get_LngMin."-".$Get_LngMax;

        $latLong= explode("-", $AddLatLong);
        $latMin = floatval($latLong[0]);
        $latMax = floatval($latLong[1]);
        $longMin = floatval($latLong[2]);
        $longMax = floatval($latLong[3]);

        if($Get_Lat<=$latMax && $Get_Lat>=$latMin && $Get_Lng<=$longMax && $Get_Lng>=$longMin)
        {
          $N++;
          $Site_ID = $data_Site['Site_ID'];
        }
      }

?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      

    <title>BDE-System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-digimedia-v4.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="icon" type="image/png" href="assets/images/logo-DE.png"/>
    <!-- Favicon -->
    <link href="assets/images/logo-DE.png" rel="icon">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<!--

TemplateMo 568 DigiMedia

https://templatemo.com/tm-568-digimedia

-->
  </head>
<style>
  .circle-button {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background:rgba(2, 112, 39, 1);
    color: #fff;
    border: none;
    font-size: 1.5rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s;
    cursor: pointer;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
  }
  .circle-button:hover {
    background:rgba(1, 51, 34, 1);
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

  

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo-DE.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#blog">Activity</a></li>
              <li class="scroll-to-section"><a href="#scan">เข้าใช้บริการ</a></li>
              <li class="scroll-to-section"><a href="#contact">Contract</a></li>
              <li class="scroll-to-section"><a data-toggle="modal" data-target="#exampleModalCenter">Login</a></li>
              <li class="scroll-to-section"><a></a></li>
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->



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





  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- <h6>Digital Vision</h6> -->

                    <!-- <input type="text" name="digital_vision" value="<?php echo $Get_Lat.','.$Get_Lng; ?>" >  -->

                    <h2>Digital Vision</h2>
                    <p>To drive the economy and become a digital society that could Improves the standard of living and enhancing the abilities of Thai citizens to be able to complete in the international world.</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#contact">Free Quote</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  
  
  <div id="blog" class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="section-heading">
            <h6>Recent News</h6>
            <h4>Activity For <em>IT-Man</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-post">
            <div class="thumb">
              <a href="#"><img src="assets/images/blog-post-01.jpg" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">SEO Analysis</span>
              <span class="date">03 August 2021</span>
              <a href="#"><h4>Lorem Ipsum Dolor Sit Amet, Consectetur Adelore
                Eiusmod Tempor Incididunt</h4></a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers itii eiumod deis tempor incididunt ut labore.</p>
              <span class="author"><img src="assets/images/author-post.jpg" alt="">By: Andrea Mentuzi</span>
              <div class="border-first-button"><a href="#">Discover More</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="blog-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-02.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-03.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="post-item last-post-item">
                  <div class="thumb">
                    <a href="#"><img src="assets/images/blog-post-04.jpg" alt=""></a>
                  </div>
                  <div class="right-content">
                    <span class="category">SEO Analysis</span>
                    <span class="date">24 September 2021</span>
                    <a href="#"><h4>Lorem Ipsum Dolor Sit Amei Eiusmod Tempor</h4></a>
                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  


  <div id="scan" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>บันทึกเข้าใช้ <em>บริการ</em></h4>
            <div class="line-dec"></div>

          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="scan" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec.png" alt="">
                </div>
              </div>
            </div>
              <div class="row" align="center">
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                          <p style="color:#333; margin-top:10px;"><h5>สแกน QR เพื่อเข้าใช้บริการ</h5></p>
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=https://call-system.svoa.co.th" alt="QR Code" style="width: 100%; max-width: 250px;">
                          </a>
                          
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.1s">
                          <br>
                        <!-- Button to open modal -->
                        <button type="button" class="circle-button" data-toggle="modal" data-target="#personModal">
                          เข้าใช้บริการแบบบุคคล <br> (ไม่มี ThaiD)
                             
                        </button>

                        

                      </div>



                    </div>
                    <div class="line-dec"></div>
                    <div class="col-lg-12">
                        <div class="right-image wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                          <br>
                          <p style="color:#333; margin-top:10px;"><h5>หรือเข้าใช้บริการแบบ ThaiD</h5></p>
                        <div class="right-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s">
                             <a href="#"><img src="image/ThaiD_Logo.png" style="width:90px;"></a>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>





  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>Contact Us</h6>
            <h4>Get In Touch With Us <em>Now</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?width=600&height=400&hl=en&q=ms%20siam%20tower&t=&z=14&ie=UTF8&iwloc=B&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">010-020-0340</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">our@email.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">123 Rio de Janeiro</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
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
      

?>
	

   <!-- ***** Modal ***** -->
      <div class="modal fade" id="personModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(24, 39, 47, 0.97);">
            <form action="Processing.php" method="POST">
            <div class="modal-body" style="color:white">
                  <h4 align="center"><b>เก็บข้อมูลผู้เข้าใช้บริการ</b></h4>
                  <hr>
                          <h6>ชื่อศูนย์ดิจิทัลชุมชน</h6>
                        <div class="row">
                          <div class="col-lg-12">
                              <?php 
                              if($Site_ID == "")
                              {
                              ?>
                              <select class="form-control" name="SiteName" required>
                                <option value="" selected disabled>กรุณาเลือกศูนย์ดิจิทัลชุมชน</option>
                                <?php
                                  $SQLSite = "Select * from site_tb";
                                  $querySite=mysqli_query($conn,$SQLSite);
                                  while ($data_Site=mysqli_fetch_array($querySite)) 
                                  {	
                                    $Site_ID = $data_Site['Site_ID'];
                                    $Site_Name = $data_Site['Site_Name'];
                                    echo "<option value='$Site_ID'>($Site_ID)-$Site_Name</option>";
                                  }
                                ?>

                              <?php
                              }
                              else
                              { ?>
                                  <input type="" class="form-control" name="SiteName" value="<?php echo $Site_ID; ?>">
                              <?php
                              }
                              ?>
                              </select>
                              <br>
                          </div>
                        </div>
                        <div class="row">
                          <br>
                          <div class="col-lg-6">
                            <h6>ชื่อ</h6>
                            <input type="text" class="form-control" name="PBS_Name" required value="">
                          </div>
                          <div class="col-lg-6">
                            <h6>นามสกุล</h6>
                            <input type="text" class="form-control" name="PBS_LastName" required value="">
                            <br>
                          </div>
                          
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <h6>เบอร์ติดต่อ</h6>
                            <input type="text" class="form-control" name="PBS_Tel" required value="">
                            <br>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <h6>ประเภทผู้เข้าใช้บริการ</h6>
                            <select class="form-control" name="PBS_Type" required>
                              <option value="" selected disabled>โปรดเลือกรายการ</option>
                              <option value="บุคคลทั่วไป">บุคคลทั่วไป</option>
                              <option value="นักเรียน">นักเรียน</option>
                              <option value="นักศึกษา">นักศึกษา</option>
                              <option value="พนักงานบริษัท">พนักงานบริษัท</option>
                              <option value="เจ้าหน้าที่รัฐ">เจ้าหน้าที่รัฐ</option>
                            </select>
                            <br>
                          </div>
                           <div class="col-lg-6">
                            <h6>เพศ</h6>
                            <select class="form-control" name="PBS_Gender" required>
                              <option value="" selected disabled>กรุณาเลือกเพศ</option>
                              <option value="ชาย">ชาย</option>
                              <option value="หญิง">หญิง</option>
                              <option value="ไม่ระบุ">ไม่ระบุ</option>
                            </select>
                            <br>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <h6>ประเภทความพิการ</h6>
                            <input type="checkbox" id="hasDisability" name="PBS_Disability" value="มี" onchange="toggleDisabilityType()"> มี
                            <select class="form-control mt-2" id="disabilityType" name="PBS_Disability" style="display:none;">
                              <option value="" selected disabled>เลือกประเภทความพิการ</option>
                              <option value="ทางการเห็น">ทางการเห็น</option>
                              <option value="ทางการได้ยิน">ทางการได้ยิน</option>
                              <option value="ทางการเคลื่อนไหว">ทางการเคลื่อนไหว</option>
                              <option value="ทางสติปัญญา">ทางสติปัญญา</option>
                              <option value="ทางจิตใจ">ทางจิตใจ</option>
                              <option value="ทางการเรียนรู้">ทางการเรียนรู้</option>
                              <option value="ออทิสติก">ออทิสติก</option>
                            </select>
                            <script>
                              function toggleDisabilityType() {
                              var cb = document.getElementById('hasDisability');
                              var dd = document.getElementById('disabilityType');
                              dd.style.display = cb.checked ? 'block' : 'none';
                              }
                            </script>
                            <br>
                          </div>
                          <div class="col-lg-6">
                            <h6>อายุ</h6>
                            <select class="form-control mt-2" name="PBS_Age" >
                              <option value="" selected disabled>เลือกอายุ</option>
                              <option value="อายุ 0-14 ปี">อายุ 0-14 ปี</option>
                              <option value="อายุ 15-24 ปี">อายุ 15-24 ปี</option>
                              <option value="อายุ 25-54 ปี">อายุ 25-54 ปี</option>
                              <option value="อายุ 55 ปีขึ้นไป">อายุ 55 ปีขึ้นไป</option>
                            </select>
                            <br>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-6">
                            <h6>หมวดหมู่การใช้งาน</h6>
                            <input type="checkbox"  name="PBS_Objective" value="อบรม" > อบรม <br>
                            <input type="checkbox"  name="PBS_Objective" value="จัดกิจกรรม/ประชุม/ขอใช้พื้นที่ศูนย์" > จัดกิจกรรม/ประชุม/ขอใช้พื้นที่ศูนย์ <br>
                            <input type="checkbox"  name="PBS_Objective" value="สืบค้นข้อมูล" > สืบค้นข้อมูล <br>
                            <input type="checkbox"  name="PBS_Objective" value="พิมพ์เอกสาร ถ่ายเอกสาร" > พิมพ์เอกสาร ถ่ายเอกสาร 

                            
                            <br>
                          </div>
                          <div class="col-lg-6">
                            <h6>&nbsp;</h6>
                            <input type="checkbox"  name="PBS_Objective" value="การเรียนการสอน" > การเรียนการสอน <br>
                            <input type="checkbox"  name="PBS_Objective" value="สตูดิโอถ่ายรูป" > สตูดิโอถ่ายรูป <br>
                            <input type="checkbox"  name="PBS_Objective" value="นันทนาการ(ดูหนัง ฟังเพลง เล่นโซเชียลมีเดีย)" > นันทนาการ(ดูหนัง ฟังเพลง เล่นโซเชียลมีเดีย) <br>
                            <input type="checkbox" name="PBS_Objective" value="อื่นๆ" id="otherDisabilityCheckbox" onchange="toggleOtherDisabilityInput()"> อื่นๆ <br>
                            <input type="text" name="Other_Disability" id="otherDisabilityInput" style="display:none; margin-top:5px;" placeholder="โปรดระบุ" />

                            <script>
                              function toggleOtherDisabilityInput() {
                              var cb = document.getElementById('otherDisabilityCheckbox');
                              var input = document.getElementById('otherDisabilityInput');
                              input.style.display = cb.checked ? 'block' : 'none';
                              if (!cb.checked) input.value = '';
                              }
                            </script>

                            <br>
                          </div>
                           
                        </div>
                        
                        



            </div>

            <div class="modal-footer">
                
                <input type="hidden" name="Lat" value="<?php echo $Get_Lat; ?>">
                <input type="hidden" name="Lng" value="<?php echo $Get_Lng; ?>">
                            <br>
            <hr>

                <button type="submit" class="btn btn-info" name="Person">บันทึกเข้าใช้บริการ</button>
          </div>
        </form>
        </div>
      </div>
                              <!-- ***** End Modal ***** -->

ร<?php include 'Navbar/Footer.html'; ?>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>