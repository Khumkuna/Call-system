
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="Home.php" class="logo"  width="50px" height="50px">
              <img src="assets/images/logo-DE.png" alt="">    
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <?php
              // Get current file name
              $current_page = basename($_SERVER['PHP_SELF']);
              ?>
              <li class="scroll-to-section">
                <a href="Home.php" class="<?php echo ($current_page == 'Home.php') ? 'active' : ''; ?>">Home</a>
              </li>
              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Call Center</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Create-Case.php" class="dropdown-item <?php echo ($current_page == 'Create-Case.php') ? 'active' : ''; ?>">Create Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Follow-Case.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Follow-Case.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Follow Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Coming_Soon.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">ISP Service</a>
                </div>
              </div>

              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Helpdesk</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Helpdesk-Manage.php" class="dropdown-item <?php echo ($current_page == 'Helpdesk-Manage.php') ? 'active' : ''; ?>">Manage Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Coming_Soon.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Follow Case</a>
                </div>
              </div>

                <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Onsite</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Work Order</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Coming_Soon.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Follow Case</a>
                </div>
              </div>

              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Report</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Attendance Upload</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Coming_Soon.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Checklist Device</a>
                </div>
              </div>

              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php echo (in_array($current_page, ['Profile.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown"><?php echo $Login_Name ?> </a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Profile-Admin.php" class="dropdown-item <?php echo ($current_page == 'Profile-Admin.php') ? 'active' : ''; ?>">Profile</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item">Logout</a>
                </div>
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
