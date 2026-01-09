
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="User-Home.php" class="logo">
              <img src="assets/images/logo-DE.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="User-Home.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'User-Home.php' ? 'active' : ''; ?>">Home</a></li>
              <li class="scroll-to-section"><a href="User-Attendance.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'User-Attendance.php' ? 'active' : ''; ?>">การบันทึกเวลา</a></li>
              <li class="scroll-to-section"><a href="User-Services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'User-Services.php' ? 'active' : ''; ?>">การบริการ</a></li>
              <li class="scroll-to-section"><a href="User-Activity.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'User-Activity.php' ? 'active' : ''; ?>">การจัดกิจกรรม</a></li>
              <li class="scroll-to-section"><a href="#" class="<?php echo basename($_SERVER['PHP_SELF']) == 'Broken-Equipment.php' ? 'active' : ''; ?>">ข้อมูลอุปกรณ์เสีย</a></li> 
              <li class="scroll-to-section"><a href="#" class="<?php echo basename($_SERVER['PHP_SELF']) == 'Broken-Equipment.php' ? 'active' : ''; ?>">เอกสาร</a></li>    

              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
              </button> -->
               <div class="scroll-to-section">
                    <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><?php echo $Login_Name ?></a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="Profile-User.php" class="dropdown-item">Profile</a>
                        <li><hr class="dropdown-divider"></li>
                        <a href="Sign-Out.php" name="SignOut" class="dropdown-item">Logout</a>
                    </div>
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
