<?php

$AccName = $Acc_Result['Acc_Fullname'];
$AccPhone = $Acc_Result['Acc_Phone'];
$AccEmail = $Acc_Result['Acc_Email'];
$AccUser = $Acc_Result['Acc_User'];
$AccRole = $Acc_Result['Acc_Rule'];

$Acc_Password = $Acc_Result['Acc_Password'];



// if(isset($_POST['Edit_Name']))
// {
//   $Name_Edit = $_POST['Name_Edit'];
// }


// if(isset($_POST['Save_Name']))
// {

//   $Name_Edit = $_POST['Name_Edit'];
  
//   $SQL_Account = "UPDATE Account_tb SET Acc_Fullname='$Name_Edit' WHERE Acc_ID='$Acc_ID'";
//   if ($conn->query($SQL_Account)==TRUE) 
//   {
//     echo "
//             <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
//             <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//             <script>
//                   $(document).ready(function(){
//                     Swal.fire({
//                       title:'แก้ไขรายการเรียบร้อย',
//                       icon: 'success',
//                       timer: 5000,
//                       showConfirmButton: false
//                     });
//                   });
//                   </script>";
                
//             header("refresh:2; url=Profile.php");
//   }



// }



// if(isset($_POST['Edit_Email']))
// {
//   $Email_Edit = $_POST['Name_Edit'];
// }


// if(isset($_POST['Save_Email']))
// {

//   $Email_Edit = $_POST['Name_Edit'];
  
//   $SQL_Account = "UPDATE Account_tb SET Acc_Email='$Email_Edit' WHERE Acc_ID='$Acc_ID'";
//   if ($conn->query($SQL_Account)==TRUE) 
//   {
//     echo "
//             <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
//             <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//             <script>
//                   $(document).ready(function(){
//                     Swal.fire({
//                       title:'แก้ไขรายการเรียบร้อย',
//                       icon: 'success',
//                       timer: 5000,
//                       showConfirmButton: false
//                     });
//                   });
//                   </script>";
                
//             header("refresh:2; url=Profile.php");
//   }



// }


// if(isset($_POST['Edit_Phone']))
// {
//   $Phone_Edit = $_POST['Phone_Edit'];
// }


// if(isset($_POST['Save_Phone']))
// {

//   $Phone_Edit = $_POST['Phone_Edit'];
  
//   $SQL_Account = "UPDATE Account_tb SET Acc_Phone='$Phone_Edit' WHERE Acc_ID='$Acc_ID'";
//   if ($conn->query($SQL_Account)==TRUE) 
//   {
//     echo "
//             <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
//             <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//             <script>
//                   $(document).ready(function(){
//                     Swal.fire({
//                       title:'แก้ไขรายการเรียบร้อย',
//                       icon: 'success',
//                       timer: 5000,
//                       showConfirmButton: false
//                     });
//                   });
//                   </script>";
                
//             header("refresh:2; url=Profile.php");
//   }



// }

// if(isset($_POST['Change_Password']))
// {
//     $AccID = $_POST['ID'];
//     $Cerrect = $_POST['Cerrect'];
//     $New_Password = $_POST['New_Password'];
//     $CM_Password = $_POST['CM_Password'];




//   $salt = "f#@V)Hu^%Hgfds";
//   $Cerrect = sha1($Cerrect . $salt);



//   $result_CheckPass=mysqli_query($conn, "SELECT * FROM Account_tb WHERE Acc_ID='$AccID'");
//     $CheckPass_Result=mysqli_fetch_array( $result_CheckPass);
//     $AccPassword = $CheckPass_Result['Acc_Password'];

//   if($AccPassword == $Cerrect)
//   {

//     $salt_New = "f#@V)Hu^%Hgfds";
//     $New_Password = sha1($New_Password . $salt_New);


//     $salt_CMNew = "f#@V)Hu^%Hgfds";
//     $CM_Password = sha1($CM_Password . $salt_CMNew);


//     if($CM_Password == $New_Password)
//     {
//             $SQL_Account = "UPDATE Account_tb SET Acc_Password='$CM_Password' WHERE Acc_ID='$AccID'";
//             if ($conn->query($SQL_Account)==TRUE) 
//             {

//                 echo "
//                         <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
//                         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//                         <script>
//                             $(document).ready(function(){
//                                 Swal.fire({
//                                 title:'เปลี่ยนรหัสผ่านเรียบร้อย',
//                                 icon: 'success',
//                                 timer: 5000,
//                                 showConfirmButton: false
//                                 });
//                             });
//                             </script>";
                            
//                         session_start(); 
//                         session_destroy();
//                         unset($_SESSION['Acc_ID']);
//                         header("refresh:2; url=Login.php");
//                         exit();
//             }
//     }
//     else
//     {
//         echo "
//         <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
//         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//         <script>
//             $(document).ready(function(){
//                 Swal.fire({
//                 title:'รหัสผ่านไม่ตรง',
//                 icon: 'error',
//                 timer: 5000,
//                 showConfirmButton: false
//                 });
//             });
//             </script>";
//             header("refresh:2; url=Profile.php");
//     }
//   }
//   else
//     {
//         echo "
//         <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
//         <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
//         <script>
//             $(document).ready(function(){
//                 Swal.fire({
//                 title:'Cerrent Password ไม่ถูกต้อง',
//                 icon: 'error',
//                 timer: 5000,
//                 showConfirmButton: false
//                 });
//             });
//             </script>";
//             header("refresh:2; url=Profile.php");
//     }
// }

