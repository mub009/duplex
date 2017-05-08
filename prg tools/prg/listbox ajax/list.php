
//this format only this code not running bz here data base not allowed 


//its ajax through sent data without loading page

 <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
  $.ajax({
  type: "POST",
  url: "read_caste.php",
  data:'caste_id='+val,
  success: function(data){
    //alert("wrk");
    $("#Caste-list").html(data);
  }
  });
}
</script>


//example this code part its not wrking

 <tr>
      <td>Religion</td>
        <td> <select class="custom-select mb-2 mr-sm-2 mb-sm-0" onChange="getState(this.value);" name="religion">
    <option value="select">Select</option>

    <?php 

    $conkey=conkey();
   
    $query="SELECT * FROM tbl_religion";
   
    $res=mysqli_query($conkey,$query);
   
    while($religion=mysqli_fetch_assoc($res))
    {
      //print_r($religion);

    ?>
    
    <option value="<?php echo $religion['pk_int_religion_id']; ?>"><?php echo $religion['vchr_religion']; ?></option>
    <?php

    }

    ?>
    
      </select></td>
    </tr>


<tr>
      <td>Caste</td>
        <td>
        <select id="Caste-list" name="caste">
    <option value="">Select State</option>
    </select>



        </td>
    </tr>