<?php
include("dbconnection.php");

//$db_handle = new DBController();
$conkey=conkey();
if(!empty($_POST["caste_id"]))

 {
	$query ="SELECT * FROM `tbl_caste` WHERE `fk_int_religion_id`=" . $_POST["caste_id"];

	$res = mysqli_query($conkey,$query);
	

?>

<?php
   
    while($caste=mysqli_fetch_array($res))
    {
    	
    ?>
    
  <option value="<?php echo $caste["pk_int_caste_id"]; ?>"><?php echo $caste["vchr_caste_name"]; ?></option>

    <?php

    }

    ?>


	<?php
}
?>