// ?>



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
    
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
        <div class="row g-5 p-5">
            <br>
            <h1 align="center" style="text-color:blue">Your profile</h1>
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="row g-3">
                    </div>



                            <div class="row g-3">
                                <table width="100%">
                                    <tr>
                                        <td colspan="2">
                                        <a href=""><img src="img/profile/User_Blank.png" style="width:100px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a><br>
                                        <br><hr>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td width="70%"><a><strong>Name</strong></a><br></td>
                                        <td rowspan="3" width="30%" align="right">
                                            <form action="" method="POST">
                                            <input type="text"  hidden name="Name_Edit" style="height: 55px;"value="<?php echo $AccName; ?>">
                                            <input type="text"  hidden name="ID_Edit" style="height: 55px;"value="<?php echo $Acc_ID; ?>">
                                            <button class="btn btn-secondary" <?php if($Name_Edit != ""){ echo "hidden"; } ?> name="Edit_Name">Edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <?php if($Name_Edit != ""){ ?>
                                                <div class="row g-3">

                                                <form action="" method="POST">
                                                    <input type="text" class="form-control"   name="Name_Edit" style="height: 55px;"value="<?php echo $AccName; ?>"><br>
                                                    <a href="" class="btn btn-light" role="button">Cancel</a>
                                                    <button class="btn btn-info" name="Save_Name">Save</button>
                                                </form>
                                               
                                                <?php }else{ ?>
                                                    <a><?php echo $AccName ?></a>
                                            <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <hr></td>
                                    </tr>



                                    <tr>
                                        <td width="70%"><a><strong>Email address</strong></a><br></td>
                                        <td rowspan="3" width="30%" align="right">
                                            <form action="" method="POST">
                                            <input type="text"  hidden name="Email_Edit" style="height: 55px;"value="<?php echo $AccEmail; ?>">
                                            <button class="btn btn-secondary" <?php if($Email_Edit != ""){ echo "hidden"; } ?> name="Edit_Email">Edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                            <?php if($Email_Edit != ""){ ?>
                                                <div class="row g-3">

                                                <form action="" method="POST">
                                                    <input type="email" class="form-control"   name="Email_Edit" style="height: 55px;"value="<?php echo $AccEmail; ?>"><br>
                                                    <a href="" class="btn btn-light" role="button">Cancel</a>
                                                    <button class="btn btn-info" name="Save_Email">Save</button>
                                                </form>
                                               
                                                <?php }else{ ?>
                                                    <a><?php echo $AccEmail ?></a>
                                            <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <hr></td>
                                    </tr>

                                    <tr>
                                        <td width="70%"><a><strong>Phone Number</strong></a><br></td>
                                        <td rowspan="3" width="30%" align="right">
                                            <form action="" method="POST">
                                            <input type="text"  hidden name="Phone_Edit" style="height: 55px;"value="<?php echo $AccPhone; ?>">
                                            <button class="btn btn-secondary" <?php if($Phone_Edit != ""){ echo "hidden"; } ?> name="Edit_Phone">Edit</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td colspan="2">
                                            <?php if($Phone_Edit != ""){ ?>
                                                <div class="row g-3">

                                                <form action="" method="POST">
                                                    <input type="text" class="form-control"   name="Phone_Edit" style="height: 55px;"value="<?php echo $AccPhone; ?>"><br>
                                                    <a href="" class="btn btn-light" role="button">Cancel</a>
                                                    <button class="btn btn-info" name="Save_Phone">Save</button>
                                                </form>
                                               
                                                <?php }else{ ?>
                                                    <a><?php echo $AccPhone ?></a>
                                            <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <hr></td>
                                    </tr>



                                    <tr>
                                        <td width="70%"><a><strong>User</strong></a><br></td>
                                        <td rowspan="3" width="30%" align="right">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a><?php echo $AccUser ?></a></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <hr></td>
                                    </tr>
                                </table>
                                
                               

                              


                                <a><strong>Role</strong></a><br>
                                <a><?php echo $AccRole ?></a>
                                <hr>
                                <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-secondary">Change Password</button>

                              
                            </div>
                </div>
            </div>
           
        </div>
    </div>


    <?php include("asset_User/Footer.php"); ?>

   
  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    

    
    <div id="id01" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-light"> 
            <span onclick="document.getElementById('id01').style.display='none'" 
            class="w3-button  w3-display-topright">&times;</span>
            <br>
            <h2>Change Password</h2>
            <br>
            </header>
            <form action="" method="POST">
            <div class="w3-container">
            <p>Cerrent Password</p>
            <input name="Cerrect" type="password" class="form-control" value="">
            <p>New Password</p>
            <input name="New_Password" type="password" class="form-control" value="">
            <p>Confirm Password</p>
            <input name="CM_Password" type="password" class="form-control" value="">
            <hr>
            <input type="text" class="form-control" hidden  name="ID" style="height: 55px;"value="<?php echo $Acc_ID; ?>"><br>

            <button class="btn btn-secondary" name="Change_Password"> Save </button>
            
            </form>
            </div>
            <br>
        </div>
    </div>
</body>

</html>

