<?php
 
 require_once('../dbconnection.php');
$conkey=conkey();

 if(isset($_GET['delete']))
 {

$id=$_GET['delete'];
$query="DELETE FROM tbl_registration WHERE pk_int_reg_id=$id";
$query1="DELETE FROM tbl_profile_image WHERE ref_int_register_id=$id";

if(mysqli_query($conkey,$query))
{
	if(mysqli_query($conkey,$query1))
	{
		
		header("location:home.php?person_list");
		//echo "successfully delete this profile";

	}
	else
	{
      echo "fail";
	}

}
	
else

		{
			echo "fail";
		}

 }

 ?>