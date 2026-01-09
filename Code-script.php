<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $('#province').change(function() {
    var id_province = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax_db.php",
      data: {id:id_province,function:'province'},
      success: function(data){
          $('#amphures').html(data); 
          
          // $('#district').val(' ');  

      }
    });
  });

  $('#amphures').change(function() {
    var id_district = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax_db.php",
      data: {id:id_district,function:'amphures'},
      success: function(data){
          $('#subdistrict').html(data);  
      }
    });
  });

  $('#subdistrict').change(function() {
    var id_district = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax_db.php",
      data: {id:id_district,function:'subdistrict'},
      success: function(data){
          $('#latitude').html(data);
          $('#longitude').html(data);

      }
    });
  });

  //  $('#districts').change(function() {
  //   var id_districts= $(this).val();

  //     $.ajax({
  //     type: "POST",
  //     url: "ajax_db.php",
  //     data: {id:id_districts,function:'districts'},
  //     success: function(data){
  //         $('#zip_code').val(data)
  //     }
  //   });
  
  // });
</script>

<!-- 
<script>
                  $(document).ready(function() {
                    // จังหวัด -> อำเภอ
                    $('#province').on('change', function() {
                      var province_id = $(this).val();
                      if(province_id) {
                        $('#district').prop('disabled', false);
                        $.ajax({
                          type: 'POST',
                          url: 'get_districts.php',
                          data: {province_id: province_id},
                          success: function(html) {
                            $('#district').html(html);
                            $('#subdistrict').html('<option value="">เลือกตำบล</option>').prop('disabled', true);
                          }
                        });
                      } else {
                        $('#district').html('<option value="">เลือกอำเภอ</option>').prop('disabled', true);
                        $('#subdistrict').html('<option value="">เลือกตำบล</option>').prop('disabled', true);
                      }
                    });

                    // อำเภอ -> ตำบล
                    $('#district').on('change', function() {
                      var district_id = $(this).val();
                      if(district_id) {
                        $('#subdistrict').prop('disabled', false);
                        $.ajax({
                          type: 'POST',
                          url: 'get_subdistricts.php',
                          data: {district_id: district_id},
                          success: function(html) {
                            $('#subdistrict').html(html);
                          }
                        });
                      } else {
                        $('#subdistrict').html('<option value="">เลือกตำบล</option>').prop('disabled', true);
                      }
                    });
                  });
                  </script> -->