<?php
if($_SESSION['Acc_ID']!="" && $_SESSION['Acc_Rule']=="User")
{
$Acc_ID = $_SESSION['Acc_ID'];
  
$result_Acc=mysqli_query($conn, "SELECT * FROM Account_tb WHERE Acc_ID='$Acc_ID'")or die('Error In Session');
$Acc_Result=mysqli_fetch_array($result_Acc);
$Login_Name = $Acc_Result['Acc_Fullname'];
$Login_User = $Acc_Result['Acc_Username'];
$Login_Password = $Acc_Result['Acc_Password'];
$Login_Rule = $Acc_Result['Acc_Rule'];

$Login_Site = $Acc_Result['Acc_Site'];


}
else
{
  echo "
  <script src='https://code.jquery.com/jquery-3.6.4.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script>
      $(document).ready(function(){
        Swal.fire({
          title:'Session ผิดปกติโปรด Login เข้าระบบใหม่อีกครั้ง',
          icon: 'error',
          timer: 5000,
          showConfirmButton: false
        });
      });
      </script>";
  session_start(); 
  session_destroy();
  unset($_SESSION['Acc_ID']);
  header("refresh:4; url=index.php");
  exit();


}
if($_SESSION['Acc_ID']=="")
{  
    echo "
<script src='https://code.jquery.com/jquery-3.6.4.js'></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script>
      $(document).ready(function(){
        Swal.fire({
          title:'Session หมดอายุ โปรด Login เข้าระบบใหม่อีกครั้ง',
          icon: 'error',
          timer: 5000,
          showConfirmButton: false
        });
      });
      </script>";
  session_start(); 
  session_destroy();
  unset($_SESSION['Acc_ID']);
  header("refresh:4; url=index.php");
  exit();
}




?>