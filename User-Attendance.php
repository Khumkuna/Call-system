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

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
              <div class="section-heading">
                    <h6>Time Attendance</h6>
                    <h4>
                      <em id="realtime-datetime"></em>
                    </h4>
                    <script>
                      function updateDateTime() {
                        const now = new Date();
                        // Format: วัน/เดือน/ปี ชั่วโมง:นาที:วินาที
                        const options = { year: 'numeric', month: 'long', day: 'numeric' };
                        const dateStr = now.toLocaleDateString('th-TH', options);
                        const timeStr = now.toLocaleTimeString('th-TH');
                        document.getElementById('realtime-datetime').textContent = dateStr + ' ' + timeStr;
                      }
                      setInterval(updateDateTime, 1000);
                      updateDateTime();
                    </script>
              </div>
            </div>
         </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div style="">
                    <div id="cameraContainer" style="position: relative;">
                      <video id="userCamera" width="700px" height="300px" autoplay playsinline style="border-radius: 10px; object-fit: cover; display: none;"></video>
                      <div id="cameraPlaceholder" style="width:700px;height:300px;display:flex;align-items:center;justify-content:center;background:#e0e0e0;border-radius:10px;flex-direction:column;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="64" fill="#888" viewBox="0 0 24 24">
                          <path d="M17 10.5V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3.5l4 4v-11l-4 4z"/>
                        </svg>
                        <div style="color:#888;margin-top:10px;font-size:18px;">ยังไม่ได้เปิดใช้งานกล้อง</div>
                        <div style="color:red;margin-top:10px;font-size:18px;">กรุณาเปิดใช้งานกล้องก่อนทำการลงเวลาเข้างาน</div>
                      </div>
                    </div>
                    <p id="locationInfo" style="margin-bottom:0;color:rgb(206, 206, 206); font-family: sans-serif;"></p>
                    <div style="margin-top:0; color: rgb(116, 116, 116); font-family: sans-serif;">อุปกรณ์ที่ใช้งาน : <span id="deviceInfo" style="color:rgb(206, 206, 206);"></span></div>
                    <script>
                      function getDeviceInfo() {
                      const ua = navigator.userAgent;
                      let deviceText = '';

                      // Check for mobile
                      if (/android/i.test(ua)) {
                        deviceText = 'อุปกรณ์ที่ใช้งาน : โทรศัพท์มือถือ (Android)';
                      } else if (/iphone|ipad|ipod/i.test(ua)) {
                        deviceText = 'อุปกรณ์ที่ใช้งาน : โทรศัพท์มือถือ (iOS)';
                      } else if (/windows phone/i.test(ua)) {
                        deviceText = 'อุปกรณ์ที่ใช้งาน : โทรศัพท์มือถือ (Windows Phone)';
                      } else {
                        // Assume desktop
                        let browser = 'ไม่ทราบ';
                        if (/chrome|crios/i.test(ua) && !/edge|edg|opr|opera/i.test(ua)) {
                        browser = 'Chrome';
                        } else if (/firefox|fxios/i.test(ua)) {
                        browser = 'Firefox';
                        } else if (/safari/i.test(ua) && !/chrome|crios|opr|opera|edg|edge/i.test(ua)) {
                        browser = 'Safari';
                        } else if (/edg/i.test(ua)) {
                        browser = 'Microsoft Edge';
                        } else if (/opr|opera/i.test(ua)) {
                        browser = 'Opera';
                        } else if (/msie|trident/i.test(ua)) {
                        browser = 'Internet Explorer';
                        }
                        deviceText = ' คอมพิวเตอร์ ( ' + browser + ' )';
                      }

                      document.getElementById('deviceInfo').textContent = deviceText;
                      }
                      document.addEventListener('DOMContentLoaded', getDeviceInfo);
                    </script>
                    <script>
                      function showLocation() {
                      if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                        document.getElementById('locationInfo').textContent =
                          'Latitude: ' + position.coords.latitude + ', Longitude: ' + position.coords.longitude;
                        }, function(error) {
                        document.getElementById('locationInfo').textContent =
                          'ไม่สามารถดึงตำแหน่งที่ตั้งได้ (' + error.message + ')';
                        });
                      } else {
                        document.getElementById('locationInfo').textContent =
                        'เบราว์เซอร์ของคุณไม่รองรับการระบุตำแหน่ง';
                      }
                      }
                      document.addEventListener('DOMContentLoaded', showLocation);
                    </script>
                  </div>
                  <style>
                    .circle-button {
                      width: 300px;
                      height: 300px;
                      border-radius: 50%;
                      border: none;
                      font-size: 23px;
                      color: #fff;
                      background:rgb(150, 23, 167);
                      box-shadow: 0 4px 12px rgba(0,0,0,0.12);
                      cursor: pointer;
                      transition: background 0.2s;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                      margin-bottom: 10px;
                    }
                    .circle-button:disabled, .circle-button.disabled {
                      background: #bdbdbd !important;
                      color: #fff !important;
                      cursor: not-allowed;
                    }
                    .checkin-message {
                      color: #d32f2f;
                      font-size: 15px;
                      margin-top: 8px;
                      text-align: center;
                    }
                    .checkin-btn-wrapper {
                      display: flex;
                      flex-direction: column;
                      align-items: flex-end;
                      justify-content: flex-end;
                      height: 100%;
                    }
                    @media (max-width: 991px) {
                      .checkin-btn-wrapper {
                        align-items: center;
                        margin-top: 15px;
                      }
                    }
                  </style>
                  <script>
                    let cameraReady = false;
                    const video = document.getElementById('userCamera');
                    const placeholder = document.getElementById('cameraPlaceholder');

                    function updateCheckinButtonState() {
                      const btn = document.getElementById('checkinButton');
                      const msg = document.getElementById('checkinMsg');
                      if (cameraReady) {
                        btn.disabled = false;
                        btn.classList.remove('disabled');
                        msg.style.display = 'none';
                      } else {
                        btn.disabled = true;
                        btn.classList.add('disabled');
                        msg.style.display = '';
                      }
                    }

                    async function startCamera() {
                      try {
                        const stream = await navigator.mediaDevices.getUserMedia({
                          video: { facingMode: "user" },
                          audio: false
                        });
                        if ("srcObject" in video) {
                          video.srcObject = stream;
                        } else {
                          video.src = window.URL.createObjectURL(stream);
                        }
                        video.style.display = '';
                        placeholder.style.display = 'none';
                        cameraReady = true;
                        updateCheckinButtonState();
                      } catch (err) {
                        video.style.display = 'none';
                        placeholder.style.display = 'flex';
                        cameraReady = false;
                        updateCheckinButtonState();
                      }
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                      // Add the check-in button and message to the right-image area
                      const wrapper = document.createElement('div');
                      wrapper.className = 'checkin-btn-wrapper';

                      const btn = document.createElement('button');
                      btn.className = 'circle-button disabled';
                      btn.id = 'checkinButton';
                      btn.textContent = 'ลงเวลาเข้างาน';
                      btn.disabled = true;

                      const msg = document.createElement('div');
                      msg.className = 'checkin-message';
                      msg.id = 'checkinMsg';
                      msg.textContent = '';
                      msg.style.display = '';

                      wrapper.appendChild(btn);
                      wrapper.appendChild(msg);

                      document.querySelector('.right-image').appendChild(wrapper);

                      startCamera();
                    });
                  </script>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <!-- ปุ่มจะถูกเพิ่มโดย JS -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

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
        <div class="container">
          <div class="row">
            <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="section-heading">
                <h6>Time Attendance</h6>
                <h4><em><?php echo $Monthnow ?></em></h4>
              <div class="line-dec"></div>
            </div>
          </div>
          <div class="col-lg-12 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="blog-post">
              <div class="thumb">
                <table class="attendance-table">
                  <thead>
                    <tr>
                      <th>วัน</th>
                      <th>วันที่</th>
                      <th>เวลาเข้างาน</th>
                      <th>เวลาออกงาน</th>
                      <th>Image-In</th>
                      <th>Image-Out</th>
                      <th>อุปกรณ์</th>
                      <th>พิกัด</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                          $MonthNow = date('m/Y');
                          $Count = 0;
                          $sql_Attendance="Select * from attendance_tb Where Att_MonthYear = '$MonthNow' and Acc_ID = '$Acc_ID'";
                          $query_Attendance=mysqli_query($conn,$sql_Attendance);
                          if ($query_Attendance && $query_Attendance->num_rows > 0) 
                          {
                            while ($data_Attendance=mysqli_fetch_array($query_Attendance))                       
                            { 
                              if($data_Attendance['Att_Day'] == "Monday"){$Att_Day ="จันทร์";}
                              if($data_Attendance['Att_Day'] == "Tuesday"){$Att_Day ="อังคาร";}
                              if($data_Attendance['Att_Day'] == "Wednesday"){$Att_Day ="พุธ";}
                              if($data_Attendance['Att_Day'] == "Thursday"){$Att_Day ="พฤหัสบดี";}
                              if($data_Attendance['Att_Day'] == "Friday"){$Att_Day ="ศุกร์";}
                              if($data_Attendance['Att_Day'] == "Saturday"){$Att_Day ="เสาร์";}
                              if($data_Attendance['Att_Day'] == "Sunday"){$Att_Day ="อาทิตย์";}

                              $rowStyle = '';
                              if ($data_Attendance['Att_Day'] == "Saturday" || $data_Attendance['Att_Day'] == "Sunday") {
                              $rowStyle = ' style="color:red;"';
                              }

                              echo '<tr' . $rowStyle . '>';
                              echo '<td' . $rowStyle . '>'. htmlspecialchars($Att_Day) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Attendance['Att_Date']) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Attendance['Att_TimeIn']) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Attendance['Att_TimeOut']) . '</td>';
                                // Show an icon to view image if Att_ImgIn exists
                                if (!empty($data_Attendance['Att_ImgIn'])) {
                                $imgUrl = htmlspecialchars($data_Attendance['Att_ImgIn']);
                                echo '<td' . $rowStyle . '>
                                  <a href="' . $imgUrl . '" target="_blank" title="ดูรูปภาพ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#6c63ff" viewBox="0 0 24 24" style="vertical-align:middle;">
                                    <path d="M21 19V7a2 2 0 0 0-2-2h-2.586l-1.707-1.707A1 1 0 0 0 14 3h-4a1 1 0 0 0-.707.293L7.586 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                                    </svg>
                                  </a>
                                </td>';
                                } else {
                                echo '<td' . $rowStyle . '></td>';
                                }
                              // Show an icon to view image if Att_ImgOut exists
                              if (!empty($data_Attendance['Att_ImgOut'])) {
                                $imgUrlOut = htmlspecialchars($data_Attendance['Att_ImgOut']);
                                echo '<td' . $rowStyle . '>
                                  <a href="' . $imgUrlOut . '" target="_blank" title="ดูรูปภาพ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#6c63ff" viewBox="0 0 24 24" style="vertical-align:middle;">
                                    <path d="M21 19V7a2 2 0 0 0-2-2h-2.586l-1.707-1.707A1 1 0 0 0 14 3h-4a1 1 0 0 0-.707.293L7.586 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                                    </svg>
                                  </a>
                                </td>';
                              } else {
                                echo '<td' . $rowStyle . '></td>';
                              }
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Attendance['Att_LogDevice']) . '</td>';
                              echo '<td' . $rowStyle . '>' . htmlspecialchars($data_Attendance['Att_Location']) . '</td>';
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>   
</div>


<?php include('asset_User/Footer.php'); ?>
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>