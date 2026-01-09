<?php
include('Connect.php');

if (isset($_POST['Login']) != "") {
	$Username = $_POST['Username'];
  $Password = $_POST['Password'];

    $hash = sha1($Password);
    $salt = "f#@V)Hu^%Hgfds";
		$hashPassword = sha1($Password . $salt);

   
    $result_Acc=mysqli_query($conn, "SELECT * FROM Account_tb WHERE Acc_Username='$Username' AND Acc_Password='$hashPassword'")or die('Error In Session');
		$Acc_Result=mysqli_fetch_array($result_Acc);
		$AccID = $Acc_Result['Acc_ID'];
		$AccName = $Acc_Result['Acc_Fullname'];
    $AccRule = $Acc_Result['Acc_Rule'];

        if($AccID =="")
        {
              echo "
                <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                      $(document).ready(function(){
                        Swal.fire({
                          title:'ข้อมูลของท่านไม่ถูกต้อง กรุณาตรวจสอบและทำรายการใหม่',
                          icon: 'error',
                          timer: 5000,
                          showConfirmButton: false
                        });
                      });
                      </script>";
                header("refresh:2; url=index.php");
        }
        else{
                
                echo "
                <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                      $(document).ready(function(){
                        Swal.fire({
                          title:'$AccName<br>Welcome To BDE-SYSTEM!',
                          icon: 'success',
                          timer: 5000,
                          showConfirmButton: false
                        });
                      });
                      </script>";

                    if($AccRule == "Admin"){
                      $_SESSION['Acc_ID']=$Acc_Result['Acc_ID'];
                      $_SESSION['Acc_Rule']=$Acc_Result['Acc_Rule'];
                      header("refresh:2; url=Home.php");
                    }
                    else if($AccRule == "User"){
                      $_SESSION['Acc_ID']=$Acc_Result['Acc_ID'];
                      $_SESSION['Acc_Rule']=$Acc_Result['Acc_Rule'];
                       header("refresh:2; url=User-Home.php");
                    }
                    
        }
}
// ***********************************


