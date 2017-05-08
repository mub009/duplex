<?php




//idmaker is function and return id

function idmaker($tblname,$conkey)
			{

			  $query="SELECT * FROM  $tblname";
		      $res=mysqli_query($conkey,$query);
		      $count=1+mysqli_num_rows($res);
		      return $count;
			}


//its rename any of file 

function rename_file($image_type,$num,$model)
				{

						$extension=end(explode("/",$image_type));
						return $new_image_name=$model.$num.'.'.$extension;	
				}




//file uploading 


function file_data($conkey,$tblname,$path,$model,$file_name)
		{

			$profile_tmp=$_FILES[$file_name]['tmp_name'];
			$profile_type=$_FILES[$file_name]['type'];

			

			//calling idmaker and return id
			
			$id=idmaker($tblname,$conkey);
		 

			//calling rename function and return name file

			$file=rename_file($profile_type,$id,$model);

			move_uploaded_file($profile_tmp,$path.$file);

			return $file;
			
		}



//query operations

function select_asc_query($conkey,$tblname,$field_name,$value,$start_from,$limit)

	{
		if($field_name=='null')
		{

		//with condition
			//echo "1";

		$query="select * from $tblname limit $start_from,$limit";
		
		}
		else
		{
		//	echo "2";
	
		$query="select * from $tblname where $field_name=$value limit $start_from,$limit";
	
		}

		if(!$res=mysqli_query($conkey,$query))
		{
			echo "select data fail occur";
		}
		else
		{
			return $res;
		}
	
	}



function select_desc_query($conkey,$tblname,$field_name,$value,$start_from,$limit)
	{

		if($value=='null')
		{
		$query="select * from $tblname order by $field_name desc limit $start_from,$limit";

	    }
	    else
	    {

	   	$query="select * from $tblname where $field_name=$value order by $field_name desc limit $start_from,$limit";

	    }

	      if(!$res=mysqli_query($conkey,$query))
		  {
			echo "select data fail occur";
		  }
		   else
		  {
			
			return $res;
		  }
		  

	}


	function normal_query($conkey,$query)
	{

		if(!$res=mysqli_query($conkey,$query))
		{
			echo "fail";
		}
		else
		{
			return $res;
		}

	}





function delete_query($id,$tblname,$field_name,$conkey)
   {

	
	$query="delete from $tblname where $field_name=$id";
	
	if(!mysqli_query($conkey,$query))
	{
		
		echo "fail";
	}
  else
   {
    //echo $where_page_go;
    return true;
   }


}


//query operation close


 


	function delete_file($file_path)
  {

    //echo $img_path;
	
    if (!unlink($file_path))
     {
     echo ("Error deleting $file_path");
     }
    else
     {
         echo ("Deleted $file_path");
     }
	

  }






	//category deletion when time delete all sub parts

 function sub_category_delete($fk_table_name,$fk_field_name,$id,$conkey,$sub_category_img_path,$sub_category_pdf_path,$pk_int_sub_id,$sub_image_path,$sub_pdf_path)
 { 

   $query="select * from $fk_table_name where $fk_field_name=$id";
   
   if(!$res=mysqli_query($conkey,$query))
   {

   	echo "fail";

   }

   while ($data=mysqli_fetch_array($res))
   {
   
   	//image
   	//pdf
   	

   	$delete_id=$data[$pk_int_sub_id];

    $img_path=$sub_category_img_path.$data[$sub_image_path];

   	//delete_image($img_path);
   	
   	$pdf_path=$sub_category_pdf_path.$data[$sub_pdf_path];
   	
   	//$img_path=$sub_category_img_path.$data['vchr_product_pdf_path'];
   	
   	delete_pdf($pdf_path);

   	//delete_image($img_path);

   	$tblname=$fk_table_name;
   	
   	$field_name=$fk_field_name;
//   	$where_page_go='product_category_view';

   	delete_path($id,$tblname,$field_name,$conkey,$img_path,$where_page_go='wrk');

   	
   	//database



   }

}






//timecreation with input type time


function timecreate($time)
   
   {

 if($time>12)
     
     	{

       $from_time= new DateTime('12:00:00 ');

     		//create time object
   		
   		$time= new DateTime($time);

   		//diff between two time

   		$actual_time =$time->diff($from_time);

   		//and store string value

   		$final_time=$actual_time->format("%H:%I:%S");
   		
   		//with added PM condition

   		return $final_time=$final_time." "."PM";

      	  }
   
   	  else
   
   	      {
   	   
   	   	return $time;
   	      
   	      }


   }









?>