<?php
include('connect.php');

// Get province id from request
if (isset($_POST['function']) && $_POST['function'] == 'province') {
  	$id = $_POST['id'];
  	$sql = "SELECT * FROM districts WHERE province_id='$id'";
  	$query = mysqli_query($conn, $sql);
  	echo '<option value="" selected disabled>-กรุณาเลือกอำเภอ-</option>';
  	foreach ($query as $value) {
  		echo '<option value="'.$value['id'].'">'.$value['name_in_thai_Dis'].'</option>';
  		
  	}
  }

  if (isset($_POST['function']) && $_POST['function'] == 'amphures') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM subdistricts WHERE district_id='$id'";
    $query = mysqli_query($conn, $sql);
    echo '<option value="" selected disabled>-กรุณาเลือกตำบล-</option>';
    foreach ($query as $value2) {
		// echo '<option>'.$id.'</option>';
      echo '<option value="'.$value2['id'].'">'.$value2['name_in_thai_Sub'].'</option>';
    }
  }


   if (isset($_POST['function']) && $_POST['function'] == 'subdistrict') {
    $id = $_POST['id'];
    $sql = "SELECT * FROM subdistricts WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
        foreach ($query as $value3) {

	  echo '<input type="hidden" id="longitude_input" name="longitude" placeholder="Longitude" class="form-control mb-2" value="'.$value3['longitude'].'">';
	  echo '<input type="hidden" id="latitude_input" name="latitude" placeholder="Latitude" class="form-control mb-2" value="'.$value3['latitude'].'">';
    }
  }

?>