if(isset($_POST["Create_Account"]))
{

  $Fullname = $_POST['Fullname'];
  $Telephone = $_POST['Telephone'];
  $Email = $_POST['Email'];
  $Line = $_POST['Line'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $CFPassword = $_POST['CFPassword'];
  $rule = 'User';
  $Date_Start = $_POST['Date_Start'];
  $Site = $_POST['Site'];
  $Gender = $_POST['Gender'];

  $Date_Update = date("Y-m-d H:i");


  $DateCreate = $CutMonth.'/'.$CutYear;


$result_CheckUsername=mysqli_query($conn, "SELECT * FROM account_tb WHERE Acc_Username='$Username'");
$CheckUsername_Result=mysqli_fetch_array($result_CheckUsername);
$CheckUser = $CheckUsername_Result['Acc_Username'];

  if($CheckUser != "")
  {
    echo "
    <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
          $(document).ready(function(){
            Swal.fire({
              title:'Username นี้มีผู้ใช้งานแล้ว โปรดเปลี่ยน Username ใหม่อีกครั้ง',
              icon: 'error',
              timer: 5000,
              showConfirmButton: false
            });
          });
          </script>";
    
    header("refresh:2; url=Account-Create.php"); 
  }
  else
  {
      if($Password == $CFPassword)
      {
      
        $Check_ID = "Select * From Account_tb ORDER BY Acc_ID DESC LIMIT 1";
        $result_Check_ID =mysqli_query($conn,$Check_ID);
        $row_Check_ID =mysqli_fetch_array($result_Check_ID);
        $Last_id = $row_Check_ID['Acc_ID'];
        $Rest = substr($Last_id, -4);
        $Insert_id = $Rest + 1;
        $ars = sprintf("%04d", $Insert_id);
        $ref = "Acc-";
        $AccID = $ref.''.$ars;

            
        $hash = sha1($CFPassword);
        $salt = "f#@V)Hu^%Hgfdsa";
        $hashPassword = sha1($CFPassword . $salt);

          $SQL_Add_Account ="INSERT INTO `Account_tb` (`Acc_ID`,`Acc_Fullname`,`Acc_Username`,`Acc_Password`, `Acc-Telephone`, `Acc-Email`, `Acc_Line`, `Acc-Start`, `Acc_Activate`, `Acc_Rule`, `Acc_Site`, `Acc_Gender`,`Acc_Update`) 
          VALUES 
          ('$AccID', '$Fullname','$Username','$hashPassword','$Telephone','$Email','$Line','$Date_Start','Actived','$rule','$Site','$Gender','$Date_Update')";
          if ($conn->query($SQL_Add_Account)==TRUE)
            {
              if($rule == 'User')
            {
              include('Generate_Attendance_MonthNow.php');
              include('Generate_Attendance_MonthNext.php');
            }
                      echo 
                      '<!-- ***** Preloader Start ***** -->
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
                          <!-- ***** Preloader End ***** -->';
                            
                            header("refresh:2; url=Account-Create.php"); 

             }
      }
      else
      {
        echo "
        <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
              $(document).ready(function(){
                Swal.fire({
                  title:'ข้อมูลผิดพลาดโปรดตรวจสอบข้อมูลอีกครั้ง',
                  icon: 'error',
                  timer: 5000,
                  showConfirmButton: false
                });
              });
              </script>";
            
        header("refresh:2; url=Menu_Account_Manage.php");

      }

  }
}

// ***********************************




if(isset($_POST["Create_AccountAdmin"]))
{

  $Fullname = $_POST['Fullname'];
  $Telephone = $_POST['Telephone'];
  $Email = $_POST['Email'];
  $Line = $_POST['Line'];
  $Username = $_POST['Username'];
  $Password = $_POST['Password'];
  $CFPassword = $_POST['CFPassword'];
  $rule = 'Admin';
  $Date_Start = Date('Y-m-d');
  $Site = 'MS-Siam Tower';
  $Gender = $_POST['Gender'];
  $Account_Rule = $_POST['Account_Rule'];
  $Site_Rule = $_POST['Site_Rule'];
  $Person_Rule = $_POST['Person_Rule'];
  $Call_Rule = $_POST['Call_Rule'];
  $Call_Profile = $_POST['Call_Profile'];
  
  $Date_Update = date("Y-m-d H:i");


  $DateCreate = $CutMonth.'/'.$CutYear;


$result_CheckUsername=mysqli_query($conn, "SELECT * FROM account_tb WHERE Acc_Username='$Username'");
$CheckUsername_Result=mysqli_fetch_array($result_CheckUsername);
$CheckUser = $CheckUsername_Result['Acc_Username'];

  if($CheckUser != "")
  {
    echo "
    <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
          $(document).ready(function(){
            Swal.fire({
              title:'Username นี้มีผู้ใช้งานแล้ว โปรดเปลี่ยน Username ใหม่อีกครั้ง',
              icon: 'error',
              timer: 5000,
              showConfirmButton: false
            });
          });
          </script>";
    
    header("refresh:2; url=Account-Create.php"); 
  }
  else
  {
      if($Password == $CFPassword)
      {
      
        $Check_ID = "Select * From Account_tb ORDER BY Acc_ID DESC LIMIT 1";
        $result_Check_ID =mysqli_query($conn,$Check_ID);
        $row_Check_ID =mysqli_fetch_array($result_Check_ID);
        $Last_id = $row_Check_ID['Acc_ID'];
        $Rest = substr($Last_id, -4);
        $Insert_id = $Rest + 1;
        $ars = sprintf("%04d", $Insert_id);
        $ref = "Acc-";
        $AccID = $ref.''.$ars;

            
        $hash = sha1($CFPassword);
        $salt = "f#@V)Hu^%Hgfdsa";
        $hashPassword = sha1($CFPassword . $salt);

          $SQL_Add_Account ="INSERT INTO `Account_tb` (`Acc_ID`,`Acc_Fullname`,`Acc_Username`,`Acc_Password`, `Acc-Telephone`, `Acc-Email`, `Acc_Line`, `Acc-Start`, `Acc_Activate`, `Acc_Rule`, `Acc_Site`, `Acc_Gender`, `Acc_RuleAccount`, `ACC_RuleSite`, `Acc_RuleService`, `Acc_RuleCallcenter`,`Acc_RuleProfile`, `Acc_Update`) 
          VALUES 
          ('$AccID', '$Fullname','$Username','$hashPassword','$Telephone','$Email','$Line','$Date_Start','Actived','$rule','$Site','$Gender','$Account_Rule','$Site_Rule','$Person_Rule','$Call_Rule','$Call_Profile', '$Date_Update')";
          if ($conn->query($SQL_Add_Account)==TRUE)
            {
                      echo 
                      '<!-- ***** Preloader Start ***** -->
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
                          <!-- ***** Preloader End ***** -->';
                            
                            header("refresh:2; url=Account-Create-Admin.php"); 

             }
      }
      else
      {
        echo "
        <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
              $(document).ready(function(){
                Swal.fire({
                  title:'ข้อมูลผิดพลาดโปรดตรวจสอบข้อมูลอีกครั้ง',
                  icon: 'error',
                  timer: 5000,
                  showConfirmButton: false
                });
              });
              </script>";
            
        header("refresh:2; url=Menu_Account_Manage.php");

      }

  }
}

// ***********************************


if(isset($_POST["Create_Site"]))
{

$Site_Name = $_POST['Site_Name'];
$Site_Address = $_POST['Site_Address'];
$province = $_POST['province'];
$amphures = $_POST['amphures'];
$subdistrict = $_POST['subdistrict'];
$Site_Latitude = $_POST['latitude'];
$Site_Longitude = $_POST['longitude'];

 $Check_ID = "Select * From site_tb ORDER BY Site_ID DESC LIMIT 1";
    $result_Check_ID =mysqli_query($conn,$Check_ID);
    $row_Check_ID =mysqli_fetch_array($result_Check_ID);
    $Last_id = $row_Check_ID['Site_ID'];
    $Rest = substr($Last_id, -4);
    $Insert_id = $Rest + 1;
    $ars = sprintf("%04d", $Insert_id);
    $ref = "Si-";
    $SiteID = $ref.''.$ars;


    $SQL_Add_Site ="INSERT INTO `Site_tb` (`Site_ID`,`Site_Name`,`Site_Address`,`Sub_ID`, `Dis_ID`, `Pro_ID`, `Site_Latitude`, `Site_Longitude`) 
      VALUES 
      ('$SiteID', '$Site_Name','$Site_Address','$subdistrict','$amphures','$province','$Site_Latitude','$Site_Longitude')";
      if ($conn->query($SQL_Add_Site)==TRUE)
        {
              echo "
                    <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                    <script>
                          $(document).ready(function(){
                            Swal.fire({
                              title:'สร้างข้อมูลสถานที่จัดตั้งเรียบร้อยแล้ว',
                              icon: 'success',
                              timer: 5000,
                              showConfirmButton: false
                            });
                          });
                          </script>";
                        
                    header("refresh:2; url=Site-Management.php");

        }

  
}

if(isset($_POST["Person"]))
{

  $PBS_Name = $_POST['PBS_Name'];
  $PBS_LastName = $_POST['PBS_LastName'];
  $PBS_Fullname = $PBS_Name.' '.$PBS_LastName;
  $PBS_Tel = $_POST['PBS_Tel'];
  $PBS_Job = $_POST['PBS_Type'];
  $PBS_Gender = $_POST['PBS_Gender'];
  $PBS_Disability = $_POST['PBS_Disability'];

  if($PBS_Disability == "")
  {
    $PBS_Disability = "ไม่มี";
  }

  $PBD_Age = $_POST['PBS_Age'];
  $PBS_Objective = $_POST['PBS_Objective'];

  

  $SiteName = $_POST['SiteName'];

  $PBS_Date = date("Y-m-d H:i");
  $PBS_Month = date("Y-m");

  $Check_ID = "Select * From publicservice_tb ORDER BY PBS_ID DESC LIMIT 1";
    $result_Check_ID =mysqli_query($conn,$Check_ID);
    $row_Check_ID =mysqli_fetch_array($result_Check_ID);
    $Last_id = $row_Check_ID['PBS_ID'];
    $Rest = substr($Last_id, -9);
    $Insert_id = $Rest + 1;
    $ars = sprintf("%09d", $Insert_id);
    $ref = "No-";
    $PBSID = $ref.''.$ars;

    // echo $PBSID."<br>".
    //      $PBS_Fullname."<br>".
    //      $PBS_Tel."<br>".
    //      $PBS_Job."<br>".
    //      $PBS_Gender."<br>".
    //      $PBS_DisPerson."<br>".
    //      $Site_ID."<br>".
    //      $PBS_Date."<br>";

    $SQL_Add_Person ="INSERT INTO `publicservice_tb` (`PBS_ID`,`PBS_Type`,`PBS_Name`,`PBS_Tel`, `PBS_Job`, `PBS_Gender`, `PBS_DisPerson`, `PBS_Age`, `PBS_Objective`,`PBS_Qty`,`Site_ID`,`PBS_DateStart`,`PBS_MonthYear`) 
      VALUES 
      ('$PBSID','Normal', '$PBS_Fullname','$PBS_Tel','$PBS_Job','$PBS_Gender','$PBS_Disability','$PBD_Age','$PBS_Objective','1','$SiteName','$PBS_Date','$PBS_Month')";
  if ($conn->query($SQL_Add_Person)==TRUE)
    {
          echo "
                <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                      $(document).ready(function(){
                        Swal.fire({
                          title:'บันทึกข้อมูลผู้เข้าใช้บริการเรียบร้อยแล้ว',
                          icon: 'success',
                          timer: 5000,
                          showConfirmButton: false
                        });
                      });
                      </script>";

            header("refresh:2; url=index.php");

    }

}

if(isset($_POST["Edit_ProfileAdmin"]))
{
  $Acc_ID = $_POST['Acc_ID'];
  $Acc_Fullname = $_POST['Acc_Fullname'];
  $Acc_ID = $_POST['Acc_ID'];
  $Old_Pass = $_POST['Old_Pass'];


		$salt = "f#@V)Hu^%Hgfdsa";
		$hashPassword_Old = sha1($Old_Pass . $salt);

      $CheckOldpassword = mysqli_query($conn, "SELECT * FROM Account_tb WHERE Acc_ID='$Acc_ID' AND Acc_Password='$hashPassword_Old'");
      if(mysqli_num_rows($CheckOldpassword) > 0)
        {
          $Acc_Status = $_POST['Acc_Status'];


          $Acc_Checked=mysqli_fetch_array($CheckOldpassword);
          if($Profile_Rule == 'Block' || $Profile_Rule == '')
          { 
            $Account_Rule = $Acc_Checked['Acc_RuleAccount'];
            $Site_Rule = $Acc_Checked['ACC_RuleSite'];
            $Person_Rule = $Acc_Checked['Acc_RuleService'];
            $Call_Rule = $Acc_Checked['Acc_RuleCallcenter'];
            $Profile_Rule = 'Block';
          }
          else
          {
              $Account_Rule = $_POST['Account_Rule']; 
              $Site_Rule = $_POST['Site_Rule'];
              $Person_Rule = $_POST['Person_Rule']; 
              $Call_Rule = $_POST['Call_Rule']; 
              $Profile_Rule = $_POST['Profile_Rule']; 
          }

              $New_Pass = $_POST['New_Pass'];
              $CF_Pass = $_POST['CF_Pass'];


              if($New_Pass == $CF_Pass)
              {
                $salt = "f#@V)Hu^%Hgfdsa";
                $hashPassword = sha1($CF_Pass . $salt);

                $SQL_Edit_Profile = "UPDATE `Account_tb` SET `Acc_Fullname`='$Acc_Fullname',`Acc_Password`='$hashPassword',`Acc_Activate`='$Acc_Status',`Acc_RuleAccount`='$Account_Rule',`ACC_RuleSite`='$Site_Rule',`Acc_RuleService`='$Person_Rule',`Acc_RuleCallcenter`='$Call_Rule',`Acc_RuleProfile`='$Profile_Rule' WHERE Acc_ID='$Acc_ID'";
                if ($conn->query($SQL_Edit_Profile)==TRUE)
                  {
                        echo "
                              <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                              <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                              <script>
                                    $(document).ready(function(){
                                      Swal.fire({
                                        title:'แก้ไขข้อมูลเรียบร้อยแล้ว',
                                        icon: 'success',
                                        timer: 5000,
                                        showConfirmButton: false
                                      });
                                    });
                                    </script>";

                          header("refresh:2; url=Sign-Out.php");

                  }
              }
              else
              {
                echo "
                <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                <script>
                      $(document).ready(function(){
                        Swal.fire({
                          title:'รหัสผ่านไม่ตรงกัน โปรดตรวจสอบอีกครั้ง',
                          icon: 'error',
                          timer: 5000,
                          showConfirmButton: false
                        });
                      });
                      </script>";
                
                header("refresh:2; url=Profile-Admin.php"); 
              }
        }
        else
        {
          echo "
          <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script>
                $(document).ready(function(){
                  Swal.fire({
                    title:'รหัสผ่านเดิมไม่ถูกต้อง โปรดตรวจสอบอีกครั้ง',
                    icon: 'error',
                    timer: 5000,
                    showConfirmButton: false
                  });
                });
                </script>";
          
          header("refresh:2; url=Profile-Admin.php"); 
          exit();
        }
}

// *****************************************

if(isset($_POST["Edit_Select_Profile"]))
{
  $AccID = $_POST['AccID'];
  $Acc_Fullname = $_POST['Acc_Fullname'];
  $New_Pass = $_POST['New_Pass'];
  $Acc_Status = $_POST['Acc_Status'];

  $Date_Update = date("Y-m-d H:i");



		$salt = "f#@V)Hu^%Hgfdsa";
		$hashPassword = sha1($New_Pass . $salt);


        $SQL_Edit_Profile = "UPDATE `Account_tb` SET `Acc_Fullname`='$Acc_Fullname',`Acc_Password`='$hashPassword',`Acc_Activate`='$Acc_Status',`Acc_RuleAccount`='$Account_Rule',`ACC_RuleSite`='$Site_Rule',`Acc_RuleService`='$Person_Rule',`Acc_RuleCallcenter`='$Call_Rule',`Acc_RuleProfile`='$Profile_Rule',`Acc_Update`='$Date_Update' WHERE Acc_ID='$AccID'";
        if ($conn->query($SQL_Edit_Profile)==TRUE)
          {
                echo "
                      <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                      <script>
                            $(document).ready(function(){
                              Swal.fire({
                                title:'แก้ไขข้อมูลเรียบร้อยแล้ว',
                                icon: 'success',
                                timer: 5000,
                                showConfirmButton: false
                              });
                            });
                            </script>";

                  header("refresh:2; url=Account-Edit.php");

          }
}

// *****************************************
if(isset($_POST["SaveDate"]))
{
  $PBSID = $_POST['PBSID'];
  $PBSDateStop = date("Y-m-d H:i");

    $SQL_Edit_DateStop = "UPDATE `publicservice_tb` SET `PBS_DateStop`='$PBSDateStop' WHERE PBS_ID='$PBSID'";
        if ($conn->query($SQL_Edit_DateStop)==TRUE)
          {
                echo "
                      <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                      <script>
                            $(document).ready(function(){
                              Swal.fire({
                                title:'บันทึกเวลาออกเรียบร้อยแล้ว',
                                icon: 'success',
                                timer: 5000,
                                showConfirmButton: false
                              });
                            });
                            </script>";

                  header("refresh:2; url=User-Services.php");

          }
}


if(isset($_POST["Create_Activity"]))
{
  $Activity_Name = $_POST['Activity_Name'];
  $Activity_Target = $_POST['Activity_Target'];
  $Activity_Object = $_POST['Activity_Object'];
  $Activity_Remark = $_POST['Activity_Remark'];
  $Activity_Date = $_POST['Activity_Date'];
  $Activity_Time = $_POST['Activity_Time'];
  $Activity_TimeEnd = $_POST['Activity_TimeEnd'];
  $Activity_QTY = $_POST['Activity_QTY'];
  $Activity_Job = $_POST['Activity_Job'];
  $Site_ID = $_POST['Site_ID'];
  $ACC_ID = $_POST['Acc_ID'];

  $CutMY = explode("-", $Activity_Date);
  $CutYear = $CutMY[0];
  $CutMonth = $CutMY[1];
  $Site_MonthYear = $CutMonth.'-'.$CutYear;


  $Date_Create = date("Y-m-d H:i");
  $ACTDate = $Activity_Date . ' ' . $Activity_Time;

  $ACTDateEnd = $Activity_Date . ' ' . $Activity_TimeEnd;

  $Check_ID = "SELECT * FROM activity_tb ORDER BY ACT_ID DESC LIMIT 1";
  $result_Check_ID = mysqli_query($conn, $Check_ID);
  $row_Check_ID = mysqli_fetch_array($result_Check_ID);
  $Last_id = $row_Check_ID['ACT_ID'];
  $Rest = substr($Last_id, -7);
  $Insert_id = $Rest + 1;
  $ars = sprintf("%07d", $Insert_id);
  $ref = "ACT-";
  $ActivityID = $ref . $ars;

  $randomNumber = rand(1000, 9999);
  $Patchs = 'Uploads/Activities/';
  if (!is_dir($Patchs)) mkdir($Patchs, 0777, true);
  $FileArrey = [];

  foreach ($_FILES['Activity_Image']['tmp_name'] as $key => $tmp_name) {
    if ($_FILES['Activity_Image']['error'][$key] === UPLOAD_ERR_OK) {
      $Lastname = pathinfo($_FILES['Activity_Image']['name'][$key], PATHINFO_EXTENSION);
      $FileName = $ActivityID .'-' . $key . '.' . $Lastname;
      $FilePatch = $Patchs . $FileName;
      if (move_uploaded_file($tmp_name, $FilePatch)) {
        $FileArrey[] = $FilePatch;
      }
    }
  }
  
  $Images = implode(',', $FileArrey);






  $SQL_Add_Service = "INSERT INTO `publicservice_tb` (`PBS_ID`,`PBS_Type`,`PBS_Name`,`PBS_Job`, `PBS_Objective`, `PBS_Target`, `PBS_Qty`, `Site_ID`, `PBS_DateStart`, `PBS_DateStop`, `PBS_MonthYear`) 
    VALUES 
    ('$ActivityID', 'Activity','$Activity_Name','$Activity_Job','$Activity_Object','$Activity_Target','$Activity_QTY','$Site_ID','$ACTDate','$ACTDateEnd','$Site_MonthYear')";
      if ($conn->query($SQL_Add_Service) == TRUE) 
        {
          $SQL_Add_Activity = "INSERT INTO `activity_tb` (`ACT_ID`,`ACT_Name`,`ACT_Target`,`ACT_Object`, `ACT_Remark`, `ACT_DateCreate`, `ACT_DateActivity`,`ACT_DateEnd`, `ACT_Job`, `ACT_Qty`, `ACT_Image`, `Site_ID`, `Acc_ID`) 
            VALUES 
            ('$ActivityID', '$Activity_Name','$Activity_Target','$Activity_Object','$Activity_Remark','$Date_Create','$ACTDate','$ACTDateEnd','$Activity_Job','$Activity_QTY','$Images','$Site_ID','$ACC_ID')";
            if ($conn->query($SQL_Add_Activity) == TRUE) {
            echo "
              <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
              <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
              <script>
                  $(document).ready(function(){
                  Swal.fire({
                    title:'สร้างกิจกรรมเรียบร้อยแล้ว',
                    icon: 'success',
                    timer: 5000,
                    showConfirmButton: false
                  });
                  });
                  </script>";
            header('refresh:2; url=User-Activity.php');
          }
        }
  }


  
if(isset($_POST["upload_profile"]))
{
  $ACCID = $_POST['ACCID'];
  $profile_img = $_FILES['profile_img']['name'];
  $target_dir = "Uploads/Profiles";

  if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
  }
  
  $target_file = $target_dir . '/' . $ACCID . '-' . basename($profile_img);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $extensions_arr = array("jpg", "jpeg", "png", "gif");
  if (in_array($imageFileType, $extensions_arr)) {
    if (move_uploaded_file($_FILES['profile_img']['tmp_name'], $target_file)) {
      $SQL_Update_Profile = "UPDATE `Account_tb` SET `Acc_ImgProfile`='$target_file' WHERE Acc_ID='$ACCID'";
      if ($conn->query($SQL_Update_Profile) == TRUE) {
        echo "
          <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
          <script>
              $(document).ready(function(){
              Swal.fire({
                title:'อัปโหลดรูปภาพโปรไฟล์เรียบร้อยแล้ว',
                icon: 'success',
                timer: 5000,
                showConfirmButton: false
              });
              });
              </script>";
        header('refresh:2; url=Profile-User.php');
      }
    }
  } else {
    echo "
      <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
      <script>
          $(document).ready(function(){
          Swal.fire({
            title:'ไฟล์ที่อัปโหลดไม่ถูกต้อง โปรดเลือกไฟล์รูปภาพ (jpg, jpeg, png, gif)',
            icon: 'error',
            timer: 5000,
            showConfirmButton: false
          });
          });
          </script>";
    header('refresh:2; url=Profile-User.php');
  }



}



