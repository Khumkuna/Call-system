
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
              <!-- <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleAccount == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Account-Create.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Account</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Account.php" class="dropdown-item <?php echo ($current_page == 'Account.php') ? 'active' : ''; ?>">Create Account</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Account-Edit.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Account-Edit.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Edit Account</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Home.php" name="Site" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['manage'])) ? 'active' : ''; ?>">Management (Soon)</a>
                </div>
              </div> -->
                <!-- <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($ACC_RuleSite == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Account-Create.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Site</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Site-Management.php" class="dropdown-item <?php echo ($current_page == 'Site-Management.php') ? 'active' : ''; ?>">Dashboard</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Site-Create.php" class="dropdown-item <?php echo ($current_page == 'Site-Create.php') ? 'active' : ''; ?>">Create Site</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Site-Edit.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Site-Edit.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Edit Site</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Coming_Soon.php" name="Site" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php' && isset($_GET['manage'])) ? 'active' : ''; ?>">Management (Soon)</a>
                </div>
              </div> -->
               <!-- <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleService == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Account-Create.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Management</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Personal Service</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Activity</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Site-Management.php" name="Site" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Site Management</a>
                </div>
              </div> -->
              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Call Center</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Create-Case.php" class="dropdown-item <?php echo ($current_page == 'Create-Case.php') ? 'active' : ''; ?>">Create Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Follow Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">ISP Service</a>
                </div>
              </div>

              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Helpdesk</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Work Order</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Follow Case</a>
                </div>
              </div>

                <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Onsite</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Work Order</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Follow Case</a>
                </div>
              </div>


              <!-- <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php if($Acc_RuleCallcenter == 'Block'){echo 'disabled'; } echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Repair Management</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Create Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Verify Case</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['manage'])) ? 'active' : ''; ?>">Remote Teams</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['manage'])) ? 'active' : ''; ?>">Onsite Teams</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['manage'])) ? 'active' : ''; ?>">ISP Teams</a>
                <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['manage'])) ? 'active' : ''; ?>">View Case</a>
                </div>
              </div> -->

              <div class="scroll-to-section">
                <a href="#" class="nav-link dropdown-toggle <?php echo (in_array($current_page, ['Coming_Soon.php'])) ? 'active' : ''; ?>" data-bs-toggle="dropdown">Report</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                  <a href="Coming_Soon.php" class="dropdown-item <?php echo ($current_page == 'Coming_Soon.php') ? 'active' : ''; ?>">Attendance Upload</a>
                  <li><hr class="dropdown-divider"></li>
                  <a href="Sign-Out.php" name="SignOut" class="dropdown-item <?php echo ($current_page == 'Sign-Out.php' && isset($_GET['edit'])) ? 'active' : ''; ?>">Checklist Device</a>
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
