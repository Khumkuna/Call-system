<?php 
include 'Navbar/Head.html';
echo "
<script src='https://code.jquery.com/jquery-3.6.4.js'></script>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
<script>
      $(document).ready(function(){
        Swal.fire({
          title:'ออกจากระบบเรียบร้อย',
          icon: 'success',
          timer: 5000,
          showConfirmButton: false
        });
      });
      </script>";

  session_start(); 
  session_destroy();
  unset($_SESSION['ACC_ID']);
  header("refresh:2; url=index.php");
  exit();


 
?>