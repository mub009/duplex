<!-- Bootstrap core CSS -->

  <br>

<div class="row animated fadeInUp" style="margin-left: 100px;">
                <div class="col-sm-12 col-lg-9">
                    <div class="row">


<font color="black">
<?php


$limit = 10;  

//if(isset($_GET['page']))
//{
  // $page =$_GET['page']; 
//}
//else
//{
  //$page=1;
//}

$start_from = ($page-1) * $limit;  

$query = "SELECT pk_int_reg_id,vchr_reg_applicant,  `vchr_profile_image_image1` ,  `vchr_reg_education` , vchr_religion,pk_vchr_profile_id
FROM  `tbl_profile_image` 
JOIN  `tbl_registration` ON  `ref_int_register_id` = pk_int_reg_id
JOIN tbl_religion ON pk_int_religion_id = ref_int_religion_id
ORDER BY pk_int_reg_id ASC LIMIT $start_from, $limit";  

if(!$rs_result=mysqli_query($conkey,$query))  
{
   echo "error";
}
?>  

                    <table width="846" border="1" cellspacing="0">
                        <tr bgcolor="#FFFFCC">
                            <td width="108" align="center">Serial NO</td>
                            <td width="138" align="center">Name</td>
                            <td width="156" align="center">Education</td>
                            <td width="163" align="center">Religion</td>
                            <td width="129" align="center">Photo</td>
                            <td width="126" align="center">Delete</td>
                        </tr>

<?php  

while($data=mysqli_fetch_array($rs_result))

{
?>  
           <tr>
            <td align="center"><?php echo $data['pk_vchr_profile_id']; ?></td>
            <td align="center"><?php echo $data['vchr_reg_applicant']; ?></td>
            <td align="center"><?php echo $data['vchr_reg_education']; ?></td>
            <td align="center"><?php echo $data['vchr_religion']; ?></td>
            <td align="center"><img src="../<?php echo $data['vchr_profile_image_image1']; ?>" style="height: 50px;width: 50px;" /></td>
            <td align="center"><a href="delete.php?delete=<?php echo $data['pk_int_reg_id']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>

            </tr>  
<?php  
} 
?>  
</tbody>  
</table>  


<?php  


$sql="SELECT count(pk_int_reg_id),vchr_reg_applicant,  `vchr_profile_image_image1` ,  `vchr_reg_education` , vchr_religion,pk_vchr_profile_id
FROM  `tbl_profile_image` 
JOIN  `tbl_registration` ON  `ref_int_register_id` = pk_int_reg_id
JOIN tbl_religion ON pk_int_religion_id = ref_int_religion_id
ORDER BY pk_int_reg_id ASC";  

$rs_result = mysqli_query($conkey,$sql);  

$row = mysqli_fetch_row($rs_result);  

$total_records = $row[0];  

$total_pages = ceil($total_records / $limit);  


?>

<nav aria-label="Page navigation example">
  <ul class="pagination">


<?php

$pagLink='<li class='.'"'.'page-item'.'"'.'>';

for ($i=1; $i<=$total_pages; $i++) 
{  
            echo $values =$pagLink."<a class=".'"'.'page-link'.'"'." href='home.php?person_list=".$i."'>".$i."</a></li>";  
};  

  

?>
</ul></nav>


<!--
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
-->

</div>
</div>
</div>

</font>