if(isset($_POST["Edit_ProfileUser"]))
{
  $AccID = $_POST['Acc_ID'];
  $Acc_Fullname = $_POST['Acc_Fullname'];
  $Acc_Telephone = $_POST['Acc_Telephone'];
  $Old_Pass = $_POST['Old_Pass'];
  $New_Pass = $_POST['New_Pass'];
  $CF_Pass = $_POST['CF_Pass'];
  $Date_Update = date("Y-m-d H:i");

  $CheckPass = mysqli_query($conn, "SELECT * FROM Account_tb WHERE Acc_ID='$AccID'");
  $CheckPass_Result=mysqli_fetch_array($CheckPass);
  $Current_Pass = $CheckPass_Result['Acc_Password'];

  if($Old_Pass != "")
  {
      $salt = "f#@V)Hu^%Hgfdsa";
      $hashPassword_Old = sha1($Old_Pass . $salt);

      if($hashPassword_Old != $Current_Pass)
      {
        echo "
        <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
        <script>
              $(document).ready(function(){
                Swal.fire({
                  title:'รหัสผ่านเดิมไม่ถูกต้อง โปรดตรวจสอบอีกครั้ง',
                  icon: 'error',
                  timer: 5000,
                  showConfirmButton: false
                });
              });
              </script>";
        
        header("refresh:2; url=Profile-User.php"); 
        exit();
      }
      else
      {
          if($New_Pass == $CF_Pass)
          {
            $salt = "f#@V)Hu^%Hgfdsa";
            $hashPassword = sha1($CF_Pass . $salt);

            $SQL_Edit_Profile = "UPDATE `Account_tb` SET `Acc_Fullname`='$Acc_Fullname',`Acc-Telephone`='$Acc_Telephone',`Acc_Password`='$hashPassword',`Acc_Update`='$Date_Update' WHERE Acc_ID='$AccID'";
            if ($conn->query($SQL_Edit_Profile)==TRUE)
              {
                    echo "
                          <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
                          <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                          <script>
                                $(document).ready(function(){
                                  Swal.fire({
                                    title:'แก้ไขข้อมูลเรียบร้อยแล้ว',
                                    icon: 'success',
                                    timer: 5000,
                                    showConfirmButton: false
                                  });
                                });
                                </script>";

                      header("refresh:2; url=Sign-Out.php");

              }
          }
          else
          {
            echo "
            <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
                  $(document).ready(function(){
                    Swal.fire({
                      title:'รหัสผ่านไม่ตรงกัน โปรดตรวจสอบอีกครั้ง',
                      icon: 'error',
                      timer: 5000,
                      showConfirmButton: false
                    });
                  });
                  </script>";
            
            header("refresh:2; url=Profile-User.php"); 
            exit();
          }
      }
  }
}

?>

    <link rel="icon" type="image/png" href="assets/images/logo-DE.png"/>
    <!-- Favicon -->
    <link href="assets/images/logo-DE.png" rel="icon">